@extends('layout')

@section('content')
    <div id="chart">
        <div class="chart-container">
            <div class="block pattern">{{ $pattern }}</div>
            <div class="block metadata">
                <div class="row">
                    <div class="metadata-main">
                        <div class="title">{{ $title }}</div>
                        <div class="author">{{ $author }}</div>
                    </div>
                </div>
                <div class="row metadata-secondary">
                    <div class="column">
                        <div class="length">{{ $timelength }}</div>
                        <div class="bpm">{{ $bpm }} BPM</div>
                    </div>
                    <div>
                        <div class="od">OD {{ $od }}</div>
                        <div class="hp">HP {{ $hp }}</div>
                    </div>
                </div>
            </div>
            <div class="block column level">
                <div>{{ $scale }}</div>
                <div>SR {{ $sr }} &#9733;</div>
            </div>
        </div>
    </div>
@endsection
