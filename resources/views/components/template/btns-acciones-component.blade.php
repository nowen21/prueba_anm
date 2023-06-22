<div>
    <div class="card-footer text-end">
        <a class="btn btn-info" href="{{route($permisox.'-listaxxx')}}" title="Volver">
            <i class="fas fa-arrow-left"></i>
            {{__('Volver')}}
        </a>
        @if($tipobtnx==1)
        <button type="button" wire:click="$emit('deleteAlertJs<?= ucfirst($moduloxx) ?>ReConfirma')" class="btn btn-danger">
            <i class="fas fa-times"></i>
            {{__(trim($btntitle))}}
        </button>
        @endif
        @if($tipobtnx==2)
        <button class="btn btn-primary   " type="submit" data-bs-toggle="tooltip" data-bs-placement="top">
            <i class="fas fa-check"></i> {{__(trim($btntitle))}}
        </button>
        @endif
    </div>
</div>