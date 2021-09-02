<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>To-Do</title>
</head>

<body>
    <h1>To-Do List</h1>
    <!-- Optional JavaScript; choose one of the two! -->
    <div class="w-50 m-auto">
        <form action="db1.php" method="post">
            <label for="title"><b>Topic:</b></label><br>
            <input class="form-control" type="text" name="title"><br>
            <button type="submit" name = "submit" class="btn btn-success btn-xs">add task</button>
        </form>
    </div>
    </br>
    <hr class="bg-dark w-50 m-auto">
    <div class="w-50 m-auto">
        <h2>Your Lists:</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">S.no.</th>
                    <th scope="col">Topic</th>
                    <th scope="col">Time</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody>
                <!-- <tr> -->
                    <?php
                    include "database.php";
                    
                    $sql = "select * from todo";
                    $check = mysqli_query($con, $sql);
                    $total = mysqli_num_rows($check);
                   
                     while($total>0){
                        $row = mysqli_fetch_assoc($check);
                        // echo $row['sno']." ".$row['topic']." ".$row['time'];
                        echo "<tr>";
                        echo "<th>".$row['sno']."</th>";
                        echo "<th>".$row['topic']."</th>";
                        echo "<th>".$row['time']."</th>";
                        echo "</br>";
                        $total--; 
                        ?>
                        <td><a href="done.php?id=<?php echo $row['sno'] ?>" class="btn btn-success btn-s">done</a>
                        <!-- <a href="done.php?id=<?php echo $id ?>" class="btn btn-danger btn-xs">done</a></td> -->
                        <?php
                        echo "<tr>";
                    }
                    ?>

                <!-- </tr> -->
            </tbody>
        </table>
    </div>



    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>