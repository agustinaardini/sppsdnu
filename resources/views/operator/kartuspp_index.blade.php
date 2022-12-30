@extends('layouts.app_sneat_blank')
@section('content')
<div class="container">
    <div class="row gutters">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body p-0">
                        <div class="invoice-container">
                            <div class="invoice-header">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                        <div class="custom-actions-btns mb-5">
                                                {{--  <script type="text/javascript">
                                                    window.print();
                                                    </script>  --}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <a href="index.html" class="invoice-logo">
                                            KARTU SPP
                                        </a>
                                    </div>

                                </div>
                                <!-- Row end -->
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <address>
                                                SD NU  <br>
                                                Jl. KH.Abdulah Faqih No.22 Wijenan Kidul, Wijenan Kidul, Singolatren, Kec. Singojuruh, Kabupaten Banyuwangi, Jawa Timur 68464
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div>NAMA SISWA</div>
                                                <div>{{ $siswa->nama }}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                            <div class="invoice-body">
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table m-0">
                                                <thead>
                                                    <tr>
                                                        <th>No</th>
                                                        <th>Bulan Tagihan</th>
                                                        <th>Item Tagihan</th>
                                                        <th>Jumlah</th>
                                                        <th>Paraf</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($tagihan as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->tanggal_tagihan->translatedFormat('F Y') }}</td>
                                                        <td>
                                                            @foreach ($item->tagihanDetails as $itemDetails)
                                                                <li>
                                                                    {{ $itemDetails->nama_biaya }}
                                                                ({{ $itemDetails->jumlah_biaya }})
                                                                </li>
                                                            @endforeach
                                                        </td>
                                                        <td>{{ formatRupiah($item->tagihanDetails->sum('jumlah_biaya')) }}</td>
                                                    </tr>
                                                    @endforeach

                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                            </div>
                            <div class="invoice-footer">
                                Thank you for your Business.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
