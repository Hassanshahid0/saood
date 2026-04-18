<?php
/*
  ###########################################################
  # PRODUCT NAME: 	iRestora PLUS - Next Gen Restaurant POS
  ###########################################################
  # AUTHER:		Doorsoft
  ###########################################################
  # EMAIL:		info@doorsoft.co
  ###########################################################
  # COPYRIGHTS:		RESERVED BY Door Soft
  ###########################################################
  # WEBSITE:		http://www.doorsoft.co
  ###########################################################
  # This is Dashboard Controller
  ###########################################################
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Cl_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Authentication_model');
        $this->load->model('Common_model');
        $this->load->model('Dashboard_model');
        $this->load->model('Inventory_model');
        $this->load->model('Report_model');
        $this->Common_model->setDefaultTimezone();
        $this->load->library('form_validation');
        
        if (!$this->session->has_userdata('user_id')) {
            redirect('Authentication/index');
        }

        if (!$this->session->has_userdata('outlet_id')) {
            $this->session->set_flashdata('exception_2',lang('please_click_green_button'));

            $this->session->set_userdata("clicked_controller", $this->uri->segment(1));
            $this->session->set_userdata("clicked_method", $this->uri->segment(2));
            redirect('Outlet/outlets');
        }


        $login_session['active_menu_tmp'] = '';
        $this->session->set_userdata($login_session);




    }

     /**
     * bar panel
     * @access public
     * @return void
     * @param no
     */
    public function dashboard() {
        //start check access function
        $segment_2 = $this->uri->segment(2);
        $controller = "1";
        $function = "";

        if($segment_2=="dashboard"){
            $function = "view";
        }else{
            $this->session->set_flashdata('exception_er', lang('menu_not_permit_access'));
            redirect('Authentication/userProfile');
        }

        if(!checkAccess($controller,$function)){
            $this->session->set_flashdata('exception_er', lang('menu_not_permit_access'));
            redirect('Authentication/userProfile');
        }
        //end check access function

        $first_day_this_month  = isset($_POST['start_date_dashboard']) && $_POST['start_date_dashboard']?$_POST['start_date_dashboard']:date('Y-m-01');
        $last_day_this_month  = isset($_POST['end_date_dashboard']) && $_POST['end_date_dashboard']?$_POST['end_date_dashboard']:date('Y-m-t');

        $outlet_id  = isset($_POST['outlet_id']) && $_POST['outlet_id']?$_POST['outlet_id']:'';
        if(!$outlet_id){
            $outlet_id = $this->session->userdata('outlet_id');
        } else {
            // Update session with new outlet selection
            $this->session->set_userdata('outlet_id', $outlet_id);
        }

        $data['outlet_id'] =  $outlet_id;
        $data['food_menu_count'] =  $this->Dashboard_model->getAllFoodMenus($outlet_id);
        $data['ingredient_count'] = sizeof($this->Dashboard_model->getInventory($outlet_id));
        $data['customer_count'] = $this->Dashboard_model->countData('tbl_customers');
        $data['employee_count'] = $this->Dashboard_model->countData('tbl_users');

        $data['start_date_dashboard'] = $first_day_this_month;
        $data['end_date_dashboard'] = $last_day_this_month;

        $data['low_stock_ingredients'] = $this->Inventory_model->getInventoryAlertList($outlet_id);
        $data['top_ten_food_menu'] = $this->Dashboard_model->top_ten_food_menu($first_day_this_month, $last_day_this_month,$outlet_id);
        $data['top_ten_customer'] = $this->Dashboard_model->top_ten_customer($first_day_this_month, $last_day_this_month,$outlet_id);
        $data['customer_receivable'] = $this->Dashboard_model->customer_receivable($outlet_id);
        $data['supplier_payable'] = $this->Dashboard_model->supplier_payable($outlet_id);

        $data['dinein_count'] = $this->Dashboard_model->dinein_count($first_day_this_month, $last_day_this_month,$outlet_id);
        $data['take_away_count'] = $this->Dashboard_model->take_away_count($first_day_this_month, $last_day_this_month,$outlet_id);
        $data['delivery_count'] = $this->Dashboard_model->delivery_count($first_day_this_month, $last_day_this_month,$outlet_id);

        $data['purchase_sum'] = $this->Dashboard_model->purchase_sum($first_day_this_month, $last_day_this_month,$outlet_id);
        $data['sale_sum'] = $this->Dashboard_model->sale_sum($first_day_this_month, $last_day_this_month,$outlet_id);
        $data['waste_sum'] = $this->Dashboard_model->waste_sum($first_day_this_month, $last_day_this_month,$outlet_id);
        $data['expense_sum'] = $this->Dashboard_model->expense_sum($first_day_this_month, $last_day_this_month,$outlet_id);
        $data['customer_due_receive_sum'] = $this->Dashboard_model->customer_due_receive_sum($first_day_this_month, $last_day_this_month,$outlet_id);
        $data['supplier_due_payment_sum'] = $this->Dashboard_model->supplier_due_payment_sum($first_day_this_month, $last_day_this_month,$outlet_id);
        
        // Calculate previous month same period for fair comparison
        $previous_month_start = date('Y-m-01', strtotime('first day of last month'));
        $previous_month_end = date('Y-m-t', strtotime('last month'));
        
        // For "Operational Comparison", let's compare the full current month vs full previous month
        $p_start = $previous_month_start;
        $p_end = $previous_month_end;

        // Fetch current period data for Operational Comparison
        $current_sale_sum_obj = $this->Dashboard_model->sale_sum($first_day_this_month, $last_day_this_month, $outlet_id);
        $data['current_revenue'] = $current_sale_sum_obj->sale_sum;

        $current_transactions_obj = (object)$this->Report_model->getTotalTransaction($first_day_this_month, $last_day_this_month, $outlet_id);
        $data['current_orders'] = $current_transactions_obj->total_transaction;
        $data['current_average_receipt'] = ($data['current_revenue'] > 0 && $data['current_orders'] > 0) ? ($data['current_revenue'] / $data['current_orders']) : 0;

        // Fetch previous period data (Full Previous Month)
        $previous_sale_sum_obj = $this->Dashboard_model->sale_sum($p_start, $p_end, $outlet_id);
        $data['previous_revenue'] = $previous_sale_sum_obj->sale_sum;

        $previous_transactions_obj = (object)$this->Report_model->getTotalTransaction($p_start, $p_end, $outlet_id);
        $data['previous_orders'] = $previous_transactions_obj->total_transaction;
        $data['previous_average_receipt'] = ($data['previous_revenue'] > 0 && $data['previous_orders'] > 0) ? ($data['previous_revenue'] / $data['previous_orders']) : 0;

        $data['outlets'] = $this->Common_model->getAllOutlestByAssign();
        $data['sale_by_payments'] = $this->Dashboard_model->sale_by_payments($first_day_this_month, $last_day_this_month,$outlet_id);
        $data['sale_by_paymentsTotal'] = $this->Dashboard_model->sale_by_paymentsTotal($first_day_this_month, $last_day_this_month,$outlet_id);
        
        // Fetch top 5 categories for doughnut chart using exact date range (default: last 30 days)
        $today = date('Y-m-d');
        $thirty_days_ago = date('Y-m-d', strtotime('-30 days'));
        $data['top_categories'] = $this->Dashboard_model->top_five_categories($thirty_days_ago, $today, $outlet_id);

        // Fetch order type data for Order Types card (default: last 30 days)
        $data['order_type_data'] = $this->Dashboard_model->get_order_type_data($thirty_days_ago, $today, $outlet_id);

        // Fetch 12 months sale comparison data for the bar chart
        $monthly_sale_comparison = array();
        for ($i = 11; $i >= 0; $i--) {
            $startDate = date('Y-m-01', strtotime("-$i months"));
            $endDate = date('Y-m-t', strtotime("-$i months"));
            $saleData = $this->Common_model->comparison_sale_report($startDate, $endDate);
            $monthly_sale_comparison[] = array(
                'month' => date('M-y', strtotime("-$i months")),
                'saleAmount' => !empty($saleData) ? $saleData->total_amount : 0
            );
        }
        $data['monthly_sale_comparison'] = $monthly_sale_comparison;


        $data['main_content'] = $this->load->view('dashboard/dashboard', $data, TRUE);
        $this->load->view('userHome', $data);
    }
     /**
     * bar panel
     * @access public
     * @return void
     * @param no
     */
    function operation_comparision_by_date_ajax(){
        $from_this_day = $this->input->post('from_this_day');
        $to_this_day = $this->input->post('to_this_day');
        
        $data = array();

        $data['purchase_sum'] = $this->Dashboard_model->purchase_sum($from_this_day, $to_this_day);  
        $data['sale_sum'] = $this->Dashboard_model->sale_sum($from_this_day, $to_this_day);  
        $data['waste_sum'] = $this->Dashboard_model->waste_sum($from_this_day, $to_this_day);  
        $data['expense_sum'] = $this->Dashboard_model->expense_sum($from_this_day, $to_this_day);  
        $data['customer_due_receive_sum'] = $this->Dashboard_model->customer_due_receive_sum($from_this_day, $to_this_day);  
        $data['supplier_due_payment_sum'] = $this->Dashboard_model->supplier_due_payment_sum($from_this_day, $to_this_day);
        $data['from_this_day'] = $from_this_day;
        $data['to_this_day'] = $to_this_day;
        echo json_encode($data);
    }
     /**
     * bar panel
     * @access public
     * @return void
     * @param no
     */
    function comparison_sale_report_ajax_get() {
        $selectedMonth = $_GET['months'];
        $finalOutput = array();
        for ($i = $selectedMonth - 1; $i >= 0; $i--) {
            $dateCalculate = $i > 0 ? '-' . $i : $i;
            $sqlStartDate = date('Y-m-01', strtotime($dateCalculate . ' month'));
            $sqlEndDate = date('Y-m-31', strtotime($dateCalculate . ' month'));
            $saleAmount = $this->Common_model->comparison_sale_report($sqlStartDate, $sqlEndDate);
            $finalOutput[] = array(
                'month' => date('M-y', strtotime($dateCalculate . ' month')),
                'saleAmount' => !empty($saleAmount) ? $saleAmount->total_amount : 0.0,
            );
        }
        echo json_encode($finalOutput);
    }
    function get_sale_report_charge(){
        $outlet_id  = isset($_POST['outlet_id']) && $_POST['outlet_id']?$_POST['outlet_id']:'';
        $start_date  = isset($_POST['start_date']) && $_POST['start_date']?$_POST['start_date']:'';
        $end_date  = isset($_POST['end_date']) && $_POST['end_date']?$_POST['end_date']:'';
        $type  = isset($_POST['type']) && $_POST['type']?$_POST['type']:'';
        $action_type  = isset($_POST['action_type']) && $_POST['action_type']?$_POST['action_type']:'';

        if(!$outlet_id){
            $outlet_id = $this->session->userdata('outlet_id');
        }
        $return_date_day = array();
        $transaction_details_main = (object)$this->Report_model->getTotalTransaction($start_date, $end_date,$outlet_id);

        if($action_type=="revenue"){
            $day_wise_date = (getSaleDate($start_date,$end_date,$type));
            $return_date_day_income = array();
            $return_date_day_expense = array();
            foreach ($day_wise_date as $key=>$value){
                $date_split = explode("||",$value);
                $start_date_generated = date("Y-m-d",strtotime($date_split[0]));
                $start_end_generated = date("Y-m-d",strtotime($date_split[1]));
                $profit_details = (object)$this->Report_model->profitLossReport($start_date_generated, $start_end_generated,$outlet_id);
                
                // Income line (profit_1 = total sales/revenue from tbl_sales)
                $inline_array_income = array();
                $inline_array_income['y_value'] = getAmtP($profit_details->profit_1);
                $inline_array_income['y_label'] = $date_split[2];
                $inline_array_income['x_label'] = $date_split[3];
                $inline_array_income['x_label_tmp'] = lang('income');
                $return_date_day_income[] = $inline_array_income;

                // Expense line (profit_8 is the actual expense amount from tbl_expenses)
                $inline_array_expense = array();
                $inline_array_expense['y_value'] = getAmtP(isset($profit_details->profit_8) ? $profit_details->profit_8 : 0);
                $inline_array_expense['y_label'] = $date_split[2];
                $inline_array_expense['x_label'] = $date_split[3];
                $inline_array_expense['x_label_tmp'] = lang('expense');
                $return_date_day_expense[] = $inline_array_expense;
            }
            $return_date_day = array('income' => $return_date_day_income, 'expense' => $return_date_day_expense);
        }else if($action_type=="profit"){
            $day_wise_date = (getSaleDate($start_date,$end_date,$type));
            $return_date_day_income = array();
            $return_date_day_expense = array();
            foreach ($day_wise_date as $key=>$value){
                $date_split = explode("||",$value);
                $start_date_generated = date("Y-m-d",strtotime($date_split[0]));
                $start_end_generated = date("Y-m-d",strtotime($date_split[1]));
                $profit_details = (object)$this->Report_model->profitLossReport($start_date_generated, $start_end_generated,$outlet_id);
                
                // Gross Revenue line
                $inline_array_income = array();
                $inline_array_income['y_value'] = getAmtP($profit_details->profit_1);
                $inline_array_income['y_label'] = $date_split[2];
                $inline_array_income['x_label'] = $date_split[3];
                $inline_array_income['x_label_tmp'] = lang('revenue');
                $return_date_day_income[] = $inline_array_income;
                
                // Total Costs line (ingredients + transfers + wastes + expenses + VAT + refunds)
                $cost_ingredients = isset($profit_details->profit_3) ? $profit_details->profit_3 : 0;
                $cost_transfers = isset($profit_details->profit_4) ? $profit_details->profit_4 : 0;
                $cost_wastes = isset($profit_details->profit_7) ? $profit_details->profit_7 : 0;
                $cost_manual = isset($profit_details->profit_8) ? $profit_details->profit_8 : 0;
                $cost_vat = isset($profit_details->profit_6) ? $profit_details->profit_6 : 0;
                $cost_refunds = isset($profit_details->profit_8_1) ? $profit_details->profit_8_1 : 0;
                $total_costs = $cost_ingredients + $cost_transfers + $cost_wastes + $cost_manual + $cost_vat + $cost_refunds;
                
                $inline_array_expense = array();
                $inline_array_expense['y_value'] = getAmtP($total_costs);
                $inline_array_expense['y_label'] = $date_split[2];
                $inline_array_expense['x_label'] = $date_split[3];
                $inline_array_expense['x_label_tmp'] = lang('total_costs');
                $return_date_day_expense[] = $inline_array_expense;
            }
            $return_date_day = array('income' => $return_date_day_income, 'expense' => $return_date_day_expense);
        }else if($action_type=="transactions"){
            $day_wise_date = (getSaleDate($start_date,$end_date,$type));
            foreach ($day_wise_date as $key=>$value){
                $date_split = explode("||",$value);
                $start_date_generated = date("Y-m-d",strtotime($date_split[0]));
                $start_end_generated = date("Y-m-d",strtotime($date_split[1]));
                $profit_details = (object)$this->Report_model->getTotalTransaction($start_date_generated, $start_end_generated,$outlet_id);
                $inline_array = array();
                $inline_array['y_value'] = getAmtP($profit_details->total_transaction);
                $inline_array['y_label'] =$date_split[2];
                $inline_array['x_label'] =$date_split[3];
                $inline_array['x_label_tmp'] =lang('transactions');
                $return_date_day[] = $inline_array;
            }
        }else if($action_type=="customers"){
            $day_wise_date = (getSaleDate($start_date,$end_date,$type));
            foreach ($day_wise_date as $key=>$value){
                $date_split = explode("||",$value);
                $start_date_generated = date("Y-m-d",strtotime($date_split[0]));
                $start_end_generated = date("Y-m-d",strtotime($date_split[1]));
                $profit_details = (object)$this->Report_model->getTotalCustomer($start_date_generated, $start_end_generated,$outlet_id);
                $inline_array = array();
                $inline_array['y_value'] = getAmtP($profit_details->total_customer);
                $inline_array['y_label'] =$date_split[2];
                $inline_array['x_label'] =$date_split[3];
                $inline_array['x_label_tmp'] =lang('customers');
                $return_date_day[] = $inline_array;
            }
        }else if($action_type=="average_receipt"){
            $day_wise_date = (getSaleDate($start_date,$end_date,$type));
            foreach ($day_wise_date as $key=>$value){
                $date_split = explode("||",$value);
                $start_date_generated = date("Y-m-d",strtotime($date_split[0]));
                $start_end_generated = date("Y-m-d",strtotime($date_split[1]));

                $profit_details = (object)$this->Report_model->profitLossReport($start_date_generated, $start_end_generated,$outlet_id);
                $average_trans = @(($profit_details->profit_1)/$transaction_details_main->total_transaction);
                $inline_array = array();
                $inline_array['y_value'] = getAmtP($average_trans);
                $inline_array['y_label'] =$date_split[2];
                $inline_array['x_label'] =$date_split[3];
                $inline_array['x_label_tmp'] =lang('average_receipt');
                $return_date_day[] = $inline_array;
            }
        }
        $return_array['data_points'] =  $return_date_day;

        $return_value_set_total_1 = 0;
        $return_value_set_total_2 = 0;
        $return_value_set_total_3 = 0;
        $return_value_set_total_4 = 0;

        $profit_details = (object)$this->Report_model->profitLossReport($start_date, $end_date,$outlet_id);
        $customer_details = (object)$this->Report_model->getTotalCustomer($start_date, $end_date,$outlet_id);

        $return_value_set_total_1+=($profit_details->profit_1);
        $return_value_set_total_2+=$profit_details->profit_9;
        $return_value_set_total_3+=$transaction_details_main->total_transaction;
        $return_value_set_total_4+=$customer_details->total_customer;

        $return_array['set_total_1'] =  getAmtP($return_value_set_total_1);
        $return_array['set_total_2'] =  getAmtP($return_value_set_total_2);
        $return_array['set_total_3'] =  getAmtP($return_value_set_total_3);
        $return_array['set_total_4'] =  getAmtP($return_value_set_total_4);

        echo json_encode($return_array);
    }
    function get_sale_report_charge_today(){
        $outlet_id  = isset($_POST['outlet_id']) && $_POST['outlet_id']?$_POST['outlet_id']:'';
        $start_date  = date('Y-m-d');
        $end_date  =date('Y-m-d');

        if(!$outlet_id){
            $outlet_id = $this->session->userdata('outlet_id');
        }

        $transaction_details_main = (object)$this->Report_model->getTotalTransaction($start_date, $end_date,$outlet_id);
        $return_value_set_total_1 = 0;
        $return_value_set_total_2 = 0;
        $return_value_set_total_3 = 0;
        $return_value_set_total_4 = 0;

        $profit_details = (object)$this->Report_model->profitLossReport($start_date, $end_date,$outlet_id);
        $customer_details = (object)$this->Report_model->getTotalCustomer($start_date, $end_date,$outlet_id);

        $return_value_set_total_1+=($profit_details->profit_1);
        $return_value_set_total_2+=$profit_details->profit_9;
        $return_value_set_total_3+=$transaction_details_main->total_transaction;
        $return_value_set_total_4+=$customer_details->total_customer;

        $return_array['set_total_1'] =  getAmtP($return_value_set_total_1);
        $return_array['set_total_2'] =  getAmtP($return_value_set_total_2);
        $return_array['set_total_3'] =  getAmtP($return_value_set_total_3);
        $return_array['set_total_4'] =  getAmtP($return_value_set_total_4);

        echo json_encode($return_array);
    }

    /**
     * Get top 5 categories data for semi-circle chart
     */
    function get_top_five_categories() {
        $outlet_id  = isset($_POST['outlet_id']) && $_POST['outlet_id'] ? $_POST['outlet_id'] : $this->session->userdata('outlet_id');
        $start_date  = isset($_POST['start_date']) && $_POST['start_date'] ? $_POST['start_date'] : date('Y-m-01');
        $end_date  = isset($_POST['end_date']) && $_POST['end_date'] ? $_POST['end_date'] : date('Y-m-d');

        $categories = $this->Dashboard_model->top_five_categories($start_date, $end_date, $outlet_id);

        $data_array = array();
        $total_qty = 0;
        $total_revenue = 0;

        foreach ($categories as $cat) {
            $total_qty += $cat->total_qty;
            $total_revenue += $cat->total_revenue;
        }

        foreach ($categories as $cat) {
            $item = array();
            $item['category_name'] = $cat->category_name;
            $item['totalQty'] = $cat->total_qty;
            $item['total_revenue'] = $cat->total_revenue;
            $item['percentage'] = $cat->percentage; // Already calculated in SQL
            $data_array[] = $item;
        }

        $return_array['data'] = $data_array;
        $return_array['total'] = $total_qty;

        echo json_encode($return_array);
    }

    /**
     * Get order type data for dashboard card
     */
    function get_order_type_data() {
        $outlet_id  = isset($_POST['outlet_id']) && $_POST['outlet_id'] ? $_POST['outlet_id'] : $this->session->userdata('outlet_id');
        $start_date  = isset($_POST['start_date']) && $_POST['start_date'] ? $_POST['start_date'] : date('Y-m-01');
        $end_date  = isset($_POST['end_date']) && $_POST['end_date'] ? $_POST['end_date'] : date('Y-m-d');

        $order_types = $this->Dashboard_model->get_order_type_data($start_date, $end_date, $outlet_id);

        $data_array = array();
        $total_orders_sum = 0;

        foreach ($order_types as $ot) {
            $total_orders_sum += $ot->total_orders;
        }

        foreach ($order_types as $ot) {
            $item = array();
            $item['order_type_label'] = $ot->order_type_label;
            $item['total_orders'] = $ot->total_orders;
            $item['total_items'] = $ot->total_items;
            $item['total_revenue'] = $ot->total_revenue;
            $item['percentage'] = $ot->percentage;
            $data_array[] = $item;
        }

        $return_array['data'] = $data_array;
        $return_array['total_orders'] = $total_orders_sum;

        echo json_encode($return_array);
    }
}
