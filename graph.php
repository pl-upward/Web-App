<!DOCTYPE html>
<html>
    <head>
        <title>Graph</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="main.css">
    </head>
    <body class="graph">
    </body>
</html>

<?php
    $conn = mysqli_connect("localhost", "root", "");
    $username = $_GET['username'];
    $tiktok = $_GET['tiktok'];
    $youtube = $_GET['youtube'];
    $twitter = $_GET['twitter'];
    $more = $_GET['more'];

    //wow this sucks
    $sql= "SELECT * FROM cs361site.logininfo WHERE user = '$username'";
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($result);
    $id = $row['id'];

    //link id to other field...
    $sql = "SELECT * FROM cs361site.bestposts WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $biggest = $row['bestTiktok'];
    $biggestLink = $row['tiktokLink'];
    if($youtube and $row['bestYoutube'] > $biggest){
        $biggest = $row['bestYoutube'];
        $biggestLink = $row['youtubeLink'];
    }
    if($twitter and $row['bestTwitter'] > $biggest){
        $biggest = $row['bestTwitter'];
        $biggestLink = $row['twitterLink'];
    }
    if($more and $row['bestOther'] > $biggest){
        $biggest = $row['bestOther'];
        $biggestLink = $row['otherLink'];
    }

    echo "<p style='position: absolute; margin-top: 100px; margin-left: 430px; font-size:large;'>Here was your biggest post for this month. It recieved $biggest likes.</p>";
    echo "<img src='$biggestLink.png' width='400px' height=auto style='position: absolute; margin-top: 200px; margin-left: 500px; z-index: 1>";
    echo "<a href='select.php?username=$username'><button class='back_button' style='position: absolute; margin-top: 600px; margin-left: 550px;'>RETURN</button></a>";
    echo "<div class='username'><p>Username: $username</p></div>";
?>
