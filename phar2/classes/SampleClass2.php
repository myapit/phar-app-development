<?php

class SampleClass2 extends SampleClass {

    // constructor
    function SampleClass2() {
        $this->sName = 'I am Sample class 2';
        $this->sVersion = '1.0.2';
    }

    function getAnyContent() {
        return '<h1>Hello World from Sample class 2</h1>';
    }

}

?>
