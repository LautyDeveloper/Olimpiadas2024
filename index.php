<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./index.css">
    <title>NaturalFIT JUNTANDO</title>
</head>

<body>

    <div class="ventana-modal oculto">
        <div class="ventana-modal__content">
            <div class="close">X</div>
        </div>            
    </div>
 
    <div class="carrito-container">
        <div class="carrito">
            <div class="arriba"><p class="cerrar-carrito">X</p></div>
            <div class="carrito-productos">
            </div>
        </div>
    </div>
 
    <header>
        <nav>
            <img src="./assets/media/logo.png" alt="" class="logo">

            <?php 
            include_once("Conexion/conexion.php");
                    if(isset($_SESSION["nombre"])){
                      echo'<a class="a-user" href="./user.php">';
                      echo $_SESSION['nombre'];
                      echo'</a>';
                    }
                ?>
                <?php
                    if(isset($_SESSION["nombre"])){
                      echo '<a class="logout" href="./Sesiones/logout.php">';
                      echo 'Cerrar sesión';
                      echo '</a>';
                    }
                ?>
                <?php
                    if(!isset($_SESSION["nombre"])){
                      echo'<a href="Sesiones/Iniciar_Sesion/login.php" class="desktop-item">';
                      echo'Iniciar Sesión';
                      echo'</a>';                      
                    }
                ?>
            <a href="Panel_De_Administrador/admin-panel.html">admin-panel</a>
            <div class="abrir-carrito"><img class="" src="./assets/media/carrito-de-compras.png"></div>

        </nav>
    </header>          

        
    <article class="hero">
        <div class="hero__text">
            <h1>NATURALFIT</h1>
            <p>CADA PASO, UNA CONQUISTA</p>
        </div>
        <a href="#buscador">Empieza tu Compra</a>
    </article>
    <article class="banner">
        <p>El verdadero viaje comienza donde termina tu zona de confort</p>
    </article>

    <article class="productos-destacados">
        <ul>
            <li><img src="./assets/media/Captura de pantalla 2024-08-14 140728.png" alt=""></li>
            <li><img src="./assets/media/mancuernas.avif" alt=""></li>
            <li><img src="./assets/media/mancuernas.avif" alt=""></li>
            <li><img src="./assets/media/mancuernas.avif" alt=""></li>
        </ul>
    </article>
    
    <article id="buscador" class="busqueda">
        <div>
            <div class="img-container">
                <img src="./assets/media/lupa.png" alt="">
            </div>
            <input type="search" name="" placeholder="Busca el producto que quieras">
        </div>
    </article>
    <article class="categorias">
        <h4>Categorías</h4>
        <div class="categoria-btns">
            <a href="#">Categoria1</a>
            <a href="#">Categoria2</a>
            <a href="#">Categoria3</a>
        </div>
    </article>
    <article class="productos">
        <h5>Productos</h5>
        <div class="lista-productos">
            <?php 
                $limite = isset($_GET['limite']) ? intval($_GET['limite']) : 4;

                $sql = "SELECT * FROM productos LIMIT  $limite" ;
                $res = $conexion -> query($sql);
                if($res -> num_rows > 0){
                    while($row = $res -> fetch_assoc()){
                    echo'
                        <div class="producto-carta">
                            <p>'.$row["Nombre_Producto"].' - <b class="verde">$'.$row['Precio'].'</b></p>
                            <span style="display:none"=>'.$row["Descripcion"].'</span>
                            <div class="btns">
                                <button class="btn-carrito" idProduct="'.$row["ID_Producto"].'" nombreProduct = "'.$row["Nombre_Producto"].'" precioProduct= "'.$row["Precio"].'"><img src="./assets/media/carrito-de-compras.png" alt=""></button>
                                <button class="btn-vermas" idProd="'.$row["ID_Producto"].'" NombreProd = "'.$row["Nombre_Producto"].'" desc="'.$row["Descripcion"].'" categ="'.$row["Categoria"].'" stock="'.$row["Stock"].'" precio="'.$row["Precio"].'">Ver Más</button>
                            </div>
                        </div>
                        ';
                    }
                }
            ?>
        <a id="vermasid" class="btn-cargar" name="vermas" type="submit" href="Acciones_Usuario/vermas.php?limite=<?php echo "$limite";?>">Ver Más</a>
        </div>
    </article>

    <footer>

        <section class="footer-content">
            <img src="./assets/media/logo.png" alt="logo de la empresa">
            <div class="footer__info">
                <h4>INFORMACIÓN</h4>
                <p>Natural fit es una empresa dedicada a la venta de productos relacionados al deporte al aire libre</p>
                <div class="redes">
                    <img src="./assets/media/logotipo-de-instagram.png" alt="">
                    <img src="./assets/media/facebook (1).png" alt="">
                </div>
            </div>
        </section>
        <section class="footer-copy">
            <p>Copyright - Olimpiadas 2024 tec 5</p>
        </section>

    </footer>

    <script src="./assets/js/main.js"></script>
    <script src="./assets/js/cart.js"></script>
</body>

</html>