@extends('layouts.template-admin')

@section('content')
<div class="content">
            {{-- notifikasi form validasi --}}
                <!-- @if ($errors->has('file'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('file') }}</strong>
                </span>
                @endif -->
                

                @if ($message = Session::get('success'))
                    <div class="alert alert-success alert-block">
                        <button type="button" class="close" data-dismiss="alert">×</button>	
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
   <form action="/sw/import_excel" enctype="multipart/form-data" method="post">
   @csrf
    <div class="mb-3">
        <label for="formFileSm" class="form-label">Input File</label>
            @error('file')
            <span class="invalid-feedback" role="alert">
                <div class="alert alert-danger">{{ $message }}</div>
            </span>
            @enderror
        <input type="file" class="form-control @error('file') is-invalid @enderror" id="file" name="file" required="required">
           
           
    </div>
    <hr>
    <div class="footer">
        <button type="submit" class="btn btn-primary">Save</button>
    </div>
   </form>
</div>

@endsection