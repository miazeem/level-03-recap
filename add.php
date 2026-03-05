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

    <div class="container">
        <form method="POST">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" name="city" class="form-control" id="city" placeholder="Enter city">
                    </div>
                </div>

                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Enter description">
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                         <button type="submit" name="add" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>


    <?php

    include 'database.php';
   
   if(isset($_POST['add'])){

    $getName = $_POST['name'];
    $getEmail = $_POST['email'];
    $getCity = $_POST['city'];
    $getDescription = $_POST['description'];


    $sql = "INSERT INTO students (name, email, city, description) VALUES ('$getName', '$getEmail', '$getCity', '$getDescription')";

    $result=mysqli_query($conn, $sql);
    if($result){
        echo "Data inserted successfully";
        header("Location: show.php");
    }else{
        echo "Error inserting data: " . mysqli_error($conn);
        
   }

   }

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>