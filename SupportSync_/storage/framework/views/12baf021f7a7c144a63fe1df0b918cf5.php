<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Solicitud de Producto </title>

    <link rel="stylesheet" href="assets/css/Usuario/solicitud_producto_estilo.css">
</head>
<body>
<?php echo $__env->make('usuario/template_usuario/template_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="box_contenedor_general">
        <section class="box_titulo">
            <h2 class="titulo_dos">Productos</h2>
        </section>
            <div class="row box_nueva_solicitud">
                <div class="col col_borde_derecha">
                <h2 class="titulo_uno">Adquisición de productos</h2>
                    <div class="d-flex justify-content-center box_btn_solicitud">
                        <button type="submit" class="btn btn-dark">Sistema Interno 1</button>
                    </div>
                    <div class="d-flex justify-content-center box_btn_solicitud">
                        <button type="submit" class="btn btn-dark">Sistema Interno 2</button>
                    </div>
                </div>
                <div class="col">
                    <h2 class="titulo_uno">Información de Productos</h2>
                    <ul>
                        <li>Tarjeta de Credito 1</li>
                        <li>Tarjeta de Credito 2</li>
                        <li>Cuenta de ahorros 1</li>
                    </ul>
                </div>
            </div>
    </section>

    <div class="row box_btn_escalar">
        <div class="col">
            <div class="d-flex justify-content-center box_btn_solicitud">
                <button type="submit" class="btn btn-danger">Finalizar Consulta</button>
            </div>
        </div>
        <div class="col">
            <div class="d-flex justify-content-center box_btn_solicitud">
                <button type="submit" class="btn btn-danger">Escalar Caso</button>
            </div>
        </div>
    </div>
</body>
</html><?php /**PATH C:\xampp\htdocs\SupportSync\resources\views/Usuario\solicitud_producto.blade.php ENDPATH**/ ?>