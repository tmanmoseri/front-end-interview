<?php $__env->startSection('page_heading','Enter New Citie Name'); ?>

<?php $__env->startSection('section'); ?>
<div class="col-sm-12">
<div class="row">
    <div class="col-lg-6">
       
            <form role="form" action="../edit_todo/<?php echo e($TodoArr_name->id); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                <div class="row">
                    <input type="text" name="name" class="form-control" value="<?php echo e($TodoArr_name->name); ?>">
             </div>
         </div>
                <div class="form-group">
                    <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
                </div>
        </form>
       
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>