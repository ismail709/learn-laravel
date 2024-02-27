<div style="font-family: Helvetica, sans-serif">
    <div>
        <h1>Page {{$page}}</h1>
   </div>
   @foreach ($notes->splice($page*10,10) as $note)
        <div>
        <h2><a href="/notes/{{$note->id}}">{{$note->id.$note->title}}</a></h2>
        <p>{{$note->text}}</p>
    </div>
    @endforeach
    <div style="width: fit-content;margin-inline:auto;">
        <span>Pages </span>
        @foreach($pages as $page)
        @if ($page == 0)
        <a style="padding-inline: 2px;" href="/notes">0</a>
        @else
            <a style="padding-inline: 2px;" href="/notes?page={{$page}}">{{$page}}</a>
        @endif
        @endforeach

    </div>
</div>
