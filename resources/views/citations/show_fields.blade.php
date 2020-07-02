<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $citation->id }}</p>
</div>

<!-- Quote Field -->
<div class="form-group">
    {!! Form::label('quote', 'Quote:') !!}
    <p>{{ $citation->quote }}</p>
</div>

<!-- Author Field -->
<div class="form-group">
    {!! Form::label('author', 'Author:') !!}
    <p>{{ $citation->author }}</p>
</div>

<!-- Tag Field -->
<div class="form-group">
    {!! Form::label('tag', 'Tag:') !!}
    <p>{{ $citation->tag }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $citation->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $citation->updated_at }}</p>
</div>

