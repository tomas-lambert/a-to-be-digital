<?php
$nombreCliente = $_POST['nombreCliente'];
$emailCliente  = $_POST['emailCliente'];
$msjCliente    = $_POST['msjCliente'];


$paraCliente    = $emailCliente;
$tituloCliente  = "Mi Formulario de Contacto.";
$mensajeCliente = "<html>".
    "<head><title>A To Be Digital - Formulario de Contacto</title>".
    "<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        padding: 40px;
        background: #ececec;
        border-top: 3px solid #E64A19;
    }
    .bold{
        color:#333;
        font-size:25px;
        font-weight:bold;
    }
    img{
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px 0px 20px 0px;
    }
    </style>
</head>".
    "<body>" .
        "<div class='contenedor'>".
            "<p>&nbsp;</p>" .
            "<p>&nbsp;</p>" .
                "<span>Felicitaciones <strong class='bold'>" . $nombreCliente . "!</strong></span>" .
                "<p>&nbsp;</p>" .
 			    "<p>Su Formulario ha sido enviado Correctamente.</p> " .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<p><strong>Tu mensaje: </strong> " . $msjCliente . " </p>" .
                "<p>&nbsp;</p>" .
        "<p>¡Gracias por contactarnos! </p>" .
        "<p>&nbsp;</p>" .
        "<p><span class='bold'> A To Be Digital </span></p>" .
        "<p>&nbsp;</p>" .
        "<p>".
            "<a title='WebDeveloper' href='https://atobedigital.com/'>". 
                "<p>Ir a la Web</p>". 
            "</a>". 
        "</p>" .
    "</div>" .
    "</body>" .
"</html>";

$cabecerasCliente  = 'MIME-Version: 1.0' . "\r\n";
$cabecerasCliente .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabecerasCliente .= 'From: A To Be Digital<hello@atobedigital.com>';
$enviadoCliente   = mail($paraCliente, $tituloCliente, $mensajeCliente, $cabecerasCliente);


$paraAtobe    = 'hello@atobedigital.com';
$tituloAtobe  = "Nuevo Formulario de Contacto Recibido";
$mensajeAtobe = "<html>".
    "<head><title>A To Be Digital - Formulario de Contacto</title>".
    "<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
        font-family: 'Montserrat', sans-serif;
        font-size: 16px;
        font-weight: 300;
        color: #888;
        background-color:rgba(230, 225, 225, 0.5);
        line-height: 30px;
        text-align: center;
    }
    .contenedor{
        width: 80%;
        min-height:auto;
        text-align: center;
        margin: 0 auto;
        padding: 40px;
        background: #ececec;
        border-top: 3px solid #E64A19;
    }
    .bold{
        color:#333;
        font-size:25px;
        font-weight:bold;
    }
    img{
        margin-left: auto;
        margin-right: auto;
        display: block;
        padding:0px 0px 20px 0px;
    }
    </style>
</head>".
    "<body>" .
        "<div class='contenedor'>".
            "<p>&nbsp;</p>" .
            "<p>&nbsp;</p>" .
                "<span>Recibimos un formulario de: <strong class='bold'>" . $nombreCliente . "!</strong></span>" .
                "<p>&nbsp;</p>" .
 			    "<p>Se registro con el mail: " . $emailCliente . "</p> " .
                "<p>&nbsp;</p>" .
                "<p>&nbsp;</p>" .
                "<p><strong>Y dejó el siguiente mensaje: </strong> " . $msjCliente . " </p>" .
                "<p>&nbsp;</p>" .
        "<p></p>" .
        "<p>&nbsp;</p>" .
        "<p><span class='bold'> A To Be Digital </span></p>" .
        "<p>&nbsp;</p>" .
        "<p>".
            "<a title='WebDeveloper' href='https://atobedigital.com/'>". 
                "<p>Ir a la Web</p>". 
            "</a>". 
        "</p>" .
    "</div>" .
    "</body>" .
"</html>";

$cabecerasAtobe  = 'MIME-Version: 1.0' . "\r\n";
$cabecerasAtobe .= 'Content-type: text/html; charset=utf-8' . "\r\n";
$cabecerasAtobe .= 'From: A To Be Digital Website - Contactos <' . $emailCliente . '>';
$enviadoAtobe   = mail($paraAtobe, $tituloAtobe, $mensajeAtobe, $cabecerasAtobe);


echo "<script>
    window.location='https://atobedigital.com/';
</script>";

?>