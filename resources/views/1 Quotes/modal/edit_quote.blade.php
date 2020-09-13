<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editCitation{{$citation->id}}">
    Editer
</button>

<!-- Modal -->
<form action="{{route('citations.store')}}" method="POST">
    @csrf
    <div class="modal fade" id="editCitation{{$citation->id}}" tabindex="-1" role="dialog" aria-labelledby="editCitation{{$citation->id}}Label" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-success text-white">
                <h5 class="modal-title" id="editCitation{{$citation->id}}Label">Editer la citation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- ================================================== --}}

                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Citation</label>
                        <textarea name="citation" class="form-control" cols="30" rows="5" value="{{$citation->citation}}" required></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Auteur</label>
                        <input type="text" class="form-control" value="{{$citation->author}}" name="author" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Tags</label>
                        @php
                            // $item_tags = App\Http\Controllers\QuoteController::getTags($citation->tag);
                            // dd($item_tags);
                        @endphp
                        {{-- {{ $citation->tag }} --}}
                        {{-- {!! $item_tags !!} --}}
                        <select name="tag[]" multiple class="form-control select2" style="width: 100%">
                        </select>
                    </div>
                </div>

                {{-- ================================================== --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Modifier</button>
            </div>
            </div>
        </div>
    </div>
</form>
