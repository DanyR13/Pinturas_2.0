<nav style="background-color: #804A75">
        <?php $__env->startSection('navbar'); ?>
            <div id="menu">
            <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Pintores</a>
            <div id="submenu">
                <ul>
            <li><a href="<?php echo e(action('PruebasController@picasso')); ?>">Pablo Picasso</a>
            <li><a href="<?php echo e(action('PruebasController@van')); ?>">Vincent van Gogh</a>
            <li><a href="<?php echo e(action('PruebasController@vinci')); ?>">Leonardo da Vinci</a>
            <li><a href="<?php echo e(action('PruebasController@rembr')); ?>">Rembrandt</a><br>
            <li><a href="<?php echo e(action('PruebasController@kahlo')); ?>">Frida Kahlo</a>
                </ul>
            </div>
            </li>
            </ul>
            </div>
        <?php echo $__env->yieldSection(); ?>

    </nav>
<?php /**PATH C:\laragon\www\Pintores\resources\views/includes/navbar.blade.php ENDPATH**/ ?>