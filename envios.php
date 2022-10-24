<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de envios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link href="css/table.css" rel="stylesheet" type="text/css"/>
        <link href="css/form.css" rel="stylesheet" type="text/css"/>
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
                        ENVIOS
                    </th>
                    <td>

                    </td>
                </tr>
            </table>
        </header> <!--FIN-->

        <nav> <!--CUERPO-->
            <div class='banner_e'>
                <h1 style='color: white'>ENVIOS</h1>
                <p>consigue lo que necesites y llegara a ti</p>
            </div>
            <div class='descripcion'>
                <h1 style='color: #E9EE8E;'>FORMULARIO DE COMPRA DE VIDEOJUEGOS</h1>
                <br>
                <p>
                    Rellene y marque las casillas para realizar la compra.<br> 
                </p>
            </div>
            <form class='envios'>
                <fieldset>
                    <legend>Genero y Videojuego</legend>
                    <br>
                    <label>¿Qué genero de videojuegos te gustaria comprar?</label><br>
                    <br>
                    <div class='tipos'>
                        <input type="radio" name="tipo" /> JRPG<br>
                        <br>
                        <input type="radio" name="tipo" /> FPS<br>
                        <br>
                        <input type="radio" name="tipo" /> Plataformas<br>
                        <br>
                    </div>
                    <label>¿Cual de estos videojuegos planeas comprar?</label><br>
                    <br>
                    <div class='tipos'>
                        <input type="checkbox" name="conoce" /> Megaman X <br>
                        <br>
                        <input type="checkbox" name="conoce" /> Mario Bross<br>
                        <br>
                        <input type="checkbox" name="conoce" /> Final Fantasy VII<br>
                        <br>
                        <input type="checkbox" name="conoce" /> Pokemon Red Fire Version<br>
                        <br>
                        <input type="checkbox" name="conoce" /> Halo 2<br>
                        <br>
                    </div>

                </fieldset>

                <br />
                <fieldset>
                    <legend>Información</legend>
                    <label>¿Que plataforma de videojuegos es tu preferida?</label><br>
                    <br>
                    <select>
                        <option>Xbox</option>
                        <option>PlayStation</option>
                        <option>Super Nintendo</option>
                        <option>Atari 2600</option>
                        <option>Gameboy Advance</option>
                    </select><br /><br />
                    <label>¿Que nota le das a nuestra pagina web?</label><br>
                    <br>
                    1 <input type="range" min="1" max="5"/> 5<br>
                    <br>
                    <label>Cuentanos que te parecio nuestro sitio web de compras:</label><br>
                    <br>
                    <textarea placeholder="Me gusta..."></textarea>
                </fieldset>

                <br>
                <fieldset>
                    <legend>Compra</legend>
                    <label>¿Que dia desea que le llegue la entrega?</label><br>
                    <br>
                    <input type="date"/><br>
                    <br>
                    <label>¿Medio de pago?</label><br>
                    <br>
                    <select>
                        <option>Master Card</option>
                        <option>Visa</option>
                        <option>PayPal</option>
                        <option>Discover</option>
                    </select><br>
                    <br>
                    <label>¿Ingrese el numero de su tarjeta?</label><br>
                    <br>
                    <input type="number" step="1" /><br>
                    <br>
                    <label>Envie una foto de sus documentos de identidad y pago</label><br>
                    <br>
                    <input type="file" class="forma" />
                </fieldset>
                <br>
                <fieldset>
                    <legend>Enviar/Restablecer</legend>
                    <p style='text-align: center;'>
                        <input type="submit" name="Enviar"><br>         
                        <br>
                    </p>
                    <p style='text-align: center;'>
                        <input type="reset" value="Reestablecer"/>
                        <br>
                    </p>
                </fieldset>
            </form>
            <br>
            <br>
            <br>
            <div class='descripcion'>
                <h1 style='color: #E9EE8E;'>FORMULARIO DE COMPRA DE CONSOLAS</h1>
                <br>
                <p>
                    Rellene y marque las casillas para realizar la compra.<br> 
                </p>
            </div>
            <form class='envios'>
                <fieldset>
                    <legend>Consola</legend>
                    <br>
                    <label>¿Cual de estas consolas planeas comprar?</label><br>
                    <br>
                    <div class='tipos'>
                        <input type="checkbox" name="conoce" /> Super Nintendo <br>
                        <br>
                        <input type="checkbox" name="conoce" /> Atari 2600<br>
                        <br>
                        <input type="checkbox" name="conoce" /> PlayStation<br>
                        <br>
                        <input type="checkbox" name="conoce" /> Gameboy Advance<br>
                        <br>
                        <input type="checkbox" name="conoce" /> Xbox<br>
                        <br>
                    </div>

                    <label>¿Que color deseas la consola?</label><br>
                    <br>
                    <input type="color" /><br>
                    <br>
                </fieldset>
                <br />
                <fieldset>
                    <legend>Información</legend>
                    <label>¿Que plataforma de videojuegos es tu preferida?</label><br>
                    <br>
                    <select>
                        <option>Xbox</option>
                        <option>PlayStation</option>
                        <option>Super Nintendo</option>
                        <option>Atari 2600</option>
                        <option>Gameboy Advance</option>
                    </select><br>
                    <br>
                    <label>¿Que nota le das a nuestra pagina web?</label><br>
                    <br>
                    1 <input type="range" min="1" max="5"/> 5<br>
                    <br>
                    <label>Cuentanos que te parecio nuestro sitio web de compras:</label><br>
                    <br>
                    <textarea placeholder="Me gusta..."></textarea>
                </fieldset>
                <br />
                <fieldset>
                    <legend>Compra</legend>
                    <label>¿Que dia desea que le llegue la entrega?</label><br>
                    <br>
                    <input type="date"/><br>
                    <br>
                    <label>¿Medio de pago?</label><br>
                    <br>
                    <select>
                        <option>Master Card</option>
                        <option>Visa</option>
                        <option>PayPal</option>
                        <option>Discover</option>
                    </select><br>
                    <br>
                    <label>¿Ingrese el numero de su tarjeta?</label><br>
                    <br>
                    <input type="number" step="1" /><br>
                    <br>
                    <label>Envie una foto de sus documentos de identidad y pago</label><br>
                    <br>
                    <input type="file" class="forma" />
                </fieldset><br>
                <br>
                <fieldset>
                    <legend>Enviar/Restablecer</legend>
                    <p style='text-align: center;'>
                        <input type="submit" name="Enviar"><br>         
                        <br>
                    </p>
                    <p style='text-align: center;'>
                        <input type="reset" value="Reestablecer"/>
                        <br>
                    </p>
                </fieldset>
            </form>
            <br>
        </nav> <!--FIN-->

        <footer> <!--PIE-->
        <?php require_once 'footer.php'?>     
        </footer> <!--FIN-->
    </body>
</html>
