<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
    </head>
    <body class="login">
        <form method="post" action="login.php">
            <img src="login-header.webp" alt="Login">
            <div>
                <input type="text" placeholder="USERNAME" name='username'>
            </div>
            <div>
                <input type="password" placeholder="PASSWORD" name='password'>
            </div>
            <input type="submit" value="LOGIN" name="login_btn">
            <div></div>
        </form>
        <div class="right-bar" style="margin-top: -1020px">
            <div class="faq-header">
                <img src="faq-header.webp" alt="Frequently Asked Questions">
                <div class="faq-body">
                    <dl>
                        <dt>How can I sign up?</dt>
                        <dd>- Contact the address below</dd>
                        <dt>How many social media?</dt>
                        <dd>- As many as you want!</dd>
                        <dt>What do I need?</dt>
                        <dd>- Login info for all platforms</dd>
                    </dl>
                </div>
            </div>
            <div class="contact-header">
                <img src="contact-header.webp" alt="Any more questions? Contact us!">
                <div class="contact-body">
                    <h1>Contact us at:</h1>
                    <h1>mcmillag@oregonstate.edu</h1>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
$conn = mysqli_connect("localhost", "root", "");
if(isset($_POST['login_btn'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT * FROM cs361site.logininfo WHERE user = '$username'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['pass'];
        if($password == $resultPassword){
            header("Location:select.php?username=$username");
        }
    }
}
?>
