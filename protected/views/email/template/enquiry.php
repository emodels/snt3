<style type="text/css">
    .column { float: left; font-family: calibri,sans-serif; padding-left: 10px; padding: 5px; }
    .column_left { float: left; width: 150px; background-color: #e6e6e6; font-family: calibri,sans-serif; padding: 5px; }
    .clearfix { clear: both; }
</style>
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
    <div class="column_left">Job Title</div>
    <div class="column"><?php echo $model->job_title; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Company</div>
    <div class="column"><?php echo $model->company; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Best Time to Call</div>
    <div class="column"><?php echo $model->best_time_to_call; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Phone</div>
    <div class="column"><?php echo $model->phone; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Mobile</div>
    <div class="column"><?php echo $model->mobile; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Email</div>
    <div class="column"><?php echo $model->email; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Nature of Message</div>
    <div class="column"><?php echo $model->nature_of_message; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Subject</div>
    <div class="column"><?php echo $model->subject; ?></div>
    <div class="clearfix"></div>
</div>
<div>
    <div class="column_left">Message</div>
    <div class="column"><?php echo $model->message; ?></div>
    <div class="clearfix"></div>
</div>