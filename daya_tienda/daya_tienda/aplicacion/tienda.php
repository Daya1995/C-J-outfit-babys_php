<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="../css/juan.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <!---- el navegador del inicio -->
  <header>
    <di class="contedor">
      <div id="marca">
        <h1> <span class="resaltado"> C & J </span> outifit babys</h1>
      </div>
      <nav>
        <ul>
          <li><a href="C&J.php">INICIO</a></li>
          <li class="actial"> TIENDA</li>
          <li> <a href="login.php">SALIR</a></li>
        </ul>
      </nav>
      </div>
  </header>
  <!---- el navegador del final -->
  <br><br>
  <h1> MAMELUCOS</h1>
  <br><br>
  <?php
  for ($i = 0; $i < 30; $i++) { ?>
    <img src="../imagenes/bebys3.jpg" alt="">
    $ 200.000 COP
    <a href=""><button type="button" class="btn btn-secondary btn-lg">COMPRA</a></button></a>


  <?php
  }
  ?>

  <footer>
    <p> celeste &copy; 2019;</p>
  </footer>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>