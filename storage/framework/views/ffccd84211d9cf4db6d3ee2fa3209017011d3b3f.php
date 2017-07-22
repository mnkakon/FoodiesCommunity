<?php $__env->startSection('content'); ?>
<?php
 $resId=$currentIndex; 
?>

<?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <a class="btn btn-success pull-right" href="<?php echo route('create',array('id'=>$resId)); ?>">Add Review</a>

  <a class="btn btn-success pull-right" href="<?php echo route('notification'); ?>">Go To Restaurent List
  </a>

<br>
<div id="wrapper">
<table id="example" class="display">
<thead>

     <tr bgcolor="#00B0B0">
    <th width="50%"><h4><strong>Food Details</strong></h4></th>
   <th><h4><strong>User Name</strong></h4></th>
    <th><h4><strong>Posting time</strong></h4></th>
    <th><h4><strong>Edit Review</strong></h4></th>
    <th><h4><strong>Delete Review</strong></h4></th>
  </tr>
</thead>
<tbody>

<ol>
  <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td max-width="1px"> <?php echo $post->post; ?></td>
      <td >  <?php if($post->category == $resId): ?> <?php echo e($post->username); ?> <?php endif; ?></td></td>
      <td><?php echo $post->completion_time; ?></td>
      <td> <?php if($post->user_id == Auth::user()->_id ): ?>
        <a class="btn btn-xs btn-warning" href="<?php echo route('edit', $post->_id); ?>">Edit</a>
      <?php endif; ?></td>
      <td> <?php if($post->user_id == Auth::user()->_id): ?>
        <a class="btn btn-xs btn-danger" href="<?php echo route('delete', $post->_id); ?>">Delete</a>
      <?php endif; ?></td>

    </tr>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</ol>
</tbody>
    
</table>


</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>