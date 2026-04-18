-- ============================================
-- VERIFY CATEGORY DATA FOR DIFFERENT DATE RANGES
-- Run these queries to test the date range selector
-- ============================================

-- Test 1: Last 15 Days (Default)
SELECT '=== LAST 15 DAYS ===' as test_type;
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
  AND s.sale_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 15 DAY) AND CURDATE()
GROUP BY fmc.id, fmc.category_name
ORDER BY total_revenue DESC
LIMIT 5;

-- Test 2: Last 30 Days
SELECT '=== LAST 30 DAYS ===' as test_type;
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
  AND s.sale_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 30 DAY) AND CURDATE()
GROUP BY fmc.id, fmc.category_name
ORDER BY total_revenue DESC
LIMIT 5;

-- Test 3: Last 60 Days
SELECT '=== LAST 60 DAYS ===' as test_type;
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
  AND s.sale_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 60 DAY) AND CURDATE()
GROUP BY fmc.id, fmc.category_name
ORDER BY total_revenue DESC
LIMIT 5;

-- Test 4: Custom Range (April 1-15, 2026)
SELECT '=== CUSTOM: APR 1-15, 2026 ===' as test_type;
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
  AND s.sale_date BETWEEN '2026-04-01' AND '2026-04-15'
GROUP BY fmc.id, fmc.category_name
ORDER BY total_revenue DESC
LIMIT 5;

-- ============================================
-- ADD MORE SAMPLE DATA IF NEEDED
-- Run this if any of the above queries return empty
-- ============================================

-- Insert more sales with different dates to cover 60 days
INSERT INTO `tbl_sales` 
(`customer_id`, `order_type`, `payment_method_id`, `sale_date`, `total_payable`, `paid_amount`, `vat`, `outlet_id`, `company_id`, `order_status`, `del_status`) VALUES
-- 20-30 days ago
(1, 1, 1, DATE_SUB(CURDATE(), INTERVAL 20 DAY), 145.00, 145.00, 14.50, 1, 1, 3, 'Live'),
(2, 2, 2, DATE_SUB(CURDATE(), INTERVAL 22 DAY), 185.00, 185.00, 18.50, 1, 1, 3, 'Live'),
(3, 1, 1, DATE_SUB(CURDATE(), INTERVAL 25 DAY), 95.00, 95.00, 9.50, 1, 1, 3, 'Live'),
(1, 3, 3, DATE_SUB(CURDATE(), INTERVAL 28 DAY), 220.00, 220.00, 22.00, 1, 1, 3, 'Live'),
(2, 1, 1, DATE_SUB(CURDATE(), INTERVAL 30 DAY), 165.00, 165.00, 16.50, 1, 1, 3, 'Live'),
-- 30-45 days ago
(3, 2, 2, DATE_SUB(CURDATE(), INTERVAL 35 DAY), 135.00, 135.00, 13.50, 1, 1, 3, 'Live'),
(1, 1, 1, DATE_SUB(CURDATE(), INTERVAL 38 DAY), 175.00, 175.00, 17.50, 1, 1, 3, 'Live'),
(2, 3, 3, DATE_SUB(CURDATE(), INTERVAL 40 DAY), 115.00, 115.00, 11.50, 1, 1, 3, 'Live'),
(3, 1, 1, DATE_SUB(CURDATE(), INTERVAL 42 DAY), 205.00, 205.00, 20.50, 1, 1, 3, 'Live'),
(1, 2, 2, DATE_SUB(CURDATE(), INTERVAL 45 DAY), 155.00, 155.00, 15.50, 1, 1, 3, 'Live'),
-- 45-60 days ago
(2, 1, 1, DATE_SUB(CURDATE(), INTERVAL 48 DAY), 125.00, 125.00, 12.50, 1, 1, 3, 'Live'),
(3, 3, 3, DATE_SUB(CURDATE(), INTERVAL 50 DAY), 195.00, 195.00, 19.50, 1, 1, 3, 'Live'),
(1, 1, 1, DATE_SUB(CURDATE(), INTERVAL 53 DAY), 145.00, 145.00, 14.50, 1, 1, 3, 'Live'),
(2, 2, 2, DATE_SUB(CURDATE(), INTERVAL 55 DAY), 165.00, 165.00, 16.50, 1, 1, 3, 'Live'),
(3, 1, 1, DATE_SUB(CURDATE(), INTERVAL 58 DAY), 185.00, 185.00, 18.50, 1, 1, 3, 'Live');

-- Get the IDs of the newly inserted sales (they will be the highest IDs)
-- You may need to adjust the sales_id values based on your actual max ID

-- Insert sales details for the new sales (IDs 16-30 assuming max ID was 15)
-- Main Course (menus 1,2,3)
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(16, 1, 4, 15.99, 15.99, 'Live', 1),
(16, 2, 3, 12.99, 12.99, 'Live', 1),
(17, 3, 5, 22.99, 22.99, 'Live', 1),
(17, 1, 2, 15.99, 15.99, 'Live', 1),
(18, 2, 4, 12.99, 12.99, 'Live', 1),
(19, 3, 3, 22.99, 22.99, 'Live', 1),
(19, 1, 2, 15.99, 15.99, 'Live', 1),
(20, 2, 5, 12.99, 12.99, 'Live', 1),
(20, 3, 2, 22.99, 22.99, 'Live', 1),
(21, 1, 4, 15.99, 15.99, 'Live', 1),
(22, 2, 3, 12.99, 12.99, 'Live', 1),
(23, 3, 4, 22.99, 22.99, 'Live', 1),
(24, 1, 3, 15.99, 15.99, 'Live', 1),
(24, 2, 2, 12.99, 12.99, 'Live', 1),
(25, 3, 5, 22.99, 22.99, 'Live', 1),
(26, 1, 4, 15.99, 15.99, 'Live', 1),
(27, 2, 3, 12.99, 12.99, 'Live', 1),
(27, 3, 2, 22.99, 22.99, 'Live', 1),
(28, 1, 5, 15.99, 15.99, 'Live', 1),
(29, 2, 4, 12.99, 12.99, 'Live', 1),
(30, 3, 3, 22.99, 22.99, 'Live', 1);

-- Appetizers (menus 4,5)
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(16, 4, 3, 7.99, 7.99, 'Live', 1),
(17, 5, 2, 5.99, 5.99, 'Live', 1),
(18, 4, 4, 7.99, 7.99, 'Live', 1),
(19, 5, 3, 5.99, 5.99, 'Live', 1),
(20, 4, 2, 7.99, 7.99, 'Live', 1),
(22, 5, 4, 5.99, 5.99, 'Live', 1),
(24, 4, 3, 7.99, 7.99, 'Live', 1),
(26, 5, 2, 5.99, 5.99, 'Live', 1),
(28, 4, 4, 7.99, 7.99, 'Live', 1),
(30, 5, 3, 5.99, 5.99, 'Live', 1);

-- Desserts (menus 6,7)
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(16, 6, 2, 6.99, 6.99, 'Live', 1),
(18, 7, 3, 5.99, 5.99, 'Live', 1),
(20, 6, 4, 6.99, 6.99, 'Live', 1),
(21, 7, 2, 5.99, 5.99, 'Live', 1),
(23, 6, 3, 6.99, 6.99, 'Live', 1),
(25, 7, 4, 5.99, 5.99, 'Live', 1),
(27, 6, 2, 6.99, 6.99, 'Live', 1),
(29, 7, 3, 5.99, 5.99, 'Live', 1);

-- Beverages (menus 8,9)
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(16, 8, 6, 4.99, 4.99, 'Live', 1),
(17, 9, 5, 3.99, 3.99, 'Live', 1),
(18, 8, 4, 4.99, 4.99, 'Live', 1),
(19, 9, 6, 3.99, 3.99, 'Live', 1),
(21, 8, 5, 4.99, 4.99, 'Live', 1),
(22, 9, 4, 3.99, 3.99, 'Live', 1),
(24, 8, 7, 4.99, 4.99, 'Live', 1),
(25, 9, 5, 3.99, 3.99, 'Live', 1),
(26, 8, 6, 4.99, 4.99, 'Live', 1),
(28, 9, 4, 3.99, 3.99, 'Live', 1),
(29, 8, 5, 4.99, 4.99, 'Live', 1),
(30, 9, 6, 3.99, 3.99, 'Live', 1);

-- Salads (menus 10,11)
INSERT INTO `tbl_sales_details` 
(`sales_id`, `food_menu_id`, `qty`, `price`, `menu_price_with_discount`, `del_status`, `outlet_id`) VALUES
(17, 10, 2, 8.99, 8.99, 'Live', 1),
(19, 11, 1, 9.99, 9.99, 'Live', 1),
(21, 10, 3, 8.99, 8.99, 'Live', 1),
(23, 11, 2, 9.99, 9.99, 'Live', 1),
(25, 10, 1, 8.99, 8.99, 'Live', 1),
(27, 11, 3, 9.99, 9.99, 'Live', 1),
(29, 10, 2, 8.99, 8.99, 'Live', 1);

-- ============================================
-- FINAL VERIFICATION
-- Run all 4 test queries again to see data for all ranges
-- ============================================

SELECT '=== FINAL TEST: LAST 15 DAYS ===' as test_type;
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
  AND s.sale_date BETWEEN DATE_SUB(CURDATE(), INTERVAL 15 DAY) AND CURDATE()
GROUP BY fmc.id, fmc.category_name
ORDER BY total_revenue DESC
LIMIT 5;
