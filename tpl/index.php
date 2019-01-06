<?php 

require_once("vendor/autoload.php");

use Rain\Tpl;
// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/"
);
Tpl::configure( $config );

$tpl = new Tpl;
// assign a variable
$tpl->assign( "name", "Orazio learing PHP" );
$tpl->assign( "version", PHP_VERSION );
$tpl->assign( "outros", "qualquer variável criada no index.php aparece no arquivo html criado!!!" );

// draw the template
$tpl->draw( "index" );

 ?>