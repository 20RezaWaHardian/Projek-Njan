        <table class="table">
            <tbody>
                <tr>
                <th>Total Biaya S/D Bulan Ini</th>
                <td>Rp.{{number_format($uang->total_biaya_sdbln,0,"",".")}}</td>
                <td>{{$uang->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th >Total Biaya Bulan Ini</th>
                <td>Rp.{{number_format($uang->total_biaya_bln,0,"",".")}}</td>
                <td>{{$uang->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <tr>
                <th >Total Laba S/D Bulan Ini</th>
                <td>Rp.{{number_format($uang->total_laba_sdbln,0,"",".")}}</td>
                <td>{{$uang->created_at->format('d F Y')}}</td>
                </tr>
                <tr>
                <th >Total Laba Bulan Ini</th>
                <td>Rp.{{number_format($uang->total_laba_bln,0,"",".")}}</td>
                <td>{{$uang->created_at->format('d F Y')}}</td>
                

            </tbody>
        </table>
