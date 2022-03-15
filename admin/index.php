


   <?php include '../contact-data.php'?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ecom</title>
  <link rel="stylesheet" href="src/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
  </script>

  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
  <img src="src/img/Background.png" id='Brn' alt="">

  <!---------------------------- Navbar-------------------------------------->
  <nav>
    <div class="btnb">
      <a class=" b d" href="#produit">Produit</a>
      <a class="b e " href="#client">coustmer</a>
      <a class="b f" href='#commande'>order</a>
    </div>

  </nav>

  <!-------------------------------List of products<---------------------------------------->
  <div id='produit' class='l'></div>
  <div class='container'>
    <h1 class="text-center  mb-3 li"> List of products</h1>
    <?php include 'products/index-products.php'?>
  </div>

  <!-------------------------------List of coustmers--------------------------------------->
  <div id='client' class='l'></div>
  <div class='container'>
    <h1 class="text-center  mb-3 li">List of coustmers</h1>
    <?php include 'customers/index-customers.php'?>
  </div>

  <!-------------------------------Liste des orders<e---------------------------------------->
  <div id='commande' class='l'></div>
  <div class='container'>
    <h1 class="text-center  mb-3 li">Liste des orders</h1>
    <?php include 'order/index-orders.php'?>


</html>