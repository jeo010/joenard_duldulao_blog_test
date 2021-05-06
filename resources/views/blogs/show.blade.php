@extends("includes.layout")
@section("contents")

<div class="container">
	<div class="row">
		<div class="col" id="blog_body">
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas justo lorem, elementum ut ante in, lacinia suscipit tortor. Vivamus facilisis id quam ac accumsan. Nulla quis nibh mattis, malesuada neque sed, imperdiet mi. Ut quis urna consequat odio tempor ultrices gravida sit amet justo. Donec lobortis, ante id maximus sodales, augue neque interdum arcu, vel tincidunt erat tortor ut ex. Suspendisse posuere diam in semper pulvinar. Phasellus sed sollicitudin orci. Etiam bibendum massa a imperdiet maximus. Ut quis vulputate lectus, ut vehicula nulla. Aliquam nec lorem nunc. Donec diam velit, rhoncus facilisis urna et, dapibus sagittis leo. Curabitur commodo feugiat nulla quis scelerisque.</p>

			<p>Donec sollicitudin convallis velit vel malesuada. In felis ante, congue at dolor ac, euismod maximus mi. Maecenas viverra felis erat, sed laoreet turpis ultrices a. Etiam molestie dignissim pellentesque. Fusce cursus dignissim sem nec porttitor. Sed ultrices ante eget ligula posuere imperdiet. Nulla nunc urna, placerat nec nibh quis, blandit pretium justo. Cras sed porta libero. Cras eget lacus sollicitudin, consectetur risus eget, accumsan lectus. Ut luctus cursus nulla non egestas. In sit amet quam in mi aliquet molestie vel ut arcu. Integer vel lacus eu quam consequat pharetra. Aenean eget nisl maximus, tincidunt urna suscipit, lacinia nisi. Phasellus sed elit pellentesque justo lacinia aliquet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Aenean vel metus vitae purus faucibus varius accumsan nec ante.</p>

			<p>Quisque cursus, ipsum eu pellentesque rutrum, odio neque varius erat, sit amet semper erat dolor vitae mauris. Proin ac leo congue, porttitor magna id, feugiat lacus. Suspendisse et feugiat purus, ut euismod felis. Mauris finibus pellentesque eros, vitae scelerisque tellus suscipit cursus. Aliquam varius commodo euismod. Mauris nec laoreet diam. Quisque placerat mauris in sollicitudin facilisis. Vivamus vel dictum erat. Praesent aliquam eros at tempus eleifend. Proin commodo sollicitudin lorem, ut blandit dolor gravida eget. Integer lorem nisl, interdum pharetra vestibulum et, fringilla sit amet felis. In aliquam tortor sit amet fringilla ultrices. Aenean ut vestibulum ante, id pellentesque nibh.</p>

			<p>Curabitur eu augue tempor, finibus odio sed, condimentum metus. Suspendisse interdum nisl justo, et accumsan eros condimentum nec. Aenean in porttitor risus, id pharetra lectus. Morbi posuere porta consectetur. Nunc mollis a mi eget sollicitudin. Donec dictum eu lectus vel malesuada. Morbi ipsum turpis, imperdiet vel diam ut, mollis finibus justo. Ut semper finibus posuere. Aenean eget lobortis arcu. Nulla nec sapien erat. Sed dictum euismod quam vel commodo. Donec a massa eget arcu iaculis tempus. Vivamus congue lobortis tristique.</p>

			<p>Integer maximus ac metus euismod mollis. Mauris quis accumsan urna. Nunc eget commodo lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Vestibulum id ex lectus. In elementum justo ligula, sed tincidunt diam elementum vitae. Aenean facilisis semper elit quis pharetra.</p>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="comment_form container-fluid" id="comment_form_0">
				<div class="row">
					<input type="text" id="username" placeholder="Username" class="formInput col-3" required>
				</div>
				<div class="row">
					<b style="color:red" class="col-3" id="username_error"></b>
				</div>
				<div class="row">
					<textarea id="comment" class="col-10" placeholder="Comment" rows=10 required></textarea>
				</div>
				<input type="hidden" id="current_depth" value=0>
				<input type="hidden" id="parent_id" value="">
				<div class="row">
					<b style="color:red" id="comment_error" class="col-3"></b>
				</div>
				<div class="row">
					<div class="col"> 
						<br><button id="submit_comment" class="btn btn-primary">Post Comment</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	

		@include('blogs.comments.index', ['comments' => $comments])
</div>

</div>
@endsection

