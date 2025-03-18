<x-layout>
    <div class="container-fluid bg-success">
        <div class="row justify-content-center">
            <div class="col-12 text-center my-5">
                <h1>Modifica</h1>
            </div>
        </div>
    </div>
    <livewire:article-edit-form
        articleId="{{$article->id}}"
    />
</x-layout>