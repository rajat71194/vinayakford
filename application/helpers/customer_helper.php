<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function getProspect($id = 0) {
    $CI = & get_instance();
    $CI->load->model('ford_model');
    $data = 100001;
    if ($id) {
        $data = $data + (int) $id;
        $res = $CI->ford_model->rowUpdate('customers', array('prospect_id' => $data), array('id' => $id));
    }
    return $data;
}
function getEmployee(){
$CI = & get_instance();
  $CI->load->model('ford_model');
$employees =  $CI->ford_model->getData('employees',"*");
return $employees;
}
function excelGenerate($cell_name="A1:I1",$users = array(),$name="csvGenerate.xls"){
         $CI = & get_instance();


    //load our new PHPExcel library
        $CI->load->library('EXcel');
        //activate worksheet number 1
        $CI->excel->setActiveSheetIndex(0);
        //name the worksheet
        $CI->excel->getActiveSheet()->setTitle('Users list');
        // read data to active sheet
        $CI->excel->getActiveSheet()->fromArray($users);

        $CI->excel->getActiveSheet()->getStyle("A1")->getFont()->setBold(true);
        $CI->excel->getActiveSheet()->getStyle($cell_name)->getFont()->setBold(true);
        $filename=$name; //save our workbook as this file name

        header('Content-Type: application/vnd.ms-excel'); //mime type

        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

        header('Cache-Control: max-age=0'); //no cache


        $objWriter = PHPExcel_IOFactory::createWriter($CI->excel, 'Excel5');

        //force user to download the Excel file without writing it to server's HD
        $objWriter->save('php://output');


}
