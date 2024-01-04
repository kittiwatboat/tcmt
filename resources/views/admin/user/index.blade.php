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
                            <li class="breadcrumb-item active" aria-current="page">Admin</li>
                        </ol>
                    </nav>
                    <!-- END: Breadcrumb -->
                    @include('admin.menu.account_menu')
                    <!-- END: Account Menu -->
                </div>
                <!-- END: Top Bar -->
                <h2 class="intro-y text-lg font-medium mt-10">
                    User
                </h2>
                <div class="grid grid-cols-12 gap-6 mt-5">
                    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
                             <!-- BEGIN: Super Large Modal Toggle -->
                             <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#superlarge-modal-size-preview" class="btn btn-primary mr-1 mb-2">Add New Admin</a>
                             <!-- END: Super Large Modal Toggle -->
                        {{-- <a class="btn btn-primary shadow-md mr-2" href="{{url('/admin/add_user')}}">Add New Admin</a> --}}


                        <div class="hidden md:block mx-auto text-slate-500"></div>
                        <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                            <div class="w-56 relative text-slate-500">
                                <input type="text" id="search" class="form-control w-56 box pr-10" value="{{$search}}" placeholder="Search..." onchange="document.location.href=`{{url('/admin')}}?search=`+document.getElementById('search').value">
                                <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search" onclick="document.location.href=`{{url('/admin')}}?search=`+document.getElementById('search').value"></i>
                            </div>
                        </div>
                    </div>
                    <!-- BEGIN: Data List -->
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-2">
                            <thead>
                                <tr>
                                    <th class="whitespace-nowrap">USERNAME</th>
                                    <th class="whitespace-nowrap">NAME</th>
                                    <th class="whitespace-nowrap">ROLE</th>
                                    <th class="text-center whitespace-nowrap">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($user_list as $ul)
                                <tr class="intro-x">
                                    <td >
                                        <div> {{$ul->username}} </div>
                                    </td>
                                    <td >
                                        <div> {{$ul->firstname}} {{$ul->lastname}} </div>
                                    </td>
                                    <td>
                                        <div> {{$ul->role}} </div>
                                    </td>
                                    <td class="table-report__action w-56">
                                        <div class="flex justify-center items-center">
                                            @if ($ul->role != 'super admin')
                                            <a class="flex items-center mr-3" href="javascript:;" data-tw-toggle="modal" data-tw-target="#edit-modal-user{{$ul->id}}" ><i data-lucide="check-square" class="w-4 h-4 mr-1"></i>Edit</a>
                                            <div class="text-center"> <a href="javascript:;" data-tw-toggle="modal" data-tw-target="#delete-modal-user-{{$ul->id}}" class="btn btn-outline-danger"> Delete</a> </div> <!-- END: Modal Toggle -->
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
                                {{ $user_list->links('vendor.pagination.custom') }}
                            </ul>
                        </nav>
                        <select class="w-20 form-select box mt-3 sm:mt-0" id="show" name="show" onchange="document.location.href=`{{url('/admin')}}?show=${this.value}`" >
                            <option value="10" {{@$show=='10'?'selected':''}}>10</option>
                            <option value="25" {{@$show=='25'?'selected':''}}>25</option>
                            <option value="35" {{@$show=='35'?'selected':''}}>35</option>
                            <option value="50" {{@$show=='50'?'selected':''}}>50</option>
                        </select>
                    </div>
                    <!-- END: Pagination -->
                </div>

            </div>
            <!-- END: Content -->
        </div>
        <!-- *******BEGIN: Create Admin Modal -->
        <div id="superlarge-modal-size-preview" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- BEGIN: Modal Header -->
                        <div class="modal-header">
                            <h2 class="font-medium text-base mr-auto">ADD</h2>
                        </div>
                        <!-- END: Modal Header -->
                        <form action="{{url('/admin/create_user')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <!-- BEGIN: Modal Body -->
                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-1" class="form-label">Username</label>
                                <input id="modal-form-1" name="username" type="text" class="form-control" placeholder="ตัวอย่าง admin_name" value="{{old('username')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-2" class="form-label">Password</label>
                                <input id="modal-form-2" name="password" type="text" class="form-control" placeholder="ตัวอักษรขั้นต่ำ 8 ตัว" value="{{old('password')}}" placeholder="ตัวอักษร a-z,0-9 ต้องมีทั้งตัวพิมพ์เล็กและตัวพิมพ์ใหญ่ ขั้นต่ำ 8 ตัว" min="8" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-3" class="form-label">First name</label>
                                <input id="modal-form-3" name="firstname" type="text" class="form-control" placeholder="ชื่อ" value="{{old('firstname')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">Last name</label>
                                <input id="modal-form-4" name="lastname" type="text" class="form-control" placeholder="นามสกุล" value="{{old('lastname')}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label class="form-label">Role</label>
                                <select data-placeholder="Select your favorite actors" name="role" class="tom-select w-full" id="crud-form-2" >
                                    <option value="admin" selected>admin</option>
                                    <option value="viewer">viewer</option>
                                    {{-- <option value="2">PC & Laptop</option>
                                    <option value="3">Smartphone & Tablet</option>
                                    <option value="4">Photography</option> --}}
                                </select>
                            </div>
                        </div>
                        <!-- END: Modal Body -->
                        <div class="modal-footer">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                            <button type="submit" class="btn btn-primary w-20">Save</button>
                        </div>
                        <!-- END: Modal Footer -->
                        </form>
                    </div>
            </div>
        </div>
        <!-- *******END: Create Admin Modal -->
        <!-- *******BEGIN: Edit Admin Modal -->
        @foreach ($user_list as $ul2)
        <div id="edit-modal-user{{$ul2->id}}" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- BEGIN: Modal Header -->
                        <div class="modal-header">
                            <h2 class="font-medium text-base mr-auto">Edit admin <b>{{$ul2->username}}</b></h2>
                        </div>
                        <!-- END: Modal Header -->
                        <form action="{{url('/admin/update_user')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$ul2->id}}">
                        <!-- BEGIN: Modal Body -->
                        <div class="modal-body grid grid-cols-12 gap-4 gap-y-3">
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-1" class="form-label">Username</label>
                                <input id="modal-form-1" name="username" type="text" class="form-control" placeholder="ตัวอย่าง admin_name" value="{{$ul2->username}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-2" class="form-label">Password <span style="color: red">*ถ้าไม่ได้เปลี่ยน password ไม่จำเป็นต้องใส่</span></label>
                                <input id="modal-form-2" name="password" type="password" class="form-control" placeholder="ตัวอักษร a-z,0-9 ต้องมีทั้งตัวพิมพ์เล็กและตัวพิมพ์ใหญ่ ขั้นต่ำ 8 ตัว" min="8" value="">
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-3" class="form-label">First name</label>
                                <input id="modal-form-3" name="firstname" type="text" class="form-control" placeholder="ชื่อ" value="{{$ul2->firstname}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label for="modal-form-4" class="form-label">Last name</label>
                                <input id="modal-form-4" name="lastname" type="text" class="form-control" placeholder="นามสกุล" value="{{$ul2->lastname}}" required>
                            </div>
                            <div class="col-span-12 sm:col-span-6">
                                <label class="form-label">Role</label>
                                <select data-placeholder="Select your favorite actors" name="role" class="tom-select w-full" id="crud-form-2" >
                                    <option value="admin" @if ($ul2->role == 'admin') selected @endif>admin</option>
                                    <option value="viewer" @if ($ul2->role == 'viewer') selected @endif>viewer</option>
                                    {{-- <option value="2">PC & Laptop</option>
                                    <option value="3">Smartphone & Tablet</option>
                                    <option value="4">Photography</option> --}}
                                </select>
                            </div>
                        </div>
                        <!-- END: Modal Body -->
                        <div class="modal-footer">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-20 mr-1">Cancel</button>
                            <button type="submit" class="btn btn-primary w-20">Save</button>
                        </div>
                        <!-- END: Modal Footer -->
                        </form>
                    </div>
            </div>
        </div>
        @endforeach
        <!-- *******END: Edit Admin Modal -->
        <!-- *******BEGIN: Modal Delete Content -->
        @foreach ($user_list as $del_user)
        <div id="delete-modal-user-{{$del_user->id}}" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="p-5 text-center"> <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                            <div class="text-3xl mt-5">Are you sure?</div>
                            <div class="text-slate-500 mt-2">Do you really want to delete {{$del_user->role}} {{$del_user->username}}? <br>This process cannot be undone.</div>
                        </div>
                        <div class="px-5 pb-8 text-center">
                            <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                            <a href="/admin/delete_user/{{$del_user->id}}" class="btn btn-danger w-24">Delete</a> </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <!-- *******END: Modal Delete Content -->

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
            position: "top-end",
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
            position: "top-end",
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

    </body>
</html>
