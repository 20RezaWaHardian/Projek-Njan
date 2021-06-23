<input type="hidden" name="id" id="id_data" value="{{$korban->id}}" id="id_data">
    <div class="form-group row">
        <label for="meninggal" class="col-md-4 col-form-label text-md-right"> Kasus</label>

        <div class="col-md-6">
            @if($korban->kasus == 'meninggal')
            <select name="kasus" id="">
                <option value="meninggal">Meninggal</option>
                <option value="luka-luka">Luka - Luka</option>
            </select>
            @else
            <select name="kasus" id="">
                <option value="luka-luka">Luka - Luka</option>
                <option value="meninggal">Meninggal</option>
            </select>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="luka_luka" class="col-md-4 col-form-label text-md-right">Jumlah</label>

        <div class="col-md-6">
            <input id="luka_luka_update" type="text" class="form-control @error('luka_luka') is-invalid @enderror" 
                name="jumlah"  required autocomplete="luka_luka" value="{{$korban->jumlah}}" onkeypress="return hanyaAngka(event)">

            @error('luka_luka')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>