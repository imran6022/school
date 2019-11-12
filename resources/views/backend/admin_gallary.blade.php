@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="card-header text-center">Admin Gallary</div>
    
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        	<a href="{{ route('admin.add_photo') }}" class="btn btn-primary">Add Photo</a>
        	<table class="table table-bordered">
        		<thead>
        			<tr class="text-center">
        				<th>#</th>
        				<th>Image Title</th>
        				<th>Photo</th>
        				<th>Action</th>
        			</tr>
        		</thead>
        		<tbody>
        			@foreach($gallarys as $gallary)
        			<tr class="text-center">
        				<td>{{ $loop->index +1 }}</td>
        				<td>{{ $gallary->title }}</td>
        				<td>
        					<img src="{{ asset('images/gallary/'. $gallary->photo) }}" alt="" height="70px" width="100px">
        				</td>
        				<td>
        					<a href="{{ route('admin.gallary.delete', $gallary->id) }}" class="btn btn-danger">Delete</a>
        				</td>
        			</tr>
        			@endforeach
        		</tbody>
        	</table>

            <div class="pagination float-right">
                {{ $gallarys->links() }}
            </div>
       
        </div>
</div>
@endsection