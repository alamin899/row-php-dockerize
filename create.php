<?php
$connection = new mysqli('localhost','root','password','docker_php');

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $insertQuery = "insert into users (name,mobile,email) values ('$name','$phone','$email')";
    $result = mysqli_query($connection,$insertQuery);
    if ($result){
        header('location:index.php');
    }
    else{
        echo "Something went wrong";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Docker with php</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="m-4">
    <form action="#" method="post">
        <div class="mb-3">
            <label class="form-label" for="inputName">Full name</label>
            <input type="text" name="name" class="form-control" id="inputName" placeholder="Enter the name" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputPhone">Phone number</label>
            <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Enter phone number" required>
        </div>
        <div class="mb-3">
            <label class="form-label" for="inputEmail">Email</label>
            <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        <a href="index.php" class="btn btn-warning float-right">Back</a>
    </form>
</div>
</body>
</html>