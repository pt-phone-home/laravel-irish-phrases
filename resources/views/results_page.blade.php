@extends('layouts.master')

@section('content')
<section class="bg-dark text-light p-4 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1>Search <span class="text-warning">Results</span></h1>
            </div>
        </div>
    </div>
</section>
<section class="p-5 bg-light" id="random">
    <div class="container">
        <div class="row mb-2">
            <form action="{{route('search')}}" method="POST">
                @csrf
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Again" name="searchTerm">
                    <button class="btn btn-primary btn-lg" type="submit" id="button-addon2">Search Again</button>
                </div>
            </form>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
            @foreach ($phrases as $phrase ) 
                <div class="col">
                    <div class="card mb-3 shadow">
                        <div class="card-header bg-secondary"></div>
                        <div class="card-body">
                            <div class="h5">
                                <i class="bi bi-translate"></i>
                            </div>
                            <h5 class="card-title">{{$phrase->irish}}</h5>
                            <h5 class="card-subtitle text-muted">{{$phrase->english}}</h5>
                        </div>
                        <div class="card-footer bg-secondary">

                        </div>
                    </div>    
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
