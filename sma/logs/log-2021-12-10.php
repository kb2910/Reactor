<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

INFO - 2021-12-10 04:19:22 --> Config Class Initialized
INFO - 2021-12-10 04:19:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:19:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:19:22 --> Utf8 Class Initialized
INFO - 2021-12-10 04:19:22 --> URI Class Initialized
INFO - 2021-12-10 04:19:22 --> Router Class Initialized
INFO - 2021-12-10 04:19:22 --> Output Class Initialized
INFO - 2021-12-10 04:19:22 --> Security Class Initialized
INFO - 2021-12-10 04:19:22 --> CRSF cookie sent
DEBUG - 2021-12-10 04:19:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:19:22 --> Input Class Initialized
INFO - 2021-12-10 04:19:22 --> Language Class Initialized
INFO - 2021-12-10 04:19:22 --> Loader Class Initialized
INFO - 2021-12-10 04:19:22 --> Helper loaded: url_helper
INFO - 2021-12-10 04:19:22 --> Helper loaded: form_helper
INFO - 2021-12-10 04:19:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:19:22 --> Helper loaded: language_helper
INFO - 2021-12-10 04:19:22 --> Helper loaded: file_helper
INFO - 2021-12-10 04:19:22 --> Helper loaded: date_helper
INFO - 2021-12-10 04:19:22 --> Database Driver Class Initialized
INFO - 2021-12-10 04:19:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:19:22 --> Parser Class Initialized
INFO - 2021-12-10 04:19:22 --> Model Class Initialized
INFO - 2021-12-10 04:19:22 --> Model Class Initialized
INFO - 2021-12-10 04:19:22 --> Controller Class Initialized
INFO - 2021-12-10 04:19:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:19:23 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:19:23 --> Could not find the language line "today"
INFO - 2021-12-10 04:19:23 --> Model Class Initialized
INFO - 2021-12-10 04:19:23 --> Helper loaded: text_helper
INFO - 2021-12-10 04:19:23 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:19:23 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:19:23 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sale_id`=`sma_sales`.`id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 04:19:23 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:37:33 --> Config Class Initialized
INFO - 2021-12-10 04:37:33 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:37:33 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:37:33 --> Utf8 Class Initialized
INFO - 2021-12-10 04:37:33 --> URI Class Initialized
INFO - 2021-12-10 04:37:33 --> Router Class Initialized
INFO - 2021-12-10 04:37:33 --> Output Class Initialized
INFO - 2021-12-10 04:37:33 --> Security Class Initialized
INFO - 2021-12-10 04:37:33 --> CRSF cookie sent
DEBUG - 2021-12-10 04:37:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:37:33 --> Input Class Initialized
INFO - 2021-12-10 04:37:33 --> Language Class Initialized
INFO - 2021-12-10 04:37:33 --> Loader Class Initialized
INFO - 2021-12-10 04:37:33 --> Helper loaded: url_helper
INFO - 2021-12-10 04:37:33 --> Helper loaded: form_helper
INFO - 2021-12-10 04:37:33 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:37:33 --> Helper loaded: language_helper
INFO - 2021-12-10 04:37:33 --> Helper loaded: file_helper
INFO - 2021-12-10 04:37:33 --> Helper loaded: date_helper
INFO - 2021-12-10 04:37:33 --> Database Driver Class Initialized
INFO - 2021-12-10 04:37:33 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:37:33 --> Parser Class Initialized
INFO - 2021-12-10 04:37:33 --> Model Class Initialized
INFO - 2021-12-10 04:37:33 --> Model Class Initialized
INFO - 2021-12-10 04:37:33 --> Controller Class Initialized
INFO - 2021-12-10 04:37:33 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:37:33 --> Config Class Initialized
INFO - 2021-12-10 04:37:33 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:37:33 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:37:33 --> Utf8 Class Initialized
INFO - 2021-12-10 04:37:33 --> URI Class Initialized
INFO - 2021-12-10 04:37:33 --> Router Class Initialized
INFO - 2021-12-10 04:37:33 --> Output Class Initialized
INFO - 2021-12-10 04:37:33 --> Security Class Initialized
INFO - 2021-12-10 04:37:33 --> CRSF cookie sent
DEBUG - 2021-12-10 04:37:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:37:33 --> Input Class Initialized
INFO - 2021-12-10 04:37:33 --> Language Class Initialized
INFO - 2021-12-10 04:37:34 --> Loader Class Initialized
INFO - 2021-12-10 04:37:34 --> Helper loaded: url_helper
INFO - 2021-12-10 04:37:34 --> Helper loaded: form_helper
INFO - 2021-12-10 04:37:34 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:37:34 --> Helper loaded: language_helper
INFO - 2021-12-10 04:37:34 --> Helper loaded: file_helper
INFO - 2021-12-10 04:37:34 --> Helper loaded: date_helper
INFO - 2021-12-10 04:37:34 --> Database Driver Class Initialized
INFO - 2021-12-10 04:37:34 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:37:34 --> Parser Class Initialized
INFO - 2021-12-10 04:37:34 --> Model Class Initialized
INFO - 2021-12-10 04:37:34 --> Model Class Initialized
INFO - 2021-12-10 04:37:34 --> Controller Class Initialized
INFO - 2021-12-10 04:37:34 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:37:34 --> Language file loaded: language/spanish/auth_lang.php
INFO - 2021-12-10 04:37:34 --> Form Validation Class Initialized
INFO - 2021-12-10 04:37:34 --> Model Class Initialized
DEBUG - 2021-12-10 04:37:34 --> Config file loaded: C:\wamp64\www\Reactor\sma\config/ion_auth.php
INFO - 2021-12-10 04:37:34 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/auth/login.php
INFO - 2021-12-10 04:37:34 --> Final output sent to browser
DEBUG - 2021-12-10 04:37:34 --> Total execution time: 1.2450
INFO - 2021-12-10 04:37:45 --> Config Class Initialized
INFO - 2021-12-10 04:37:45 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:37:45 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:37:45 --> Utf8 Class Initialized
INFO - 2021-12-10 04:37:45 --> URI Class Initialized
INFO - 2021-12-10 04:37:45 --> Router Class Initialized
INFO - 2021-12-10 04:37:45 --> Output Class Initialized
INFO - 2021-12-10 04:37:45 --> Security Class Initialized
INFO - 2021-12-10 04:37:45 --> CRSF cookie sent
INFO - 2021-12-10 04:37:45 --> CSRF token verified
DEBUG - 2021-12-10 04:37:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:37:45 --> Input Class Initialized
INFO - 2021-12-10 04:37:45 --> Language Class Initialized
INFO - 2021-12-10 04:37:46 --> Loader Class Initialized
INFO - 2021-12-10 04:37:46 --> Helper loaded: url_helper
INFO - 2021-12-10 04:37:46 --> Helper loaded: form_helper
INFO - 2021-12-10 04:37:46 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:37:46 --> Helper loaded: language_helper
INFO - 2021-12-10 04:37:46 --> Helper loaded: file_helper
INFO - 2021-12-10 04:37:46 --> Helper loaded: date_helper
INFO - 2021-12-10 04:37:46 --> Database Driver Class Initialized
INFO - 2021-12-10 04:37:46 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:37:46 --> Parser Class Initialized
INFO - 2021-12-10 04:37:46 --> Model Class Initialized
INFO - 2021-12-10 04:37:46 --> Model Class Initialized
INFO - 2021-12-10 04:37:46 --> Controller Class Initialized
INFO - 2021-12-10 04:37:46 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:37:46 --> Language file loaded: language/spanish/auth_lang.php
INFO - 2021-12-10 04:37:46 --> Form Validation Class Initialized
INFO - 2021-12-10 04:37:46 --> Model Class Initialized
DEBUG - 2021-12-10 04:37:46 --> Config file loaded: C:\wamp64\www\Reactor\sma\config/ion_auth.php
INFO - 2021-12-10 04:37:46 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 04:37:47 --> Query error: Field 'id' doesn't have a default value - Invalid query: INSERT INTO `sma_user_logins` (`user_id`, `ip_address`, `login`) VALUES ('9', '127.0.0.1', 'dummy@gmail.com')
INFO - 2021-12-10 04:37:47 --> Config Class Initialized
INFO - 2021-12-10 04:37:47 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:37:47 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:37:47 --> Utf8 Class Initialized
INFO - 2021-12-10 04:37:47 --> URI Class Initialized
INFO - 2021-12-10 04:37:47 --> Router Class Initialized
INFO - 2021-12-10 04:37:47 --> Output Class Initialized
INFO - 2021-12-10 04:37:47 --> Security Class Initialized
INFO - 2021-12-10 04:37:47 --> CRSF cookie sent
DEBUG - 2021-12-10 04:37:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:37:47 --> Input Class Initialized
INFO - 2021-12-10 04:37:47 --> Language Class Initialized
INFO - 2021-12-10 04:37:47 --> Loader Class Initialized
INFO - 2021-12-10 04:37:47 --> Helper loaded: url_helper
INFO - 2021-12-10 04:37:47 --> Helper loaded: form_helper
INFO - 2021-12-10 04:37:47 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:37:47 --> Helper loaded: language_helper
INFO - 2021-12-10 04:37:47 --> Helper loaded: file_helper
INFO - 2021-12-10 04:37:47 --> Helper loaded: date_helper
INFO - 2021-12-10 04:37:47 --> Database Driver Class Initialized
INFO - 2021-12-10 04:37:47 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:37:47 --> Parser Class Initialized
INFO - 2021-12-10 04:37:47 --> Model Class Initialized
INFO - 2021-12-10 04:37:47 --> Model Class Initialized
INFO - 2021-12-10 04:37:47 --> Controller Class Initialized
INFO - 2021-12-10 04:37:47 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:37:47 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:37:47 --> Could not find the language line "today"
INFO - 2021-12-10 04:37:47 --> Model Class Initialized
INFO - 2021-12-10 04:37:47 --> Helper loaded: text_helper
INFO - 2021-12-10 04:37:47 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:37:47 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:37:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `c' at line 2 - Invalid query: SELECT *
FROM `SELECT sales`.`sma_id` as `id`, `sales`.`sma_date`, `sales`.`sma_reference_no`, `sales`.`sma_biller`, `sales`.`sma_customer`, `sales`.`sma_grand_total`, `sales`.`sma_paid`, (sales.grand_total-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `companies`.`sma_email` as `cemail FROM sma_sales sales LEFT JOIN sma_companies companies on companies`.`id=sales`.`customer_id LEFT JOIN sma_payments payments on payments`.`sale_id=sales`.`id GROUP BY sales`.`id`
WHERE `pos` = 1
ERROR - 2021-12-10 04:37:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `c' at line 2 - Invalid query: SELECT *
FROM `SELECT sales`.`sma_id` as `id`, `sales`.`sma_date`, `sales`.`sma_reference_no`, `sales`.`sma_biller`, `sales`.`sma_customer`, `sales`.`sma_grand_total`, `sales`.`sma_paid`, (sales.grand_total-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `companies`.`sma_email` as `cemail FROM sma_sales sales LEFT JOIN sma_companies companies on companies`.`id=sales`.`customer_id LEFT JOIN sma_payments payments on payments`.`sale_id=sales`.`id GROUP BY sales`.`id`
WHERE `pos` = 1
ERROR - 2021-12-10 04:37:47 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 438
INFO - 2021-12-10 04:37:50 --> Config Class Initialized
INFO - 2021-12-10 04:37:50 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:37:50 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:37:50 --> Utf8 Class Initialized
INFO - 2021-12-10 04:37:50 --> URI Class Initialized
INFO - 2021-12-10 04:37:50 --> Router Class Initialized
INFO - 2021-12-10 04:37:50 --> Output Class Initialized
INFO - 2021-12-10 04:37:50 --> Security Class Initialized
INFO - 2021-12-10 04:37:50 --> CRSF cookie sent
DEBUG - 2021-12-10 04:37:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:37:50 --> Input Class Initialized
INFO - 2021-12-10 04:37:50 --> Language Class Initialized
INFO - 2021-12-10 04:37:50 --> Loader Class Initialized
INFO - 2021-12-10 04:37:50 --> Helper loaded: url_helper
INFO - 2021-12-10 04:37:50 --> Helper loaded: form_helper
INFO - 2021-12-10 04:37:50 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:37:50 --> Helper loaded: language_helper
INFO - 2021-12-10 04:37:50 --> Helper loaded: file_helper
INFO - 2021-12-10 04:37:50 --> Helper loaded: date_helper
INFO - 2021-12-10 04:37:50 --> Database Driver Class Initialized
INFO - 2021-12-10 04:37:50 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:37:50 --> Parser Class Initialized
INFO - 2021-12-10 04:37:50 --> Model Class Initialized
INFO - 2021-12-10 04:37:50 --> Model Class Initialized
INFO - 2021-12-10 04:37:50 --> Controller Class Initialized
INFO - 2021-12-10 04:37:50 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:37:50 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:37:50 --> Could not find the language line "today"
INFO - 2021-12-10 04:37:50 --> Model Class Initialized
INFO - 2021-12-10 04:37:50 --> Helper loaded: text_helper
INFO - 2021-12-10 04:37:50 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:37:50 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `c' at line 2 - Invalid query: SELECT *
FROM `SELECT sales`.`sma_id` as `id`, `sales`.`sma_date`, `sales`.`sma_reference_no`, `sales`.`sma_biller`, `sales`.`sma_customer`, `sales`.`sma_grand_total`, `sales`.`sma_paid`, (sales.grand_total-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `companies`.`sma_email` as `cemail FROM sma_sales sales LEFT JOIN sma_companies companies on companies`.`id=sales`.`customer_id LEFT JOIN sma_payments payments on payments`.`sale_id=sales`.`id GROUP BY sales`.`id`
WHERE `pos` = 1
ERROR - 2021-12-10 04:37:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `c' at line 2 - Invalid query: SELECT *
FROM `SELECT sales`.`sma_id` as `id`, `sales`.`sma_date`, `sales`.`sma_reference_no`, `sales`.`sma_biller`, `sales`.`sma_customer`, `sales`.`sma_grand_total`, `sales`.`sma_paid`, (sales.grand_total-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `companies`.`sma_email` as `cemail FROM sma_sales sales LEFT JOIN sma_companies companies on companies`.`id=sales`.`customer_id LEFT JOIN sma_payments payments on payments`.`sale_id=sales`.`id GROUP BY sales`.`id`
WHERE `pos` = 1
ERROR - 2021-12-10 04:37:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 438
INFO - 2021-12-10 04:38:20 --> Config Class Initialized
INFO - 2021-12-10 04:38:20 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:38:21 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:38:21 --> Utf8 Class Initialized
INFO - 2021-12-10 04:38:21 --> URI Class Initialized
INFO - 2021-12-10 04:38:21 --> Router Class Initialized
INFO - 2021-12-10 04:38:21 --> Output Class Initialized
INFO - 2021-12-10 04:38:21 --> Security Class Initialized
INFO - 2021-12-10 04:38:21 --> CRSF cookie sent
DEBUG - 2021-12-10 04:38:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:38:21 --> Input Class Initialized
INFO - 2021-12-10 04:38:21 --> Language Class Initialized
INFO - 2021-12-10 04:38:21 --> Loader Class Initialized
INFO - 2021-12-10 04:38:21 --> Helper loaded: url_helper
INFO - 2021-12-10 04:38:21 --> Helper loaded: form_helper
INFO - 2021-12-10 04:38:21 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:38:21 --> Helper loaded: language_helper
INFO - 2021-12-10 04:38:21 --> Helper loaded: file_helper
INFO - 2021-12-10 04:38:21 --> Helper loaded: date_helper
INFO - 2021-12-10 04:38:21 --> Database Driver Class Initialized
INFO - 2021-12-10 04:38:21 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:38:21 --> Parser Class Initialized
INFO - 2021-12-10 04:38:21 --> Model Class Initialized
INFO - 2021-12-10 04:38:21 --> Model Class Initialized
INFO - 2021-12-10 04:38:21 --> Controller Class Initialized
INFO - 2021-12-10 04:38:21 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:38:21 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:38:21 --> Could not find the language line "today"
INFO - 2021-12-10 04:38:21 --> Model Class Initialized
INFO - 2021-12-10 04:38:21 --> Helper loaded: text_helper
INFO - 2021-12-10 04:38:21 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:38:21 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:38:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `c' at line 2 - Invalid query: SELECT *
FROM `SELECT sales`.`sma_id` as `id`, `sales`.`sma_date`, `sales`.`sma_reference_no`, `sales`.`sma_biller`, `sales`.`sma_customer`, `sales`.`sma_grand_total`, `sales`.`sma_paid`, (sales.grand_total-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `companies`.`sma_email` as `cemail FROM sma_sales sales LEFT JOIN sma_companies companies on companies`.`id=sales`.`customer_id LEFT JOIN sma_payments payments on payments`.`sale_id=sales`.`id GROUP BY sales`.`id`
ERROR - 2021-12-10 04:38:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `c' at line 2 - Invalid query: SELECT *
FROM `SELECT sales`.`sma_id` as `id`, `sales`.`sma_date`, `sales`.`sma_reference_no`, `sales`.`sma_biller`, `sales`.`sma_customer`, `sales`.`sma_grand_total`, `sales`.`sma_paid`, (sales.grand_total-sales.paid) as balance, `sales`.`sma_payment_status`, `payments`.`sma_note`, `companies`.`sma_email` as `cemail FROM sma_sales sales LEFT JOIN sma_companies companies on companies`.`id=sales`.`customer_id LEFT JOIN sma_payments payments on payments`.`sale_id=sales`.`id GROUP BY sales`.`id`
ERROR - 2021-12-10 04:38:22 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 438
INFO - 2021-12-10 04:38:39 --> Config Class Initialized
INFO - 2021-12-10 04:38:39 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:38:39 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:38:39 --> Utf8 Class Initialized
INFO - 2021-12-10 04:38:39 --> URI Class Initialized
INFO - 2021-12-10 04:38:39 --> Router Class Initialized
INFO - 2021-12-10 04:38:39 --> Output Class Initialized
INFO - 2021-12-10 04:38:39 --> Security Class Initialized
INFO - 2021-12-10 04:38:39 --> CRSF cookie sent
DEBUG - 2021-12-10 04:38:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:38:39 --> Input Class Initialized
INFO - 2021-12-10 04:38:39 --> Language Class Initialized
INFO - 2021-12-10 04:38:39 --> Loader Class Initialized
INFO - 2021-12-10 04:38:39 --> Helper loaded: url_helper
INFO - 2021-12-10 04:38:39 --> Helper loaded: form_helper
INFO - 2021-12-10 04:38:39 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:38:39 --> Helper loaded: language_helper
INFO - 2021-12-10 04:38:39 --> Helper loaded: file_helper
INFO - 2021-12-10 04:38:39 --> Helper loaded: date_helper
INFO - 2021-12-10 04:38:39 --> Database Driver Class Initialized
INFO - 2021-12-10 04:38:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:38:39 --> Parser Class Initialized
INFO - 2021-12-10 04:38:39 --> Model Class Initialized
INFO - 2021-12-10 04:38:39 --> Model Class Initialized
INFO - 2021-12-10 04:38:39 --> Controller Class Initialized
INFO - 2021-12-10 04:38:39 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:38:39 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:38:39 --> Could not find the language line "today"
INFO - 2021-12-10 04:38:39 --> Model Class Initialized
INFO - 2021-12-10 04:38:39 --> Helper loaded: text_helper
INFO - 2021-12-10 04:38:39 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:38:39 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:38:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-sales.paid) as balance, `sales`.`sma_payment_status`, `companies`.`sma_email` a' at line 2 - Invalid query: SELECT *
FROM `SELECT sales`.`sma_id` as `id`, `sales`.`sma_date`, `sales`.`sma_reference_no`, `sales`.`sma_biller`, `sales`.`sma_customer`, `sales`.`sma_grand_total`, `sales`.`sma_paid`, (sales.grand_total-sales.paid) as balance, `sales`.`sma_payment_status`, `companies`.`sma_email` as `cemail FROM sma_sales sales LEFT JOIN sma_companies companies on companies`.`id=sales`.`customer_id GROUP BY sales`.`id`
ERROR - 2021-12-10 04:38:39 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-sales.paid) as balance, `sales`.`sma_payment_status`, `companies`.`sma_email` a' at line 2 - Invalid query: SELECT *
FROM `SELECT sales`.`sma_id` as `id`, `sales`.`sma_date`, `sales`.`sma_reference_no`, `sales`.`sma_biller`, `sales`.`sma_customer`, `sales`.`sma_grand_total`, `sales`.`sma_paid`, (sales.grand_total-sales.paid) as balance, `sales`.`sma_payment_status`, `companies`.`sma_email` as `cemail FROM sma_sales sales LEFT JOIN sma_companies companies on companies`.`id=sales`.`customer_id GROUP BY sales`.`id`
ERROR - 2021-12-10 04:38:39 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 438
INFO - 2021-12-10 04:39:00 --> Config Class Initialized
INFO - 2021-12-10 04:39:00 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:39:00 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:39:00 --> Utf8 Class Initialized
INFO - 2021-12-10 04:39:00 --> URI Class Initialized
INFO - 2021-12-10 04:39:00 --> Router Class Initialized
INFO - 2021-12-10 04:39:00 --> Output Class Initialized
INFO - 2021-12-10 04:39:00 --> Security Class Initialized
INFO - 2021-12-10 04:39:00 --> CRSF cookie sent
DEBUG - 2021-12-10 04:39:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:39:00 --> Input Class Initialized
INFO - 2021-12-10 04:39:00 --> Language Class Initialized
INFO - 2021-12-10 04:39:00 --> Loader Class Initialized
INFO - 2021-12-10 04:39:00 --> Helper loaded: url_helper
INFO - 2021-12-10 04:39:00 --> Helper loaded: form_helper
INFO - 2021-12-10 04:39:00 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:39:00 --> Helper loaded: language_helper
INFO - 2021-12-10 04:39:00 --> Helper loaded: file_helper
INFO - 2021-12-10 04:39:00 --> Helper loaded: date_helper
INFO - 2021-12-10 04:39:00 --> Database Driver Class Initialized
INFO - 2021-12-10 04:39:00 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:39:00 --> Parser Class Initialized
INFO - 2021-12-10 04:39:00 --> Model Class Initialized
INFO - 2021-12-10 04:39:00 --> Model Class Initialized
INFO - 2021-12-10 04:39:00 --> Controller Class Initialized
INFO - 2021-12-10 04:39:00 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:39:00 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:39:00 --> Could not find the language line "today"
INFO - 2021-12-10 04:39:00 --> Model Class Initialized
INFO - 2021-12-10 04:39:00 --> Helper loaded: text_helper
INFO - 2021-12-10 04:39:00 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:39:00 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:39:00 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sale_id`=`sma_sales`.`id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 04:39:00 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:39:02 --> Config Class Initialized
INFO - 2021-12-10 04:39:02 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:39:02 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:39:02 --> Utf8 Class Initialized
INFO - 2021-12-10 04:39:02 --> URI Class Initialized
INFO - 2021-12-10 04:39:02 --> Router Class Initialized
INFO - 2021-12-10 04:39:02 --> Output Class Initialized
INFO - 2021-12-10 04:39:02 --> Security Class Initialized
INFO - 2021-12-10 04:39:02 --> CRSF cookie sent
DEBUG - 2021-12-10 04:39:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:39:02 --> Input Class Initialized
INFO - 2021-12-10 04:39:02 --> Language Class Initialized
INFO - 2021-12-10 04:39:02 --> Loader Class Initialized
INFO - 2021-12-10 04:39:02 --> Helper loaded: url_helper
INFO - 2021-12-10 04:39:02 --> Helper loaded: form_helper
INFO - 2021-12-10 04:39:02 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:39:02 --> Helper loaded: language_helper
INFO - 2021-12-10 04:39:02 --> Helper loaded: file_helper
INFO - 2021-12-10 04:39:02 --> Helper loaded: date_helper
INFO - 2021-12-10 04:39:02 --> Database Driver Class Initialized
INFO - 2021-12-10 04:39:02 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:39:02 --> Parser Class Initialized
INFO - 2021-12-10 04:39:02 --> Model Class Initialized
INFO - 2021-12-10 04:39:02 --> Model Class Initialized
INFO - 2021-12-10 04:39:02 --> Controller Class Initialized
INFO - 2021-12-10 04:39:02 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:39:02 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:39:02 --> Could not find the language line "today"
INFO - 2021-12-10 04:39:02 --> Model Class Initialized
INFO - 2021-12-10 04:39:02 --> Helper loaded: text_helper
INFO - 2021-12-10 04:39:02 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:39:02 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:39:02 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sale_id`=`sma_sales`.`id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 04:39:02 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:39:05 --> Config Class Initialized
INFO - 2021-12-10 04:39:05 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:39:05 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:39:05 --> Utf8 Class Initialized
INFO - 2021-12-10 04:39:05 --> URI Class Initialized
INFO - 2021-12-10 04:39:05 --> Router Class Initialized
INFO - 2021-12-10 04:39:05 --> Output Class Initialized
INFO - 2021-12-10 04:39:05 --> Security Class Initialized
INFO - 2021-12-10 04:39:05 --> CRSF cookie sent
DEBUG - 2021-12-10 04:39:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:39:06 --> Input Class Initialized
INFO - 2021-12-10 04:39:06 --> Language Class Initialized
INFO - 2021-12-10 04:39:06 --> Loader Class Initialized
INFO - 2021-12-10 04:39:06 --> Helper loaded: url_helper
INFO - 2021-12-10 04:39:06 --> Helper loaded: form_helper
INFO - 2021-12-10 04:39:06 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:39:06 --> Helper loaded: language_helper
INFO - 2021-12-10 04:39:06 --> Helper loaded: file_helper
INFO - 2021-12-10 04:39:06 --> Helper loaded: date_helper
INFO - 2021-12-10 04:39:06 --> Database Driver Class Initialized
INFO - 2021-12-10 04:39:06 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:39:06 --> Parser Class Initialized
INFO - 2021-12-10 04:39:06 --> Model Class Initialized
INFO - 2021-12-10 04:39:06 --> Model Class Initialized
INFO - 2021-12-10 04:39:06 --> Controller Class Initialized
INFO - 2021-12-10 04:39:06 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:39:06 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:39:06 --> Could not find the language line "today"
INFO - 2021-12-10 04:39:06 --> Model Class Initialized
INFO - 2021-12-10 04:39:06 --> Helper loaded: text_helper
INFO - 2021-12-10 04:39:06 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:39:06 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:39:06 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:39:06 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:39:06 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:39:06 --> Could not find the language line "backups"
INFO - 2021-12-10 04:39:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 04:39:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 04:39:06 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:39:06 --> Could not find the language line "due"
ERROR - 2021-12-10 04:39:06 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:39:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:39:06 --> Final output sent to browser
DEBUG - 2021-12-10 04:39:06 --> Total execution time: 0.8353
INFO - 2021-12-10 04:39:06 --> Config Class Initialized
INFO - 2021-12-10 04:39:06 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:39:06 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:39:06 --> Utf8 Class Initialized
INFO - 2021-12-10 04:39:06 --> URI Class Initialized
INFO - 2021-12-10 04:39:06 --> Router Class Initialized
INFO - 2021-12-10 04:39:06 --> Output Class Initialized
INFO - 2021-12-10 04:39:06 --> Security Class Initialized
INFO - 2021-12-10 04:39:06 --> CRSF cookie sent
INFO - 2021-12-10 04:39:06 --> CSRF token verified
DEBUG - 2021-12-10 04:39:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:39:06 --> Input Class Initialized
INFO - 2021-12-10 04:39:06 --> Language Class Initialized
INFO - 2021-12-10 04:39:07 --> Loader Class Initialized
INFO - 2021-12-10 04:39:07 --> Helper loaded: url_helper
INFO - 2021-12-10 04:39:07 --> Helper loaded: form_helper
INFO - 2021-12-10 04:39:07 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:39:07 --> Helper loaded: language_helper
INFO - 2021-12-10 04:39:07 --> Helper loaded: file_helper
INFO - 2021-12-10 04:39:07 --> Helper loaded: date_helper
INFO - 2021-12-10 04:39:07 --> Database Driver Class Initialized
INFO - 2021-12-10 04:39:07 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:39:07 --> Parser Class Initialized
INFO - 2021-12-10 04:39:07 --> Model Class Initialized
INFO - 2021-12-10 04:39:07 --> Model Class Initialized
INFO - 2021-12-10 04:39:07 --> Controller Class Initialized
INFO - 2021-12-10 04:39:07 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:39:07 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:39:07 --> Could not find the language line "today"
INFO - 2021-12-10 04:39:07 --> Model Class Initialized
INFO - 2021-12-10 04:39:07 --> Helper loaded: text_helper
INFO - 2021-12-10 04:39:07 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:39:07 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:39:07 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sale_id`=`sma_sales`.`id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2021-12-10 04:39:07 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:39:21 --> Config Class Initialized
INFO - 2021-12-10 04:39:21 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:39:21 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:39:21 --> Utf8 Class Initialized
INFO - 2021-12-10 04:39:21 --> URI Class Initialized
INFO - 2021-12-10 04:39:21 --> Router Class Initialized
INFO - 2021-12-10 04:39:21 --> Output Class Initialized
INFO - 2021-12-10 04:39:21 --> Security Class Initialized
INFO - 2021-12-10 04:39:21 --> CRSF cookie sent
DEBUG - 2021-12-10 04:39:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:39:21 --> Input Class Initialized
INFO - 2021-12-10 04:39:21 --> Language Class Initialized
INFO - 2021-12-10 04:39:21 --> Loader Class Initialized
INFO - 2021-12-10 04:39:21 --> Helper loaded: url_helper
INFO - 2021-12-10 04:39:21 --> Helper loaded: form_helper
INFO - 2021-12-10 04:39:21 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:39:21 --> Helper loaded: language_helper
INFO - 2021-12-10 04:39:21 --> Helper loaded: file_helper
INFO - 2021-12-10 04:39:21 --> Helper loaded: date_helper
INFO - 2021-12-10 04:39:21 --> Database Driver Class Initialized
INFO - 2021-12-10 04:39:21 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:39:21 --> Parser Class Initialized
INFO - 2021-12-10 04:39:21 --> Model Class Initialized
INFO - 2021-12-10 04:39:21 --> Model Class Initialized
INFO - 2021-12-10 04:39:21 --> Controller Class Initialized
INFO - 2021-12-10 04:39:21 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:39:21 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:39:21 --> Could not find the language line "today"
INFO - 2021-12-10 04:39:21 --> Model Class Initialized
INFO - 2021-12-10 04:39:21 --> Helper loaded: text_helper
INFO - 2021-12-10 04:39:21 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:39:21 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:39:21 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:39:21 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:39:21 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:39:21 --> Could not find the language line "backups"
INFO - 2021-12-10 04:39:21 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 04:39:21 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 04:39:21 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:39:21 --> Could not find the language line "due"
ERROR - 2021-12-10 04:39:21 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:39:21 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:39:21 --> Final output sent to browser
DEBUG - 2021-12-10 04:39:21 --> Total execution time: 0.3646
INFO - 2021-12-10 04:39:21 --> Config Class Initialized
INFO - 2021-12-10 04:39:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:39:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:39:22 --> Utf8 Class Initialized
INFO - 2021-12-10 04:39:22 --> URI Class Initialized
INFO - 2021-12-10 04:39:22 --> Router Class Initialized
INFO - 2021-12-10 04:39:22 --> Output Class Initialized
INFO - 2021-12-10 04:39:22 --> Security Class Initialized
INFO - 2021-12-10 04:39:22 --> CRSF cookie sent
INFO - 2021-12-10 04:39:22 --> CSRF token verified
DEBUG - 2021-12-10 04:39:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:39:22 --> Input Class Initialized
INFO - 2021-12-10 04:39:22 --> Language Class Initialized
INFO - 2021-12-10 04:39:22 --> Loader Class Initialized
INFO - 2021-12-10 04:39:22 --> Helper loaded: url_helper
INFO - 2021-12-10 04:39:22 --> Helper loaded: form_helper
INFO - 2021-12-10 04:39:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:39:22 --> Helper loaded: language_helper
INFO - 2021-12-10 04:39:22 --> Helper loaded: file_helper
INFO - 2021-12-10 04:39:22 --> Helper loaded: date_helper
INFO - 2021-12-10 04:39:22 --> Database Driver Class Initialized
INFO - 2021-12-10 04:39:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:39:22 --> Parser Class Initialized
INFO - 2021-12-10 04:39:22 --> Model Class Initialized
INFO - 2021-12-10 04:39:22 --> Model Class Initialized
INFO - 2021-12-10 04:39:22 --> Controller Class Initialized
INFO - 2021-12-10 04:39:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:39:22 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:39:22 --> Could not find the language line "today"
INFO - 2021-12-10 04:39:22 --> Model Class Initialized
INFO - 2021-12-10 04:39:22 --> Helper loaded: text_helper
INFO - 2021-12-10 04:39:22 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:39:22 --> Form Validation Class Initialized
INFO - 2021-12-10 04:39:22 --> Final output sent to browser
DEBUG - 2021-12-10 04:39:22 --> Total execution time: 0.3156
INFO - 2021-12-10 04:40:13 --> Config Class Initialized
INFO - 2021-12-10 04:40:13 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:40:13 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:40:13 --> Utf8 Class Initialized
INFO - 2021-12-10 04:40:13 --> URI Class Initialized
INFO - 2021-12-10 04:40:13 --> Router Class Initialized
INFO - 2021-12-10 04:40:13 --> Output Class Initialized
INFO - 2021-12-10 04:40:13 --> Security Class Initialized
INFO - 2021-12-10 04:40:13 --> CRSF cookie sent
DEBUG - 2021-12-10 04:40:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:40:13 --> Input Class Initialized
INFO - 2021-12-10 04:40:13 --> Language Class Initialized
INFO - 2021-12-10 04:40:13 --> Loader Class Initialized
INFO - 2021-12-10 04:40:13 --> Helper loaded: url_helper
INFO - 2021-12-10 04:40:13 --> Helper loaded: form_helper
INFO - 2021-12-10 04:40:13 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:40:13 --> Helper loaded: language_helper
INFO - 2021-12-10 04:40:13 --> Helper loaded: file_helper
INFO - 2021-12-10 04:40:13 --> Helper loaded: date_helper
INFO - 2021-12-10 04:40:14 --> Database Driver Class Initialized
INFO - 2021-12-10 04:40:14 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:40:14 --> Parser Class Initialized
INFO - 2021-12-10 04:40:14 --> Model Class Initialized
INFO - 2021-12-10 04:40:14 --> Model Class Initialized
INFO - 2021-12-10 04:40:14 --> Controller Class Initialized
INFO - 2021-12-10 04:40:14 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:40:14 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:40:14 --> Could not find the language line "today"
INFO - 2021-12-10 04:40:14 --> Model Class Initialized
INFO - 2021-12-10 04:40:14 --> Helper loaded: text_helper
INFO - 2021-12-10 04:40:14 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:40:14 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:40:14 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:40:14 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:40:14 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:40:14 --> Could not find the language line "backups"
INFO - 2021-12-10 04:40:14 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 04:40:14 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 04:40:14 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:40:14 --> Could not find the language line "due"
ERROR - 2021-12-10 04:40:14 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:40:14 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:40:14 --> Final output sent to browser
DEBUG - 2021-12-10 04:40:14 --> Total execution time: 0.2976
INFO - 2021-12-10 04:40:14 --> Config Class Initialized
INFO - 2021-12-10 04:40:14 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:40:14 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:40:14 --> Utf8 Class Initialized
INFO - 2021-12-10 04:40:14 --> URI Class Initialized
INFO - 2021-12-10 04:40:14 --> Router Class Initialized
INFO - 2021-12-10 04:40:14 --> Output Class Initialized
INFO - 2021-12-10 04:40:14 --> Security Class Initialized
INFO - 2021-12-10 04:40:14 --> CRSF cookie sent
INFO - 2021-12-10 04:40:14 --> CSRF token verified
DEBUG - 2021-12-10 04:40:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:40:14 --> Input Class Initialized
INFO - 2021-12-10 04:40:14 --> Language Class Initialized
INFO - 2021-12-10 04:40:14 --> Loader Class Initialized
INFO - 2021-12-10 04:40:14 --> Helper loaded: url_helper
INFO - 2021-12-10 04:40:14 --> Helper loaded: form_helper
INFO - 2021-12-10 04:40:14 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:40:14 --> Helper loaded: language_helper
INFO - 2021-12-10 04:40:14 --> Helper loaded: file_helper
INFO - 2021-12-10 04:40:14 --> Helper loaded: date_helper
INFO - 2021-12-10 04:40:14 --> Database Driver Class Initialized
INFO - 2021-12-10 04:40:14 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:40:14 --> Parser Class Initialized
INFO - 2021-12-10 04:40:14 --> Model Class Initialized
INFO - 2021-12-10 04:40:14 --> Model Class Initialized
INFO - 2021-12-10 04:40:14 --> Controller Class Initialized
INFO - 2021-12-10 04:40:14 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:40:14 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:40:14 --> Could not find the language line "today"
INFO - 2021-12-10 04:40:14 --> Model Class Initialized
INFO - 2021-12-10 04:40:14 --> Helper loaded: text_helper
INFO - 2021-12-10 04:40:14 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:40:14 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:40:14 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_payments`.`note`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sale_id`=`sma_sales`.`id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2021-12-10 04:40:14 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:41:11 --> Config Class Initialized
INFO - 2021-12-10 04:41:11 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:41:11 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:41:11 --> Utf8 Class Initialized
INFO - 2021-12-10 04:41:11 --> URI Class Initialized
INFO - 2021-12-10 04:41:11 --> Router Class Initialized
INFO - 2021-12-10 04:41:11 --> Output Class Initialized
INFO - 2021-12-10 04:41:11 --> Security Class Initialized
INFO - 2021-12-10 04:41:11 --> CRSF cookie sent
DEBUG - 2021-12-10 04:41:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:41:11 --> Input Class Initialized
INFO - 2021-12-10 04:41:11 --> Language Class Initialized
INFO - 2021-12-10 04:41:11 --> Loader Class Initialized
INFO - 2021-12-10 04:41:11 --> Helper loaded: url_helper
INFO - 2021-12-10 04:41:11 --> Helper loaded: form_helper
INFO - 2021-12-10 04:41:11 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:41:11 --> Helper loaded: language_helper
INFO - 2021-12-10 04:41:11 --> Helper loaded: file_helper
INFO - 2021-12-10 04:41:11 --> Helper loaded: date_helper
INFO - 2021-12-10 04:41:11 --> Database Driver Class Initialized
INFO - 2021-12-10 04:41:11 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:41:11 --> Parser Class Initialized
INFO - 2021-12-10 04:41:11 --> Model Class Initialized
INFO - 2021-12-10 04:41:11 --> Model Class Initialized
INFO - 2021-12-10 04:41:11 --> Controller Class Initialized
INFO - 2021-12-10 04:41:11 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:41:11 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:41:11 --> Could not find the language line "today"
INFO - 2021-12-10 04:41:11 --> Model Class Initialized
INFO - 2021-12-10 04:41:11 --> Helper loaded: text_helper
INFO - 2021-12-10 04:41:11 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:41:11 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:41:11 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:41:11 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:41:11 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:41:11 --> Could not find the language line "backups"
INFO - 2021-12-10 04:41:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 04:41:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 04:41:11 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:41:11 --> Could not find the language line "due"
ERROR - 2021-12-10 04:41:11 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:41:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:41:11 --> Final output sent to browser
DEBUG - 2021-12-10 04:41:11 --> Total execution time: 0.1945
INFO - 2021-12-10 04:41:12 --> Config Class Initialized
INFO - 2021-12-10 04:41:12 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:41:12 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:41:12 --> Utf8 Class Initialized
INFO - 2021-12-10 04:41:12 --> URI Class Initialized
INFO - 2021-12-10 04:41:12 --> Router Class Initialized
INFO - 2021-12-10 04:41:12 --> Output Class Initialized
INFO - 2021-12-10 04:41:12 --> Security Class Initialized
INFO - 2021-12-10 04:41:12 --> CRSF cookie sent
INFO - 2021-12-10 04:41:12 --> CSRF token verified
DEBUG - 2021-12-10 04:41:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:41:12 --> Input Class Initialized
INFO - 2021-12-10 04:41:12 --> Language Class Initialized
INFO - 2021-12-10 04:41:12 --> Loader Class Initialized
INFO - 2021-12-10 04:41:12 --> Helper loaded: url_helper
INFO - 2021-12-10 04:41:12 --> Helper loaded: form_helper
INFO - 2021-12-10 04:41:12 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:41:12 --> Helper loaded: language_helper
INFO - 2021-12-10 04:41:12 --> Helper loaded: file_helper
INFO - 2021-12-10 04:41:12 --> Helper loaded: date_helper
INFO - 2021-12-10 04:41:12 --> Database Driver Class Initialized
INFO - 2021-12-10 04:41:12 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:41:12 --> Parser Class Initialized
INFO - 2021-12-10 04:41:12 --> Model Class Initialized
INFO - 2021-12-10 04:41:12 --> Model Class Initialized
INFO - 2021-12-10 04:41:12 --> Controller Class Initialized
INFO - 2021-12-10 04:41:12 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:41:12 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:41:12 --> Could not find the language line "today"
INFO - 2021-12-10 04:41:12 --> Model Class Initialized
INFO - 2021-12-10 04:41:12 --> Helper loaded: text_helper
INFO - 2021-12-10 04:41:12 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:41:12 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:41:12 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_payments`.`note`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sale_id`=`sma_sales`.`id`
WHERE `sma_sales`.`pos` = 1
GROUP BY `sma_sales`.`id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2021-12-10 04:41:12 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:42:19 --> Config Class Initialized
INFO - 2021-12-10 04:42:19 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:42:19 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:42:19 --> Utf8 Class Initialized
INFO - 2021-12-10 04:42:19 --> URI Class Initialized
INFO - 2021-12-10 04:42:19 --> Router Class Initialized
INFO - 2021-12-10 04:42:19 --> Output Class Initialized
INFO - 2021-12-10 04:42:19 --> Security Class Initialized
INFO - 2021-12-10 04:42:19 --> CRSF cookie sent
DEBUG - 2021-12-10 04:42:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:42:19 --> Input Class Initialized
INFO - 2021-12-10 04:42:19 --> Language Class Initialized
INFO - 2021-12-10 04:42:19 --> Loader Class Initialized
INFO - 2021-12-10 04:42:19 --> Helper loaded: url_helper
INFO - 2021-12-10 04:42:19 --> Helper loaded: form_helper
INFO - 2021-12-10 04:42:19 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:42:19 --> Helper loaded: language_helper
INFO - 2021-12-10 04:42:19 --> Helper loaded: file_helper
INFO - 2021-12-10 04:42:19 --> Helper loaded: date_helper
INFO - 2021-12-10 04:42:19 --> Database Driver Class Initialized
INFO - 2021-12-10 04:42:19 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:42:19 --> Parser Class Initialized
INFO - 2021-12-10 04:42:19 --> Model Class Initialized
INFO - 2021-12-10 04:42:19 --> Model Class Initialized
INFO - 2021-12-10 04:42:19 --> Controller Class Initialized
INFO - 2021-12-10 04:42:19 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:42:19 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:42:19 --> Could not find the language line "today"
INFO - 2021-12-10 04:42:19 --> Model Class Initialized
INFO - 2021-12-10 04:42:19 --> Helper loaded: text_helper
INFO - 2021-12-10 04:42:19 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:42:19 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:42:19 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:42:19 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:42:19 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:42:19 --> Could not find the language line "backups"
INFO - 2021-12-10 04:42:19 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 04:42:19 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 04:42:19 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:42:19 --> Could not find the language line "due"
ERROR - 2021-12-10 04:42:19 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:42:19 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:42:19 --> Final output sent to browser
DEBUG - 2021-12-10 04:42:19 --> Total execution time: 0.2603
INFO - 2021-12-10 04:42:19 --> Config Class Initialized
INFO - 2021-12-10 04:42:19 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:42:19 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:42:19 --> Utf8 Class Initialized
INFO - 2021-12-10 04:42:19 --> URI Class Initialized
INFO - 2021-12-10 04:42:19 --> Router Class Initialized
INFO - 2021-12-10 04:42:19 --> Output Class Initialized
INFO - 2021-12-10 04:42:19 --> Security Class Initialized
INFO - 2021-12-10 04:42:19 --> CRSF cookie sent
INFO - 2021-12-10 04:42:19 --> CSRF token verified
DEBUG - 2021-12-10 04:42:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:42:19 --> Input Class Initialized
INFO - 2021-12-10 04:42:19 --> Language Class Initialized
INFO - 2021-12-10 04:42:19 --> Loader Class Initialized
INFO - 2021-12-10 04:42:19 --> Helper loaded: url_helper
INFO - 2021-12-10 04:42:19 --> Helper loaded: form_helper
INFO - 2021-12-10 04:42:19 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:42:19 --> Helper loaded: language_helper
INFO - 2021-12-10 04:42:19 --> Helper loaded: file_helper
INFO - 2021-12-10 04:42:19 --> Helper loaded: date_helper
INFO - 2021-12-10 04:42:19 --> Database Driver Class Initialized
INFO - 2021-12-10 04:42:19 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:42:19 --> Parser Class Initialized
INFO - 2021-12-10 04:42:19 --> Model Class Initialized
INFO - 2021-12-10 04:42:19 --> Model Class Initialized
INFO - 2021-12-10 04:42:19 --> Controller Class Initialized
INFO - 2021-12-10 04:42:19 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:42:19 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:42:20 --> Could not find the language line "today"
INFO - 2021-12-10 04:42:20 --> Model Class Initialized
INFO - 2021-12-10 04:42:20 --> Helper loaded: text_helper
INFO - 2021-12-10 04:42:20 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:42:20 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:42:20 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_payments`.`note`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sale_id`=`sma_sales`.`id`
WHERE `sma_sales`.`pos` = 1
GROUP BY `sma_sales`.`id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2021-12-10 04:42:20 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:43:03 --> Config Class Initialized
INFO - 2021-12-10 04:43:03 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:43:03 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:43:03 --> Utf8 Class Initialized
INFO - 2021-12-10 04:43:03 --> URI Class Initialized
INFO - 2021-12-10 04:43:03 --> Router Class Initialized
INFO - 2021-12-10 04:43:03 --> Output Class Initialized
INFO - 2021-12-10 04:43:03 --> Security Class Initialized
INFO - 2021-12-10 04:43:03 --> CRSF cookie sent
DEBUG - 2021-12-10 04:43:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:43:03 --> Input Class Initialized
INFO - 2021-12-10 04:43:03 --> Language Class Initialized
INFO - 2021-12-10 04:43:03 --> Loader Class Initialized
INFO - 2021-12-10 04:43:03 --> Helper loaded: url_helper
INFO - 2021-12-10 04:43:03 --> Helper loaded: form_helper
INFO - 2021-12-10 04:43:03 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:43:03 --> Helper loaded: language_helper
INFO - 2021-12-10 04:43:03 --> Helper loaded: file_helper
INFO - 2021-12-10 04:43:03 --> Helper loaded: date_helper
INFO - 2021-12-10 04:43:03 --> Database Driver Class Initialized
INFO - 2021-12-10 04:43:03 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:43:03 --> Parser Class Initialized
INFO - 2021-12-10 04:43:03 --> Model Class Initialized
INFO - 2021-12-10 04:43:03 --> Model Class Initialized
INFO - 2021-12-10 04:43:03 --> Controller Class Initialized
INFO - 2021-12-10 04:43:03 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:43:03 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:43:03 --> Could not find the language line "today"
INFO - 2021-12-10 04:43:03 --> Model Class Initialized
INFO - 2021-12-10 04:43:03 --> Helper loaded: text_helper
INFO - 2021-12-10 04:43:03 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:43:03 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:43:03 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:43:03 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:43:03 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:43:03 --> Could not find the language line "backups"
INFO - 2021-12-10 04:43:03 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 04:43:03 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 04:43:03 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:43:03 --> Could not find the language line "due"
ERROR - 2021-12-10 04:43:03 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:43:03 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:43:03 --> Final output sent to browser
DEBUG - 2021-12-10 04:43:03 --> Total execution time: 0.2027
INFO - 2021-12-10 04:43:03 --> Config Class Initialized
INFO - 2021-12-10 04:43:03 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:43:03 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:43:03 --> Utf8 Class Initialized
INFO - 2021-12-10 04:43:03 --> URI Class Initialized
INFO - 2021-12-10 04:43:03 --> Router Class Initialized
INFO - 2021-12-10 04:43:03 --> Output Class Initialized
INFO - 2021-12-10 04:43:03 --> Security Class Initialized
INFO - 2021-12-10 04:43:03 --> CRSF cookie sent
INFO - 2021-12-10 04:43:03 --> CSRF token verified
DEBUG - 2021-12-10 04:43:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:43:03 --> Input Class Initialized
INFO - 2021-12-10 04:43:03 --> Language Class Initialized
INFO - 2021-12-10 04:43:03 --> Loader Class Initialized
INFO - 2021-12-10 04:43:03 --> Helper loaded: url_helper
INFO - 2021-12-10 04:43:03 --> Helper loaded: form_helper
INFO - 2021-12-10 04:43:03 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:43:04 --> Helper loaded: language_helper
INFO - 2021-12-10 04:43:04 --> Helper loaded: file_helper
INFO - 2021-12-10 04:43:04 --> Helper loaded: date_helper
INFO - 2021-12-10 04:43:04 --> Database Driver Class Initialized
INFO - 2021-12-10 04:43:04 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:43:04 --> Parser Class Initialized
INFO - 2021-12-10 04:43:04 --> Model Class Initialized
INFO - 2021-12-10 04:43:04 --> Model Class Initialized
INFO - 2021-12-10 04:43:04 --> Controller Class Initialized
INFO - 2021-12-10 04:43:04 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:43:04 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:43:04 --> Could not find the language line "today"
INFO - 2021-12-10 04:43:04 --> Model Class Initialized
INFO - 2021-12-10 04:43:04 --> Helper loaded: text_helper
INFO - 2021-12-10 04:43:04 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:43:04 --> Form Validation Class Initialized
INFO - 2021-12-10 04:43:04 --> Final output sent to browser
DEBUG - 2021-12-10 04:43:04 --> Total execution time: 0.3744
INFO - 2021-12-10 04:43:56 --> Config Class Initialized
INFO - 2021-12-10 04:43:56 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:43:56 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:43:56 --> Utf8 Class Initialized
INFO - 2021-12-10 04:43:56 --> URI Class Initialized
INFO - 2021-12-10 04:43:56 --> Router Class Initialized
INFO - 2021-12-10 04:43:56 --> Output Class Initialized
INFO - 2021-12-10 04:43:56 --> Security Class Initialized
INFO - 2021-12-10 04:43:56 --> CRSF cookie sent
DEBUG - 2021-12-10 04:43:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:43:56 --> Input Class Initialized
INFO - 2021-12-10 04:43:56 --> Language Class Initialized
INFO - 2021-12-10 04:43:56 --> Loader Class Initialized
INFO - 2021-12-10 04:43:56 --> Helper loaded: url_helper
INFO - 2021-12-10 04:43:56 --> Helper loaded: form_helper
INFO - 2021-12-10 04:43:56 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:43:56 --> Helper loaded: language_helper
INFO - 2021-12-10 04:43:56 --> Helper loaded: file_helper
INFO - 2021-12-10 04:43:56 --> Helper loaded: date_helper
INFO - 2021-12-10 04:43:56 --> Database Driver Class Initialized
INFO - 2021-12-10 04:43:56 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:43:56 --> Parser Class Initialized
INFO - 2021-12-10 04:43:56 --> Model Class Initialized
INFO - 2021-12-10 04:43:56 --> Model Class Initialized
INFO - 2021-12-10 04:43:56 --> Controller Class Initialized
INFO - 2021-12-10 04:43:56 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:43:56 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:43:56 --> Could not find the language line "today"
INFO - 2021-12-10 04:43:56 --> Model Class Initialized
INFO - 2021-12-10 04:43:56 --> Helper loaded: text_helper
INFO - 2021-12-10 04:43:56 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:43:56 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:43:56 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:43:56 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:43:56 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:43:56 --> Could not find the language line "backups"
INFO - 2021-12-10 04:43:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 04:43:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 04:43:56 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:43:56 --> Could not find the language line "due"
ERROR - 2021-12-10 04:43:56 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:43:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:43:56 --> Final output sent to browser
DEBUG - 2021-12-10 04:43:56 --> Total execution time: 0.2411
INFO - 2021-12-10 04:43:56 --> Config Class Initialized
INFO - 2021-12-10 04:43:56 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:43:56 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:43:56 --> Utf8 Class Initialized
INFO - 2021-12-10 04:43:56 --> URI Class Initialized
INFO - 2021-12-10 04:43:56 --> Router Class Initialized
INFO - 2021-12-10 04:43:56 --> Output Class Initialized
INFO - 2021-12-10 04:43:56 --> Security Class Initialized
INFO - 2021-12-10 04:43:56 --> CRSF cookie sent
INFO - 2021-12-10 04:43:56 --> CSRF token verified
DEBUG - 2021-12-10 04:43:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:43:56 --> Input Class Initialized
INFO - 2021-12-10 04:43:56 --> Language Class Initialized
INFO - 2021-12-10 04:43:56 --> Loader Class Initialized
INFO - 2021-12-10 04:43:56 --> Helper loaded: url_helper
INFO - 2021-12-10 04:43:56 --> Helper loaded: form_helper
INFO - 2021-12-10 04:43:56 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:43:56 --> Helper loaded: language_helper
INFO - 2021-12-10 04:43:56 --> Helper loaded: file_helper
INFO - 2021-12-10 04:43:56 --> Helper loaded: date_helper
INFO - 2021-12-10 04:43:56 --> Database Driver Class Initialized
INFO - 2021-12-10 04:43:56 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:43:56 --> Parser Class Initialized
INFO - 2021-12-10 04:43:56 --> Model Class Initialized
INFO - 2021-12-10 04:43:56 --> Model Class Initialized
INFO - 2021-12-10 04:43:56 --> Controller Class Initialized
INFO - 2021-12-10 04:43:56 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:43:56 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:43:56 --> Could not find the language line "today"
INFO - 2021-12-10 04:43:56 --> Model Class Initialized
INFO - 2021-12-10 04:43:56 --> Helper loaded: text_helper
INFO - 2021-12-10 04:43:56 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:43:56 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:43:56 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_sales`.`note`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sale_id`=`sma_sales`.`id`
WHERE `sma_sales`.`pos` = 1
GROUP BY `sma_sales`.`id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2021-12-10 04:43:57 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:44:12 --> Config Class Initialized
INFO - 2021-12-10 04:44:12 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:44:12 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:44:12 --> Utf8 Class Initialized
INFO - 2021-12-10 04:44:12 --> URI Class Initialized
INFO - 2021-12-10 04:44:13 --> Router Class Initialized
INFO - 2021-12-10 04:44:13 --> Output Class Initialized
INFO - 2021-12-10 04:44:13 --> Security Class Initialized
INFO - 2021-12-10 04:44:13 --> CRSF cookie sent
DEBUG - 2021-12-10 04:44:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:44:13 --> Input Class Initialized
INFO - 2021-12-10 04:44:13 --> Language Class Initialized
INFO - 2021-12-10 04:44:13 --> Loader Class Initialized
INFO - 2021-12-10 04:44:13 --> Helper loaded: url_helper
INFO - 2021-12-10 04:44:13 --> Helper loaded: form_helper
INFO - 2021-12-10 04:44:13 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:44:13 --> Helper loaded: language_helper
INFO - 2021-12-10 04:44:13 --> Helper loaded: file_helper
INFO - 2021-12-10 04:44:13 --> Helper loaded: date_helper
INFO - 2021-12-10 04:44:13 --> Database Driver Class Initialized
INFO - 2021-12-10 04:44:13 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:44:13 --> Parser Class Initialized
INFO - 2021-12-10 04:44:13 --> Model Class Initialized
INFO - 2021-12-10 04:44:13 --> Model Class Initialized
INFO - 2021-12-10 04:44:13 --> Controller Class Initialized
INFO - 2021-12-10 04:44:13 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:44:13 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:44:13 --> Could not find the language line "today"
INFO - 2021-12-10 04:44:13 --> Model Class Initialized
INFO - 2021-12-10 04:44:13 --> Helper loaded: text_helper
INFO - 2021-12-10 04:44:13 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:44:13 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:44:13 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:44:13 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:44:13 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:44:13 --> Could not find the language line "backups"
INFO - 2021-12-10 04:44:13 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 04:44:13 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 04:44:13 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:44:13 --> Could not find the language line "due"
ERROR - 2021-12-10 04:44:13 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:44:13 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:44:13 --> Final output sent to browser
DEBUG - 2021-12-10 04:44:13 --> Total execution time: 0.3684
INFO - 2021-12-10 04:44:13 --> Config Class Initialized
INFO - 2021-12-10 04:44:13 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:44:13 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:44:13 --> Utf8 Class Initialized
INFO - 2021-12-10 04:44:13 --> URI Class Initialized
INFO - 2021-12-10 04:44:13 --> Router Class Initialized
INFO - 2021-12-10 04:44:13 --> Output Class Initialized
INFO - 2021-12-10 04:44:13 --> Security Class Initialized
INFO - 2021-12-10 04:44:13 --> CRSF cookie sent
INFO - 2021-12-10 04:44:13 --> CSRF token verified
DEBUG - 2021-12-10 04:44:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:44:13 --> Input Class Initialized
INFO - 2021-12-10 04:44:13 --> Language Class Initialized
INFO - 2021-12-10 04:44:13 --> Loader Class Initialized
INFO - 2021-12-10 04:44:13 --> Helper loaded: url_helper
INFO - 2021-12-10 04:44:13 --> Helper loaded: form_helper
INFO - 2021-12-10 04:44:13 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:44:13 --> Helper loaded: language_helper
INFO - 2021-12-10 04:44:13 --> Helper loaded: file_helper
INFO - 2021-12-10 04:44:13 --> Helper loaded: date_helper
INFO - 2021-12-10 04:44:13 --> Database Driver Class Initialized
INFO - 2021-12-10 04:44:13 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:44:13 --> Parser Class Initialized
INFO - 2021-12-10 04:44:13 --> Model Class Initialized
INFO - 2021-12-10 04:44:13 --> Model Class Initialized
INFO - 2021-12-10 04:44:13 --> Controller Class Initialized
INFO - 2021-12-10 04:44:13 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:44:13 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:44:13 --> Could not find the language line "today"
INFO - 2021-12-10 04:44:13 --> Model Class Initialized
INFO - 2021-12-10 04:44:13 --> Helper loaded: text_helper
INFO - 2021-12-10 04:44:13 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:44:13 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:44:13 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_sales`.`note`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`id`=`sma_sales`.`id`
WHERE `sma_sales`.`pos` = 1
GROUP BY `sma_sales`.`id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2021-12-10 04:44:13 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:44:25 --> Config Class Initialized
INFO - 2021-12-10 04:44:25 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:44:25 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:44:25 --> Utf8 Class Initialized
INFO - 2021-12-10 04:44:25 --> URI Class Initialized
INFO - 2021-12-10 04:44:25 --> Router Class Initialized
INFO - 2021-12-10 04:44:25 --> Output Class Initialized
INFO - 2021-12-10 04:44:25 --> Security Class Initialized
INFO - 2021-12-10 04:44:25 --> CRSF cookie sent
DEBUG - 2021-12-10 04:44:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:44:25 --> Input Class Initialized
INFO - 2021-12-10 04:44:25 --> Language Class Initialized
INFO - 2021-12-10 04:44:25 --> Loader Class Initialized
INFO - 2021-12-10 04:44:25 --> Helper loaded: url_helper
INFO - 2021-12-10 04:44:25 --> Helper loaded: form_helper
INFO - 2021-12-10 04:44:25 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:44:25 --> Helper loaded: language_helper
INFO - 2021-12-10 04:44:25 --> Helper loaded: file_helper
INFO - 2021-12-10 04:44:25 --> Helper loaded: date_helper
INFO - 2021-12-10 04:44:25 --> Database Driver Class Initialized
INFO - 2021-12-10 04:44:25 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:44:25 --> Parser Class Initialized
INFO - 2021-12-10 04:44:25 --> Model Class Initialized
INFO - 2021-12-10 04:44:25 --> Model Class Initialized
INFO - 2021-12-10 04:44:25 --> Controller Class Initialized
INFO - 2021-12-10 04:44:25 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:44:25 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:44:25 --> Could not find the language line "today"
INFO - 2021-12-10 04:44:25 --> Model Class Initialized
INFO - 2021-12-10 04:44:25 --> Helper loaded: text_helper
INFO - 2021-12-10 04:44:25 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:44:25 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:44:25 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:44:25 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:44:25 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:44:25 --> Could not find the language line "backups"
INFO - 2021-12-10 04:44:25 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 04:44:25 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 04:44:25 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:44:25 --> Could not find the language line "due"
ERROR - 2021-12-10 04:44:25 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:44:25 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:44:25 --> Final output sent to browser
DEBUG - 2021-12-10 04:44:25 --> Total execution time: 0.3435
INFO - 2021-12-10 04:44:25 --> Config Class Initialized
INFO - 2021-12-10 04:44:25 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:44:25 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:44:25 --> Utf8 Class Initialized
INFO - 2021-12-10 04:44:25 --> URI Class Initialized
INFO - 2021-12-10 04:44:25 --> Router Class Initialized
INFO - 2021-12-10 04:44:25 --> Output Class Initialized
INFO - 2021-12-10 04:44:25 --> Security Class Initialized
INFO - 2021-12-10 04:44:25 --> CRSF cookie sent
INFO - 2021-12-10 04:44:25 --> CSRF token verified
DEBUG - 2021-12-10 04:44:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:44:25 --> Input Class Initialized
INFO - 2021-12-10 04:44:25 --> Language Class Initialized
INFO - 2021-12-10 04:44:25 --> Loader Class Initialized
INFO - 2021-12-10 04:44:25 --> Helper loaded: url_helper
INFO - 2021-12-10 04:44:25 --> Helper loaded: form_helper
INFO - 2021-12-10 04:44:25 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:44:25 --> Helper loaded: language_helper
INFO - 2021-12-10 04:44:25 --> Helper loaded: file_helper
INFO - 2021-12-10 04:44:25 --> Helper loaded: date_helper
INFO - 2021-12-10 04:44:25 --> Database Driver Class Initialized
INFO - 2021-12-10 04:44:25 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:44:25 --> Parser Class Initialized
INFO - 2021-12-10 04:44:25 --> Model Class Initialized
INFO - 2021-12-10 04:44:25 --> Model Class Initialized
INFO - 2021-12-10 04:44:25 --> Controller Class Initialized
INFO - 2021-12-10 04:44:25 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:44:25 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:44:25 --> Could not find the language line "today"
INFO - 2021-12-10 04:44:25 --> Model Class Initialized
INFO - 2021-12-10 04:44:25 --> Helper loaded: text_helper
INFO - 2021-12-10 04:44:25 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:44:25 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:44:25 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_sales`.`note`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
INNER JOIN `sma_payments` ON `sma_payments`.`id`=`sma_sales`.`id`
WHERE `sma_sales`.`pos` = 1
GROUP BY `sma_sales`.`id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2021-12-10 04:44:26 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:44:37 --> Config Class Initialized
INFO - 2021-12-10 04:44:37 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:44:37 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:44:37 --> Utf8 Class Initialized
INFO - 2021-12-10 04:44:37 --> URI Class Initialized
INFO - 2021-12-10 04:44:37 --> Router Class Initialized
INFO - 2021-12-10 04:44:37 --> Output Class Initialized
INFO - 2021-12-10 04:44:37 --> Security Class Initialized
INFO - 2021-12-10 04:44:37 --> CRSF cookie sent
DEBUG - 2021-12-10 04:44:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:44:37 --> Input Class Initialized
INFO - 2021-12-10 04:44:37 --> Language Class Initialized
INFO - 2021-12-10 04:44:37 --> Loader Class Initialized
INFO - 2021-12-10 04:44:37 --> Helper loaded: url_helper
INFO - 2021-12-10 04:44:37 --> Helper loaded: form_helper
INFO - 2021-12-10 04:44:37 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:44:37 --> Helper loaded: language_helper
INFO - 2021-12-10 04:44:37 --> Helper loaded: file_helper
INFO - 2021-12-10 04:44:37 --> Helper loaded: date_helper
INFO - 2021-12-10 04:44:37 --> Database Driver Class Initialized
INFO - 2021-12-10 04:44:37 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:44:37 --> Parser Class Initialized
INFO - 2021-12-10 04:44:37 --> Model Class Initialized
INFO - 2021-12-10 04:44:37 --> Model Class Initialized
INFO - 2021-12-10 04:44:37 --> Controller Class Initialized
INFO - 2021-12-10 04:44:37 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:44:37 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:44:37 --> Could not find the language line "today"
INFO - 2021-12-10 04:44:37 --> Model Class Initialized
INFO - 2021-12-10 04:44:37 --> Helper loaded: text_helper
INFO - 2021-12-10 04:44:37 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 04:44:37 --> Form Validation Class Initialized
ERROR - 2021-12-10 04:44:37 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_sales`.`note`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
INNER JOIN `sma_payments` ON `sma_payments`.`id`=`sma_sales`.`id`
WHERE `sma_sales`.`pos` = 1
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 04:44:37 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 04:45:57 --> Config Class Initialized
INFO - 2021-12-10 04:45:57 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:45:57 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:45:57 --> Utf8 Class Initialized
INFO - 2021-12-10 04:45:57 --> URI Class Initialized
INFO - 2021-12-10 04:45:57 --> Router Class Initialized
INFO - 2021-12-10 04:45:57 --> Output Class Initialized
INFO - 2021-12-10 04:45:57 --> Security Class Initialized
INFO - 2021-12-10 04:45:57 --> CRSF cookie sent
DEBUG - 2021-12-10 04:45:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:45:57 --> Input Class Initialized
INFO - 2021-12-10 04:45:57 --> Language Class Initialized
INFO - 2021-12-10 04:45:57 --> Loader Class Initialized
INFO - 2021-12-10 04:45:57 --> Helper loaded: url_helper
INFO - 2021-12-10 04:45:57 --> Helper loaded: form_helper
INFO - 2021-12-10 04:45:57 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:45:57 --> Helper loaded: language_helper
INFO - 2021-12-10 04:45:57 --> Helper loaded: file_helper
INFO - 2021-12-10 04:45:57 --> Helper loaded: date_helper
INFO - 2021-12-10 04:45:57 --> Database Driver Class Initialized
INFO - 2021-12-10 04:45:57 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:45:57 --> Parser Class Initialized
INFO - 2021-12-10 04:45:57 --> Model Class Initialized
INFO - 2021-12-10 04:45:57 --> Model Class Initialized
INFO - 2021-12-10 04:45:57 --> Controller Class Initialized
INFO - 2021-12-10 04:45:57 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:45:57 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:45:57 --> Could not find the language line "today"
INFO - 2021-12-10 04:45:57 --> Language file loaded: language/spanish/products_lang.php
INFO - 2021-12-10 04:45:57 --> Form Validation Class Initialized
INFO - 2021-12-10 04:45:57 --> Model Class Initialized
ERROR - 2021-12-10 04:45:57 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:45:57 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:45:57 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:45:57 --> Could not find the language line "backups"
INFO - 2021-12-10 04:45:57 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
ERROR - 2021-12-10 04:45:57 --> Could not find the language line "sync_quantity"
INFO - 2021-12-10 04:45:57 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/products/index.php
ERROR - 2021-12-10 04:45:57 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:45:57 --> Could not find the language line "due"
ERROR - 2021-12-10 04:45:57 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:45:57 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:45:57 --> Final output sent to browser
DEBUG - 2021-12-10 04:45:57 --> Total execution time: 0.2817
INFO - 2021-12-10 04:45:57 --> Config Class Initialized
INFO - 2021-12-10 04:45:57 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:45:57 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:45:57 --> Utf8 Class Initialized
INFO - 2021-12-10 04:45:57 --> URI Class Initialized
INFO - 2021-12-10 04:45:57 --> Router Class Initialized
INFO - 2021-12-10 04:45:57 --> Output Class Initialized
INFO - 2021-12-10 04:45:57 --> Security Class Initialized
INFO - 2021-12-10 04:45:57 --> CRSF cookie sent
INFO - 2021-12-10 04:45:57 --> CSRF token verified
DEBUG - 2021-12-10 04:45:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:45:57 --> Input Class Initialized
INFO - 2021-12-10 04:45:57 --> Language Class Initialized
INFO - 2021-12-10 04:45:57 --> Loader Class Initialized
INFO - 2021-12-10 04:45:57 --> Helper loaded: url_helper
INFO - 2021-12-10 04:45:57 --> Helper loaded: form_helper
INFO - 2021-12-10 04:45:57 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:45:57 --> Helper loaded: language_helper
INFO - 2021-12-10 04:45:57 --> Helper loaded: file_helper
INFO - 2021-12-10 04:45:57 --> Helper loaded: date_helper
INFO - 2021-12-10 04:45:57 --> Database Driver Class Initialized
INFO - 2021-12-10 04:45:57 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:45:57 --> Parser Class Initialized
INFO - 2021-12-10 04:45:57 --> Model Class Initialized
INFO - 2021-12-10 04:45:57 --> Model Class Initialized
INFO - 2021-12-10 04:45:57 --> Controller Class Initialized
INFO - 2021-12-10 04:45:57 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:45:57 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:45:57 --> Could not find the language line "today"
INFO - 2021-12-10 04:45:57 --> Language file loaded: language/spanish/products_lang.php
INFO - 2021-12-10 04:45:57 --> Form Validation Class Initialized
INFO - 2021-12-10 04:45:57 --> Model Class Initialized
INFO - 2021-12-10 04:45:58 --> Final output sent to browser
DEBUG - 2021-12-10 04:45:58 --> Total execution time: 0.5258
INFO - 2021-12-10 04:46:07 --> Config Class Initialized
INFO - 2021-12-10 04:46:07 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:46:07 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:46:07 --> Utf8 Class Initialized
INFO - 2021-12-10 04:46:07 --> URI Class Initialized
INFO - 2021-12-10 04:46:07 --> Router Class Initialized
INFO - 2021-12-10 04:46:07 --> Output Class Initialized
INFO - 2021-12-10 04:46:08 --> Security Class Initialized
INFO - 2021-12-10 04:46:08 --> CRSF cookie sent
DEBUG - 2021-12-10 04:46:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:46:08 --> Input Class Initialized
INFO - 2021-12-10 04:46:08 --> Language Class Initialized
INFO - 2021-12-10 04:46:08 --> Loader Class Initialized
INFO - 2021-12-10 04:46:08 --> Helper loaded: url_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: form_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: language_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: file_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: date_helper
INFO - 2021-12-10 04:46:08 --> Database Driver Class Initialized
INFO - 2021-12-10 04:46:08 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:46:08 --> Parser Class Initialized
INFO - 2021-12-10 04:46:08 --> Model Class Initialized
INFO - 2021-12-10 04:46:08 --> Model Class Initialized
INFO - 2021-12-10 04:46:08 --> Controller Class Initialized
INFO - 2021-12-10 04:46:08 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:46:08 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:46:08 --> Could not find the language line "today"
INFO - 2021-12-10 04:46:08 --> Language file loaded: language/spanish/purchases_lang.php
INFO - 2021-12-10 04:46:08 --> Form Validation Class Initialized
INFO - 2021-12-10 04:46:08 --> Model Class Initialized
ERROR - 2021-12-10 04:46:08 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:46:08 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:46:08 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:46:08 --> Could not find the language line "backups"
INFO - 2021-12-10 04:46:08 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
ERROR - 2021-12-10 04:46:08 --> Could not find the language line "Status"
INFO - 2021-12-10 04:46:08 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/purchases/orders_list.php
ERROR - 2021-12-10 04:46:08 --> Could not find the language line "due"
ERROR - 2021-12-10 04:46:08 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:46:08 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:46:08 --> Final output sent to browser
DEBUG - 2021-12-10 04:46:08 --> Total execution time: 0.2962
INFO - 2021-12-10 04:46:08 --> Config Class Initialized
INFO - 2021-12-10 04:46:08 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:46:08 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:46:08 --> Config Class Initialized
INFO - 2021-12-10 04:46:08 --> Hooks Class Initialized
INFO - 2021-12-10 04:46:08 --> Utf8 Class Initialized
INFO - 2021-12-10 04:46:08 --> URI Class Initialized
DEBUG - 2021-12-10 04:46:08 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:46:08 --> Utf8 Class Initialized
INFO - 2021-12-10 04:46:08 --> Router Class Initialized
INFO - 2021-12-10 04:46:08 --> URI Class Initialized
INFO - 2021-12-10 04:46:08 --> Output Class Initialized
INFO - 2021-12-10 04:46:08 --> Security Class Initialized
INFO - 2021-12-10 04:46:08 --> Router Class Initialized
INFO - 2021-12-10 04:46:08 --> CRSF cookie sent
INFO - 2021-12-10 04:46:08 --> Output Class Initialized
INFO - 2021-12-10 04:46:08 --> CSRF token verified
DEBUG - 2021-12-10 04:46:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:46:08 --> Security Class Initialized
INFO - 2021-12-10 04:46:08 --> Input Class Initialized
INFO - 2021-12-10 04:46:08 --> CRSF cookie sent
INFO - 2021-12-10 04:46:08 --> Language Class Initialized
INFO - 2021-12-10 04:46:08 --> CSRF token verified
DEBUG - 2021-12-10 04:46:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:46:08 --> Input Class Initialized
INFO - 2021-12-10 04:46:08 --> Language Class Initialized
INFO - 2021-12-10 04:46:08 --> Loader Class Initialized
INFO - 2021-12-10 04:46:08 --> Loader Class Initialized
INFO - 2021-12-10 04:46:08 --> Helper loaded: url_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: url_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: form_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: language_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: file_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: form_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: date_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: language_helper
INFO - 2021-12-10 04:46:08 --> Database Driver Class Initialized
INFO - 2021-12-10 04:46:08 --> Helper loaded: file_helper
INFO - 2021-12-10 04:46:08 --> Helper loaded: date_helper
INFO - 2021-12-10 04:46:08 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:46:08 --> Parser Class Initialized
INFO - 2021-12-10 04:46:08 --> Model Class Initialized
INFO - 2021-12-10 04:46:08 --> Database Driver Class Initialized
INFO - 2021-12-10 04:46:08 --> Model Class Initialized
INFO - 2021-12-10 04:46:08 --> Controller Class Initialized
INFO - 2021-12-10 04:46:08 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:46:08 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:46:08 --> Could not find the language line "today"
INFO - 2021-12-10 04:46:08 --> Language file loaded: language/spanish/purchases_lang.php
INFO - 2021-12-10 04:46:08 --> Form Validation Class Initialized
INFO - 2021-12-10 04:46:08 --> Model Class Initialized
INFO - 2021-12-10 04:46:08 --> Final output sent to browser
DEBUG - 2021-12-10 04:46:08 --> Total execution time: 0.3815
INFO - 2021-12-10 04:46:08 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:46:08 --> Parser Class Initialized
INFO - 2021-12-10 04:46:08 --> Model Class Initialized
INFO - 2021-12-10 04:46:08 --> Model Class Initialized
INFO - 2021-12-10 04:46:08 --> Controller Class Initialized
INFO - 2021-12-10 04:46:08 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:46:08 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:46:08 --> Could not find the language line "today"
INFO - 2021-12-10 04:46:08 --> Language file loaded: language/spanish/purchases_lang.php
INFO - 2021-12-10 04:46:08 --> Form Validation Class Initialized
INFO - 2021-12-10 04:46:08 --> Model Class Initialized
INFO - 2021-12-10 04:46:08 --> Final output sent to browser
DEBUG - 2021-12-10 04:46:08 --> Total execution time: 0.5650
INFO - 2021-12-10 04:47:22 --> Config Class Initialized
INFO - 2021-12-10 04:47:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:47:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:47:22 --> Utf8 Class Initialized
INFO - 2021-12-10 04:47:22 --> URI Class Initialized
INFO - 2021-12-10 04:47:22 --> Router Class Initialized
INFO - 2021-12-10 04:47:22 --> Output Class Initialized
INFO - 2021-12-10 04:47:22 --> Security Class Initialized
INFO - 2021-12-10 04:47:22 --> CRSF cookie sent
DEBUG - 2021-12-10 04:47:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:47:22 --> Input Class Initialized
INFO - 2021-12-10 04:47:22 --> Language Class Initialized
INFO - 2021-12-10 04:47:22 --> Loader Class Initialized
INFO - 2021-12-10 04:47:22 --> Helper loaded: url_helper
INFO - 2021-12-10 04:47:22 --> Helper loaded: form_helper
INFO - 2021-12-10 04:47:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:47:22 --> Helper loaded: language_helper
INFO - 2021-12-10 04:47:22 --> Helper loaded: file_helper
INFO - 2021-12-10 04:47:22 --> Helper loaded: date_helper
INFO - 2021-12-10 04:47:22 --> Database Driver Class Initialized
INFO - 2021-12-10 04:47:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:47:22 --> Parser Class Initialized
INFO - 2021-12-10 04:47:22 --> Model Class Initialized
INFO - 2021-12-10 04:47:22 --> Model Class Initialized
INFO - 2021-12-10 04:47:22 --> Controller Class Initialized
INFO - 2021-12-10 04:47:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:47:22 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:47:22 --> Could not find the language line "today"
INFO - 2021-12-10 04:47:22 --> Language file loaded: language/spanish/auth_lang.php
INFO - 2021-12-10 04:47:22 --> Form Validation Class Initialized
INFO - 2021-12-10 04:47:23 --> Model Class Initialized
DEBUG - 2021-12-10 04:47:23 --> Config file loaded: C:\wamp64\www\Reactor\sma\config/ion_auth.php
ERROR - 2021-12-10 04:47:23 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 04:47:23 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 04:47:23 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 04:47:23 --> Could not find the language line "backups"
INFO - 2021-12-10 04:47:23 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 04:47:23 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/auth/index.php
ERROR - 2021-12-10 04:47:23 --> Could not find the language line "ordered"
ERROR - 2021-12-10 04:47:23 --> Could not find the language line "due"
ERROR - 2021-12-10 04:47:23 --> Could not find the language line "transferring"
INFO - 2021-12-10 04:47:23 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 04:47:23 --> Final output sent to browser
DEBUG - 2021-12-10 04:47:23 --> Total execution time: 0.2483
INFO - 2021-12-10 04:47:23 --> Config Class Initialized
INFO - 2021-12-10 04:47:23 --> Hooks Class Initialized
DEBUG - 2021-12-10 04:47:23 --> UTF-8 Support Enabled
INFO - 2021-12-10 04:47:23 --> Utf8 Class Initialized
INFO - 2021-12-10 04:47:23 --> URI Class Initialized
INFO - 2021-12-10 04:47:23 --> Router Class Initialized
INFO - 2021-12-10 04:47:23 --> Output Class Initialized
INFO - 2021-12-10 04:47:23 --> Security Class Initialized
INFO - 2021-12-10 04:47:23 --> CRSF cookie sent
INFO - 2021-12-10 04:47:23 --> CSRF token verified
DEBUG - 2021-12-10 04:47:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 04:47:23 --> Input Class Initialized
INFO - 2021-12-10 04:47:23 --> Language Class Initialized
INFO - 2021-12-10 04:47:23 --> Loader Class Initialized
INFO - 2021-12-10 04:47:23 --> Helper loaded: url_helper
INFO - 2021-12-10 04:47:23 --> Helper loaded: form_helper
INFO - 2021-12-10 04:47:23 --> Helper loaded: cookie_helper
INFO - 2021-12-10 04:47:23 --> Helper loaded: language_helper
INFO - 2021-12-10 04:47:23 --> Helper loaded: file_helper
INFO - 2021-12-10 04:47:23 --> Helper loaded: date_helper
INFO - 2021-12-10 04:47:23 --> Database Driver Class Initialized
INFO - 2021-12-10 04:47:23 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 04:47:23 --> Parser Class Initialized
INFO - 2021-12-10 04:47:23 --> Model Class Initialized
INFO - 2021-12-10 04:47:23 --> Model Class Initialized
INFO - 2021-12-10 04:47:23 --> Controller Class Initialized
INFO - 2021-12-10 04:47:23 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 04:47:23 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 04:47:23 --> Could not find the language line "today"
INFO - 2021-12-10 04:47:23 --> Language file loaded: language/spanish/auth_lang.php
INFO - 2021-12-10 04:47:23 --> Form Validation Class Initialized
INFO - 2021-12-10 04:47:23 --> Model Class Initialized
DEBUG - 2021-12-10 04:47:23 --> Config file loaded: C:\wamp64\www\Reactor\sma\config/ion_auth.php
INFO - 2021-12-10 04:47:23 --> Final output sent to browser
DEBUG - 2021-12-10 04:47:23 --> Total execution time: 0.3508
INFO - 2021-12-10 05:01:38 --> Config Class Initialized
INFO - 2021-12-10 05:01:38 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:01:38 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:01:38 --> Utf8 Class Initialized
INFO - 2021-12-10 05:01:38 --> URI Class Initialized
INFO - 2021-12-10 05:01:38 --> Router Class Initialized
INFO - 2021-12-10 05:01:38 --> Output Class Initialized
INFO - 2021-12-10 05:01:38 --> Security Class Initialized
INFO - 2021-12-10 05:01:38 --> CRSF cookie sent
DEBUG - 2021-12-10 05:01:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:01:38 --> Input Class Initialized
INFO - 2021-12-10 05:01:38 --> Language Class Initialized
INFO - 2021-12-10 05:01:38 --> Loader Class Initialized
INFO - 2021-12-10 05:01:38 --> Helper loaded: url_helper
INFO - 2021-12-10 05:01:38 --> Helper loaded: form_helper
INFO - 2021-12-10 05:01:38 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:01:38 --> Helper loaded: language_helper
INFO - 2021-12-10 05:01:38 --> Helper loaded: file_helper
INFO - 2021-12-10 05:01:38 --> Helper loaded: date_helper
INFO - 2021-12-10 05:01:38 --> Database Driver Class Initialized
INFO - 2021-12-10 05:01:38 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:01:38 --> Parser Class Initialized
INFO - 2021-12-10 05:01:38 --> Model Class Initialized
INFO - 2021-12-10 05:01:38 --> Model Class Initialized
INFO - 2021-12-10 05:01:38 --> Controller Class Initialized
INFO - 2021-12-10 05:01:38 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:01:38 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:01:38 --> Could not find the language line "today"
INFO - 2021-12-10 05:01:38 --> Language file loaded: language/spanish/auth_lang.php
INFO - 2021-12-10 05:01:38 --> Form Validation Class Initialized
INFO - 2021-12-10 05:01:38 --> Model Class Initialized
DEBUG - 2021-12-10 05:01:38 --> Config file loaded: C:\wamp64\www\Reactor\sma\config/ion_auth.php
ERROR - 2021-12-10 05:01:38 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:01:38 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:01:38 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:01:38 --> Could not find the language line "backups"
INFO - 2021-12-10 05:01:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:01:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/auth/index.php
ERROR - 2021-12-10 05:01:38 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:01:38 --> Could not find the language line "due"
ERROR - 2021-12-10 05:01:38 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:01:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:01:38 --> Final output sent to browser
DEBUG - 2021-12-10 05:01:38 --> Total execution time: 0.2109
INFO - 2021-12-10 05:01:38 --> Config Class Initialized
INFO - 2021-12-10 05:01:38 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:01:38 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:01:38 --> Utf8 Class Initialized
INFO - 2021-12-10 05:01:38 --> URI Class Initialized
INFO - 2021-12-10 05:01:38 --> Router Class Initialized
INFO - 2021-12-10 05:01:38 --> Output Class Initialized
INFO - 2021-12-10 05:01:38 --> Security Class Initialized
INFO - 2021-12-10 05:01:38 --> CRSF cookie sent
INFO - 2021-12-10 05:01:38 --> CSRF token verified
DEBUG - 2021-12-10 05:01:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:01:38 --> Input Class Initialized
INFO - 2021-12-10 05:01:38 --> Language Class Initialized
INFO - 2021-12-10 05:01:38 --> Loader Class Initialized
INFO - 2021-12-10 05:01:38 --> Helper loaded: url_helper
INFO - 2021-12-10 05:01:38 --> Helper loaded: form_helper
INFO - 2021-12-10 05:01:38 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:01:38 --> Helper loaded: language_helper
INFO - 2021-12-10 05:01:38 --> Helper loaded: file_helper
INFO - 2021-12-10 05:01:38 --> Helper loaded: date_helper
INFO - 2021-12-10 05:01:39 --> Database Driver Class Initialized
INFO - 2021-12-10 05:01:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:01:39 --> Parser Class Initialized
INFO - 2021-12-10 05:01:39 --> Model Class Initialized
INFO - 2021-12-10 05:01:39 --> Model Class Initialized
INFO - 2021-12-10 05:01:39 --> Controller Class Initialized
INFO - 2021-12-10 05:01:39 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:01:39 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:01:39 --> Could not find the language line "today"
INFO - 2021-12-10 05:01:39 --> Language file loaded: language/spanish/auth_lang.php
INFO - 2021-12-10 05:01:39 --> Form Validation Class Initialized
INFO - 2021-12-10 05:01:39 --> Model Class Initialized
DEBUG - 2021-12-10 05:01:39 --> Config file loaded: C:\wamp64\www\Reactor\sma\config/ion_auth.php
INFO - 2021-12-10 05:01:39 --> Final output sent to browser
DEBUG - 2021-12-10 05:01:39 --> Total execution time: 0.6003
INFO - 2021-12-10 05:01:40 --> Config Class Initialized
INFO - 2021-12-10 05:01:40 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:01:40 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:01:40 --> Utf8 Class Initialized
INFO - 2021-12-10 05:01:40 --> URI Class Initialized
INFO - 2021-12-10 05:01:40 --> Router Class Initialized
INFO - 2021-12-10 05:01:40 --> Output Class Initialized
INFO - 2021-12-10 05:01:40 --> Security Class Initialized
INFO - 2021-12-10 05:01:40 --> CRSF cookie sent
DEBUG - 2021-12-10 05:01:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:01:40 --> Input Class Initialized
INFO - 2021-12-10 05:01:40 --> Language Class Initialized
INFO - 2021-12-10 05:01:40 --> Loader Class Initialized
INFO - 2021-12-10 05:01:40 --> Helper loaded: url_helper
INFO - 2021-12-10 05:01:40 --> Helper loaded: form_helper
INFO - 2021-12-10 05:01:40 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:01:40 --> Helper loaded: language_helper
INFO - 2021-12-10 05:01:40 --> Helper loaded: file_helper
INFO - 2021-12-10 05:01:40 --> Helper loaded: date_helper
INFO - 2021-12-10 05:01:40 --> Database Driver Class Initialized
INFO - 2021-12-10 05:01:40 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:01:40 --> Parser Class Initialized
INFO - 2021-12-10 05:01:40 --> Model Class Initialized
INFO - 2021-12-10 05:01:40 --> Model Class Initialized
INFO - 2021-12-10 05:01:40 --> Controller Class Initialized
INFO - 2021-12-10 05:01:40 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:01:40 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:01:40 --> Could not find the language line "today"
INFO - 2021-12-10 05:01:40 --> Model Class Initialized
INFO - 2021-12-10 05:01:40 --> Helper loaded: text_helper
INFO - 2021-12-10 05:01:40 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:01:40 --> Form Validation Class Initialized
INFO - 2021-12-10 05:01:40 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 05:01:40 --> Pagination Class Initialized
ERROR - 2021-12-10 05:01:40 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:01:40 --> Could not find the language line "order"
ERROR - 2021-12-10 05:01:40 --> Could not find the language line "bill"
INFO - 2021-12-10 05:01:40 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 05:01:40 --> Final output sent to browser
DEBUG - 2021-12-10 05:01:40 --> Total execution time: 0.1856
INFO - 2021-12-10 05:01:40 --> Config Class Initialized
INFO - 2021-12-10 05:01:40 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:01:40 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:01:40 --> Utf8 Class Initialized
INFO - 2021-12-10 05:01:40 --> URI Class Initialized
INFO - 2021-12-10 05:01:40 --> Router Class Initialized
INFO - 2021-12-10 05:01:40 --> Output Class Initialized
INFO - 2021-12-10 05:01:40 --> Security Class Initialized
INFO - 2021-12-10 05:01:40 --> CRSF cookie sent
DEBUG - 2021-12-10 05:01:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:01:40 --> Input Class Initialized
INFO - 2021-12-10 05:01:40 --> Language Class Initialized
INFO - 2021-12-10 05:01:40 --> Loader Class Initialized
INFO - 2021-12-10 05:01:40 --> Helper loaded: url_helper
INFO - 2021-12-10 05:01:40 --> Helper loaded: form_helper
INFO - 2021-12-10 05:01:40 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:01:40 --> Helper loaded: language_helper
INFO - 2021-12-10 05:01:40 --> Helper loaded: file_helper
INFO - 2021-12-10 05:01:40 --> Helper loaded: date_helper
INFO - 2021-12-10 05:01:40 --> Database Driver Class Initialized
INFO - 2021-12-10 05:01:40 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:01:40 --> Parser Class Initialized
INFO - 2021-12-10 05:01:40 --> Model Class Initialized
INFO - 2021-12-10 05:01:40 --> Model Class Initialized
INFO - 2021-12-10 05:01:40 --> Controller Class Initialized
INFO - 2021-12-10 05:01:40 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:01:40 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:01:40 --> Could not find the language line "today"
INFO - 2021-12-10 05:01:40 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 05:01:40 --> Form Validation Class Initialized
INFO - 2021-12-10 05:01:40 --> Model Class Initialized
INFO - 2021-12-10 05:01:40 --> Final output sent to browser
DEBUG - 2021-12-10 05:01:40 --> Total execution time: 0.1799
INFO - 2021-12-10 05:08:05 --> Config Class Initialized
INFO - 2021-12-10 05:08:05 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:08:05 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:08:05 --> Utf8 Class Initialized
INFO - 2021-12-10 05:08:05 --> URI Class Initialized
INFO - 2021-12-10 05:08:05 --> Router Class Initialized
INFO - 2021-12-10 05:08:05 --> Output Class Initialized
INFO - 2021-12-10 05:08:05 --> Security Class Initialized
INFO - 2021-12-10 05:08:05 --> CRSF cookie sent
DEBUG - 2021-12-10 05:08:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:08:05 --> Input Class Initialized
INFO - 2021-12-10 05:08:05 --> Language Class Initialized
ERROR - 2021-12-10 05:08:05 --> Severity: error --> Exception: syntax error, unexpected '{' C:\wamp64\www\Reactor\sma\controllers\Pos.php 304
INFO - 2021-12-10 05:08:22 --> Config Class Initialized
INFO - 2021-12-10 05:08:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:08:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:08:22 --> Utf8 Class Initialized
INFO - 2021-12-10 05:08:22 --> URI Class Initialized
INFO - 2021-12-10 05:08:22 --> Router Class Initialized
INFO - 2021-12-10 05:08:22 --> Output Class Initialized
INFO - 2021-12-10 05:08:22 --> Security Class Initialized
INFO - 2021-12-10 05:08:22 --> CRSF cookie sent
DEBUG - 2021-12-10 05:08:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:08:22 --> Input Class Initialized
INFO - 2021-12-10 05:08:22 --> Language Class Initialized
INFO - 2021-12-10 05:08:22 --> Loader Class Initialized
INFO - 2021-12-10 05:08:22 --> Helper loaded: url_helper
INFO - 2021-12-10 05:08:22 --> Helper loaded: form_helper
INFO - 2021-12-10 05:08:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:08:22 --> Helper loaded: language_helper
INFO - 2021-12-10 05:08:22 --> Helper loaded: file_helper
INFO - 2021-12-10 05:08:22 --> Helper loaded: date_helper
INFO - 2021-12-10 05:08:22 --> Database Driver Class Initialized
INFO - 2021-12-10 05:08:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:08:22 --> Parser Class Initialized
INFO - 2021-12-10 05:08:22 --> Model Class Initialized
INFO - 2021-12-10 05:08:22 --> Model Class Initialized
INFO - 2021-12-10 05:08:22 --> Controller Class Initialized
INFO - 2021-12-10 05:08:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:08:22 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:08:22 --> Could not find the language line "today"
INFO - 2021-12-10 05:08:22 --> Model Class Initialized
INFO - 2021-12-10 05:08:22 --> Helper loaded: text_helper
INFO - 2021-12-10 05:08:22 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:08:22 --> Form Validation Class Initialized
INFO - 2021-12-10 05:08:22 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 05:08:22 --> Pagination Class Initialized
ERROR - 2021-12-10 05:08:22 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:08:22 --> Could not find the language line "order"
ERROR - 2021-12-10 05:08:22 --> Could not find the language line "bill"
INFO - 2021-12-10 05:08:22 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 05:08:22 --> Final output sent to browser
DEBUG - 2021-12-10 05:08:22 --> Total execution time: 0.2322
INFO - 2021-12-10 05:08:23 --> Config Class Initialized
INFO - 2021-12-10 05:08:23 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:08:23 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:08:23 --> Utf8 Class Initialized
INFO - 2021-12-10 05:08:23 --> URI Class Initialized
INFO - 2021-12-10 05:08:23 --> Router Class Initialized
INFO - 2021-12-10 05:08:23 --> Output Class Initialized
INFO - 2021-12-10 05:08:23 --> Security Class Initialized
INFO - 2021-12-10 05:08:23 --> CRSF cookie sent
DEBUG - 2021-12-10 05:08:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:08:23 --> Input Class Initialized
INFO - 2021-12-10 05:08:23 --> Language Class Initialized
INFO - 2021-12-10 05:08:23 --> Loader Class Initialized
INFO - 2021-12-10 05:08:23 --> Helper loaded: url_helper
INFO - 2021-12-10 05:08:23 --> Helper loaded: form_helper
INFO - 2021-12-10 05:08:23 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:08:23 --> Helper loaded: language_helper
INFO - 2021-12-10 05:08:23 --> Helper loaded: file_helper
INFO - 2021-12-10 05:08:23 --> Helper loaded: date_helper
INFO - 2021-12-10 05:08:23 --> Database Driver Class Initialized
INFO - 2021-12-10 05:08:23 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:08:23 --> Parser Class Initialized
INFO - 2021-12-10 05:08:23 --> Model Class Initialized
INFO - 2021-12-10 05:08:23 --> Model Class Initialized
INFO - 2021-12-10 05:08:23 --> Controller Class Initialized
INFO - 2021-12-10 05:08:23 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:08:23 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:08:23 --> Could not find the language line "today"
INFO - 2021-12-10 05:08:23 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 05:08:23 --> Form Validation Class Initialized
INFO - 2021-12-10 05:08:23 --> Model Class Initialized
INFO - 2021-12-10 05:08:23 --> Final output sent to browser
DEBUG - 2021-12-10 05:08:23 --> Total execution time: 0.1586
INFO - 2021-12-10 05:08:40 --> Config Class Initialized
INFO - 2021-12-10 05:08:40 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:08:40 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:08:40 --> Utf8 Class Initialized
INFO - 2021-12-10 05:08:40 --> URI Class Initialized
INFO - 2021-12-10 05:08:40 --> Router Class Initialized
INFO - 2021-12-10 05:08:40 --> Output Class Initialized
INFO - 2021-12-10 05:08:40 --> Security Class Initialized
INFO - 2021-12-10 05:08:40 --> CRSF cookie sent
INFO - 2021-12-10 05:08:40 --> CSRF token verified
DEBUG - 2021-12-10 05:08:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:08:40 --> Input Class Initialized
INFO - 2021-12-10 05:08:40 --> Language Class Initialized
INFO - 2021-12-10 05:08:40 --> Loader Class Initialized
INFO - 2021-12-10 05:08:40 --> Helper loaded: url_helper
INFO - 2021-12-10 05:08:40 --> Helper loaded: form_helper
INFO - 2021-12-10 05:08:40 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:08:40 --> Helper loaded: language_helper
INFO - 2021-12-10 05:08:40 --> Helper loaded: file_helper
INFO - 2021-12-10 05:08:40 --> Helper loaded: date_helper
INFO - 2021-12-10 05:08:40 --> Database Driver Class Initialized
INFO - 2021-12-10 05:08:40 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:08:40 --> Parser Class Initialized
INFO - 2021-12-10 05:08:40 --> Model Class Initialized
INFO - 2021-12-10 05:08:40 --> Model Class Initialized
INFO - 2021-12-10 05:08:40 --> Controller Class Initialized
INFO - 2021-12-10 05:08:40 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:08:40 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:08:40 --> Could not find the language line "today"
INFO - 2021-12-10 05:08:40 --> Model Class Initialized
INFO - 2021-12-10 05:08:40 --> Helper loaded: text_helper
INFO - 2021-12-10 05:08:40 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:08:40 --> Form Validation Class Initialized
INFO - 2021-12-10 05:08:40 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 05:08:40 --> Severity: Notice --> Undefined variable: p C:\wamp64\www\Reactor\sma\controllers\Pos.php 303
INFO - 2021-12-10 05:08:41 --> addSale 111
INFO - 2021-12-10 05:08:41 --> syncPurchaseItems
INFO - 2021-12-10 05:08:41 --> syncPurchaseItems213213123123123123123
INFO - 2021-12-10 05:08:41 --> syncPurchaseItems//////////////////// purchase_items
INFO - 2021-12-10 05:08:41 --> 5
INFO - 2021-12-10 05:08:41 --> 4
INFO - 2021-12-10 05:08:41 --> syncQuantity 21
INFO - 2021-12-10 05:08:41 --> 21
INFO - 2021-12-10 05:08:41 --> syncProductQty
INFO - 2021-12-10 05:08:41 --> 2734
INFO - 2021-12-10 05:08:41 --> balance_qty
INFO - 2021-12-10 05:08:41 --> 5.0000
INFO - 2021-12-10 05:08:41 --> warehouses_products standart
INFO - 2021-12-10 05:08:41 --> 2734
INFO - 2021-12-10 05:08:41 --> 3
INFO - 2021-12-10 05:08:41 --> 5.0000
INFO - 2021-12-10 05:08:41 --> Config Class Initialized
INFO - 2021-12-10 05:08:41 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:08:41 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:08:41 --> Utf8 Class Initialized
INFO - 2021-12-10 05:08:41 --> URI Class Initialized
INFO - 2021-12-10 05:08:41 --> Router Class Initialized
INFO - 2021-12-10 05:08:41 --> Output Class Initialized
INFO - 2021-12-10 05:08:41 --> Security Class Initialized
INFO - 2021-12-10 05:08:41 --> CRSF cookie sent
DEBUG - 2021-12-10 05:08:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:08:41 --> Input Class Initialized
INFO - 2021-12-10 05:08:41 --> Language Class Initialized
INFO - 2021-12-10 05:08:41 --> Loader Class Initialized
INFO - 2021-12-10 05:08:41 --> Helper loaded: url_helper
INFO - 2021-12-10 05:08:41 --> Helper loaded: form_helper
INFO - 2021-12-10 05:08:41 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:08:41 --> Helper loaded: language_helper
INFO - 2021-12-10 05:08:41 --> Helper loaded: file_helper
INFO - 2021-12-10 05:08:41 --> Helper loaded: date_helper
INFO - 2021-12-10 05:08:41 --> Database Driver Class Initialized
INFO - 2021-12-10 05:08:41 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:08:41 --> Parser Class Initialized
INFO - 2021-12-10 05:08:41 --> Model Class Initialized
INFO - 2021-12-10 05:08:41 --> Model Class Initialized
INFO - 2021-12-10 05:08:41 --> Controller Class Initialized
INFO - 2021-12-10 05:08:41 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:08:41 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:08:41 --> Could not find the language line "today"
INFO - 2021-12-10 05:08:41 --> Model Class Initialized
INFO - 2021-12-10 05:08:41 --> Helper loaded: text_helper
INFO - 2021-12-10 05:08:41 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:08:41 --> Form Validation Class Initialized
DEBUG - 2021-12-10 05:08:42 --> Zend Class Initialized
DEBUG - 2021-12-10 05:08:42 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 05:08:42 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 05:08:42 --> Final output sent to browser
DEBUG - 2021-12-10 05:08:42 --> Total execution time: 0.6524
INFO - 2021-12-10 05:09:22 --> Config Class Initialized
INFO - 2021-12-10 05:09:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:09:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:09:22 --> Utf8 Class Initialized
INFO - 2021-12-10 05:09:22 --> URI Class Initialized
INFO - 2021-12-10 05:09:22 --> Router Class Initialized
INFO - 2021-12-10 05:09:22 --> Output Class Initialized
INFO - 2021-12-10 05:09:22 --> Security Class Initialized
INFO - 2021-12-10 05:09:22 --> CRSF cookie sent
DEBUG - 2021-12-10 05:09:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:09:22 --> Input Class Initialized
INFO - 2021-12-10 05:09:22 --> Language Class Initialized
INFO - 2021-12-10 05:09:22 --> Loader Class Initialized
INFO - 2021-12-10 05:09:22 --> Helper loaded: url_helper
INFO - 2021-12-10 05:09:22 --> Helper loaded: form_helper
INFO - 2021-12-10 05:09:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:09:22 --> Helper loaded: language_helper
INFO - 2021-12-10 05:09:22 --> Helper loaded: file_helper
INFO - 2021-12-10 05:09:22 --> Helper loaded: date_helper
INFO - 2021-12-10 05:09:22 --> Database Driver Class Initialized
INFO - 2021-12-10 05:09:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:09:22 --> Parser Class Initialized
INFO - 2021-12-10 05:09:22 --> Model Class Initialized
INFO - 2021-12-10 05:09:22 --> Model Class Initialized
INFO - 2021-12-10 05:09:22 --> Controller Class Initialized
INFO - 2021-12-10 05:09:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:09:22 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:09:22 --> Could not find the language line "today"
INFO - 2021-12-10 05:09:22 --> Model Class Initialized
INFO - 2021-12-10 05:09:22 --> Helper loaded: text_helper
INFO - 2021-12-10 05:09:22 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:09:22 --> Form Validation Class Initialized
INFO - 2021-12-10 05:09:22 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 05:09:22 --> Pagination Class Initialized
ERROR - 2021-12-10 05:09:22 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:09:22 --> Could not find the language line "order"
ERROR - 2021-12-10 05:09:22 --> Could not find the language line "bill"
INFO - 2021-12-10 05:09:22 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 05:09:22 --> Final output sent to browser
DEBUG - 2021-12-10 05:09:22 --> Total execution time: 0.2103
INFO - 2021-12-10 05:09:23 --> Config Class Initialized
INFO - 2021-12-10 05:09:23 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:09:23 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:09:23 --> Utf8 Class Initialized
INFO - 2021-12-10 05:09:23 --> URI Class Initialized
INFO - 2021-12-10 05:09:23 --> Router Class Initialized
INFO - 2021-12-10 05:09:23 --> Output Class Initialized
INFO - 2021-12-10 05:09:23 --> Security Class Initialized
INFO - 2021-12-10 05:09:23 --> CRSF cookie sent
DEBUG - 2021-12-10 05:09:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:09:23 --> Input Class Initialized
INFO - 2021-12-10 05:09:23 --> Language Class Initialized
INFO - 2021-12-10 05:09:23 --> Loader Class Initialized
INFO - 2021-12-10 05:09:23 --> Helper loaded: url_helper
INFO - 2021-12-10 05:09:23 --> Helper loaded: form_helper
INFO - 2021-12-10 05:09:23 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:09:23 --> Helper loaded: language_helper
INFO - 2021-12-10 05:09:23 --> Helper loaded: file_helper
INFO - 2021-12-10 05:09:23 --> Helper loaded: date_helper
INFO - 2021-12-10 05:09:23 --> Database Driver Class Initialized
INFO - 2021-12-10 05:09:23 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:09:23 --> Parser Class Initialized
INFO - 2021-12-10 05:09:23 --> Model Class Initialized
INFO - 2021-12-10 05:09:23 --> Model Class Initialized
INFO - 2021-12-10 05:09:23 --> Controller Class Initialized
INFO - 2021-12-10 05:09:23 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:09:23 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:09:23 --> Could not find the language line "today"
INFO - 2021-12-10 05:09:23 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 05:09:23 --> Form Validation Class Initialized
INFO - 2021-12-10 05:09:23 --> Model Class Initialized
INFO - 2021-12-10 05:09:23 --> Final output sent to browser
DEBUG - 2021-12-10 05:09:23 --> Total execution time: 0.2358
INFO - 2021-12-10 05:09:28 --> Config Class Initialized
INFO - 2021-12-10 05:09:28 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:09:28 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:09:28 --> Utf8 Class Initialized
INFO - 2021-12-10 05:09:28 --> URI Class Initialized
INFO - 2021-12-10 05:09:28 --> Router Class Initialized
INFO - 2021-12-10 05:09:28 --> Output Class Initialized
INFO - 2021-12-10 05:09:28 --> Security Class Initialized
INFO - 2021-12-10 05:09:28 --> CRSF cookie sent
DEBUG - 2021-12-10 05:09:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:09:28 --> Input Class Initialized
INFO - 2021-12-10 05:09:28 --> Language Class Initialized
INFO - 2021-12-10 05:09:28 --> Loader Class Initialized
INFO - 2021-12-10 05:09:28 --> Helper loaded: url_helper
INFO - 2021-12-10 05:09:28 --> Helper loaded: form_helper
INFO - 2021-12-10 05:09:28 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:09:28 --> Helper loaded: language_helper
INFO - 2021-12-10 05:09:28 --> Helper loaded: file_helper
INFO - 2021-12-10 05:09:28 --> Helper loaded: date_helper
INFO - 2021-12-10 05:09:28 --> Database Driver Class Initialized
INFO - 2021-12-10 05:09:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:09:28 --> Parser Class Initialized
INFO - 2021-12-10 05:09:28 --> Model Class Initialized
INFO - 2021-12-10 05:09:28 --> Model Class Initialized
INFO - 2021-12-10 05:09:28 --> Controller Class Initialized
INFO - 2021-12-10 05:09:28 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:09:28 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:09:28 --> Could not find the language line "today"
INFO - 2021-12-10 05:09:28 --> Language file loaded: language/spanish/sales_lang.php
INFO - 2021-12-10 05:09:28 --> Form Validation Class Initialized
INFO - 2021-12-10 05:09:28 --> Model Class Initialized
INFO - 2021-12-10 05:09:28 --> Final output sent to browser
DEBUG - 2021-12-10 05:09:28 --> Total execution time: 0.1858
INFO - 2021-12-10 05:09:37 --> Config Class Initialized
INFO - 2021-12-10 05:09:37 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:09:37 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:09:37 --> Utf8 Class Initialized
INFO - 2021-12-10 05:09:37 --> URI Class Initialized
INFO - 2021-12-10 05:09:37 --> Router Class Initialized
INFO - 2021-12-10 05:09:37 --> Output Class Initialized
INFO - 2021-12-10 05:09:37 --> Security Class Initialized
INFO - 2021-12-10 05:09:37 --> CRSF cookie sent
DEBUG - 2021-12-10 05:09:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:09:37 --> Input Class Initialized
INFO - 2021-12-10 05:09:37 --> Language Class Initialized
INFO - 2021-12-10 05:09:37 --> Loader Class Initialized
INFO - 2021-12-10 05:09:37 --> Helper loaded: url_helper
INFO - 2021-12-10 05:09:37 --> Helper loaded: form_helper
INFO - 2021-12-10 05:09:37 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:09:37 --> Helper loaded: language_helper
INFO - 2021-12-10 05:09:37 --> Helper loaded: file_helper
INFO - 2021-12-10 05:09:37 --> Helper loaded: date_helper
INFO - 2021-12-10 05:09:37 --> Database Driver Class Initialized
INFO - 2021-12-10 05:09:37 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:09:37 --> Parser Class Initialized
INFO - 2021-12-10 05:09:37 --> Model Class Initialized
INFO - 2021-12-10 05:09:37 --> Model Class Initialized
INFO - 2021-12-10 05:09:37 --> Controller Class Initialized
INFO - 2021-12-10 05:09:37 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:09:37 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:09:37 --> Could not find the language line "today"
INFO - 2021-12-10 05:09:37 --> Language file loaded: language/spanish/sales_lang.php
INFO - 2021-12-10 05:09:37 --> Form Validation Class Initialized
INFO - 2021-12-10 05:09:37 --> Model Class Initialized
INFO - 2021-12-10 05:09:37 --> Final output sent to browser
DEBUG - 2021-12-10 05:09:37 --> Total execution time: 0.1595
INFO - 2021-12-10 05:09:37 --> Config Class Initialized
INFO - 2021-12-10 05:09:37 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:09:37 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:09:37 --> Utf8 Class Initialized
INFO - 2021-12-10 05:09:37 --> URI Class Initialized
INFO - 2021-12-10 05:09:37 --> Router Class Initialized
INFO - 2021-12-10 05:09:37 --> Output Class Initialized
INFO - 2021-12-10 05:09:38 --> Security Class Initialized
INFO - 2021-12-10 05:09:38 --> CRSF cookie sent
DEBUG - 2021-12-10 05:09:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:09:38 --> Input Class Initialized
INFO - 2021-12-10 05:09:38 --> Language Class Initialized
INFO - 2021-12-10 05:09:38 --> Loader Class Initialized
INFO - 2021-12-10 05:09:38 --> Helper loaded: url_helper
INFO - 2021-12-10 05:09:38 --> Helper loaded: form_helper
INFO - 2021-12-10 05:09:38 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:09:38 --> Helper loaded: language_helper
INFO - 2021-12-10 05:09:38 --> Helper loaded: file_helper
INFO - 2021-12-10 05:09:38 --> Helper loaded: date_helper
INFO - 2021-12-10 05:09:38 --> Database Driver Class Initialized
INFO - 2021-12-10 05:09:38 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:09:38 --> Parser Class Initialized
INFO - 2021-12-10 05:09:38 --> Model Class Initialized
INFO - 2021-12-10 05:09:38 --> Model Class Initialized
INFO - 2021-12-10 05:09:38 --> Controller Class Initialized
INFO - 2021-12-10 05:09:38 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:09:38 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:09:38 --> Could not find the language line "today"
INFO - 2021-12-10 05:09:38 --> Language file loaded: language/spanish/sales_lang.php
INFO - 2021-12-10 05:09:38 --> Form Validation Class Initialized
INFO - 2021-12-10 05:09:38 --> Model Class Initialized
INFO - 2021-12-10 05:09:38 --> Final output sent to browser
DEBUG - 2021-12-10 05:09:38 --> Total execution time: 0.1876
INFO - 2021-12-10 05:10:23 --> Config Class Initialized
INFO - 2021-12-10 05:10:23 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:10:23 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:10:23 --> Utf8 Class Initialized
INFO - 2021-12-10 05:10:23 --> URI Class Initialized
INFO - 2021-12-10 05:10:23 --> Router Class Initialized
INFO - 2021-12-10 05:10:23 --> Output Class Initialized
INFO - 2021-12-10 05:10:23 --> Security Class Initialized
INFO - 2021-12-10 05:10:24 --> CRSF cookie sent
INFO - 2021-12-10 05:10:24 --> CSRF token verified
DEBUG - 2021-12-10 05:10:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:10:24 --> Input Class Initialized
INFO - 2021-12-10 05:10:24 --> Language Class Initialized
INFO - 2021-12-10 05:10:24 --> Loader Class Initialized
INFO - 2021-12-10 05:10:24 --> Helper loaded: url_helper
INFO - 2021-12-10 05:10:24 --> Helper loaded: form_helper
INFO - 2021-12-10 05:10:24 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:10:24 --> Helper loaded: language_helper
INFO - 2021-12-10 05:10:24 --> Helper loaded: file_helper
INFO - 2021-12-10 05:10:24 --> Helper loaded: date_helper
INFO - 2021-12-10 05:10:24 --> Database Driver Class Initialized
INFO - 2021-12-10 05:10:24 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:10:24 --> Parser Class Initialized
INFO - 2021-12-10 05:10:24 --> Model Class Initialized
INFO - 2021-12-10 05:10:24 --> Model Class Initialized
INFO - 2021-12-10 05:10:24 --> Controller Class Initialized
INFO - 2021-12-10 05:10:24 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:10:24 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:10:24 --> Could not find the language line "today"
INFO - 2021-12-10 05:10:24 --> Model Class Initialized
INFO - 2021-12-10 05:10:24 --> Helper loaded: text_helper
INFO - 2021-12-10 05:10:24 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:10:24 --> Form Validation Class Initialized
INFO - 2021-12-10 05:10:24 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 05:10:24 --> Severity: Notice --> Undefined variable: p C:\wamp64\www\Reactor\sma\controllers\Pos.php 303
INFO - 2021-12-10 05:10:24 --> addSale 111
INFO - 2021-12-10 05:10:24 --> syncPurchaseItems
INFO - 2021-12-10 05:10:24 --> syncPurchaseItems213213123123123123123
INFO - 2021-12-10 05:10:24 --> syncPurchaseItems//////////////////// purchase_items
INFO - 2021-12-10 05:10:24 --> 4
INFO - 2021-12-10 05:10:24 --> 4
INFO - 2021-12-10 05:10:24 --> syncQuantity 22
INFO - 2021-12-10 05:10:24 --> 22
INFO - 2021-12-10 05:10:24 --> syncProductQty
INFO - 2021-12-10 05:10:24 --> 2734
INFO - 2021-12-10 05:10:24 --> balance_qty
INFO - 2021-12-10 05:10:24 --> 4.0000
INFO - 2021-12-10 05:10:24 --> warehouses_products standart
INFO - 2021-12-10 05:10:24 --> 2734
INFO - 2021-12-10 05:10:24 --> 3
INFO - 2021-12-10 05:10:24 --> 4.0000
INFO - 2021-12-10 05:10:24 --> Config Class Initialized
INFO - 2021-12-10 05:10:24 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:10:24 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:10:24 --> Utf8 Class Initialized
INFO - 2021-12-10 05:10:24 --> URI Class Initialized
INFO - 2021-12-10 05:10:24 --> Router Class Initialized
INFO - 2021-12-10 05:10:24 --> Output Class Initialized
INFO - 2021-12-10 05:10:24 --> Security Class Initialized
INFO - 2021-12-10 05:10:24 --> CRSF cookie sent
DEBUG - 2021-12-10 05:10:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:10:24 --> Input Class Initialized
INFO - 2021-12-10 05:10:24 --> Language Class Initialized
INFO - 2021-12-10 05:10:24 --> Loader Class Initialized
INFO - 2021-12-10 05:10:24 --> Helper loaded: url_helper
INFO - 2021-12-10 05:10:24 --> Helper loaded: form_helper
INFO - 2021-12-10 05:10:24 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:10:24 --> Helper loaded: language_helper
INFO - 2021-12-10 05:10:24 --> Helper loaded: file_helper
INFO - 2021-12-10 05:10:24 --> Helper loaded: date_helper
INFO - 2021-12-10 05:10:24 --> Database Driver Class Initialized
INFO - 2021-12-10 05:10:24 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:10:24 --> Parser Class Initialized
INFO - 2021-12-10 05:10:24 --> Model Class Initialized
INFO - 2021-12-10 05:10:24 --> Model Class Initialized
INFO - 2021-12-10 05:10:24 --> Controller Class Initialized
INFO - 2021-12-10 05:10:24 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:10:24 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:10:24 --> Could not find the language line "today"
INFO - 2021-12-10 05:10:24 --> Model Class Initialized
INFO - 2021-12-10 05:10:24 --> Helper loaded: text_helper
INFO - 2021-12-10 05:10:24 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:10:24 --> Form Validation Class Initialized
DEBUG - 2021-12-10 05:10:25 --> Zend Class Initialized
DEBUG - 2021-12-10 05:10:25 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 05:10:25 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 05:10:25 --> Final output sent to browser
DEBUG - 2021-12-10 05:10:25 --> Total execution time: 0.6356
INFO - 2021-12-10 05:11:29 --> Config Class Initialized
INFO - 2021-12-10 05:11:29 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:11:29 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:11:29 --> Utf8 Class Initialized
INFO - 2021-12-10 05:11:29 --> URI Class Initialized
INFO - 2021-12-10 05:11:29 --> Router Class Initialized
INFO - 2021-12-10 05:11:29 --> Output Class Initialized
INFO - 2021-12-10 05:11:29 --> Security Class Initialized
INFO - 2021-12-10 05:11:29 --> CRSF cookie sent
DEBUG - 2021-12-10 05:11:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:11:29 --> Input Class Initialized
INFO - 2021-12-10 05:11:29 --> Language Class Initialized
INFO - 2021-12-10 05:11:29 --> Loader Class Initialized
INFO - 2021-12-10 05:11:29 --> Helper loaded: url_helper
INFO - 2021-12-10 05:11:29 --> Helper loaded: form_helper
INFO - 2021-12-10 05:11:29 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:11:29 --> Helper loaded: language_helper
INFO - 2021-12-10 05:11:29 --> Helper loaded: file_helper
INFO - 2021-12-10 05:11:29 --> Helper loaded: date_helper
INFO - 2021-12-10 05:11:29 --> Database Driver Class Initialized
INFO - 2021-12-10 05:11:29 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:11:29 --> Parser Class Initialized
INFO - 2021-12-10 05:11:29 --> Model Class Initialized
INFO - 2021-12-10 05:11:29 --> Model Class Initialized
INFO - 2021-12-10 05:11:29 --> Controller Class Initialized
INFO - 2021-12-10 05:11:29 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:11:29 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:11:29 --> Could not find the language line "today"
INFO - 2021-12-10 05:11:29 --> Model Class Initialized
INFO - 2021-12-10 05:11:29 --> Helper loaded: text_helper
INFO - 2021-12-10 05:11:29 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:11:29 --> Form Validation Class Initialized
DEBUG - 2021-12-10 05:11:29 --> Zend Class Initialized
DEBUG - 2021-12-10 05:11:29 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 05:11:29 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 05:11:29 --> Final output sent to browser
DEBUG - 2021-12-10 05:11:29 --> Total execution time: 0.8238
INFO - 2021-12-10 05:11:38 --> Config Class Initialized
INFO - 2021-12-10 05:11:38 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:11:38 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:11:38 --> Utf8 Class Initialized
INFO - 2021-12-10 05:11:38 --> URI Class Initialized
INFO - 2021-12-10 05:11:38 --> Router Class Initialized
INFO - 2021-12-10 05:11:38 --> Output Class Initialized
INFO - 2021-12-10 05:11:38 --> Security Class Initialized
INFO - 2021-12-10 05:11:38 --> CRSF cookie sent
DEBUG - 2021-12-10 05:11:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:11:39 --> Input Class Initialized
INFO - 2021-12-10 05:11:39 --> Language Class Initialized
INFO - 2021-12-10 05:11:39 --> Loader Class Initialized
INFO - 2021-12-10 05:11:39 --> Helper loaded: url_helper
INFO - 2021-12-10 05:11:39 --> Helper loaded: form_helper
INFO - 2021-12-10 05:11:39 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:11:39 --> Helper loaded: language_helper
INFO - 2021-12-10 05:11:39 --> Helper loaded: file_helper
INFO - 2021-12-10 05:11:39 --> Helper loaded: date_helper
INFO - 2021-12-10 05:11:39 --> Database Driver Class Initialized
INFO - 2021-12-10 05:11:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:11:39 --> Parser Class Initialized
INFO - 2021-12-10 05:11:39 --> Model Class Initialized
INFO - 2021-12-10 05:11:39 --> Model Class Initialized
INFO - 2021-12-10 05:11:39 --> Controller Class Initialized
INFO - 2021-12-10 05:11:39 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:11:39 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:11:39 --> Could not find the language line "today"
INFO - 2021-12-10 05:11:39 --> Model Class Initialized
INFO - 2021-12-10 05:11:39 --> Helper loaded: text_helper
INFO - 2021-12-10 05:11:39 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:11:39 --> Form Validation Class Initialized
INFO - 2021-12-10 05:11:39 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 05:11:39 --> Pagination Class Initialized
ERROR - 2021-12-10 05:11:39 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:11:39 --> Could not find the language line "order"
ERROR - 2021-12-10 05:11:39 --> Could not find the language line "bill"
INFO - 2021-12-10 05:11:39 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 05:11:39 --> Final output sent to browser
DEBUG - 2021-12-10 05:11:39 --> Total execution time: 0.4359
INFO - 2021-12-10 05:11:39 --> Config Class Initialized
INFO - 2021-12-10 05:11:39 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:11:39 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:11:39 --> Utf8 Class Initialized
INFO - 2021-12-10 05:11:39 --> URI Class Initialized
INFO - 2021-12-10 05:11:39 --> Router Class Initialized
INFO - 2021-12-10 05:11:39 --> Output Class Initialized
INFO - 2021-12-10 05:11:39 --> Security Class Initialized
INFO - 2021-12-10 05:11:39 --> CRSF cookie sent
DEBUG - 2021-12-10 05:11:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:11:39 --> Input Class Initialized
INFO - 2021-12-10 05:11:39 --> Language Class Initialized
INFO - 2021-12-10 05:11:39 --> Loader Class Initialized
INFO - 2021-12-10 05:11:39 --> Helper loaded: url_helper
INFO - 2021-12-10 05:11:39 --> Helper loaded: form_helper
INFO - 2021-12-10 05:11:39 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:11:39 --> Helper loaded: language_helper
INFO - 2021-12-10 05:11:39 --> Helper loaded: file_helper
INFO - 2021-12-10 05:11:39 --> Helper loaded: date_helper
INFO - 2021-12-10 05:11:39 --> Database Driver Class Initialized
INFO - 2021-12-10 05:11:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:11:39 --> Parser Class Initialized
INFO - 2021-12-10 05:11:39 --> Model Class Initialized
INFO - 2021-12-10 05:11:39 --> Model Class Initialized
INFO - 2021-12-10 05:11:39 --> Controller Class Initialized
INFO - 2021-12-10 05:11:39 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:11:39 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:11:39 --> Could not find the language line "today"
INFO - 2021-12-10 05:11:39 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 05:11:39 --> Form Validation Class Initialized
INFO - 2021-12-10 05:11:39 --> Model Class Initialized
INFO - 2021-12-10 05:11:39 --> Final output sent to browser
DEBUG - 2021-12-10 05:11:39 --> Total execution time: 0.2108
INFO - 2021-12-10 05:11:41 --> Config Class Initialized
INFO - 2021-12-10 05:11:41 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:11:41 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:11:41 --> Utf8 Class Initialized
INFO - 2021-12-10 05:11:41 --> URI Class Initialized
INFO - 2021-12-10 05:11:41 --> Router Class Initialized
INFO - 2021-12-10 05:11:41 --> Output Class Initialized
INFO - 2021-12-10 05:11:41 --> Security Class Initialized
INFO - 2021-12-10 05:11:41 --> CRSF cookie sent
DEBUG - 2021-12-10 05:11:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:11:41 --> Input Class Initialized
INFO - 2021-12-10 05:11:41 --> Language Class Initialized
INFO - 2021-12-10 05:11:41 --> Loader Class Initialized
INFO - 2021-12-10 05:11:41 --> Helper loaded: url_helper
INFO - 2021-12-10 05:11:41 --> Helper loaded: form_helper
INFO - 2021-12-10 05:11:41 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:11:41 --> Helper loaded: language_helper
INFO - 2021-12-10 05:11:41 --> Helper loaded: file_helper
INFO - 2021-12-10 05:11:41 --> Helper loaded: date_helper
INFO - 2021-12-10 05:11:41 --> Database Driver Class Initialized
INFO - 2021-12-10 05:11:41 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:11:41 --> Parser Class Initialized
INFO - 2021-12-10 05:11:41 --> Model Class Initialized
INFO - 2021-12-10 05:11:41 --> Model Class Initialized
INFO - 2021-12-10 05:11:41 --> Controller Class Initialized
INFO - 2021-12-10 05:11:41 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:11:41 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:11:41 --> Could not find the language line "today"
INFO - 2021-12-10 05:11:41 --> Model Class Initialized
INFO - 2021-12-10 05:11:41 --> Helper loaded: text_helper
INFO - 2021-12-10 05:11:41 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:11:41 --> Form Validation Class Initialized
INFO - 2021-12-10 05:11:41 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_bill.php
INFO - 2021-12-10 05:11:41 --> Final output sent to browser
DEBUG - 2021-12-10 05:11:41 --> Total execution time: 0.2309
INFO - 2021-12-10 05:11:41 --> Config Class Initialized
INFO - 2021-12-10 05:11:41 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:11:41 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:11:41 --> Utf8 Class Initialized
INFO - 2021-12-10 05:11:41 --> URI Class Initialized
INFO - 2021-12-10 05:11:41 --> Router Class Initialized
INFO - 2021-12-10 05:11:41 --> Output Class Initialized
INFO - 2021-12-10 05:11:41 --> Security Class Initialized
INFO - 2021-12-10 05:11:41 --> CRSF cookie sent
DEBUG - 2021-12-10 05:11:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:11:41 --> Input Class Initialized
INFO - 2021-12-10 05:11:41 --> Language Class Initialized
INFO - 2021-12-10 05:11:41 --> Loader Class Initialized
INFO - 2021-12-10 05:11:41 --> Helper loaded: url_helper
INFO - 2021-12-10 05:11:41 --> Helper loaded: form_helper
INFO - 2021-12-10 05:11:41 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:11:41 --> Helper loaded: language_helper
INFO - 2021-12-10 05:11:41 --> Helper loaded: file_helper
INFO - 2021-12-10 05:11:41 --> Helper loaded: date_helper
INFO - 2021-12-10 05:11:41 --> Database Driver Class Initialized
INFO - 2021-12-10 05:11:41 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:11:41 --> Parser Class Initialized
INFO - 2021-12-10 05:11:41 --> Model Class Initialized
INFO - 2021-12-10 05:11:41 --> Model Class Initialized
INFO - 2021-12-10 05:11:41 --> Controller Class Initialized
INFO - 2021-12-10 05:11:41 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:11:42 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:11:42 --> Could not find the language line "today"
INFO - 2021-12-10 05:11:42 --> Form Validation Class Initialized
INFO - 2021-12-10 05:11:42 --> Model Class Initialized
INFO - 2021-12-10 05:11:42 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/promotions.php
INFO - 2021-12-10 05:11:42 --> Final output sent to browser
DEBUG - 2021-12-10 05:11:42 --> Total execution time: 0.2622
INFO - 2021-12-10 05:11:47 --> Config Class Initialized
INFO - 2021-12-10 05:11:47 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:11:47 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:11:47 --> Utf8 Class Initialized
INFO - 2021-12-10 05:11:47 --> URI Class Initialized
INFO - 2021-12-10 05:11:47 --> Router Class Initialized
INFO - 2021-12-10 05:11:47 --> Output Class Initialized
INFO - 2021-12-10 05:11:47 --> Security Class Initialized
INFO - 2021-12-10 05:11:47 --> CRSF cookie sent
DEBUG - 2021-12-10 05:11:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:11:47 --> Input Class Initialized
INFO - 2021-12-10 05:11:47 --> Language Class Initialized
INFO - 2021-12-10 05:11:47 --> Loader Class Initialized
INFO - 2021-12-10 05:11:47 --> Helper loaded: url_helper
INFO - 2021-12-10 05:11:47 --> Helper loaded: form_helper
INFO - 2021-12-10 05:11:47 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:11:47 --> Helper loaded: language_helper
INFO - 2021-12-10 05:11:47 --> Helper loaded: file_helper
INFO - 2021-12-10 05:11:47 --> Helper loaded: date_helper
INFO - 2021-12-10 05:11:47 --> Database Driver Class Initialized
INFO - 2021-12-10 05:11:47 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:11:47 --> Parser Class Initialized
INFO - 2021-12-10 05:11:47 --> Model Class Initialized
INFO - 2021-12-10 05:11:47 --> Model Class Initialized
INFO - 2021-12-10 05:11:47 --> Controller Class Initialized
INFO - 2021-12-10 05:11:48 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:11:48 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:11:48 --> Could not find the language line "today"
INFO - 2021-12-10 05:11:48 --> Form Validation Class Initialized
INFO - 2021-12-10 05:11:48 --> Model Class Initialized
ERROR - 2021-12-10 05:11:48 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:11:48 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:11:48 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:11:48 --> Could not find the language line "backups"
INFO - 2021-12-10 05:11:48 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:11:48 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/dashboard.php
ERROR - 2021-12-10 05:11:48 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:11:48 --> Could not find the language line "due"
ERROR - 2021-12-10 05:11:48 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:11:48 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:11:48 --> Final output sent to browser
DEBUG - 2021-12-10 05:11:48 --> Total execution time: 0.2148
INFO - 2021-12-10 05:12:12 --> Config Class Initialized
INFO - 2021-12-10 05:12:12 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:12:12 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:12:12 --> Utf8 Class Initialized
INFO - 2021-12-10 05:12:12 --> URI Class Initialized
INFO - 2021-12-10 05:12:12 --> Router Class Initialized
INFO - 2021-12-10 05:12:12 --> Output Class Initialized
INFO - 2021-12-10 05:12:12 --> Security Class Initialized
INFO - 2021-12-10 05:12:12 --> CRSF cookie sent
DEBUG - 2021-12-10 05:12:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:12:12 --> Input Class Initialized
INFO - 2021-12-10 05:12:12 --> Language Class Initialized
INFO - 2021-12-10 05:12:12 --> Loader Class Initialized
INFO - 2021-12-10 05:12:12 --> Helper loaded: url_helper
INFO - 2021-12-10 05:12:12 --> Helper loaded: form_helper
INFO - 2021-12-10 05:12:12 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:12:12 --> Helper loaded: language_helper
INFO - 2021-12-10 05:12:12 --> Helper loaded: file_helper
INFO - 2021-12-10 05:12:12 --> Helper loaded: date_helper
INFO - 2021-12-10 05:12:12 --> Database Driver Class Initialized
INFO - 2021-12-10 05:12:12 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:12:12 --> Parser Class Initialized
INFO - 2021-12-10 05:12:12 --> Model Class Initialized
INFO - 2021-12-10 05:12:12 --> Model Class Initialized
INFO - 2021-12-10 05:12:12 --> Controller Class Initialized
INFO - 2021-12-10 05:12:12 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:12:12 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:12:12 --> Could not find the language line "today"
INFO - 2021-12-10 05:12:12 --> Model Class Initialized
INFO - 2021-12-10 05:12:12 --> Helper loaded: text_helper
INFO - 2021-12-10 05:12:12 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:12:12 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:12:12 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:12:12 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:12:12 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:12:12 --> Could not find the language line "backups"
INFO - 2021-12-10 05:12:12 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:12:12 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 05:12:12 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:12:12 --> Could not find the language line "due"
ERROR - 2021-12-10 05:12:12 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:12:12 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:12:12 --> Final output sent to browser
DEBUG - 2021-12-10 05:12:12 --> Total execution time: 0.2175
INFO - 2021-12-10 05:12:12 --> Config Class Initialized
INFO - 2021-12-10 05:12:12 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:12:12 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:12:12 --> Utf8 Class Initialized
INFO - 2021-12-10 05:12:12 --> URI Class Initialized
INFO - 2021-12-10 05:12:12 --> Router Class Initialized
INFO - 2021-12-10 05:12:12 --> Output Class Initialized
INFO - 2021-12-10 05:12:12 --> Security Class Initialized
INFO - 2021-12-10 05:12:12 --> CRSF cookie sent
INFO - 2021-12-10 05:12:12 --> CSRF token verified
DEBUG - 2021-12-10 05:12:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:12:12 --> Input Class Initialized
INFO - 2021-12-10 05:12:12 --> Language Class Initialized
INFO - 2021-12-10 05:12:12 --> Loader Class Initialized
INFO - 2021-12-10 05:12:12 --> Helper loaded: url_helper
INFO - 2021-12-10 05:12:12 --> Helper loaded: form_helper
INFO - 2021-12-10 05:12:12 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:12:12 --> Helper loaded: language_helper
INFO - 2021-12-10 05:12:12 --> Helper loaded: file_helper
INFO - 2021-12-10 05:12:12 --> Helper loaded: date_helper
INFO - 2021-12-10 05:12:12 --> Database Driver Class Initialized
INFO - 2021-12-10 05:12:12 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:12:12 --> Parser Class Initialized
INFO - 2021-12-10 05:12:12 --> Model Class Initialized
INFO - 2021-12-10 05:12:12 --> Model Class Initialized
INFO - 2021-12-10 05:12:12 --> Controller Class Initialized
INFO - 2021-12-10 05:12:12 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:12:12 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:12:12 --> Could not find the language line "today"
INFO - 2021-12-10 05:12:12 --> Model Class Initialized
INFO - 2021-12-10 05:12:12 --> Helper loaded: text_helper
INFO - 2021-12-10 05:12:12 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:12:12 --> Form Validation Class Initialized
INFO - 2021-12-10 05:12:13 --> Final output sent to browser
DEBUG - 2021-12-10 05:12:13 --> Total execution time: 0.3281
INFO - 2021-12-10 05:16:46 --> Config Class Initialized
INFO - 2021-12-10 05:16:46 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:16:46 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:16:46 --> Utf8 Class Initialized
INFO - 2021-12-10 05:16:46 --> URI Class Initialized
INFO - 2021-12-10 05:16:46 --> Router Class Initialized
INFO - 2021-12-10 05:16:47 --> Output Class Initialized
INFO - 2021-12-10 05:16:47 --> Security Class Initialized
INFO - 2021-12-10 05:16:47 --> CRSF cookie sent
INFO - 2021-12-10 05:16:47 --> CSRF token verified
DEBUG - 2021-12-10 05:16:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:16:47 --> Input Class Initialized
INFO - 2021-12-10 05:16:47 --> Language Class Initialized
INFO - 2021-12-10 05:16:47 --> Loader Class Initialized
INFO - 2021-12-10 05:16:47 --> Helper loaded: url_helper
INFO - 2021-12-10 05:16:47 --> Helper loaded: form_helper
INFO - 2021-12-10 05:16:47 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:16:47 --> Helper loaded: language_helper
INFO - 2021-12-10 05:16:47 --> Helper loaded: file_helper
INFO - 2021-12-10 05:16:47 --> Helper loaded: date_helper
INFO - 2021-12-10 05:16:47 --> Database Driver Class Initialized
INFO - 2021-12-10 05:16:47 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:16:47 --> Parser Class Initialized
INFO - 2021-12-10 05:16:47 --> Model Class Initialized
INFO - 2021-12-10 05:16:47 --> Model Class Initialized
INFO - 2021-12-10 05:16:47 --> Controller Class Initialized
INFO - 2021-12-10 05:16:47 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:16:47 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:16:47 --> Could not find the language line "today"
INFO - 2021-12-10 05:16:47 --> Model Class Initialized
INFO - 2021-12-10 05:16:47 --> Helper loaded: text_helper
INFO - 2021-12-10 05:16:47 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:16:47 --> Form Validation Class Initialized
INFO - 2021-12-10 05:16:47 --> Final output sent to browser
DEBUG - 2021-12-10 05:16:47 --> Total execution time: 0.6493
INFO - 2021-12-10 05:32:27 --> Config Class Initialized
INFO - 2021-12-10 05:32:27 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:32:27 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:32:27 --> Utf8 Class Initialized
INFO - 2021-12-10 05:32:27 --> URI Class Initialized
INFO - 2021-12-10 05:32:27 --> Router Class Initialized
INFO - 2021-12-10 05:32:27 --> Output Class Initialized
INFO - 2021-12-10 05:32:27 --> Security Class Initialized
INFO - 2021-12-10 05:32:27 --> CRSF cookie sent
INFO - 2021-12-10 05:32:27 --> CSRF token verified
DEBUG - 2021-12-10 05:32:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:32:27 --> Input Class Initialized
INFO - 2021-12-10 05:32:27 --> Language Class Initialized
INFO - 2021-12-10 05:32:27 --> Loader Class Initialized
INFO - 2021-12-10 05:32:27 --> Helper loaded: url_helper
INFO - 2021-12-10 05:32:27 --> Helper loaded: form_helper
INFO - 2021-12-10 05:32:27 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:32:27 --> Helper loaded: language_helper
INFO - 2021-12-10 05:32:27 --> Helper loaded: file_helper
INFO - 2021-12-10 05:32:27 --> Helper loaded: date_helper
INFO - 2021-12-10 05:32:27 --> Database Driver Class Initialized
INFO - 2021-12-10 05:32:27 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:32:27 --> Parser Class Initialized
INFO - 2021-12-10 05:32:27 --> Model Class Initialized
INFO - 2021-12-10 05:32:27 --> Model Class Initialized
INFO - 2021-12-10 05:32:27 --> Controller Class Initialized
INFO - 2021-12-10 05:32:27 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:32:27 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:32:27 --> Could not find the language line "today"
INFO - 2021-12-10 05:32:27 --> Model Class Initialized
INFO - 2021-12-10 05:32:27 --> Helper loaded: text_helper
INFO - 2021-12-10 05:32:27 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:32:27 --> Form Validation Class Initialized
INFO - 2021-12-10 05:32:27 --> Final output sent to browser
DEBUG - 2021-12-10 05:32:27 --> Total execution time: 0.2110
INFO - 2021-12-10 05:32:28 --> Config Class Initialized
INFO - 2021-12-10 05:32:28 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:32:28 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:32:28 --> Utf8 Class Initialized
INFO - 2021-12-10 05:32:28 --> URI Class Initialized
INFO - 2021-12-10 05:32:28 --> Router Class Initialized
INFO - 2021-12-10 05:32:28 --> Output Class Initialized
INFO - 2021-12-10 05:32:28 --> Security Class Initialized
INFO - 2021-12-10 05:32:28 --> CRSF cookie sent
INFO - 2021-12-10 05:32:28 --> CSRF token verified
DEBUG - 2021-12-10 05:32:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:32:28 --> Input Class Initialized
INFO - 2021-12-10 05:32:28 --> Language Class Initialized
INFO - 2021-12-10 05:32:28 --> Loader Class Initialized
INFO - 2021-12-10 05:32:28 --> Helper loaded: url_helper
INFO - 2021-12-10 05:32:28 --> Helper loaded: form_helper
INFO - 2021-12-10 05:32:28 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:32:28 --> Helper loaded: language_helper
INFO - 2021-12-10 05:32:28 --> Helper loaded: file_helper
INFO - 2021-12-10 05:32:28 --> Helper loaded: date_helper
INFO - 2021-12-10 05:32:28 --> Database Driver Class Initialized
INFO - 2021-12-10 05:32:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:32:28 --> Parser Class Initialized
INFO - 2021-12-10 05:32:28 --> Model Class Initialized
INFO - 2021-12-10 05:32:28 --> Model Class Initialized
INFO - 2021-12-10 05:32:28 --> Controller Class Initialized
INFO - 2021-12-10 05:32:28 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:32:28 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:32:28 --> Could not find the language line "today"
INFO - 2021-12-10 05:32:28 --> Model Class Initialized
INFO - 2021-12-10 05:32:28 --> Helper loaded: text_helper
INFO - 2021-12-10 05:32:28 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:32:28 --> Form Validation Class Initialized
INFO - 2021-12-10 05:32:28 --> Final output sent to browser
DEBUG - 2021-12-10 05:32:28 --> Total execution time: 0.2033
INFO - 2021-12-10 05:34:35 --> Config Class Initialized
INFO - 2021-12-10 05:34:35 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:34:35 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:34:35 --> Utf8 Class Initialized
INFO - 2021-12-10 05:34:35 --> URI Class Initialized
INFO - 2021-12-10 05:34:35 --> Router Class Initialized
INFO - 2021-12-10 05:34:35 --> Output Class Initialized
INFO - 2021-12-10 05:34:35 --> Security Class Initialized
INFO - 2021-12-10 05:34:35 --> CRSF cookie sent
DEBUG - 2021-12-10 05:34:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:34:35 --> Input Class Initialized
INFO - 2021-12-10 05:34:35 --> Language Class Initialized
INFO - 2021-12-10 05:34:35 --> Loader Class Initialized
INFO - 2021-12-10 05:34:35 --> Helper loaded: url_helper
INFO - 2021-12-10 05:34:35 --> Helper loaded: form_helper
INFO - 2021-12-10 05:34:35 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:34:35 --> Helper loaded: language_helper
INFO - 2021-12-10 05:34:35 --> Helper loaded: file_helper
INFO - 2021-12-10 05:34:35 --> Helper loaded: date_helper
INFO - 2021-12-10 05:34:35 --> Database Driver Class Initialized
INFO - 2021-12-10 05:34:35 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:34:35 --> Parser Class Initialized
INFO - 2021-12-10 05:34:35 --> Model Class Initialized
INFO - 2021-12-10 05:34:35 --> Model Class Initialized
INFO - 2021-12-10 05:34:35 --> Controller Class Initialized
INFO - 2021-12-10 05:34:35 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:34:35 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:34:35 --> Could not find the language line "today"
INFO - 2021-12-10 05:34:35 --> Model Class Initialized
INFO - 2021-12-10 05:34:35 --> Helper loaded: text_helper
INFO - 2021-12-10 05:34:35 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:34:35 --> Form Validation Class Initialized
INFO - 2021-12-10 05:34:35 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 05:34:35 --> Pagination Class Initialized
ERROR - 2021-12-10 05:34:35 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:34:35 --> Could not find the language line "order"
ERROR - 2021-12-10 05:34:35 --> Could not find the language line "bill"
INFO - 2021-12-10 05:34:35 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 05:34:35 --> Final output sent to browser
DEBUG - 2021-12-10 05:34:35 --> Total execution time: 0.2977
INFO - 2021-12-10 05:34:35 --> Config Class Initialized
INFO - 2021-12-10 05:34:35 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:34:35 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:34:35 --> Utf8 Class Initialized
INFO - 2021-12-10 05:34:35 --> URI Class Initialized
INFO - 2021-12-10 05:34:35 --> Router Class Initialized
INFO - 2021-12-10 05:34:35 --> Output Class Initialized
INFO - 2021-12-10 05:34:36 --> Security Class Initialized
INFO - 2021-12-10 05:34:36 --> CRSF cookie sent
DEBUG - 2021-12-10 05:34:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:34:36 --> Input Class Initialized
INFO - 2021-12-10 05:34:36 --> Language Class Initialized
INFO - 2021-12-10 05:34:36 --> Loader Class Initialized
INFO - 2021-12-10 05:34:36 --> Helper loaded: url_helper
INFO - 2021-12-10 05:34:36 --> Helper loaded: form_helper
INFO - 2021-12-10 05:34:36 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:34:36 --> Helper loaded: language_helper
INFO - 2021-12-10 05:34:36 --> Helper loaded: file_helper
INFO - 2021-12-10 05:34:36 --> Helper loaded: date_helper
INFO - 2021-12-10 05:34:36 --> Database Driver Class Initialized
INFO - 2021-12-10 05:34:36 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:34:36 --> Parser Class Initialized
INFO - 2021-12-10 05:34:36 --> Model Class Initialized
INFO - 2021-12-10 05:34:36 --> Model Class Initialized
INFO - 2021-12-10 05:34:36 --> Controller Class Initialized
INFO - 2021-12-10 05:34:36 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:34:36 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:34:36 --> Could not find the language line "today"
INFO - 2021-12-10 05:34:36 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 05:34:36 --> Form Validation Class Initialized
INFO - 2021-12-10 05:34:36 --> Model Class Initialized
INFO - 2021-12-10 05:34:36 --> Final output sent to browser
DEBUG - 2021-12-10 05:34:36 --> Total execution time: 0.1655
INFO - 2021-12-10 05:34:37 --> Config Class Initialized
INFO - 2021-12-10 05:34:37 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:34:37 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:34:37 --> Utf8 Class Initialized
INFO - 2021-12-10 05:34:37 --> URI Class Initialized
INFO - 2021-12-10 05:34:37 --> Router Class Initialized
INFO - 2021-12-10 05:34:37 --> Output Class Initialized
INFO - 2021-12-10 05:34:37 --> Security Class Initialized
INFO - 2021-12-10 05:34:37 --> CRSF cookie sent
DEBUG - 2021-12-10 05:34:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:34:37 --> Input Class Initialized
INFO - 2021-12-10 05:34:37 --> Language Class Initialized
INFO - 2021-12-10 05:34:38 --> Loader Class Initialized
INFO - 2021-12-10 05:34:38 --> Helper loaded: url_helper
INFO - 2021-12-10 05:34:38 --> Helper loaded: form_helper
INFO - 2021-12-10 05:34:38 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:34:38 --> Helper loaded: language_helper
INFO - 2021-12-10 05:34:38 --> Helper loaded: file_helper
INFO - 2021-12-10 05:34:38 --> Helper loaded: date_helper
INFO - 2021-12-10 05:34:38 --> Database Driver Class Initialized
INFO - 2021-12-10 05:34:38 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:34:38 --> Parser Class Initialized
INFO - 2021-12-10 05:34:38 --> Model Class Initialized
INFO - 2021-12-10 05:34:38 --> Model Class Initialized
INFO - 2021-12-10 05:34:38 --> Controller Class Initialized
INFO - 2021-12-10 05:34:38 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:34:38 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:34:38 --> Could not find the language line "today"
INFO - 2021-12-10 05:34:38 --> Model Class Initialized
INFO - 2021-12-10 05:34:38 --> Helper loaded: text_helper
INFO - 2021-12-10 05:34:38 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:34:38 --> Form Validation Class Initialized
INFO - 2021-12-10 05:34:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 05:34:38 --> Final output sent to browser
DEBUG - 2021-12-10 05:34:38 --> Total execution time: 0.3594
INFO - 2021-12-10 05:37:53 --> Config Class Initialized
INFO - 2021-12-10 05:37:53 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:37:53 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:37:53 --> Utf8 Class Initialized
INFO - 2021-12-10 05:37:53 --> URI Class Initialized
INFO - 2021-12-10 05:37:53 --> Router Class Initialized
INFO - 2021-12-10 05:37:53 --> Output Class Initialized
INFO - 2021-12-10 05:37:53 --> Security Class Initialized
INFO - 2021-12-10 05:37:53 --> CRSF cookie sent
DEBUG - 2021-12-10 05:37:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:37:53 --> Input Class Initialized
INFO - 2021-12-10 05:37:53 --> Language Class Initialized
INFO - 2021-12-10 05:37:53 --> Loader Class Initialized
INFO - 2021-12-10 05:37:53 --> Helper loaded: url_helper
INFO - 2021-12-10 05:37:53 --> Helper loaded: form_helper
INFO - 2021-12-10 05:37:53 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:37:53 --> Helper loaded: language_helper
INFO - 2021-12-10 05:37:53 --> Helper loaded: file_helper
INFO - 2021-12-10 05:37:53 --> Helper loaded: date_helper
INFO - 2021-12-10 05:37:53 --> Database Driver Class Initialized
INFO - 2021-12-10 05:37:53 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:37:53 --> Parser Class Initialized
INFO - 2021-12-10 05:37:54 --> Model Class Initialized
INFO - 2021-12-10 05:37:54 --> Model Class Initialized
INFO - 2021-12-10 05:37:54 --> Controller Class Initialized
INFO - 2021-12-10 05:37:54 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:37:54 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:37:54 --> Could not find the language line "today"
INFO - 2021-12-10 05:37:54 --> Form Validation Class Initialized
INFO - 2021-12-10 05:37:54 --> Model Class Initialized
ERROR - 2021-12-10 05:37:54 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:37:54 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:37:54 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:37:54 --> Could not find the language line "backups"
INFO - 2021-12-10 05:37:54 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:37:54 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/dashboard.php
ERROR - 2021-12-10 05:37:54 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:37:54 --> Could not find the language line "due"
ERROR - 2021-12-10 05:37:54 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:37:54 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:37:54 --> Final output sent to browser
DEBUG - 2021-12-10 05:37:54 --> Total execution time: 0.3117
INFO - 2021-12-10 05:37:58 --> Config Class Initialized
INFO - 2021-12-10 05:37:58 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:37:58 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:37:58 --> Utf8 Class Initialized
INFO - 2021-12-10 05:37:58 --> URI Class Initialized
INFO - 2021-12-10 05:37:58 --> Router Class Initialized
INFO - 2021-12-10 05:37:58 --> Output Class Initialized
INFO - 2021-12-10 05:37:58 --> Security Class Initialized
INFO - 2021-12-10 05:37:58 --> CRSF cookie sent
DEBUG - 2021-12-10 05:37:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:37:58 --> Input Class Initialized
INFO - 2021-12-10 05:37:58 --> Language Class Initialized
INFO - 2021-12-10 05:37:58 --> Loader Class Initialized
INFO - 2021-12-10 05:37:58 --> Helper loaded: url_helper
INFO - 2021-12-10 05:37:58 --> Helper loaded: form_helper
INFO - 2021-12-10 05:37:58 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:37:58 --> Helper loaded: language_helper
INFO - 2021-12-10 05:37:58 --> Helper loaded: file_helper
INFO - 2021-12-10 05:37:58 --> Helper loaded: date_helper
INFO - 2021-12-10 05:37:58 --> Database Driver Class Initialized
INFO - 2021-12-10 05:37:58 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:37:58 --> Parser Class Initialized
INFO - 2021-12-10 05:37:58 --> Model Class Initialized
INFO - 2021-12-10 05:37:58 --> Model Class Initialized
INFO - 2021-12-10 05:37:58 --> Controller Class Initialized
INFO - 2021-12-10 05:37:58 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:37:58 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:37:58 --> Could not find the language line "today"
INFO - 2021-12-10 05:37:58 --> Model Class Initialized
INFO - 2021-12-10 05:37:58 --> Helper loaded: text_helper
INFO - 2021-12-10 05:37:58 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:37:58 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:37:58 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:37:58 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:37:58 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:37:58 --> Could not find the language line "backups"
INFO - 2021-12-10 05:37:58 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:37:58 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 05:37:58 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:37:58 --> Could not find the language line "due"
ERROR - 2021-12-10 05:37:58 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:37:58 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:37:58 --> Final output sent to browser
DEBUG - 2021-12-10 05:37:58 --> Total execution time: 0.1840
INFO - 2021-12-10 05:37:58 --> Config Class Initialized
INFO - 2021-12-10 05:37:58 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:37:58 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:37:58 --> Utf8 Class Initialized
INFO - 2021-12-10 05:37:58 --> URI Class Initialized
INFO - 2021-12-10 05:37:58 --> Router Class Initialized
INFO - 2021-12-10 05:37:58 --> Output Class Initialized
INFO - 2021-12-10 05:37:58 --> Security Class Initialized
INFO - 2021-12-10 05:37:58 --> CRSF cookie sent
INFO - 2021-12-10 05:37:58 --> CSRF token verified
DEBUG - 2021-12-10 05:37:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:37:58 --> Input Class Initialized
INFO - 2021-12-10 05:37:58 --> Language Class Initialized
INFO - 2021-12-10 05:37:58 --> Loader Class Initialized
INFO - 2021-12-10 05:37:58 --> Helper loaded: url_helper
INFO - 2021-12-10 05:37:58 --> Helper loaded: form_helper
INFO - 2021-12-10 05:37:58 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:37:58 --> Helper loaded: language_helper
INFO - 2021-12-10 05:37:58 --> Helper loaded: file_helper
INFO - 2021-12-10 05:37:58 --> Helper loaded: date_helper
INFO - 2021-12-10 05:37:58 --> Database Driver Class Initialized
INFO - 2021-12-10 05:37:58 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:37:58 --> Parser Class Initialized
INFO - 2021-12-10 05:37:58 --> Model Class Initialized
INFO - 2021-12-10 05:37:58 --> Model Class Initialized
INFO - 2021-12-10 05:37:58 --> Controller Class Initialized
INFO - 2021-12-10 05:37:58 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:37:58 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:37:58 --> Could not find the language line "today"
INFO - 2021-12-10 05:37:58 --> Model Class Initialized
INFO - 2021-12-10 05:37:58 --> Helper loaded: text_helper
INFO - 2021-12-10 05:37:58 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:37:58 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:37:58 --> Severity: error --> Exception: Call to undefined method Datatables::leftJoin() C:\wamp64\www\Reactor\sma\controllers\Pos.php 98
INFO - 2021-12-10 05:38:14 --> Config Class Initialized
INFO - 2021-12-10 05:38:14 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:38:14 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:38:14 --> Utf8 Class Initialized
INFO - 2021-12-10 05:38:14 --> URI Class Initialized
INFO - 2021-12-10 05:38:14 --> Router Class Initialized
INFO - 2021-12-10 05:38:14 --> Output Class Initialized
INFO - 2021-12-10 05:38:14 --> Security Class Initialized
INFO - 2021-12-10 05:38:14 --> CRSF cookie sent
DEBUG - 2021-12-10 05:38:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:38:14 --> Input Class Initialized
INFO - 2021-12-10 05:38:14 --> Language Class Initialized
INFO - 2021-12-10 05:38:14 --> Loader Class Initialized
INFO - 2021-12-10 05:38:14 --> Helper loaded: url_helper
INFO - 2021-12-10 05:38:14 --> Helper loaded: form_helper
INFO - 2021-12-10 05:38:14 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:38:14 --> Helper loaded: language_helper
INFO - 2021-12-10 05:38:14 --> Helper loaded: file_helper
INFO - 2021-12-10 05:38:14 --> Helper loaded: date_helper
INFO - 2021-12-10 05:38:14 --> Database Driver Class Initialized
INFO - 2021-12-10 05:38:14 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:38:14 --> Parser Class Initialized
INFO - 2021-12-10 05:38:14 --> Model Class Initialized
INFO - 2021-12-10 05:38:14 --> Model Class Initialized
INFO - 2021-12-10 05:38:14 --> Controller Class Initialized
INFO - 2021-12-10 05:38:14 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:38:14 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:38:14 --> Could not find the language line "today"
INFO - 2021-12-10 05:38:14 --> Model Class Initialized
INFO - 2021-12-10 05:38:14 --> Helper loaded: text_helper
INFO - 2021-12-10 05:38:14 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:38:14 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:38:14 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:38:14 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:38:14 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:38:14 --> Could not find the language line "backups"
INFO - 2021-12-10 05:38:14 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:38:14 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 05:38:14 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:38:14 --> Could not find the language line "due"
ERROR - 2021-12-10 05:38:14 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:38:14 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:38:14 --> Final output sent to browser
DEBUG - 2021-12-10 05:38:14 --> Total execution time: 0.2389
INFO - 2021-12-10 05:38:14 --> Config Class Initialized
INFO - 2021-12-10 05:38:14 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:38:14 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:38:14 --> Utf8 Class Initialized
INFO - 2021-12-10 05:38:14 --> URI Class Initialized
INFO - 2021-12-10 05:38:14 --> Router Class Initialized
INFO - 2021-12-10 05:38:14 --> Output Class Initialized
INFO - 2021-12-10 05:38:14 --> Security Class Initialized
INFO - 2021-12-10 05:38:14 --> CRSF cookie sent
INFO - 2021-12-10 05:38:14 --> CSRF token verified
DEBUG - 2021-12-10 05:38:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:38:14 --> Input Class Initialized
INFO - 2021-12-10 05:38:14 --> Language Class Initialized
INFO - 2021-12-10 05:38:14 --> Loader Class Initialized
INFO - 2021-12-10 05:38:14 --> Helper loaded: url_helper
INFO - 2021-12-10 05:38:14 --> Helper loaded: form_helper
INFO - 2021-12-10 05:38:14 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:38:14 --> Helper loaded: language_helper
INFO - 2021-12-10 05:38:14 --> Helper loaded: file_helper
INFO - 2021-12-10 05:38:14 --> Helper loaded: date_helper
INFO - 2021-12-10 05:38:14 --> Database Driver Class Initialized
INFO - 2021-12-10 05:38:14 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:38:14 --> Parser Class Initialized
INFO - 2021-12-10 05:38:14 --> Model Class Initialized
INFO - 2021-12-10 05:38:14 --> Model Class Initialized
INFO - 2021-12-10 05:38:14 --> Controller Class Initialized
INFO - 2021-12-10 05:38:14 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:38:14 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:38:14 --> Could not find the language line "today"
INFO - 2021-12-10 05:38:14 --> Model Class Initialized
INFO - 2021-12-10 05:38:14 --> Helper loaded: text_helper
INFO - 2021-12-10 05:38:14 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:38:14 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:38:14 --> Severity: error --> Exception: Call to undefined method Datatables::leftJoin() C:\wamp64\www\Reactor\sma\controllers\Pos.php 97
INFO - 2021-12-10 05:38:34 --> Config Class Initialized
INFO - 2021-12-10 05:38:34 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:38:34 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:38:34 --> Utf8 Class Initialized
INFO - 2021-12-10 05:38:34 --> URI Class Initialized
INFO - 2021-12-10 05:38:34 --> Router Class Initialized
INFO - 2021-12-10 05:38:34 --> Output Class Initialized
INFO - 2021-12-10 05:38:34 --> Security Class Initialized
INFO - 2021-12-10 05:38:34 --> CRSF cookie sent
DEBUG - 2021-12-10 05:38:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:38:34 --> Input Class Initialized
INFO - 2021-12-10 05:38:34 --> Language Class Initialized
INFO - 2021-12-10 05:38:34 --> Loader Class Initialized
INFO - 2021-12-10 05:38:34 --> Helper loaded: url_helper
INFO - 2021-12-10 05:38:34 --> Helper loaded: form_helper
INFO - 2021-12-10 05:38:34 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:38:34 --> Helper loaded: language_helper
INFO - 2021-12-10 05:38:34 --> Helper loaded: file_helper
INFO - 2021-12-10 05:38:34 --> Helper loaded: date_helper
INFO - 2021-12-10 05:38:34 --> Database Driver Class Initialized
INFO - 2021-12-10 05:38:35 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:38:35 --> Parser Class Initialized
INFO - 2021-12-10 05:38:35 --> Model Class Initialized
INFO - 2021-12-10 05:38:35 --> Model Class Initialized
INFO - 2021-12-10 05:38:35 --> Controller Class Initialized
INFO - 2021-12-10 05:38:35 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:38:35 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:38:35 --> Could not find the language line "today"
INFO - 2021-12-10 05:38:35 --> Model Class Initialized
INFO - 2021-12-10 05:38:35 --> Helper loaded: text_helper
INFO - 2021-12-10 05:38:35 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:38:35 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:38:35 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:38:35 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:38:35 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:38:35 --> Could not find the language line "backups"
INFO - 2021-12-10 05:38:35 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:38:35 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 05:38:35 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:38:35 --> Could not find the language line "due"
ERROR - 2021-12-10 05:38:35 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:38:35 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:38:35 --> Final output sent to browser
DEBUG - 2021-12-10 05:38:35 --> Total execution time: 0.3177
INFO - 2021-12-10 05:38:35 --> Config Class Initialized
INFO - 2021-12-10 05:38:35 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:38:35 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:38:35 --> Utf8 Class Initialized
INFO - 2021-12-10 05:38:35 --> URI Class Initialized
INFO - 2021-12-10 05:38:35 --> Router Class Initialized
INFO - 2021-12-10 05:38:35 --> Output Class Initialized
INFO - 2021-12-10 05:38:35 --> Security Class Initialized
INFO - 2021-12-10 05:38:35 --> CRSF cookie sent
INFO - 2021-12-10 05:38:35 --> CSRF token verified
DEBUG - 2021-12-10 05:38:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:38:35 --> Input Class Initialized
INFO - 2021-12-10 05:38:35 --> Language Class Initialized
INFO - 2021-12-10 05:38:35 --> Loader Class Initialized
INFO - 2021-12-10 05:38:35 --> Helper loaded: url_helper
INFO - 2021-12-10 05:38:35 --> Helper loaded: form_helper
INFO - 2021-12-10 05:38:35 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:38:35 --> Helper loaded: language_helper
INFO - 2021-12-10 05:38:35 --> Helper loaded: file_helper
INFO - 2021-12-10 05:38:35 --> Helper loaded: date_helper
INFO - 2021-12-10 05:38:35 --> Database Driver Class Initialized
INFO - 2021-12-10 05:38:35 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:38:35 --> Parser Class Initialized
INFO - 2021-12-10 05:38:35 --> Model Class Initialized
INFO - 2021-12-10 05:38:35 --> Model Class Initialized
INFO - 2021-12-10 05:38:35 --> Controller Class Initialized
INFO - 2021-12-10 05:38:35 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:38:35 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:38:35 --> Could not find the language line "today"
INFO - 2021-12-10 05:38:35 --> Model Class Initialized
INFO - 2021-12-10 05:38:35 --> Helper loaded: text_helper
INFO - 2021-12-10 05:38:35 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:38:35 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:38:35 --> Severity: error --> Exception: Call to undefined method Datatables::leftJoin() C:\wamp64\www\Reactor\sma\controllers\Pos.php 97
INFO - 2021-12-10 05:40:11 --> Config Class Initialized
INFO - 2021-12-10 05:40:11 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:40:11 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:40:11 --> Utf8 Class Initialized
INFO - 2021-12-10 05:40:11 --> URI Class Initialized
INFO - 2021-12-10 05:40:11 --> Router Class Initialized
INFO - 2021-12-10 05:40:11 --> Output Class Initialized
INFO - 2021-12-10 05:40:11 --> Security Class Initialized
INFO - 2021-12-10 05:40:11 --> CRSF cookie sent
DEBUG - 2021-12-10 05:40:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:40:11 --> Input Class Initialized
INFO - 2021-12-10 05:40:11 --> Language Class Initialized
INFO - 2021-12-10 05:40:11 --> Loader Class Initialized
INFO - 2021-12-10 05:40:11 --> Helper loaded: url_helper
INFO - 2021-12-10 05:40:11 --> Helper loaded: form_helper
INFO - 2021-12-10 05:40:11 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:40:11 --> Helper loaded: language_helper
INFO - 2021-12-10 05:40:11 --> Helper loaded: file_helper
INFO - 2021-12-10 05:40:11 --> Helper loaded: date_helper
INFO - 2021-12-10 05:40:11 --> Database Driver Class Initialized
INFO - 2021-12-10 05:40:11 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:40:11 --> Parser Class Initialized
INFO - 2021-12-10 05:40:11 --> Model Class Initialized
INFO - 2021-12-10 05:40:11 --> Model Class Initialized
INFO - 2021-12-10 05:40:11 --> Controller Class Initialized
INFO - 2021-12-10 05:40:11 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:40:11 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:40:11 --> Could not find the language line "today"
INFO - 2021-12-10 05:40:11 --> Model Class Initialized
INFO - 2021-12-10 05:40:11 --> Helper loaded: text_helper
INFO - 2021-12-10 05:40:11 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:40:11 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:40:11 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:40:11 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:40:11 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:40:11 --> Could not find the language line "backups"
INFO - 2021-12-10 05:40:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:40:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 05:40:11 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:40:11 --> Could not find the language line "due"
ERROR - 2021-12-10 05:40:11 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:40:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:40:11 --> Final output sent to browser
DEBUG - 2021-12-10 05:40:11 --> Total execution time: 0.2392
INFO - 2021-12-10 05:40:11 --> Config Class Initialized
INFO - 2021-12-10 05:40:11 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:40:11 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:40:11 --> Utf8 Class Initialized
INFO - 2021-12-10 05:40:11 --> URI Class Initialized
INFO - 2021-12-10 05:40:11 --> Router Class Initialized
INFO - 2021-12-10 05:40:11 --> Output Class Initialized
INFO - 2021-12-10 05:40:11 --> Security Class Initialized
INFO - 2021-12-10 05:40:11 --> CRSF cookie sent
INFO - 2021-12-10 05:40:11 --> CSRF token verified
DEBUG - 2021-12-10 05:40:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:40:11 --> Input Class Initialized
INFO - 2021-12-10 05:40:11 --> Language Class Initialized
INFO - 2021-12-10 05:40:11 --> Loader Class Initialized
INFO - 2021-12-10 05:40:11 --> Helper loaded: url_helper
INFO - 2021-12-10 05:40:11 --> Helper loaded: form_helper
INFO - 2021-12-10 05:40:11 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:40:11 --> Helper loaded: language_helper
INFO - 2021-12-10 05:40:11 --> Helper loaded: file_helper
INFO - 2021-12-10 05:40:11 --> Helper loaded: date_helper
INFO - 2021-12-10 05:40:11 --> Database Driver Class Initialized
INFO - 2021-12-10 05:40:11 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:40:11 --> Parser Class Initialized
INFO - 2021-12-10 05:40:11 --> Model Class Initialized
INFO - 2021-12-10 05:40:11 --> Model Class Initialized
INFO - 2021-12-10 05:40:11 --> Controller Class Initialized
INFO - 2021-12-10 05:40:11 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:40:11 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:40:11 --> Could not find the language line "today"
INFO - 2021-12-10 05:40:11 --> Model Class Initialized
INFO - 2021-12-10 05:40:11 --> Helper loaded: text_helper
INFO - 2021-12-10 05:40:11 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:40:11 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:40:11 --> Severity: error --> Exception: Call to undefined method Datatables::leftJoin() C:\wamp64\www\Reactor\sma\controllers\Pos.php 97
INFO - 2021-12-10 05:40:45 --> Config Class Initialized
INFO - 2021-12-10 05:40:45 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:40:45 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:40:45 --> Utf8 Class Initialized
INFO - 2021-12-10 05:40:45 --> URI Class Initialized
INFO - 2021-12-10 05:40:45 --> Router Class Initialized
INFO - 2021-12-10 05:40:45 --> Output Class Initialized
INFO - 2021-12-10 05:40:45 --> Security Class Initialized
INFO - 2021-12-10 05:40:45 --> CRSF cookie sent
DEBUG - 2021-12-10 05:40:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:40:45 --> Input Class Initialized
INFO - 2021-12-10 05:40:45 --> Language Class Initialized
INFO - 2021-12-10 05:40:45 --> Loader Class Initialized
INFO - 2021-12-10 05:40:45 --> Helper loaded: url_helper
INFO - 2021-12-10 05:40:45 --> Helper loaded: form_helper
INFO - 2021-12-10 05:40:45 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:40:45 --> Helper loaded: language_helper
INFO - 2021-12-10 05:40:45 --> Helper loaded: file_helper
INFO - 2021-12-10 05:40:45 --> Helper loaded: date_helper
INFO - 2021-12-10 05:40:45 --> Database Driver Class Initialized
INFO - 2021-12-10 05:40:45 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:40:45 --> Parser Class Initialized
INFO - 2021-12-10 05:40:45 --> Model Class Initialized
INFO - 2021-12-10 05:40:45 --> Model Class Initialized
INFO - 2021-12-10 05:40:45 --> Controller Class Initialized
INFO - 2021-12-10 05:40:45 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:40:45 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:40:45 --> Could not find the language line "today"
INFO - 2021-12-10 05:40:45 --> Model Class Initialized
INFO - 2021-12-10 05:40:45 --> Helper loaded: text_helper
INFO - 2021-12-10 05:40:45 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:40:45 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:40:45 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:40:45 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:40:45 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:40:45 --> Could not find the language line "backups"
INFO - 2021-12-10 05:40:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:40:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 05:40:45 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:40:45 --> Could not find the language line "due"
ERROR - 2021-12-10 05:40:45 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:40:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:40:45 --> Final output sent to browser
DEBUG - 2021-12-10 05:40:45 --> Total execution time: 0.2351
INFO - 2021-12-10 05:40:46 --> Config Class Initialized
INFO - 2021-12-10 05:40:46 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:40:46 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:40:46 --> Utf8 Class Initialized
INFO - 2021-12-10 05:40:46 --> URI Class Initialized
INFO - 2021-12-10 05:40:46 --> Router Class Initialized
INFO - 2021-12-10 05:40:46 --> Output Class Initialized
INFO - 2021-12-10 05:40:46 --> Security Class Initialized
INFO - 2021-12-10 05:40:46 --> CRSF cookie sent
INFO - 2021-12-10 05:40:46 --> CSRF token verified
DEBUG - 2021-12-10 05:40:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:40:46 --> Input Class Initialized
INFO - 2021-12-10 05:40:46 --> Language Class Initialized
INFO - 2021-12-10 05:40:46 --> Loader Class Initialized
INFO - 2021-12-10 05:40:46 --> Helper loaded: url_helper
INFO - 2021-12-10 05:40:46 --> Helper loaded: form_helper
INFO - 2021-12-10 05:40:46 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:40:46 --> Helper loaded: language_helper
INFO - 2021-12-10 05:40:46 --> Helper loaded: file_helper
INFO - 2021-12-10 05:40:46 --> Helper loaded: date_helper
INFO - 2021-12-10 05:40:46 --> Database Driver Class Initialized
INFO - 2021-12-10 05:40:46 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:40:46 --> Parser Class Initialized
INFO - 2021-12-10 05:40:46 --> Model Class Initialized
INFO - 2021-12-10 05:40:46 --> Model Class Initialized
INFO - 2021-12-10 05:40:46 --> Controller Class Initialized
INFO - 2021-12-10 05:40:46 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:40:46 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:40:46 --> Could not find the language line "today"
INFO - 2021-12-10 05:40:46 --> Model Class Initialized
INFO - 2021-12-10 05:40:46 --> Helper loaded: text_helper
INFO - 2021-12-10 05:40:46 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:40:46 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:40:46 --> Severity: error --> Exception: Call to undefined method Datatables::leftJoin() C:\wamp64\www\Reactor\sma\controllers\Pos.php 97
INFO - 2021-12-10 05:50:17 --> Config Class Initialized
INFO - 2021-12-10 05:50:17 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:50:17 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:50:17 --> Utf8 Class Initialized
INFO - 2021-12-10 05:50:17 --> URI Class Initialized
INFO - 2021-12-10 05:50:17 --> Router Class Initialized
INFO - 2021-12-10 05:50:17 --> Output Class Initialized
INFO - 2021-12-10 05:50:17 --> Security Class Initialized
INFO - 2021-12-10 05:50:17 --> CRSF cookie sent
DEBUG - 2021-12-10 05:50:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:50:17 --> Input Class Initialized
INFO - 2021-12-10 05:50:17 --> Language Class Initialized
ERROR - 2021-12-10 05:50:17 --> Severity: error --> Exception: syntax error, unexpected ')' C:\wamp64\www\Reactor\sma\controllers\Pos.php 95
INFO - 2021-12-10 05:50:53 --> Config Class Initialized
INFO - 2021-12-10 05:50:53 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:50:53 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:50:53 --> Utf8 Class Initialized
INFO - 2021-12-10 05:50:53 --> URI Class Initialized
INFO - 2021-12-10 05:50:53 --> Router Class Initialized
INFO - 2021-12-10 05:50:53 --> Output Class Initialized
INFO - 2021-12-10 05:50:53 --> Security Class Initialized
INFO - 2021-12-10 05:50:53 --> CRSF cookie sent
DEBUG - 2021-12-10 05:50:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:50:53 --> Input Class Initialized
INFO - 2021-12-10 05:50:53 --> Language Class Initialized
ERROR - 2021-12-10 05:50:53 --> Severity: error --> Exception: syntax error, unexpected ')' C:\wamp64\www\Reactor\sma\controllers\Pos.php 95
INFO - 2021-12-10 05:52:07 --> Config Class Initialized
INFO - 2021-12-10 05:52:07 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:52:07 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:52:07 --> Utf8 Class Initialized
INFO - 2021-12-10 05:52:07 --> URI Class Initialized
INFO - 2021-12-10 05:52:07 --> Router Class Initialized
INFO - 2021-12-10 05:52:07 --> Output Class Initialized
INFO - 2021-12-10 05:52:07 --> Security Class Initialized
INFO - 2021-12-10 05:52:07 --> CRSF cookie sent
DEBUG - 2021-12-10 05:52:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:52:07 --> Input Class Initialized
INFO - 2021-12-10 05:52:07 --> Language Class Initialized
ERROR - 2021-12-10 05:52:07 --> Severity: error --> Exception: syntax error, unexpected '.' C:\wamp64\www\Reactor\sma\controllers\Pos.php 95
INFO - 2021-12-10 05:52:19 --> Config Class Initialized
INFO - 2021-12-10 05:52:19 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:52:19 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:52:19 --> Utf8 Class Initialized
INFO - 2021-12-10 05:52:19 --> URI Class Initialized
INFO - 2021-12-10 05:52:19 --> Router Class Initialized
INFO - 2021-12-10 05:52:19 --> Output Class Initialized
INFO - 2021-12-10 05:52:19 --> Security Class Initialized
INFO - 2021-12-10 05:52:19 --> CRSF cookie sent
DEBUG - 2021-12-10 05:52:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:52:19 --> Input Class Initialized
INFO - 2021-12-10 05:52:19 --> Language Class Initialized
ERROR - 2021-12-10 05:52:19 --> Severity: error --> Exception: syntax error, unexpected '.' C:\wamp64\www\Reactor\sma\controllers\Pos.php 95
INFO - 2021-12-10 05:53:13 --> Config Class Initialized
INFO - 2021-12-10 05:53:13 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:53:13 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:53:13 --> Utf8 Class Initialized
INFO - 2021-12-10 05:53:13 --> URI Class Initialized
INFO - 2021-12-10 05:53:13 --> Router Class Initialized
INFO - 2021-12-10 05:53:13 --> Output Class Initialized
INFO - 2021-12-10 05:53:13 --> Security Class Initialized
INFO - 2021-12-10 05:53:13 --> CRSF cookie sent
DEBUG - 2021-12-10 05:53:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:53:13 --> Input Class Initialized
INFO - 2021-12-10 05:53:13 --> Language Class Initialized
ERROR - 2021-12-10 05:53:13 --> Severity: error --> Exception: syntax error, unexpected '.' C:\wamp64\www\Reactor\sma\controllers\Pos.php 95
INFO - 2021-12-10 05:53:31 --> Config Class Initialized
INFO - 2021-12-10 05:53:31 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:53:31 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:53:31 --> Utf8 Class Initialized
INFO - 2021-12-10 05:53:31 --> URI Class Initialized
INFO - 2021-12-10 05:53:31 --> Router Class Initialized
INFO - 2021-12-10 05:53:31 --> Output Class Initialized
INFO - 2021-12-10 05:53:31 --> Security Class Initialized
INFO - 2021-12-10 05:53:31 --> CRSF cookie sent
DEBUG - 2021-12-10 05:53:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:53:31 --> Input Class Initialized
INFO - 2021-12-10 05:53:31 --> Language Class Initialized
ERROR - 2021-12-10 05:53:31 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\wamp64\www\Reactor\sma\controllers\Pos.php 102
INFO - 2021-12-10 05:53:32 --> Config Class Initialized
INFO - 2021-12-10 05:53:32 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:53:32 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:53:32 --> Utf8 Class Initialized
INFO - 2021-12-10 05:53:32 --> URI Class Initialized
INFO - 2021-12-10 05:53:32 --> Router Class Initialized
INFO - 2021-12-10 05:53:32 --> Output Class Initialized
INFO - 2021-12-10 05:53:32 --> Security Class Initialized
INFO - 2021-12-10 05:53:32 --> CRSF cookie sent
DEBUG - 2021-12-10 05:53:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:53:32 --> Input Class Initialized
INFO - 2021-12-10 05:53:32 --> Language Class Initialized
ERROR - 2021-12-10 05:53:32 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\wamp64\www\Reactor\sma\controllers\Pos.php 102
INFO - 2021-12-10 05:53:48 --> Config Class Initialized
INFO - 2021-12-10 05:53:48 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:53:48 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:53:48 --> Utf8 Class Initialized
INFO - 2021-12-10 05:53:48 --> URI Class Initialized
INFO - 2021-12-10 05:53:48 --> Router Class Initialized
INFO - 2021-12-10 05:53:48 --> Output Class Initialized
INFO - 2021-12-10 05:53:48 --> Security Class Initialized
INFO - 2021-12-10 05:53:48 --> CRSF cookie sent
DEBUG - 2021-12-10 05:53:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:53:48 --> Input Class Initialized
INFO - 2021-12-10 05:53:48 --> Language Class Initialized
ERROR - 2021-12-10 05:53:48 --> Severity: error --> Exception: syntax error, unexpected '$this' (T_VARIABLE) C:\wamp64\www\Reactor\sma\controllers\Pos.php 102
INFO - 2021-12-10 05:54:00 --> Config Class Initialized
INFO - 2021-12-10 05:54:00 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:54:00 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:54:00 --> Utf8 Class Initialized
INFO - 2021-12-10 05:54:00 --> URI Class Initialized
INFO - 2021-12-10 05:54:00 --> Router Class Initialized
INFO - 2021-12-10 05:54:00 --> Output Class Initialized
INFO - 2021-12-10 05:54:00 --> Security Class Initialized
INFO - 2021-12-10 05:54:00 --> CRSF cookie sent
DEBUG - 2021-12-10 05:54:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:54:00 --> Input Class Initialized
INFO - 2021-12-10 05:54:00 --> Language Class Initialized
INFO - 2021-12-10 05:54:00 --> Loader Class Initialized
INFO - 2021-12-10 05:54:00 --> Helper loaded: url_helper
INFO - 2021-12-10 05:54:00 --> Helper loaded: form_helper
INFO - 2021-12-10 05:54:00 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:54:00 --> Helper loaded: language_helper
INFO - 2021-12-10 05:54:00 --> Helper loaded: file_helper
INFO - 2021-12-10 05:54:00 --> Helper loaded: date_helper
INFO - 2021-12-10 05:54:00 --> Database Driver Class Initialized
INFO - 2021-12-10 05:54:00 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:54:00 --> Parser Class Initialized
INFO - 2021-12-10 05:54:00 --> Model Class Initialized
INFO - 2021-12-10 05:54:00 --> Model Class Initialized
INFO - 2021-12-10 05:54:00 --> Controller Class Initialized
INFO - 2021-12-10 05:54:00 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:54:00 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:54:00 --> Could not find the language line "today"
INFO - 2021-12-10 05:54:00 --> Model Class Initialized
INFO - 2021-12-10 05:54:00 --> Helper loaded: text_helper
INFO - 2021-12-10 05:54:00 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:54:00 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:54:00 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:54:00 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:54:00 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:54:00 --> Could not find the language line "backups"
INFO - 2021-12-10 05:54:00 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:54:00 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 05:54:00 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:54:00 --> Could not find the language line "due"
ERROR - 2021-12-10 05:54:00 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:54:00 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:54:00 --> Final output sent to browser
DEBUG - 2021-12-10 05:54:00 --> Total execution time: 0.1827
INFO - 2021-12-10 05:54:00 --> Config Class Initialized
INFO - 2021-12-10 05:54:00 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:54:00 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:54:00 --> Utf8 Class Initialized
INFO - 2021-12-10 05:54:00 --> URI Class Initialized
INFO - 2021-12-10 05:54:00 --> Router Class Initialized
INFO - 2021-12-10 05:54:00 --> Output Class Initialized
INFO - 2021-12-10 05:54:00 --> Security Class Initialized
INFO - 2021-12-10 05:54:00 --> CRSF cookie sent
INFO - 2021-12-10 05:54:00 --> CSRF token verified
DEBUG - 2021-12-10 05:54:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:54:00 --> Input Class Initialized
INFO - 2021-12-10 05:54:00 --> Language Class Initialized
INFO - 2021-12-10 05:54:00 --> Loader Class Initialized
INFO - 2021-12-10 05:54:00 --> Helper loaded: url_helper
INFO - 2021-12-10 05:54:00 --> Helper loaded: form_helper
INFO - 2021-12-10 05:54:00 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:54:00 --> Helper loaded: language_helper
INFO - 2021-12-10 05:54:00 --> Helper loaded: file_helper
INFO - 2021-12-10 05:54:00 --> Helper loaded: date_helper
INFO - 2021-12-10 05:54:00 --> Database Driver Class Initialized
INFO - 2021-12-10 05:54:00 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:54:00 --> Parser Class Initialized
INFO - 2021-12-10 05:54:00 --> Model Class Initialized
INFO - 2021-12-10 05:54:00 --> Model Class Initialized
INFO - 2021-12-10 05:54:00 --> Controller Class Initialized
INFO - 2021-12-10 05:54:00 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:54:01 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:54:01 --> Could not find the language line "today"
INFO - 2021-12-10 05:54:01 --> Model Class Initialized
INFO - 2021-12-10 05:54:01 --> Helper loaded: text_helper
INFO - 2021-12-10 05:54:01 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:54:01 --> Form Validation Class Initialized
INFO - 2021-12-10 05:54:01 --> Final output sent to browser
DEBUG - 2021-12-10 05:54:01 --> Total execution time: 0.3311
INFO - 2021-12-10 05:55:56 --> Config Class Initialized
INFO - 2021-12-10 05:55:56 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:55:56 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:55:56 --> Utf8 Class Initialized
INFO - 2021-12-10 05:55:56 --> URI Class Initialized
INFO - 2021-12-10 05:55:56 --> Router Class Initialized
INFO - 2021-12-10 05:55:56 --> Output Class Initialized
INFO - 2021-12-10 05:55:56 --> Security Class Initialized
INFO - 2021-12-10 05:55:56 --> CRSF cookie sent
DEBUG - 2021-12-10 05:55:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:55:56 --> Input Class Initialized
INFO - 2021-12-10 05:55:56 --> Language Class Initialized
INFO - 2021-12-10 05:55:56 --> Loader Class Initialized
INFO - 2021-12-10 05:55:56 --> Helper loaded: url_helper
INFO - 2021-12-10 05:55:56 --> Helper loaded: form_helper
INFO - 2021-12-10 05:55:56 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:55:56 --> Helper loaded: language_helper
INFO - 2021-12-10 05:55:56 --> Helper loaded: file_helper
INFO - 2021-12-10 05:55:56 --> Helper loaded: date_helper
INFO - 2021-12-10 05:55:56 --> Database Driver Class Initialized
INFO - 2021-12-10 05:55:56 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:55:56 --> Parser Class Initialized
INFO - 2021-12-10 05:55:56 --> Model Class Initialized
INFO - 2021-12-10 05:55:56 --> Model Class Initialized
INFO - 2021-12-10 05:55:56 --> Controller Class Initialized
INFO - 2021-12-10 05:55:56 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:55:56 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:55:56 --> Could not find the language line "today"
INFO - 2021-12-10 05:55:56 --> Model Class Initialized
INFO - 2021-12-10 05:55:56 --> Helper loaded: text_helper
INFO - 2021-12-10 05:55:56 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:55:56 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:55:56 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 05:55:56 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 05:55:56 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 05:55:56 --> Could not find the language line "backups"
INFO - 2021-12-10 05:55:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 05:55:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 05:55:56 --> Could not find the language line "ordered"
ERROR - 2021-12-10 05:55:56 --> Could not find the language line "due"
ERROR - 2021-12-10 05:55:56 --> Could not find the language line "transferring"
INFO - 2021-12-10 05:55:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 05:55:56 --> Final output sent to browser
DEBUG - 2021-12-10 05:55:56 --> Total execution time: 0.2415
INFO - 2021-12-10 05:55:56 --> Config Class Initialized
INFO - 2021-12-10 05:55:56 --> Hooks Class Initialized
DEBUG - 2021-12-10 05:55:56 --> UTF-8 Support Enabled
INFO - 2021-12-10 05:55:56 --> Utf8 Class Initialized
INFO - 2021-12-10 05:55:56 --> URI Class Initialized
INFO - 2021-12-10 05:55:56 --> Router Class Initialized
INFO - 2021-12-10 05:55:56 --> Output Class Initialized
INFO - 2021-12-10 05:55:56 --> Security Class Initialized
INFO - 2021-12-10 05:55:56 --> CRSF cookie sent
INFO - 2021-12-10 05:55:56 --> CSRF token verified
DEBUG - 2021-12-10 05:55:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 05:55:56 --> Input Class Initialized
INFO - 2021-12-10 05:55:56 --> Language Class Initialized
INFO - 2021-12-10 05:55:56 --> Loader Class Initialized
INFO - 2021-12-10 05:55:56 --> Helper loaded: url_helper
INFO - 2021-12-10 05:55:56 --> Helper loaded: form_helper
INFO - 2021-12-10 05:55:56 --> Helper loaded: cookie_helper
INFO - 2021-12-10 05:55:56 --> Helper loaded: language_helper
INFO - 2021-12-10 05:55:56 --> Helper loaded: file_helper
INFO - 2021-12-10 05:55:56 --> Helper loaded: date_helper
INFO - 2021-12-10 05:55:56 --> Database Driver Class Initialized
INFO - 2021-12-10 05:55:56 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 05:55:56 --> Parser Class Initialized
INFO - 2021-12-10 05:55:56 --> Model Class Initialized
INFO - 2021-12-10 05:55:56 --> Model Class Initialized
INFO - 2021-12-10 05:55:56 --> Controller Class Initialized
INFO - 2021-12-10 05:55:56 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 05:55:57 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 05:55:57 --> Could not find the language line "today"
INFO - 2021-12-10 05:55:57 --> Model Class Initialized
INFO - 2021-12-10 05:55:57 --> Helper loaded: text_helper
INFO - 2021-12-10 05:55:57 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 05:55:57 --> Form Validation Class Initialized
ERROR - 2021-12-10 05:55:57 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sales_id`=`sma_sales`.`id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`, `sma_payments`.`paid_by`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2021-12-10 05:55:57 --> Query error: Unknown column 'sma_payments.sales_id' in 'on clause' - Invalid query: SELECT *
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sales_id`=`sma_sales`.`id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`, `sma_payments`.`paid_by`
ERROR - 2021-12-10 05:55:57 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 438
INFO - 2021-12-10 06:06:27 --> Config Class Initialized
INFO - 2021-12-10 06:06:27 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:06:27 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:06:27 --> Utf8 Class Initialized
INFO - 2021-12-10 06:06:27 --> URI Class Initialized
INFO - 2021-12-10 06:06:27 --> Router Class Initialized
INFO - 2021-12-10 06:06:27 --> Output Class Initialized
INFO - 2021-12-10 06:06:27 --> Security Class Initialized
INFO - 2021-12-10 06:06:27 --> CRSF cookie sent
DEBUG - 2021-12-10 06:06:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:06:27 --> Input Class Initialized
INFO - 2021-12-10 06:06:27 --> Language Class Initialized
INFO - 2021-12-10 06:06:27 --> Loader Class Initialized
INFO - 2021-12-10 06:06:27 --> Helper loaded: url_helper
INFO - 2021-12-10 06:06:27 --> Helper loaded: form_helper
INFO - 2021-12-10 06:06:27 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:06:27 --> Helper loaded: language_helper
INFO - 2021-12-10 06:06:27 --> Helper loaded: file_helper
INFO - 2021-12-10 06:06:27 --> Helper loaded: date_helper
INFO - 2021-12-10 06:06:27 --> Database Driver Class Initialized
INFO - 2021-12-10 06:06:27 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:06:27 --> Parser Class Initialized
INFO - 2021-12-10 06:06:27 --> Model Class Initialized
INFO - 2021-12-10 06:06:27 --> Model Class Initialized
INFO - 2021-12-10 06:06:27 --> Controller Class Initialized
INFO - 2021-12-10 06:06:27 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:06:27 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:06:27 --> Could not find the language line "today"
INFO - 2021-12-10 06:06:27 --> Model Class Initialized
INFO - 2021-12-10 06:06:28 --> Helper loaded: text_helper
INFO - 2021-12-10 06:06:28 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:06:28 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:06:28 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 06:06:28 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 06:06:28 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 06:06:28 --> Could not find the language line "backups"
INFO - 2021-12-10 06:06:28 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 06:06:28 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 06:06:28 --> Could not find the language line "ordered"
ERROR - 2021-12-10 06:06:28 --> Could not find the language line "due"
ERROR - 2021-12-10 06:06:28 --> Could not find the language line "transferring"
INFO - 2021-12-10 06:06:28 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 06:06:28 --> Final output sent to browser
DEBUG - 2021-12-10 06:06:28 --> Total execution time: 0.2053
INFO - 2021-12-10 06:06:28 --> Config Class Initialized
INFO - 2021-12-10 06:06:28 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:06:28 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:06:28 --> Utf8 Class Initialized
INFO - 2021-12-10 06:06:28 --> URI Class Initialized
INFO - 2021-12-10 06:06:28 --> Router Class Initialized
INFO - 2021-12-10 06:06:28 --> Output Class Initialized
INFO - 2021-12-10 06:06:28 --> Security Class Initialized
INFO - 2021-12-10 06:06:28 --> CRSF cookie sent
INFO - 2021-12-10 06:06:28 --> CSRF token verified
DEBUG - 2021-12-10 06:06:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:06:28 --> Input Class Initialized
INFO - 2021-12-10 06:06:28 --> Language Class Initialized
INFO - 2021-12-10 06:06:28 --> Loader Class Initialized
INFO - 2021-12-10 06:06:28 --> Helper loaded: url_helper
INFO - 2021-12-10 06:06:28 --> Helper loaded: form_helper
INFO - 2021-12-10 06:06:28 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:06:28 --> Helper loaded: language_helper
INFO - 2021-12-10 06:06:28 --> Helper loaded: file_helper
INFO - 2021-12-10 06:06:28 --> Helper loaded: date_helper
INFO - 2021-12-10 06:06:28 --> Database Driver Class Initialized
INFO - 2021-12-10 06:06:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:06:28 --> Parser Class Initialized
INFO - 2021-12-10 06:06:28 --> Model Class Initialized
INFO - 2021-12-10 06:06:28 --> Model Class Initialized
INFO - 2021-12-10 06:06:28 --> Controller Class Initialized
INFO - 2021-12-10 06:06:28 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:06:28 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:06:28 --> Could not find the language line "today"
INFO - 2021-12-10 06:06:28 --> Model Class Initialized
INFO - 2021-12-10 06:06:28 --> Helper loaded: text_helper
INFO - 2021-12-10 06:06:28 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:06:28 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:06:28 --> Query error: Column 'date' in field list is ambiguous - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sales_id`=`sma_sales`.`id`
WHERE `pos` = 1
GROUP BY `sma_payments`.`paid_by`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2021-12-10 06:06:28 --> Query error: Unknown column 'sma_payments.sales_id' in 'on clause' - Invalid query: SELECT *
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
LEFT JOIN `sma_payments` ON `sma_payments`.`sales_id`=`sma_sales`.`id`
WHERE `pos` = 1
GROUP BY `sma_payments`.`paid_by`
ERROR - 2021-12-10 06:06:28 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 438
INFO - 2021-12-10 06:13:05 --> Config Class Initialized
INFO - 2021-12-10 06:13:05 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:13:05 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:13:05 --> Utf8 Class Initialized
INFO - 2021-12-10 06:13:05 --> URI Class Initialized
INFO - 2021-12-10 06:13:05 --> Router Class Initialized
INFO - 2021-12-10 06:13:05 --> Output Class Initialized
INFO - 2021-12-10 06:13:05 --> Security Class Initialized
INFO - 2021-12-10 06:13:05 --> CRSF cookie sent
DEBUG - 2021-12-10 06:13:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:13:05 --> Input Class Initialized
INFO - 2021-12-10 06:13:05 --> Language Class Initialized
INFO - 2021-12-10 06:13:05 --> Loader Class Initialized
INFO - 2021-12-10 06:13:05 --> Helper loaded: url_helper
INFO - 2021-12-10 06:13:05 --> Helper loaded: form_helper
INFO - 2021-12-10 06:13:05 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:13:05 --> Helper loaded: language_helper
INFO - 2021-12-10 06:13:05 --> Helper loaded: file_helper
INFO - 2021-12-10 06:13:05 --> Helper loaded: date_helper
INFO - 2021-12-10 06:13:05 --> Database Driver Class Initialized
INFO - 2021-12-10 06:13:05 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:13:05 --> Parser Class Initialized
INFO - 2021-12-10 06:13:05 --> Model Class Initialized
INFO - 2021-12-10 06:13:05 --> Model Class Initialized
INFO - 2021-12-10 06:13:05 --> Controller Class Initialized
INFO - 2021-12-10 06:13:05 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:13:05 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:13:05 --> Could not find the language line "today"
INFO - 2021-12-10 06:13:05 --> Model Class Initialized
INFO - 2021-12-10 06:13:05 --> Helper loaded: text_helper
INFO - 2021-12-10 06:13:05 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:13:05 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:13:05 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 06:13:05 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 06:13:05 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 06:13:05 --> Could not find the language line "backups"
INFO - 2021-12-10 06:13:05 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 06:13:05 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 06:13:05 --> Could not find the language line "ordered"
ERROR - 2021-12-10 06:13:05 --> Could not find the language line "due"
ERROR - 2021-12-10 06:13:05 --> Could not find the language line "transferring"
INFO - 2021-12-10 06:13:05 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 06:13:05 --> Final output sent to browser
DEBUG - 2021-12-10 06:13:05 --> Total execution time: 0.2688
INFO - 2021-12-10 06:13:06 --> Config Class Initialized
INFO - 2021-12-10 06:13:06 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:13:06 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:13:06 --> Utf8 Class Initialized
INFO - 2021-12-10 06:13:06 --> URI Class Initialized
INFO - 2021-12-10 06:13:06 --> Router Class Initialized
INFO - 2021-12-10 06:13:06 --> Output Class Initialized
INFO - 2021-12-10 06:13:06 --> Security Class Initialized
INFO - 2021-12-10 06:13:06 --> CRSF cookie sent
INFO - 2021-12-10 06:13:06 --> CSRF token verified
DEBUG - 2021-12-10 06:13:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:13:06 --> Input Class Initialized
INFO - 2021-12-10 06:13:06 --> Language Class Initialized
INFO - 2021-12-10 06:13:06 --> Loader Class Initialized
INFO - 2021-12-10 06:13:06 --> Helper loaded: url_helper
INFO - 2021-12-10 06:13:06 --> Helper loaded: form_helper
INFO - 2021-12-10 06:13:06 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:13:06 --> Helper loaded: language_helper
INFO - 2021-12-10 06:13:06 --> Helper loaded: file_helper
INFO - 2021-12-10 06:13:06 --> Helper loaded: date_helper
INFO - 2021-12-10 06:13:06 --> Database Driver Class Initialized
INFO - 2021-12-10 06:13:06 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:13:06 --> Parser Class Initialized
INFO - 2021-12-10 06:13:06 --> Model Class Initialized
INFO - 2021-12-10 06:13:06 --> Model Class Initialized
INFO - 2021-12-10 06:13:06 --> Controller Class Initialized
INFO - 2021-12-10 06:13:06 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:13:06 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:13:06 --> Could not find the language line "today"
INFO - 2021-12-10 06:13:06 --> Model Class Initialized
INFO - 2021-12-10 06:13:06 --> Helper loaded: text_helper
INFO - 2021-12-10 06:13:06 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:13:06 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:13:06 --> Query error: Table 'c2270625_2021.payments' doesn't exist - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, (SELECT note FROM payments WHERE id = sales.id) as note, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`
ORDER BY `date` DESC
 LIMIT 10
ERROR - 2021-12-10 06:13:06 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 06:13:17 --> Config Class Initialized
INFO - 2021-12-10 06:13:17 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:13:17 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:13:17 --> Utf8 Class Initialized
INFO - 2021-12-10 06:13:17 --> URI Class Initialized
INFO - 2021-12-10 06:13:17 --> Router Class Initialized
INFO - 2021-12-10 06:13:17 --> Output Class Initialized
INFO - 2021-12-10 06:13:17 --> Security Class Initialized
INFO - 2021-12-10 06:13:17 --> CRSF cookie sent
DEBUG - 2021-12-10 06:13:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:13:17 --> Input Class Initialized
INFO - 2021-12-10 06:13:17 --> Language Class Initialized
INFO - 2021-12-10 06:13:17 --> Loader Class Initialized
INFO - 2021-12-10 06:13:17 --> Helper loaded: url_helper
INFO - 2021-12-10 06:13:17 --> Helper loaded: form_helper
INFO - 2021-12-10 06:13:17 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:13:17 --> Helper loaded: language_helper
INFO - 2021-12-10 06:13:17 --> Helper loaded: file_helper
INFO - 2021-12-10 06:13:17 --> Helper loaded: date_helper
INFO - 2021-12-10 06:13:17 --> Database Driver Class Initialized
INFO - 2021-12-10 06:13:17 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:13:17 --> Parser Class Initialized
INFO - 2021-12-10 06:13:17 --> Model Class Initialized
INFO - 2021-12-10 06:13:17 --> Model Class Initialized
INFO - 2021-12-10 06:13:17 --> Controller Class Initialized
INFO - 2021-12-10 06:13:17 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:13:17 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:13:17 --> Could not find the language line "today"
INFO - 2021-12-10 06:13:17 --> Model Class Initialized
INFO - 2021-12-10 06:13:17 --> Helper loaded: text_helper
INFO - 2021-12-10 06:13:17 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:13:17 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:13:17 --> Query error: Table 'c2270625_2021.payments' doesn't exist - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, (SELECT note FROM payments WHERE id = sales.id) as note, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:13:17 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 06:15:35 --> Config Class Initialized
INFO - 2021-12-10 06:15:35 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:15:35 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:15:35 --> Utf8 Class Initialized
INFO - 2021-12-10 06:15:35 --> URI Class Initialized
INFO - 2021-12-10 06:15:35 --> Router Class Initialized
INFO - 2021-12-10 06:15:35 --> Output Class Initialized
INFO - 2021-12-10 06:15:35 --> Security Class Initialized
INFO - 2021-12-10 06:15:35 --> CRSF cookie sent
DEBUG - 2021-12-10 06:15:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:15:35 --> Input Class Initialized
INFO - 2021-12-10 06:15:35 --> Language Class Initialized
INFO - 2021-12-10 06:15:35 --> Loader Class Initialized
INFO - 2021-12-10 06:15:35 --> Helper loaded: url_helper
INFO - 2021-12-10 06:15:35 --> Helper loaded: form_helper
INFO - 2021-12-10 06:15:35 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:15:35 --> Helper loaded: language_helper
INFO - 2021-12-10 06:15:35 --> Helper loaded: file_helper
INFO - 2021-12-10 06:15:35 --> Helper loaded: date_helper
INFO - 2021-12-10 06:15:35 --> Database Driver Class Initialized
INFO - 2021-12-10 06:15:35 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:15:35 --> Parser Class Initialized
INFO - 2021-12-10 06:15:35 --> Model Class Initialized
INFO - 2021-12-10 06:15:35 --> Model Class Initialized
INFO - 2021-12-10 06:15:35 --> Controller Class Initialized
INFO - 2021-12-10 06:15:35 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:15:35 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:15:35 --> Could not find the language line "today"
INFO - 2021-12-10 06:15:35 --> Model Class Initialized
INFO - 2021-12-10 06:15:35 --> Helper loaded: text_helper
INFO - 2021-12-10 06:15:35 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:15:35 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:15:35 --> Query error: Table 'c2270625_2021.payments' doesn't exist - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, (SELECT note FROM payments WHERE id = sales.id) as note, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:15:35 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 368
INFO - 2021-12-10 06:15:57 --> Config Class Initialized
INFO - 2021-12-10 06:15:57 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:15:57 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:15:57 --> Utf8 Class Initialized
INFO - 2021-12-10 06:15:57 --> URI Class Initialized
INFO - 2021-12-10 06:15:57 --> Router Class Initialized
INFO - 2021-12-10 06:15:57 --> Output Class Initialized
INFO - 2021-12-10 06:15:57 --> Security Class Initialized
INFO - 2021-12-10 06:15:57 --> CRSF cookie sent
DEBUG - 2021-12-10 06:15:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:15:57 --> Input Class Initialized
INFO - 2021-12-10 06:15:57 --> Language Class Initialized
INFO - 2021-12-10 06:15:57 --> Loader Class Initialized
INFO - 2021-12-10 06:15:57 --> Helper loaded: url_helper
INFO - 2021-12-10 06:15:57 --> Helper loaded: form_helper
INFO - 2021-12-10 06:15:57 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:15:57 --> Helper loaded: language_helper
INFO - 2021-12-10 06:15:57 --> Helper loaded: file_helper
INFO - 2021-12-10 06:15:57 --> Helper loaded: date_helper
INFO - 2021-12-10 06:15:57 --> Database Driver Class Initialized
INFO - 2021-12-10 06:15:57 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:15:57 --> Parser Class Initialized
INFO - 2021-12-10 06:15:57 --> Model Class Initialized
INFO - 2021-12-10 06:15:57 --> Model Class Initialized
INFO - 2021-12-10 06:15:57 --> Controller Class Initialized
INFO - 2021-12-10 06:15:57 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:15:57 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:15:57 --> Could not find the language line "today"
INFO - 2021-12-10 06:15:57 --> Model Class Initialized
INFO - 2021-12-10 06:15:57 --> Helper loaded: text_helper
INFO - 2021-12-10 06:15:57 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:15:57 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:15:57 --> Query error: Table 'c2270625_2021.payments' doesn't exist - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, (SELECT note FROM payments WHERE id = sales.id) as note, `sma_companies`.`email` as `cemail`
FROM `sma_sales`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:15:57 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 368
INFO - 2021-12-10 06:16:16 --> Config Class Initialized
INFO - 2021-12-10 06:16:16 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:16:16 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:16:16 --> Utf8 Class Initialized
INFO - 2021-12-10 06:16:16 --> URI Class Initialized
INFO - 2021-12-10 06:16:16 --> Router Class Initialized
INFO - 2021-12-10 06:16:16 --> Output Class Initialized
INFO - 2021-12-10 06:16:16 --> Security Class Initialized
INFO - 2021-12-10 06:16:16 --> CRSF cookie sent
DEBUG - 2021-12-10 06:16:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:16:16 --> Input Class Initialized
INFO - 2021-12-10 06:16:16 --> Language Class Initialized
INFO - 2021-12-10 06:16:16 --> Loader Class Initialized
INFO - 2021-12-10 06:16:16 --> Helper loaded: url_helper
INFO - 2021-12-10 06:16:16 --> Helper loaded: form_helper
INFO - 2021-12-10 06:16:16 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:16:16 --> Helper loaded: language_helper
INFO - 2021-12-10 06:16:16 --> Helper loaded: file_helper
INFO - 2021-12-10 06:16:16 --> Helper loaded: date_helper
INFO - 2021-12-10 06:16:16 --> Database Driver Class Initialized
INFO - 2021-12-10 06:16:16 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:16:16 --> Parser Class Initialized
INFO - 2021-12-10 06:16:16 --> Model Class Initialized
INFO - 2021-12-10 06:16:16 --> Model Class Initialized
INFO - 2021-12-10 06:16:16 --> Controller Class Initialized
INFO - 2021-12-10 06:16:16 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:16:16 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:16:16 --> Could not find the language line "today"
INFO - 2021-12-10 06:16:16 --> Model Class Initialized
INFO - 2021-12-10 06:16:16 --> Helper loaded: text_helper
INFO - 2021-12-10 06:16:16 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:16:16 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:16:16 --> Severity: error --> Exception: syntax error, unexpected '}' C:\wamp64\www\Reactor\sma\libraries\Datatables.php 406
INFO - 2021-12-10 06:16:33 --> Config Class Initialized
INFO - 2021-12-10 06:16:33 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:16:33 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:16:33 --> Utf8 Class Initialized
INFO - 2021-12-10 06:16:33 --> URI Class Initialized
INFO - 2021-12-10 06:16:33 --> Router Class Initialized
INFO - 2021-12-10 06:16:33 --> Output Class Initialized
INFO - 2021-12-10 06:16:33 --> Security Class Initialized
INFO - 2021-12-10 06:16:33 --> CRSF cookie sent
DEBUG - 2021-12-10 06:16:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:16:33 --> Input Class Initialized
INFO - 2021-12-10 06:16:33 --> Language Class Initialized
INFO - 2021-12-10 06:16:33 --> Loader Class Initialized
INFO - 2021-12-10 06:16:33 --> Helper loaded: url_helper
INFO - 2021-12-10 06:16:33 --> Helper loaded: form_helper
INFO - 2021-12-10 06:16:33 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:16:33 --> Helper loaded: language_helper
INFO - 2021-12-10 06:16:33 --> Helper loaded: file_helper
INFO - 2021-12-10 06:16:33 --> Helper loaded: date_helper
INFO - 2021-12-10 06:16:33 --> Database Driver Class Initialized
INFO - 2021-12-10 06:16:33 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:16:33 --> Parser Class Initialized
INFO - 2021-12-10 06:16:33 --> Model Class Initialized
INFO - 2021-12-10 06:16:33 --> Model Class Initialized
INFO - 2021-12-10 06:16:33 --> Controller Class Initialized
INFO - 2021-12-10 06:16:33 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:16:33 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:16:33 --> Could not find the language line "today"
INFO - 2021-12-10 06:16:33 --> Model Class Initialized
INFO - 2021-12-10 06:16:33 --> Helper loaded: text_helper
INFO - 2021-12-10 06:16:33 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:16:33 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:16:33 --> Severity: error --> Exception: syntax error, unexpected '}' C:\wamp64\www\Reactor\sma\libraries\Datatables.php 406
INFO - 2021-12-10 06:18:21 --> Config Class Initialized
INFO - 2021-12-10 06:18:21 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:18:21 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:18:21 --> Utf8 Class Initialized
INFO - 2021-12-10 06:18:21 --> URI Class Initialized
INFO - 2021-12-10 06:18:21 --> Router Class Initialized
INFO - 2021-12-10 06:18:21 --> Output Class Initialized
INFO - 2021-12-10 06:18:21 --> Security Class Initialized
INFO - 2021-12-10 06:18:21 --> CRSF cookie sent
DEBUG - 2021-12-10 06:18:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:18:21 --> Input Class Initialized
INFO - 2021-12-10 06:18:21 --> Language Class Initialized
INFO - 2021-12-10 06:18:21 --> Loader Class Initialized
INFO - 2021-12-10 06:18:21 --> Helper loaded: url_helper
INFO - 2021-12-10 06:18:21 --> Helper loaded: form_helper
INFO - 2021-12-10 06:18:21 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:18:21 --> Helper loaded: language_helper
INFO - 2021-12-10 06:18:21 --> Helper loaded: file_helper
INFO - 2021-12-10 06:18:21 --> Helper loaded: date_helper
INFO - 2021-12-10 06:18:21 --> Database Driver Class Initialized
INFO - 2021-12-10 06:18:21 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:18:21 --> Parser Class Initialized
INFO - 2021-12-10 06:18:21 --> Model Class Initialized
INFO - 2021-12-10 06:18:21 --> Model Class Initialized
INFO - 2021-12-10 06:18:21 --> Controller Class Initialized
INFO - 2021-12-10 06:18:21 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:18:21 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:18:21 --> Could not find the language line "today"
INFO - 2021-12-10 06:18:21 --> Model Class Initialized
INFO - 2021-12-10 06:18:21 --> Helper loaded: text_helper
INFO - 2021-12-10 06:18:21 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:18:21 --> Form Validation Class Initialized
INFO - 2021-12-10 06:18:21 --> Final output sent to browser
DEBUG - 2021-12-10 06:18:21 --> Total execution time: 0.1627
INFO - 2021-12-10 06:21:38 --> Config Class Initialized
INFO - 2021-12-10 06:21:38 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:21:38 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:21:38 --> Utf8 Class Initialized
INFO - 2021-12-10 06:21:38 --> URI Class Initialized
INFO - 2021-12-10 06:21:38 --> Router Class Initialized
INFO - 2021-12-10 06:21:38 --> Output Class Initialized
INFO - 2021-12-10 06:21:38 --> Security Class Initialized
INFO - 2021-12-10 06:21:38 --> CRSF cookie sent
DEBUG - 2021-12-10 06:21:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:21:38 --> Input Class Initialized
INFO - 2021-12-10 06:21:38 --> Language Class Initialized
INFO - 2021-12-10 06:21:38 --> Loader Class Initialized
INFO - 2021-12-10 06:21:38 --> Helper loaded: url_helper
INFO - 2021-12-10 06:21:38 --> Helper loaded: form_helper
INFO - 2021-12-10 06:21:38 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:21:38 --> Helper loaded: language_helper
INFO - 2021-12-10 06:21:38 --> Helper loaded: file_helper
INFO - 2021-12-10 06:21:38 --> Helper loaded: date_helper
INFO - 2021-12-10 06:21:38 --> Database Driver Class Initialized
INFO - 2021-12-10 06:21:38 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:21:38 --> Parser Class Initialized
INFO - 2021-12-10 06:21:38 --> Model Class Initialized
INFO - 2021-12-10 06:21:38 --> Model Class Initialized
INFO - 2021-12-10 06:21:38 --> Controller Class Initialized
INFO - 2021-12-10 06:21:38 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:21:38 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:21:38 --> Could not find the language line "today"
INFO - 2021-12-10 06:21:38 --> Model Class Initialized
INFO - 2021-12-10 06:21:38 --> Helper loaded: text_helper
INFO - 2021-12-10 06:21:38 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:21:38 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:21:38 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 06:21:38 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 06:21:38 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 06:21:38 --> Could not find the language line "backups"
INFO - 2021-12-10 06:21:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 06:21:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 06:21:38 --> Could not find the language line "ordered"
ERROR - 2021-12-10 06:21:38 --> Could not find the language line "due"
ERROR - 2021-12-10 06:21:38 --> Could not find the language line "transferring"
INFO - 2021-12-10 06:21:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 06:21:38 --> Final output sent to browser
DEBUG - 2021-12-10 06:21:38 --> Total execution time: 0.2594
INFO - 2021-12-10 06:21:39 --> Config Class Initialized
INFO - 2021-12-10 06:21:39 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:21:39 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:21:39 --> Utf8 Class Initialized
INFO - 2021-12-10 06:21:39 --> URI Class Initialized
INFO - 2021-12-10 06:21:39 --> Router Class Initialized
INFO - 2021-12-10 06:21:39 --> Output Class Initialized
INFO - 2021-12-10 06:21:39 --> Security Class Initialized
INFO - 2021-12-10 06:21:39 --> CRSF cookie sent
INFO - 2021-12-10 06:21:39 --> CSRF token verified
DEBUG - 2021-12-10 06:21:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:21:39 --> Input Class Initialized
INFO - 2021-12-10 06:21:39 --> Language Class Initialized
INFO - 2021-12-10 06:21:39 --> Loader Class Initialized
INFO - 2021-12-10 06:21:39 --> Helper loaded: url_helper
INFO - 2021-12-10 06:21:39 --> Helper loaded: form_helper
INFO - 2021-12-10 06:21:39 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:21:39 --> Helper loaded: language_helper
INFO - 2021-12-10 06:21:39 --> Helper loaded: file_helper
INFO - 2021-12-10 06:21:39 --> Helper loaded: date_helper
INFO - 2021-12-10 06:21:39 --> Database Driver Class Initialized
INFO - 2021-12-10 06:21:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:21:39 --> Parser Class Initialized
INFO - 2021-12-10 06:21:39 --> Model Class Initialized
INFO - 2021-12-10 06:21:39 --> Model Class Initialized
INFO - 2021-12-10 06:21:39 --> Controller Class Initialized
INFO - 2021-12-10 06:21:39 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:21:39 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:21:39 --> Could not find the language line "today"
INFO - 2021-12-10 06:21:39 --> Model Class Initialized
INFO - 2021-12-10 06:21:39 --> Helper loaded: text_helper
INFO - 2021-12-10 06:21:39 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:21:39 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:21:39 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = '$1'
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:21:39 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:23:34 --> Config Class Initialized
INFO - 2021-12-10 06:23:34 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:23:34 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:23:34 --> Utf8 Class Initialized
INFO - 2021-12-10 06:23:34 --> URI Class Initialized
INFO - 2021-12-10 06:23:34 --> Router Class Initialized
INFO - 2021-12-10 06:23:34 --> Output Class Initialized
INFO - 2021-12-10 06:23:34 --> Security Class Initialized
INFO - 2021-12-10 06:23:34 --> CRSF cookie sent
DEBUG - 2021-12-10 06:23:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:23:34 --> Input Class Initialized
INFO - 2021-12-10 06:23:34 --> Language Class Initialized
INFO - 2021-12-10 06:23:34 --> Loader Class Initialized
INFO - 2021-12-10 06:23:34 --> Helper loaded: url_helper
INFO - 2021-12-10 06:23:34 --> Helper loaded: form_helper
INFO - 2021-12-10 06:23:34 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:23:34 --> Helper loaded: language_helper
INFO - 2021-12-10 06:23:34 --> Helper loaded: file_helper
INFO - 2021-12-10 06:23:34 --> Helper loaded: date_helper
INFO - 2021-12-10 06:23:34 --> Database Driver Class Initialized
INFO - 2021-12-10 06:23:34 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:23:34 --> Parser Class Initialized
INFO - 2021-12-10 06:23:34 --> Model Class Initialized
INFO - 2021-12-10 06:23:34 --> Model Class Initialized
INFO - 2021-12-10 06:23:34 --> Controller Class Initialized
INFO - 2021-12-10 06:23:34 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:23:34 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:23:34 --> Could not find the language line "today"
INFO - 2021-12-10 06:23:34 --> Model Class Initialized
INFO - 2021-12-10 06:23:34 --> Helper loaded: text_helper
INFO - 2021-12-10 06:23:34 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:23:34 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:23:34 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 06:23:34 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 06:23:34 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 06:23:34 --> Could not find the language line "backups"
INFO - 2021-12-10 06:23:34 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 06:23:34 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 06:23:34 --> Could not find the language line "ordered"
ERROR - 2021-12-10 06:23:34 --> Could not find the language line "due"
ERROR - 2021-12-10 06:23:34 --> Could not find the language line "transferring"
INFO - 2021-12-10 06:23:34 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 06:23:34 --> Final output sent to browser
DEBUG - 2021-12-10 06:23:34 --> Total execution time: 0.2568
INFO - 2021-12-10 06:23:35 --> Config Class Initialized
INFO - 2021-12-10 06:23:35 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:23:35 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:23:35 --> Utf8 Class Initialized
INFO - 2021-12-10 06:23:35 --> URI Class Initialized
INFO - 2021-12-10 06:23:35 --> Router Class Initialized
INFO - 2021-12-10 06:23:35 --> Output Class Initialized
INFO - 2021-12-10 06:23:35 --> Security Class Initialized
INFO - 2021-12-10 06:23:35 --> CRSF cookie sent
INFO - 2021-12-10 06:23:35 --> CSRF token verified
DEBUG - 2021-12-10 06:23:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:23:35 --> Input Class Initialized
INFO - 2021-12-10 06:23:35 --> Language Class Initialized
INFO - 2021-12-10 06:23:35 --> Loader Class Initialized
INFO - 2021-12-10 06:23:35 --> Helper loaded: url_helper
INFO - 2021-12-10 06:23:35 --> Helper loaded: form_helper
INFO - 2021-12-10 06:23:35 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:23:35 --> Helper loaded: language_helper
INFO - 2021-12-10 06:23:35 --> Helper loaded: file_helper
INFO - 2021-12-10 06:23:35 --> Helper loaded: date_helper
INFO - 2021-12-10 06:23:35 --> Database Driver Class Initialized
INFO - 2021-12-10 06:23:35 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:23:35 --> Parser Class Initialized
INFO - 2021-12-10 06:23:35 --> Model Class Initialized
INFO - 2021-12-10 06:23:35 --> Model Class Initialized
INFO - 2021-12-10 06:23:35 --> Controller Class Initialized
INFO - 2021-12-10 06:23:35 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:23:35 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:23:35 --> Could not find the language line "today"
INFO - 2021-12-10 06:23:35 --> Model Class Initialized
INFO - 2021-12-10 06:23:35 --> Helper loaded: text_helper
INFO - 2021-12-10 06:23:35 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:23:35 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:23:35 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = '$1'
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:23:35 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:23:42 --> Config Class Initialized
INFO - 2021-12-10 06:23:42 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:23:42 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:23:42 --> Utf8 Class Initialized
INFO - 2021-12-10 06:23:42 --> URI Class Initialized
INFO - 2021-12-10 06:23:42 --> Router Class Initialized
INFO - 2021-12-10 06:23:42 --> Output Class Initialized
INFO - 2021-12-10 06:23:42 --> Security Class Initialized
INFO - 2021-12-10 06:23:42 --> CRSF cookie sent
DEBUG - 2021-12-10 06:23:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:23:42 --> Input Class Initialized
INFO - 2021-12-10 06:23:42 --> Language Class Initialized
INFO - 2021-12-10 06:23:42 --> Loader Class Initialized
INFO - 2021-12-10 06:23:42 --> Helper loaded: url_helper
INFO - 2021-12-10 06:23:42 --> Helper loaded: form_helper
INFO - 2021-12-10 06:23:42 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:23:42 --> Helper loaded: language_helper
INFO - 2021-12-10 06:23:42 --> Helper loaded: file_helper
INFO - 2021-12-10 06:23:42 --> Helper loaded: date_helper
INFO - 2021-12-10 06:23:42 --> Database Driver Class Initialized
INFO - 2021-12-10 06:23:42 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:23:42 --> Parser Class Initialized
INFO - 2021-12-10 06:23:42 --> Model Class Initialized
INFO - 2021-12-10 06:23:42 --> Model Class Initialized
INFO - 2021-12-10 06:23:42 --> Controller Class Initialized
INFO - 2021-12-10 06:23:43 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:23:43 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:23:43 --> Could not find the language line "today"
INFO - 2021-12-10 06:23:43 --> Model Class Initialized
INFO - 2021-12-10 06:23:43 --> Helper loaded: text_helper
INFO - 2021-12-10 06:23:43 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:23:43 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:23:43 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = '$1'
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:23:43 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:26:11 --> Config Class Initialized
INFO - 2021-12-10 06:26:11 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:26:11 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:26:11 --> Utf8 Class Initialized
INFO - 2021-12-10 06:26:11 --> URI Class Initialized
INFO - 2021-12-10 06:26:11 --> Router Class Initialized
INFO - 2021-12-10 06:26:11 --> Output Class Initialized
INFO - 2021-12-10 06:26:11 --> Security Class Initialized
INFO - 2021-12-10 06:26:11 --> CRSF cookie sent
DEBUG - 2021-12-10 06:26:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:26:11 --> Input Class Initialized
INFO - 2021-12-10 06:26:11 --> Language Class Initialized
INFO - 2021-12-10 06:26:11 --> Loader Class Initialized
INFO - 2021-12-10 06:26:11 --> Helper loaded: url_helper
INFO - 2021-12-10 06:26:11 --> Helper loaded: form_helper
INFO - 2021-12-10 06:26:11 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:26:11 --> Helper loaded: language_helper
INFO - 2021-12-10 06:26:11 --> Helper loaded: file_helper
INFO - 2021-12-10 06:26:11 --> Helper loaded: date_helper
INFO - 2021-12-10 06:26:11 --> Database Driver Class Initialized
INFO - 2021-12-10 06:26:11 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:26:11 --> Parser Class Initialized
INFO - 2021-12-10 06:26:11 --> Model Class Initialized
INFO - 2021-12-10 06:26:11 --> Model Class Initialized
INFO - 2021-12-10 06:26:11 --> Controller Class Initialized
INFO - 2021-12-10 06:26:11 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:26:11 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:26:11 --> Could not find the language line "today"
INFO - 2021-12-10 06:26:11 --> Model Class Initialized
INFO - 2021-12-10 06:26:11 --> Helper loaded: text_helper
INFO - 2021-12-10 06:26:11 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:26:11 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:26:11 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 06:26:11 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 06:26:11 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 06:26:11 --> Could not find the language line "backups"
INFO - 2021-12-10 06:26:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 06:26:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 06:26:11 --> Could not find the language line "ordered"
ERROR - 2021-12-10 06:26:11 --> Could not find the language line "due"
ERROR - 2021-12-10 06:26:11 --> Could not find the language line "transferring"
INFO - 2021-12-10 06:26:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 06:26:11 --> Final output sent to browser
DEBUG - 2021-12-10 06:26:11 --> Total execution time: 0.3013
INFO - 2021-12-10 06:26:11 --> Config Class Initialized
INFO - 2021-12-10 06:26:11 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:26:11 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:26:11 --> Utf8 Class Initialized
INFO - 2021-12-10 06:26:11 --> URI Class Initialized
INFO - 2021-12-10 06:26:12 --> Router Class Initialized
INFO - 2021-12-10 06:26:12 --> Output Class Initialized
INFO - 2021-12-10 06:26:12 --> Security Class Initialized
INFO - 2021-12-10 06:26:12 --> CRSF cookie sent
INFO - 2021-12-10 06:26:12 --> CSRF token verified
DEBUG - 2021-12-10 06:26:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:26:12 --> Input Class Initialized
INFO - 2021-12-10 06:26:12 --> Language Class Initialized
INFO - 2021-12-10 06:26:12 --> Loader Class Initialized
INFO - 2021-12-10 06:26:12 --> Helper loaded: url_helper
INFO - 2021-12-10 06:26:12 --> Helper loaded: form_helper
INFO - 2021-12-10 06:26:12 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:26:12 --> Helper loaded: language_helper
INFO - 2021-12-10 06:26:12 --> Helper loaded: file_helper
INFO - 2021-12-10 06:26:12 --> Helper loaded: date_helper
INFO - 2021-12-10 06:26:12 --> Database Driver Class Initialized
INFO - 2021-12-10 06:26:12 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:26:12 --> Parser Class Initialized
INFO - 2021-12-10 06:26:12 --> Model Class Initialized
INFO - 2021-12-10 06:26:12 --> Model Class Initialized
INFO - 2021-12-10 06:26:12 --> Controller Class Initialized
INFO - 2021-12-10 06:26:12 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:26:12 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:26:12 --> Could not find the language line "today"
INFO - 2021-12-10 06:26:12 --> Model Class Initialized
INFO - 2021-12-10 06:26:12 --> Helper loaded: text_helper
INFO - 2021-12-10 06:26:12 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:26:12 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:26:12 --> Severity: Notice --> Use of undefined constant id - assumed 'id' C:\wamp64\www\Reactor\sma\controllers\Pos.php 107
ERROR - 2021-12-10 06:26:12 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 'id'
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:26:12 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:26:23 --> Config Class Initialized
INFO - 2021-12-10 06:26:23 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:26:23 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:26:23 --> Utf8 Class Initialized
INFO - 2021-12-10 06:26:23 --> URI Class Initialized
INFO - 2021-12-10 06:26:23 --> Router Class Initialized
INFO - 2021-12-10 06:26:23 --> Output Class Initialized
INFO - 2021-12-10 06:26:23 --> Security Class Initialized
INFO - 2021-12-10 06:26:23 --> CRSF cookie sent
DEBUG - 2021-12-10 06:26:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:26:23 --> Input Class Initialized
INFO - 2021-12-10 06:26:23 --> Language Class Initialized
INFO - 2021-12-10 06:26:23 --> Loader Class Initialized
INFO - 2021-12-10 06:26:23 --> Helper loaded: url_helper
INFO - 2021-12-10 06:26:23 --> Helper loaded: form_helper
INFO - 2021-12-10 06:26:23 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:26:23 --> Helper loaded: language_helper
INFO - 2021-12-10 06:26:23 --> Helper loaded: file_helper
INFO - 2021-12-10 06:26:23 --> Helper loaded: date_helper
INFO - 2021-12-10 06:26:23 --> Database Driver Class Initialized
INFO - 2021-12-10 06:26:23 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:26:23 --> Parser Class Initialized
INFO - 2021-12-10 06:26:23 --> Model Class Initialized
INFO - 2021-12-10 06:26:23 --> Model Class Initialized
INFO - 2021-12-10 06:26:23 --> Controller Class Initialized
INFO - 2021-12-10 06:26:23 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:26:23 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:26:23 --> Could not find the language line "today"
INFO - 2021-12-10 06:26:23 --> Model Class Initialized
INFO - 2021-12-10 06:26:23 --> Helper loaded: text_helper
INFO - 2021-12-10 06:26:23 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:26:23 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:26:23 --> Severity: Notice --> Use of undefined constant id - assumed 'id' C:\wamp64\www\Reactor\sma\controllers\Pos.php 107
ERROR - 2021-12-10 06:26:23 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 'id'
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:26:23 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:26:46 --> Config Class Initialized
INFO - 2021-12-10 06:26:46 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:26:46 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:26:46 --> Utf8 Class Initialized
INFO - 2021-12-10 06:26:46 --> URI Class Initialized
INFO - 2021-12-10 06:26:46 --> Router Class Initialized
INFO - 2021-12-10 06:26:46 --> Output Class Initialized
INFO - 2021-12-10 06:26:47 --> Security Class Initialized
INFO - 2021-12-10 06:26:47 --> CRSF cookie sent
DEBUG - 2021-12-10 06:26:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:26:47 --> Input Class Initialized
INFO - 2021-12-10 06:26:47 --> Language Class Initialized
INFO - 2021-12-10 06:26:47 --> Loader Class Initialized
INFO - 2021-12-10 06:26:47 --> Helper loaded: url_helper
INFO - 2021-12-10 06:26:47 --> Helper loaded: form_helper
INFO - 2021-12-10 06:26:47 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:26:47 --> Helper loaded: language_helper
INFO - 2021-12-10 06:26:47 --> Helper loaded: file_helper
INFO - 2021-12-10 06:26:47 --> Helper loaded: date_helper
INFO - 2021-12-10 06:26:47 --> Database Driver Class Initialized
INFO - 2021-12-10 06:26:47 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:26:47 --> Parser Class Initialized
INFO - 2021-12-10 06:26:47 --> Model Class Initialized
INFO - 2021-12-10 06:26:47 --> Model Class Initialized
INFO - 2021-12-10 06:26:47 --> Controller Class Initialized
INFO - 2021-12-10 06:26:47 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:26:47 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:26:47 --> Could not find the language line "today"
INFO - 2021-12-10 06:26:47 --> Model Class Initialized
INFO - 2021-12-10 06:26:47 --> Helper loaded: text_helper
INFO - 2021-12-10 06:26:47 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:26:47 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:26:47 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 'id'
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:26:47 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:27:39 --> Config Class Initialized
INFO - 2021-12-10 06:27:39 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:27:39 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:27:39 --> Utf8 Class Initialized
INFO - 2021-12-10 06:27:39 --> URI Class Initialized
INFO - 2021-12-10 06:27:39 --> Router Class Initialized
INFO - 2021-12-10 06:27:39 --> Output Class Initialized
INFO - 2021-12-10 06:27:39 --> Security Class Initialized
INFO - 2021-12-10 06:27:39 --> CRSF cookie sent
DEBUG - 2021-12-10 06:27:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:27:39 --> Input Class Initialized
INFO - 2021-12-10 06:27:39 --> Language Class Initialized
ERROR - 2021-12-10 06:27:39 --> Severity: error --> Exception: syntax error, unexpected '.' C:\wamp64\www\Reactor\sma\controllers\Pos.php 107
INFO - 2021-12-10 06:27:50 --> Config Class Initialized
INFO - 2021-12-10 06:27:50 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:27:50 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:27:50 --> Utf8 Class Initialized
INFO - 2021-12-10 06:27:50 --> URI Class Initialized
INFO - 2021-12-10 06:27:50 --> Router Class Initialized
INFO - 2021-12-10 06:27:50 --> Output Class Initialized
INFO - 2021-12-10 06:27:50 --> Security Class Initialized
INFO - 2021-12-10 06:27:50 --> CRSF cookie sent
DEBUG - 2021-12-10 06:27:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:27:50 --> Input Class Initialized
INFO - 2021-12-10 06:27:50 --> Language Class Initialized
INFO - 2021-12-10 06:27:50 --> Loader Class Initialized
INFO - 2021-12-10 06:27:50 --> Helper loaded: url_helper
INFO - 2021-12-10 06:27:50 --> Helper loaded: form_helper
INFO - 2021-12-10 06:27:50 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:27:50 --> Helper loaded: language_helper
INFO - 2021-12-10 06:27:50 --> Helper loaded: file_helper
INFO - 2021-12-10 06:27:50 --> Helper loaded: date_helper
INFO - 2021-12-10 06:27:50 --> Database Driver Class Initialized
INFO - 2021-12-10 06:27:50 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:27:50 --> Parser Class Initialized
INFO - 2021-12-10 06:27:50 --> Model Class Initialized
INFO - 2021-12-10 06:27:50 --> Model Class Initialized
INFO - 2021-12-10 06:27:50 --> Controller Class Initialized
INFO - 2021-12-10 06:27:50 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:27:50 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:27:50 --> Could not find the language line "today"
INFO - 2021-12-10 06:27:50 --> Model Class Initialized
INFO - 2021-12-10 06:27:50 --> Helper loaded: text_helper
INFO - 2021-12-10 06:27:50 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:27:50 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:27:50 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 'id'
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:27:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:28:01 --> Config Class Initialized
INFO - 2021-12-10 06:28:01 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:28:01 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:28:01 --> Utf8 Class Initialized
INFO - 2021-12-10 06:28:01 --> URI Class Initialized
INFO - 2021-12-10 06:28:01 --> Router Class Initialized
INFO - 2021-12-10 06:28:01 --> Output Class Initialized
INFO - 2021-12-10 06:28:01 --> Security Class Initialized
INFO - 2021-12-10 06:28:01 --> CRSF cookie sent
DEBUG - 2021-12-10 06:28:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:28:01 --> Input Class Initialized
INFO - 2021-12-10 06:28:01 --> Language Class Initialized
INFO - 2021-12-10 06:28:01 --> Loader Class Initialized
INFO - 2021-12-10 06:28:01 --> Helper loaded: url_helper
INFO - 2021-12-10 06:28:01 --> Helper loaded: form_helper
INFO - 2021-12-10 06:28:01 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:28:01 --> Helper loaded: language_helper
INFO - 2021-12-10 06:28:01 --> Helper loaded: file_helper
INFO - 2021-12-10 06:28:01 --> Helper loaded: date_helper
INFO - 2021-12-10 06:28:01 --> Database Driver Class Initialized
INFO - 2021-12-10 06:28:01 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:28:01 --> Parser Class Initialized
INFO - 2021-12-10 06:28:01 --> Model Class Initialized
INFO - 2021-12-10 06:28:01 --> Model Class Initialized
INFO - 2021-12-10 06:28:01 --> Controller Class Initialized
INFO - 2021-12-10 06:28:01 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:28:01 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:28:01 --> Could not find the language line "today"
INFO - 2021-12-10 06:28:01 --> Model Class Initialized
INFO - 2021-12-10 06:28:01 --> Helper loaded: text_helper
INFO - 2021-12-10 06:28:01 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:28:01 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:28:01 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 13
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:28:01 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:28:03 --> Config Class Initialized
INFO - 2021-12-10 06:28:03 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:28:03 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:28:03 --> Utf8 Class Initialized
INFO - 2021-12-10 06:28:03 --> URI Class Initialized
INFO - 2021-12-10 06:28:03 --> Router Class Initialized
INFO - 2021-12-10 06:28:03 --> Output Class Initialized
INFO - 2021-12-10 06:28:03 --> Security Class Initialized
INFO - 2021-12-10 06:28:03 --> CRSF cookie sent
DEBUG - 2021-12-10 06:28:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:28:03 --> Input Class Initialized
INFO - 2021-12-10 06:28:03 --> Language Class Initialized
INFO - 2021-12-10 06:28:03 --> Loader Class Initialized
INFO - 2021-12-10 06:28:03 --> Helper loaded: url_helper
INFO - 2021-12-10 06:28:03 --> Helper loaded: form_helper
INFO - 2021-12-10 06:28:03 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:28:03 --> Helper loaded: language_helper
INFO - 2021-12-10 06:28:03 --> Helper loaded: file_helper
INFO - 2021-12-10 06:28:03 --> Helper loaded: date_helper
INFO - 2021-12-10 06:28:03 --> Database Driver Class Initialized
INFO - 2021-12-10 06:28:03 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:28:03 --> Parser Class Initialized
INFO - 2021-12-10 06:28:03 --> Model Class Initialized
INFO - 2021-12-10 06:28:03 --> Model Class Initialized
INFO - 2021-12-10 06:28:03 --> Controller Class Initialized
INFO - 2021-12-10 06:28:03 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:28:03 --> Config Class Initialized
INFO - 2021-12-10 06:28:03 --> Hooks Class Initialized
INFO - 2021-12-10 06:28:03 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:28:03 --> Could not find the language line "today"
INFO - 2021-12-10 06:28:03 --> Model Class Initialized
INFO - 2021-12-10 06:28:03 --> Helper loaded: text_helper
INFO - 2021-12-10 06:28:03 --> Language file loaded: language/spanish/pos_lang.php
DEBUG - 2021-12-10 06:28:03 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:28:03 --> Form Validation Class Initialized
INFO - 2021-12-10 06:28:03 --> Utf8 Class Initialized
INFO - 2021-12-10 06:28:03 --> URI Class Initialized
ERROR - 2021-12-10 06:28:03 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 13
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:28:03 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:28:03 --> Router Class Initialized
INFO - 2021-12-10 06:28:03 --> Output Class Initialized
INFO - 2021-12-10 06:28:03 --> Security Class Initialized
INFO - 2021-12-10 06:28:03 --> CRSF cookie sent
DEBUG - 2021-12-10 06:28:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:28:03 --> Input Class Initialized
INFO - 2021-12-10 06:28:03 --> Language Class Initialized
INFO - 2021-12-10 06:28:03 --> Loader Class Initialized
INFO - 2021-12-10 06:28:03 --> Config Class Initialized
INFO - 2021-12-10 06:28:03 --> Hooks Class Initialized
INFO - 2021-12-10 06:28:03 --> Helper loaded: url_helper
INFO - 2021-12-10 06:28:03 --> Helper loaded: form_helper
DEBUG - 2021-12-10 06:28:03 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:28:03 --> Utf8 Class Initialized
INFO - 2021-12-10 06:28:03 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:28:03 --> URI Class Initialized
INFO - 2021-12-10 06:28:03 --> Helper loaded: language_helper
INFO - 2021-12-10 06:28:03 --> Helper loaded: file_helper
INFO - 2021-12-10 06:28:03 --> Router Class Initialized
INFO - 2021-12-10 06:28:03 --> Helper loaded: date_helper
INFO - 2021-12-10 06:28:03 --> Output Class Initialized
INFO - 2021-12-10 06:28:03 --> Security Class Initialized
INFO - 2021-12-10 06:28:03 --> CRSF cookie sent
INFO - 2021-12-10 06:28:03 --> Database Driver Class Initialized
DEBUG - 2021-12-10 06:28:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:28:03 --> Input Class Initialized
INFO - 2021-12-10 06:28:03 --> Language Class Initialized
INFO - 2021-12-10 06:28:03 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:28:03 --> Parser Class Initialized
INFO - 2021-12-10 06:28:03 --> Model Class Initialized
INFO - 2021-12-10 06:28:03 --> Loader Class Initialized
INFO - 2021-12-10 06:28:03 --> Model Class Initialized
INFO - 2021-12-10 06:28:03 --> Helper loaded: url_helper
INFO - 2021-12-10 06:28:03 --> Controller Class Initialized
INFO - 2021-12-10 06:28:03 --> Helper loaded: form_helper
INFO - 2021-12-10 06:28:03 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:28:03 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:28:03 --> Helper loaded: language_helper
INFO - 2021-12-10 06:28:03 --> Helper loaded: file_helper
INFO - 2021-12-10 06:28:03 --> Language file loaded: language/spanish/calendar_lang.php
INFO - 2021-12-10 06:28:03 --> Helper loaded: date_helper
ERROR - 2021-12-10 06:28:03 --> Could not find the language line "today"
INFO - 2021-12-10 06:28:03 --> Model Class Initialized
INFO - 2021-12-10 06:28:03 --> Database Driver Class Initialized
INFO - 2021-12-10 06:28:03 --> Helper loaded: text_helper
INFO - 2021-12-10 06:28:03 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:28:03 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:28:03 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 13
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:28:03 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:28:03 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:28:03 --> Parser Class Initialized
INFO - 2021-12-10 06:28:03 --> Model Class Initialized
INFO - 2021-12-10 06:28:03 --> Model Class Initialized
INFO - 2021-12-10 06:28:03 --> Controller Class Initialized
INFO - 2021-12-10 06:28:03 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:28:03 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:28:03 --> Could not find the language line "today"
INFO - 2021-12-10 06:28:03 --> Model Class Initialized
INFO - 2021-12-10 06:28:03 --> Helper loaded: text_helper
INFO - 2021-12-10 06:28:03 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:28:03 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:28:03 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 13
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:28:03 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:28:59 --> Config Class Initialized
INFO - 2021-12-10 06:28:59 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:28:59 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:28:59 --> Utf8 Class Initialized
INFO - 2021-12-10 06:28:59 --> URI Class Initialized
INFO - 2021-12-10 06:28:59 --> Router Class Initialized
INFO - 2021-12-10 06:28:59 --> Output Class Initialized
INFO - 2021-12-10 06:28:59 --> Security Class Initialized
INFO - 2021-12-10 06:28:59 --> CRSF cookie sent
DEBUG - 2021-12-10 06:28:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:28:59 --> Input Class Initialized
INFO - 2021-12-10 06:28:59 --> Language Class Initialized
INFO - 2021-12-10 06:28:59 --> Loader Class Initialized
INFO - 2021-12-10 06:28:59 --> Helper loaded: url_helper
INFO - 2021-12-10 06:28:59 --> Helper loaded: form_helper
INFO - 2021-12-10 06:28:59 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:28:59 --> Helper loaded: language_helper
INFO - 2021-12-10 06:28:59 --> Helper loaded: file_helper
INFO - 2021-12-10 06:28:59 --> Helper loaded: date_helper
INFO - 2021-12-10 06:28:59 --> Database Driver Class Initialized
INFO - 2021-12-10 06:28:59 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:28:59 --> Parser Class Initialized
INFO - 2021-12-10 06:28:59 --> Model Class Initialized
INFO - 2021-12-10 06:28:59 --> Model Class Initialized
INFO - 2021-12-10 06:28:59 --> Controller Class Initialized
INFO - 2021-12-10 06:28:59 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:28:59 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:28:59 --> Could not find the language line "today"
INFO - 2021-12-10 06:28:59 --> Model Class Initialized
INFO - 2021-12-10 06:28:59 --> Helper loaded: text_helper
INFO - 2021-12-10 06:28:59 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:28:59 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:28:59 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 18
GROUP BY `sma_sales`.`id`
ERROR - 2021-12-10 06:28:59 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:29:39 --> Config Class Initialized
INFO - 2021-12-10 06:29:39 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:29:39 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:29:39 --> Utf8 Class Initialized
INFO - 2021-12-10 06:29:39 --> URI Class Initialized
INFO - 2021-12-10 06:29:39 --> Router Class Initialized
INFO - 2021-12-10 06:29:39 --> Output Class Initialized
INFO - 2021-12-10 06:29:39 --> Security Class Initialized
INFO - 2021-12-10 06:29:39 --> CRSF cookie sent
DEBUG - 2021-12-10 06:29:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:29:39 --> Input Class Initialized
INFO - 2021-12-10 06:29:39 --> Language Class Initialized
INFO - 2021-12-10 06:29:39 --> Loader Class Initialized
INFO - 2021-12-10 06:29:39 --> Helper loaded: url_helper
INFO - 2021-12-10 06:29:39 --> Helper loaded: form_helper
INFO - 2021-12-10 06:29:39 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:29:39 --> Helper loaded: language_helper
INFO - 2021-12-10 06:29:39 --> Helper loaded: file_helper
INFO - 2021-12-10 06:29:39 --> Helper loaded: date_helper
INFO - 2021-12-10 06:29:39 --> Database Driver Class Initialized
INFO - 2021-12-10 06:29:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:29:39 --> Parser Class Initialized
INFO - 2021-12-10 06:29:39 --> Model Class Initialized
INFO - 2021-12-10 06:29:39 --> Model Class Initialized
INFO - 2021-12-10 06:29:39 --> Controller Class Initialized
INFO - 2021-12-10 06:29:39 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:29:39 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:29:39 --> Could not find the language line "today"
INFO - 2021-12-10 06:29:39 --> Model Class Initialized
INFO - 2021-12-10 06:29:39 --> Helper loaded: text_helper
INFO - 2021-12-10 06:29:39 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:29:39 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:29:39 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 18
GROUP BY `sma_sales`.`id`
 LIMIT 1
ERROR - 2021-12-10 06:29:39 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:29:41 --> Config Class Initialized
INFO - 2021-12-10 06:29:41 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:29:41 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:29:41 --> Utf8 Class Initialized
INFO - 2021-12-10 06:29:41 --> URI Class Initialized
INFO - 2021-12-10 06:29:41 --> Router Class Initialized
INFO - 2021-12-10 06:29:41 --> Output Class Initialized
INFO - 2021-12-10 06:29:41 --> Security Class Initialized
INFO - 2021-12-10 06:29:41 --> CRSF cookie sent
DEBUG - 2021-12-10 06:29:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:29:41 --> Input Class Initialized
INFO - 2021-12-10 06:29:41 --> Language Class Initialized
INFO - 2021-12-10 06:29:41 --> Loader Class Initialized
INFO - 2021-12-10 06:29:41 --> Helper loaded: url_helper
INFO - 2021-12-10 06:29:41 --> Helper loaded: form_helper
INFO - 2021-12-10 06:29:41 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:29:41 --> Helper loaded: language_helper
INFO - 2021-12-10 06:29:41 --> Helper loaded: file_helper
INFO - 2021-12-10 06:29:41 --> Helper loaded: date_helper
INFO - 2021-12-10 06:29:41 --> Database Driver Class Initialized
INFO - 2021-12-10 06:29:41 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:29:41 --> Parser Class Initialized
INFO - 2021-12-10 06:29:41 --> Model Class Initialized
INFO - 2021-12-10 06:29:41 --> Model Class Initialized
INFO - 2021-12-10 06:29:41 --> Controller Class Initialized
INFO - 2021-12-10 06:29:41 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:29:42 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:29:42 --> Could not find the language line "today"
INFO - 2021-12-10 06:29:42 --> Model Class Initialized
INFO - 2021-12-10 06:29:42 --> Helper loaded: text_helper
INFO - 2021-12-10 06:29:42 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:29:42 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:29:42 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 18
GROUP BY `sma_sales`.`id`
 LIMIT 1
ERROR - 2021-12-10 06:29:42 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:31:21 --> Config Class Initialized
INFO - 2021-12-10 06:31:21 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:31:21 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:31:21 --> Utf8 Class Initialized
INFO - 2021-12-10 06:31:21 --> URI Class Initialized
INFO - 2021-12-10 06:31:21 --> Router Class Initialized
INFO - 2021-12-10 06:31:21 --> Output Class Initialized
INFO - 2021-12-10 06:31:21 --> Security Class Initialized
INFO - 2021-12-10 06:31:21 --> CRSF cookie sent
DEBUG - 2021-12-10 06:31:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:31:21 --> Input Class Initialized
INFO - 2021-12-10 06:31:21 --> Language Class Initialized
INFO - 2021-12-10 06:31:21 --> Loader Class Initialized
INFO - 2021-12-10 06:31:21 --> Helper loaded: url_helper
INFO - 2021-12-10 06:31:21 --> Helper loaded: form_helper
INFO - 2021-12-10 06:31:21 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:31:21 --> Helper loaded: language_helper
INFO - 2021-12-10 06:31:21 --> Helper loaded: file_helper
INFO - 2021-12-10 06:31:21 --> Helper loaded: date_helper
INFO - 2021-12-10 06:31:21 --> Database Driver Class Initialized
INFO - 2021-12-10 06:31:21 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:31:21 --> Parser Class Initialized
INFO - 2021-12-10 06:31:21 --> Model Class Initialized
INFO - 2021-12-10 06:31:21 --> Model Class Initialized
INFO - 2021-12-10 06:31:21 --> Controller Class Initialized
INFO - 2021-12-10 06:31:21 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:31:21 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:31:21 --> Could not find the language line "today"
INFO - 2021-12-10 06:31:21 --> Model Class Initialized
INFO - 2021-12-10 06:31:21 --> Helper loaded: text_helper
INFO - 2021-12-10 06:31:21 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:31:21 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:31:21 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 22
GROUP BY `sma_sales`.`id`
 LIMIT 1
ERROR - 2021-12-10 06:31:21 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:31:24 --> Config Class Initialized
INFO - 2021-12-10 06:31:24 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:31:24 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:31:24 --> Utf8 Class Initialized
INFO - 2021-12-10 06:31:24 --> URI Class Initialized
INFO - 2021-12-10 06:31:24 --> Router Class Initialized
INFO - 2021-12-10 06:31:24 --> Output Class Initialized
INFO - 2021-12-10 06:31:24 --> Security Class Initialized
INFO - 2021-12-10 06:31:24 --> CRSF cookie sent
DEBUG - 2021-12-10 06:31:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:31:24 --> Input Class Initialized
INFO - 2021-12-10 06:31:24 --> Language Class Initialized
INFO - 2021-12-10 06:31:24 --> Loader Class Initialized
INFO - 2021-12-10 06:31:24 --> Helper loaded: url_helper
INFO - 2021-12-10 06:31:24 --> Helper loaded: form_helper
INFO - 2021-12-10 06:31:24 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:31:24 --> Helper loaded: language_helper
INFO - 2021-12-10 06:31:24 --> Helper loaded: file_helper
INFO - 2021-12-10 06:31:24 --> Helper loaded: date_helper
INFO - 2021-12-10 06:31:24 --> Database Driver Class Initialized
INFO - 2021-12-10 06:31:24 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:31:24 --> Parser Class Initialized
INFO - 2021-12-10 06:31:24 --> Model Class Initialized
INFO - 2021-12-10 06:31:24 --> Model Class Initialized
INFO - 2021-12-10 06:31:24 --> Controller Class Initialized
INFO - 2021-12-10 06:31:24 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:31:24 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:31:24 --> Could not find the language line "today"
INFO - 2021-12-10 06:31:24 --> Model Class Initialized
INFO - 2021-12-10 06:31:24 --> Helper loaded: text_helper
INFO - 2021-12-10 06:31:24 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:31:24 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:31:24 --> Query error: Unknown column 'sma_sales.id' in 'field list' - Invalid query: SELECT `sma_sales`.`id` as `id`, `date`, `reference_no`, `biller`, `customer`, `grand_total`, `paid`, (grand_total-paid) as balance, `payment_status`, `sma_companies`.`email` as `cemail`
FROM `sma_payments`
LEFT JOIN `sma_companies` ON `sma_companies`.`id`=`sma_sales`.`customer_id`
WHERE `pos` = 1
AND `sale_id` = 22
GROUP BY `sma_sales`.`id`
 LIMIT 1
ERROR - 2021-12-10 06:31:24 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 1271
INFO - 2021-12-10 06:31:52 --> Config Class Initialized
INFO - 2021-12-10 06:31:52 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:31:52 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:31:52 --> Utf8 Class Initialized
INFO - 2021-12-10 06:31:52 --> URI Class Initialized
INFO - 2021-12-10 06:31:52 --> Router Class Initialized
INFO - 2021-12-10 06:31:52 --> Output Class Initialized
INFO - 2021-12-10 06:31:52 --> Security Class Initialized
INFO - 2021-12-10 06:31:52 --> CRSF cookie sent
DEBUG - 2021-12-10 06:31:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:31:52 --> Input Class Initialized
INFO - 2021-12-10 06:31:52 --> Language Class Initialized
INFO - 2021-12-10 06:31:52 --> Loader Class Initialized
INFO - 2021-12-10 06:31:52 --> Helper loaded: url_helper
INFO - 2021-12-10 06:31:52 --> Helper loaded: form_helper
INFO - 2021-12-10 06:31:52 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:31:52 --> Helper loaded: language_helper
INFO - 2021-12-10 06:31:52 --> Helper loaded: file_helper
INFO - 2021-12-10 06:31:52 --> Helper loaded: date_helper
INFO - 2021-12-10 06:31:52 --> Database Driver Class Initialized
INFO - 2021-12-10 06:31:52 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:31:52 --> Parser Class Initialized
INFO - 2021-12-10 06:31:52 --> Model Class Initialized
INFO - 2021-12-10 06:31:52 --> Model Class Initialized
INFO - 2021-12-10 06:31:52 --> Controller Class Initialized
INFO - 2021-12-10 06:31:52 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:31:52 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:31:52 --> Could not find the language line "today"
INFO - 2021-12-10 06:31:52 --> Model Class Initialized
INFO - 2021-12-10 06:31:52 --> Helper loaded: text_helper
INFO - 2021-12-10 06:31:52 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:31:52 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:31:52 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 06:31:52 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 06:31:52 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 06:31:52 --> Could not find the language line "backups"
INFO - 2021-12-10 06:31:52 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 06:31:52 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 06:31:52 --> Could not find the language line "ordered"
ERROR - 2021-12-10 06:31:52 --> Could not find the language line "due"
ERROR - 2021-12-10 06:31:52 --> Could not find the language line "transferring"
INFO - 2021-12-10 06:31:52 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 06:31:52 --> Final output sent to browser
DEBUG - 2021-12-10 06:31:52 --> Total execution time: 0.2632
INFO - 2021-12-10 06:31:52 --> Config Class Initialized
INFO - 2021-12-10 06:31:52 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:31:52 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:31:52 --> Utf8 Class Initialized
INFO - 2021-12-10 06:31:53 --> URI Class Initialized
INFO - 2021-12-10 06:31:53 --> Router Class Initialized
INFO - 2021-12-10 06:31:53 --> Output Class Initialized
INFO - 2021-12-10 06:31:53 --> Security Class Initialized
INFO - 2021-12-10 06:31:53 --> CRSF cookie sent
INFO - 2021-12-10 06:31:53 --> CSRF token verified
DEBUG - 2021-12-10 06:31:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:31:53 --> Input Class Initialized
INFO - 2021-12-10 06:31:53 --> Language Class Initialized
INFO - 2021-12-10 06:31:53 --> Loader Class Initialized
INFO - 2021-12-10 06:31:53 --> Helper loaded: url_helper
INFO - 2021-12-10 06:31:53 --> Helper loaded: form_helper
INFO - 2021-12-10 06:31:53 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:31:53 --> Helper loaded: language_helper
INFO - 2021-12-10 06:31:53 --> Helper loaded: file_helper
INFO - 2021-12-10 06:31:53 --> Helper loaded: date_helper
INFO - 2021-12-10 06:31:53 --> Database Driver Class Initialized
INFO - 2021-12-10 06:31:53 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:31:53 --> Parser Class Initialized
INFO - 2021-12-10 06:31:53 --> Model Class Initialized
INFO - 2021-12-10 06:31:53 --> Model Class Initialized
INFO - 2021-12-10 06:31:53 --> Controller Class Initialized
INFO - 2021-12-10 06:31:53 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:31:53 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:31:53 --> Could not find the language line "today"
INFO - 2021-12-10 06:31:53 --> Model Class Initialized
INFO - 2021-12-10 06:31:53 --> Helper loaded: text_helper
INFO - 2021-12-10 06:31:53 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:31:53 --> Form Validation Class Initialized
INFO - 2021-12-10 06:31:53 --> Final output sent to browser
DEBUG - 2021-12-10 06:31:53 --> Total execution time: 0.5581
INFO - 2021-12-10 06:32:21 --> Config Class Initialized
INFO - 2021-12-10 06:32:21 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:32:21 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:32:21 --> Utf8 Class Initialized
INFO - 2021-12-10 06:32:21 --> URI Class Initialized
INFO - 2021-12-10 06:32:21 --> Router Class Initialized
INFO - 2021-12-10 06:32:21 --> Output Class Initialized
INFO - 2021-12-10 06:32:21 --> Security Class Initialized
INFO - 2021-12-10 06:32:21 --> CRSF cookie sent
DEBUG - 2021-12-10 06:32:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:32:21 --> Input Class Initialized
INFO - 2021-12-10 06:32:21 --> Language Class Initialized
INFO - 2021-12-10 06:32:21 --> Loader Class Initialized
INFO - 2021-12-10 06:32:21 --> Helper loaded: url_helper
INFO - 2021-12-10 06:32:21 --> Helper loaded: form_helper
INFO - 2021-12-10 06:32:21 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:32:21 --> Helper loaded: language_helper
INFO - 2021-12-10 06:32:21 --> Helper loaded: file_helper
INFO - 2021-12-10 06:32:21 --> Helper loaded: date_helper
INFO - 2021-12-10 06:32:21 --> Database Driver Class Initialized
INFO - 2021-12-10 06:32:21 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:32:21 --> Parser Class Initialized
INFO - 2021-12-10 06:32:21 --> Model Class Initialized
INFO - 2021-12-10 06:32:21 --> Model Class Initialized
INFO - 2021-12-10 06:32:21 --> Controller Class Initialized
INFO - 2021-12-10 06:32:21 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:32:21 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:32:21 --> Could not find the language line "today"
INFO - 2021-12-10 06:32:21 --> Model Class Initialized
INFO - 2021-12-10 06:32:21 --> Helper loaded: text_helper
INFO - 2021-12-10 06:32:21 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:32:21 --> Form Validation Class Initialized
DEBUG - 2021-12-10 06:32:21 --> Zend Class Initialized
DEBUG - 2021-12-10 06:32:21 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 06:32:21 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 06:32:21 --> Final output sent to browser
DEBUG - 2021-12-10 06:32:21 --> Total execution time: 0.6962
INFO - 2021-12-10 06:32:28 --> Config Class Initialized
INFO - 2021-12-10 06:32:28 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:32:28 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:32:28 --> Utf8 Class Initialized
INFO - 2021-12-10 06:32:28 --> URI Class Initialized
INFO - 2021-12-10 06:32:28 --> Router Class Initialized
INFO - 2021-12-10 06:32:28 --> Output Class Initialized
INFO - 2021-12-10 06:32:28 --> Security Class Initialized
INFO - 2021-12-10 06:32:28 --> CRSF cookie sent
DEBUG - 2021-12-10 06:32:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:32:28 --> Input Class Initialized
INFO - 2021-12-10 06:32:28 --> Language Class Initialized
INFO - 2021-12-10 06:32:28 --> Loader Class Initialized
INFO - 2021-12-10 06:32:28 --> Helper loaded: url_helper
INFO - 2021-12-10 06:32:28 --> Helper loaded: form_helper
INFO - 2021-12-10 06:32:28 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:32:28 --> Helper loaded: language_helper
INFO - 2021-12-10 06:32:28 --> Helper loaded: file_helper
INFO - 2021-12-10 06:32:28 --> Helper loaded: date_helper
INFO - 2021-12-10 06:32:28 --> Database Driver Class Initialized
INFO - 2021-12-10 06:32:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:32:28 --> Parser Class Initialized
INFO - 2021-12-10 06:32:28 --> Model Class Initialized
INFO - 2021-12-10 06:32:28 --> Model Class Initialized
INFO - 2021-12-10 06:32:28 --> Controller Class Initialized
INFO - 2021-12-10 06:32:28 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:32:28 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:32:28 --> Could not find the language line "today"
INFO - 2021-12-10 06:32:28 --> Model Class Initialized
INFO - 2021-12-10 06:32:28 --> Helper loaded: text_helper
INFO - 2021-12-10 06:32:28 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:32:28 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:32:28 --> Could not find the language line "Cheque"
DEBUG - 2021-12-10 06:32:28 --> Zend Class Initialized
DEBUG - 2021-12-10 06:32:28 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 06:32:28 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 06:32:28 --> Final output sent to browser
DEBUG - 2021-12-10 06:32:28 --> Total execution time: 0.7452
INFO - 2021-12-10 06:32:36 --> Config Class Initialized
INFO - 2021-12-10 06:32:36 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:32:36 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:32:36 --> Utf8 Class Initialized
INFO - 2021-12-10 06:32:36 --> URI Class Initialized
INFO - 2021-12-10 06:32:36 --> Router Class Initialized
INFO - 2021-12-10 06:32:36 --> Output Class Initialized
INFO - 2021-12-10 06:32:36 --> Security Class Initialized
INFO - 2021-12-10 06:32:36 --> CRSF cookie sent
DEBUG - 2021-12-10 06:32:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:32:36 --> Input Class Initialized
INFO - 2021-12-10 06:32:36 --> Language Class Initialized
INFO - 2021-12-10 06:32:36 --> Loader Class Initialized
INFO - 2021-12-10 06:32:36 --> Helper loaded: url_helper
INFO - 2021-12-10 06:32:36 --> Helper loaded: form_helper
INFO - 2021-12-10 06:32:36 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:32:36 --> Helper loaded: language_helper
INFO - 2021-12-10 06:32:36 --> Helper loaded: file_helper
INFO - 2021-12-10 06:32:36 --> Helper loaded: date_helper
INFO - 2021-12-10 06:32:36 --> Database Driver Class Initialized
INFO - 2021-12-10 06:32:36 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:32:36 --> Parser Class Initialized
INFO - 2021-12-10 06:32:36 --> Model Class Initialized
INFO - 2021-12-10 06:32:36 --> Model Class Initialized
INFO - 2021-12-10 06:32:36 --> Controller Class Initialized
INFO - 2021-12-10 06:32:36 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:32:36 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:32:36 --> Could not find the language line "today"
INFO - 2021-12-10 06:32:36 --> Model Class Initialized
INFO - 2021-12-10 06:32:36 --> Helper loaded: text_helper
INFO - 2021-12-10 06:32:36 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:32:36 --> Form Validation Class Initialized
DEBUG - 2021-12-10 06:32:37 --> Zend Class Initialized
DEBUG - 2021-12-10 06:32:37 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 06:32:37 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 06:32:37 --> Final output sent to browser
DEBUG - 2021-12-10 06:32:37 --> Total execution time: 0.8012
INFO - 2021-12-10 06:32:42 --> Config Class Initialized
INFO - 2021-12-10 06:32:42 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:32:42 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:32:42 --> Utf8 Class Initialized
INFO - 2021-12-10 06:32:42 --> URI Class Initialized
INFO - 2021-12-10 06:32:42 --> Router Class Initialized
INFO - 2021-12-10 06:32:42 --> Output Class Initialized
INFO - 2021-12-10 06:32:42 --> Security Class Initialized
INFO - 2021-12-10 06:32:42 --> CRSF cookie sent
DEBUG - 2021-12-10 06:32:42 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:32:42 --> Input Class Initialized
INFO - 2021-12-10 06:32:42 --> Language Class Initialized
INFO - 2021-12-10 06:32:42 --> Loader Class Initialized
INFO - 2021-12-10 06:32:42 --> Helper loaded: url_helper
INFO - 2021-12-10 06:32:42 --> Helper loaded: form_helper
INFO - 2021-12-10 06:32:42 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:32:42 --> Helper loaded: language_helper
INFO - 2021-12-10 06:32:42 --> Helper loaded: file_helper
INFO - 2021-12-10 06:32:42 --> Helper loaded: date_helper
INFO - 2021-12-10 06:32:42 --> Database Driver Class Initialized
INFO - 2021-12-10 06:32:42 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:32:42 --> Parser Class Initialized
INFO - 2021-12-10 06:32:42 --> Model Class Initialized
INFO - 2021-12-10 06:32:42 --> Model Class Initialized
INFO - 2021-12-10 06:32:42 --> Controller Class Initialized
INFO - 2021-12-10 06:32:42 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:32:42 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:32:42 --> Could not find the language line "today"
INFO - 2021-12-10 06:32:42 --> Model Class Initialized
INFO - 2021-12-10 06:32:42 --> Helper loaded: text_helper
INFO - 2021-12-10 06:32:42 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:32:42 --> Form Validation Class Initialized
DEBUG - 2021-12-10 06:32:42 --> Zend Class Initialized
DEBUG - 2021-12-10 06:32:42 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 06:32:42 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 06:32:42 --> Final output sent to browser
DEBUG - 2021-12-10 06:32:42 --> Total execution time: 0.6694
INFO - 2021-12-10 06:32:47 --> Config Class Initialized
INFO - 2021-12-10 06:32:47 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:32:47 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:32:47 --> Utf8 Class Initialized
INFO - 2021-12-10 06:32:47 --> URI Class Initialized
INFO - 2021-12-10 06:32:47 --> Router Class Initialized
INFO - 2021-12-10 06:32:47 --> Output Class Initialized
INFO - 2021-12-10 06:32:47 --> Security Class Initialized
INFO - 2021-12-10 06:32:47 --> CRSF cookie sent
DEBUG - 2021-12-10 06:32:47 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:32:47 --> Input Class Initialized
INFO - 2021-12-10 06:32:47 --> Language Class Initialized
INFO - 2021-12-10 06:32:47 --> Loader Class Initialized
INFO - 2021-12-10 06:32:47 --> Helper loaded: url_helper
INFO - 2021-12-10 06:32:47 --> Helper loaded: form_helper
INFO - 2021-12-10 06:32:47 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:32:47 --> Helper loaded: language_helper
INFO - 2021-12-10 06:32:47 --> Helper loaded: file_helper
INFO - 2021-12-10 06:32:47 --> Helper loaded: date_helper
INFO - 2021-12-10 06:32:47 --> Database Driver Class Initialized
INFO - 2021-12-10 06:32:47 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:32:47 --> Parser Class Initialized
INFO - 2021-12-10 06:32:47 --> Model Class Initialized
INFO - 2021-12-10 06:32:47 --> Model Class Initialized
INFO - 2021-12-10 06:32:47 --> Controller Class Initialized
INFO - 2021-12-10 06:32:47 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:32:47 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:32:47 --> Could not find the language line "today"
INFO - 2021-12-10 06:32:47 --> Model Class Initialized
INFO - 2021-12-10 06:32:47 --> Helper loaded: text_helper
INFO - 2021-12-10 06:32:47 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:32:47 --> Form Validation Class Initialized
DEBUG - 2021-12-10 06:32:48 --> Zend Class Initialized
DEBUG - 2021-12-10 06:32:48 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 06:32:48 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 06:32:48 --> Final output sent to browser
DEBUG - 2021-12-10 06:32:48 --> Total execution time: 0.7890
INFO - 2021-12-10 06:33:15 --> Config Class Initialized
INFO - 2021-12-10 06:33:15 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:33:15 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:33:15 --> Utf8 Class Initialized
INFO - 2021-12-10 06:33:15 --> URI Class Initialized
INFO - 2021-12-10 06:33:15 --> Router Class Initialized
INFO - 2021-12-10 06:33:15 --> Output Class Initialized
INFO - 2021-12-10 06:33:15 --> Security Class Initialized
INFO - 2021-12-10 06:33:15 --> CRSF cookie sent
DEBUG - 2021-12-10 06:33:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:33:15 --> Input Class Initialized
INFO - 2021-12-10 06:33:15 --> Language Class Initialized
INFO - 2021-12-10 06:33:15 --> Loader Class Initialized
INFO - 2021-12-10 06:33:15 --> Helper loaded: url_helper
INFO - 2021-12-10 06:33:15 --> Helper loaded: form_helper
INFO - 2021-12-10 06:33:15 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:33:15 --> Helper loaded: language_helper
INFO - 2021-12-10 06:33:15 --> Helper loaded: file_helper
INFO - 2021-12-10 06:33:15 --> Helper loaded: date_helper
INFO - 2021-12-10 06:33:15 --> Database Driver Class Initialized
INFO - 2021-12-10 06:33:15 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:33:15 --> Parser Class Initialized
INFO - 2021-12-10 06:33:15 --> Model Class Initialized
INFO - 2021-12-10 06:33:15 --> Model Class Initialized
INFO - 2021-12-10 06:33:15 --> Controller Class Initialized
INFO - 2021-12-10 06:33:15 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:33:15 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:33:15 --> Could not find the language line "today"
INFO - 2021-12-10 06:33:15 --> Model Class Initialized
INFO - 2021-12-10 06:33:15 --> Helper loaded: text_helper
INFO - 2021-12-10 06:33:15 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:33:15 --> Form Validation Class Initialized
DEBUG - 2021-12-10 06:33:16 --> Zend Class Initialized
DEBUG - 2021-12-10 06:33:16 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 06:33:16 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 06:33:16 --> Final output sent to browser
DEBUG - 2021-12-10 06:33:16 --> Total execution time: 1.1131
INFO - 2021-12-10 06:33:22 --> Config Class Initialized
INFO - 2021-12-10 06:33:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:33:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:33:22 --> Utf8 Class Initialized
INFO - 2021-12-10 06:33:22 --> URI Class Initialized
INFO - 2021-12-10 06:33:22 --> Router Class Initialized
INFO - 2021-12-10 06:33:22 --> Output Class Initialized
INFO - 2021-12-10 06:33:22 --> Security Class Initialized
INFO - 2021-12-10 06:33:22 --> CRSF cookie sent
DEBUG - 2021-12-10 06:33:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:33:22 --> Input Class Initialized
INFO - 2021-12-10 06:33:22 --> Language Class Initialized
INFO - 2021-12-10 06:33:22 --> Loader Class Initialized
INFO - 2021-12-10 06:33:22 --> Helper loaded: url_helper
INFO - 2021-12-10 06:33:22 --> Helper loaded: form_helper
INFO - 2021-12-10 06:33:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:33:22 --> Helper loaded: language_helper
INFO - 2021-12-10 06:33:22 --> Helper loaded: file_helper
INFO - 2021-12-10 06:33:22 --> Helper loaded: date_helper
INFO - 2021-12-10 06:33:22 --> Database Driver Class Initialized
INFO - 2021-12-10 06:33:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:33:22 --> Parser Class Initialized
INFO - 2021-12-10 06:33:22 --> Model Class Initialized
INFO - 2021-12-10 06:33:22 --> Model Class Initialized
INFO - 2021-12-10 06:33:22 --> Controller Class Initialized
INFO - 2021-12-10 06:33:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:33:22 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:33:22 --> Could not find the language line "today"
INFO - 2021-12-10 06:33:22 --> Model Class Initialized
INFO - 2021-12-10 06:33:22 --> Helper loaded: text_helper
INFO - 2021-12-10 06:33:22 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:33:22 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:33:22 --> Could not find the language line "paid_amount"
ERROR - 2021-12-10 06:33:22 --> Could not find the language line "due_amount"
DEBUG - 2021-12-10 06:33:22 --> Zend Class Initialized
DEBUG - 2021-12-10 06:33:22 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 06:33:22 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 06:33:22 --> Final output sent to browser
DEBUG - 2021-12-10 06:33:22 --> Total execution time: 0.7593
INFO - 2021-12-10 06:33:44 --> Config Class Initialized
INFO - 2021-12-10 06:33:44 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:33:44 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:33:44 --> Utf8 Class Initialized
INFO - 2021-12-10 06:33:44 --> URI Class Initialized
INFO - 2021-12-10 06:33:44 --> Router Class Initialized
INFO - 2021-12-10 06:33:44 --> Output Class Initialized
INFO - 2021-12-10 06:33:44 --> Security Class Initialized
INFO - 2021-12-10 06:33:44 --> CRSF cookie sent
DEBUG - 2021-12-10 06:33:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:33:44 --> Input Class Initialized
INFO - 2021-12-10 06:33:44 --> Language Class Initialized
INFO - 2021-12-10 06:33:44 --> Loader Class Initialized
INFO - 2021-12-10 06:33:44 --> Helper loaded: url_helper
INFO - 2021-12-10 06:33:44 --> Helper loaded: form_helper
INFO - 2021-12-10 06:33:44 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:33:44 --> Helper loaded: language_helper
INFO - 2021-12-10 06:33:45 --> Helper loaded: file_helper
INFO - 2021-12-10 06:33:45 --> Helper loaded: date_helper
INFO - 2021-12-10 06:33:45 --> Database Driver Class Initialized
INFO - 2021-12-10 06:33:45 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:33:45 --> Parser Class Initialized
INFO - 2021-12-10 06:33:45 --> Model Class Initialized
INFO - 2021-12-10 06:33:45 --> Model Class Initialized
INFO - 2021-12-10 06:33:45 --> Controller Class Initialized
INFO - 2021-12-10 06:33:45 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:33:45 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:33:45 --> Could not find the language line "today"
INFO - 2021-12-10 06:33:45 --> Model Class Initialized
INFO - 2021-12-10 06:33:45 --> Helper loaded: text_helper
INFO - 2021-12-10 06:33:45 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:33:45 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:33:45 --> Could not find the language line "paid_amount"
ERROR - 2021-12-10 06:33:45 --> Could not find the language line "due_amount"
DEBUG - 2021-12-10 06:33:45 --> Zend Class Initialized
DEBUG - 2021-12-10 06:33:45 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 06:33:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 06:33:45 --> Final output sent to browser
DEBUG - 2021-12-10 06:33:45 --> Total execution time: 0.7028
INFO - 2021-12-10 06:33:54 --> Config Class Initialized
INFO - 2021-12-10 06:33:54 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:33:54 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:33:54 --> Utf8 Class Initialized
INFO - 2021-12-10 06:33:54 --> URI Class Initialized
INFO - 2021-12-10 06:33:54 --> Router Class Initialized
INFO - 2021-12-10 06:33:54 --> Output Class Initialized
INFO - 2021-12-10 06:33:54 --> Security Class Initialized
INFO - 2021-12-10 06:33:54 --> CRSF cookie sent
DEBUG - 2021-12-10 06:33:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:33:54 --> Input Class Initialized
INFO - 2021-12-10 06:33:54 --> Language Class Initialized
INFO - 2021-12-10 06:33:54 --> Loader Class Initialized
INFO - 2021-12-10 06:33:54 --> Helper loaded: url_helper
INFO - 2021-12-10 06:33:54 --> Helper loaded: form_helper
INFO - 2021-12-10 06:33:54 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:33:54 --> Helper loaded: language_helper
INFO - 2021-12-10 06:33:54 --> Helper loaded: file_helper
INFO - 2021-12-10 06:33:54 --> Helper loaded: date_helper
INFO - 2021-12-10 06:33:54 --> Database Driver Class Initialized
INFO - 2021-12-10 06:33:54 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:33:54 --> Parser Class Initialized
INFO - 2021-12-10 06:33:54 --> Model Class Initialized
INFO - 2021-12-10 06:33:54 --> Model Class Initialized
INFO - 2021-12-10 06:33:54 --> Controller Class Initialized
INFO - 2021-12-10 06:33:54 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:33:54 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:33:54 --> Could not find the language line "today"
INFO - 2021-12-10 06:33:54 --> Model Class Initialized
INFO - 2021-12-10 06:33:54 --> Helper loaded: text_helper
INFO - 2021-12-10 06:33:54 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:33:54 --> Form Validation Class Initialized
DEBUG - 2021-12-10 06:33:54 --> Zend Class Initialized
DEBUG - 2021-12-10 06:33:54 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 06:33:55 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 06:33:55 --> Final output sent to browser
DEBUG - 2021-12-10 06:33:55 --> Total execution time: 0.7876
INFO - 2021-12-10 06:34:09 --> Config Class Initialized
INFO - 2021-12-10 06:34:09 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:34:09 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:34:09 --> Utf8 Class Initialized
INFO - 2021-12-10 06:34:09 --> URI Class Initialized
INFO - 2021-12-10 06:34:09 --> Router Class Initialized
INFO - 2021-12-10 06:34:09 --> Output Class Initialized
INFO - 2021-12-10 06:34:09 --> Security Class Initialized
INFO - 2021-12-10 06:34:09 --> CRSF cookie sent
DEBUG - 2021-12-10 06:34:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:34:09 --> Input Class Initialized
INFO - 2021-12-10 06:34:09 --> Language Class Initialized
INFO - 2021-12-10 06:34:09 --> Loader Class Initialized
INFO - 2021-12-10 06:34:09 --> Helper loaded: url_helper
INFO - 2021-12-10 06:34:09 --> Helper loaded: form_helper
INFO - 2021-12-10 06:34:09 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:34:09 --> Helper loaded: language_helper
INFO - 2021-12-10 06:34:09 --> Helper loaded: file_helper
INFO - 2021-12-10 06:34:09 --> Helper loaded: date_helper
INFO - 2021-12-10 06:34:09 --> Database Driver Class Initialized
INFO - 2021-12-10 06:34:09 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:34:09 --> Parser Class Initialized
INFO - 2021-12-10 06:34:09 --> Model Class Initialized
INFO - 2021-12-10 06:34:09 --> Model Class Initialized
INFO - 2021-12-10 06:34:09 --> Controller Class Initialized
INFO - 2021-12-10 06:34:09 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:34:09 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:34:09 --> Could not find the language line "today"
INFO - 2021-12-10 06:34:09 --> Model Class Initialized
INFO - 2021-12-10 06:34:09 --> Helper loaded: text_helper
INFO - 2021-12-10 06:34:09 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:34:09 --> Form Validation Class Initialized
ERROR - 2021-12-10 06:34:09 --> Could not find the language line "Cheque"
DEBUG - 2021-12-10 06:34:09 --> Zend Class Initialized
DEBUG - 2021-12-10 06:34:09 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 06:34:09 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 06:34:09 --> Final output sent to browser
DEBUG - 2021-12-10 06:34:09 --> Total execution time: 0.6867
INFO - 2021-12-10 06:34:22 --> Config Class Initialized
INFO - 2021-12-10 06:34:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:34:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:34:22 --> Utf8 Class Initialized
INFO - 2021-12-10 06:34:22 --> URI Class Initialized
INFO - 2021-12-10 06:34:22 --> Router Class Initialized
INFO - 2021-12-10 06:34:22 --> Output Class Initialized
INFO - 2021-12-10 06:34:22 --> Security Class Initialized
INFO - 2021-12-10 06:34:22 --> CRSF cookie sent
INFO - 2021-12-10 06:34:22 --> CSRF token verified
DEBUG - 2021-12-10 06:34:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:34:22 --> Input Class Initialized
INFO - 2021-12-10 06:34:22 --> Language Class Initialized
INFO - 2021-12-10 06:34:22 --> Loader Class Initialized
INFO - 2021-12-10 06:34:22 --> Helper loaded: url_helper
INFO - 2021-12-10 06:34:22 --> Helper loaded: form_helper
INFO - 2021-12-10 06:34:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:34:22 --> Helper loaded: language_helper
INFO - 2021-12-10 06:34:22 --> Helper loaded: file_helper
INFO - 2021-12-10 06:34:22 --> Helper loaded: date_helper
INFO - 2021-12-10 06:34:22 --> Database Driver Class Initialized
INFO - 2021-12-10 06:34:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:34:22 --> Parser Class Initialized
INFO - 2021-12-10 06:34:22 --> Model Class Initialized
INFO - 2021-12-10 06:34:22 --> Model Class Initialized
INFO - 2021-12-10 06:34:22 --> Controller Class Initialized
INFO - 2021-12-10 06:34:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:34:22 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:34:22 --> Could not find the language line "today"
INFO - 2021-12-10 06:34:22 --> Model Class Initialized
INFO - 2021-12-10 06:34:22 --> Helper loaded: text_helper
INFO - 2021-12-10 06:34:22 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:34:22 --> Form Validation Class Initialized
INFO - 2021-12-10 06:34:22 --> Final output sent to browser
DEBUG - 2021-12-10 06:34:22 --> Total execution time: 0.2244
INFO - 2021-12-10 06:34:24 --> Config Class Initialized
INFO - 2021-12-10 06:34:24 --> Hooks Class Initialized
DEBUG - 2021-12-10 06:34:24 --> UTF-8 Support Enabled
INFO - 2021-12-10 06:34:24 --> Utf8 Class Initialized
INFO - 2021-12-10 06:34:24 --> URI Class Initialized
INFO - 2021-12-10 06:34:24 --> Router Class Initialized
INFO - 2021-12-10 06:34:24 --> Output Class Initialized
INFO - 2021-12-10 06:34:24 --> Security Class Initialized
INFO - 2021-12-10 06:34:24 --> CRSF cookie sent
INFO - 2021-12-10 06:34:24 --> CSRF token verified
DEBUG - 2021-12-10 06:34:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 06:34:24 --> Input Class Initialized
INFO - 2021-12-10 06:34:24 --> Language Class Initialized
INFO - 2021-12-10 06:34:25 --> Loader Class Initialized
INFO - 2021-12-10 06:34:25 --> Helper loaded: url_helper
INFO - 2021-12-10 06:34:25 --> Helper loaded: form_helper
INFO - 2021-12-10 06:34:25 --> Helper loaded: cookie_helper
INFO - 2021-12-10 06:34:25 --> Helper loaded: language_helper
INFO - 2021-12-10 06:34:25 --> Helper loaded: file_helper
INFO - 2021-12-10 06:34:25 --> Helper loaded: date_helper
INFO - 2021-12-10 06:34:25 --> Database Driver Class Initialized
INFO - 2021-12-10 06:34:25 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 06:34:25 --> Parser Class Initialized
INFO - 2021-12-10 06:34:25 --> Model Class Initialized
INFO - 2021-12-10 06:34:25 --> Model Class Initialized
INFO - 2021-12-10 06:34:25 --> Controller Class Initialized
INFO - 2021-12-10 06:34:25 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 06:34:25 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 06:34:25 --> Could not find the language line "today"
INFO - 2021-12-10 06:34:25 --> Model Class Initialized
INFO - 2021-12-10 06:34:25 --> Helper loaded: text_helper
INFO - 2021-12-10 06:34:25 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 06:34:25 --> Form Validation Class Initialized
INFO - 2021-12-10 06:34:25 --> Final output sent to browser
DEBUG - 2021-12-10 06:34:25 --> Total execution time: 0.2646
