<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ 
	selector:'textarea',
	plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste"],
   	toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
	 });</script>

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Post</div>

                <div class="panel-body">

				<form action='<?= base_url("posts/update/$data_post->id")?>' method="post">
					<div class="form-group">
						
						<input type="hidden" name="author_id" value="<?= $data_post->author_id?>">
						<input required="required" placeholder="Enter title here" type="text" name="title" class="form-control" value="<?= $data_post->title?>"/>
					</div>
					<div class="form-group">
						<textarea name='body' class="form-control"><?= $data_post->body?></textarea>
					</div>
					<input type="submit" name="publish" class="btn btn-success" value="Update"/>
					<input type="submit" name="save" class="btn btn-default" value = "Save Draft" />
					<a href='<?= base_url("posts/delete/$data_post->id")?>' role='button' class='btn btn-danger'>Delete Post</a>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>