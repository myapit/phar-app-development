<?php

class SampleClass {

    var $sName;
    var $sVersion;

    // constructor
    function SampleClass() {
        $this->sName = 'I am Sample class';
        $this->sVersion = '1.0.0';
    }

    function getAnyContent() {
        return '<h1>Hello World from Sample class</h1>';
    }

    function getContent2() {
        return '<h2>Get content 2</h2>';
    }

}

?>
