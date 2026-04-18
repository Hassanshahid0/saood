<?php
/**
 * Test script to check top categories data
 * This script will help diagnose why the semi-circle chart is not showing data
 */

// Database configuration
$db_host = 'localhost';
$db_name = 'irestora_plus';
$db_user = 'root';
$db_pass = '';

try {
    // Connect to database
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "<h2>Database Connection: SUCCESS</h2>";
    
    // Check if tables exist
    $tables = ['tbl_sales', 'tbl_sales_details', 'tbl_food_menus', 'tbl_food_menu_categories'];
    echo "<h3>Checking Tables:</h3>";
    foreach ($tables as $table) {
        $stmt = $pdo->query("SELECT COUNT(*) FROM $table");
        $count = $stmt->fetchColumn();
        echo "<p>$table: $count rows</p>";
    }
    
    // Check current month sales
    $start_date = date('Y-m-01');
    $end_date = date('Y-m-t');
    $outlet_id = 1;
    
    echo "<h3>Query Parameters:</h3>";
    echo "<p>Start Date: $start_date</p>";
    echo "<p>End Date: $end_date</p>";
    echo "<p>Outlet ID: $outlet_id</p>";
    
    // Run the top categories query
    $query = "SELECT
                fmc.category_name,
                SUM(sd.qty) as totalQty
              FROM tbl_sales_details sd
              JOIN tbl_sales s ON s.id = sd.sales_id
              JOIN tbl_food_menus fm ON fm.id = sd.food_menu_id
              JOIN tbl_food_menu_categories fmc ON fmc.id = fm.category_id
              WHERE sd.del_status = 'Live'
                AND s.del_status = 'Live'
                AND fmc.del_status = 'Live'
                AND s.outlet_id = :outlet_id
                AND s.sale_date >= :start_date
                AND s.sale_date <= :end_date
              GROUP BY fmc.id, fmc.category_name
              ORDER BY totalQty DESC
              LIMIT 5";
    
    echo "<h3>Running Top Categories Query:</h3>";
    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':outlet_id' => $outlet_id,
        ':start_date' => $start_date,
        ':end_date' => $end_date
    ]);
    
    $categories = $stmt->fetchAll(PDO::FETCH_OBJ);
    
    if (count($categories) > 0) {
        echo "<p style='color: green;'>✓ Found " . count($categories) . " categories</p>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>Category Name</th><th>Total Qty</th></tr>";
        $total_qty = 0;
        foreach ($categories as $cat) {
            $total_qty += $cat->totalQty;
            echo "<tr><td>{$cat->category_name}</td><td>{$cat->totalQty}</td></tr>";
        }
        echo "<tr><td><strong>TOTAL</strong></td><td><strong>$total_qty</strong></td></tr>";
        echo "</table>";
        
        echo "<h3>Percentage Breakdown:</h3>";
        foreach ($categories as $cat) {
            $percentage = $total_qty > 0 ? round(($cat->totalQty * 100) / $total_qty, 0) : 0;
            echo "<p>{$cat->category_name}: {$cat->totalQty} ({$percentage}%)</p>";
        }
    } else {
        echo "<p style='color: red;'>✗ NO CATEGORIES FOUND for current month!</p>";
        echo "<p>This is why the chart shows 'No category data available'</p>";
        
        // Check if there's any sales data at all
        $sales_count = $pdo->query("SELECT COUNT(*) FROM tbl_sales WHERE outlet_id = $outlet_id AND del_status = 'Live'")->fetchColumn();
        $sales_details_count = $pdo->query("SELECT COUNT(*) FROM tbl_sales_details WHERE del_status = 'Live'")->fetchColumn();
        
        echo "<h3>Sales Data Check:</h3>";
        echo "<p>Total Sales Records: $sales_count</p>";
        echo "<p>Total Sales Details Records: $sales_details_count</p>";
        
        if ($sales_count == 0 || $sales_details_count == 0) {
            echo "<p style='color: orange;'>⚠ No sales data found. You need to:</p>";
            echo "<ol>";
            echo "<li>Run the insert_sample_data.php script to populate test data</li>";
            echo "<li>OR create actual sales through the application</li>";
            echo "</ol>";
        } else {
            echo "<p style='color: orange;'>⚠ Sales exist but no data for current month ($start_date to $end_date)</p>";
            echo "<p>Check if sales dates fall within the current month range</p>";
        }
    }
    
} catch (PDOException $e) {
    echo "<p style='color: red;'>✗ Database Error: " . $e->getMessage() . "</p>";
    echo "<p>Please check your database credentials in this file</p>";
}
?>
