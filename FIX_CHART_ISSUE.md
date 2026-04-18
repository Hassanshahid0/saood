# Semi-Circle Pie Chart Fix Guide

## Problem
The semi-circle chart is showing "No category data available" with a value of 0.

## Root Cause
The chart relies on sales data from the current month. If there are no sales records with `sale_date` in the current month, the chart will be empty.

## Solution

### Step 1: Check Current Status
1. Open this URL in your browser to see what's happening:
   ```
   http://localhost/your-project/test_categories.php
   ```
   
   This will show you:
   - ✓ Database connection status
   - ✓ How many rows exist in each table
   - ✓ If there are any categories with sales data
   - ✗ OR why no data is showing

### Step 2: Insert Sample Data
If the test shows "NO CATEGORIES FOUND", run this URL to insert sample data:
```
http://localhost/your-project/insert_sample_data.php
```

This will create:
- 8 food categories (Sea Food, Beverages, Dessert, Pasta, Salads, Pizza, Burgers, Soups)
- 24 menu items across those categories
- Sample sales records for the current month

### Step 3: Verify the Data
After inserting sample data:
1. Check the JSON data directly:
   ```
   http://localhost/your-project/get_categories.php
   ```
   
   Expected output:
   ```json
   {
     "success": true,
     "data": [
       {"category_name": "Sea Food", "totalQty": 50, "percentage": 50},
       {"category_name": "Beverages", "totalQty": 30, "percentage": 30},
       {"category_name": "Salads", "totalQty": 25, "percentage": 25},
       {"category_name": "Pizza", "totalQty": 35, "percentage": 35},
       {"category_name": "Burgers", "totalQty": 28, "percentage": 28}
     ],
     "total": 168,
     "period": {
       "start_date": "2026-04-01",
       "end_date": "2026-04-30"
     }
   }
   ```

2. Refresh your dashboard page - the chart should now show!

### Step 4: Troubleshooting

#### If the chart still shows "No data":

**A. Check the date range:**
- The chart only shows data for the **current month** by default
- If your sales are from a different month, you'll see no data
- Current month range: First day to last day of current month

**B. Check outlet_id:**
- Default outlet_id is **1**
- If your sales belong to a different outlet, change the outlet selector on the dashboard
- Or verify sales are for outlet_id = 1

**C. Check del_status:**
- All records must have `del_status = 'Live'`
- Deleted records won't show up in the chart

**D. Run the diagnostic:**
```
http://localhost/your-project/test_categories.php
```

### Step 5: Using Real Data (Not Sample)

Once you understand how the chart works, replace sample data with your actual sales:

1. **Make sales through the application:**
   - Go to the POS/Sales module
   - Create sales with menu items
   - Make sure to save them

2. **Verify your database structure:**
   ```sql
   -- Check if you have the required tables
   SHOW TABLES LIKE 'tbl_sales%';
   SHOW TABLES LIKE 'tbl_food%';
   ```

3. **Check your sales data:**
   ```sql
   -- See how many sales you have this month
   SELECT COUNT(*) FROM tbl_sales 
   WHERE sale_date >= '2026-04-01' 
   AND sale_date <= '2026-04-30'
   AND del_status = 'Live';
   ```

4. **Check sales details:**
   ```sql
   -- See sales details with categories
   SELECT fmc.category_name, SUM(sd.qty) as totalQty
   FROM tbl_sales_details sd
   JOIN tbl_sales s ON s.id = sd.sales_id
   JOIN tbl_food_menus fm ON fm.id = sd.food_menu_id
   JOIN tbl_food_menu_categories fmc ON fmc.id = fm.category_id
   WHERE sd.del_status = 'Live'
     AND s.del_status = 'Live'
     AND fmc.del_status = 'Live'
     AND s.outlet_id = 1
     AND s.sale_date >= '2026-04-01'
     AND s.sale_date <= '2026-04-30'
   GROUP BY fmc.id, fmc.category_name
   ORDER BY totalQty DESC
   LIMIT 5;
   ```

## Files Created/Modified

### New Files:
1. **test_categories.php** - Diagnostic tool to check database status
2. **insert_sample_data.php** - Script to populate test data (already existed)
3. **get_categories.php** - API endpoint for chart data (already existed)

### Dashboard Files:
1. **application/views/dashboard/dashboard.php** - Contains the chart rendering code
2. **application/controllers/Dashboard.php** - Fetches top_categories data
3. **application/models/Dashboard_model.php** - Executes the database query

## Quick Reference

| File | Purpose | URL |
|------|---------|-----|
| test_categories.php | Diagnostic tool | http://localhost/project/test_categories.php |
| insert_sample_data.php | Add sample data | http://localhost/project/insert_sample_data.php |
| get_categories.php | View JSON data | http://localhost/project/get_categories.php |
| semi_circle_chart_card.html | Standalone chart test | http://localhost/project/semi_circle_chart_card.html |
| Dashboard | Main dashboard with chart | http://localhost/project/Dashboard/dashboard |

## Expected Chart Appearance

When working correctly, you should see:
- ✓ Semi-circle divided into colored segments
- ✓ Center number showing total quantity sold
- ✓ Legend below showing category names with percentages
- ✓ "Last Updated on [date]" text
- ✓ Tooltips when hovering over segments

## Common Issues & Solutions

### Issue: Chart shows 0 and "No category data available"
**Solution:** Run insert_sample_data.php or create actual sales

### Issue: Database connection error
**Solution:** Check credentials in get_categories.php and test_categories.php

### Issue: Chart not rendering
**Solution:** 
- Check browser console (F12) for JavaScript errors
- Verify Chart.js library is loaded
- Check if data exists via get_categories.php

### Issue: Wrong date range
**Solution:** 
- Sales must be within current month
- Modify get_categories.php to change date range if needed

## Need More Help?

1. Run test_categories.php first to see the diagnostic output
2. Check browser console (F12 > Console tab) for JavaScript errors
3. Verify all required tables exist in your database
4. Make sure PDO extension is enabled in PHP
