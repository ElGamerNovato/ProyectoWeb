<!DOCTYPE html>
<html>
    <head>
        <title>Videojuegos</title>
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
                        VIDEOJUEGOS
                    </th>
                    <th>
                       
                    </th>
                </tr>
            </table>
        </header> <!--FIN-->
        
        <nav>
            <div class='banner_j'>
                <h1 style='color: black'>VIDEOJUEGOS</h1>
                <p>encuentra los mejores juegos en nuestro catalogo</p>
            </div>
            <div class='descripcion'>
                <h1 style='color: #E9EE8E;'>CATALOGO</h1>
                <br>
                <p>
                    En este apartado encontraras una referencia de los juegos mas destacados<br> 
                    que tenemos para cada consola,a medida pase el tiempo se iran ampliando<br>
                    el catalogo, asi que no olvides visitarnos.<br>
                    <br>
                    En la lista de videojuegos tenemos: <br>
                    <br>
                </p>
            </div>
            <table style='width:100%'>
                <tr>
                    <th>Mario Bros</th>
                    <th>Megaman X</th>
                    <th>Final Fantasy VII</th>
                    <th>Gameboy Advance</th>
                    <th>Xbox</th>
                </tr>
                <tr style='text-align: center;'>
                    <td>
                        <img src="https://elcomercio.pe/resizer/iYoVXZNBAx0J1uPbSf-HSTf8sVc=/620x0/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/ZP6K4O2P3BAZLIOZ343OJQN7UU.jpg"
                             width="200"
                             height="280"
                             alt="Mario Bross"/><br>
                        <br>
                        <strong>CONSOLA:</strong> Atari 2600<br>
                        <strong>GENERO:</strong> Plataformas<br>
                        <strong>PRECIO:</strong> S/.59.99
                    </td>
                    <td>
                        <img src="https://i.pinimg.com/originals/6e/80/fa/6e80faa8c1c52da0ee4fe2259dd66e32.jpg"
                             width="200"
                             height="280"
                             alt="Megaman X"/><br>
                        <br>
                        <strong>CONSOLA:</strong> Super Nintendo<br>
                        <strong>GENERO:</strong> Plataformas<br>
                        <strong>PRECIO:</strong> S/.892.99
                    </td>
                    <td>
                        <img src="https://m.media-amazon.com/images/I/51tkmb93AiL.jpg"
                             width="200"
                             height="280"
                             alt="Final Fantasy VII"/><br>
                        <br>
                        <strong>CONSOLA:</strong> PlayStation<br>
                        <strong>GENERO:</strong> JRPG<br>
                        <strong>PRECIO:</strong> S/.120.99
                    </td>
                    <td>
                        <img src="https://m.media-amazon.com/images/I/61XjZ8DvaFL._SX466_.jpg"
                             width="200"
                             height="280"
                             alt="Pokemon Fire Red Version"/><br>
                        <br>
                        <strong>CONSOLA:</strong> Gameboy Advance<br>
                        <strong>GENERO:</strong> JRPG<br>
                        <strong>PRECIO:</strong> S/.750.99
                    </td>
                    <td>
                        <img src="https://static.wikia.nocookie.net/halo/images/f/f7/Portada_Halo_2.png/revision/latest?cb=20150907170934&path-prefix=es"
                             width="200"
                             height="280"
                             alt="Halo 2"/><br>
                        <br>
                        <strong>CONSOLA:</strong> XBOX<br>
                        <strong>GENERO:</strong> FPS<br>
                        <strong>PRECIO:</strong> S/.41.99
                    </td>
                </tr>
            </table>
            <br>
        </nav>
        

        <footer> <!--PIE-->
        <?php require_once 'footer.php'?>      
        </footer> <!--FIN-->
    </body>
</html>
