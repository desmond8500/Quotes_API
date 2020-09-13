<div class="table-responsive-sm">
    <table class="table table-striped" id="films-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Cover</th>
        <th>Description</th>
        <th>Type</th>
        <th>File</th>
        <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($films as $film)
            <tr>
                <td>{{ $film->name }}</td>
            <td>{{ $film->cover }}</td>
            <td>{{ $film->description }}</td>
            <td>{{ $film->type }}</td>
            <td>{{ $film->file }}</td>
            <td>{{ $film->status }}</td>
                <td>
                    {!! Form::open(['route' => ['films.destroy', $film->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('films.show', [$film->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('films.edit', [$film->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>