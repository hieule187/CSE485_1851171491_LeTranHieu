<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <a class="navbar-brand" href="#">Dashboard</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">User Management</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Post Management</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <div class="col-md-12">
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>User ID</th>
                <th>First name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
    </div>    
        <?php
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db   = 'Ch08';
        $port = '3306';
        $conn =  mysqli_connect($host, $user, $pass, $db, $port);
        if(!$conn){
            die('Khong the ket noi');
            exit();
        }
        $sql = "SELECT * FROM users";
        $result = mysqli_query($conn, $sql);

        while($row = mysqli_fetch_assoc($result)){
        ?>
            <tr>
                <td scope="row"><?php echo $row['User ID'];?></td>
                <td><?php echo $row['First name'];?></td>
                <td><?php echo $row['Last name'];?></td>
                <td><?php echo $row['Email'];?></td>
                <td><a href="edit.php?id=<?php echo $row['User ID'];?>" class="fas fa-edit"></a></td>
                <td><a href="delete.php?id=<?php echo $row['User ID'];?>">Delete</a></td>
            </tr>
        <?php
        }
        ?>    

    </table>
</body>
</html>