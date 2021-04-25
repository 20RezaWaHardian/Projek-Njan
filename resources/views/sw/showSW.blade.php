        <table class="table">
            <tbody>
                <tr>
                <th scope="row">S/D Bulan Ini</th>
                <td>{{$sw->sdBulan_Ini}}</td>
                </tr>
                <tr>
                <th >Bulan Ini</th>
                <td>{{$sw->bulan_Ini}}</td>
                </tr>
                <tr>
                <th>Anggaran</th>
                <td>{{$sw->anggaran}}</td>
                </tr>
                <tr>
                <th>Persentasi</th>
                <td>{{number_format($sw->persentasi/100,2,'.','')}} %</td>
                </tr>
                <tr>
                <th>Realisasi</th>
                <td>{{number_format($sw->realisasi/100,2,'.','')}} %</td>
                </tr>

            </tbody>
        </table>
