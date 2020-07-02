<!-- Quote Field -->
<div class="form-group col-sm-6">
    {!! Form::label('quote', 'Quote:') !!}
    {!! Form::text('quote', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author', 'Author:') !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>

<!-- Tag Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tag', 'Tag:') !!}
    {!! Form::text('tag', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('citations.index') }}" class="btn btn-secondary">Cancel</a>
</div>
