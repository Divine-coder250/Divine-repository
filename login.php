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
            <h2>Log In</h2>
            <p class="text-muted">Complete the form to log in</p>
        </div>
        <div class="container d-flex justify-content-center">
            
        <form action="" method="POST" style="width: 50vw; min-width: 300px;">
            
          
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

            <br>

           

       <button type="submit" class="btn btn-success" name="submit">Log In</button>
       <a href="create.php" class="btn btn-danger">Cancel</a>
        </form>
        </div>
    </div>
  
    </body>
</html>


<?php

include 'connection.php';
$id = $_GET['id'];

//check if the form has been submitted

if(isset($_POST['submit'])){
    //Retrieve the user's input
    $email = $_POST['email'];
    $password = $_POST['password'];


    $sql = "SELECT `email`,`password` FROM `users` WHERE `id`='$id'";
$result = $conn -> query($sql);

if($result == true){


 //validate the user's credentials

 if($email == 'teta@gmail.com' && $password == 'mama'){
    //start a new session

    session_start();

    //set session variables

    $_SESSION['email'] = $email;

    //redirect the user  to the homepage
    header('location: dash.php?msg=Logged in successfully');
 }
else{
 //display an error message
 echo "<p>Invalid email or password </p>";
//  
}


// header("Location:index.php?msg=Logged in successfully");
// } else {
// echo "Error:" .$sql."<br>" .$conn -> error;
// }

// $conn->close();

}


}


    

?>