@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1>Edit  Old Computer</h1>
    </div>
    <div class="flex justify-center">
        <form action="{{route('computers.update',['computer'=> $computer->id])}}" method="POST" class="form bg-white p-6 border-1">
            @csrf
            @method('PUT')
            <div>
                <label for="computer-name">Computer-Name</label>
                <input id="computer-name" name="computer-name" type="text" value="{{$computer->name}}">
                @error('computer-name')
                <div class="form-error">
                {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="computer-country">Computer-country</label>
                <input id="computer-country" name="computer-country" type="text" value="{{$computer->country}}">
                @error('computer-country')
                <div class="form-error">
                {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="computer-price">Computer-price</label>
                <input id="computer-price" name="computer-price" type="text" value="{{$computer->price}}">
                @error('computer-price')
                <div class="form-error">
                {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('title','Edit Old Computer')