@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert" id="alertColse">
    <i class="bi bi-bookmark-check-fill"></i>
    <strong>{{ session()->get('success') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@if(session()->has('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert" id="alertColse">
    <i class="bi bi-question-circle"></i> <strong>{{ session()->get('error') }}</strong>
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif