<br><br>
<div class="row">
	<div class="col-md-9">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Form->create('Posts'); ?>		<div class="panel panel-default">
			<div class="panel-heading">New Post</div>
			<div class="panel-body">
					<div class="form-group">
						<label for="email">Title: </label>
						<?php echo $this->Form->input('title', array('label' => false, 'class' => 'form-control', 'required' => true)); ?>
					</div>
					<div class="form-group">
						<label for="email">Content: </label><?php echo $this->Form->input('content', array(
							'rows' => 20, 
							'label' => false, 
							'type' => 'textarea',
							'class' => 'form-control no-resize', 
							'required' => true 
							)
						); ?>
					</div>
					<!-- <textarea id="txtEditor"></textarea>  -->					
			</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="panel panel-default">
			<div class="panel-heading">Post Action</div>
			<div class="panel-body">
				<button type="submit" name="savepost" value="draft" class="btn btn-default btn-block">Save as Draft</button>
				<button type="submit" name="savepost" value="publish" class="btn btn-primary btn-block">Publish</button>
			</div>
		</div>
	 <?php echo $this->Form->end(); ?>

		<!-- <div class="panel panel-default">
			<div class="panel-heading">Tags</div>
			<div class="panel-body" ng-app="myShoppingList" ng-controller="myCtrl">
				<div class="form-group">
					<div class="input-group">
						<input type="text" class="form-control" ng-model="addMe">
						<span class="input-group-addon" ng-click="addItem()">Add</span>
					</div>
				</div>
				<ul style="position: relative;">
					<li class="label label-default" ng-repeat="x in products">{{x}}<span ng-click="removeItem($index)"> ×</span> </li>
				</ul>
			</div>
		</div> -->
	</div>
</div>