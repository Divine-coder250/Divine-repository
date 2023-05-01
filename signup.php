

<?php
include 'connection.php';

if(isset($_POST['submit'])) {
$first_name = $_POST['firstname'];
$last_name = $_POST['lastname'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$gender = $_POST['gender'];
$sql = "INSERT INTO users(fname, lname, email, password, gender) VALUES('$first_name', '$last_name', '$email', '$password', '$gender')";
$result = $conn -> query($sql);

if($result == true){
header("Location:index.php?msg:New record created successfully");
} else {
echo "Error:" .$sql."<br>" .$conn -> error;
}

$conn->close();

}


?>

























<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>PHP CRUD APPLICATION</title>
</head>
<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
        PHP Complete CRUD Application
    </nav> 
    <div class="container">
        <div class="text-center mb-4">
            <h2>Add New User</h2>
            <p class="text-muted">Complete the form to add a new user</p>
        </div>
        <div class="container d-flex justify-content-center">
            
        <form action="" method="POST" style="width: 50vw; min-width: 300px;">
            
            <div class="row">
                <div class="col">
                    <label class="form-label">First Name:</label>
                    <input type="text" class="form-control" name="firstname" placeholder="Divine">

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="form-label">Last Name:</label>
                    <input type="text" class="form-control" name="lastname" placeholder="ITANGAMAHORO">

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="form-label">Email:</label>
                    <input type="email" class="form-control" name="email" placeholder="lincadivine@gmail.com">

                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label class="form-label">Password:</label>
                    <input type="password" class="form-control" name="password" placeholder="********">

                </div>
            </div>

            <div class="form-group mb-3">
                <label>Gender:</label>
                <input type="radio" class="for-check-input" name="gender" id="male" value="Male">
                <label for="male" class="form-input-label">Male</label>
                &nbsp;
                <input type="radio" class="for-check-input" name="gender" id="female" value="Female">
                <label for="female" class="form-input-label">Female</label>
            </div>

       <button type="submit" class="btn btn-success" name="submit">Save</button>
       <a href="create.php" class="btn btn-danger">Cancel</a>
        </form>
        </div>
    </div>
  
       
    
</body>
</html>
