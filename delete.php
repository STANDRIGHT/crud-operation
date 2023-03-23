<?php
    include("conn.php");


    if(isset($_GET["id"])){
        // echo "id connected";
        
        // declare varrible
        $id =$_GET["id"];
        // echo $id;

        //make sql
        $sql = "DELETE FROM tasks WHERE id='$id'";

        //make query
        $delete = mysqli_query($conn, $sql);

        header("location:index.php");
    }


?>