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
                             <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview" class="btn btn-primary mr-1 mb-2">Add New Admin</a>
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
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-slate-500">
                                <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                            </div>
                        </div>
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
                                            @if ($data->role != 'super admin')
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
                                <input class="form-control" id="date" type="date" name="date" placeholder="วันที่" value="{{old('date')}}" >
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <label for="modal-form-3" class="form-label">JOB NO.</label>
                                <input id="modal-form-3" name="firstname" type="text" class="form-control" placeholder="JOB NO." value="{{old('firstname')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <label for="modal-form-4" class="form-label">WO NO.</label>
                                <input id="modal-form-4" name="lastname" type="text" class="form-control" placeholder="WO NO." value="{{old('lastname')}}" required>
                            </div>
                            {{-- <div class="col-span-12">
                                <div class="intro-y col-span-12 sm:col-span-4">
                                    <label for="input-wizard-1" class="form-label">รูป/บัตรประชาชนพนักงาน</label>
                                    <input  class="form-control" id="image" name="image"
                                    type="file" data-default-file="" accept="image/*" />
                                </div>
                            </div> --}}
                            <div class="col-span-12">
                                <label class="form-label">ชื่อ-นามสกุล</label>
                                <div class="grid grid-cols-12 gap-2">
                                    <select class="tom-select sm:mr-2 col-span-4" name="first_name" id="first_name" value="{{old('first_name')}}" data-placeholder="ชื่อพนักงาน" aria-label="Default select example">
                                        <option selected disabled>ชื่อพนักงาน</option>
                                        <option value="ชื่อพนักงาน1">ชื่อพนักงาน1</option>
                                        <option value="ชื่อพนักงาน2">ชื่อพนักงาน2</option>
                                        <option value="ชื่อพนักงาน3">ชื่อพนักงาน3</option>
                                    </select>
                                    {{-- <input class="form-control col-span-4" type="text" id="first_name" name="first_name" placeholder="ชื่อพนักงาน" aria-label="default input inline 2" value="{{old('first_name')}}"> --}}
                                    <input class="form-control col-span-4" type="text" id="last_name" name="last_name" placeholder="นามสกุลพนักงาน" aria-label="default input inline 3" value="{{old('last_name')}}">
                                    <div class="intro-y col-span-12 sm:col-span-4">
                                        {{-- <label for="input-wizard-1" class="form-label">รูป/บัตรประชาชนพนักงาน</label> --}}
                                        <input  class="form-control" id="image" name="image"
                                        type="file" data-default-file="" accept="image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="mt-3">
                                    <label for="update-profile-form-5" class="form-label">ที่อยู่พนักงาน</label>
                                    <textarea class="form-control" type="text" id="address" name="address" placeholder="ที่อยู่พนักงาน" value="{{old('address')}}"></textarea>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-1" class="form-label">รหัสพนักงาน</label>
                                <input id="modal-form-1" name="employee_ID" type="text" class="form-control" placeholder="รหัสพนักงาน" value="{{old('employee_ID')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-2" class="form-label">รหัสสแกน</label>
                                <input id="modal-form-2" name="scan_code" type="text" class="form-control" placeholder="รหัสสแกน" value="{{old('scan_code')}}" placeholder="ตัวอักษร a-z,0-9 ต้องมีทั้งตัวพิมพ์เล็กและตัวพิมพ์ใหญ่ ขั้นต่ำ 8 ตัว" min="8" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-3" class="form-label">ธนาคาร</label>
                                <input id="modal-form-3" name="bank" type="text" class="form-control" placeholder="ธนาคาร" value="{{old('bank')}}">
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เลขบัญชีธนาคาร</label>
                                <input id="modal-form-4" name="bank_No" type="text" class="form-control" placeholder="เลขบัญชีธนาคาร" value="{{old('bank_No')}}">
                            </div>
                            {{-- เข้ากะ --}}

                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ช่วงเวลากะ</label>
                                <select class="tom-select w-full" type="text" id="Period" name="Period" onchange="selectitem()">
                                    <option>เลือกช่วงเวลากะ</option>
                                    @php
                                    $Period = DB::table('tb_period')->get();
                                        if($Period)
                                        {
                                            foreach($Period as $data)
                                        {
                                        @endphp
                                            <option value="{{$data->id}}">เข้า {{$data->entertime}} ออก {{$data->leavetime}} </option>
                                        @php
                                        }
                                    }
                                    @endphp
                                </select>
                                {{-- <label for="update-profile-form-9" class="form-label">เวลาเข้ากะ</label>
                                <input class="form-control" id="entertime" type="time" name="entertime" placeholder="เวลาเข้ากะ" value=""> --}}
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="update-profile-form-9" class="form-label">เวลาออกกะ</label>
                                <input class="form-control" id="leavetime" type="time" name="leavetime" placeholder="เวลาออกกะ" value="">
                            </div>
                            {{-- <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เวลาเข้ากะ</label>
                                <select class="tom-select w-full" type="text" id="Detail_refer" name="Detail_refer" onchange="selectitem()">
                                    <option>เลือกเวลาเข้ากะ</option>
                                    <option>A1 08.00 - 17.00</option>
                                    <option>A2 13.00 - 21.00</option>
                                    <option>A1 18.00 - 03.00</option>
                                </select>
                            </div> --}}



                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เวลากะที่ทำจริง</label>
                                <select class="tom-select w-full" type="text" id="Period" name="Period" onchange="selectitem()">
                                    <option>เลือกช่วงเวลากะ</option>
                                    @php
                                    $Period = DB::table('tb_period')->get();
                                        if($Period)
                                        {
                                            foreach($Period as $data)
                                        {
                                        @endphp
                                            <option value="{{$data->id}}">เข้า {{$data->entertime}} ออก {{$data->leavetime}} </option>
                                        @php
                                        }
                                    }
                                    @endphp
                                </select>
                            </div>
                            {{-- <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เวลากะที่ทำจริง</label>
                                <label for="update-profile-form-9" class="form-label">เวลาเข้ากะ</label>
                                <input class="form-control" id="entertime" type="time" name="entertime" placeholder="เวลาเข้ากะ" value="">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="update-profile-form-9" class="form-label">เวลาออกกะ</label>
                                <input class="form-control" id="leavetime" type="time" name="leavetime" placeholder="เวลาออกกะ" value="">
                            </div> --}}

                            {{-- <div class="mb-3">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="col-span-12 sm:col-span-6">
                                            <label for="modal-form-4" class="form-label">เวลาเข้ากะ</label>
                                            <select class="tom-select w-full" type="text" id="Detail_refer" name="Detail_refer" onchange="selectitem()">
                                                <option>เลือกเวลาเข้ากะ</option>
                                                <option>A1 08.00 - 17.00</option>
                                                <option>A2 13.00 - 21.00</option>
                                                <option>A1 18.00 - 03.00</option>
                                            </select>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <br>
                            <div id="form-container-Refer"></div>
                            <div
                                <button id="add-form-refer-btn" type="button" class="btn btn-dark shadow-md ml-2" >+</button>
                            </div> --}}

                        {{-- <div class="mb-3">
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
                        </div> --}}
                            {{-- เข้ากะ --}}

                        <!-- จบส่วนท้ายบทความ -->
                                {{-- <div class="mb-3">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="col-span-12 sm:col-span-6">
                                                <label for="modal-form-4" class="form-label">เวลาเข้ากะ</label>
                                                <select class="tom-select w-full" type="text" id="Detail_refer" name="Detail_refer" onchange="selectitem()">
                                                    <option>เลือกเวลาเข้ากะ</option>
                                                    <option>A1 08.00 - 17.00</option>
                                                    <option>A2 13.00 - 21.00</option>
                                                    <option>A1 18.00 - 03.00</option>
                                                </select>
                                                <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                                                    <!-- <button id="add-form-refer-btn" class="btn btn-dark shadow-md ml-2">Print</button> -->
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                <div id="form-container-Refer"></div>
                                <div
                                    <button id="add-form-refer-btn" type="button" class="btn btn-dark shadow-md ml-2" >+</button>
                                </div>
                            <br> --}}


                            {{-- <div class="mb-3">
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
                            </div> --}}
                        <!-- จบส่วนท้ายบทความ -->
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ค่าแรงต่อชั่วโมง</label>
                                <input id="modal-form-4" name="rate" type="text" class="form-control" placeholder="ค่าแรงต่อชั่วโมง" value="{{old('rate')}}">
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">O.T</label>
                                <input id="modal-form-4" name="ot" type="text" class="form-control" placeholder="O.T" value="{{old('ot')}}" required>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-12 gap-3">
                                    <select class="form-select sm:mr-2 col-span-3" name="Midday_break" id="Midday_break" value="" data-placeholder="ผ่าเที่ยง" aria-label="Default select example" fdprocessedid="2wyzvl">
                                        <option selected="" disabled="">ผ่าเที่ยง</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                    <select class="form-select sm:mr-2 col-span-3" name="confined_space" id="confined_space" value="" data-placeholder="ที่อับอากาศ" aria-label="Default select example" fdprocessedid="2wyzvl">
                                        <option selected="" disabled="">ที่อับอากาศ</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                    <select class="form-select sm:mr-2 col-span-3" name="On_shift" id="On_shift" value="" data-placeholder="เข้ากะ" aria-label="Default select example" fdprocessedid="2wyzvl">
                                        <option selected="" disabled="">เข้ากะ</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                    <select class="form-select sm:mr-2 col-span-3" name="special" id="special" value="" data-placeholder="พิเศษ" aria-label="Default select example" fdprocessedid="2wyzvl">
                                        <option selected="" disabled="">พิเศษ</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                            </div>

                            {{-- <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ผ่าเที่ยง</label>
                                <select class="tom-select w-full" type="text" id="Detail_refer" name="Detail_refer" onchange="selectitem()">
                                    <option>เลือกจำนวนชั่วโมง</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ที่อับอากาศ</label>
                                <select class="tom-select w-full" type="text" id="Detail_refer" name="Detail_refer" onchange="selectitem()">
                                    <option>เลือกจำนวนชั่วโมง</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เข้ากะ</label>
                                <select class="tom-select w-full" type="text" id="Detail_refer" name="Detail_refer" onchange="selectitem()">
                                    <option>เลือกจำนวนชั่วโมง</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">พิเศษ</label>
                                <select class="tom-select w-full" type="text" id="Detail_refer" name="Detail_refer" onchange="selectitem()">
                                    <option>เลือกจำนวนชั่วโมง</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                </select>
                            </div> --}}

                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-12 gap-3">
                                    <input class="form-control col-span-4" type="text" id="allowance" name="allowance" placeholder="เบี้ยเลี้ยง" aria-label="default input inline 2" value="{{old('allowance')}}">
                                    <input class="form-control col-span-4" type="text" id="allowance_special" name="allowance_special" placeholder="เบี้ยเลี้ยงพิเศษ ต่างจังหวัด" aria-label="default input inline 3" value="{{old('allowance_special')}}">
                                    <input class="form-control col-span-4" type="text" id="car_fare" name="car_fare" placeholder="ค่ารถ" aria-label="default input inline 2" value="{{old('car_fare')}}">
                                </div>
                            </div>
                            {{-- <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-3" class="form-label">เบี้ยเลี้ยง</label>
                                <input id="modal-form-3" name="firstname" type="text" class="form-control" placeholder="เบี้ยเลี้ยง" value="{{old('firstname')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เบี้ยเลี้ยงพิเศษ ต่างจังหวัด</label>
                                <input id="modal-form-4" name="lastname" type="text" class="form-control" placeholder="เบี้ยเลี้ยงพิเศษ" value="{{old('lastname')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ค่ารถ</label>
                                <select class="tom-select w-full" type="text" id="Detail_refer" name="Detail_refer" onchange="selectitem()">
                                    <option>เลือกค่ารถ</option>
                                    <option>A1 08.00 - 17.00</option>
                                    <option>A2 13.00 - 21.00</option>
                                    <option>A1 18.00 - 03.00</option>
                                </select>
                            </div> --}}
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">หักภาษี ณ.ที่จ่าย</label>
                                {{-- <div class="text-danger mt-2">กรุณาเลือกเวลาเข้ากะ</div> --}}
                                <select class="tom-select w-full" type="text" id="tax" name="tax" onchange="selectitem()">
                                    <option>เลือกการหักภาษี</option>
                                    <option>หัก 3%</option>
                                    <option>ไม่หัก 3%</option>
                                </select>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-12 gap-3">
                                    <input class="form-control col-span-2" type="text" id="Residual_wages" name="Residual_wages" placeholder="ค่าแรงตกค้าง" aria-label="default input inline 2" value="{{old('Residual_wages')}}">
                                    <input class="form-control col-span-2" type="text" id="social_security" name="social_security" placeholder="ประกันสังคม" aria-label="default input inline 3" value="{{old('social_security')}}">
                                    <input class="form-control col-span-2" type="text" id="advance_payment" name="advance_payment" placeholder="เบิกล่วงหน้า" aria-label="default input inline 2" value="{{old('advance_payment')}}">
                                    <input class="form-control col-span-2" type="text" id="deduction_advance_payment" name="deduction_advance_payment" placeholder="หักเบิกล่วงหน้า" aria-label="default input inline 2" value="{{old('deduction_advance_payment')}}">
                                    <input class="form-control col-span-2" type="text" id="extra_wages" name="extra_wages" placeholder="ค่าจ้างพิเศษ" aria-label="default input inline 3" value="{{old('extra_wages')}}">
                                </div>
                            </div>
                            {{-- <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-3" class="form-label">ค่าแรงตกค้าง</label>
                                <input id="modal-form-3" name="firstname" type="text" class="form-control" placeholder="ค่าแรงตกค้าง" value="{{old('firstname')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ประกันสังคม</label>
                                <input id="modal-form-4" name="lastname" type="text" class="form-control" placeholder="ประกันสังคม" value="{{old('lastname')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เบิกล่วงหน้า</label>
                                <input id="modal-form-4" name="lastname" type="text" class="form-control" placeholder="เบิกล่วงหน้า" value="{{old('lastname')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-3" class="form-label">หักเบิกล่วงหน้า</label>
                                <input id="modal-form-3" name="firstname" type="text" class="form-control" placeholder="หักเบิกล่วงหน้า" value="{{old('firstname')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ค่าจ้างพิเศษ</label>
                                <input id="modal-form-4" name="lastname" type="text" class="form-control" placeholder="ค่าจ้างพิเศษ" value="{{old('lastname')}}" required>
                            </div> --}}

                            {{-- <div class="col-span-12 sm:col-span-6">
                                <label class="form-label">Role</label>
                                <select data-placeholder="Select your favorite actors" name="role" class="tom-select w-full" id="crud-form-2" >
                                    <option value="admin" selected>admin</option>
                                    <option value="viewer">viewer</option>

                                </select>
                            </div> --}}
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
                                <input class="form-control" id="date" type="date" name="date" placeholder="วันที่" value="{{$data->date}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <label for="modal-form-3" class="form-label">JOB NO.</label>
                                <input id="job_No" name="job_No" type="text" class="form-control" placeholder="JOB NO." value="{{$data->job_No}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-4">
                                <label for="modal-form-4" class="form-label">WO NO.</label>
                                <input id="WO_No" name="WO_No" type="text" class="form-control" placeholder="WO NO." value="{{$data->WO_No}}" required>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label">ชื่อ-นามสกุล</label>
                                <div class="grid grid-cols-12 gap-2">
                                    <select class="tom-select sm:mr-2 col-span-4" name="first_name" id="first_name" value="{{$data->first_name}}" data-placeholder="ชื่อพนักงาน" aria-label="Default select example" required>
                                        <option selected disabled>ชื่อพนักงาน</option>
                                        <option value="ชื่อพนักงาน1">ชื่อพนักงาน1</option>
                                        <option value="ชื่อพนักงาน2">ชื่อพนักงาน2</option>
                                        <option value="ชื่อพนักงาน3">ชื่อพนักงาน3</option>
                                    </select>
                                    <input class="form-control col-span-4" type="text" id="last_name" name="last_name" value="{{$data->last_name}}" placeholder="นามสกุลพนักงาน" aria-label="default input inline 3">
                                    <div class="intro-y col-span-12 sm:col-span-4">
                                        <input  class="form-control" id="image" name="image"
                                        type="file" data-default-file="" accept="image/*" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="mt-3">
                                    <label for="update-profile-form-5" class="form-label">ที่อยู่พนักงาน</label>
                                    <textarea class="form-control" type="text" id="address" name="address" placeholder="ที่อยู่พนักงาน" value="{{$data->address}}"></textarea>
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-1" class="form-label">รหัสพนักงาน</label>
                                <input id="employee_ID" name="employee_ID" type="text" class="form-control" placeholder="รหัสพนักงาน" value="{{$data->employee_ID}}">
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-2" class="form-label">รหัสสแกน</label>
                                <input id="scan_code" name="scan_code" type="text" class="form-control" placeholder="รหัสสแกน" value="{{$data->scan_code}}">
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-3" class="form-label">ธนาคาร</label>
                                <input id="bank" name="bank" type="text" class="form-control" placeholder="ธนาคาร" value="{{$data->bank}}">
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เลขบัญชีธนาคาร</label>
                                <input id="bank_No" name="bank_No" type="text" class="form-control" placeholder="เลขบัญชีธนาคาร" value="{{$data->bank_No}}">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ช่วงเวลากะ</label>
                                <select class="tom-select w-full" type="text" id="Period" name="Period" onchange="selectitem()">
                                    <option>เลือกช่วงเวลากะ</option>
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
                                <label for="update-profile-form-9" class="form-label">เวลาออกกะ</label>
                                <input class="form-control" id="leavetime" type="time" name="leavetime" placeholder="เวลาออกกะ" value="{{$data->leavetime}}">
                            </div>
                            <div class="intro-y col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">เวลากะที่ทำจริง</label>
                                <select class="tom-select w-full" type="text" id="Period" name="Period" onchange="selectitem()">
                                    <option>เลือกช่วงเวลากะ</option>
                                    @php
                                    $Period = DB::table('tb_period')->get();
                                        if($Period)
                                        {
                                            foreach($Period as $data_Period2)
                                        {
                                        @endphp
                                            <option value="{{$data_Period2->id}}">เข้า {{$data_Period2->entertime}} ออก {{$data_Period2->leavetime}} </option>
                                        @php
                                        }
                                    }
                                    @endphp
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">ค่าแรงต่อชั่วโมง</label>
                                <input id="modal-form-4" name="rate" type="text" class="form-control" placeholder="ค่าแรงต่อชั่วโมง" value="{{$data->rate}}">
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">O.T</label>
                                <input id="modal-form-4" name="ot" type="text" class="form-control" placeholder="O.T" value="{{$data->ot}}" required>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-12 gap-3">
                                    <select class="form-select sm:mr-2 col-span-3" name="Midday_break" id="Midday_break" value="" data-placeholder="ผ่าเที่ยง" aria-label="Default select example" fdprocessedid="2wyzvl">
                                        <option selected="" disabled="">ผ่าเที่ยง</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                    <select class="form-select sm:mr-2 col-span-3" name="confined_space" id="confined_space" value="" data-placeholder="ที่อับอากาศ" aria-label="Default select example" fdprocessedid="2wyzvl">
                                        <option selected="" disabled="">ที่อับอากาศ</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                    <select class="form-select sm:mr-2 col-span-3" name="On_shift" id="On_shift" value="" data-placeholder="เข้ากะ" aria-label="Default select example" fdprocessedid="2wyzvl">
                                        <option selected="" disabled="">เข้ากะ</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                    <select class="form-select sm:mr-2 col-span-3" name="special" id="special" value="" data-placeholder="พิเศษ" aria-label="Default select example" fdprocessedid="2wyzvl">
                                        <option selected="" disabled="">พิเศษ</option>
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-12 gap-3">
                                    <input class="form-control col-span-4" type="text" id="allowance" name="allowance" placeholder="เบี้ยเลี้ยง" aria-label="default input inline 2" value="{{$data->allowance}}">
                                    <input class="form-control col-span-4" type="text" id="allowance_special" name="allowance_special" placeholder="เบี้ยเลี้ยงพิเศษ ต่างจังหวัด" aria-label="default input inline 3" value="{{$data->allowance_special}}">
                                    <input class="form-control col-span-4" type="text" id="car_fare" name="car_fare" placeholder="ค่ารถ" aria-label="default input inline 2" value="{{$data->car_fare}}">
                                </div>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">หักภาษี ณ.ที่จ่าย</label>
                                <select class="tom-select w-full" type="text" id="tax" name="tax" onchange="selectitem()">
                                    <option>เลือกการหักภาษี</option>
                                    <option>หัก 3%</option>
                                    <option>ไม่หัก 3%</option>
                                </select>
                            </div>
                            <div class="col-span-12">
                                <label class="form-label"></label>
                                <div class="grid grid-cols-12 gap-3">
                                    <input class="form-control col-span-2" type="text" id="Residual_wages" name="Residual_wages" placeholder="ค่าแรงตกค้าง" aria-label="default input inline 2" value="{{$data->Residual_wages}}">
                                    <input class="form-control col-span-2" type="text" id="social_security" name="social_security" placeholder="ประกันสังคม" aria-label="default input inline 3" value="{{$data->social_security}}">
                                    <input class="form-control col-span-2" type="text" id="advance_payment" name="advance_payment" placeholder="เบิกล่วงหน้า" aria-label="default input inline 2" value="{{$data->advance_payment}}">
                                    <input class="form-control col-span-2" type="text" id="deduction_advance_payment" name="deduction_advance_payment" placeholder="หักเบิกล่วงหน้า" aria-label="default input inline 2" value="{{$data->deduction_advance_payment}}">
                                    <input class="form-control col-span-2" type="text" id="extra_wages" name="extra_wages" placeholder="ค่าจ้างพิเศษ" aria-label="default input inline 3" value="{{$data->extra_wages}}">
                                </div>
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
                            <div class="text-slate-500 mt-2">Do you really want to delete {{$data->role}} {{$data->username}}? <br>This process cannot be undone.</div>
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
