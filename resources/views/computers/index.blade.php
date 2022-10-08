@extends('layout')
@section('content')
<div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
    <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
        <h1>Computers</h1>
    </div>
    <div class="mt-8">
        @if (count($computers)>0)
        <ul>
            @foreach ($computers as $computer)
            <a href="{{ route('computers.show',['computer'=>$computer['id']])}}">
                <li>
                    <p>{{$computer['name']}} ({{$computer['country']}}) - <strong>({{$computer['price']}})</strong></p>
                </li>
            </a>
            @endforeach
        </ul>
        @else
        <p>There Are no Computers to Display</p>
        @endif
    </div>
</div>
@endsection
@section('title','Computers')