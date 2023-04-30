@extends('client.testlayout')

@section('content')

<section class="search">
    <div class="container">
        <div class="poisk">
            <h1>The list of specialization</h1>
        </div>
@foreach($data as $spec)
        <div class="client">
            <div class="spec">
                <div class="spec_name">
                     <a href="{{route('appoinment.doctor',['id' => $spec->id, 'name' => $spec->name])}}">{{$spec->name}}</a>
                </div>
            </div>
        </div>
@endforeach

    </div>
</section>



<section class="new" id="new">
    <div class="container">
        <div class="news" style="min-height: 20rem;">
            <h2 class="sub-title">Новости LiveMedKZ !</h2>
            <div class="news-text">Будьте в курсе новостей с LiveMedKZ</div>
            <button class="button" type="button" id="price-action" style="max-width: 250px;">Начать -></button>
            <div class="circ"></div>
            <div class="circ2"></div>
        </div>
    </div>
</section>

@endsection



