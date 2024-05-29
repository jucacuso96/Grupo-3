<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Detalle de Caso </title>

    <link rel="stylesheet" href="assets/css/Usuario/nueva_solicitud_estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body>
<?php echo $__env->make('usuario/template_usuario/template_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="box_contenedor_general">
        <h2 class="titulo_uno"><p>Caso # <?php echo e($numero_caso); ?></p></h2>

        
        <input type="text" id="numero_caso" nam="numero_caso" value="<?php echo e($numero_caso); ?>" >
        <div class="row">
            <form class="box_divido">
                <div class="row">
                    <div class="col-sm-4">
                        
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Datos del Cliente
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                <?php $__currentLoopData = $cliente_caso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <p>Nombre del cliente: <?php echo e($caso->nombre); ?></p>
                                    <p>Número de caso: <?php echo e($caso->numero_caso); ?></p>
                                    <!-- Aquí puedes imprimir más información del caso si lo necesitas -->
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Opciones
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="col-sm">
                                        
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                Interes Anual para tarjetas X
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Cuota de Manejo Tarjeta X
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                Abono Capital
                                            </label>
                                        </div>
                                        <br>
                                        <button type="button" class="btn btn-dark col-sm-12">Consultar</button>
                                    </div>
                                </div>
                                </div>
                            </div>
                            

                            <div class="col-sm">
                                Estado de Caso
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Resuelto
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Sin Resolver
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" >
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Escalar
                                    </label>
                                </div>
                                <br>
                                <!-- <button type="button" class="btn btn-dark col-sm-12">Enviar</button> -->
                                <a href="" class="btn btn-dark col-sm-12">Enviar</a>
                                <br><br>
                                <!-- <button type="button" class="btn btn-danger col-sm-12 btn_abajo">Escalar Caso</button> -->
                                <a href="Escalar_Caso" class="btn btn-danger col-sm-12">Escalar Caso</a>
                            </div>
                            
                        </div>    

                    </div>
                    

                    <div class="col-sm-8">

                    <!-- <object data="assets/pdf/Retiros.pdf" type="application/pdf" width="100%" height="600px">
                        <p>El navegador no puede mostrar el PDF. Puedes <a href="ruta/al/documento.pdf">descargarlo aquí</a>.</p>
                    </object> -->
                    <iframe src="assets/pdf/Retiros.pdf" width="100%" height="600px"></iframe>
                    
                    </div>
                </div>

            
            </form>
        </div>
        
    </section>

</body>
</html><?php /**PATH C:\xampp\htdocs\SupportSync\resources\views/Usuario\detalle_caso.blade.php ENDPATH**/ ?>