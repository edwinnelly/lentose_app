<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
            <img src="icons/logo2.png" class="rounded- user-photo" width="200" alt="User Profile Picture">

            <hr>
            <ul class="row list-unstyled">
                <li class="col-4">
                    <small>Staff</small>
                    <h6>0</h6>
                </li>
                <li class="col-4">
                    <small>Stores</small>
                    <h6>0</h6>
                </li>
                <li class="col-4">
                    <small>Items</small>
                    <h6><?php
                        echo $cc->total_prod; ?></h6>
                </li>
            </ul>
        </div>
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="index.html#menu">Menu</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="index.html#Chat"><i class="icon-book-open"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="index.html#setting"><i class="icon-settings"></i></a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="index.html#question"><i class="icon-question"></i></a></li>
        </ul>
        <div class="tab-content p-l-0 p-r-0">
            <div class="tab-pane active" id="menu">
                <nav id="left-sidebar-nav" class="sidebar-nav">
                    <ul id="main-menu" class="metismenu">
                        <li class="active">
                            <a href="user_dir.php" ><img src="https://cdn-icons-png.flaticon.com/512/748/748060.png" height="21"></i> <span class="side_bar_adjust">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/7893/7893610.png"  height="21"> <span class="side_bar_adjust">Print of Sale</span></a>
                            <ul>
                                <li><a href="carts">New Sales Order</a></li>
                                <li><a href="sales_receipt">New Sales Receipt</a></li>
                                <li><a href="">New Return Receipt</a></li>
                                <li><a href="">Sales History</a></li>
                                <li><a href="">Held Receipts</a></li>
                                <li><a href="">Sales History</a></li>
                                <li><a href="">Held Receipts</a></li>
                                <li><a href="">End of Day Procedure</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/7893/7893609.png" height="21"> <span class="side_bar_adjust">Customers</span></a>
                            <ul>
                                <li><a href="customer-list.php">Customers List</a></li>
                                <li><a href="reward-managers.php">Reward Manager</a></li>
                                <li><a href="">Create an E-mail Campaign</a></li>
                                <li><a href="">Customer Center</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/3759/3759321.png" height="21"> <span class="side_bar_adjust">Inventory</span></a>
                            <ul>
                                <li><a href="item_categories.php">Categories</a></li>
                                <li><a href="add_items.php"> New Item</a></li>
                                <li><a href="item_list.php">Item List</a></li>
                                <li><a href="quality_adjustment.php">New Quality Adjustment</a></li>
                                <li><a href="cost-adjustment.php">New Cost Adjustment</a></li>
                                <li><a href="vendor-list.php">Suppliers</a></li>
                                <li><a href="adjustment-history.php">Quantity Adjustment History</a></li>
                                <li><a href="cost-history.php">Cost Adjustment History</a></li>
                                <li><a href="held-memos.php">Held Quantity Memos</a></li>
                                <li><a href="cost-memos.php">Held Cost Memos</a></li>
                                <li><a href="reminder.php">Reminders</a></li>
                                <li><a href="">Start Physical Inventory</a></li>
                                <li><a href="price-manager.php">Price Manager</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/7893/7893628.png" height="21"> <span class="side_bar_adjust">Purchasing</span></a>
                            <ul>
                                <li><a href="">New Receiving Voucher</a></li>
                                <li><a href="">New Return Voucher</a></li>
                                <li><a href="">New Purchase order</a></li>
                                <li><a href="">New Vender</a></li>
                                <li><a href="">Receiving History</a></li>
                                <li><a href="">Held Voucher</a></li>
                                <li><a href="">Purchase Order List</a></li>
                                <li><a href="">Vendor List</a></li>
                                <li><a href="">Suggest POs</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/9013/9013720.png" height="21"> <span class="side_bar_adjust">Ecommerce</span></a>
                            <ul>

                                <li><a href="ecom-customers.php">Customers</a></li>
                                <li><a href="customer_history.php">Customer History</a></li>
                                <li><a href="customer_order.php">Customer Order</a></li>
                                <li><a href="orders.php">Orders</a></li>
                                <li><a href="ecom_category">Product Category</a></li>
                                <li><a href="ads_controls">Ads Category</a></li>
                                <li><a href="">New Receiving Voucher</a></li>
                                <li><a href="">New Return Voucher</a></li>
                                <li><a href="">New Purchase order</a></li>
                                <li><a href="">New Vender</a></li>
                                <li><a href="">Receiving History</a></li>
                                <li><a href="">Held Voucher</a></li>
                                <li><a href="">Purchase Order List</a></li>
                                <li><a href="page-pricing.php">Vendor List</a></li>
                                <li><a href="">View Transaction</a></li>
                                <li><a href="">Suggest POs</a></li>
                            </ul>
                        </li>


                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/266/266134.png" height="21"> <span class="side_bar_adjust">Employees</span></a>
                            <ul>
                                <li><a href="employee-list.php">Employee List</a></li>
                                <li><a href="">Security</a></li>
                                <li><a href="">CLock In/Out</a></li>
                                <li><a href="">New Employee Time Entry</a></li>
                                <li><a href="">Time Clock History</a></li>
                                <li><a href="">Manage Clocked-in Employees</a></li>

                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/7893/7893614.png" height="21"> <span class="side_bar_adjust">Financial</span></a>
                            <ul>
                                <li><a href="">Connect to QuickBooks</a> </li>
                                <li><a href="">Debtors List</a> </li>
                            </ul>
                        </li>
                        <li>

                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/7893/7893632.png" height="21"> <span class="side_bar_adjust">Stores</span></a>
                            <ul>
                                <li><a href="">Store Exchange Center</a></li>
                                <li><a href="">Configure Store Exchange</a></li>
                                <li><a href="">View Activty Log</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/3757/3757941.png" height="21"> <span class="side_bar_adjust">Reports</span></a>

                            <ul>
                                <li><a href="">Report Center</a> </li>
                                <li><a href="">Dashboard</a> </li>
                                <li><a href="">Run Multiple Reports</a> </li>
                                <li><a href="">View Drawer Count History</a> </li>
                                <li><a href="">Merchant Service Center</a> </li>
                                <li><a href="">Sales</a> </li>
                                <li><a href="">Cash Drawer </a> </li>
                                <li><a href="">Payments </a> </li>
                                <li><a href="">Customers </a> </li>
                                <li><a href="">Items</a> </li>
                                <li><a href="">Purchasing</a> </li>
                                <li><a href="">Employees</a> </li>
                                <li><a href="">Memorized Reports</a> </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/3757/3757985.png" height="21"> <span class="side_bar_adjust">Windows</span></a>

                            <ul>
                                <li><a href="">New Sales Receipt</a> </li>
                                <li><a href="">General Sales - Best or Worst Sellers</a> </li>
                                <li><a href="">Home</a> </li>
                                <li><a href="">New Receiving Voucher> New Vendor</a> </li>
                                <li><a href="">New style</a></li>
                                <li><a href="">New Customer</a></li>
                              
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/3759/3759326.png" height="21"> <span class="side_bar_adjust">Tools</span></a>
                            <ul>
                                <li><a href="">Print Designer</a></li>
                                <li><a href="">User Information</a></li>
                                <li><a href="">Addons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/3759/3759313.png" height="21"> <span class="side_bar_adjust">Help</span></a>
                            <ul>
                                <li><a href="">Help Content</a></li>
                                <li><a href="">Help on this Window</a></li>
                                <li><a href="">Keyboard ShortCuts</a></li>
                                <li><a href="">Hardware TroubleShooter</a></li>
                                <li><a href="">Learning Center</a></li>
                                <li><a href="">User Community</a></li>
                                <li><a href="">Help & support</a></li>
                                <li><a href="">Send Feedback</a></li>
                                <li><a href="">What's New<span class="badge badge-info float-right">New</span></a></li>
                                <li><a href="">User Guides</a></li>
                                <li><a href="">Show Getting Started Help</a></li>
                                <li><a href="">Registration</a></li>
                                <li><a href="">Manage My License</a></li>
                                <li><a href="">Privacy Statemennt</a></li>
                                <li><a href="">Software Updates</a></li>
                                <li><a href="">About Point of Sale</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="https://cdn-icons-png.flaticon.com/512/2529/2529508.png" height="21"> <span class="side_bar_adjust">Logout</span></a>

                        </li>
                    </ul>
                </nav>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="Chat">
                <form>
                    <div class="input-group m-b-20">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="right_chat list-unstyled">
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Chris Fox</span>
                                    <span class="message">Designer, Blogger</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Joge Lucky</span>
                                    <span class="message">Java Developer</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Isabella</span>
                                    <span class="message">CEO, Thememakker</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="offline">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Folisise Chosielie</span>
                                    <span class="message">Art director, Movie Cut</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="online">
                        <a href="javascript:void(0);">
                            <div class="media">
                                <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                <div class="media-body">
                                    <span class="name">Alexander</span>
                                    <span class="message">Writter, Mag Editor</span>
                                    <span class="badge badge-outline status"></span>
                                </div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="setting">
                <h6>Choose Skin</h6>
                <ul class="choose-skin list-unstyled">
                    <li data-theme="purple">
                        <div class="purple"></div>
                        <span>Purple</span>
                    </li>
                    <li data-theme="blue">
                        <div class="blue"></div>
                        <span>Blue</span>
                    </li>
                    <li data-theme="cyan" class="active">
                        <div class="cyan"></div>
                        <span>Cyan</span>
                    </li>
                    <li data-theme="green">
                        <div class="green"></div>
                        <span>Green</span>
                    </li>
                    <li data-theme="orange">
                        <div class="orange"></div>
                        <span>Orange</span>
                    </li>
                    <li data-theme="blush">
                        <div class="blush"></div>
                        <span>Blush</span>
                    </li>
                </ul>
                <hr>
                <h6>General Settings</h6>
                <ul class="setting-list list-unstyled">
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Report Panel Usag</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Email Redirect</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox" checked>
                            <span>Notifications</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Auto Updates</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Offline</span>
                        </label>
                    </li>
                    <li>
                        <label class="fancy-checkbox">
                            <input type="checkbox" name="checkbox">
                            <span>Location Permission</span>
                        </label>
                    </li>
                </ul>
            </div>
            <div class="tab-pane p-l-15 p-r-15" id="question">
                <form>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="icon-magnifier"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search...">
                    </div>
                </form>
                <ul class="list-unstyled question">
                    <li class="menu-heading">HOW-TO</li>
                    <li><a href="javascript:void(0);">How to Create Campaign</a></li>
                    <li><a href="javascript:void(0);">Boost Your Sales</a></li>
                    <li><a href="javascript:void(0);">Website Analytics</a></li>
                    <li class="menu-heading">ACCOUNT</li>
                    <li><a href="javascript:void(0);">Cearet New Account</a></li>
                    <li><a href="javascript:void(0);">Change Password?</a></li>
                    <li><a href="javascript:void(0);">Privacy &amp; Policy</a></li>
                    <li class="menu-heading">BILLING</li>
                    <li><a href="javascript:void(0);">Payment info</a></li>
                    <li><a href="javascript:void(0);">Auto-Renewal</a></li>
                    <li class="menu-button m-t-30">
                        <a href="javascript:void(0);" class="btn btn-primary"><i class="icon-question"></i> Need Help?</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

</div>
