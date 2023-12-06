<div class="container">
<table class="table table-striped">
    <thead>
        <tr>
            <th>S.N.</th>
            <th>Product Image</th>
            <th>Product Name</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Unit Price</th>
        </tr>
    </thead>
    <?php
        include_once "./dbconnect.php";
        $ID= $_GET['orderID'];
        //echo $ID;
        $sql="SELECT * from product_size_variation v, orders d 
        where v.variation_id=d.variation_id AND
        d.order_id=$ID";
        $result=$conn-> query($sql);
        $count=1;
        if ($result-> num_rows > 0){
            while ($row=$result-> fetch_assoc()) {
                $v_id=$row['variation_id'];
    ?>
                <tr>
                    <td><?=$count?></td>
                    <?php
                       $subqry="SELECT * from products p, product_size_variation v
                       where p.products_id=v.products_id AND v.variation_id=$v_id";
                       $res=$conn-> query($subqry);
                       if($row2 = $res-> fetch_assoc()){
                    ?>
                    <td><img height="80px" src="<?=$row2["product_img1"]?>"></td>
                    <td><?=$row2["product_title"] ?></td>

                    <?php
                        }

                        $subqry2="SELECT * from sizes s, product_size_variation v
                        where s.size_id=v.size_id AND v.variation_id=$v_id";
                        $res2=$conn-> query($subqry2);
                        if($row3 = $res2-> fetch_assoc()){
                        ?>
                    <td><?=$row3["size_name"] ?></td>
                    <?php
                        }
                    ?>
                    <td><?=$row["order_qty"]?></td>
                    <td><?=$row["order_price"]?></td>
                </tr>
    <?php
                $count=$count+1;
            }
        }else{
            echo "error";
        }
    ?>
</table>
</div>
