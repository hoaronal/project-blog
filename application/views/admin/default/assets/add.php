<div class="row">
	<div class="col-md-12">
		<!-- general form elements -->
		<div class="box box-primary">
			<div class="box-header">
				<h3 class="box-title">New Post</h3>
			</div><!-- /.box-header -->
			<div class="box-body">
				<div class="form-group">
					<label for="post_body">Body</label>
					<textarea name="body" class="form-control txteditor" id="post_body" placeholder="Body" rows="10"><?php echo set_value('body');?></textarea>
				</div>
			</div><!-- /.box-body -->
		</div><!-- /.box -->
	</div>
</div>
<!-- Line Control WYSIWYG -->
<script src="<?php echo $base_assets_url;?>plugins/line_control_editor/editor.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$("button:submit").click(function(){
			$('.txteditor').text($('.txteditor').Editor("getText"));
		});

		var editor = $(".txteditor").Editor();
		$('.txteditor').Editor("setText", "<?php echo !empty($post['body']) ? addslashes($post['body']) :'';?>");
	})

</script>
