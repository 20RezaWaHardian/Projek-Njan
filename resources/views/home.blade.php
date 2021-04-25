@extends('layouts.template-admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3>Selamat Datang Admin</h3>
                </div>
                <hr>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                    <!-- {{ __('You are logged in!') }} -->
                      <div class="body">
                          <div class="row">
                            <div class="col-md-3" style="margin-rigth:50px">
                              <div class="metric" style="background-color: #40bf40; padding:30px 20px 40px 10px">
                                <span class="icon"><i class="fa fa-download"></i></span>
                                                    <p>
                                  <span class="number" style="font-size:16px; font-weight:bold; color:white;" id='sw'>0 </span>
                                  <span class="title" style="font-size:13px; font-weight:bold; color:white;">SW S/D Bulan Ini</span>
                                                        
                                </p>
                                  <p style="font-size:11px" ><a href="#" style="font-size:11px; color:white;" class="btn-show">Show</a></p>
                                                    
                              </div>
                            </div>
                            <div class="col-md-3" >
                              <div class="metric" style="background-color: #4d88ff; padding:30px 20px 40px 20px">
                                <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                
                                <p>
                                  <span class="number" style="font-size:16px; font-weight:bold; color:white;" id='iw'>0</span>
                                  <span class="title" style="font-size:13px; font-weight:bold; color:white;">IW S/D Bulan Ini</span>
                                                                          </p>
                                                    
                                <p ><a href="#" style="font-size:11px; color:white;" class="btn-show-iw">Show</a></p>
                              </div>
                            </div>
              
                            <div class="col-md-3" >
                              <div class="metric" style="background-color: #ff9900; padding:30px 20px 40px 20px; margin-right:10px">
                                <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                
                                <p>
                                  <span class="number" style="font-size:16px; font-weight:bold; color:white;" id='klaim'>0</span>
                                  <span class="title" style="font-size:13px; font-weight:bold; color:white;">Jumlah S/D Bulan Ini</span>
                                                      
                                </p>
                                                
                                <p style="font-size:11px"><a href="#" style="font-size:11px; color:white;" class="btn-show-klaim">Show</a></p>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="metric" style="background-color: #cc0000; padding:30px 20px 40px 10px; margin-right:40px; margin-left:-15px">
                                <span class="icon"><i class="fa fa-money"></i></span>
                                <p>
                                  <span class="number" style="font-size:16px; font-weight:bold; color:white;" id='keuangan'>0</span>
                                  <span class="title" style="font-size:13px; font-weight:bold; color:white;">Total Biaya S/D Bulan Ini</span>
                                                      
                                </p>
                                                    
                                <p style="font-size:11px"><a href="#" style="font-size:11px; color:white;" class="btn-show-keuangan">Show</a></p>
                              </div>
                            </div>
                          </div>
                                        </div>
                          <div class="card">
                              <div class="card-body">
                                <select name="tahun" id="tahun" class="form-control" onchange='load_data()'>
                                  @for($th=date('Y'); $th >= date('Y')-5; $th--)
                                  <option value="{{$th}}">{{$th}} </option>
                                  @endfor
                                </select>
                                  <div class="row">
                                    <div class="col-md-5" heigth="10px">
                                      <div id="container"></div>
                                    </div>
                                    
                                    <div class="col-md-3" heigth="4px">
                                      <div id="korban" style="padding: all 10px;"></div>
                                    </div>

                                  
                            
                                      <div class="col-md-4 ">
                                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                          <!-- Indicators -->
                                          <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>		
                                          </ol>
                                    
                                          <!-- deklarasi carousel -->
                                          <div class="carousel-inner" role="listbox">
                                            <div class="item active">
                                              <img src="{{ asset('uploads/gambar/' . $gambar->image) }}" alt="">
                                            </div>
                                            <div class="item">
                                              <img src="{{ asset('uploads/gambar/' . $gambar2->image) }}" alt="">
                                            </div>
                                            <div class="item">
                                              <img src="{{ asset('uploads/gambar/' . $gambar3->image) }}" alt="">
                                            </div>
                                          </div>
                                    
                                          <!-- membuat panah next dan previous -->
                                          <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                          </a>
                                          <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                          </a>
                                        </div>
                                      </div>
                                  </div>
                              </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- modal-edit  -->
<div class="modal fade modal-show" id="modal-show" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" id="exampleModalLabel">Detail Data</h5>
      </div>
     
      <div class="modal-body">

      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Simpan Data</button>
      </div> -->
    </div>
  </div>
</div>


@stop

@section('footer')
<!-- <script src="https://cdn.plot.ly/plotly-latest.min.js"></script> -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/series-label.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script>
	load_data();
	function load_data(){
		var tahun=$("#tahun").val();
		// var show=$('#show').val();
		//header
		$.ajax({
			url:"{{url('/home')}}",
			data:{
				tahun:tahun,
				// show:show,
			},
			type:'get',
			success:function(result)
			{
			//data atas
			

			// console.log(result);
			$("#iw").html(result.iw);
			$("#sw").html(result.sw);
			$("#klaim").html(result.klaim);
			$("#keuangan").html(result.keuangan);
			grafik(result);
			

		

			}
		});

		function grafik(result) {
        var chart =new Highcharts.chart('container', {
          chart: {
            type: 'line',
            options3d: {
              enabled: false,
              alpha: 6,
              beta: 15,
              depth: 50,
              viewDistance: 0
            }
          },
          title: {
            text: 'Peminat Prodi '
          },
          subtitle: {
            text: 'Data dihitung bersumber dari database Sistem Penerimaan Mahasiswa Baru'
          },
          xAxis: {
            categories:  result.data_grafik.label_bulan,
			//categories:['januari','februari'],
            crosshair: true
          },
          yAxis: {
            min: 0,
            allowDecimals:false,
            title: {
              text: 'Jumlah Peminat'
            }
          },
          tooltip: {
            headerFormat: '<span style="font-size:10px">Bulan {point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y} Rupiah</b></td></tr>',
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
            name: 'SW',
            data: result.data_grafik.data_sw

          },
		  {
            name: 'IW',
            data: result.data_grafik.data_iw

          },
		  {
            name: 'KLAIM',
            data: result.data_grafik.data_klaim

          },
		  {
            name: 'Keuangan',
            data: result.data_grafik.data_keuangan

          },


         
          
          ]
        });

		
      }
	}
</script>

<script>
Highcharts.chart('korban', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Grafik Korban'
    },
    tooltip: {
        // pointFormat: '{series.name}: <b>{point:.1f}</b>'
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
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Jumlah',
        colorByPoint: true,
        data: [{
            name: 'Meninggal',
            y: {!!$korban_mg!!},
            sliced: true,
            selected: true
        }, {
            name: 'Luka - Luka',
            y: {!!$korban_lk!!}
        }]
    }]
});
</script>

<script>
        $('.btn-show').on('click',function(){
            $.ajax({
                url:`/show/sw`,
                method: "GET",
                success: function(data){
                    // console.log(data)
                    $('#modal-show').find('.modal-body').html(data)
                    $('#modal-show').modal('show')
                },
                error:function(error){
                    console.log(error)
                }
            })
        })

        $('.btn-show-iw').on('click',function(){
            $.ajax({
                url:`/show/iw`,
                method: "GET",
                success: function(data){
                    // console.log(data)
                    $('#modal-show').find('.modal-body').html(data)
                    $('#modal-show').modal('show')
                },
                error:function(error){
                    console.log(error)
                }
            })
        })

        $('.btn-show-klaim').on('click',function(){
            $.ajax({
                url:`/show/klaim`,
                method: "GET",
                success: function(data){
                    // console.log(data)
                    $('#modal-show').find('.modal-body').html(data)
                    $('#modal-show').modal('show')
                },
                error:function(error){
                    console.log(error)
                }
            })
        })

        $('.btn-show-keuangan').on('click',function(){
            $.ajax({
                url:`/show/uang`,
                method: "GET",
                success: function(data){
                    // console.log(data)
                    $('#modal-show').find('.modal-body').html(data)
                    $('#modal-show').modal('show')
                },
                error:function(error){
                    console.log(error)
                }
            })
        })
</script>

@stop
