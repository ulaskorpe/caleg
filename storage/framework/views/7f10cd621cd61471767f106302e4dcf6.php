<nav class="sidebar">
    <div class="sidebar-header">
        <a href="<?php echo e(route('home')); ?>" class="sidebar-brand" target="__blank">
            <?php echo e(explode(' ', config('app.name'))[0]); ?><span>Nist</span>
        </a>
        <div class="sidebar-toggler not-active">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="sidebar-body">
        <ul class="nav">
            <li class="nav-item nav-category">
                <?php echo e(__('Main')); ?>

            </li>
            <li class="nav-item">
                <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link">
                    <i class="link-icon" data-feather="box"></i>
                    <span class="link-title"><?php echo e(__('Dashboard')); ?></span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#sizes" role="button" aria-expanded="false">
                    <i class="link-icon" data-feather="square"></i>
                    <span class="link-title"><?php echo e(__('Sizes')); ?></span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="sizes">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.sizes.index')); ?>" class="nav-link"><?php echo e(__('List')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.sizes.create')); ?>" class="nav-link"><?php echo e(__('Add New Size')); ?></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#categories" role="button" aria-expanded="false">
                    <i class="link-icon" data-feather="grid"></i>
                    <span class="link-title"><?php echo e(__('Categories')); ?></span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="categories">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.categories.index')); ?>" class="nav-link"><?php echo e(__('List')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.categories.create')); ?>"
                                class="nav-link"><?php echo e(__('Add New Category')); ?></a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- TYPES -->
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#types" role="button" aria-expanded="false">
                    <i class="link-icon" data-feather="triangle"></i>
                    <span class="link-title"><?php echo e(__('Types')); ?></span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="types">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.types.index')); ?>" class="nav-link"><?php echo e(__('List')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.types.create')); ?>" class="nav-link"><?php echo e(__('Add New Type')); ?></a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#products" role="button" aria-expanded="false">
                    <i class="link-icon" data-feather="layers"></i>
                    <span class="link-title"><?php echo e(__('Products')); ?></span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="products">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.products.index')); ?>" class="nav-link"><?php echo e(__('List')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.products.create')); ?>"
                                class="nav-link"><?php echo e(__('Add New Product')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.product.comments.all')); ?>"
                                class="nav-link"><?php echo e(__('Comments')); ?></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item nav-category"><?php echo e(__('Settings')); ?></li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#generalsettings" role="button"
                    aria-expanded="false">
                    <i class="link-icon" data-feather="settings"></i>
                    <span class="link-title"><?php echo e(__('Web Settings')); ?></span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="generalsettings">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.general.settings')); ?>"
                                class="nav-link"><?php echo e(__('General Information')); ?></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#pagesettings" role="button"
                    aria-expanded="false">
                    <i class="link-icon" data-feather="file-text"></i>
                    <span class="link-title"><?php echo e(__('Pages Settings')); ?></span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="pagesettings">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.pages.index')); ?>" class="nav-link"><?php echo e(__('Pages')); ?>

                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#emailsettings" role="button"
                    aria-expanded="false">
                    <i class="link-icon" data-feather="mail"></i>
                    <span class="link-title"><?php echo e(__('Email Settings')); ?></span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="emailsettings">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.smtp.settings')); ?>"
                                class="nav-link"><?php echo e(__('SMTP Information')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.email.jobs')); ?>"
                                class="nav-link"><?php echo e(__('Emails On Pending')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.email.failedjobs')); ?>"
                                class="nav-link"><?php echo e(__('Emails On Failed')); ?></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#frontsettings" role="button"
                    aria-expanded="false">
                    <i class="link-icon" data-feather="monitor"></i>
                    <span class="link-title"><?php echo e(__('Front Settings')); ?></span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="frontsettings">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.logosettings')); ?>" class="nav-link"><?php echo e(__('Logo')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.faviconsettings')); ?>" class="nav-link"><?php echo e(__('Favicon')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.shopimgsettings')); ?>" class="nav-link"><?php echo e(__('Header')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.frontsettings')); ?>" class="nav-link"><?php echo e(__('Home Page')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.slidersettings')); ?>" class="nav-link"><?php echo e(__('Sliders')); ?></a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.stylesettings')); ?>" class="nav-link"><?php echo e(__('Styles')); ?></a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-bs-toggle="collapse" href="#footersettings" role="button"
                    aria-expanded="false">
                    <i class="link-icon" data-feather="airplay"></i>
                    <span class="link-title"><?php echo e(__('Footer Settings')); ?></span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="footersettings">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="<?php echo e(route('admin.settings.footer')); ?>" class="nav-link"><?php echo e(__('Footer')); ?></a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<?php /**PATH /home/vagrant/code/caleg/resources/views/admin/partials/sidebar.blade.php ENDPATH**/ ?>