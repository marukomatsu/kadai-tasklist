<ul class="list-unstyled">
    @foreach ($microposts as $micropost)
        <li class="media mb-3">
            <img class="mr-2 rounded" src="{{ Gravatar::src($micropost->user->email, 50) }}" alt="">
            <div class="media-body">
                <div>
                    {!! link_to_route('tasks.index', $tasks->user->name, ['id' => $tasks->user->id]) !!} <span class="text-muted">posted at {{ $tasks->created_at }}</span>
                </div>
                <div>
                    <p class="mb-0">{!! nl2br(e($tasks->content)) !!}</p>
                </div>
            </div>
        </li>
    @endforeach
</ul>
{{ $microposts->render('pagination::bootstrap-4') }}