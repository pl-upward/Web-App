<!DOCTYPE html>
<html>
    <head>
        <title>Select</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
    </head>
    <body class="select">
        <a href="login.php">
            <button class="logout">LOGOUT</button>
        </a>
        <div class="moreInfo">?</div>
        <div class="hide"><img src="more-info.webp" alt="Information becomes more accurate when increasing the amount of social media included!" width="400px"></div>
        <div class="social-header"><img src="social-header.png" alt="Social Media. Select your relevant websites." width="700"></div>
        <form method="post">
            <div class = "social-icons"><img src="tiktok.webp" width="200px"><img src="youtube.webp" width="200px"><img src="twt.webp" width="200px"><img src="more.webp" width="200px"></div>
            <div class="fields"><input type="checkbox" name="tiktok"><input type="checkbox" name="youtube"><input type="checkbox" name="twitter"><input type="checkbox" name="more"></div>
            <div class="submit-buttons"><input type="submit" value="SUBMIT" name='submit_btn'><input type='submit' value="CHOOSE FOR ME" name='choose'></div>
        </form>
    </body>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "");
$username = $_GET['username'];
echo "<div class='username' style:'position: 'absolute''><p>Username: $username</p></div>";
if(isset($_POST['submit_btn'])){
    $tiktok = $_POST['tiktok'];
    $youtube = $_POST['youtube'];
    $twitter = $_POST['twitter'];
    $more = $_POST['more'];
    header("Location:graph.php?username=$username&tiktok=$tiktok&youtube=$youtube&twitter=$twitter&more=$more");
}
if(isset($_POST['choose'])){
    header("Location:graph.php?username=$username&tiktok=&youtube=on&twitter=on&more=");
}
?>
