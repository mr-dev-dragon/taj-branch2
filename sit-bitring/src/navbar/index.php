
<?php  
if (isset($_POST['log_up'])){
  $nav_t = true; 
} else {
    $nav_t = false; 
}?> 
 <nav>
  <div class="container">
    <div class='nav'>


    <ul class="navbar-leftt">
    <?php if ( $nav_t == false){ ?>
          <li>
          <a>
            <i class="bi bi-person-circle"></i>
          </a>
        </li>
    <?php } else { ?>    
        <li>
          <a>
            <img src="https://avatars.githubusercontent.com/u/71600486?s=400&u=6e5923e3de08a700ca4576b82297ac1aef4e2c02&v=4"class="rounded-circle"height="22"alt="profile picture"loading="lazy"/>
          </a>
        </li>
      <?php } ?>
        <li class="cc">
          <a  href="#">
            <img src="https://media.discordapp.net/attachments/948495404796895262/950774673921175652/logo2.png" alt="" width="100%" height="30" class="d-inline-block align-text-top">
          </a>
      </li>
    </ul> <!--end navbar-left -->



    <?php if ( $nav_t == false){ ?>

 
       <ul class="navbar-rightt">
            <li class="nav-item ">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
                 log-in
              </button>
          </li>
        
      </ul>     
                  <?php 
              include "src/login/login.php";
              
           ?>

    <?php } else { ?>   
       <ul class="navbar-rightt">
            <li class="nav-item ">
              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModall">
                <i   class="bi  bi-heart"></i > 
                  <span class="badge bg-danger badge-danger badge-pill">
                      <span data-counter="cart_items">2</span>
                  </span>
              </button>
          </li>
          <li>
             <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <i class="bi  bi-cart3"></i>
                  <span class="bg-danger badge">
                   <span class="total-count"></span>
                  </span>
              </button>                
            </li>
      </ul>     

            <?php 
              include "src/cart/cart.php";
              include "src/wish-list/wish-list.php";
           ?>
      <?php } ?>
     </div> 
  </div> 
</nav>
<style>
  .nav{
    display:flex;
    justify-content:space-between;
    margin-top:20px;
  }
  ul{
      list-style: none;
  }
  .navbar-leftt{
    float: left;
      display: flex; 
      gap:20px;
  }
  .navbar-rightt{
 float: right;
  justify-content:end;
  display: flex;
    gap:20px;
  }
</style>



