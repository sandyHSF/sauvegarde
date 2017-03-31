<?php
function multi($val){
    for ($i=1;$i<=10;$i++){
    echo $val.'*'.$i.'='.$i*$val.'<br>';
    }
}
for ($i=2;$i<=5;$i++){
echo multi($i);
}
?>
