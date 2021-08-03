

<?php $__env->startSection('title'); ?> Категории <?php $__env->stopSection(); ?>
<?php $__env->startSection('h1'); ?> Добавить категорию <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
    <div class="col-lg-5 col-md-8">
        <form action="<?php echo e(route('add-category')); ?>" method="post">
            <?php echo csrf_field(); ?>
            <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control" placeholder="Напишите название" id="floatingName">
                <label for="floatingName">Название</label>
                <div class="invalid-feedback">
                    Пожалуйста, заполните поле
                </div>
            </div>
            <button class="btn btn-primary" type="submit">Добавить</button>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('maket.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\OSPanel\domains\zadanie\resources\views/create-category.blade.php ENDPATH**/ ?>