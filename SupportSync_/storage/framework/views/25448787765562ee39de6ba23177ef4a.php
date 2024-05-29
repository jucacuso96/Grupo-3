<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Casos</title>
    <style>
        /* Estilos CSS personalizados para el PDF */
        body {
            font-family: Arial, sans-serif;
        }
        .titulo {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        .tabla {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        .tabla, .tabla th, .tabla td {
            border: 1px solid black;
        }
        .tabla th, .tabla td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1 class="titulo">Reporte de Casos</h1>

    <h2>Casos en estado Pendientes y Solucionados</h2>
    <table class="tabla">
        <thead>
            <tr>
                <th>Estado</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $total_caso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td>Solucionados</td>
                    <td><?php echo e($caso->solucionados); ?></td>
                </tr>
                <tr>
                    <td>Pendientes</td>
                    <td><?php echo e($caso->pendientes); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <h2>Promedio de tiempos de casos resueltos</h2>
    <table class="tabla">
        <thead>
            <tr>
                <th>Tipo Consulta</th>
                <th>Nombre Producto</th>
                <th>Tiempo Promedio</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tiempo_promedio; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tiempo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($tiempo->id_tipo_consulta); ?></td>
                    <td><?php echo e($tiempo->nombre_producto); ?></td>
                    <td><?php echo e($tiempo->promedio_tiempo_formato); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <h2>Casos solucionados en menor tiempo</h2>
    <table class="tabla">
        <thead>
            <tr>
                <th>Tipo Consulta</th>
                <th>Nombre Producto</th>
                <th>Tiempo Promedio</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $tiempo_mejor_promedio_caso_resulto; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mejor_caso_tiempo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mejor_caso_tiempo->id_tipo_consulta); ?></td>
                    <td><?php echo e($mejor_caso_tiempo->nombre_producto); ?></td>
                    <td><?php echo e($mejor_caso_tiempo->promedio_tiempo_formato); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Aquí puedes incluir las gráficas y la nueva tabla -->
    <!-- Asegúrate de ajustar el formato para que se vea bien en el PDF -->
    <!-- Por ejemplo, puedes usar imágenes en lugar de gráficas interactivas -->
    <!-- y asegúrate de que la tabla tenga un formato adecuado para imprimir -->

    <div class="box_container_grafica">
        <div class="row">
            <div class="col col_responsive">
                <h2 class="titulo_uno text-left">Estadísticas de Usuarios</h2>
                <div class="linea_titulo"></div>
                <div class="row">
                    <div class="col-sm-12 d-flex flex-wrap align-content-center bg-light">
                        <table class="tabla">
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
   
    <div id="user_statistics_chart" style="width: 100%; height: 300px;"></div>



</body>
</html>
<?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/Usuario/reporte_caso_pdf.blade.php ENDPATH**/ ?>