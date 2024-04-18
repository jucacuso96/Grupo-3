<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Escalar Caso </title>
    <link rel="stylesheet" href="assets/css/Usuario/nueva_solicitud_estilo.css">

</head>
<body>
<?php echo $__env->make('usuario/template_usuario/template_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="box_contenedor_general">
    <section class="box_titulo">
        <h2 class="titulo_dos">Escalar Caso</h2>
    </section>
        <div class="box_formulario">

            <form>
                <h2 class="titulo_uno">Datos del Cliente</h2>
                    <div class="row">
                        <div class="col">
                        <label for="sel1" class="form-label">Documento de Identificación:</label>
                        <input type="password" class="form-control" placeholder="Documento de Identificación">
                        </div>
                        <div class="col">
                        <label for="sel1" class="form-label">Nombre: </label>
                        <input type="password" class="form-control" placeholder="Nombre" >
                        </div>
                    </div>
                   <br>
                   <h2 class="titulo_uno">Datos de consulta</h2>
                    <div class="row">
                        <div class="col">
                        <label for="sel1" class="form-label">Selecciona tipo de consulta:</label>
                            <select class="form-select" id="sel1" name="sellist1">
                                <option>Seleccione una consulta</option>
                                <option>Productos</option>
                                <option>Aclaraciones de saldo</option>
                                <option>Reclamos por cobro</option>
                                <option>Acuerdos de pago</option>
                            </select>   
                        </div>
                        <div class="col">
                        <label for="sel1" class="form-label">Caso: </label>
                        <input type="password" class="form-control" placeholder="Nombre" >
                        </div>
                    </div>
                   

                    <div class="d-flex justify-content-center box_btn_solicitud">
                        <button type="submit" class="btn btn-dark">Consultar</button>
                    </div>
                </form>

            </div>
    </section>

</body>
</html><?php /**PATH C:\xampp\htdocs\SupportSync\resources\views/Usuario\escalar_caso.blade.php ENDPATH**/ ?>