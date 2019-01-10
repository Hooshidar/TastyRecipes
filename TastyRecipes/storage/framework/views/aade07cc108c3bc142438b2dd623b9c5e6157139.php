<?php $__env->startSection('content'); ?> 
     <div class="maincontent">
        <div class="content">
            <article class="topcontent">
                <header>
                    <h2><a href="Calender.php" title="first post">The Tasty Recipes Calender!</a></h2>
                </header>
                    <p>
                        Welcome to <strong>The Tasty Recipes,</strong> get started by heading to our calender page and set up your own food calender or click the header to get started!
                    </p>
            </article> 
        </div>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>