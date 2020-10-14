<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employees List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
</head>
<body>
    <div class="container">
    <table class="table table-striped">
        <thead class="thead-dark">
    <div class="card">
        <div class="card-header">
        <h1 class="text-center">Employees List</h1>   
        <a href="add.php" class="btn btn-success"><i class="fas fa-user-plus"></i> Add new employee</a>
        </div> 
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description	</th>
                <th>Salary</th>
                <th>Gender</th>
                <th>Birthday</th>
                <th>Created at</th> 
                <th>Detail</th>   
                <th>Edit</th>
                <th>Delete</th>  
            </tr>
    </div>
        </thead>
    </div>
    <?php
        require('includes/config.php');
        $sql = "SELECT * FROM employees";
        $result = mysqli_query($connect, $sql);
        while($row = mysqli_fetch_assoc($result)){      
    ?>           
            <tr>
                <td scope="row"><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['description']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td><?php echo $row['gender']; ?></td>
                <td><?php echo $row['birthday']; ?></td>
                <td><?php echo $row['created_at']; ?></td>
                <td><a href="detail.php?id=<?php echo $row['id']; ?>" class="fas fa-eye"></a></td>
                <td><a href="edit.php?id=<?php echo $row['id'];?>" class="fas fa-edit"></a></td>
                <td><a onclick="return Del()" href="delete.php?id=<?php echo $row['id'];?>" class="fas fa-trash-alt"></a></td>
            </tr>
    <?php } ?>            
            
    </table>
</body>
</html>
<script>
    function Del() {
        return confirm("Do you really want to delete ?");
    }
</script>