<?php
    include_once "./dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $size = $_POST['size'];
       
         $insert = mysqli_query($conn,"INSERT INTO sizes
         (size_name)   VALUES ('$size')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ./index2.php?size=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ./index2.php?size=success");
         }
     
    }
        
?>