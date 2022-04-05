@extends('master')
@section('content')

    <div class="custom-product">
        <div class="row">
          <div id="myCarousel" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>


    <div class="carousel-inner">
      @foreach($products as $row)
        <div class="item {{$row['id']==1?'active':''}}">
          <img class = "slider-img" src="{{$row['gallery']}}">
          <div class="carousel-caption">
            <h3>{{$row['category']}}</h3>
            <p>{{$row['description']}}</p>
          </div>
        </div>
      @endforeach

      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>

  </div>

</div>


  <div class="meilleur-wrapper">
    <h1>Meilleur Produit</h1>
    <div class="carousel-inner">
      @foreach($products as $row)
        <div class="meilleur-item">
          <img class="meilleur-img" src="{{$row['gallery']}}">
          <div class="">
            <h3>{{$row['nom']}}</h3>
          </div>
        </div>
      @endforeach
    </div>
  </div>
@endsection



