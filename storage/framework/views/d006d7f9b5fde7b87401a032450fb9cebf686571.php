<?php $__env->startSection('content'); ?>
        <div class="body-wrapper">
        <div>

<div class="row align-items-center mb-30 justify-content-between">
<div class="col-lg-6 col-sm-6">
<h6 class="page-title">Transection History</h6>
</div>
</div>

    <div class="row">

<div class="col-lg-12">
<div class="card">
<div class="card-body p-0">
    <div class="table-responsive--sm table-responsive">
        <table class="table table--light style--two">
            <thead>
            <tr>
                <th>Transection ID</th>
                <th>Amount</th>
                <th>Payment Method</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <tr>
                 <td><?php echo e($d->trans_id); ?></td>
                 <td><?php echo e($d->amount); ?></td>
                 <td><?php echo e($d->channel); ?></td>
                <td data-label="Status">
                <span class="text--small badge font-weight-normal badge--success"><?php echo e($d->status); ?></span>
                </td>
                <td><?php echo e($d->created_at); ?></td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </tbody>
        </table><!-- table end -->
    </div>
</div>
            </div><!-- card end -->
</div>
</div>



</div>
        </div>
</div>




    </div>

            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bankingsys\resources\views/trans.blade.php ENDPATH**/ ?>