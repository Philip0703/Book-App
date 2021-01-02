<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="GET">
    <table class="table"><tr>
        <td>employee code</td>
        <td><input class="form-control"  name="ecode" type="text"></td>
    </tr><tr>
        <td>employee name </td>
        <td><input class="form-control"  name="ename" type="text"></td>
    </tr><tr>
        <td>salary</td>
        <td><input class="form-control"  name="salary" type="text"></td>
    </tr><tr>
        <td>designation</td>
        <td><input class="form-control"  name="des" type="text"></td>
    </tr><tr>
        <td></td>
       <td><button class="btn btn-danger" name="btn">submit</button></td>
    </tr></table>
</form>
</body>
</html>
<?php
if(isset($_GET["btn"]))
{
    $ec=$_GET["ecode"];
    $en=$_GET["ename"];
    $s=$_GET["salary"];
    $d=$_GET["des"];
    
    echo"<table class='table'><tr>
        <td>ecode</td>
        <td>$ec</td>
    </tr><tr>
        <td>ename </td>
        <td>$en</td>
    </tr><tr>
        <td>salary</td>
        <td>$s</td>
    </tr><tr>
        <td>des</td>
        <td>$d</td>
    </tr></table>";
}
?>