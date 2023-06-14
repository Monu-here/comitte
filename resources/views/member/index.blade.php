@extends('layout.index')
@section('content')
@include('layout.sidebar')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="txt">
                <h1>Add Member</h1>
            </div>
        </div>
        <div class="col-md-6">
            <div class="button">
                {{-- <a href="{{ route('member.add') }}" class="btn btn-primary">Add Member</a> --}}
                <a href="{{ route('member.add') }}">Add Member</a>


            </div>
        </div>
    </div>
<table class="table table-success table-striped">

    <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Document</th>
        <th>Document Number</th>
        <th>Document Image</th>
        <th>Action</th>
    </tr>

@foreach ($members as $member)
    <tr>
        <td> {{$member->name}} </td>
        <td> {{$member->phone}} </td>
        <td>{{$member->address}}</td>
        <td>{{$member->doc}}</td>
        <td>{{$member->doc_no}}</td>
        <td>
        <img src="{{ asset($member->image) }}" alt="Image" width="50" width="50">
        </td>
        <td>
            <a href="{{route('member.delete',$member->id)}}" class="btn btn-danger">delete</a>
        </td>
    </tr>

@endforeach
</table>
@endsection
<style>
        .txt{
        padding: 10px;
    }
    .button{
        padding: 20px;
        margin-left: 70%;

    }
.table{
    padding: 50px;
    top: 50px;
    position: relative;
}
</style>
