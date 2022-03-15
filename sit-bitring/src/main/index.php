
    
<?php
$array = [];
$_SESSION["heart"] = $array = []; 
   $heart = true;

            


?>
<div id="toast"></div>
<div id="toast-cart"></div>
<div class="containerc">



 <div class="card bg-dark text-white">
  <img src="https://www.ovsfashion.com/on/demandware.static/-/Sites/default/dw1f93cce3/15092021/Landing_Beauty_BRAND_DSK_03_1600.4a68d581.jpg" class="card-img" alt="...">
  <div class="card-img-overlay">
    
 <img class="card-title " src="https://media.discordapp.net/attachments/948495404796895262/950774673921175652/logo2.png" alt="" width="30%" height="50" class="d-inline-block align-text-top">
  </div>
</div>

<!-- col-xs-12 col-sm-11 col-md-8 col-lg-4 col-xl-3  col-xxl-2 -->

  <hr>
  <br>
  <div class="row">
<?php 

       $result = $mysqli->query(" SELECT * FROM  `products` ");

 ?>

<?php while ($row = $result->fetch_assoc()): ?>
        <div class=" col-lg-3">
          <div class="card" style="width: 18rem;">
        <button method="post" id="heart" class="heart">
          <i onclick="wishList()" name="heart" class="fas fa-heart"></i>
          <?php

              $heart = true;
               array_push($array ,$row['productID']);
            
            ?>
        </button>
        <img height="300" src="<?php echo $row['image']; ?>"class="first-image">
        <center> <h1 id="titlel">    <?php echo $row['productName']; ?></h1></center>
        <div class="card-body">
          <a id='description' ><center> <?php echo $row['description']; ?></center></a>
          <hr>
          <form  action="">
              <input type="hidden" name="id" value="<?php echo $row['productID']; ?>">
              <input type="hidden" name="qis" value="<?php echo $row['quantityInStock'] ;?>">
              <div class='d-flex item'>
                  <img style="visibility: hidden; position: absolute" height="300" src="<?php echo $row['image']; ?>"class="first-image">
                  <h4 class="card-title"><?php
                  if ($row['unitPrice'] == 0){
                    echo 'free';
                  }else{ echo $row['unitPrice'] . "$"; }
                 ?>
                  </h4>
                  <p onclick="vvv()" class="pp add-to-cart"data-price="<?php  echo $row['unitPrice'] ;?>"
                   data-name="<?php echo $row['image']; ?>"  data-tital="<?php echo $row['productName']; ?>"   data-id="<?php echo $row['productID']; ?>"type="submit"><i class="bi  bi-plus-circle-dotted"></i> add to cart</p> 
               </div>
          </form>
        </div>
      </div>
      </div>
    <?php endwhile ?>








    
    <style>
      .pp{
          background-color:#37680f;
            border-radius: 5px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            float: right;
            color: rgb(255, 255, 255);
          border:2px solid #333;
            padding: 10px 20px 10px 20p;
      }
    </style>

    <script>
      







var shoppingCart = (function() {

  cart = [];
  function Item(name, price, count, img ,id) {
    this.name = name;
    this.price = price;
    this.count = count;
    this.img = img;
    this.id = id;
  }
  
 
  function saveCart() {
    sessionStorage.setItem('shoppingCart', JSON.stringify(cart));
  }
  
    
  function loadCart() {
    cart = JSON.parse(sessionStorage.getItem('shoppingCart'));
  }
  if (sessionStorage.getItem("shoppingCart") != null) {
    loadCart();
  }
  

  var obj = {};
  
  // Add to cart
  obj.addItemToCart = function(name, price, count,id , tital) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart[item].count ++;
        saveCart();
        return;
      }
    }
    var item = new Item(name, price, count  ,id ,tital);
    cart.push(item);
    saveCart();
  }
  // Set count from item
  obj.setCountForItem = function(name, count) {
    for(var i in cart) {
      if (cart[i].name === name) {
        cart[i].count = count;
        break;
      }
    }
  };
  // Remove item from cart
  obj.removeItemFromCart = function(name) {
      for(var item in cart) {
        if(cart[item].name === name) {
          cart[item].count --;
          if(cart[item].count === 0) {
            cart.splice(item, 1);
          }
          break;
        }
         saveCart();
        return;
    }

    saveCart();
  }

  // Remove all items from cart
  obj.removeItemFromCartAll = function(name) {
    for(var item in cart) {
      if(cart[item].name === name) {
        cart.splice(item, 1);
        break;
      }
    }
    saveCart();
  }

  // Clear cart
  obj.clearCart = function() {
    cart = [];
    saveCart();
  }

  // Count cart 
  obj.totalCount = function() {
    var totalCount = 0;
    for(var item in cart) {
      totalCount += cart[item].count;
    }
    return totalCount;
  }

  // Total cart
  obj.totalCart = function() {
    var totalCart = 0;
    for(var item in cart) {
      totalCart += cart[item].price * cart[item].count;
    }



















    return Number(totalCart.toFixed(2));
  }

  // List cart
  obj.listCart = function() {
    var cartCopy = [];
    for(i in cart) {
      item = cart[i];
      itemCopy = {};
      for(p in item) {
        itemCopy[p] = item[p];

      }
      itemCopy.total = Number(item.price * item.count).toFixed(2);
      cartCopy.push(itemCopy)
    }
    return cartCopy;
  }

  return obj;
})();


$('.add-to-cart').click(function(event) {
  event.preventDefault();
  var name = $(this).data('name');
  var price = Number($(this).data('price'));
    var proid = $(this).data('id');
    var tital = $(this).data('tital');
    
  shoppingCart.addItemToCart(name, price, 1);
  displayCart();
});

$('.clear-cart').click(function() {
  shoppingCart.clearCart();
  displayCart();
});


function displayCart() {
  var cartArray = shoppingCart.listCart();
  var output = "";
  for(var i in cartArray) {



































    
    output += "<>"
  
       + "<td><img src='" + cartArray[i].name + "' width='70px' height='70px' id='cart-img'>  </td>"
      + "<td class='btn-'>" + cartArray[i].price + "$" + "</td>"
      + "<td><div class='input-group'><button  class='minus-item input-group-addon btn btn-success' data-name=" + cartArray[i].name + ">-</button>"
      + "<input type='number' class='item-count form-control' data-name='" + cartArray[i].name + "' value='" + cartArray[i].count + "'>"
      + "<button type='button' class='plus-item btn btn-success input-group-addon' data-name=" + cartArray[i].name + ">+</button></div></td>"
  
      + " = " 
      + "<td class='btn-'>" + cartArray[i].total +"$" + "</td>" 
      + "<td><button class='delete-item btn btn-danger' data-name=" + cartArray[i].name + "><i class='bi bi-trash3-fill'></i></button></td>";
      +  "<input type='hidden' name='tital' value='"cartArray[i].tital "'>";
      +  "<input type='hidden' name='proid' value='"cartArray[i].proid "'>";
      +  "</tr>";


























  }
  $('.show-cart').html(output);
  $('.total-cart').html(shoppingCart.totalCart());
  $('.total-count').html(shoppingCart.totalCount());
}

// Delete item button

$('.show-cart').on("click", ".delete-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCartAll(name);
  displayCart();
})


// -1
$('.show-cart').on("click", ".minus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.removeItemFromCart(name);
  displayCart();
})
// +1
$('.show-cart').on("click", ".plus-item", function(event) {
  var name = $(this).data('name')
  shoppingCart.addItemToCart(name);
  displayCart();
})

// Item count input
$('.show-cart').on("change", ".item-count", function(event) {
   var name = $(this).data('name');
   var count = Number($(this).val());
  shoppingCart.setCountForItem(name, count);
  displayCart();
});

displayCart();


















$('.add-to-cart').on('click', function (){
        var cart = $('.bi-cart3');
        var imgtodrag = $(this).parent('.item').find("img").eq(0);
        if (imgtodrag) {
            var imgclone = imgtodrag.clone()
                .offset({
                top: imgtodrag.offset().top,
                left: imgtodrag.offset().left
            })
                .css({
                'opacity': '1',
                    'position': 'absolute',
                     'visibility': 'visible',
                    'height': '350px',
                    'width': '250px',
                    'z-index': '100'
            })
                .appendTo($('body'))
                .animate({
                'top': cart.offset().top + 10,
                    'left': cart.offset().left + 10,
                    'width': 75,
                    'height': 75
            }, 1500, 'easeInOutExpo');
            
            setTimeout(function () {
                cart.effect("", {
                      pieces:16


                }, 200);
            }, 1500);

            imgclone.animate({
                'width': 5,
                    'height': 5
            }, function () {
                $(this).detach();
            });
          }
        } );
    
     
  </script>




   <?php include 'header.php' ?>

     


 
</div>


