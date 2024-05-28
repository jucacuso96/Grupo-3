<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support Sync | Panel de Usuario </title>
    @include('usuario/template_usuario/template_ruta')
    <link rel="stylesheet" href="assets/css/Usuario/panel_estilo.css">
    <style>
        body {
            background-image: url('assets/img/img_7.PNG');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .marca_agua {
            max-width: 100%;
            height: auto;
            display: block; /* Esto asegura que la imagen no tenga márgenes extra */
            margin: 0 auto; /* Centra la imagen horizontalmente */
        }
        @media only screen and (max-width: 768px) {
            /* Estilos para pantallas pequeñas, como tablets */
            /* Puedes ajustar el diseño según sea necesario */
        }
        @media only screen and (max-width: 480px) {
            /* Estilos para pantallas más pequeñas, como dispositivos móviles */
            /* Puedes ajustar el diseño aún más para adaptarse a pantallas más pequeñas */
        }
    </style>
</head>
@include('usuario/template_usuario/template_menu')
<body>
    <img src="assets/img/scotia.png" class="marca_agua" alt="Marca de agua">
    <section class="box_contenedor_general">
        <div class="mensaje_bienvenida">
            <h2>Bienvenido a SupportSync {{ Auth::user()->name }}</h2>
        </div>
    </section>
</body>
</html>
