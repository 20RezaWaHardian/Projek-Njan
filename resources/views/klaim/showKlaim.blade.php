        <table class="table">
            <tbody>
                <tr>
                <th>JP 33 S/D Bulan Ini</th>
                <td>Rp.{{number_format($klaim->jp33_sdbln,0,"",".")}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th >JP 34 S/D Bulan Ini</th>
                <td>Rp.{{number_format($klaim->jp34_sdbln,0,"",".")}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <tr>
                <th >JP 33 Bulan Ini</th>
                <td>Rp.{{number_format($klaim->jp33_bln,0,"",".")}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th >JP 34 Bulan Ini</th>
                <td>Rp.{{number_format($klaim->jp34_bln,0,"",".")}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <th>JP S/D Bulan Ini</th>
                <td>Rp.{{number_format($klaim->jp_sdbln,0,"",".")}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <th>JP Bulan Ini</th>
                <td>Rp.{{number_format($klaim->jp_bln,0,"",".")}}</td>
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
                </tr>
                <th> Meninggal </th>
                <td>{{$korban_mg}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>
                </tr>
                <th>Luka - Luka</th>
                <td>{{$korban_lk}}</td>
                <td>{{$klaim->created_at->format('d F Y')}}</td>

            </tbody>
        </table>
