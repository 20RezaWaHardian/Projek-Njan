@extends('layouts.template-admin')

@section('content')
        <div class="panel-heading">
			<h1 class="panel-title">Data Admin</h1>
		</div>
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
        <hr>

        <a href="#" class='btn btn-success btn-tambah'> <i class="fa fa-user-plus"></i>Tambah Data</a>
        <hr>
        <table id="tabel-data" class="table table-striped table-bordered" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <!-- <th>Email</th> -->
                    <th>Password</th>
                    <th>Status</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $item)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $item->username}}</td>
                    <!-- <td>{{$item->email}}</td> -->
                    <td>{{$item->password}}</td>
                    @if($item->rule==0)
                    <td>Super Admin</td>
                    @elseif($item->rule==1)
                    <td>Admin</td>
                    @endif
                    <td>
                        <!-- <button type=button data-toggle="modal" data-target="#exampleModal"
                                    data-username_update="{{ $item->username }}"
                                    data-email_update="{{ $item->email }}"
                                    data-password_update="{{ $item->password}}"
                                    data-rule_update="{{ $item->rule }}" class="btn btn-warning" Style="color:black; text-decoration:none"><i class="lnr lnr-pencil"></i></button> -->
                        <!-- <form class="d-inline" method="POST" action="{{route('user.destroy',$item['id'])}}">
                            @method('delete')
                            @csrf
                            <button type="submit" class='btn btn-danger'><i class="oi oi-trash"></i></button>
                        </form> -->

                        <button class="btn btn-warning" data-toggle="modal" data-target=".update_modal"
                            id="update"
                            data-id="{{$item->id}}"
                            data-username_update="{{$item->username}}"
                            data-email_update="{{ $item->email }}"
                            data-password_update="{{ $item->password}}"
                            data-rule_update="{{ $item->rule }}"><i class="lnr lnr-pencil"></i>
                            </button>
                        <a href="/user/hapus/{{$item->id}}" Style="color:black; text-decoration:none" class="btn btn-danger" ><i class="lnr lnr-trash"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>  


<!-- Modal -->
<div class="modal fade update_modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">&times;</button>
        <h5 class="modal-title" id="exampleModalLabel">Edit Data User</h5>
      </div>
      <form action="/user/update" method="post">
      <div class="modal-body">
            @csrf 
            @method('PATCH')

                        <input type="hidden" name="id" id="id" value="">
                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">ID Pegawai</label>

                            <div class="col-md-6">
                                <input id="username_update" type="text" class="form-control @error('username') is-invalid @enderror" name="username"  required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <!-- <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email_update" type="email" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password_update" type="text" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-grop row">
                             <label for="password" class="col-md-4 col-form-label text-md-right">Level User</label>
                            <div class="col-md-6">
                                <select name="rule" id="rule_update">
                                    @if($item->rule == 0)
                                        <option value="0"> Super admin</option>
                                        <option value="1">  Admin</option>
                                    @else

                                    @endif

                                </select>
                            </div>
                        </div>       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- modal-tambah  -->
<div class="modal fade modal-tambah" id="modal-tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
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
        <button type="button" class="btn btn-primary btn-data">Save changes</button>
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
            url: `/user/tambah`,
            method: 'GET',
            success: function(data){
                $('#modal-tambah').find('.modal-body').html(data)
                $('#modal-tambah').modal('show')
            }
        })
    })

    $('.btn-data').on('click',function(){
        let formData= $('#form-tambah').serialize()
        // console.log(formData)
        $.ajax({
            url: `/user/tambah/data`,
            method: 'POST',
            data:formData,
            success: function(data){
                // $('#modal-tambah').find('.modal-body').html(data)
                $('#modal-tambah').modal('hide')
                window.location.assign('/user')
                alert("Data berhasil disimpan")
            }
        })
    })
</script>
@stop