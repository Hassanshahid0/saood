<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DatabaseSeeder extends Cl_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Common_model');
        $this->load->library('form_validation');
        $this->Common_model->setDefaultTimezone();
        if (!$this->session->has_userdata('user_id')) {
            redirect('Authentication/index');
        }
        $login_session['active_menu_tmp'] = '';
        $this->session->set_userdata($login_session);
    }
    public function listTables() {
        $db_name = $this->db->database;
        $tables = $this->db->query("SHOW TABLES FROM `".$db_name."`")->result_array();
        $out = array();
        $out['sql'] = "SHOW TABLES FROM `".$db_name."`";
        $out['tables'] = $tables;
        echo json_encode($out);
    }
    public function seedScenario() {
        $company_id = $this->session->userdata('company_id') ? $this->session->userdata('company_id') : 1;
        $outlet_id = $this->session->userdata('outlet_id') ? $this->session->userdata('outlet_id') : 1;
        $user_id = $this->session->userdata('user_id') ? $this->session->userdata('user_id') : 1;
        $sqls = array();
        $this->db->trans_start();
        $kg_id = $this->db->query("SELECT id FROM tbl_units WHERE company_id=".$company_id." AND unit_name='kg'")->row('id');
        if(!$kg_id){
            $this->db->query("INSERT INTO tbl_units (unit_name,company_id) VALUES ('kg',".$company_id.")");
            $kg_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_units (unit_name,company_id) VALUES ('kg',".$company_id.")";
        }
        $pcs_id = $this->db->query("SELECT id FROM tbl_units WHERE company_id=".$company_id." AND unit_name='pcs'")->row('id');
        if(!$pcs_id){
            $this->db->query("INSERT INTO tbl_units (unit_name,company_id) VALUES ('pcs',".$company_id.")");
            $pcs_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_units (unit_name,company_id) VALUES ('pcs',".$company_id.")";
        }
        $cat_produce_id = $this->db->query("SELECT id FROM tbl_ingredient_categories WHERE company_id=".$company_id." AND category_name='Produce'")->row('id');
        if(!$cat_produce_id){
            $this->db->query("INSERT INTO tbl_ingredient_categories (category_name,user_id,company_id,del_status) VALUES ('Produce',".$user_id.",".$company_id.",'Live')");
            $cat_produce_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_ingredient_categories (category_name,user_id,company_id,del_status) VALUES ('Produce',".$user_id.",".$company_id.",'Live')";
        }
        $cat_dairy_id = $this->db->query("SELECT id FROM tbl_ingredient_categories WHERE company_id=".$company_id." AND category_name='Dairy'")->row('id');
        if(!$cat_dairy_id){
            $this->db->query("INSERT INTO tbl_ingredient_categories (category_name,user_id,company_id,del_status) VALUES ('Dairy',".$user_id.",".$company_id.",'Live')");
            $cat_dairy_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_ingredient_categories (category_name,user_id,company_id,del_status) VALUES ('Dairy',".$user_id.",".$company_id.",'Live')";
        }
        $tom_id = $this->db->query("SELECT id FROM tbl_ingredients WHERE company_id=".$company_id." AND name='Tomato'")->row('id');
        if(!$tom_id){
            $this->db->query("INSERT INTO tbl_ingredients (name,code,category_id,unit_id,purchase_unit_id,purchase_price,consumption_unit_cost,ing_type,user_id,company_id,del_status) VALUES ('Tomato','ING-TOM',".$cat_produce_id.",".$kg_id.",".$kg_id.",2.50,2.50,'Plain Ingredient',".$user_id.",".$company_id.",'Live')");
            $tom_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_ingredients (name,code,category_id,unit_id,purchase_unit_id,purchase_price,consumption_unit_cost,ing_type,user_id,company_id,del_status) VALUES ('Tomato','ING-TOM',".$cat_produce_id.",".$kg_id.",".$kg_id.",2.50,2.50,'Plain Ingredient',".$user_id.",".$company_id.",'Live')";
        }
        $che_id = $this->db->query("SELECT id FROM tbl_ingredients WHERE company_id=".$company_id." AND name='Mozzarella Cheese'")->row('id');
        if(!$che_id){
            $this->db->query("INSERT INTO tbl_ingredients (name,code,category_id,unit_id,purchase_unit_id,purchase_price,consumption_unit_cost,ing_type,user_id,company_id,del_status) VALUES ('Mozzarella Cheese','ING-CHE',".$cat_dairy_id.",".$kg_id.",".$kg_id.",6.00,6.00,'Plain Ingredient',".$user_id.",".$company_id.",'Live')");
            $che_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_ingredients (name,code,category_id,unit_id,purchase_unit_id,purchase_price,consumption_unit_cost,ing_type,user_id,company_id,del_status) VALUES ('Mozzarella Cheese','ING-CHE',".$cat_dairy_id.",".$kg_id.",".$kg_id.",6.00,6.00,'Plain Ingredient',".$user_id.",".$company_id.",'Live')";
        }
        $bas_id = $this->db->query("SELECT id FROM tbl_ingredients WHERE company_id=".$company_id." AND name='Basil'")->row('id');
        if(!$bas_id){
            $this->db->query("INSERT INTO tbl_ingredients (name,code,category_id,unit_id,purchase_unit_id,purchase_price,consumption_unit_cost,ing_type,user_id,company_id,del_status) VALUES ('Basil','ING-BAS',".$cat_produce_id.",".$kg_id.",".$kg_id.",20.00,20.00,'Plain Ingredient',".$user_id.",".$company_id.",'Live')");
            $bas_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_ingredients (name,code,category_id,unit_id,purchase_unit_id,purchase_price,consumption_unit_cost,ing_type,user_id,company_id,del_status) VALUES ('Basil','ING-BAS',".$cat_produce_id.",".$kg_id.",".$kg_id.",20.00,20.00,'Plain Ingredient',".$user_id.",".$company_id.",'Live')";
        }
        $fm_cat_id = $this->db->query("SELECT id FROM tbl_food_menu_categories WHERE company_id=".$company_id." AND category_name='Pizza'")->row('id');
        if(!$fm_cat_id){
            $this->db->query("INSERT INTO tbl_food_menu_categories (category_name,company_id,user_id,del_status) VALUES ('Pizza',".$company_id.",".$user_id.",'Live')");
            $fm_cat_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_food_menu_categories (category_name,company_id,user_id,del_status) VALUES ('Pizza',".$company_id.",".$user_id.",'Live')";
        }
        $vat_id = $this->db->query("SELECT id FROM tbl_vats WHERE company_id=".$company_id." AND name='VAT 5%'")->row('id');
        if(!$vat_id){
            $this->db->query("INSERT INTO tbl_vats (name,company_id,percentage,del_status) VALUES ('VAT 5%',".$company_id.",5.00,'Live')");
            $vat_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_vats (name,company_id,percentage,del_status) VALUES ('VAT 5%',".$company_id.",5.00,'Live')";
        }
        $menu_id = $this->db->query("SELECT id FROM tbl_food_menus WHERE company_id=".$company_id." AND alternative_name='Margherita Pizza'")->row('id');
        if(!$menu_id){
            $tax_info = json_encode(array(array('id'=>$vat_id,'value'=>5.00)));
            $this->db->query("INSERT INTO tbl_food_menus (alternative_name,code,category_id,sale_price,sale_price_take_away,loyalty_point,description,veg_item,beverage_item,tax_information,tax_string,user_id,company_id,del_status) VALUES ('Margherita Pizza','FM-MARG-001',".$fm_cat_id.",9.99,8.99,10,'Classic pizza',1,0,'".$tax_info."','VAT 5%',".$user_id.",".$company_id.",'Live')");
            $menu_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_food_menus (alternative_name,code,category_id,sale_price,sale_price_take_away,loyalty_point,description,veg_item,beverage_item,tax_information,tax_string,user_id,company_id,del_status) VALUES ('Margherita Pizza','FM-MARG-001',".$fm_cat_id.",9.99,8.99,10,'Classic pizza',1,0,'".$tax_info."','VAT 5%',".$user_id.",".$company_id.",'Live')";
        }
        $exists_map = $this->db->query("SELECT id FROM tbl_food_menus_ingredients WHERE company_id=".$company_id." AND food_menu_id=".$menu_id." LIMIT 1")->row('id');
        if(!$exists_map){
            $this->db->query("INSERT INTO tbl_food_menus_ingredients (ingredient_id,consumption,cost,total,food_menu_id,user_id,company_id,del_status) VALUES (".$tom_id.",0.20,2.50,0.50,".$menu_id.",".$user_id.",".$company_id.",'Live')");
            $sqls[] = "INSERT INTO tbl_food_menus_ingredients (ingredient_id,consumption,cost,total,food_menu_id,user_id,company_id,del_status) VALUES (".$tom_id.",0.20,2.50,0.50,".$menu_id.",".$user_id.",".$company_id.",'Live')";
            $this->db->query("INSERT INTO tbl_food_menus_ingredients (ingredient_id,consumption,cost,total,food_menu_id,user_id,company_id,del_status) VALUES (".$che_id.",0.15,6.00,0.90,".$menu_id.",".$user_id.",".$company_id.",'Live')");
            $sqls[] = "INSERT INTO tbl_food_menus_ingredients (ingredient_id,consumption,cost,total,food_menu_id,user_id,company_id,del_status) VALUES (".$che_id.",0.15,6.00,0.90,".$menu_id.",".$user_id.",".$company_id.",'Live')";
            $this->db->query("INSERT INTO tbl_food_menus_ingredients (ingredient_id,consumption,cost,total,food_menu_id,user_id,company_id,del_status) VALUES (".$bas_id.",0.01,20.00,0.20,".$menu_id.",".$user_id.",".$company_id.",'Live')");
            $sqls[] = "INSERT INTO tbl_food_menus_ingredients (ingredient_id,consumption,cost,total,food_menu_id,user_id,company_id,del_status) VALUES (".$bas_id.",0.01,20.00,0.20,".$menu_id.",".$user_id.",".$company_id.",'Live')";
        }
        $area_id = $this->db->query("SELECT id FROM tbl_areas WHERE company_id=".$company_id." AND outlet_id=".$outlet_id." AND area_name='Main Hall'")->row('id');
        if(!$area_id){
            $this->db->query("INSERT INTO tbl_areas (area_name,description,company_id,outlet_id,del_status) VALUES ('Main Hall','Sample area',".$company_id.",".$outlet_id.",'Live')");
            $area_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_areas (area_name,description,company_id,outlet_id,del_status) VALUES ('Main Hall','Sample area',".$company_id.",".$outlet_id.",'Live')";
        }
        $t1 = $this->db->query("SELECT id FROM tbl_tables WHERE company_id=".$company_id." AND outlet_id=".$outlet_id." AND area=".$area_id." AND name='T-01'")->row('id');
        if(!$t1){
            $this->db->query("INSERT INTO tbl_tables (area,name,sit_capacity,position,description,outlet_id,user_id,company_id,is_setting,del_status) VALUES (".$area_id.",'T-01',4,'','Sample table 1',".$outlet_id.",".$user_id.",".$company_id.",0,'Live')");
            $t1 = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_tables (area,name,sit_capacity,position,description,outlet_id,user_id,company_id,is_setting,del_status) VALUES (".$area_id.",'T-01',4,'','Sample table 1',".$outlet_id.",".$user_id.",".$company_id.",0,'Live')";
        }
        $customer_id = $this->db->query("SELECT id FROM tbl_customers WHERE company_id=".$company_id." AND name='John Doe'")->row('id');
        if(!$customer_id){
            $this->db->query("INSERT INTO tbl_customers (name,phone,address,default_discount,user_id,company_id,del_status) VALUES ('John Doe','5550001','123 Sample St',0,".$user_id.",".$company_id.",'Live')");
            $customer_id = $this->db->insert_id();
            $sqls[] = "INSERT INTO tbl_customers (name,phone,address,default_discount,user_id,company_id,del_status) VALUES ('John Doe','5550001','123 Sample St',0,".$user_id.",".$company_id.",'Live')";
        }
        $date = date('Y-m-d');
        $sale_no = $this->db->query("SELECT count(id) as bno FROM tbl_sales WHERE outlet_id=".$outlet_id)->row('bno');
        $sale_no = str_pad($sale_no + 1, 6, '0', STR_PAD_LEFT);
        $sub_total = 9.99*2;
        $vat_amount = round($sub_total*0.05,2);
        $total_payable = $sub_total+$vat_amount;
        $this->db->query("INSERT INTO tbl_sales (customer_id,sub_total,vat,total_payable,paid_amount,due_amount,payment_method_id,user_id,outlet_id,sale_date,sale_time,sale_no,order_type,order_status,del_status,company_id) VALUES (".$customer_id.",".$sub_total.",".$vat_amount.",".$total_payable.",".$total_payable.",0,1,".$user_id.",".$outlet_id.",'".$date."','".date('h:i A')."','".$sale_no."',1,3,'Live',".$company_id.")");
        $sales_id = $this->db->insert_id();
        $sqls[] = "INSERT INTO tbl_sales (customer_id,sub_total,vat,total_payable,paid_amount,due_amount,payment_method_id,user_id,outlet_id,sale_date,sale_time,sale_no,order_type,order_status,del_status,company_id) VALUES (".$customer_id.",".$sub_total.",".$vat_amount.",".$total_payable.",".$total_payable.",0,1,".$user_id.",".$outlet_id.",'".$date."','".date('h:i A')."','".$sale_no."',1,3,'Live',".$company_id.")";
        $this->db->insert('tbl_sale_payments', array(
            'sale_id' => $sales_id,
            'amount' => $total_payable,
            'payment_id' => 1,
            'date_time' => date('Y-m-d H:i:s'),
            'outlet_id' => $outlet_id,
            'currency_type' => 1,
            'del_status' => 'Live'
        ));
        $comsump = array();
        $comsump['outlet_id'] = $outlet_id;
        $comsump['date'] = $date;
        $comsump['date_time'] = date('h:i A');
        $comsump['user_id'] = $user_id;
        $comsump['sale_id'] = $sales_id;
        $this->db->insert('tbl_sale_consumptions',$comsump);
        $sale_consumption_id = $this->db->insert_id();
        $data1 = array();
        $data1['food_menu_id'] = $menu_id;
        $data1['sales_id'] = $sales_id;
        $data1['menu_name'] = 'Margherita Pizza';
        $data1['price'] = 9.99;
        $data1['qty'] = 2;
        $data1['discount_amount'] = 0;
        $data1['total'] = 19.98;
        $data1['user_id'] = $user_id;
        $data1['outlet_id'] = $outlet_id;
        $data1['cooking_status'] = 'Done';
        $data1['del_status'] = 'Live';
        $this->db->insert('tbl_sales_details',$data1);
        $this->db->query("INSERT INTO tbl_sale_consumptions_of_menus (sale_consumption_id,ingredient_id,consumption,user_id,outlet_id,del_status) VALUES (".$sale_consumption_id.",".$tom_id.",".(0.20*2).",".$user_id.",".$outlet_id.",'Live')");
        $sqls[] = "INSERT INTO tbl_sale_consumptions_of_menus (sale_consumption_id,ingredient_id,consumption,user_id,outlet_id,del_status) VALUES (".$sale_consumption_id.",".$tom_id.",".(0.20*2).",".$user_id.",".$outlet_id.",'Live')";
        $this->db->query("INSERT INTO tbl_sale_consumptions_of_menus (sale_consumption_id,ingredient_id,consumption,user_id,outlet_id,del_status) VALUES (".$sale_consumption_id.",".$che_id.",".(0.15*2).",".$user_id.",".$outlet_id.",'Live')");
        $sqls[] = "INSERT INTO tbl_sale_consumptions_of_menus (sale_consumption_id,ingredient_id,consumption,user_id,outlet_id,del_status) VALUES (".$sale_consumption_id.",".$che_id.",".(0.15*2).",".$user_id.",".$outlet_id.",'Live')";
        $this->db->query("INSERT INTO tbl_sale_consumptions_of_menus (sale_consumption_id,ingredient_id,consumption,user_id,outlet_id,del_status) VALUES (".$sale_consumption_id.",".$bas_id.",".(0.01*2).",".$user_id.",".$outlet_id.",'Live')");
        $sqls[] = "INSERT INTO tbl_sale_consumptions_of_menus (sale_consumption_id,ingredient_id,consumption,user_id,outlet_id,del_status) VALUES (".$sale_consumption_id.",".$bas_id.",".(0.01*2).",".$user_id.",".$outlet_id.",'Live')";
        $sale_no2 = $this->db->query("SELECT count(id) as bno FROM tbl_sales WHERE outlet_id=".$outlet_id)->row('bno');
        $sale_no2 = str_pad($sale_no2 + 1, 6, '0', STR_PAD_LEFT);
        $sub_total2 = 9.99*1;
        $vat_amount2 = round($sub_total2*0.05,2);
        $total_payable2 = $sub_total2+$vat_amount2;
        $this->db->query("INSERT INTO tbl_sales (customer_id,sub_total,vat,total_payable,paid_amount,due_amount,payment_method_id,user_id,outlet_id,sale_date,sale_time,sale_no,order_type,order_status,del_status,company_id) VALUES (".$customer_id.",".$sub_total2.",".$vat_amount2.",".$total_payable2.",".$total_payable2.",0,1,".$user_id.",".$outlet_id.",'".$date."','".date('h:i A')."','".$sale_no2."',2,3,'Live',".$company_id.")");
        $sales_id2 = $this->db->insert_id();
        $sqls[] = "INSERT INTO tbl_sales (customer_id,sub_total,vat,total_payable,paid_amount,due_amount,payment_method_id,user_id,outlet_id,sale_date,sale_time,sale_no,order_type,order_status,del_status,company_id) VALUES (".$customer_id.",".$sub_total2.",".$vat_amount2.",".$total_payable2.",".$total_payable2.",0,1,".$user_id.",".$outlet_id.",'".$date."','".date('h:i A')."','".$sale_no2."',2,3,'Live',".$company_id.")";
        $this->db->insert('tbl_sale_payments', array(
            'sale_id' => $sales_id2,
            'amount' => $total_payable2,
            'payment_id' => 1,
            'date_time' => date('Y-m-d H:i:s'),
            'outlet_id' => $outlet_id,
            'currency_type' => 1,
            'del_status' => 'Live'
        ));
        $sale_no3 = $this->db->query("SELECT count(id) as bno FROM tbl_sales WHERE outlet_id=".$outlet_id)->row('bno');
        $sale_no3 = str_pad($sale_no3 + 1, 6, '0', STR_PAD_LEFT);
        $sub_total3 = 9.99*3;
        $vat_amount3 = round($sub_total3*0.05,2);
        $total_payable3 = $sub_total3+$vat_amount3;
        $this->db->query("INSERT INTO tbl_sales (customer_id,sub_total,vat,total_payable,paid_amount,due_amount,payment_method_id,user_id,outlet_id,sale_date,sale_time,sale_no,order_type,order_status,del_status,company_id) VALUES (".$customer_id.",".$sub_total3.",".$vat_amount3.",".$total_payable3.",".$total_payable3.",0,1,".$user_id.",".$outlet_id.",'".$date."','".date('h:i A')."','".$sale_no3."',3,3,'Live',".$company_id.")");
        $sales_id3 = $this->db->insert_id();
        $this->db->insert('tbl_sales_details', array(
            'food_menu_id' => $menu_id,
            'sales_id' => $sales_id3,
            'menu_name' => 'Margherita Pizza',
            'price' => 9.99,
            'qty' => 3,
            'discount_amount' => 0,
            'total' => 29.97,
            'user_id' => $user_id,
            'outlet_id' => $outlet_id,
            'cooking_status' => 'Done',
            'del_status' => 'Live'
        ));
        $this->db->insert('tbl_sale_payments', array(
            'sale_id' => $sales_id3,
            'amount' => $total_payable3,
            'payment_id' => 1,
            'date_time' => date('Y-m-d H:i:s'),
            'outlet_id' => $outlet_id,
            'currency_type' => 1,
            'del_status' => 'Live'
        ));
        for($d=1;$d<=5;$d++){
            $loop_date = date('Y-m-d', strtotime("-$d days"));
            $sale_no_loop = $this->db->query("SELECT count(id) as bno FROM tbl_sales WHERE outlet_id=".$outlet_id)->row('bno');
            $sale_no_loop = str_pad($sale_no_loop + 1, 6, '0', STR_PAD_LEFT);
            $qty = ($d%3)+1;
            $sub_total_loop = 9.99*$qty;
            $vat_amount_loop = round($sub_total_loop*0.05,2);
            $total_payable_loop = $sub_total_loop+$vat_amount_loop;
            $this->db->query("INSERT INTO tbl_sales (customer_id,sub_total,vat,total_payable,paid_amount,due_amount,payment_method_id,user_id,outlet_id,sale_date,sale_time,sale_no,order_type,order_status,del_status,company_id) VALUES (".$customer_id.",".$sub_total_loop.",".$vat_amount_loop.",".$total_payable_loop.",".$total_payable_loop.",0,1,".$user_id.",".$outlet_id.",'".$loop_date."','".date('h:i A')."','".$sale_no_loop."',".(($d%3)+1).",3,'Live',".$company_id.")");
            $loop_sale_id = $this->db->insert_id();
            $this->db->insert('tbl_sales_details', array(
                'food_menu_id' => $menu_id,
                'sales_id' => $loop_sale_id,
                'menu_name' => 'Margherita Pizza',
                'price' => 9.99,
                'qty' => $qty,
                'discount_amount' => 0,
                'total' => $sub_total_loop,
                'user_id' => $user_id,
                'outlet_id' => $outlet_id,
                'cooking_status' => 'Done',
                'del_status' => 'Live'
            ));
            $this->db->insert('tbl_sale_payments', array(
                'sale_id' => $loop_sale_id,
                'amount' => $total_payable_loop,
                'payment_id' => 1,
                'date_time' => $loop_date.' '.date('H:i:s'),
                'outlet_id' => $outlet_id,
                'currency_type' => 1,
                'del_status' => 'Live'
            ));
        }
        $supplier_id = $this->db->query("SELECT id FROM tbl_suppliers WHERE company_id=".$company_id." AND name='Sample Supplier'")->row('id');
        if(!$supplier_id){
            $this->db->query("INSERT INTO tbl_suppliers (name,phone,contact_person,description,user_id,company_id,del_status) VALUES ('Sample Supplier','5551001','Acme Co','Seed supplier',".$user_id.",".$company_id.",'Live')");
            $supplier_id = $this->db->insert_id();
        }
        $this->db->insert('tbl_purchase', array(
            'reference_no' => 'PO-0001',
            'supplier_id' => $supplier_id,
            'date' => $date,
            'grand_total' => 80.00,
            'paid' => 50.00,
            'due' => 30.00,
            'payment_id' => 1,
            'user_id' => $user_id,
            'outlet_id' => $outlet_id,
            'del_status' => 'Live'
        ));
        $this->db->insert('tbl_supplier_payments', array(
            'supplier_id' => $supplier_id,
            'amount' => 30.00,
            'date' => $date,
            'payment_id' => 1,
            'user_id' => $user_id,
            'outlet_id' => $outlet_id,
            'del_status' => 'Live'
        ));
        $this->db->insert('tbl_expenses', array(
            'amount' => 15.00,
            'category_id' => 1,
            'date' => $date,
            'payment_id' => 1,
            'user_id' => $user_id,
            'outlet_id' => $outlet_id,
            'del_status' => 'Live'
        ));
        $this->db->insert('tbl_customer_due_receives', array(
            'customer_id' => $customer_id,
            'amount' => 5.00,
            'date' => $date,
            'only_date' => $date,
            'payment_id' => 1,
            'user_id' => $user_id,
            'outlet_id' => $outlet_id,
            'del_status' => 'Live'
        ));
        $data1b = array();
        $data1b['food_menu_id'] = $menu_id;
        $data1b['sales_id'] = $sales_id2;
        $data1b['menu_name'] = 'Margherita Pizza';
        $data1b['price'] = 9.99;
        $data1b['qty'] = 1;
        $data1b['discount_amount'] = 0;
        $data1b['total'] = 9.99;
        $data1b['user_id'] = $user_id;
        $data1b['outlet_id'] = $outlet_id;
        $data1b['cooking_status'] = 'Done';
        $data1b['del_status'] = 'Live';
        $this->db->insert('tbl_sales_details',$data1b);
        $this->db->trans_complete();
        $verify = array();
        $verify['tbl_units'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_units WHERE company_id=".$company_id)->row('c');
        $verify['tbl_ingredient_categories'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_ingredient_categories WHERE company_id=".$company_id." AND del_status='Live'")->row('c');
        $verify['tbl_ingredients'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_ingredients WHERE company_id=".$company_id." AND del_status='Live'")->row('c');
        $verify['tbl_food_menu_categories'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_food_menu_categories WHERE company_id=".$company_id." AND del_status='Live'")->row('c');
        $verify['tbl_vats'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_vats WHERE company_id=".$company_id." AND del_status='Live'")->row('c');
        $verify['tbl_food_menus'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_food_menus WHERE company_id=".$company_id." AND del_status='Live'")->row('c');
        $verify['tbl_food_menus_ingredients'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_food_menus_ingredients WHERE company_id=".$company_id." AND del_status='Live'")->row('c');
        $verify['tbl_areas'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_areas WHERE company_id=".$company_id." AND outlet_id=".$outlet_id." AND del_status='Live'")->row('c');
        $verify['tbl_tables'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_tables WHERE company_id=".$company_id." AND outlet_id=".$outlet_id." AND del_status='Live'")->row('c');
        $verify['tbl_customers'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_customers WHERE company_id=".$company_id." AND del_status='Live'")->row('c');
        $verify['tbl_sales'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_sales WHERE company_id=".$company_id." AND outlet_id=".$outlet_id." AND del_status='Live'")->row('c');
        $verify['tbl_sales_details'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_sales_details WHERE outlet_id=".$outlet_id." AND del_status='Live'")->row('c');
        $verify['tbl_sale_consumptions'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_sale_consumptions WHERE outlet_id=".$outlet_id)->row('c');
        $verify['tbl_sale_consumptions_of_menus'] = $this->db->query("SELECT COUNT(*) AS c FROM tbl_sale_consumptions_of_menus WHERE outlet_id=".$outlet_id." AND del_status='Live'")->row('c');
        $out = array();
        $out['executed_sql'] = $sqls;
        $out['verification'] = $verify;
        echo json_encode($out);
    }
    public function exportDump() {
        $db_name = $this->db->database;
        $tables = $this->db->query("SHOW TABLES")->result_array();
        $dump = "";
        foreach ($tables as $row) {
            $table = array_values($row)[0];
            $create_row = $this->db->query("SHOW CREATE TABLE `".$table."`")->row_array();
            $create_sql = array_values($create_row)[1];
            $dump .= "DROP TABLE IF EXISTS `".$table."`;\n".$create_sql.";\n";
            $rows = $this->db->get($table)->result_array();
            if ($rows) {
                $cols = array_keys($rows[0]);
                $col_list = "`".implode("`,`",$cols)."`";
                foreach ($rows as $r) {
                    $vals = array();
                    foreach ($cols as $c) {
                        $vals[] = $this->db->escape($r[$c]);
                    }
                    $dump .= "INSERT INTO `".$table."` (".$col_list.") VALUES (".implode(",",$vals).");\n";
                }
            }
            $dump .= "\n";
        }
        $file_path = FCPATH.'finasalt_rmsnew.sql';
        file_put_contents($file_path, $dump);
        echo json_encode(array('file' => $file_path, 'database' => $db_name));
    }
}
