<div class="mobile-menu md:hidden">
    <div class="mobile-menu-bar">
        <a href="" class="flex mr-auto">
            <img alt="Midone - HTML Admin Template" class="w-6" src="{{asset('dist/images/logo.svg')}}">
        </a>
        <a href="javascript:;" id="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
    </div>
    <ul class="border-t border-white/[0.08] py-5 hidden">
        {{-- <li>
            <a href="javascript:;.html" class="menu menu--active">
                <div class="menu__icon"> <i data-lucide="home"></i> </div>
                <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
            </a>
            <ul class="menu__sub-open">
                <li>
                    <a href="index.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-2.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 3 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dashboard-overview-4.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 4 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="box"></i> </div>
                <div class="menu__title"> Menu Layout <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="index.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Side Menu </div>
                    </a>
                </li>
                <li>
                    <a href="simple-menu-light-dashboard-overview-1.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Simple Menu </div>
                    </a>
                </li>
                <li>
                    <a href="top-menu-light-dashboard-overview-1.html" class="menu menu--active">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Top Menu </div>
                    </a>
                </li>
            </ul>
        </li> --}}
    {{-- @if (auth()->user()->role == 'MD')
        <li>
            <a href="{{url('/backoffice/report')}}" class="menu {{request()->is('backoffice/report')||request()->is('backoffice') ? 'menu--active' : ''}}">
                <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="menu__title"> Report </div>
            </a>
        </li>
    @endif
    @if (auth()->user()->role == 'MD' || auth()->user()->role == 'admin'|| auth()->user()->role == 'superadmin')
    <li>
        <a href="{{url('/backoffice/user')}}" class="menu {{request()->is('backoffice/user')|| request()->is('backoffice/user/add_user') ? 'menu--active' : ''}}">
            <div class="menu__icon"> <i data-lucide="users"></i> </div>
            <div class="menu__title"> Users </div>
        </a>
    </li>
    @endif


    @if (auth()->user()->role == 'superadmin')
    <li>
        <a href="{{url("/backoffice/admin")}}" class="menu {{request()->is('backoffice/admin')|| request()->is('backoffice/admin/add_user') ? 'menu--active' : ''}}">
            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
            <div class="side-menu__title"> Admin </div>
        </a>
    </li>
    <li>
        <a href="/backoffice/md" class="side-menu {{request()->is('backoffice/md')|| request()->is('backoffice/md/add_user') ? 'side-menu--active' : ''}}">
            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
            <div class="side-menu__title"> MD </div>
        </a>
    </li>
    <li>
        <a href="{{url("/backoffice/inspector")}}" class="menu {{request()->is('backoffice/inspector')|| request()->is('backoffice/inspector/add_user') ? 'menu--active' : ''}}">
            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
            <div class="side-menu__title"> Inspector </div>
        </a>
    </li>
    @endif --}}

        {{-- <li>
            <a href="side-menu-light-point-of-sale.html" class="menu">
                <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                <div class="menu__title"> Point of Sale </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-chat.html" class="menu">
                <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                <div class="menu__title"> Chat </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-post.html" class="menu">
                <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="menu__title"> Post </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-calendar.html" class="menu">
                <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                <div class="menu__title"> Calendar </div>
            </a>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="edit"></i> </div>
                <div class="menu__title"> Crud <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-crud-data-list.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Data List </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-crud-form.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Form </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="users"></i> </div>
                <div class="menu__title"> Users <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-users-layout-1.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Layout 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-2.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Layout 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-3.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Layout 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="trello"></i> </div>
                <div class="menu__title"> Profile <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-profile-overview-1.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-2.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-3.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overview 3 </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="layout"></i> </div>
                <div class="menu__title"> Pages <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Wizards <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Blog <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-blog-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Pricing <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Invoice <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> FAQ <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-faq-layout-1.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-2.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-3.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login-light-login.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Login </div>
                    </a>
                </li>
                <li>
                    <a href="login-light-register.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Register </div>
                    </a>
                </li>
                <li>
                    <a href="main-light-error-page.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Error Page </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-update-profile.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Update profile </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-change-password.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Change Password </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu__devider my-6"></li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                <div class="menu__title"> Components <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Table <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-table.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Regular Table</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tabulator.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Tabulator</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Overlay <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-modal.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Modal</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slide-over.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Slide Over</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-notification.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Notification</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-tab.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Tab </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-accordion.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Accordion </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-button.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Button </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-alert.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Alert </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-progress-bar.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Progress Bar </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tooltip.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Tooltip </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dropdown.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Dropdown </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-typography.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Typography </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-icon.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Icon </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-loading-icon.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Loading Icon </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="sidebar"></i> </div>
                <div class="menu__title"> Forms <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-regular-form.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Regular Form </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-datepicker.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Datepicker </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tom-select.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Tom Select </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-upload.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> File Upload </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-classic.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Classic</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-inline.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Inline</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-balloon.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Balloon</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Balloon Block</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-document.html" class="menu">
                                <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="menu__title">Document</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-validation.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Validation </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="menu">
                <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                <div class="menu__title"> Widgets <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-chart.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Chart </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-slider.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Slider </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-image-zoom.html" class="menu">
                        <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="menu__title"> Image Zoom </div>
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>
</div>