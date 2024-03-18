@extends('layout.main')
@section("judul","halaman murid")

@section('content')
<table class="table">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="table">

                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Tanggal Lahir</th>
                        <th>Nama Dosen Wali</th>
                    </tr>
                    @foreach($students as $s)
                    <tr>
                        <td>{{$s->name}}</td>
                        <td>{{$s->email}}</td>
                        <td>{{$s->dob}}</td>
                        <td>{{$s->teacher->name}}</td>
                    </tr>
                    @endforeach
                    <p>
                        {!! $students->links() !!}
                    </p>
                </div>
            </div>
        </div>
    </div>
</table>

@endsection