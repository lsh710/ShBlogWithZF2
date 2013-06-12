<?php
namespace Admin\Controller;

use Zend\View\Model\ViewModel;
use PHPQRCode\QRcode;
use Common\Util\QRCodeUtil;

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



class SettingController extends BaseController
{
	public function indexAction()
	{
		return new ViewModel();
	}
	
        public function qrcodeAction()
        {
	//	QRcode::png('http://www.lsh710.com',PROJECT_ROOT_PATH.'public/images/qrcode.png');
	//	echo '<img src="'.$this->getRequest()->getBaseUrl().'/images/qrcode.png" />';
        //      QRcode::png('http://www.lsh710.com');
                QRCodeUtil::png('http://wsdl7.yunpan.cn/share.php?method=Share.download&fhash=119f736a936d62396d7dd71ff8fb7d187d69d3d9&xqid=292847647&fname=%E6%AC%A2%E8%BF%8E%E4%BD%BF%E7%94%A8360%E4%BA%91%E7%9B%98.doc&fsize=211968&nid=13707612463962017&cqid=3a590c4c1f0360d1a6050ce00cb878d3&st=04fa5b8d62757d8d6831d72b0d2e7ab7&e=1371180968');
		exit;
        }
 }
