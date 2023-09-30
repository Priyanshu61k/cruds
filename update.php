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
<input type="text" id="name" name="name" autocomplete="off" placeholder="enter your name" onChange={handleonchange}   />
   
   
<label htmlfor="email">email</label>
<input type="email" id="email" name="email" autocomplete="off" placeholder="enter your email"  value=<?php echo $email;?> >
   
<label htmlfor="mobile">mobile</label>
<input type="number" id="mobile" name="mobile" autocomplete="off" placeholder="enter your mobile" value=<?php echo $mobile;?>>

<label htmlfor="password">password</label>
<input type="password" id="password" name="password" autocomplete="off" placeholder="enter your password" value=<?php echo $password;?>>

<button type="submit" class="submit" name ="submit">update</button>
</form>


</div>  
</body>
</html>
<?php
include 'connect.php';
$id =$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row= mysqli_fetch_assoc($result);
  $name=$row['name'];
  $email=$row['email'];
  $mobile=$row['mobile'];
  $password=$row['password'];

if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
 
$sql="update `crud` set id='$id',name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";
$result=mysqli_query($con,$sql);
if  ($result){
//  echo "successfully updated";
header ('location:display.php');
}
else{
die(mysqli_error($con));
}
}
?>
