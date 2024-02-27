<div>
    @foreach ($notes->slice($page*10,10) as $note)
        <div>
            <h1><a href="/notes/{{$note->id}}">{{$note->id}} {{$note->title}}</a></h1>
            <p>{{$note->text}}</p>
        </div>
    @endforeach
    <div>
        <span>Pages </span>
        @foreach ($pages as $page)
        @if ($page == 0)
        <a href="/notes">0</a>
        @else
        @if ($notes->count()%10 == 0 && $notes->count()/10 == $page)  
        @else
        <a href="/notes?page={{$page}}">{{$page}}</a>
        @endif
        @endif
        @endforeach
    </div>
</div>
