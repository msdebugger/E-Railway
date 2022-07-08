 <?php 

  if(isset($_SESSION['prompt'])){
          showPrompt();
     unset($_SESSION['prompt']);
        }
  if(isset($_SESSION['errprompt'])){
          showError();
     unset($_SESSION['errprompt']);
        }
  
 ?>