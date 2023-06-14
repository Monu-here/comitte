@extends('layout.index')
@section('content')
@include('layout.sidebar')
<div class="section">
 <div class="container">
<h1>here are some content </h1>
</div>
</div>
<style>
    .container{
        display: flex;
        align-content: center;
        color: red;
        position: relative;
        width: min(100%,950px);
    }
</style>
@endsection
