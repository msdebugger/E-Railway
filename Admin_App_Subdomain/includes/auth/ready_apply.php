<?php
    $pro_count = 1;
    $rtime = time();

    $stmt = $mysqli->prepare("UPDATE apply_request SET ready = ?, rtime = ?, done = ? WHERE rid = ?");
    $stmt->bind_param('ssss',
    $pro_count,
    $rtime,
    $pro_count,
    $_POST['rid']);

        if($stmt->execute()){
             $_SESSION['prompt'] = "Concession request prepared succesfully";
             echo"<script>location.href = '../../fresh_ready';</script>";;
            }
        else{
              $_SESSION['errprompt'] = "Something went wrong. Please try again.";
              echo "<meta http-equiv='refresh' content='0'>";
              exit;
            }
?>