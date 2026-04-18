DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_areas' AND COLUMN_NAME = 'tbl_border_color'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_areas` ADD `tbl_border_color` VARCHAR(20) NULL DEFAULT NULL AFTER `company_id`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_areas' AND COLUMN_NAME = 'tbl_bg_color'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_areas` ADD `tbl_bg_color` VARCHAR(20) NULL DEFAULT NULL AFTER `tbl_border_color`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_areas' AND COLUMN_NAME = 'tbl_text_color'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_areas` ADD `tbl_text_color` VARCHAR(20) NULL DEFAULT NULL AFTER `tbl_bg_color`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_areas' AND COLUMN_NAME = 'ordered_border_color'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_areas` ADD `ordered_border_color` VARCHAR(20) NULL DEFAULT NULL AFTER `tbl_text_color`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_areas' AND COLUMN_NAME = 'ordered_bg_color'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_areas` ADD `ordered_bg_color` VARCHAR(20) NULL DEFAULT NULL AFTER `ordered_border_color`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_areas' AND COLUMN_NAME = 'ordered_text_color'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_areas` ADD `ordered_text_color` VARCHAR(20) NULL DEFAULT NULL AFTER `ordered_bg_color`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_areas' AND COLUMN_NAME = 'box_border_color'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_areas` ADD `box_border_color` VARCHAR(20) NULL DEFAULT NULL AFTER `ordered_text_color`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_areas' AND COLUMN_NAME = 'box_bg_color'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_areas` ADD `box_bg_color` VARCHAR(20) NULL DEFAULT NULL AFTER `box_border_color`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_areas' AND COLUMN_NAME = 'box_text_color'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_areas` ADD `box_text_color` VARCHAR(20) NULL DEFAULT NULL AFTER `box_bg_color`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_areas' AND COLUMN_NAME = 'table_design_content'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_areas` ADD `table_design_content` TEXT NULL NULL DEFAULT NULL AFTER `box_text_color`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_tables' AND COLUMN_NAME = 'table_type'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_tables` ADD `table_type` INT(11) NULL DEFAULT 1 AFTER `area`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();



DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_companies' AND COLUMN_NAME = 'table_bg_color'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_companies` ADD `table_bg_color` VARCHAR(50) NULL DEFAULT #7367f0 AFTER `saas_landing_page`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_sales' AND COLUMN_NAME = 'self_order_content'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_sales` ADD `self_order_content` TEXT NULL DEFAULT NULL AFTER `token_number`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_kitchen_sales' AND COLUMN_NAME = 'combo_items'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_kitchen_sales` ADD `combo_items` TEXT NULL DEFAULT NULL AFTER `pull_update_cashier`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_running_order_tables' AND COLUMN_NAME = 'company_id'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_running_order_tables` ADD `company_id` INT NOT NULL DEFAULT 1 AFTER `persons`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_sales' AND COLUMN_NAME = 'refund_payment_id'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_sales` ADD `refund_payment_id` INT NOT NULL DEFAULT 0 AFTER `self_order_content`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_companies' AND COLUMN_NAME = 'active_login_button'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_companies` ADD `active_login_button` INT NOT NULL DEFAULT 1 AFTER `table_bg_color`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_companies' AND COLUMN_NAME = 'login_type'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_companies` ADD `login_type` INT NOT NULL DEFAULT 1 AFTER `active_login_button`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

CREATE TABLE IF NOT EXISTS `tbl_counters` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) DEFAULT NULL,
  `outlet_id` varchar(11) DEFAULT NULL,
  `printer_id` varchar(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `added_date` varchar(55) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT 0,
  `del_status` varchar(11) DEFAULT 'Live',
   PRIMARY KEY (`id`)
) ENGINE=InnoDB; 


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_register' AND COLUMN_NAME = 'counter_id'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_register` ADD `counter_id` INT NOT NULL DEFAULT 0 AFTER `company_id`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

-- After 7.2 Release
DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_printers' AND COLUMN_NAME = 'printing_choice'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_printers` ADD `printing_choice` VARCHAR(100) NULL DEFAULT NULL AFTER `company_id`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_printers' AND COLUMN_NAME = 'ipvfour_address'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_printers` ADD `ipvfour_address` VARCHAR(50) NULL DEFAULT NULL AFTER `printing_choice`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_printers' AND COLUMN_NAME = 'print_format'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_printers` ADD `print_format` VARCHAR(100) NULL DEFAULT NULL AFTER `ipvfour_address`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ CREATE PROCEDURE AddColumnIfNotExists() BEGIN DECLARE column_exists INT DEFAULT 0;
SELECT COUNT(*) INTO column_exists FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = DATABASE()  AND TABLE_NAME = 'tbl_printers' AND COLUMN_NAME = 'inv_qr_code_enable_status'; 
IF column_exists = 0 THEN SET @sql = 'ALTER TABLE `tbl_printers` ADD `inv_qr_code_enable_status` VARCHAR(50) NULL DEFAULT NULL AFTER `print_format`';
PREPARE stmt FROM @sql;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;
END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnsIfNotExists;
DELIMITER $$
CREATE PROCEDURE AddColumnsIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE()  
        AND TABLE_NAME = 'tbl_purchase' 
        AND COLUMN_NAME = 'counter_id'; 
    IF column_exists = 0 THEN 
        SET @sql = 'ALTER TABLE `tbl_purchase` ADD `counter_id` INT NOT NULL DEFAULT 0 AFTER `del_status`'; 
        PREPARE stmt FROM @sql; 
        EXECUTE stmt; 
        DEALLOCATE PREPARE stmt; 
    END IF; 

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE()  
        AND TABLE_NAME = 'tbl_customer_due_receives' 
        AND COLUMN_NAME = 'counter_id'; 
    IF column_exists = 0 THEN 
        SET @sql = 'ALTER TABLE `tbl_customer_due_receives` ADD `counter_id` INT NOT NULL DEFAULT 0 AFTER `del_status`'; 
        PREPARE stmt FROM @sql; 
        EXECUTE stmt; 
        DEALLOCATE PREPARE stmt; 
    END IF; 

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE()  
        AND TABLE_NAME = 'tbl_supplier_payments' 
        AND COLUMN_NAME = 'counter_id'; 
    IF column_exists = 0 THEN 
        SET @sql = 'ALTER TABLE `tbl_supplier_payments` ADD `counter_id` INT NOT NULL DEFAULT 0 AFTER `del_status`'; 
        PREPARE stmt FROM @sql; 
        EXECUTE stmt; 
        DEALLOCATE PREPARE stmt; 
    END IF; 

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE()  
        AND TABLE_NAME = 'tbl_expenses' 
        AND COLUMN_NAME = 'counter_id'; 
    IF column_exists = 0 THEN 
        SET @sql = 'ALTER TABLE `tbl_expenses` ADD `counter_id` INT NOT NULL DEFAULT 0 AFTER `del_status`'; 
        PREPARE stmt FROM @sql; 
        EXECUTE stmt; 
        DEALLOCATE PREPARE stmt; 
    END IF; 

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE()  
        AND TABLE_NAME = 'tbl_sale_payments' 
        AND COLUMN_NAME = 'counter_id'; 
    IF column_exists = 0 THEN 
        SET @sql = 'ALTER TABLE `tbl_sale_payments` ADD `counter_id` INT NOT NULL DEFAULT 0 AFTER `del_status`'; 
        PREPARE stmt FROM @sql; 
        EXECUTE stmt; 
        DEALLOCATE PREPARE stmt; 
    END IF; 

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE()  
        AND TABLE_NAME = 'tbl_kitchen_sales' 
        AND COLUMN_NAME = 'counter_id'; 
    IF column_exists = 0 THEN 
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales` ADD `counter_id` INT NOT NULL DEFAULT 0 AFTER `del_status`'; 
        PREPARE stmt FROM @sql; 
        EXECUTE stmt; 
        DEALLOCATE PREPARE stmt; 
    END IF; 

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE()  
        AND TABLE_NAME = 'tbl_printers' 
        AND COLUMN_NAME = 'open_cash_drawer_when_printing_invoice'; 
    IF column_exists = 0 THEN 
        SET @sql = 'ALTER TABLE `tbl_printers` ADD `open_cash_drawer_when_printing_invoice` VARCHAR(20) NOT NULL DEFAULT "No" AFTER `inv_qr_code_enable_status`'; 
        PREPARE stmt FROM @sql; 
        EXECUTE stmt; 
        DEALLOCATE PREPARE stmt; 
    END IF; 

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE()  
        AND TABLE_NAME = 'tbl_printers' 
        AND COLUMN_NAME = 'outlet_id'; 
    IF column_exists = 0 THEN 
        SET @sql = 'ALTER TABLE `tbl_printers` ADD `outlet_id` INT NOT NULL DEFAULT "0" AFTER `company_id`'; 
        PREPARE stmt FROM @sql; 
        EXECUTE stmt; 
        DEALLOCATE PREPARE stmt; 
    END IF; 

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE()  
        AND TABLE_NAME = 'tbl_counters' 
        AND COLUMN_NAME = 'invoice_printer_id'; 
    IF column_exists = 0 THEN 
        SET @sql = 'ALTER TABLE `tbl_counters` ADD `invoice_printer_id` INT NOT NULL DEFAULT "0" AFTER `name`'; 
        PREPARE stmt FROM @sql; 
        EXECUTE stmt; 
        DEALLOCATE PREPARE stmt; 
    END IF; 

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE()  
        AND TABLE_NAME = 'tbl_counters' 
        AND COLUMN_NAME = 'bill_printer_id'; 
    IF column_exists = 0 THEN 
        SET @sql = 'ALTER TABLE `tbl_counters` ADD `bill_printer_id` INT NOT NULL DEFAULT "0" AFTER `invoice_printer_id`'; 
        PREPARE stmt FROM @sql; 
        EXECUTE stmt; 
        DEALLOCATE PREPARE stmt; 
    END IF; 

END$$
DELIMITER ;
CALL AddColumnsIfNotExists();


INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, 'Counters', '', 'Counters', '0', '3', 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `module_name` = 'Counters' AND `label_name` = 'Counters');

INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, '', 'add', 'add', '353', NULL, 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `parent_id` = '353' AND `function_name` = 'add');

INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, '', 'update', 'update', '353', NULL, 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `parent_id` = '353' AND `function_name` = 'update');

INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, '', 'view', 'view', '353', NULL, 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `parent_id` = '353' AND `function_name` = 'view');

INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, '', 'delete', 'delete', '353', NULL, 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `parent_id` = '353' AND `function_name` = 'delete');

DELETE `tbl_access`
FROM `tbl_access`
LEFT JOIN `tbl_access` AS t2 ON `tbl_access`.`id` = t2.`id`
WHERE `tbl_access`.`id` IN (40, 41, 42, 43, 44, 45, 46, 47, 48, 348, 349)
AND t2.`id` IS NOT NULL;

DROP PROCEDURE IF EXISTS AddColumnsIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnsIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_sales' 
    AND COLUMN_NAME = 'counter_id';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_sales` ADD `counter_id` INT NOT NULL DEFAULT 0 AFTER `company_id`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'terms_and_condition';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `terms_and_condition` VARCHAR(11) NULL DEFAULT NULL AFTER `login_type`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_pricing_plans' 
    AND COLUMN_NAME = 'free_trial_status';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_pricing_plans` ADD `free_trial_status` VARCHAR(11) NULL DEFAULT "No" AFTER `trail_days`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_outlets' 
    AND COLUMN_NAME = 'created_date';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_outlets` ADD `created_date` VARCHAR(20) NULL DEFAULT NULL AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_users' 
    AND COLUMN_NAME = 'created_date';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_users` ADD `created_date` VARCHAR(20) NULL DEFAULT NULL AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_food_menus' 
    AND COLUMN_NAME = 'alternative_name';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_food_menus` ADD `alternative_name` VARCHAR(100) NULL DEFAULT NULL AFTER `name`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnsIfNotExists();



DROP PROCEDURE IF EXISTS AddColumnsIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnsIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'main_banner_section';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `main_banner_section` TEXT NULL DEFAULT NULL AFTER `login_type`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'service_section';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `service_section` TEXT NULL DEFAULT NULL AFTER `main_banner_section`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'explore_menu_section';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `explore_menu_section` INT NULL DEFAULT NULL AFTER `service_section`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'social_media';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `social_media` TEXT NULL DEFAULT NULL AFTER `explore_menu_section`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'google_map';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `google_map` TEXT NULL DEFAULT NULL AFTER `social_media`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'contact_us_des';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `contact_us_des` TEXT NULL DEFAULT NULL AFTER `google_map`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'about_us';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `about_us` TEXT NULL DEFAULT NULL AFTER `contact_us_des`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'common_menu_page';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `common_menu_page` TEXT NULL DEFAULT NULL AFTER `about_us`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'administrator_email';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `administrator_email` VARCHAR(100) NULL DEFAULT NULL AFTER `common_menu_page`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_reservations' 
    AND COLUMN_NAME = 'reservation_time';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_reservations` ADD `reservation_time` VARCHAR(55) NULL DEFAULT NULL AFTER `reservation_date`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_reservations' 
    AND COLUMN_NAME = 'notes';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_reservations` ADD `notes` VARCHAR(255) NULL DEFAULT NULL AFTER `reservation_time`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_food_menu_categories' 
    AND COLUMN_NAME = 'category_image';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_food_menu_categories` ADD `category_image` VARCHAR(255) NULL DEFAULT NULL AFTER `order_by`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_food_menus' 
    AND COLUMN_NAME = 'show_online';

    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_food_menus` ADD `show_online` VARCHAR(15) NULL DEFAULT NULL AFTER `is_variation`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

END$$
DELIMITER ;
CALL AddColumnsIfNotExists();


CREATE TABLE IF NOT EXISTS `tbl_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(55) DEFAULT NULL,
  `last_name` varchar(55) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `del_status` varchar(10) DEFAULT 'Live',
   PRIMARY KEY (`id`)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `tbl_galleries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `del_status` varchar(10) NOT NULL DEFAULT 'Live',
    PRIMARY KEY (`id`)
) ENGINE=InnoDB;

INSERT INTO `tbl_main_modules` (`id`, `name`, `del_status`) 
SELECT NULL, 'allsettingpermission', 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_main_modules` WHERE `name` = 'allsettingpermission');

INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, 'allsettingpermission', '', 'allsettingpermission', '0', '11', 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `module_name` = 'allsettingpermission' AND `label_name` = 'allsettingpermission');

INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, '', 'all_setting', 'all_setting', '358', NULL, 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `function_name` = 'all_setting' AND `label_name` = 'all_setting');

ALTER TABLE `tbl_companies` CHANGE `explore_menu_section` `explore_menu_section` TEXT NULL DEFAULT NULL;


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'facebook_app_id';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `facebook_app_id` TEXT NULL DEFAULT NULL AFTER `common_menu_page`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'facebook_app_secret';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `facebook_app_secret` TEXT NULL DEFAULT NULL AFTER `facebook_app_id`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'google_client_id';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `google_client_id` TEXT NULL DEFAULT NULL AFTER `facebook_app_secret`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();



DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'google_client_secret_key';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `google_client_secret_key` TEXT NULL DEFAULT NULL AFTER `google_client_id`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_customers' 
    AND COLUMN_NAME = 'active_code';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_customers` ADD `active_code` VARCHAR(250) NULL DEFAULT NULL AFTER `same_or_diff_state`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_outlets' 
    AND COLUMN_NAME = 'online_order_module';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_outlets` ADD `online_order_module` INT NOT NULL DEFAULT 1 AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_sales' 
    AND COLUMN_NAME = 'paid_date_time';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_sales` ADD `paid_date_time` VARCHAR(20) NULL DEFAULT NULL AFTER `self_order_content`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_kitchen_sales' 
    AND COLUMN_NAME = 'online_payment_details';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales` ADD `online_payment_details` TEXT NULL DEFAULT NULL AFTER `combo_items`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, 'kitchenPerformanceReport', '', 'kitchenPerformanceReport', '0', '8', 'Live' 
WHERE NOT EXISTS (
    SELECT 1 FROM `tbl_access` 
    WHERE `module_name` = 'kitchenPerformanceReport' 
    AND `label_name` = 'kitchenPerformanceReport'
);

INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, '', 'view', 'view', '362', NULL, 'Live' 
WHERE NOT EXISTS (
    SELECT 1 FROM `tbl_access` 
    WHERE `function_name` = 'view' 
    AND `label_name` = 'view' 
    AND `parent_id` = '362'
);


DROP PROCEDURE IF EXISTS AddIndexIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddIndexIfNotExists() 
BEGIN 
    DECLARE index_exists INT DEFAULT 0;

    SELECT COUNT(*) INTO index_exists 
    FROM INFORMATION_SCHEMA.STATISTICS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_kitchen_sales_details' 
    AND INDEX_NAME = 'food_menu_and_sale_id';

    IF index_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales_details` ADD INDEX `food_menu_and_sale_id` (`food_menu_id`, `sales_id`)';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddIndexIfNotExists();


CREATE TABLE IF NOT EXISTS `tbl_food_menu_ratings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `food_menu_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `del_status` varchar(50) NOT NULL DEFAULT 'Live',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB;

ALTER TABLE `tbl_sales` CHANGE `refund_date_time` `refund_date_time` VARCHAR(50) NULL DEFAULT NULL;

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'website_white_label';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `website_white_label` TEXT NULL DEFAULT NULL AFTER `white_label`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_outlets' 
    AND COLUMN_NAME = 'available_online_foods';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_outlets` ADD `available_online_foods` TEXT NULL DEFAULT NULL AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_outlets' 
    AND COLUMN_NAME = 'thumb_imgs';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_outlets` ADD `thumb_imgs` TEXT NULL DEFAULT NULL AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_outlets' 
    AND COLUMN_NAME = 'large_imgs';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_outlets` ADD `large_imgs` TEXT NULL DEFAULT NULL AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_outlets' 
    AND COLUMN_NAME = 'explore_section_items';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_outlets` ADD `explore_section_items` TEXT NULL DEFAULT NULL AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_outlets' 
    AND COLUMN_NAME = 'online_order_receiving_id';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_outlets` ADD `online_order_receiving_id` INT NOT NULL DEFAULT 0 AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_kitchen_sales' 
    AND COLUMN_NAME = 'online_order_receiving_id';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales` ADD `online_order_receiving_id` INT NOT NULL DEFAULT 0 AFTER `online_payment_details`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'sos_enable_reservation';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `sos_enable_reservation` VARCHAR(20) NULL DEFAULT "Yes" AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_outlets' 
    AND COLUMN_NAME = 'reservation_order_receiving_id';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_outlets` ADD `reservation_order_receiving_id` INT NOT NULL DEFAULT 0 AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();
 

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_reservations' 
    AND COLUMN_NAME = 'reservation_order_receiving_id';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_reservations` ADD `reservation_order_receiving_id` INT NOT NULL DEFAULT 0 AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_kitchen_sales' 
    AND COLUMN_NAME = 'is_merge';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales` ADD `is_merge` INT NOT NULL DEFAULT 0 AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();
 
 DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_kitchen_sales_details' 
    AND COLUMN_NAME = 'is_merge';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales_details` ADD `is_merge` INT NOT NULL DEFAULT 0 AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_kitchen_sales_details_modifiers' 
    AND COLUMN_NAME = 'is_merge';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales_details_modifiers` ADD `is_merge` INT NOT NULL DEFAULT 0 AFTER `is_print`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


INSERT INTO `tbl_main_modules` (`id`, `name`, `del_status`) 
SELECT NULL, 'sos_Self_Order', 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_main_modules` WHERE `name` = 'sos_Self_Order');


INSERT INTO `tbl_main_modules` (`id`, `name`, `del_status`) 
SELECT NULL, 'online_order_st', 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_main_modules` WHERE `name` = 'online_order_st');


INSERT INTO `tbl_main_modules` (`id`, `name`, `del_status`) 
SELECT NULL, 'reservationSetting', 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_main_modules` WHERE `name` = 'reservationSetting');


INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, 'sos_Self_Order_Setting', '', 'sos_Self_Order_Setting', '0', '12', 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `module_name` = 'sos_Self_Order_Setting' AND `label_name` = 'sos_Self_Order_Setting');
INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, '', 'all_setting_sel_order', 'all_setting_sel_order', '364', NULL, 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `function_name` = 'all_setting_sel_order' AND `label_name` = 'all_setting_sel_order');


INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, 'online_order_setting', '', 'online_order_setting', '0', '13', 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `module_name` = 'online_order_setting' AND `label_name` = 'online_order_setting');
INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, '', 'all_setting_online_order', 'all_setting_online_order', '366', NULL, 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `function_name` = 'all_setting_online_order' AND `label_name` = 'all_setting_online_order');


INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, 'reservationSetting', '', 'reservationSetting', '0', '14', 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `module_name` = 'reservationSetting' AND `label_name` = 'reservationSetting');
INSERT INTO `tbl_access` (`id`, `module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
SELECT NULL, '', 'all_setting_reservation_order', 'all_setting_reservation_order', '368', NULL, 'Live' 
WHERE NOT EXISTS (SELECT 1 FROM `tbl_access` WHERE `function_name` = 'all_setting_reservation_order' AND `label_name` = 'all_setting_reservation_order');


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_kitchen_sales' 
    AND COLUMN_NAME = 'is_invoice';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales` ADD `is_invoice` INT NOT NULL DEFAULT 0 AFTER `online_order_receiving_id`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_sales' 
    AND COLUMN_NAME = 'is_invoice';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_sales` ADD `is_invoice` INT NOT NULL DEFAULT 1 AFTER `paid_date_time`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

ALTER TABLE `tbl_sales` CHANGE `sale_no` `sale_no` VARCHAR(500) DEFAULT NULL; 

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_tables' 
    AND COLUMN_NAME = 'is_setting';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_tables` ADD `is_setting` INT NOT NULL DEFAULT 1 AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();
 
DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'apply_on_delivery_charge';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `apply_on_delivery_charge` INT NOT NULL DEFAULT 2 AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_kitchen_sales' 
    AND COLUMN_NAME = 'is_kitchen';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales` ADD `is_kitchen` INT NOT NULL DEFAULT 1 AFTER `is_invoice`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_companies' 
    AND COLUMN_NAME = 'sos_enable_online_order_frontend_website';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` ADD `sos_enable_online_order_frontend_website` INT NOT NULL DEFAULT 1 AFTER `sos_enable_online_order`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();


DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_kitchen_sales' 
    AND COLUMN_NAME = 'zatca_value';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales` ADD `zatca_value` text NULL DEFAULT null AFTER `is_kitchen`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS AddColumnIfNotExists;
DELIMITER $$ 
CREATE PROCEDURE AddColumnIfNotExists() 
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists 
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() 
    AND TABLE_NAME = 'tbl_sales' 
    AND COLUMN_NAME = 'zatca_value';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_sales` ADD `zatca_value` text NULL DEFAULT null AFTER `del_status`';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL AddColumnIfNotExists();

DROP PROCEDURE IF EXISTS ModifyColumnIfExists;
DELIMITER $$ 
CREATE PROCEDURE ModifyColumnIfExists()
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO column_exists
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA = DATABASE()
      AND TABLE_NAME = 'tbl_food_menus'
      AND COLUMN_NAME = 'name';
    IF column_exists > 0 THEN
        SET @sql = 'ALTER TABLE `tbl_food_menus` 
                    CHANGE `name` `name` VARCHAR(250) 
                    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci 
                    NULL DEFAULT NULL';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL ModifyColumnIfExists();



DROP PROCEDURE IF EXISTS UpdateCharsetAndColumns;
DELIMITER $$ 
CREATE PROCEDURE UpdateCharsetAndColumns()
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    SET @sql = 'ALTER TABLE `tbl_sales_details` 
                CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci';
    PREPARE stmt FROM @sql;
    EXECUTE stmt;
    DEALLOCATE PREPARE stmt;
    SELECT COUNT(*) INTO column_exists
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA = DATABASE()
      AND TABLE_NAME = 'tbl_sales_details'
      AND COLUMN_NAME = 'menu_name';

    IF column_exists > 0 THEN
        SET @sql = 'ALTER TABLE `tbl_sales_details` 
                    CHANGE `menu_name` `menu_name` VARCHAR(250) 
                    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci 
                    NULL DEFAULT NULL';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;

    SELECT COUNT(*) INTO column_exists
    FROM INFORMATION_SCHEMA.COLUMNS
    WHERE TABLE_SCHEMA = DATABASE()
      AND TABLE_NAME = 'tbl_kitchen_sales_details'
      AND COLUMN_NAME = 'menu_name';
    IF column_exists > 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales_details` 
                    CHANGE `menu_name` `menu_name` VARCHAR(250) 
                    CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci 
                    NULL DEFAULT NULL';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL UpdateCharsetAndColumns();



DROP PROCEDURE IF EXISTS CreateOauthAccessTokens;
DELIMITER $$ 
CREATE PROCEDURE CreateOauthAccessTokens()
BEGIN 
    DECLARE table_exists INT DEFAULT 0;
    SELECT COUNT(*) INTO table_exists
    FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = DATABASE()
      AND TABLE_NAME = 'oauth_access_tokens';
    IF table_exists = 0 THEN
        SET @sql = 'CREATE TABLE `oauth_access_tokens` (
                        `access_token` varchar(40) NOT NULL,
                        `client_id` varchar(80) NOT NULL,
                        `user_id` varchar(80) DEFAULT NULL,
                        `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                        `scope` varchar(4000) DEFAULT NULL,
                        PRIMARY KEY (`access_token`)
                    ) ENGINE=InnoDB';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;
CALL CreateOauthAccessTokens();
 
DROP PROCEDURE IF EXISTS CreateOauthAuthorizationCodes;
DELIMITER $$ 
CREATE PROCEDURE CreateOauthAuthorizationCodes()
BEGIN 
    DECLARE table_exists INT DEFAULT 0;

    -- ✅ Check if table already exists
    SELECT COUNT(*) INTO table_exists
    FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = DATABASE()
      AND TABLE_NAME = 'oauth_authorization_codes';

    -- ✅ If not exists, create table
    IF table_exists = 0 THEN
        SET @sql = 'CREATE TABLE `oauth_authorization_codes` (
                        `authorization_code` varchar(40) NOT NULL,
                        `client_id` varchar(80) NOT NULL,
                        `user_id` varchar(80) DEFAULT NULL,
                        `redirect_uri` varchar(2000) DEFAULT NULL,
                        `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                        `scope` varchar(4000) DEFAULT NULL,
                        `id_token` varchar(1000) DEFAULT NULL,
                        PRIMARY KEY (`authorization_code`)
                    ) ENGINE=InnoDB';
        PREPARE stmt FROM @sql;
        EXECUTE stmt;
        DEALLOCATE PREPARE stmt;
    END IF;
END$$
DELIMITER ;

-- ✅ Run it
CALL CreateOauthAuthorizationCodes();

 
DROP PROCEDURE IF EXISTS CreateOAuthSchema;
DELIMITER $$ 
CREATE PROCEDURE CreateOAuthSchema()
BEGIN 
    DECLARE table_exists INT DEFAULT 0;
    DECLARE record_exists INT DEFAULT 0;

    -- ✅ oauth_clients
    SELECT COUNT(*) INTO table_exists
    FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'oauth_clients';
    IF table_exists = 0 THEN
        SET @sql = 'CREATE TABLE `oauth_clients` (
                        `client_id` varchar(80) NOT NULL,
                        `client_secret` varchar(80) DEFAULT NULL,
                        `redirect_uri` varchar(2000) DEFAULT NULL,
                        `grant_types` varchar(80) DEFAULT NULL,
                        `scope` varchar(4000) DEFAULT NULL,
                        `user_id` varchar(80) DEFAULT NULL,
                        PRIMARY KEY (`client_id`)
                    ) ENGINE=InnoDB';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- insert test client if not exists
    SELECT COUNT(*) INTO record_exists FROM oauth_clients WHERE client_id='testclient';
    IF record_exists = 0 THEN
        INSERT INTO oauth_clients (client_id, client_secret, redirect_uri, grant_types, scope, user_id)
        VALUES ('testclient', 'testsecret', NULL, 'client_credentials', 'app', NULL);
    END IF;

    -- ✅ oauth_access_tokens
    SELECT COUNT(*) INTO table_exists
    FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'oauth_access_tokens';
    IF table_exists = 0 THEN
        SET @sql = 'CREATE TABLE `oauth_access_tokens` (
                        `access_token` varchar(40) NOT NULL,
                        `client_id` varchar(80) NOT NULL,
                        `user_id` varchar(80) DEFAULT NULL,
                        `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                        `scope` varchar(4000) DEFAULT NULL,
                        PRIMARY KEY (`access_token`)
                    ) ENGINE=InnoDB';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ oauth_authorization_codes
    SELECT COUNT(*) INTO table_exists
    FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'oauth_authorization_codes';
    IF table_exists = 0 THEN
        SET @sql = 'CREATE TABLE `oauth_authorization_codes` (
                        `authorization_code` varchar(40) NOT NULL,
                        `client_id` varchar(80) NOT NULL,
                        `user_id` varchar(80) DEFAULT NULL,
                        `redirect_uri` varchar(2000) DEFAULT NULL,
                        `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                        `scope` varchar(4000) DEFAULT NULL,
                        `id_token` varchar(1000) DEFAULT NULL,
                        PRIMARY KEY (`authorization_code`)
                    ) ENGINE=InnoDB';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ oauth_jwt
    SELECT COUNT(*) INTO table_exists
    FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'oauth_jwt';
    IF table_exists = 0 THEN
        SET @sql = 'CREATE TABLE `oauth_jwt` (
                        `client_id` varchar(80) NOT NULL,
                        `subject` varchar(80) DEFAULT NULL,
                        `public_key` varchar(2000) NOT NULL
                    ) ENGINE=InnoDB';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ oauth_refresh_tokens
    SELECT COUNT(*) INTO table_exists
    FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'oauth_refresh_tokens';
    IF table_exists = 0 THEN
        SET @sql = 'CREATE TABLE `oauth_refresh_tokens` (
                        `refresh_token` varchar(40) NOT NULL,
                        `client_id` varchar(80) NOT NULL,
                        `user_id` varchar(80) DEFAULT NULL,
                        `expires` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
                        `scope` varchar(4000) DEFAULT NULL,
                        PRIMARY KEY (`refresh_token`)
                    ) ENGINE=InnoDB';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ oauth_scopes
    SELECT COUNT(*) INTO table_exists
    FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'oauth_scopes';
    IF table_exists = 0 THEN
        SET @sql = 'CREATE TABLE `oauth_scopes` (
                        `scope` varchar(80) NOT NULL,
                        `is_default` tinyint(1) DEFAULT NULL,
                        PRIMARY KEY (`scope`)
                    ) ENGINE=InnoDB';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ oauth_users
    SELECT COUNT(*) INTO table_exists
    FROM INFORMATION_SCHEMA.TABLES
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'oauth_users';
    IF table_exists = 0 THEN
        SET @sql = 'CREATE TABLE `oauth_users` (
                        `username` varchar(80) NOT NULL,
                        `password` varchar(80) DEFAULT NULL,
                        `first_name` varchar(80) DEFAULT NULL,
                        `last_name` varchar(80) DEFAULT NULL,
                        `email` varchar(80) DEFAULT NULL,
                        `email_verified` tinyint(1) DEFAULT NULL,
                        `scope` varchar(4000) DEFAULT NULL,
                        PRIMARY KEY (`username`)
                    ) ENGINE=InnoDB';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- insert test user if not exists
    SELECT COUNT(*) INTO record_exists FROM oauth_users WHERE username='zakir200';
    IF record_exists = 0 THEN
        INSERT INTO oauth_users (username, password, first_name, last_name, email, email_verified, scope)
        VALUES ('zakir200', '1234', 'Zakir', 'Islam', 'zakir@gmail.com', 1, 'app');
    END IF;

END$$
DELIMITER ;

-- ✅ Run it
CALL CreateOAuthSchema();


DROP PROCEDURE IF EXISTS UpdateCustomSchema;
DELIMITER $$ 
CREATE PROCEDURE UpdateCustomSchema()
BEGIN 
    DECLARE column_exists INT DEFAULT 0;
    DECLARE table_exists INT DEFAULT 0;
    DECLARE record_exists INT DEFAULT 0;

    -- ✅ 1. Add kot_print_online_self_order to tbl_companies
    SELECT COUNT(*) INTO column_exists
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'tbl_companies' AND COLUMN_NAME = 'kot_print_online_self_order';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` 
                    ADD `kot_print_online_self_order` INT NOT NULL DEFAULT ''2'' 
                    AFTER `sos_enable_reservation`';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ 2. Create tbl_carts if not exists
    SELECT COUNT(*) INTO table_exists
    FROM INFORMATION_SCHEMA.TABLES 
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'tbl_carts';
    IF table_exists = 0 THEN
        SET @sql = 'CREATE TABLE `tbl_carts` (
                        `id` INT NOT NULL AUTO_INCREMENT,
                        `user_id` INT NOT NULL,
                        `outlet_id` INT NOT NULL,
                        `json_content` TEXT NOT NULL,
                        PRIMARY KEY (`id`)
                    ) ENGINE=InnoDB';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ 3. Add company_id to tbl_carts
    SELECT COUNT(*) INTO column_exists
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'tbl_carts' AND COLUMN_NAME = 'company_id';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_carts` 
                    ADD `company_id` INT NOT NULL DEFAULT ''0'' 
                    AFTER `outlet_id`';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ 4. Add show_order_full_short to tbl_companies
    SELECT COUNT(*) INTO column_exists
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'tbl_companies' AND COLUMN_NAME = 'show_order_full_short';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` 
                    ADD `show_order_full_short` INT NOT NULL DEFAULT ''1'' 
                    AFTER `kot_print_online_self_order`';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ 5. Insert tbl_access rows if not exists
    SELECT COUNT(*) INTO record_exists FROM tbl_access WHERE module_name='serviceDeliveryChargeReport';
    IF record_exists = 0 THEN
        INSERT INTO `tbl_access` (`module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
        VALUES ('serviceDeliveryChargeReport', '', 'serviceDeliveryChargeReport', '0', '8', 'Live');
    END IF;

    SELECT COUNT(*) INTO record_exists FROM tbl_access WHERE parent_id='370' AND function_name='view';
    IF record_exists = 0 THEN
        INSERT INTO `tbl_access` (`module_name`, `function_name`, `label_name`, `parent_id`, `main_module_id`, `del_status`) 
        VALUES ('', 'view', 'view', '370', NULL, 'Live');
    END IF;

    -- ✅ 6. Add discount_reason to tbl_kitchen_sales_details
    SELECT COUNT(*) INTO column_exists
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'tbl_kitchen_sales_details' AND COLUMN_NAME = 'discount_reason';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_kitchen_sales_details` 
                    ADD `discount_reason` VARCHAR(250) NULL DEFAULT NULL 
                    AFTER `del_status`';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ 7. Add discount_reason to tbl_sales_details
    SELECT COUNT(*) INTO column_exists
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'tbl_sales_details' AND COLUMN_NAME = 'discount_reason';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_sales_details` 
                    ADD `discount_reason` VARCHAR(250) NULL DEFAULT NULL 
                    AFTER `del_status`';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

    -- ✅ 8. Add take_away_service_charge to tbl_companies
    SELECT COUNT(*) INTO column_exists
    FROM INFORMATION_SCHEMA.COLUMNS 
    WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = 'tbl_companies' AND COLUMN_NAME = 'take_away_service_charge';
    IF column_exists = 0 THEN
        SET @sql = 'ALTER TABLE `tbl_companies` 
                    ADD `take_away_service_charge` VARCHAR(50) NULL DEFAULT NULL 
                    AFTER `service_amount`';
        PREPARE stmt FROM @sql; EXECUTE stmt; DEALLOCATE PREPARE stmt;
    END IF;

END$$
DELIMITER ;

-- ✅ Run it
CALL UpdateCustomSchema();
