<?php $__env->startSection('content'); ?>
     <div class="maincontent">
            <article class="topcontentRecipes">
                <header>
                    <h2><a href="#" title="first post">Ingredients</a></h2>
                </header>
                    <p>
                        <?php echo e($recipes->ingrediens); ?>

                    </p>
            </article>
     
            <article class="nextcontentRecipes">
                <header>
                    <h2><a href="#" title="second post">Step by step</a></h2>
                </header>
                    <p>
                        <?php echo e($recipes->steps); ?>

                    </p>
            </article>
         
            <article class="thirdcontentRecipes">
                <header>
                    <h2><a href="#" title="third post">User comments:</a></h2>

                    <?php if(auth()->check()): ?>
                        <form method="POST" action="/recipe/<?php echo e($recipes->id); ?>">

                            <?php echo csrf_field(); ?>

                            <div>
                                <textarea type="Text" name="comment" placeholder="Write comment" required></textarea>
                            </div>


                            <div>
                                <button type="submit">Comment</button>
                            </div>
                        </form>
                    <?php endif; ?>


                        <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($comment->cid == $recipes->id): ?>
                                <div class="commentBox">
                                <p>
                                    <?php echo e($comment->username); ?>

                                    <br>
                                    <?php echo e($comment->text); ?>

                                    <br>
                                    <?php echo e($comment->created_at); ?>

                                </p>
                            <?php if(auth()->check()): ?>
                            <?php if($comment->username == auth()->user()->name): ?>
                                <form class="delete-form" method="POST" action="/recipe/<?php echo e($recipes->id); ?>/<?php echo e($comment->id); ?>">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" name="commentDelete">Delete</button>
                                </form>
                            <?php endif; ?>
                            <?php endif; ?>
                            
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </header>
            </article>
     </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>