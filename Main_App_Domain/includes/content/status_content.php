<?php
$status = $mysqli->query("SELECT * FROM apply_request WHERE uid= $uid AND done = 0");
                    $apply = $status->fetch_assoc();
                    $afrmup 		=   $apply['frmup'];
                    $atime_s 		=   $apply['time_stamp'];
                    $averify 		=   $apply['verify'];
                    $avtime 		=   $apply['vtime'];
                    $aprocess 		=   $apply['process'];
                    $aptime 		=   $apply['ptime'];
					$areject 		=   $apply['reject'];
					$areject_reason =	$apply['reject_reason'];
                    $adone 			=	$apply['done'];

$status2 = $mysqli->query("SELECT * FROM renew_request WHERE uid= $uid AND done = 0");
                    $renew = $status2->fetch_assoc();
                    $rfrmup         =	$renew['frmup'];
                    $rtime_s        =	$renew['time_stamp'];
                    $rverify        =	$renew['verify'];
                    $rvtime         =	$renew['vtime'];
                    $rprocess       =	$renew['process'];
                    $rptime         =	$renew['ptime'];
					$rreject 		=	$renew['reject'];
					$rreject_reason =	$renew['reject_reason'];
                    $rdone          =	$renew['done'];

$atime =   date('H:i', $atime_s);
$adate =   date('d M Y', $atime_s);
$avtimes = date('H:i', $avtime);
$avdates = date('d M Y', $avtime);
$aptimes = date('H:i', $aptime);
$apdates = date('d M Y', $aptime);

$rtime =   date('H:i', $rtime_s);
$rdate =   date('d M Y', $rtime_s);
$rvtimes = date('H:i', $rvtime);
$rvdates = date('d M Y', $rvtime);
$rptimes = date('H:i', $rptime);
$rpdates = date('d M Y', $rptime);

?>



<?php
 if($areject == 1 && $rreject == 0){
echo"<!-- The time line -->
<ul class='timeline'>
<!-- timeline time label -->
<li class='time-label'>
<span class='bg-red'>
 $adate
</span>
</li>
<!-- /.timeline-label -->
<!-- timeline item -->
<li>
<i class='fa fa-check-circle  bg-red'></i>

<div class='timeline-item'>
<span class='time'><i class='fa fa-clock-o'></i> $atime</span>

<h3 class='timeline-header'>Concession Request Rejected</h3>

<div class='timeline-body'>
$areject_reason
</div>
<div class='timeline-footer'>

</div>
</div>
</li>
<!-- END timeline item -->
<!-- timeline item -->";
}
elseif($areject == 0 && $rreject == 1){
    echo"<!-- The time line -->
<ul class='timeline'>
<!-- timeline time label -->
<li class='time-label'>
<span class='bg-red'>
 $rdate
</span>
</li>
<!-- /.timeline-label -->
<!-- timeline item -->
<li>
<i class='fa fa-check-circle  bg-red'></i>

<div class='timeline-item'>
<span class='time'><i class='fa fa-clock-o'></i> $rtime</span>

<h3 class='timeline-header'>Concession Request Rejected</h3>

<div class='timeline-body'>
$rreject_reason
</div>
<div class='timeline-footer'>

</div>
</div>
</li>
<!-- END timeline item -->
<!-- timeline item -->";
}
?>
<?php
 if($afrmup == 1 && $rfrmup == 0){
echo"<!-- The time line -->
<ul class='timeline'>
<!-- timeline time label -->
<li class='time-label'>
<span class='bg-green'>
 $adate
</span>
</li>
<!-- /.timeline-label -->
<!-- timeline item -->
<li>
<i class='fa fa-check-circle  bg-green'></i>

<div class='timeline-item'>
<span class='time'><i class='fa fa-clock-o'></i> $atime</span>

<h3 class='timeline-header'>Concession Request Submited</h3>

<div class='timeline-body'>
Your concession request has been submited for verfication of documents. The information and document will be verifed.
</div>
<div class='timeline-footer'>

</div>
</div>
</li>
<!-- END timeline item -->
<!-- timeline item -->";
}
elseif($afrmup == 0 && $rfrmup == 1){
    echo"<!-- The time line -->
<ul class='timeline'>
<!-- timeline time label -->
<li class='time-label'>
<span class='bg-green'>
 $rdate
</span>
</li>
<!-- /.timeline-label -->
<!-- timeline item -->
<li>
<i class='fa fa-check-circle  bg-green'></i>

<div class='timeline-item'>
<span class='time'><i class='fa fa-clock-o'></i> $rtime</span>

<h3 class='timeline-header'>Concession Request Submited</h3>

<div class='timeline-body'>
Your concession request has been submited for verfication of documents. The information and document will be verifed.
</div>
<div class='timeline-footer'>

</div>
</div>
</li>
<!-- END timeline item -->
<!-- timeline item -->";
}
else{
    
}
?>
<?php if($averify == 1){
echo"<!-- The time line -->
<ul class='timeline'>
<!-- timeline time label -->
<li class='time-label'>
<span class='bg-yellow'>
 $avdates
</span>
</li>
<!-- /.timeline-label -->
<!-- timeline item -->
<li>
<i class='fa fa-circle-o-notch fa-spin fa-3x fa-fw  bg-yellow'></i>

<div class='timeline-item'>
<span class='time'><i class='fa fa-clock-o'></i> $avtimes</span>

<h3 class='timeline-header'>Processing Request</h3>

<div class='timeline-body'>
Your concession request is under process. It means your information and documents were successfully verified. You will soon receive your concession slip.
</div>
<div class='timeline-footer'>

</div>
</div>
</li>
<!-- END timeline item -->
<!-- timeline item -->";
}
elseif($rverify == 1){
    echo"<!-- The time line -->
<ul class='timeline'>
<!-- timeline time label -->
<li class='time-label'>
<span class='bg-yellow'>
$rvdates
</span>
</li>
<!-- /.timeline-label -->
<!-- timeline item -->
<li>
<i class='fa fa-circle-o-notch fa-spin fa-3x fa-fw bg-yellow '></i>

<div class='timeline-item'>
<span class='time'><i class='fa fa-clock-o'></i> $rvtimes</span>

<h3 class='timeline-header'>Processing Request</h3>

<div class='timeline-body'>
Your concession request is under process. It means your information and documents were successfully verified. You will soon receive your concession slip.
</div>
<div class='timeline-footer'>

</div>
</div>
</li>
<!-- END timeline item -->
<!-- timeline item -->";
}else{
    
}
?>

<?php if($aprocess == 1){
echo"<!-- The time line -->
<ul class='timeline'>
<!-- timeline time label -->
<li class='time-label'>
<span class='bg-green'>
  $apdates
</span>
</li>
<!-- /.timeline-label -->
<!-- timeline item -->
<li>
<i class='fa fa-file-text bg-green'></i>

<div class='timeline-item'>
<span class='time'><i class='fa fa-clock-o'></i> $aptimes</span>

<h3 class='timeline-header'>Concession Slip Prepared</h3>

<div class='timeline-body'>
Your concession slip is prepared. Please collect it from the office window as soon as possible.
</div>
<div class='timeline-footer'>

</div>
</div>
</li>
<!-- END timeline item -->
<!-- timeline item -->
<li>
<i class='fa fa-clock-o bg-gray'></i>
</li>";
}
elseif($rprocess == 1){
    echo"<!-- The time line -->
<ul class='timeline'>
<!-- timeline time label -->
<li class='time-label'>
<span class='bg-green'>
  $rpdates
</span>
</li>
<!-- /.timeline-label -->
<!-- timeline item -->
<li>
<i class='fa fa-file-text bg-green'></i>

<div class='timeline-item'>
<span class='time'><i class='fa fa-clock-o'></i> $rptimes</span>

<h3 class='timeline-header'>Concession Slip Prepared</h3>

<div class='timeline-body'>
Your concession slip is prepared. Please collect it from the office window as soon as possible.
</div>
<div class='timeline-footer'>

</div>
</div>
</li>
<!-- END timeline item -->
<!-- timeline item -->";
}else{
    echo"<li>
<i class='fa fa-clock-o bg-gray'></i>
</li>";
}
?>
</ul>
