<?php

namespace app\special\controller;

require(WEB_ROOT.'/vendor/html2pdf/vendor/autoload.php');
require(WEB_ROOT.'/vendor/system/PHPExcel/Classes/PHPExcel.php');

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
//            $html = '<h1>aaa</h1>';
            $html2pdf->setDefaultFont('simhei');
            $html2pdf->writeHTML($html);
            // 保存文件
            $type = 1;
            switch($type){
                case 1:
                    $filename = 'code';
                    break;
                case 2:
                    $filename = 'code'.'180';
                    break;
                default:
                    break;
            }
            $date = '20180521';
            $sum = '1280.00';
            $sum = sprintf("%.2f",$sum);
            $tempArr = explode('.',$sum);
            $sumStr = $tempArr[0].$tempArr[1];
            $savePath = WEB_ROOT.'/public/special/sb/pdf/'.$date.$sumStr.'/'.$filename;
            $html2pdf->output($savePath.'.pdf','I');
//            $html2pdf->output($savePath,'FI');
            die('FINISH');
        }else{
            return $this->error('上传文件不存在！');
        }
    }

    /**
     * 获取EXCEL表格
     * @return bool
     */
    public function getExcelInfo(){
        $objPHPExcel = new PHPExcel();
        die('ok');
        if(1){
            $objPHPExcel = new PHPExcel();
//            $filename = "E:/www/demo/phpexcel/test01.xlsx";//要读取的excel文件

            if (!file_exists($this->_uploadFile)) {
                exit("not found.\n");
            }

            $reader = PHPExcel_IOFactory::createReader('Excel2007'); //设置以Excel5格式(Excel97-2003工作簿)
            $reader->setLoadAllSheets();


            $PHPExcel = $reader->load($filename); // 载入excel文件

            $sheetNum = $PHPExcel->getSheetCount();       // 获取工作表的个数
            $sheetNames = $PHPExcel->getSheetNames();       // 获取所有工作表的名字数组
//echo $sheetNum.'-';
//print_r($sheetNames);
            for($i=0;$i<$sheetNum;$i++){
                $sheet = $PHPExcel->getSheet($i); // 读取第一個工作表
            }
            echo '<pre/>';
// 获取表格所有数组
            print_r($sheet->toArray());
            die('finish');
        }
    }

    /**
     * 保存上传文件
     * @return bool
     */
    private function saveUploadFile(){
        // 接收临时文件
        $newName = date('YmdH').rand(1000,9999).'_'.$_FILES['excel_one']['name'];
        // 设计文件保存路径
        $newFilePath = WEB_ROOT.DIRECTORY_SEPARATOR.'public'.DIRECTORY_SEPARATOR.DIRECTORY_SEPARATOR.'uploadfiles'.DIRECTORY_SEPARATOR.$newName;
        // 保存文件
        $this->_uploadFile = $newFilePath;
        return move_uploaded_file($_FILES['excel_one']['tmp_name'],$newFilePath);
    }
}