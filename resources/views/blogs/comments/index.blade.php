<div id="comment_section">
@foreach($comments as $comment)

<div class="container">
	<div class="row">
		@if($comment->depth===1)
			<div class="col">
		@elseif($comment->depth===2)
			<div class="col-2">
			</div>
			<div class="col-10">
		@else
			<div class="col-4">
			</div>
			<div class="col-8">
		@endif

			<div class="container-fluid">
				<div class="row">
					<div class="col">
					{{ $comment->comment }}
					</div>
				</div>
				<div class="row">
					<div class="col">
						Posted by: {{ $comment->username }}
					</div>
				</div>
				<div class="row">
					<div class="col">
						{{ $comment->posted_at }}
					</div>
				</div>
				<div class="row">
					<button class="create_comment btn btn-primary" data-parentid='{{ $comment->id }}' data-currentdepth={{ $comment->depth }} data-comment='{{ $comment->id }}'>Reply</button>
					</div>
				</div>
				<div class="comment_form container-fluid" id="comment_form_{{ $comment->id }}"></div>
		</div>
		</div>
	</div>

</div>

<br><br>
@include('blogs.comments.index', ['comments' => $comment->replies])

@endforeach

</div>