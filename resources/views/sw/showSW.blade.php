        <table class="table">
            <tbody>
                <tr>
                <th scope="row">S/D Bulan Ini</th>
                <td>Rp.{{number_format($sw->sdBulan_Ini,0,"",".")}}</td>
                <td>{{$sw->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th>Bulan Ini</th>
                <td>Rp.{{number_format($sw->bulan_Ini,0,"",".")}}</td>
                <td>{{$sw->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th>Anggaran</th>
                <td>Rp.{{number_format($sw->anggaran,0,"",".")}}</td>
                <td>{{$sw->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th>Persentasi</th>
                <td>{{number_format($sw->persentasi/100,2,'.','')}} %</td>
                <td>{{$sw->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th>Realisasi</th>
                <td>{{number_format($sw->realisasi/100,2,'.','')}} %</td>
                <td>{{$sw->created_at->format('d F Y')}}</td>
                </tr>

            </tbody>
        </table>
