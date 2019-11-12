@extends('backend.layouts.app')

@section('content')
<div class="container">
    <div class="card-header">Dashboard</div>
         @if (session('status'))
        <div class="alert alert-success" role="alert">
        {{ session('status') }}
        </div>
         @endif

        <div class="card-body">
       
        </div>
</div>
@endsection
