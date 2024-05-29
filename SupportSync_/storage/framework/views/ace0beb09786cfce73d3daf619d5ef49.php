<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Reporte Productividad </title>

    <link rel="stylesheet" href="assets/css/Usuario/reporte_caso_esttilo.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
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
<?php echo $__env->make('usuario/template_usuario/template_menu_coordinador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="box_contenedor_general">
    
    <!-- SCRIPT DE: 1. volumen de clientes impactados positivamente por el nuevo sistema. -->
    <script>
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        <?php $__currentLoopData = $total_caso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ["Estado", "Cantidad", { role: "style" } ],
                ["Solucionados", <?php echo e($caso->solucionados); ?>, "color: #e5e4e2"],
                ["Pendientes", <?php echo e($caso->pendientes); ?>, "color: #c20000"],
                ["Interrumpida", <?php echo e($caso->interrumpida); ?>, "color: #ffcc00"],
                ["Suspendida por el cliente", <?php echo e($caso->suspendida); ?>, "color: #ff9900"],
                ["Escalado", <?php echo e($caso->escalado); ?>, "color: #3399ff"]
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
                width: '100%',
                height: 200,
                legend: { position: "none" },
            };
            var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
            chart.draw(view, options);
        }
    </script>

    <div class="box_container_grafica">
        <div class="row">
            <div class="col col_responsive">
                <!-- 1. volumen de clientes impactados positivamente por el nuevo sistema. -->
                <h2 class="titulo_uno text-left">Casos en estado Pendientes y Solucionados</h2>
                <div class="linea_titulo"></div>
                <div class="row">
                    <div class="col-sm-4 d-flex flex-wrap align-content-center bg-light">
                        <table class="table table-bordered">
                            <thead class="table-danger">
                                <tr>
                                    <th colspan="2">Total de Casos</th>
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
                                    <tr>
                                        <td>Interrumpida</td>
                                        <td><?php echo e($total_caso[0]->interrumpida); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Suspendida por el cliente</td>
                                        <td><?php echo e($caso->suspendida); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Escalado</td>
                                        <td><?php echo e($caso->escalado); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-sm-8">
                        <div id="barchart_values" class="box_grafica"></div>
                    </div>
                </div>
            </div>

            <div class="row box_completo col_responsive">
                <div class="col">
                    <!-- 2. Average time advisors save using the new system. -->
                    <h2 class="titulo_uno">Promedio de tiempos de casos resueltos</h2>
                    <div class="linea_titulo"></div>
                    <div class="box_texto">
                        <p>En la siguiente tabla se presentan los tiempos en promedio que se tarda en resolver una caso, presentando el nombre del producto y el tipo de consulta que se realizo sobre ese producto:</p>
                    </div>
                    <table class="table table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Tipo Consulta</th>
                                <th scope="col">Nombre Producto</th>
                                <th scope="col">Tiempo Promedio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($tiempo_promedio)): ?>
                                <?php $__currentLoopData = $tiempo_promedio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiempo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($tiempo->id_tipo_consulta); ?></td>
                                    <td><?php echo e($tiempo->nombre_producto); ?></td>
                                    <td><?php echo e($tiempo->promedio_tiempo_formato); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>

                </div>

                <div class="col">
                    <!-- 3. Cases resolved the fastest using the new system. -->
                    <h2 class="titulo_uno">Casos solucionados en menor tiempo</h2>
                    <div class="linea_titulo"></div>
                    <div class="box_texto">
                        <p>En la siguiente tabla se presentan los tiempos en promedio de los casos que se resuelven con mayor rapidez.</p>
                    </div>
                    <table class="table table table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Tipo Consulta</th>
                                <th scope="col">Nombre Producto</th>
                                <th scope="col">Tiempo Promedio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if(isset($tiempo_mejor_promedio_caso_resulto)): ?>
                                <?php $__currentLoopData = $tiempo_mejor_promedio_caso_resulto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mejor_caso_tiempo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($mejor_caso_tiempo->id_tipo_consulta); ?></td>
                                    <td><?php echo e($mejor_caso_tiempo->nombre_producto); ?></td>
                                    <td><?php echo e($mejor_caso_tiempo->promedio_tiempo_formato); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </tbody>
                    </table>

                  
                    </script>
                    <div id="fastest_resolved_cases_chart" style="width: 100%; height: 300px;"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- New section: User statistics -->
    <div class="box_container_grafica">
        <div class="row">
            <div class="col col_responsive">
                <h2 class="titulo_uno text-left">Estadísticas de Usuarios</h2>
                <div class="linea_titulo"></div>
                <div class="row">
                    <div class="col-sm-12 d-flex flex-wrap align-content-center bg-light">
                        <table class="table table-bordered">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Nombre Usuario</th>
                                    <th scope="col">Cantidad de Casos</th>
                                    <th scope="col">Tiempo Promedio (min)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($estadisticas_usuarios)): ?>
                                    <?php $__currentLoopData = $estadisticas_usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($usuario->name); ?></td>
                                        <td><?php echo e($usuario->cantidad_casos); ?></td>
                                        <td><?php echo e($usuario->promedio_tiempo_minutos); ?></td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawUserStatisticsChart);

        function drawUserStatisticsChart() {
            var data = google.visualization.arrayToDataTable([
                ["Nombre Usuario", "Cantidad de Casos", "Tiempo Promedio (min)"],
                <?php if(isset($estadisticas_usuarios)): ?>
                    <?php $__currentLoopData = $estadisticas_usuarios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usuario): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    ["<?php echo e($usuario->name); ?>", <?php echo e($usuario->cantidad_casos); ?>, <?php echo e($usuario->promedio_tiempo_minutos); ?>],
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            ]);

            var options = {
                title: "Estadísticas de Usuarios",
                legend: { position: "top", maxLines: 3 },
                bar: { groupWidth: "75%" },
                isStacked: true,
                width: '100%',
                height: 300,
            };
            var chart = new google.visualization.BarChart(document.getElementById("user_statistics_chart"));
            chart.draw(data, options);
        }
    </script>
    <div id="user_statistics_chart" style="width: 100%; height: 300px;"></div>

    <!-- Botón centrado para descargar el reporte en PDF -->
    <div style="text-align: center; margin-top: 20px;">
        <a href="reporte-casos-pdf" class="btn btn-primary">Descargar</a>
    </div>

</section>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/Usuario\reporte_caso.blade.php ENDPATH**/ ?>