<?php
   session_start();
   require_once '../Database.php';
   $db = new Database();
   $conn = $db->getConnection();
   
    if($_POST){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $result = $conn->prepare("select * from users where username = :username and password = :pass");
        
        $result->bindParam(':username', $username);
        $result->bindParam(':pass', $password);
        $result->execute();
        
        $data = $result->fetch(PDO::FETCH_ASSOC);

        if($result->rowCount() > 0){
            if($data['role']=='admin'){
                $_SESSION['username'] = $username;
                $_SESSION['is_admin'] = true;
                header("Location:http://localhost/lab/admin/dashboard.php");
                
              
            }else{
                $_SESSION['username'] = $username;
                $_SESSION['is_user'] = true;
                header("Location:http://localhost/lab/admin/dashboard.php");
            }
           
        }else{
            echo "Provided credientials are wrong, please try again later";
        }
    }  
?>




<!doctype html>
<html>
    <head>
        <title>Hello</title>
        <link rel="stylesheet" href="css/loginstyle.css">
    </head>
    <body>
    <?php require_once("navbar.php"); ?>
    <div class="loginbody">
    
        <div class="login-container">
        
           <!-- <img src="images/close.png"  id="close" alt="User"> -->
            <div class="hading">
                <p>BIRAT MEDICAL</p><br>
            </div>
            
                <h2 >Login</h2> <br>

            <form action="#" method="POST">
                <div class="form-input">
                    <input type="text" name ="username" placeholder="Username" required>
                </div>
           
                <div class="form-input">
                    <input type="password" name="password" placeholder="Password" required>
                </div>

                    <button type="submit" class="login-btn">Login</button>
            </form>

                <p class="forget-password">Foget<a href="#"> Password?</a></p>
                <div class="or-horizontal-line">OR</div>
                <p class="signup-link">Don't have an account? <a href="#">Sign up</a></p>
        </div>

        
    </div>
    
    </body>
</html>