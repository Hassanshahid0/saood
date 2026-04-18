<link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/custom/inventory.css">
<section class="main-content-wrapper">

    <section class="content-header">
        <div class="row">
            <div class="col-sm-12 mb-3 col-md-6">
                <h3 class="top-left-header"><?php echo lang('inventory'); ?> </h3>
            </div>
            <div class="col-sm-12 mb-2 col-md-3">

            </div>
            <div class="col-sm-12 mb-2 col-md-3">
                <strong class="margin_10" id="stockValue"></strong>
            </div>
        </div>
    </section>
 
    <div class="row"> 
         <div class="col-lg-6"> 
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
                         <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns=" `http://www.w3.org/2000/svg` "> 
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
  
         <div class="col-lg-6"> 
             <div class="box box-info" style="background: white; border-radius: 20px; overflow: hidden; border: none; box-shadow: 0 2px 8px rgba(0,0,0,0.08);"> 
                 <!-- Header Row: Single Line, No Extra Space --> 
                 <div style="padding: 16px 20px 10px; display: flex; justify-content: space-between; align-items: center; width: 100%; flex-wrap: nowrap;"> 
                     <h3 style="color: #2C2416; font-size: 20px; font-family: 'DM Sans', sans-serif; font-weight: 600; line-height: 32px; margin: 0; white-space: nowrap;"> 
                         <?php echo lang('operational_comparision'); ?> 
                     </h3> 
                     <div style="display: flex; align-items: center; gap: 20px; flex-shrink: 0;"> 
                         <div style="width: 12px; height: 12px; background: #C5A868; border-radius: 4.5px;"></div> 
                         <div style="color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 300; line-height: 24px;">Current</div> 
                     </div> 
                     <div style="display: flex; align-items: center; gap: 8px;"> 
                         <div style="width: 12px; height: 12px; background: #675F4C; border-radius: 4.5px;"></div> 
                         <div style="color: #2C2416; font-size: 14px; font-family: 'DM Sans', sans-serif; font-weight: 300; line-height: 24px;">Previous</div> 
                     </div> 
                 </div> 
  
                 <!-- Chart Area: Minimal Padding --> 
                 <div style="padding: 0 10px 5px;"> 
                     <style> 
                         #operational_comparision rect { rx: 8px !important; ry: 8px !important; } 
                         #operational_comparision text { font-family: 'DM Sans', sans-serif; fill: #6E665A; } 
                         #operational_comparision .morris-hover { border-radius: 8px; font-family: 'DM Sans', sans-serif; } 
                     </style> 
                     <div class="chart" id="operational_comparision" style="height: 260px;"></div> 
                 </div> 
             </div> 
         </div> 
     </div>
    <div class="box-wrapper">

        <div class="table-box">
            <!-- /.box-header -->
            <div class="table-responsive">
                <input type="hidden" class="datatable_name" data-filter="yes" data-title="<?php echo lang('inventory'); ?>" data-id_name="datatable">
                <table id="datatable" class="table">
                    <thead>
                    <tr>
                        <th class="title" class="ir_w_5"><?php echo lang('sn'); ?></th>
                        <th class="title" class="ir_w_37">
                            <?php echo lang('ingredient'); ?>(<?php echo lang('code'); ?>)</th>
                        <th class="title" class="ir_w_20"><?php echo lang('category'); ?></th>
                        <th class="title" class="ir_w_20"><?php echo lang('stock_qty_amount'); ?></th>
                        <th class="title" class="ir_w_20"><?php echo lang('alert_qty_amount'); ?></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    $totalStock = 0;
                    $grandTotal = 0;
                    $alertCount = 0;
         
                    if (!empty($inventory) && isset($inventory)):
                        foreach ($inventory as $key => $value):
                            $conversion_rate = (int)$value->conversion_rate?$value->conversion_rate:1;
                            if($value->id):
                                $totalStock = ($value->total_purchase*$value->conversion_rate)  - $value->total_consumption - $value->total_modifiers_consumption - $value->total_waste + $value->total_consumption_plus - $value->total_consumption_minus + ($value->total_transfer_plus*$value->conversion_rate) - ($value->total_transfer_minus*$value->conversion_rate)  +  ($value->total_transfer_plus_2*$value->conversion_rate) -  ($value->total_transfer_minus_2*$value->conversion_rate)+ ($value->total_production*$value->conversion_rate);
                                $last_purchase_price = getLastPurchaseAmount($value->id);

                                if($value->conversion_rate==0 || $value->conversion_rate==''){
                                    $total_sale_unit = isset($value->conversion_rate) && (int)$value->conversion_rate?(int)($totalStock/1):'0';
                                }else{
                                    $total_sale_unit = isset($value->conversion_rate) && (int)$value->conversion_rate?(int)($totalStock/$value->conversion_rate):'0';
                                }

                                $total_stock_in_float = ((float)(((int)$total_sale_unit).".".((int)$totalStock%$conversion_rate)));
                                if ($totalStock >= 0) {
                                    $grandTotal += ($total_stock_in_float*$last_purchase_price);
                                }

                                $key++;

                                ?>
                                <tr>
                                    <td class="ir_txt_center"><?php echo escape_output($key); ?></td>
                                    <td><?= escape_output($value->name . "(" . $value->code . ")") ?></td>
                                    <td><?php echo escape_output($value->category_name); ?></td>
                                    <?php if(($value->ing_type=="Plain Ingredient" && $value->is_direct_food!=2) && $value->conversion_rate!=1):?>
                                            <td style="<?= ($totalStock <= ($value->alert_quantity*$value->conversion_rate)) ? 'color:red' : '' ?>"><?php echo getAmtP($total_sale_unit); ?><?php echo " " . $value->unit_name2 ?></span> <span><?= ($totalStock) ? getAmtP($totalStock%$conversion_rate) : getAmtP(0) ?><?= " " . escape_output($value->unit_name)?></span></td>
                                    <?php else:
                                        $stock_float = (float)($total_sale_unit + (($totalStock) ? ($totalStock%$conversion_rate) : (0)));
                                        ?>
                                        <td style="<?= ($totalStock <= ($value->alert_quantity*$value->conversion_rate)) ? 'color:red' : '' ?>"><?php echo escape_output(getAmtP($stock_float)) ?> <?= " " . escape_output($value->unit_name)?></span></td>
                                    <?php
                                    endif
                                    ?>
                                    <td><?= escape_output(getAmtP($value->alert_quantity) . " ") ?>
                                        <?php if($value->ing_type=="Plain Ingredient" && $value->is_direct_food!=2  && $value->conversion_rate!=1):?>
                                            <?php echo " " . $value->unit_name2 ?>
                                        <?php else:
                                            ?>
                                            <?= " " . escape_output($value->unit_name)?>
                                            <?php
                                        endif
                                        ?>
                                    </td>
                                </tr>
                                <?php
                            endif;
                        endforeach;
                    endif;
                    ?>
                    </tbody>

                </table>
                <input type="hidden" value="<?php echo escape_output(getAmtP($grandTotal)); ?>" id="grandTotal" name="grandTotal">
            </div>
            <!-- /.box-body -->
        </div>

    </div>



    <div class="modal fade" id="filterModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo lang('inventory'); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open(base_url() . 'Inventory/index') ?>
                    <div class="row">
                        <input type="hidden" name="<?php echo escape_output($this->security->get_csrf_token_name()); ?>"
                               value="<?php echo escape_output($this->security->get_csrf_hash()); ?>">
                        <input type="hidden" name="hiddentIngredientID" id="hiddentIngredientID"
                               value="<?= isset($ingredient_id) ? $ingredient_id : '' ?>">
                        <div class="col-sm-12 mb-2">
                            <div class="form-group">
                                <select class="form-control select2 category_id ir_w_100" name="category_id" id="category_id">
                                    <option value=""><?php echo lang('category'); ?></option>
                                    <?php foreach ($ingredient_categories as $value) { ?>
                                        <option value="<?php echo escape_output($value->id) ?>" <?php echo set_select('category_id', $value->id); ?>>
                                            <?php echo escape_output($value->category_name) ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="form-group">
                                <select class="form-control select2 ir_w_100" name="ingredient_id" id="ingredient_id">
                                    <option value=""><?php echo lang('ingredient'); ?></option>
                                    <?php foreach ($ingredients as $value) { ?>
                                        <option value="<?php echo escape_output($value->id) ?>" <?php echo set_select('ingredient_id', $value->id); ?>>
                                            <?php echo escape_output($value->name) . "(" . $value->code . ")" ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <div class="form-group">
                                <select class="form-control select2 ir_w_100" name="food_id" id="food_id">
                                    <option value=""><?php echo lang('food_menu'); ?></option>
                                    <?php foreach ($foodMenus as $value) {
                                    if($value->is_variation!=1){
                                        $p_name = '';
                                        if($value->parent_id!='0'){
                                            $p_name = getVariationName($value->parent_id);
                                        }
                                        ?>
                                        <option value="<?php echo escape_output($value->id) ?>" <?php echo set_select('food_id', $value->id); ?>>
                                            <?php echo substr(ucwords(strtolower((isset($p_name) && $p_name?$p_name." ":'').$value->name)), 0, 18) . "(" . $value->code . ")" ?>
                                        </option>
                                    <?php
                                      }
                                    }

                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 mb-2">
                            <button type="submit" name="submit" value="submit"
                                    class="btn w-100 bg-blue-btn"><?php echo lang('submit'); ?></button>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>

</section>

<script src="<?php echo base_url(); ?>frequent_changing/js/inventory.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/datatable_custom/jquery-3.3.1.js"></script>
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

<script src="<?php echo base_url(); ?>frequent_changing/js/custom_report.js"></script>