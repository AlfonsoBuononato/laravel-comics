@extends("layout.main")
@section("content")
<div class="container">
    @foreach ($cards as $card)
        <div class="card">
            <img src="{{$card["image-cover"]}}" alt="">
            <h4>{{$card["title"]}}</h4>
        </div>
    @endforeach
</div>
<div class="container-btn">
    <div class="btn">
        <b>LOAD MORE</b>
    </div>
</div>
@endsection
