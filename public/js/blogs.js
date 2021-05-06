$(document).ready(function(){

	$('body').delegate('.create_comment', 'click', function () {
		$(".comment_form").html("");
		var comment_id=$(this).data("comment");
		var parent_id=$(this).data("parentid");
		var current_depth=$(this).data("currentdepth");
		generateCommentsForm(comment_id,parent_id,current_depth);
		if(current_depth>0){
			$("#comment_form_0").html("<button class='create_comment btn btn-primary' data-parentid='' data-currentdepth=0 data-comment='0'>Comment on Blog</button>");
		}
	})

	$('body').delegate('#submit_comment', 'click', function () {
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});
		$("#username_error").text("");
		$("#comment_error").text("");
		var username=$("#username").val();
		var comment=$("#comment").val();
		var current_depth=$("#current_depth").val();
		var parent_id=$("#parent_id").val();
		//alert(username);

		$.ajax({
			method: 'POST',
			url: '/blogs/comments/save',
			dataType: "json",
			data: {
				"username":username, 
				"comment":comment,
				"current_depth":current_depth,
				"parent_id":parent_id },
				success: function (response) {
					//alert(response.status)
					$(".comment_form").html("");
					generateCommentsForm(0,"",0);
					$("#comment_section").load("/blogs/comments");
				},
				error: function (response) {
					//alert(response.responseJSON.errors);
					$("#username_error").text(response.responseJSON.errors.username);
					$("#comment_error").text(response.responseJSON.errors.comment);
					
				}
			});

	})

	function generateCommentsForm(comment_id,parent_id,current_depth){
		var html_form="";
		html_form=html_form+"<div class='row'>";
		html_form=html_form+"<input type='text' id='username' placeholder='Username' class='formInput col-3' required>";
		html_form=html_form+"</div>";
		html_form=html_form+"<div class='row'>";
		html_form=html_form+"<b style='color:red' class='col-3' id='username_error'></b>";
		html_form=html_form+"</div>";
		html_form=html_form+"<div class='row'>";
		html_form=html_form+"<textarea id='comment' class='col-10' placeholder='Comment' rows=10 required></textarea>";
		html_form=html_form+"</div>";
		html_form=html_form+"<input type='hidden' id='current_depth' value='"+current_depth+"'>";
		html_form=html_form+"<input type='hidden' id='parent_id' value='"+parent_id+"'>";
		html_form=html_form+"<div class='row'>";
		html_form=html_form+"<b style='color:red' id='comment_error'></b>";
		html_form=html_form+"</div>";
		html_form=html_form+"<div class='row'>";
		html_form=html_form+"<div class='col'>";
		html_form=html_form+"<br><button id='submit_comment' class='btn btn-primary'>Post Comment</button>";
		html_form=html_form+"</div>";
		html_form=html_form+"</div>";

		$("#comment_form_"+comment_id).html(html_form);
	}
})