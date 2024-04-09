<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Img/img_6.png"> 
    <title>Support Sync | Nueva Solicitud </title>

    <link rel="stylesheet" href="../../Css/global_estilo.css">
    <link rel="stylesheet" href="../../Css/Usuario/usuario_global_estilo.css">
    <link rel="stylesheet" href="../../Css/Usuario/nueva_solicitud_estilo.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <nav class="box_nav">
      <img src="../../Img/img_3.png" alt="">
    </nav>

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