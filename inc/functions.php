<?php 
    $protocol = strpos(strtolower($_SERVER['SERVER_PROTOCOL']),'https') === FALSE ? 'http' : 'https';
    $host     = $_SERVER['HTTP_HOST'];
    $baseUrl  = $protocol . '://' . $host; 

	function render($template, $baseUrl, $param) {
        $title = '';
        extract($param);
        include($template);
    }
    /*function render($template, $param = array()) {
        extract($param);
        include($_SERVER['DOCUMENT_ROOT'].'/inc/'.$template);
        //etc.
    }*/

 ?>