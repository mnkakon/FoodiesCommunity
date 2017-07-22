<?php $__env->startSection('content'); ?>


<?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

                    <a class="btn btn-success pull-right" href="<?php echo route('create'); ?>">Add task</a>
                
                    <a class="btn btn-success pull-right" href="<?php echo route('notification'); ?>">Task categories
                    </a>

<br>
<div id="wrapper">
<table id="example" class="display">
<thead>

     <tr bgcolor="#00B0B0">
    <th width="50%"><h4><strong>Task to do</strong></h4></th>
   <th><h4><strong>Task category</strong></h4></th>
    <th><h4><strong>Task completion time</strong></h4></th>
    <th><h4><strong>Edit task</strong></h4></th>
    <th><h4><strong>Delete task</strong></h4></th>
  </tr>
</thead>
<tbody>

<ol>
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
    <td max-width="1px"> <?php echo $post->post; ?></td>
     <td >  <?php if($post->category == 1 ): ?> personal <?php endif; ?></td></td>
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