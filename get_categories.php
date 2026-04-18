<?php
/**
 * API endpoint to get top categories data for semi-circle chart
 * This file connects to the database and returns category data in JSON format
 */

header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

// Database configuration
$db_host = 'localhost';
$db_name = 'irestora_plus';
$db_user = 'root';
$db_pass = '';

try {
    // Connect to database
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get date range from request (default to current month)
    $start_date = isset($_GET['start_date']) ? $_GET['start_date'] : date('Y-m-01');
    $end_date = isset($_GET['end_date']) ? $_GET['end_date'] : date('Y-m-t');
    $outlet_id = isset($_GET['outlet_id']) ? intval($_GET['outlet_id']) : 1;

    // Query to get top 5 categories by quantity sold
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

    $stmt = $pdo->prepare($query);
    $stmt->execute([
        ':outlet_id' => $outlet_id,
        ':start_date' => $start_date,
        ':end_date' => $end_date
    ]);

    $categories = $stmt->fetchAll(PDO::FETCH_OBJ);

    // Calculate total quantity
    $total_qty = 0;
    foreach ($categories as $cat) {
        $total_qty += $cat->totalQty;
    }

    // Build response array with percentages
    $data_array = array();
    foreach ($categories as $cat) {
        $item = new stdClass();
        $item->category_name = $cat->category_name;
        $item->totalQty = $cat->totalQty;
        $item->percentage = $total_qty > 0 ? round(($cat->totalQty * 100) / $total_qty, 0) : 0;
        $data_array[] = $item;
    }

    // Return JSON response
    echo json_encode([
        'success' => true,
        'data' => $data_array,
        'total' => $total_qty,
        'period' => [
            'start_date' => $start_date,
            'end_date' => $end_date
        ]
    ]);

} catch (PDOException $e) {
    // Return error response
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'error' => 'Database error: ' . $e->getMessage()
    ]);
}
?>
