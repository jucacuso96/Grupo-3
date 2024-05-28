<!DOCTYPE html>
<html lang="en">
<head>
    @include('usuario/template_usuario/template_ruta')
    <title>Support Sync | Escalar Caso</title>
    <link rel="stylesheet" href="assets/css/Usuario/documento_solucion_estilo.css">
    <link href="https://cdn.datatables.net/v/dt/dt-2.0.7/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
@include('usuario/template_usuario/template_menu_coordinador')

<section class="box_contenedor_general">
    <div class="box_formulario">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('documento_solucion.registrar') }}" method="POST" enctype="multipart/form-data">
            @csrf
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
                                    @if(isset($productos))
                                        @foreach($productos as $product)
                                            <option value="{{ $product->id }}">{{ $product->nombre_producto }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <label for="tipo_producto">Producto:</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select" id="id_tipo_consulta" name="id_tipo_consulta" aria-label="Tipo de Consulta">
                                    @if(isset($tipo_consulta))
                                        @foreach($tipo_consulta as $tipo_consult)
                                            <option value="{{ $tipo_consult->id }}">{{ $tipo_consult->nombre_tipo_consulta }}</option>
                                        @endforeach
                                    @endif
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
            @foreach($documentos_registrados as $documento_registrado)
            <tr>
                <td>{{ $documento_registrado->nombre }}</td>
                <td class="td_observacion">{{ $documento_registrado->observacion }}</td>
                <td>{{ $documento_registrado->nombre_producto }}</td>
                <td>{{ $documento_registrado->nombre_tipo_consulta }}</td>
                <td>
                    <!-- Botón de Editar -->
                    <a href="" class="btn btn-primary"><i class="bi bi-pencil-square"></i></a>
                    <!-- Botón de Eliminar -->
                    <form action="{{ route('documentos.eliminar') }}" method="POST" style="display:inline;">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="id_documento_solucion" value="{{ $documento_registrado->id_documento_solucion }}">
                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
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
