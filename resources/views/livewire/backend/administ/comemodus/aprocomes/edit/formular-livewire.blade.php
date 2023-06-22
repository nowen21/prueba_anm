<form wire:submit.prevent="edit{{ucfirst($moduloxx)}}">
    @include($this->formbase)
    <x-template.btns-acciones-component :permisox="$permisox" :moduloxx="$moduloxx" tipobtnx="2">
        <x-slot name="btntitle">
            Aprobar
        </x-slot>
    </x-template.btns-acciones-component>
</form>