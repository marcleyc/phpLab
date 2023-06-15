<?php

//Incluir a biblioteca PhpWord usando o Composer
require_once './vendor/autoload.php';

//Instanciar o PhpWord
$phpWord = new \PhpOffice\PhpWord\PhpWord();

//Instanciar o método do PhpWord
$section = $phpWord->addSection();

//Atribuir as configurações para o arquivo e o texto
//Criar o texto que será impresso no arquivo Word
$fontStyle = new \PhpOffice\PhpWord\Style\Font();
$fontStyle->setBold(false);
$fontStyle->setName('Arial');
$fontStyle->setSize(19);
$myTextElement = $section->addText('Conteúdo do arquivo');
$myTextElement->setFontStyle($fontStyle);

//Gerar o arquivo Word com PHP
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('celke.docx');