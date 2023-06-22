<div>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editRoleModal" >Editar</button>

    <button class="btn btn-primary btn-sm me-1 {{ !$parametr['filasele'] ? 'disabled' : '' }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar">
        <i class="fas fa-edit"></i>
    </button>

    <button class="btn btn-info btn-sm me-1 {{ !$parametr['filasele'] ? 'disabled' : '' }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Ver">
        <i class="fas fa-eye"></i>
    </button>

    <button class="btn btn-danger btn-sm {{ !$parametr['filasele'] ? 'disabled' : '' }}" data-bs-toggle="tooltip" data-bs-placement="top" title="Eliminar">
        <i class="fas fa-trash-alt"></i>
    </button>
</div>