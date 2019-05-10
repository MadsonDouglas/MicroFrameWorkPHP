<div class="container my-5">
    <div class="row nav-justified ">
        <div class="col-md-3 ">
            <div class="card aqua-gradient">
                <div class="icon mx-4 z-depth-3 px-2 py-2 grey rounded text-align-center">
                    <p class="card-title"><i class="fas fa-chart-bar fa-3x red-text pr-3" aria-hidden="true"></i>    
                </div>
                <div class="card-body white-text">
                    <p class="card-text float-right white-text mx-2">
                        <i class="fas fa-dollar-sign"></i> 2000
                    </p>
                </div>
                <div class="rounded-bottom text-center">
                    <p class="card-text mx-4 mb-2 float-left white-text"><i class="fab fa-bitcoin"></i> Valores do
                        bitcoin</p>
                </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="card peach-gradient">
            <div class="icon orange mx-4 z-depth-3 px-4 py-2 rounded text-align-center">
                    <p class="card-title"> <i class="fas fa-bolt fa-3x white-text pr-3" aria-hidden="true"></i></p>
                </div>
                <div class="card-body white-text">
                  
                    <p class="card-text float-right white-text mx-2">
                        <i class="fas fa-dollar-sign"></i> 2000
                    </p>
                </div>
                <div class="rounded-bottom text-center">
                    <p class="card-text mx-4 mb-2 float-left white-text"><i class="fab fa-bitcoin"></i> Valores do
                        bitcoin</p>
                </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="card dusty-grass-gradient">
            <div class="icon mx-4 z-depth-3 px-3 py-2 red rounded text-align-center">
                    <p class="card-title"> <i class="fas fa-heart fa-3x white-text pr-3" aria-hidden="true"></i></p>
                </div>
                <div class="card-body white-text">
                  
                    <p class="card-text float-right white-text mx-2">
                        <i class="fas fa-dollar-sign"></i> 2000
                    </p>
                </div>
                <div class="rounded-bottom text-center">
                    <p class="card-text mx-4 mb-2 float-left white-text"><i class="fab fa-bitcoin"></i> Valores do
                        bitcoin</p>
                </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="card purple-gradient">
            <div class="icon mx-4 z-depth-3 px-2 py-2 blue rounded text-align-center">
                    <p class="card-title"> <i class="fas fa-users fa-3x pink-text pr-3" aria-hidden="true"></i></p>
                </div>
                <div class="card-body white-text">
                    
                    <p class="card-text float-right white-text mx-2">
                        <i class="fas fa-dollar-sign"></i> 2000
                    </p>
                </div>
                <div class="rounded-bottom text-center">
                    <p class="card-text mx-4 mb-2 float-left white-text"><i class="fab fa-bitcoin"></i> Valores do
                        bitcoin</p>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- Charts -->

<div class="container">
    <div class="row">
    <div class="col-md-5">
    <div class="list-group">
        <a href="#!" class="list-group-item list-group-item-action active">
            Dados anuais
        </a>
        <table class="table table-hover white">
  <tbody>
    <tr>
      <th scope="row">
          <div class="badge badge-danger text-wrap" style="width: 3rem;">1</div>
    </th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">
      <div class="badge badge-warning text-wrap" style="width: 3rem;">2</div>

      </th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">
      <div class="badge badge-success text-wrap" style="width: 3rem;">3</div>

      </th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
    <tr>
      <th scope="row">
      <div class="badge badge-primary text-wrap" style="width: 3rem;">4</div>

      </th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
      
        </div>
    </div>
    <div class="col-md-7">

    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ano', 'Venddas', 'Despesas'],
          ['2013',  1000,      4000],
          ['2014',  1170,      460],
          ['2015',  660,       1120],
          ['2016',  1030,      540],
          ['2017',  1030,      540],
          ['2018',  1030,      540]
        ]);

        var options = {
          title: 'Performance de vendas',
          hAxis: {title: 'Ano',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
<div id="chart_div" style="width: 100%; height: 300px;"></div>
    </div>
</div>
</div>