<?php 

	function clean($data) {
		$data = trim($data);
		$data = stripslashes($data);

		return $data;
	}

	function showPrompt() {
		echo "<div class='container top-message'>
        <div class='alert alert-success alert-dismissable' role='alert' data-auto-dismiss >
    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times</button>".$_SESSION['prompt']."</div>
      </div>";
	}

	function showError() {
	    echo "<div class='container top-message'>
        <div class='alert alert-danger alert-dismissible' role='alert' data-auto-dismiss >
  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times</button>".$_SESSION['errprompt']."</div> 
  </div>";
	}
?>