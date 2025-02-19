<table>
    <thead>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
        </tr>
    </thead>
</table>


<?php
$query= "SELECT * FROM products" ;
$select_all_products= mysqli_query($conn,$query);
while($row = mysqli_fetch_assoc($select_all_category)){
   // to print category title & id as an array through converting it to a string format by assigning it to a string variable
   $prod_id = $row['product_id'];
   $prd_brand = $row['product_brand'];
   $prd_name = $row['product_name'];
   $prd_price = $row['product_price'];
   $stocks = $row['stock_availabiity'];
   ?>
   <!-- // we use li because we want it to come out as a list item, we use double quotes due to the fact that we are using {} -->
   <tr>
       <td><?php echo $prod_id; ?></td>
       <td><?php echo $prd_brand; ?></td>
       <td><?php echo $prd_name; ?></td>
       <td><?php echo $prd_price; ?></td>
       <td><?php echo $stocks; ?></td>
       <td> <?php echo "<a href='categories.php?delete={$cat_id}'>Delete</a>"; ?>    <!-- whenever the cat_id is found , delete it  -->
             <?php echo "<a href='categories.php?edit={$cat_id}'>Edit</a>"; ?>    </td>   
   </tr>