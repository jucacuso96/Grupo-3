

<?php $__env->startSection('content'); ?>
<div class="container container-custom">
    <h1>Productos</h1>
    <a href="#createModal" class="btn btn-crear-producto" data-toggle="modal">Crear Producto</a>
    <table class="table table-striped table-custom mt-4">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Grupo Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $producto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($producto->id); ?></td>
                <td><?php echo e($producto->nombre_producto); ?></td>
                <td><?php echo e($producto->id_grupo_especialidad); ?></td>
                <td>
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editModal<?php echo e($producto->id); ?>">
                        <i class="bi bi-pencil-square"></i>
                    </a>
                    <form action="<?php echo e(route('productos.destroy', $producto->id)); ?>" method="POST" style="display:inline;">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash3-fill"></i>
                        </button>
                    </form>
                </td>
            </tr>
            <!-- Modal Editar Producto -->
            <div class="modal fade" id="editModal<?php echo e($producto->id); ?>" tabindex="-1" role="dialog" aria-labelledby="editModalLabel<?php echo e($producto->id); ?>" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content modal-content-custom">
                  <form action="<?php echo e(route('productos.update', $producto->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div class="modal-header">
                      <h5 class="modal-title" id="editModalLabel<?php echo e($producto->id); ?>">Editar Producto</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="form-group">
                        <label for="nombre_producto">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" value="<?php echo e($producto->nombre_producto); ?>" required>
                      </div>
                      <div class="form-group">
                        <label for="id_grupo_especialidad">Grupo de Especialidad</label>
                        <select class="form-control" id="id_grupo_especialidad" name="id_grupo_especialidad" required>
                          <?php $__currentLoopData = $grupoEspecialidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupoEspecialidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($grupoEspecialidad->id_grupo_especialidad); ?>" <?php echo e($producto->id_grupo_especialidad == $grupoEspecialidad->id_grupo_especialidad ? 'selected' : ''); ?>>
                              <?php echo e($grupoEspecialidad->nombre); ?>

                            </option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<!-- Modal Crear Producto -->
<div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content modal-content-custom">
      <form action="<?php echo e(route('productos.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="modal-header">
          <h5 class="modal-title" id="createModalLabel">Crear Producto</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label for="nombre_producto">Nombre del Producto</label>
            <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" required>
          </div>
          <div class="form-group">
            <label for="id_grupo_especialidad">Grupo de Especialidad</label>
            <select class="form-control" id="id_grupo_especialidad" name="id_grupo_especialidad" required>
              <?php $__currentLoopData = $grupoEspecialidades; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupoEspecialidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($grupoEspecialidad->id_grupo_especialidad); ?>"><?php echo e($grupoEspecialidad->nombre); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('productos.producto', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/productos/index.blade.php ENDPATH**/ ?>