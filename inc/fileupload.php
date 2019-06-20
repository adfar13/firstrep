<?php
class fileUpload
{
    private $File;
    function __construct($File){
        $this->File=$File;
        echo $this->File["name"];
    }
}
?>