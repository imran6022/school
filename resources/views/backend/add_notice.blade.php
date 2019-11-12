@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="card-header text-center">Add Notice</div>
    
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if(session('success'))
                 <div class="alert alert-success">
                     {{ sesion('success') }}
                 </div>
            @endif
        	<div class="row">
                <div class="col-md-6 col-md-offset-3 m-auto">

                    <form method="post" action="{{ route('admin.store_notice') }}" enctype="multipart/form-data">
                        @csrf
                      <div class="form-group">
                        <label for="exampleInputEmail1">Notice Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Image Title">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Notice</label>
                        <input type="file" name="notice" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>             
                
                      <button type="submit" class="btn btn-secondary">Submit</button>
                    </form>
                </div>
            </div>
       
        </div>
</div>
@endsection