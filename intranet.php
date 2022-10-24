<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <link href="css/table.css" rel="stylesheet" type="text/css"/>
        <link href="css/form.css" rel="stylesheet" type="text/css"/>
        <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
        <title>Intranet</title>
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
                        INTRANET
                    </th>
                    <td>

                    </td>
                </tr>
            </table>
        </header> <!--FIN-->

        <nav> <!--CUERPO-->
            <div class='banner_i'>
                <h1 style='color: white'>INTRANET</h1>
                <p>ingresa a un mundo de maravillas</p>
            </div>
            <br>
            <form class='login'>
                <fieldset>
                    <legend>Inicio de sesión</legend><br><br>
                    <label>Usuario</label>
                    <input type="text" id="nombre" class="animate__animated"><br><br>
                    <label>Contraseña</label>
                    <input type="password" id="contraseña" class="animate__animated"><br><br>
                    <p style='text-align: center;'>
                        <input type="submit" value="Iniciar sesion" id="iniciar"><br><br>
                    </p>
                </fieldset>
            </form>
            <br>
            <form class='login'>
                <fieldset>
                    <legend>Registrarse</legend><br><br>
                    <label style='color: #E9EE8E'>Complete con sus datos para crear la cuenta</label>
                    <br><br>
                    <label>Usuario</label>
                    <input type="text" id="nombreRegistro"><br><br>
                    <label>Contraseña</label>
                    <input type="password" id="contraRegistro"><br><br>
                    <label>Número Telefónico</label>
                    <input type="number"><br><br>
                    <label>Fecha de nacimiento</label>
                    <input type="date"><br><br>
                    <label>Correo electronico</label>
                    <input type="email" placeholder="ejemplo@gmail.com"><br><br>
                    <label>Hora de ingreso</label>
                    <input type="time"><br><br>
                    <p style='text-align: center;'>
                        <input type="submit" value="Registrarse" id="registro"><br><br>
                    </p>
                </fieldset>
            </form>
            <br>
        </nav> <!--FIN-->

        <footer> <!--PIE-->
        <?php require_once 'footer.php'?>      
        </footer> <!--FIN-->
        <script src="js/intranet.js"></script>
    </body>
</html>