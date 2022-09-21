@extends('layouts.app')

@section('content')
@if ( session ('edited'))
    <div>
        {{ session('edited') }} è stato modificato
    </div>
    @elseif(session ('created'))
        {{ session('created') }} è stata creata
@endif
<div class="card">
    <div>
        <img src="{{ $Post->post_image }}" alt="">
    </div>
    <p> {{ $Post->author}}</p>
    <h2> {{ $Post->title}}</h2>
    <p> {{ $Post->post_content}}</p>
    <p> {{ $Post->post_date}}</p>
</div>
    
@endsection