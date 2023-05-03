<div id="left-sidebar" class="sidebar">
    <div class="sidebar-scroll">
        <div class="user-account">
<!--            <img src="./icon/user.png" class="rounded- user-photo" style="width: 34px;margin-left: 29px" alt="User Profile Picture">-->

            <ul class="row list-unstyled">
                <li class="col-4">
                    <small class="font-weight-bold">Staff</small>
                    <h6>0</h6>
                </li>
                <li class="col-4">
                    <small class="font-weight-bold">Stores</small>
                    <h6>0</h6>
                </li>
                <li class="col-4">
                    <small class="font-weight-bold">Items</small>
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
                            <a href="user_dir.php" ><img src="./icon/4213424_building_estate_home_house_property_icon%20(1).png" height="21" alt="icons"></i> <span class="side_bar_adjust">Dashboard</span></a>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="./icon/7787524_cart_shopping_shop_ecommerce_buy_icon.png" height="21" alt="icons"> <span class="side_bar_adjust">Print of Sale</span></a>
                            <ul>
                                <li><a href="carts">New Sales Order</a></li>

                                <li><a href="sales_history.php">Sales History</a></li>

                                <li><a href="new_return_receipt">New Return Receipt</a></li>

                                <li><a href="">Held Receipts</a></li>

                                <li><a href="">End of Day Procedure</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="./icon/8666755_users_group_icon.png" height="21" alt="icons"> <span class="side_bar_adjust">Customers</span></a>
                            <ul>
                                <li><a href="customer-list.php">Customers List</a></li>
                                <li><a href="reward-managers.php">Reward Manager</a></li>
                                <li><a href="">Create an E-mail Campaign</a></li>
                                <li><a href="customer-elogs">Customer Logs</a></li>
                                <li><a href="">Customer Center</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="./icon/8666587_cloud_snow_icon.png" height="21" alt="icons"> <span class="side_bar_adjust">Inventory</span></a>
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
                            <a href="#" class="has-arrow"><img src="./icon/622396_bag_shopping_basket_buy_ecommerce_icon.png" alt="icons" height="21"> <span class="side_bar_adjust">Purchasing</span></a>
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
                            <a href="#" class="has-arrow"><img src="./icon/4213403_bill_check_ecommerce_invoice_payment_icon.png" alt="icons" height="21"> <span class="side_bar_adjust">Ecommerce</span></a>
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
                            <a href="#" class="has-arrow"><img src="./icon/3671895_group_user_icon.png" height="21" alt="icons"> <span class="side_bar_adjust">Employees</span></a>
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
                            <a href="#" class="has-arrow"><img src="./icon/8679238_money_euro_circle_icon.png" height="21" alt="icons"> <span class="side_bar_adjust">Financial</span></a>
                            <ul>
                                <li><a href="">Connect to QuickBooks</a> </li>
                                <li><a href="expenses">Manage Expenses</a> </li>
                                <li><a href="accounts">Manage Accounts</a> </li>
                                <li><a href="debt">Debtors List</a> </li>
                                <li><a href="chque_man">Cheque Manager</a> </li>
                            </ul>
                        </li>
                        <li>

                            <a href="#" class="has-arrow"><img src="./icon/3671868_front_store_icon.png" height="21" alt="icons"> <span class="side_bar_adjust">Stores</span></a>
                            <ul>
                                <li><a href="">Store Exchange Center</a></li>
                                <li><a href="">Configure Store Exchange</a></li>
                                <li><a href="">View Activty Log</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="./icon/7218397_presentation_business_infographic_report_corporate_icon.png" alt="icons" height="21"> <span class="side_bar_adjust">Reports</span></a>

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
                            <a href="#" class="has-arrow"><img src="./icon/7215822_presentation_business_infographic_report_corporate_icon.png" alt="icons" height="21"> <span class="side_bar_adjust">Windows</span></a>

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
                            <a href="#" class="has-arrow"><img src="./icon/17787557_configuration_settings_gear_options_preferences_icon.png" alt="icons" height="21"> <span class="side_bar_adjust">Tools</span></a>
                            <ul>
                                <li><a href="">Print Designer</a></li>
                                <li><a href="">User Information</a></li>
                                <li><a href="">Addons</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="has-arrow"><img src="./icon/3200448_centre_support_service_drawn_men_icon.png" height="21" alt="icons"> <span class="side_bar_adjust">Help</span></a>
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
                            <a href="#" class="has-arrow"><img src="./icon/8666692_power_icon.png" height="21" alt="icons"> <span class="side_bar_adjust">Logout</span></a>

                        </li>
                    </ul>
                </nav>
            </div>

        </div>

    </div>

</div>
