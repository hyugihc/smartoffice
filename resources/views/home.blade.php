@extends('layouts.app')

@section('content')

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">cath up!</h4>
            </div>
            <div class="modal-body">
                <p>Maaf fungsi belum tersedia</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                You're successfully Logged in as {{ Auth::user()->name }}
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="bs-callout bs-callout-default">
                <h4>Memanage Surat Masuk</h4>
                Jika anda ingin memanage <strong> surat masuk </strong> silakan menggunakan link ini <a data-toggle="modal" data-target="#myModal" href="#" >memanage surat masuk</a> yang perlu diperhatikan
                adalah bla bala bala
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="bs-callout bs-callout-default">
                <h4>Memanage Surat Keluar</h4>
                Jika anda ingin memanage <strong> surat keluar </strong>  silakan menggunakan link ini <a data-toggle="modal" data-target="#myModal" href="#">memanage surat masuk</a> yang perlu diperhatikan
                adalah bla bala bala
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="bs-callout bs-callout-default">
                <h4>Memanage Surat Tugas</h4>
                Jika anda ingin memanage <strong> surat tugas </strong> silakan menggunakan link ini <a href="{{ url('/loa') }}">memanage surat tugas</a> yang perlu diperhatikan
                adalah bla bala bala
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="bs-callout bs-callout-default">
                <h4>Analisis Beban Tugas</h4>
                Jika anda ingin memanage <strong> surat tugas </strong> silakan menggunakan link ini <a data-toggle="modal" data-target="#myModal" href="{{ url('/loa') }}">Analisi Beban Tugas</a> yang perlu diperhatikan
                adalah bla bala bala
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="bs-callout bs-callout-default">
                <h4>CKP Pegawai</h4>
                Jika anda ingin memanage <strong> surat tugas </strong> silakan menggunakan link ini <a data-toggle="modal" data-target="#myModal"  href="#">CKP Pegawai</a> yang perlu diperhatikan
                adalah bla bala bala
            </div>
        </div>
    </div>
</div>
@endsection
