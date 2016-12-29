<h2>{{ trans_choice('comments.count', $comments->total()) }}</h2>

@include ('comments/_form')

@each('comments/_show', $comments, 'comment')

<div class="text-center">
    {{ $comments->links() }}
</div>

@push('inline-scripts')
    @include ('javascripts.forms.delete-confirmation', ['trans' => 'forms.comments.delete'])
@endpush
