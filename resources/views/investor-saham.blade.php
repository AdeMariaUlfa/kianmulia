@extends('layout')
@section('content')
<div class="container-fluid bg-primary py-5 bg-header">
    <div class="row py-5">
        <div class="col-12 pt-lg-5 mt-lg-5 text-center">
            <h1 class="display-4 text-white animated zoomIn">Investor</h1>
            <a href="" class="h5 text-white">Investor</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h5 text-white">Pemegang Saham</a>
        </div>
    </div>
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container py-5">
    <div class="table-responsive">
              <table class="table table-striped">
                <tbody>
                    <tr>
                        <th rowspan="2" class="text-center">Keterangan</th>
                        <th class="text-center" colspan="4">Nilai Nominal Rp40,- per saham</th>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td align="right"><strong>Jumlah Saham</strong></td>
                        <td align="right"><strong>Jumlah Nominal (Rp.)</strong> </td>
                        <td align="right"><strong>%</strong> </td>
                    </tr>

                    
                    <tr>
                        <td colspan="2"><strong>Modal Dasar</strong></td>
                        <td align="right"><strong>4.000.000.000</strong></td>
                        <td align="right"><strong>160.000.000.000</strong></td>
                        <td align="right"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Modal Ditempatkan dan Disetor Penuh:</strong></td>
                        <td align="right"><strong></strong></td>
                        <td align="right"><strong></strong></td>
                        <td align="right"></td>
                    </tr>
                    <tr>
                        <td colspan="2">- Agus Salim</td>
                        <td align="right">253.125.000</td>
                        <td align="right">10.125.000.000</td>
                        <td align="right">22,50</td>
                    </tr>
                    <tr>
                        <td colspan="2">- Taufik Dwicahyono</td>
                        <td align="right">210.937.500</td>
                        <td align="right">8.437.500.000</td>
                        <td align="right">18,75</td>
                    </tr>
                    <tr>
                        <td colspan="2">- Edy Nurhamid Amin</td>
                        <td align="right">210.937.500</td>
                        <td align="right">8.437.500.000</td>
                        <td align="right">18,75</td>
                    </tr>
                    <tr>
                        <td colspan="2">- Fadjar Tri Ananda</td>
                        <td align="right">168.750.000</td>
                        <td align="right">6.750.000.000</td>
                        <td align="right">15,00</td>
                    </tr>
                    <tr>
                        <td colspan="2">- PT. Kian Megah Investama</td>
                        <td align="right">140.625.000</td>
                        <td align="right">5.625.000.000</td>
                        <td align="right">12,50</td>
                    </tr>
                    <tr>
                        <td colspan="2">- PT. Platinum Berkah Abadi</td>
                        <td align="right">140.625.000</td>
                        <td align="right">5.625.000.000</td>
                        <td align="right">12,50</td>
                    </tr>
                    <tr>
                        <td colspan="2"><strong>Jumlah Modal Ditempatkan dan Disetor Penuh</strong></td>
                        <td align="right"><strong>1.125.000.000</strong></td>
                        <td align="right"><strong>45.000.000.000</strong></td>
                        <td align="right"><strong>100,00</strong></td>
                    </tr>
                    
                </tbody>
            </table>
            </div>
    </div>
</div>
@endsection