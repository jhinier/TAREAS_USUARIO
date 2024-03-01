<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="../Admin/Admin.css">
        
        <title>Sidebar sub menus</title>
    </head>
    <body id="body-pd">
        <div class="l-navbar" id="navbar">
            <nav class="nav">
                <div>
                    <div class="nav__brand">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <a href="#" class="nav__logo">APLICACIONES</a>
                    </div>
                    <div class="nav__list">
                        <a href="../Admin/index.php" class="nav__link active">
                            <ion-icon name="document-text-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Gestion de tareas</span>
                        </a>

                        <div  class="nav__link collapse">
                            <ion-icon name="folder-outline" class="nav__icon"></ion-icon>
                            <span class="nav__name">Reportes</span>

                            <ion-icon name="chevron-down-outline" class="collapse__link"></ion-icon>

                            <ul class="collapse__menu">
                                <a href="#" class="collapse__sublink">Data</a>
                                <a href="#" class="collapse__sublink">Group</a>
                                <a href="#" class="collapse__sublink">Members</a>
                            </ul>
                        </div>

                    </div>
                </div>

                <a href="../index.html" class="nav__link">
                    <ion-icon name="log-out-outline" class="nav__icon"></ion-icon>
                    <span class="nav__name">Salir</span>
                </a>
            </nav>
        </div>

        <h1>Componentes</h1>
        <main>
        <center>
            <table border="1">
                <tr>
                    <th>CLASIFICACIO</th>
                    <th>DESCRIPCION</th>
                </tr>
                <?php 
                include("../Config/conf.php");
                $sql="SELECT * FROM tareas t
                INNER JOIN categoria c ON t.id_categoria=c.id_categoria";
                $result=mysqli_query($conexion,$sql);

                while($row=mysqli_fetch_array($result))
                {?>
                <tr>
                    <td><?php echo $row['nombre_categoria']?></td>
                    <td><?php echo $row['descripcion']?></td>
                    <td><a href="">Eliminar</a></td>
                    <td><a href="">Editar</a></td>
                </tr>
                    <?php
                }
           ?> 
            </table>
        </center>
        </main>
        <!-- ===== IONICONS ===== -->
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <!-- ===== MAIN JS ===== -->
        <script src="../Script/admin.js"></script>
    </body>
</html>