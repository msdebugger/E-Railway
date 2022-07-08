<?php
$time = time();
$aperiod = "MONTHLY";

if($aperiod == "MONTHLY" || $rperiod == "MONTHLY"){
    $time_stamp = 1550880000;
    $expire = strtotime('-1 month');
}elseif($aperiod == "QUARTERLY" || $rperiod == "QUARTERLY"){
    $time_stamp = 1549670400;
    $expire = strtotime('-3 month');
}

if($time_stamp <= $expire){
    echo "OLDER";
}else{
    echo "not older";
}
?>
<html>
<br>
<?php echo "current Time : $time"; ?><br>
<?php echo "Time Stamp: $time_stamp"; ?><br>
<?php echo "Expire: $expire"; ?><br>

<html>