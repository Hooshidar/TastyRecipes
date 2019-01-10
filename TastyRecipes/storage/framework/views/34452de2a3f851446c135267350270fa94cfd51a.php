<!DOCTYPE html>
<html>
 <head>
    <link property="resetsheet" href="<?php echo e(URL::asset('css/resetsheet.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('css/styles.css')); ?>">
    <meta charset="UTF-8">
    <title>The Tasty Recipes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>

     <body class="body">
         
         
             <header class="mainheader">
                 
             <img src="<?php echo e(URL::asset('img/logo.gif')); ?>""img/logo.gif" alt="toplogo">
        		 
        	 	 <?php if(auth()->check()): ?>
        			 <p class="login-status"><?php echo e(Auth::user()->name); ?></p>
        		 <?php else: ?>
        			 <p class="login-status">You are logged out!</p>
        		 <?php endif; ?>

             
           
             <nav>
                 <ul>
                     <li><a href="/">Home</a></li>
                     <li><a href="/recipes">Recipes</a></li>
                     <li><a href="/calendar">Calender</a></li>
                     <li><a href="/about">About</a></li>
                     <li>
                            <?php if(Route::has('login')): ?>
                                <div class="login">
                                    <?php if(auth()->guard()->check()): ?>
                                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?></a>
                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                            <?php else: ?>
                                        <a href="<?php echo e(route('login')); ?>">Login</a>

                                        <?php if(Route::has('register')): ?>
                                            <a href="<?php echo e(route('register')); ?>">Register</a>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                     </li>
                 </ul>
             </nav>
             
         </header>


            <?php echo $__env->yieldContent('content'); ?>

    </body>
</html> 