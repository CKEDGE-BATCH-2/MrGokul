<?php
$input = "racecar";
if(strrev($input)==($input)){
    echo "It is a palindrome.<br><br>";
}
else{
    echo "It is not a palindrome.<br><br>";
}
?>
<?php
$array1 = array("radar","baby","racecar","hello");
foreach($array1 as $inputname)
if(strrev($inputname)==($inputname)){
    echo "It is a Palindrome<br>";
}
else{
    echo "It is not a Palindrome<br>";
}
?>