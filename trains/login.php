<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
 
    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="style.css">
         
    <title>Login & Registration Form</title>
</head>
<body>
    <?php
        if(isset($_GET['popup'])){
            echo "<script> alert('registraton sucessful go back and login')</script>";
        }   
    ?>
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>
                    <br></br>
                    <form method="POST" action = "login_process.php">
                        <label>UserName  </label><input type = "text" name = "username" class = "box"/><br /><br />
                        <label>Password      </label><input type = "password" name = "password" class = "box" /><br/><br />
                        <input type = "submit" name="login" value = " Submit "/><br />
                     </form>
 
                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup now</a>
                    </span>
                    <br>
                    <br>
                    <?php
                        if(isset($_GET['message'])){
                            echo '<span class="box">'.$_GET['message'].'</span>';
                        }
                     ?>
                </div>
            </div>
 
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>
                <form method="POST" action = "signup.php">
                        <label>Full Name  </label><input type = "text" name = "name" class = "box"/><br /><br />
                        <label>Username  </label><input type = "text" name = "username" class = "box" /><br/><br />
                        <label>Mobile No.  </label><input type = "text" name = "phone" class = "box"/><br /><br />
                        <label>password  </label><input type = "password" name = "password" class = "box" /><br/><br />
                        <label>Re-Enter Password  </label><input type = "password" name = "password" class = "box"/><br /><br />
                        <input type = "submit" name="signup" value = " Submit "/><br />
                </form>
                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login</a>
                    </span>
                </div>
            </div>-->
        </div>
        
    </div>
 
    <script>
        const container = document.querySelector(".container"),
      pwShowHide = document.querySelectorAll(".showHidePw"),
      pwFields = document.querySelectorAll(".password"),
      signUp = document.querySelector(".signup-link"),
      login = document.querySelector(".login-link");
 
    //   js code to show/hide password and change icon
    pwShowHide.forEach(eyeIcon =>{
        eyeIcon.addEventListener("click", ()=>{
            pwFields.forEach(pwField =>{
                if(pwField.type ==="password"){
                    pwField.type = "text";
 
                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye-slash", "uil-eye");
                    })
                }else{
                    pwField.type = "password";
 
                    pwShowHide.forEach(icon =>{
                        icon.classList.replace("uil-eye", "uil-eye-slash");
                    })
                }
            })
        })
    })
 
 
    // js code to appear signup and login form
    signUp.addEventListener("click", ( )=>{
        container.classList.add("active");
    });
    login.addEventListener("click", ( )=>{
        container.classList.remove("active");
    });
 
    </script>

</body>
</html>
