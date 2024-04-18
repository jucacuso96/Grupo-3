<!DOCTYPE html>
<html lang="en">
<head>

    @include('usuario/template_usuario/template_ruta')
    <title>Support Sync | Nueva Solicitud </title>
    <link rel="stylesheet" href="assets/css/Usuario/consulta_reciente_estilo.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    
</head>
<body>
@include('usuario/template_usuario/template_menu')
    <section class="box_contenedor_general">
        <section class="box_titulo">
            <h2 class="titulo_dos">Consultas Recientes</h2>
        </section>
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
        <br>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Filtrar por:
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
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
                                    <div class="col">
                                    <label for="sel1" class="form-label">Fecha: </label>
                                    <input type="date" class="form-control" placeholder="fecha_consulta" >
                                    </div>
                                </div>
                                <br>
                                <div class="d-flex justify-content-center box_btn_solicitud">
                                    <button type="submit" class="btn btn-dark">Consultar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        
    </section>
    <div class="container mt-3">
        <h3>Resultados de Busqueda</h3>

        <br>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th>Cliente</th>
                <th>Fecha</th>
                <th>Concepto</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Daniel Mendez</td>
                <td>10/03/2024</td>
                <td>Resuelto</td>
            </tr>
            <tr>
                <td>Jhonatan Silva</td>
                <td>10/03/2024</td>
                <td>Escalado</td>
            </tr>
            <tr>
                <td>Wilkin Bahamon</td>
                <td>03/02/2024</td>
                <td>Resuelto</td>
            </tr>
            </tbody>
        </table>
</div>
    


</body>
</html>