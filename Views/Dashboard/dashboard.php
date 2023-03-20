<?php headerAdmin($data); ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> <?= $data['page_title'] ?></h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
          <li class="breadcrumb-item"><a href="#"><?= $data['page_title'] ?></a></li>
        </ul>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3">
          <a href="<?= base_url() ?>/usuarios" class="linkw">
          <div class="widget-small primary coloured-icon"><i class="icon fa fa-users fa-3x"></i>
            <div class="info">
              <h4>Usuarios</h4>
              <p><b>5</b></p>
            </div>
          </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-3">
        <a href="<?= base_url() ?>/clientes" class="linkw">
          <div class="widget-small info coloured-icon"><i class="icon fa fa fa-user fa-3x"></i>
            <div class="info">
              <h4>Clientes</h4>
              <p><b>25</b></p>
            </div>
          </div>
          <a>
        </div>
        <div class="col-md-6 col-lg-3">
        <a href="<?= base_url() ?>/productos" class="linkw">
          <div class="widget-small warning coloured-icon"><i class="icon fa fa-archive fa-3x"></i>
            <div class="info">
              <h4>Productos</h4>
              <p><b>10</b></p>
            </div>
          </div>
          <a>
        </div>
        <div class="col-md-6 col-lg-3">
        <a href="<?= base_url() ?>/pedidos" class="linkw">
          <div class="widget-small danger coloured-icon"><i class="icon fa fa-shopping-cart fa-3x"></i>
            <div class="info">
              <h4>Pedidos</h4>
              <p><b>500</b></p>
            </div>
          </div>
          <a>
        </div>
      </div>
      <div class="row">
      <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title">Últimos Pedidos</h3>
            <table class="table table-striped table-sm">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Cliente</th>
                  <th>Estado</th>
                  <th class="text-right">Monto</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Completo</td>
                  <td class="text-right">390.00 €</td>
                  <td><a href=""><i class="fa fa-eye" aria-hidden="true"></a></td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Antonio</td>
                  <td>Reembolsado</td>
                  <td class="text-right">410.00 €</td>
                  <td><a href=""><i class="fa fa-eye" aria-hidden="true"></a></td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Marky</td>
                  <td>Completo</td>
                  <td class="text-right">400.00 €</td>
                  <td><a href=""><i class="fa fa-eye" aria-hidden="true"></a></td>
                </tr>
                <tr>
                  <td>4</td>
                  <td>Andrea</td>
                  <td>Completo</td>
                  <td class="text-right">380.00 €</td>
                  <td><a href=""><i class="fa fa-eye" aria-hidden="true"></a></td>
                </tr>
                <tr>
                  <td>5</td>
                  <td>Ana</td>
                  <td>Completo</td>
                  <td class="text-right">330.00 €</td>
                  <td><a href=""><i class="fa fa-eye" aria-hidden="true"></a></td>
                </tr>
                <tr>
                  <td>6</td>
                  <td>Julia</td>
                  <td>Completo</td>
                  <td class="text-right">70.00 €</td>
                  <td><a href=""><i class="fa fa-eye" aria-hidden="true"></a></td>
                </tr>
                <tr>
                  <td>7</td>
                  <td>Monica</td>
                  <td>Fernández</td>
                  <td class="text-right">1,200.00 €</td>
                  <td><a href=""><i class="fa fa-eye" aria-hidden="true"></a></td>
                </tr>
                <tr>
                  <td>8</td>
                  <td>Manu</td>
                  <td>Pendiente</td>
                  <td class="text-right">4,200.00 €</td>
                  <td><a href=""><i class="fa fa-eye" aria-hidden="true"></a></td>
                </tr>
                <tr>
                  <td>9</td>
                  <td>Ileen</td>
                  <td>Completo</td>
                  <td class="text-right">820.00 €</td>
                  <td><a href=""><i class="fa fa-eye" aria-hidden="true"></a></td>
                </tr>
                <tr>
                  <td>10</td>
                  <td>Larry</td>
                  <td>Completo</td>
                  <td class="text-right">510.00 €</td>
                  <td><a href=""><i class="fa fa-eye" aria-hidden="true"></a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-6">
          <div class="tile">
            <div class="container-title">
            <h3 class="tile-title">Tipo de pagos por mes</h3>
          </div>
          <div id="pagosMesAño"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="tile">
            <div class="container-title">
              <h3 class="tile-title">Ventas por mes</h3>
            </div>
            <div id="graficaMes"></div>
          </div>
          </div>
          <div class="col-md-12">
          <div class="tile">
          <div class="container-title">
            <h3 class="tile-title">Ventas por año</h3>
          </div>
        <div id="graficaAño"></div>
      </div>
      </div>
      </div>
    </main>
<?php footerAdmin($data); ?>

<script>
Highcharts.chart('pagosMesAño', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Ventas por tipo de pago, Marzo 2023',
        align: 'center'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<b>{point.name}</b>: {point.percentage:.1f} %'
            }
        }
    },
    series: [{
        name: 'Pagos',
        colorByPoint: true,
        data: [{
            name: 'Cheque',
            y: 10.1,
            sliced: true,
            selected: true
        }, {
            name: 'Tarjeta',
            y: 38.7
        },  {
            name: 'PayPal',
            y: 51.3
        }]
    }]
});

Highcharts.chart('graficaMes', {

title: {
    text: 'Ventas Marzo 2023',
    align: 'center'
},

subtitle: {
    text: 'Total ventas 574,876.50 €',
    align: 'center'
},

yAxis: {
    title: {
        text: ''
    }
},

xAxis: {
    accessibility: {
        rangeDescription: ''
    }
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        },
        pointStart: 1
    }
},

series: [{
  name:'',
    data: [439.34, 486.56, 651.65, 818.27, 1121.43, 1423.83,
        1715.33, 1651.74, 1551.57, 1614.54, 1546.10,439.34, 486.56, 651.65, 818.27, 1121.43, 1423.83,
        1715.33, 1651.74, 1551.57, 1614.54, 1546.10, 439.34, 486.56, 651.65, 818.27, 1121.43, 1423.83,
        1715.33, 1651.74, 1551.57]
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});

Highcharts.chart('graficaAño', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Ventas del año 2023'
    },
    subtitle: {
        text: 'Estadísticas de ventas por mes</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Ventas'
        }
    },
    legend: {
        enabled: false
    },

    series: [{
        name: 'Ventas Año',
        data: [
            ['Enero', 15213.00],
            ['Febrero', 33137.18],
            ['Marzo', 27628.79],
            ['Abril', 22093.23],
            ['Mayo', 42123.91],
            ['Junio', 7215.74],
            ['Julio', 21380.32],
            ['Agosto', 42034.89],
            ['Septiembre', 32021.67],
            ['Octubre', 31983.11],
            ['Noviembre', 41683.45],
            ['Diciembre', 41835.38]
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', 
            y: 10, 
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});

</script>
