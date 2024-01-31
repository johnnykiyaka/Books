<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('Name', 'Name:') !!}
    <p>{{ $author->Name }}</p>
</div>

<!-- Gender Field -->
<div class="col-sm-12">
    {!! Form::label('Gender', 'Gender:') !!}
    <p>{{ $author->Gender }}</p>
</div>

<!-- Age Field -->
<div class="col-sm-12">
    {!! Form::label('Age', 'Age:') !!}
    <p>{{ $author->Age }}</p>
</div>

<!-- Country Field -->
<div class="col-sm-12">
    {!! Form::label('Country', 'Country:') !!}
    <p>{{ $author->Country }}</p>
</div>

<!-- Genre Field -->
<div class="col-sm-12">
    {!! Form::label('Genre', 'Genre:') !!}
    <p>{{ $author->Genre }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $author->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $author->updated_at }}</p>
</div>

