<!doctype html>
<html lang="en">
    <?php
            include 'head.php';
    ?>
    
    <body>
        
        <?php
            include 'header.php';
            session_start();
            $fullName = $_SESSION['user']['firstname']. ' '. $_SESSION['user']['lastname'];
            echo 'Welcome to the Mission System, '.$fullName.'!';            
        ?>
      
    </body>
  
</html>
