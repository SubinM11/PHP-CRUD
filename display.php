<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style>
      h1{
        text-align: center;
        font-weight: 600;
        background-color: aquamarine;
        display: block;
      }
      body{
        background-color:lightblue;
      }
    </style>
</head>

<body>
  <br>
  <h1 >CRUD PHP Project</h1>
   <div class="container">
  <div style="text-align: right; " >  <button class="btn btn-primary my-5 btn-sm" ><a href="user.php" class="text-light" > Add user</a></button> </div>
    <table class="table">
  <thead>
    <tr>
     <th scope="col">Sl.No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operation</th>
    </tr>
 </thead>
<?php  
$sql="select * from crud";
$result=mysqli_query($con,$sql);
if($result){
    while ($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $mobile=$row['mobile'];

        echo '<tr>
        <th scope="row">'.$id.'</th> 
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$mobile.'</td>
        <td>
  <button class="btn btn-primary btn-sm my-2" ><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
  <button class ="btn btn-danger btn-sm" ><a class="text-light" href="delete.php?deleteid='.$id.'">Delete</a></button>
</td>
</tr>';
        

    }
}
 
?>

   </div> 

   
</body>
</html>