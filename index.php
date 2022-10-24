<!DOCTYPE html>
<html>
    <head>
        <title>Irminsul</title>
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
                        INICIO
                    </th>
                    <td>

                    </td>
                </tr>
            </table>
        </header> <!--FIN-->

        <nav> <!--CUERPO-->
            <div class='banner'>
                <h1 style='color: black'>Irminsul</h1>
                <p>conectate a un mundo de maravillas</p>
            </div>      
            <div class='descripcion'>
                <h1 style='color: #E9EE8E;'>¿Que es el Irminsul?</h1>
                <br>
                <p>
                    En la mitologia nordica era el pilar que unia el cielo y la tierra, en base a<br>
                    esto, el simbolismo que le damos es un conector entre los usuarios (tierra) y la nube<br>
                    que almacena los videojuegos(cielo).<br>
                    <br>
                    Encuentra todo tipo de consolas y videojuegos, revisando nuestro amplio catalogo<br> 
                    y solicita tus pedidos llenando el formulario para realizar el envia a domiciolio<br>
                    no te pierdas de la experiencia de jugar a tus videojuegos favoritos en tu<br> 
                    consola preferida, teniendo de referencia:<br>

                </p>
            </div>
            <ul style='text-align: center;'>
                <li>
                    <a href="https://es.wikipedia.org/wiki/Anexo:Videojuegos_más_vendidos" target="navegador">
                        Los juegos mas vendidos<br><br>
                    </a>
                </li>
                <li>
                    <a href="https://es.wikipedia.org/wiki/Anexo:Consolas_de_videojuegos_más_vendidas" target="navegador">
                        Las consolas mas vendidas<br><br>
                    </a>
                </li>
            </ul>
            <div class='descripcion_2'>
                <iframe name="navegador" src="https://pbs.twimg.com/media/FbNGaMkWIAASmQo.jpg" 
                    style="width:65.8%; 
                    height: 600px;
                    border-radius: 30px;
                    border: none;"></iframe>
            </div>
            <br>
        </nav> <!--FIN-->

        <footer> <!--PIE-->
             <?php require_once 'footer.php'?>   
        </footer> <!--FIN-->
    </body>
</html>
