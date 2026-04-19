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
<style>
    .sales-page-modern {
        background: #FAFAF9;
        padding: 18px;
        border-radius: 12px;
    }
    .sales-breadcrumb {
        font-size: 13px;
        color: #6E665A;
        margin-bottom: 8px;
    }
    .sales-page-modern .top-left-header {
        color: #524934;
        font-size: 24px;
        font-weight: 600;
    }
    .sales-modern-card {
        background: #fff;
        border: 1px solid rgba(231, 221, 204, 0.5);
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 1px 6px rgba(82, 73, 52, 0.05);
    }
    .sales-ui-filters {
        padding: 20px;
        border-bottom: 1px solid rgba(231, 221, 204, 0.45);
    }
    .sales-ui-grid {
        display: grid;
        grid-template-columns: repeat(5, minmax(0, 1fr));
        gap: 12px;
    }
    .sales-ui-label {
        display: block;
        margin-bottom: 6px;
        color: #6E665A;
        font-size: 12px;
        font-weight: 500;
    }
    .sales-ui-input,
    .sales-ui-select {
        width: 100%;
        min-height: 38px;
        padding: 8px 10px;
        border-radius: 8px;
        border: 1px solid rgba(231, 221, 204, 0.75);
        color: #1C1A16;
        font-size: 13px;
        background: #fff;
    }
    .sales-ui-input:focus,
    .sales-ui-select:focus {
        outline: none;
        border-color: #524934;
    }
    .sales-ui-actions {
        display: flex;
        align-items: flex-end;
        gap: 8px;
    }
    .sales-ui-btn-apply {
        flex: 1;
        min-height: 38px;
        border-radius: 8px;
        border: 1px solid #524934;
        background: #524934;
        color: #fff;
        font-size: 13px;
        font-weight: 600;
    }
    .sales-ui-btn-reset {
        min-height: 38px;
        border-radius: 8px;
        border: 1px solid rgba(231, 221, 204, 0.75);
        background: #fff;
        color: #524934;
        font-size: 13px;
        font-weight: 600;
        padding: 0 12px;
    }
    .sales-modern-card .top-left-item, .sales-modern-card .top-right-item {
        padding: 18px 24px;
        margin: 0;
        border-bottom: 1px solid rgba(231, 221, 204, 0.4);
        background: #fff;
    }
    .sales-modern-card .top-left-item {
        display: flex;
        align-items: center;
        gap: 20px;
        flex-wrap: wrap;
    }
    .sales-modern-card .top-right-item {
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }
    .sales-modern-card .dataTables_length label,
    .sales-modern-card .dataTables_filter label {
        margin-bottom: 0;
        font-size: 13px;
        color: #6E665A;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .sales-modern-card .dataTables_filter input,
    .sales-modern-card .dataTables_length select {
        border: 1px solid rgba(231, 221, 204, 0.9);
        border-radius: 8px;
        min-height: 42px;
        font-size: 13px;
        padding: 0 12px;
        background: #fff;
    }
    .sales-modern-card #datatable_filter label {
        position: relative;
    }
    .sales-modern-card #datatable_filter label svg {
        position: absolute;
        left: 12px;
        top: 50%;
        transform: translateY(-50%);
        color: #6E665A;
    }
    .sales-modern-card #datatable_filter input {
        min-width: 320px;
        padding-left: 36px;
        transition: all 0.2s ease;
    }
    .sales-modern-card #datatable_filter input:focus {
        border-color: #524934;
        box-shadow: 0 0 0 3px rgba(82, 73, 52, 0.12);
    }
    .sales-modern-card .dt-buttons .dt-button,
    .sales-modern-card .btn_list,
    .sales-modern-card .toggleBtn {
        border-radius: 8px !important;
        min-height: 42px;
        display: inline-flex !important;
        align-items: center;
        justify-content: center;
        gap: 8px;
        padding: 8px 16px !important;
        font-size: 13px !important;
        font-weight: 600;
    }
    .sales-modern-card .btn_list[data-access="exportDailySales-123"] {
        background: #5C523A !important;
        border-color: #5C523A !important;
        color: #fff !important;
    }
    .sales-modern-card .btn_list[data-access="resetDailySales-123"] {
        background: #fff !important;
        border: 1px solid rgba(231, 221, 204, 0.9) !important;
        color: #524934 !important;
    }
    .sales-modern-card .toggleBtn {
        background: #fff !important;
        border: 1px solid rgba(231, 221, 204, 0.9) !important;
        color: #524934 !important;
    }
    .sales-modern-card .toggleBtn svg {
        width: 14px;
        height: 14px;
    }
    .sales-modern-card .left-btn-box {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    .sales-modern-card .right-btn-box {
        margin-left: 0 !important;
    }
    .sales-modern-card .table-box .table-responsive {
        border-top: 1px solid rgba(231, 221, 204, 0.4);
    }
    .sales-modern-card table.dataTable thead th {
        background: #FAFAF9 !important;
        color: #524934;
        font-size: 13px;
        font-weight: 600;
        border-bottom: 1px solid rgba(231, 221, 204, 0.3) !important;
        padding: 14px 20px !important;
    }
    .sales-modern-card table.dataTable tbody td {
        font-size: 13px;
        color: #1C1A16;
        border-bottom: 1px solid rgba(231, 221, 204, 0.25);
        padding: 14px 20px !important;
        vertical-align: middle;
    }
    .sales-modern-card table.dataTable tbody tr:nth-child(odd) {
        background: #fff;
    }
    .sales-modern-card table.dataTable tbody tr:nth-child(even) {
        background: #FDFCF9;
    }
    .sales-modern-card table.dataTable tbody tr:hover {
        background: #FAF8F2 !important;
    }
    .sales-modern-card table.dataTable tbody td:nth-child(2) {
        color: #524934;
        font-weight: 600;
    }
    .sales-modern-card table.dataTable tbody td:nth-child(6) {
        color: #16A34A;
        font-weight: 600;
    }
    .sales-modern-card table.dataTable tbody td:nth-child(7) {
        color: #DC2626;
        font-weight: 600;
    }
    .sales-modern-card .bottom-left-item,
    .sales-modern-card .bottom-right-item {
        padding: 18px 20px;
        border-top: 1px solid rgba(231, 221, 204, 0.3);
        color: #6E665A;
        font-size: 13px;
    }
    .sales-modern-card .pagination>li>a,
    .sales-modern-card .pagination>li>span {
        border-radius: 8px !important;
        margin: 0 4px;
        min-width: 38px;
        text-align: center;
    }
    @media (max-width: 991px) {
        .sales-ui-grid {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }
    }
    @media (max-width: 575px) {
        .sales-ui-grid {
            grid-template-columns: 1fr;
        }
        .sales-modern-card #datatable_filter input {
            min-width: 180px;
        }
    }
</style>
<section class="main-content-wrapper">
    <div class="sales-page-modern">
    <div class="sales-breadcrumb"><?php echo lang('sales'); ?></div>

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
    <section class="content-header">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <h2 class="top-left-header"><?php echo lang('sale'); ?> </h2>
            </div>
            <?php if(!isServiceAccessOnlyLogin('sGmsJaFJE')): ?>
            <div class="col-sm-12 col-md-4">

            </div>
                <?php else:
                $export_daily_sale = $this->session->userdata('export_daily_sale');
                if($export_daily_sale && $export_daily_sale=="enable"): ?>
            <div class="col-md-2">
                <a href="<?php echo base_url() ?>Sale/exportDailySales"  data-access="exportDailySales-123" class="btn_list m-right btn bg-blue-btn delete menu_assign_class"><?php echo lang('exportDailySales'); ?></a>
            </div>
            <div class="col-md-2">
                <a href="<?php echo base_url() ?>Sale/resetDailySales"  data-access="resetDailySales-123" class="btn_list m-right btn bg-blue-btn delete menu_assign_class"><?php echo lang('resetDailySales'); ?></a>
            </div>
            <div class="col-md-2">

            </div>
            <?php else: ?>
            <div class="col-md-offset-4 col-md-2">

            </div>

            <?php endif; endif; ?>
        </div>
    </section>

    <div class="box-wrapper sales-modern-card">
        <div class="sales-ui-filters">
            <div class="sales-ui-grid">
                <div>
                    <label class="sales-ui-label">From Date</label>
                    <input type="date" class="sales-ui-input">
                </div>
                <div>
                    <label class="sales-ui-label">To Date</label>
                    <input type="date" class="sales-ui-input">
                </div>
                <div>
                    <label class="sales-ui-label"><?php echo lang('order_type'); ?></label>
                    <select class="sales-ui-select">
                        <option>All Types</option>
                        <option>Dine In</option>
                        <option>Takeaway</option>
                        <option>Delivery</option>
                    </select>
                </div>
                <div>
                    <label class="sales-ui-label"><?php echo lang('payment_method'); ?></label>
                    <select class="sales-ui-select">
                        <option>All Methods</option>
                        <option>Cash</option>
                        <option>Card</option>
                        <option>UPI</option>
                    </select>
                </div>
                <div class="sales-ui-actions">
                    <button type="button" class="sales-ui-btn-apply">Apply</button>
                    <button type="button" class="sales-ui-btn-reset">Reset</button>
                </div>
            </div>
        </div>
        <div class="table-box">
            <!-- /.box-header -->
            <div class="table-responsive">
                <table id="datatable" class="table">
                    <thead>
                        <tr>
                            <th class="ir_w2_txt_center"><?php echo lang('sn'); ?></th>
                            <th class="ir_w_8"><?php echo lang('sale_no'); ?></th>
                            <th class="ir_w_8"><?php echo lang('order_type'); ?></th>
                            <th class="ir_w_12"><?php echo lang('date'); ?>(<?php echo lang('time'); ?>)</th>
                            <th class="ir_w_10"><?php echo lang('customer'); ?> (<?php echo lang('phone'); ?>)</th>
                            <th class="ir_w_8"><?php echo lang('total_payable'); ?></th>
                            <th class="ir_w_10"><?php echo lang('refund_amount'); ?></th>
                            <th class="ir_w_20"><?php echo lang('payment_method'); ?></th>
                            <th class="ir_w_10"><?php echo lang('added_by'); ?></th>
                            <th class="ir_w5_txt_center not-export-col"><?php echo lang('actions'); ?></th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    </div>

</section>


<!-- Modal -->
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

<div class="modal fade" id="change_delivery_address" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js">
</script>
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
