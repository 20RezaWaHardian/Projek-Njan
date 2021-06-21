        <table class="table">
            <tbody>
                <tr>
                <th scope="row">S/D Bulan Ini</th>
                <td>Rp.{{number_format($iw->sdBulan_Ini,0,"",".")}}</td>
                <td>{{$iw->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th >Bulan Ini</th>
                <td>Rp.{{number_format($iw->bulan_Ini,0,"",".")}}</td>
                <td>{{$iw->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th>Anggaran</th>
                <td>Rp.{{number_format($iw->anggaran,0,"",".")}}</td>
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
