<?php
$pharFile = 'app.phar';
if(file_exists($pharFile)) {
    unlink($pharFile);
}
if(file_exists($pharFile . '.gz')){
    unlink($pharFile . '.gz');
}

$p = new Phar($pharFile);
$p->buildFromDirectory('wordpress/');
$p->setDefaultStub('index.php', '/index.php');
$p->compress(Phar::GZ);
echo "$pharFile successfully created";

?>
