@extends('layout.index')
@section('content')
    @include('layout.sidebar')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="txt">
                <h1>Add Comitte</h1>
            </div>
        </div>
        <div class="col-md-6">
            <div class="button">
                <a href="{{route('comitte.add')}}" class="btn btn-primary">Add Comitte</a>
            </div>
        </div>
    </div>
    <table class="table table-success table-striped">
        <tr>
            <th>Name</th>
            <th>COUNRTY</th>
            <th>State</th>
            <th>District</th>
            <th>city</th>
            <th>Action</th>
        </tr>
        @foreach ($comittes as $comitte)

            <tr>
                <td> {{ $comitte->name }} </td>
                <td> {{ $comitte->country }} </td>
                <td> {{ $comitte->state }} </td>
                <td> {{ $comitte->district }} </td>
                <td> {{ $comitte->city }} </td>
                <td>
                    <a href="{{route ('comitte.delete', $comitte->id)}}" class="btn btn-danger">Del</a>
                </td>
                <td>
                    {{-- <a href="/member/1/index">View Members</a> --}}

                    {{-- <a href="{{ route('member.member.index', $comitte->id) }}" class="btn btn-primary">View Members</a> --}}
                    <a href="{{ route('member.index', $comitte) }}">View Members</a>
                    {{-- <a href="{{ route('member.index', ['comitte_id'=> $comitte->id]) }}" class="btn btn-primary">View Members</a> --}}
                </td>
            </tr>
        @endforeach
    </table>
</div>
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
