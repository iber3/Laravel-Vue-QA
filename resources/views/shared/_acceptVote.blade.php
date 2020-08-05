@can ('acceptVote', $model)
<a title="Mark this answer as best" class="{{ $model->status }} mt-2"
   onclick="event.preventDefault(); document.getElementById('accept-answer-{{$model->id}}').submit();">
    <i class="fas fa-check fa-lg"></i>
</a>
<form id="accept-answer-{{$model->id}}" action=" {{ route('answers.accept', $model->id) }}" method="POST" style="display:none;">
    @csrf
</form>
@else
@if ($model->is_best)
<a title=Question owner marked this answer as the best" class="{{ $model->status }} mt-2"
   >
    <i class="fas fa-check fa-lg"></i>
</a>
@endif
@endcan