@extends('layouts.master', ['title' => 'Shopping cart'])


@section('link')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet"/>

<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/slick.css') }}"/>
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/slick-theme.css') }}"/>
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/nouislider.min.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
@endsection


@section('content')
	@if(Session::has('cart'))
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				<!-- Billing Details -->
						
					<!-- DEtail tentang form -->
						<!-- /Billing Details -->						
					</div>
					<div class="col-md-5 order-details">
						<div class="section-title text-center">
							<h3 class="title">Your Order</h3>
						</div>
					<div class="order-summary">
							<div class="order-col">
								<div><strong>PRODUCT</strong></div>
							</div>
					@foreach($product as $product)
				

						
						
							<div class="order-products">
								<div class="order-col">
									<div><span class="badge">{{$product['qty']}}</span>  <strong>{{$product['item']['title']}}</strong></div>
									<div>{{$product['price']}}</div>
								</div>					
			   		@endforeach
					   <div class="order-col">
								<div>Shiping</div>
								<div><strong>FREE</strong></div>
							</div>
							<div class="order-col">
								<div><strong>TOTAL</strong></div>
								<div><strong class="order-total">$ {{$totalPrice}}</strong></div>
							</div>
							
					   </div>
					  
					</div>
				</ul>
				<form action="/charge" method="post" id="checkout-form">
						<div class="billing-details">
							<div class="section-title">
								<h3 class="title">Nama Pemesan</h3>
							</div>
							<!-- DEtail tentang form -->
							<div class="form-group">
								<input class="input" type="text" name="name" placeholder="Name">
							</div>
						</div>						 
					   {{ csrf_field() }}
					   <button type="submit"  class="primary-btn order-submit">Pesan</button>
					    </div>
				
				</form>
			</div>
	</div>
	</div>

			
					



		</div>

		</div>
		<hr>

            
			
			</div>

		</div>
	@else
	</div>
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h1>Tidak ada item di cart!!</h1>
			</div>

		</div>

	@endif


@endsection

@section('scripts')
<script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/slick.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/nouislider.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/jquery.zoom.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('js/main.js')}}"></script>

<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
@endsection