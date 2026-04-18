# Dynamic Semi Pie Chart - Top Categories

This guide explains how to use and customize the dynamic semi-circle doughnut chart for displaying top categories.

## 📁 Files Created/Modified

### New Files:
1. **`get_categories.php`** - API endpoint that fetches category data from database
2. **`insert_sample_data.php`** - Script to populate database with test data

### Modified Files:
1. **`semi_circle_chart_card.html`** - Updated to fetch data dynamically instead of hardcoded values

---

## 🚀 Quick Start Guide

### Step 1: Insert Sample Data (Optional)
If you want to test with sample data, run this URL in your browser:
```
http://localhost/your-project/insert_sample_data.php
```

This will:
- Create 8 food categories (Sea Food, Beverages, Dessert, Pasta, Salads, Pizza, Burgers, Soups)
- Add 24 menu items across those categories
- Insert sample sales records for the current month

### Step 2: View the Chart
Open the semi-circle chart in your browser:
```
http://localhost/your-project/semi_circle_chart_card.html
```

The chart will automatically:
- Fetch data from `get_categories.php`
- Display the top 5 categories by quantity sold
- Show dynamic legends with percentages
- Update colors automatically based on number of categories

### Step 3: View Raw JSON Data
To see the API response directly:
```
http://localhost/your-project/get_categories.php
```

---

## 📊 How It Works

### Data Flow:
```
Database Tables                    PHP API                    Frontend Chart
┌─────────────────────┐           ┌──────────────┐           ┌─────────────────┐
│ tbl_sales           │           │              │           │                 │
│ tbl_sales_details   │ ────────> │ get_categories│ ────────> │ semi_circle_    │
│ tbl_food_menus      │  Query    │ .php         │  JSON     │ chart_card.html │
│ tbl_food_menu_      │           │              │           │                 │
│   categories        │           │              │           │                 │
└─────────────────────┘           └──────────────┘           └─────────────────┘
```

### Database Query:
The system joins 4 tables to calculate category performance:
- **tbl_sales**: Main sales records with dates and outlet info
- **tbl_sales_details**: Line items with quantities per menu item
- **tbl_food_menus**: Menu items linked to categories
- **tbl_food_menu_categories**: Category names and metadata

Result: Top 5 categories ranked by total quantity sold, with percentages.

---

## 🔧 Customization Options

### 1. Change Date Range
Modify the query parameters in `get_categories.php`:

```php
// Default: Current month
$start_date = date('Y-m-01');  // First day of current month
$end_date = date('Y-m-t');     // Last day of current month

// Custom: Last 7 days
$start_date = date('Y-m-d', strtotime('-7 days'));
$end_date = date('Y-m-d');

// Custom: Specific date range
$start_date = '2026-01-01';
$end_date = '2026-01-31';
```

You can also pass dates via URL parameters:
```
get_categories.php?start_date=2026-01-01&end_date=2026-01-31&outlet_id=2
```

### 2. Change Number of Categories
In `get_categories.php`, modify the LIMIT clause:
```sql
LIMIT 5   -- Change to LIMIT 3, LIMIT 8, etc.
```

In `semi_circle_chart_card.html`, update the color array if needed:
```javascript
const categoryColors = [
  '#96CF6E',  // Green
  '#CFB06E',  // Gold
  '#CF8B6E',  // Orange
  '#CF6E6E',  // Red
  '#6E9ECF',  // Blue
  '#9E6ECF',  // Purple
  '#CF6E9E',  // Pink
  '#6ECFCF'   // Teal
];
```

### 3. Change Chart Colors
Update the color palette in `semi_circle_chart_card.html`:

```javascript
const categoryColors = [
  '#FF6384',  // Red
  '#36A2EB',  // Blue
  '#FFCE56',  // Yellow
  '#4BC0C0',  // Teal
  '#9966FF',  // Purple
  '#FF9F40'   // Orange
];
```

### 4. Customize Chart Display
In `semi_circle_chart_card.html`, modify Chart.js options:

```javascript
options: {
  rotation: -90,          // Start angle (keep -90 for semi-circle)
  circumference: 180,     // Arc degrees (180 = half circle)
  cutout: '80%',          // Inner radius (higher = thinner arc)
  // ...
}
```

### 5. Add Your Own Categories
Instead of using `insert_sample_data.php`, you can:

**Option A: Use your existing CodeIgniter application**
- Add categories through the admin panel
- Create sales records normally
- The chart will automatically reflect real data

**Option B: Manual SQL insertion**
```sql
-- Add a category
INSERT INTO tbl_food_menu_categories (category_name, description, del_status) 
VALUES ('My Category', 'Description', 'Live');

-- Add menu items to that category
INSERT INTO tbl_food_menus (category_id, item_name, price, del_status) 
VALUES (LAST_INSERT_ID(), 'My Item', 10.00, 'Live');

-- Add sales (requires proper sale records structure)
```

---

## 🐛 Troubleshooting

### Chart shows default/sample data instead of database data
**Problem:** Database connection failed or no records found

**Solutions:**
1. Check database credentials in `get_categories.php`
2. Verify tables exist: `tbl_sales`, `tbl_sales_details`, `tbl_food_menus`, `tbl_food_menu_categories`
3. Run `insert_sample_data.php` to populate test data
4. Check browser console for error messages

### Chart is empty or shows "Progress 0"
**Problem:** No sales data in the selected date range

**Solutions:**
1. Run `insert_sample_data.php` to add sample sales
2. Check if your sales have `del_status = 'Live'`
3. Verify `outlet_id` matches your data
4. Ensure sales dates fall within the query range

### "Database error" message
**Problem:** PDO extension not enabled or wrong credentials

**Solutions:**
1. Enable PDO in `php.ini`:
   ```ini
   extension=pdo_mysql
   ```
2. Update database credentials in `get_categories.php`:
   ```php
   $db_host = 'localhost';
   $db_name = 'irestora_plus';
   $db_user = 'root';
   $db_pass = 'your_password';
   ```

### Legends not displaying properly
**Problem:** JavaScript error or DOM not ready

**Solutions:**
1. Check browser console (F12) for errors
2. Ensure Chart.js CDN is loading
3. Verify the `.legend` div exists in HTML

---

## 📈 Expected Output

### JSON Response from `get_categories.php`:
```json
{
  "success": true,
  "data": [
    {
      "category_name": "Sea Food",
      "totalQty": 50,
      "percentage": 50
    },
    {
      "category_name": "Beverages",
      "totalQty": 30,
      "percentage": 30
    },
    {
      "category_name": "Dessert",
      "totalQty": 15,
      "percentage": 15
    },
    {
      "category_name": "Pasta",
      "totalQty": 5,
      "percentage": 5
    }
  ],
  "total": 100,
  "period": {
    "start_date": "2026-04-01",
    "end_date": "2026-04-30"
  }
}
```

### Chart Display:
- Semi-circle divided into colored segments
- Center text shows: "Progress [total quantity]"
- Legend below shows: "[Category Name] [percentage]%"
- Tooltips on hover show detailed info

---

## 🔗 Integration with CodeIgniter Dashboard

The existing CodeIgniter application already has this functionality built-in:

**Controller:** `application/controllers/Dashboard.php`
- Method: `get_top_five_categories()` (line ~356)
- Accepts POST requests with `outlet_id`, `start_date`, `end_date`

**Model:** `application/models/Dashboard_model.php`
- Method: `top_five_categories()` (line ~225)
- Returns category data with quantities

The standalone `get_categories.php` file replicates this logic for easy testing without the full framework.

---

## 📝 Notes

- Chart automatically handles 1-8+ categories with different colors
- Percentages are calculated based on total quantity sold
- Only "Live" (non-deleted) records are counted
- Data updates on page refresh
- Fallback to sample data if database is unavailable

---

## ✅ Checklist

- [x] Created API endpoint (`get_categories.php`)
- [x] Made chart dynamic (`semi_circle_chart_card.html`)
- [x] Created sample data script (`insert_sample_data.php`)
- [x] Added automatic legend generation
- [x] Added tooltips with percentages
- [x] Added error handling and fallbacks
- [x] Made colors dynamic for any number of categories

---

**Need Help?**
Check browser console (F12) for errors or examine `get_categories.php` response directly.
