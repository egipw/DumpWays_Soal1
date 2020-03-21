<?php
$string = 'purwakarta';
$array = array('o');
for($i=0;$i<count($array);$i++) {
    $string = str_replace("a",$array[$i],$string);
}
echo $string;
?>