
<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th wire:click="sortBy('id')">
                #
                <x-template.ordenar-component campoxxx="id" :direccio="$sortDirection" :campcamb="$sortField">
                </x-template.ordenar-component>
            </th>
            </th>
            <th wire:click="sortBy('name')">
                Rol
                <x-template.ordenar-component campoxxx="name" :direccio="$sortDirection" :campcamb="$sortField">
                </x-template.ordenar-component>
            </th>
            <th class="text-end">Acciones</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($data as $item)

        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->name }}</td>

            <td class="text-end">
                <div class="btn-group">
                @can($permisox.'-elminact')
                    @if($modeloid!=1)
                    <button class="btn btn-danger btn-sm" wire:click="desasignarPermiso({{$item->id}})" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                    @else
                    <button class="btn btn-warning btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="El rol aministrador, no se elimina">
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
            <th>
                #
            </th>
            <th>Rol</th>

            <th class="text-end">Acciones</th>

        </tr>
    </tfoot>
</table>
<x-template.datatable.numeregi-component :paginator="$data">
</x-template.datatable.numeregi-component>
