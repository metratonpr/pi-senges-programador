<!-- Botão de Abertura do Modal -->
<button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal"
    data-entity-id="{{ $id }}" data-route="{{ route($routePrefix . '.destroy', $id) }}">
    <i class="bi bi-trash"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Remoção</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                Você tem certeza que deseja remover este {{ $entity }}?
            </div>
            <div class="modal-footer">
                <form id="deleteForm" action="" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-danger">Remover</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById('confirmDeleteModal').addEventListener('show.bs.modal', function(event) {
        const button = event.relatedTarget;
        const route = button.getAttribute('data-route');
        const form = document.getElementById('deleteForm');
        form.action = route;
    });
</script>
