@extends('layout.dashboard')

@section('title')
Diare
@endsection

@section('judul')
Diare
@endsection

@section('content')

<div class="content">
    <form>
        <div class="row">
            <div class="col-md-3" data-provide="datepicker">
                <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" date="dd-MM-yyyy" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    <label>Kelurahan</label>
                    <select name="" id="" class="form-control">
                        <option value=""></option>
                        <option value="sukasari">Sukasari</option>
                        <option value="tajur">Tajur</option>
                        <option value="sindangrasa">Sindang Rasa</option>
                        <option value="sindangsari">Sindang Sari</option>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>RT</label>
                    <select name="rt" id="" class="form-control">
                        <option value=""></option>
                        @for ($i = 1; $i < 30; $i++) <option value="{{ $i }}">{{ '0' . $i }}</option>
                            @endfor
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>RW</label>
                    <select name="rt" id="" class="form-control">
                        <option value=""></option>
                        @for ($i = 1; $i < 30; $i++) <option value="{{ $i }}">{{ '0' . $i }}</option>
                            @endfor
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-1">
                <div class="form-group">
                    <label>Umur</label>
                    <input type="number" min="1" class="form-control">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label for="" style="color:transparent">jj</label>
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
                    <select name="" id="" class="form-control">
                        <option value=""></option>
                        <option value="pneumonia">Pneumonia</option>
                        <option value="pneumoniab">Pneumonia Berat</option>
                        <option value="bbpneumonia">Batuk Bukan Pneumonia</option>
                        <option value="bpneumonia">Bukan Pneumonia</option>
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
