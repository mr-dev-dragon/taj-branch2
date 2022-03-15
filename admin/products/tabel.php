<?php require_once 'process.php'; ?>
<?php 
                if (isset($_SESSION['message'])): ?>
<div class="alert mx-auto alert-<?=$_SESSION['msg_type'] ?>">
  <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']); 
                    ?>
</div>
<?php endif  ?>
<?php 

       $result = $mysqli->query(" SELECT * FROM  `products` ");

 ?>

<table id='produit' class="table table-dark table-striped">
  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">product Name</th>
      <th scope="col">description</th>
      <th scope="col">unit Price</th>
      <th scope="col">quantity In Stock</th>
      <th scope="col">image</th>
      <th scope="col" colspan="2">action</th>
    </tr>
  </thead>




  <tbody>
    <?php while ($row = $result->fetch_assoc()): ?>
    <tr>
      <th scope="row"><?php echo $row['productID']; ?></th>
      <td><?php echo $row['productName']; ?></td>
      <td><?php echo $row['description']; ?></td>
      <td><?php echo $row['unitPrice']; ?></td>
      <td><?php echo $row['quantityInStock']; ?></td>

      <td>
        <img src="<?php echo $row['image']; ?>" alt="this is a products image" width=35px" height="35px">
      </td>
      <td>
        <a href="index.php?edit=<?php echo $row['productID']; ?>#produit" class="btn btn-secondary"> Edit</a>
        <script>
        function sure() {
          const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
              confirmButton: 'btn btn-success',
              cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
          })
          swalWithBootstrapButtons.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!',
            cancelButtonText: 'No, cancel!',
            reverseButtons: true
          }).then((result) => {
            if (result.isConfirmed) {
              swalWithBootstrapButtons.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success',
              )

              window.location = "index.php?delete=<?php echo $row['productID']; ?>";
            } else if (
              /* Read more about handling dismissals below */
              result.dismiss === Swal.DismissReason.cancel
            ) {
              swalWithBootstrapButtons.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
              )
            }
          })
        }
        </script>
        <a id="delete" onclick="sure();" class="btn btn-secondary">Delte</a>
      </td>
    </tr>
    <?php endwhile?>
  </tbody>
</table>