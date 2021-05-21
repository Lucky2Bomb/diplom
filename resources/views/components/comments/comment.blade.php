<style>
    .comment-avatar {
        object-fit: cover;
        width: 64px;
        height: 64px;
    }

    .input-reply:hover {
        cursor: pointer;
        text-decoration: underline;
    }
</style>

<hr />
<div class="media mb-2">
    <a href="{{ route('profile.show', ['id'=>$idUser]) }}"><img src="{{$img ? '/avatar/'.$img : '/no-image.jpg'}}"
            class="mr-3 comment-avatar"></a>
    <div class="media-body">
        <a href="{{ route('profile.show', ['id'=>$idUser]) }}">
            <h5 class="mt-0">{{isset($name) && isset($surname) ? $name . ' ' . $surname : '[DELETED]' }}</h5>
        </a>
        <p>{{isset($description) ? $description : ""}}</p>
        <h6 class="card-subtitle mb-2 text-muted">
            {{date('d.m.Y H:m', strtotime($date))}} @auth()

            <input type="radio" name="reply_user_id" id="{{$idUser}}" value="{{$idUser}}" style="display: none;"><label
                class="text-primary input-reply" for="{{$idUser}}"
                onclick="
                document.getElementById('reply_to').style.cssText = 'display: inline;';
                document.getElementById('radio_checked_name').innerText = '{{isset($name) && isset($surname) ? $name . ' ' . $surname : '[DELETED]' }}';
                document.getElementById('radio_checked_name').href = '/profile/{{$idUser}}';
                document.getElementById('description').innerText = '{{$name}}' ? '{{$name}}, ' : '';
                ">Ответить</label>@endauth </h6>
        {{-- <p>Will you do the same for me? It's time to face the music I'm no longer your muse. Heard it's beautiful, be the judge and my girls gonna take a vote. I can feel a phoenix inside of me. Heaven is jealous of our love, angels are crying from up above. Yeah, you take me to utopia.</p> --}}
    </div>
</div>
