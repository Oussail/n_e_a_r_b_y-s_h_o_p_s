@extends('layouts.app')

@section('content')
<div class="row">

<div class="container" ng-app="NearbyShops">
	<div class="col-md-12" ng-controller="ShopsController">
		<div class="col-md-3" ng-repeat="shop in shops">
			<div class="card" style="width: 20rem;" >
  				<img class="card-img-top img-responsive" src="{{ asset('Images/pic.png') }}" alt="">
  				<div class="card-body">
  				@verbatim
  				{{ url }}
    				<h4 class="card-title">{{ shop.shop_name }}</h4>
    				<p class="card-text">{{ shop.shop_description }}</p>
    				<a href="#" class="btn btn-primary" ng-click="OpinionShop(shop.id,1)">Like</a> <a href="#" class="btn btn-danger" ng-click="OpinionShop(shop.id,0)">Dislike</a>
    			@endverbatim
  				</div>
			</div>
			<br>
		</div>
	</div>
</div>
@endsection
