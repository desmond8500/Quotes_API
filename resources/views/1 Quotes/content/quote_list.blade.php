<div class="table-responsive">
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Citation</th>
            <th scope="col">Auteur</th>
            {{-- <th scope="col">Handle</th> --}}
            </tr>
        </thead>
        <tbody class="bg-light">
            @foreach ($citations as $key => $citation)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $citation->quote}}</td>
                    <td>{{ $citation->author}}</td>
                    {{-- <td>@mdo</td> --}}
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            {{-- {{ $citations->links() }} --}}
        </tfoot>
    </table>
</div>
