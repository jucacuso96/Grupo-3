

<?php $__env->startSection('content'); ?>
<div class="container">
    <h1>Editar Producto</h1>
    <form action="<?php echo e(route('productos.update', $producto->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="form-group">
            <label for="nombre_producto">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="<?php echo e($producto->nombre_producto); ?>" required>
        </div>
        <div class="form-group">
            <label for="id_grupo_especialidad">ID Grupo Especialidad</label>
            <input type="text" class="form-control" id="id_grupo_especialidad" name="id_grupo_especialidad" value="<?php echo e($producto->id_grupo_especialidad); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="<?php echo e(route('productos.index')); ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('productos.producto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/productos/edit.blade.php ENDPATH**/ ?>