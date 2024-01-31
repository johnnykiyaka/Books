<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $books->Name }}</p>
</div>

<!-- Isbn Field -->
<div class="col-sm-12">
    {!! Form::label('Isbn', 'Isbn:') !!}
    <p>{{ $books->Isbn }}</p>
</div>

<!-- Author Field -->
<div class="col-sm-12">
    {!! Form::label('Author', 'Author:') !!}
    <p>{{ $books->Author }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $books->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $books->updated_at }}</p>
</div>

