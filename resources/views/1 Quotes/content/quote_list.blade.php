<div class="table-responsive">
    <table class="table mt-3">
        <thead class="thead-dark">
            <tr>
            <th scope="col">#</th>
            <th scope="col">Citation</th>
            <th scope="col">Auteur</th>
<<<<<<< HEAD
            <th scope="col">Editer</th>
=======
            <th scope="col">Action</th>
>>>>>>> 06a6b3178042b038c2185a235f0e76919ecb315f
            </tr>
        </thead>
        <tbody class="bg-light">
            @foreach ($citations as $key => $citation)
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{!! nl2br($citation->quote) !!}</td>
                    <td>{{ $citation->author}}</td>
                    <td>
<<<<<<< HEAD
                        @include('1 Quotes.modal.edit_quote')
=======
                        <a class="btn btn-primary" href="{{route('quote.edit',['id'=>$citation->id])}} ">
                            <i class="fa fa-edit"></i>
                        </a>
                        <a class="btn btn-danger" href="{{route('quote.delete',['id'=>$citation->id])}} ">
                            <i class="fa fa-trash"></i>
                        </a>
>>>>>>> 06a6b3178042b038c2185a235f0e76919ecb315f
                    </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            {{-- {{ $citations->links() }} --}}
        </tfoot>
    </table>
</div>
