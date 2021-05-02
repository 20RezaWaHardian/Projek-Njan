<!doctype html>
<html lang="en">

<head>
	<title>Dashboard Jasa Raharja</title>
	<meta charset="utf-8">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css"> -->
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="assets/css/demo.css">
	<!-- GOOGLE FONTS -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet"> -->
	<!-- ICONS -->
	<!-- <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png"> -->
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/jr.png">

	<!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                /* align-items: center; */
                /* display: flex;
                justify-content: center;*/
            } 

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                /* text-align: center; */
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
	@yield('header')
	

	

	
	
</head>

<body>
<div id="wrapper">
            <!-- NAVBAR -->
            <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="brand" style='padding:15px'>
                        <a href="index.html"><img src="assets/img/jr.png" alt="Klorofil Logo" class="img-responsive logo" ></a>
                    </div>
                <div class="container-fluid">
                <center style=" padding-top:15px; font-size:30px">Dashboard Monitoring Jasa Raharja Cabang Jambi</center>

                    <div class="navbar-btn">
                        <!-- <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button> -->
                    </div>
                    <!-- <div class="flex-center position-ref full-height"> -->
                            @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                        <a href="{{ url('/home') }}">Home</a>
                                    @else
                                        <a href="{{ route('login') }}">Login</a>

                                        <!-- @if (Route::has('register'))
                                            <a href="{{ route('register') }}">Register</a>
                                        @endif -->
                                    @endauth
                                </div>
                            @endif
                    <!-- </div> -->
                </div>
            </nav>
		 
						
						
                                            <div class="card">
                                                
                                                <div class="card-body" style="padding-top:150px; padding-left:20px;">
                                                    <!-- <div class="container"> -->
                                                            <!-- <div class="body" > -->
                                                                
                                                                    <div class="row">
                                                                        <div class="col-md-3">
                                                                            <div class="metric" style="background-color: #40bf40; padding:30px 20px 60px 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19) ">
                                                                                
                                                                                <span class="icon" style="padding-top:20px; width:80px; height: 80px;">
                                                                                    <i class="fa fa-download" style="font-size: 40px;"></i></span>
                                                                                <p>
                                                                                    <span class="number" style=" color:white;" >SW</span>
                                                                                <span class="number" style=" font-weight:bold; color:white;" id='sw'>Rp.0 </span>
                                                                                <span class="title" style=" font-weight:bold; color:white;">SW S/D Bulan Ini</span>
                                                                                                        
                                                                                </p>
                                                                                <p style="font-size:15px; padding-top:20px" ><a href="#" style=" color:white;" class="btn-show">Show</a></p>
                                                                            
                                                                                                    
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-3" >
                                                                        <div class="metric" style="background-color: #4d88ff; padding:30px 20px 60px 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                                                            <span class="icon" style="padding-top:20px; width:80px; height: 80px;">
                                                                            <i class="fa fa-shopping-bag" style="font-size: 40px;"></i></span>
                                                                            
                                                                            <p>
                                                                            <span class="number" style=" color:white;" >IW</span>
                                                                            <span class="number" style=" font-weight:bold; color:white;" id='iw'>0</span>
                                                                            <span class="title" style=" font-weight:bold; color:white;">IW S/D Bulan Ini</span>
                                                                            </p>
                                                                                                
                                                                            <p style="font-size:15px; padding-top:20px"><a href="#" style="font-size:15px; color:white; " class="btn-show-iw">Show</a></p>
                                                                        </div>
                                                                        </div>
                                                        
                                                                        <div class="col-md-3" >
                                                                        <div class="metric" style="background-color: #ff9900; padding:30px 20px 60px 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                                                            <span class="icon" style="padding-top:20px; width:80px; height: 80px;">
                                                                            <i class="fa fa-bar-chart" style="font-size: 40px;"></i></span>
                                                                            
                                                                            <p>
                                                                            <span class="number" style=" color:white;" > KLAIM</span>
                                                                            <span class="number" style=" font-weight:bold; color:white;" id='klaim'>0</span>
                                                                            <span class="title" style=" font-weight:bold; color:white;">Jumlah S/D Bulan Ini</span>
                                                                                                
                                                                            </p>
                                                                                            
                                                                            <p style="font-size:15px; padding-top:20px"><a href="#" style=" color:white;" class="btn-show-klaim">Show</a></p>
                                                                        </div>
                                                                        </div>
                                                                        <div class="col-md-3">
                                                                        <div class="metric" style="background-color: #cc0000; padding:30px 20px 60px 20px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)">
                                                                            <span class="icon" style="padding-top:20px; width:80px; height: 80px;">
                                                                            <i class="fa fa-money" style="font-size: 40px;"></i></span>
                                                                            <p>
                                                                            <span class="number" style=" color:white;" >KEUANGAN</span>
                                                                            <span class="number" style=" font-weight:bold; color:white;" id='keuangan'>0</span>
                                                                            <span class="title" style=" font-weight:bold; color:white;">Total Biaya S/D Bulan Ini</span>
                                                                                                
                                                                            </p>
                                                                                                
                                                                            <p style="font-size:15px; padding-top:20px"><a href="#" style=" color:white;" class="btn-show-keuangan">Show</a></p>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            <!-- </div> -->
                                                            <!-- <div class="card"> -->
                                                                <!-- <div class="card-body"> -->
                                                                    <select name="tahun" id="tahun" class="form-control" onchange='load_data()'>
                                                                    @for($th=date('Y'); $th >= date('Y')-5; $th--)
                                                                    <option value="{{$th}}">{{$th}} </option>
                                                                    @endfor
                                                                    </select>
                                                                    <hr>
                                                                    <div class="row">
                                                                        <div class="col-xs-9">
                                                                        <div id="container"></div>
                                                                        </div>
                                                                        
                                                                        <div class="col-md-2" >
                                                                        <div id="korban" style="padding: all 10px;"></div>
                                                                        </div>
                                                                        <hr>
                                                                    </row>
                                                                    
                                                                        <div class="col-md-3" >
                                                                            <div class="response"></div>
                                                                            <div id='calendar' ></div>  
                                                                        </div>
                                                                
                                                                            <div class="col-md-5 ">
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
                                                                                    <img style="width: 960px; height: 350px; object-fit: cover;" src="{{ asset('uploads/gambar/' . $gambar->image) }}" alt="">
                                                                                    </div>
                                                                                    <div class="item">
                                                                                    <img style="width: 960px; height: 350px; object-fit: cover;" src="{{ asset('uploads/gambar/' . $gambar2->image) }}" alt="">
                                                                                    </div>
                                                                                    <div class="item">
                                                                                    <img style="width: 960px; height: 350px;" src="{{ asset('uploads/gambar/' . $gambar3->image) }}" alt="">
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
                                                                            <hr>
                                                                            <div class="col-md-15">
                                                                                <div class="response"></div>
                                                                                <div id='calendar' ></div>  
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                <!-- </div> -->
                                                            <!-- </div> -->

                                                            
                                                    


                                                </div>
                                            </div>
					
			<!-- </div> -->

<!-- modal-show  -->
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
	
	

    
        
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
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
			url:"{{url('/')}}",
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
            Highcharts.setOptions({
        chart: {
            style: {
                fontFamily: 'Roboto Condensed'
            }
        },
        lang: {
            thousandsSep: ',',
            numericSymbols: [" k" , " M" , " B" , " T" , "P" , "E"]
        }
        });
        var chart =new Highcharts.chart('container', {
          chart: {
            type: 'line',
            // options3d: {
            //   enabled: false,
            //   alpha: 6,
            //   beta: 15,
            //   depth: 50,
            //   viewDistance: 0
            // }
          },
          title: {
            text: 'Grafik Keuangan '
          },
          subtitle: {
            text: 'Jasa Raharja'
          },
          xAxis: {
            categories:  result.data_grafik.label_bulan,
			//categories:['januari','februari'],
            crosshair: true
          },
          yAxis: {
            min: 0,
            
            // allowDecimals:false,
            title: {
              text: 'Jumlah S/D Bulan Ini'
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

<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<script>
$(document).ready(function () {
var SITEURL = "{{url('/')}}";
$.ajaxSetup({
headers: {
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
}
});
var calendar = $('#calendar').fullCalendar({
editable: true,
events: SITEURL + "/fullcalendar",
displayEventTime: true,
editable: true,
eventRender: function (event, element, view) {
if (event.allDay === 'true') {
event.allDay = true;
} else {
event.allDay = false;
}
},
selectable: true,
selectHelper: true,
select: function (start, end, allDay) {
var title = prompt('Event Title:');
if (title) {
var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
// $.ajax({
// url: SITEURL + "/fullcalendar/create",
// data: 'title=' + title + '&start=' + start + '&end=' + end,
// type: "POST",
// success: function (data) {
// displayMessage("Added Successfully");
// }
// });
calendar.fullCalendar('renderEvent',
{
title: title,
start: start,
end: end,
allDay: allDay
},
true
);
}
calendar.fullCalendar('unselect');
},
eventDrop: function (event, delta) {
var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
// $.ajax({
// url: SITEURL + '/fullcalendar/update',
// data: 'title=' + event.title + '&start=' + start + '&end=' + end + '&id=' + event.id,
// type: "POST",
// success: function (response) {
// displayMessage("Updated Successfully");
// }
// });
},
eventClick: function (event) {
var deleteMsg = confirm("Do you really want to delete?");
if (deleteMsg) {
// $.ajax({
// type: "POST",
// url: SITEURL + '/fullcalendar/delete',
// data: "&id=" + event.id,
// success: function (response) {
// if(parseInt(response) > 0) {
// $('#calendar').fullCalendar('removeEvents', event.id);
// displayMessage("Deleted Successfully");
// }
// }
// });
}
}
});
});
// function displayMessage(message) {
// $(".response").html("<div class='success'>"+message+"</div>");
// setInterval(function() { $(".success").fadeOut(); }, 1000);
// }
</script>

<script>
    $('.btn-show').on('click',function(){
            $.ajax({
                url:`/show/sw/welcome`,
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
                url:`/show/iw/welcome`,
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
                url:`/show/klaim/welcome`,
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
                url:`/show/uang/welcome`,
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
	
</body>

</html>


