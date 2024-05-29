<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Reporte Productividad </title>

    <link rel="stylesheet" href="assets/css/Usuario/reporte_caso_esttilo.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body> 
<?php echo $__env->make('usuario/template_usuario/template_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="box_contenedor_general">
    

    <script>
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        <?php $__currentLoopData = $total_caso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            function drawChart() {
            var data = google.visualization.arrayToDataTable([
                
                ["Estado", "Cantidad", { role: "style" } ],
                ["Solucionados", <?php echo e($caso->solucionados); ?>, "color: #e5e4e2"],
                ["Pendientes", <?php echo e($caso->pendientes); ?>, "color: #c20000"]
                
                ]);
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                            { calc: "stringify",
                                sourceColumn: 1,
                                type: "string",
                                role: "annotation" },
                            2]);

            var options = {
                width:'100%',
                height: 200,
                // bar: {groupWidth: "95%"},
                legend: { position: "none" },
            };
            var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
            chart.draw(view, options);
        }
    </script>


        <div class="box_container_grafica">
            <div class="row">

                <div class="col">
                    <h2 class="titulo_uno text-left">Casos en estado Pendientes y Solucionados</h2>
                    <div class="linea_titulo"></div>
                    <div class="row">
                        
                        <div class="col-sm-4 d-flex flex-wrap align-content-center bg-light">
                            <table class="table table-bordered">
                                <thead class="table-danger">
                                    <tr>
                                        <th colspan="2" >Total de Casos</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($total_caso)): ?>
                                        <?php $__currentLoopData = $total_caso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                                <td>Pendientes</td>
                                                <td><?php echo e($caso->pendientes); ?></td>
                                        </tr>
                                        <tr>
                                                <td>Solucionados</td>
                                                <td><?php echo e($caso->solucionados); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-sm-8">

                            <!-- <div id="top_x_div" class="box_grafica" ></div> -->
                            <div id="barchart_values" ></div>

                        </div>
                        
                    </div>
                </div>
                


                <div class="row box_completo">
                    <div class="col">
                    <!-- 2.tiempo promedio que los asesores ahorran al utilizar el nuevo sistema. -->
                        <h2 class="titulo_uno">Promedio de tiempos de casos resultos</h2>
                        <div class="linea_titulo"></div>
                            <div class="box_texto">
                                <p>En la siguiente tabla se presentan los tiempos en promedio que se tarda en resolver una caso, presentando el nombre del producto y el tipo de consulta que se realizo sobre ese producto: </p>
                            </div>
                            <table class="table table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">Nombre Producto</th>
                                <th scope="col">Tipo Consulta</th>
                                <th scope="col">Tiempo Promedio</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php if(isset($tiempo_promedio)): ?>
                                    <?php $__currentLoopData = $tiempo_promedio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiempo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                
                                        <td><?php echo e($tiempo->tipo_consulta); ?></td>
                                        <td><?php echo e($tiempo->nombre_producto); ?></td>
                                        <td><?php echo e($tiempo->promedio_tiempo_formato); ?></td>
                                    
                                </tr> 
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>      
                            </tbody>
                        </table>
                    </div>
                    <div class="col">
                    <!-- 3.cuales son las consultas que son resueltas con mayor rapidez al utilizar el nuevo sistema. -->
                        <h2 class="titulo_uno">Casos solucionados en menor tiempo</h2>
                        <div class="linea_titulo"></div>
                        <div class="box_texto">
                            <p>En la siguiente tabla se presentan los tiempos en promedio de los casos que se resuelven con mayor rapidez. </p>
                        </div>
                        <table class="table table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                <th scope="col">Nombre Producto</th>
                                <th scope="col">Tipo Consulta</th>
                                <th scope="col">Tiempo Promedio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($tiempo_mejor_promedio_caso_resulto)): ?>
                                    <?php $__currentLoopData = $tiempo_mejor_promedio_caso_resulto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mejor_caso_tiempo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                    
                                            <td><?php echo e($mejor_caso_tiempo->tipo_consulta); ?></td>
                                            <td><?php echo e($mejor_caso_tiempo->nombre_producto); ?></td>
                                            <td><?php echo e($mejor_caso_tiempo->promedio_tiempo_formato); ?></td>
                                        
                                    </tr> 
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>      
                            </tbody>
                        </table>
                    </div>
                </div>
                
            </div>
        </div>



    
    </section>
</body>
</html><?php /**PATH C:\xampp\htdocs\SupportSync\resources\views/Usuario\reporte_caso.blade.php ENDPATH**/ ?>