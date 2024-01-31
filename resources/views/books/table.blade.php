<div class="table-responsive">
    <table class="table" id="books-table">
        <thead>
        <tr>
            <th>Name</th>
        <th>Isbn</th>
        <th>Author</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($books as $books)
            <tr>
                <td>{{ $books->Name }}</td>
            <td>{{ $books->Isbn }}</td>
            <td>{{ $books->Author }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['books.destroy', $books->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('books.show', [$books->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('books.edit', [$books->id]) }}"
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
