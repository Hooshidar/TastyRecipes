<?php $__env->startSection('content'); ?>     
     <div class="maincontent">
        <div class="content">
            <article class="topcontent">
                <header>
                    <h2><a href="/recipe/3" title="first post">Pancakes</a></h2>
                    <h2><a href="/recipe/1" title="first post">Meatballs</a></h2>
                </header>
            </article> 
        </div>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>