<div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">ID Pegawai </label>

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
                                <input id="password_update" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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
                                    <option value="0"> Super Admin</option>
                                    <option value="1">Admin</option>
                                </select>
                            </div>
                        </div>       