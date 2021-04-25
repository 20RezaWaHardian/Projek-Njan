@extends('layouts.template-admin')

@section('content')
    <form action="/addGambar" method="post" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <select name="keterangan" id="" class="form-control">
                <option value="event">Event</option>
                <option value="jasa raharja">Jasa Raharja</option>
                <option value="peta">Peta</option>
            </select>
        </div>
        <div class="form-group">
            <label for="image">Input Gambar</label>
            <input type="file" class="form-control" name="image" id="image">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@stop