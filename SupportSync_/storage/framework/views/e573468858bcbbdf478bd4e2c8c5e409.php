<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Nueva Solicitud</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/Usuario/nueva_solicitud_estilo.css')); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

    <style>
        body {
            background-image: url('assets/img/img_7.PNG');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .input-icon {
            display: flex;
            align-items: center;
        }
        .input-icon i {
            margin-right: 10px;
            font-size: 1.5em;
            color: red; /* Color rojo para los íconos */
        }
    </style>
</head>
<body>
    <?php echo $__env->make('usuario/template_usuario/template_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <section class="box_contenedor_general">
        <div class="box_formulario">
            <div class="form_container">
                <form action="<?php echo e(route('consultar_cliente')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <h2 class="titulo_uno">
                        Datos del Cliente
                    </h2>
                    <label for="identificacion_cliente" class="form-label">Documento de Identificación:</label>
                    <div class="row">
                        <div class="col">
                            <div class="input-icon">
                                <i class="bi bi-person"></i>
                                <input id="identificacion" name="identificacion" type="number" class="form-control">
                            </div>
                        </div>
                        <div class="col btn_consultar_cliente">
                            <button type="submit" class="btn btn-secondary"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                </form>
                <form action="<?php echo e(route('create')); ?>" method="post">  
                <?php echo csrf_field(); ?>  
                    <?php if(isset($resultados) && count($resultados) > 0): ?>
                        <div class="row">
                            <?php $__currentLoopData = $resultados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cliente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <!-- TAREA: NO SE PUDE MOSTRAR EL ATRUBUTO ID -->
                                <input id="id_cliente" name="id_cliente" type="hidden" value="<?php echo e($cliente->id_cliente); ?>" />
                                <input id="identificacion" name="identificacion" type="hidden" value="<?php echo e($cliente->identificacion); ?>" />
                                <div class="col">
                                    <label for="nombre_cliente" class="form-label"></label>
                                    <div class="input-icon">
                                        <i class="bi bi-person"></i>
                                        <input id="nombre_cliente" name="nombre_cliente" type="text" class="form-control" value="<?php echo e($cliente->nombre); ?>" disabled>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="email" class="form-label"></label>
                                    <div class="input-icon">
                                        <i class="bi bi-envelope"></i>
                                        <input id="email" name="email" type="text" class="form-control" value="<?php echo e($cliente->email); ?>" disabled>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="numero_contacto" class="form-label"></label>
                                    <div class="input-icon">
                                        <i class="bi bi-telephone"></i>
                                        <input id="numero_contacto" name="numero_contacto" type="text" class="form-control" value="<?php echo e($cliente->numero_contacto); ?>" disabled>
                                    </div>
                                </div>
                                <div class="col">
                                    <label for="pais" class="form-label"></label>
                                    <div class="input-icon">
                                        <i class="bi bi-globe"></i>
                                        <input id="pais" name="pais" type="text" class="form-control" value="<?php echo e($cliente->nombre_pais); ?>" disabled>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php elseif(isset($resultados) && count($resultados) == 0 ): ?>
                        <div class="alert alert-warning alerta" role="alert">
                            No se encontraron datos para el cliente con la identificación ingresada.
                        </div>
                    <?php endif; ?>

                    <div class="row">
                        <div class="col">
                            <label for="sel1" class="form-label">Selecciona tipo de consulta:</label>
                            <select class="form-select" id="tipo_consulta" name="tipo_consulta">
                                <option value="1">Aclaración de Saldo</option>
                                <option value="2">Reclamo de Cobros</option>
                                <option value="4">Acuerdos de Pago</option>
                                <option value="4">Productos</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="sel1" class="form-label">Producto:</label>
                            <select class="form-select" id="tipo_producto" name="tipo_producto">
                                <?php if(isset($productos)): ?>
                                    <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($product->id); ?>"><?php echo e($product->nombre_producto); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center box_btn_solicitud">
                        <button type="submit" class="btn btn-dark">Consultar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/Usuario\nueva_solicitud.blade.php ENDPATH**/ ?>