@extends('layout.main')

@section('content')
    <section class="main_content">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 g-4">

                @forelse ($offers as $offer)
                    <div class="col mt-3">
                        <div class="card h-100">
                            <img src="..." class="card-img-top" alt="... image">
                            <div class="card-body">
                                <h3 class="card-title">{{ $offer->destination }}</h4>
                                    <h5>Holiday Duration: {{ $offer->vacation_days }} days</h5>
                                    <h5>Price: {{ $offer->price }} &euro;</h5>
                                    <p class="card-text">{{ $offer->description }}</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Departure date: {{ $offer->departure_day }}</small>
                            </div>
                        </div>
                    </div>
                @empty

                @endforelse

            </div>
        </div>
    </section>
@endsection
