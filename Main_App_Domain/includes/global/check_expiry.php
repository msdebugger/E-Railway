<?php
$expiry_apply = $mysqli->query("SELECT * FROM apply_request WHERE uid = $uid AND done = 1 ORDER BY id DESC LIMIT 1");
$aexp = $expiry_apply->fetch_assoc();
$apply_period = $aexp['period'];
$apply_rtime  = $aexp['rtime'];



$expiry_renew = $mysqli->query("SELECT * FROM renew_request WHERE uid = $uid AND done = 1 ORDER BY id DESC LIMIT 1");
$rexp = $expiry_renew->fetch_assoc();
$renew_period = $rexp['period'];
$renew_rtime  = $rexp['rtime'];

$expired = 1;

if($apply_period == "MONTHLY"){
    $time_stamp = $apply_rtime;
    $expire = strtotime('-1 month');
        if($time_stamp <= $expire){
            $expired = 1;
        }else{
            $expired = 0;
            $issue_date = date('d M Y', $apply_rtime);
            $unlock_date = date('d M Y h:i:sa', strtotime("+1 month", $apply_rtime));
        }
}if($apply_period == "QUARTERLY"){
    $time_stamp = $apply_rtime;
    $expire = strtotime('-3 month');
        if($time_stamp <= $expire){
            $expired = 1;
        }else{
            $expired = 0;
            $issue_date = date('d M Y', $apply_rtime);
            $unlock_date = date('d M Y h:i:sa', strtotime("+3 month", $apply_rtime));
        }
}if($renew_period == "MONTHLY"){
    $time_stamp = $renew_rtime;
    $expire = strtotime('-1 month');
        if($time_stamp <= $expire){
            $expired = 1;
        }else{
            $expired = 0;
            $issue_date = date('d M Y', $renew_rtime);
            $unlock_date = date('d M Y h:i:sa', strtotime("+1 month", $renew_rtime));
        }
}if($renew_period == "QUARTERLY"){
    $time_stamp = $renew_rtime;
    $expire = strtotime('-3 month');
        if($time_stamp <= $expire){
            $expired = 1;
        }else{
            $expired = 0;
            $issue_date = date('d M Y', $renew_rtime);
            $unlock_date = date('d M Y h:i:sa', strtotime("+3 month", $renew_rtime));
        }
}
?>