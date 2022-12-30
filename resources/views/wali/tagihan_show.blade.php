@extends('layouts.app_sneat_wali')
@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h5 class="card-header pb-0">TAGIHAN SPP {{ strtoupper($siswa->nama) }}</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <table class="table table-sm table-borderless">
                                <tr>
                                    <td rowspan="8" width="100">
                                        <img src="{{ \Storage::url($siswa->foto) }}" alt="{{ $siswa->nama }}" width="100">
                                    </td>
                                </tr>
                                <tr>
                                    <td width="50">NISN</td>
                                    <td>: {{ $siswa->nisn }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>: {{ $siswa->nama }}</td>
                                </tr>
                                <tr>
                                    <td>Angkatan</td>
                                    <td>: {{ $siswa->angkatan }}</td>
                                </tr>
                                <tr>
                                    <td>Kelas</td>
                                    <td>: {{ $siswa->kelas }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <table class="table table-light">
                               <tr>
                                 <td>No. Tagihan</td>
                                 <td>: #UHSD- {{ $tagihan->id }}</td>
                               </tr>
                               <tr>
                                <td>Tgl. Tagihan</td>
                                <td>:  {{ $tagihan->tanggal_tagihan->format('d F Y') }}</td>
                              </tr>
                              <tr>
                                <td>Tgl. Akhir Pembayaran</td>
                                <td>:  {{ $tagihan->tanggal_jatuh_tempo->format('d F Y') }}</td>
                              </tr>
                              <tr>
                                <td>Status Pembayaran</td>
                                <td>:  {{ $tagihan->getStatusTagihanWali() }}</td>
                              </tr>
                              <tr>
                                <td colspan="2">
                                    <a href="" target="blank"><i class="fa fa-file-pdf"></i>Cetak Invoice Tagihan</a>
                                </td>
                              </tr>
                            </table>
                        </div>
                    </div>
                    <table class="table table-sm table-bordered">
                        <thead>
                            <tr class="table-dark">
                                <td width="1%">No</td>
                                <td>Nama Tagihan</td>
                                <td class="text-end">Jumlah Tagihan</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tagihan->tagihanDetails as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama_biaya }}</td>
                                    <td class="text-end">{{ formatRupiah($item->jumlah_biaya) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="2" class="text-center fw-bold">Total Pembayaran</td>
                                <td class="text-end fw-bold"> {{ formatRupiah($tagihan->tagihanDetails->sum('jumlah_biaya')) }}</td>
                            </tr>
                        </tfoot>
                    </table>
                    <div class="alert alert-secondary mt-4" role="alert" style="color:red">
                        Pembayaran bisa dilakukan dengan cara langsung ke Operator sekolah atau transfer melalui bank milik sekolah berikut: <br>
                       <u> <i>Jangan melakukan transfer ke Rekening selain dari Rekening dibawah ini.</i></u>

                    <ul>
                        <li>
                            <a href="">Lihat Cara Pembayaran dengan Transfer Melalui ATM</a>
                        </li>
                        <li> <a href="">Lihat Cara Pembayaran dengan Transfer Melalui Internet Banking</li>
                    Silahkan lihat tata cara melakukan pembayaran melalui <a href="">ATM</a> atau <a href="">Internet Banking.</a>
                            <br/>
                    Setelah melakukan pembayaran, silahkan upload bukti pembayaran melalui tombol korfirmasi dibawah ini:
                    </ul>
                </div>
                    <br/>

                    <div class="row">
                        @foreach ($bankSekolah as $itemBank)
                        <div class="col-md-6">
                            <div class="alert alert-dark" role="alert" style="color:black">
                                <table width="100%">
                                    <tbody>
                                        <tr>
                                            <td width="30%">Bank Tujuan</td>
                                            <td>: {{ $itemBank->nama_bank }}</td>
                                        </tr>
                                        <tr>
                                            <td>Nomor Rekening</td>
                                            <td>: {{ $itemBank->nomor_rekening }}</td>
                                        </tr>
                                        <tr>
                                            <td>Atas Nama</td>
                                            <td>: {{ $itemBank->nama_rekening }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="{{ route('wali.pembayaran.create', [
                                    'tagihan_id' => $tagihan->id,
                                    'bank_sekolah_id' => $itemBank->id,
                                ]) }}" class="btn btn-primary btn-sm mt-3">Konfirmasi Pembayaran</a>
                            </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
