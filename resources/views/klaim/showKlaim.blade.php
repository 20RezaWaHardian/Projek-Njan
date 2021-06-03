        <table class="table">
            <tbody>
                <tr>
                <th>JP 33 S/D Bulan Ini</th>
                <td>Rp.{{$klaim->jp33_sdbln}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th >JP 34 S/D Bulan Ini</th>
                <td>Rp.{{$klaim->jp34_sdbln}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <tr>
                <th >JP 33 Bulan Ini</th>
                <td>Rp.{{$klaim->jp33_bln}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th >JP 34 Bulan Ini</th>
                <td>Rp.{{$klaim->jp34_bln}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <th>JP S/D Bulan Ini</th>
                <td>Rp.{{$klaim->jp_sdbln}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <th>JP Bulan Ini</th>
                <td>Rp.{{$klaim->jp_bln}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th>Rasio 33</th>
                <td>{{number_format($klaim->rasio33/100,2,'.','')}} %</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th>Rasio 34</th>
                <td>{{number_format($klaim->rasio34/100,2,'.','')}} %</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>

            </tbody>
        </table>
