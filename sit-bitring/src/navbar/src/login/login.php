


    


    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
          




        <!-- Pills panels -->
        <div class="tab-content">


            <form id="register" class="text-center needs-validation"  method="post" name="register-form">


            
              <!-- farst Name input -->
              <div class="form-floating mb-5">
                <input type="text" id="f-name" class="form-control" name="f-name" required="" minlength="3" >
                <label for="f-name"  style="margin-left: 0px; ">Your ferst name</label>
            
                <!-- last name input -->
                <div class="form-floating mb-5">
                <input type="text" id="l-name" class="form-control" name="l-name" required="" minlength="3">
                <label for="l-name"  style="margin-left: 0px;">Your last name</label>
             
                            <!-- adress input -->
                <div class="form-floating mb-5">
                <input type="text" id="adriss" class="form-control" name="adriss" required="" minlength="6">
                <label for="adriss"  style="margin-left: 0px;">Your adress</label>
            
                            <!--phone input -->
                <div class="form-floating mb-5">
                <input type="number" id="phone" class="form-control" name="phone" required="" minlength="10">
                <label for="phone"  style="margin-left: 0px;">Your phone</label>
             

              <!-- Email input -->
              <div class="form-floating mb-5">
                <input type="email" id="email" class="form-control" name="email" required="">
                <label for="email"  style="margin-left: 0px;">Your email</label>
             
              <!-- Password input -->
              <div class="form-floating mb-5">
                <input type="password" id="password1" class="form-control" name="password1" autocomplete="off" required="" >
                <label for="password1"  style="margin-left: 0px;">creat a password</label>
              
              <!-- Repeat Password input -->
              <div class="form-floating mb-5">
                <input type="password" id="password2" class="form-control" name="password2" autocomplete="off" required="" >
                <label for="password2"  style="margin-left: 0px;">Repeat password</label>
             
              <!--img input -->
               <div class="form-floating mb-5">
                <input type="url" id="img-" class="form-control  " name="img" autocomplete="off" required="" >
                <label for="img-"  style="margin-left: 0px;">inter your profile img url</label>
              <div class="form-notch"><div class="form-notch-leading" style="width: 9px;"></div><div class="form-notch-middle" style="width: 106.4px;"></div><div class="form-notch-trailing"></div></div></div>
              
              <!-- Subscribe checkbox -->
              

              <!-- Subscribe checkbox -->

              <button  class="btn  btn-block mb-3" id="AJAXAuthRegisterBtn" type="submit" value="SIGNUP" name="log_up" style=" background:#D3A589;">
                Sign up
              </button>

            </form>
            <!-- Default form register  -->

          </div>
          <!--/.Panel 2-->



 <?php




if (isset($_POST['log_up'])){
  $f_name = $_POST['f-name'];
  $l_name = $_POST['l-name'];
  $adress = $_POST['adriss'];
  $phone = $_POST['phone'];
  $gmail = $_POST['email'];
  $password1 = $_POST['password1'];
  $password2 = $_POST['password2'];
   $nav_t = true; 
 if ($password1 ==  $password2 ){
 $mysqli->query("INSERT INTO `customers`(`lastName`, `firstName`, `adress`, `phone`, `email`, `password`) 
 VALUES ('$l_name','$f_name','$adress','$phone','$gmail','$password2')") or die($mysqli->error());
  $_SESSION['f_nam'] =  $f_name;
  $_SESSION['l_name'] = $l_name;
  $_SESSION['img'] = $img;
  $_SESSION['EM'] = $gmail;

  $pass = true;

 }
 else{
    $pass = false;
 }

}
else{
    $pass = false;
 }

?>

          </div>      
        </div>
      </div>
    </div>
 
       

