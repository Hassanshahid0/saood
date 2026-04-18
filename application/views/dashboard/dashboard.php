<!-- bootstrap datepicker -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/POS/js/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>frequent_changing/js/jquery.spincrement.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>frequent_changing/js/jquery.spincrement.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/custom/dashboard.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>frequent_changing/css/dashboard_button.css">
<!-- Content Header (Page header) -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/bower_components/graph/chart.min.js"></script>
<input type="hidden" id="purchase" value="<?php echo lang('purchase'); ?>">
<input type="hidden" id="sale" value="<?php echo lang('sale'); ?>">
<input type="hidden" id="waste" value="<?php echo lang('waste'); ?>">
<input type="hidden" id="expense" value="<?php echo lang('expense'); ?>">
<input type="hidden" id="cust_rcv" value="<?php echo lang('cust_rcv'); ?>">
<input type="hidden" id="supp_pay" value="<?php echo lang('supp_pay'); ?>">

<input type="hidden" id="purchase_value" value="<?php echo escape_output(getAmtP($purchase_sum->purchase_sum)) ?>">
<input type="hidden" id="sale_value" value="<?php echo escape_output(getAmtP($sale_sum->sale_sum)) ?>">
<input type="hidden" id="waste_value" value="<?php echo escape_output(getAmtP($waste_sum->waste_sum)) ?>">
<input type="hidden" id="expense_value" value="<?php echo escape_output(getAmtP($expense_sum->expense_sum)) ?>">
<input type="hidden" id="cust_rcv_value" value="<?php echo escape_output(getAmtP($customer_due_receive_sum->customer_due_receive_sum)) ?>">
<input type="hidden" id="supp_pay_value" value="<?php echo escape_output(getAmtP($supplier_due_payment_sum->supplier_due_payment_sum)) ?>">

<input type="hidden" id="current_orders_value" value="<?php echo escape_output(getAmtP($current_orders)) ?>">
<input type="hidden" id="previous_orders_value" value="<?php echo escape_output(getAmtP($previous_orders)) ?>">
<input type="hidden" id="current_revenue_value" value="<?php echo escape_output(getAmtP($current_revenue)) ?>">
<input type="hidden" id="previous_revenue_value" value="<?php echo escape_output(getAmtP($previous_revenue)) ?>">
<input type="hidden" id="current_average_receipt_value" value="<?php echo escape_output(getAmtP($current_average_receipt)) ?>">
<input type="hidden" id="previous_average_receipt_value" value="<?php echo escape_output(getAmtP($previous_average_receipt)) ?>">
<input type="hidden" id="dinein_count" value="<?php echo escape_output($dinein_count->dinein_count) ?>">
<input type="hidden" id="take_away_count" value="<?php echo escape_output($take_away_count->take_away_count) ?>">
<input type="hidden" id="delivery_count" value="<?php echo escape_output($delivery_count->delivery_count) ?>">
<!-- Main content -->
<section class="main-content-wrapper dashboard_content db-main-section" style="background: #FCF9F3; min-height: 100vh; padding-left: 45px; padding-right: 20px;">
    <!-- New SaFood Dashboard UI -->
     
    <!-- style="width: 120px; text-align: right; padding-right: 18px; display: flex; align-items: center; justify-content: flex-end; gap: 4px;" -->
    <div data-layer="Frame 2085667392" class="Frame2085667392 db-wrapper"
     style="width: 100%;flex-direction: column;justify-content: flex-start;align-items: center;gap: 0px;display: inline-flex"
     >
        <!-- Header Section -->
        <div data-layer="S4" class="S4 db-header-section" style="align-self: stretch; padding: 0px 0px 0px; flex-direction: column; justify-content: flex-start; align-items: flex-start; display: flex">
            <div data-layer="Container" class="Container db-header-top" style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex; margin-top:20px">
                <!-- Welcome Message -->
                <div data-layer="Frame 34" class="Frame34 db-welcome-msg" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; display: inline-flex">
                    <div data-layer="Hi Ameer," class="HiAmeer" style="align-self: stretch; color: #887E72; font-size: 14px; font-family: DM Sans; font-weight: 500; line-height: 24px; word-wrap: break-word">Hi <?php echo escape_output($this->session->userdata('first_name') ?: 'User'); ?>,</div>
                    <div data-layer="Welcome to SaFood!" class="WelcomeToSafood" style="color: #2C2416; font-size: 28px; font-family: DM Sans; font-weight: 600; line-height: 42px; word-wrap: break-word">Welcome to SaFood!</div>
                </div>
                <!-- Right Side Icons -->
                <div data-layer="Container" class="Container db-top-right-icons" style="padding-right: 12px; justify-content: flex-start; align-items: center; gap: 20px; display: flex">
                    <!-- Notification Bell -->
                    <div data-layer="Container" class="Container" style="width: 50px; height: 50px; background: white; border-radius: 14px; justify-content: center; align-items: center; display: flex; cursor: pointer;">
                        <div data-layer="Button" class="Button" style="position: relative; border-radius: 10px; display: flex; justify-content: center; align-items: center;">
                            <div data-svg-wrapper data-layer="Icon" class="Icon" style="position: relative;">
                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_40000099_4660)">
                                <path d="M7.69873 15.7461C7.83035 15.974 8.01965 16.1633 8.2476 16.2949C8.47556 16.4265 8.73414 16.4958 8.99735 16.4958C9.26057 16.4958 9.51915 16.4265 9.74711 16.2949C9.97506 16.1633 10.1644 15.974 10.296 15.7461" stroke="#6E665A" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2.4459 11.4916C2.34795 11.599 2.28331 11.7325 2.25984 11.8759C2.23637 12.0193 2.25509 12.1664 2.31371 12.2994C2.37234 12.4324 2.46834 12.5455 2.59005 12.6249C2.71175 12.7043 2.85391 12.7466 2.99924 12.7467H14.9958C15.1411 12.7468 15.2833 12.7046 15.405 12.6254C15.5268 12.5461 15.623 12.4331 15.6817 12.3003C15.7405 12.1674 15.7594 12.0203 15.7361 11.8768C15.7128 11.7334 15.6484 11.5998 15.5506 11.4924C14.5534 10.4644 13.4962 9.37197 13.4962 5.9987C13.4962 4.80557 13.0222 3.66131 12.1786 2.81764C11.3349 1.97397 10.1906 1.5 8.9975 1.5C7.80437 1.5 6.66011 1.97397 5.81644 2.81764C4.97277 3.66131 4.4988 4.80557 4.4988 5.9987C4.4988 9.37197 3.44086 10.4644 2.4459 11.4916Z" stroke="#6E665A" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_40000099_4660">
                                <rect width="17.9948" height="17.9948" fill="white"/>
                                </clipPath>
                                </defs>
                                </svg>
                            </div>
                            <div data-svg-wrapper data-layer="Text" class="Text" style="position: absolute; top: 0; right: 0;">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 3.9974C0 1.78969 1.78969 0 3.9974 0C6.2051 0 7.99479 1.78969 7.99479 3.9974C7.99479 6.2051 6.2051 7.99479 3.9974 7.99479C1.78969 7.99479 0 6.2051 0 3.9974Z" fill="#DC2626"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <!-- Language Selector -->
                    <div data-layer="Container" class="Container" style="position: relative; padding: 16px 20px; background: white; border-radius: 14px; justify-content: flex-start; align-items: center; gap: 6px; display: flex; cursor: pointer;" id="language_selector_container">
                        <div data-svg-wrapper data-layer="Icon" class="Icon" style="position: relative; flex-shrink: 0;">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_40000099_4665)">
                            <path d="M7.5 13.75C10.9518 13.75 13.75 10.9518 13.75 7.5C13.75 4.04822 10.9518 1.25 7.5 1.25C4.04822 1.25 1.25 4.04822 1.25 7.5C1.25 10.9518 4.04822 13.75 7.5 13.75Z" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M7.5 1.25C5.89515 2.9351 5 5.17296 5 7.5C5 9.82704 5.89515 12.0649 7.5 13.75C9.10485 12.0649 10 9.82704 10 7.5C10 5.17296 9.10485 2.9351 7.5 1.25Z" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1.25 7.5H13.75" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </g>
                            <defs>
                            <clipPath id="clip0_40000099_4665">
                            <rect width="15" height="15" fill="white"/>
                            </clipPath>
                            </defs>
                            </svg>
                        </div>
                        <span id="current_language_display" style="color: #2C2416; font-size: 14px; font-family: DM Sans; font-weight: 500; line-height: 18px; white-space: nowrap; flex-shrink: 0;"><?php echo ucfirstcustom($this->session->userdata('language')); ?></span>
                        <div data-svg-wrapper data-layer="Icon" style="position: relative; flex-shrink: 0;">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#2C2416" stroke-width="1.74753" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        
                        <!-- Language Dropdown Menu -->
                        <div id="language_dropdown" style="display: none; position: absolute; top: 100%; right: 0; margin-top: 8px; background: white; border-radius: 10px; box-shadow: 0 8px 30px rgba(0,0,0,0.15); min-width: 240px; z-index: 1000; padding: 8px; border: 1px solid rgba(231, 221, 204, 0.5);">
                            <?php
                            $dir = glob("application/language/*", GLOB_ONLYDIR);
                            foreach ($dir as $value):
                                $separate = explode("language/", $value);
                                $lang_name = ucfirstcustom($separate[1]);
                                $is_active = ($this->session->userdata('language') == $separate[1]);
                            ?>
                            <a href="<?php echo base_url()?>Authentication/setlanguage/<?php echo escape_output($separate[1])?>" 
                               class="language_option" 
                               style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: <?php echo $is_active ? '#2C2416' : '#6E665A'; ?>; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: <?php echo $is_active ? '600' : '500'; ?>; transition: all 0.2s; border-radius: 6px;"
                               onmouseover="this.style.background='rgba(231, 221, 204, 0.2)'; this.style.color='#2C2416'" 
                               onmouseout="this.style.background='transparent'; this.style.color='<?php echo $is_active ? '#2C2416' : '#6E665A'; ?>'">
                                <?php if($is_active): ?>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#B8954A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <?php else: ?>
                                <div style="width: 16px;"></div>
                                <?php endif; ?>
                                <span><?php echo $lang_name; ?></span>
                            </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <!-- User Profile -->
                    <div data-layer="Frame 29" class="Frame29" style="justify-content: flex-start; align-items: center; gap: 8px; display: flex">
                        <div data-layer="Frame 28" class="Frame28" style="flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 3px; display: inline-flex">
                            <div data-layer="Cash" class="Cash" style="align-self: stretch; height: 17px; justify-content: center; display: flex; flex-direction: column; color: #2C2416; font-size: 16px; font-family: DM Sans; font-weight: 500; word-wrap: break-word"><?php echo escape_output($this->session->userdata('role') ?: 'User'); ?></div>
                        </div>
                        <div id="user_profile_container" data-layer="Container" class="Container" style="width: 40px; height: 40px; background: rgba(82, 73, 52, 0.10); border-radius: 26638992px; justify-content: center; align-items: center; display: flex; position: relative; cursor: pointer;">
                            <div data-layer="Text" class="Text" style="position: relative">
                                <div data-layer="SA" class="Sa" style="color: #524934; font-size: 15px; font-family: DM Sans; font-weight: 600; line-height: 23px; word-wrap: break-word"><?php echo strtoupper(substr($this->session->userdata('first_name') ?: 'U', 0, 1)) . strtoupper(substr($this->session->userdata('last_name') ?: '', 0, 1)); ?></div>
                            </div>
                            <div id="user_menu_dropdown" style="display: none; position: absolute; top: 100%; right: 0; margin-top: 8px; background: white; border-radius: 10px; box-shadow: 0 8px 30px rgba(0,0,0,0.15); min-width: 220px; z-index: 1000; padding: 8px; border: 1px solid rgba(231, 221, 204, 0.5);">
                                <a href="<?php echo base_url()?>Authentication/changeProfile" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #6E665A; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 500; transition: all 0.2s; border-radius: 6px;">
                                    <i data-feather="user"></i>
                                    <span>Profile</span>
                                </a>
                                <a href="<?php echo base_url()?>Authentication/changePassword" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #6E665A; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 500; transition: all 0.2s; border-radius: 6px;">
                                    <i data-feather="key"></i>
                                    <span>Change Password</span>
                                </a>
                                <a href="<?php echo base_url()?>Authentication/logOut" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #6E665A; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 500; transition: all 0.2s; border-radius: 6px;">
                                    <i data-feather="log-out"></i>
                                    <span>Logout</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Navigation Bar - Aligned under header content -->
        <div data-layer="Frame 32" class="Frame32 db-nav-bar" style="align-self: stretch; margin: 0px 0px 0; padding: 0; justify-content: space-between; align-items: center; display: inline-flex">
            <div data-layer="Frame 35" class="Frame35 db-nav-left" style="justify-content: flex-start; align-items: center; gap: 20px; display: flex">
                <!-- Dashboard Button -->
                <div data-layer="Frame 31" class="Frame31" style="justify-content: flex-start; align-items: center; gap: 25px; display: flex">
                    <div data-layer="Button" class="Button db-btn-dashboard" style="height: 50px; padding: 16px 20px; background: linear-gradient(40deg, #2C2416 0%, rgba(44, 36, 22, 0.90) 30%, rgba(44, 36, 22, 0.60) 100%); border-radius: 14px; justify-content: flex-start; align-items: center; gap: 10px; display: flex">
                        <div data-layer="Frame 30" class="Frame30" style="justify-content: flex-start; align-items: center; gap: 6px; display: flex">
                            <div data-layer="Text" class="Text" style="width: 18px; height: 18px; justify-content: center; align-items: center; display: flex">
                                <div data-svg-wrapper data-layer="Icon" class="Icon" style="position: relative">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.50553 1.99805H2.75662C2.34253 1.99805 2.00684 2.33374 2.00684 2.74783V7.99631C2.00684 8.41041 2.34253 8.74609 2.75662 8.74609H6.50553C6.91963 8.74609 7.25532 8.41041 7.25532 7.99631V2.74783C7.25532 2.33374 6.91963 1.99805 6.50553 1.99805Z" stroke="#C3B8A8" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.7536 1.99805H11.0047C10.5906 1.99805 10.2549 2.33374 10.2549 2.74783V4.99718C10.2549 5.41127 10.5906 5.74696 11.0047 5.74696H14.7536C15.1677 5.74696 15.5034 5.41127 15.5034 4.99718V2.74783C15.5034 2.33374 15.1677 1.99805 14.7536 1.99805Z" stroke="#C3B8A8" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.7536 8.74609H11.0047C10.5906 8.74609 10.2549 9.08178 10.2549 9.49588V14.7444C10.2549 15.1585 10.5906 15.4941 11.0047 15.4941H14.7536C15.1677 15.4941 15.5034 15.1585 15.5034 14.7444V9.49588C15.5034 9.08178 15.1677 8.74609 14.7536 8.74609Z" stroke="#C3B8A8" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M6.50553 11.7441H2.75662C2.34253 11.7441 2.00684 12.0798 2.00684 12.4939V14.7433C2.00684 15.1574 2.34253 15.4931 2.75662 15.4931H6.50553C6.91963 15.4931 7.25532 15.1574 7.25532 14.7433V12.4939C7.25532 12.0798 6.91963 11.7441 6.50553 11.7441Z" stroke="#C3B8A8" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </div>
                            </div>
                            <div data-layer="Dashboard" class="Dashboard" style="color: white; font-size: 13.50px; font-family: DM Sans; font-weight: 600; line-height: 20.25px; word-wrap: break-word">Dashboard</div>
                        </div>
                        <div data-svg-wrapper data-layer="Icon" class="Icon" style="position: relative">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.01221 5.51562L7.76961 9.27303L11.527 5.51562" stroke="white" stroke-width="1.25247" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Revenue Title and Filter - Moved here -->
                  <div class="d-flex align-items-center char_elastick" style="gap: 15px;">
                      <h3 class="sale_report_header" style="margin: 0; font-size: 20px; font-family: DM Sans; font-weight: 700; color: #2C2416; display: none;"><?php echo lang('Revenue')?></h3>
                      <!-- Day/Week/Month Toggle in a Card -->
                      <div data-layer="Container" class="Container" style="height: 50px; padding: 0px 8px; background: white; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); border-radius: 14px; outline: 0.56px rgba(231, 221, 204, 0.50) solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 4px; display: flex">
                        <div class="title-wraper">
                            <button data-type="day" class="get_date_by_custom_btn custom_td custom_td_active">
                                <?php echo lang('Day')?>
                            </button>
                            <button data-type="week" class="get_date_by_custom_btn custom_td">
                                <?php echo lang('Week')?>
                            </button>
                            <button data-type="month" class="get_date_by_custom_btn custom_td">
                                <?php echo lang('Month')?>
                            </button>
                        </div>
                      </div>
                  </div>
            </div>
            
            <!-- Right Side Filters -->
            <div data-layer="Frame 33" class="Frame33 db-nav-right" style="justify-content: flex-start; align-items: center; gap: 20px; display: flex">
                <!-- Outlet Selector -->
                <?php if(isLMni()): ?>
                <div data-layer="Button" class="Button db-outlet-selector" id="outlet_btn" style="height: 50px; padding: 16px 20px; background: white; border-radius: 14px; justify-content: flex-start; align-items: center; gap: 0; display: inline-flex; position: relative; cursor: pointer;">
                    <select id="outlet_selector_new" class="outlet_selector_dropdown" style="border: none; background: transparent; color: #2C2416; font-size: 13.50px; font-family: DM Sans; font-weight: 600; line-height: 20.25px; cursor: pointer; appearance: none; -webkit-appearance: none; -moz-appearance: none; margin: 0; padding: 0; width: auto; min-width: fit-content; white-space: nowrap; flex-shrink: 0;">
                        <?php foreach ($outlets as $value): ?>
                            <option value="<?php echo escape_output($value->id); ?>"
                                <?php echo ($outlet_id == $value->id) ? 'selected' : ''; ?>>
                                <?php echo escape_output($value->outlet_name); ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <div data-svg-wrapper data-layer="Icon" class="Icon" id="outlet_arrow" style="position: relative; margin-left: 6px; flex-shrink: 0; cursor: pointer;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#2C2416" stroke-width="1.74753" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <?php endif; ?>
                
                <!-- Date Range Selector -->
                <div data-layer="Button" class="Button" id="date_range_btn" style="height: 50px; padding: 16px 20px; background: white; border-radius: 14px; justify-content: flex-start; align-items: center; gap: 0; display: inline-flex; position: relative; cursor: pointer;">
                    <div data-layer="Frame 30" class="Frame30" style="justify-content: flex-start; align-items: center; gap: 6px; display: flex;">
                        <div data-svg-wrapper data-layer="Icon" class="Icon" style="position: relative; flex-shrink: 0;">
                            <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 1.25V3.75" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10 1.25V3.75" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M11.875 2.5H3.125C2.43464 2.5 1.875 3.05964 1.875 3.75V12.5C1.875 13.1904 2.43464 13.75 3.125 13.75H11.875C12.5654 13.75 13.125 13.1904 13.125 12.5V3.75C13.125 3.05964 12.5654 2.5 11.875 2.5Z" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M1.875 6.25H13.125" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <span id="date_range_display_span" style="color: #2C2416; font-size: 13.50px; font-family: DM Sans; font-weight: 600; line-height: 20.25px; white-space: nowrap; flex-shrink: 0;">This Week</span>
                    </div>
                    <div data-svg-wrapper data-layer="Icon" class="Icon" style="position: relative; margin-left: 6px; flex-shrink: 0;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#2C2416" stroke-width="1.74753" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    
                    <!-- Date Range Dropdown Menu -->
                    <div id="date_range_dropdown" style="display: none; position: absolute; top: 100%; right: 0; margin-top: 8px; background: white; border-radius: 10px; box-shadow: 0 8px 30px rgba(0,0,0,0.15); min-width: 200px; z-index: 1000; padding: 8px; border: 1px solid rgba(231, 221, 204, 0.5);">
                        <a href="javascript:void(0)" class="date_range_option" data-range="today" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #6E665A; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 500; transition: all 0.2s; border-radius: 6px;">
                            Today
                        </a>
                        <a href="javascript:void(0)" class="date_range_option" data-range="yesterday" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #6E665A; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 500; transition: all 0.2s; border-radius: 6px;">
                            Yesterday
                        </a>
                        <a href="javascript:void(0)" class="date_range_option" data-range="this_week" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #6E665A; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 500; transition: all 0.2s; border-radius: 6px;">
                            This Week
                        </a>
                        <a href="javascript:void(0)" class="date_range_option" data-range="last_week" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #6E665A; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 500; transition: all 0.2s; border-radius: 6px;">
                            Last Week
                        </a>
                        <a href="javascript:void(0)" class="date_range_option" data-range="this_month" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #6E665A; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 500; transition: all 0.2s; border-radius: 6px;">
                            This Month
                        </a>
                        <a href="javascript:void(0)" class="date_range_option" data-range="last_month" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #6E665A; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 500; transition: all 0.2s; border-radius: 6px;">
                            Last Month
                        </a>
                        <a href="javascript:void(0)" class="date_range_option" data-range="last_30_days" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #6E665A; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 500; transition: all 0.2s; border-radius: 6px;">
                            Last 30 Days
                        </a>
                        <a href="javascript:void(0)" class="date_range_option" data-range="custom" style="display: flex; align-items: center; gap: 10px; padding: 12px 16px; color: #2C2416; text-decoration: none; font-size: 14px; font-family: DM Sans; font-weight: 600; transition: all 0.2s; border-radius: 6px;">
                            Custom Range
                        </a>
                    </div>
                    <div id="custom_range_modal" style="display: none; position: fixed; inset: 0; background: rgba(0,0,0,0.4); z-index: 2000; align-items: center; justify-content: center;">
                        <div style="background: white; border-radius: 12px; padding: 20px; width: 340px; box-shadow: 0 8px 30px rgba(0,0,0,0.2);">
                            <div style="display: flex; flex-direction: column; gap: 10px;">
                                <div style="color: #2C2416; font-size: 16px; font-family: DM Sans; font-weight: 600; margin-bottom: 6px;">Select Range</div>
                                <label for="custom_start_date" style="color: #6E665A; font-size: 14px; font-family: DM Sans; font-weight: 500;">Start Date</label>
                                <input id="custom_start_date" type="date" style="padding: 10px; border: 1px solid #E7DDCC; border-radius: 8px; font-family: DM Sans; font-size: 14px; color: #2C2416; width: 100%;" placeholder="YYYY-MM-DD" inputmode="none">
                                <label for="custom_end_date" style="color: #6E665A; font-size: 14px; font-family: DM Sans; font-weight: 500; margin-top: 6px;">End Date</label>
                                <input id="custom_end_date" type="date" style="padding: 10px; border: 1px solid #E7DDCC; border-radius: 8px; font-family: DM Sans; font-size: 14px; color: #2C2416; width: 100%;" placeholder="YYYY-MM-DD" inputmode="none">
                                <div style="display: flex; gap: 8px; justify-content: flex-end; margin-top: 14px;">
                                    <button id="custom_cancel_btn" type="button" style="border: none; padding: 8px 14px; background: transparent; border-radius: 8px; color: #6E665A; font-family: DM Sans; font-weight: 600; cursor: pointer;">Cancel</button>
                                    <button id="custom_apply_btn" type="button" style="border: none; padding: 8px 16px; background: linear-gradient(180deg, #B8954A 0%, #D4B575 100%); color: white; border-radius: 9px; font-family: DM Sans; font-weight: 700; cursor: pointer;">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Hidden form for dashboard submission -->
    <form method="POST" action="<?php echo base_url()?>Dashboard/dashboard" id="dashboard_form" style="display: none;">
        <input type="hidden" name="start_date_dashboard" id="start_date_dashboard" value="<?php echo isset($start_date_dashboard) ? $start_date_dashboard : date('Y-m-d', strtotime('today -30days')); ?>">
        <input type="hidden" name="end_date_dashboard" id="end_date_dashboard" value="<?php echo isset($end_date_dashboard) ? $end_date_dashboard : date('Y-m-d', strtotime('today')); ?>">
        <input type="hidden" name="outlet_id" id="outlet_id_hidden" value="<?php echo escape_output($outlet_id); ?>">
    </form>

    <!-- Stats Cards Row -->
    <div class="row mt-3 db-stats-row">
        <div class="col-md-12 grid_view grid_view2 db-stats-container" style="display: flex; gap: 22px; justify-content: flex-start; margin-bottom:20px; margin-top:25px">
            <a href="javascript:void(0)" data-action_type="revenue" data-text="<?php echo lang('Revenue')?>" class="get_graph_data db-stat-card" style="max-width: 19%; flex: 1; padding: 19px 14px; background: white; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); overflow: hidden; border-radius: 20px; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex; text-decoration: none;">
                <div data-svg-wrapper data-layer="Shadow" class="Shadow" style="position: relative; width: 40px; height: 40px; flex-shrink: 0;">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0;">
                    <circle cx="20" cy="20" r="20" fill="#F6EEDB"/>
                    </svg>
                    <div data-svg-wrapper data-layer="Cash" class="Cash" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8.25064 15.1603C8.30746 14.5693 8.46656 13.9897 8.70522 13.4669L13.7852 12.3987C13.7283 13.001 13.5692 13.5692 13.3192 14.092L8.25064 15.1603ZM13.3078 10.7963L8.1029 11.8873V8.62567L6.48914 8.9666V10.7736C6.48914 10.9327 6.43232 11.0918 6.3414 11.2168L5.50043 12.4441C5.29586 12.751 4.96629 12.9669 4.60263 13.0351L0 14.0011C0.0568226 13.3874 0.22729 12.8078 0.465945 12.2737L4.86401 11.3531V9.30754L0.761423 10.1599C0.82961 9.54619 0.988713 8.9666 1.23873 8.43247L4.86401 7.67105V1.34101C5.30723 0.795516 5.86409 0.340935 6.48914 0V7.33011L8.1029 7.00054V2.13653C8.55748 1.6024 9.10298 1.13645 9.72802 0.795516V6.65961L13.7852 5.80727C13.717 6.42095 13.5579 7.00054 13.3078 7.53467L9.72802 8.28473V9.92122L13.7852 9.06888C13.717 9.68257 13.5579 10.2622 13.3078 10.7963Z" fill="#5A3D0B"/>
                        </svg>
                    </div>
                </div>
                <div data-layer="Frame 27" class="Frame27" style="width: 117px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 3px; display: inline-flex">
                    <div data-layer="Label" class="Label" style="align-self: stretch; color: #887E72; font-size: 14px; font-family: DM Sans; font-weight: 500; line-height: 24px; word-wrap: break-word"><?php echo lang('Revenue')?></div>
                    <div data-layer="Cash" class="Cash" style="align-self: stretch; display: flex; align-items: center; gap: 4px;">
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
                        <path d="M8.25064 15.1603C8.30746 14.5693 8.46656 13.9897 8.70522 13.4669L13.7852 12.3987C13.7283 13.001 13.5692 13.5692 13.3192 14.092L8.25064 15.1603ZM13.3078 10.7963L8.1029 11.8873V8.62567L6.48914 8.9666V10.7736C6.48914 10.9327 6.43232 11.0918 6.3414 11.2168L5.50043 12.4441C5.29586 12.751 4.96629 12.9669 4.60263 13.0351L0 14.0011C0.0568226 13.3874 0.22729 12.8078 0.465945 12.2737L4.86401 11.3531V9.30754L0.761423 10.1599C0.82961 9.54619 0.988713 8.9666 1.23873 8.43247L4.86401 7.67105V1.34101C5.30723 0.795516 5.86409 0.340935 6.48914 0V7.33011L8.1029 7.00054V2.13653C8.55748 1.6024 9.10298 1.13645 9.72802 0.795516V6.65961L13.7852 5.80727C13.717 6.42095 13.5579 7.00054 13.3078 7.53467L9.72802 8.28473V9.92122L13.7852 9.06888C13.717 9.68257 13.5579 10.2622 13.3078 10.7963Z" fill="#2C2416"/>
                        </svg>
                        <span class="set_total_1" style="color: #2C2416; font-size: 24px; font-family: DM Sans; font-weight: 700; line-height: 32px; word-wrap: break-word">0</span>
                    </div>
                </div>
            </a>
            <a href="javascript:void(0)" data-action_type="profit" data-text="<?php echo lang('net_profit')?>" class="get_graph_data db-stat-card" style="max-width: 19%; flex: 1; padding: 19px 14px; background: white; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); overflow: hidden; border-radius: 20px; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex; text-decoration: none;">
                <div data-svg-wrapper data-layer="Shadow" class="Shadow" style="position: relative; width: 40px; height: 40px; flex-shrink: 0;">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0;">
                    <circle cx="20" cy="20" r="20" fill="#F6EEDB"/>
                    </svg>
                    <div data-svg-wrapper data-layer="Icon" class="Icon" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.4952 5.24805L10.122 11.6212L6.3731 7.87229L1.49951 12.7459" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9966 5.24805H16.4953V9.74675" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div data-layer="Frame 27" class="Frame27" style="width: 117px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 3px; display: inline-flex">
                    <div data-layer="Label" class="Label" style="align-self: stretch; color: #887E72; font-size: 14px; font-family: DM Sans; font-weight: 500; line-height: 24px; word-wrap: break-word"><?php echo lang('net_profit')?></div>
                    <div data-layer="Cash" class="Cash" style="align-self: stretch; display: flex; align-items: center; gap: 4px;">
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
                        <path d="M8.25064 15.1603C8.30746 14.5693 8.46656 13.9897 8.70522 13.4669L13.7852 12.3987C13.7283 13.001 13.5692 13.5692 13.3192 14.092L8.25064 15.1603ZM13.3078 10.7963L8.1029 11.8873V8.62567L6.48914 8.9666V10.7736C6.48914 10.9327 6.43232 11.0918 6.3414 11.2168L5.50043 12.4441C5.29586 12.751 4.96629 12.9669 4.60263 13.0351L0 14.0011C0.0568226 13.3874 0.22729 12.8078 0.465945 12.2737L4.86401 11.3531V9.30754L0.761423 10.1599C0.82961 9.54619 0.988713 8.9666 1.23873 8.43247L4.86401 7.67105V1.34101C5.30723 0.795516 5.86409 0.340935 6.48914 0V7.33011L8.1029 7.00054V2.13653C8.55748 1.6024 9.10298 1.13645 9.72802 0.795516V6.65961L13.7852 5.80727C13.717 6.42095 13.5579 7.00054 13.3078 7.53467L9.72802 8.28473V9.92122L13.7852 9.06888C13.717 9.68257 13.5579 10.2622 13.3078 10.7963Z" fill="#2C2416"/>
                        </svg>
                        <span class="set_total_2" style="color: #2C2416; font-size: 24px; font-family: DM Sans; font-weight: 700; line-height: 32px; word-wrap: break-word">0</span>
                    </div>
                </div>
            </a>
            <a href="javascript:void(0)" data-action_type="transactions" data-text="<?php echo lang('transactions')?>" class="get_graph_data db-stat-card" style="max-width: 19%; flex: 1; padding: 19px 14px; background: white; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); overflow: hidden; border-radius: 20px; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex; text-decoration: none;">
                <div data-svg-wrapper data-layer="Shadow" class="Shadow" style="position: relative; width: 40px; height: 40px; flex-shrink: 0;">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0;">
                    <circle cx="20" cy="20" r="20" fill="#F6EEDB"/>
                    </svg>
                    <div data-svg-wrapper data-layer="Icon" class="Icon" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4.49837 1.5L2.24902 4.49913V14.9961C2.24902 15.3938 2.40701 15.7752 2.68824 16.0564C2.96946 16.3377 3.35088 16.4957 3.74859 16.4957H14.2456C14.6433 16.4957 15.0247 16.3377 15.3059 16.0564C15.5871 15.7752 15.7451 15.3938 15.7451 14.9961V4.49913L13.4958 1.5H4.49837Z" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M2.24902 4.49805H15.7451" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9966 7.49805C11.9966 8.29347 11.6806 9.05631 11.1181 9.61875C10.5557 10.1812 9.79284 10.4972 8.99742 10.4972C8.202 10.4972 7.43916 10.1812 6.87672 9.61875C6.31427 9.05631 5.99829 8.29347 5.99829 7.49805" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div data-layer="Frame 27" class="Frame27" style="width: 117px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 3px; display: inline-flex">
                    <div data-layer="Label" class="Label" style="align-self: stretch; color: #887E72; font-size: 14px; font-family: DM Sans; font-weight: 500; line-height: 24px; word-wrap: break-word"><?php echo lang('transactions')?></div>
                    <div data-layer="Cash" class="Cash" style="align-self: stretch; display: flex; align-items: center; gap: 4px;">
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
                        <path d="M8.25064 15.1603C8.30746 14.5693 8.46656 13.9897 8.70522 13.4669L13.7852 12.3987C13.7283 13.001 13.5692 13.5692 13.3192 14.092L8.25064 15.1603ZM13.3078 10.7963L8.1029 11.8873V8.62567L6.48914 8.9666V10.7736C6.48914 10.9327 6.43232 11.0918 6.3414 11.2168L5.50043 12.4441C5.29586 12.751 4.96629 12.9669 4.60263 13.0351L0 14.0011C0.0568226 13.3874 0.22729 12.8078 0.465945 12.2737L4.86401 11.3531V9.30754L0.761423 10.1599C0.82961 9.54619 0.988713 8.9666 1.23873 8.43247L4.86401 7.67105V1.34101C5.30723 0.795516 5.86409 0.340935 6.48914 0V7.33011L8.1029 7.00054V2.13653C8.55748 1.6024 9.10298 1.13645 9.72802 0.795516V6.65961L13.7852 5.80727C13.717 6.42095 13.5579 7.00054 13.3078 7.53467L9.72802 8.28473V9.92122L13.7852 9.06888C13.717 9.68257 13.5579 10.2622 13.3078 10.7963Z" fill="#2C2416"/>
                        </svg>
                        <span class="set_total_3" style="color: #2C2416; font-size: 24px; font-family: DM Sans; font-weight: 700; line-height: 32px; word-wrap: break-word">0</span>
                    </div>
                </div>
            </a>
            <a href="javascript:void(0)" data-action_type="customers" data-text="<?php echo lang('Customers')?>" class="get_graph_data db-stat-card" style="max-width: 19%; flex: 1; padding: 19px 14px; background: white; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); overflow: hidden; border-radius: 20px; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex; text-decoration: none;">
                <div data-svg-wrapper data-layer="Shadow" class="Shadow" style="position: relative; width: 40px; height: 40px; flex-shrink: 0;">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0;">
                    <circle cx="20" cy="20" r="20" fill="#F6EEDB"/>
                    </svg>
                    <div data-svg-wrapper data-layer="Icon" class="Icon" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11.9965 15.7448V14.2452C11.9965 13.4498 11.6805 12.687 11.118 12.1245C10.5556 11.5621 9.79276 11.2461 8.99734 11.2461H4.49864C3.70322 11.2461 2.94038 11.5621 2.37794 12.1245C1.81549 12.687 1.49951 13.4498 1.49951 14.2452V15.7448" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M6.74816 8.24826C8.40453 8.24826 9.74729 6.90551 9.74729 5.24913C9.74729 3.59276 8.40453 2.25 6.74816 2.25C5.09178 2.25 3.74902 3.59276 3.74902 5.24913C3.74902 6.90551 5.09178 8.24826 6.74816 8.24826Z" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M16.4954 15.745V14.2454C16.4949 13.5809 16.2738 12.9354 15.8666 12.4102C15.4595 11.885 14.8895 11.5099 14.2461 11.3438" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9966 2.34766C12.6417 2.51283 13.2135 2.88803 13.6218 3.41408C14.0302 3.94014 14.2518 4.58713 14.2518 5.25307C14.2518 5.919 14.0302 6.566 13.6218 7.09205C13.2135 7.61811 12.6417 7.9933 11.9966 8.15847" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div data-layer="Frame 27" class="Frame27" style="width: 117px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 3px; display: inline-flex">
                    <div data-layer="Label" class="Label" style="align-self: stretch; color: #887E72; font-size: 14px; font-family: DM Sans; font-weight: 500; line-height: 24px; word-wrap: break-word"><?php echo lang('Customers')?></div>
                    <div data-layer="Cash" class="Cash" style="align-self: stretch; display: flex; align-items: center; gap: 4px;">
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
                        <path d="M8.25064 15.1603C8.30746 14.5693 8.46656 13.9897 8.70522 13.4669L13.7852 12.3987C13.7283 13.001 13.5692 13.5692 13.3192 14.092L8.25064 15.1603ZM13.3078 10.7963L8.1029 11.8873V8.62567L6.48914 8.9666V10.7736C6.48914 10.9327 6.43232 11.0918 6.3414 11.2168L5.50043 12.4441C5.29586 12.751 4.96629 12.9669 4.60263 13.0351L0 14.0011C0.0568226 13.3874 0.22729 12.8078 0.465945 12.2737L4.86401 11.3531V9.30754L0.761423 10.1599C0.82961 9.54619 0.988713 8.9666 1.23873 8.43247L4.86401 7.67105V1.34101C5.30723 0.795516 5.86409 0.340935 6.48914 0V7.33011L8.1029 7.00054V2.13653C8.55748 1.6024 9.10298 1.13645 9.72802 0.795516V6.65961L13.7852 5.80727C13.717 6.42095 13.5579 7.00054 13.3078 7.53467L9.72802 8.28473V9.92122L13.7852 9.06888C13.717 9.68257 13.5579 10.2622 13.3078 10.7963Z" fill="#2C2416"/>
                        </svg>
                        <span class="set_total_4" style="color: #2C2416; font-size: 24px; font-family: DM Sans; font-weight: 700; line-height: 32px; word-wrap: break-word">0</span>
                    </div>
                </div>
            </a>
            <a href="javascript:void(0)" data-action_type="average_receipt" data-text="<?php echo lang('average_receipt')?>" class="get_graph_data db-stat-card" style="max-width: 19%; flex: 1; padding: 19px 14px; background: white; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); overflow: hidden; border-radius: 20px; justify-content: flex-start; align-items: center; gap: 16px; display: inline-flex; text-decoration: none;">
                <div data-svg-wrapper data-layer="Shadow" class="Shadow" style="position: relative; width: 40px; height: 40px; flex-shrink: 0;">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="position: absolute; top: 0; left: 0;">
                    <circle cx="20" cy="20" r="20" fill="#F6EEDB"/>
                    </svg>
                    <div data-svg-wrapper data-layer="Icon" class="Icon" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%);">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2.99902 1.5V16.4957L4.49859 15.7459L5.99816 16.4957L7.49772 15.7459L8.99729 16.4957L10.4969 15.7459L11.9964 16.4957L13.496 15.7459L14.9956 16.4957V1.5L13.496 2.24978L11.9964 1.5L10.4969 2.24978L8.99729 1.5L7.49772 2.24978L5.99816 1.5L4.49859 2.24978L2.99902 1.5Z" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M11.9966 5.99805H7.49786C7.10015 5.99805 6.71873 6.15604 6.4375 6.43726C6.15628 6.71848 5.99829 7.0999 5.99829 7.49761C5.99829 7.89532 6.15628 8.27674 6.4375 8.55797C6.71873 8.83919 7.10015 8.99718 7.49786 8.99718H10.497C10.8947 8.99718 11.2761 9.15517 11.5573 9.43639C11.8386 9.71762 11.9966 10.099 11.9966 10.4967C11.9966 10.8945 11.8386 11.2759 11.5573 11.5571C11.2761 11.8383 10.8947 11.9963 10.497 11.9963H5.99829" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8.99707 13.1207V4.87305" stroke="#5A5039" stroke-width="1.49957" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div data-layer="Frame 27" class="Frame27" style="width: 117px; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 3px; display: inline-flex">
                    <div data-layer="Label" class="Label" style="align-self: stretch; color: #887E72; font-size: 14px; font-family: DM Sans; font-weight: 500; line-height: 24px; word-wrap: break-word"><?php echo lang('average_receipt')?></div>
                    <div data-layer="Cash" class="Cash" style="align-self: stretch; display: flex; align-items: center; gap: 4px;">
                        <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
                        <path d="M8.25064 15.1603C8.30746 14.5693 8.46656 13.9897 8.70522 13.4669L13.7852 12.3987C13.7283 13.001 13.5692 13.5692 13.3192 14.092L8.25064 15.1603ZM13.3078 10.7963L8.1029 11.8873V8.62567L6.48914 8.9666V10.7736C6.48914 10.9327 6.43232 11.0918 6.3414 11.2168L5.50043 12.4441C5.29586 12.751 4.96629 12.9669 4.60263 13.0351L0 14.0011C0.0568226 13.3874 0.22729 12.8078 0.465945 12.2737L4.86401 11.3531V9.30754L0.761423 10.1599C0.82961 9.54619 0.988713 8.9666 1.23873 8.43247L4.86401 7.67105V1.34101C5.30723 0.795516 5.86409 0.340935 6.48914 0V7.33011L8.1029 7.00054V2.13653C8.55748 1.6024 9.10298 1.13645 9.72802 0.795516V6.65961L13.7852 5.80727C13.717 6.42095 13.5579 7.00054 13.3078 7.53467L9.72802 8.28473V9.92122L13.7852 9.06888C13.717 9.68257 13.5579 10.2622 13.3078 10.7963Z" fill="#2C2416"/>
                        </svg>
                        <span class="set_total_5" style="color: #2C2416; font-size: 24px; font-family: DM Sans; font-weight: 700; line-height: 32px; word-wrap: break-word">0</span>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <form method="POST" action="<?php echo base_url()?>Dashboard/dashboard">
        <div class="row">
        <div class="col-xl-12">
            <section class="content-header mb-2 dashboardDateRangeWrap" style="display:none;">
            <h3 class="mb-0 d-flex align-items-center top-left-header <?= returnSessionLng()=="arabic" ? 'ps-2" ' : 'pe-2'?>">
                <span><?php echo lang('dashboard'); ?></span>
            </h3>
            <div class="dashboardDateRange">
            <?php
                    if (isLMni()):
                        $outlet_id = set_value('outlet_id_dashboard');
                        if (!$outlet_id) {
                            $outlet_id = $this->session->userdata("outlet_id");
                        }
                    ?>
                        <select class="select_outlet_dashboard select2 form-control <?= returnSessionLng() == "arabic" ? 'ms-2' : 'me-2' ?>" id="outlet_id_dashboard" name="outlet_id_dashboard">
                            <?php foreach ($outlets as $value): ?>
                                <option value="<?= escape_output($value->id) ?>"
                                    <?= set_select('outlet_id_dashboard', $value->id) ?>
                                    <?= $outlet_id == $value->id ? 'selected' : '' ?>>
                                    <?= escape_output($value->outlet_name) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    <?php
                    endif;
                    ?>


                <input tabindex="3" type="text" name="start_date_dashboard" id="start_date_dashboard_old" class="form-control customDatepicker <?= returnSessionLng()=="arabic" ? 'ms-2" ' : 'me-2'?>" placeholder="<?php echo lang('start_date'); ?>" value="<?=isset($start_date_dashboard) && $start_date_dashboard?$start_date_dashboard:date('Y-m-d',strtotime('today -30days'))?>">

                <input tabindex="3" type="text" name="end_date_dashboard" id="end_date_dashboard_old" class="form-control customDatepicker <?= returnSessionLng()=="arabic" ? 'ms-2" ' : 'me-2'?>" placeholder="<?php echo lang('start_date'); ?>" value="<?=isset($end_date_dashboard) && $end_date_dashboard?$end_date_dashboard:date('Y-m-d',strtotime('today'))?>">

                <button type="submit" class="btn new-btn h-40" id="dashboard_search">
                <i data-feather="search"></i> <?php echo lang('search'); ?></button>
            </div>
            </section>
        </div>
        </div>
    </form>

    <div class="grid_view" style="display:none; margin-top:30px;">
        <a href="javascript:void(0)" class="get_action_prevent btn btn-dblue1 active" role="button">
            <p><?php echo lang('today')?>,</p>
            <h5><?php echo date("d, F")?></h5>
            <div class="card-icon primary_icon">
                <i data-feather="calendar"></i>
            </div>
        </a>
        <a href="javascript:void(0)" class="get_action_prevent btn btn-dblue1" role="button">
            <p><?php echo lang('Revenue')?></p>
            <h5 class="spincrement set_today_total_1">0</h5>
            <div class="card-icon warning_icon">
                <i data-feather="loader"></i>
            </div>
        </a>
        <a href="javascript:void(0)" class="get_action_prevent btn btn-dblue1" role="button">
            <p><?php echo lang('net_profit')?></p>
            <h5 class="spincrement set_today_total_2">0</h5>
            <div class="card-icon success_icon">
                <i data-feather="trending-up"></i>
            </div>
        </a>
        <a href="javascript:void(0)" class="get_action_prevent btn btn-dblue1" role="button">
            <p><?php echo lang('transactions')?></p>
            <h5 class="spincrement set_today_total_3">0</h5>
            <div class="card-icon red_icon">
                <i data-feather="activity"></i>
            </div>
        </a>
        <a href="javascript:void(0)" class="get_action_prevent btn btn-dblue1" role="button">
            <p><?php echo lang('Customers')?></p>
            <h5 class="spincrement set_today_total_4">0</h5>
            <div class="card-icon info_icon">
                <i data-feather="users"></i>
            </div>
        </a>
        <a href="javascript:void(0)" class="get_action_prevent btn btn-dblue1" role="button">
            <p><?php echo lang('average_receipt')?></p>
            <h5 class="spincrement set_today_total_5">0</h5>
            <div class="card-icon purple_icon">
                <i data-feather="repeat"></i>
            </div>
        </a>
    </div>
    <div class="row db-main-grid">
        <div class="col-sm-12 col-md-12 col-lg-12 db-main-flex-container" style="display: flex; gap: 20px; align-items: stretch;">
            <!-- New Custom Chart Container -->
            <div class="chart-container-wrapper db-chart-wrapper" style="width: 60%;">
                <div class="large-balance-card">
                    <!-- Custom Tooltip -->
                    <div id="custom-chart-tooltip" class="custom-tooltip" style="display: none;">
                        <div class="tooltip-label" id="tooltip-date">Jul, 2024</div>
                        <div class="tooltip-value" id="tooltip-value">$0</div>
                    </div>

                    <!-- Header Section -->
                    <div class="chart-header">
                        <div class="chart-title-block">
                            <div class="chart-label" id="chart-title-label">Total Revenue</div>
                            <div class="chart-total-value">
                                <div data-svg-wrapper data-layer="Cash" class="Cash" style="display: inline-flex; align-items: center; margin-right: 4px;">
                                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8.25064 15.1603C8.30746 14.5693 8.46656 13.9897 8.70522 13.4669L13.7852 12.3987C13.7283 13.001 13.5692 13.5692 13.3192 14.092L8.25064 15.1603ZM13.3078 10.7963L8.1029 11.8873V8.62567L6.48914 8.9666V10.7736C6.48914 10.9327 6.43232 11.0918 6.3414 11.2168L5.50043 12.4441C5.29586 12.751 4.96629 12.9669 4.60263 13.0351L0 14.0011C0.0568226 13.3874 0.22729 12.8078 0.465945 12.2737L4.86401 11.3531V9.30754L0.761423 10.1599C0.82961 9.54619 0.988713 8.9666 1.23873 8.43247L4.86401 7.67105V1.34101C5.30723 0.795516 5.86409 0.340935 6.48914 0V7.33011L8.1029 7.00054V2.13653C8.55748 1.6024 9.10298 1.13645 9.72802 0.795516V6.65961L13.7852 5.80727C13.717 6.42095 13.5579 7.00054 13.3078 7.53467L9.72802 8.28473V9.92122L13.7852 9.06888C13.717 9.68257 13.5579 10.2622 13.3078 10.7963Z" fill="#2C2416"/>
                                    </svg>
                                </div>
                                <span id="chart-total-value">0</span>
                            </div>
                        </div>
                        <div class="chart-right-section">
                            <div class="chart-time-selector">
                                <div class="time-text" id="chart-time-text">Last 8 Days</div>
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#2C2416" stroke-width="1.74753" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="chart-legend">
                                <div class="legend-item">
                                    <div class="legend-dot" id="legend-dot-1" style="background: #C5A868;"></div>
                                    <div class="legend-text" id="legend-text-1">Income</div>
                                </div>
                                <div class="legend-item" id="legend-item-2">
                                    <div class="legend-dot" id="legend-dot-2" style="background: #675F4C;"></div>
                                    <div class="legend-text" id="legend-text-2">Expense</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Y-Axis Labels -->
                    <!-- The Chart Canvas -->
                    <div class="chart-canvas-wrapper">
                        <canvas id="day_week_month_chart_report"></canvas>
                    </div>

                    <!-- X-Axis Labels -->
                    <div class="x-axis-labels" id="x-axis-labels">
                        <!-- Populated dynamically -->
                    </div>
                </div>
            </div>
            
            <!-- Semi-Circle Chart Card -->
            <div class="db-category-chart-card" style="width: calc(40% - 0px); background: white; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); overflow: hidden; border-radius: 20px; padding: 8px 28px 28px; min-height: 400px; display: flex; flex-direction: column;">
                <!-- Header -->
                <div style="width: 100%; display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                    <div style="color: #2C2416; font-size: 20px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 32px;">Top Categories</div>
                    <div id="category_date_selector_btn" style="display: flex; justify-content: flex-end; align-items: center; gap: 10px; cursor: pointer; position: relative;">
                        <div id="category_date_range_display" style="text-align: right; color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 24px;">Last 30 Days</div>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#2C2416" stroke-width="1.74753" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <!-- Date Range Popup Menu -->
                        <div id="category_date_popup" style="display: none; position: absolute; top: 100%; right: 0; margin-top: 8px; background: white; border-radius: 12px; box-shadow: 0 8px 30px rgba(0,0,0,0.2); min-width: 220px; z-index: 1000; padding: 8px; border: 1px solid rgba(231, 221, 204, 0.5);">
                            <!-- Preset Options -->
                            <div class="category_date_option" data-days="15" style="display: flex; align-items: center; padding: 12px 16px; color: #6E665A; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500; cursor: pointer; border-radius: 8px; transition: all 0.2s;" onmouseover="this.style.background='rgba(231, 221, 204, 0.2)'" onmouseout="this.style.background='transparent'">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="margin-right: 10px; flex-shrink: 0;">
                                    <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#B8954A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="check_15" style="display: none;"/>
                                </svg>
                                <span>Last 15 Days</span>
                            </div>
                            <div class="category_date_option" data-days="30" style="display: flex; align-items: center; padding: 12px 16px; color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600; cursor: pointer; border-radius: 8px; transition: all 0.2s;" onmouseover="this.style.background='rgba(231, 221, 204, 0.2)'" onmouseout="this.style.background='transparent'">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="margin-right: 10px; flex-shrink: 0;">
                                    <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#B8954A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="check_30"/>
                                </svg>
                                <span>Last 30 Days</span>
                            </div>
                            <div class="category_date_option" data-days="60" style="display: flex; align-items: center; padding: 12px 16px; color: #6E665A; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500; cursor: pointer; border-radius: 8px; transition: all 0.2s;" onmouseover="this.style.background='rgba(231, 221, 204, 0.2)'" onmouseout="this.style.background='transparent'">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="margin-right: 10px; flex-shrink: 0;">
                                    <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#B8954A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" id="check_60" style="display: none;"/>
                                </svg>
                                <span>Last 60 Days</span>
                            </div>

                            <!-- Divider -->
                            <div style="height: 1px; background: rgba(231, 221, 204, 0.5); margin: 8px 0;"></div>

                            <!-- Custom Date Range -->
                            <div class="category_date_option" data-days="custom" style="display: flex; align-items: center; padding: 12px 16px; color: #6E665A; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500; cursor: pointer; border-radius: 8px; transition: all 0.2s;" onmouseover="this.style.background='rgba(231, 221, 204, 0.2)'" onmouseout="this.style.background='transparent'">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="margin-right: 10px; flex-shrink: 0;">
                                    <path d="M5 1.25V3.75" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M10 1.25V3.75" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M11.875 2.5H3.125C2.43464 2.5 1.875 3.05964 1.875 3.75V12.5C1.875 13.1904 2.43464 13.75 3.125 13.75H11.875C12.5654 13.75 13.125 13.1904 13.125 12.5V3.75C13.125 3.05964 12.5654 2.5 11.875 2.5Z" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M1.875 6.25H13.125" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Custom Range</span>
                            </div>

                            <!-- Custom Date Inputs (Hidden by default) -->
                            <div id="custom_date_inputs" style="display: none; padding: 12px 16px; border-top: 1px solid rgba(231, 221, 204, 0.5);">
                                <div style="display: flex; flex-direction: column; gap: 8px;">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <label style="color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500;">From:</label>
                                        <input type="date" id="category_start_date" style="border: 1px solid rgba(231, 221, 204, 0.5); border-radius: 6px; padding: 6px 10px; font-size: 13px; font-family: 'DM Sans', sans-serif; color: #2C2416;"/>
                                    </div>
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <label style="color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500;">To:</label>
                                        <input type="date" id="category_end_date" style="border: 1px solid rgba(231, 221, 204, 0.5); border-radius: 6px; padding: 6px 10px; font-size: 13px; font-family: 'DM Sans', sans-serif; color: #2C2416;"/>
                                    </div>
                                    <button id="apply_custom_date" style="background: linear-gradient(40deg, #2C2416 0%, rgba(44, 36, 22, 0.90) 30%, rgba(44, 36, 22, 0.60) 100%); color: white; border: none; border-radius: 6px; padding: 8px 16px; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 600; cursor: pointer; margin-top: 4px;">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                // Prepare top categories data using the new query structure
                $categories_data = array();
                $total_qty_all = 0;
                $total_revenue_all = 0;

                if (!empty($top_categories)) {
                    foreach ($top_categories as $cat) {
                        $total_qty_all += $cat->total_qty;
                        $total_revenue_all += $cat->total_revenue;
                    }

                    foreach ($top_categories as $cat) {
                        $item = array();
                        $item['category_name'] = $cat->category_name;
                        $item['totalQty'] = $cat->total_qty;
                        $item['total_revenue'] = $cat->total_revenue;
                        $item['percentage'] = $cat->percentage; // Already calculated in SQL
                        $categories_data[] = $item;
                    }
                }

                // Colors for categories (max 5)
                $category_colors = ['#96CF6E', '#CFB06E', '#CF8B6E', '#CF6E6E', '#8B6ECF'];
                ?>

                <!-- Chart Container -->
                <div id="chart-container" style="width: 400px; height: 200px; margin: 0 auto; position: relative;">
                    <canvas id="categories_doughnut_chart"></canvas>
                    <!-- Center Text Overlay -->
                    <div style="position: absolute; left: 50%; top: 75%; transform: translate(-50%, -50%); text-align: center; pointer-events: none;">
                        <div style="color: #242424; font-size: 48px; font-weight: 600; font-family: 'DM Sans', sans-serif; line-height: 58px;"><?= $total_qty_all ?></div>
                    </div>
                </div>

                <!-- Last Updated Text -->
                <div style="margin-top: 12px; color: #7A7A7A; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 18px; text-align: center;">Last Updated on <?= date('d M') ?></div>

                <!-- Legend Section -->
                <?php if (!empty($categories_data)): ?>
                <div style="margin-top: 28px; display: flex; flex-direction: column; align-items: center; gap: 6px;">
                    <!-- Row 1 -->
                    <div style="align-self: stretch; display: flex; justify-content: center; align-items: center; gap: 20px;">
                        <?php for ($i = 0; $i < min(2, count($categories_data)); $i++): ?>
                        <div style="display: flex; justify-content: flex-start; align-items: center; gap: 8px;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="12" height="12" rx="4.5" fill="<?= $category_colors[$i] ?>"/>
                            </svg>
                            <div style="color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 300; line-height: 24px;"><?= escape_output($categories_data[$i]['category_name']) ?> <?= $categories_data[$i]['percentage'] ?>%</div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <?php if (count($categories_data) > 2): ?>
                    <!-- Row 2 -->
                    <div style="display: flex; justify-content: center; align-items: center; gap: 30px;">
                        <?php for ($i = 2; $i < min(4, count($categories_data)); $i++): ?>
                        <div style="display: flex; justify-content: flex-start; align-items: center; gap: 8px;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="12" height="12" rx="4.5" fill="<?= $category_colors[$i] ?>"/>
                            </svg>
                            <div style="color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 300; line-height: 24px;"><?= escape_output($categories_data[$i]['category_name']) ?> <?= $categories_data[$i]['percentage'] ?>%</div>
                        </div>
                        <?php endfor; ?>
                    </div>
                    <?php endif; ?>
                    <?php if (count($categories_data) > 4): ?>
                    <!-- Row 3 (for 5th item) -->
                    <div style="display: flex; justify-content: center; align-items: center; gap: 30px;">
                        <div style="display: flex; justify-content: flex-start; align-items: center; gap: 8px;">
                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="12" height="12" rx="4.5" fill="<?= $category_colors[4] ?>"/>
                            </svg>
                            <div style="color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 300; line-height: 24px;"><?= escape_output($categories_data[4]['category_name']) ?> <?= $categories_data[4]['percentage'] ?>%</div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <?php else: ?>
                <div style="text-align: center; padding: 40px 20px; color: #887E72; font-size: 14px; font-family: 'DM Sans', sans-serif;">
                    No category data available
                </div>
                <?php endif; ?>
            </div>
        </div>

        <!-- ./col -->
    </div>
    <?php /* Sale By Payment Methods Card - Hidden
    <?php if(isset($sale_by_payments) && $sale_by_payments):?>
    <div class="row mt-3">
        <div class="col-lg-12 col-md-12">
            <div class="col-md-12">
                <div class="box box-info mb-0">
                    <div class="box-header">
                        <h3 class="box-title">
                            <?php echo lang('sale_by_payment_methods'); ?></h3>
                    </div>

                   <table class="dashboard_w_1">
                       <?php
                       $sale_by_paymentsTotal = $sale_by_paymentsTotal->total_sales;
                       foreach ($sale_by_payments as $value):
                            $inline_p = (int)(($value->total_sales * 100)/$sale_by_paymentsTotal);
                           ?>
                       <tr>
                           <th class="dashboard_w_2"><?php echo escape_output($value->name)?></th>
                           <th>
                                   <div class="progress">
                                       <div class="progress-bar" role="progressbar" style="width: <?php echo escape_output($inline_p)?>%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"><?php echo getAmtP($value->total_sales)?></div>
                                   </div>
                           </th>
                       </tr>
                       <?php endforeach;?>
                   </table>

                </div>
            </div>

        </div>
    </div>
    <?php endif;?>
    */ ?>

    <!-- Order Types & Quick Links Row -->
    <div class="row db-bottom-row" style="margin-bottom: 30px;">
        <div class="col-md-12 db-bottom-flex-container" style="display: flex;gap: 20px;align-items: stretch;flex-wrap: nowrap;margin-top: 20px;">
            <!-- Order Types Card -->
            <div class="db-order-types-card" style="flex: 0 0 35%; max-width: 35%; background: #ffffff; border-radius: 20px; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); padding: 24px 24.97px 44px 24px; overflow: hidden;">
                <?php
                // Prepare order type data from the new query
                $order_type_array = array();
                $total_orders_sum = 0;

                if (!empty($order_type_data)) {
                    foreach ($order_type_data as $ot) {
                        $order_type_array[$ot->order_type_label] = array(
                            'total_orders' => $ot->total_orders,
                            'total_items' => $ot->total_items,
                            'total_revenue' => $ot->total_revenue,
                            'percentage' => $ot->percentage
                        );
                        $total_orders_sum += $ot->total_orders;
                    }
                }

                $dinein_count_val = isset($order_type_array['Dine In']) ? $order_type_array['Dine In']['total_orders'] : 0;
                $takeaway_count_val = isset($order_type_array['Take Away']) ? $order_type_array['Take Away']['total_orders'] : 0;
                $delivery_count_val = isset($order_type_array['Delivery']) ? $order_type_array['Delivery']['total_orders'] : 0;

                $dinein_percent = isset($order_type_array['Dine In']) ? $order_type_array['Dine In']['percentage'] : 0;
                $takeaway_percent = isset($order_type_array['Take Away']) ? $order_type_array['Take Away']['percentage'] : 0;
                $delivery_percent = isset($order_type_array['Delivery']) ? $order_type_array['Delivery']['percentage'] : 0;
                ?>

                <header style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 28px;">
                    <h2 style="color: #2C2416; font-size: 20px; font-weight: 600; line-height: 1.6; margin: 0; font-family: 'DM Sans', sans-serif;">Order Types</h2>
                    <div id="order_type_date_selector" style="display: flex; align-items: center; gap: 10px; color: #2C2416; font-size: 14px; font-weight: 600; line-height: 1.7; cursor: pointer; font-family: 'DM Sans', sans-serif; position: relative;">
                        <span id="order_type_date_display">Last 30 Days</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#2C2416" stroke-width="1.74753" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>

                        <!-- Date Range Popup -->
                        <div id="order_type_date_popup" style="display: none; position: absolute; top: 100%; right: 0; margin-top: 8px; background: white; border-radius: 12px; box-shadow: 0 8px 30px rgba(0,0,0,0.2); min-width: 220px; z-index: 1000; padding: 8px; border: 1px solid rgba(231, 221, 204, 0.5);">
                            <!-- Preset Options -->
                            <div class="order_type_date_option" data-days="15" style="display: flex; align-items: center; padding: 12px 16px; color: #6E665A; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500; cursor: pointer; border-radius: 8px; transition: all 0.2s;" onmouseover="this.style.background='rgba(231, 221, 204, 0.2)'" onmouseout="this.style.background='transparent'">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="margin-right: 10px; flex-shrink: 0;">
                                    <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#B8954A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"/>
                                </svg>
                                <span>Last 15 Days</span>
                            </div>
                            <div class="order_type_date_option" data-days="30" style="display: flex; align-items: center; padding: 12px 16px; color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600; cursor: pointer; border-radius: 8px; transition: all 0.2s;" onmouseover="this.style.background='rgba(231, 221, 204, 0.2)'" onmouseout="this.style.background='transparent'">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="margin-right: 10px; flex-shrink: 0;">
                                    <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#B8954A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                <span>Last 30 Days</span>
                            </div>
                            <div class="order_type_date_option" data-days="60" style="display: flex; align-items: center; padding: 12px 16px; color: #6E665A; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500; cursor: pointer; border-radius: 8px; transition: all 0.2s;" onmouseover="this.style.background='rgba(231, 221, 204, 0.2)'" onmouseout="this.style.background='transparent'">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="margin-right: 10px; flex-shrink: 0;">
                                    <path d="M2.51465 4.77148L7.75724 10.0141L12.9998 4.77148" stroke="#B8954A" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="display: none;"/>
                                </svg>
                                <span>Last 60 Days</span>
                            </div>

                            <!-- Divider -->
                            <div style="height: 1px; background: rgba(231, 221, 204, 0.5); margin: 8px 0;"></div>

                            <!-- Custom Date Range -->
                            <div class="order_type_date_option" data-days="custom" style="display: flex; align-items: center; padding: 12px 16px; color: #6E665A; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500; cursor: pointer; border-radius: 8px; transition: all 0.2s;" onmouseover="this.style.background='rgba(231, 221, 204, 0.2)'" onmouseout="this.style.background='transparent'">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" style="margin-right: 10px; flex-shrink: 0;">
                                    <path d="M5 1.25V3.75" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" style="display: none;"/>
                                    <path d="M10 1.25V3.75" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" style="display: none;"/>
                                    <path d="M11.875 2.5H3.125C2.43464 2.5 1.875 3.05964 1.875 3.75V12.5C1.875 13.1904 2.43464 13.75 3.125 13.75H11.875C12.5654 13.75 13.125 13.1904 13.125 12.5V3.75C13.125 3.05964 12.5654 2.5 11.875 2.5Z" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" style="display: none;"/>
                                    <path d="M1.875 6.25H13.125" stroke="#6E665A" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round" style="display: none;"/>
                                </svg>
                                <span>Custom Range</span>
                            </div>

                            <!-- Custom Date Inputs -->
                            <div id="order_type_custom_date_inputs" style="display: none; padding: 12px 16px; border-top: 1px solid rgba(231, 221, 204, 0.5);">
                                <div style="display: flex; flex-direction: column; gap: 8px;">
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <label style="color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500;">From:</label>
                                        <input type="date" id="order_type_start_date" style="border: 1px solid rgba(231, 221, 204, 0.5); border-radius: 6px; padding: 6px 10px; font-size: 13px; font-family: 'DM Sans', sans-serif; color: #2C2416;"/>
                                    </div>
                                    <div style="display: flex; justify-content: space-between; align-items: center;">
                                        <label style="color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500;">To:</label>
                                        <input type="date" id="order_type_end_date" style="border: 1px solid rgba(231, 221, 204, 0.5); border-radius: 6px; padding: 6px 10px; font-size: 13px; font-family: 'DM Sans', sans-serif; color: #2C2416;"/>
                                    </div>
                                    <button id="apply_order_type_custom_date" style="background: linear-gradient(40deg, #2C2416 0%, rgba(44, 36, 22, 0.90) 30%, rgba(44, 36, 22, 0.60) 100%); color: white; border: none; border-radius: 6px; padding: 8px 16px; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 600; cursor: pointer; margin-top: 4px;">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>

                <ul style="list-style: none; display: flex; flex-direction: column; gap: 24px; margin: 0; padding: 0;">
                    <!-- Dine In -->
                    <li id="ot_dine_in" style="display: flex; align-items: center; gap: 16px;">
                        <div style="width: 51px; height: 51px; border-radius: 50%; background: linear-gradient(0deg, #F6EEDB 0%, #F6EEDB 100%), linear-gradient(180deg, #B5911C 0%, #9D7A26 100%); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4863)">
<path d="M8.92495 0C9.08609 0 9.22555 0.0588802 9.34331 0.176641C9.46107 0.294401 9.51995 0.433854 9.51995 0.595V7.14C9.51995 7.46849 9.45797 7.77529 9.33401 8.06039C9.21005 8.3455 9.03961 8.59651 8.82268 8.81344C8.60575 9.03036 8.35164 9.20081 8.06034 9.32477C7.76903 9.44872 7.46224 9.5138 7.13995 9.52V18.445C7.13995 18.6061 7.08107 18.7456 6.96331 18.8634C6.84555 18.9811 6.70609 19.04 6.54495 19.04C6.3838 19.04 6.24435 18.9811 6.12659 18.8634C6.00883 18.7456 5.94995 18.6061 5.94995 18.445V9.52C5.62146 9.52 5.31466 9.45802 5.02956 9.33406C4.74445 9.2101 4.49344 9.03966 4.27651 8.82273C4.05958 8.60581 3.88914 8.35479 3.76518 8.06969C3.64122 7.78458 3.57614 7.47469 3.56995 7.14V0.595C3.56995 0.433854 3.62883 0.294401 3.74659 0.176641C3.86435 0.0588802 4.0038 0 4.16495 0C4.32609 0 4.46555 0.0588802 4.58331 0.176641C4.70107 0.294401 4.75995 0.433854 4.75995 0.595V7.14C4.75995 7.30734 4.79094 7.46229 4.85292 7.60484C4.91489 7.7474 4.99857 7.87135 5.10393 7.97672C5.2093 8.08208 5.33635 8.16885 5.4851 8.23703C5.63385 8.30521 5.7888 8.3362 5.94995 8.33V0.595C5.94995 0.433854 6.00883 0.294401 6.12659 0.176641C6.24435 0.0588802 6.3838 0 6.54495 0C6.70609 0 6.84555 0.0588802 6.96331 0.176641C7.08107 0.294401 7.13995 0.433854 7.13995 0.595V8.33C7.30729 8.33 7.46224 8.29901 7.60479 8.23703C7.74734 8.17505 7.8713 8.09138 7.97667 7.98602C8.08203 7.88065 8.1688 7.75359 8.23698 7.60484C8.30515 7.45609 8.33614 7.30115 8.32995 7.14V0.595C8.32995 0.433854 8.38883 0.294401 8.50659 0.176641C8.62435 0.0588802 8.7638 0 8.92495 0ZM15.4699 0V18.445C15.4699 18.6061 15.4111 18.7456 15.2933 18.8634C15.1755 18.9811 15.0361 19.04 14.8749 19.04C14.7138 19.04 14.5743 18.9811 14.4566 18.8634C14.3388 18.7456 14.2799 18.6061 14.2799 18.445V13.09C14.0506 13.09 13.8027 13.0931 13.5362 13.0993C13.2697 13.1055 13.0063 13.1024 12.746 13.09C12.4857 13.0776 12.2315 13.0404 11.9836 12.9784C11.7357 12.9165 11.5188 12.8204 11.3328 12.6902C11.1469 12.5601 10.9951 12.3834 10.8773 12.1603C10.7595 11.9372 10.7037 11.6521 10.7099 11.305V4.165C10.7099 3.58859 10.8184 3.04938 11.0353 2.54734C11.2523 2.04531 11.5498 1.60526 11.9278 1.22719C12.3059 0.849115 12.746 0.551615 13.248 0.334688C13.75 0.11776 14.2923 0.00619792 14.8749 0H15.4699ZM14.2799 1.24578C13.9329 1.31396 13.6168 1.43792 13.3317 1.61766C13.0466 1.7974 12.7955 2.02052 12.5786 2.28703C12.3617 2.55354 12.1943 2.84174 12.0766 3.15164C11.9588 3.46154 11.8999 3.79932 11.8999 4.165V11.305C11.8999 11.4661 11.9588 11.6056 12.0766 11.7234C12.1943 11.8411 12.3338 11.9 12.4949 11.9H14.2799V1.24578Z" fill="#5A3D0B"/>
</g>
<defs>
<clipPath id="clip0_40000099_4863">
<rect width="19.04" height="19.04" fill="white"/>
</clipPath>
</defs>
</svg>
                        </div>
                        <div style="flex: 1; display: flex; flex-direction: column; gap: 6px;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div><span style="color: #2C2416; font-size: 16px; font-weight: 500; line-height: 1.4; font-family: 'DM Sans', sans-serif;">Dine In</span><span class="ot-percent" style="color: #887E72; font-size: 16px; font-weight: 500; margin-left: 4px; font-family: 'DM Sans', sans-serif;"><?php echo round($dinein_percent, 1); ?>%</span></div>
                                <span class="ot-count" style="color: #2C2416; font-size: 16px; font-weight: 500; line-height: 1.4; font-family: 'DM Sans', sans-serif;"><?php echo $dinein_count_val; ?> orders</span>
                            </div>
                            <div style="width: 100%; height: 16px; background: #F2ECDE; border-radius: 60px; overflow: hidden;">
                                <div class="ot-progress" style="height: 100%; background: linear-gradient(40deg, #2C2416 0%, rgba(44, 36, 22, 0.90) 30%, rgba(44, 36, 22, 0.60) 100%); border-radius: 60px; width: <?php echo $dinein_percent; ?>%;"></div>
                            </div>
                        </div>
                    </li>

                    <!-- Take Away -->
                    <li id="ot_take_away" style="display: flex; align-items: center; gap: 16px;">
                        <div style="width: 51px; height: 51px; border-radius: 50%; background: linear-gradient(0deg, #F6EEDB 0%, #F6EEDB 100%), linear-gradient(180deg, #B5911C 0%, #9D7A26 100%); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<path d="M15.4702 7.13945H3.57021V15.4695H15.4702V7.13945ZM1.78521 5.94945H17.2552V2.37945H1.78521V5.94945ZM16.6602 7.13945V16.0645C16.6602 16.2223 16.5975 16.3736 16.4859 16.4852C16.3744 16.5968 16.223 16.6595 16.0652 16.6595H2.97521C2.81741 16.6595 2.66607 16.5968 2.55449 16.4852C2.4429 16.3736 2.38021 16.2223 2.38021 16.0645V7.13945H1.19021C1.03241 7.13945 0.88107 7.07677 0.769486 6.96518C0.657902 6.8536 0.595215 6.70226 0.595215 6.54445V1.78445C0.595215 1.62665 0.657902 1.47531 0.769486 1.36372C0.88107 1.25214 1.03241 1.18945 1.19021 1.18945H17.8502C18.008 1.18945 18.1594 1.25214 18.2709 1.36372C18.3825 1.47531 18.4452 1.62665 18.4452 1.78445V6.54445C18.4452 6.70226 18.3825 6.8536 18.2709 6.96518C18.1594 7.07677 18.008 7.13945 17.8502 7.13945H16.6602ZM7.73522 9.51945H11.3052C11.463 9.51945 11.6144 9.58214 11.7259 9.69372C11.8375 9.80531 11.9002 9.95665 11.9002 10.1145C11.9002 10.2723 11.8375 10.4236 11.7259 10.5352C11.6144 10.6468 11.463 10.7095 11.3052 10.7095H7.73522C7.57741 10.7095 7.42607 10.6468 7.31449 10.5352C7.2029 10.4236 7.14021 10.2723 7.14021 10.1145C7.14021 9.95665 7.2029 9.80531 7.31449 9.69372C7.42607 9.58214 7.57741 9.51945 7.73522 9.51945Z" fill="#5A3D0B"/>
</svg>
                        </div>
                        <div style="flex: 1; display: flex; flex-direction: column; gap: 6px;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div><span style="color: #2C2416; font-size: 16px; font-weight: 500; line-height: 1.4; font-family: 'DM Sans', sans-serif;">Take Away</span><span class="ot-percent" style="color: #887E72; font-size: 16px; font-weight: 500; margin-left: 4px; font-family: 'DM Sans', sans-serif;"><?php echo round($takeaway_percent, 1); ?>%</span></div>
                                <span class="ot-count" style="color: #2C2416; font-size: 16px; font-weight: 500; line-height: 1.4; font-family: 'DM Sans', sans-serif;"><?php echo $takeaway_count_val; ?> orders</span>
                            </div>
                            <div style="width: 100%; height: 16px; background: #F2ECDE; border-radius: 60px; overflow: hidden;">
                                <div class="ot-progress" style="height: 100%; background: linear-gradient(40deg, #2C2416 0%, rgba(44, 36, 22, 0.90) 30%, rgba(44, 36, 22, 0.60) 100%); border-radius: 60px; width: <?php echo $takeaway_percent; ?>%;"></div>
                            </div>
                        </div>
                    </li>

                    <!-- Delivery -->
                    <li id="ot_delivery" style="display: flex; align-items: center; gap: 16px;">
                        <div style="width: 51px; height: 51px; border-radius: 50%; background: linear-gradient(0deg, #F6EEDB 0%, #F6EEDB 100%), linear-gradient(180deg, #B5911C 0%, #9D7A26 100%); display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<path d="M6.74316 15.0723H6.7511" stroke="#5A3D0B" stroke-width="1.58667" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.3132 3.96594H14.2799M10.3132 6.34594H12.2965M11.1065 12.6918V13.4851C11.1065 15.3558 11.1065 16.2904 10.5258 16.8719C9.94511 17.4526 9.00977 17.4526 7.13988 17.4526H6.34655C4.47666 17.4526 3.54132 17.4526 2.9606 16.8719C2.37988 16.2904 2.37988 15.3558 2.37988 13.4851V8.72514C2.37988 6.85446 2.37988 5.91912 2.9606 5.33761C3.45247 4.84654 4.199 4.77117 5.55322 4.75927M7.93322 4.75927V5.5526C7.93322 7.04883 7.93322 7.79615 8.39811 8.26104C8.863 8.72594 9.61032 8.72594 11.1065 8.72594V10.3126L13.4865 8.72594C14.9828 8.72594 15.7301 8.72594 16.195 8.26104C16.6599 7.79615 16.6599 7.04883 16.6599 5.5526V4.75927C16.6599 3.26304 16.6599 2.51572 16.195 2.05083C15.7301 1.58594 14.9828 1.58594 13.4865 1.58594H11.1065C9.61032 1.58594 8.863 1.58594 8.39811 2.05083C7.93322 2.51572 7.93322 3.26304 7.93322 4.75927Z" stroke="#5A3D0B" stroke-width="1.19" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                        </div>
                        <div style="flex: 1; display: flex; flex-direction: column; gap: 6px;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <div><span style="color: #2C2416; font-size: 16px; font-weight: 500; line-height: 1.4; font-family: 'DM Sans', sans-serif;">Delivery</span><span class="ot-percent" style="color: #887E72; font-size: 16px; font-weight: 500; margin-left: 4px; font-family: 'DM Sans', sans-serif;"><?php echo round($delivery_percent, 1); ?>%</span></div>
                                <span class="ot-count" style="color: #2C2416; font-size: 16px; font-weight: 500; line-height: 1.4; font-family: 'DM Sans', sans-serif;"><?php echo $delivery_count_val; ?> orders</span>
                            </div>
                            <div style="width: 100%; height: 16px; background: #F2ECDE; border-radius: 60px; overflow: hidden;">
                                <div class="ot-progress" style="height: 100%; background: linear-gradient(40deg, #2C2416 0%, rgba(44, 36, 22, 0.90) 30%, rgba(44, 36, 22, 0.60) 100%); border-radius: 60px; width: <?php echo $delivery_percent; ?>%;"></div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Quick Links Card -->
            <div class="db-quick-links-card" style="flex: 0 0 64%; max-width: 65%; background: white; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); overflow: hidden; border-radius: 20px; padding: 24px 24px 24px 24px;">
                <div style="width: 100%; justify-content: space-between; align-items: center; display: flex; margin-bottom: 20px;">
                    <div style="color: #2C2416; font-size: 20px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 32px; word-wrap: break-word">Quick Links</div>
                    <div style="justify-content: flex-end; align-items: center; gap: 6px; display: flex; cursor: pointer;">
                        <div style="text-align: right; color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 24px; word-wrap: break-word">See More</div>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 12L10 8L6 4" stroke="#2C2416" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                <div style="width: 100%; display: flex; flex-wrap: wrap; gap: 10px;">
                    <!-- Food Menu -->
                    <a href="<?php echo base_url(); ?>foodMenu/addEditFoodMenu" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4916)">
<path d="M1.99951 1.33398V6.00014C1.99951 6.7334 2.59945 7.33333 3.3327 7.33333H5.99908C6.35266 7.33333 6.69176 7.19287 6.94178 6.94285C7.19181 6.69283 7.33227 6.35373 7.33227 6.00014V1.33398" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.6665 1.33398V14.6659" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.9985 9.99971V1.33398C13.1145 1.33398 12.2668 1.68514 11.6417 2.31019C11.0167 2.93524 10.6655 3.783 10.6655 4.66696V8.66652C10.6655 9.39978 11.2655 9.99971 11.9987 9.99971H13.9985ZM13.9985 9.99971V14.6659" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_4916">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Food Menu</div>
                        </div>
                    </a>
                    <!-- Supplier Payment -->
                    <a href="<?php echo base_url(); ?>SupplierPayment/addSupplierPayment" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4941)">
<path d="M7.99902 1.33398V14.6659" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11.332 3.33203H6.33259C5.71382 3.33203 5.12039 3.57784 4.68286 4.01537C4.24532 4.45291 3.99951 5.04634 3.99951 5.66511C3.99951 6.28388 4.24532 6.87731 4.68286 7.31485C5.12039 7.75239 5.71382 7.99819 6.33259 7.99819H9.66556C10.2843 7.99819 10.8778 8.244 11.3153 8.68154C11.7528 9.11907 11.9986 9.7125 11.9986 10.3313C11.9986 10.95 11.7528 11.5435 11.3153 11.981C10.8778 12.4185 10.2843 12.6644 9.66556 12.6644H3.99951" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_4941">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Supplier Payment</div>
                        </div>
                    </a>
                    <!-- POS -->
                    <a href="<?php echo base_url(); ?>Sale/POS" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4931)">
<path d="M1.3335 4.66696L4.27318 1.72728C4.3972 1.60251 4.54469 1.50352 4.70715 1.43602C4.86961 1.36853 5.04382 1.33385 5.21974 1.33398H10.7791C10.9551 1.33385 11.1293 1.36853 11.2917 1.43602C11.4542 1.50352 11.6017 1.60251 11.7257 1.72728L14.6654 4.66696" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.6665 8V13.3328C2.6665 13.6863 2.80696 14.0254 3.05699 14.2755C3.30701 14.5255 3.64611 14.6659 3.99969 14.6659H11.9988C12.3524 14.6659 12.6915 14.5255 12.9415 14.2755C13.1916 14.0254 13.332 13.6863 13.332 13.3328V8" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.99908 14.6656V11.9992C9.99908 11.6456 9.85862 11.3065 9.6086 11.0565C9.35857 10.8065 9.01947 10.666 8.66589 10.666H7.3327C6.97912 10.666 6.64002 10.8065 6.38999 11.0565C6.13997 11.3065 5.99951 11.6456 5.99951 11.9992V14.6656" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1.33325 4.66602H14.6651" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6651 4.66602V6.6658C14.6651 7.01938 14.5247 7.35848 14.2747 7.60851C14.0246 7.85853 13.6855 7.99899 13.3319 7.99899C12.9425 7.97755 12.5705 7.83017 12.2721 7.57903C12.1925 7.52156 12.0969 7.49062 11.9988 7.49062C11.9006 7.49062 11.805 7.52156 11.7255 7.57903C11.427 7.83017 11.055 7.97755 10.6656 7.99899C10.2761 7.97755 9.90414 7.83017 9.60569 7.57903C9.52615 7.52156 9.43052 7.49062 9.33238 7.49062C9.23425 7.49062 9.13862 7.52156 9.05908 7.57903C8.76063 7.83017 8.38866 7.97755 7.9992 7.99899C7.60973 7.97755 7.23776 7.83017 6.93931 7.57903C6.85977 7.52156 6.76414 7.49062 6.66601 7.49062C6.56787 7.49062 6.47224 7.52156 6.3927 7.57903C6.09425 7.83017 5.72229 7.97755 5.33282 7.99899C4.94335 7.97755 4.57139 7.83017 4.27293 7.57903C4.1934 7.52156 4.09776 7.49062 3.99963 7.49062C3.9015 7.49062 3.80586 7.52156 3.72633 7.57903C3.42787 7.83017 3.05591 7.97755 2.66644 7.99899C2.31286 7.99899 1.97376 7.85853 1.72373 7.60851C1.47371 7.35848 1.33325 7.01938 1.33325 6.6658V4.66602" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_4931">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">POS</div>
                        </div>
                    </a>
                    <!-- Expense -->
                    <a href="<?php echo base_url(); ?>Expense/addEditExpense" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4941)">
<path d="M7.99902 1.33398V14.6659" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11.332 3.33203H6.33259C5.71382 3.33203 5.12039 3.57784 4.68286 4.01537C4.24532 4.45291 3.99951 5.04634 3.99951 5.66511C3.99951 6.28388 4.24532 6.87731 4.68286 7.31485C5.12039 7.75239 5.71382 7.99819 6.33259 7.99819H9.66556C10.2843 7.99819 10.8778 8.244 11.3153 8.68154C11.7528 9.11907 11.9986 9.7125 11.9986 10.3313C11.9986 10.95 11.7528 11.5435 11.3153 11.981C10.8778 12.4185 10.2843 12.6644 9.66556 12.6644H3.99951" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_4941">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Expense</div>
                        </div>
                    </a>
                    <!-- Purchase -->
                    <a href="<?php echo base_url(); ?>Purchase/addEditPurchase" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4931)">
<path d="M1.3335 4.66696L4.27318 1.72728C4.3972 1.60251 4.54469 1.50352 4.70715 1.43602C4.86961 1.36853 5.04382 1.33385 5.21974 1.33398H10.7791C10.9551 1.33385 11.1293 1.36853 11.2917 1.43602C11.4542 1.50352 11.6017 1.60251 11.7257 1.72728L14.6654 4.66696" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.6665 8V13.3328C2.6665 13.6863 2.80696 14.0254 3.05699 14.2755C3.30701 14.5255 3.64611 14.6659 3.99969 14.6659H11.9988C12.3524 14.6659 12.6915 14.5255 12.9415 14.2755C13.1916 14.0254 13.332 13.6863 13.332 13.3328V8" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.99908 14.6656V11.9992C9.99908 11.6456 9.85862 11.3065 9.6086 11.0565C9.35857 10.8065 9.01947 10.666 8.66589 10.666H7.3327C6.97912 10.666 6.64002 10.8065 6.38999 11.0565C6.13997 11.3065 5.99951 11.6456 5.99951 11.9992V14.6656" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M1.33325 4.66602H14.6651" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14.6651 4.66602V6.6658C14.6651 7.01938 14.5247 7.35848 14.2747 7.60851C14.0246 7.85853 13.6855 7.99899 13.3319 7.99899C12.9425 7.97755 12.5705 7.83017 12.2721 7.57903C12.1925 7.52156 12.0969 7.49062 11.9988 7.49062C11.9006 7.49062 11.805 7.52156 11.7255 7.57903C11.427 7.83017 11.055 7.97755 10.6656 7.99899C10.2761 7.97755 9.90414 7.83017 9.60569 7.57903C9.52615 7.52156 9.43052 7.49062 9.33238 7.49062C9.23425 7.49062 9.13862 7.52156 9.05908 7.57903C8.76063 7.83017 8.38866 7.97755 7.9992 7.99899C7.60973 7.97755 7.23776 7.83017 6.93931 7.57903C6.85977 7.52156 6.76414 7.49062 6.66601 7.49062C6.56787 7.49062 6.47224 7.52156 6.3927 7.57903C6.09425 7.83017 5.72229 7.97755 5.33282 7.99899C4.94335 7.97755 4.57139 7.83017 4.27293 7.57903C4.1934 7.52156 4.09776 7.49062 3.99963 7.49062C3.9015 7.49062 3.80586 7.52156 3.72633 7.57903C3.42787 7.83017 3.05591 7.97755 2.66644 7.99899C2.31286 7.99899 1.97376 7.85853 1.72373 7.60851C1.47371 7.35848 1.33325 7.01938 1.33325 6.6658V4.66602" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_4931">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Purchase</div>
                        </div>
                    </a>
                    <!-- Daily Summary Report -->
                    <a href="<?php echo base_url(); ?>Report/dailySummaryReport" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4941)">
<path d="M7.99902 1.33398V14.6659" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M11.332 3.33203H6.33259C5.71382 3.33203 5.12039 3.57784 4.68286 4.01537C4.24532 4.45291 3.99951 5.04634 3.99951 5.66511C3.99951 6.28388 4.24532 6.87731 4.68286 7.31485C5.12039 7.75239 5.71382 7.99819 6.33259 7.99819H9.66556C10.2843 7.99819 10.8778 8.244 11.3153 8.68154C11.7528 9.11907 11.9986 9.7125 11.9986 10.3313C11.9986 10.95 11.7528 11.5435 11.3153 11.981C10.8778 12.4185 10.2843 12.6644 9.66556 12.6644H3.99951" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_4941">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Daily Summary Report</div>
                        </div>
                    </a>
                    <!-- Register Report -->
                    <a href="<?php echo base_url(); ?>Report/registerReport" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4916)">
<path d="M1.99951 1.33398V6.00014C1.99951 6.7334 2.59945 7.33333 3.3327 7.33333H5.99908C6.35266 7.33333 6.69176 7.19287 6.94178 6.94285C7.19181 6.69283 7.33227 6.35373 7.33227 6.00014V1.33398" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.6665 1.33398V14.6659" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M13.9985 9.99971V1.33398C13.1145 1.33398 12.2668 1.68514 11.6417 2.31019C11.0167 2.93524 10.6655 3.783 10.6655 4.66696V8.66652C10.6655 9.39978 11.2655 9.99971 11.9987 9.99971H13.9985ZM13.9985 9.99971V14.6659" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_4916">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Register Report</div>
                        </div>
                    </a>
                    <!-- Profit Loss Report -->
                    <a href="<?php echo base_url(); ?>Report/profitLossReport" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4975)">
<path d="M14.6651 4.66602L8.99909 10.3321L5.66612 6.9991L1.33325 11.332" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6655 4.66602H14.6651V8.66558" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_4975">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Profit Loss Report</div>
                        </div>
                    </a>
                    <!-- Sale Report -->
                    <a href="<?php echo base_url(); ?>Report/saleReportByDate" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4992)">
<path d="M9.99904 1.33398H3.99969C3.64611 1.33398 3.30701 1.47444 3.05699 1.72447C2.80696 1.97449 2.6665 2.31359 2.6665 2.66717V13.3327C2.6665 13.6863 2.80696 14.0254 3.05699 14.2754C3.30701 14.5254 3.64611 14.6659 3.99969 14.6659H11.9988C12.3524 14.6659 12.6915 14.5254 12.9415 14.2754C13.1916 14.0254 13.332 13.6863 13.332 13.3327V4.66696L9.99904 1.33398Z" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.33252 1.33398V4.00036C9.33252 4.35395 9.47298 4.69305 9.723 4.94307C9.97302 5.19309 10.3121 5.33355 10.6657 5.33355H13.3321" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.66571 6H5.33252" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6653 8.66602H5.33252" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6655 11.332H5.33276" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_4992">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Sale Report</div>
                        </div>
                    </a>
                    <!-- Food Sales Report -->
                    <a href="<?php echo base_url(); ?>Report/foodSalesReport" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_4992)">
<path d="M9.99904 1.33398H3.99969C3.64611 1.33398 3.30701 1.47444 3.05699 1.72447C2.80696 1.97449 2.6665 2.31359 2.6665 2.66717V13.3327C2.6665 13.6863 2.80696 14.0254 3.05699 14.2754C3.30701 14.5254 3.64611 14.6659 3.99969 14.6659H11.9988C12.3524 14.6659 12.6915 14.5254 12.9415 14.2754C13.1916 14.0254 13.332 13.6863 13.332 13.3327V4.66696L9.99904 1.33398Z" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M9.33252 1.33398V4.00036C9.33252 4.35395 9.47298 4.69305 9.723 4.94307C9.97302 5.19309 10.3121 5.33355 10.6657 5.33355H13.3321" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M6.66571 6H5.33252" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6653 8.66602H5.33252" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10.6655 11.332H5.33276" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_4992">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Food Sales Report</div>
                        </div>
                    </a>
                    <!-- Setting -->
                    <a href="<?php echo base_url(); ?>Settings" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_5002)">
<path d="M8.14551 1.33398H7.85221C7.49863 1.33398 7.15952 1.47444 6.9095 1.72447C6.65948 1.97449 6.51902 2.31359 6.51902 2.66717V2.78716C6.51878 3.02095 6.45707 3.25057 6.34007 3.45298C6.22307 3.65539 6.0549 3.82347 5.85243 3.94037L5.56579 4.10702C5.36312 4.22403 5.13322 4.28563 4.8992 4.28563C4.66517 4.28563 4.43527 4.22403 4.2326 4.10702L4.13261 4.05369C3.82669 3.87722 3.46324 3.82934 3.12206 3.92058C2.78087 4.01181 2.48983 4.23469 2.31281 4.5403L2.16616 4.79361C1.98969 5.09953 1.94181 5.46298 2.03305 5.80416C2.12428 6.14535 2.34716 6.4364 2.65277 6.61341L2.75276 6.68007C2.95426 6.7964 3.1218 6.96343 3.23874 7.16457C3.35569 7.36571 3.41795 7.59395 3.41936 7.82661V8.16658C3.42029 8.4015 3.35913 8.63249 3.24207 8.83618C3.12501 9.03986 2.95621 9.20899 2.75276 9.32645L2.65277 9.38644C2.34716 9.56346 2.12428 9.8545 2.03305 10.1957C1.94181 10.5369 1.98969 10.9003 2.16616 11.2062L2.31281 11.4596C2.48983 11.7652 2.78087 11.988 3.12206 12.0793C3.46324 12.1705 3.82669 12.1226 4.13261 11.9462L4.2326 11.8928C4.43527 11.7758 4.66517 11.7142 4.8992 11.7142C5.13322 11.7142 5.36312 11.7758 5.56579 11.8928L5.85243 12.0595C6.0549 12.1764 6.22307 12.3445 6.34007 12.5469C6.45707 12.7493 6.51878 12.9789 6.51902 13.2127V13.3327C6.51902 13.6863 6.65948 14.0254 6.9095 14.2754C7.15952 14.5254 7.49863 14.6659 7.85221 14.6659H8.14551C8.4991 14.6659 8.8382 14.5254 9.08822 14.2754C9.33824 14.0254 9.4787 13.6863 9.4787 13.3327V13.2127C9.47894 12.9789 9.54066 12.7493 9.65765 12.5469C9.77465 12.3445 9.94282 12.1764 10.1453 12.0595L10.4319 11.8928C10.6346 11.7758 10.8645 11.7142 11.0985 11.7142C11.3325 11.7142 11.5624 11.7758 11.7651 11.8928L11.8651 11.9462C12.171 12.1226 12.5345 12.1705 12.8757 12.0793C13.2168 11.988 13.5079 11.7652 13.6849 11.4596L13.8316 11.1996C14.008 10.8937 14.0559 10.5302 13.9647 10.189C13.8734 9.84784 13.6506 9.55679 13.3449 9.37978L13.245 9.32645C13.0415 9.20899 12.8727 9.03986 12.7556 8.83618C12.6386 8.63249 12.5774 8.4015 12.5784 8.16658V7.83328C12.5774 7.59836 12.6386 7.36736 12.7556 7.16368C12.8727 6.96 13.0415 6.79086 13.245 6.67341L13.3449 6.61341C13.6506 6.4364 13.8734 6.14535 13.9647 5.80416C14.0559 5.46298 14.008 5.09953 13.8316 4.79361L13.6849 4.5403C13.5079 4.23469 13.2168 4.01181 12.8757 3.92058C12.5345 3.82934 12.171 3.87722 11.8651 4.05369L11.7651 4.10702C11.5624 4.22403 11.3325 4.28563 11.0985 4.28563C10.8645 4.28563 10.6346 4.22403 10.4319 4.10702L10.1453 3.94037C9.94282 3.82347 9.77465 3.65539 9.65765 3.45298C9.54066 3.25057 9.47894 3.02095 9.4787 2.78716V2.66717C9.4787 2.31359 9.33824 1.97449 9.08822 1.72447C8.8382 1.47444 8.4991 1.33398 8.14551 1.33398Z" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.99929 9.99957C9.10374 9.99957 9.99908 9.10423 9.99908 7.99978C9.99908 6.89533 9.10374 6 7.99929 6C6.89485 6 5.99951 6.89533 5.99951 7.99978C5.99951 9.10423 6.89485 9.99957 7.99929 9.99957Z" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_5002">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Setting</div>
                        </div>
                    </a>
                    <!-- Stock -->
                    <a href="<?php echo base_url(); ?>Inventory" style="width: calc(33.333% - 7px); padding: 18px 12px 18px 18px; background: #FBF9F4; border-radius: 8px; outline: 0.56px #F0EAE0 solid; outline-offset: -0.56px; justify-content: flex-start; align-items: center; gap: 10px; display: inline-flex; text-decoration: none; min-width: 0; box-sizing: border-box;">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0;">
<g clip-path="url(#clip0_40000099_5009)">
<path d="M7.33227 14.4845C7.53494 14.6015 7.76484 14.6631 7.99886 14.6631C8.23288 14.6631 8.46278 14.6015 8.66545 14.4845L13.3316 11.8181C13.5341 11.7013 13.7023 11.5332 13.8193 11.3308C13.9363 11.1283 13.998 10.8987 13.9982 10.6649V5.33218C13.998 5.09839 13.9363 4.86877 13.8193 4.66636C13.7023 4.46395 13.5341 4.29587 13.3316 4.17898L8.66545 1.5126C8.46278 1.39559 8.23288 1.33398 7.99886 1.33398C7.76484 1.33398 7.53494 1.39559 7.33227 1.5126L2.66611 4.17898C2.46364 4.29587 2.29547 4.46395 2.17847 4.66636C2.06147 4.86877 1.99975 5.09839 1.99951 5.33218V10.6649C1.99975 10.8987 2.06147 11.1283 2.17847 11.3308C2.29547 11.5332 2.46364 11.7013 2.66611 11.8181L7.33227 14.4845Z" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M7.99902 14.6659V8" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M2.19312 4.66602L7.99915 7.99899L13.8052 4.66602" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M4.99951 2.8457L10.9989 6.27866" stroke="#B8954A" stroke-width="1.33319" stroke-linecap="round" stroke-linejoin="round"/>
</g>
<defs>
<clipPath id="clip0_40000099_5009">
<rect width="15.9983" height="15.9983" fill="white"/>
</clipPath>
</defs>
</svg>
                        <div style="flex: 1 1 0; min-width: 0; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                            <div style="color: #1C1A16; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px;">Stock</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12" style="display: flex; gap: 20px; align-items: stretch;">
            <div style="width: 50%;"> 
                <div class="box box-info" style="width: 100%; min-height: 373px; position: relative; background: white; overflow: hidden; border-radius: 20px;"> 
                    <!-- Header --> 
                    <div style="width: calc(100% - 48px); left: 24px; top: 23px; position: absolute; justify-content: space-between; align-items: center; display: inline-flex"> 
                        <div> 
                            <span style="color: #2C2416; font-size: 20px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 32px; word-wrap: break-word">Low Stock</span> 
                            <span style="color: #2C2416; font-size: 20px; font-family: 'DM Sans', sans-serif; font-weight: 700; line-height: 32px; word-wrap: break-word"> </span> 
                            <span style="color: #887E72; font-size: 16px; font-family: 'DM Sans', sans-serif; font-weight: 400; line-height: 32px; word-wrap: break-word">(<?= getAlertCount() ?>)</span> 
                        </div> 
                        <div style="justify-content: flex-end; align-items: center; gap: 6px; display: flex"> 
                            <a href="<?php echo base_url(); ?>Inventory" style="text-align: right; color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 24px; word-wrap: break-word; text-decoration: none;">See More</a> 
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"> 
                                <path d="M4.77197 12.514L10.0146 7.2714L4.77197 2.02881" stroke="#2C2416" stroke-width="1.74753" stroke-linecap="round" stroke-linejoin="round"/> 
                            </svg> 
                        </div> 
                    </div> 
    
                    <!-- Column Headers --> 
                    <div style="width: calc(100% - 48px); height: 41px; padding-left: 18px; padding-right: 18px; padding-top: 10px; padding-bottom: 10px; left: 24px; top: 75px; position: absolute; background: #FBF9F4; border-bottom: 0.50px #E7DDCC solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex"> 
                        <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex; width: 100%"> 
                            <div style="width: 40%; color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 18px; word-wrap: break-word">Item Name</div> 
                            <div style="width: 25%; text-align: center; color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 18px; word-wrap: break-word">Current</div> 
                            <div style="width: 35%; text-align: right; padding-right: 10px; color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 18px; word-wrap: break-word">Required</div> 
                        </div> 
                    </div> 
    
                    <!-- Data Rows --> 
                    <div style="width: calc(100% - 48px); left: 24px; top: 124px; position: absolute; overflow-y: auto; max-height: 240px;"> 
                        <?php 
                        $totalStock = 0; 
                        $rowIndex = 0; 
                        foreach ($low_stock_ingredients as $value) { 
                            if($value->id): 
                                $conversion_rate = (int)$value->conversion_rate?$value->conversion_rate:1; 
                                $totalStock = ($value->total_purchase*$value->conversion_rate)  - $value->total_consumption - $value->total_modifiers_consumption - $value->total_waste + $value->total_consumption_plus - $value->total_consumption_minus + ($value->total_transfer_plus*$value->conversion_rate) - ($value->total_transfer_minus*$value->conversion_rate)  +  ($value->total_transfer_plus_2*$value->conversion_rate) -  ($value->total_transfer_minus_2*$value->conversion_rate)+ ($value->total_production*$value->conversion_rate); 
                                if ($totalStock <= $value->alert_quantity): 
                                    if($value->conversion_rate==0 || $value->conversion_rate==''){ 
                                        $total_sale_unit = isset($value->conversion_rate) && (int)$value->conversion_rate?(int)($totalStock/1):'0'; 
                                    }else{ 
                                        $total_sale_unit = isset($value->conversion_rate) && (int)$value->conversion_rate?(int)($totalStock/$value->conversion_rate):'0'; 
                                    } 
                                    $currentStockValue = ($totalStock) ? getAmtP($totalStock%$conversion_rate) : getAmtP(0); 
                                    $requiredValue = escape_output($value->alert_quantity) . " " . escape_output($value->unit_name); 
                                    ?> 
                                    <div style="width: 100%; min-height: 59px; position: relative; border-bottom: 0.56px #E7DDCC solid; display: flex; align-items: center; padding: 8px 0;"> 
                                        <div style="width: 40%; padding-left: 18px; color: #1C1A16; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px; word-wrap: break-word"> 
                                            <?= escape_output($value->name . "(" . $value->code . ")") ?> 
                                        </div> 
                                        <div style="width: 25%; display: flex; justify-content: center;"> 
                                            <div style="padding-left: 12px; padding-right: 12px; padding-top: 4px; padding-bottom: 4px; background: #F6EEDB; border-radius: 16777200px; justify-content: center; align-items: center; gap: 10px; display: inline-flex"> 
                                                <div style="color: #5A3D0B; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 400; line-height: 24px; word-wrap: break-word"> 
                                                    <?= $currentStockValue ?><?= " " . escape_output($value->unit_name)?> 
                                                </div> 
                                            </div> 
                                        </div> 
                                        <div style="width: 35%; text-align: right; padding-right: 10px; color: #6E665A; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 400; line-height: 19.50px; word-wrap: break-word"> 
                                            <?= $requiredValue ?> 
                                        </div> 
                                    </div> 
                                    <?php 
                                    $rowIndex++; 
                                endif; 
                            endif; 
                        } ?> 
                    </div> 
                </div> 
            </div> 
    
            <div style="width: 50%;"> 
                <div class="box box-info" style="background: white; border-radius: 20px; overflow: hidden; border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.08); height:373px;"> 
                    <!-- Header Row: Single Line, No Extra Space --> 
                    <div style="padding: 16px 20px 10px; display: flex; justify-content: space-between; align-items: center; width: 100%; flex-wrap: nowrap;"> 
                        <h3 style="color: #2C2416; font-size: 20px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 32px; margin: 0; white-space: nowrap;"> 
                            <?php echo lang('operational_comparision'); ?> 
                        </h3> 
                        <div style="display: flex; align-items: center; gap: 20px; flex-shrink: 0;"> 
                            <div style="display: flex; align-items: center; gap: 8px;"> 
                                <div style="width: 12px; height: 12px; background: #C5A868; border-radius: 4.5px;"></div> 
                                <div style="color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 300; line-height: 24px;">Current</div> 
                            </div> 
                            <div style="display: flex; align-items: center; gap: 8px;"> 
                                <div style="width: 12px; height: 12px; background: #675F4C; border-radius: 4.5px;"></div> 
                                <div style="color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 300; line-height: 24px;">Previous</div> 
                            </div> 
                        </div> 
                    </div> 
    
                    <!-- Chart Area: Minimal Padding --> 
                    <div style="padding: 0 10px 5px;"> 
                        <style> 
                            #operational_comparision rect { rx: 8px !important; ry: 8px !important; } 
                            #operational_comparision text { font-family: 'DM Sans', sans-serif; fill: #6E665A; } 
                            #operational_comparision .morris-hover { border-radius: 8px; font-family: 'DM Sans', sans-serif; } 
                            .morris-hover.morris-default-style {
                                background: rgba(255, 255, 255, 0.96) !important;
                                border: 1px solid #E7DDCC !important;
                                box-shadow: 0 4px 12px rgba(0,0,0,0.1) !important;
                                padding: 10px !important;
                            }
                        </style> 
                        <div class="chart" id="operational_comparision" style="height: 260px; width: 100%;"></div> 
                    </div> 
                </div> 
            </div> 
        </div>
    </div>

 <div class="row" style="display: flex; flex-wrap: wrap; align-items: stretch;">
        <div class="col-lg-6" style="display: flex;">
            <div class="box box-info" style="width: 100%; min-height: 700px; position: relative; background: white; overflow: hidden; border-radius: 20px;">
                <!-- Header -->
                <div style="width: calc(100% - 48px); left: 24px; top: 23px; position: absolute; justify-content: space-between; align-items: center; display: inline-flex">
                    <div style="color: #2C2416; font-size: 20px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 32px; word-wrap: break-word">Top Food Items</div>
                    <div style="justify-content: flex-end; align-items: center; gap: 10px; display: inline-flex">
                        <a href="<?php echo base_url(); ?>foodMenu/foodMenus" style="text-align: right; color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 24px; word-wrap: break-word; text-decoration: none;">See More</a>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.77197 12.514L10.0146 7.2714L4.77197 2.02881" stroke="#2C2416" stroke-width="1.74753" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>
                
                <!-- Column Headers -->
                <div style="width: calc(100% - 48px); height: 41px; padding-left: 18px; padding-right: 18px; padding-top: 10px; padding-bottom: 10px; left: 24px; top: 75px; position: absolute; background: #FBF9F4; border-bottom: 0.50px #E7DDCC solid; flex-direction: column; justify-content: flex-start; align-items: flex-start; gap: 10px; display: inline-flex">
                    <div style="align-self: stretch; justify-content: space-between; align-items: center; display: inline-flex">
                        <div style="width: 198px; color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 18px; word-wrap: break-word">Item Name</div>
                        <div style="flex: 1; text-align: right; color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 18px; word-wrap: break-word">Orders</div>
                        <div style="width: 160px; text-align: right; color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 18px; word-wrap: break-word; padding-right: 20px;">Revenue</div>
                    </div>
                </div>
                
                <!-- Data Rows -->
                <div style="width: 100%; left: 0; top: 124px; position: absolute; display: flex; flex-direction: column; overflow-y: auto; overflow-x: hidden; max-height: 576px; padding: 0 24px; box-sizing: border-box;">
                    <?php
                    if ($top_ten_food_menu && !empty($top_ten_food_menu)) {
                        foreach ($top_ten_food_menu as $key => $value) {
                            $key++;
                            $menuItemName = escape_output($value->menu_name);
                            $totalQty = escape_output($value->totalQty);
                            ?>
                            <div style="height: 59px; display: flex; align-items: center; justify-content: space-between; border-bottom: 0.56px #E7DDCC solid; padding-right: 18px; margin: 8px 0;">
                                <div style="width: 198px; color: #1C1A16; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500; line-height: 19.50px; word-wrap: break-word; padding-left: 18px;"><?= $menuItemName ?></div>
                                
                                <div style="flex: 1; text-align: right;">
                                    <span style="padding: 4px 12px; background: #F6EEDB; border-radius: 16777200px; color: #5A3D0B; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 400; display: inline-block;"><?= $totalQty ?></span>
                                </div>
                                
                                <div style="width: 160px; text-align: right; display: flex; align-items: center; justify-content: flex-end; gap: 0px; padding-right: 20px;">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0; margin-right: -10px;">
                                        <path d="M21.2506 26.6339C21.3075 26.0429 21.4666 25.4633 21.7052 24.9406L26.7852 23.8723C26.7283 24.4746 26.5692 25.0429 26.3192 25.5656L21.2506 26.6339ZM26.3078 22.2699L21.1029 23.3609V20.0993L19.4891 20.4402V22.2472C19.4891 22.4063 19.4323 22.5654 19.3414 22.6904L18.5004 23.9178C18.2959 24.2246 17.9663 24.4405 17.6026 24.5087L13 25.4747C13.0568 24.861 13.2273 24.2814 13.4659 23.7473L17.864 22.8268V20.7812L13.7614 21.6335C13.8296 21.0198 13.9887 20.4402 14.2387 19.9061L17.864 19.1447V12.8146C18.3072 12.2691 18.8641 11.8146 19.4891 11.4736V18.8037L21.1029 18.4742V13.6102C21.5575 13.076 22.103 12.6101 22.728 12.2691V18.1332L26.7852 17.2809C26.717 17.8946 26.5579 18.4742 26.3078 19.0083L22.728 19.7584V21.3949L26.7852 20.5425C26.717 21.1562 26.5579 21.7358 26.3078 22.2699Z" fill="#000000"/>
                                    </svg>
                                    <span style="color: #1C1A16; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600;"><?= getAmtP($value->totalRevenue) ?></span>
                                </div>
                            </div>
                            <?php
                        }
                    } ?>
                </div>
            </div>
        </div>

        <div class="col-lg-6" style="display: flex;">
            <div class="box box-info" style="width: 100%; min-height: 700px; position: relative; background: white; overflow: hidden; border-radius: 20px; border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.06);">
                <!-- Header -->
                <div style="padding: 24px 24px 16px; display: flex; justify-content: space-between; align-items: center;">
                    <div style="color: #2C2416; font-size: 20px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 32px;">Top Customers</div>
                    <div style="display: flex; align-items: center; gap: 6px; cursor: pointer;">
                        <div style="color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600;">See More</div>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 4L10 8L6 12" stroke="#2C2416" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                </div>

                <!-- Content Area -->
                <div id="topCustomersContent" style="padding: 0 24px 24px;">
                    <!-- Column Headers -->
                    <div style="background: #FBF9F4; border-radius: 4px; padding: 12px 10px; margin-bottom: 8px;">
                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <div style="flex: 2.5; color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500; text-transform: capitalize;">Customer</div>
                            <div style="flex: 1; text-align: center; color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500;">Visits</div>
                            <div style="width: 160px; text-align: right; color: #6E665A; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500; padding-right: 20px;">Total Spent</div>
                        </div>
                    </div>

                    <!-- Customer Rows -->
                    <div style="display: flex; flex-direction: column; gap: 0px; overflow-y: auto; max-height: 560px;">
                    <?php
                    if ($top_ten_customer && !empty($top_ten_customer)) {
                        foreach ($top_ten_customer as $key => $value) {
                            $name = $value->name;
                            $initials = '';
                            $nameParts = explode(' ', $name);
                            if (count($nameParts) >= 2) {
                                $initials = strtoupper(substr($nameParts[0], 0, 1) . substr($nameParts[1], 0, 1));
                            } else {
                                $initials = strtoupper(substr($name, 0, 2));
                            }
                            $lastVisit = isset($value->last_visit_date) ? date('d M', strtotime($value->last_visit_date)) : '12 Jan';
                            ?>
                            <!-- Customer Row -->
                            <div style="display: flex; align-items: center; justify-content: space-between; padding: 12px 10px; border-bottom: 1px solid #F9F9F9; margin: 8px 0;">
                                <div style="display: flex; align-items: center; gap: 16px; flex: 2.5;">
                                    <!-- Avatar Circle -->
                                    <div style="width: 44px; height: 44px; min-width: 44px; background: #C5A868; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                                        <span style="color: white; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600;"><?= $initials ?></span>
                                    </div>
                                    <div style="display: flex; flex-direction: column; gap: 2px;">
                                        <div style="color: #2C2416; font-size: 15px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 20px;"><?= escape_output($name) ?></div>
                                        <div style="color: #887E72; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 400; line-height: 16px;">Last Visit, <?= date('d M', strtotime($value->last_visit_date)) ?></div>
                                    </div>
                                </div>
                                <div style="flex: 1; text-align: center; color: #2C2416; font-size: 15px; font-family: 'DM Sans', sans-serif; font-weight: 500;"><?= $value->total_visits ?></div>
                                <div style="width: 160px; text-align: right; display: flex; align-items: center; justify-content: flex-end; gap: 0px; padding-right: 20px;">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0; margin-right: -10px;">
                                        <path d="M21.2506 26.6339C21.3075 26.0429 21.4666 25.4633 21.7052 24.9406L26.7852 23.8723C26.7283 24.4746 26.5692 25.0429 26.3192 25.5656L21.2506 26.6339ZM26.3078 22.2699L21.1029 23.3609V20.0993L19.4891 20.4402V22.2472C19.4891 22.4063 19.4323 22.5654 19.3414 22.6904L18.5004 23.9178C18.2959 24.2246 17.9663 24.4405 17.6026 24.5087L13 25.4747C13.0568 24.861 13.2273 24.2814 13.4659 23.7473L17.864 22.8268V20.7812L13.7614 21.6335C13.8296 21.0198 13.9887 20.4402 14.2387 19.9061L17.864 19.1447V12.8146C18.3072 12.2691 18.8641 11.8146 19.4891 11.4736V18.8037L21.1029 18.4742V13.6102C21.5575 13.076 22.103 12.6101 22.728 12.2691V18.1332L26.7852 17.2809C26.717 17.8946 26.5579 18.4742 26.3078 19.0083L22.728 19.7584V21.3949L26.7852 20.5425C26.717 21.1562 26.5579 21.7358 26.3078 22.2699Z" fill="#000000"/>
                                    </svg>
                                    <span style="color: #1C1A16; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600;"><?= getAmtP($value->total_payable) ?></span>
                                </div>
                            </div>
                            <?php
                        }
                    } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12" style="display: flex; gap: 20px; align-items: stretch;">
           

            <div style="width: 60%;">
                <!-- Supplier Payables Card -->
                <div style="width: 100%; height: 100%; position: relative; background: white; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); overflow: hidden; border-radius: 20px; padding: 24px;">
                    <div style="width: 100%; justify-content: space-between; align-items: center; display: flex; margin-bottom: 20px;">
                        <div style="color: #2C2416; font-size: 20px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 32px;">Supplier Payables</div>
                        <a href="<?php echo base_url(); ?>Report/supplierDueReport" style="justify-content: flex-end; align-items: center; gap: 6px; display: flex; cursor: pointer; text-decoration: none;">
                            <div style="text-align: right; color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 24px;">See More</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 4L10 8L6 12" stroke="#2C2416" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>

                    <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 16px;">
                        <?php
                        $total_payable_sup = 0;
                        $suppliers = array();

                        if ($supplier_payable && !empty($supplier_payable)) {
                            foreach ($supplier_payable as $value) {
                                if (count($suppliers) >= 4) break;
                                $current_due = $value->due - getSupplierDuePayment($value->supplier_id);
                                if ($current_due > 0) {
                                    $total_payable_sup += $current_due;
                                    
                                    $status = 'Upcoming';
                                    $status_bg = '#F5ECD7';
                                    $status_color = '#8B6914';
                                    
                                    if(isset($value->purchase_date) && $value->purchase_date) {
                                        $purchase_date = strtotime($value->purchase_date);
                                        $today = strtotime(date('Y-m-d'));
                                        $diff_days = ($today - $purchase_date) / (60 * 60 * 24);
                                        
                                        if($diff_days > 15) {
                                            $status = 'Overdue';
                                            $status_bg = '#FDE8E8';
                                            $status_color = '#DC2626';
                                        } elseif($diff_days > 7) {
                                            $status = 'Upcoming';
                                            $status_bg = '#F5ECD7';
                                            $status_color = '#8B6914';
                                        } else {
                                            $status = 'Pending';
                                            $status_bg = '#E8F5E8';
                                            $status_color = '#10B981';
                                        }
                                    }
                                    
                                    $due_date = date('M d', strtotime($value->purchase_date . ' +15 days'));
                                    
                                    $suppliers[] = array(
                                        'name' => $value->name,
                                        'due' => $current_due,
                                        'status' => $status,
                                        'status_bg' => $status_bg,
                                        'status_color' => $status_color,
                                        'due_date' => $due_date
                                    );
                                }
                            }
                        }

                        for ($i = 0; $i < 4; $i++) {
                            if (isset($suppliers[$i])) {
                        ?>
                        <div style="position: relative; background: white; border-radius: 12px; border: 1px solid #F2F2F2; padding: 20px; min-height: 120px;">
                            <div style="color: #887E72; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500; margin-bottom: 8px;"><?php echo escape_output($suppliers[$i]['name']); ?></div>
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 6px;">
                                <div style="display: flex; align-items: center; gap: 0px;">
                                    <svg width="36" height="36" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" style="flex-shrink: 0; margin-right: -8px; margin-left: -8px;">
                                        <path d="M21.2506 26.6339C21.3075 26.0429 21.4666 25.4633 21.7052 24.9406L26.7852 23.8723C26.7283 24.4746 26.5692 25.0429 26.3192 25.5656L21.2506 26.6339ZM26.3078 22.2699L21.1029 23.3609V20.0993L19.4891 20.4402V22.2472C19.4891 22.4063 19.4323 22.5654 19.3414 22.6904L18.5004 23.9178C18.2959 24.2246 17.9663 24.4405 17.6026 24.5087L13 25.4747C13.0568 24.861 13.2273 24.2814 13.4659 23.7473L17.864 22.8268V20.7812L13.7614 21.6335C13.8296 21.0198 13.9887 20.4402 14.2387 19.9061L17.864 19.1447V12.8146C18.3072 12.2691 18.8641 11.8146 19.4891 11.4736V18.8037L21.1029 18.4742V13.6102C21.5575 13.076 22.103 12.6101 22.728 12.2691V18.1332L26.7852 17.2809C26.717 17.8946 26.5579 18.4742 26.3078 19.0083L22.728 19.7584V21.3949L26.7852 20.5425C26.717 21.1562 26.5579 21.7358 26.3078 22.2699Z" fill="#000000"/>
                                    </svg>
                                    <span style="color: #2C2416; font-size: 24px; font-family: 'DM Sans', sans-serif; font-weight: 600;"><?php echo number_format($suppliers[$i]['due'], 0); ?></span>
                                </div>
                                <span style="padding: 4px 14px; background: <?php echo $suppliers[$i]['status_bg']; ?>; border-radius: 20px; color: <?php echo $suppliers[$i]['status_color']; ?>; font-size: 12px; font-family: 'DM Sans', sans-serif; font-weight: 500;"><?php echo $suppliers[$i]['status']; ?></span>
                            </div>
                            <div style="color: #887E72; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 400;">Due Date <?php echo $suppliers[$i]['due_date']; ?></div>
                        </div>
                        <?php 
                            } else { 
                        ?>
                        <div style="position: relative; background: #FBF9F4; border-radius: 12px; border: 1px solid #F2F2F2; padding: 20px; min-height: 120px; display: flex; align-items: center; justify-content: center;">
                            <div style="color: #887E72; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500;">No Pending Dues</div>
                        </div>
                        <?php 
                            } 
                        } 
                        ?>
                    </div>
                </div>
            </div>

             <div style="width: 40%;">
                <!-- Customer Receivables Card - Modern UI -->
                <div style="width: 100%; height: 100%; position: relative; background: white; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); overflow: hidden; border-radius: 20px; padding: 24px;">
                    <div style="width: 100%; justify-content: space-between; align-items: center; display: flex; margin-bottom: 20px;">
                        <div style="color: #2C2416; font-size: 20px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 32px;">Customer Receivables</div>
                        <a href="<?php echo base_url(); ?>Report/customerDueReport" style="justify-content: flex-end; align-items: center; gap: 6px; display: flex; cursor: pointer; text-decoration: none;">
                            <div style="text-align: right; color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 24px;">See More</div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6 4L10 8L6 12" stroke="#2C2416" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </div>

                    <!-- Table Header -->
                    <div style="display: flex; align-items: center; padding: 12px 16px; background: #FBF9F4; border-radius: 8px; margin-bottom: 12px;">
                        <div style="flex: 1; color: #887E72; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500;">Customer</div>
                        <div style="flex: 1; text-align: center; color: #887E72; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500;">Status</div>
                        <div style="flex: 1; text-align: right; color: #887E72; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 500;">Total Spent</div>
                    </div>

                    <!-- Customer List -->
                    <div style="display: flex; flex-direction: column; gap: 12px;">
                        <?php
                        $total_payable_cust = 0;
                        $customer_count = 0;
                        if ($customer_receivable && !empty($customer_receivable)) {
                            foreach ($customer_receivable as $key => $value) {
                                if($customer_count >= 4) break;
                                if($value->due_amount != '0.00' && $value->due_amount != ''){
                                    $current_due = $value->due_amount - getCustomerDueReceive($value->customer_id);
                                    $total_payable_cust += $current_due;
                                    
                                    // Determine status based on date
                                    $status = 'Pending';
                                    $status_bg = '#F5ECD7';
                                    $status_color = '#8B6914';
                                    
                                    if(isset($value->sale_date) && $value->sale_date) {
                                        $sale_date = strtotime($value->sale_date);
                                        $today = strtotime(date('Y-m-d'));
                                        $diff_days = ($today - $sale_date) / (60 * 60 * 24);
                                        
                                        if($diff_days > 15) {
                                            $status = 'Overdue';
                                            $status_bg = '#FDE8E8';
                                            $status_color = '#DC2626';
                                        } elseif($diff_days > 7) {
                                            $status = 'Pending';
                                            $status_bg = '#F5ECD7';
                                            $status_color = '#8B6914';
                                        } else {
                                            $status = 'Pending';
                                            $status_bg = '#F5ECD7';
                                            $status_color = '#8B6914';
                                        }
                                    }
                                    
                                    // Calculate due date (15 days from sale date)
                                    $due_date = date('d M', strtotime($value->sale_date . ' +15 days'));
                                    $customer_count++;
                        ?>
                        <div style="display: flex; align-items: center; padding: 8px 0;">
                            <div style="flex: 1;">
                                <div style="color: #2C2416; font-size: 16px; font-family: 'DM Sans', sans-serif; font-weight: 600;"><?php echo escape_output($value->name); ?></div>
                                <div style="color: #887E72; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 400; margin-top: 2px;">Due Date, <?php echo $due_date; ?></div>
                            </div>
                            <div style="flex: 1; text-align: center;">
                                <span style="padding: 6px 16px; background: <?php echo $status_bg; ?>; border-radius: 20px; color: <?php echo $status_color; ?>; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500;"><?php echo $status; ?></span>
                            </div>
                            <div style="flex: 1; text-align: right; color: #2C2416; font-size: 16px; font-family: 'DM Sans', sans-serif; font-weight: 600;"><?php echo escape_output(getAmtP($current_due)); ?></div>
                        </div>
                        <?php } } } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12" style="display: flex;gap: 20px;align-items: stretch;/* padding-left: 20px; *//* padding-right: 40px; */margin-top: 20px;">
            <div style="width: 100%;">
                <div class="box box-info" style="border-radius: 20px; overflow: hidden; border: none; box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03); background: white;">
                    <div style="display: flex; justify-content: space-between; align-items: center; padding: 16px 24px; border-bottom: 1px solid rgba(0,0,0,0.05);">
                        <div style="display: flex; align-items: center; gap: 10px;">
                            <i data-feather="bar-chart" style="color: #2C2416;"></i>
                            <h3 style="margin: 0; font-size: 20px; font-weight: 600; color: #2C2416; font-family: 'DM Sans', sans-serif;">Monthly Sale Comparison <span style="font-weight: 400; color: #887E72; font-size: 16px;">(12 Months)</span></h3>
                        </div>
                        <div style="display: flex; align-items: center; gap: 24px; flex-shrink: 0;">
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <span style="width: 10px; height: 10px; border-radius: 50%; background: linear-gradient(180deg, #C5A868, #B8954A); display: inline-block; flex-shrink: 0;"></span>
                                <span style="color: #5C5244; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; white-space: nowrap;">Sales</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <span style="width: 10px; height: 10px; border-radius: 50%; background: rgba(212, 193, 164, 0.40); display: inline-block; flex-shrink: 0;"></span>
                                <span style="color: #5C5244; font-size: 13px; font-family: 'DM Sans', sans-serif; font-weight: 500; white-space: nowrap;">Target</span>
                            </div>
                        </div>
                    </div>
                    <div class="box-body">
                        <div style="height: 300px; position: relative;">
                            <canvas id="monthlySaleBarChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Monthly Sale Comparison Bar Chart - Exact Match
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('monthlySaleBarChart').getContext('2d');
    
    // PHP will inject the data here
    const monthlyData = <?php echo json_encode(isset($monthly_sale_comparison) ? $monthly_sale_comparison : []); ?>;
    
    console.log('Monthly Sale Data:', monthlyData);
    
    const labels = monthlyData.map(item => {
        const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        const parts = item.month.split('-');
        const monthIndex = parseInt(parts[0]) - 1;
        return isNaN(monthIndex) ? item.month : monthNames[monthIndex];
    });
    const amounts = monthlyData.map(item => parseFloat(item.saleAmount) || 0);
    
    console.log('Labels:', labels);
    console.log('Amounts:', amounts);
    
    // Generate target values (150% of actual sales for demo, or fixed minimum)
    const targets = amounts.map(val => val > 0 ? val * 1.5 : 100000);
    
    // Calculate remaining target (target - sales) for the stacked bar
    const remainingTargets = targets.map((target, i) => Math.max(target - amounts[i], 0));
    
    // Calculate max value properly
    const maxAmount = Math.max(...amounts);
    const maxTarget = Math.max(...targets);
    const maxValue = Math.max(maxAmount, maxTarget, 200000);
    const yAxisMax = Math.ceil(maxValue / 50000) * 50000;
    
    console.log('Max Value:', maxValue, 'Y-Axis Max:', yAxisMax);
    
    // Create gradient for sales bars (matching image: darker at top, lighter at bottom)
    const salesGradient = ctx.createLinearGradient(0, 0, 0, 400);
    salesGradient.addColorStop(0, '#C5A868');
    salesGradient.addColorStop(1, '#B8954A');
    
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [
                {
                    label: 'Sales',
                    data: amounts,
                    backgroundColor: salesGradient,
                    borderRadius: { topLeft: 0, topRight: 0, bottomLeft: 50, bottomRight: 50 },
                    borderSkipped: false,
                    barPercentage: 0.25,
                    categoryPercentage: 0.7,
                    order: 1
                },
                {
                    label: 'Target',
                    data: remainingTargets,
                    backgroundColor: 'rgba(212, 193, 164, 0.30)',
                    borderRadius: { topLeft: 50, topRight: 50, bottomLeft: 0, bottomRight: 0 },
                    borderSkipped: false,
                    barPercentage: 0.25,
                    categoryPercentage: 0.7,
                    order: 2
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                },
                tooltip: {
                    enabled: true,
                    backgroundColor: 'rgba(44, 36, 22, 0.95)',
                    titleFont: { size: 14, family: 'DM Sans', weight: '600' },
                    bodyFont: { size: 13, family: 'DM Sans' },
                    padding: 14,
                    cornerRadius: 10,
                    displayColors: true,
                    callbacks: {
                        label: function(context) {
                            return context.dataset.label + ': ₦' + context.parsed.y.toLocaleString();
                        }
                    }
                }
            },
            scales: {
                x: {
                    stacked: true,
                    grid: { 
                        display: false,
                        drawBorder: false
                    },
                    ticks: { 
                        font: { size: 12, family: 'DM Sans', weight: '500' },
                        color: '#887E72',
                        padding: 12
                    },
                    border: { display: false }
                },
                y: {
                    stacked: true,
                    beginAtZero: true,
                    max: Math.max(yAxisMax, 200000),
                    min: 0,
                    grid: { 
                        color: 'rgba(0,0,0,0.07)',
                        drawBorder: false,
                        borderDash: [5, 5],
                        lineWidth: 1
                    },
                    ticks: {
                        font: { size: 12, family: 'DM Sans', weight: '500' },
                        color: '#887E72',
                        stepSize: 50000,
                        callback: function(value) {
                            if (value === 0) return '0';
                            return (value / 1000) + 'k';
                        },
                        padding: 12,
                        maxTicksLimit: 5
                    },
                    border: { display: false }
                }
            },
            layout: {
                padding: {
                    top: 20,
                    right: 15,
                    bottom: 10,
                    left: 10
                }
            }
        }
    });
});
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>frequent_changing/js/dashboard_chart_custom.js"></script>
<!-- ChartJS CDN -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.5.1/dist/chart.umd.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/plugins/local/loader.js"></script>
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.css">
<script type="text/javascript" src="<?php echo base_url(); ?>assets/POS/js/jquery.cookie.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/raphael/raphael.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/morris.js/morris.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>frequent_changing/js/dashboard.js"></script>

<script>
$(function() {
    // Helper to parse currency strings to numbers safely
    function parseAmount(val) {
        if (!val) return 0;
        let txt = document.createElement("textarea");
        txt.innerHTML = val;
        let decoded = txt.value;
        
        // Remove everything except digits, decimal point, and minus sign
        // This effectively removes commas, currency symbols, spaces, etc.
        let cleaned = decoded.replace(/[^\d.-]/g, '');
        
        // In case of multiple dots (like 1.234.56), only keep the last one
        if ((cleaned.match(/\./g) || []).length > 1) {
            let parts = cleaned.split('.');
            let last = parts.pop();
            cleaned = parts.join('') + '.' + last;
        }
        
        let num = parseFloat(cleaned);
        return isNaN(num) ? 0 : num;
    }

    if (typeof Morris !== 'undefined' && $('#operational_comparision').length > 0) {
        const currentOrders = parseAmount($('#current_orders_value').val());
        const previousOrders = parseAmount($('#previous_orders_value').val());
        const currentRevenue = parseAmount($('#current_revenue_value').val());
        const previousRevenue = parseAmount($('#previous_revenue_value').val());
        const currentAverage = parseAmount($('#current_average_receipt_value').val());
        const previousAverage = parseAmount($('#previous_average_receipt_value').val());

        console.log("Operational Comparison Data:", {
            currentOrders: currentOrders,
            previousOrders: previousOrders,
            currentRevenue: currentRevenue,
            previousRevenue: previousRevenue,
            currentAverage: currentAverage,
            previousAverage: previousAverage
        });
        console.log("Raw Hidden Input Values:", {
            currentOrdersInput: $('#current_orders_value').val(),
            previousOrdersInput: $('#previous_orders_value').val(),
            currentRevenueInput: $('#current_revenue_value').val(),
            previousRevenueInput: $('#previous_revenue_value').val(),
            currentAverageInput: $('#current_average_receipt_value').val(),
            previousAverageInput: $('#previous_average_receipt_value').val()
        });

        // Ensure we have at least SOME data to draw, otherwise Morris might look empty
        const hasData = [currentOrders, previousOrders, currentRevenue, previousRevenue, currentAverage, previousAverage].some(v => v > 0);
        
        if (hasData) {
            new Morris.Bar({
                element: 'operational_comparision',
                resize: true,
                data: [
                    { y: 'Orders', a: currentOrders, b: previousOrders },
                    { y: 'Revenue', a: currentRevenue, b: previousRevenue },
                    { y: 'Average', a: currentAverage, b: previousAverage }
                ],
                barColors: ['#C5A868', '#675F4C'], // Current, Previous
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Current', 'Previous'],
                hideHover: 'auto',
                gridTextFamily: 'DM Sans',
                gridTextColor: '#6E665A',
                gridTextSize: 11,
                barSizeRatio: 0.60, // Slightly wider bars
                barGap: 3
            });
        } else {
            $('#operational_comparision').html('<div style="display:flex;justify-content:center;align-items:center;height:100%;color:#6E665A;">No data available for this period</div>');
        }
    }
});
</script>

<!-- New SaFood Dashboard UI Styles -->
<style>
    .btn-time-filter {
        transition: all 0.3s ease;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .btn-time-filter:hover {
        background: rgba(184, 149, 74, 0.1) !important;
    }
    
    .btn-time-active {
        background: linear-gradient(180deg, #B8954A 0%, #D4B575 100%) !important;
        color: white !important;
    }
    
    .btn-time-active .Day,
    .btn-time-active .Week,
    .btn-time-active .Month {
        color: white !important;
        font-weight: 600 !important;
    }
    
    .outlet_selector_dropdown {
        cursor: pointer;
        min-width: 100px;
    }
    
    .outlet_selector_dropdown:focus {
        outline: none;
    }
    
    .date_range_input {
        cursor: pointer;
        min-width: 100px;
    }
    
    .date_range_input:focus {
        outline: none;
    }
    
    .Frame2085667392 {
        margin-bottom: 0px;
    }

    /* Add 30px gap between all visible rows */
    .main-content-wrapper.dashboard_content .row {
        margin-top: 0 !important;
        margin-bottom: 10px;
    }

    .main-content-wrapper.dashboard_content .row:first-of-type {
        margin-top: 10px !important;
    }

    .main-content-wrapper.dashboard_content .row:last-child {
        margin-bottom: 0;
    }
    
    .Frame2085667392 .Container {
        box-sizing: border-box;
    }
    
    .Frame2085667392 .Button {
        transition: box-shadow 0.2s ease;
    }
    
    .Frame2085667392 .Button:hover {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }
    
    #language_dropdown, #outlet_dropdown {
        animation: dropdownFade 0.2s ease;
    }
    
    #language_dropdown a:hover, #outlet_dropdown a:hover, .date_range_option:hover {
        background-color: rgba(231, 221, 204, 0.2) !important;
        color: #2C2416 !important;
    }
    
    #language_selector_container:hover, #outlet_selector_container:hover {
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
    }
    
    @keyframes dropdownFade {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* --- Order Types Card Styles --- */
    .order-types-card {
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03);
        padding: 24px;
        overflow: hidden;
        flex-shrink: 0;
    }

    .order-types-card .card-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 28px;
    }

    .order-types-card .card-header h2 {
        color: #2C2416;
        font-size: 20px;
        font-weight: 600;
        line-height: 1.6;
        margin: 0;
    }

    .order-types-card .dropdown {
        display: flex;
        align-items: center;
        gap: 10px;
        color: #2C2416;
        font-size: 14px;
        font-weight: 600;
        line-height: 1.7;
        cursor: pointer;
    }

    .order-types-card .chevron {
        width: 15px;
        height: 15px;
        border-right: 1.75px solid #2C2416;
        border-bottom: 1.75px solid #2C2416;
        transform: rotate(45deg);
        margin-top: -2px;
    }

    .order-types-card .order-list {
        list-style: none;
        display: flex;
        flex-direction: column;
        gap: 24px;
        margin: 0;
        padding: 0;
    }

    .order-types-card .order-item {
        display: flex;
        align-items: center;
        gap: 16px;
    }

    .order-types-card .icon {
        width: 51px;
        height: 51px;
        border-radius: 50%;
        background: linear-gradient(0deg, #F6EEDB 0%, #F6EEDB 100%), linear-gradient(180deg, #B5911C 0%, #9D7A26 100%);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
        position: relative;
        overflow: hidden;
    }

    .order-types-card .icon::before {
        content: '';
        position: absolute;
        background: #5A3D0B;
    }

    /* Dine In Icon - Fork */
    .order-types-card .icon::before {
        width: 11.90px;
        height: 19.04px;
    }

    /* Take Away Icon - Box */
    .order-types-card .icon.icon-takeaway::before {
        width: 17.85px;
        height: 15.47px;
        left: 0.60px;
        top: 1.19px;
    }

    /* Delivery Icon - Chat */
    .order-types-card .icon.icon-delivery::before {
        width: 14.28px;
        height: 15.87px;
        left: 2.38px;
        top: 1.59px;
        background: transparent;
        outline: 1.19px #5A3D0B solid;
        outline-offset: -0.60px;
    }

    .order-types-card .content {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 6px;
    }

    .order-types-card .label-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .order-types-card .label {
        color: #2C2416;
        font-size: 16px;
        font-weight: 500;
        line-height: 1.4;
    }

    .order-types-card .percentage {
        color: #887E72;
        font-size: 16px;
        font-weight: 500;
        margin-left: 4px;
    }

    .order-types-card .value {
        color: #2C2416;
        font-size: 16px;
        font-weight: 500;
        line-height: 1.4;
    }

    .order-types-card .progress-bg {
        width: 100%;
        height: 16px;
        background: #F2ECDE;
        border-radius: 60px;
        overflow: hidden;
    }

    .order-types-card .progress-fill {
        height: 100%;
        background: linear-gradient(40deg, #2C2416 0%, rgba(44, 36, 22, 0.90) 30%, rgba(44, 36, 22, 0.60) 100%);
        border-radius: 60px;
        transition: width 0.3s ease;
    }

    /* --- New Custom Chart Styles --- */
    .chart-container-wrapper {
        padding: 0;
        margin: 0;
    }
    
    .large-balance-card {
        position: relative;
        background: white;
        box-shadow: 0px 1px 62px 10px rgba(0, 0, 0, 0.03);
        border-radius: 20px;
        padding: 24px;
        min-height: 400px;
    }

    .chart-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        margin-bottom: 20px;
    }

    .chart-title-block {
        flex: 1;
    }

    .chart-right-section {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 15px;
    }

    .chart-label {
        color: #887E72;
        font-size: 14px;
        font-family: 'DM Sans', sans-serif;
        font-weight: 500;
    }

    .chart-total-value {
        color: #2C2416;
        font-size: 24px;
        font-family: 'DM Sans', sans-serif;
        font-weight: 700;
        display: flex;
        align-items: center;
    }

    .chart-legend {
        display: flex;
        gap: 15px;
        align-items: center;
        margin-top: 5px;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .legend-dot {
        width: 10px;
        height: 10px;
        border-radius: 50%;
    }

    .legend-text {
        color: #6E665A;
        font-size: 13px;
        font-family: 'DM Sans', sans-serif;
        font-weight: 400;
    }

    .chart-time-selector {
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .time-text {
        color: #2C2416;
        font-size: 14px;
        font-family: 'DM Sans', sans-serif;
        font-weight: 600;
    }

    .chart-canvas-wrapper {
        position: relative;
        height: 250px;
        width: 100%;
    }

    .x-axis-labels {
        position: absolute;
        bottom: 0;
        left: 60px;
        width: calc(100% - 60px);
        display: flex;
        justify-content: space-between;
        pointer-events: none;
    }

    .x-axis-labels span {
        color: #6E665A;
        font-size: 12px;
        font-family: 'DM Sans', sans-serif;
        font-weight: 400;
    }

    /* Custom Tooltip */
    .custom-tooltip {
        position: absolute;
        background: white;
        box-shadow: 0px 4px 44px rgba(0, 0, 0, 0.08);
        border-radius: 11px;
        padding: 12px 16px;
        text-align: center;
        z-index: 100;
        pointer-events: none;
        transition: all 0.1s ease;
    }

    .tooltip-label {
        color: #887E72;
        font-size: 10px;
        font-family: 'DM Sans', sans-serif;
        margin-bottom: 4px;
    }

    .tooltip-value {
        color: #2C2416;
        font-size: 14px;
        font-family: 'DM Sans', sans-serif;
        font-weight: 700;
    }
    
    .tooltip-point {
        width: 14px;
        height: 14px;
        background: #C9AC71;
        border: 3px solid white;
        border-radius: 50%;
        position: absolute;
        transform: translate(-50%, -50%);
    }
    
    .dashboard_content .row {
        margin-bottom: 30px;
    }
    .dashboard_content .row:last-child {
        margin-bottom: 0;
    }
    
    .grid_view2 {
        margin-inline-start: 0px;
    }
    
    .main-header .navbar.navbar-static-top,
    .navbar.navbar-static-top {
        display: none !important;
    }
    
    .S4 {
        margin-bottom: 30px;
    }
    .Frame32 {
        margin-bottom: 30px;
    }
    #chart-container {
        width: 400px;
        height: 200px;
        margin: 0 auto;
    }
    #categories_doughnut_chart {
        background: transparent;
    }
    
    /* Time Filter Buttons Styles */
    .char_elastick .title-wraper .custom_td {
        background: transparent !important;
        color: #2C2416 !important;
        border: none !important;
        padding: 8px 16px !important;
        border-radius: 8px !important;
        font-weight: 500 !important;
        transition: all 0.3s ease !important;
    }

    .char_elastick .title-wraper .custom_td_active {
        background: linear-gradient(180deg, #B8954A 0%, #D4B575 100%) !important;
        color: white !important;
    }
</style>

<!-- New SaFood Dashboard UI Scripts -->
<script>
$(document).ready(function() {
    // Get categories data from PHP
    const categoriesData = <?php echo json_encode($categories_data); ?>;
    const categoryColors = <?php echo json_encode($category_colors); ?>;
    
    function renderCategoriesDoughnut() {
        if (!categoriesData || categoriesData.length === 0) {
            // Show empty state or hide chart
            return;
        }
        
        const data = categoriesData.map(cat => cat.percentage);
        const backgroundColors = categoryColors.slice(0, data.length);

        new Chart(document.getElementById('categories_doughnut_chart'), {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: data,
                    backgroundColor: backgroundColors,
                    borderWidth: 0,
                    borderRadius: 20,
                    spacing: 6
                }]
            },
            options: {
                rotation: -90,
                circumference: 180,
                cutout: '80%',
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false }
                }
            }
        });
    }

    // Render chart when page loads
    if (document.getElementById('categories_doughnut_chart') && typeof Chart !== 'undefined') {
        renderCategoriesDoughnut();
    }

    // ============================================
    // Category Date Range Selector Functionality
    // ============================================
    let categoriesChart = null;
    let currentCategoryDays = 30; // Default to 30 days

    // Function to close all dashboard popups
    function closeAllDashboardPopups(exceptId) {
        const popups = [
            '#category_date_popup',
            '#order_type_date_popup',
            '#language_dropdown',
            '#date_range_dropdown',
            '#user_menu_dropdown'
        ];
        popups.forEach(id => {
            if (id !== exceptId) {
                $(id).hide();
            }
        });
        // Also hide custom date inputs if they're open
        if (exceptId !== '#category_date_popup') $('#custom_date_inputs').hide();
        if (exceptId !== '#order_type_date_popup') $('#order_type_custom_date_inputs').hide();
    }

    // Toggle category date popup
    $('#category_date_selector_btn').on('click', function(e) {
        e.stopPropagation();
        var popup = $('#category_date_popup');
        if (popup.is(':visible')) {
            popup.hide();
        } else {
            closeAllDashboardPopups('#category_date_popup');
            popup.show();
        }
    });

    // Preset date option click
    $('.category_date_option[data-days]').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var days = $(this).data('days');

        if (days === 'custom') {
            // Show custom date inputs
            $('#custom_date_inputs').slideToggle(200);
            return;
        }

        currentCategoryDays = days;

        // Update UI - remove active from all
        $('.category_date_option').css({
            'color': '#6E665A',
            'font-weight': '500'
        });
        $('.category_date_option').find('svg path').hide();

        // Add active to selected
        $(this).css({
            'color': '#2C2416',
            'font-weight': '600'
        });
        $(this).find('svg path').show();

        // Update display text
        $('#category_date_range_display').text('Last ' + days + ' Days');

        // Calculate dates and fetch data
        var today = new Date();
        var startDate = new Date(today);
        startDate.setDate(today.getDate() - days);

        var startDateStr = formatDate(startDate);
        var endDateStr = formatDate(today);

        // Hide popup and fetch data
        $('#category_date_popup').hide();
        fetchCategoryChartData(startDateStr, endDateStr);
    });

    // Apply custom date range
    $('#apply_custom_date').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var startDate = $('#category_start_date').val();
        var endDate = $('#category_end_date').val();

        if (!startDate || !endDate) {
            alert('Please select both start and end dates');
            return;
        }

        // Update UI
        $('.category_date_option').css({
            'color': '#6E665A',
            'font-weight': '500'
        });
        $('.category_date_option').find('svg path').hide();

        $(this).closest('.category_date_option').css({
            'color': '#2C2416',
            'font-weight': '600'
        });
        $(this).closest('.category_date_option').find('svg path').show();

        $('#category_date_range_display').text(formatDateDisplay(startDate, endDate));
        currentCategoryDays = 'custom';

        // Hide popup and fetch data
        $('#category_date_popup').hide();
        $('#custom_date_inputs').hide();
        fetchCategoryChartData(startDate, endDate);
    });

    // Close popup when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#category_date_popup, #category_date_selector_btn').length) {
            $('#category_date_popup').hide();
            $('#custom_date_inputs').hide();
        }
    });

    // Fetch category chart data via AJAX
    function fetchCategoryChartData(startDate, endDate) {
        var outletId = '<?php echo $outlet_id; ?>';

        $.ajax({
            url: '<?php echo base_url(); ?>Dashboard/get_top_five_categories',
            type: 'POST',
            data: {
                start_date: startDate,
                end_date: endDate,
                outlet_id: outletId
            },
            dataType: 'json',
            success: function(response) {
                if (response.data && response.data.length > 0) {
                    updateCategoryChart(response.data, response.total);
                } else {
                    // Show empty state
                    updateCategoryChart([], 0);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching category data:', error);
            }
        });
    }

    // Update category chart with new data
    function updateCategoryChart(data, totalQty) {
        const categoryColors = ['#96CF6E', '#CFB06E', '#CF8B6E', '#CF6E6E', '#8B6ECF'];

        if (!data || data.length === 0) {
            // Destroy chart if exists
            if (categoriesChart) {
                categoriesChart.destroy();
                categoriesChart = null;
            }
            // Update total display
            $('#chart-container').find('div[style*="position: absolute"]').find('div:first').text('0');
            return;
        }

        const chartData = data.map(cat => cat.percentage);
        const backgroundColors = categoryColors.slice(0, chartData.length);

        // Update total display
        $('#chart-container').find('div[style*="position: absolute"]').find('div:first').text(totalQty);

        // Destroy existing chart if any
        if (categoriesChart) {
            categoriesChart.destroy();
        }

        // Create new chart
        const ctx = document.getElementById('categories_doughnut_chart').getContext('2d');
        categoriesChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: chartData,
                    backgroundColor: backgroundColors,
                    borderWidth: 0,
                    borderRadius: 20,
                    spacing: 6
                }]
            },
            options: {
                rotation: -90,
                circumference: 180,
                cutout: '80%',
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: { enabled: false }
                }
            }
        });

        // Update legend
        updateCategoryLegend(data);
    }

    // Update legend items
    function updateCategoryLegend(data) {
        let legendHtml = '';
        const categoryColors = ['#96CF6E', '#CFB06E', '#CF8B6E', '#CF6E6E', '#8B6ECF'];

        data.forEach((cat, index) => {
            if (index < 5) {
                const color = categoryColors[index];
                legendHtml += `
                    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 8px;">
                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="12" height="12" rx="4.5" fill="${color}"/>
                        </svg>
                        <div style="color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 300; line-height: 24px;">${cat.category_name} ${cat.percentage}%</div>
                    </div>
                `;
            }
        });

        // Replace legend section
        const legendContainer = document.querySelector('#chart-container').parentElement.querySelector('[style*="margin-top: 28px"]');
        if (legendContainer) {
            legendContainer.innerHTML = legendHtml;
        }
    }

    // Format date for display
    function formatDateDisplay(startDate, endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);
        const options = { month: 'short', day: 'numeric' };
        return start.toLocaleDateString('en-US', options) + ' - ' + end.toLocaleDateString('en-US', options);
    }

    // ============================================
    // End Category Date Range Functionality
    // ============================================

    // ============================================
    // Order Type Date Range Selector Functionality
    // ============================================
    let currentOrderTypeDays = 30; // Default to 30 days

    // Toggle order type date popup
    $('#order_type_date_selector').on('click', function(e) {
        e.stopPropagation();
        var popup = $('#order_type_date_popup');
        if (popup.is(':visible')) {
            popup.hide();
        } else {
            closeAllDashboardPopups('#order_type_date_popup');
            popup.show();
        }
    });

    // Preset date option click for order types
    $('.order_type_date_option[data-days]').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var days = $(this).data('days');

        if (days === 'custom') {
            // Show custom date inputs
            $('#order_type_custom_date_inputs').slideToggle(200);
            return;
        }

        currentOrderTypeDays = days;

        // Update UI - remove active from all
        $('.order_type_date_option').css({
            'color': '#6E665A',
            'font-weight': '500'
        });
        $('.order_type_date_option').find('svg path').hide();

        // Add active to selected
        $(this).css({
            'color': '#2C2416',
            'font-weight': '600'
        });
        $(this).find('svg path').show();

        // Update display text
        $('#order_type_date_display').text('Last ' + days + ' Days');

        // Calculate dates and fetch data
        var today = new Date();
        var startDate = new Date(today);
        startDate.setDate(today.getDate() - days);

        var startDateStr = formatDate(startDate);
        var endDateStr = formatDate(today);

        // Hide popup and fetch data
        $('#order_type_date_popup').hide();
        fetchOrderTypeData(startDateStr, endDateStr);
    });

    // Apply custom date range for order types
    $('#apply_order_type_custom_date').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var startDate = $('#order_type_start_date').val();
        var endDate = $('#order_type_end_date').val();

        if (!startDate || !endDate) {
            alert('Please select both start and end dates');
            return;
        }

        // Update UI
        $('.order_type_date_option').css({
            'color': '#6E665A',
            'font-weight': '500'
        });
        $('.order_type_date_option').find('svg path').hide();

        $(this).closest('.order_type_date_option').css({
            'color': '#2C2416',
            'font-weight': '600'
        });
        $(this).closest('.order_type_date_option').find('svg path').show();

        $('#order_type_date_display').text(formatDateDisplay(startDate, endDate));
        currentOrderTypeDays = 'custom';

        // Hide popup and fetch data
        $('#order_type_date_popup').hide();
        $('#order_type_custom_date_inputs').hide();
        fetchOrderTypeData(startDate, endDate);
    });

    // Close order type popup when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#order_type_date_popup, #order_type_date_selector').length) {
            $('#order_type_date_popup').hide();
            $('#order_type_custom_date_inputs').hide();
        }
    });

    // Fetch order type data via AJAX
    function fetchOrderTypeData(startDate, endDate) {
        var outletId = '<?php echo $outlet_id; ?>';

        $.ajax({
            url: '<?php echo base_url(); ?>Dashboard/get_order_type_data',
            type: 'POST',
            data: {
                start_date: startDate,
                end_date: endDate,
                outlet_id: outletId
            },
            dataType: 'json',
            success: function(response) {
                if (response.data && response.data.length > 0) {
                    updateOrderTypeDisplay(response.data, response.total_orders);
                } else {
                    updateOrderTypeDisplay([], 0);
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching order type data:', error);
            }
        });
    }

    // Update order type display with new data
    function updateOrderTypeDisplay(data, totalOrders) {
        // Create a map of order types
        var orderTypeMap = {};
        data.forEach(function(ot) {
            orderTypeMap[ot.order_type_label] = ot;
        });

        // Get values for each order type
        var dineIn = orderTypeMap['Dine In'] || { total_orders: 0, percentage: 0 };
        var takeAway = orderTypeMap['Take Away'] || { total_orders: 0, percentage: 0 };
        var delivery = orderTypeMap['Delivery'] || { total_orders: 0, percentage: 0 };

        // Update Dine In
        var $dineInLi = $('#ot_dine_in');
        $dineInLi.find('.ot-percent').text(Math.round(dineIn.percentage * 10) / 10 + '%');
        $dineInLi.find('.ot-count').text(dineIn.total_orders + ' orders');
        $dineInLi.find('.ot-progress').css('width', dineIn.percentage + '%');

        // Update Take Away
        var $takeAwayLi = $('#ot_take_away');
        $takeAwayLi.find('.ot-percent').text(Math.round(takeAway.percentage * 10) / 10 + '%');
        $takeAwayLi.find('.ot-count').text(takeAway.total_orders + ' orders');
        $takeAwayLi.find('.ot-progress').css('width', takeAway.percentage + '%');

        // Update Delivery
        var $deliveryLi = $('#ot_delivery');
        $deliveryLi.find('.ot-percent').text(Math.round(delivery.percentage * 10) / 10 + '%');
        $deliveryLi.find('.ot-count').text(delivery.total_orders + ' orders');
        $deliveryLi.find('.ot-progress').css('width', delivery.percentage + '%');
    }

    // ============================================
    // End Order Type Date Range Functionality
    // ============================================


    // Time filter buttons functionality (new UI buttons)
    $('.btn-time-filter').on('click', function() {
        closeAllDashboardPopups();
        var selectedType = $(this).data('type');
        var today = new Date();
        var startDate, endDate;

        // Update new UI buttons
        $('.btn-time-filter').removeClass('btn-time-active');
        $('.btn-time-filter').css({
            'background': 'transparent',
            'color': '#6E665A'
        });
        $(this).addClass('btn-time-active');
        $(this).css({
            'background': 'linear-gradient(180deg, #B8954A 0%, #D4B575 100%)',
            'color': 'white'
        });

        // Sync old UI buttons
        $('.get_date_by_custom_btn').removeClass('custom_td_active');
        $('.get_date_by_custom_btn[data-type="' + selectedType + '"]').addClass('custom_td_active');

        if (selectedType === 'day') {
            startDate = today;
            endDate = today;
            $('#date_range_display_span').text('Today');
            $('#chart-time-text').text('Today');
        } else if (selectedType === 'week') {
            var startOfWeek = new Date(today);
            startOfWeek.setDate(today.getDate() - today.getDay());
            startDate = startOfWeek;
            endDate = today;
            $('#date_range_display_span').text('This Week');
            $('#chart-time-text').text('This Week');
        } else if (selectedType === 'month') {
            startDate = new Date(today.getFullYear(), today.getMonth(), 1);
            endDate = today;
            $('#date_range_display_span').text('This Month');
            $('#chart-time-text').text('This Month');
        }

        var startDateStr = formatDate(startDate);
        var endDateStr = formatDate(endDate);

        $('#start_date_dashboard').val(startDateStr);
        $('#end_date_dashboard').val(endDateStr);

        // Update chart via AJAX instead of form submission
        let action_type = "revenue";
        $(".get_graph_data").each(function() {
            if($(this).hasClass("active")){
                action_type = $(this).attr('data-action_type');
            }
        });
        show_sale_report(selectedType, action_type);
    });
    
    // Language dropdown toggle
    $('#language_selector_container').on('click', function(e) {
        e.stopPropagation();
        var dropdown = $('#language_dropdown');
        if (dropdown.is(':visible')) {
            dropdown.hide();
        } else {
            closeAllDashboardPopups('#language_dropdown');
            dropdown.show();
        }
    });

    // Date range dropdown toggle
    $('#date_range_btn').on('click', function(e) {
        e.stopPropagation();
        var dropdown = $('#date_range_dropdown');
        if (dropdown.is(':visible')) {
            dropdown.hide();
        } else {
            closeAllDashboardPopups('#date_range_dropdown');
            dropdown.show();
        }
    });
    
    // User menu dropdown toggle
    $('#user_profile_container').on('click', function(e) {
        e.stopPropagation();
        var dropdown = $('#user_menu_dropdown');
        if (dropdown.is(':visible')) {
            dropdown.hide();
        } else {
            closeAllDashboardPopups('#user_menu_dropdown');
            dropdown.show();
        }
    });

    // Date range option click
    $('.date_range_option').on('click', function(e) {
        e.preventDefault();
        e.stopPropagation();
        
        var range = $(this).data('range');
        var today = new Date();
        var startDate, endDate;
        var displayText = $(this).text().trim();

        if (range === 'custom') {
            $('#date_range_dropdown').hide();
            var curStart = $('#start_date_dashboard').val();
            var curEnd = $('#end_date_dashboard').val();
            if (curStart) $('#custom_start_date').val(curStart);
            if (curEnd) $('#custom_end_date').val(curEnd);
            $('#custom_range_modal').css('display','flex');
            return;
        }

        switch(range) {
            case 'today':
                startDate = today;
                endDate = today;
                break;
            case 'yesterday':
                startDate = new Date(today);
                startDate.setDate(today.getDate() - 1);
                endDate = startDate;
                break;
            case 'this_week':
                startDate = new Date(today);
                startDate.setDate(today.getDate() - today.getDay());
                endDate = today;
                break;
            case 'last_week':
                startDate = new Date(today);
                startDate.setDate(today.getDate() - today.getDay() - 7);
                endDate = new Date(startDate);
                endDate.setDate(startDate.getDate() + 6);
                break;
            case 'this_month':
                startDate = new Date(today.getFullYear(), today.getMonth(), 1);
                endDate = today;
                break;
            case 'last_month':
                startDate = new Date(today.getFullYear(), today.getMonth() - 1, 1);
                endDate = new Date(today.getFullYear(), today.getMonth(), 0);
                break;
            case 'last_30_days':
                startDate = new Date(today);
                startDate.setDate(today.getDate() - 30);
                endDate = today;
                break;
        }

        var startDateStr = formatDate(startDate);
        var endDateStr = formatDate(endDate);

        $('#start_date_dashboard').val(startDateStr);
        $('#end_date_dashboard').val(endDateStr);
        $('#date_range_display_span').text(displayText);
        $('#date_range_dropdown').hide();
        
        // Submit form to refresh dashboard data
        $('#dashboard_form').submit();
    });

    $('#custom_apply_btn').on('click', function() {
        var s = $('#custom_start_date').val();
        var e = $('#custom_end_date').val();
        if (!s || !e) {
            return;
        }
        if (new Date(s) > new Date(e)) {
            var tmp = s; s = e; e = tmp;
        }
        $('#start_date_dashboard').val(s);
        $('#end_date_dashboard').val(e);
        $('#date_range_display_span').text(s + ' - ' + e);
        $('#custom_range_modal').hide();
        $('#dashboard_form').submit();
    });
    $('#custom_cancel_btn').on('click', function() {
        $('#custom_range_modal').hide();
    });
    $('#custom_range_modal').on('click', function(e) {
        if (e.target === this) {
            $('#custom_range_modal').hide();
        }
    });
    $('#custom_start_date, #custom_end_date').on('focus click', function() {
        if (this.showPicker) {
            try { this.showPicker(); } catch(e){}
        }
        try { this.select(); } catch(e){}
    });

    // Close date range dropdown when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#date_range_btn').length) {
            $('#date_range_dropdown').hide();
        }
    });
    
    // Close language dropdown when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#language_selector_container').length) {
            $('#language_dropdown').hide();
        }
    });
    
    // Close user menu dropdown when clicking outside
    $(document).on('click', function(e) {
        if (!$(e.target).closest('#user_profile_container').length) {
            $('#user_menu_dropdown').hide();
        }
    });
    
    // Helper function to format date
    function formatDate(date) {
        var year = date.getFullYear();
        var month = ('0' + (date.getMonth() + 1)).slice(-2);
        var day = ('0' + date.getDate()).slice(-2);
        return year + '-' + month + '-' + day;
    }
    
    // Initialize date display
    updateDateDisplay();
});

function updateDateDisplay() {
    var startDate = $('#start_date_dashboard').val();
    var endDate = $('#end_date_dashboard').val();
    
    if (startDate && endDate) {
        var today = new Date();
        var start = new Date(startDate);
        var end = new Date(endDate);
        
        var dateText = '';
        if (start.toDateString() === end.toDateString()) {
            dateText = 'Today';
        } else {
            var diffTime = Math.abs(end - start);
            var diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
            if (diffDays <= 7) {
                dateText = 'This Week';
            } else if (diffDays <= 31) {
                dateText = 'This Month';
            } else {
                dateText = formatDate(start) + ' - ' + formatDate(end);
            }
        }
        $('#date_range_display_span').text(dateText);
    }
}
</script>
