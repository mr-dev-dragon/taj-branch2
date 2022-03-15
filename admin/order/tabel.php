<?php

       $result = $mysqli->query(" SELECT * FROM  `orders` ");
      

 ?>




<table class="table table-dark table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">customerName Code</th>
      <th scope="col">order Date</th>
      <th scope="col">delivery Addres</th>

    </tr>
  </thead>

 <tbody>
  <?php while ($row = $result->fetch_assoc()): ?>
    <tr class="table-active">
      <th><?php echo $row['orderID']; ?></th>
      <td><?php echo $row['customerCode']; ?></td>
      <td><?php echo $row['orderDate']; ?></td>
      <td><?php echo $row['deliveryAddress']; ?></td>

 


   
    <?php endwhile ?>
    


  </tbody>
</table>
  <div class='container'>
    <h1 class="text-center  mb-3 li">order ditals</h1>

    




<table class="table table-dark table-striped">
  <thead>
    <tr>

      <th scope="col">productID</th>
      <th scope="col">num</th>

    </tr>
  </thead>

 <tbody>
      <?php
       
  
  
       $mysqli = new mysqli('localhost', 'root', '123','Database_e-commerce');
       $resulttwo = $mysqli->query(" SELECT * FROM `orderdetails`");?>
      <?php while ($rowtwo = $resulttwo->fetch_assoc()): ?>
        <tr>
        <td><?php echo $rowtwo['productID']; ?></td>
        <td> <?php echo $rowtwo['orderedQuantity']; ?></td>
      </tr>
       


       <?php endwhile ?>
    


  </tbody>
</table>



  </div>

