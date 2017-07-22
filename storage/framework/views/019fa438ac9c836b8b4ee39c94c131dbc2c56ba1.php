<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create new task</div>

                <div class="panel-body">
                    <?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
                    <?php echo Form::model($post,[
                        'route' => ['update',$post->_id],
                        'method' => 'put'
                      ]); ?>


                    <?php echo Form::textarea('post', null, [
                        'class' => 'form-control', 
                        'placeholder' => 'Write a post', 
                        'required']
                        ); ?>


                    <?php echo e(Form::text('completion_time', date('d-M-Y'),
                      ['class' => 'form-control'])); ?>


                    <?php echo Form::submit('Submit', ['class'=>'form-control btn-success']); ?>


                    <?php echo Form::close(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>