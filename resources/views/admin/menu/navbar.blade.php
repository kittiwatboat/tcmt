<nav class="side-nav">
    <a href="{{url('/')}}" class="intro-x flex items-center pl-5 pt-4">
        <img alt="Midone - HTML Admin Template" class="w-6" src="{{asset('dist/images/logo.svg')}}">
        <span class="hidden xl:block text-white text-lg ml-3"> Rubick </span>
    </a>
    <div class="side-nav__devider my-6"></div>
    <ul>
        <li>
            <a href="/admin" class="side-menu {{request()->is('admin') ? 'side-menu--active' : ''}}">
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title"> Admin </div>
            </a>
        </li>

        <li>
            <a href="javascript:;" class="side-menu {{request()->is('Company') || request()->is('Employee') || request()->is('Period') ? 'side-menu--active' : ''}}">
                <div class="side-menu__icon"><i data-lucide="archive"></i> </div>
                <div class="side-menu__title">
                    ตั้งค่าข้อมูล
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="{{request()->is('Company')||request()->is('Employee')||request()->is('Period') ? 'side-menu__sub-open' : ''}}">
                <li >
                    <a href="/Company" class="side-menu {{request()->is('Company') ? 'side-menu--active' : ''}}">
                        <div class="side-menu__icon">
                                <!-- <svg width="25" height="25" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.122 8.76a1.8 1.8 0 1 1-3.6 0 1.8 1.8 0 0 1 3.6 0Z"></path>
                                <path d="M4.323 3.36a2.4 2.4 0 0 0-2.4 2.4v12a2.4 2.4 0 0 0 2.4 2.4h14.4a2.4 2.4 0 0 0 2.4-2.4v-12a2.4 2.4 0 0 0-2.4-2.4h-14.4Zm14.4 1.2a1.2 1.2 0 0 1 1.2 1.2v7.8l-4.532-2.336a.602.602 0 0 0-.693.112l-4.452 4.452-3.192-2.127a.6.6 0 0 0-.756.075L3.123 16.56V5.76a1.2 1.2 0 0 1 1.2-1.2h14.4Z"></path>
                                </svg> -->
                                <i data-lucide="edit"></i>
                        </div>
                        <div class="side-menu__title"> ข้อมูลบริษัท </div>
                    </a>
                    <a href="/Employee" class="side-menu {{request()->is('Employee') ? 'side-menu--active' : ''}}">
                        <div class="side-menu__icon">
                                <!-- <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.4 7.2a.6.6 0 0 0 0 1.2h7.2a.6.6 0 1 0 0-1.2H8.4Zm-.6 3a.6.6 0 0 1 .6-.6h7.2a.6.6 0 1 1 0 1.2H8.4a.6.6 0 0 1-.6-.6Zm.6 1.8a.6.6 0 1 0 0 1.2h7.2a.6.6 0 1 0 0-1.2H8.4Zm0 2.4a.6.6 0 1 0 0 1.2H12a.6.6 0 1 0 0-1.2H8.4Z"></path>
                                <path d="M4.8 4.8a2.4 2.4 0 0 1 2.4-2.4h9.6a2.4 2.4 0 0 1 2.4 2.4v14.4a2.4 2.4 0 0 1-2.4 2.4H7.2a2.4 2.4 0 0 1-2.4-2.4V4.8Zm12-1.2H7.2A1.2 1.2 0 0 0 6 4.8v14.4a1.2 1.2 0 0 0 1.2 1.2h9.6a1.2 1.2 0 0 0 1.2-1.2V4.8a1.2 1.2 0 0 0-1.2-1.2Z"></path>
                                </svg> -->
                            <i data-lucide="edit"></i>
                        </div>
                        <div class="side-menu__title"> ข้อมูลพนักงาน </div>
                    </a>
                    <a href="/Period" class="side-menu {{request()->is('Period') ? 'side-menu--active' : ''}}">
                        <div class="side-menu__icon">
                                <!-- <svg width="30" height="30" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.4 7.2a.6.6 0 0 0 0 1.2h7.2a.6.6 0 1 0 0-1.2H8.4Zm-.6 3a.6.6 0 0 1 .6-.6h7.2a.6.6 0 1 1 0 1.2H8.4a.6.6 0 0 1-.6-.6Zm.6 1.8a.6.6 0 1 0 0 1.2h7.2a.6.6 0 1 0 0-1.2H8.4Zm0 2.4a.6.6 0 1 0 0 1.2H12a.6.6 0 1 0 0-1.2H8.4Z"></path>
                                <path d="M4.8 4.8a2.4 2.4 0 0 1 2.4-2.4h9.6a2.4 2.4 0 0 1 2.4 2.4v14.4a2.4 2.4 0 0 1-2.4 2.4H7.2a2.4 2.4 0 0 1-2.4-2.4V4.8Zm12-1.2H7.2A1.2 1.2 0 0 0 6 4.8v14.4a1.2 1.2 0 0 0 1.2 1.2h9.6a1.2 1.2 0 0 0 1.2-1.2V4.8a1.2 1.2 0 0 0-1.2-1.2Z"></path>
                                </svg> -->
                            <i data-lucide="edit"></i>
                        </div>
                        <div class="side-menu__title"> ข้อมูลช่วงเวลา </div>
                    </a>
                </li>
            </ul>
        </li>
        <li>
            <a href="/Data" class="side-menu {{request()->is('Data') ? 'side-menu--active' : ''}}">
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title"> ลงข้อมูล </div>
            </a>
        </li>
        <li>
            <a href="/Working_time" class="side-menu {{request()->is('Working_time') ? 'side-menu--active' : ''}}">
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title"> Working time </div>
            </a>
        </li>
        <li>
            <a href="/Payment" class="side-menu {{request()->is('Payment') ? 'side-menu--active' : ''}}">
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title"> Payment </div>
            </a>
        </li>
        <li>
            <a href="/Receipt" class="side-menu {{request()->is('Receipt') ? 'side-menu--active' : ''}}">
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title"> Receipt </div>
            </a>
        </li>
    {{-- <li>
        <a href="javascript:;.html" class ="side-menu {{request()->is('backoffice/product')}}">
            <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
            <div class="side-menu__title">
                Report
                <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
            </div>
        </a>
        <ul class="{{request()->is('backoffice/product')||request()->is('backoffice/RecycleBin')||request()->is('backoffice/product/add')||request()->is('backoffice/product/edit')||request()->is('backoffice/categories') ? 'side-menu__sub-open' : ''}}">
            <li>
                <a href="{{route('categories')}}" class="side-menu {{request()->is('backoffice/categories')||request()->is('backoffice/categories/add')||request()->is('backoffice/categories/edit') ? 'side-menu--active' : ''}}">
                    <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                    <div class="side-menu__title"> Categories </div>
                </a>
            </li>
            <li>
                <a href="{{route('product')}}" class="side-menu {{request()->is('backoffice/product')||request()->is('backoffice/product/add')||request()->is('backoffice/product/edit') ? 'side-menu--active' : ''}}">
                    <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                    <div class="side-menu__title"> Product </div>
                </a>
            </li>
            <li>
                <a href="{{route('recyclebin')}}" class="side-menu {{request()->is('backoffice/RecycleBin') ? 'side-menu--active' : ''}}">
                    <div class="side-menu__icon"> <i data-lucide="trash-2"></i> </div>
                    <div class="side-menu__title"> Recycle Bin </div>
                </a>
            </li>

        </ul>
    </li> --}}        {{-- <a href="#" class="side-menu {{request()->is('backoffice/order') || request()->is('/backoffice/order/view/') ? 'side-menu--active' : ''}}"> --}}
    {{-- @if (auth()->user()->role == 'MD' || auth()->user()->role == 'inspector')
    <li>
        <a href="/backoffice/report" class="side-menu {{request()->is('backoffice/report')||request()->is('backoffice') ? 'side-menu--active' : ''}}">
            <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
            <div class="side-menu__title"> Report </div>
        </a>
    </li>
    @endif

    @if (auth()->user()->role == 'MD' || auth()->user()->role == 'admin'|| auth()->user()->role == 'superadmin')
    <li>
        <a href="/backoffice/user" class="side-menu {{request()->is('backoffice/user')|| request()->is('backoffice/user/add_user') ? 'side-menu--active' : ''}}">
            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
            <div class="side-menu__title"> Users </div>
        </a>
    </li>
    @endif
    @if (auth()->user()->role == 'superadmin')
    <li>
        <a href="/backoffice/admin" class="side-menu {{request()->is('backoffice/admin')|| request()->is('backoffice/admin/add_user') ? 'side-menu--active' : ''}}">
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
        <a href="/backoffice/inspector" class="side-menu {{request()->is('backoffice/inspector')|| request()->is('backoffice/inspector/add_user') ? 'side-menu--active' : ''}}">
            <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
            <div class="side-menu__title"> Inspector </div>
        </a>
    </li>
    @endif --}}


    {{-- <li>
        <a href="{{route('review.index')}}" class="side-menu {{request()->is('backoffice/product/review') ? 'side-menu--active' : ''}}">
            <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
            <div class="side-menu__title"> review </div>
        </a>
    </li> --}}
        {{-- <li>
            <a href="side-menu-light-file-manager.html" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                <div class="side-menu__title"> File Manager </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-point-of-sale.html" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="credit-card"></i> </div>
                <div class="side-menu__title"> Point of Sale </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-chat.html" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="message-square"></i> </div>
                <div class="side-menu__title"> Chat </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-post.html" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="file-text"></i> </div>
                <div class="side-menu__title"> Post </div>
            </a>
        </li>
        <li>
            <a href="side-menu-light-calendar.html" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="calendar"></i> </div>
                <div class="side-menu__title"> Calendar </div>
            </a>
        </li> --}}
        {{-- <li class="side-nav__devider my-6"></li>
        <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="edit"></i> </div>
                <div class="side-menu__title">
                    Crud
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-crud-data-list.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Data List </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-crud-form.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Form </div>
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="users"></i> </div>
                <div class="side-menu__title">
                    Users
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-users-layout-1.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Layout 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-2.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Layout 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-users-layout-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Layout 3 </div>
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="trello"></i> </div>
                <div class="side-menu__title">
                    Profile
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-profile-overview-1.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Overview 1 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-2.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Overview 2 </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-profile-overview-3.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Overview 3 </div>
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="layout"></i> </div>
                <div class="side-menu__title">
                    Pages
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">
                            Wizards
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wizard-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wizard-layout-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">
                            Blog
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-blog-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-blog-layout-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">
                            Pricing
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-pricing-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-pricing-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">
                            Invoice
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-invoice-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-invoice-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 2</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">
                            FAQ
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-faq-layout-1.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 1</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-2.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 2</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-faq-layout-3.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Layout 3</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="login-light-login.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Login </div>
                    </a>
                </li>
                <li>
                    <a href="login-light-register.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Register </div>
                    </a>
                </li>
                <li>
                    <a href="main-light-error-page.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Error Page </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-update-profile.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Update profile </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-change-password.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Change Password </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="side-nav__devider my-6"></li> --}}
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="inbox"></i> </div>
                <div class="side-menu__title">
                    Components
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">
                            Table
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-regular-table.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Regular Table</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-tabulator.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Tabulator</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">
                            Overlay
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-modal.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Modal</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-slide-over.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Slide Over</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-notification.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Notification</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-tab.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Tab </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-accordion.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Accordion </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-button.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Button </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-alert.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Alert </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-progress-bar.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Progress Bar </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tooltip.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Tooltip </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-dropdown.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Dropdown </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-typography.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Typography </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-icon.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Icon </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-loading-icon.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Loading Icon </div>
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="sidebar"></i> </div>
                <div class="side-menu__title">
                    Forms
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-regular-form.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Regular Form </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-datepicker.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Datepicker </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-tom-select.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Tom Select </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-file-upload.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> File Upload </div>
                    </a>
                </li>
                <li>
                    <a href="javascript:;" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title">
                            Wysiwyg Editor
                            <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                        </div>
                    </a>
                    <ul class="">
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-classic.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Classic</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-inline.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Inline</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-balloon.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Balloon</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Balloon Block</div>
                            </a>
                        </li>
                        <li>
                            <a href="side-menu-light-wysiwyg-editor-document.html" class="side-menu">
                                <div class="side-menu__icon"> <i data-lucide="zap"></i> </div>
                                <div class="side-menu__title">Document</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="side-menu-light-validation.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Validation </div>
                    </a>
                </li>
            </ul>
        </li> --}}
        {{-- <li>
            <a href="javascript:;" class="side-menu">
                <div class="side-menu__icon"> <i data-lucide="hard-drive"></i> </div>
                <div class="side-menu__title">
                    Widgets
                    <div class="side-menu__sub-icon "> <i data-lucide="chevron-down"></i> </div>
                </div>
            </a>
            <ul class="">
                <li>
                    <a href="side-menu-light-chart.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Chart </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-slider.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Slider </div>
                    </a>
                </li>
                <li>
                    <a href="side-menu-light-image-zoom.html" class="side-menu">
                        <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                        <div class="side-menu__title"> Image Zoom </div>
                    </a>
                </li>
            </ul>
        </li> --}}
    </ul>
</nav>
