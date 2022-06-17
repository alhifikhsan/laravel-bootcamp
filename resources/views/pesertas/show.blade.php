@extends('pesertas.template')

  

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show Peserta</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('pesertas.index') }}"> Kembali</a>

            </div>

        </div>

    </div>

   

    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Nama:</strong>

                {{ $peserta->nama }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Alamat:</strong>

                {{ $peserta->alamat }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Tanggal Lahir:</strong>

                {{ $peserta->tgllahir }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Asal Sekolah:</strong>

                {{ $peserta->asalsekolah }}

            </div>

        </div>

    </div>

@endsection