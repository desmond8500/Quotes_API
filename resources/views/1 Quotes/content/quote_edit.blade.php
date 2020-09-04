@extends('0 theme.bootstrap.layout')

@section('content')

    <form action="{{ route("citations.update",['citation'=>$quote]) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <input type="text" class="form-control" name="author" value="{{ $quote->author }} ">
        </div>
        <div class="form-group">
            <textarea name="citation"  cols="30" rows="10" class="form-control">{{ $quote->quote }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Modifier</button>
    </form>

@endsection
