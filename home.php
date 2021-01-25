<?php
session_start();
include 'dbh.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="home.css">
</head>

<body>
<div id="main">

<h1 style="background-color: #6495ed;color: white;"><?php echo $_SESSION['name'] ?>_online</h1>

    <div class="output">
            <?php $sql= "SELECT * FROM posts ";
            $result = $conn->query($sql);

            if($result->num_rows > 0){
                //output data of each row
                while($row = $result->fetch_assoc()){
                    echo "" . $row["name"]. " " .":: " . $row["msg"]." --" .$row["date"]. "<br>";
                    echo "<br>";
                }
            }else{
                echo "No messages";
            }
            $conn->close();
            ?>
        </div>

        <form method="post" action="send.php">
            <textarea name="msg" placeholder="Type to send message...." class="form-control"></textarea><br>
            <input type="submit" value="Send">
        </form>
        <br>
        <form action="logout.php">

            <input style="width: 100% ;background-color: #6495ed;color:white;font-size: 20px;" type="submit" value="Logout">

    </div>

</body>

</html>