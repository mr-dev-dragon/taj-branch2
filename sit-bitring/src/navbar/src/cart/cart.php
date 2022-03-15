




<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable ">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title" id="staticBackdropLabel"> 
           <img src="https://media.discordapp.net/attachments/948495404796895262/950774673921175652/logo2.png" alt="logo" width="100%" height="30" class="d-inline-block align-text-top">
         </p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form  method="post">
         <table class="show-cart table">  
        </table>
        <div class='hoho'>Total price: <span class=" btn- total-cart"> </span>$</div>
      </div>
        <div><button type="button" class="clear-cart btn btn-danger"><i class="bi bi-trash3"></i>Clear Cart</button></div>
        <BR>
        <button name='buynow' type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-credit-card-2-front-fill"></i> buy now</button>
  </form>      
      </div>
    </div>
  </div>
</div>
  </div>
</body>
 <style>
    .btn-{
        color:#37680f;
        font-size:20px;
    }
    .hoho{
      font-size:20px;
      color:red;
    }
 </style>
 <?php 
  


if (isset($_POST['buynow'])){

  $id = $_POST['id'];
  $productName = $_POST['productName'];

  $mysqli->query("INSERT INTO `orderdetails`( `productID`, `orderedQuantity`) 
  VALUES ('[value-2]','[value-3]')") or die($mysqli->error());

}



 
 
 include 'pay.php';
 
 
 
 ?>