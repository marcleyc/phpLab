<?php
//Incluir a biblioteca PhpWord usando o Composer
require_once './vendor/autoload.php';

//Instanciar o PhpWord
$phpWord = new \PhpOffice\PhpWord\PhpWord();


use PhpOffice\PhpWord\Autoloader;
use PhpOffice\PhpWord\Settings;

$templateProcessor = new \PhpOffice\PhpWord\TemplateProcessor('exemplo.docx');
$search_replace_array = array(
    'nome'=>'Marcley', #inside a MS Word file ${msword_hello} will change to Hello
    'id'=>'10' #${msword_world} will change to World
);

$templateProcessor->setValue('Banco', 'Santander');
$templateProcessor->setValue('id', '10');
$templateProcessor->setValue('nome', 'Marcley');


$templateProcessor->saveAs('novo.docx');
