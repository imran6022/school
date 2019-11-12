@extends('master.app')

@section('content')
<div class="container">
	<div class="teacher">
		<h3 class="text-center mt-2 mb-3">Our <span class="red">Teachers</span></h3>

		<div class="row">
			<div class="col-md-4 col-md-offset-4 m-auto">
				<div class="card" style="width: 16rem;">
				  <img src="{{ asset('images/imran1.jpg') }}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title text-center">Name</h5>
				    <p class="card-text">Some quick example card's content.</p>
				  </div>
				</div>
			</div>
		</div>

		<div class="row mt-4">

			<div class="col-md-3 mb-4">
				<div class="card" style="width: 16rem;">
				  <img src="{{ asset('images/imran1.jpg') }}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title text-center">Name</h5>
				    <p class="card-text">Some quick example card's content.</p>
				  </div>
				</div>
			</div>

			<div class="col-md-3 mb-4">
				<div class="card" style="width: 16rem;">
				  <img src="{{ asset('images/imran1.jpg') }}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title text-center">Name</h5>
				    <p class="card-text">Some quick example card's content.</p>
				  </div>
				</div>
			</div>

			<div class="col-md-3 mb-4">
				<div class="card" style="width: 16rem;">
				  <img src="{{ asset('images/imran1.jpg') }}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title text-center">Name</h5>
				    <p class="card-text">Some quick example card's content.</p>
				  </div>
				</div>
			</div>

			<div class="col-md-3 mb-4">
				<div class="card" style="width: 16rem;">
				  <img src="{{ asset('images/imran1.jpg') }}" class="card-img-top" alt="...">
				  <div class="card-body">
				    <h5 class="card-title text-center">Name</h5>
				    <p class="card-text">Some quick example card's content.</p>
				  </div>
				</div>
			</div>


			
		</div>

	</div>
</div>
@endsection