@extends('layouts.app')

@section('content')

<p>When you are ready, hit <b>try your luck</b> button</p>

<div class="text-center">
    <form action="{{ route('game.results') }}" method="POST">
        @csrf

        <button class="btn btn-success">try your luck</button>
    </form>
</div>

@if ( isset($results) && count($results) > 0 )
{{-- start results --}}
<div class="text-center mt-5">
    <h3>Numbers are: </h3>
    <p>
        @foreach ($results as $result)
            {{ $result . ($loop->last ? '' : ', ') }}
        @endforeach
    </p>

    <h3>And the final result is: </h3>
    <p>{{ $result_statement ?: 'No Win' }}</p>
</div>
{{-- End --}}

@endif

@endsection
