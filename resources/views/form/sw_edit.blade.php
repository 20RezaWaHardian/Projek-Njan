<input type="hidden" name="sw_id" value="{{$sw->sw_id}}" id="id_data">
    <div class="form-group row">
        <label for="bulanIni" class="col-md-4 col-form-label text-md-right">Bulan Ini ** </label>

        <div class="col-md-6">
            <input type="text" id="bulanIni" name="bulan_Ini"  class="form-control" value="{{$sw->bulan_Ini}}" required onkeypress="return hanyaAngka(event)">
            </p>
            @error('bulanIni')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="sdBulanIni" class="col-md-4 col-form-label text-md-right">s/d Bulan Ini **</label>

        <div class="col-md-6">
            <input id="sdBulanIni" type="text" class="form-control @error('sdBulanIni') is-invalid @enderror" name="sdBulan_Ini"  required autocomplete="sdBulanIni" value="{{$sw->sdBulan_Ini}}" required  onkeypress="return hanyaAngka(event)">

            @error('sdBulanIni')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="anggaran" class="col-md-4 col-form-label text-md-right">Anggaran **</label>

        <div class="col-md-6">
            <input type="text" class="form-control" name="anggaran" id="anggaran" required value="{{$sw->anggaran}}" required onkeypress="return hanyaAngka(event)">

            @error('anggaran')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="persentase" class="col-md-4 col-form-label text-md-right">Persentase **</label>

        <div class="col-md-6">
            <input id="persentase" type="text" class="form-control @error('persentase') is-invalid @enderror" name="persentasi"  required autocomplete="persentase" value="{{$sw->persentasi}}" required onkeypress="return hanyaAngka(event)">

            @error('persentase')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="realisasi" class="col-md-4 col-form-label text-md-right">Realisasi **</label>

        <div class="col-md-6"> 
            <input id="realisasi" type="text" class="form-control @error('realisasi') is-invalid @enderror" name="realisasi"  required autocomplete="realisasi" value="{{$sw->realisasi}}" required onkeypress="return hanyaAngka(event)">

            @error('realisasi')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>

    <div class="form-group row">
        <label for="status" class="col-md-4 col-form-label text-md-right">Status </label>

        <div class="col-md-6">
            <select name="status" id="status">
                @if($sw->status == "lama")
                <option value="lama">Tidak Tampilkan</option>
                <option value="baru"> Tampilkan</option>
                @else
                <option value="baru">Tampilkan</option>
                <option value="lama">Tidak Tampilkan</option>
                @endif
            </select>
        </div>
    </div>

    <div class="card" style="width:300px; font-size:10px">
    <p style="color:red">Keterangan : <br>
    ** : Hanya Menerima Inputan Angka</p>
    <p></p>
    </div>
    