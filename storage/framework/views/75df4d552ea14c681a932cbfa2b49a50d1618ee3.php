

<?php $__env->startSection('title'); ?> Теги <?php $__env->stopSection(); ?>
<?php $__env->startSection('h1'); ?> Добавить тег <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
                <div class="col-lg-5 col-md-8">
                    <form>
                        <div class="form-floating mb-3">
                            <input type="text" class="form-control" placeholder="Напишите название" id="floatingName">
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
<?php echo $__env->make('maket.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\OSPanel\domains\zadanie\zadanie\resources\views/create-tag.blade.php ENDPATH**/ ?>