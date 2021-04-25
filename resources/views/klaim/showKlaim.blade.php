        <table class="table">
            <tbody>
                <tr>
                <th>JP 33 S/D Bulan Ini</th>
                <td>Rp.{{$klaim->jp33_sdbln}}</td>
                </tr>
                <tr>
                <th >JP 34 S/D Bulan Ini</th>
                <td>Rp.{{$klaim->jp34_sdbln}}</td>
                </tr>
                <tr>
                <tr>
                <th >JP 33 Bulan Ini</th>
                <td>Rp.{{$klaim->jp33_bln}}</td>
                </tr>
                <tr>
                <th >JP 34 Bulan Ini</th>
                <td>Rp.{{$klaim->jp34_bln}}/td>
                </tr>
                <th>JP S/D Bulan Ini</th>
                <td>Rp.{{$klaim->jp_sdbln}}</td>
                </tr>
                <th>JP Bulan Ini</th>
                <td>Rp.{{$klaim->jp_bln}}</td>
                </tr>
                <tr>
                <th>Rasio 33</th>
                <td>{{number_format($klaim->rasio33/100,2,'.','')}} %</td>
                </tr>
                <tr>
                <th>Rasio 34</th>
                <td>{{number_format($klaim->rasio34/100,2,'.','')}} %</td>
                </tr>

            </tbody>
        </table>
