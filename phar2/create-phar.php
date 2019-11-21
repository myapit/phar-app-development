<?php

$sLibraryPath = 'lib/SampleLibrary.phar';

// we will build library in case if it not exist
////if (! file_exists($sLibraryPath)) {
    unlink($sLibraryPath);
    unlink($sLibraryPath.".gz");
    ini_set("phar.readonly", 0); // Could be done in php.ini

    $oPhar = new Phar($sLibraryPath); // creating new Phar
    $oPhar->startBuffering();
    $stub = $oPhar->createDefaultStub('cli.php');
    $oPhar->setStub($stub);
    //$oPhar->setDefaultStub('cli.php','classes/index.php');//, 'classes/main.php'); // pointing main file which require all classes
    //$oPhar->setDefaultStub('main.php', 'classes/main.php'); // pointing main file which require all classes
    $oPhar->buildFromDirectory('classes/'); // creating our library using whole directory
    $oPhar->stopBuffering();
    $oPhar->compress(Phar::GZ); // plus - compressing it into gzip
///}

?>
