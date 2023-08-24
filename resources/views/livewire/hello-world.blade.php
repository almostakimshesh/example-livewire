<div>
    {{-- <input wire:model.debounce.1000ms="name" type="text"> --}}
    {{-- after clicking away --}}
    {{-- <input wire:model.lazy="name" type="text"> --}}
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="greetings">
        <option>Hello</option>
        <option >Goodbye</option>
        <option>Adios</option>
    </select>

    {{$greetings}}

     {{$name}} @if ($loud) !! @endif
</div>
