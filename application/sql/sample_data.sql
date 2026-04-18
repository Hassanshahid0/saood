SET @company_id := 1;
SET @outlet_id := 1;
INSERT INTO tbl_areas (area_name, description, company_id, outlet_id, del_status)
SELECT 'Main Hall', 'Sample area', @company_id, @outlet_id, 'Live'
WHERE NOT EXISTS (
  SELECT 1 FROM tbl_areas 
  WHERE area_name='Main Hall' AND outlet_id=@outlet_id AND company_id=@company_id AND del_status='Live'
);
SET @area_id := (SELECT id FROM tbl_areas WHERE area_name='Main Hall' AND outlet_id=@outlet_id AND company_id=@company_id AND del_status='Live' LIMIT 1);
INSERT INTO tbl_tables (area, name, sit_capacity, position, description, outlet_id, user_id, company_id, is_setting, del_status)
SELECT @area_id, 'T-01', 4, '', 'Sample table 1', @outlet_id, 1, @company_id, 0, 'Live'
WHERE NOT EXISTS (
  SELECT 1 FROM tbl_tables 
  WHERE name='T-01' AND area=@area_id AND outlet_id=@outlet_id AND company_id=@company_id AND del_status='Live'
);
INSERT INTO tbl_tables (area, name, sit_capacity, position, description, outlet_id, user_id, company_id, is_setting, del_status)
SELECT @area_id, 'T-02', 2, '', 'Sample table 2', @outlet_id, 1, @company_id, 0, 'Live'
WHERE NOT EXISTS (
  SELECT 1 FROM tbl_tables 
  WHERE name='T-02' AND area=@area_id AND outlet_id=@outlet_id AND company_id=@company_id AND del_status='Live'
);
