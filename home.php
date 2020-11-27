<?php

session_start();
include 'dbconn.php';
?>







<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>

<body>
    <div class="main">

        <!-- Heading with the name session -->
        <h1 style="background-color:lightblue; color:white;"> <?php echo $_SESSION['name'] ?> -online</h1>

        <!-- output the msg sent -->
        <div class="output">

            <?php

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo "" . $row['name'] . " " . ":: " . $row['msg'] . " --" . $row['date'] . "<br>";
        echo "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();

?>



        </div>

        <!-- input area and send button -->
        <form action="send.php" method="post">

            <textarea name="msg" placeholder="Type to send a message ..." class="form-control"></textarea><br>
            <input type="submit" value="Send">
        </form>
        <br>

        <!-- logout -->
        <form action="logout.php">
            <input style="width:100%; background-color:#6495ed;color:white;font-size:20px" type="submit" value="Logout">
        </form>



    </div>
</body>

</html>