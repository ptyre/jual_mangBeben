@extends('layouts.master', ['title' => 'Mang Beben Resto'])

@section('link')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet"/>
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/slick.css') }}"/>
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/slick-theme.css') }}"/>
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/nouislider.min.css') }}"/>
<link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ URL::asset('css/style.css') }}"/>
@endsection

@section('isi')
#untuk memunculkan data makanan
@foreach($makanans->chunk(3) as $makananChunk)
    <div class="row">
      @foreach($makananChunk as $makanan)       
        <div class="col-xs-18 col-sm-6 col-md-3">
          <div class="thumbnail">
            <img src="http://placehold.it/500x300" alt="">
              <div class="caption">
                <h4>Thumbnail label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, soluta, eligendi doloribus sunt minus amet sit debitis repellat. Consectetur, culpa itaque odio similique suscipit</p>
                <p><a href="#" class="btn btn-info btn-xs" role="button">Button</a> <a href="#" class="btn btn-default btn-xs" role="button">Button</a></p>
            </div>
          </div>
        </div>

      @endforeach 
    </div>
    @endforeach
<p> minuman </p>
@foreach ($minuman ->chunk(3) as $makananChunk)
	<div class="row">
		@foreach ($minumanChunk as $minuman)
		<div class="col-xs-18 col-sm-6 col-md-3"
		<div class="thumbnail">
			<img src="..." alt="">
				<div class="caption">
					<h4>judul Minuman</h4>
					<p>lorem ipsum dolor sit amet</p>
					<p><a href="#" class="btn btn-info btn-xs" role="button">button</a>
			
		@endforeach
	
@endforeach
	
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