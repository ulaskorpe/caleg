<nav class="navbar">
    <a href="#" class="sidebar-toggler">
        <i data-feather="menu"></i>
    </a>
    <div class="navbar-content">
        
        
        <ul class="navbar-nav">
            
            
            
            
            <div class="input-group form-check form-switch mt-2 py-2">
                <input type="checkbox" style="cursor: pointer" class="form-check-input" onclick="changeTheme()" <?php echo e(Session::get('theme') == 'dark' ||  Session::get('theme') == 'auto' ? 'checked' : ''); ?>>
                <?php echo e(Session::get('theme') == 'auto' ? 'auto' : ''); ?>

            </div>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    
                    <i class="link-icon" data-feather="user"></i>
                </a>
                <div class="dropdown-menu p-0" aria-labelledby="profileDropdown">
                    <div class="d-flex flex-column align-items-center border-bottom px-5 py-3">
                        <div class="mb-3">
                            
                            <i class="link-icon" data-feather="user-check"></i>
                        </div>
                        <div class="text-center">
                            <p class="tx-16 fw-bolder"><?php echo e(Auth::guard('admin')->user()->name); ?></p>
                            <p class="tx-12 text-muted"><?php echo e(Auth::guard('admin')->user()->email); ?></p>
                            <a href="<?php echo e(route('admin.change.password')); ?>">
                                <?php echo e(__('general.Change Password')); ?>

                            </a>
                        </div>
                    </div>
                    <ul class="list-unstyled p-1">
                        <li class="dropdown-item py-2">
                            <a href="<?php echo e(route('admin.profile.settings')); ?>" class="text-body ms-0">
                                <i class="me-2 icon-md" data-feather="settings"></i>
                                <span><?php echo e(__('general.Account Settings')); ?></span>
                            </a>
                        </li>
                        <li class="dropdown-item py-2">
                            <a href="<?php echo e(route('admin.logout')); ?>" class="text-body ms-0">
                                <i class="me-2 icon-md" data-feather="log-out"></i>
                                <span><?php echo e(__('general.Log Out')); ?></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</nav><?php /**PATH /home/vagrant/code/caleg/resources/views/admin/partials/topbar.blade.php ENDPATH**/ ?>