<?php 
include('connect.php');
$id=$_GET['updateid'];
//$sql="select * from crud where id=$id";
//$result=mysqli_query($con,$sql);
//$row=mysqli_fetch_assoc($result);
//$name=$row['name']; //value=<?php echo $name; ithai keele ullathil set seiga
//$email=$row['email']; 
//$mobile=$row['mobile'];
//$password=$row['password'];



if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    

    

    
    // $sql="update 'crud' set id=$id,name='$name',email='$email',mobile='$mobile',password='$password'";
     $sql="update crud set  name='$name',email='$email',mobile='$mobile',password='$password'  where id='$id'";
   // $result=mysqli_($con,$sql);
   $result=mysqli_query($con,$sql);

    if($result){
        //echo "update sucessfuly";
        header('location:display.php');
    }else{
    
    }
    

}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
    <div class="container my-5">
    <form method="post">
  <div class="form-group my-3">
    <label > Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter your name ">
  </div>

  <div class="form-group my-3 " >
    <label > Email</label>
    <input type="email" class="form-control" name="email" placeholder="Enter your Email" >
  </div>

  <div class="form-group my-3">
    <label > Mobile No</label>
    <input type="text" class="form-control" name="mobile" placeholder="Enter your No">
  </div>

  <div class="form-group my-3">
    <label > Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter your Password">
  </div>

<button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>
    </div>
</body>
</html>