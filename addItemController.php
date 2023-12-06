<?php
    include_once "./dbconnect.php";
    
    if(isset($_POST['upload']))
    {
       
        $ProductName = $_POST['p_name'];
        $desc= $_POST['p_desc'];
        $price = $_POST['p_price'];
        $category = $_POST['category'];
       
            
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="img/products/";
        $image=$location.$name;

        $target_dir="img/products/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

         $insert = mysqli_query($conn,"INSERT INTO products
         (product_title,product_img1,product_price,product_desc,cat_id) 
         VALUES ('$ProductName','$image',$price,'$desc','$category')");
 
         if(!$insert)
         {
             echo mysqli_error($conn);
         }
         else
         {
             echo "Records added successfully.";
         }
     
    }
        
?>