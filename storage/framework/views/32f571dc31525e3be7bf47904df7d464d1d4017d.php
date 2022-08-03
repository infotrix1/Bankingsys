<?php $__env->startSection('content'); ?>

        <div class="body-wrapper">
        <div class="float-right" style="width: 180px; height: 180px;" >
                    <div class="widget-three box--shadow2 b-radius--5 bg--success text-white" style="padding: 15px;">
                        <div class="widget-three__content">
                            <h2><?php echo e(Auth::user()->wallent_amount); ?> ₦</h2>
                            <p class="text--small">Total Deposit</p>
                        </div>
                    </div>
                </div>
            <div class="bodywrapper__inner">
                <div class="row align-items-center mb-30 justify-content-between">
        </div>
</div>
        <div class="col-xl-6 mb-30">
            <div class="card">
                <div class="card-body" style="position: relative;">
                    <h5 class="card-title">Credit Wallent</h5>
                    <form method="POST" action="<?php echo e(route('pay')); ?>" accept-charset="UTF-8" class="form-horizontal" role="form">
                        <div class="row" style="margin-bottom:40px;">
                            <div class="col-md-8 col-md-offset-2">
                                <p>
                                    <div>
                                    Amount
                                    </div>
                                </p>
                                <input type="hidden" name="email" value="otemuyiwa@gmail.com"> 
                                <input type="hidden" name="orderID" value="345">
                                <input type="text" name="amount" value=""> 
                                <input type="hidden" name="currency" value="NGN">
                                <input type="hidden" name="metadata" value="<?php echo e(json_encode($array = ['key_name' => 'value',])); ?>" > 
                                <input type="hidden" name="reference" value="<?php echo e(Paystack::genTranxRef()); ?>"> 
                                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>"> 
                                <?php echo e(csrf_field()); ?> 
                                <p>
                                    <br>
                                    <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
                                    </button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


    </div><!-- row end-->



    </div>

            </div><!-- bodywrapper__inner end -->
        </div><!-- body-wrapper end -->
    </div>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\bankingsys\resources\views/wallet.blade.php ENDPATH**/ ?>