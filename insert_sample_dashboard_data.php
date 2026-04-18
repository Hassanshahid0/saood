<?php
/**
 * Insert Sample Data for Dashboard
 * This script inserts sample data into the database tables to populate the Dashboard
 */

// Database configuration
$hostname = 'localhost';
$username = 'finasalt_rmsnew';
$password = 'Godisonly@1';
$database = 'finasalt_rmsnew';

// Create connection
$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully\n\n";
echo "Starting to insert sample data...\n\n";

// Sample data for current month
$currentMonth = date('m');
$currentYear = date('Y');
$firstDayOfMonth = date('Y-m-01');
$today = date('Y-m-d');

// Sample outlet ID and company ID (adjust these if needed)
$outlet_id = 1;
$company_id = 1;

$conn->begin_transaction();

try {
    // 1. Insert Sample Food Menu Categories
    echo "Inserting food menu categories...\n";
    $categories = [
        ['Main Course', 'Main course dishes'],
        ['Appetizers', 'Starter dishes'],
        ['Desserts', 'Sweet dishes'],
        ['Beverages', 'Drinks and beverages'],
        ['Salads', 'Fresh salads']
    ];
    
    $category_ids = [];
    foreach ($categories as $cat) {
        $stmt = $conn->prepare("INSERT INTO tbl_food_menu_categories (category_name, description, del_status) VALUES (?, ?, 'Live')");
        $stmt->bind_param("ss", $cat[0], $cat[1]);
        $stmt->execute();
        $category_ids[] = $conn->insert_id;
    }
    echo "  - Inserted " . count($categories) . " categories\n\n";

    // 2. Insert Sample Food Menus
    echo "Inserting food menus...\n";
    $food_menus = [
        ['Grilled Chicken', 1, 15.99, 1],
        ['Pasta Carbonara', 1, 12.99, 1],
        ['Caesar Salad', 5, 8.99, 1],
        ['Chocolate Cake', 3, 6.99, 1],
        ['Fresh Juice', 4, 4.99, 1],
        ['Spring Rolls', 2, 7.99, 1],
        ['Beef Steak', 1, 22.99, 1],
        ['Ice Cream', 3, 5.99, 1],
        ['Coffee', 4, 3.99, 1],
        ['Greek Salad', 5, 9.99, 1]
    ];
    
    $menu_ids = [];
    foreach ($food_menus as $menu) {
        $stmt = $conn->prepare("INSERT INTO tbl_food_menus (name, category_id, price, del_status) VALUES (?, ?, ?, 'Live')");
        $stmt->bind_param("sid", $menu[0], $menu[1], $menu[2]);
        $stmt->execute();
        $menu_ids[] = $conn->insert_id;
    }
    echo "  - Inserted " . count($food_menus) . " food menus\n\n";

    // 3. Insert Sample Customers
    echo "Inserting customers...\n";
    $customers = [
        ['John Doe', 'john@example.com', '1234567890', 'Regular Customer'],
        ['Jane Smith', 'jane@example.com', '0987654321', 'VIP Customer'],
        ['Mike Johnson', 'mike@example.com', '1122334455', 'Regular Customer'],
        ['Sarah Williams', 'sarah@example.com', '5566778899', 'Premium Customer'],
        ['David Brown', 'david@example.com', '6677889900', 'Regular Customer']
    ];
    
    $customer_ids = [];
    foreach ($customers as $customer) {
        $stmt = $conn->prepare("INSERT INTO tbl_customers (name, email, phone, type, company_id, del_status) VALUES (?, ?, ?, ?, ?, 'Live')");
        $stmt->bind_param("ssssi", $customer[0], $customer[1], $customer[2], $customer[3], $company_id);
        $stmt->execute();
        $customer_ids[] = $conn->insert_id;
    }
    echo "  - Inserted " . count($customers) . " customers\n\n";

    // 4. Insert Sample Sales
    echo "Inserting sales...\n";
    $sale_ids = [];
    $order_types = [1, 2, 3]; // 1=dine-in, 2=take-away, 3=delivery
    $payment_methods = [1, 2, 3]; // Cash, Card, Other
    
    for ($i = 0; $i < 50; $i++) {
        $sale_date = date('Y-m-d', strtotime("-" . rand(0, 30) . " days"));
        $customer_id = $customer_ids[array_rand($customer_ids)];
        $order_type = $order_types[array_rand($order_types)];
        $payment_method = $payment_methods[array_rand($payment_methods)];
        $total_payable = rand(50, 500);
        $paid_amount = $total_payable;
        $vat = round($total_payable * 0.1, 2);
        
        $stmt = $conn->prepare("INSERT INTO tbl_sales (customer_id, order_type, payment_method_id, sale_date, total_payable, paid_amount, vat, outlet_id, company_id, del_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 'Live')");
        $stmt->bind_param("iiisdddii", $customer_id, $order_type, $payment_method, $sale_date, $total_payable, $paid_amount, $vat, $outlet_id, $company_id);
        $stmt->execute();
        $sale_ids[] = $conn->insert_id;
    }
    echo "  - Inserted 50 sales\n\n";

    // 5. Insert Sample Sales Details
    echo "Inserting sales details...\n";
    foreach ($sale_ids as $sale_id) {
        $num_items = rand(1, 4);
        for ($j = 0; $j < $num_items; $j++) {
            $menu_id = $menu_ids[array_rand($menu_ids)];
            $qty = rand(1, 3);
            $price = rand(10, 50);
            
            $stmt = $conn->prepare("INSERT INTO tbl_sales_details (sales_id, food_menu_id, qty, price, del_status, outlet_id) VALUES (?, ?, ?, ?, 'Live', ?)");
            $stmt->bind_param("iiiii", $sale_id, $menu_id, $qty, $price, $outlet_id);
            $stmt->execute();
        }
    }
    echo "  - Inserted sales details\n\n";

    // 6. Insert Sample Expenses
    echo "Inserting expenses...\n";
    $expense_types = ['Electricity', 'Water', 'Rent', 'Salary', 'Maintenance'];
    foreach ($expense_types as $exp_type) {
        $amount = rand(500, 2000);
        $expense_date = date('Y-m-d', strtotime("-" . rand(0, 30) . " days"));
        
        $stmt = $conn->prepare("INSERT INTO tbl_expenses (expense_type, amount, date, outlet_id, del_status) VALUES (?, ?, ?, ?, 'Live')");
        $stmt->bind_param("sdsi", $exp_type, $amount, $expense_date, $outlet_id);
        $stmt->execute();
    }
    echo "  - Inserted " . count($expense_types) . " expenses\n\n";

    // 7. Insert Sample Wastes
    echo "Inserting wastes...\n";
    for ($i = 0; $i < 10; $i++) {
        $waste_date = date('Y-m-d', strtotime("-" . rand(0, 30) . " days"));
        $total_loss = rand(50, 300);
        
        $stmt = $conn->prepare("INSERT INTO tbl_wastes (date, total_loss, outlet_id, del_status) VALUES (?, ?, ?, 'Live')");
        $stmt->bind_param("sdi", $waste_date, $total_loss, $outlet_id);
        $stmt->execute();
    }
    echo "  - Inserted 10 wastes\n\n";

    // 8. Insert Sample Purchases
    echo "Inserting purchases...\n";
    for ($i = 0; $i < 15; $i++) {
        $purchase_date = date('Y-m-d', strtotime("-" . rand(0, 30) . " days"));
        $grand_total = rand(1000, 5000);
        $paid = $grand_total;
        $due = 0;
        
        $stmt = $conn->prepare("INSERT INTO tbl_purchase (date, grand_total, paid, due, outlet_id, del_status) VALUES (?, ?, ?, 0, ?, 'Live')");
        $stmt->bind_param("sddi", $purchase_date, $grand_total, $paid, $outlet_id);
        $stmt->execute();
    }
    echo "  - Inserted 15 purchases\n\n";

    // 9. Insert Sample Ingredients
    echo "Inserting ingredients...\n";
    $ingredients = [
        ['Chicken', 1, 'kg', 5.99],
        ['Pasta', 1, 'kg', 2.99],
        ['Lettuce', 5, 'kg', 1.99],
        ['Chocolate', 3, 'kg', 8.99],
        ['Orange', 4, 'kg', 3.99],
        ['Beef', 1, 'kg', 12.99],
        ['Cheese', 1, 'kg', 6.99],
        ['Tomato', 5, 'kg', 2.49],
        ['Coffee Beans', 4, 'kg', 15.99],
        ['Flour', 3, 'kg', 1.49]
    ];
    
    foreach ($ingredients as $ing) {
        $stmt = $conn->prepare("INSERT INTO tbl_ingredients (name, category_id, unit_id, price, company_id, del_status) VALUES (?, ?, ?, ?, ?, 'Live')");
        $stmt->bind_param("siiii", $ing[0], $ing[1], $ing[2], $ing[3], $company_id);
        $stmt->execute();
    }
    echo "  - Inserted " . count($ingredients) . " ingredients\n\n";

    $conn->commit();
    
    echo "\n========================================\n";
    echo "SUCCESS! Sample data inserted successfully!\n";
    echo "========================================\n\n";
    echo "Summary:\n";
    echo "- 5 food menu categories\n";
    echo "- 10 food menus\n";
    echo "- 5 customers\n";
    echo "- 50 sales records\n";
    echo "- Sales details for all sales\n";
    echo "- 5 expense records\n";
    echo "- 10 waste records\n";
    echo "- 15 purchase records\n";
    echo "- 10 ingredients\n\n";
    echo "Now you can view the Dashboard at: http://localhost:8000/Dashboard/dashboard\n";

} catch (Exception $e) {
    $conn->rollback();
    echo "\n========================================\n";
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "========================================\n";
    echo "Transaction rolled back. No data was inserted.\n";
}

$conn->close();
?>
