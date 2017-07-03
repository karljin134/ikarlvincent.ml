<br>
<div class="row">
	<div class="col-sm-12 toppad" >
		<div class="panel panel-info">
			<div class="panel-heading">
				<h1 class="panel-title text-center"><?php echo $users['Users']['name']; ?></h1>
			</div>
			<div class="panel-body">
				<div class="row"><br>
					<div class="col-md-3 col-lg-3" align="center"> <img alt="User Pic" class="img-circle" src="<?php echo $this->webroot; ?>img/karl.jpg"> </div>
					<div class=" col-md-9 col-lg-9 "> 
						<table class="table table-user-information">
							<tbody>
								<tr>
									<td>Department:</td>
									<td>Programming</td>
								</tr>
								<tr>
									<td>Hire date:</td>
									<?php $hd = strtotime($users['Users']['created']); ?>
									<td><?php echo date("F d, Y", $hd); ?></td>
								</tr>

								<tr>
									<td>Date of Birth</td>
									<?php $dob = strtotime($users['Users']['birthdate']); ?>
									<td><?php echo date("F d, Y", $dob); ?></td>
								</tr>

								<tr>
									<td>Gender</td>
									<td><?php echo isset($users['Users']['gender']) ? $users['Users']['gender'] : "<small><i>none</i></small>" ; ?></td>
								</tr>
								<tr>
									<td>Home Address</td>
									<td><?php echo isset($users['Users']['address']) ? $users['Users']['address'] : "<small><i>none</i></small>" ; ?></td>
								</tr>
								<tr>
									<td>Email</td>
									<td>
										<a href="mailto:<?php echo $users['Users']['email']; ?>"><?php echo $users['Users']['email']; ?></a>
									</td>
								</tr>
									<td>Phone Number</td>
									<td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
									</td>
								
							</tbody>
						</table>
						<a href="#" class="btn btn-primary">My Sales Performance</a>
						<a href="#" class="btn btn-primary">Team Sales Performance</a>
					</div>
				</div>
			</div>
			<div class="panel-footer">
				<a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
				<span class="pull-right">
					<a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
					<a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
				</span>
			</div>
		</div>
	</div>
</div>