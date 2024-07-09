@if(session('status'))
    <div id="trigger" data-bs-toggle="modal" data-bs-target="#statusModal"></div>
@endif

<div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">EEDJA</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p class="msg">{{ session('status') }}</p>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const trigger = document.getElementById('trigger');

        if (trigger) {
            var myModal = new bootstrap.Modal(document.getElementById('statusModal'));
            myModal.show();
        }
    });
</script>