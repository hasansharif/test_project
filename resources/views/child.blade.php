
@extends('layouts.app')

@section('sidebar')
    @parent

    <p>Hello {{ $fname }}</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    @component('layouts.alert',['foo'=>$test])
    

	@endcomponent
@endsection