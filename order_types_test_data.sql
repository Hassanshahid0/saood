-- ============================================
-- ORDER TYPES - TEST DATA & VERIFICATION
-- Run this in phpMyAdmin to test the Order Types card
-- ============================================

-- Step 1: Verify the query works (Last 15 Days)
SELECT '=== LAST 15 DAYS ===' as test_type;
SELECT 
    CASE s.order_type
        WHEN 1 THEN 'Dine In'
        WHEN 2 THEN 'Take Away'
        WHEN 3 THEN 'Delivery'
        ELSE 'Other'
    END AS order_type_label,
    COUNT(DISTINCT s.id) AS total_orders,
    SUM(sd.qty) AS total_items,
    ROUND(SUM(sd.menu_price_with_discount * sd.qty), 2) AS total_revenue,
    ROUND(COUNT(DISTINCT s.id) * 100.0 / NULLIF(SUM(COUNT(DISTINCT s.id)) OVER(), 0), 2) AS percentage
FROM tbl_sales s
LEFT JOIN tbl_sales_details sd ON sd.sales_id = s.id AND sd.del_status = 'Live'
WHERE s.del_status = 'Live'
  AND s.order_status = 3
  AND s.sale_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 15 DAY) AND CURDATE()
  AND s.company_id = 1
  AND s.outlet_id = 1
GROUP BY s.order_type
ORDER BY total_orders DESC;

-- Step 2: Verify for Last 30 Days
SELECT '=== LAST 30 DAYS ===' as test_type;
SELECT 
    CASE s.order_type
        WHEN 1 THEN 'Dine In'
        WHEN 2 THEN 'Take Away'
        WHEN 3 THEN 'Delivery'
        ELSE 'Other'
    END AS order_type_label,
    COUNT(DISTINCT s.id) AS total_orders,
    SUM(sd.qty) AS total_items,
    ROUND(SUM(sd.menu_price_with_discount * sd.qty), 2) AS total_revenue,
    ROUND(COUNT(DISTINCT s.id) * 100.0 / NULLIF(SUM(COUNT(DISTINCT s.id)) OVER(), 0), 2) AS percentage
FROM tbl_sales s
LEFT JOIN tbl_sales_details sd ON sd.sales_id = s.id AND sd.del_status = 'Live'
WHERE s.del_status = 'Live'
  AND s.order_status = 3
  AND s.sale_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND CURDATE()
  AND s.company_id = 1
  AND s.outlet_id = 1
GROUP BY s.order_type
ORDER BY total_orders DESC;

-- Step 3: If no data, run these INSERT queries to add sample data

-- First, make sure we have customers
INSERT IGNORE INTO `tbl_customers` (`id`, `name`, `email`, `phone`, `type`, `company_id`, `del_status`) VALUES
(1, 'John Doe', 'john@example.com', '1234567890', 'Regular', 1, 'Live'),
(2, 'Jane Smith', 'jane@example.com', '0987654321', 'VIP', 1, 'Live'),
(3, 'Mike Johnson', 'mike@example.com', '1122334455', 'Regular', 1, 'Live');

-- Insert Dine In orders (order_type = 1) - 40% of total
INSERT INTO `tbl_sales` 
(`customer_id`, `order_type`, `payment_method_id`, `sale_date`, `total_payable`, `paid_amount`, `vat`, `outlet_id`, `company_id`, `order_status`, `del_status`) VALUES
-- Last 15 days - Dine In (10 orders)
(1, 1, 1, CURDATE(), 50.00, 50.00, 5.00, 1, 1, 3, 'Live'),
(1, 1, 1, CURDATE(), 75.00, 75.00, 7.50, 1, 1, 3, 'Live'),
(2, 1, 1, DATE_SUB(CURDATE(), INTERVAL 1 DAY), 120.00, 120.00, 12.00, 1, 1, 3, 'Live'),
(2, 1, 1, DATE_SUB(CURDATE(), INTERVAL 2 DAY), 45.00, 45.00, 4.50, 1, 1, 3, 'Live'),
(3, 1, 1, DATE_SUB(CURDATE(), INTERVAL 3 DAY), 85.00, 85.00, 8.50, 1, 1, 3, 'Live'),
(1, 1, 1, DATE_SUB(CURDATE(), INTERVAL 5 DAY), 200.00, 200.00, 20.00, 1, 1, 3, 'Live'),
(2, 1, 1, DATE_SUB(CURDATE(), INTERVAL 7 DAY), 150.00, 150.00, 15.00, 1, 1, 3, 'Live'),
(3, 1, 1, DATE_SUB(CURDATE(), INTERVAL 10 DAY), 95.00, 95.00, 9.50, 1, 1, 3, 'Live'),
(1, 1, 1, DATE_SUB(CURDATE(), INTERVAL 12 DAY), 65.00, 65.00, 6.50, 1, 1, 3, 'Live'),
(2, 1, 1, DATE_SUB(CURDATE(), INTERVAL 14 DAY), 180.00, 180.00, 18.00, 1, 1, 3, 'Live');

-- Insert Take Away orders (order_type = 2) - 35% of total
INSERT INTO `tbl_sales` 
(`customer_id`, `order_type`, `payment_method_id`, `sale_date`, `total_payable`, `paid_amount`, `vat`, `outlet_id`, `company_id`, `order_status`, `del_status`) VALUES
-- Last 15 days - Take Away (9 orders)
(3, 2, 2, CURDATE(), 110.00, 110.00, 11.00, 1, 1, 3, 'Live'),
(1, 2, 2, DATE_SUB(CURDATE(), INTERVAL 1 DAY), 55.00, 55.00, 5.50, 1, 1, 3, 'Live'),
(2, 2, 2, DATE_SUB(CURDATE(), INTERVAL 2 DAY), 130.00, 130.00, 13.00, 1, 1, 3, 'Live'),
(3, 2, 2, DATE_SUB(CURDATE(), INTERVAL 4 DAY), 90.00, 90.00, 9.00, 1, 1, 3, 'Live'),
(1, 2, 2, DATE_SUB(CURDATE(), INTERVAL 6 DAY), 160.00, 160.00, 16.00, 1, 1, 3, 'Live'),
(2, 2, 2, DATE_SUB(CURDATE(), INTERVAL 8 DAY), 75.00, 75.00, 7.50, 1, 1, 3, 'Live'),
(3, 2, 2, DATE_SUB(CURDATE(), INTERVAL 9 DAY), 145.00, 145.00, 14.50, 1, 1, 3, 'Live'),
(1, 2, 2, DATE_SUB(CURDATE(), INTERVAL 11 DAY), 85.00, 85.00, 8.50, 1, 1, 3, 'Live'),
(2, 2, 2, DATE_SUB(CURDATE(), INTERVAL 13 DAY), 125.00, 125.00, 12.50, 1, 1, 3, 'Live');

-- Insert Delivery orders (order_type = 3) - 25% of total
INSERT INTO `tbl_sales` 
(`customer_id`, `order_type`, `payment_method_id`, `sale_date`, `total_payable`, `paid_amount`, `vat`, `outlet_id`, `company_id`, `order_status`, `del_status`) VALUES
-- Last 15 days - Delivery (6 orders)
(3, 3, 3, CURDATE(), 90.00, 90.00, 9.00, 1, 1, 3, 'Live'),
(1, 3, 3, DATE_SUB(CURDATE(), INTERVAL 2 DAY), 65.00, 65.00, 6.50, 1, 1, 3, 'Live'),
(2, 3, 3, DATE_SUB(CURDATE(), INTERVAL 5 DAY), 180.00, 180.00, 18.00, 1, 1, 3, 'Live'),
(3, 3, 3, DATE_SUB(CURDATE(), INTERVAL 7 DAY), 150.00, 150.00, 15.00, 1, 1, 3, 'Live'),
(1, 3, 3, DATE_SUB(CURDATE(), INTERVAL 10 DAY), 110.00, 110.00, 11.00, 1, 1, 3, 'Live'),
(2, 3, 3, DATE_SUB(CURDATE(), INTERVAL 14 DAY), 130.00, 130.00, 13.00, 1, 1, 3, 'Live');

-- Now insert sales details for these orders
-- Get the latest sale IDs (they should be the highest IDs now)
-- Assuming max sale ID was 15, new ones will be 16-40

-- Sales details for Dine In orders (sales_id 16-25)
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(16, 1, 3, 15.99, 15.99, 'Live', 1),
(16, 2, 2, 12.99, 12.99, 'Live', 1),
(17, 3, 4, 22.99, 22.99, 'Live', 1),
(17, 1, 2, 15.99, 15.99, 'Live', 1),
(18, 2, 3, 12.99, 12.99, 'Live', 1),
(18, 4, 2, 7.99, 7.99, 'Live', 1),
(19, 3, 2, 22.99, 22.99, 'Live', 1),
(20, 1, 5, 15.99, 15.99, 'Live', 1),
(20, 2, 3, 12.99, 12.99, 'Live', 1),
(21, 3, 4, 22.99, 22.99, 'Live', 1),
(22, 1, 6, 15.99, 15.99, 'Live', 1),
(23, 2, 3, 12.99, 12.99, 'Live', 1),
(24, 3, 2, 22.99, 22.99, 'Live', 1),
(25, 1, 3, 15.99, 15.99, 'Live', 1),
(25, 2, 4, 12.99, 12.99, 'Live', 1);

-- Sales details for Take Away orders (sales_id 26-34)
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(26, 4, 2, 7.99, 7.99, 'Live', 1),
(26, 5, 3, 5.99, 5.99, 'Live', 1),
(27, 6, 2, 6.99, 6.99, 'Live', 1),
(28, 7, 3, 5.99, 5.99, 'Live', 1),
(28, 8, 4, 4.99, 4.99, 'Live', 1),
(29, 9, 3, 3.99, 3.99, 'Live', 1),
(30, 10, 2, 8.99, 8.99, 'Live', 1),
(31, 11, 1, 9.99, 9.99, 'Live', 1),
(32, 1, 4, 15.99, 15.99, 'Live', 1),
(33, 2, 3, 12.99, 12.99, 'Live', 1),
(34, 3, 5, 22.99, 22.99, 'Live', 1);

-- Sales details for Delivery orders (sales_id 35-40)
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(35, 4, 2, 7.99, 7.99, 'Live', 1),
(35, 6, 3, 6.99, 6.99, 'Live', 1),
(36, 8, 5, 4.99, 4.99, 'Live', 1),
(37, 9, 4, 3.99, 3.99, 'Live', 1),
(38, 10, 3, 8.99, 8.99, 'Live', 1),
(39, 11, 2, 9.99, 9.99, 'Live', 1),
(40, 1, 4, 15.99, 15.99, 'Live', 1),
(40, 2, 3, 12.99, 12.99, 'Live', 1);

-- ============================================
-- FINAL VERIFICATION - Run this to see what dashboard will show
-- ============================================
SELECT '=== FINAL TEST: LAST 15 DAYS ===' as test_type;
SELECT 
    CASE s.order_type
        WHEN 1 THEN 'Dine In'
        WHEN 2 THEN 'Take Away'
        WHEN 3 THEN 'Delivery'
        ELSE 'Other'
    END AS order_type_label,
    COUNT(DISTINCT s.id) AS total_orders,
    SUM(sd.qty) AS total_items,
    ROUND(SUM(sd.menu_price_with_discount * sd.qty), 2) AS total_revenue,
    ROUND(COUNT(DISTINCT s.id) * 100.0 / NULLIF(SUM(COUNT(DISTINCT s.id)) OVER(), 0), 2) AS percentage
FROM tbl_sales s
LEFT JOIN tbl_sales_details sd ON sd.sales_id = s.id AND sd.del_status = 'Live'
WHERE s.del_status = 'Live'
  AND s.order_status = 3
  AND s.sale_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 15 DAY) AND CURDATE()
  AND s.company_id = 1
  AND s.outlet_id = 1
GROUP BY s.order_type
ORDER BY total_orders DESC;

-- Expected Result:
-- Dine In: ~40% (10 orders)
-- Take Away: ~35% (9 orders)
-- Delivery: ~25% (6 orders)
