<a title="Click to mark as favorite {{$name}}" 
   class="favorite mt-2 {{auth::guest() ? 'off' : ($model->is_favorited ? 'favorited' : '')}}"
   onclick="event.preventDefault(); document.getElementById('favorite-{{$name}}-{{$model->id}}').submit();">
    <i class="fas fa-star fa-lg"></i>
</a>
<form id="favorite-{{$name}}-{{$model->id}}" action="/{{$url}}/{{$model->id}}/favorites" method="POST" style="display:none;">
    @csrf
    @if ($model->is_favorited)
    @method('DELETE');
    @endif
</form>