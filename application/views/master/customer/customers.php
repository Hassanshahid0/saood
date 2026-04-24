<link rel="stylesheet" href="<?php echo base_url(); ?>frequent_changing/newDesign/components/sales-shared.css">
<style>
    .customer-page-modern {
        background: #F8F7F4;
        padding: 24px;
        min-height: 100vh;
        font-family: 'Inter', sans-serif;
    }
    .customer-breadcrumb {
        font-size: 13px;
        color: #8C8475;
        margin-bottom: 4px;
        font-weight: 400;
    }
    .customer-page-modern .top-left-header {
        color: #1C1A16;
        font-size: 28px;
        font-weight: 700;
        margin-top: 0;
        margin-bottom: 24px;
    }
    .customer-page-modern .customer-header-action {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        margin-top: 6px;
    }
    .customer-page-modern .table-box {
        padding: 0;
    }
    .customer-page-modern .table-ui-modern th:last-child,
    .customer-page-modern .table-ui-modern td:last-child {
        text-align: center;
    }
    .customer-page-modern .customer-action-buttons {
        display: inline-flex;
        align-items: center;
        gap: 8px;
    }
    .customer-page-modern .customer-action-btn {
        width: 32px;
        height: 32px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 8px;
        border: 1px solid rgba(231, 221, 204, 0.6);
        background: #fff;
        color: #8C8475;
        text-decoration: none;
        transition: all .2s ease;
    }
    .customer-page-modern .customer-action-btn.edit:hover {
        background: #FEF3C7;
        color: #92400E;
    }
    .customer-page-modern .customer-action-btn.delete:hover {
        background: #FEE2E2;
        color: #B91C1C;
    }
    @media (max-width: 768px) {
        .customer-page-modern {
            padding: 16px;
        }
        .customer-page-modern .customer-header-action {
            justify-content: flex-start;
            margin-bottom: 16px;
        }
    }
</style>
<section class="main-content-wrapper sales-shared-theme">
    <div class="customer-page-modern">

        <?php
        if ($this->session->flashdata('exception')) {
            echo '<section class="alert-wrapper">
                <div class="alert alert-success alert-dismissible fade show"> 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <div class="alert-body">
            <p><i class="m-right fa fa-check"></i>';
            echo escape_output($this->session->flashdata('exception'));unset($_SESSION['exception']);
            echo '</p></div></div></section>';
        }
        ?>

        <section class="content-header">
            <div class="row">
                <div class="col-md-6">
                    <div class="customer-breadcrumb"><?php echo lang('customers'); ?></div>
                    <h2 class="top-left-header"><?php echo lang('customers'); ?> </h2>
                    <input type="hidden" class="datatable_name" data-title="<?php echo lang('customers'); ?>" data-id_name="datatable">
                </div>
                <div class="col-md-offset-2 col-md-4">
                    <div class="btn_list m-right d-flex customer-header-action">
                            <a data-access="upload_customer-249" class="btn bg-blue-btn menu_assign_class btn-ui-primary" href="<?php echo base_url() ?>customer/uploadCustomer">
                            <i data-feather="upload"></i> <?php echo lang('upload_customer'); ?>
                            </a>
                        
                    </div>

                </div>
            </div>
        </section>


        <div class="box-wrapper sales-card-ui">
            <!-- general form elements -->
            <div class="table-box">
                <!-- /.box-header -->
                <div class="table-responsive">
                    <?php $is_loyalty_enable = $this->session->userdata('is_loyalty_enable');?>
                    <table id="datatable" class="table table-ui-modern">
                        <thead>
                            <tr>
                                <th class="ir_w_1"> <?php echo lang('sn'); ?></th>
                                <th class="ir_w_12"><?php echo lang('customer_name'); ?></th>
                                <th class="ir_w_7"><?php echo lang('phone'); ?></th>
                                <th class="ir_w_7"><?php echo lang('email'); ?></th>
                                <th class="ir_w_7"><?php echo lang('dob'); ?></th>
                                <th class="ir_w_7"><?php echo lang('default_discount_t'); ?></th>
                                <th class="ir_w_10"><?php echo lang('address'); ?></th>
                                <th class="ir_w_10"><?php echo lang('current_due'); ?></th>
                                <?php if(isset($is_loyalty_enable) && $is_loyalty_enable=="enable"):?>
                                    <th class="ir_w_10"><?php echo lang('is_loyalty_enable'); ?></th>
                                <?php endif;?>
                                <th class="ir_w_10"><?php echo lang('added_by'); ?></th>
                                <th class="ir_w_1_txt_center"><?php echo lang('actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($customers && !empty($customers)) {
                                $i = count($customers);
                            }
                            foreach ($customers as $cust) {
                                $current_due = 0;
                                $redeemed_point = 0;
                                $available_point = 0;
                                if($cust->id!=1){
                                    $current_due = getCustomerDue($cust->id);
                                    if(isset($is_loyalty_enable) && $is_loyalty_enable=="enable"):
                                        $return_data = getTotalLoyaltyPoint($cust->id,$this->session->userdata('outlet_id'));
                                        $redeemed_point = $return_data[0];
                                        $available_point = $return_data[1];
                                    endif;
                                }
                                $added = userName($cust->user_id);
                                ?>
                            <tr>
                                <td class="ir_txt_center"><?php echo escape_output($i--); ?></td>
                                <td><?php echo escape_output($cust->name) ?></td>
                                <td><?php echo escape_output($cust->phone) ?></td>
                                <td><?php echo escape_output($cust->email) ?></td>
                                <td><?php if($cust->date_of_birth != '1970-01-01'){ echo escape_output($cust->date_of_birth); }?></td>
                                <td><?php echo escape_output($cust->default_discount) ?></td>
                                <td><?php echo escape_output($cust->address) ?></td>
                                <td><?php echo escape_output(getAmtPCustom($current_due)) ?></td>
                                <?php if(isset($is_loyalty_enable) && $is_loyalty_enable=="enable"):?>
                                    <td><?php echo escape_output(($available_point)) ?></td>
                                <?php endif;?>
                                <td><?php echo $added?$added:"Online"; ?></td>

                                <td>
                                <?php if ($cust->name != "Walk-in Customer") { ?>
                                    <div class="btn_group_wrap customer-action-buttons">
                                        <a class="customer-action-btn edit" href="<?php echo base_url() ?>customer/addEditCustomer/<?php echo escape_output($this->custom->encrypt_decrypt($cust->id, 'encrypt')); ?>" data-bs-toggle="tooltip" data-bs-placement="top"
                                        data-bs-original-title="<?php echo lang('edit'); ?>">
                                            <i class="far fa-edit"></i>
                                        </a>
                                        <a class="delete customer-action-btn delete" href="<?php echo base_url() ?>customer/deleteCustomer/<?php echo escape_output($this->custom->encrypt_decrypt($cust->id, 'encrypt')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="<?php echo lang('delete'); ?>">
                                            <i class="fa-regular fa-trash-can"></i>
                                        </a>
                                    </div>
                                    <?php } ?>
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

<?php $this->view('common/footer_js')?>
