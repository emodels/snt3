<style type="text/css">
    .column { float: left; font-family: calibri,sans-serif; padding-left: 10px; padding: 5px; }
    .column_left { float: left; width: 150px; background-color: #e6e6e6; font-family: calibri,sans-serif; padding: 5px; }
    .clearfix { clear: both; }
</style>
<div>
    <div class="column_left">Email</div>
    <div class="column"><?php echo $model->email; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">First Name</div>
    <div class="column"><?php echo $model->first_name; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Last Name</div>
    <div class="column"><?php echo $model->last_name; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Mobile</div>
    <div class="column"><?php echo $model->mobile; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Desired State of work</div>
    <div class="column"><?php echo $model->desired_state; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Status</div>
    <div class="column"><?php echo $model->status; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Expertise Category</div>
    <div class="column"><?php echo $model->expertise_category; ?></div>
    <div class="clearfix"></div>
</div>