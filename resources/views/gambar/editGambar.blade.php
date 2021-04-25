<input type="hidden" value="{{$gambar->id_gambar}}" id="id_data">
    <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <select name="keterangan" id="" class="form-control">
                @if($gambar->keterangan == 'jasa raharja')
                    <option value="jasa raharja">Jasa Raharja</option>
                    <option value="event">Event</option>
                    <option value="peta">Peta</option>
                @elseif ($gambar->kegiatan == 'event')
                    <option value="event">Event</option>
                    <option value="jasa raharja">Jasa Raharja</option>
                    <option value="peta">Peta</option>
                @else
                    <option value="peta">Peta</option>
                    <option value="event">Event</option>
                    <option value="jasa raharja">Jasa Raharja</option>
                @endif
            </select>
        </div>
        <div class="form-group">
            <label for="image">Input Gambar</label>
            <input type="file" class="custom-file-input" name="image" id="image" value="{{$gambar->image}}">
        </div>

        <div class="form-group">
            <img src="{{ asset('uploads/gambar/' . $gambar->image) }}" width="100px" heigth="100px" alt="image">
        </div>
    </div>