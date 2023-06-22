<div>
    <!-- Botón para abrir el modal -->
    <button wire:click="openModal" class="btn btn-primary">Abrir Modal</button>

    <!-- Modal -->
    <div wire:click.away="closeModal" class="{{ $isOpen ? 'modal show' : 'modal' }}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <!-- Contenido del modal -->
                <div class="modal-header">
                    <h5 class="modal-title">Título del Modal</h5>
                    <button type="button" class="close" wire:click="closeModal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Contenido del modal...</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
