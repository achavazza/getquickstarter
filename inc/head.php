<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Quickstarter</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta name="description" content="Construye tu proximo proyecto HTML5 responsive adaptado a tablets y móbiles en minutos - Sistema de Grid HTML5 "  />
     <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="http://achavazza.github.io/getquickstarter/favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/quickstarter.min.css" />

    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
    <?php /* 
    <script type="text/javascript" src="//code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript" src="js/search.js"></script>
    <script type="text/javascript" src="js/jquery.snippet.min.js"></script>
    <link rel="stylesheet" href="js/jquery.snippet.min.css" />
    */ ?>
    <script type="text/javascript" src="js/utils.js"></script>
    
    <?php /* 
    <link rel="stylesheet" href="js/prism.css" />
    <link rel="stylesheet" href="http://achavazza.github.io/getquickstarter/css/quickstarter.min.css" />
    */ ?>
</head>
<body>
<?php 
function showCode($string) {
    $output = '<pre class="line-numbers"><code class="language-markup">'
            . htmlentities($string)
            . '</code></pre>';
    return $output;
}
 ?>