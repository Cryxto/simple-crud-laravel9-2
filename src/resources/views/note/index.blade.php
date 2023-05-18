@extends('layouts.main')
@section('content')
<div class="row row-cols-1 row-cols-md-3 g-4 mb-3 pb-3">
@forelse ($notes as $note)
    
  <div class="col">
    <div class="card h-100">
      <div class="card-body">
        <h5 class="card-title">{{ $note->title }}</h5>
        <p class="card-text">{{ $note->note }}</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated : {{ $note->updated_at }}</small>
      </div>
    </div>
  </div>
  @empty
  <h2>Nothing</h2>
  @endforelse
</div>
{{ $notes->links('pagination::bootstrap-5') }}
@endsection