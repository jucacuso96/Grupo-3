<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Panel de Usuario </title>

    <link rel="stylesheet" href="assets/css/Usuario/panel_estilo.css">
    
    <style>
        body {
            background-image: url('assets/img/img_7.PNG');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>

</head>
<body>

<img src="assets/img/scotia.png" class="marca_agua" alt="Marca de agua">

<?php echo $__env->make('usuario/template_usuario/template_menu_coordinador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="box_contenedor_general">
    <div class="mensaje_bienvenida">
        <h2>Bienvenido a SupportSync <?php echo e(Auth::user()->name); ?></h2>
    </div>
</section>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/Usuario\panel_usuario_coordinador.blade.php ENDPATH**/ ?>