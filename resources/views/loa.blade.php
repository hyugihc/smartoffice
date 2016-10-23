@extends('layouts.app')

@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="bs-callout bs-callout-primary">
                <h4>Memanage Surat Tugas</h4>
                <hr>
                menjelaskan bagaimana cara menggunakan interface dibawah untuk memanage surat tugas. laravel 
                menjelaskan bagaimana cara menggunakan interface dibawah untuk memanage surat tugas. laravel 
                menjelaskan bagaimana cara menggunakan interface dibawah untuk memanage surat tugas. laravel 
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Surat Tugas</h3>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-sm-3">
                            Tanggal
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input class="form-control" id="focusedInput" type="text" name="birthdate" value="10/24/1984" />

                                <script type="text/javascript">
                                    $(function () {
                                        $('input[name="birthdate"]').daterangepicker({
                                            singleDatePicker: true,
                                            showDropdowns: true
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            Nomor Surat
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input data-toggle="tooltip" title="Rencana Index bisa diedit bulan dan tahun tidak bisa" class="form-control" id="focusedInput" type="text" value="B-1140/75025/05/2016">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            Menimbang
                        </div>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="5" id="comment">
Bahwa demi kelancaran tugas kedinasan di lingkungan BPS Kabupaten Gorontalo, perlu menugaskan pegawai yang namanya tersebut dalam surat tugas ini.
                            </textarea>
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            mengingat
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <textarea class="form-control" rows="8" id="comment" >
1. Undang-undang No. 16 Tahun 1997 Tentang Statistik
2. Peraturan Pemerintah RI No. 51  Tahun   1999 Tentang Penyelenggara Statistik
3. Keputusan RI No. 166 Tahun 2000
4. Keputusan Presiden RI No. 42 Tahun 2002
5. Keputusan Kepala Badan Pusat Statistik No. 001 Tahun 2001 Tentang Organisasi dan Tata Kerja Badan Pusat Statistik
6. Keputusan Kepala Badan Pusat Statistik No.121 Tahun 2001 Tentang Organisasi dan Tata Kerja Perwakilan BPS di Daerah                            
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12 text-center">
                            memberi tugas
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            Kepada
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input data-toggle="tooltip" title="Rencana Auto Suggestion then press enter, kalo batal tinggal di dismiss aja" class="form-control" id="focusedInput" type="text">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">

                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Rahman Kue
                                </div>
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Intan Purwanti
                                </div>
                                <div class="alert alert-info alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    Usman Maya Gobel
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            Tujuan/Tugas
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <textarea class="form-control" rows="3" id="comment">
Melaksanakan pencacahan Survei Tendensi Konsumen (STK) Triwulan II Tahun 2016
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-3">
                            Waktu
                        </div>
                        <div class="col-sm-9">
                            <div class="form-group">
                                <input class="form-control" id="focusedInput" type="text" name="daterange" value="01/01/2015 - 01/31/2015" />
                                <script type="text/javascript">
                                    $(function () {
                                        $('input[name="daterange"]').daterangepicker();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            Demikian surat  tugas ini dibuat untuk dipergunakan seperlunya.
                        </div>
                    </div>
                    <hr>
                    <br>
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <button type="button" class="btn btn-primary" data-toggle="tooltip" title="Ngeprint Surat Tugas">Print</button>
                            <button type="button" class="btn btn-primary" data-toggle="tooltip" title="Download Surat Tugas Perpetugas">Download</button>
                        </div>
                    </div>

                </div>
            </div
        </div>
    </div>
</div>
@endsection
