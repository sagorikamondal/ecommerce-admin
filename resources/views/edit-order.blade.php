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
                                    <h3>Order #{{$orders->order_id}}</h3>
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
                                            <a href="#">
                                                <div class="text-tiny">Order detail</div>
                                            </a>
                                        </li>
                                        <li>
                                            <i class="icon-chevron-right"></i>
                                        </li>
                                        <li>
                                            <div class="text-tiny">Order #{{$orders->order_id}}</div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- order-detail -->
                                <div class="wg-order-detail">
                                    <div class="left flex-grow">
                                        <div class="wg-box mb-20">
                                            <div class="wg-table table-order-detail">
                                                <ul class="table-title flex items-center justify-between gap20 mb-24">
                                                    <li>
                                                        <div class="body-title">All item</div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown default">
                                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="body-title-2 flex items-center gap8">Sort<i class="h6 icon-chevron-down"></i></span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a href="javascript:void(0);">Name</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);">Quantity</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0);">Price</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                               
                                                <ul class="flex flex-column">
                                                    @foreach($orders->suborder as $product)
                                                
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/41.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap40 flex-grow">
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Product name</div>
                                                                <a href="product-list.php" class="body-title-2">{{$product->productdetails->product_name}}</a>
                                                            </div>
                                                         
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Quantity</div>
                                                                <div class="body-title-2">{{$product->quantity}}</div>
                                                            </div>
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Price</div>
                                                                <div class="body-title-2">₹{{$product->price}}</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                               
                                                    @endforeach
                                                   
                                                   

                                                    <!-- <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/44.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap40 flex-grow">
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Product name</div>
                                                                <a href="product-list.php" class="body-title-2">Kristin Watson</a>
                                                            </div>
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Quantity</div>
                                                                <div class="body-title-2">1</div>
                                                            </div>
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Price</div>
                                                                <div class="body-title-2">₹50.47</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/43.png" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap40 flex-grow">
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Product name</div>
                                                                <a href="product-list.php" class="body-title-2">Kristin Watson</a>
                                                            </div>
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Quantity</div>
                                                                <div class="body-title-2">1</div>
                                                            </div>
                                                            <div class="name">
                                                                <div class="text-tiny mb-1">Price</div>
                                                                <div class="body-title-2">₹50.47</div>
                                                            </div>
                                                        </div>
                                                    </li> -->
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wg-box">
                                       
                                            <div class="wg-table table-cart-totals">
                                                <ul class="table-title flex mb-24">
                                                    <li>
                                                        <div class="body-title">Cart Totals</div>
                                                    </li>
                                                    <li>
                                                        <div class="body-title">Price</div>
                                                    </li>
                                                </ul>
                                                <ul class="flex flex-column gap14">
                                                    <li class="cart-totals-item">
                                                        <span class="body-text">Subtotal:</span>
                                                        <span class="body-title-2">₹ {{$total}}</span>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="cart-totals-item">
                                                        <span class="body-text">Shipping:</span>
                                                        <span class="body-title-2">₹0.00</span>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="cart-totals-item">
                                                        <span class="body-text">Tax (GST):</span>
                                                        <span class="body-title-2">₹0.00</span>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="cart-totals-item">
                                                        <span class="body-title">Total price:</span>
                                                        <span class="body-title tf-color-1">₹ {{$total}}</span>
                                                    </li>

                                                </ul>
                                            </div>
                                           
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="wg-box mb-20 gap10">
                                            <div class="body-title">Summary</div>
                                            <div class="summary-item">
                                                <div class="body-text">Order ID</div>
                                                <div class="body-title-2">#{{$orders->order_id}}</div>
                                            </div>
                                            <div class="summary-item">
                                                <div class="body-text">Date</div>
                                                <div class="body-title-2">{{$orders->created_at}}</div>
                                            </div>
                                          
                                            <div class="summary-item">
                                                <div class="body-text">Total</div>
                                                <div class="body-title-2 tf-color-1">₹{{$total}}</div>
                                            </div>
                                        </div>
                                        <div class="wg-box mb-20 gap10">
                                            <div class="body-title">Shipping Address</div>
                                            <div class="body-text">{{$orders->billing_address}}</div>
                                        </div>
                                        <div class="wg-box mb-20 gap10">
                                            <div class="body-title">Payment Method</div>
                                            <div class="body-text">Pay on Delivery (Cash/Card). Cash on delivery (COD) available. Card/Net banking acceptance subject to device availability.</div>
                                        </div>
                                        <div class="wg-box gap10">
                                            <form action="{{url('/update_order')}}" method="post">
                                                @csrf
                                                <p  >Order status</p>
                                                <input type="hidden" name="id" value="{{$orders->order_id}}">
                                                <p><select name="status" id="">
                                                    <option value="pending">pending</option>
                                                    <option value="ofd">Out for delivery</option>
                                                    <option value="delivered">Delivered</option>
                                                </select></p>
                                                <p style="margin:top 10px;">
                                                <button class="btn btn-success" type="submit" style="height: 34px;">Change Status</button>
                                                </p>
                                              
                                               
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- /order-detail -->
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