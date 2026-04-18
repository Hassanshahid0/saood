-- ============================================
-- VERIFICATION & INSERT QUERY FOR DASHBOARD
-- Run this in phpMyAdmin to test the dashboard
-- ============================================

-- Step 1: First, verify your categories query works correctly
-- This is the EXACT query that will be used by the dashboard now:

SELECT 
    fmc.category_name,
    SUM(sd.qty) AS total_qty,
    SUM(sd.menu_price_with_discount * sd.qty) AS total_revenue,
    ROUND((SUM(sd.menu_price_with_discount * sd.qty) * 100.0 / NULLIF(SUM(SUM(sd.menu_price_with_discount * sd.qty)) OVER(), 0)), 2) AS percentage
FROM tbl_sales_details sd
JOIN tbl_sales s ON s.id = sd.sales_id
JOIN tbl_food_menus fm ON fm.id = sd.food_menu_id
JOIN tbl_food_menu_categories fmc ON fmc.id = fm.category_id
WHERE sd.del_status = 'Live'
  AND s.del_status = 'Live'
  AND fmc.del_status = 'Live'
  AND s.order_status = 3
  AND s.company_id = 1
  AND s.outlet_id = 1
  AND s.sale_date BETWEEN DATE_FORMAT(CURDATE(), '%Y-%m-01') AND CURDATE()
GROUP BY fmc.id, fmc.category_name
ORDER BY total_revenue DESC
LIMIT 5;

-- Step 2: If the above returns data, your dashboard should work!
-- If it returns empty, run the INSERT queries below:

-- ============================================
-- SAMPLE DATA INSERTION (Run if query above is empty)
-- ============================================

-- Insert categories if not exists
INSERT IGNORE INTO `tbl_food_menu_categories` (`id`, `category_name`, `description`, `del_status`) VALUES
(1, 'Main Course', 'Main course dishes', 'Live'),
(2, 'Appetizers', 'Starter dishes', 'Live'),
(3, 'Desserts', 'Sweet dishes', 'Live'),
(4, 'Beverages', 'Drinks and beverages', 'Live'),
(5, 'Salads', 'Fresh salads', 'Live');

-- Insert food menus if not exists
INSERT IGNORE INTO `tbl_food_menus` (`id`, `name`, `category_id`, `price`, `del_status`) VALUES
(1, 'Grilled Chicken', 1, 15.99, 'Live'),
(2, 'Pasta Carbonara', 1, 12.99, 'Live'),
(3, 'Beef Steak', 1, 22.99, 'Live'),
(4, 'Spring Rolls', 2, 7.99, 'Live'),
(5, 'Garlic Bread', 2, 5.99, 'Live'),
(6, 'Chocolate Cake', 3, 6.99, 'Live'),
(7, 'Ice Cream', 3, 5.99, 'Live'),
(8, 'Fresh Juice', 4, 4.99, 'Live'),
(9, 'Coffee', 4, 3.99, 'Live'),
(10, 'Caesar Salad', 5, 8.99, 'Live'),
(11, 'Greek Salad', 5, 9.99, 'Live');

-- Insert customers if not exists
INSERT IGNORE INTO `tbl_customers` (`id`, `name`, `email`, `phone`, `type`, `company_id`, `del_status`) VALUES
(1, 'John Doe', 'john@example.com', '1234567890', 'Regular', 1, 'Live'),
(2, 'Jane Smith', 'jane@example.com', '0987654321', 'VIP', 1, 'Live'),
(3, 'Mike Johnson', 'mike@example.com', '1122334455', 'Regular', 1, 'Live');

-- Insert sales (15 sales in the current month)
-- These will automatically appear in "This Month" filter
INSERT INTO `tbl_sales` 
(`customer_id`, `order_type`, `payment_method_id`, `sale_date`, `total_payable`, `paid_amount`, `vat`, `outlet_id`, `company_id`, `order_status`, `del_status`) VALUES
(1, 1, 1, CURDATE(), 50.00, 50.00, 5.00, 1, 1, 3, 'Live'),
(1, 1, 1, CURDATE(), 75.00, 75.00, 7.50, 1, 1, 3, 'Live'),
(2, 2, 2, DATE_SUB(CURDATE(), INTERVAL 1 DAY), 120.00, 120.00, 12.00, 1, 1, 3, 'Live'),
(2, 1, 1, DATE_SUB(CURDATE(), INTERVAL 2 DAY), 45.00, 45.00, 4.50, 1, 1, 3, 'Live'),
(3, 3, 3, DATE_SUB(CURDATE(), INTERVAL 3 DAY), 85.00, 85.00, 8.50, 1, 1, 3, 'Live'),
(1, 1, 1, DATE_SUB(CURDATE(), INTERVAL 5 DAY), 200.00, 200.00, 20.00, 1, 1, 3, 'Live'),
(2, 2, 2, DATE_SUB(CURDATE(), INTERVAL 7 DAY), 150.00, 150.00, 15.00, 1, 1, 3, 'Live'),
(3, 1, 1, DATE_SUB(CURDATE(), INTERVAL 10 DAY), 95.00, 95.00, 9.50, 1, 1, 3, 'Live'),
(1, 3, 3, DATE_SUB(CURDATE(), INTERVAL 12 DAY), 65.00, 65.00, 6.50, 1, 1, 3, 'Live'),
(2, 1, 1, DATE_SUB(CURDATE(), INTERVAL 15 DAY), 180.00, 180.00, 18.00, 1, 1, 3, 'Live'),
(3, 2, 2, DATE_SUB(CURDATE(), INTERVAL 18 DAY), 110.00, 110.00, 11.00, 1, 1, 3, 'Live'),
(1, 1, 1, DATE_SUB(CURDATE(), INTERVAL 20 DAY), 55.00, 55.00, 5.50, 1, 1, 3, 'Live'),
(2, 1, 1, DATE_SUB(CURDATE(), INTERVAL 22 DAY), 130.00, 130.00, 13.00, 1, 1, 3, 'Live'),
(3, 3, 3, DATE_SUB(CURDATE(), INTERVAL 25 DAY), 90.00, 90.00, 9.00, 1, 1, 3, 'Live'),
(1, 1, 1, DATE_SUB(CURDATE(), INTERVAL 28 DAY), 160.00, 160.00, 16.00, 1, 1, 3, 'Live');

-- Insert sales details linking sales to food menus
-- Main Course (menus 1,2,3) - Highest revenue
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(1, 1, 3, 15.99, 15.99, 'Live', 1),
(1, 2, 2, 12.99, 12.99, 'Live', 1),
(2, 3, 4, 22.99, 22.99, 'Live', 1),
(3, 1, 5, 15.99, 15.99, 'Live', 1),
(3, 2, 3, 12.99, 12.99, 'Live', 1),
(4, 3, 2, 22.99, 22.99, 'Live', 1),
(5, 1, 3, 15.99, 15.99, 'Live', 1),
(6, 2, 4, 12.99, 12.99, 'Live', 1),
(7, 3, 2, 22.99, 22.99, 'Live', 1),
(8, 1, 6, 15.99, 15.99, 'Live', 1),
(9, 2, 3, 12.99, 12.99, 'Live', 1),
(10, 3, 5, 22.99, 22.99, 'Live', 1),
(11, 1, 2, 15.99, 15.99, 'Live', 1),
(12, 2, 4, 12.99, 12.99, 'Live', 1),
(13, 3, 3, 22.99, 22.99, 'Live', 1),
(14, 1, 2, 15.99, 15.99, 'Live', 1),
(15, 2, 3, 12.99, 12.99, 'Live', 1);

-- Appetizers (menus 4,5) - Medium revenue
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(1, 4, 2, 7.99, 7.99, 'Live', 1),
(2, 5, 3, 5.99, 5.99, 'Live', 1),
(3, 4, 4, 7.99, 7.99, 'Live', 1),
(5, 5, 2, 5.99, 5.99, 'Live', 1),
(6, 4, 3, 7.99, 7.99, 'Live', 1),
(8, 5, 4, 5.99, 5.99, 'Live', 1),
(10, 4, 2, 7.99, 7.99, 'Live', 1),
(12, 5, 3, 5.99, 5.99, 'Live', 1);

-- Desserts (menus 6,7) - Medium revenue
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(2, 6, 2, 6.99, 6.99, 'Live', 1),
(4, 7, 3, 5.99, 5.99, 'Live', 1),
(6, 6, 4, 6.99, 6.99, 'Live', 1),
(7, 7, 2, 5.99, 5.99, 'Live', 1),
(9, 6, 3, 6.99, 6.99, 'Live', 1),
(11, 7, 4, 5.99, 5.99, 'Live', 1),
(13, 6, 2, 6.99, 6.99, 'Live', 1);

-- Beverages (menus 8,9) - High volume, lower price
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(1, 8, 5, 4.99, 4.99, 'Live', 1),
(2, 9, 4, 3.99, 3.99, 'Live', 1),
(4, 8, 6, 4.99, 4.99, 'Live', 1),
(5, 9, 3, 3.99, 3.99, 'Live', 1),
(7, 8, 5, 4.99, 4.99, 'Live', 1),
(8, 9, 4, 3.99, 3.99, 'Live', 1),
(9, 8, 7, 4.99, 4.99, 'Live', 1),
(10, 9, 5, 3.99, 3.99, 'Live', 1),
(11, 8, 3, 4.99, 4.99, 'Live', 1),
(14, 9, 6, 3.99, 3.99, 'Live', 1);

-- Salads (menus 10,11) - Lower revenue
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(3, 10, 2, 8.99, 8.99, 'Live', 1),
(5, 11, 1, 9.99, 9.99, 'Live', 1),
(12, 10, 3, 8.99, 8.99, 'Live', 1),
(15, 11, 2, 9.99, 9.99, 'Live', 1);

-- ============================================
-- FINAL VERIFICATION - Run this to see what dashboard will show
-- ============================================
SELECT 
    fmc.category_name,
    SUM(sd.qty) AS total_qty,
    SUM(sd.menu_price_with_discount * sd.qty) AS total_revenue,
    ROUND((SUM(sd.menu_price_with_discount * sd.qty) * 100.0 / NULLIF(SUM(SUM(sd.menu_price_with_discount * sd.qty)) OVER(), 0)), 2) AS percentage
FROM tbl_sales_details sd
JOIN tbl_sales s ON s.id = sd.sales_id
JOIN tbl_food_menus fm ON fm.id = sd.food_menu_id
JOIN tbl_food_menu_categories fmc ON fmc.id = fm.category_id
WHERE sd.del_status = 'Live'
  AND s.del_status = 'Live'
  AND fmc.del_status = 'Live'
  AND s.order_status = 3
  AND s.company_id = 1
  AND s.outlet_id = 1
  AND s.sale_date BETWEEN DATE_FORMAT(CURDATE(), '%Y-%m-01') AND CURDATE()
GROUP BY fmc.id, fmc.category_name
ORDER BY total_revenue DESC
LIMIT 5;
