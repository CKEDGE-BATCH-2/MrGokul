<?php
class consdest
    {
        function __construct()
        {
            echo "This is constructor ";
            $this->name = "using Class and Object !... ";
        }
        function __destruct()
        {
            echo "and destructor ". $this->name;
        }
    }
$obj = new consdest();
?>