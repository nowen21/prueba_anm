<?php 
$rolesxxx=$this->cargarRolesNoAsignadosUsuario();
?>
<form wire:submit.prevent="create{{ucfirst($moduloxx)}}">
    <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th wire:click="sortBy('name')">
                        Roles
                        @if ($sortField === 'name')
                        @if ($sortDirection === 'asc')
                        <i class="fas fa-sort-up float-right active"></i>
                        @else
                        <i class="fas fa-sort-down float-right active"></i>
                        @endif
                        @else
                        <i class="fas fa-sort float-right"></i>
                        @endif
                    </th>
                </tr>
            </thead>
            <tbody>

                @foreach ($rolesxxx as $item)
                <tr>
                    <td>
                        <div class="icheck-primary">
                            <input type="checkbox" name="role" value="{{ $item->id }}" id="usuarole_{{ $item->id }}" wire:click="asignarRol({{ $item->id }})">
                            <label for="usuarole_{{ $item->id }}"></label>
                        </div>
                    </td>
                    <td>{{ $item->name }}</td>

                    <!-- Agrega más celdas según tus necesidades -->
                </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <th>#</th>
                    <th>Rol</th>
                </tr>
            </tfoot>
        </table>
        <x-template.datatable.numeregi-component :paginator="$rolesxxx">
        </x-template.datatable.numeregi-component>
    </div>

    <div class="card-footer text-end">
        <a class="btn btn-info" href="{{route('usuariox-listaxxx')}}" title="Volver">
            <i class="fas fa-arrow-left"></i>
            {{__('Volver')}}
        </a>

    </div>

</form>