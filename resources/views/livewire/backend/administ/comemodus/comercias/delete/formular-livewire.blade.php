<form wire:submit.prevent="edit{{ucfirst($moduloxx)}}">
    @include($this->formbase)
    <x-template.btns-acciones-component :permisox="$permisox" :moduloxx="$moduloxx" tipobtnx="1">
        <x-slot name="btntitle">
            Elimiinar
        </x-slot>
    </x-template.btns-acciones-component>
</form>