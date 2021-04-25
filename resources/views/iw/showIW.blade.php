        <table class="table">
            <tbody>
                <tr>
                <th scope="row">S/D Bulan Ini</th>
                <td>{{$iw->sdBulan_Ini}}</td>
                </tr>
                <tr>
                <th >Bulan Ini</th>
                <td>{{$iw->bulan_Ini}}</td>
                </tr>
                <tr>
                <th>Anggaran</th>
                <td>{{$iw->anggaran}}</td>
                </tr>
                <tr>
                <th>Persentasi</th>
                <td>{{number_format($iw->persentasi/100,2,'.','')}} %</td>
                </tr>
                <tr>
                <th>Realisasi</th>
                <td>{{number_format($iw->realisasi/100,2,'.','')}} %</td>
                </tr>

            </tbody>
        </table>
