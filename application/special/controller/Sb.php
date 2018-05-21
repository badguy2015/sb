<?php

namespace app\special\controller;

require WEB_ROOT.'/vendor/html2pdf/vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

Class Sb extends \think\Controller
{
    private $_uploadFile;
    /**
     * 上传EXCEL
     * @return mixed
     */
    public function index(){
        return $this->fetch();
    }

    /**
     * 创建PDF
     */
    public function createPdf(){
        if(1){
            $html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', array(13,10,13,0),false);
            ob_start();
            require_once(WEB_ROOT . '/public/res/special/sb/taxlist.php');
            $html = ob_get_clean();
            $html2pdf->setDefaultFont('simhei');
            $html2pdf->writeHTML($html);
            $html2pdf->output();
            die('FINISH');
        }else{
            return $this->error('上传文件不存在！');
        }
    }

    /**
     * 获取EXCEL表格
     * @return bool
     */
    private function getExcelInfo(){
        // 接收临时文件
        $newName = date('YmdH').rand(1000,9999).'_'.$_FILES['excel_one']['name'];
        // 设计文件保存路径
        $newFilePath = WEB_ROOT.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.'uploadfiles'.DIRECTORY_SEPARATOR.$newName;
        // 保存文件
        $this->_uploadFile = $newFilePath;
        return move_uploaded_file($_FILES['excel_one']['tmp_name'],$newFilePath);
    }
}