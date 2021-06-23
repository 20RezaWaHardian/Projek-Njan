@extends('layouts.template-admin')

@section('content')
<div class="panel-heading">
			<h1 class="panel-title">Data Keuangan</h1>
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
                    <th>Total Biaya s/d Bulan Ini</th>
                    <th>Total Biaya Bulan Ini</th>
                    <th>Total Laba s/d Bulan Ini</th>
                    <th>Total Laba Bulan Ini</th>
                    <th>Tanggal</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($uang as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>Rp.{{number_format($item->total_biaya_sdbln,0,"",".")}}</td>
                    <td>Rp.{{number_format($item->total_biaya_bln,0,"",".")}}</td>
                    <td>Rp.{{number_format($item->total_laba_sdbln,0,"",".")}}</td>
                    <td>Rp.{{number_format($item->total_laba_bln,0,"",".")}}</td>
                    <td>{{$item->created_at->format('d F Y')}}
                    <td>
                        <a href="#" data-id="{{$item->id_keuangan}}" class="btn btn-warning btn-edit"><i class="lnr lnr-pencil"></i></a>
                        <a href="/keuangan/hapus/{{$item->id_keuangan}}" Style="color:white; text-decoration:none" class="btn btn-danger" ><i class="lnr lnr-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit Keuangan</h5>
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
                url:`/keuangan/${id}/edituang`,
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
                url:`/keuangan/${id}`,
                method: "POST",
                data:formData,
                success: function(data){
                    // console.log(data)
                    // $('#modal-edit').find('.modal-body').html(data)
                    $('#modal-edit').modal('hide')
                    window.location.assign('/keuangan')
                    // alert('Data Berhasil Diubah')
                    // with(['succes' => 'Data Berhasil di Edit'])
                },
                error:function(error){
                    console.log(error)
                }
            })
        })

        function hanyaAngka(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57) && !(charCode == 46 || charCode == 8))
                // return false;
                alert("Hanya Menerima Inputan Angka")
            else {
                var len = $(element).val().length;
                var index = $(element).val().indexOf('.');
                if (index > 0 && charCode == 46) {
                return false;
                }
                if (index > 0) {
                var CharAfterdot = (len + 1) - index;
                if (CharAfterdot > 3) {
                    return false;
                }
                }

            }
            return true;
		}
    </script>
@stop