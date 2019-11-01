@extends('layouts.master')
@section('content')

	<h1>Hi {{ Auth::user()->name}}, you have no right to use this method</h1>

@endsection()
