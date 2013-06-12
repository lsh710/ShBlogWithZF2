<?php
namespace Common\Util;
use PHPQRCode\QRcode;
use PHPQRCode\QRencode;
use PHPQRCode\QRimage;
use PHPQRCode\Constants;
use PHPQRCode\QRtools;


$QR_BASEDIR = PROJECT_ROOT_PATH.'vendor/PHPQRCode'.DIRECTORY_SEPARATOR;
define('QR_CACHEABLE', true);                                                               // use cache - more disk reads but less CPU power, masks and format templates are stored there
define('QR_CACHE_DIR', PROJECT_ROOT_PATH.'vendor/'.'cache'.DIRECTORY_SEPARATOR);  // used when QR_CACHEABLE === true
define('QR_LOG_DIR', PROJECT_ROOT_PATH);                                // default error logs dir

define('QR_FIND_BEST_MASK', true);                                                          // if true, estimates best mask (spec. default, but extremally slow; set to false to significant performance boost but (propably) worst quality code
define('QR_FIND_FROM_RANDOM', false);                                                       // if false, checks all masks available, otherwise value tells count of masks need to be checked, mask id are got randomly
define('QR_DEFAULT_MASK', 2);                                                               // when QR_FIND_BEST_MASK === false

define('QR_PNG_MAXIMUM_SIZE',  1024);


// Supported output formats

define('QR_FORMAT_TEXT', 0);
define('QR_FORMAT_PNG',  1);


class QRCodeUtil extends QRcode{

    public static function pngWithLogo($text,$logo_path, $outfile = false, $level = Constants::QR_ECLEVEL_L, $size = 3, $margin = 4, $saveandprint=false)
    {
        $enc = YunPanQRencode::factory($level, $size, $margin);
        //print_r($enc);exit;
        return $enc->encodePNGWithLogo($text,$logo_path, $outfile, $saveandprint=false);
    }
}

class YunPanQRencode extends QRencode{
    //----------------------------------------------------------------------
    public static function factory($level = Constants::QR_ECLEVEL_L, $size = 3, $margin = 4)
    {
        $enc = new YunPanQRencode();
        $enc->size = $size;
        $enc->margin = $margin;

        switch ($level.'') {
            case '0':
            case '1':
            case '2':
            case '3':
                    $enc->level = $level;
                break;
            case 'l':
            case 'L':
                    $enc->level = Constants::QR_ECLEVEL_L;
                break;
            case 'm':
            case 'M':
                    $enc->level = Constants::QR_ECLEVEL_M;
                break;
            case 'q':
            case 'Q':
                    $enc->level = Constants::QR_ECLEVEL_Q;
                break;
            case 'h':
            case 'H':
                    $enc->level = Constants::QR_ECLEVEL_H;
                break;
        }

        return $enc;
    }
   //----------------------------------------------------------------------
    public function encodePNGWithLogo($intext,$logoPath, $outfile = false,$saveandprint=false)
    {
        try {
            ob_start();
            $tab = $this->encode($intext);
            $err = ob_get_contents();
            ob_end_clean();

            if ($err != '')
                QRtools::log($outfile, "ERROR: " . $err);

            $maxSize = (int)(Constants::QR_PNG_MAXIMUM_SIZE / (count($tab)+2*$this->margin));

            $QR = YunPanQRimage::memoryPNG($tab, $outfile, min(max(1, $this->size), $maxSize), $this->margin,$saveandprint);
	    $logo = imagecreatefromstring(file_get_contents($logoPath));
            $QR_width = imagesx($QR);
	    $QR_height = imagesy($QR);
	    $logo_width = imagesx($logo);
	    $logo_height = imagesy($logo);
	    $logo_qr_width = $QR_width / 10;
	    $scale = $logo_width / $logo_qr_width;
	    $logo_qr_height = $logo_height / $scale;
	    $from_width = ($QR_width - $logo_qr_width) / 2;
	    imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);

		
            Header("Content-type: image/png");
            ImagePng($QR);
            ImageDestroy($QR);
        } catch (Exception $e) {
            echo $e->getMessage();
            die();

            QRtools::log($outfile, $e->getMessage());
        }
    }
}


class YunPanQRimage extends QRimage{
    //----------------------------------------------------------------------
    public static function memoryPNG($frame, $filename = false, $pixelPerPoint = 4, $outerFrame = 4,$saveandprint=FALSE)
    {
        return parent::image($frame, $pixelPerPoint, $outerFrame);
    }

}

?>
