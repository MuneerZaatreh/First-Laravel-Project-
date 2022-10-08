@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1>Computers</h1>
    </div>
    <div class="mt-8">
   <p>{{$computer['name']}} ({{$computer['country']}}) - <strong>{{$computer['price']}}</strong></p>     
    </div>
    <div>
    <a class="edit-btn" href="{{route('computers.edit',$computer->id)}}">Edit</a>
    </div>
    <div>
        <form action="{{route('computers.destroy',$computer->id)}}" method="post">
        @csrf   
        @method('Delete')
        <input type="submit" class="edit-btn" value="Delete">
        </form>

    </div>
</div>
@endsection
@section('title','Computers')