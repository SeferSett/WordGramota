<?php

require 'vendor/autoload.php';
require_once 'array.php';



$templateProcessor = new PhpOffice\PhpWord\TemplateProcessor('player-template.docx');

if ($arr1[0]['place'] == 1 and $arr1[1]['place'] == 2 and $arr1[2]['place'] == 3) {

    $templateProcessor->setValue('PLACE1', $arr1[0]['place']);
    $templateProcessor->setValue('FIO1', $arr1[0]['fio']);
    $templateProcessor->setValue('TEAM1', $arr1[0]['team']);
    $templateProcessor->setValue('COMPETITION1', $arr1[0]['competition']);
    $templateProcessor->setValue('DIVISION1', $arr1[0]['division']);
    $templateProcessor->setValue('AGE_CATEGORY1', $arr1[0]['age-category']);
    $templateProcessor->setValue('WEIGHT_CATEGORY1', $arr1[0]['weight_category']);
    $templateProcessor->setValue('DATE1', $arr1[0]['date']);


    $templateProcessor->setValue('PLACE2', $arr1[1]['place']);
    $templateProcessor->setValue('FIO2', $arr1[1]['fio']);
    $templateProcessor->setValue('TEAM2', $arr1[1]['team']);
    $templateProcessor->setValue('COMPETITION2', $arr1[1]['competition']);
    $templateProcessor->setValue('DIVISION2', $arr1[1]['division']);
    $templateProcessor->setValue('AGE_CATEGORY2', $arr1[1]['age-category']);
    $templateProcessor->setValue('WEIGHT_CATEGORY2', $arr1[1]['weight_category']);
    $templateProcessor->setValue('DATE2', $arr1[1]['date']);


    $templateProcessor->setValue('PLACE3', $arr1[2]['place']);
    $templateProcessor->setValue('FIO3', $arr1[2]['fio']);
    $templateProcessor->setValue('TEAM3', $arr1[2]['team']);
    $templateProcessor->setValue('COMPETITION3', $arr1[2]['competition']);
    $templateProcessor->setValue('DIVISION3', $arr1[2]['division']);
    $templateProcessor->setValue('AGE_CATEGORY3', $arr1[2]['age-category']);
    $templateProcessor->setValue('WEIGHT_CATEGORY3', $arr1[2]['weight_category']);
    $templateProcessor->setValue('DATE3', $arr1[2]['date']);

    header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: attachment;filename="dogovor.docx"');
    header('Cache-Control: max-age=0');
    $templateProcessor->saveAs('php://output');
}



