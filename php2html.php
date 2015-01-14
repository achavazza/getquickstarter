<?php
ob_start();

//define some variables
//$id = 10
//echo $file;
//http://localhost/mascota-busca/php2html.php?file=index
$file = $_GET["file"];
$phpfile  = $file .'.php';
$htmlfile = $file .'.html';

if(!file_exists($htmlfile)){

	include ($phpfile);

	//(the php contains a variable called id)
	//there's also some html in it, so there are PHP blocks and raw html blocks

	$fp = fopen($htmlfile, 'w+') ;
	fwrite($fp, ob_get_contents());
	fclose($fp);
} else {
	die('existe!!! seguro de sobreescribir?');
}

ob_end_flush(); 

?>