<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_quote">
  Ajouter une citation
</button>

<!-- Modal -->
<form action="{{route('citations.store')}}" method="POST">
    @csrf
    <div class="modal fade" id="add_quote" tabindex="-1" role="dialog" aria-labelledby="add_quoteLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="add_quoteLabel">Ajouter une citation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{-- ================================================== --}}

                <div class="row">
                    <div class="form-group col-md-12">
                        <label>Citation</label>
                        <textarea name="quote" class="form-control" cols="30" rows="5" placeholder="Citation" required></textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Auteur</label>
                        <input type="text" class="form-control" placeholder="Auteur" name="author" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label>Tags</label>
                        <select name="tag[]" multiple class="form-control select2">
                            <option value=" ">test</option>
                        </select>
                    </div>
                </div>

                {{-- ================================================== --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
            </div>
        </div>
    </div>
</form>
