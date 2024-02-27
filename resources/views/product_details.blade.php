@extends("master")
@section('content')
<div class="container">
<div class="row">
 <div class="col-sm-6">
    <img src="{{$data['gallery']}}" alt="" style="height:380px;">
 </div>
 <div class="col-sm-6">
    <a href="/">Go Back</a>
    <h2>{{$data['name']}}</h2>
    <h3>Price: {{$data['price']}} rs</h3>
    <h5>Description: {{$data['description']}}</h5>
    <h5>Category: {{$data['category']}}</h5>
    <br>
    <br>
    <form action="/add_to_cart" method="POST">
        @csrf
        <input name="product_id" type="hidden"  value="{{$data['id']}}">
    <button class="btn btn-primary">Add to Cart</button>
    </form>
    <br>
    <br>
    <button class="btn btn-success">Buy Now</button>
 </div>
</div>
</div>
@endsection