<?php
namespace Admin\Controller;

use Zend\View\Model\ViewModel;
use PHPQRCode\QRcode;
use Common\Util\QRCodeUtil;




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
                QRCodeUtil::pngWithLogo('http://wsdl7.yunpan.cn/share.php?method=Share.download&fhash=119f736a936d62396d7dd71ff8fb7d187d69d3d9&xqid=292847647&fname=%E6%AC%A2%E8%BF%8E%E4%BD%BF%E7%94%A8360%E4%BA%91%E7%9B%98.doc&fsize=211968&nid=13707612463962017&cqid=3a590c4c1f0360d1a6050ce00cb878d3&st=04fa5b8d62757d8d6831d72b0d2e7ab7&e=1371180968',PROJECT_ROOT_PATH.'public/images/avatar.jpg');
		exit;
        }
 }
