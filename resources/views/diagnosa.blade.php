@extends('layout.dashboard')

@section('title')
Diagnosa
@endsection

@section('judul')
Diagnosa
@endsection

@section('content')

<div class="content">
    <form action="{{ route('diagnosa.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                    <label>Nama Diagnosa</label>
                    <input type="text" class="form-control" name="nama_diagnosa" required>
                </div>
            </div>
        </div>
            <button type="submit" class="btn btn-info btn-fill">Simpan</button>
        <div class="clearfix">

        </div>
    </form>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="header">
                    <h4 class="title">Table Diagnosa</h4>
                </div>
                {{-- table --}}
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @php
                                $no = 0;
                            @endphp
                            @foreach ($diagnosa as $item)
                            <tr>
                                <td>{{ $no+=1 }}</td>
                                <td>{{ $item->nama_diagnosa }}</td>
                                <td>
                                    <form action="{{ route('diagnosa.destroy', $item->id_diagnosa)}}" method="post">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
                {{-- End table --}}
            </div>
        </div>
    </div>
</div>

@endsection
