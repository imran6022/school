@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="card-header text-center">Admin Notice</div>
    
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        	<a href="{{ route('admin.add_notice') }}" class="btn btn-primary">Add Notice</a>
        	<table class="table table-bordered">
        		<thead>
        			<tr class="text-center">
        				<th>#</th>
        				<th>Notice Title</th>
        				<th>Notice</th>
        				<th>Action</th>
        			</tr>
        		</thead>
        		<tbody>
                    @foreach($notices as $notice)
            			<tr class="text-center">
            				<td>{{ $loop->index +1 }}</td>
            				<td>{{ $notice->title }}</td>
            				<td>
            					<img src="{{ asset('images/notice/'. $notice->notice) }} " alt="PDF" height="70px" width="100px">
            				</td>
            				<td>
            					<a href="{{ route('admin.notice.delete', $notice->id ) }}" class="btn btn-danger">Delete</a>
            				</td>
            			</tr>
                    @endforeach
        		</tbody>
        	</table>

            <div class="pagination float-right">
                {{ $notices->links() }}
            </div>

          
       
        </div>
</div>
@endsection