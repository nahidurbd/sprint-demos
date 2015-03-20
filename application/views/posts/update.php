<h2>Edit Post</h2>

<?= form_open(); ?>

<div class='row'   ><div class=' col-xs-12 col-sm-6 col-md-4'   ><div class='form-group'   >
		<label for=''>Id</label>
			<input type='number' name='id' class='form-control' value='<?= set_value('id', $item->id ) ?>' />
		</div>
<div class='form-group'   >
		<label for=''>Title</label>
			<input type='text' name='title' class='form-control' value='<?= set_value('title', $item->title ) ?>' />
		</div>
<div class='form-group'   >
		<label for=''>Body</label>
			<textarea  class='form-control' name='body'><?= set_value('body') ?></textarea>
		</div>
<div class='form-group'   >
		<label for=''>Deleted</label>
			<input type='number' name='deleted' class='form-control' value='<?= set_value('deleted', $item->deleted ) ?>' />
		</div>
</div></div>
<input type="submit" name="submit" class="btn btn-primary" value="Save Post" />
&nbsp;or&nbsp;
<a href="<?= site_url('posts') ?>">Cancel</a>

<?= form_close(); ?>
