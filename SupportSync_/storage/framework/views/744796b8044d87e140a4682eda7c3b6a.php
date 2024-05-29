<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Detalle de Caso </title>
    
    <link rel="stylesheet" href="assets/css/Usuario/detalle_caso_estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <style>
        body {
            background-image: url('assets/img/img_7.PNG');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: Arial, sans-serif; /* Fuente más moderna */
        }
    </style>
</head>
<body>
<?php echo $__env->make('usuario/template_usuario/template_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="box_contenedor_general">
        <div class="contenedor_transparente">
            <h2 class="titulo_uno">
                <p>
                    Caso # <?php echo e($numero_caso_actual); ?>

                </p>
            </h2>

            <!-- Mensajes de éxito o error -->
            <?php if(session('exito')): ?>
                <div class="alert alert-success">
                    <?php echo e(session('exito')); ?>

                </div>
            <?php endif; ?>

            <?php if(session('error')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <div class="box_caso">
                <div class="box_divido">
                    <div class="row">
                        <div class="col-sm-4">
                            <?php if(isset($cliente_caso)): ?>
                                <?php $__currentLoopData = $cliente_caso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p class="fs-6">Tipo Consulta: <?php echo e($caso->nombre_tipo_consulta); ?></p>
                                    <p class="fs-6">Producto: <?php echo e($caso->nombre_producto); ?></p>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>

                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <!-- Caja Acordion -->
                                <div class="accordion-item">
                                    <!-- Aqui mostrarmos los datos del Cliente del que estamos interactuando -->
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                            Datos del Cliente
                                        </button>
                                    </h2>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <?php if(isset($cliente_caso)): ?>
                                                <?php $__currentLoopData = $cliente_caso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <p class="fw-light">Nombre del cliente: <?php echo e($caso->nombre); ?></p>
                                                    <p class="fw-light">email: <?php echo e($caso->email); ?></p>
                                                    <p class="fw-light">Celular: <?php echo e($caso->numero_contacto); ?></p>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>

                                <form action="<?php echo e(route('actualizar_caso')); ?>" method="post"> 
                                    <?php echo csrf_field(); ?> 
                                    <div class="accordion-item">
                                        <!-- Aqui mostramos los datos de los documentos que podemos usar para resolver el caso -->
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Documentos:
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <div class="col-sm">
                                                    <?php if(isset($lista_documentos_por_caso)): ?>
                                                        <?php $__currentLoopData = $lista_documentos_por_caso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documentos): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="solucion_caso" id="solucion_caso" value="<?php echo e($documentos->id_documento_solucion); ?>" data-pdf="<?php echo e($documentos->ruta_documento); ?>">
                                                                <label class="form-check-label" for="flexRadioDefault1">
                                                                    <?php echo e($documentos->nombre); ?>

                                                                </label>
                                                            </div>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <!-- Aqui Es el espacio donde vamos a registrar el estado en el que queda el caso -->
                                        <p class="fs-6"><span class="fw-bold">Estado de caso:</span> 
                                        <div class="form-check">
                                            <input class="form-check-input border-secondary" type="radio" name="estado_caso" id="estado_caso" value="Solucionado">
                                            <label class="form-check-label fw-light" for="flexRadioDefault1">
                                                Solucionado
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border-secondary" type="radio" name="estado_caso" id="estado_caso" value="Comunicacion Interrumpida">
                                            <label class="form-check-label fw-light" for="flexRadioDefault2">
                                                Comunicación Interrumpida
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border-secondary" type="radio" name="estado_caso" id="estado_caso" value="Comunicacion Suspendida por el cliente">
                                            <label class="form-check-label fw-light" for="flexRadioDefault2">
                                                Comunicación Suspendida por el cliente
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input border-secondary" type="radio" name="estado_caso" id="estado_caso" value="Escalado">
                                            <label class="form-check-label fw-light" for="flexRadioDefault2">
                                                Caso Escalado
                                            </label>
                                        </div>
                                        <div class="form-floating">
                                            <textarea class="form-control fs-6 border-secondary" placeholder="" id="observacion_caso" name="observacion_caso"></textarea>
                                            <label for="floatingTextarea">Observación</label>
                                        </div>
 
                                        <input type="hidden" name="numero_caso" id="numero_caso" value="<?php echo e($numero_caso_actual); ?>">
                                        <button type="submit" class="btn btn-danger col-sm-12 btn_abajo">Guardar</button>
                                    </div>
                                </form>
                            </div>    
                        </div>
                        <div class="col-sm-8">
                            <!-- Aqui mostramos el documento Seleccionado -->
                            <iframe id="pdfViewer" width="100%" height="600px"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
    // Obtener el iframe y los radio buttons
    const pdfViewer = document.getElementById('pdfViewer');
    const radioButtons = document.querySelectorAll('input[name="solucion_caso"]');

    // Agregar evento change a los radio buttons
    radioButtons.forEach(button => {
        button.addEventListener('change', function() {
            // Obtener la ruta del PDF desde el atributo data
            const pdfPath = this.dataset.pdf;

            // Cambiar la ruta del iframe
            pdfViewer.src = pdfPath;
        });
    });
    </script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/Usuario\detalle_caso.blade.php ENDPATH**/ ?>