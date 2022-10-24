<!DOCTYPE html>
<html>
    <head>
        <title>Consolas</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link href="css/table.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header> <!--ENCABEZADO-->
            <table>
                <tr>
                    <th>
                        <div class='logo'>
                            <img src="img_audio/emblema_sumeru.png" 
                                 alt="Logo de Sumeru"
                                 class='logo-img'/>                       
                        </div> 
                    </th>
                    <?php require_once 'header.php';?>
                </tr>
                <tr>
                    <th>  
                        CONSOLAS
                    </th>
                    <th>
                       
                    </th>
                </tr>
            </table>
        </header> <!--FIN-->
        
        <nav> <!--CUERPO-->
            <div class='banner_c'>
                <h1 style='color: white'>CONSOLAS</h1>
                <p>encuentra las mejores consolas en nuestro catalogo</p>
            </div>
            <br>
            <div class='descripcion'>
                <h1 style='color: #E9EE8E;'>CATALOGO</h1>
                <br>
                <p>
                    En este apartado encontraras una gran variedad de consolas que fueronde los<br>
                    mas importantes y revolucionarios para el mundo de los videojuegos.<br>
                    <br>
                    De las principales consolas tenemos a:<br>
                    <br>
                </p>
                <br>
            </div>
            <table style='width:100%'>
                <tr>
                    <th>Atari 2600</th>
                    <th>Super Nintendo</th>
                    <th>Playstation</th>
                    <th>Gameboy Advance</th>
                    <th>Xbox</th>
                </tr>
                <tr style='text-align: center;'>
                    <td>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Atari2600a.JPG/1200px-Atari2600a.JPG"
                             width="200"
                             height="150"
                             alt="Atari 2600"/><br>
                        <br>
                        <strong>PRECIO:</strong> S/.876.99
                    </td>
                    <td>
                        <img src="https://static.wikia.nocookie.net/nintendo/images/2/21/SNES_EUR.jpg/revision/latest?cb=20170729114211&path-prefix=es"
                             width="200"
                             height="150"
                             alt="Super Nintendo"/><br>
                        <br>
                        <strong>PRECIO:</strong> S/.670.99
                    </td>
                    <td>
                        <img src="https://www.hd.com.do/wp-content/uploads/2019/08/Playstation.jpg"
                             width="200"
                             height="150"
                             alt="Playstation"/><br>
                        <br>
                        <strong>PRECIO:</strong> S/.120.99
                    </td>
                    <td>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/7/7d/Nintendo-Game-Boy-Advance-Purple-FL.jpg"
                             width="200"
                             height="150"
                             alt="Gameboy Advance"/><br>
                        <br>
                        <strong>PRECIO:</strong> S/.243.99
                    </td>
                    <td>
                        <img src="https://i.blogs.es/7074c6/050210_xbox/1366_2000.jpg"
                             width="200"
                             height="150"
                             alt="Xbox"/><br>
                        <br>
                        <strong>PRECIO:</strong> S/.312.99
                    </td>
                </tr>
            </table>
            <br>
        </nav> <!--FIN-->

        <footer> <!--PIE-->
        <?php require_once 'footer.php'?>    
        </footer> <!--FIN-->            
    </body>
</html>
