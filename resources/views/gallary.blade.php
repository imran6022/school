@extends('master.app')

@section('content')
<div class="container">
	<div class="Gallary">
		<h3 class="text-center mt-2 mb-3">Photo <span class="red">Gallary</span></h3>

		<div class="demo-gallery">
            <ul id="lightgallery" class="list-unstyled row">
                @foreach($gallarys as $gallary)
                <li class="col-xs-4 col-sm-3 col-md-2 mb-3" data-responsive="img/1-375.jpg 375, img/1-480.jpg 480, img/1.jpg 800" data-src="{{ asset('images/gallary/'. $gallary->photo) }}" data-sub-html="<h4>Fading Light</h4><p>Classic view from Rigwood.</p>">
                    <a href="">
                        <img class="img-fluid" src="{{ asset('images/gallary/'. $gallary->photo) }}" alt="" >
                    </a>
                </li>
                @endforeach
                
            </ul>
            <div class="pagination float-right">
                {{ $gallarys->links() }}
            </div>
        </div>

	</div>
</div>
@endsection