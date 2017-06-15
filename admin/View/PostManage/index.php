<br>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Posts Table
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<table id="dataTable" class="table table-striped table-bordered table-hover no-footer dtr-inline" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Tags</th>
							<th>Author</th>
							<th class="no-sort">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($posts as $post) { ?>
							<tr>
								<td><?php echo $post['Posts']['id']; ?></td>
								<td><?php echo $post['Posts']['title']; ?></td>
								<td>
								<?php 
									$tags = explode(',', $post['Posts']['tags']); 
									if (isset($tags) && $tags) {
										$tags = implode('</span> <span class="label label-info">', $tags);
										$tags = '<span class="label label-info">'.$tags.'</span>';
									}
									echo $tags;
								?>
								</td>
								<td><?php echo $post['Posts']['author_id']; ?></td>
								<td><?php echo "<a href='".$this->Html->url('/post-manage/details/'.$post['Posts']['id'])."' class='btn btn-xs btn-primary'>View</a>"; ?></td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
			<!-- /.panel-body -->
		</div>
	<!-- /.panel -->
	</div>
<!-- /.col-lg-12 -->
</div>