	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h2>Add a showcase channel</h2>
				<p>Enter your channel's name.</p>
			</div>
		</div>
	</div>

	<form action="<?php echo BASE_URL;?>connect/add/showcase" method="post">
	<div class="container">

		<div class="row">
			
			<div class="col-xs-12">
				<input id="name" name="name" type="text" placeholder="Name" class="form-control">
			</div>

			<div class="col-xs-12 spacer-sm">
				<button name="type" type="submit" value="login" class="btn btn-primary">Add</button>
			</div>

			
		</div>
	</div>
	</form>