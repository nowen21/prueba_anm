<form wire:submit.prevent="{{$funcionx}}">   
    @include($this->formbase)
    <x-template.btns-acciones-component :permisox="$permisox" :moduloxx="$moduloxx" tipobtnx="2">
        <x-slot name="btntitle">
            Editar
        </x-slot>
    </x-template.btns-acciones-component>
</form>