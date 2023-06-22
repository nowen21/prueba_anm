<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th wire:click="sortBy('explotacs.id')">#
                <x-template.ordenar-component campoxxx="explotacs.id" :direccio="$sortDirection" :campcamb="$sortField">
                </x-template.ordenar-component>
            </th>
            <th wire:click="sortBy('explotacs.tipomine_id')">
                Tipo Mineral
                <x-template.ordenar-component campoxxx="explotacs.tipomine_id" :direccio="$sortDirection" :campcamb="$sortField">
                </x-template.ordenar-component>
            </th>
            <th wire:click="sortBy('explotacs.cantidad')">
                Cantidad
                <x-template.ordenar-component campoxxx="explotacs.cantidad" :direccio="$sortDirection" :campcamb="$sortField">
                </x-template.ordenar-component>
            </th>
            <th wire:click="sortBy('estados.estado')">
                Estado
                <x-template.ordenar-component campoxxx="estados.estado" :direccio="$sortDirection" :campcamb="$sortField">
                </x-template.ordenar-component>
            </th>
           
            <th class="text-end">Acciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($data as $item)

        <tr>
            <td>
                {{ $item->id }}
            </td>
            <td>{{ $item->mineral }}</td>
            <td>{{ $item->cantidad }}</td>
            <td>{{ $item->estado }}</td>
            <td class="text-end">
                <div class="btn-group">
                    @can($permisox.'-actualiz')
                    <a href="{{route($permisox.'-actualiz',$item->id)}}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                        <i class="fas fa-edit"></i>
                    </a>
                    @endcan
                    @can($permisox.'-verxxxxx')
                    <button class="btn btn-info btn-sm" wire:click="cambiarVista('view',{{$item->id}})" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver">
                        <i class="fas fa-eye"></i>
                    </button>
                    @endcan
                    @can($permisox.'-elminact')
                        @if($item->estado_id==7)
                            <button class="btn btn-danger btn-sm" wire:click="$emit('deleteAlertJs<?= ucfirst($moduloxx) ?>Confirma',{{$item->id}})" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        @endif
                    @endcan
                </div>

            </td>
            <!-- Agrega más celdas según tus necesidades -->
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th>#</th>
            <th>Tipo Mineral</th>
            <th>Cantidad</th>
            <th>Estado</th>
            <th class="text-end">Acciones</th>
        </tr>
    </tfoot>
</table>
<x-template.datatable.numeregi-component :paginator="$data">
</x-template.datatable.numeregi-component>