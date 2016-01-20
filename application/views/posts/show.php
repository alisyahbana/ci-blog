<?php
// foreach ($data_post as $post) {
// 	$title=$post->title;
// 	$body=$post->body;
// 	$date=$post->created_at;
// 	$author=$post->author_id;
// 	$id=$post->id;
// }
?>

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"><h3><?=$data_post->title?>
                	<a href='<?= base_url("posts/edit/$data_post->id")?>' role='button' class='btn btn-default' style="float: right">Edit Post</a>
                </h3>

                	<p><?=$data_post->created_at?> By <a href=""><?=$data_post->author_id?></a></p>

                </div>
                <div class="panel-body">
                	<?= $data_post->body ?>
				</div>
			</div>
		</div>
	</div>
</div>