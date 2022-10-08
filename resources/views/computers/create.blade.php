@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1>Create New Computer</h1>
    </div>
    <div class="flex justify-center">
        <form action="{{route('computers.store')}}" method="post" class="form bg-white p-6 border-1">
            @csrf
            <div>
                <label for="computer-name">Computer-Name</label>
                <input id="computer-name" name="computer-name" type="text" value="{{old('computer-name')}}">
                @error('computer-name')
                <div class="form-error">
                {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="computer-country">Computer-country</label>
                <input id="computer-country" name="computer-country" type="text" value="{{old('computer-country')}}">
                @error('computer-country')
                <div class="form-error">
                {{$message}}
                </div>
                @enderror
            </div>
            <div>
                <label for="computer-price">Computer-price</label>
                <input id="computer-price" name="computer-price" type="text" value="{{old('computer-price')}}">
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
@section('title','Create Computer')