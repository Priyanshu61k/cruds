 <!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

</head>
<body>
<div class="container  my-5">
<form method="POST" >   
         
<div className="close-btn" onClick={handleclose} />
<label htmlfor="name">name</label>
<input type="text" id="name" name="name" autocomplete="off" placeholder="enter your name" onChange={handleonchange}   /><br>
   
   
<label htmlfor="email">email</label>
<input type="email" id="email" name="email" autocomplete="off" placeholder="enter your email"  /><br>
   
<label htmlfor="mobile">mobile</label>
<input type="number" id="mobile" name="mobile" autocomplete="off" placeholder="enter your mobile"  /><br>

<label htmlfor="password">password</label>
<input type="password" id="password" name="password" autocomplete="off" placeholder="enter your password"/><br>

<button type="submit" class="submit" name ="submit">submit</button><br>
</form>


</div>  
</body>
</html>
<?php
include 'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
 
$sql="insert into `crud` (name,email,mobile,password) 
values ('$name','$email','$mobile','$password')";

$result=mysqli_query($con,$sql);
if  ($result){
 //echo "successfully  inserted";
header ('location:display.php');
}
else{
die(mysqli_error($con));
}
}
?>
