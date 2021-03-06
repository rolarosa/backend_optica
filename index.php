<!DOCTYPE html>
<html lang="en">
    <head>
      <?php
        error_reporting(E_ALL);
        ini_set ('display_errors', 1);      
        include('vistas/head.php');
        include('controladores/funciones.php');
        $productos = traer_items();       
      ?>
       </head>
    <body id="page-top">
        <!-- Navigation--> 
        <?php
        session_start(); 
        var_dump($_SESSION);
        if ($_SESSION ['user']!= ""){
          include ('vistas/navbar_logueado.php');
        } else {
          include ('vistas/navbar_no_logueado.php');
        }
        ?>
        <!-- Masthead-->
    <header class="masthead">
        <div class="container d-flex h-100 align-items-center">
          <div class="col-6 mx-auto">
            <div class="text-left">
                <h1 class="my-0">Lookeate con estos lentes!</h1>
                <h2 class="mt-3 mb-5">Comprá online desde tu casa</h2>
                <h3 class="mt-3 mb-5">Te esperamos en nuestras tiendas!</h3>
            </div>
          </div>
          <div class="col-6">
            <img src="assets/home.png"/>
          </div>
        </div>
    </header>
        <!-- Productos-->
        <section class="productos-section" id="productos">
            <div class="container">
                <div class="row mx-auto text-center">
                  <div class="col-lg-8 mx-auto">
                      <h3 class="mb-4">Mirate estos lentes</h3>
                  </div>
                </div>

                <div class="row align-items-end">
                <?php foreach($productos as $producto){ ?>
                  <div class="col-xl-3 col-6 mt-4">
                    <div class="producto text-center p-4">
                      <img src="assets/<?php echo $producto ['imagen'];?>.png"/>
                      <h4 class="text-left"><?php echo $producto ['marca']; ?></h4>
                      <h4 class="text-left"><?php echo $producto ['modelo']; ?></h4>
                      <h5 class="text-left">$<?php echo $producto ['precio']; ?></h5>
                      </a>            
                      <button data-id="<?php echo $producto['id']; ?>" data-imagen="<?php echo $producto ['imagen']; ?>" data-marca="<?php echo $producto ['marca']; ?>" data-modelo="<?php echo $producto ['modelo']; ?>" data-precio="<?php echo $producto ['precio']; ?>" class="btn btn-agregar">Agregar</button>
                    </div>
                  </div>
                <?php }?>
                </div>
            </div>
        </section>
        <!-- Contacto-->
        <!-- Footer-->
          <?php include('vistas/footer.php')?> 
        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
