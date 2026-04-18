# Top Categories Date Range Selector - Setup Complete

## ✅ What Was Implemented

I've added a **date range selector popup** to the Top Categories chart on your dashboard with the following features:

### Features:
1. **Preset Options:**
   - Last 15 Days (Default)
   - Last 30 Days
   - Last 60 Days

2. **Custom Date Range:**
   - Click "Custom Range" to show date pickers
   - Select start date and end date
   - Click "Apply" to fetch data

3. **Dynamic Updates:**
   - Chart updates via AJAX without page reload
   - Uses your exact working SQL query
   - Updates percentages and total quantity in real-time

## 📁 Files Modified:

1. **`application/views/Dashboard/dashboard.php`**
   - Added popup UI with preset options and custom date inputs
   - Added JavaScript for popup toggle and date selection
   - Added AJAX function to fetch and update chart data
   - Updated legend dynamically

2. **`application/controllers/Dashboard.php`**
   - Updated `get_top_five_categories()` AJAX endpoint
   - Changed default from 15 days (instead of month)
   - Updated to use new column names (`total_qty`, `total_revenue`, `percentage`)

3. **`application/models/Dashboard_model.php`**
   - Already updated with your working SQL query

## 🎯 How It Works:

### User Flow:
1. User clicks on **"Last 15 Days"** button (with dropdown arrow)
2. Popup menu appears with options:
   - ✓ Last 15 Days (selected by default)
   - Last 30 Days
   - Last 60 Days
   - Custom Range (with calendar icon)
3. User selects a preset option:
   - Chart immediately updates via AJAX
   - Display text changes to selected range
   - Checkmark moves to selected option
4. User selects "Custom Range":
   - Date input fields slide down
   - User selects "From:" and "To:" dates
   - Clicks "Apply" button
   - Chart updates with custom date range data

### Technical Flow:
1. JavaScript captures date range selection
2. AJAX POST request sent to `Dashboard/get_top_five_categories`
3. Controller calls model with date parameters
4. Model executes SQL query with date filters
5. Response includes: `category_name`, `total_qty`, `total_revenue`, `percentage`
6. JavaScript updates:
   - Doughnut chart (percentages)
   - Center total quantity
   - Legend items with percentages

## 🧪 Testing Steps:

### 1. First, Ensure Sample Data Exists:
Run this in phpMyAdmin to verify:

```sql
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
```

### 2. Visit Dashboard:
Open: `http://localhost:8000/Dashboard/dashboard`

### 3. Test Each Feature:

**Test Preset Options:**
1. Click on "Last 15 Days" dropdown
2. Select "Last 30 Days"
3. Verify chart updates and text changes to "Last 30 Days"
4. Select "Last 60 Days"
5. Verify chart updates again

**Test Custom Range:**
1. Click on dropdown
2. Click "Custom Range"
3. Date inputs should slide down
4. Select dates (e.g., 2026-04-01 to 2026-04-15)
5. Click "Apply"
6. Verify chart updates and shows "Apr 1 - Apr 15" (or similar format)

**Verify Chart Displays:**
- Semi-circle doughnut chart with 5 colored segments
- Total quantity in center
- Legend below with category names and percentages
- Each category shows: `Category Name XX%`

## 🎨 UI Elements Added:

### Popup Menu Structure:
```
┌─────────────────────────────────┐
│ ✓ Last 15 Days                  │ ← Active (bold, checkmark)
│   Last 30 Days                  │
│   Last 60 Days                  │
├─────────────────────────────────┤
│ 📅 Custom Range                 │
│   ┌──────────────────────────┐  │ ← Shows when Custom clicked
│   │ From: [2026-04-01]       │  │
│   │ To:   [2026-04-15]       │  │
│   │ [Apply]                  │  │
│   └──────────────────────────┘  │
└─────────────────────────────────┘
```

### Colors for Categories:
1. **Green** (#96CF6E) - First category
2. **Gold** (#CFB06E) - Second category
3. **Orange** (#CF8B6E) - Third category
4. **Red** (#CF6E6E) - Fourth category
5. **Purple** (#8B6ECF) - Fifth category

## 🔧 Troubleshooting:

### Chart Not Updating?
1. Open browser console (F12)
2. Check for JavaScript errors
3. Verify AJAX request in Network tab
4. Check response from `Dashboard/get_top_five_categories`

### No Data Showing?
Run this query to check if you have sales with `order_status = 3`:

```sql
SELECT COUNT(*) FROM tbl_sales 
WHERE order_status = 3 
  AND del_status = 'Live' 
  AND company_id = 1 
  AND outlet_id = 1;
```

Should return **15** (or more).

### Popup Not Showing?
1. Check that jQuery is loaded
2. Verify element IDs match in JavaScript
3. Check for CSS z-index conflicts

### Wrong Percentages?
The query calculates percentages based on:
```sql
ROUND((total_revenue * 100.0 / SUM(total_revenue) OVER()), 2)
```

This gives each category's percentage of total revenue.

## 📊 SQL Query Being Used:

Your exact working query is now integrated:

```sql
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
  AND s.sale_date BETWEEN ? AND ?  ← Dynamic date range
GROUP BY fmc.id, fmc.category_name
ORDER BY total_revenue DESC
LIMIT 5
```

## 🎉 Result:

Your dashboard now has a fully functional date range selector for the Top Categories chart that:
- ✅ Uses your exact working SQL query
- ✅ Provides preset options (15, 30, 60 days)
- ✅ Allows custom date range selection
- ✅ Updates chart dynamically via AJAX
- ✅ Shows correct percentages and totals
- ✅ Has a beautiful UI matching your dashboard design

---

**Need to add more sample data?** Run the `dashboard_sample_data.sql` file in phpMyAdmin to insert test records.
