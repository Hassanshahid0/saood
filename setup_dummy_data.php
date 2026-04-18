<?php
// Dashboard Dummy Data Setup Script
// Run this file once to insert dummy data for Top Categories chart
// Access: http://localhost:8000/setup_dummy_data.php

// Include CodeIgniter
require_once 'index.php';

// Get CodeIgniter instance
$CI =& get_instance();

echo "<!DOCTYPE html>
<html>
<head>
    <title>Setup Dummy Data</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 40px; background: #f5f5f5; }
        .container { max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .success { color: #28a745; background: #d4edda; padding: 10px; border-radius: 4px; margin: 10px 0; }
        .error { color: #dc3545; background: #f8d7da; padding: 10px; border-radius: 4px; margin: 10px 0; }
        .info { color: #0c5460; background: #d1ecf1; padding: 10px; border-radius: 4px; margin: 10px 0; }
        table { width: 100%; border-collapse: collapse; margin: 20px 0; }
        th, td { padding: 10px; text-align: left; border-bottom: 1px solid #ddd; }
        th { background: #f8f9fa; font-weight: bold; }
        .btn { display: inline-block; padding: 10px 20px; background: #007bff; color: white; text-decoration: none; border-radius: 4px; margin-top: 20px; }
        .btn:hover { background: #0056b3; }
    </style>
</head>
<body>
    <div class='container'>
        <h1>📊 Setup Dummy Data for Top Categories</h1>";

try {
    // Get outlet_id and company_id from database (first available)
    $outlet_row = $CI->db->get('tbl_outlets')->row();
    $company_row = $CI->db->get('tbl_companies')->row();
    
    if (!$outlet_row || !$company_row) {
        echo "<div class='error'>❌ Error: No outlet or company found in database.</div>";
        exit;
    }
    
    $outlet_id = $outlet_row->id;
    $company_id = $company_row->id;
    
    echo "<div class='info'>ℹ️ Using Outlet ID: <strong>$outlet_id</strong> | Company ID: <strong>$company_id</strong></div>";
    
    // Step 1: Insert Categories
    echo "<h2>Step 1: Inserting Food Menu Categories...</h2>";
    $categories = [
        ['category_name' => 'Beverages'],
        ['category_name' => 'Main Course'],
        ['category_name' => 'Desserts'],
        ['category_name' => 'Appetizers'],
        ['category_name' => 'Seafood']
    ];
    
    $category_ids = [];
    foreach ($categories as $cat) {
        // Check if category exists
        $existing = $CI->db->get_where('tbl_food_menu_categories', [
            'category_name' => $cat['category_name'],
            'company_id' => $company_id,
            'del_status' => 'Live'
        ])->row();
        
        if (!$existing) {
            $CI->db->insert('tbl_food_menu_categories', [
                'category_name' => $cat['category_name'],
                'del_status' => 'Live',
                'company_id' => $company_id,
                'created_at' => date('Y-m-d H:i:s')
            ]);
            $category_ids[] = $CI->db->insert_id();
            echo "<div class='success'>✅ Added category: {$cat['category_name']}</div>";
        } else {
            $category_ids[] = $existing->id;
            echo "<div class='info'>ℹ️ Category already exists: {$cat['category_name']}</div>";
        }
    }
    
    // Step 2: Insert Food Menus
    echo "<h2>Step 2: Inserting Food Menus...</h2>";
    $menus = [
        ['name' => 'Coca Cola', 'category_id' => $category_ids[0], 'sale_price' => 5.00],
        ['name' => 'Pepsi', 'category_id' => $category_ids[0], 'sale_price' => 5.00],
        ['name' => 'Orange Juice', 'category_id' => $category_ids[0], 'sale_price' => 7.00],
        ['name' => 'Chicken Biryani', 'category_id' => $category_ids[1], 'sale_price' => 15.00],
        ['name' => 'Beef Steak', 'category_id' => $category_ids[1], 'sale_price' => 25.00],
        ['name' => 'Pasta', 'category_id' => $category_ids[1], 'sale_price' => 12.00],
        ['name' => 'Ice Cream', 'category_id' => $category_ids[2], 'sale_price' => 8.00],
        ['name' => 'Cake', 'category_id' => $category_ids[2], 'sale_price' => 10.00],
        ['name' => 'Caesar Salad', 'category_id' => $category_ids[3], 'sale_price' => 10.00],
        ['name' => 'Grilled Fish', 'category_id' => $category_ids[4], 'sale_price' => 20.00]
    ];
    
    $menu_ids = [];
    foreach ($menus as $menu) {
        $existing = $CI->db->get_where('tbl_food_menus', [
            'name' => $menu['name'],
            'company_id' => $company_id,
            'del_status' => 'Live'
        ])->row();
        
        if (!$existing) {
            $CI->db->insert('tbl_food_menus', [
                'name' => $menu['name'],
                'category_id' => $menu['category_id'],
                'sale_price' => $menu['sale_price'],
                'del_status' => 'Live',
                'company_id' => $company_id,
                'created_at' => date('Y-m-d H:i:s')
            ]);
            $menu_ids[] = $CI->db->insert_id();
            echo "<div class='success'>✅ Added menu: {$menu['name']}</div>";
        } else {
            $menu_ids[] = $existing->id;
            echo "<div class='info'>ℹ️ Menu already exists: {$menu['name']}</div>";
        }
    }
    
    // Step 3: Insert Sales
    echo "<h2>Step 3: Inserting Sales...</h2>";
    $sales_data = [
        ['date' => date('Y-m-d'), 'total' => 50.00],
        ['date' => date('Y-m-d'), 'total' => 75.00],
        ['date' => date('Y-m-d', strtotime('-1 day')), 'total' => 100.00],
        ['date' => date('Y-m-d', strtotime('-2 day')), 'total' => 45.00],
        ['date' => date('Y-m-d', strtotime('-3 day')), 'total' => 60.00]
    ];
    
    $sale_ids = [];
    foreach ($sales_data as $sale) {
        $CI->db->insert('tbl_sales', [
            'outlet_id' => $outlet_id,
            'customer_id' => 1,
            'sale_date' => $sale['date'],
            'total_payable' => $sale['total'],
            'order_status' => 3,
            'order_type' => 1,
            'del_status' => 'Live',
            'company_id' => $company_id,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        $sale_ids[] = $CI->db->insert_id();
        echo "<div class='success'>✅ Added sale on {$sale['date']} (Total: {$$sale['total']})</div>";
    }
    
    // Step 4: Insert Sales Details
    echo "<h2>Step 4: Inserting Sales Details...</h2>";
    $sales_details = [
        // Sale 1: Beverages (Coca Cola x5, Pepsi x3)
        ['sale_idx' => 0, 'menu_idx' => 0, 'qty' => 5],
        ['sale_idx' => 0, 'menu_idx' => 1, 'qty' => 3],
        
        // Sale 2: Main Course (Chicken Biryani x4, Beef Steak x2)
        ['sale_idx' => 1, 'menu_idx' => 3, 'qty' => 4],
        ['sale_idx' => 1, 'menu_idx' => 4, 'qty' => 2],
        
        // Sale 3: Mixed (Coca Cola x8, Ice Cream x3, Caesar Salad x2)
        ['sale_idx' => 2, 'menu_idx' => 0, 'qty' => 8],
        ['sale_idx' => 2, 'menu_idx' => 6, 'qty' => 3],
        ['sale_idx' => 2, 'menu_idx' => 8, 'qty' => 2],
        
        // Sale 4: Seafood + Main Course (Grilled Fish x2, Chicken Biryani x1)
        ['sale_idx' => 3, 'menu_idx' => 9, 'qty' => 2],
        ['sale_idx' => 3, 'menu_idx' => 3, 'qty' => 1],
        
        // Sale 5: Mixed (Coca Cola x6, Beef Steak x3, Ice Cream x4)
        ['sale_idx' => 4, 'menu_idx' => 0, 'qty' => 6],
        ['sale_idx' => 4, 'menu_idx' => 4, 'qty' => 3],
        ['sale_idx' => 4, 'menu_idx' => 6, 'qty' => 4]
    ];
    
    foreach ($sales_details as $detail) {
        $CI->db->insert('tbl_sales_details', [
            'sales_id' => $sale_ids[$detail['sale_idx']],
            'food_menu_id' => $menu_ids[$detail['menu_idx']],
            'qty' => $detail['qty'],
            'del_status' => 'Live',
            'company_id' => $company_id,
            'outlet_id' => $outlet_id,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        echo "<div class='success'>✅ Added: {$menus[$detail['menu_idx']]['name']} x{$detail['qty']} (Sale #{$sale_ids[$detail['sale_idx']]})</div>";
    }
    
    // Show summary
    echo "<h2>✅ Setup Complete!</h2>";
    echo "<div class='info'><strong>Summary:</strong><br>";
    echo "• 5 Categories inserted<br>";
    echo "• 10 Food Menus inserted<br>";
    echo "• 5 Sales records inserted<br>";
    echo "• 12 Sales Details inserted<br>";
    echo "</div>";
    
    // Show expected chart data
    echo "<h2>📊 Expected Chart Data:</h2>";
    echo "<table>
            <tr>
                <th>Category</th>
                <th>Total Qty</th>
                <th>Percentage</th>
            </tr>";
    
    $chart_data = $CI->db->query("
        SELECT 
            fmc.category_name,
            SUM(sd.qty) as totalQty
        FROM tbl_sales_details sd
        JOIN tbl_sales s ON s.id = sd.sales_id
        JOIN tbl_food_menus fm ON fm.id = sd.food_menu_id
        JOIN tbl_food_menu_categories fmc ON fmc.id = fm.category_id
        WHERE sd.del_status = 'Live'
          AND s.del_status = 'Live'
          AND fmc.del_status = 'Live'
          AND s.outlet_id = ?
          AND s.sale_date >= DATE_FORMAT(CURDATE(), '%Y-%m-01')
          AND s.sale_date <= CURDATE()
        GROUP BY fmc.id, fmc.category_name
        ORDER BY totalQty DESC
        LIMIT 5
    ", [$outlet_id])->result();
    
    $total_all = 0;
    foreach ($chart_data as $row) {
        $total_all += $row->totalQty;
    }
    
    foreach ($chart_data as $row) {
        $percentage = $total_all > 0 ? round(($row->totalQty * 100) / $total_all, 0) : 0;
        echo "<tr>
                <td>{$row->category_name}</td>
                <td>{$row->totalQty}</td>
                <td>{$percentage}%</td>
              </tr>";
    }
    echo "</table>";
    
    echo "<a href='Dashboard/dashboard' class='btn'>🎉 Go to Dashboard to See Chart</a>";
    
} catch (Exception $e) {
    echo "<div class='error'>❌ Error: " . $e->getMessage() . "</div>";
}

echo "</div></body></html>";
?>
