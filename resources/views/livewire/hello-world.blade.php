<div>
    {{-- <input wire:model.debounce.1000ms="name" type="text"> --}}
    {{-- after clicking away --}}
    {{-- <input wire:model.lazy="name" type="text"> --}}
    <input wire:model="name" type="text">
    <input wire:model="loud" type="checkbox">
    <select wire:model="gretings">
        <option value="">Hello</option>
        <option value="">Goodbye</option>
        <option value="">Adios</option>
    </select>
    {{$gretings}} {{$name}} @if ($loud) !! @endif
</div>
