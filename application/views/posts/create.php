<h2>Create A Post</h2>

<?= form_open(); ?>

<div class='row'   ><div class=' col-xs-12 col-sm-6 col-md-4'   ><div class='form-group'   >
		<label for=''>Id</label>
			<input type='number' class='form-control' name='id' />
		</div>
<div class='form-group'   >
		<label for=''>Title</label>
			<input type='text' class='form-control' name='title' />
		</div>
<div class='form-group'   >
		<label for=''>Body</label>
			<textarea name='body' class='form-control'></textarea>
		</div>
<div class='form-group'   >
		<label for=''>Deleted</label>
			<input type='number' class='form-control' name='deleted' />
		</div>
</div></div>

	<input type="submit" name="submit" value="Create Post" class="btn btn-primary" />
	&nbsp;or&nbsp;
	<a href="<?= site_url('posts') ?>">Cancel</a>

<?= form_close(); ?>
