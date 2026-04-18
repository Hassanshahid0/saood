# 🎯 Semi-Circle Pie Chart - Complete Solution

## Problem Summary
Your semi-circle pie chart in the "Top Categories" section is showing:
- **Value:** 0
- **Message:** "No category data available"

## Root Cause
The chart displays sales data from your database. Since there are **no sales records** for the current month (April 2026), the chart is empty.

---

## 🚀 Quick Fix (3 Clicks)

### Method 1: Using the Batch File (Easiest)
1. **Double-click** `fix_chart.bat` in this folder
2. **Press 1** to open the Status Checker
3. If it shows "No Data", click **"Insert Sample Data"** button
4. **Refresh** your dashboard - Done! ✅

### Method 2: Manual Steps
1. **Open:** http://localhost/your-project/chart_status.html
2. **Click:** "Insert Sample Data" button (if no data exists)
3. **Refresh:** Your dashboard page

**Replace "your-project" with your actual project folder name!**

---

## 📦 What You've Received

### New Helper Files Created:

| File | Type | Purpose |
|------|------|---------|
| **chart_status.html** | 🎨 Visual Tool | Interactive status checker with live chart preview |
| **test_categories.php** | 🔍 Diagnostic | Detailed database analysis and troubleshooting |
| **fix_chart.bat** | ⚡ Automation | One-click tool to run all fixes |
| **QUICK_FIX.md** | 📖 Quick Guide | Fast troubleshooting steps |
| **FIX_CHART_ISSUE.md** | 📚 Full Guide | Complete documentation and explanations |
| **README_CHART_FIX.md** |  This File | Overview of the solution |

### Existing Files Used:
- `get_categories.php` - API endpoint (already existed)
- `insert_sample_data.php` - Data inserter (already existed)
- `semi_circle_chart_card.html` - Standalone chart (already existed)

---

## 🎯 Step-by-Step Fix Guide

### Step 1: Check Current Status

**Option A - Visual Checker (Recommended):**
```
http://localhost/your-project/chart_status.html
```
✓ Shows if database is connected
✓ Displays chart if data exists
✓ Shows JSON data from API
✓ Provides action buttons

**Option B - Detailed Diagnostics:**
```
http://localhost/your-project/test_categories.php
```
✓ Database connection test
✓ Table row counts
✓ Query execution results
✓ Explains why data is missing

### Step 2: Insert Sample Data (If Needed)

If status shows "No Data", run:
```
http://localhost/your-project/insert_sample_data.php
```

This creates:
- 8 food categories (Sea Food, Beverages, Dessert, Pasta, Salads, Pizza, Burgers, Soups)
- 24 menu items across categories
- Sales records for current month with realistic quantities:
  - Sea Food: ~50 items
  - Beverages: ~30 items
  - Pizza: ~35 items
  - Burgers: ~28 items
  - Salads: ~25 items
  - Dessert: ~15 items
  - Soups: ~20 items
  - Pasta: ~5 items

**Wait for the message:** "✓ Sample data insertion complete!"

### Step 3: Verify the Fix

**Check JSON API:**
```
http://localhost/your-project/get_categories.php
```

**Expected Output:**
```json
{
  "success": true,
  "data": [
    {"category_name": "Sea Food", "totalQty": 50, "percentage": 50},
    {"category_name": "Beverages", "totalQty": 30, "percentage": 30},
    ...
  ],
  "total": 168,
  "period": {
    "start_date": "2026-04-01",
    "end_date": "2026-04-30"
  }
}
```

**Check Dashboard:**
```
http://localhost/your-project/Dashboard/dashboard
```

You should now see the semi-circle chart with colored segments! 🎉

---

## 🔍 Understanding the Architecture

### How the Chart Works:

```
┌─────────────────────────────────────────────────┐
│              USER INTERACTION                    │
│         (Views Dashboard Page)                   │
└──────────────────┬──────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────┐
│         Dashboard Controller                     │
│   (application/controllers/Dashboard.php)       │
│                                                  │
│   Calls: top_five_categories()                   │
└──────────────────┬──────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────┐
│         Dashboard Model                          │
│   (application/models/Dashboard_model.php)      │
│                                                  │
│   SQL Query:                                     │
│   - Joins 4 tables                               │
│   - Filters by date & outlet                     │
│   - Groups by category                           │
│   - Orders by quantity                           │
│   - Limits to top 5                              │
└──────────────────┬──────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────┐
│              DATABASE                            │
│                                                  │
│   tbl_sales                                      │
│   tbl_sales_details                              │
│   tbl_food_menus                                 │
│   tbl_food_menu_categories                       │
└──────────────────┬──────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────┐
│         Dashboard View                           │
│   (application/views/dashboard/dashboard.php)   │
│                                                  │
│   - Receives $top_categories array               │
│   - Renders PHP variables                        │
│   - Chart.js doughnut chart                      │
│   - HTML legend with percentages                 │
└──────────────────┬──────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────┐
│          CHART.JS LIBRARY                        │
│                                                  │
│   Type: doughnut                                 │
│   Options:                                       │
│   - rotation: -90 (starts from left)            │
│   - circumference: 180 (half circle)            │
│   - cutout: 80% (thin ring)                     │
│   - Colors: Green, Gold, Orange, Red, Blue      │
└──────────────────┬──────────────────────────────┘
                   │
                   ▼
┌─────────────────────────────────────────────────┐
│           FINAL RENDERING                        │
│                                                  │
│   Semi-circle chart in browser                   │
│   - Colored segments                             │
│   - Center text: "Progress XXX"                  │
│   - Legend with percentages                      │
│   - Tooltips on hover                            │
└─────────────────────────────────────────────────┘
```

### Database Query (The Heart of the Chart):

```sql
SELECT
    fmc.category_name,                    -- Category name
    SUM(sd.qty) as totalQty              -- Total quantity sold
FROM tbl_sales_details sd                -- Individual items sold
JOIN tbl_sales s ON s.id = sd.sales_id   -- Link to sale record
JOIN tbl_food_menus fm ON fm.id = sd.food_menu_id  -- Link to menu item
JOIN tbl_food_menu_categories fmc ON fmc.id = fm.category_id  -- Link to category
WHERE sd.del_status = 'Live'             -- Not deleted
  AND s.del_status = 'Live'              -- Not deleted
  AND fmc.del_status = 'Live'            -- Not deleted
  AND s.outlet_id = ?                    -- Specific outlet
  AND s.sale_date >= ?                   -- Start date (current month)
  AND s.sale_date <= ?                   -- End date (current month)
GROUP BY fmc.id, fmc.category_name       -- Group by category
ORDER BY totalQty DESC                   -- Highest first
LIMIT 5                                  -- Top 5 only
```

---

## 🛠️ Customization Options

### 1. Change the Date Range

**File:** `get_categories.php` (around line 20)

**Current (Current Month):**
```php
$start_date = isset($_GET['start_date']) ? $_GET['start_date'] : date('Y-m-01');
$end_date = isset($_GET['end_date']) ? $_GET['end_date'] : date('Y-m-t');
```

**Change to Last 7 Days:**
```php
$start_date = date('Y-m-d', strtotime('-7 days'));
$end_date = date('Y-m-d');
```

**Change to Specific Range:**
```php
$start_date = '2026-03-01';
$end_date = '2026-03-31';
```

**Via URL Parameter:**
```
get_categories.php?start_date=2026-03-01&end_date=2026-03-31
```

### 2. Change Number of Categories

**File:** `application/models/Dashboard_model.php` (around line 240)

**Current:**
```sql
LIMIT 5
```

**Change to:**
```sql
LIMIT 3   -- Show only top 3
LIMIT 8   -- Show top 8
LIMIT 10  -- Show top 10
```

### 3. Change Chart Colors

**File:** `application/views/dashboard/dashboard.php` (around line 585)

**Current:**
```php
$category_colors = ['#96CF6E', '#CFB06E', '#CF8B6E', '#CF6E6E', '#8B6ECF'];
```

**Custom Colors:**
```php
$category_colors = [
    '#FF6384',  // Red
    '#36A2EB',  // Blue
    '#FFCE56',  // Yellow
    '#4BC0C0',  // Teal
    '#9966FF',  // Purple
    '#FF9F40'   // Orange
];
```

### 4. Change Chart Style

**File:** `application/views/dashboard/dashboard.php` (around line 2070)

**Make thicker arc:**
```javascript
cutout: '60%'  // Instead of '80%'
```

**Make thinner arc:**
```javascript
cutout: '90%'  // Instead of '80%'
```

**Full circle (not semi):**
```javascript
circumference: 360  // Instead of 180
rotation: 0         // Instead of -90
```

---

## 🐛 Troubleshooting

### Issue: Chart Shows "0" and "No Data"

**Diagnosis:**
1. Open `test_categories.php`
2. Check if tables have data
3. Check if sales are in current month

**Solution:**
1. Run `insert_sample_data.php`
2. Or create actual sales through POS

---

### Issue: "Database error" or Connection Failed

**Possible Causes:**
- Wrong database credentials
- Database doesn't exist
- MySQL server not running

**Solution:**
1. Check credentials in `get_categories.php`:
   ```php
   $db_host = 'localhost';
   $db_name = 'irestora_plus';
   $db_user = 'root';
   $db_pass = '';  // Change if needed
   ```

2. Verify database exists:
   - Open phpMyAdmin
   - Look for `irestora_plus` database

3. Check MySQL is running:
   - Open XAMPP Control Panel
   - Ensure MySQL is "Running" (green)

---

### Issue: "Table doesn't exist"

**Solution:**
Check actual table names in your database:
```sql
SHOW TABLES;
```

If tables have different names, update the query in:
- `get_categories.php`
- `application/models/Dashboard_model.php`
- `insert_sample_data.php`

---

### Issue: Chart Not Rendering (Blank/White)

**Possible Causes:**
- Chart.js library not loaded
- JavaScript error
- HTML structure broken

**Solution:**
1. Open browser console (F12)
2. Look for red error messages
3. Common fixes:
   - Check if Chart.js CDN is accessible
   - Clear browser cache (Ctrl+Shift+Delete)
   - Hard refresh (Ctrl+F5)

---

### Issue: Data Exists But Chart Still Empty

**Checklist:**
- [ ] Sales dates are in current month?
- [ ] outlet_id matches your selection?
- [ ] del_status = 'Live' for all records?
- [ ] Browser cache cleared?
- [ ] Page refreshed after data insertion?

**Debug Steps:**
1. Open `get_categories.php` directly
2. Check if JSON has data array
3. If JSON has data but chart is empty → JavaScript issue
4. If JSON is empty → Database issue

---

### Issue: Wrong Data Showing

**Possible Causes:**
- Wrong date range
- Wrong outlet selected
- Cached data

**Solution:**
1. Check date range in query
2. Verify outlet_id in URL/session
3. Clear cache and refresh
4. Run `test_categories.php` to see actual query results

---

## 📊 Sample Data Breakdown

After running `insert_sample_data.php`, you'll have:

### Categories Created:
1. Sea Food - 3 menu items
2. Beverages - 3 menu items
3. Dessert - 3 menu items
4. Pasta - 3 menu items
5. Salads - 3 menu items
6. Pizza - 3 menu items
7. Burgers - 3 menu items
8. Soups - 3 menu items

### Expected Chart Distribution:
- Sea Food: 50 items (29.8%)
- Pizza: 35 items (20.8%)
- Beverages: 30 items (17.9%)
- Burgers: 28 items (16.7%)
- Salads: 25 items (14.9%)
- Total: ~168 items

---

## 🎓 Learning Resources

### Chart.js Documentation
- Official docs: https://www.chartjs.org/docs/
- Doughnut charts: https://www.chartjs.org/docs/latest/charts/doughnut.html
- Configuration: https://www.chartjs.org/docs/latest/general/options.html

### SQL Learning
- W3Schools SQL Tutorial: https://www.w3schools.com/sql/
- SQL Joins: https://www.w3schools.com/sql/sql_join.asp
- GROUP BY: https://www.w3schools.com/sql/sql_groupby.asp

### PHP & MySQL
- PHP PDO: https://www.php.net/manual/en/book.pdo.php
- MySQLi: https://www.php.net/manual/en/book.mysqli.php

---

## ✅ Verification Checklist

After fixing, verify everything works:

### Database Level:
- [ ] `test_categories.php` shows successful connection
- [ ] Tables have data (at least 8 categories, 24 menu items, 8 sales)
- [ ] Query returns 5 categories with quantities
- [ ] Total quantity > 0

### API Level:
- [ ] `get_categories.php` returns valid JSON
- [ ] JSON has "success": true
- [ ] JSON has "data" array with 5 items
- [ ] Each item has category_name, totalQty, percentage

### Frontend Level:
- [ ] `chart_status.html` shows the chart
- [ ] Chart has colored segments (not empty)
- [ ] Center shows "Progress XXX" with number > 0
- [ ] Legend shows category names with percentages
- [ ] Tooltips work on hover

### Dashboard Level:
- [ ] Dashboard page loads without errors
- [ ] "Top Categories" card shows the semi-circle chart
- [ ] Chart has colored segments
- [ ] Legend is displayed below chart
- [ ] No JavaScript errors in console (F12)

---

## 📞 Getting Help

If you're still stuck:

### 1. Gather Information:
- Screenshot of `test_categories.php` output
- Screenshot of browser console (F12) showing any errors
- Contents of `get_categories.php` response
- Your PHP version: `php -v`
- Your MySQL version

### 2. Check Common Issues:
- Is XAMPP/WAMP running?
- Is the database name correct?
- Are table names matching the queries?
- Is PDO extension enabled?

### 3. Test Connections:
```php
// Create test.php with:
<?php
$pdo = new PDO("mysql:host=localhost;dbname=irestora_plus", "root", "");
echo "Connection successful!";
?>
```

---

## 🎉 Success Indicators

You'll know it's working when:

1. **chart_status.html shows:**
   - ✓ Green checkmark for connection
   - ✓ Semi-circle chart with colors
   - ✓ JSON data with 5 categories
   - ✓ Legend with percentages

2. **Dashboard shows:**
   - ✓ Colored semi-circle chart
   - ✓ "Progress XXX" in center
   - ✓ Category names below
   - ✓ No error messages

3. **Browser console (F12) shows:**
   - ✓ No red errors
   - ✓ Chart.js loaded successfully
   - ✓ Chart rendered without warnings

---

## 📝 Summary

**Problem:** Chart shows "No category data available"

**Cause:** No sales data in database for current month

**Solution:** 
1. Run `chart_status.html` to check
2. Run `insert_sample_data.php` to add data
3. Refresh dashboard to see chart

**Result:** Beautiful semi-circle chart with top 5 categories! 🎊

---

**Created:** April 15, 2026
**For:** iRestora PLUS Dashboard
**Files Modified:** None (all new helper files)
**Database Required:** irestora_plus

**Good luck! If you need help, refer to:**
- QUICK_FIX.md for fast troubleshooting
- FIX_CHART_ISSUE.md for detailed guide
- chart_status.html for visual diagnostics
