<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th wire:click="sortBy('id')">#
                <x-template.ordenar-component campoxxx="id" :direccio="$sortDirection" :campcamb="$sortField">
                </x-template.ordenar-component>
            </th>
            <th wire:click="sortBy('name')">
                Usuarios
                <x-template.ordenar-component campoxxx="name" :direccio="$sortDirection" :campcamb="$sortField">
                </x-template.ordenar-component>
            </th>
            @can('usuarole-listaxxx')
            <th class="col-1">Roles</th>
            @endcan
            <th class="text-end">Acciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($data as $item)

        <tr>
            <td>
                {{ $item->id }}
            </td>
            <td>{{ $item->name }}</td>
            @can('usuarole-listaxxx')
            <td class="text-end">
                <a href="{{route('usuarole-listaxxx',$item->id)}}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Permisos">
                    <i class="fas fa-key"></i>
                </a>
            </td>
            @endcan
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
                    @if($item->id!=1)
                    <button class="btn btn-danger btn-sm" wire:click="$emit('deleteAlertJs<?= ucfirst($moduloxx) ?>Confirma',{{$item->id}})" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    @else
                    <button class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Usuario aministrador, no se elimina">
                        <i class="fas fa-lock"></i>
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
            <th>Usuario</th>
            @can('usuarole-listaxxx')
            <th>Roles</th>
            @endcan
            <th class="text-end">Acciones</th>
        </tr>
    </tfoot>
</table>
<x-template.datatable.numeregi-component :paginator="$data">
</x-template.datatable.numeregi-component>