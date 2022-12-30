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
                                                <script type="text/javascript">
                                                    window.print();
                                                    </script>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Row end -->
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                        <a href="index.html" class="invoice-logo">
                                            KWITANSI PEMBAYARAN
                                        </a>
                                    </div>

                                </div>
                                <!-- Row end -->
                                <!-- Row start -->
                                <div class="row gutters">
                                    <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <address>
                                                SD NU NURUL QUR'AN <br>
                                                Jl. KH.Abdulah Faqih No.22 Wijenan Kidul, Wijenan Kidul, Singolatren, Kec. Singojuruh, Kabupaten Banyuwangi, Jawa Timur 68464
                                            </address>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                        <div class="invoice-details">
                                            <div class="invoice-num">
                                                <div>PEMBAYARAN SPP SD NU NURUL QUR'AN</div>
                                                {{--  <div>{{ $pembayaran->tanggal_bayar->translatedFormat('d F Y') }}</div>  --}}
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
                                                        <th>Tangal Pembayaran</th>
                                                        <th>Metode Bayar</th>
                                                        <th>Sub Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>

                                                        <td>{{ $pembayaran->tanggal_bayar->translatedFormat('d/m/Y')}}</td>
                                                        <td>{{ formatRupiah($pembayaran->jumlah_dibayar) }}</td>
                                                        <td>{{ $pembayaran->metode_pembayaran }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <br/>
                                <div class="text-right mb-3 font-italic">
                                   <i> Terbilang: {{ ucwords(formatRupiahTeks($pembayaran->jumlah_dibayar)) }}</i>
                                </div>
                                <div>
                                    Banyuwangi, {{ $pembayaran->tanggal_bayar->translatedFormat('d F Y') }}
                                    <br/>
                                    <br/>
                                    <br/>
                                    <u> {{ $pembayaran->user->name }}  </u>
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
