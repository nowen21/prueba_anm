<div>

    <table id="example2" class="table table-bordered table-hover">
        <thead>


            <tr>
                <th>#</th>
                <th wire:click="sortBy('name')">
                    Rol
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
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($data as $item)

            <tr wire:key="{{ $item->id }}" wire:click="selectRow({{ $item->id }})" class="{{ $selectedRow == $item->id ? 'table-success' : '' }}">
                <td>
                    <div class="icheck-primary">
                        <input type="checkbox" name="role" value="{{ $item->id }}" {{ $this->isRowSelected($item->id) ? 'checked' : '' }} id="role_{{ $item->id }}">
                        <label for="role_{{ $item->id }}"></label>
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
    {{ $data->links('livewire.datatable.pagination') }}
</div>