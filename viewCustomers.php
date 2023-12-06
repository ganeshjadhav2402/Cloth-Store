<div >
  <h2>All Customers</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Username </th>
        <th class="text-center">Email</th>
        <th class="text-center">Contact Number</th>
        <th class="text-center">Address</th>
      </tr>
    </thead>
    <?php
      include_once "./dbconnect.php";
      $sql="SELECT * from customer";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["customer_name"]?></td>
      <td><?=$row["customer_email"]?></td>
      <td><?=$row["customer_contact"]?></td>
      <td><?=$row["customer_address"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>