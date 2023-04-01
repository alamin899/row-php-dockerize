<?php

$connection = new mysqli('localhost','root','secret','docker_php','4306');
$query = "select * from users";
$data = mysqli_query($connection,$query);
if ($data){
    echo '<div class="row m-4">
    <div class="col-12">
        <div class="row">
            <div class="col">
                <h3><strong>User list</strong></h3>

            </div>
            <div class="col text-right">
                <a href="create.php" class="btn btn-primary ">NEW USER</a>
            </div>
        </div>

    </div> <table class="table">
            <caption>List of users</caption>
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Mobile number</th>
                <th scope="col">Email</th>
            </tr>
            </thead>';
    while ($row = mysqli_fetch_assoc($data)){
        $id = $row['id'];
        $name = $row['name'];
        $phone = $row['phone'];
        $email = $row['email'];


        echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$phone.'</td>
                    <td>'.$email.'</td>
                </tr>';
    }
    echo '</table></div>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


</div>
</body>
</html>