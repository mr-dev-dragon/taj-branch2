

  <section  class="container" >
    <article >
      <?php include 'tabel.php'; ?>
    </article>
        <article class="d-grid gap-2 col-4 mb-5 mx-auto" >

           <?php if ($addbtn == true): ?>
            
            <form method='post'class='d-grid gap-2 col-12 mb-5 mx-auto' >
          <button  type="submit" method='post' class="btn btn-secondary" name="addbtn">+ Ajouter produit</button>
          </form>
          <?php else: ?>
                  <?php include 'form.php'; ?>
          <?php endif ; ?>

    </article>
  </section> 
