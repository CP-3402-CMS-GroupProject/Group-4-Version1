<?php
function generateNumber() {
    if (isset($_POST['generate'])) {
        $number = rand(1, 100);
        echo "Generated number: " . $number;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php get_header();?>

    <h3>Guide</h3>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="single.php">newpage</a></li>
            <li><a href="login.php">login page</a></li>
        </ul>
    </nav>

</head>


<body <?php body_class();?>>

<form method="post">
    <input type="submit" name="generate" value="Generate Number">
    <?php generateNumber(); ?>
</form>
<?php
// Simple for loop
for ($i = 1; $i <= 10; $i++) {
    echo "This is iteration number: " . $i . "<br>";
}
?>

<div class = "container form-signin">
         
         <?php
            $msg = '';
            
            if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {
				
               if ($_POST['username'] == 'root' && 
                  $_POST['password'] == '1234') {
                  $_SESSION['valid'] = true;
                  $_SESSION['timeout'] = time();
                  $_SESSION['username'] = 'tutorialspoint';
                  
                  echo 'Welcome back!';
               }else {
                  $msg = 'Wrong username or password';
               }
            }
         ?>
      </div> <!-- /container -->
      
      <div class = "container">
      
         <form class = "form-signin" role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
            <h4 class = "form-signin-heading"><?php echo $msg; ?></h4>
            <input type = "text" class = "form-control" 
               name = "username" placeholder = "username" 
               required autofocus></br>
            <input type = "password" class = "form-control"
               name = "password" placeholder = "password = 1234" required>
            <button class = "btn btn-lg btn-primary btn-block" type = "submit" 
               name = "login">Login</button>
         </form>
			
         Click here to clean <a href = "logout.php" tite = "Logout">Session.
         
      </div> 