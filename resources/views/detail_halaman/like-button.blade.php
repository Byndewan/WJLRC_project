<div>
    <form action="{{ route('karya.like', $karya->id) }}" method="POST">
        @csrf
        <a href="#" class="fw-light nav-link fs-6"> <span class="bi bi-heart me-1"></span> {{ $karya->likes()->count() }}</a>
    </form>
</div>

{{-- {{ $karya->likes()->count() }} --}}
