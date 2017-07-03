<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<div class="text-center error">
	<h1 class="err-code">404</h1>
	<h2><?php echo 'Page '.$message; ?></h2>
	<strong><?php //echo __d('cake', 'Error'); ?> </strong>
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<?php printf(
				__d('cake', "Unfortunately we're having trouble loading the page you are looking for. Please wait a moment and try again or use action below." ),
				"<strong>'{$url}'</strong>"
			); ?>
				
		</div>
		</div><br><br>
	<div class="row">
		<div class="col-md-3 col-md-offset-3">
			<button class="btn btn-outline btn-xl page-scroll btn-custom res-equal-width">Back to Dashboard</button>&nbsp;&nbsp;&nbsp;
		</div>
		<div class="col-md-3 res-margin">
			<button class="btn btn-outline btn-xl page-scroll btn-custom res-equal-width" id="err-back">To Previous Page</button>
		</div>
	</div><br><br>
	<div class="row">
		<p><small class="text-xs">&copy;</small><small> All Rights Reserved iKarlVincent 2017</small></p>
	</div>
</div>
<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>
