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
                                    <h3>Order List</h3>
                                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                                        <li>
                                            <a href="index.php">
                                                <div class="text-tiny">Dashboard</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="text-tiny">Order</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Order List</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- order-list -->
                                <div class="wg-box">
                                    <div class="flex items-center justify-between gap10 flex-wrap">
                                        <div class="wg-filter flex-grow">
                                            <form class="form-search">
                                                <fieldset class="name">
                                                    <input type="text" placeholder="Search here..." class="" name="name" tabindex="2" value="" aria-required="true" required="">
                                                </fieldset>
                                                <div class="button-submit">
                                                    <button class="" type="submit"><i class="icon-search"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                        <a class="tf-button style-1 w208" href="oder-detail.php"><i class="icon-file-text"></i>Export all order</a>
                                    </div>
                                    <div class="wg-table table-all-category">
                                        <ul class="table-title flex gap20 mb-14">
                                            <li>
                                                <div class="body-title">Order Id</div>
                                             
                                            </li>
                                            <li>
                                                <div class="body-title">Billing Address</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Billing Name</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Total Price</div>
                                            </li>
                                           
                                          
                                            <li>
                                                <div class="body-title">Payment</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Status</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Tracking</div>
                                            </li>
                                            <li>
                                                <div class="body-title">Action</div>
                                            </li>
                                        </ul>
                                        <ul class="flex flex-column">
                                        @foreach($orders as $order)
                                          
                                  
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/51.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="product-list.php" class="body-title-2">{{$order->order_id}}</a>
                                                    </div>
                                                    <div class="body-text">{{$order->billing_address}}</div>
                                                    <div class="body-text">{{$order->billing_name}}</div>
                                                    <div class="body-text">₹7887</div>
                                                    <div class="body-text">{{$order->payment}}</div>
                                                  
                                                    <div>
                                                        <div class="block-available">{{$order->status}}</div>
                                                    </div>
                                                    <div>
                                                        <div class="block-tracking">Tracking</div>
                                                    </div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                        <a href="{{url('/order/order-details')}}/{{$order->order_id}}"><i class="icon-eye"></i></a>
                                                        </div>
                                          @php
                                                 $order_permisson=ltrim(Auth::user()->role->order_permission,',');
                                                 $permissions=explode(",",$order_permisson);
                                          @endphp

                                          @foreach($permissions as $permission)
                                                @if($permission=="edit")
                                                        <div class="item edit">
                                                            <a href="{{url('orders/edit-order')}}/{{$order->order_id}}"><i class="icon-edit-3"></i></a>
                                                        </div>
                                                           @endif
                                            @endforeach
                                            @foreach($permissions as $permission)
                                            @if($permission=="delete")
                                                        <div class="item trash">
                                                        <a href="{{url('orders/delete-order')}}/{{$order->order_id}}"><i class="icon-trash-2"></i></a>
                                                        </div>
                                                        @endif
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                            
                                            <!-- <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/53.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="product-list.php" class="body-title-2">Kristin Watson</a>
                                                    </div>
                                                    <div class="body-text">#7712309</div>
                                                    <div class="body-text">₹1,452.500</div>
                                                    <div class="body-text">1,638</div>
                                                    <div class="body-text">20</div>
                                                    <div>
                                                        <div class="block-available">Success</div>
                                                    </div>
                                                    <div>
                                                        <div class="block-tracking">Tracking</div>
                                                    </div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <i class="icon-eye"></i>
                                                        </div>
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/54.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="product-list.php" class="body-title-2">Kristin Watson</a>
                                                    </div>
                                                    <div class="body-text">#7712309</div>
                                                    <div class="body-text">₹1,452.500</div>
                                                    <div class="body-text">1,638</div>
                                                    <div class="body-text">20</div>
                                                    <div>
                                                        <div class="block-available">Success</div>
                                                    </div>
                                                    <div>
                                                        <div class="block-tracking">Tracking</div>
                                                    </div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <i class="icon-eye"></i>
                                                        </div>
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/55.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="product-list.php" class="body-title-2">Kristin Watson</a>
                                                    </div>
                                                    <div class="body-text">#7712309</div>
                                                    <div class="body-text">₹1,452.500</div>
                                                    <div class="body-text">1,638</div>
                                                    <div class="body-text">20</div>
                                                    <div>
                                                        <div class="block-not-available">Cancel</div>
                                                    </div>
                                                    <div>
                                                        <div class="block-tracking">Tracking</div>
                                                    </div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <i class="icon-eye"></i>
                                                        </div>
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/56.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="product-list.php" class="body-title-2">Kristin Watson</a>
                                                    </div>
                                                    <div class="body-text">#7712309</div>
                                                    <div class="body-text">₹1,452.500</div>
                                                    <div class="body-text">1,638</div>
                                                    <div class="body-text">20</div>
                                                    <div>
                                                        <div class="block-not-available">Cancel</div>
                                                    </div>
                                                    <div>
                                                        <div class="block-tracking">Tracking</div>
                                                    </div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <i class="icon-eye"></i>
                                                        </div>
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/57.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="product-list.php" class="body-title-2">Kristin Watson</a>
                                                    </div>
                                                    <div class="body-text">#7712309</div>
                                                    <div class="body-text">₹1,452.500</div>
                                                    <div class="body-text">1,638</div>
                                                    <div class="body-text">20</div>
                                                    <div>
                                                        <div class="block-available">Success</div>
                                                    </div>
                                                    <div>
                                                        <div class="block-tracking">Tracking</div>
                                                    </div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <i class="icon-eye"></i>
                                                        </div>
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/58.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="product-list.php" class="body-title-2">Kristin Watson</a>
                                                    </div>
                                                    <div class="body-text">#7712309</div>
                                                    <div class="body-text">₹1,452.500</div>
                                                    <div class="body-text">1,638</div>
                                                    <div class="body-text">20</div>
                                                    <div>
                                                        <div class="block-available">Success</div>
                                                    </div>
                                                    <div>
                                                        <div class="block-tracking">Tracking</div>
                                                    </div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <i class="icon-eye"></i>
                                                        </div>
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/59.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="product-list.php" class="body-title-2">Kristin Watson</a>
                                                    </div>
                                                    <div class="body-text">#7712309</div>
                                                    <div class="body-text">₹1,452.500</div>
                                                    <div class="body-text">1,638</div>
                                                    <div class="body-text">20</div>
                                                    <div>
                                                        <div class="block-available">Success</div>
                                                    </div>
                                                    <div>
                                                        <div class="block-tracking">Tracking</div>
                                                    </div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <i class="icon-eye"></i>
                                                        </div>
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="product-item gap14">
                                                <div class="image no-bg">
                                                    <img src="images/products/60.png" alt="">
                                                </div>
                                                <div class="flex items-center justify-between gap20 flex-grow">
                                                    <div class="name">
                                                        <a href="product-list.php" class="body-title-2">Kristin Watson</a>
                                                    </div>
                                                    <div class="body-text">#7712309</div>
                                                    <div class="body-text">₹1,452.500</div>
                                                    <div class="body-text">1,638</div>
                                                    <div class="body-text">20</div>
                                                    <div>
                                                        <div class="block-available">Success</div>
                                                    </div>
                                                    <div>
                                                        <div class="block-tracking">Tracking</div>
                                                    </div>
                                                    <div class="list-icon-function">
                                                        <div class="item eye">
                                                            <i class="icon-eye"></i>
                                                        </div>
                                                        <div class="item edit">
                                                            <i class="icon-edit-3"></i>
                                                        </div>
                                                        <div class="item trash">
                                                            <i class="icon-trash-2"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li> -->
                                        </ul>
                                    </div>
                                    <div class="divider"></div>
                                    <div class="flex items-center justify-between flex-wrap gap10">
                                        <div class="text-tiny">Showing 10 entries</div>
                                        <ul class="wg-pagination">
                                            <li>
                                                <a href="#"><i class="icon-chevron-left"></i></a>
                                            </li>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li class="active">
                                                <a href="#">2</a>
                                            </li>
                                            <li>
                                                <a href="#">3</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="icon-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- /order-list -->
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