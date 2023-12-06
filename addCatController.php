<?php
    include_once "./dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $catname = $_POST['c_name'];
        $catdesc = $_POST['c_desc'];
         $insert = mysqli_query($conn,"INSERT INTO category
         (cat_title,cat_desc) 
         VALUES ('$catname','$catdesc')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
             header("Location: ./index2.php?category=error");
         }
         else
         {
             echo "Records added successfully.";
             header("Location: ./index2.php?category=success");
         }
     
    }
        
?>