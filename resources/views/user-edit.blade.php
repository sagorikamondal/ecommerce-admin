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
                                    <h3>Edit User</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php"><div class="text-tiny">Dashboard</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#"><div class="text-tiny">User</div></a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Edit User</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- add-new-user -->
                                <form class="form-add-new-user form-style-2" action="{{url('/admin/user_update')}}" method="post">
                                    @csrf
                                    <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Account</h5>
                                           
                                        </div>
                                        <div class="right flex-grow">
                                            <input type="hidden" name="id" value="{{$record->id}}">
                                        <fieldset class="name mb-24">
                                                <div class="body-title mb-10">Role</div>
                                                <select name="role_id" id="">
                                                    <option value="">Choose Role</option>
                                                    @foreach($roles as $role)
                                                    <option value="{{$role->role_id}}" @if($role->role_id==$record->role_id) selected @endif>{{$role->role_name}}</option>
                                                    @endforeach
                                                </select>
                                            </fieldset>
                                            <fieldset class="name mb-24">
                                                <div class="body-title mb-10">Name</div>
                                                <input class="flex-grow" type="text" placeholder="Username" name="user_name" tabindex="0" value="{{$record->name}}" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="email mb-24">
                                                <div class="body-title mb-10">Email</div>
                                                <input class="flex-grow" type="email" placeholder="Email" name="email" tabindex="0"value="{{$record->email}}" aria-required="true" required="">
                                            </fieldset>
                                            <fieldset class="password mb-24">
                                                <div class="body-title mb-10">Password</div>
                                                <input class="password-input" type="password" placeholder="Enter password" name="password" tabindex="0" value="{{$record->password}}"aria-required="true" required="">
                                                <span class="show-pass">
                                                    <i class="icon-eye view"></i>
                                                    <i class="icon-eye-off hide"></i>
                                                </span>
                                            </fieldset>
                                            <fieldset class="name mb-24">
                                                <div class="body-title mb-10">Status</div>
                                                <select name="status" id="">
                                                    <option value="active" @if($record->status=='active') selected @endif>active</option>
                                                    <option value="pending"  @if($record->status=='pending') selected @endif>pending</option>
                                                  
                                                </select>
                                            </fieldset>
                                            
                                        </div>
                                    </div>
                                    <!-- <div class="wg-box">
                                        <div class="left">
                                            <h5 class="mb-4">Pernission</h5>
                                            <div class="body-text">Items that the account is allowed to edit</div>
                                        </div>
                                        <div class="right flex-grow">
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Add product</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="add-product" id="add-product1" checked>
                                                        <label class="" for="add-product1"><span class="body-title-2">Allow</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="add-product" id="add-product2">
                                                        <label class="" for="add-product2"><span class="body-title-2">Deny</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Update product</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="update-product" id="update-product1">
                                                        <label class="" for="update-product1"><span class="body-title-2">Allow</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="update-product" id="update-product2" checked>
                                                        <label class="" for="update-product2"><span class="body-title-2">Deny</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Delete product</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="delete-product" id="delete-product1" checked>
                                                        <label class="" for="delete-product1"><span class="body-title-2">Allow</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="delete-product" id="delete-product2">
                                                        <label class="" for="delete-product2"><span class="body-title-2">Deny</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="mb-24">
                                                <div class="body-title mb-10">Apply discount</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="apply-product" id="apply-product1">
                                                        <label class="" for="apply-product1"><span class="body-title-2">Allow</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="apply-product" id="apply-product2" checked>
                                                        <label class="" for="apply-product2"><span class="body-title-2">Deny</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <fieldset class="">
                                                <div class="body-title mb-10">Create coupon</div>
                                                <div class="radio-buttons">
                                                    <div class="item">
                                                        <input class="" type="radio" name="create-product" id="create-product1">
                                                        <label class="" for="create-product1"><span class="body-title-2">Allow</span></label>
                                                    </div>
                                                    <div class="item">
                                                        <input class="" type="radio" name="create-product" id="create-product2" checked>
                                                        <label class="" for="create-product2"><span class="body-title-2">Deny</span></label>
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div> -->
                                         
                                    <div class="bot">
                                        @php
                                    $user_permisson=ltrim(Auth::user()->role->user_permission,',');
                                                 $permissions=explode(",",$user_permisson);
                                          @endphp

                                          @foreach($permissions as $permission)
                                                @if($permission=="edit") 
                                        <button class="tf-button w180" type="submit">Update</button>
                                        @endif
                                        @endforeach
                                    </div>
                                  

                                </form>
                                <!-- /add-new-user -->
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 Design with</div>
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