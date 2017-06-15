<br>
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				Users Table
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<table id="dataTable" class="table table-striped table-bordered table-hover no-footer dtr-inline" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th class="no-sort">Actions</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($users as $user) { ?>
							<tr>
								<td><?php echo $user['Users']['id']; ?></td>
								<td><?php echo $user['Users']['name']; ?></td>
								<td><?php echo $user['Users']['email']; ?></td>
								<td><?php echo "<a href='".$this->Html->url('/user-manage/details/'.$user['Users']['id'])."' class='btn btn-xs btn-primary'>View</a>"; ?></td>
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