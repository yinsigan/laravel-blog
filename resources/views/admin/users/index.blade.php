<ul>
    @foreach($users as $user)
        <li>{!! $user['first_name'] !!} {!! $user['last_name'] !!}</li>
    @endforeach
</ul>
