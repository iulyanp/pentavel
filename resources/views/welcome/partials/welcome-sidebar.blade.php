<h3>People I like: </h3>
<ul>
    <li><b>Foreach</b></li>
    @foreach($people as $person)
        <li>{{ $person }}</li>
    @endforeach

    <li><b>Forelse</b></li>
    @forelse($people as $person)
        <li>{{ $person }}</li>
    @empty
        <li>No users</li>
    @endforelse
</ul>