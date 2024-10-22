<?php if($submit_form): ?>

<form class="forms-sample" action="<?php echo e(route('admin.product.update')); ?>" id="prodsssuct-form-submit" method="POST"
    enctype="multipart/form-data" >
    <?php else: ?>
    <form class="forms-sample" action="#" id="product-form" method="POST" onsubmit="return false"
    enctype="multipart/form-data" >
    <?php endif; ?>
<input type="hidden" name="id" id="id" value="<?php echo e($product['id']); ?>">
<input type="hidden" name="_token" id="_token" value="<?php echo e(csrf_token()); ?>">


    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-6 mt-3">
                        <label class="form-label"><?php echo e(__('Product Name')); ?>*</label>
                        <div class="row">
                            <div class="col-10">
                                <input class="form-control mb-4 mb-md-0 col-6"
                                    name="name" id="name" onchange="make_slug()" value="<?php echo e($product['name']); ?>"
                                    placeholder="<?php echo e(__('Enter Product Name')); ?>"
                                       />
                            </div>
                        </div>

                    </div>



                    <div class="col-md-6 mt-3">
                        <label class="form-label"><?php echo e(__('Slug')); ?>*</label>
                        <div class="row">
                            <div class="col-10">
                                <span id="slug-span"><?php echo e($product['slug']); ?></span>
                                <input type="hidden" id="slug" name="slug" placeholder="Text" value="<?php echo e($product['slug']); ?>"
                                class="form-control">
                                <?php if(false): ?>
                                <input class="form-control mb-4 mb-md-0 col-6"
                                    name="slug"
                                    placeholder="<?php echo e(__('Product Slug')); ?>"
                                    value="product-<?php echo e(Str::random(3) . substr(time(), 6, 8) . Str::random(3)); ?>"
                                      />
                                     <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-6 mt-3">
                        <label class="form-label"><?php echo e(__('Title')); ?>*</label>
                        <div class="row">
                            <div class="col-10">
                                <input class="form-control mb-4 mb-md-0 col-6"
                                    name="title" id="title" value="<?php echo e($product['title']); ?>"
                                    placeholder="<?php echo e(__('Enter Product Title')); ?>"
                                     />
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-3"  >
                        <label class="form-label"><?php echo e(__('Price')); ?>*</label>
                        <div class="row">
                            <div class="col-10" style="height: 100% !important">
                                <div>
                                    <input name="price" id="price"  value="<?php echo e($product['price']); ?>"
                                        class="form-control mb-4 mb-md-0 col-6"
                                        placeholder="<?php echo e(__('Enter Product Price')); ?>"
                                        value="0"
                                         />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-6">
                                <label
                                class="form-label row">&nbsp;&nbsp;<?php echo e(__('Photo')); ?>*</label>
                            <input type="file" name="photo" id="photo"
                                style="cursor: pointer !important;"   />
                            </div>

                            <?php if(!empty($product['thumbnail'])): ?>
                            <div class="col-6" id="preview_pic"  >
                                <img id="previewImage" src="<?php echo e(url('assets/products/'.$product['slug'].'/'.$product['thumbnail'])); ?>" alt="Preview Image"
                                style="max-width: 300px">
                            </div>
                            <?php else: ?>
                            <div class="col-6" id="preview_pic"  style="display: none">
                                <img id="previewImage" src="#" alt="Preview Image"
                                style="max-width: 300px">
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <a name="location" onclick="get_location()" href="#location">Location</a>
                <div id="product_locations"></div>
                <div class="row mb-3">
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label row">
                                    &nbsp;&nbsp;<?php echo e(__('Status')); ?>*
                                </label>
                                <div class="input-group form-check form-switch">
                                    <input name="status" type="checkbox"
                                        style="cursor: pointer" class="form-check-input"
                                        checked>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12 mt-5">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label"><?php echo e(__('Types')); ?>*  <?php echo e($product['type_id']); ?></label>
                                <select class="js-example-basic-multiple form-select" id="type_id"
                                    name="type_id[]" multiple="multiple"
                                    data-width="100%"  >
                                    <?php $__currentLoopData = $types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($type['id']); ?>"  <?php if(in_array($type['id'],$types_array)): ?> selected <?php endif; ?>>
                                            <?php echo e($type['name']); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <label
                                    class="form-label"><?php echo e(__('Categories')); ?>* </label>
                                <select class="js-example-basic-multiple form-select" id="category_id"
                                    name="category_id[]" multiple="multiple"
                                    data-width="100%"  >
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category['id']); ?>"  <?php if(in_array($category['id'],$categories_array)): ?> selected <?php endif; ?>>
                                            <?php echo e($category['name']); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>


                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-12 mt-3">
                        <label class="form-label"><?php echo e(__('Description')); ?></label>
                        <div class="row">
                            <div class="col-12">
                                <textarea class="form-control" name="description" id="tinymceExample" rows="5"><?php echo e($product['description']); ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <button class="btn btn-outline-primary submit" <?php if(!$submit_form): ?> onclick="formSubmit()" <?php endif; ?> id="submit_button"
                    class="btn btn-primary"
                        type="submit"><?php echo e(__('Update Product')); ?></button>
                </div>
            </div>
        </div>
    </div>

</div>
</form>
<?php /**PATH /home/vagrant/code/caleg/resources/views/admin/products/product_update.blade.php ENDPATH**/ ?>