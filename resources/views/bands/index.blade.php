@extends('layouts.app')

@section('head')
    <style>
        .band {
            max-width: 33%;
            max-height: 100%;
            margin: 15px;
        }

        .band img {
            display: block;
            max-height: 100%;
            max-width: 100%;
            margin: inherit;
        }

        .band a {
            display: block;
            font-size: 3em;
        }
    </style>
@endsection

@section('content')
    @foreach($bands as $band)
        <div class="band">
            <a href="{{$band->url}}">
                {{$band->name}}
            </a>
            @if($band->logoLocalPath)
                <img src="{{ asset('storage/' . $band->logoLocalPath) }}">
            @endif
            @if($band->photoLocalPath)
                <img src="{{ asset('storage/' . $band->photoLocalPath) }}">
            @endif
        </div>
    @endforeach
@endsection