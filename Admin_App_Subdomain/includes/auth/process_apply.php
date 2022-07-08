<?php
    $pro_count = 1;
    $ptime = time();

    $stmt = $mysqli->prepare("UPDATE apply_request SET process = ?, ptime = ?, cert_no = ? WHERE rid = ?");
    $stmt->bind_param('ssss',
    $pro_count,
    $ptime,
    $_POST['cert_no'],
    $_POST['rid']);

        if($stmt->execute()){
             $_SESSION['prompt'] = "Concession request processed succesfully";
             echo"<script>location.href = '../../fresh_processing';</script>";;
            }
        else{
              $_SESSION['errprompt'] = "Something went wrong. Please try again.";
              echo "<meta http-equiv='refresh' content='0'>";
              exit;
            }
?>