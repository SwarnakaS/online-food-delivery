

<!DOCTYPE html>
<html>

<head>
    <style>
body{

    background: url(back1.jpg);
    background-size:100%;
    background-position:absolute;
    font-family: sans-serif;
}

/* login box style */
.loginbox{
    width: 320px;
    height: 420px;
    background:#000;
    color: #fff;
    top: 50%;
    left: 50%;
    position: absolute;
    transform: translate(-50%,-50%);
    box-sizing: border-box;
    padding: 70px 30px;
  
}
/* user icon style */
.user{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}
/* login here text styel */
h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}
/* paragrapgy text style */
.loginbox p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
/* each input text format */

.loginbox input{
    width: 100%;
    margin-bottom: 20px;
} 
/* enter user name and password stye */
.loginbox input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fd2104;
    font-size: 16px;
} 
.alert-light {
    color:#fd2104;
    text-align: center;
}
/* login input style */
/*.button[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    width:70px;
    background: #fd2104;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
    font-weight: bold;
    margin: 30px;
    float:right;
}
/* login input hover animation */
.button {
  
  background-color:#fd2104;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 7px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  border-radius: 20px;
  font-weight: bold;
  margin: 30px;
    float:right
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  
}
.button:hover
{
    cursor: pointer;
    background: #000;
    color: #fd2104;
    font-weight: bold;
}
.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
 </style>
<title>Login Form Design</title>
  
<body>
    <div class="loginbox">
    <img src="user" class="user">
        <h1 >Welcome</h1>
        <?php 
                        if(@$_GET['Empty']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Empty'] ?></div>                                
                    <?php
                        }
                    ?>

        <?php 
                        if(@$_GET['Invalid']==true)
                        {
                    ?>
                        <div class="alert-light text-danger text-center py-3"><?php echo $_GET['Invalid'] ?></div>                                
                    <?php
                        }
                    ?>

       
        
        <form action = "index.php"  method="POST">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username" >
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password"><br>
            <button class="button"   type="submit" name="login" ><span>Login</span></button>
            
        <!-- <a href="#">Lost your password?</a><br>
            <a href="#">Don't have an account?</a> -->
        </form>
        
    </div>

</body>
</head>
</html>