

<?php $__env->startSection('title'); ?> Материал <?php $__env->stopSection(); ?>
<?php $__env->startSection('h1'); ?> Добавить материал <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="row">
                <div class="col-lg-5 col-md-8">
                    <form action="<?php echo e(route('material-form')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                        <div class="form-floating mb-3">
                            <select name="type" class="form-select" id="floatingSelectType">    
                                <option selected="" disabled>Выберите тип</option>
                                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($el->id); ?>"><?php echo e($el->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <label for="floatingSelectType">Тип</label>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите значение
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <select name="category" class="form-select" id="floatingSelectCategory">
                                <option selected="" disabled>Выберите категорию</option>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $res): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($res->id); ?>"><?php echo e($res->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- <option value="2">Деловые/Найм</option>
                                <option value="3">Деловые/Реклама</option>
                                <option value="4">Деловые/Управление бизнесом</option>
                                <option value="5">Деловые/Управление людьми</option>
                                <option value="5">Деловые/Управление проектами</option>
                                <option value="6">Детские/Воспитание</option>
                                <option value="7">Дизайн/Общее</option>
                                <option value="8">Дизайн/Logo</option>
                                <option value="9">Дизайн/Web дизайн</option>
                                <option value="10">Разработка/PHP</option>
                                <option value="11">Разработка/HTML и CSS</option>
                                <option value="12">Разработка/Проектирование</option> -->
                            </select>
                            <label for="floatingSelectCategory">Категория</label>
                            <div class="invalid-feedback">
                                Пожалуйста, выберите значение
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="name" class="form-control" placeholder="Напишите название" id="floatingName">
                            <label for="floatingName">Название</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="text" name="author" class="form-control" placeholder="Напишите авторов" id="floatingAuthor">
                            <label for="floatingAuthor">Авторы</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <div class="form-floating mb-3">
                    <textarea class="form-control" name="text" placeholder="Напишите краткое описание" id="floatingDescription" style="height: 100px"></textarea>
                            <label for="floatingDescription">Описание</label>
                            <div class="invalid-feedback">
                                Пожалуйста, заполните поле
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Добавить</button>
                    </form>
                </div>
            </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('maket.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Server\OSPanel\domains\zadanie\resources\views/create-material.blade.php ENDPATH**/ ?>