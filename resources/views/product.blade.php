@extends('layout.main')


@section('mainContent')
  <main class="product-contain ">
    <div class="contain">
      <h1>{{ $product['titolo'] }}</h1>
      <img src="{{ $product['src-h'] }}" alt="{{ $product['titolo'] }}">
      <img src="{{ $product['src-p'] }}" alt="{{ $product['titolo'] }}">
      <p>{!! $product['descrizione'] !!}</p>
    </div>
  </main>
@endsection
