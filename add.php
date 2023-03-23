<?php include("conn.php"); ?>

<?php

    //CHECK ISSET FOR SEND BUTTON
    if(isset($_POST["send"])){

        //make varrible
        $task = $_POST["task"];
        $Ttype = $_POST["taskType"];
        // echo $task;

    //INSERT INTO TABLE
    $sql = "INSERT  INTO tasks (_name, _taskType) VALUES ('$task', '$Ttype')";


    //MAKE QUERRY
    $query = mysqli_query($conn, $sql);


    header("location:index.php");



}


?>