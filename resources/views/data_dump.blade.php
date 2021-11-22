import './phrase.dart';
List<Phrase> phraseCollection = [
@foreach ($phrases as $phrase)
 Phrase(id: {{$phrase->id}}, english: "{{trim($phrase->english)}}", irish: "{{trim($phrase->irish)}}",),   
@endforeach
]

{{-- List<Phrase> phraseCollection = [
    @foreach ($phrases as $phrase)
     Phrase(id: {{$phrase->id}}, english: '{{trim($phrase->english)}}', irish: '{{trim($phrase->irish)}}', isFavourite: false),   
    @endforeach
    ] --}}