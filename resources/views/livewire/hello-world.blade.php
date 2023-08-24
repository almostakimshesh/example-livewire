<div>
    {{-- <input wire:model.debounce.1000ms="name" type="text"> --}}
    {{-- after clicking away --}}
    {{-- <input wire:model.lazy="name" type="text"> --}}
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greetings" multiple>
        <option>Hello</option>
        <option >Goodbye</option>
        <option>Adios</option>
    </select>

    {{implode(',',$greetings)}} {{$name}} @if ($loud) !! @endif

    <button wire:click="default">
        default name
    </button>
    {{-- <button wire:click="reset($event.target.innerText)">
        Rseset name
    </button> --}}
</div>
