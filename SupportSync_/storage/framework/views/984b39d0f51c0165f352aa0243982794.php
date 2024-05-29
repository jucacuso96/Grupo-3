<!DOCTYPE html>
<html lang="en">
<head>

    <?php echo $__env->make('usuario/template_usuario/template_ruta', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Support Sync | Reporte Productividad </title>

    <link rel="stylesheet" href="assets/css/Usuario/reporte_caso_esttilo.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>
<body> 
    <?php echo $__env->make('usuario/template_usuario/template_menu_coordinador', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <section class="box_contenedor_general">
    
    <!-- SCRIPT DE: 1.volumen de clientes que se han impactado positivamente por el uso del nuevo sistema. -->
    <script>
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        <?php $__currentLoopData = $total_caso; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $caso): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            function drawChart() {
            var data = google.visualization.arrayToDataTable([
                
                ["Estado", "Cantidad", { role: "style" } ],
                ["Solucionados", <?php echo e($caso->solucionados); ?>, "color: #e5e4e2"],
                ["Pendientes", <?php echo e($caso->pendientes); ?>, "color: #c20000"]
                
                ]);
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            var view = new google.visualization.DataView(data);
            view.setColumns([0, 1,
                            { calc: "stringify",
                                sourceColumn: 1,
                                type: "string",
                                role: "annotation" },
                            2]);

            var options = {
                width:'100%',
                height: 200,
                // bar: {groupWidth: "95%"},
                legend: { position: "none" },
            };
            var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
            chart.draw(view, options);
        }
    </script>

</body>
</html><?php /**PATH C:\xampp\htdocs\SupportSync_\resources\views/usuario/reporte_caso_usuario.blade.php ENDPATH**/ ?>