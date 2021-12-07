@extends('admin.layouts.app')

@section('content')
<div class="page-inner">
    <div class="mt-2 mb-4">
        <h2 class="text-white pb-2">Welcome, {{ auth()->user()->name }}!</h2>
        <h5 class="text-white op-7 mb-4">Yesterday I was clever, so I wanted to change the world. Today
            I am wise, so I am changing myself.</h5>
    </div>
</div>
@endsection
