@extends('layouts.template-admin')

@section('header')
<!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> -->

@stop

@section('content')
<div class="panel-heading">
			<h1 class="panel-title">Data IW</h1>
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
                    <th>Bulan Ini</th>
                    <th>s/d Bulan Ini</th>
                    <th>Anggaran</th>
                    <th>Persentase</th>
                    <th>Realisasi</th>
                    <th>Tanggal</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($iw as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>Rp.{{number_format($item->bulan_Ini,0,"",".")}}</td>
                    <td>Rp.{{number_format($item->sdBulan_Ini,0,"",".")}}</td>
                    <td>Rp.{{number_format($item->anggaran,0,"",".")}}</td>
                    <td>{{number_format($item->persentasi/100,2,'.','')}} %</td>
                    <td>{{number_format($item->realisasi/100,2,'.','')}} %</td>
                    <td>{{$item->created_at->format('d M Y')}}</td>
                    <td>

                        <!-- <button class="btn btn-warning" data-toggle="modal" data-target=".update_modal"
                            id="update"
                            data-id="{{$item->id}}"
                            data-username_update="{{$item->username}}"
                            data-email_update="{{ $item->email }}"
                            data-password_update="{{ $item->password}}"
                            data-rule_update="{{ $item->rule }}">edit
                            </button> -->
                        <a href="#" data-id="{{$item->iw_id}}" class="btn btn-warning btn-edit"><i class="lnr lnr-pencil"></i></a>
                        <a href="/iw/hapus/{{$item->iw_id}}" Style="color:black; text-decoration:none" class="btn btn-danger" ><i class="lnr lnr-trash"></i></a>
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
        <h5 class="modal-title" id="exampleModalLabel">Edit IW</h5>
      </div>
      <form action="" method="post" id="form-edit">
      @csrf
      @method('PATCH')
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary btn-update" onclick="validation();">Simpan Data</button>
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
                url:`/iw/${id}/editiw`,
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
                url:`/iw/${id}`,
                method: "POST",
                data:formData,
                success: function(data){
                    // console.log(data)
                    // $('#modal-edit').find('.modal-body').html(data)
                    $('#modal-edit').modal('hide')
                    window.location.assign('/iw')
                    // alert("Data Berhasil Di Ubah")
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
    <!-- <script>
        function validation()
        {
            Swal.fire('Any fool can use a computer')
        }
    </script>    -->
@stop