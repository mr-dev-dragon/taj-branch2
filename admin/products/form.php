<FORM action="products/process.php" method="post">
  <input type="hidden" name="id" value="<?php echo $id; ?>">

  <div class="input-group">
    <span class="input-group-text  bg-dark">
      <i class="bi bi-person-circle"></i>
    </span>
    <input type="text" name="productName" id="1a" class=" form-control" placeholder="Enter  product name" required
      value="<?php echo $productName; ?>">

    <span class="input-group-text bg-dark">
      <i class="bi bi-arrow-counterclockwise"></i>
    </span>
  </div>
  <div class="input-group">
    <span class="input-group-text bg-dark">
      <i class="bi bi-file-earmark-person-fill"></i>
    </span>
    <input type="text" name="description" id="2a" class="form-control" placeholder="Enter product description " required
      value="<?php echo $description; ?>">
    <span class="input-group-text bg-dark">
      <i class="bi bi-arrow-counterclockwise"></i>
    </span>
  </div>




  <div class="input-group">
    <span class="input-group-text bg-dark">
      <i class="bi bi-calendar-date-fill"></i>
    </span>
    <input type="number" name="unitPrice" id="3a" class="form-control" placeholder="Enter Price of the product"
      value="<?php echo $unitPrice; ?>">
    <span class="input-group-text bg-dark">
      <i class="bi bi-arrow-counterclockwise"></i>
    </span>
  </div>


  <div class="input-group">
    <span class="input-group-text bg-dark">
      <i class="bi bi-card-checklist"></i>
    </span>
    <input type="number" name="quantityInStock" id="4a" class="form-control" placeholder="enter  quantity In Stock"
      value="<?php echo $quantityInStock; ?>">
    <span class="input-group-text bg-dark">
      <i class="bi bi-arrow-counterclockwise"></i>
    </span>
  </div>






  <div class="input-group">
    <span class="input-group-text bg-dark">
      <i class="bi bi-image"></i>
    </span>
    <input type="url" name="image" id="7a" class="form-control" placeholder=" your image URL"
      value="<?php echo $image; ?>">
    <span class="input-group-text bg-dark">
      <i class="bi bi-arrow-counterclockwise"></i>
    </span>
  </div>
  <div class="mb-5 mt-4 text-center">

    <script>
    function pro() {
      let timerInterval
      Swal.fire({
        title: 'Auto close alert!',
        html: 'I will close in <b></b> milliseconds.',
        timer: 1000,
        timerProgressBar: true,
        didOpen: () => {
          Swal.showLoading()
          const b = Swal.getHtmlContainer().querySelector('b')
          timerInterval = setInterval(() => {
            b.textContent = Swal.getTimerLeft()
          }, 100)
        },
        willClose: () => {
          clearInterval(timerInterval)
        }
      }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
          console.log('I was closed by the timer')
        }
      })
    }
    </script>


    <?php if ($update == true): ?>

    <button onclick="pro();" style="width:200px" type="submit" id="" class="btn btn-secondary "
      name="update">update</button>
    <?php else: ?>
    <button onclick="pro();" style="width:200px" type="submit" id="" class="btn btn-secondary" name="save">save</button>
    <?php endif ; ?>
  </div>

</FORM>