<?php

$result=$_POST['result'];
$number=$_POST['number'];
$operator1=$_POST['operator1'];
$operator=$_POST['operator'];
if ($operator1=="+") {
    $result+=$number;
} elseif ($operator1=="-") {
    $result-=$number;
} elseif ($operator1=="*") {
    $result*=$number;
} elseif ($operator1=="/") {
    $result/=$number;
} elseif ($operator1=="=") {
    if ($operator=='+') {
        $result+=$number;
    } elseif ($operator=='-') {
        $result-=$number;
    } elseif ($operator=='*') {
        $result*=$number;
    } elseif ($operator=='/') {
        $result/=$number;
    }
}
$arr = array('operator' => $operator,'res'=>$result);
$display=json_encode($arr);
echo $display;
?>