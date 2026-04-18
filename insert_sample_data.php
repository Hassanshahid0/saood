<?php
/**
 * Script to insert sample category and sales data for testing
 * Run this script once to populate the database with test data
 */

header('Content-Type: text/html; charset=utf-8');

// Database configuration
$db_host = 'localhost';
$db_name = 'irestora_plus';
$db_user = 'root';
$db_pass = '';

try {
    // Connect to database
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "<h2>Inserting Sample Data for Semi Pie Chart Testing</h2>";
    echo "<hr>";

    // Step 1: Insert sample categories
    $categories = [
        ['Sea Food', 'Fresh seafood items'],
        ['Beverages', 'Hot and cold beverages'],
        ['Dessert', 'Sweet treats and desserts'],
        ['Pasta', 'Italian pasta dishes'],
        ['Salads', 'Fresh garden salads'],
        ['Pizza', 'Wood-fired pizzas'],
        ['Burgers', 'Gourmet burgers'],
        ['Soups', 'Hot soups and stews']
    ];

    echo "<h3>Step 1: Adding Sample Categories</h3>";
    $category_ids = [];
    
    $stmt = $pdo->prepare("INSERT INTO tbl_food_menu_categories (category_name, description, del_status, order_by) VALUES (?, ?, 'Live', 0)");
    
    foreach ($categories as $index => $cat) {
        // Check if category already exists
        $check = $pdo->prepare("SELECT id FROM tbl_food_menu_categories WHERE category_name = ?");
        $check->execute([$cat[0]]);
        $existing = $check->fetch(PDO::FETCH_COLUMN);
        
        if ($existing) {
            $category_ids[] = $existing;
            echo "<p>✓ Category '{$cat[0]}' already exists (ID: $existing)</p>";
        } else {
            $stmt->execute([$cat[0], $cat[1]]);
            $cat_id = $pdo->lastInsertId();
            $category_ids[] = $cat_id;
            echo "<p>✓ Added category '{$cat[0]}' (ID: $cat_id)</p>";
        }
    }

    // Step 2: Insert sample food menu items
    echo "<h3>Step 2: Adding Sample Food Menu Items</h3>";
    
    $menu_items = [
        ['Grilled Salmon', 'Fresh grilled salmon', $category_ids[0], 25.00],
        ['Shrimp Cocktail', 'Classic shrimp cocktail', $category_ids[0], 18.00],
        ['Fish Tacos', 'Delicious fish tacos', $category_ids[0], 15.00],
        ['Iced Coffee', 'Cold brew coffee', $category_ids[1], 4.50],
        ['Lemonade', 'Fresh squeezed lemonade', $category_ids[1], 3.50],
        ['Smoothie', 'Mixed fruit smoothie', $category_ids[1], 6.00],
        ['Chocolate Cake', 'Rich chocolate cake', $category_ids[2], 8.00],
        ['Ice Cream', 'Vanilla ice cream', $category_ids[2], 5.00],
        ['Tiramisu', 'Classic tiramisu', $category_ids[2], 9.00],
        ['Spaghetti', 'Traditional spaghetti', $category_ids[3], 14.00],
        ['Lasagna', 'Home-style lasagna', $category_ids[3], 16.00],
        ['Fettuccine', 'Creamy fettuccine', $category_ids[3], 15.00],
        ['Caesar Salad', 'Classic caesar salad', $category_ids[4], 10.00],
        ['Greek Salad', 'Fresh greek salad', $category_ids[4], 11.00],
        ['Garden Salad', 'Mixed garden salad', $category_ids[4], 9.00],
        ['Margherita Pizza', 'Classic margherita', $category_ids[5], 12.00],
        ['Pepperoni Pizza', 'Pepperoni special', $category_ids[5], 14.00],
        ['Veggie Pizza', 'Fresh veggie pizza', $category_ids[5], 13.00],
        ['Classic Burger', 'Beef burger', $category_ids[6], 11.00],
        ['Chicken Burger', 'Grilled chicken burger', $category_ids[6], 12.00],
        ['Veggie Burger', 'Vegetarian burger', $category_ids[6], 10.00],
        ['Tomato Soup', 'Homemade tomato soup', $category_ids[7], 7.00],
        ['Chicken Soup', 'Classic chicken soup', $category_ids[7], 8.00],
        ['Mushroom Soup', 'Creamy mushroom soup', $category_ids[7], 7.50]
    ];

    $menu_item_ids = [];
    $stmt = $pdo->prepare("INSERT INTO tbl_food_menus (category_id, item_name, description, price, del_status) VALUES (?, ?, ?, ?, 'Live')");
    
    foreach ($menu_items as $item) {
        // Check if menu item already exists
        $check = $pdo->prepare("SELECT id FROM tbl_food_menus WHERE item_name = ?");
        $check->execute([$item[1]]);
        $existing = $check->fetch(PDO::FETCH_COLUMN);
        
        if ($existing) {
            $menu_item_ids[] = $existing;
            echo "<p>✓ Menu item '{$item[1]}' already exists (ID: $existing)</p>";
        } else {
            $stmt->execute([$item[2], $item[1], $item[1], $item[3]]);
            $menu_id = $pdo->lastInsertId();
            $menu_item_ids[] = $menu_id;
            echo "<p>✓ Added menu item '{$item[1]}' (ID: $menu_id)</p>";
        }
    }

    // Step 3: Insert sample sales data for current month
    echo "<h3>Step 3: Adding Sample Sales Data</h3>";
    
    $outlet_id = 1;
    $company_id = 1;
    $current_month = date('Y-m');
    $today = date('Y-m-d');
    
    // Sales quantities for different items (to create varied category totals)
    $sales_quantities = [
        // Sea Food (items 0-2) - Total: ~50
        15, 20, 15,
        // Beverages (items 3-5) - Total: ~30
        12, 10, 8,
        // Dessert (items 6-8) - Total: ~15
        6, 5, 4,
        // Pasta (items 9-11) - Total: ~5
        2, 2, 1,
        // Salads (items 12-14) - Total: ~25
        10, 8, 7,
        // Pizza (items 15-17) - Total: ~35
        15, 12, 8,
        // Burgers (items 18-20) - Total: ~28
        12, 10, 6,
        // Soups (items 21-23) - Total: ~20
        8, 7, 5
    ];

    $sales_stmt = $pdo->prepare("INSERT INTO tbl_sales (customer_id, sale_no, total_items, sub_total, paid_amount, due_amount, vat, total_payable, sale_date, order_type, order_status, outlet_id, company_id, del_status) VALUES (1, ?, 1, ?, ?, 0, 0, ?, ?, 1, 'Completed', ?, ?, 'Live')");
    
    $detail_stmt = $pdo->prepare("INSERT INTO tbl_sales_details (sales_id, food_menu_id, menu_name, qty, menu_price_without_discount, menu_price_with_discount, menu_vat_percentage, del_status) VALUES (?, ?, ?, ?, ?, ?, 0, 'Live')");

    $sale_count = 0;
    
    foreach ($sales_quantities as $index => $qty) {
        if ($qty > 0 && isset($menu_item_ids[$index])) {
            $menu_id = $menu_item_ids[$index];
            $menu_name = $menu_items[$index][1];
            $price = $menu_items[$index][3];
            $total = $price * $qty;
            
            // Generate sale number
            $sale_no = 'SL-' . $current_month . '-' . str_pad($sale_count + 1000, 5, '0', STR_PAD_LEFT);
            
            // Random sale date within current month
            $day = rand(1, intval(date('d')));
            $sale_date = date('Y-m-', strtotime($current_month)) . str_pad($day, 2, '0', STR_PAD_LEFT);
            
            // Insert sale
            $sales_stmt->execute([
                $sale_no,
                $total,
                $total,
                $total,
                $sale_date,
                $outlet_id,
                $company_id
            ]);
            
            $sales_id = $pdo->lastInsertId();
            
            // Insert sale detail
            $detail_stmt->execute([
                $sales_id,
                $menu_id,
                $menu_name,
                $qty,
                $price,
                $price,
                0
            ]);
            
            $sale_count++;
            echo "<p>✓ Sale #$sale_no - $menu_name x$qty ($sale_date)</p>";
        }
    }

    echo "<hr>";
    echo "<h3>Summary</h3>";
    echo "<p><strong>Total Categories:</strong> " . count($categories) . "</p>";
    echo "<p><strong>Total Menu Items:</strong> " . count($menu_items) . "</p>";
    echo "<p><strong>Total Sales Records:</strong> $sale_count</p>";
    echo "<hr>";
    echo "<p style='color: green; font-weight: bold;'>✓ Sample data insertion complete!</p>";
    echo "<p><a href='get_categories.php' target='_blank'>View Categories JSON Data</a></p>";
    echo "<p><a href='semi_circle_chart_card.html' target='_blank'>View Semi Pie Chart</a></p>";

} catch (PDOException $e) {
    echo "<p style='color: red; font-weight: bold;'>Error: " . htmlspecialchars($e->getMessage()) . "</p>";
}
?>
