        <table class="table">
            <tbody>
                <tr>
                <th scope="row">S/D Bulan Ini</th>
                <td>{{$iw->sdBulan_Ini}}</td>
                <td>{{$iw->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th >Bulan Ini</th>
                <td>{{$iw->bulan_Ini}}</td>
                <td>{{$iw->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th>Anggaran</th>
                <td>{{$iw->anggaran}}</td>
                <td>{{$iw->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th>Persentasi</th>
                <td>{{number_format($iw->persentasi/100,2,'.','')}} %</td>
                <td>{{$iw->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th>Realisasi</th>
                <td>{{number_format($iw->realisasi/100,2,'.','')}} %</td>
                <td>{{$iw->created_at->format('d F Y')}}</td>
                </tr>

            </tbody>
        </table>
