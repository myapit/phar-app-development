<?php

$sLibraryPath = 'lib/SampleLibrary.phar';

// when library already compiled - we will using it
require_once('phar://'.$sLibraryPath.'.gz');

// demonstration of work
$oClass1 = new SampleClass();
echo $oClass1->getAnyContent();
echo '<pre>';
print_r($oClass1);
echo '</pre>';

$oClass2 = new SampleClass2();
echo $oClass2->getAnyContent();
echo $oClass2->getContent2();
echo '<pre>';
print_r($oClass2);
echo '</pre>';

?>
