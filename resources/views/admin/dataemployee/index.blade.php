<!DOCTYPE html>
<!--
Template Name: Midone - HTML Admin Dashboard Template
Author: Left4code
Website: http://www.left4code.com/
Contact: muhammadrizki@left4code.com
Purchase: https://themeforest.net/user/left4code/portfolio
Renew Support: https://themeforest.net/user/left4code/portfolio
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        {{-- <meta charset="utf-8">
        <link href="dist/images/logo.svg" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Midone admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Midone Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>CRUD Data List - Midone - Tailwind HTML Admin Template</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="dist/css/app.css" /> --}}
        @include('admin.head')
        <!-- END: CSS Assets-->
    </head>
    <?php
    $page="product"
    ?>
    <!-- END: Head -->
    <body class="py-5">
        <!-- BEGIN: Mobile Menu -->
        @include('admin.menu.navbar-modile')
        <!-- END: Mobile Menu -->
        <div class="flex">
            <!-- BEGIN: Side Menu -->
            @include('admin.menu.navbar')
            <!-- END: Side Menu -->
            <!-- BEGIN: Content -->
            <div class="content">
                <!-- BEGIN: Top Bar -->
                <div class="top-bar">
                    <!-- BEGIN: Breadcrumb -->
                    <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Application</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Data</li>
                        </ol>
                    </nav>
                    <!-- END: Breadcrumb -->
                    @include('admin.menu.account_menu')
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <h2 class="intro-y text-lg font-medium mt-10">
                    Data
                </h2>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                             <!-- BEGIN: Super Large Modal Toggle -->
                             
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-slate-500">
                                <input type="text" id="search" class="form-control w-56 box pr-10" value="{{$search}}" placeholder="Search..." onchange="document.location.href=`{{url('/Data')}}?search=`+document.getElementById('search').value">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search" onclick="document.location.href=`{{url('/Data')}}?search=`+document.getElementById('search').value"></i>
                            </div>
                        </div>
                        {{-- <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview" class="btn btn-primary mr-1 mb-2">เพิ่มข้อมูลพนักงาน</a> --}}
                             <!-- END: Super Large Modal Toggle -->
                        {{-- <a class="btn btn-primary shadow-md mr-2" href="{{url('/Data/add')}}">Add New Admin</a> --}}
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div id="modal-datepicker" class="p-5">
                                <div class="preview">
                                    <div id="datepicker-modal-preview" class="modal" tabindex="-1" aria-hidden="true">
                                        <div class="modal-dialog">
                                            {{-- <form action="{{route('admin.import')}}" method="POST" enctype="multipart/form-data"> --}}
                                                @csrf
                                                <div class="modal-content">
                                                    <!-- BEGIN: Modal Header -->
                                                    <div class="modal-header">
                                                        <h2 class="font-medium text-base mr-auto">
                                                            Import data
                                                        </h2>
                                                    </div>
                                                    <!-- END: Modal Header -->
                                                    <!-- BEGIN: Modal Body -->
                                                    <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                                                        <div class="col-span-12 sm:col-span-6">
                                                            <label for="modal-datepicker-1" class="form-label">File excel </label>
                                                            <input type="file" name="excel_file" class="form-control" >
                                                        </div>
                                                    </div>
                                                    <!-- END: Modal Body -->
                                                    <!-- BEGIN: Modal Footer -->
                                                    <div class="modal-footer text-right">
                                                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                                                        <button type="submit" class="btn btn-primary w-20">Submit</button>
                                                    </div>
                                                    <!-- END: Modal Footer -->
                                                </div>
                                            {{-- </form> --}}
                                        </div>
                                    </div>
                                    <!-- END: Modal Content -->
                                </div>
                                <div class="source-code hidden">
                                    <button data-target="#copy-modal-datepicker" class="copy-code btn py-1 px-2 btn-outline-secondary"> <i data-lucide="file" class="w-4 h-4 mr-2"></i> Import </button>
                                    <div class="overflow-y-auto mt-3 rounded-md">
                                        <pre id="copy-modal-datepicker" class="source-preview"> <code class="html"> HTMLOpenTag!-- BEGIN: Show Modal Toggle --HTMLCloseTag HTMLOpenTagdiv class=&quot;text-center&quot;HTMLCloseTag HTMLOpenTaga href=&quot;javascript:;&quot; data-tw-toggle=&quot;modal&quot; data-tw-target=&quot;#datepicker-modal-preview&quot; class=&quot;btn btn-primary&quot;HTMLCloseTagShow ModalHTMLOpenTag/aHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Show Modal Toggle --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Content --HTMLCloseTag HTMLOpenTagdiv id=&quot;datepicker-modal-preview&quot; class=&quot;modal&quot; tabindex=&quot;-1&quot; aria-hidden=&quot;true&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-dialog&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-content&quot;HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Header --HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-header&quot;HTMLCloseTag HTMLOpenTagh2 class=&quot;font-medium text-base mr-auto&quot;HTMLCloseTagFilter by DateHTMLOpenTag/h2HTMLCloseTag HTMLOpenTagbutton class=&quot;btn btn-outline-secondary hidden sm:flex&quot;HTMLCloseTag HTMLOpenTagi data-lucide=&quot;file&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Download Docs HTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagdiv class=&quot;dropdown sm:hidden&quot;HTMLCloseTag HTMLOpenTaga class=&quot;dropdown-toggle w-5 h-5 block&quot; href=&quot;javascript:;&quot; aria-expanded=&quot;false&quot;HTMLCloseTag HTMLOpenTagi data-lucide=&quot;more-horizontal&quot; class=&quot;w-5 h-5 text-slate-500&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag HTMLOpenTag/aHTMLCloseTag HTMLOpenTagdiv class=&quot;dropdown-menu w-40&quot;HTMLCloseTag HTMLOpenTagul class=&quot;dropdown-content&quot;HTMLCloseTag HTMLOpenTagliHTMLCloseTag HTMLOpenTaga href=&quot;javascript:;&quot; class=&quot;dropdown-content&quot;HTMLCloseTag HTMLOpenTagi data-lucide=&quot;file&quot; class=&quot;w-4 h-4 mr-2&quot;HTMLCloseTagHTMLOpenTag/iHTMLCloseTag Download Docs HTMLOpenTag/aHTMLCloseTag HTMLOpenTag/liHTMLCloseTag HTMLOpenTag/ulHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Header --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Body --HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-body grid grid-cols-12 gap-4 gap-y-3&quot;HTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-datepicker-1&quot; class=&quot;form-label&quot;HTMLCloseTagFromHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; id=&quot;modal-datepicker-1&quot; class=&quot;datepicker form-control&quot; data-single-mode=&quot;true&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTagdiv class=&quot;col-span-12 sm:col-span-6&quot;HTMLCloseTag HTMLOpenTaglabel for=&quot;modal-datepicker-2&quot; class=&quot;form-label&quot;HTMLCloseTagToHTMLOpenTag/labelHTMLCloseTag HTMLOpenTaginput type=&quot;text&quot; id=&quot;modal-datepicker-2&quot; class=&quot;datepicker form-control&quot; data-single-mode=&quot;true&quot;HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Body --HTMLCloseTag HTMLOpenTag!-- BEGIN: Modal Footer --HTMLCloseTag HTMLOpenTagdiv class=&quot;modal-footer text-right&quot;HTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; data-tw-dismiss=&quot;modal&quot; class=&quot;btn btn-outline-secondary w-20 mr-1&quot;HTMLCloseTagCancelHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTagbutton type=&quot;button&quot; class=&quot;btn btn-primary w-20&quot;HTMLCloseTagSubmitHTMLOpenTag/buttonHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Footer --HTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag/divHTMLCloseTag HTMLOpenTag!-- END: Modal Content --HTMLCloseTag </code> </pre>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="hidden md:block mx-auto text-slate-500"></div>
                        <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview" class="btn btn-primary mr-1 mb-2">เพิ่มข้อมูลพนักงาน</a>

                        {{-- <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-slate-500">
                                <input type="text" id="search" class="form-control w-56 box pr-10" value="{{$search}}" placeholder="Search..." onchange="document.location.href=`{{url('/Datae')}}?search=`+document.getElementById('search').value">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search" onclick="document.location.href=`{{url('/Data')}}?search=`+document.getElementById('search').value"></i>
                            </div>
                        </div> --}}
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">ชื่อพนักงาน</th>
                                    <th class="whitespace-nowrap">ที่อยู่พนักงาน</th>
                                    <th class="whitespace-nowrap">วัน / เวลาที่สร้าง</th>
                                    <th class="whitespace-nowrap">วัน / เวลาที่แก้ไข</th>
                                    <th class="text-center whitespace-nowrap">จัดการข้อมูล</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_list as $data)
                                <tr class="intro-x">
                                    <td >
                                        <div> {{$data->prefix_name}} {{$data->first_name}} {{$data->last_name}} </div>
                                    </td>
                                    <td >
                                        <div> {{$data->address}} </div>
                                    </td>
                                    <td>
                                        <div> {{ \Carbon\Carbon::parse($data->created_at)->format('d-m-Y H:i') }} </div>
                                    </td>
                                    <td>
                                        <div> {{ \Carbon\Carbon::parse($data->updated_at)->format('d-m-Y H:i') }} </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            @if (auth()->user()->role != 'super admin' || auth()->user()->role != 'admin')
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#edit-modal-user{{$data->id}}" ><i data-lucide="check-square" class="w-4 h-4 mr-1"></i>Edit</a>
                                            <div class="text-center"> <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal-user-{{$data->id}}" class="btn btn-outline-danger"> Delete</a> </div> <!-- END: Modal Toggle -->
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- END: Data List -->
                    <!-- BEGIN: Pagination -->
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-row sm:flex-nowrap items-center">
                        <nav class="w-full sm:w-auto sm:mr-auto">
                            <ul class="pagination">
                                {{-- {{ $users->links('vendor.pagination.custom') }} --}}
                            </ul>
                        </nav>
                        {{-- <select class="w-20 form-select box mt-3 sm:mt-0" id="show" name="show" onchange="document.location.href=`{{url('/backoffice/user')}}?show=${this.value}`" >
                            <option value="10" {{@$show=='10'?'selected':''}}>10</option>
                            <option value="25" {{@$show=='25'?'selected':''}}>25</option>
                            <option value="35" {{@$show=='35'?'selected':''}}>35</option>
                            <option value="50" {{@$show=='50'?'selected':''}}>50</option>
                        </select> --}}
                    </div>
                    <!-- END: Pagination -->
                </div>

            </div>
            <!-- END: Content -->
        </div>
        <!-- BEGIN: Create Admin Modal -->
        <div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">ADD ฐานข้อมูล</h2>
                    </div>
                    <form action="{{url('/Data/create')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                            <div class="intro-y col-span-12 sm:col-span-4">
                                <label for="update-profile-form-9" class="form-label">วันที่</label>
                                <input class="form-control" type="date" id="date" name="date" placeholder="วันที่" value="" required>
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <label for="modal-form-3" class="form-label">JOB NO.</label>
                                <input class="form-control" type="text" id="job_No" name="job_No" placeholder="JOB NO." value="" required>
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <label for="modal-form-4" class="form-label">WO NO.</label>
                                <input class="form-control" type="text" id="WO_No" name="WO_No" placeholder="WO NO." value="" required>
                            </div>
                        </div>                            
                        <h2 class="modal-body intro-y text-lg font-medium mt-10 text-center">ข้อมูลพนักงาน</h2>
                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12">
                                <label class="form-label">ชื่อ-นามสกุล</label>
                                <div class="grid grid-cols-12 gap-2">
                                    <select class="tom-select sm:mr-2 xl:col-span-9 " id="first_name" name="first_name" data-placeholder="ชื่อพนักงาน" value="" aria-label="Default select example" required>
                                        <option selected disabled>ชื่อพนักงาน</option>
                                            @php 
                                            $Employee = DB::table('tb_employee')->get();
                                                if($Employee)
                                                {
                                                    foreach($Employee as $data_Employee1)
                                                {
                                                @endphp
                                                    <option value="{{$data_Employee1->id}}"> {{$data_Employee1->prefix_name}}{{$data_Employee1->first_name}}  {{$data_Employee1->last_name}} </option>
                                                @php
                                                }
                                            }
                                            @endphp
                                    </select>
                                    <div class="intro-y col-span-12 sm:col-span-3">
                                        <input  class="form-control" type="file" id="image" name="image" data-default-file="" accept="image/*"/>
                                        <center>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="mt-3">
                                    <label for="update-profile-form-5" class="form-label">ที่อยู่พนักงาน</label>
                                    <textarea class="form-control" type="text" id="address" name="address" placeholder="ที่อยู่พนักงาน" value=""></textarea>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-12 gap-3">
                                    <div class="col-span-12 col-span-3">
                                        <label for="modal-form-4" class="form-label">รหัสพนักงาน</label>
                                        <input class="form-control" type="text" id="employee_ID" name="employee_ID" placeholder="รหัสพนักงาน" value="">
                                    </div>
                                    <div class="col-span-12 col-span-3">
                                        <label for="modal-form-4" class="form-label">รหัสสแกน</label>
                                        <input class="form-control" type="text" id="scan_code" name="scan_code" placeholder="รหัสสแกน" value="">
                                    </div>
                                    <div class="col-span-12 col-span-5">
                                        <label for="modal-form-4" class="form-label">ค่าแรงต่อชั่วโมง</label>
                                        <input class="form-control" type="text" id="rate" name="rate" placeholder="ค่าแรงต่อชั่วโมง" value="">
                                    </div>
                                    <h2 class="text-lg font-medium mt-10 pl-6">บาท</h2>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ธนาคาร</label>
                                <select class="tom-select w-full" type="text" id="bank" name="bank" onchange="selectitem()" value="">
                                    <option selected disabled>เลือกธนาคาร</option>
                                    <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                                    <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                                    <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                                    <option value="ธนาคารทหารไทย">ธนาคารทหารไทย</option>
                                    <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                                    <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
                                    <option value="ธนาคารเกียรตินาคิน">ธนาคารเกียรตินาคิน</option>
                                    <option value="ธนาคารซีไอเอ็มบีไทย">ธนาคารซีไอเอ็มบีไทย</option>
                                    <option value="ธนาคารทิสโก้">ธนาคารทิสโก้</option>
                                    <option value="ธนาคารธนชาต">ธนาคารธนชาต</option>
                                    <option value="ธนาคารยูโอบี">ธนาคารยูโอบี</option>                                        
                                    <option value="ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย)">ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย)</option>
                                    <option value="ธนาคารไทยเครดิตเพื่อรายย่อย">ธนาคารไทยเครดิตเพื่อรายย่อย</option>
                                    <option value="ธนาคารแลนด์ แอนด์ เฮาส์ ">ธนาคารแลนด์ แอนด์ เฮาส์ </option>
                                    <option value="ธนาคารไอซีบีซี (ไทย)">ธนาคารไอซีบีซี (ไทย)</option>
                                    <option value="ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย">ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย</option>
                                    <option value="ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</option>
                                    <option value="ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย">ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย</option>
                                    <option value="ธนาคารออมสิน">ธนาคารออมสิน</option>
                                    <option value="ธนาคารอาคารสงเคราะห์">ธนาคารอาคารสงเคราะห์</option>
                                    <option value="ธนาคารอิสลามแห่งประเทศไทย">ธนาคารอิสลามแห่งประเทศไทย</option>
                                    <option value="ธนาคารแห่งประเทศจีน">ธนาคารแห่งประเทศจีน</option>
                                    <option value="ธนาคารซูมิโตโม มิตซุย ทรัสต์ (ไทย)">ธนาคารซูมิโตโม มิตซุย ทรัสต์ (ไทย)</option>
                                    <option value="ธนาคารฮ่องกงและเซี้ยงไฮ้แบงกิ้งคอร์ปอเรชั่น จำกัด">ธนาคารฮ่องกงและเซี้ยงไฮ้แบงกิ้งคอร์ปอเรชั่น จำกัด</option>
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เลขบัญชีธนาคาร</label>
                                <input class="form-control" type="text" id="bank_No" name="bank_No" placeholder="เลขบัญชีธนาคาร" value="">
                            </div>
                        </div>
                        <h2 class="modal-body intro-y text-lg font-medium mt-10 text-center">ข้อมูลการทำงาน</h2>
                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                            <div class="intro-y col-span-12 sm:col-span-12">
                                <label for="modal-form-4" class="form-label">ช่วงเวลากะ</label>
                                <select class="tom-select w-full" type="text" id="Period" name="Period" onchange="selectitem()" value="">
                                    <option selected disabled>เลือกช่วงเวลากะ</option>
                                    @php 
                                        $Period = DB::table('tb_period')->get();
                                            if($Period)
                                            {
                                                foreach($Period as $data_Period1)
                                            {
                                            @endphp
                                                <option value="{{$data_Period1->id}}">เข้า {{$data_Period1->entertime}} ออก {{$data_Period1->leavetime}} </option>
                                            @php
                                            }
                                        }
                                    @endphp
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="update-profile-form-9" class="form-label">เวลาเข้ากะจริง</label>
                                <input class="form-control" type="time" id="enter_real" name="enter_real" placeholder="เวลาเข้ากะจริง" value="">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="update-profile-form-9" class="form-label">เวลาออกกะจริง</label>
                                <input class="form-control" type="time" id="leave_real" name="leave_real" placeholder="เวลาออกกะจริง" value="">
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-11 gap-3">
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">O.T</label>
                                        <input class="form-control" type="text" id="modal-form-4" name="ot" placeholder="O.T" value="" required>
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">ผ่าเที่ยง</label>
                                        <input class="form-control" type="number" min="0" id="Midday_break" name="Midday_break" placeholder="ผ่าเที่ยง" value="">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">ที่อับอากาศ</label>
                                        <input class="form-control" type="number" min="0" id="confined_space" name="confined_space" placeholder="ที่อับอากาศ" value="">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">เข้ากะ</label>
                                        <input class="form-control" type="number" min="0" id="On_shift" name="On_shift" placeholder="เข้ากะ" value="">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">พิเศษ</label>
                                        <input class="form-control" type="number" min="0" id="special" name="special" placeholder="พิเศษ" value="">
                                    </div>
                                    <h2 class="text-lg font-medium mt-10">ชั่วโมง</h2>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-12 gap-3">
                                    <div class="col-span-12 col-span-3">
                                        <label for="modal-form-4" class="form-label">เบี้ยเลี้ยง</label>
                                        <input class="form-control" type="text" id="allowance" name="allowance" placeholder="เบี้ยเลี้ยง" value="">
                                    </div>
                                    <div class="col-span-12 col-span-3">
                                        <label for="modal-form-4" class="form-label">เบี้ยเลี้ยงพิเศษ ต่างจังหวัด</label>
                                        <input class="form-control" type="text" id="allowance_special" name="allowance_special" placeholder="เบี้ยเลี้ยงพิเศษ ต่างจังหวัด" value="">
                                    </div>
                                    <div class="col-span-12 col-span-5">
                                        <label for="modal-form-4" class="form-label">ค่ารถ</label>
                                        <input class="form-control" type="text" id="car_fare" name="car_fare" placeholder="ค่ารถ" value="">
                                    </div>
                                    <h2 class="text-lg font-medium mt-10">บาท</h2>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-12">
                                <label for="modal-form-4" class="form-label">หักภาษี ณ.ที่จ่าย</label>
                                <select class="tom-select w-full" type="text" id="tax" name="tax" onchange="selectitem()">
                                    <option>เลือกการหักภาษี</option>
                                    <option>หัก 3%</option>
                                    <option>ไม่หัก 3%</option>
                                </select>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-11 gap-3">
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">ค่าแรงตกค้าง</label>
                                        <input class="form-control" type="text" id="Residual_wages" name="Residual_wages" placeholder="ค่าแรงตกค้าง" value="">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">ประกันสังคม</label>
                                        <input class="form-control" type="text" id="social_security" name="social_security" placeholder="ประกันสังคม" value="">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">เบิกล่วงหน้า</label>
                                        <input class="form-control" type="text" id="advance_payment" name="advance_payment" placeholder="เบิกล่วงหน้า" value="">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">หักเบิกล่วงหน้า</label>
                                        <input class="form-control" type="text" id="deduction_advance_payment" name="deduction_advance_payment" placeholder="หักเบิกล่วงหน้า" value="">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">ค่าจ้างพิเศษ</label>
                                        <input class="form-control" type="text" id="extra_wages" name="extra_wages" placeholder="ค่าจ้างพิเศษ" value="">
                                    </div>
                                    <h2 class="text-lg font-medium mt-10">บาท</h2>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                            <button type="submit" class="btn btn-primary w-20">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- END: Create Admin Modal -->
        <!-- BEGIN: Create Admin Modal -->
        @foreach ($data_list as $data)
        <div id="edit-modal-user{{$data->id}}" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="font-medium text-base mr-auto">Edit admin <b>{{$data->username}}</b></h2>
                    </div>
                    <form action="{{url('/Data/update')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value="{{$data->id}}">
                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                            <div class="intro-y col-span-12 sm:col-span-4">
                                <label for="update-profile-form-9" class="form-label">วันที่</label>
                                <input class="form-control" type="date" id="date" name="date" placeholder="วันที่" value="{{$data->date}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <label for="modal-form-3" class="form-label">JOB NO.</label>
                                <input class="form-control" type="text" id="job_No" name="job_No" placeholder="JOB NO." value="{{$data->job_No}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <label for="modal-form-4" class="form-label">WO NO.</label>
                                <input class="form-control" type="text" id="WO_No" name="WO_No" placeholder="WO NO." value="{{$data->WO_No}}" required>
                            </div>
                        </div>                            
                        <h2 class="modal-body intro-y text-lg font-medium mt-10 text-center">ข้อมูลพนักงาน</h2>
                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12">
                                <label class="form-label">ชื่อ-นามสกุล</label>
                                <div class="grid grid-cols-12 gap-2">
                                <select class="tom-select sm:mr-2 xl:col-span-9" name="first_name" id="first_name" value="{{$data->first_name}}" data-placeholder="ชื่อพนักงาน" aria-label="Default select example" required>
                                    <option selected disabled>ชื่อพนักงาน</option>
                                        @php 
                                        $Employee = DB::table('tb_employee')->get();
                                            if($Employee)
                                            {
                                                foreach($Employee as $data_Employee1)
                                            {
                                            @endphp
                                                <option value="{{$data_Employee1->id}}"> {{$data_Employee1->prefix_name}}{{$data_Employee1->first_name}}  {{$data_Employee1->last_name}} </option>
                                            @php
                                            }
                                        }
                                        @endphp
                                </select>
                                <div class="intro-y col-span-12 sm:col-span-3">
                                    <input  class="form-control" type="file" id="image" name="image" data-default-file="" accept="image/*"/>
                                    <center>@if($data->image == '')
                                        <span class="hidden"></span>
                                            @else
                                                <img src="{{asset('public/upload/img/')}}/{{$data->image}}" width="500px" class="img-thumbnail">
                                            @endif
                                    </center>
                                </div>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="mt-3">
                                    <label for="update-profile-form-5" class="form-label">ที่อยู่พนักงาน</label>
                                    <textarea class="form-control" type="text" id="address" name="address" placeholder="ที่อยู่พนักงาน" value="{{$data->address}}"></textarea>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-12 gap-3">
                                    <div class="col-span-12 col-span-3">
                                        <label for="modal-form-4" class="form-label">รหัสพนักงาน</label>
                                        <input class="form-control" type="text" id="employee_ID" name="employee_ID" placeholder="รหัสพนักงาน" value="{{$data->employee_ID}}">
                                    </div>
                                    <div class="col-span-12 col-span-3">
                                        <label for="modal-form-4" class="form-label">รหัสสแกน</label>
                                        <input class="form-control" type="text" id="scan_code" name="scan_code" placeholder="รหัสสแกน" value="{{$data->scan_code}}">
                                    </div>
                                    <div class="col-span-12 col-span-5">
                                        <label for="modal-form-4" class="form-label">ค่าแรงต่อชั่วโมง</label>
                                        <input class="form-control" type="text" id="rate" name="rate" placeholder="ค่าแรงต่อชั่วโมง" value="{{$data->rate}}">
                                    </div>
                                    <h2 class="text-lg font-medium mt-10 pl-6">บาท</h2>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ธนาคาร</label>
                                <select class="tom-select w-full" type="text" id="bank" name="bank" onchange="selectitem()" value="{{$data->bank}}">
                                    <option selected disabled>เลือกธนาคาร</option>
                                    <option value="ธนาคารกรุงเทพ">ธนาคารกรุงเทพ</option>
                                    <option value="ธนาคารกสิกรไทย">ธนาคารกสิกรไทย</option>
                                    <option value="ธนาคารกรุงไทย">ธนาคารกรุงไทย</option>
                                    <option value="ธนาคารทหารไทย">ธนาคารทหารไทย</option>
                                    <option value="ธนาคารไทยพาณิชย์">ธนาคารไทยพาณิชย์</option>
                                    <option value="ธนาคารกรุงศรีอยุธยา">ธนาคารกรุงศรีอยุธยา</option>
                                    <option value="ธนาคารเกียรตินาคิน">ธนาคารเกียรตินาคิน</option>
                                    <option value="ธนาคารซีไอเอ็มบีไทย">ธนาคารซีไอเอ็มบีไทย</option>
                                    <option value="ธนาคารทิสโก้">ธนาคารทิสโก้</option>
                                    <option value="ธนาคารธนชาต">ธนาคารธนชาต</option>
                                    <option value="ธนาคารยูโอบี">ธนาคารยูโอบี</option>                                        
                                    <option value="ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย)">ธนาคารสแตนดาร์ดชาร์เตอร์ด (ไทย)</option>
                                    <option value="ธนาคารไทยเครดิตเพื่อรายย่อย">ธนาคารไทยเครดิตเพื่อรายย่อย</option>
                                    <option value="ธนาคารแลนด์ แอนด์ เฮาส์ ">ธนาคารแลนด์ แอนด์ เฮาส์ </option>
                                    <option value="ธนาคารไอซีบีซี (ไทย)">ธนาคารไอซีบีซี (ไทย)</option>
                                    <option value="ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย">ธนาคารพัฒนาวิสาหกิจขนาดกลางและขนาดย่อมแห่งประเทศไทย</option>
                                    <option value="ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร">ธนาคารเพื่อการเกษตรและสหกรณ์การเกษตร</option>
                                    <option value="ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย">ธนาคารเพื่อการส่งออกและนำเข้าแห่งประเทศไทย</option>
                                    <option value="ธนาคารออมสิน">ธนาคารออมสิน</option>
                                    <option value="ธนาคารอาคารสงเคราะห์">ธนาคารอาคารสงเคราะห์</option>
                                    <option value="ธนาคารอิสลามแห่งประเทศไทย">ธนาคารอิสลามแห่งประเทศไทย</option>
                                    <option value="ธนาคารแห่งประเทศจีน">ธนาคารแห่งประเทศจีน</option>
                                    <option value="ธนาคารซูมิโตโม มิตซุย ทรัสต์ (ไทย)">ธนาคารซูมิโตโม มิตซุย ทรัสต์ (ไทย)</option>
                                    <option value="ธนาคารฮ่องกงและเซี้ยงไฮ้แบงกิ้งคอร์ปอเรชั่น จำกัด">ธนาคารฮ่องกงและเซี้ยงไฮ้แบงกิ้งคอร์ปอเรชั่น จำกัด</option>
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เลขบัญชีธนาคาร</label>
                                <input class="form-control" type="text" id="bank_No" name="bank_No" placeholder="เลขบัญชีธนาคาร" value="{{$data->bank_No}}">
                            </div>
                        </div>
                        <h2 class="modal-body intro-y text-lg font-medium mt-10 text-center">ข้อมูลการทำงาน</h2>
                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                            <div class="intro-y col-span-12 sm:col-span-12">
                                <label for="modal-form-4" class="form-label">ช่วงเวลากะ</label>
                                <select class="tom-select w-full" type="text" id="Period" name="Period" onchange="selectitem()" value="{{$data->Period}}">
                                    <option selected disabled>เลือกช่วงเวลากะ</option>
                                    @php 
                                    $Period = DB::table('tb_period')->get();
                                        if($Period)
                                        {
                                            foreach($Period as $data_Period1)
                                        {
                                        @endphp
                                            <option value="{{$data_Period1->id}}">เข้า {{$data_Period1->entertime}} ออก {{$data_Period1->leavetime}} </option>
                                        @php
                                        }
                                    }
                                    @endphp
                                </select>
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="update-profile-form-9" class="form-label">เวลาเข้ากะจริง</label>
                                <input class="form-control" type="time" id="enter_real" name="enter_real" placeholder="เวลาเข้ากะจริง" value="{{$data->enter_real}}">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="update-profile-form-9" class="form-label">เวลาออกกะจริง</label>
                                <input class="form-control" type="time" id="leave_real" name="leave_real" placeholder="เวลาออกกะจริง" value="{{$data->leave_real}}">
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-11 gap-3">
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">O.T</label>
                                        <input class="form-control" type="text" id="modal-form-4" name="ot" placeholder="O.T" value="{{$data->ot}}" required>
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">ผ่าเที่ยง</label>
                                        <input class="form-control" type="number" min="0" id="Midday_break" name="Midday_break" placeholder="ผ่าเที่ยง" value="{{$data->Midday_break}}">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">ที่อับอากาศ</label>
                                        <input class="form-control" type="number" min="0" id="confined_space" name="confined_space" placeholder="ที่อับอากาศ" value="{{$data->confined_space}}">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">เข้ากะ</label>
                                        <input class="form-control" type="number" min="0" id="On_shift" name="On_shift" placeholder="เข้ากะ" value="{{$data->On_shift}}">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">พิเศษ</label>
                                        <input class="form-control" type="number" min="0" id="special" name="special" placeholder="พิเศษ" value="{{$data->special}}">
                                    </div>
                                    <h2 class="text-lg font-medium mt-10">ชั่วโมง</h2>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-12 gap-3">
                                    <div class="col-span-12 col-span-3">
                                        <label for="modal-form-4" class="form-label">เบี้ยเลี้ยง</label>
                                        <input class="form-control" type="text" id="allowance" name="allowance" placeholder="เบี้ยเลี้ยง" value="{{$data->allowance}}">
                                    </div>
                                    <div class="col-span-12 col-span-3">
                                        <label for="modal-form-4" class="form-label">เบี้ยเลี้ยงพิเศษ ต่างจังหวัด</label>
                                        <input class="form-control" type="text" id="allowance_special" name="allowance_special" placeholder="เบี้ยเลี้ยงพิเศษ ต่างจังหวัด" value="{{$data->allowance_special}}">
                                    </div>
                                    <div class="col-span-12 col-span-5">
                                        <label for="modal-form-4" class="form-label">ค่ารถ</label>
                                        <input class="form-control" type="text" id="car_fare" name="car_fare" placeholder="ค่ารถ" value="{{$data->car_fare}}">
                                    </div>
                                    <h2 class="text-lg font-medium mt-10">บาท</h2>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-12">
                                <label for="modal-form-4" class="form-label">หักภาษี ณ.ที่จ่าย</label>
                                <select class="tom-select w-full" type="text" id="tax" name="tax" onchange="selectitem()">
                                    <option>เลือกการหักภาษี</option>
                                    <option>หัก 3%</option>
                                    <option>ไม่หัก 3%</option>
                                </select>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-11 gap-3">
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">ค่าแรงตกค้าง</label>
                                        <input class="form-control" type="text" id="Residual_wages" name="Residual_wages" placeholder="ค่าแรงตกค้าง" value="{{$data->Residual_wages}}">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">ประกันสังคม</label>
                                        <input class="form-control" type="text" id="social_security" name="social_security" placeholder="ประกันสังคม" value="{{$data->social_security}}">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">เบิกล่วงหน้า</label>
                                        <input class="form-control" type="text" id="advance_payment" name="advance_payment" placeholder="เบิกล่วงหน้า" value="{{$data->advance_payment}}">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">หักเบิกล่วงหน้า</label>
                                        <input class="form-control" type="text" id="deduction_advance_payment" name="deduction_advance_payment" placeholder="หักเบิกล่วงหน้า" value="{{$data->deduction_advance_payment}}">
                                    </div>
                                    <div class="col-span-12 col-span-2">
                                        <label for="modal-form-4" class="form-label">ค่าจ้างพิเศษ</label>
                                        <input class="form-control" type="text" id="extra_wages" name="extra_wages" placeholder="ค่าจ้างพิเศษ" value="{{$data->extra_wages}}">
                                    </div>
                                    <h2 class="text-lg font-medium mt-10">บาท</h2>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                            <button type="submit" class="btn btn-primary w-20">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        <!-- END: Create Admin Modal -->
        <!-- BEGIN: Modal Content -->
        @foreach ($data_list as $data)
        <div id="delete-modal-user-{{$data->id}}" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center"> <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-slate-500 mt-2">Do you really want to delete {{$data->first_name}} {{$data->last_name}}? <br>This process cannot be undone.</div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <a href="/Data/delete/{{$data->id}}" class="btn btn-danger w-24">Delete</a> </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- END: Modal Content -->

        <!-- BEGIN: JS Assets-->
        {{-- <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="dist/js/app.js"></script> --}}
        @include('admin.js.js')
        <!-- END: JS Assets-->
        <script>
            function batbal(id){

                Swal.fire({
                title:"Are you sure?",
                html:"Do you really want to delete these records?",
                icon:"error",
                showCancelButton:true,
                confirmButtonText:"Delete",
                confirmButtonColor:"#DD6B55",
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return fetch('/backoffice/product/delete/'+id)
                    .then(response => response.json())
                    .then(data => location.reload())
                    .catch(error => { Swal.showValidationMessage(`Request failed: ${error}`)})
                }
                });
                }
        </script>
        @if (session('success'))
        <script>
            Swal.fire({
            // position: "top-end",
            icon: "success",
            title: "Login สำเร็จ",
            showConfirmButton: false,
            timer: 1500
            });
        </script>
        @endif
        @if (session('save_success'))
        @php
            $save_text=session('save_success')
        @endphp
        <script>
            Swal.fire({
            // position: "top-end",
            icon: "success",
            title: "{{$save_text}}",
            showConfirmButton: false,
            timer: 1500
            });
        </script>
        @endif
        @php
            $sh="";
        @endphp

        @if($errors->count())
            @foreach ($errors->all() as $error)
                @php
                    $sh.=" ".$error."<br>";
                @endphp
            @endforeach
        @php
            echo "
            <script>
                Swal.fire({
        icon: 'error',
        title: 'Oops...',
        html: '$sh',

        })
            </script>
            "
        @endphp
        @endif

        <script>
            const formContainerRefer = document.getElementById("form-container-Refer");
            const addFormRefer = document.getElementById("add-form-refer-btn");
            let formCountRefer = 1;

            addFormRefer.addEventListener("click", function() {
                formCountRefer++;
                const divRefer = document.createElement("div");
                divRefer.setAttribute("id", `refer${formCountRefer}`);
                divRefer.innerHTML = `
                        <div class="mb-3">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                                        <select class="tom-select w-full" type="text" id="" name="Refer_name[]" onchange="selectitem()">
                                            <option>เลือกเวลาเข้ากะ</option>
                                            <option>A1 08.00 - 17.00</option>
                                            <option>A2 13.00 - 21.00</option>
                                            <option>A1 18.00 - 03.00</option>
                                        </select>
                                        <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                                            <div id="form-container-Refer">
                                                <button type="button" class="btn btn-danger shadow-md ml-2" onclick="del_Refer(${formCountRefer})">-</button>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>


                `;
                formContainerRefer.appendChild(divRefer);
            });

            function del_Refer(num){
                const divRefer = document.getElementById(`refer${num}`);
                if (divRefer) {
                    if (confirm(`Are you sure you want to delete form Refer ${num}?`)) {
                    formContainerRefer.removeChild(divRefer);
                    formCountRefer--;
                    }
                }
            }
        </script>
    </body>
</html>
