@extends('layout.dashboard')
@section('title')
Beranda
@endsection
@section('judul')
Beranda
@endsection

@section('content')

<style>
    .content {
        text-align: center;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .full-height {
        height: 100%;
        padding-botom: 50px;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }
    html, body {
                background-color: #fff;
                color: #636b6f;
                font-weight: 1000;
                height: 100vh;
                margin: 0;
            }
</style>

<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            PULO ARMYN 1.0
        </div>
    </div>
</div>

@endsection
