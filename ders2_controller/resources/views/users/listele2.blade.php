@if(count($students))

    @foreach($students as $s)
    <li>{{ $s }}</li>
    @endforeach

@endif