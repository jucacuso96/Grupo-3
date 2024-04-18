<!DOCTYPE html>
<html lang="en">
<head>

    @include('usuario/template_usuario/template_ruta')
    <title>Support Sync | Nueva Solicitud </title>

    <link rel="stylesheet" href="assets/css/Usuario/nueva_solicitud_estilo.css">

</head>
<body>
@include('usuario/template_usuario/template_menu')

    <section class="box_contenedor_general">
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
                    </div>

                    <div class="d-flex justify-content-center box_btn_solicitud">
                        <button type="submit" class="btn btn-dark">Consultar</button>
                    </div>
                </form>

            </div>
    </section>

</body>
</html>