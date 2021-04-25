                        <div class="form-group row">
                            <label for="meninggal" class="col-md-4 col-form-label text-md-right"> Kasus</label>

                            <div class="col-md-6">
                               <select name="kasus" id="">
                                    <option value="meninggal">Meninggal</option>
                                    <option value="luka-luka">Luka - Luka</option>
                               </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="luka_luka" class="col-md-4 col-form-label text-md-right">Jumlah</label>

                            <div class="col-md-6">
                                <input id="luka_luka_update" type="text" class="form-control @error('luka_luka') is-invalid @enderror" name="jumlah"  required autocomplete="luka_luka">

                                @error('luka_luka')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>