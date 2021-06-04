@extends('layouts.template-admin')

@section('content')
<div class="panel-heading">
			<h1 class="panel-title">Data Korban</h1>
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


        <a href="#" class='btn btn-success btn-tambah'> <i class="fa fa-plus"></i>Tambah Data</a>
        <hr>
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kasus</th>
                    <th>Jumlah Korban</th>
                    <th>Tanggal</th>
                    <th>action</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($korban as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->kasus}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>{{$item->created_at->format('d F Y')}}</td>

                    
                    <td>
                        <a href="#" data-id="{{ $item->id }}" class="btn btn-warning btn-edit"><i class="lnr lnr-pencil"></i></a>
                        <a href="/korban/hapus/{{$item->id}}" Style="color:white; text-decoration:none" class="btn btn-danger" ><i class="lnr lnr-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  

<!-- modal-tambah -->
<div class="modal fade modal-tambah" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Korban</h5>
      </div>
      <form action="" method="post" id="form-tambah">
      @csrf
      <div class="modal-body">
            <!--  
            @method('PATCH')

                        <input type="hidden" name="sw_id" id="sw_id" value="">
                         -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-simpan">Simpan Data</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- modal-edit  -->
<div class="modal fade modal-edit" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" id="exampleModalLabel">Edit SW</h5>
      </div>
      <form action="" method="post" id="form-edit">
      @csrf
      @method('PATCH')
      <div class="modal-body">
            <!--  
            @method('PATCH')

                        <input type="hidden" name="sw_id" id="sw_id" value="">
                         -->

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
    $('.btn-tambah').on('click',function(){
        $.ajax({
            url: `/korban/tambahKorban`,
            method: 'GET',
            success: function(data){
                $('#modal-tambah').find('.modal-body').html(data)
                $('#modal-tambah').modal('show')
            }
        })
    })
    $('.btn-simpan').on('click',function(){
        let formData= $('#form-tambah').serialize()
        // console.log(formData)
        $.ajax({
            url: `/korban/tambah`,
            method: 'POST',
            data:formData,
            success: function(data){
                // $('#modal-tambah').find('.modal-body').html(data)
                $('#modal-tambah').modal('hide')
                window.location.assign('/korban')
                // alert("Data berhasil disimpan")
            }
        })
    })

    $('.btn-edit').on('click',function(){
        // console.log($(this).data('id'))
        let id = $(this).data('id')
        $.ajax({
            url: `/korban/${id}/editkorban`,
            method: 'GET',
            success: function(data){
                $('#modal-edit').find('.modal-body').html(data)
                $('#modal-edit').modal('show')
            }
        })
    })

    $('.btn-update').on('click',function(){
            // console.log($(this).data('id'))
            let id = $('#form-edit').find('#id_data').val()
            let formData = $('#form-edit').serialize()
            // console.log(formData)
            $.ajax({
                url:`/korban/${id}`,
                method: "POST",
                data:formData,
                success: function(data){
                    // console.log(data)
                    // $('#modal-edit').find('.modal-body').html(data)
                    $('#modal-edit').modal('hide')
                    window.location.assign('/korban')
                },
                error:function(error){
                    console.log(error)
                }
            })
        })
   
</script>
@stop