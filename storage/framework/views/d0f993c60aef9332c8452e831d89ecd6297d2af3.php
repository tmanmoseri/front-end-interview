<?php $__env->startSection('page_heading',''); ?>

<?php $__env->startSection('section'); ?>

<div class="col-sm-12">
    <div class="row">


        <div class="col-sm-12">
            <?php $__env->startSection('cotable_panel_title','Cities Table'); ?>
            <?php $__env->startSection('cotable_panel_body'); ?>
            <table class="table table-bordered">
                <thead>

                    <tr class="warning">
                        <td>Cod</td>
                        <td>Name</td>
                        <td>Created At</td>
                        <td>updated_at</td>
                        <td>Action</td>
                    </tr>
                </thead>

                <tbody>
                    <?php $__currentLoopData = $TodoArr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $todo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr class="success">
                      <td><?php echo e($todo->id); ?></td>
                      <td><?php echo e($todo->name); ?></td>
                      <td><?php echo e($todo->created_at); ?></td>
                      <td class="danger"><?php echo e($todo->updated_at); ?></td>
                      <td class="info"><a href="edit/<?php echo e($todo->id); ?>">Edit</a> | <a href="delete/<?php echo e($todo->id); ?>">Delete</a></td>
                  </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <tr class="warning">

                    </tr>
                    <tr>

                    </tr>
                    <tr class="danger">

                    </tr>
                </tbody>
            </table>
            <div class="pagination d-flex justify-content-center">

                <?php echo e($TodoArr->links()); ?>

           </div>

            <?php $__env->stopSection(); ?>
            <?php echo $__env->make('widgets.panel', array('header'=>true, 'as'=>'cotable'), array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>