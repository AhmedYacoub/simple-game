@extends('layouts.app')

@section('content')
    <p>Game Instructions:</p>
    <ol>
        <li>Click <b>Try my luck</b> button to start playing.</li>
        <li>Each time you will get 3 random numbers, <b>between [1~10]</b></li>
        <li>If those 3 numbers have a match as follows you will get:</li>
        <ul>
            <li>none of them are equal to each other: <b>No Win</b></li>
            <li>2 numbers identical: <b>Small Win</b></li>
            <li>all of the 3 numbers identical: <b>Big Win</b></li>
        </ul>
    </ol>

    <div class="text-center">
        <a id="play_link" href="{{ route('game.play') }}" class="btn btn-success">Play!</a>
    </div>
@endsection
