@extends('layouts.template-admin')

@section('content')

    <div class="panel-header">
        <h3>Kelola Gambar</h3>
    </div>
    <hr>
    <div class="panel-body">
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Keteragan</th>
                    <th>Gambar</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gambar as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$item->keterangan}}</td>
                    <td><img src="{{ asset('uploads/gambar/' . $item->image) }}" width="100px" heigth="100px" alt="image"></td>
                    <td>
                        <a href="#" data-id="{{$item->id_gambar}}" class="btn btn-warning btn-edit"><i class="lnr lnr-pencil"></i></a>
                        <a href="/gambar/hapus/{{$item->id_gambar}}" Style="color:white; text-decoration:none" class="btn btn-danger" ><i class="lnr lnr-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  
    </div>

<!-- modal-edit  -->
<div class="modal fade modal-edit" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" id="exampleModalLabel">Edit SW</h5>
      </div>
      <form action="" method="post" id="form-edit" enctype="mutipart/form-data">
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
                url:`/gambar/${id}/edit`,
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
                url:`/gambar/${id}`,
                method: "POST",
                data:formData,
                success: function(data){
                    console.log(data)
                    // console.log(data)
                    // $('#modal-edit').find('.modal-body').html(data)
                    // $('#modal-edit').modal('hide')
                    // window.location.assign('/klaim')
                },
                error:function(error){
                    console.log(error)
                }
            })
        })
    </script>
@stop