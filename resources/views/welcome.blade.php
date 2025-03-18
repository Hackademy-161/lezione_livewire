<x-layout>
    <div class="container-fluid bg-success">
        <div class="row justify-content-center">
            <div class="col-12 text-center my-5">
                <h1>Welcome Livewire</h1>
            </div>
        </div>
    </div>
    {{-- <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>Counter</h2>
                <p id="counter">1</p>
                <button id="increment" class="btn btn-primary">+</button>
            </div>
        </div>
    </div> --}}
    <livewire:counter/>

    <livewire:article-form/>

    {{-- <script>
        window.addEventListener('DOMContentLoaded' , ()=> {
            let btn = document.querySelector('#increment');
            let counterValue = document.querySelector('#counter').innerHTML;

            btn.addEventListener('click' , ()=> {
                let counterElement = document.querySelector('#counter');
                counterElement.innerHTML = counterValue++;
            })
        })
    </script> --}}
</x-layout>