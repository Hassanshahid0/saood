<style>
    .promotions-page-modern {
        background: #F8F7F4;
        min-height: 100vh;
        padding: 24px;
    }
    .promotions-page-modern .top-left-header {
        color: #1C1A16;
        font-size: 28px;
        font-weight: 700;
        margin-bottom: 24px;
        margin-top: 0;
    }
    .promotions-modern-card {
        background: #fff;
        border: 1px solid #E7E1CC;
        border-radius: 16px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(82, 73, 52, 0.04);
    }
    .promotions-modern-card .table-responsive {
        margin: 0;
    }
    .promotions-modern-card table {
        margin: 0 !important;
    }
    .promotions-modern-card table.dataTable thead th {
        background: #F8F7F4 !important;
        color: #6E665A;
        font-size: 12px;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: .4px;
        border-top: 1px solid #E7E1CC !important;
        border-bottom: 1px solid #E7E1CC !important;
        padding: 14px 16px !important;
        position: relative;
    }
    /* HIDE DATATABLES SORTING ARROWS */
    .promotions-modern-card table.dataTable thead .sorting:before,
    .promotions-modern-card table.dataTable thead .sorting:after,
    .promotions-modern-card table.dataTable thead .sorting_asc:before,
    .promotions-modern-card table.dataTable thead .sorting_asc:after,
    .promotions-modern-card table.dataTable thead .sorting_desc:before,
    .promotions-modern-card table.dataTable thead .sorting_desc:after,
    .promotions-modern-card table.dataTable thead .sorting_asc_disabled:before,
    .promotions-modern-card table.dataTable thead .sorting_asc_disabled:after,
    .promotions-modern-card table.dataTable thead .sorting_desc_disabled:before,
    .promotions-modern-card table.dataTable thead .sorting_desc_disabled:after {
        display: none !important;
        content: "" !important;
    }
    .promotions-modern-card table.dataTable thead th {
        background-image: none !important;
    }
    .promotions-modern-card table.dataTable tbody td {
        padding: 14px 16px !important;
        color: #1C1A16;
        border-bottom: 1px solid #F0EDE4 !important;
        vertical-align: middle;
    }
    .promotions-modern-card table.dataTable tbody tr:hover {
        background: #FDFCFB !important;
    }
    .promo-status-pill {
        display: inline-flex;
        align-items: center;
        padding: 4px 12px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 600;
    }
    .promo-status-pill.active {
        color: #166534;
        background: #DCFCE7;
    }
    .promo-status-pill.inactive {
        color: #9A3412;
        background: #FFEDD5;
    }
    .promotion-type-pill {
        display: inline-flex;
        align-items: center;
        padding: 4px 10px;
        border-radius: 999px;
        background: #F0EDE4;
        color: #6E665A;
        font-size: 12px;
        font-weight: 600;
    }
    .promotion-food-wrap {
        line-height: 1.45;
    }
    .promotion-food-wrap b {
        color: #5C523A;
        font-weight: 700;
    }
    .promo-action-group {
        display: inline-flex;
        gap: 8px;
    }
    .promo-action-btn {
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        border: 1px solid #E7E1CC;
        background: #fff;
        color: #6E665A;
        transition: .2s ease;
    }
    .promo-action-btn.edit:hover {
        background: #FEF3C7;
        color: #92400E;
    }
    .promo-action-btn.delete:hover {
        background: #FEE2E2;
        color: #B91C1C;
    }

    /* MODERN FOOTER STYLING */
    .custom-footer-flex {
        display: flex !important;
        justify-content: space-between !important;
        align-items: center !important;
        width: 100% !important;
        padding: 24px 38px !important;
        border-top: 1px solid rgba(231, 221, 204, 0.3) !important;
        background: #fff;
    }
    .promotions-modern-card .bottom-left-item {
        flex: none !important;
    }
    .promotions-modern-card .bottom-right-item {
        flex: none !important;
    }
    .promotions-modern-card .dataTables_info {
        padding: 9px 38px !important;
        color: #6E665A !important;
        font-size: 13.5px !important;
        font-weight: 400 !important;
    }
    .promotions-modern-card .dataTables_paginate {
        padding: 0 !important;
        margin: 0 !important;
    }
    .promotions-modern-card .pagination {
        display: flex !important;
        align-items: center !important;
        gap: 10px !important;
        margin: 0 !important;
        padding: 9px 0 !important;
        list-style: none !important;
    }
    .promotions-modern-card .pagination .page-item {
        margin: 0 !important;
    }
    .promotions-modern-card .pagination .page-link {
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
        text-decoration: none !important;
    }
    .promotions-modern-card .pagination .page-item.active .page-link {
        background: #524934 !important;
        border-color: #524934 !important;
        color: #FFFFFF !important;
        font-weight: 600 !important;
    }
    .promotions-modern-card .pagination .page-item:hover:not(.active):not(.disabled) .page-link {
        background: #FAFAF9 !important;
        border-color: rgba(231, 221, 204, 0.8) !important;
    }
    .promotions-modern-card .pagination .page-item.disabled .page-link {
        opacity: 0.5;
        cursor: not-allowed;
        background: #fff !important;
    }
    .promotions-modern-card .dataTables_wrapper .dataTables_paginate .paginate_button {
        padding: 0 !important;
        border: none !important;
    }
    .promotions-modern-card .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background: transparent !important;
    }
    /* Specific styling for page numbers */
    .promotions-modern-card .pagination .page-item:not(.previous):not(.next) .page-link {
        min-width: 38px;
        text-align: center;
        justify-content: center;
        display: flex;
    }
</style>

 <section class="main-content-wrapper">
    <div class="promotions-page-modern">
        <?php
        if ($this->session->flashdata('exception')) {

            echo '<section class="alert-wrapper"><div class="alert alert-success alert-dismissible fade show"> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-body"><p><i class="m-right fa fa-check"></i>';
            echo escape_output($this->session->flashdata('exception'));unset($_SESSION['exception']);
            echo '</p></div></div></section>';
        }
        ?>

     <?php
            if ($this->session->flashdata('exception_err')) {

                echo '<section class="alert-wrapper"><div class="alert alert-danger alert-dismissible fade show"> 
                <button type="button" class="btn-close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <div class="alert-body"><p><i class="m-right fa fa-times"></i>';
                echo escape_output($this->session->flashdata('exception_err'));unset($_SESSION['exception_err']);
                echo '</p></div></div></section>';
            }
            ?>


            <section class="content-header">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <h2 class="top-left-header"><?php echo lang('promotions'); ?> </h2>
                        <input type="hidden" class="datatable_name" data-title="<?php echo lang('promotions'); ?>" data-id_name="datatable">
                    </div>
                    <div class="col-sm-12 col-md-4">

                    </div>
                </div>
            </section>

            <div class="box-wrapper promotions-modern-card">
                <div class="table-box">
                    <!-- /.box-header -->
                    <div class="table-responsive">
                        <table id="datatable" class="table">
                            <thead>
                                <tr>
                                    <th class="ir_w_1"> <?php echo lang('sn'); ?></th>
                                    <th class="ir_w_11"><?php echo lang('title'); ?></th>
                                    <th class="ir_w_11"><?php echo lang('type'); ?></th>
                                    <th class="ir_w_8"><?php echo lang('start_date'); ?></th>
                                    <th class="ir_w_8"><?php echo lang('end_date'); ?></th>
                                    <th><?php echo lang('food_menu'); ?></th>
                                    <th class="ir_w_9"><?php echo lang('discount'); ?></th>
                                    <th class="ir_w_9"><?php echo lang('status'); ?></th>
                                    <th class="ir_w_12"><?php echo lang('added_by'); ?></th>
                                    <th class="ir_w_6 not-export-col"><?php echo lang('actions'); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($promotions && !empty($promotions)) {
                                    $i = count($promotions);
                                }
                                foreach ($promotions as $wsts) {
                                    ?>
                                <tr>
                                    <td class="ir_txt_center"><?php echo escape_output($i--); ?></td>
                                    <td><?php echo escape_output($wsts->title) ?></td>
                                    <td>
                                        <span class="promotion-type-pill"><?php echo escape_output($wsts->type==1?'Discount':'Free Item') ?></span>
                                    </td>
                                    <td><?php echo escape_output(date($this->session->userdata('date_format'), strtotime($wsts->start_date))); ?></td>
                                    <td><?php echo escape_output(date($this->session->userdata('date_format'), strtotime($wsts->end_date))); ?></td>
                                    <td class="promotion-food-wrap">
                                                <?php if($wsts->type==1):
                                                    echo getFoodMenuNameById($wsts->food_menu_id)."(".getFoodMenuCodeById($wsts->food_menu_id).")";
                                                else:
                                                    echo "<b>Buy: </b>".getFoodMenuNameById($wsts->food_menu_id)."(".getFoodMenuCodeById($wsts->food_menu_id).") - ".$wsts->qty."(qty)";
                                                    echo "<br><b>Get: </b>".getFoodMenuNameById($wsts->get_food_menu_id)."(".getFoodMenuCodeById($wsts->get_food_menu_id).") - ".$wsts->get_qty."(qty)";
                                                    endif;?>
                                    </td>
                                    <?php if($wsts->type==1):?>
                                    <td><?php echo escape_output(getDiscountSymbol($wsts->discount)).(isset($wsts->discount) && $wsts->discount?$wsts->discount:0) ?></td>
                                        <?php else:?>
                                        <td>-</td>
                                        <?php endif;?>
                                    <td>
                                        <span class="promo-status-pill <?php echo escape_output($wsts->status==1?'active':'inactive'); ?>">
                                            <?php echo escape_output($wsts->status==1?lang('Active'):lang('Inactive')) ?>
                                        </span>
                                    </td>
                                    <td><?php echo escape_output(userName($wsts->user_id)); ?></td>

                                    <td>
                                        <div class="btn_group_wrap promo-action-group">
                                            <a class="promo-action-btn edit" href="<?php echo base_url() ?>Promotion/addEditPromotion/<?php echo escape_output($this->custom->encrypt_decrypt($wsts->id, 'encrypt')); ?>" data-bs-toggle="tooltip" data-bs-placement="top"
                                            data-bs-original-title="<?php echo lang('edit'); ?>">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            <a class="delete promo-action-btn delete" href="<?php echo base_url() ?>Promotion/deletePromotion/<?php echo escape_output($this->custom->encrypt_decrypt($wsts->id, 'encrypt')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="<?php echo lang('delete'); ?>">
                                                <i class="fa-regular fa-trash-can"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
            </div>
    </div>
 </section>
 <!-- DataTables -->

 <?php $this->view('common/footer_js')?>

<script>
    $(document).ready(function() {
        // Initialize DataTables with the custom flex footer
        if ($.fn.DataTable.isDataTable('#datatable')) {
            $('#datatable').DataTable().destroy();
        }
        
        $('#datatable').DataTable({
            'autoWidth': false,
            'ordering': true,
            'order': [[0, "desc"]],
            'dom': '<"top-left-item"lf><"top-right-item"B>rt<"custom-footer-flex" <"bottom-left-item"i><"bottom-right-item"p>>',
            'buttons': [
                {
                    extend: 'excelHtml5',
                    text: '<i class="fa-solid fa-download"></i> Export',
                    titleAttr: 'Export',
                    className: 'btn_list'
                }
            ],
            'language': {
                'paginate': {
                    'previous': 'Previous',
                    'next': 'Next'
                },
                'lengthMenu': 'Show _MENU_ entries',
                'search': '',
                'searchPlaceholder': 'Search...'
            }
        });
    });
</script>
