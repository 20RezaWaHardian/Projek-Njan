<input type="hidden" name="id_klaim" id="id_data" value="{{$klaim->id_klaim}}">
    <div class="form-group row">
        <label for="jp33_sdbln" class="col-md-4 col-form-label text-md-right">JP 33 S/D Bulan Ini</label>

        <div class="col-md-6">
            <input type="text" id="jp33_sdbln" name="jp33_sdbln"  class="form-control" value="{{$klaim->jp33_sdbln}}">

            @error('jp33_sdbln')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="jp34_sdbln" class="col-md-4 col-form-label text-md-right">JP 34 S/D Bulan Ini</label>

        <div class="col-md-6">
            <input type="text" id="jp34_sdbln" name="jp34_sdbln"  class="form-control" value="{{$klaim->jp34_sdbln}}">

            @error('jp34_sdbln')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="jp33_bln" class="col-md-4 col-form-label text-md-right">JP 33 Bulan Ini</label>

        <div class="col-md-6">
            <input type="text" id="jp33_bln" name="jp33_bln"  class="form-control" value="{{$klaim->jp33_bln}}">

            @error('jp33_bln')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="jp34_bln" class="col-md-4 col-form-label text-md-right">JP 34 Bulan Ini</label>

        <div class="col-md-6">
            <input type="text" id="jp34_bln" name="jp34_bln"  class="form-control" value="{{$klaim->jp34_bln}}">

            @error('jp34_bln')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="jp_sdbln" class="col-md-4 col-form-label text-md-right">JP S/D Bulan Ini</label>

        <div class="col-md-6">
            <input type="text" id="jp_sdbln" name="jp_sdbln"  class="form-control" value="{{$klaim->jp_sdbln}}">

            @error('jp_sdbln')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="jp_bln" class="col-md-4 col-form-label text-md-right">JP Bulan Ini</label>

        <div class="col-md-6">
            <input type="text" id="jp_bln" name="jp_bln"  class="form-control" value="{{$klaim->jp_bln}}">

            @error('jp_bln')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="rasio33" class="col-md-4 col-form-label text-md-right">Rasio 33</label>

        <div class="col-md-6">
            <input type="text" id="rasio33" name="rasio33"  class="form-control" value="{{$klaim->rasio33}}">

            @error('rasio33')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="rasio34" class="col-md-4 col-form-label text-md-right">Rasio 34</label>

        <div class="col-md-6">
            <input type="text" id="rasio34" name="rasio34"  class="form-control" value="{{$klaim->rasio34}}">

            @error('rasio34')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>

        <div class="col-md-6">
            <select name="status" id="">
                @if($klaim->status == 'lama')
                <option value="lama"> Tidak Ditampilkan</option>
                <option value="baru"> Ditampilkan</option>
                @else
                <option value="baru">Tampilkan</option>
                <option value="lama">Tidak Tampilkan</option>
                @endif
            </select>

            @error('status')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>