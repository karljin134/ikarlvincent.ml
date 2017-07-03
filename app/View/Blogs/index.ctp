<div class="container page-content">
	<div class="row">

		<!-- Blog Entries Column -->
		<div class="col-md-9">

			<h1 class="page-header">Blog Posts
				<small>Collection of Knowledge </small>
			</h1>

			<?php foreach ($posts as $post) {
			$post = $post['Posts']; 
			$author = $authors[$post['author_id']];
			?>
			<div class="col-md-4">
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">
  			<center><h2><a href="<?php echo $this->Html->url('/blog/view/'.$post['id']); ?>"><?php echo $post['title']; ?></a></h2></center>
  			<center><small>by <?php echo $author['name']; ?></small></center><br>
        <div class="text-wrap">
          <p class="limit-text"><?php echo $post['content']; ?>. Additional content to test long descriptions for the blog post.</p>
        </div>
        <center><a class="btn" href="<?php echo $this->Html->url('/blog/view/'.$post['id']); ?>">Read More <span class="glyphicon glyphicon-chevron-right"></span></a></center>
        <p class="post-time"><span class="glyphicon glyphicon-time"></span> Posted on August 28, 2013 at 10:00 PM</p>
      </div>

	<?php } ?>
      <!-- Pager -->
      <div class="col-md-12">
        <ul class="pager">
          <li class="previous">
            <a href="#">← Older</a>
          </li>
          <li class="next">
            <a href="#">Newer →</a>
          </li>
        </ul>
      </div>
    </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">

            <!-- Blog Search Well -->
            <div class="well">
                <h4>Blog Search</h4>
                <div class="input-group">
                    <input type="text" class="form-control">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <span class="glyphicon glyphicon-search"></span>
                    </button>
                    </span>
                </div>
                <!-- /.input-group -->
            </div>

            <!-- Blog Categories Well -->
            <div class="well">
                <h4>Blog Categories</h4>
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                            <li><a href="#">Category Name</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-lg-6 -->
                </div>
                <!-- /.row -->
            </div>

            <!-- Side Widget Well -->
            <div class="well">
                <h4>Side Widget Well</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
            </div>

        </div>

    </div>
    <!-- /.row -->

    <hr>


</div>