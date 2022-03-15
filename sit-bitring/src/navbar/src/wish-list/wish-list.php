    <div class="modal fade" id="exampleModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable ">
        <div class="modal-content">
          <div class="modal-header">
            <p class="modal-title" id="exampleModalLabel">   
              <img src="https://media.discordapp.net/attachments/948495404796895262/950774673921175652/logo2.png" alt="logo" width="100%" height="30" class="d-inline-block align-text-top">
            </p>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>



          <div class="modal-body">
                <div class=' container '> 
          
              
              <table class="table table-striped">
            <thead>
              <tr>
                <th class=""></th>
                <th class=""></th>
                <th class=""></th>
                <th class=""></th> 
                <th class=""></th>
                <th class=""></th>
              </tr>
            </thead>
            <tbody>


<
              <!-- shopping cart contents -->
              <tr class=' td item-'>
               <td><img src="https://www.kroger.com/product/images/large/front/0007548609205" width="70px" height="70px" id="cart-img"></td>
               <td> </td>
               <td><p class="tital--"> Design Bundle Package</p></td>
                <td><p class="price--">79.00$</p></td>
                <td><p class="remove vvv"><i class="bi aa  bi-trash3"></i></p></td>
                <td class=' add-to-cart-'>
                  <p class="remove  add-to-cart  vvv"><i class="bi aa bi-cart2"></i></p>
                </td>
                <img 
                    style="visibility: hidden; display: none ;position: absolute;"
                    height="300" src="https://www.kroger.com/product/images/large/front/0007548609205"
                    class="first-image">
              </tr>
             
              <!-- shopping cart contents -->
              <tr class=' td item-'>
               <td><img src="https://www.kroger.com/product/images/large/front/0007548609205" width="70px" height="70px" id="cart-img"></td>
               <td> </td>
               <td><p class="tital--"> Design Bundle Package</p></td>
                <td><p class="price--">79.00$</p></td>
                <td><p class="remove vvv"><i class="bi aa  bi-trash3"></i></p></td>
                <td class=' add-to-cart-'>
                  <p class="remove  add-to-cart  vvv"><i class="bi aa bi-cart2"></i></p>
                </td>
                <img 
                    style="visibility: hidden; display: none ;position: absolute;"
                    height="300" src="https://www.kroger.com/product/images/large/front/0007548609205"
                    class="first-image">
              </tr>
 
            </tbody>
          </table>
        </div> 
          </div>      
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" ><i class="bi bi-trash3"></i>delet </button>
            <button type="button" class="btn btn-success"> <i class="bi bi-plus-circle-dotted"></i> add to cart</button>
          </div>
        </div>
      </div>
    </div>
    <script>
          $('.add-to-cart-').on('click', function (){
                  var cart = $('.bi-cart3');
                  var imgtodrag = $(this).parent('.item-').find("img").eq(0);
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
                              'display': 'block',
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

      



function wishList() {
  var list = document.getElementById("toast");
  list.classList.add("show");
  list.innerHTML = '<i class="bi bi-balloon-heart"> . </i> .  Product added to List';
  setTimeout(function () {
    list.classList.remove("show");
  }, 3000);
}
function vvv() {
  var cart = document.getElementById("toast-cart");
  cart.classList.add("show");
  cart.innerHTML =
    '<i class="bi bi-basket"> . </i> .  Product added to cart';
  setTimeout(function () {
    cart.classList.remove("show");
  }, 3000);
}





































     
  </script>





























