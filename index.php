<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>file upload</title>
</head>
<body>
  <?php
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        require_once("inc/fileUpload.php");
        echo $_FILES['my_file']["name"];
        $source=$_FILES['my_file']["tmp_name"];
        $destination="uploads/abc.pdf";    
        move_uploaded_file($source,$destination);
    }
    ?>
   <form action ="" method ='post' enctype = "multipart/form-data">
       <label> select your file</label>
    <input type ="file" name='my_file'>
    <input type ="submit" value='upload'>
    </form>
</body>
</html>