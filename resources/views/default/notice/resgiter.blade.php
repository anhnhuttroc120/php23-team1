@extends('default.master')
@section('content')
@if(Session::has('success'))
<div class="alert alert-success">
	{{Session::get('success')}}
</div>
@endif
@endsection