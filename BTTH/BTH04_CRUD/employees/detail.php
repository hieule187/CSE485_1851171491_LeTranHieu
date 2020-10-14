<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">View Record</h1>
        </div>
<?php
    require('includes/config.php');
    $id = $_GET['id'];
    $sql_view = "SELECT * FROM employees WHERE id = $id";
    $result_view = mysqli_query($connect, $sql_view);
    while($row = mysqli_fetch_assoc($result_view)){ 
?>
        <div class="card-body">
            <th><h5>ID:</h5></th>
            <div><?php echo $row['id']; ?></div><br>

            <th><h5>Name:</h5></th>
            <div><?php echo $row['name']; ?></div><br>

            <th><h5>Description:</h5></th>
            <div><?php echo $row['description']; ?></div><br>

            <th><h5>Salary:</h5></th>
            <div><?php echo $row['salary']; ?></div><br>

            <th><h5>Gender:</h5></th>
            <div><?php echo $row['gender']; ?></div><br>

            <th><h5>Birthday:</h5></th>
            <div><?php echo $row['birthday']; ?></div><br>

            <th><h5>Created at:</h5></th>
            <div><?php echo $row['created_at']; ?></div><br>
    <?php } ?>            

            <a href="index.php" class="btn btn-danger"><i class="fas fa-backspace"></i> Back</a>
        </div>       
    </div>
</div>