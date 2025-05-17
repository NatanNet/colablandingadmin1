@extends('layouts.app')

@section('content')
<section class="py-5">
  <div class="container">
    <h1>{{ $event['title'] }}</h1>
    <img src="{{ asset('images/' . $event['image']) }}" class="img-fluid mb-4" alt="{{ $event['title'] }}">
    <p><strong>Date:</strong> {{ $event['date'] }}</p>
    <p>{{ $event['description'] }}</p>
    <a href="{{ url()->previous() }}" class="btn btn-secondary mt-3">Back</a>
  </div>
</section>
@endsection
