<?php $__env->startSection('content'); ?>


<?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 10px;
    position: center;
}

.row{
    width: 30%;
    padding-left: 10px;
}
</style>
<div class="row">
               <ul> <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php echo e(route('filterednotification', 1)); ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/personal.jpg" class="img-responsive" alt="">
                    </a>
                    <div  class="portfolio-caption">
                        <h4>Personal Tasks</h4>
                       
                    </div>
                </div>
               <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php echo e(route('filterednotification', 2)); ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/study.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Study Tasks</h4>
                     
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php echo e(route('filterednotification', 3)); ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/shopping.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Shopping Tasks</h4>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php echo e(route('filterednotification', 4)); ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/sports.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Sports Tasks</h4>
                       
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="<?php echo e(route('filterednotification', 5)); ?>" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="img/households.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Household tasks</h4>

                    </div>
                </div>
               
            </div></ul>
        </div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>