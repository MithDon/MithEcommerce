@extends("master")
@section('content')
<div class="customProducts">

  <div id="carouselExampleCaptions" class="carousel slide">
    <div class="carousel-indicators">

      @foreach ($products as $item)
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{$item['id']}}"
        class="{{$item['id']==1?'active':''}}" aria-current="true" aria-label="Slide {{$item['id']}}"></button>
      @endforeach

    </div>
    <div class="carousel-inner">
      @foreach ($products as $item)
      <a href="detail/{{$item['id']}}"></a>
      <div class="cus carousel-item {{$item['id']==1?'active':''}}">
        <img src="{{$item['gallery']}}" class="d-block" alt="..." style="height:400px;">
        <div class="carousel-caption d-none d-md-block" style="background-color: #00000085;">
          <h5>{{$item['name']}}</h5>
          <p>{{$item['description']}}</p>
        </div>
      </div>
      </a>
      @endforeach

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"
        style="background-color: #000;border-radius:50px;"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"
        style="background-color: #000;border-radius:50px;"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="trending_wrapper" style="margin:30px;">
    <h3>Trending Products</h3>
    @foreach ($products as $item)
    <div style="float:left;width:290px;">
      <img src="{{$item['gallery']}}" class="" alt="..." style="height:150px;">
      <div class="" style="">
        <h5>{{$item['name']}}</h5>
      </div>
    </div>
    @endforeach
  </div>

</div>df
@endsection