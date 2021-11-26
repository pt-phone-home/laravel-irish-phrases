@extends('random_phrases')
@section('random_by_id')
<div class="card mb-3 shadow">
    <div class="card-header bg-secondary"></div>
    <div class="card-body">
        <div class="h5">
            <i class="bi bi-translate"></i>
        </div>
        <h5 class="card-title">{{trim($phrase->irish)}}</h5>
        <h5 class="card-subtitle text-muted">{{trim($phrase->english)}}</h5>
    </div>
    <div class="card-footer bg-secondary">

    </div>
</div>   
@endsection