<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Estilos/historial-ventas.css">
    <title>Historial de Ventas</title>
</head>
<body>
    <header>
        <nav>
            <img src="../../assets/media/logo.png" alt="">

            <a>Admin</a>
        </nav>
    </header>
    <main>
        <article class="ventas">
            <h1>Historial de Ventas</h1>
            <div class="lista-ventas">

                <?php 
                        include_once("../../Conexion/conexion.php");

                        $sql = "SELECT * FROM productos";
                        $res = $conexion -> query($sql);
                        if($res -> num_rows > 0){
                            while($row = $res -> fetch_assoc()){
                                echo'
                                    <div class="ventas-carta">
                                        <p>Venta1</p>
                                        <div class="btns">
                                            <button class="btn-vermas">Ver Más</button>
                                        </div>
                                    </div>
                                    <div class="ventas-carta">
                                        <p>Venta2</p>
                                        <div class="btns">
                                            <button class="btn-vermas">Ver Más</button>
                                        </div>
                                    </div>
                                    <div class="ventas-carta">
                                        <p>Venta3</p>
                                        <div class="btns">
                                            <button class="btn-vermas">Ver Más</button>
                                        </div>
                                    </div>
                                </div>';
                            }
                        }
                        ?>
        </article>
    </main>
</body>
</html>