<?php 
 
       $result = $mysqli->query(" SELECT * FROM  `customers` ");

 ?>




<?php 
                if (isset($_SESSION['messageB'])): ?>
<div class="alert mx-auto alert-<?=$_SESSION['msg_typeB'] ?>">
  <?php 
                    echo $_SESSION['messageB'];
    $_SESSION['messageB'] =  "";
    $_SESSION['msg_typeB'] = '';
                      ?>
</div>
<?php endif  ?>









<table id='produit' class="table table-dark table-striped">
  <thead>

    <tr style='color : #333;'>
      <th scope="col">#</th>
      <th scope="col">lastName</th>
      <th scope="col">firstName</th>
      <th scope="col">adress</th>
      <th scope="col">phone</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">action</th>
      
    </tr>
  </thead>


  <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <th scope="row"><?php echo $row['customerCode']; ?></th>
      <td><?php echo $row['lastName']; ?></td>
      <td><?php echo $row['firstName']; ?></td>
      <td><?php echo $row['adress']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['password']; ?></td>
      
      <td>
        <form method="post" >
        <input type="hidden" name="del" value="<?php echo $row['customerCode'] ?>">
        <input name="de" type="submit" class="btn btn-secondary"></input>
        </form>
      </td>

    </tr>
    <?php endwhile?>



    
 <?php 



 if(isset($_POST['de'])){
    $id = $_POST['del'];
     $mysqli->query("SET FOREIGN_KEY_CHECKS=0; -- to disable them") or die($mysqli->error());
     $mysqli->query("DELETE FROM `customers` WHERE  customerCode = '$id';") or die($mysqli->error());
      $mysqli->query(" SET FOREIGN_KEY_CHECKS=1; -- to re-enable them") or die($mysqli->error());
    $_SESSION['messageB'] =  "Record has been Delete!";
    $_SESSION['msg_typeB'] = 'danger';

 }
   

 ?>
  </tbody>
</table>