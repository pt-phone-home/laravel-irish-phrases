@extends('layouts.master')
@section('content')
<section class="bg-dark text-light p-4 text-center text-sm-start">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
            <div>
                <h1>Random <span class="text-warning">Phrases</span> in Irish and English</h1>
                <form action="{{route('search')}}" method="POST">
                    @csrf
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search the database" name="searchTerm">
                        <button class="btn btn-primary btn-lg" type="submit" id="button-addon2">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<section class="p-5 bg-light" id="random">
    <div class="container">
        <div class="row">
           <div class="col col-md-3">
               <div class="card d-flex flex-wrap justify">
                   @foreach ($phrasesInIrish as $phrase )
                   <a href="{{route('randomById', $phrase)}}" class="link">{{trim($phrase->irish)}}</a>
                   @endforeach
               </div>
           </div>
           <div class="col col-md-6">
                <h3>Click on any of the phrases to get their translation</h3>
                @yield('random_by_id')
            </div>
            <div class="col col-md-3">
                <div class="card d-flex flex-wrap justify">
                    @foreach ($phrasesInEnglish as $phrase )
                    <p>{{trim($phrase->english)}}</p>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>