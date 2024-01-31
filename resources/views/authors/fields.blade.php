<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Name', 'Name:') !!}
    {!! Form::text('Name', null, ['class' => 'form-control']) !!}
</div>

<!-- Gender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Gender', 'Gender:') !!}
    {!! Form::select('Gender', ['Male' => 'Male', 'Female' => 'Female'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Age', 'Age:') !!}
    {!! Form::number('Age', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Country', 'Country:') !!}
    {!! Form::text('Country', null, ['class' => 'form-control']) !!}
</div>

<!-- Genre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('Genre', 'Genre:') !!}
    {!! Form::select('Genre', ['Story' => 'Story', 'Comics' => 'Comics', 'Novel' => 'Novel', 'History' => 'History'], null, ['class' => 'form-control custom-select']) !!}
</div>
