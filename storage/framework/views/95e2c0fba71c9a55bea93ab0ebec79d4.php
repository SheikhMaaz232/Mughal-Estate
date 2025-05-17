    

    <?php $__env->startSection('content'); ?>
    <div id="page-container">

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="hero">
            <div class="hero-inner text-center">
                <div class="bg-body-extra-light">
                <div class="content content-full overflow-hidden">
                    <div class="py-4">
                    <!-- Error Header -->
                    <h1 class="display-1 fw-bolder text-city">
                        404
                    </h1>
                    <h2 class="h4 fw-normal text-muted mb-5">
                        We are sorry but the page you are looking for was not found..
                    </h2>
                    <!-- END Error Header -->

                    
                    </div>
                </div>
                </div>
                <div class="content content-full text-muted fs-sm fw-medium">
                <!-- Error Footer -->
                <p class="mb-1">
                    Would you like to let us know about it?
                </p>
                <a class="link-fx" href="javascript:void(0)">Report it</a> or <a class="link-fx" href="<?php echo e(route(name: 'dashboard')); ?>">Go Back to Dashboard</a>
                <!-- END Error Footer -->
                </div>
            </div>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\www\icon-villas\resources\views/errors/404.blade.php ENDPATH**/ ?>