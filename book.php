<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
<div class="container"><div class="row">

<div class="col col-12 col-sm-4  "></div>
<div class="col col-12 col-sm-4  "></div>
    <table class="table table-borderless"><tr>
        <td>Book name</td>
        <td><input class="form-control"  name="bname" type="text"></td>
    </tr><tr>
        <td>Author</td>
        <td><input class="form-control"  name="author" type="text"></td>
    </tr><tr>
        <td>Price</td>
        <td><input class="form-control"  name="price" type="number"></td>
    </tr>
    <tr>
        <td></td>
       <td><button class="btn btn-danger" name="btn">Register</button></td>
    </tr></table>
    <div class="col col-12 col-sm-4  "></div>
</form>
</body>
</html>
<?php
if(isset($_POST["btn"]))
{
    $bn=$_POST["bname"];
    $a=$_POST["author"];
    $p=$_POST["price"];
   
   $connection=new mysqli("localhost","root","","bookdemo");
   $sql="INSERT INTO `books`(`title`, `author`, `price`)
   VALUES('$bn','$a','$p')"; 

   $result=$connection->query($sql);
   if($result===true)
   {
       echo"<script>alert('Successfully inserted')</script>";
   }
   else
   {
    echo"<script>alert('Something went wrong')</script>";
   }
   
    
   
}
?>