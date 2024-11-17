@extends("layouts.main")
                @section("preload")
                <!-- preload -->
               <!-- @include("preload") -->
                <!-- /preload -->
                 @endsection
             @section("main-content")
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                                    <h3>Create Role</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">Roles</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Create role</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- create-roles -->
                                <form class="form-create-role" action="{{url('/roles/store_role')}}" method="post">
                                    @csrf
                                    <div class="wg-box mb-24">
                                        <fieldset class="name">
                                            <div class="body-title mb-10">Name</div>
                                            <input class="flex-grow" type="text" placeholder="Username" name="role_name" tabindex="0" value="{{$role_edit->role_name}}" aria-required="true" required="" >
                                        </fieldset>
                                        <div class="wg-table table-create-role">
                                            <ul class="table-title flex gap20 mb-14">
                                                <li>
                                                    <div class="body-title">Permissions</div>
                                                </li>    
                                            </ul>
                                            <ul class="flex flex-column">
                                                @php
                                                $roles=ltrim($role_edit->role_permission,',');
                                            
                                                $role=explode(",",$roles);
                                               
                                                @endphp
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Roles</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox" name="role[]" value="">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="role[]" value="index"  @if(in_array("index",$role)) checked @endif>
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="role[]" value="create" @if(in_array("create",$role)) checked @endif>
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="role[]" value="edit" @if(in_array("edit",$role)) checked @endif>
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="role[]" value="delete" @if(in_array("delete",$role)) checked @endif>
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                @php
                                                $user_permissions=ltrim($role_edit->user_permission,',');
                                            
                                                $user_permission=explode(",",$user_permissions);
                                               
                                                @endphp
                                                <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Users</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox" name="user[]" value="">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="user[]" value="index" @if(in_array("index",$user_permission)) checked @endif>
                                                        <label class=""><div class="body-text" >Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="user[]" value="create" @if(in_array("create",$user_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="user[]" value="edit"  @if(in_array("edit",$user_permission)) checked @endif>
                                                        <label class=""><div class="body-text" >Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="user[]" value="delete" @if(in_array("delete",$user_permission)) checked @endif>
                                                        <label class=""><div class="body-text" >Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                @php
                                                $product_permissions=ltrim($role_edit->product_permission,',');
                                            
                                                $product_permission=explode(",",$product_permissions);
                                               
                                                @endphp
                                                    <div class="body-text">Product</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox" name="product[]" value="">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="product[]" value="index" @if(in_array("index",$product_permission)) checked @endif>
                                                        <label class=""><div class="body-text" >Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="product[]" value="create" @if(in_array("create",$product_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="product[]" value="edit" @if(in_array("edit",$product_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="product[]" value="delete" @if(in_array("delete",$product_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <li class="item gap20 wrap-checkbox">
                                                @php
                                                $category_permissions=ltrim($role_edit->category_permission,',');
                                            
                                                $category_permission=explode(",",$category_permissions);
                                               
                                                @endphp
                                                    <div class="body-text">Category</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox" name="category[]" value="">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="category[]" value="index"  @if(in_array("index",$category_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="category[]" value="create"  @if(in_array("create",$category_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="category[]" value="edit"  @if(in_array("edit",$category_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="category[]" value="delete"  @if(in_array("delete",$category_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                                <!-- <li class="item gap20 wrap-checkbox">
                                                    <div class="body-text">Attributes</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox">
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox">
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li> -->
                                                <li class="item gap20 wrap-checkbox">
                                                @php
                                                $order_permissions=ltrim($role_edit->order_permission,',');
                                            
                                                $order_permission=explode(",",$order_permissions);
                                               
                                                @endphp
                                                    <div class="body-text">Order</div>
                                                    <div class="flex items-center gap10">
                                                        <input class="total-checkbox" type="checkbox" name="order[]" >
                                                        <label class=""><div class="body-text">All</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" name="order[]" value="index"   @if(in_array("index",$order_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Index</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" value="create" name="order[]"  @if(in_array("create",$order_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Create</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" value="edit" name="order[]"  @if(in_array("edit",$order_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Edit</div></label>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <input class="checkbox-item" type="checkbox" value="delete" name="order[]"  @if(in_array("delete",$order_permission)) checked @endif>
                                                        <label class=""><div class="body-text">Delete</div></label>
                                                    </div>
                                                </li>
                                               
                                                   
                                            
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="bot">
                                    @php
                                    $role_permisson=ltrim(Auth::user()->role->role_permission,',');
                                                 $permissions=explode(",",$role_permisson);
                                          @endphp

                                          @foreach($permissions as $permission)
                                                @if($permission=="create") 
                                       
                                        <button class="tf-button w180" type="submit">Save</button>
                                        @endif
                                        @endforeach
                                    </div>
                                </form>
                                <!-- /create-roles -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024. Design with</div>
                            <i class="icon-heart"></i>
                            <div class="body-text">by <a href="https://mridangsolution.com/">Mridang Solution</a> All rights reserved.</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->
@endsection