<input type="hidden" name="id_keuangan" value="{{$uang->id_keuangan}}" id="id_data">
    <div class="form-group row">
        <label for="total_biaya_sdbln" class="col-md-4 col-form-label text-md-right">Total Biaya S/D Bulan Ini</label>

        <div class="col-md-6">
            <input type="text" id="total_biaya_sdbln" name="total_biaya_sdbln"  class="form-control" value="{{$uang->total_biaya_sdbln}}" required onkeypress="return hanyaAngka(event)">

            @error('total_biaya_sdbln')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="total_biaya_bln" class="col-md-4 col-form-label text-md-right">Total Biaya Bulan Ini</label>

        <div class="col-md-6">
            <input type="text" id="total_biaya_bln" name="total_biaya_bln"  class="form-control" value="{{$uang->total_biaya_bln}}" required onkeypress="return hanyaAngka(event)">

            @error('total_biaya_bln')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="total_laba_sdbln" class="col-md-4 col-form-label text-md-right">Total Laba S/D Bulan Ini</label>

        <div class="col-md-6">
            <input type="text" id="total_laba_sdbln" name="total_laba_sdbln"  class="form-control" value="{{$uang->total_laba_sdbln}}" required onkeypress="return hanyaAngka(event)">

            @error('total_laba_sdbln')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="total_laba_bln" class="col-md-4 col-form-label text-md-right">Total Laba Bulan Ini</label>

        <div class="col-md-6">
            <input type="text" id="total_laba_bln" name="total_laba_bln"  class="form-control" value="{{$uang->total_laba_bln}}" required onkeypress="return hanyaAngka(event)">

            @error('total_laba_bln')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>

        <div class="col-md-6">
            <select name="status" id="status">
                @if($uang->status == "lama")
                <option value="lama">Tidak Tampilkan</option>
                <option value="baru"> Tampilkan</option>
                @else
                <option value="baru">Tampilkan</option>
                <option value="lama">Tidak Tampilkan</option>
                @endif
            </select>
        </div>
    </div>