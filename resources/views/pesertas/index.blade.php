@extends('pesertas.template')

 

@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Bootcamp</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('pesertas.create') }}"> Tambah Peserta</a>

            </div>

        </div>

    </div>

   

    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif

   

    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Nama</th>

            <th>Alamat</th>

            <th>Tanggal Lahir</th>

            <th>Asal Sekolah</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($pesertas as $peserta)

        <tr>

            <td>{{ ++$i }}</td>

            <td>{{ $peserta->nama }}</td>

            <td>{{ $peserta->alamat }}</td>

            <td>{{ $peserta->tgllahir }}</td>

            <td>{{ $peserta->asalsekolah }}</td>

            <td>

                <form action="{{ route('pesertas.destroy',$peserta->id) }}" method="POST">

   

                    <a class="btn btn-info" href="{{ route('pesertas.show',$peserta->id) }}">Show</a>

    

                    <a class="btn btn-primary" href="{{ route('pesertas.edit',$peserta->id) }}">Edit</a>

   

                    @csrf

                    @method('DELETE')

      

                    <button type="submit" class="btn btn-danger">Delete</button>

                </form>

            </td>

        </tr>

        @endforeach

    </table>

  

    {!! $pesertas->links() !!}

      

@endsection