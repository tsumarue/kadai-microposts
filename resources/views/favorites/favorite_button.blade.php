@if (Auth::user()->is_favorite($micropost->id))
    {{-- アンフォローボタンのフォーム --}}
    <form method="POST" action="{{ route('user.unfavorite_microposts', $micropost->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-success btn-sm normal-case">Unfavorite</button>
    </form>
@else
    {{-- フォローボタンのフォーム --}}
    <form method="POST" action="{{ route('user.favorite_microposts', $micropost->id) }}">
        @csrf
        <button type="submit" class="btn btn-outline btn-sm normal-case">Favorite</button>
    </form>
@endif
