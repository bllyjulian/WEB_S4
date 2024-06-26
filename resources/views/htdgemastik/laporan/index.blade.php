@extends('layoutshtd.master')

@section('header-title', 'Laporan Pendaki')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
        @foreach($laporan as $lap)
    <div class="col-xl-4">
        <div class="card">
            <div class="text-center">
                @if ($lap->jenis_laporan == 'Tersesat')
                <img src="{{ asset('htd/images/tersesat.png') }}" width="180px" alt="">
                @elseif ($lap->jenis_laporan == 'Butuh alat kesehatan')
                <img src="{{ asset('htd/images/butuhkesehatan.png') }}" width="180px" alt="">
                @elseif ($lap->jenis_laporan == 'Kehilangan Rekan')
                <img src="{{ asset('htd/images/menghilang.png') }}" width="180px" alt="">
                @else
                <img src="{{ asset('htd/images/default.png') }}" width="180px" alt="">
                @endif
            </div>
            <div class="card-header">
                <h5 class="card-title">{{ $lap->pendaki->nama }}</h5>
                <!-- <h5 class="card-title">{{ $lap->id_pendaki }}</h5> -->
            </div>
            <div class="card-body">
                <p class="card-text">{{ $lap->jenis_laporan }}</p>
            </div>
            <div class="card-footer d-sm-flex justify-content-between align-items-center">
                <div class="card-footer-link mb-4 mb-sm-0">
                    <p class="card-text text-dark d-inline">
                        {{ \Carbon\Carbon::parse($lap->timestamp)->locale('id')->diffForHumans() }}
                    </p>
                </div>
                @if ($lap->pendaki)
                                <a href="{{ route('lacak', ['id_pendaki' => $lap->pendaki->id_pendaki]) }}" class="btn btn-primary">Lacak</a>
                            @else
                                <span class="text-danger">Pendaki tidak ditemukan</span>
                            @endif
            </div>
        </div>
    </div>
@endforeach

        </div>
    </div>
</div>
@endsection
