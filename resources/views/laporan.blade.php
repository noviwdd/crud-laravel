@include('sweet::alert')
@extends('layout.dashboard')

@section('title')
Laporan
@endsection

@section('judul')
Laporan
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-plain">
                <div class="header">
                    <h4 class="title">Table ISPA</h4>
                    <a href="{{ route('ispa.create') }}">
                        <button type="submit" class="btn btn-info btn-fill pull-right">Input Data Baru</button>
                    </a>
                </div>
                {{-- table --}}
                <div class="content table-responsive table-full-width">
                    <table class="table table-hover">
                        <thead>
                            <th>ID</th>
                            <th>Tanggal</th>
                            <th>Nama</th>
                            <th>Kelurahan</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                            <th>Diagnosa</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @php
                            $no = 0;
                            @endphp
                            @foreach ($lap as $item)
                            <tr>
                                <td>{{ $no+= 1 }}</td>
                                <td>{{ $item->tanggal }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->nama_kelurahan }}</td>
                                <td>{{ $item->rt }}</td>
                                <td>{{ $item->rw }}</td>
                                <td>
                                    @php
                                    if($item->jk == "1"){
                                    echo "Laki-laki";
                                    }else{
                                    echo "Perempuan";
                                    }
                                    @endphp

                                </td>
                                <td>{{ $item->umur. ' Bulan' }}</td>
                                <td>{{ $item->nama_diagnosa }}</td>
                                <td align="right"><a href="{{ route('laporan.edit', $item->id)}}" class="btn btn-warning">Edit</a></td>
                                <td>
                                    <form action="{{ route('laporan.destroy', $item->id)}}" method="post">
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

                <div class="content">
                    <div id="chart"></div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script>
    Highcharts.chart('chart', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Penderita ISPA < 1 tahun'
        },
        xAxis: {
            categories: {!! json_encode($categories) !!},
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Banyak (orang)'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Perempuan',
            data: {!! json_encode('$banyakk1') !!}
        }, {
            name: 'Laki-Laki',
            data: {!! json_encode('$banyak') !!}

        }]
    });

</script>
@endsection
