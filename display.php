<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
</head>
<body>
<div class="container">
<button class="btn btn-primary my-4" > <a href="user.php" class="text-light" >ADD </a>
</button>
<table class="table">
<thead>
<tr> 
 <th scope="col">ID</th>
 <th scope="col">NAME</th>
 <th scope="col">EMAIL</th>
<th scope="col">MOBILE</th>
<th scope="col">password </th>
<th scope="col">Action</th>
</tr>
<tbody>
<?php
$sql="select * from `crud`";
$result=mysqli_query($con,$sql);
if($result){
while( $row= mysqli_fetch_assoc($result)){
$id=$row['id'];
$name=$row['name'];
$email=$row['email'];
$mobile=$row['mobile'];
$password=$row['password'];
echo '<tr>
<th scope="row">'.$id.'</th>
<td>'.$name.'</td>
<td>'.$email.'</td>
<td>'.$mobile.'</td>
<td>'.$password.'</td>
<td>
<button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">update</a></button>
 <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">delete</a></button>
</td>
</tr>';
}
}
?>
</tbody> 
</thead>
</table>
</div>  
</body>
</html>  