
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
                        <a href="#" onclick="$('#id_gambar').val('{{$item->id_gambar}}')" data-id="{{$item->id_gambar}}" class="btn btn-warning btn-edit"><i class="lnr lnr-pencil"></i></a>
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
      <form action="{{ route('updateGambar') }}" method="post" id="form-edit" enctype="multipart/form-data">
      @csrf
      @method('PATCH')
      <input type="hidden" id="id_gambar" name="id_gambar">
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-update" >Simpan Data</button>
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

        // function edit_data()
        // {
        //     $keterangan = $("#keterangan").val();
        //     $image = $('#image').prop('files')[0];

        //     $formData= new FormData();
        //     let id = $('#form-edit').find('#id_data').val()
        //     $formData.append('keterangan',$keterangan);
        //     $formData.append('image',$image);

        //     // showLoading();
        //     $.ajax({
        //         url:`/gambar/${id}`,
        //         cache: false,
        //         contentType: false,
        //         processData: false,
        //         method: "POST",
        //         header: {
        //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        //         },
        //         data:$formData,
        //         success: function(res){
        //             // hideLoading();
        //         },
        //         error: function(res){

        //         },
        //     })
        // }

        $('.btn-update').on('click',function(){
            // console.log($(this).data('id'))
            let id = $('#form-edit').find('#id_data').val()
            let formData = $('#form-edit').serialize()
            // perlu ada perubahan disini
            //kira yg mna bg yg hrus dirubh
            // console.log(formData)
            $.ajax({
                url:`/gambar/${id}`,
                method: "POST",
                data:formData,
                success: function(data){
                    console.log(data)
                    // console.log(data)
                    // $('#modal-edit').find('.modal-body').html(data)
                    $('#modal-edit').modal('hide')
                    // window.location.assign('/klaim')
                },
                error:function(error){
                    console.log(error)
                }
            })
            
        })


    </script>
@stop