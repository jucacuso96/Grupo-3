<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Recientes</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/Usuario/reporte_caso_estilo.css')); ?>">
    <!-- Agregar los estilos de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <?php echo $__env->make('usuario/template_usuario/template_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="box_contenedor_general">
        <h2 class="titulo_uno text-left">Consultas Recientes</h2>
        <div class="linea_titulo"></div>

        <!-- Formulario de filtro -->
        <form method="GET" action="<?php echo e(route('consultas.recientes')); ?>">
            <div class="form-row">
                <div class="form-group col-md-2">
                    <label for="id">ID</label>
                    <input type="text" class="form-control" id="id" name="id" value="<?php echo e(request('id')); ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="numero_caso">N° Caso</label>
                    <input type="text" class="form-control" id="numero_caso" name="numero_caso" value="<?php echo e(request('numero_caso')); ?>">
                </div>
                <div class="form-group col-md-2">
                    <label for="id_tipo_consulta">ID Tipo Consulta</label>
                    <input type="text" class="form-control" id="id_tipo_consulta" name="id_tipo_consulta" value="<?php echo e(request('id_tipo_consulta')); ?>">
                </div>
                <div class="form-group col-md-3">
                    <label for="estado_caso">Estado de Caso</label>
                    <input type="text" class="form-control" id="estado_caso" name="estado_caso" value="<?php echo e(request('estado_caso')); ?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Filtrar</button>
        </form>

        <table class="table table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Número de Caso</th>
                    <th scope="col">Tipo de Consulta</th>
                    <th scope="col">Estado de Caso</th>
                    <!-- Agrega aquí las demás columnas según tus requisitos -->
                    <th scope="col">Observación</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $casos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($caso->id); ?></td>
                        <td><?php echo e($caso->numero_caso); ?></td>
                        <td><?php echo e($caso->tipoConsulta->nombre ?? 'N/A'); ?></td>
                        <td><?php echo e($caso->estado_caso); ?></td>
                        <td><?php echo e($caso->observacion); ?></td>
                        <!-- Agrega aquí las demás columnas según tus requisitos -->
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <!-- Paginación -->
        <div class="d-flex justify-content-center">
            <?php echo e($casos->links('pagination::bootstrap-4')); ?>

        </div>
    </section>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/Usuario/consulta_reciente.blade.php ENDPATH**/ ?>