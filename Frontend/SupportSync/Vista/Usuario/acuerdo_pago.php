<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../Img/img_6.png"> 
    <title>Support Sync | Nueva Solicitud </title>

    <link rel="stylesheet" href="../../Css/global_estilo.css">
    <link rel="stylesheet" href="../../Css/Usuario/usuario_global_estilo.css">
    <link rel="stylesheet" href="../../Css/Usuario/acuerdo_pago_estilo.css">
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
                
                    <div class="row">
                        <div class="col">
                        <h2 class="titulo_uno">Documentos Vigentes</h2>
                            <label for="sel1" class="form-label">Filtrar Por:</label>
                            <select class="form-select" id="sel1" name="sellist1">
                                <option>----</option>
                                <option>----</option>
                            </select>
                            <br>
                            <div class="d-flex justify-content-center box_btn_solicitud">
                                <button type="submit" class="btn btn-dark">Consultar</button>
                            </div>
                        </div>
                        <div class="col">
                            <h2 class="titulo_uno">Documentos Especializados</h2>
                            <label for="sel1" class="form-label">Filtrar Por:</label>
                                <select class="form-select" id="sel1" name="sellist1">
                                    <option>----</option>
                                    <option>----</option>
                                </select>
                                <br>
                                <div class="d-flex justify-content-center box_btn_solicitud">
                                    <button type="submit" class="btn btn-dark">Consultar</button>
                                </div>
                        </div>
                    </div>
                    

                
                </form>

            </div>
    </section>
    <div class="row box_btn_escalar">
        <div class="col">
            <div class="d-flex justify-content-center box_btn_solicitud">
                <button type="submit" class="btn btn-danger">Finalizar Consulta</button>
            </div>
        </div>
        <div class="col">
            <div class="d-flex justify-content-center box_btn_solicitud">
                <button type="submit" class="btn btn-danger">Escalar Caso</button>
            </div>
        </div>
    </div>

    


</body>
</html>