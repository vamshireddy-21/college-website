<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student login</title>
    <link rel="stylesheet" href="studentlogin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="box" id="box">
            <h4>Welcome! Please login to continue</h4>
          <input type="text" placeholder="Enter username" name="username" autocomplete="on" id="name">
          <p> <input type="password" placeholder="Enter Password" name="password" id="password">
           <i class="far fa-eye" id="togglePassword"></i> </p>
           <input type="submit" class="submit">
            <a href="#">Forgot password?</a>
        </div>
    </div>
    <script src="studentlogin.js" defer></script>
</body>
</html>
<?php
$conn = mysqli_connect("localhost", "root","");
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sql= "SELECT * FROM websitelogin.login WHERE username = '$username'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)){
        $resultPassword = $row['password'];
        if($password == $resultPassword){
            header('Location:erp.html');
        }else{
            echo "<script>
                alert('Login unsuccessful');
            </script>";
        }
    }

}
?>



