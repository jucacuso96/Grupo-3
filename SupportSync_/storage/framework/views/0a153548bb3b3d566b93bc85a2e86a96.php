<!DOCTYPE html>
<html lang="en">
<head>
    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Escalar Caso</title>
    <link rel="stylesheet" href="assets/css/Usuario/documento_solucion_estilo.css">
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
<?php echo $__env->make('usuario/template_usuario/template_menu_coordinador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<section class="box_contenedor_general">
    <div class="box_formulario">
        <?php if(session('success')): ?>
            <div class="alert alert-success">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>

        <?php if($errors->any()): ?>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo e($error); ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

        <form action="<?php echo e(route('documento_solucion.registrar')); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="row">
                <div class="col">
                    <h2 class="titulo_uno">Gestión de Documentos de Atención al Cliente</h2>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <div class="input-group mb-3">
                                    <label class="input-group-text" for="inputGroupFile01">Documento (PDF):</label>
                                    <input type="file" class="form-control" id="archivo_documento" name="archivo_documento" accept="application/pdf">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="nombre_documento" name="nombre_documento" placeholder="Nombre del Documento">
                                <label for="nombre_documento">Nombre Documento:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select" id="tipo_producto" name="tipo_producto">
                                    <?php if(isset($productos)): ?>
                                        <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($product->id); ?>"><?php echo e($product->nombre_producto); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                                <label for="tipo_producto">Producto:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select" id="id_tipo_consulta" name="id_tipo_consulta" aria-label="Tipo de Consulta">
                                    <?php if(isset($tipo_consulta)): ?>
                                        <?php $__currentLoopData = $tipo_consulta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo_consult): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($tipo_consult->id); ?>"><?php echo e($tipo_consult->nombre_tipo_consulta); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </select>
                                <label for="id_tipo_consulta">Tipo Consulta:</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-floating">
                                <textarea class="form-control" id="observacion_documento" name="observacion_documento" placeholder="Observación"></textarea>
                                <label for="observacion_documento">Observación</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center box_btn_solicitud">
                    <button type="submit" class="btn btn-dark">Guardar Documento</button>
                </div>
            </div>
        </form>
    </div>

    <h3>Lista de Documentos</h3>
    <table id="example" class="table table-striped" style="width:100%">
        <thead class="table-dark">
            <tr>
                <th scope="col">Documento</th>
                <th scope="col">Observación</th>
                <th scope="col">Producto</th>
                <th scope="col">Tipo de Consulta</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $documentos_registrados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $documento_registrado): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($documento_registrado->nombre); ?></td>
                <td class="td_observacion"><?php echo e($documento_registrado->observacion); ?></td>
                <td><?php echo e($documento_registrado->nombre_producto); ?></td>
                <td><?php echo e($documento_registrado->nombre_tipo_consulta); ?></td>
                <td>
                    <!-- Botón de Editar -->
                    <a href="" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                    <!-- Botón de Eliminar -->
                    <form action="<?php echo e(route('documentos.eliminar')); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('POST'); ?>
                        <input type="hidden" name="id_documento_solucion" value="<?php echo e($documento_registrado->id_documento_solucion); ?>">
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                    </form>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>

<script>
    $(document).ready(function () {
        $('#example').DataTable();
    });
</script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/Usuario\documento_solucion.blade.php ENDPATH**/ ?>