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
                <div class="panel-heading">Add New Post</div>

                <div class="panel-body">

				<form action="store" method="post">
					<div class="form-group">
						
						<input type="hidden" name="author_id" value="<?php echo $id;?>">
						<input required="required" placeholder="Enter title here" type="text" name="title" class="form-control"/>
					</div>
					<div class="form-group">
						<textarea name='body' class="form-control"></textarea>
					</div>
					<input type="submit" name="publish" class="btn btn-success" value="Publish"/>
					<input type="submit" name="save" class="btn btn-default" value = "Save Draft" />
				</form>

				</div>
			</div>
		</div>
	</div>
</div>