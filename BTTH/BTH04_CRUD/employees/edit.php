<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">

<?php
    require('includes/config.php'); 

    $id = $_GET['id'];
    $sql_up = "SELECT * FROM employees WHERE id = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

    if(isset($_POST['sbm'])){
        $name = $_POST['name'];
        $description = $_POST['description'];
        $salary = $_POST['salary'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birthday'];

        $sql = "UPDATE employees SET name = '$name', description = '$description', salary = '$salary', gender = '$gender', birthday = '$birthday' WHERE id = $id"; 
        $query = mysqli_query($connect, $sql);
        
        header('Location:index.php');                                  
    }
?>

<div class="container">
    <div class="card">  
    <div class="card-header">
        <h1 class="text-center">Edit Record</h1>
    </div>
    <form class="card-body" method="POST" enctype="multipart/form-data" >   
        <div class="form-group">
            <label><h5>Name</h5></label>
            <input type="text" class="form-control" name="name" value="<?php echo $row_up['name']; ?>" />        
        </div>
        
        <div class="form-group">
            <label><h5>Description</h5></label>
            <textarea class="form-control" name="description" value="" rows="3"></textarea>         
        </div>

        <div class="form-group">
            <label><h5>Salary</h5></label>
            <input type="number" class="form-control" name="salary" value="<?php echo $row_up['salary']; ?>"/>           
        </div>

        <div class="form-group">
            <div><label><h5>Gender</h5></label></div>
           
            <input name="gender" type="radio" value="Male" checked="checked">
            <label class="radio-label">Male</label>

            <input name="gender" type="radio" value="Female">
            <label class="radio-label">Female</label>  
        </div>

        <div class="form-group">
            <label><h5>Birthday</h5></label>
            <input type="date" class="form-control" name="birthday" value="<?php echo $row_up['birthday']; ?>"/>            
        </div>   
        <button name="sbm" class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Save</button>
        <a href="index.php" class="btn btn-danger"><i class="fas fa-backspace"></i> Cancel</a>
    </form>   
    </div>  
</div>