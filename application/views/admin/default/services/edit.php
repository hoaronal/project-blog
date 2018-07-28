<div class="row">
    <div class="col-md-12">
         <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Edit Menu</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url('admin/services/edit')?>" method="post">
            <?php echo form_hidden('id', $service['id']) ?>
                <div class="box-body">
                    <?php echo message_box(validation_errors(),'danger'); ?>
                    <div class="form-group">
                        <label for="category_name">Name</label>
                        <?php echo form_input(array('name' => 'name','class' => 'form-control', 'value' => set_value('name', isset($service['name']) ? $service['name'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="service_name">Content</label>
                        <?php echo form_input(array('content' => 'content','class' => 'form-control', 'value' =>  set_value('name', isset($service['content']) ? $service['content'] : ''))); ?>
                    </div>
                    <div class="form-group">
                        <label for="category_status">Status</label>
                        <?php echo form_dropdown('status', $status, $service['status'],array('class' => 'form-control')); ?>
                    </div>
                </div><!-- /.box-body -->

                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit</button> 
                    <button type="button" class="btn btn-default" onclick="javascript:history.back()">Back</button>
                </div>
            </form>
        </div><!-- /.box -->
    </div>
</div>