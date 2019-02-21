@extends('layout.dashboard')

@section('title')
ISPA
@endsection

@section('judul')
ISPA
@endsection

@section('content')

<div class="content">
    <form action="{{ route('laporan.update', $lap->id) }}" method="post" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="row">
            <div class="col-md-3" data-provide="datepicker">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" date="dd-MM-yyyy" class="form-control" name="tanggal" value="{{ $lap->tanggal }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $lap->nama }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Kelurahan</label>
                    <select name="kelurahan" id="" class="form-control">
                        <option value="{{ $lap->nama_kelurahan }}">{{ $lap->nama_kelurahan }}</option>
                        <option value="1">Sukasari</option>
                        <option value="2">Tajur</option>
                        <option value="3">Sindang Rasa</option>
                        <option value="4">Sindang Sari</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>RT</label>
                    <select name="rt" id="" class="form-control">
                        <option value="{{ $lap->rt }}">{{ $lap->rt }}</option>
                        @for ($i = 1; $i < 30; $i++) 
                        <option value="{{ $i }}">{{ '0' . $i }}</option>
                            @endfor
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>RW</label>
                    <select name="rw" id="" class="form-control">
                        <option value="{{ $lap->rw }}">{{ $lap->rw }}</option>
                        @for ($i = 1; $i < 30; $i++) 
                        <option value="{{ $i }}">{{ '0' . $i }}</option>
                            @endfor
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Jenis Kelamin</label><br>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio1" value="1" name="jk">
                            <label for="inlineRadio1"> Laki-Laki </label>
                        </div>
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="inlineRadio2" value="2" name="jk">
                            <label for="inlineRadio2"> Perempuan </label>
                        </div>
                    </div>
                    </div>
                </div>
        
        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                    <label>Umur</label>
                    <input type="number" min="0" class="form-control" name="umur" value="{{ $lap->umur }}">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="" style="color:transparent">label</label>
                    <select class="form-control">
                        <option value=""></option>
                        <option value="bulan">Bulan</option>
                        <option value="tahun">Tahun</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Diagnosa</label>
                    <select name="diagnosa" id="" class="form-control">
                        <option value="{{ $lap->nama_diagnosa }}">{{ $lap->nama_diagnosa }}</option>
                        <option value="1">Pneumonia</option>
                        <option value="2">Pneumonia Berat</option>
                        <option value="3">Batuk Bukan Pneumonia</option>
                        <option value="4">Bukan Pneumonia</option>
                    </select>
                </div>
            </div>
        </div>
            <button type="submit" class="btn btn-info btn-fill">Simpan</button>
        <div class="clearfix">

        </div>
    </form>
</div>

@endsection
