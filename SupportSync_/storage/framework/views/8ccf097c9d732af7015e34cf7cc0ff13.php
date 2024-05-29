<!DOCTYPE html>
<html lang="es">
<head>
    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas Recientes</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/Usuario/consulta_reciente_estilo.css')); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <?php echo $__env->make('usuario/template_usuario/template_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="box_contenedor_general">
        <h2 class="titulo_uno text-left">Consultas Recientes</h2>
        <div class="linea_titulo"></div>

        <form method="GET" action="<?php echo e(route('consultasRecientes')); ?>" id="filtro-form">
            <div class="table-responsive">
                <table class="table table-bordered mt-3">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID <input type="text" class="form-control filtro" name="id" value="<?php echo e($filters['id'] ?? ''); ?>" placeholder="Filtrar ID"></th>
                            <th scope="col">Número de Caso <input type="text" class="form-control filtro" name="numero_caso" value="<?php echo e($filters['numero_caso'] ?? ''); ?>" placeholder="Filtrar N° Caso"></th>
                            <th scope="col">Tipo de Consulta <input type="text" class="form-control filtro" name="id_tipo_consulta" value="<?php echo e($filters['id_tipo_consulta'] ?? ''); ?>" placeholder="Filtrar Tipo Consulta"></th>
                            <th scope="col">Estado de Caso <input type="text" class="form-control filtro" name="estado_caso" value="<?php echo e($filters['estado_caso'] ?? ''); ?>" placeholder="Filtrar Estado Caso"></th>
                            <th scope="col">Observación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $casos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr class="caso-row" data-toggle="modal" data-target="#casoModal" data-id="<?php echo e($caso->id); ?>" data-cliente="<?php echo e($caso->cliente->nombre ?? 'N/A'); ?>" data-documento="<?php echo e($caso->documentoSolucion->nombre ?? 'N/A'); ?>" data-url="<?php echo e($caso->documentoSolucion->ruta_documento ?? '#'); ?>">
                                <td><?php echo e($caso->id); ?></td>
                                <td><?php echo e($caso->numero_caso); ?></td>
                                <td><?php echo e($caso->tipoConsulta->nombre_tipo_consulta ?? 'N/A'); ?></td>
                                <td><?php echo e($caso->estado_caso); ?></td>
                                <td><?php echo e($caso->observacion); ?></td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            </div>
        </form>

        <div class="d-flex justify-content-center">
            <?php echo e($casos->appends(request()->input())->links('pagination::bootstrap-4')); ?>

        </div>
    </section>

    <!-- Modal para mostrar detalles del caso -->
    <div class="modal fade" id="casoModal" tabindex="-1" aria-labelledby="casoModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="casoModalLabel">Detalles del Caso</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p><strong>Cliente:</strong> <span id="clienteNombre"></span></p>
                    <p><strong>Documento Solución:</strong> <span id="documentoNombre"></span></p>
                    <a id="documentoLink" href="#" target="_blank" class="btn btn-primary">Ver Documento</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="<?php echo e(asset('assets/js/usuario/consulta_reciente.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/Usuario\consulta_reciente.blade.php ENDPATH**/ ?>