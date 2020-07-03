@extends('0 theme.bootstrap.layout')

@section('content')
    @include('1 Quotes.modal.add_quote')
    @include('1 Quotes.content.quote_list')

@php
    $test = "hello";
@endphp

    @verbatim
    <div class="container">
        Hello, {{ name }}.
    </div>
    @endverbatim


@endsection
