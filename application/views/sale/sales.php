<base data-base="<?php echo base_url(); ?>">
</base>
<input type="hidden" id="edit_return_id" value="<?php echo $edit_return_id; ?>">
<input type="hidden" id="warning" value="<?php echo lang('alert'); ?>">
<input type="hidden" id="a_error" value="<?php echo lang('error'); ?>">
<input type="hidden" id="ok" value="<?php echo lang('ok'); ?>">
<input type="hidden" id="cancel" value="<?php echo lang('cancel'); ?>">
<input type="hidden" id="view_invoice" value="<?php echo getPOSChecker("123","view_invoice"); ?>">
<input type="hidden" id="change_date" value="<?php echo getPOSChecker("123","change_date"); ?>">
<input type="hidden" id="change_delivery_address" value="<?php echo getPOSChecker("123","change_delivery_address"); ?>">
<input type="hidden" id="menu_not_permit_access" value="<?php echo lang('menu_not_permit_access'); ?>">
<input type="hidden" id="status_changed_successfully" value="<?php echo lang('status_changed_successfully'); ?>">
<input type="hidden" id="status_changed_successfully" value="<?php echo lang('status_changed_successfully'); ?>">

<style>
    /* ========== MODERN SALES PAGE STYLING ========== */
    .sales-page-modern {
        background: #F8F7F4;
        padding: 24px;
        min-height: 100vh;
        font-family: 'Inter', sans-serif;
    }
    .sales-breadcrumb {
        font-size: 13px;
        color: #8C8475;
        margin-bottom: 4px;
        font-weight: 400;
    }
    .sales-page-modern .top-left-header {
        color: #1C1A16;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 24px;
        margin-top: 0;
    }
    .sales-modern-card {
        background: #fff;
        border: 1px solid #E7E1CC;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(82, 73, 52, 0.04);
    }
    .sales-ui-filters {
        padding: 24px;
        background: #fff;
    }
    .sales-ui-grid {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 16px;
        align-items: flex-end;
    }
    .sales-ui-label {
        display: block;
        margin-bottom: 8px;
        color: #6E665A;
        font-size: 13px;
        font-weight: 500;
    }
    .sales-ui-input-wrapper {
        position: relative;
    }
    .sales-ui-input-wrapper i {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #8C8475;
        pointer-events: none;
        font-size: 14px;
    }
    .sales-ui-input,
    .sales-ui-select {
        width: 100%;
        min-height: 44px;
        padding: 10px 14px;
        border-radius: 10px;
        border: 1px solid #E7E1CC;
        color: #1C1A16;
        font-size: 14px;
        background: #fff;
        transition: all 0.2s ease;
        appearance: none;
    }
    .sales-ui-select {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='%238C8475' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
        padding-right: 36px;
    }
    .sales-ui-input:focus,
    .sales-ui-select:focus {
        outline: none;
        border-color: #5C523A;
        box-shadow: 0 0 0 3px rgba(92, 82, 58, 0.08);
    }
    .sales-ui-actions {
        display: flex;
        gap: 10px;
    }
    .sales-ui-btn-apply {
        flex: 1;
        min-height: 44px;
        border-radius: 10px;
        border: none;
        background: #5C523A;
        color: #fff;
        font-size: 14px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.2s ease;
    }
    .sales-ui-btn-apply:hover {
        background: #4A422F;
    }
    .sales-ui-btn-reset {
        min-height: 44px;
        border-radius: 10px;
        border: 1px solid #E7E1CC;
        background: #fff;
        color: #5C523A;
        font-size: 14px;
        font-weight: 600;
        padding: 0 16px;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .sales-ui-btn-reset:hover {
        background: #F8F7F4;
    }

    /* DATA TABLES CUSTOMIZATION */
    .custom-table-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 20px 24px;
        background: #fff;
        border-bottom: 1px solid rgba(231, 221, 204, 0.3);
    }
    .custom-table-header .left-tools,
    .custom-table-header .right-tools {
        display: flex;
        align-items: center;
    }
    .custom-table-header .left-tools {
        gap: 12px;
    }
    .custom-table-header .right-tools {
        gap: 8px;
    }
    .sales-modern-card .top-left-item, 
    .sales-modern-card .top-right-item,
    .sales-modern-card .dt-buttons {
        padding: 0 !important;
        margin: 0 !important;
        background: transparent !important;
        border: none !important;
        display: flex !important;
        align-items: center !important;
    }
    .sales-modern-card .top-left-item {
        gap: 12px;
    }
    .sales-modern-card .top-right-item,
    .sales-modern-card .dt-buttons {
        gap: 8px;
    }
    .sales-modern-card .dataTables_length label {
        margin: 0;
        font-size: 13px;
        color: #6E665A;
        font-weight: 400;
        display: flex;
        align-items: center;
        gap: 8px;
    }
    .sales-modern-card .dataTables_length select {
        height: 36px;
        border-radius: 8px;
        border: 1px solid rgba(231, 221, 204, 0.5);
        padding: 0 12px;
        font-size: 13px;
        color: #1C1A16;
        background-color: #fff;
        outline: none;
    }
    .sales-modern-card .dataTables_filter {
        position: relative;
        margin: 0 !important;
    }
    .sales-modern-card .dataTables_filter label {
        display: block;
        margin: 0;
        position: relative;
    }
    .sales-modern-card .dataTables_filter label svg {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #6E665A;
        z-index: 1;
        width: 16px;
        height: 16px;
    }
    .sales-modern-card .dataTables_filter input {
        width: 256px;
        height: 36px;
        border-radius: 8px;
        border: 1px solid rgba(231, 221, 204, 0.5);
        padding: 0 12px 0 36px !important;
        background: #fff !important;
        font-size: 13px;
        color: #1C1A16;
        outline: none;
        transition: border-color 0.2s;
        margin: 0 !important;
        box-shadow: none !important;
    }
    .sales-modern-card .dataTables_filter input:focus {
        border-color: #524934;
        background: #fff !important;
    }
    .sales-modern-card .dataTables_filter::before {
        display: none !important;
    }
    .sales-modern-card .btn_list,
    .sales-modern-card .dt-button {
        height: 38px;
        border-radius: 8px !important;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 0 16px !important;
        font-size: 13px !important;
        font-weight: 600 !important;
        border: 1px solid rgba(231, 221, 204, 0.5) !important;
        background: #fff !important;
        color: #524934 !important;
        box-shadow: none !important;
        margin: 0 !important;
        text-decoration: none !important;
        transition: all 0.2s;
    }
    .sales-modern-card .btn_list:hover,
    .sales-modern-card .dt-button:hover {
        background: #FAFAF9 !important;
    }
    .sales-modern-card .btn_list[href*="exportDailySales"] {
        background: #524934 !important;
        color: #fff !important;
        border: none !important;
    }
    .sales-modern-card .btn_list[href*="exportDailySales"]:hover {
        background: #4A412F !important;
    }

    /* HIDE DROPDOWN TOGGLE AND SHOW BUTTONS DIRECTLY */
    .sales-modern-card .exportDropdown .toggleBtn {
        display: none !important;
    }
    .sales-modern-card .exportDropdown .dt-buttons {
        position: static !important;
        opacity: 1 !important;
        visibility: visible !important;
        pointer-events: auto !important;
        transform: none !important;
        box-shadow: none !important;
        border: none !important;
        padding: 0 !important;
        display: flex !important;
        align-items: center !important;
        gap: 8px !important;
        background: transparent !important;
    }
    .sales-modern-card .exportDropdown .dt-buttons button {
        padding: 0 16px !important;
        height: 38px !important;
        border-radius: 8px !important;
        border: 1px solid rgba(231, 221, 204, 0.5) !important;
        font-weight: 600 !important;
        color: #524934 !important;
        background: #fff !important;
        width: auto !important;
        display: inline-flex !important;
        align-items: center !important;
        justify-content: center !important;
    }
    .sales-modern-card .exportDropdown .dt-buttons button:hover {
        background: #FAFAF9 !important;
    }
    .sales-modern-card .exportDropdown .dt-buttons button i {
        margin-right: 8px !important;
    }
    
    /* TABLE STYLING */
    .sales-modern-card .table-box {
        padding: 0;
    }
    .sales-modern-card table.dataTable {
        border-collapse: separate !important;
        border-spacing: 0 !important;
        margin: 0 !important;
        width: 100% !important;
    }
    .sales-modern-card table.dataTable thead th {
        background: #F8F7F4 !important;
        color: #6E665A;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 14px 20px !important;
        border-bottom: 1px solid #E7E1CC !important;
        border-top: 1px solid #E7E1CC !important;
        position: relative;
    }
    /* HIDE DATATABLES SORTING ARROWS */
    .sales-modern-card table.dataTable thead .sorting:before,
    .sales-modern-card table.dataTable thead .sorting:after,
    .sales-modern-card table.dataTable thead .sorting_asc:before,
    .sales-modern-card table.dataTable thead .sorting_asc:after,
    .sales-modern-card table.dataTable thead .sorting_desc:before,
    .sales-modern-card table.dataTable thead .sorting_desc:after,
    .sales-modern-card table.dataTable thead .sorting_asc_disabled:before,
    .sales-modern-card table.dataTable thead .sorting_asc_disabled:after,
    .sales-modern-card table.dataTable thead .sorting_desc_disabled:before,
    .sales-modern-card table.dataTable thead .sorting_desc_disabled:after {
        display: none !important;
        content: "" !important;
    }
    .sales-modern-card table.dataTable thead th {
        background-image: none !important;
    }
    .sales-modern-card table.dataTable tbody td {
        padding: 14px 20px !important;
        font-size: 14px;
        color: #1C1A16;
        border-bottom: 1px solid #F0EDE4;
        vertical-align: middle;
    }
    .sales-modern-card table.dataTable tbody tr:hover {
        background: #FDFCFB !important;
    }
    .sales-modern-card .order-type-pill {
        display: inline-block;
        padding: 4px 12px;
        border-radius: 20px;
        font-size: 12px;
        font-weight: 600;
        background: #F0EDE4;
        color: #6E665A;
    }
    .sales-modern-card .amt-payable {
        color: #16A34A;
        font-weight: 700;
    }
    .sales-modern-card .amt-refund {
        color: #DC2626;
        font-weight: 600;
    }
    .sales-modern-card .action-buttons {
        display: flex !important;
        align-items: center !important;
        justify-content: center !important;
        gap: 8px !important;
        flex-wrap: nowrap !important;
    }
    .sales-modern-card table.dataTable thead th:last-child,
    .sales-modern-card table.dataTable tbody td:last-child {
        text-align: center !important;
    }
    .sales-modern-card .action-btn {
        width: 32px;
        height: 32px;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        color: #8C8475;
        transition: all 0.2s ease;
        background: transparent;
        border: none;
        text-decoration: none !important;
    }
    .sales-modern-card .action-btn:hover {
        background: #F0EDE4;
        color: #5C523A;
    }
    .sales-modern-card .action-btn.delete:hover {
        background: #FEE2E2;
        color: #DC2626;
    }

    /* FOOTER / PAGINATION */
    .custom-footer-flex {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        width: 100% !important;
        padding: 20px 38px !important;
        border-top: 1px solid rgba(231, 221, 204, 0.3) !important;
        background: #fff;
    }
    .sales-modern-card .bottom-left-item {
        flex: none !important;
    }
    .sales-modern-card .bottom-right-item {
        flex: none !important;
    }
    .sales-modern-card .dataTables_info {
        padding: 9px 0 !important;
        color: #6E665A !important;
        font-size: 13.5px !important;
        font-weight: 400 !important;
    }
    .sales-modern-card .dataTables_paginate {
        padding: 0 !important;
        margin: 0 !important;
    }
    .sales-modern-card .pagination {
        display: flex !important;
        align-items: center !important;
        gap: 10px !important;
        margin: 0 !important;
        padding: 0 !important;
        list-style: none !important;
    }
    .sales-modern-card .pagination .page-item {
        margin: 0 !important;
    }
    .sales-modern-card .pagination .page-link {
        padding: 8px 16px !important;
        background: #FFFFFF !important;
        border: 1px solid rgba(231, 221, 204, 0.5) !important;
        border-radius: 8px !important;
        color: #524934 !important;
        font-size: 13.5px !important;
        font-weight: 500 !important;
        transition: all 0.2s !important;
        box-shadow: none !important;
        line-height: 1 !important;
    }
    .sales-modern-card .pagination .page-item.active .page-link {
        background: #524934 !important;
        border-color: #524934 !important;
        color: #FFFFFF !important;
        font-weight: 600 !important;
    }
    .sales-modern-card .pagination .page-item:hover:not(.active):not(.disabled) .page-link {
        background: #FAFAF9 !important;
        border-color: rgba(231, 221, 204, 0.8) !important;
    }
    .sales-modern-card .pagination .page-item.disabled .page-link {
        opacity: 0.5;
        cursor: not-allowed;
        background: #fff !important;
    }
    .sales-modern-card .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0 !important;
        border: none !important;
    }
    .sales-modern-card .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: transparent !important;
    }
    /* Specific styling for page numbers to make them square-ish as in image */
    .sales-modern-card .pagination .page-item:not(.previous):not(.next) .page-link {
        min-width: 38px;
        text-align: center;
        justify-content: center;
        display: flex;
    }
    
    @media (max-width: 1200px) {
        .sales-ui-grid {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    @media (max-width: 768px) {
        .sales-ui-grid {
            grid-template-columns: repeat(2, 1fr);
        }
        .sales-modern-card .top-left-item,
        .sales-modern-card .top-right-item {
            float: none;
            width: 100%;
            justify-content: flex-start;
        }
    }
</style>

<section class="main-content-wrapper">
    <div class="sales-page-modern">
        <div class="sales-breadcrumb">Sales</div>
        <h2 class="top-left-header">Sales</h2>

        <?php
        if ($this->session->flashdata('exception')) {
            echo '<section class="alert-wrapper"><div class="alert alert-success alert-dismissible fade show"> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-body">
            <p><i class="m-right fa fa-check"></i>';
            echo escape_output($this->session->flashdata('exception'));unset($_SESSION['exception']);
            echo '</p></div></div></section>';
        }
        if ($this->session->flashdata('exception_1')) {
            echo '<section class="alert-wrapper">
            <div class="alert alert-danger alert-dismissible fade show"> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-body">
            <p><i class="m-right fa fa-times"></i>';
            echo escape_output($this->session->flashdata('exception_1'));unset($_SESSION['exception_1']);
            echo '</p></div></div></section>';
        }
        ?>

        <div class="sales-modern-card">
            <div class="sales-ui-filters">
                <div class="sales-ui-grid">
                    <div>
                        <label class="sales-ui-label">From Date</label>
                        <div class="sales-ui-input-wrapper">
                            <input type="text" id="startDate" class="sales-ui-input customDatepicker" placeholder="mm/dd/yyyy">
                            <i class="fa-regular fa-calendar"></i>
                        </div>
                    </div>
                    <div>
                        <label class="sales-ui-label">To Date</label>
                        <div class="sales-ui-input-wrapper">
                            <input type="text" id="endDate" class="sales-ui-input customDatepicker" placeholder="mm/dd/yyyy">
                            <i class="fa-regular fa-calendar"></i>
                        </div>
                    </div>
                    <div>
                        <label class="sales-ui-label">Order Type</label>
                        <select id="order_type_filter" class="sales-ui-select">
                            <option value="">All Types</option>
                            <option value="1">Dine In</option>
                            <option value="2">Takeaway</option>
                            <option value="3">Delivery</option>
                        </select>
                    </div>
                    <div>
                        <label class="sales-ui-label">Payment Method</label>
                        <select id="payment_method_filter" class="sales-ui-select">
                            <option value="">All Methods</option>
                            <?php 
                            $payment_methods = $this->Sale_model->getAllPaymentMethods();
                            if ($payment_methods) {
                                foreach ($payment_methods as $method) {
                                    echo '<option value="'.$method->id.'">'.$method->name.'</option>';
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="sales-ui-actions">
                        <button type="button" id="apply_filter" class="sales-ui-btn-apply">Apply</button>
                        <button type="button" id="reset_filter" class="sales-ui-btn-reset">Reset</button>
                    </div>
                </div>
            </div>

            <div class="table-box">
                <div class="custom-table-header">
                    <div class="left-tools">
                        <!-- DataTable length and filter will move here -->
                    </div>
                    <div class="right-tools">
                        <?php if(isServiceAccessOnlyLogin('sGmsJaFJE')): 
                            $export_daily_sale = $this->session->userdata('export_daily_sale');
                            if($export_daily_sale && $export_daily_sale=="enable"): ?>
                                <a href="<?php echo base_url() ?>Sale/exportDailySales" data-access="exportDailySales-123" class="btn_list">
                                    <i class="fa-solid fa-download"></i> Export Daily Sales
                                </a>
                                <a href="<?php echo base_url() ?>Sale/resetDailySales" data-access="resetDailySales-123" class="btn_list">
                                    <i class="fa-solid fa-rotate-left"></i> Reset Daily Sales
                                </a>
                            <?php endif; 
                        endif; ?>
                        <!-- DataTable buttons (Export) will move here -->
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="datatable" class="table">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Sale No</th>
                                <th>Order Type</th>
                                <th>Date (Time)</th>
                                <th>Customer (Phone)</th>
                                <th>Total Payable</th>
                                <th>Refund Amount</th>
                                <th>Payment Method</th>
                                <th>Added By</th>
                                <th class="not-export-col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Data populated via AJAX -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modals -->
<div class="modal fade" id="change_date_modal" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo lang('change_date'); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <i data-feather="x"></i>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <input type="hidden" name="sale_id_hidden" id="sale_id_hidden">
                <input name="change_date_sale" placeholder="<?php echo lang('date')?>" id="change_date_sale_modal"
                    class="ir_w100_height35x">
          </div>
      </div>
      <div class="modal-footer">
          <button type="button" class="btn bg-blue-btn"
                    id="save_change_date"><?php echo lang('save_changes'); ?></button>
                <button type="button" class="btn bg-red-btn" data-bs-dismiss="modal"
                    id="close_change_date_modal"><?php echo lang('close'); ?></button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="change_delivery_address_update" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><?php echo lang('change_delivery_address'); ?></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" name="sale_id_hidden_d" id="sale_id_hidden_d">
                    <select class="form-control select2" name="status" id="status">
                        <option value="Pending"><?php echo lang('Pending'); ?></option>
                        <option value="Delivered"><?php echo lang('Delivered'); ?></option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-blue-btn"
                        id="save_change_status"><?php echo lang('save_changes'); ?></button>
                <button type="button" class="btn bg-red-btn" data-bs-dismiss="modal"
                        id="close_change_date_modal"><?php echo lang('close'); ?></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="refund_modal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="" id="exampleModalLabel"><?php echo lang('refund_items'); ?> (<?php echo lang('refund'); ?> <?php echo lang('date'); ?>: <span class="refund_date"></span>)</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th><?php echo lang('food_menu'); ?>(<?php echo lang('code'); ?>)</th>
                            <th><?php echo lang('quantity'); ?></th>
                            <th><?php echo lang('price'); ?></th>
                            <th><?php echo lang('vat'); ?></th>
                            <th><?php echo lang('discount'); ?></th>
                            <th><?php echo lang('refund_qty'); ?></th>
                            <th><?php echo lang('refund_amount'); ?></th>
                        </tr>
                        </thead>
                        <tbody id="sale_refund_cart">

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-red-btn" data-bs-dismiss="modal"
                ><?php echo lang('close'); ?></button>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/newDesign/js/forTable.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/POS/js/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>frequent_changing/js/sale.js"></script>
<script>
    $(document).ready(function() {
        $(".customDatepicker").datepicker({
            dateFormat: "yy-mm-dd",
            changeYear: true,
            changeMonth: true,
            autoclose: true,
            showMonthAfterYear: true,
            maxDate: 0,
        });
    });
</script>
