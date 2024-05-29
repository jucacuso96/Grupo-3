<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Estadistica De Interacciones </title>
    <link rel="stylesheet" href="assets/css/Usuario/estadisticas_asesor_estilo.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="assets/js/estilo/grafica_1.js" ></script>
    <script type="text/javascript" src="assets/js/estilo/grafica_2.js" ></script>

</head>
<body>
<?php echo $__env->make('usuario/template_usuario/template_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    <section class="box_titulo">
        <h2 class="titulo_dos">Estadistica De Interacciones</h2>
    </section>


    <section class="box_contenedor_general">


        <div class="box_estadisticas">
        <div class="col">
                    <h2 class="titulo_uno">Consultas Resueltas</h2>
                    <div class="box_contenedor_grafica">
                        <div id="piechart" class="box_grafica" ></div>
                    </div>
                </div>
            </div>
            <div class="box_estadisticas">
                <div class="col">
                    <h2 class="titulo_uno">Promedio De Minutos Por Consulta</h2>
                    <div class="box_contenedor_grafica">
                        <div id="line_top_x" class="box_grafica" ></div>
                    </div>
                    
                </div>
            </div>
           


           

        </div>


    </section>

</body>
</html><?php /**PATH C:\xampp\htdocs\SupportSync\resources\views/Usuario\estadistica_asesor.blade.php ENDPATH**/ ?>