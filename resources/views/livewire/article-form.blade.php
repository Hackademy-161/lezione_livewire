<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6 border shadow rounded">
            <form class="m-5" wire:submit="save">
                <div class="mb-3">
                  <label  class="form-label">Titolo</label>
                  <input type="text" class="form-control" wire:model.blur="title">
                  @error('title') <span class="error alert alert-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                  <label  class="form-label">Sottotitolo</label>
                  <input type="text" class="form-control" wire:model.blur="subtitle">
                  @error('subtitle') <span class="error  alert alert-danger">{{ $message }}</span> @enderror
                </div>
                <div class="mb-3">
                    <label  class="form-label">Contenuto</label>
                    <textarea class="form-control" id="" cols="30" rows="10" wire:model.blur="description"></textarea>
                    @error('description') <span class="error  alert alert-danger">{{ $message }}</span> @enderror
                  </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </div>
</div>
