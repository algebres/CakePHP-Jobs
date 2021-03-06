<h1>Finalize Your CakePHP Job - Review and Submit</h1>

<p>Below is how your job will look once active. This job will remain viewable for 30 days.</p>

<hr />

<h1><?php echo h($job['Job']['jobtitle']); ?></h1>

<hr />
<p>Job located in: <?php echo h($job['Job']['joblocation']); ?></p>
<p><?php echo h($job['Job']['jobtype']); ?></p>
<p><?php echo date('M d, Y'); ?></p>
<hr />

<?php echo $job['Job']['jobdesc']; ?>

<?php echo $this->Jobs->howToApply(h($job['Job']['applyemail']), h($job['Job']['applyurl'])); ?>

<?php
echo $this->Form->create('Job', array('id'=>'ReviewForm'));
echo $this->Form->input('review', array('type'=>'hidden', 'value'=>'review'));
echo $this->Form->submit('Finish', array('div'=>false, 'class'=>'button'));
echo $this->Form->submit('Cancel', array('div'=>false, 'name'=>'Cancel', 'class'=>'button'));
echo $this->Form->end();
?>