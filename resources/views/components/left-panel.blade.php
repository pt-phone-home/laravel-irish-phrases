<div class="card px-2 py-1">
    <h1 class="text-dark h5">English</h1>
    <div class="">
        @foreach ($phrasesInEnglish as $phraseInEnglish)
            <li>{{$phraseInEnglish->english}}</li>
        @endforeach
    </div>
   
</div>