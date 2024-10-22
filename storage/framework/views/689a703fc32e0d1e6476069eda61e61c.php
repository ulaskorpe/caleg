<div class="header-top bg-main-600 flex-between">
    <div class="container container-lg">
        <div class="flex-between flex-wrap gap-8">
          
            <ul class="flex-align flex-wrap d-none d-md-flex">
                
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">Hakkımızda</a></li>
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">Yardım</a></li>
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">SSS</a></li>
                <li class="border-right-item"><a href="#shipping" class="text-white text-sm hover-text-decoration-underline">İletişim</a></li>
            
            </ul>
      
        <ul class="header-top__right flex-align flex-wrap">

                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="#" class="text-white text-sm py-8 flex-align gap-6"> 
                        <span class="icon text-md d-flex"> <i class="ph ph-user-circle"></i> </span> 
                        <span class="hover-text-decoration-underline">Hesabım</span>
                     </a>
                     <form class="form" id="logout-form" name="logout-form" action="<?php echo e(route('logout_user')); ?>"
                     method="post" enctype="multipart/form-data">
                     <input type="hidden" name="_token" id="_token" value="<?php echo e(csrf_token()); ?>">
                     
                     </form>
                    <ul class="on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <?php if(Auth::id()): ?>
                        <li class="nav-submenu__item">
                            <a href="#" onclick="logoutfx()" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                 
                               Çıkış
                            </a>
                        </li>
                        <?php else: ?>
                        <li class="nav-submenu__item">
                            <a href="<?php echo e(route('user-login')); ?>" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                
                                Kullanıcı Girişi
                            </a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="<?php echo e(route('user-register')); ?>" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                 
                               Kayıt Ol
                            </a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="<?php echo e(route('user-forget-pw')); ?>" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                 
                              Şifremi Unuttum
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </li>
                <!--
                    <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="text-white text-sm py-8">Hesabım</a>
                    <ul class="on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li class="nav-submenu__item">
                            <a href="#" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <span class="text-sm d-flex"><i class="ph ph-headset"></i></span>
                                Call Center
                            </a>
                        </li>
                        <li class="nav-submenu__item">
                            <a href="#" class="nav-submenu__link hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <span class="text-sm d-flex"><i class="ph ph-chat-circle-dots"></i></span>
                                Live Chat
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">Eng</a>
                    <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                English
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Japan
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                French
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Germany
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Bangladesh
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                South Korea
                            </a>
                        </li>
                    </ul>
                </li>
           
                <li class="on-hover-item border-right-item border-right-item-sm-space has-submenu arrow-white">
                    <a href="javascript:void(0)" class="selected-text text-white text-sm py-8">USD</a>
                   <ul class="selectable-text-list on-hover-dropdown common-dropdown common-dropdown--sm max-h-200 scroll-sm px-0 py-8">
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag1.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                USD
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag2.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Yen
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag3.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                Franc 
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag4.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                EURO
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag6.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                BDT
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="hover-bg-gray-100 text-gray-500 text-xs py-6 px-16 flex-align gap-8 rounded-0"> 
                                <img src="assets/images/thumbs/flag5.png" alt="" class="w-16 h-12 rounded-4 border border-gray-100">
                                WON
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="border-right-item">
                    <a href="account.html" class="text-white text-sm py-8 flex-align gap-6"> 
                        <span class="icon text-md d-flex"> <i class="ph ph-user-circle"></i> </span> 
                        <span class="hover-text-decoration-underline">My Account</span>
                     </a>
                </li>
                 -->
            </ul>
        </div>
    </div>
</div><?php /**PATH /home/vagrant/code/caleg/resources/views/marketpro/partials/middle_top.blade.php ENDPATH**/ ?>