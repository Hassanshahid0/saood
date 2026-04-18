# Dashboard Top Categories - Setup Guide

## What Was Changed

I've updated your Dashboard to use your working SQL query and display the Top Categories correctly in the UI.

### Files Modified:

1. **`application/models/Dashboard_model.php`**
   - Updated the `top_five_categories()` method to use your exact working query
   - Now returns: `category_name`, `total_qty`, `total_revenue`, `percentage`
   - Added filters: `order_status = 3`, `company_id`, proper date range

2. **`application/controllers/Dashboard.php`**
   - Updated to pass the correct date range (first day of month to today)
   - Ensures data matches the current month filter

3. **`application/views/Dashboard/dashboard.php`**
   - Updated PHP code to use new column names from your query
   - Now properly displays: `total_qty`, `total_revenue`, `percentage`

## How to Add Sample Data

### Option 1: Run the SQL File (Recommended)

1. Open **phpMyAdmin**: `http://localhost/phpmyadmin`
2. Select database: **`finasalt_rmsnew`**
3. Click on **SQL** tab
4. Open the file: `dashboard_sample_data.sql` (in this folder)
5. Copy all content and paste in SQL tab
6. Click **Go**

This will:
- ✅ Verify your current data
- ✅ Insert sample data if needed
- ✅ Show you exactly what the dashboard will display

### Option 2: Manual Insert (One by One)

If you prefer to run queries manually, use these steps:

```sql
-- 1. Insert Categories
INSERT INTO `tbl_food_menu_categories` (`category_name`, `description`, `del_status`) VALUES
('Main Course', 'Main course dishes', 'Live'),
('Appetizers', 'Starter dishes', 'Live'),
('Desserts', 'Sweet dishes', 'Live'),
('Beverages', 'Drinks and beverages', 'Live'),
('Salads', 'Fresh salads', 'Live');

-- 2. Insert Food Menus
INSERT INTO `tbl_food_menus` (`name`, `category_id`, `price`, `del_status`) VALUES
('Grilled Chicken', 1, 15.99, 'Live'),
('Pasta Carbonara', 1, 12.99, 'Live'),
('Beef Steak', 1, 22.99, 'Live'),
('Spring Rolls', 2, 7.99, 'Live'),
('Garlic Bread', 2, 5.99, 'Live'),
('Chocolate Cake', 3, 6.99, 'Live'),
('Ice Cream', 3, 5.99, 'Live'),
('Fresh Juice', 4, 4.99, 'Live'),
('Coffee', 4, 3.99, 'Live'),
('Caesar Salad', 5, 8.99, 'Live'),
('Greek Salad', 5, 9.99, 'Live');

-- 3. Insert Customers
INSERT INTO `tbl_customers` (`name`, `email`, `phone`, `type`, `company_id`, `del_status`) VALUES
('John Doe', 'john@example.com', '1234567890', 'Regular', 1, 'Live'),
('Jane Smith', 'jane@example.com', '0987654321', 'VIP', 1, 'Live'),
('Mike Johnson', 'mike@example.com', '1122334455', 'Regular', 1, 'Live');

-- 4. Insert Sales (15 records)
-- Use the INSERT statements from dashboard_sample_data.sql

-- 5. Insert Sales Details
-- Use the INSERT statements from dashboard_sample_data.sql
```

## How to Test

1. **Run the SQL queries** (either from `dashboard_sample_data.sql` or manually)
2. **Visit your dashboard**: `http://localhost:8000/Dashboard/dashboard`
3. **Check the "Top Categories" card** (right side, semi-circle chart)
4. You should see:
   - A semi-circle doughnut chart
   - 5 category names with percentages
   - Color-coded legend below the chart
   - Total quantity in the center

## Expected Result

After running the sample data, your dashboard should show:

- **Main Course** - Highest revenue (Beef Steak, Grilled Chicken, Pasta)
- **Beverages** - Second highest (Coffee, Fresh Juice)
- **Appetizers** - Third (Spring Rolls, Garlic Bread)
- **Desserts** - Fourth (Chocolate Cake, Ice Cream)
- **Salads** - Fifth (Caesar Salad, Greek Salad)

Each category will show:
- Percentage of total revenue
- Color-coded segment in the chart
- Name in the legend

## Troubleshooting

### No data showing?

Run this query to check if data exists:

```sql
SELECT COUNT(*) as total FROM tbl_sales WHERE order_status = 3 AND del_status = 'Live';
```

Should return **15** (or more if you added more).

### Chart not displaying?

1. Check browser console for JavaScript errors (F12)
2. Verify Chart.js is loaded
3. Make sure `$top_categories` is not empty in the view

### Different percentages?

The percentages are calculated dynamically based on:
- `menu_price_with_discount * qty` for each sale
- Sum of all revenues for percentage calculation

## What Your Working Query Does

Your query:
1. Joins sales details → sales → food menus → categories
2. Filters by: `order_status = 3` (completed orders), `company_id = 1`, `outlet_id = 1`, current month
3. Calculates: total quantity, total revenue, and revenue percentage
4. Returns top 5 categories by revenue (highest first)

This data is now properly displayed in your dashboard UI!

---

**Need help?** Check the `dashboard_sample_data.sql` file - it has a verification query at the end that shows exactly what the dashboard will display.
