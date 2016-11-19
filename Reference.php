<?php
function pv($param){
  $param = 'Editted value';
}

function pr(&$param){
  $param = 'Editted Value';
}

echo '<h3>Passing by Reference vs Passing by Value</h3>';
echo 'When passing a value through a function, and then modifying it, the value remains unchanged:<br>';
$txt = 'Original Value';
pv($txt);
echo $txt;

echo '<br><br>However, when you pass a reference to a value through a function, and then modigying it, the value is changed:<br>';
pr($txt);
echo $txt;
?>