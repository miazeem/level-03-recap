<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <h1>Crud Application</h1>

     <?php

    include 'database.php';


    // edit
    $getid=$_GET['id'];
    $sql = "SELECT * FROM students WHERE id=$getid";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);





    // update
   if(isset($_POST['update'])){

    $getName = $_POST['name'];
    $getEmail = $_POST['email'];
    $getCity = $_POST['city'];
    $getDescription = $_POST['description'];


    $sql = "UPDATE students SET name='$getName', email='$getEmail', city='$getCity', description='$getDescription' WHERE id=$getid";

    $result=mysqli_query($conn, $sql);
    if($result){
        echo "Data updated successfully";
        header("Location: show.php");
    }else{
        echo "Error updating data: " . mysqli_error($conn);
        
   }

   }

    ?>


    <div class="container">
        <form method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name" value="<?php echo $row['name']; ?>">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" value="<?php echo $row['email']; ?>">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="Enter city" value="<?php echo $row['city']; ?>">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Enter description" value="<?php echo $row['description']; ?>">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                         <button type="submit" name="update" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>
    </div>


   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>