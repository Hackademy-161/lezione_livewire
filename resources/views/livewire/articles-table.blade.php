<div>
    <input type="text"  wire:model.blur="search">
    <button class="btn btn-info" wire:click="invertOrder">{{$order == 'asc' ? 'Down' : 'Up' }}</button>
    <table class="table border table-dark table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo
                <button class="btn btn-info" wire:click="invertOrder">{{$order == 'asc' ? 'Down' : 'Up' }}</button>
            </th>
            <th scope="col">Sottotitolo</th>
            <th scope="col">Corpo</th>
            <th scope="col">Azioni</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($articles as $article)
                <tr>
                    <th scope="row">{{$article->id}}</th>
                    <td>{{$article->title}}</td>
                    <td>{{$article->subtitle}}</td>
                    <td>{{$article->description}}</td>
                    <td>
                        <button wire:click="deleteArticle({{$article->id}})" class="btn btn-danger">Elimina</button>
                        <a href="{{route('article.edit' , ['id' => $article->id])}}" class="btn btn-warning">Modifica</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
