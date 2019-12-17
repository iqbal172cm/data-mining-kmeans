@extends('admin.layouts.main')

@section('title', 'Admin')

@section('contents')

 <!-- top tiles -->
 {{-- <div class="row tile_count">
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-user"></i> Total Pegawai</span>
        <div class="count" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0">{{ $pegawai }} Orang</div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-archive"></i> Jenis Ikan</span>
          <div class="count" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0">{{ $produk }} Jenis</div>
        </div>
        <div class="col-md-4 col-sm-4 col-xs-6 tile_stats_count">
          <span class="count_top"><i class="fa fa-shopping-basket"></i> Transaksi Penjualan</span>
          <div class="count" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0"><i class=""></i> {{ $penjualan }} Transaksi</div>
        </div>
 </div> --}}

 <div class="row top_tiles">
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-user"></i></div>
        <div class="count" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0">{{ $pegawai }} Orang</div>
        <h3>Total Pegawai</h3>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-archive"></i></div>
        <div class="count" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0">{{ $produk }} Jenis</div>
        <h3>Jenis Ikan</h3>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-shopping-basket"></i></div>
        <div class="count" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0">{{ $penjualan}}</div>
        <h3>Penjualan</h3>
      </div>
    </div>
    <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 ">
      <div class="tile-stats">
        <div class="icon"><i class="fa fa-cart-plus"></i></div>
        <div class="count" data-start="0" data-end="" data-postfix="" data-duration="1500" data-delay="0">{{ $penyetokan }}</div>
        <h3>Pembelian</h3>
      </div>
    </div>
  </div>
 
 <div id="grafikjual"></div>
 <select name="" id="select">
    <option value="Jan">January</option>
    <option value="Feb">Februajry</option>
    <option value="Mar">March</option>
    <option value="Apr">April</option>
    <option value="May">May</option>
    <option value="Jun">June</option>
  </select>

  
 
 <!-- /top tiles -->
 {{-- <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="dashboard_graph">

            <div class="row x_title">
                <div class="col-md-6">
                <h3>Network Activities <small>Graph title sub-title</small></h3>
                </div>
            </div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div id="chart_plot_01" class="demo-placeholder"></div>
            </div>

            <div class="clearfix"></div>

        </div>
    </div>

</div> --}}


@endsection

{{-- charts --}}
@section('charts')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="https://rawgit.com/mholt/PapaParse/master/papaparse.js"></script>
     <!-- untuk menampilkan grafik -->

<script>
    Highcharts.chart('grafikjual', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'Grafik Penjualan'
      },
      xAxis: {
          categories: [
              'Jan',
              'Feb',
              'Mar',
              'Apr',
              'May',
              'Jun',
              'Jul',
              'Aug',
              'Sep',
              'Oct',
              'Nov',
              'Dec'
          ],
          crosshair: true
      },
      yAxis: {
          min: 0,
          title: {
              text: 'Penjualan (kg)'
          }
      },
      tooltip: {
          headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
          pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
              '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
          footerFormat: '</table>',
          shared: true,
          useHTML: true
      },
      plotOptions: {
          column: {
              pointPadding: 0.2,
              borderWidth: 0
          }
      },
      series: [{
          name: 'Tokyo',
          data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]

      }, {
          name: 'New York',
          data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]

      }, {
          name: 'London',
          data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]

      }, {
          name: 'Berlin',
          data: [42.4, 33.2, 34.5, 39.7, 52.6, 75.5, 57.4, 60.4, 47.6, 39.1, 46.8, 51.1]

      }]
  });

</script>

@endsection