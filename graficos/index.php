<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- ChartJs CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">

    <!-- Post No-Contestados y Post Contestados -->
    <title>Grafica</title>
    <header></header>
  </head>
  <body>
      <div class = "col-lg-4" style = "padding-top: 20px;">
            <div class = "card">
                <div class = "card-header">
                    Grafica del Estado de los post
                </div>
                <div class ="card-body">
                   <div class = "row">
                        <div class = "col-lg-12">
                            <button class = "btn btn-primary" onclick = CargarGraficoBarra() >Grafica de barras</button>
                       </div>
                       <canvas id="myChart" width="400" height="400"></canvas>
                   </div>
                   <a href="#" class="btn btn-primary">Salir</a>
              </div>
          </div>
      </div>
  </body>
</html>
<!-- Option 2: jQuery, Popper.js, and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script>

    function CargarGraficoBarra(){
        $.ajax({
            url: 'controlador_grafico.php',
            type: 'POST'
        }).done(function(resp){
            var titulo = [];
            var cantidad = [];
            var data = JSON.parse(resp);
            for(var i=0; i< data.length; i++){
                titulo.push(data[i][1]);
                cantidad.push(data[i][2]);
            }
            const ctx = document.getElementById('myChart');
    const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: titulo,
        datasets: [{
            label: '#',
            data: cantidad,
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
        })
    }
</script>
