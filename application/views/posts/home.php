<?php

foreach($data_post as $post){

    $Title=$post->title;
    $Body=$post->body;
}


?>

<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
              <?php
              if (isset($message)) {
                echo '<div class="alert alert-info fade in">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>Info!</strong> '.$message.'
                      </div>';
              }
              ?>
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                <?php foreach ($data_post as $post) {
                ?>
                <div class="list-group">
        <div class="list-group-item">
          <h3><a href='<?= base_url("posts/show/$post->id")?>'><?=$post->title?></a>
          </h3>
          <p><?= $post->created_at ?> By <a href=""><?= $post->author_id ?></a></p>
        </div>
        <div class="list-group-item">
          <article>
            <?= $post->body ?>
            
          </article>
        </div>
      </div>

                <?php
                }
                 ?>
              <div class="row">
              <div class="col-md-12 text-center">
                <?php echo $this->pagination->create_links();?>
              </div>
              </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>

