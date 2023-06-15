<?php

// https://www.devmedia.com.br/listando-arquivos-de-pastas-com-php/17716

$path = "./phpoffice";
$diretorio = dir($path);

echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio -> read()){
echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
}
$diretorio -> close();
?>