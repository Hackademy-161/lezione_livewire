<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 text-center">
            <p>{{$counter}}</p>
            <button class="btn btn-primary" wire:click="increment">+</button>
            <button class="btn btn-primary" wire:click="decrement">-</button>
            <button class="btn btn-primary" wire:click="incrementByNumber(5)">+5</button>
            <button class="btn btn-primary" wire:click="decrementByNumber(5)">-5</button>
            <button class="btn btn-primary" wire:click="incrementByNumber(10)">+10</button>
            <button class="btn btn-primary" wire:click="decrementByNumber(10)">-10</button>
        </div>
        <div class="col-12 text-center">
            <input type="text" wire:model="incrementNumber">
            <button class="btn btn-success" wire:click="incrementByInput">Aggiungi</button>
        </div>
    </div>
</div>
