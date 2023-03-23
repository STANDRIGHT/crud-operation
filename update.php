<?php include("conn.php");
     if(isset($_GET["id"])){

        //make varrible
        $id = $_GET["id"];
        // echo $id;

        // make sql command 
        $sql= "SELECT * FROM tasks WHERE id ='$id'";
        
        // make query
        $query = mysqli_query($conn, $sql);
        // print_r ($query);

        // fetch as associative array
        $results = mysqli_fetch_assoc($query);
        // print_r($result);

        // loop through the array
        if($results){
           foreach ($results as $result) {
            echo $result."<br>";
           }
        }
     }

     if(isset($_POST["send"])){
        echo "connectd succesful";

     }else{
        echo "connection error";
     }




?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <title>CRUD APP</title>
</head>

<body>

    <div class="wrapper">
        <div class="row" style="margin-top:50px;">
            <center>
                <h1>php CRUD</h1>
            </center>

            <div class="col-md-12 col-md-offest-1">
                <butoon type="button" class="btn btn-primary" name="update">Update Task</butoon>
                <butoon type="button" class="btn btn-secondary float-right default">Print</butoon>
                <br><br>
            </div>

            <form method="POST" action="update.php">
                <div class="form-group">
                    <labe>TASK NAME</labe>
                    <input type="text" required name="editTask" class="form-control" value="<?php echo (htmlspecialchars($result["_name"])) ?>"> <br>
                    <!-- Submit Btn -->
                    <input type="submit" name="send" value="Add Task" class="btn btn-success">
                </div>
            </form>
        </div>
    </div>



</body>

</html>