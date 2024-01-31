<div class="table-responsive">
    <table class="table" id="authors-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Country</th>
        <th>Genre</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($authors as $author)
            <tr>
                <td>{{ $author->Name }}</td>
            <td>{{ $author->Gender }}</td>
            <td>{{ $author->Age }}</td>
            <td>{{ $author->Country }}</td>
            <td>{{ $author->Genre }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['authors.destroy', $author->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('authors.show', [$author->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('authors.edit', [$author->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
