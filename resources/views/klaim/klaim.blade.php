@extends('layouts.template-admin')

@section('content')
<div class="panel-heading">
			<h1 class="panel-title">Data Klaim</h1>
		</div>
        <hr>
                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
                @if ($message = Session::get('error'))
                    <div class="alert alert-danger alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                @endif


        <!-- <button class='btn btn-success' data-toggle="modal" data-target=".add_modal"> <i class="fa fa-user-plus"></i>Tambah Data</button> -->
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>jp 33 s/d Bulan Ini</th>
                    <th>jp 34 s/d Bulan Ini</th>
                    <th>jp 33 Bulan Ini</th>
                    <th>jp 34 Bulan Ini</th>
                    <th>jp s/d Bulan Ini</th>
                    <th>jp Bulan Ini</th>
                    <th>rasio 33</th>
                    <th>rasio 34</th>
                    <th>Tanggal</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($klaim as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>Rp.{{$item->jp33_sdbln}}</td>
                    <td>Rp.{{$item->jp34_sdbln}}</td>
                    <td>Rp.{{$item->jp33_bln}}</td>
                    <td>Rp.{{$item->jp34_bln}}</td>
                    <td>Rp.{{$item->jp_sdbln}}</td>
                    <td>Rp.{{$item->jp_bln}}</td>
                    <td>{{number_format($item->rasio33/100,2,'.','')}} %</td>
                    <td>{{number_format($item->rasio34/100,2,'.','')}} %</td>
                    <td>{{$item->created_at->format('d F Y')}}
                    <td>
                        <a href="#" data-id="{{$item->id_klaim}}" class="btn btn-warning btn-edit"><i class="lnr lnr-pencil"></i></a>
                        <a href="/klaim/hapus/{{$item->id_klaim}}" Style="color:white; text-decoration:none" class="btn btn-danger" ><i class="lnr lnr-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  



<!-- modal-edit  -->
<div class="modal fade modal-edit" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" id="exampleModalLabel">Edit Klaim</h5>
      </div>
      <form action="" method="post" id="form-edit">
      @csrf
      @method('PATCH')
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-update">Simpan Data</button>
      </div>
      </form>
    </div>
  </div>
</div>
@stop

@section('footer')
    <script>
    
        $('.btn-edit').on('click',function(){
            // console.log($(this).data('id'))
            let id = $(this).data('id')
            $.ajax({
                url:`/klaim/${id}/editklaim`,
                method: "GET",
                success: function(data){
                    // console.log(data)
                    $('#modal-edit').find('.modal-body').html(data)
                    $('#modal-edit').modal('show')
                },
                error:function(error){
                    console.log(error)
                }
            })
        })
        $('.btn-update').on('click',function(){
            // console.log($(this).data('id'))
            let id = $('#form-edit').find('#id_data').val()
            let formData = $('#form-edit').serialize()
            // console.log(formData)
            $.ajax({
                url:`/klaim/${id}`,
                method: "POST",
                data:formData,
                success: function(data){
                    // console.log(data)
                    // $('#modal-edit').find('.modal-body').html(data)
                    $('#modal-edit').modal('hide')
                    window.location.assign('/klaim')
                },
                error:function(error){
                    console.log(error)
                }
            })
        })
    </script>
@stop