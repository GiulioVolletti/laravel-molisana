@extends('layout.main')

@section('mainContent')
  <main class="home_background">
    <section class="contain ">
      <h2>
            Le Lunghe
      </h2>
      <div class="cards">
        @foreach ($lunghe as $pasta)
          <div class="card">
            <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
            <div class="card-description">
                <a href="{{ route('prodotto', [ 'id' => $pasta['id']]) }}">{{ $pasta['titolo']}}</a>
            </div>
          </div>
        @endforeach
      </div>
    </section>

    <section class="contain">
      <h2>
        Le Corte
      </h2>
      <div class="cards">
        @foreach ($corte as $pasta)
          <div class="card">
            <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
            <div class="card-description">
              <a href="{{ route('prodotto', [ 'id' => $pasta['id']]) }}">{{ $pasta['titolo'] }}</a>
            </div>
          </div>
        @endforeach
      </div>
    </section>

    <section class="contain">
      <h2>
        Le  Cortissime
      </h2>
      <div class="cards">
        @foreach ($cortissime as $pasta)
          <div class="card">
            <img src="{{ $pasta['src'] }}" alt="{{ $pasta['titolo'] }}">
            <div class="card-description">
                <a href="{{ route('prodotto', [ 'id' => $pasta['id']]) }}">{{ $pasta['titolo'] }}</a>
            </div>
          </div>
        @endforeach
      </div>
    </section>

  </main>

@endsection
