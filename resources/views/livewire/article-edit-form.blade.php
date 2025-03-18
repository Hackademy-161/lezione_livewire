<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6 border shadow rounded">
            <form class="m-5" wire:submit.blur="updateArticle">
                <div class="mb-3">
                  <label  class="form-label">Titolo</label>
                  <input type="text" class="form-control" wire:model.blur="title">
                  
                </div>
                <div class="mb-3">
                  <label  class="form-label">Sottotitolo</label>
                  <input type="text" class="form-control" wire:model.blur="subtitle">
                 
                </div>
                <div class="mb-3">
                    <label  class="form-label">Contenuto</label>
                    <textarea class="form-control" id="" cols="30" rows="10" wire:model.blur="description"></textarea>
                    
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
