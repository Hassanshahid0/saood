# 🚨 Quick Fix: Semi-Circle Chart Not Showing Data

## Your Problem
The chart shows "0" and "No category data available" ❌

## Root Cause
**You have no sales data in your database for the current month (April 2026).**

The chart needs actual sales records to display. It queries:
- `tbl_sales` - Main sales records
- `tbl_sales_details` - Individual items sold
- `tbl_food_menus` - Menu items
- `tbl_food_menu_categories` - Category names

If any of these tables are empty or have no sales for the current month, the chart will be blank.

---

## 🔧 FIX IT IN 3 STEPS

### Step 1: Open the Status Checker
Open this URL in your browser:
```
http://localhost/your-project/chart_status.html
```

**Replace "your-project" with your actual project folder name!**

This page will:
- ✓ Check database connection
- ✓ Show if data exists
- ✓ Display the chart if data is found
- ✗ Show empty state if no data

### Step 2: Insert Sample Data
If the status checker shows "No Data", click the **"Insert Sample Data"** button, or open:
```
http://localhost/your-project/insert_sample_data.php
```

This will add:
- 8 food categories (Sea Food, Beverages, etc.)
- 24 menu items
- Sample sales for the current month

Wait for it to say "✓ Sample data insertion complete!"

### Step 3: Refresh Your Dashboard
Go back to your dashboard:
```
http://localhost/your-project/Dashboard/dashboard
```

**Refresh the page (F5)** - The chart should now show with data! 🎉

---

## 📋 What You Should See

### When Working Correctly:
```
┌─────────────────────────────────────┐
│  Top Categories              Last Month ▼│
│                                      │
│         [Semi-Circle Chart]          │
│           ╱╲                        │
│         ╱    ╲                      │
│        Progress 168                  │
│                                      │
│    Last Updated on 15 Apr            │
│                                      │
│  🟩 Sea Food 50%    🟨 Beverages 30%│
│  🟧 Dessert 15%     🟥 Pasta 5%     │
└─────────────────────────────────────┘
```

### When Broken:
```
┌─────────────────────────────────────┐
│  Top Categories              Last Month ▼│
│                                      │
│               0                      │
│                                      │
│    Last Updated on 15 Apr            │
│                                      │
│    No category data available        │
└─────────────────────────────────────┘
```

---

## 🔍 Need More Details?

### Diagnostic Tool
Check exactly what's wrong:
```
http://localhost/your-project/test_categories.php
```

This shows:
- Database connection status
- Table row counts
- Query results
- Why data might be missing

### Raw JSON Data
See what the API returns:
```
http://localhost/your-project/get_categories.php
```

Expected response when working:
```json
{
  "success": true,
  "data": [
    {"category_name": "Sea Food", "totalQty": 50, "percentage": 50},
    {"category_name": "Beverages", "totalQty": 30, "percentage": 30}
  ],
  "total": 168
}
```

---

## ❓ Common Issues & Solutions

### Issue: "Database error"
**Fix:** Check database credentials in `get_categories.php`:
```php
$db_host = 'localhost';
$db_name = 'irestora_plus';
$db_user = 'root';
$db_pass = '';  // Change if you have a password
```

### Issue: Chart still shows 0 after inserting data
**Fix:** 
1. Clear browser cache (Ctrl+Shift+Delete)
2. Hard refresh (Ctrl+F5)
3. Check if sales are for the current month
4. Verify outlet_id matches (default is 1)

### Issue: "Table doesn't exist"
**Fix:** Your database might use different table names. Check:
```sql
SHOW TABLES LIKE '%sales%';
SHOW TABLES LIKE '%food%';
SHOW TABLES LIKE '%category%';
```

### Issue: Data exists but chart is still empty
**Fix:** 
1. Check `del_status` - must be 'Live'
2. Check date range - must be current month
3. Check outlet_id - must match your selection
4. Run test_categories.php to see exact issue

---

## 📝 Files Created to Help You

| File | Purpose | What it Does |
|------|---------|--------------|
| **chart_status.html** | 🎯 Visual Status Checker | Shows chart status, data, and quick fixes |
| **test_categories.php** | 🔍 Diagnostics | Detailed database and query analysis |
| **insert_sample_data.php** | ➕ Sample Data | Adds test data to database |
| **get_categories.php** | 📊 API Endpoint | Returns category data as JSON |
| **FIX_CHART_ISSUE.md** | 📖 Full Guide | Complete troubleshooting documentation |

---

## 🎯 Quick Links Checklist

- [ ] Open **chart_status.html** to check status
- [ ] If no data, run **insert_sample_data.php**
- [ ] Refresh dashboard to see chart
- [ ] If still broken, check **test_categories.php**
- [ ] View raw data at **get_categories.php**

---

## 💡 Understanding How It Works

### Data Flow:
```
Database (tbl_sales, etc.)
    ↓
Dashboard Controller (Dashboard.php)
    ↓ Calls model method
Dashboard Model (Dashboard_model.php)
    ↓ Runs SQL query
Top 5 Categories by Quantity
    ↓ Passed to view
Dashboard View (dashboard.php)
    ↓ Renders with Chart.js
Semi-Circle Doughnut Chart
```

### SQL Query (Simplified):
```sql
SELECT category_name, SUM(qty) as totalQty
FROM sales_details
JOIN sales ON sales.id = sales_details.sales_id
JOIN food_menus ON food_menus.id = sales_details.food_menu_id
JOIN categories ON categories.id = food_menus.category_id
WHERE del_status = 'Live'
  AND sale_date >= '2026-04-01'  -- Current month
  AND sale_date <= '2026-04-30'
  AND outlet_id = 1
GROUP BY category_name
ORDER BY totalQty DESC
LIMIT 5
```

### Chart Rendering:
- Uses **Chart.js** library
- Type: **doughnut**
- Options: **rotation: -90, circumference: 180** (semi-circle)
- Colors: Green, Gold, Orange, Red, Blue (from categoryColors array)

---

## 🎨 Customization Tips

### Change Date Range
Edit `get_categories.php`:
```php
// Change to last 7 days
$start_date = date('Y-m-d', strtotime('-7 days'));
$end_date = date('Y-m-d');
```

### Change Number of Categories
Edit query in `Dashboard_model.php`:
```sql
LIMIT 5  -- Change to 3, 8, 10, etc.
```

### Change Chart Colors
Edit `dashboard.php` around line 585:
```php
$category_colors = ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'];
```

---

## ✅ Verification Checklist

After inserting sample data, verify:

- [ ] test_categories.php shows categories with quantities
- [ ] get_categories.php returns JSON with data array
- [ ] chart_status.html shows the semi-circle chart
- [ ] Dashboard shows chart with "Progress XXX" in center
- [ ] Legend below shows category names with percentages
- [ ] Hover tooltips work on chart segments

---

## 🆘 Still Not Working?

1. **Open browser console (F12)**
   - Look for red error messages
   - Share any errors you see

2. **Run test_categories.php**
   - Take a screenshot of the output
   - Share what it shows

3. **Check PHP error log**
   - Look in `C:\xampp\php\logs\php_error_log`
   - Or check your server's error log

4. **Verify database exists**
   - Open phpMyAdmin
   - Check if `irestora_plus` database exists
   - Verify tables mentioned above exist

---

## 📞 Support

If you've followed all steps and it's still not working:

1. Make sure you replaced "your-project" with actual folder name in all URLs
2. Verify PHP and MySQL are running (XAMPP/WAMP/Laragon)
3. Check if PDO extension is enabled in php.ini
4. Ensure you have proper permissions on the database

**Good luck! 🚀**
