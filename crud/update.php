<?php 

include 'conn.php';

if(isset($_POST['done'])){

    $id = $_GET['id'];
    $username = $_POST['username'];
    $password =$_POST['password'];
    $q="UPDATE `crudtable` set id = $id, username = '$username', password='$password' where id = $id ";

    $query = mysqli_query($con,$q);

    header('location:display.php');

}

?>

<!DOCTYPE html>
<html>
<head>
        <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/bootstrap-show-password@1.2.1/dist/bootstrap-show-password.min.js"></script>
</head>
<body>
    <div class="col-lg-6 m-auto"> 

        <form method="post">
            
            <div class="card">
                <br>
                <div class="card-header bg-dark">
                    <h1 class="text-white text-center"> Update Operation</h1>
                </div>
                    <br><label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter username"><br>

                
                    <label>Password</label>
                    <input name="password" data-toggle="password" data-eye-open-class="fa-toggle-off" data-eye-close-class="fa-toggle-on" class="form-control" type="password" placeholder="Enter the password">
                    <br>
                    
                    <button class="btn btn-success" type="submit" name="done"> Submit </button><br>
                
            </div>

        </form>

    </div>
</body>
</html>