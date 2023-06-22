<table id="example2" class="table table-bordered table-hover">
    <thead>
        <tr>
            <th wire:click="sortBy('id')">#
                <x-template.ordenar-component campoxxx="id" :direccio="$sortDirection" :campcamb="$sortField">
                </x-template.ordenar-component>
            </th>
            <th wire:click="sortBy('name')">
                Usuario
                <x-template.ordenar-component campoxxx="name" :direccio="$sortDirection" :campcamb="$sortField">
                </x-template.ordenar-component>
            </th>
            <th wire:click="sortBy('estado')">
                Estado
                <x-template.ordenar-component campoxxx="estado" :direccio="$sortDirection" :campcamb="$sortField">
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
            <td>{{ $item->name }}</td>
            <td>{{ $item->estado }}</td>
            <td class="text-end">
                <div class="btn-group">
                    @can($permisox.'-actualiz')
                    <a href="{{route($permisox.'-actualiz',$item->id)}}" class="btn btn-primary btn-sm" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
                        <i class="fas fa-edit"></i>
                    </a>
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
            <th>Estado</th>
            <th class="text-end">Acciones</th>
        </tr>
    </tfoot>
</table>
<x-template.datatable.numeregi-component :paginator="$data">
</x-template.datatable.numeregi-component>