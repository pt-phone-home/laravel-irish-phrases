@extends('layouts.master')
@section('content')
<section class="bg-dark text-light p-4 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1>Database of <span class="text-warning">Irish Phrases</span></h1>
                <p class="lead my-4">This website provides a searchable database of over xxxx phrases, searchable in Irish and English.</p>
                <a href="/#random" class="btn btn-primary btn-lg">Show me some examples</a>
            </div>
            <img class="img-fluid w-25 d-none d-sm-block" src="/images/header_image.png" alt="">
        </div>
    </div>
</section>
<section class="bg-primary text-light p-5">
    <div class="container">
        <div class="d-md-flex justify-content-around align-items-center">
            <div class="w-100">
                <h3 class="mb-3 mb-md-0">Search the database</h3>
                <p>Enter words or phrases in Irish or English</p>
            </div>
            <div class="w-100 w-sm-100">
                <form action="{{route('search')}}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" name="searchTerm">
                        <button class="btn btn-dark btn-lg" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="p-5 bg-light" id="random">
    <div class="container">
        <div class="row mb-2">
            <div class="col text-center">
                <h2 class="d-inline-block">Sample Phrases</h2> 
                {{-- <a class="btn btn-primary d-block w-25" href="/#random">More</a> --}}
            </div>
            
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


{{-- @section('left_panel')
    @include('components.left-panel')
@endsection
@section('content')
<div class="row">
    <div class="col">
        <h3 class="text-dark text-center">Sample Phrases</h3>
    </div>
    @foreach ($phrases as $phrase)
        <div class="row justify-content-center">
            <div class="card w-75 m-1 px-2 py-1">
                <p class="text-secondary">{{Str::ucfirst($phrase->english)}}</p>
                <p class="text-teal">{{Str::ucfirst($phrase->irish)}}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
@section('right_panel')
    @include('components.right-panel')
@endsection --}}


{{-- @foreach ($phrases as $phrase )
    <div class="col-md">
        <div class="card bg-dark text-light">
            <h5>{{$phrase->english}}</h5>
            <h5>{{$phrase->irish}}</h5>
        </div>    
    </div>    
@endforeach --}}