@extends('layout')

@section('content')
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="chart" id="chart" accept="application/json">
        <button type="submit">Upload</button>
    </form>

    <p>Current chart: {{ $savedChart }}</p>
@endsection
