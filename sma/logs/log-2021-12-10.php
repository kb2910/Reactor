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
INFO - 2021-12-10 11:57:03 --> Config Class Initialized
INFO - 2021-12-10 11:57:03 --> Hooks Class Initialized
DEBUG - 2021-12-10 11:57:03 --> UTF-8 Support Enabled
INFO - 2021-12-10 11:57:03 --> Utf8 Class Initialized
INFO - 2021-12-10 11:57:03 --> URI Class Initialized
INFO - 2021-12-10 11:57:03 --> Router Class Initialized
INFO - 2021-12-10 11:57:03 --> Output Class Initialized
INFO - 2021-12-10 11:57:03 --> Security Class Initialized
INFO - 2021-12-10 11:57:03 --> CRSF cookie sent
DEBUG - 2021-12-10 11:57:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 11:57:03 --> Input Class Initialized
INFO - 2021-12-10 11:57:03 --> Language Class Initialized
INFO - 2021-12-10 11:57:03 --> Loader Class Initialized
INFO - 2021-12-10 11:57:03 --> Helper loaded: url_helper
INFO - 2021-12-10 11:57:03 --> Helper loaded: form_helper
INFO - 2021-12-10 11:57:03 --> Helper loaded: cookie_helper
INFO - 2021-12-10 11:57:03 --> Helper loaded: language_helper
INFO - 2021-12-10 11:57:03 --> Helper loaded: file_helper
INFO - 2021-12-10 11:57:03 --> Helper loaded: date_helper
INFO - 2021-12-10 11:57:03 --> Database Driver Class Initialized
INFO - 2021-12-10 11:57:03 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 11:57:03 --> Parser Class Initialized
INFO - 2021-12-10 11:57:03 --> Model Class Initialized
INFO - 2021-12-10 11:57:03 --> Model Class Initialized
INFO - 2021-12-10 11:57:03 --> Controller Class Initialized
INFO - 2021-12-10 11:57:03 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 11:57:03 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 11:57:03 --> Could not find the language line "today"
INFO - 2021-12-10 11:57:03 --> Model Class Initialized
INFO - 2021-12-10 11:57:03 --> Helper loaded: text_helper
INFO - 2021-12-10 11:57:03 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 11:57:03 --> Form Validation Class Initialized
INFO - 2021-12-10 11:57:03 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 11:57:03 --> Pagination Class Initialized
ERROR - 2021-12-10 11:57:03 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 11:57:03 --> Could not find the language line "order"
ERROR - 2021-12-10 11:57:03 --> Could not find the language line "bill"
INFO - 2021-12-10 11:57:03 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 11:57:03 --> Final output sent to browser
DEBUG - 2021-12-10 11:57:03 --> Total execution time: 0.3045
INFO - 2021-12-10 11:57:03 --> Config Class Initialized
INFO - 2021-12-10 11:57:04 --> Hooks Class Initialized
DEBUG - 2021-12-10 11:57:04 --> UTF-8 Support Enabled
INFO - 2021-12-10 11:57:04 --> Utf8 Class Initialized
INFO - 2021-12-10 11:57:04 --> URI Class Initialized
INFO - 2021-12-10 11:57:04 --> Router Class Initialized
INFO - 2021-12-10 11:57:04 --> Output Class Initialized
INFO - 2021-12-10 11:57:04 --> Security Class Initialized
INFO - 2021-12-10 11:57:04 --> CRSF cookie sent
DEBUG - 2021-12-10 11:57:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 11:57:04 --> Input Class Initialized
INFO - 2021-12-10 11:57:04 --> Language Class Initialized
INFO - 2021-12-10 11:57:04 --> Loader Class Initialized
INFO - 2021-12-10 11:57:04 --> Helper loaded: url_helper
INFO - 2021-12-10 11:57:04 --> Helper loaded: form_helper
INFO - 2021-12-10 11:57:04 --> Helper loaded: cookie_helper
INFO - 2021-12-10 11:57:04 --> Helper loaded: language_helper
INFO - 2021-12-10 11:57:04 --> Helper loaded: file_helper
INFO - 2021-12-10 11:57:04 --> Helper loaded: date_helper
INFO - 2021-12-10 11:57:04 --> Database Driver Class Initialized
INFO - 2021-12-10 11:57:04 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 11:57:04 --> Parser Class Initialized
INFO - 2021-12-10 11:57:04 --> Model Class Initialized
INFO - 2021-12-10 11:57:04 --> Model Class Initialized
INFO - 2021-12-10 11:57:04 --> Controller Class Initialized
INFO - 2021-12-10 11:57:04 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 11:57:04 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 11:57:04 --> Could not find the language line "today"
INFO - 2021-12-10 11:57:04 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 11:57:04 --> Form Validation Class Initialized
INFO - 2021-12-10 11:57:04 --> Model Class Initialized
INFO - 2021-12-10 11:57:04 --> Final output sent to browser
DEBUG - 2021-12-10 11:57:04 --> Total execution time: 0.1758
INFO - 2021-12-10 11:57:32 --> Config Class Initialized
INFO - 2021-12-10 11:57:32 --> Hooks Class Initialized
DEBUG - 2021-12-10 11:57:32 --> UTF-8 Support Enabled
INFO - 2021-12-10 11:57:32 --> Utf8 Class Initialized
INFO - 2021-12-10 11:57:32 --> URI Class Initialized
INFO - 2021-12-10 11:57:33 --> Router Class Initialized
INFO - 2021-12-10 11:57:33 --> Output Class Initialized
INFO - 2021-12-10 11:57:33 --> Security Class Initialized
INFO - 2021-12-10 11:57:33 --> CRSF cookie sent
DEBUG - 2021-12-10 11:57:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 11:57:33 --> Input Class Initialized
INFO - 2021-12-10 11:57:33 --> Language Class Initialized
INFO - 2021-12-10 11:57:33 --> Loader Class Initialized
INFO - 2021-12-10 11:57:33 --> Helper loaded: url_helper
INFO - 2021-12-10 11:57:33 --> Helper loaded: form_helper
INFO - 2021-12-10 11:57:33 --> Helper loaded: cookie_helper
INFO - 2021-12-10 11:57:33 --> Helper loaded: language_helper
INFO - 2021-12-10 11:57:33 --> Helper loaded: file_helper
INFO - 2021-12-10 11:57:33 --> Helper loaded: date_helper
INFO - 2021-12-10 11:57:33 --> Database Driver Class Initialized
INFO - 2021-12-10 11:57:33 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 11:57:33 --> Parser Class Initialized
INFO - 2021-12-10 11:57:33 --> Model Class Initialized
INFO - 2021-12-10 11:57:33 --> Model Class Initialized
INFO - 2021-12-10 11:57:33 --> Controller Class Initialized
INFO - 2021-12-10 11:57:33 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 11:57:33 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 11:57:33 --> Could not find the language line "today"
INFO - 2021-12-10 11:57:33 --> Model Class Initialized
INFO - 2021-12-10 11:57:33 --> Helper loaded: text_helper
INFO - 2021-12-10 11:57:33 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 11:57:33 --> Form Validation Class Initialized
INFO - 2021-12-10 11:57:33 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 11:57:33 --> Final output sent to browser
DEBUG - 2021-12-10 11:57:33 --> Total execution time: 0.3656
INFO - 2021-12-10 11:57:37 --> Config Class Initialized
INFO - 2021-12-10 11:57:37 --> Hooks Class Initialized
DEBUG - 2021-12-10 11:57:37 --> UTF-8 Support Enabled
INFO - 2021-12-10 11:57:37 --> Utf8 Class Initialized
INFO - 2021-12-10 11:57:37 --> URI Class Initialized
INFO - 2021-12-10 11:57:37 --> Router Class Initialized
INFO - 2021-12-10 11:57:37 --> Output Class Initialized
INFO - 2021-12-10 11:57:37 --> Security Class Initialized
INFO - 2021-12-10 11:57:37 --> CRSF cookie sent
INFO - 2021-12-10 11:57:37 --> CSRF token verified
DEBUG - 2021-12-10 11:57:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 11:57:37 --> Input Class Initialized
INFO - 2021-12-10 11:57:37 --> Language Class Initialized
INFO - 2021-12-10 11:57:37 --> Loader Class Initialized
INFO - 2021-12-10 11:57:37 --> Helper loaded: url_helper
INFO - 2021-12-10 11:57:37 --> Helper loaded: form_helper
INFO - 2021-12-10 11:57:37 --> Helper loaded: cookie_helper
INFO - 2021-12-10 11:57:37 --> Helper loaded: language_helper
INFO - 2021-12-10 11:57:37 --> Helper loaded: file_helper
INFO - 2021-12-10 11:57:37 --> Helper loaded: date_helper
INFO - 2021-12-10 11:57:37 --> Database Driver Class Initialized
INFO - 2021-12-10 11:57:37 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 11:57:37 --> Parser Class Initialized
INFO - 2021-12-10 11:57:37 --> Model Class Initialized
INFO - 2021-12-10 11:57:37 --> Model Class Initialized
INFO - 2021-12-10 11:57:37 --> Controller Class Initialized
INFO - 2021-12-10 11:57:37 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 11:57:37 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 11:57:37 --> Could not find the language line "today"
INFO - 2021-12-10 11:57:37 --> Model Class Initialized
INFO - 2021-12-10 11:57:37 --> Helper loaded: text_helper
INFO - 2021-12-10 11:57:37 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 11:57:37 --> Form Validation Class Initialized
INFO - 2021-12-10 11:57:37 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 11:57:37 --> Config Class Initialized
INFO - 2021-12-10 11:57:37 --> Hooks Class Initialized
DEBUG - 2021-12-10 11:57:37 --> UTF-8 Support Enabled
INFO - 2021-12-10 11:57:37 --> Utf8 Class Initialized
INFO - 2021-12-10 11:57:37 --> URI Class Initialized
INFO - 2021-12-10 11:57:37 --> Router Class Initialized
INFO - 2021-12-10 11:57:37 --> Output Class Initialized
INFO - 2021-12-10 11:57:37 --> Security Class Initialized
INFO - 2021-12-10 11:57:37 --> CRSF cookie sent
DEBUG - 2021-12-10 11:57:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 11:57:37 --> Input Class Initialized
INFO - 2021-12-10 11:57:37 --> Language Class Initialized
INFO - 2021-12-10 11:57:37 --> Loader Class Initialized
INFO - 2021-12-10 11:57:37 --> Helper loaded: url_helper
INFO - 2021-12-10 11:57:37 --> Helper loaded: form_helper
INFO - 2021-12-10 11:57:37 --> Helper loaded: cookie_helper
INFO - 2021-12-10 11:57:37 --> Helper loaded: language_helper
INFO - 2021-12-10 11:57:37 --> Helper loaded: file_helper
INFO - 2021-12-10 11:57:37 --> Helper loaded: date_helper
INFO - 2021-12-10 11:57:37 --> Database Driver Class Initialized
INFO - 2021-12-10 11:57:37 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 11:57:37 --> Parser Class Initialized
INFO - 2021-12-10 11:57:38 --> Model Class Initialized
INFO - 2021-12-10 11:57:38 --> Model Class Initialized
INFO - 2021-12-10 11:57:38 --> Controller Class Initialized
INFO - 2021-12-10 11:57:38 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 11:57:38 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 11:57:38 --> Could not find the language line "today"
INFO - 2021-12-10 11:57:38 --> Form Validation Class Initialized
INFO - 2021-12-10 11:57:38 --> Model Class Initialized
ERROR - 2021-12-10 11:57:38 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 11:57:38 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 11:57:38 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 11:57:38 --> Could not find the language line "backups"
INFO - 2021-12-10 11:57:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 11:57:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/dashboard.php
ERROR - 2021-12-10 11:57:38 --> Could not find the language line "ordered"
ERROR - 2021-12-10 11:57:38 --> Could not find the language line "due"
ERROR - 2021-12-10 11:57:38 --> Could not find the language line "transferring"
INFO - 2021-12-10 11:57:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 11:57:38 --> Final output sent to browser
DEBUG - 2021-12-10 11:57:38 --> Total execution time: 0.2178
INFO - 2021-12-10 12:01:22 --> Config Class Initialized
INFO - 2021-12-10 12:01:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:01:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:01:22 --> Utf8 Class Initialized
INFO - 2021-12-10 12:01:22 --> URI Class Initialized
INFO - 2021-12-10 12:01:22 --> Router Class Initialized
INFO - 2021-12-10 12:01:22 --> Output Class Initialized
INFO - 2021-12-10 12:01:22 --> Security Class Initialized
INFO - 2021-12-10 12:01:22 --> CRSF cookie sent
DEBUG - 2021-12-10 12:01:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:01:22 --> Input Class Initialized
INFO - 2021-12-10 12:01:22 --> Language Class Initialized
INFO - 2021-12-10 12:01:22 --> Loader Class Initialized
INFO - 2021-12-10 12:01:22 --> Helper loaded: url_helper
INFO - 2021-12-10 12:01:22 --> Helper loaded: form_helper
INFO - 2021-12-10 12:01:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:01:22 --> Helper loaded: language_helper
INFO - 2021-12-10 12:01:22 --> Helper loaded: file_helper
INFO - 2021-12-10 12:01:22 --> Helper loaded: date_helper
INFO - 2021-12-10 12:01:22 --> Database Driver Class Initialized
INFO - 2021-12-10 12:01:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:01:22 --> Parser Class Initialized
INFO - 2021-12-10 12:01:22 --> Model Class Initialized
INFO - 2021-12-10 12:01:22 --> Model Class Initialized
INFO - 2021-12-10 12:01:22 --> Controller Class Initialized
INFO - 2021-12-10 12:01:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:01:22 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:01:22 --> Could not find the language line "today"
INFO - 2021-12-10 12:01:22 --> Model Class Initialized
INFO - 2021-12-10 12:01:22 --> Helper loaded: text_helper
INFO - 2021-12-10 12:01:22 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:01:22 --> Form Validation Class Initialized
INFO - 2021-12-10 12:01:22 --> Config Class Initialized
INFO - 2021-12-10 12:01:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:01:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:01:22 --> Utf8 Class Initialized
INFO - 2021-12-10 12:01:22 --> URI Class Initialized
INFO - 2021-12-10 12:01:22 --> Router Class Initialized
INFO - 2021-12-10 12:01:22 --> Output Class Initialized
INFO - 2021-12-10 12:01:22 --> Security Class Initialized
INFO - 2021-12-10 12:01:22 --> CRSF cookie sent
DEBUG - 2021-12-10 12:01:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:01:22 --> Input Class Initialized
INFO - 2021-12-10 12:01:22 --> Language Class Initialized
INFO - 2021-12-10 12:01:22 --> Loader Class Initialized
INFO - 2021-12-10 12:01:22 --> Helper loaded: url_helper
INFO - 2021-12-10 12:01:22 --> Helper loaded: form_helper
INFO - 2021-12-10 12:01:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:01:22 --> Helper loaded: language_helper
INFO - 2021-12-10 12:01:22 --> Helper loaded: file_helper
INFO - 2021-12-10 12:01:22 --> Helper loaded: date_helper
INFO - 2021-12-10 12:01:22 --> Database Driver Class Initialized
INFO - 2021-12-10 12:01:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:01:22 --> Parser Class Initialized
INFO - 2021-12-10 12:01:22 --> Model Class Initialized
INFO - 2021-12-10 12:01:22 --> Model Class Initialized
INFO - 2021-12-10 12:01:22 --> Controller Class Initialized
INFO - 2021-12-10 12:01:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:01:22 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:01:22 --> Could not find the language line "today"
INFO - 2021-12-10 12:01:22 --> Model Class Initialized
INFO - 2021-12-10 12:01:22 --> Helper loaded: text_helper
INFO - 2021-12-10 12:01:22 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:01:22 --> Form Validation Class Initialized
ERROR - 2021-12-10 12:01:22 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:01:22 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:01:22 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:01:22 --> Could not find the language line "backups"
INFO - 2021-12-10 12:01:22 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:01:22 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 12:01:22 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:01:22 --> Could not find the language line "due"
ERROR - 2021-12-10 12:01:22 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:01:22 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:01:22 --> Final output sent to browser
DEBUG - 2021-12-10 12:01:22 --> Total execution time: 0.1943
INFO - 2021-12-10 12:01:28 --> Config Class Initialized
INFO - 2021-12-10 12:01:28 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:01:28 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:01:28 --> Utf8 Class Initialized
INFO - 2021-12-10 12:01:28 --> URI Class Initialized
INFO - 2021-12-10 12:01:28 --> Router Class Initialized
INFO - 2021-12-10 12:01:28 --> Output Class Initialized
INFO - 2021-12-10 12:01:28 --> Security Class Initialized
INFO - 2021-12-10 12:01:28 --> CRSF cookie sent
INFO - 2021-12-10 12:01:28 --> CSRF token verified
DEBUG - 2021-12-10 12:01:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:01:28 --> Input Class Initialized
INFO - 2021-12-10 12:01:28 --> Language Class Initialized
INFO - 2021-12-10 12:01:28 --> Loader Class Initialized
INFO - 2021-12-10 12:01:28 --> Helper loaded: url_helper
INFO - 2021-12-10 12:01:28 --> Helper loaded: form_helper
INFO - 2021-12-10 12:01:28 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:01:28 --> Helper loaded: language_helper
INFO - 2021-12-10 12:01:28 --> Helper loaded: file_helper
INFO - 2021-12-10 12:01:28 --> Helper loaded: date_helper
INFO - 2021-12-10 12:01:28 --> Database Driver Class Initialized
INFO - 2021-12-10 12:01:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:01:28 --> Parser Class Initialized
INFO - 2021-12-10 12:01:28 --> Model Class Initialized
INFO - 2021-12-10 12:01:28 --> Model Class Initialized
INFO - 2021-12-10 12:01:28 --> Controller Class Initialized
INFO - 2021-12-10 12:01:28 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:01:28 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:01:28 --> Could not find the language line "today"
INFO - 2021-12-10 12:01:28 --> Model Class Initialized
INFO - 2021-12-10 12:01:28 --> Helper loaded: text_helper
INFO - 2021-12-10 12:01:28 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:01:28 --> Form Validation Class Initialized
INFO - 2021-12-10 12:01:28 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 12:01:28 --> Config Class Initialized
INFO - 2021-12-10 12:01:28 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:01:28 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:01:28 --> Utf8 Class Initialized
INFO - 2021-12-10 12:01:28 --> URI Class Initialized
INFO - 2021-12-10 12:01:28 --> Router Class Initialized
INFO - 2021-12-10 12:01:28 --> Output Class Initialized
INFO - 2021-12-10 12:01:28 --> Security Class Initialized
INFO - 2021-12-10 12:01:28 --> CRSF cookie sent
DEBUG - 2021-12-10 12:01:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:01:28 --> Input Class Initialized
INFO - 2021-12-10 12:01:28 --> Language Class Initialized
INFO - 2021-12-10 12:01:28 --> Loader Class Initialized
INFO - 2021-12-10 12:01:28 --> Helper loaded: url_helper
INFO - 2021-12-10 12:01:28 --> Helper loaded: form_helper
INFO - 2021-12-10 12:01:28 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:01:28 --> Helper loaded: language_helper
INFO - 2021-12-10 12:01:28 --> Helper loaded: file_helper
INFO - 2021-12-10 12:01:28 --> Helper loaded: date_helper
INFO - 2021-12-10 12:01:28 --> Database Driver Class Initialized
INFO - 2021-12-10 12:01:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:01:28 --> Parser Class Initialized
INFO - 2021-12-10 12:01:28 --> Model Class Initialized
INFO - 2021-12-10 12:01:28 --> Model Class Initialized
INFO - 2021-12-10 12:01:28 --> Controller Class Initialized
INFO - 2021-12-10 12:01:28 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:01:28 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:01:28 --> Could not find the language line "today"
INFO - 2021-12-10 12:01:28 --> Model Class Initialized
INFO - 2021-12-10 12:01:28 --> Helper loaded: text_helper
INFO - 2021-12-10 12:01:28 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:01:28 --> Form Validation Class Initialized
INFO - 2021-12-10 12:01:28 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 12:01:28 --> Pagination Class Initialized
ERROR - 2021-12-10 12:01:28 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:01:28 --> Could not find the language line "order"
ERROR - 2021-12-10 12:01:28 --> Could not find the language line "bill"
INFO - 2021-12-10 12:01:28 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 12:01:28 --> Final output sent to browser
DEBUG - 2021-12-10 12:01:28 --> Total execution time: 0.1863
INFO - 2021-12-10 12:01:29 --> Config Class Initialized
INFO - 2021-12-10 12:01:29 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:01:29 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:01:29 --> Utf8 Class Initialized
INFO - 2021-12-10 12:01:29 --> URI Class Initialized
INFO - 2021-12-10 12:01:29 --> Router Class Initialized
INFO - 2021-12-10 12:01:29 --> Output Class Initialized
INFO - 2021-12-10 12:01:29 --> Security Class Initialized
INFO - 2021-12-10 12:01:29 --> CRSF cookie sent
DEBUG - 2021-12-10 12:01:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:01:29 --> Input Class Initialized
INFO - 2021-12-10 12:01:29 --> Language Class Initialized
INFO - 2021-12-10 12:01:29 --> Loader Class Initialized
INFO - 2021-12-10 12:01:29 --> Helper loaded: url_helper
INFO - 2021-12-10 12:01:29 --> Helper loaded: form_helper
INFO - 2021-12-10 12:01:29 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:01:29 --> Helper loaded: language_helper
INFO - 2021-12-10 12:01:29 --> Helper loaded: file_helper
INFO - 2021-12-10 12:01:29 --> Helper loaded: date_helper
INFO - 2021-12-10 12:01:29 --> Database Driver Class Initialized
INFO - 2021-12-10 12:01:29 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:01:29 --> Parser Class Initialized
INFO - 2021-12-10 12:01:29 --> Model Class Initialized
INFO - 2021-12-10 12:01:29 --> Model Class Initialized
INFO - 2021-12-10 12:01:29 --> Controller Class Initialized
INFO - 2021-12-10 12:01:29 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:01:29 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:01:29 --> Could not find the language line "today"
INFO - 2021-12-10 12:01:29 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:01:29 --> Form Validation Class Initialized
INFO - 2021-12-10 12:01:29 --> Model Class Initialized
INFO - 2021-12-10 12:01:29 --> Final output sent to browser
DEBUG - 2021-12-10 12:01:29 --> Total execution time: 0.1804
INFO - 2021-12-10 12:01:35 --> Config Class Initialized
INFO - 2021-12-10 12:01:35 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:01:35 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:01:35 --> Utf8 Class Initialized
INFO - 2021-12-10 12:01:35 --> URI Class Initialized
INFO - 2021-12-10 12:01:35 --> Router Class Initialized
INFO - 2021-12-10 12:01:35 --> Output Class Initialized
INFO - 2021-12-10 12:01:35 --> Security Class Initialized
INFO - 2021-12-10 12:01:35 --> CRSF cookie sent
DEBUG - 2021-12-10 12:01:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:01:35 --> Input Class Initialized
INFO - 2021-12-10 12:01:35 --> Language Class Initialized
INFO - 2021-12-10 12:01:35 --> Loader Class Initialized
INFO - 2021-12-10 12:01:35 --> Helper loaded: url_helper
INFO - 2021-12-10 12:01:35 --> Helper loaded: form_helper
INFO - 2021-12-10 12:01:35 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:01:35 --> Helper loaded: language_helper
INFO - 2021-12-10 12:01:35 --> Helper loaded: file_helper
INFO - 2021-12-10 12:01:35 --> Helper loaded: date_helper
INFO - 2021-12-10 12:01:35 --> Database Driver Class Initialized
INFO - 2021-12-10 12:01:35 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:01:35 --> Parser Class Initialized
INFO - 2021-12-10 12:01:35 --> Model Class Initialized
INFO - 2021-12-10 12:01:35 --> Model Class Initialized
INFO - 2021-12-10 12:01:35 --> Controller Class Initialized
INFO - 2021-12-10 12:01:35 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:01:35 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:01:35 --> Could not find the language line "today"
INFO - 2021-12-10 12:01:35 --> Model Class Initialized
INFO - 2021-12-10 12:01:35 --> Helper loaded: text_helper
INFO - 2021-12-10 12:01:35 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:01:35 --> Form Validation Class Initialized
INFO - 2021-12-10 12:01:35 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 12:01:35 --> Final output sent to browser
DEBUG - 2021-12-10 12:01:35 --> Total execution time: 0.3594
INFO - 2021-12-10 12:03:34 --> Config Class Initialized
INFO - 2021-12-10 12:03:34 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:03:34 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:03:34 --> Utf8 Class Initialized
INFO - 2021-12-10 12:03:34 --> URI Class Initialized
INFO - 2021-12-10 12:03:34 --> Router Class Initialized
INFO - 2021-12-10 12:03:34 --> Output Class Initialized
INFO - 2021-12-10 12:03:34 --> Security Class Initialized
INFO - 2021-12-10 12:03:34 --> CRSF cookie sent
DEBUG - 2021-12-10 12:03:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:03:34 --> Input Class Initialized
INFO - 2021-12-10 12:03:34 --> Language Class Initialized
INFO - 2021-12-10 12:03:34 --> Loader Class Initialized
INFO - 2021-12-10 12:03:34 --> Helper loaded: url_helper
INFO - 2021-12-10 12:03:34 --> Helper loaded: form_helper
INFO - 2021-12-10 12:03:34 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:03:34 --> Helper loaded: language_helper
INFO - 2021-12-10 12:03:34 --> Helper loaded: file_helper
INFO - 2021-12-10 12:03:34 --> Helper loaded: date_helper
INFO - 2021-12-10 12:03:34 --> Database Driver Class Initialized
INFO - 2021-12-10 12:03:34 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:03:34 --> Parser Class Initialized
INFO - 2021-12-10 12:03:34 --> Model Class Initialized
INFO - 2021-12-10 12:03:34 --> Model Class Initialized
INFO - 2021-12-10 12:03:34 --> Controller Class Initialized
INFO - 2021-12-10 12:03:34 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:03:34 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:03:34 --> Could not find the language line "today"
INFO - 2021-12-10 12:03:34 --> Model Class Initialized
INFO - 2021-12-10 12:03:34 --> Helper loaded: text_helper
INFO - 2021-12-10 12:03:34 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:03:34 --> Form Validation Class Initialized
INFO - 2021-12-10 12:03:34 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 12:03:34 --> Pagination Class Initialized
ERROR - 2021-12-10 12:03:34 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:03:34 --> Could not find the language line "order"
ERROR - 2021-12-10 12:03:34 --> Could not find the language line "bill"
INFO - 2021-12-10 12:03:34 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 12:03:34 --> Final output sent to browser
DEBUG - 2021-12-10 12:03:34 --> Total execution time: 0.2651
INFO - 2021-12-10 12:03:34 --> Config Class Initialized
INFO - 2021-12-10 12:03:34 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:03:34 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:03:34 --> Utf8 Class Initialized
INFO - 2021-12-10 12:03:34 --> URI Class Initialized
INFO - 2021-12-10 12:03:34 --> Router Class Initialized
INFO - 2021-12-10 12:03:34 --> Output Class Initialized
INFO - 2021-12-10 12:03:34 --> Security Class Initialized
INFO - 2021-12-10 12:03:34 --> CRSF cookie sent
DEBUG - 2021-12-10 12:03:34 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:03:34 --> Input Class Initialized
INFO - 2021-12-10 12:03:34 --> Language Class Initialized
INFO - 2021-12-10 12:03:34 --> Loader Class Initialized
INFO - 2021-12-10 12:03:34 --> Helper loaded: url_helper
INFO - 2021-12-10 12:03:34 --> Helper loaded: form_helper
INFO - 2021-12-10 12:03:34 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:03:34 --> Helper loaded: language_helper
INFO - 2021-12-10 12:03:34 --> Helper loaded: file_helper
INFO - 2021-12-10 12:03:34 --> Helper loaded: date_helper
INFO - 2021-12-10 12:03:34 --> Database Driver Class Initialized
INFO - 2021-12-10 12:03:34 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:03:34 --> Parser Class Initialized
INFO - 2021-12-10 12:03:34 --> Model Class Initialized
INFO - 2021-12-10 12:03:34 --> Model Class Initialized
INFO - 2021-12-10 12:03:34 --> Controller Class Initialized
INFO - 2021-12-10 12:03:34 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:03:34 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:03:34 --> Could not find the language line "today"
INFO - 2021-12-10 12:03:34 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:03:34 --> Form Validation Class Initialized
INFO - 2021-12-10 12:03:34 --> Model Class Initialized
INFO - 2021-12-10 12:03:34 --> Final output sent to browser
DEBUG - 2021-12-10 12:03:34 --> Total execution time: 0.2424
INFO - 2021-12-10 12:03:36 --> Config Class Initialized
INFO - 2021-12-10 12:03:36 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:03:36 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:03:36 --> Utf8 Class Initialized
INFO - 2021-12-10 12:03:36 --> URI Class Initialized
INFO - 2021-12-10 12:03:36 --> Router Class Initialized
INFO - 2021-12-10 12:03:36 --> Output Class Initialized
INFO - 2021-12-10 12:03:36 --> Security Class Initialized
INFO - 2021-12-10 12:03:36 --> CRSF cookie sent
DEBUG - 2021-12-10 12:03:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:03:36 --> Input Class Initialized
INFO - 2021-12-10 12:03:36 --> Language Class Initialized
INFO - 2021-12-10 12:03:36 --> Loader Class Initialized
INFO - 2021-12-10 12:03:36 --> Helper loaded: url_helper
INFO - 2021-12-10 12:03:36 --> Helper loaded: form_helper
INFO - 2021-12-10 12:03:36 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:03:36 --> Helper loaded: language_helper
INFO - 2021-12-10 12:03:36 --> Helper loaded: file_helper
INFO - 2021-12-10 12:03:36 --> Helper loaded: date_helper
INFO - 2021-12-10 12:03:36 --> Database Driver Class Initialized
INFO - 2021-12-10 12:03:36 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:03:36 --> Parser Class Initialized
INFO - 2021-12-10 12:03:36 --> Model Class Initialized
INFO - 2021-12-10 12:03:36 --> Model Class Initialized
INFO - 2021-12-10 12:03:36 --> Controller Class Initialized
INFO - 2021-12-10 12:03:36 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:03:36 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:03:36 --> Could not find the language line "today"
INFO - 2021-12-10 12:03:36 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:03:36 --> Form Validation Class Initialized
INFO - 2021-12-10 12:03:36 --> Model Class Initialized
INFO - 2021-12-10 12:03:36 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/customers/add.php
INFO - 2021-12-10 12:03:36 --> Final output sent to browser
DEBUG - 2021-12-10 12:03:36 --> Total execution time: 0.3604
INFO - 2021-12-10 12:04:31 --> Config Class Initialized
INFO - 2021-12-10 12:04:31 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:04:31 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:04:31 --> Utf8 Class Initialized
INFO - 2021-12-10 12:04:31 --> URI Class Initialized
INFO - 2021-12-10 12:04:31 --> Router Class Initialized
INFO - 2021-12-10 12:04:31 --> Output Class Initialized
INFO - 2021-12-10 12:04:31 --> Security Class Initialized
INFO - 2021-12-10 12:04:31 --> CRSF cookie sent
DEBUG - 2021-12-10 12:04:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:04:31 --> Input Class Initialized
INFO - 2021-12-10 12:04:31 --> Language Class Initialized
INFO - 2021-12-10 12:04:31 --> Loader Class Initialized
INFO - 2021-12-10 12:04:31 --> Helper loaded: url_helper
INFO - 2021-12-10 12:04:31 --> Helper loaded: form_helper
INFO - 2021-12-10 12:04:31 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:04:31 --> Helper loaded: language_helper
INFO - 2021-12-10 12:04:31 --> Helper loaded: file_helper
INFO - 2021-12-10 12:04:31 --> Helper loaded: date_helper
INFO - 2021-12-10 12:04:31 --> Database Driver Class Initialized
INFO - 2021-12-10 12:04:31 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:04:31 --> Parser Class Initialized
INFO - 2021-12-10 12:04:31 --> Model Class Initialized
INFO - 2021-12-10 12:04:31 --> Model Class Initialized
INFO - 2021-12-10 12:04:31 --> Controller Class Initialized
INFO - 2021-12-10 12:04:31 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:04:31 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:04:31 --> Could not find the language line "today"
INFO - 2021-12-10 12:04:31 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:04:31 --> Form Validation Class Initialized
INFO - 2021-12-10 12:04:31 --> Model Class Initialized
INFO - 2021-12-10 12:04:31 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/customers/add.php
INFO - 2021-12-10 12:04:31 --> Final output sent to browser
DEBUG - 2021-12-10 12:04:31 --> Total execution time: 0.3253
INFO - 2021-12-10 12:04:49 --> Config Class Initialized
INFO - 2021-12-10 12:04:49 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:04:49 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:04:49 --> Utf8 Class Initialized
INFO - 2021-12-10 12:04:49 --> URI Class Initialized
INFO - 2021-12-10 12:04:49 --> Router Class Initialized
INFO - 2021-12-10 12:04:49 --> Output Class Initialized
INFO - 2021-12-10 12:04:49 --> Security Class Initialized
INFO - 2021-12-10 12:04:49 --> CRSF cookie sent
INFO - 2021-12-10 12:04:49 --> CSRF token verified
DEBUG - 2021-12-10 12:04:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:04:49 --> Input Class Initialized
INFO - 2021-12-10 12:04:49 --> Language Class Initialized
INFO - 2021-12-10 12:04:49 --> Loader Class Initialized
INFO - 2021-12-10 12:04:49 --> Helper loaded: url_helper
INFO - 2021-12-10 12:04:49 --> Helper loaded: form_helper
INFO - 2021-12-10 12:04:49 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:04:49 --> Helper loaded: language_helper
INFO - 2021-12-10 12:04:49 --> Helper loaded: file_helper
INFO - 2021-12-10 12:04:49 --> Helper loaded: date_helper
INFO - 2021-12-10 12:04:49 --> Database Driver Class Initialized
INFO - 2021-12-10 12:04:49 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:04:49 --> Parser Class Initialized
INFO - 2021-12-10 12:04:49 --> Model Class Initialized
INFO - 2021-12-10 12:04:49 --> Model Class Initialized
INFO - 2021-12-10 12:04:49 --> Controller Class Initialized
INFO - 2021-12-10 12:04:49 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:04:49 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:04:49 --> Could not find the language line "today"
INFO - 2021-12-10 12:04:49 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:04:49 --> Form Validation Class Initialized
INFO - 2021-12-10 12:04:49 --> Model Class Initialized
INFO - 2021-12-10 12:04:49 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 12:04:49 --> Config Class Initialized
INFO - 2021-12-10 12:04:49 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:04:49 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:04:49 --> Utf8 Class Initialized
INFO - 2021-12-10 12:04:49 --> URI Class Initialized
INFO - 2021-12-10 12:04:49 --> Router Class Initialized
INFO - 2021-12-10 12:04:49 --> Output Class Initialized
INFO - 2021-12-10 12:04:49 --> Security Class Initialized
INFO - 2021-12-10 12:04:49 --> CRSF cookie sent
DEBUG - 2021-12-10 12:04:49 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:04:49 --> Input Class Initialized
INFO - 2021-12-10 12:04:49 --> Language Class Initialized
INFO - 2021-12-10 12:04:49 --> Loader Class Initialized
INFO - 2021-12-10 12:04:49 --> Helper loaded: url_helper
INFO - 2021-12-10 12:04:49 --> Helper loaded: form_helper
INFO - 2021-12-10 12:04:49 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:04:49 --> Helper loaded: language_helper
INFO - 2021-12-10 12:04:49 --> Helper loaded: file_helper
INFO - 2021-12-10 12:04:49 --> Helper loaded: date_helper
INFO - 2021-12-10 12:04:49 --> Database Driver Class Initialized
INFO - 2021-12-10 12:04:49 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:04:49 --> Parser Class Initialized
INFO - 2021-12-10 12:04:49 --> Model Class Initialized
INFO - 2021-12-10 12:04:49 --> Model Class Initialized
INFO - 2021-12-10 12:04:49 --> Controller Class Initialized
INFO - 2021-12-10 12:04:49 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:04:49 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:04:49 --> Could not find the language line "today"
INFO - 2021-12-10 12:04:49 --> Model Class Initialized
INFO - 2021-12-10 12:04:49 --> Helper loaded: text_helper
INFO - 2021-12-10 12:04:49 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:04:49 --> Form Validation Class Initialized
INFO - 2021-12-10 12:04:49 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 12:04:49 --> Pagination Class Initialized
ERROR - 2021-12-10 12:04:49 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:04:49 --> Could not find the language line "order"
ERROR - 2021-12-10 12:04:49 --> Could not find the language line "bill"
INFO - 2021-12-10 12:04:49 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 12:04:49 --> Final output sent to browser
DEBUG - 2021-12-10 12:04:49 --> Total execution time: 0.1878
INFO - 2021-12-10 12:04:50 --> Config Class Initialized
INFO - 2021-12-10 12:04:50 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:04:50 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:04:50 --> Utf8 Class Initialized
INFO - 2021-12-10 12:04:50 --> URI Class Initialized
INFO - 2021-12-10 12:04:50 --> Router Class Initialized
INFO - 2021-12-10 12:04:50 --> Output Class Initialized
INFO - 2021-12-10 12:04:50 --> Security Class Initialized
INFO - 2021-12-10 12:04:50 --> CRSF cookie sent
DEBUG - 2021-12-10 12:04:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:04:50 --> Input Class Initialized
INFO - 2021-12-10 12:04:50 --> Language Class Initialized
INFO - 2021-12-10 12:04:50 --> Loader Class Initialized
INFO - 2021-12-10 12:04:50 --> Helper loaded: url_helper
INFO - 2021-12-10 12:04:50 --> Helper loaded: form_helper
INFO - 2021-12-10 12:04:50 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:04:50 --> Helper loaded: language_helper
INFO - 2021-12-10 12:04:50 --> Helper loaded: file_helper
INFO - 2021-12-10 12:04:50 --> Helper loaded: date_helper
INFO - 2021-12-10 12:04:50 --> Database Driver Class Initialized
INFO - 2021-12-10 12:04:50 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:04:50 --> Parser Class Initialized
INFO - 2021-12-10 12:04:50 --> Model Class Initialized
INFO - 2021-12-10 12:04:50 --> Model Class Initialized
INFO - 2021-12-10 12:04:50 --> Controller Class Initialized
INFO - 2021-12-10 12:04:50 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:04:50 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:04:50 --> Could not find the language line "today"
INFO - 2021-12-10 12:04:50 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:04:50 --> Form Validation Class Initialized
INFO - 2021-12-10 12:04:50 --> Model Class Initialized
INFO - 2021-12-10 12:04:50 --> Final output sent to browser
DEBUG - 2021-12-10 12:04:50 --> Total execution time: 0.1896
INFO - 2021-12-10 12:04:52 --> Config Class Initialized
INFO - 2021-12-10 12:04:52 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:04:52 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:04:52 --> Utf8 Class Initialized
INFO - 2021-12-10 12:04:52 --> URI Class Initialized
INFO - 2021-12-10 12:04:52 --> Router Class Initialized
INFO - 2021-12-10 12:04:52 --> Output Class Initialized
INFO - 2021-12-10 12:04:52 --> Security Class Initialized
INFO - 2021-12-10 12:04:52 --> CRSF cookie sent
DEBUG - 2021-12-10 12:04:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:04:52 --> Input Class Initialized
INFO - 2021-12-10 12:04:52 --> Language Class Initialized
INFO - 2021-12-10 12:04:52 --> Loader Class Initialized
INFO - 2021-12-10 12:04:52 --> Helper loaded: url_helper
INFO - 2021-12-10 12:04:52 --> Helper loaded: form_helper
INFO - 2021-12-10 12:04:52 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:04:52 --> Helper loaded: language_helper
INFO - 2021-12-10 12:04:52 --> Helper loaded: file_helper
INFO - 2021-12-10 12:04:52 --> Helper loaded: date_helper
INFO - 2021-12-10 12:04:52 --> Database Driver Class Initialized
INFO - 2021-12-10 12:04:52 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:04:52 --> Parser Class Initialized
INFO - 2021-12-10 12:04:52 --> Model Class Initialized
INFO - 2021-12-10 12:04:52 --> Model Class Initialized
INFO - 2021-12-10 12:04:52 --> Controller Class Initialized
INFO - 2021-12-10 12:04:52 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:04:52 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:04:52 --> Could not find the language line "today"
INFO - 2021-12-10 12:04:52 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:04:52 --> Form Validation Class Initialized
INFO - 2021-12-10 12:04:52 --> Model Class Initialized
INFO - 2021-12-10 12:04:52 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/customers/add.php
INFO - 2021-12-10 12:04:52 --> Final output sent to browser
DEBUG - 2021-12-10 12:04:52 --> Total execution time: 0.2445
INFO - 2021-12-10 12:06:19 --> Config Class Initialized
INFO - 2021-12-10 12:06:19 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:06:19 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:06:19 --> Utf8 Class Initialized
INFO - 2021-12-10 12:06:19 --> URI Class Initialized
INFO - 2021-12-10 12:06:19 --> Router Class Initialized
INFO - 2021-12-10 12:06:19 --> Output Class Initialized
INFO - 2021-12-10 12:06:19 --> Security Class Initialized
INFO - 2021-12-10 12:06:19 --> CRSF cookie sent
DEBUG - 2021-12-10 12:06:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:06:19 --> Input Class Initialized
INFO - 2021-12-10 12:06:19 --> Language Class Initialized
INFO - 2021-12-10 12:06:19 --> Loader Class Initialized
INFO - 2021-12-10 12:06:19 --> Helper loaded: url_helper
INFO - 2021-12-10 12:06:19 --> Helper loaded: form_helper
INFO - 2021-12-10 12:06:19 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:06:19 --> Helper loaded: language_helper
INFO - 2021-12-10 12:06:19 --> Helper loaded: file_helper
INFO - 2021-12-10 12:06:19 --> Helper loaded: date_helper
INFO - 2021-12-10 12:06:19 --> Database Driver Class Initialized
INFO - 2021-12-10 12:06:19 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:06:19 --> Parser Class Initialized
INFO - 2021-12-10 12:06:19 --> Model Class Initialized
INFO - 2021-12-10 12:06:19 --> Model Class Initialized
INFO - 2021-12-10 12:06:19 --> Controller Class Initialized
INFO - 2021-12-10 12:06:19 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:06:19 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:06:19 --> Could not find the language line "today"
INFO - 2021-12-10 12:06:20 --> Model Class Initialized
INFO - 2021-12-10 12:06:20 --> Helper loaded: text_helper
INFO - 2021-12-10 12:06:20 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:06:20 --> Form Validation Class Initialized
INFO - 2021-12-10 12:06:20 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 12:06:20 --> Final output sent to browser
DEBUG - 2021-12-10 12:06:20 --> Total execution time: 0.2089
INFO - 2021-12-10 12:06:31 --> Config Class Initialized
INFO - 2021-12-10 12:06:31 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:06:31 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:06:31 --> Utf8 Class Initialized
INFO - 2021-12-10 12:06:31 --> URI Class Initialized
INFO - 2021-12-10 12:06:31 --> Router Class Initialized
INFO - 2021-12-10 12:06:31 --> Output Class Initialized
INFO - 2021-12-10 12:06:31 --> Security Class Initialized
INFO - 2021-12-10 12:06:31 --> CRSF cookie sent
DEBUG - 2021-12-10 12:06:31 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:06:31 --> Input Class Initialized
INFO - 2021-12-10 12:06:31 --> Language Class Initialized
INFO - 2021-12-10 12:06:31 --> Loader Class Initialized
INFO - 2021-12-10 12:06:31 --> Helper loaded: url_helper
INFO - 2021-12-10 12:06:31 --> Helper loaded: form_helper
INFO - 2021-12-10 12:06:31 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:06:31 --> Helper loaded: language_helper
INFO - 2021-12-10 12:06:31 --> Helper loaded: file_helper
INFO - 2021-12-10 12:06:31 --> Helper loaded: date_helper
INFO - 2021-12-10 12:06:31 --> Database Driver Class Initialized
INFO - 2021-12-10 12:06:31 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:06:31 --> Parser Class Initialized
INFO - 2021-12-10 12:06:31 --> Model Class Initialized
INFO - 2021-12-10 12:06:31 --> Model Class Initialized
INFO - 2021-12-10 12:06:31 --> Controller Class Initialized
INFO - 2021-12-10 12:06:31 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:06:31 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:06:31 --> Could not find the language line "today"
INFO - 2021-12-10 12:06:31 --> Form Validation Class Initialized
INFO - 2021-12-10 12:06:31 --> Model Class Initialized
ERROR - 2021-12-10 12:06:31 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:06:31 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:06:31 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:06:31 --> Could not find the language line "backups"
INFO - 2021-12-10 12:06:31 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:06:31 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/dashboard.php
ERROR - 2021-12-10 12:06:31 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:06:31 --> Could not find the language line "due"
ERROR - 2021-12-10 12:06:31 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:06:31 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:06:31 --> Final output sent to browser
DEBUG - 2021-12-10 12:06:31 --> Total execution time: 0.2663
INFO - 2021-12-10 12:06:36 --> Config Class Initialized
INFO - 2021-12-10 12:06:36 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:06:36 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:06:36 --> Utf8 Class Initialized
INFO - 2021-12-10 12:06:36 --> URI Class Initialized
INFO - 2021-12-10 12:06:36 --> Router Class Initialized
INFO - 2021-12-10 12:06:36 --> Output Class Initialized
INFO - 2021-12-10 12:06:36 --> Security Class Initialized
INFO - 2021-12-10 12:06:36 --> CRSF cookie sent
DEBUG - 2021-12-10 12:06:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:06:36 --> Input Class Initialized
INFO - 2021-12-10 12:06:36 --> Language Class Initialized
INFO - 2021-12-10 12:06:36 --> Loader Class Initialized
INFO - 2021-12-10 12:06:36 --> Helper loaded: url_helper
INFO - 2021-12-10 12:06:36 --> Helper loaded: form_helper
INFO - 2021-12-10 12:06:36 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:06:36 --> Helper loaded: language_helper
INFO - 2021-12-10 12:06:36 --> Helper loaded: file_helper
INFO - 2021-12-10 12:06:36 --> Helper loaded: date_helper
INFO - 2021-12-10 12:06:36 --> Database Driver Class Initialized
INFO - 2021-12-10 12:06:36 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:06:36 --> Parser Class Initialized
INFO - 2021-12-10 12:06:36 --> Model Class Initialized
INFO - 2021-12-10 12:06:36 --> Model Class Initialized
INFO - 2021-12-10 12:06:36 --> Controller Class Initialized
INFO - 2021-12-10 12:06:36 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:06:36 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:06:36 --> Could not find the language line "today"
INFO - 2021-12-10 12:06:36 --> Model Class Initialized
INFO - 2021-12-10 12:06:36 --> Helper loaded: text_helper
INFO - 2021-12-10 12:06:36 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:06:36 --> Form Validation Class Initialized
ERROR - 2021-12-10 12:06:36 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:06:36 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:06:36 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:06:36 --> Could not find the language line "backups"
INFO - 2021-12-10 12:06:36 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:06:36 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 12:06:36 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:06:36 --> Could not find the language line "due"
ERROR - 2021-12-10 12:06:36 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:06:36 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:06:36 --> Final output sent to browser
DEBUG - 2021-12-10 12:06:36 --> Total execution time: 0.2624
INFO - 2021-12-10 12:06:36 --> Config Class Initialized
INFO - 2021-12-10 12:06:36 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:06:36 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:06:36 --> Utf8 Class Initialized
INFO - 2021-12-10 12:06:37 --> URI Class Initialized
INFO - 2021-12-10 12:06:37 --> Router Class Initialized
INFO - 2021-12-10 12:06:37 --> Output Class Initialized
INFO - 2021-12-10 12:06:37 --> Security Class Initialized
INFO - 2021-12-10 12:06:37 --> CRSF cookie sent
INFO - 2021-12-10 12:06:37 --> CSRF token verified
DEBUG - 2021-12-10 12:06:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:06:37 --> Input Class Initialized
INFO - 2021-12-10 12:06:37 --> Language Class Initialized
INFO - 2021-12-10 12:06:37 --> Loader Class Initialized
INFO - 2021-12-10 12:06:37 --> Helper loaded: url_helper
INFO - 2021-12-10 12:06:37 --> Helper loaded: form_helper
INFO - 2021-12-10 12:06:37 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:06:37 --> Helper loaded: language_helper
INFO - 2021-12-10 12:06:37 --> Helper loaded: file_helper
INFO - 2021-12-10 12:06:37 --> Helper loaded: date_helper
INFO - 2021-12-10 12:06:37 --> Database Driver Class Initialized
INFO - 2021-12-10 12:06:37 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:06:37 --> Parser Class Initialized
INFO - 2021-12-10 12:06:37 --> Model Class Initialized
INFO - 2021-12-10 12:06:37 --> Model Class Initialized
INFO - 2021-12-10 12:06:37 --> Controller Class Initialized
INFO - 2021-12-10 12:06:37 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:06:37 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:06:37 --> Could not find the language line "today"
INFO - 2021-12-10 12:06:37 --> Model Class Initialized
INFO - 2021-12-10 12:06:37 --> Helper loaded: text_helper
INFO - 2021-12-10 12:06:37 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:06:37 --> Form Validation Class Initialized
INFO - 2021-12-10 12:06:37 --> Final output sent to browser
DEBUG - 2021-12-10 12:06:37 --> Total execution time: 0.5357
INFO - 2021-12-10 12:06:38 --> Config Class Initialized
INFO - 2021-12-10 12:06:39 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:06:39 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:06:39 --> Utf8 Class Initialized
INFO - 2021-12-10 12:06:39 --> URI Class Initialized
INFO - 2021-12-10 12:06:39 --> Router Class Initialized
INFO - 2021-12-10 12:06:39 --> Output Class Initialized
INFO - 2021-12-10 12:06:39 --> Security Class Initialized
INFO - 2021-12-10 12:06:39 --> CRSF cookie sent
DEBUG - 2021-12-10 12:06:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:06:39 --> Input Class Initialized
INFO - 2021-12-10 12:06:39 --> Language Class Initialized
INFO - 2021-12-10 12:06:39 --> Loader Class Initialized
INFO - 2021-12-10 12:06:39 --> Helper loaded: url_helper
INFO - 2021-12-10 12:06:39 --> Helper loaded: form_helper
INFO - 2021-12-10 12:06:39 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:06:39 --> Helper loaded: language_helper
INFO - 2021-12-10 12:06:39 --> Helper loaded: file_helper
INFO - 2021-12-10 12:06:39 --> Helper loaded: date_helper
INFO - 2021-12-10 12:06:39 --> Database Driver Class Initialized
INFO - 2021-12-10 12:06:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:06:39 --> Parser Class Initialized
INFO - 2021-12-10 12:06:39 --> Model Class Initialized
INFO - 2021-12-10 12:06:39 --> Model Class Initialized
INFO - 2021-12-10 12:06:39 --> Controller Class Initialized
INFO - 2021-12-10 12:06:39 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:06:39 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:06:39 --> Could not find the language line "today"
INFO - 2021-12-10 12:06:39 --> Model Class Initialized
INFO - 2021-12-10 12:06:39 --> Helper loaded: text_helper
INFO - 2021-12-10 12:06:39 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:06:39 --> Form Validation Class Initialized
DEBUG - 2021-12-10 12:06:39 --> Zend Class Initialized
DEBUG - 2021-12-10 12:06:39 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 12:06:39 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 12:06:39 --> Final output sent to browser
DEBUG - 2021-12-10 12:06:39 --> Total execution time: 0.8269
INFO - 2021-12-10 12:44:33 --> Config Class Initialized
INFO - 2021-12-10 12:44:33 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:44:33 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:44:33 --> Utf8 Class Initialized
INFO - 2021-12-10 12:44:33 --> URI Class Initialized
INFO - 2021-12-10 12:44:33 --> Router Class Initialized
INFO - 2021-12-10 12:44:33 --> Output Class Initialized
INFO - 2021-12-10 12:44:33 --> Security Class Initialized
INFO - 2021-12-10 12:44:33 --> CRSF cookie sent
DEBUG - 2021-12-10 12:44:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:44:33 --> Input Class Initialized
INFO - 2021-12-10 12:44:33 --> Language Class Initialized
INFO - 2021-12-10 12:44:33 --> Loader Class Initialized
INFO - 2021-12-10 12:44:33 --> Helper loaded: url_helper
INFO - 2021-12-10 12:44:33 --> Helper loaded: form_helper
INFO - 2021-12-10 12:44:33 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:44:33 --> Helper loaded: language_helper
INFO - 2021-12-10 12:44:33 --> Helper loaded: file_helper
INFO - 2021-12-10 12:44:33 --> Helper loaded: date_helper
INFO - 2021-12-10 12:44:33 --> Database Driver Class Initialized
INFO - 2021-12-10 12:44:33 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:44:33 --> Parser Class Initialized
INFO - 2021-12-10 12:44:33 --> Model Class Initialized
INFO - 2021-12-10 12:44:33 --> Model Class Initialized
INFO - 2021-12-10 12:44:33 --> Controller Class Initialized
INFO - 2021-12-10 12:44:33 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:44:33 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:44:33 --> Could not find the language line "today"
INFO - 2021-12-10 12:44:33 --> Model Class Initialized
INFO - 2021-12-10 12:44:33 --> Helper loaded: text_helper
INFO - 2021-12-10 12:44:33 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:44:33 --> Form Validation Class Initialized
INFO - 2021-12-10 12:44:33 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 12:44:33 --> Pagination Class Initialized
ERROR - 2021-12-10 12:44:33 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:44:33 --> Could not find the language line "order"
ERROR - 2021-12-10 12:44:33 --> Could not find the language line "bill"
INFO - 2021-12-10 12:44:33 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 12:44:33 --> Final output sent to browser
DEBUG - 2021-12-10 12:44:33 --> Total execution time: 0.2646
INFO - 2021-12-10 12:44:33 --> Config Class Initialized
INFO - 2021-12-10 12:44:33 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:44:33 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:44:33 --> Utf8 Class Initialized
INFO - 2021-12-10 12:44:33 --> URI Class Initialized
INFO - 2021-12-10 12:44:33 --> Router Class Initialized
INFO - 2021-12-10 12:44:33 --> Output Class Initialized
INFO - 2021-12-10 12:44:33 --> Security Class Initialized
INFO - 2021-12-10 12:44:33 --> CRSF cookie sent
DEBUG - 2021-12-10 12:44:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:44:33 --> Input Class Initialized
INFO - 2021-12-10 12:44:33 --> Language Class Initialized
INFO - 2021-12-10 12:44:33 --> Loader Class Initialized
INFO - 2021-12-10 12:44:33 --> Helper loaded: url_helper
INFO - 2021-12-10 12:44:33 --> Helper loaded: form_helper
INFO - 2021-12-10 12:44:33 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:44:34 --> Helper loaded: language_helper
INFO - 2021-12-10 12:44:34 --> Helper loaded: file_helper
INFO - 2021-12-10 12:44:34 --> Helper loaded: date_helper
INFO - 2021-12-10 12:44:34 --> Database Driver Class Initialized
INFO - 2021-12-10 12:44:34 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:44:34 --> Parser Class Initialized
INFO - 2021-12-10 12:44:34 --> Model Class Initialized
INFO - 2021-12-10 12:44:34 --> Model Class Initialized
INFO - 2021-12-10 12:44:34 --> Controller Class Initialized
INFO - 2021-12-10 12:44:34 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:44:34 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:44:34 --> Could not find the language line "today"
INFO - 2021-12-10 12:44:34 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:44:34 --> Form Validation Class Initialized
INFO - 2021-12-10 12:44:34 --> Model Class Initialized
INFO - 2021-12-10 12:44:34 --> Final output sent to browser
DEBUG - 2021-12-10 12:44:34 --> Total execution time: 0.1617
INFO - 2021-12-10 12:44:35 --> Config Class Initialized
INFO - 2021-12-10 12:44:35 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:44:35 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:44:35 --> Utf8 Class Initialized
INFO - 2021-12-10 12:44:35 --> URI Class Initialized
INFO - 2021-12-10 12:44:35 --> Router Class Initialized
INFO - 2021-12-10 12:44:35 --> Output Class Initialized
INFO - 2021-12-10 12:44:35 --> Security Class Initialized
INFO - 2021-12-10 12:44:35 --> CRSF cookie sent
DEBUG - 2021-12-10 12:44:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:44:35 --> Input Class Initialized
INFO - 2021-12-10 12:44:35 --> Language Class Initialized
INFO - 2021-12-10 12:44:35 --> Loader Class Initialized
INFO - 2021-12-10 12:44:35 --> Helper loaded: url_helper
INFO - 2021-12-10 12:44:35 --> Helper loaded: form_helper
INFO - 2021-12-10 12:44:35 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:44:35 --> Helper loaded: language_helper
INFO - 2021-12-10 12:44:35 --> Helper loaded: file_helper
INFO - 2021-12-10 12:44:35 --> Helper loaded: date_helper
INFO - 2021-12-10 12:44:35 --> Database Driver Class Initialized
INFO - 2021-12-10 12:44:35 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:44:35 --> Parser Class Initialized
INFO - 2021-12-10 12:44:35 --> Model Class Initialized
INFO - 2021-12-10 12:44:35 --> Model Class Initialized
INFO - 2021-12-10 12:44:35 --> Controller Class Initialized
INFO - 2021-12-10 12:44:35 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:44:35 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:44:35 --> Could not find the language line "today"
INFO - 2021-12-10 12:44:35 --> Model Class Initialized
INFO - 2021-12-10 12:44:35 --> Helper loaded: text_helper
INFO - 2021-12-10 12:44:35 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:44:35 --> Form Validation Class Initialized
INFO - 2021-12-10 12:44:35 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 12:44:35 --> Final output sent to browser
DEBUG - 2021-12-10 12:44:35 --> Total execution time: 0.2719
INFO - 2021-12-10 12:44:38 --> Config Class Initialized
INFO - 2021-12-10 12:44:38 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:44:38 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:44:38 --> Utf8 Class Initialized
INFO - 2021-12-10 12:44:38 --> URI Class Initialized
INFO - 2021-12-10 12:44:38 --> Router Class Initialized
INFO - 2021-12-10 12:44:38 --> Output Class Initialized
INFO - 2021-12-10 12:44:38 --> Security Class Initialized
INFO - 2021-12-10 12:44:38 --> CRSF cookie sent
INFO - 2021-12-10 12:44:38 --> CSRF token verified
DEBUG - 2021-12-10 12:44:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:44:38 --> Input Class Initialized
INFO - 2021-12-10 12:44:38 --> Language Class Initialized
INFO - 2021-12-10 12:44:38 --> Loader Class Initialized
INFO - 2021-12-10 12:44:38 --> Helper loaded: url_helper
INFO - 2021-12-10 12:44:38 --> Helper loaded: form_helper
INFO - 2021-12-10 12:44:38 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:44:38 --> Helper loaded: language_helper
INFO - 2021-12-10 12:44:38 --> Helper loaded: file_helper
INFO - 2021-12-10 12:44:38 --> Helper loaded: date_helper
INFO - 2021-12-10 12:44:38 --> Database Driver Class Initialized
INFO - 2021-12-10 12:44:38 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:44:38 --> Parser Class Initialized
INFO - 2021-12-10 12:44:38 --> Model Class Initialized
INFO - 2021-12-10 12:44:38 --> Model Class Initialized
INFO - 2021-12-10 12:44:38 --> Controller Class Initialized
INFO - 2021-12-10 12:44:38 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:44:38 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:44:38 --> Could not find the language line "today"
INFO - 2021-12-10 12:44:38 --> Model Class Initialized
INFO - 2021-12-10 12:44:38 --> Helper loaded: text_helper
INFO - 2021-12-10 12:44:38 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:44:38 --> Form Validation Class Initialized
INFO - 2021-12-10 12:44:38 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 12:45:14 --> Config Class Initialized
INFO - 2021-12-10 12:45:14 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:45:14 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:45:14 --> Utf8 Class Initialized
INFO - 2021-12-10 12:45:14 --> URI Class Initialized
INFO - 2021-12-10 12:45:14 --> Router Class Initialized
INFO - 2021-12-10 12:45:14 --> Output Class Initialized
INFO - 2021-12-10 12:45:14 --> Security Class Initialized
INFO - 2021-12-10 12:45:14 --> CRSF cookie sent
DEBUG - 2021-12-10 12:45:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:45:14 --> Input Class Initialized
INFO - 2021-12-10 12:45:14 --> Language Class Initialized
INFO - 2021-12-10 12:45:14 --> Loader Class Initialized
INFO - 2021-12-10 12:45:14 --> Helper loaded: url_helper
INFO - 2021-12-10 12:45:14 --> Helper loaded: form_helper
INFO - 2021-12-10 12:45:14 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:45:14 --> Helper loaded: language_helper
INFO - 2021-12-10 12:45:14 --> Helper loaded: file_helper
INFO - 2021-12-10 12:45:14 --> Helper loaded: date_helper
INFO - 2021-12-10 12:45:14 --> Database Driver Class Initialized
INFO - 2021-12-10 12:45:14 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:45:14 --> Parser Class Initialized
INFO - 2021-12-10 12:45:14 --> Model Class Initialized
INFO - 2021-12-10 12:45:14 --> Model Class Initialized
INFO - 2021-12-10 12:45:14 --> Controller Class Initialized
INFO - 2021-12-10 12:45:14 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:45:14 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:45:14 --> Could not find the language line "today"
INFO - 2021-12-10 12:45:14 --> Model Class Initialized
INFO - 2021-12-10 12:45:14 --> Helper loaded: text_helper
INFO - 2021-12-10 12:45:14 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:45:14 --> Form Validation Class Initialized
INFO - 2021-12-10 12:45:14 --> Config Class Initialized
INFO - 2021-12-10 12:45:14 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:45:14 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:45:14 --> Utf8 Class Initialized
INFO - 2021-12-10 12:45:14 --> URI Class Initialized
INFO - 2021-12-10 12:45:15 --> Router Class Initialized
INFO - 2021-12-10 12:45:15 --> Output Class Initialized
INFO - 2021-12-10 12:45:15 --> Security Class Initialized
INFO - 2021-12-10 12:45:15 --> CRSF cookie sent
DEBUG - 2021-12-10 12:45:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:45:15 --> Input Class Initialized
INFO - 2021-12-10 12:45:15 --> Language Class Initialized
INFO - 2021-12-10 12:45:15 --> Loader Class Initialized
INFO - 2021-12-10 12:45:15 --> Helper loaded: url_helper
INFO - 2021-12-10 12:45:15 --> Helper loaded: form_helper
INFO - 2021-12-10 12:45:15 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:45:15 --> Helper loaded: language_helper
INFO - 2021-12-10 12:45:15 --> Helper loaded: file_helper
INFO - 2021-12-10 12:45:15 --> Helper loaded: date_helper
INFO - 2021-12-10 12:45:15 --> Database Driver Class Initialized
INFO - 2021-12-10 12:45:15 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:45:15 --> Parser Class Initialized
INFO - 2021-12-10 12:45:15 --> Model Class Initialized
INFO - 2021-12-10 12:45:15 --> Model Class Initialized
INFO - 2021-12-10 12:45:15 --> Controller Class Initialized
INFO - 2021-12-10 12:45:15 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:45:15 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:45:15 --> Could not find the language line "today"
INFO - 2021-12-10 12:45:15 --> Model Class Initialized
INFO - 2021-12-10 12:45:15 --> Helper loaded: text_helper
INFO - 2021-12-10 12:45:15 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:45:15 --> Form Validation Class Initialized
ERROR - 2021-12-10 12:45:15 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:45:15 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:45:15 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:45:15 --> Could not find the language line "backups"
INFO - 2021-12-10 12:45:15 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:45:15 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 12:45:15 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:45:15 --> Could not find the language line "due"
ERROR - 2021-12-10 12:45:15 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:45:15 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:45:15 --> Final output sent to browser
DEBUG - 2021-12-10 12:45:15 --> Total execution time: 0.2063
INFO - 2021-12-10 12:45:17 --> Config Class Initialized
INFO - 2021-12-10 12:45:17 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:45:17 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:45:17 --> Utf8 Class Initialized
INFO - 2021-12-10 12:45:17 --> URI Class Initialized
INFO - 2021-12-10 12:45:17 --> Router Class Initialized
INFO - 2021-12-10 12:45:17 --> Output Class Initialized
INFO - 2021-12-10 12:45:17 --> Security Class Initialized
INFO - 2021-12-10 12:45:17 --> CRSF cookie sent
DEBUG - 2021-12-10 12:45:17 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:45:17 --> Input Class Initialized
INFO - 2021-12-10 12:45:17 --> Language Class Initialized
INFO - 2021-12-10 12:45:17 --> Loader Class Initialized
INFO - 2021-12-10 12:45:17 --> Helper loaded: url_helper
INFO - 2021-12-10 12:45:17 --> Helper loaded: form_helper
INFO - 2021-12-10 12:45:17 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:45:17 --> Helper loaded: language_helper
INFO - 2021-12-10 12:45:17 --> Helper loaded: file_helper
INFO - 2021-12-10 12:45:17 --> Helper loaded: date_helper
INFO - 2021-12-10 12:45:17 --> Database Driver Class Initialized
INFO - 2021-12-10 12:45:17 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:45:17 --> Parser Class Initialized
INFO - 2021-12-10 12:45:17 --> Model Class Initialized
INFO - 2021-12-10 12:45:17 --> Model Class Initialized
INFO - 2021-12-10 12:45:17 --> Controller Class Initialized
INFO - 2021-12-10 12:45:17 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:45:17 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:45:17 --> Could not find the language line "today"
INFO - 2021-12-10 12:45:17 --> Model Class Initialized
INFO - 2021-12-10 12:45:17 --> Helper loaded: text_helper
INFO - 2021-12-10 12:45:17 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:45:17 --> Form Validation Class Initialized
INFO - 2021-12-10 12:45:18 --> Config Class Initialized
INFO - 2021-12-10 12:45:18 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:45:18 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:45:18 --> Utf8 Class Initialized
INFO - 2021-12-10 12:45:18 --> URI Class Initialized
INFO - 2021-12-10 12:45:18 --> Router Class Initialized
INFO - 2021-12-10 12:45:18 --> Output Class Initialized
INFO - 2021-12-10 12:45:18 --> Security Class Initialized
INFO - 2021-12-10 12:45:18 --> CRSF cookie sent
DEBUG - 2021-12-10 12:45:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:45:18 --> Input Class Initialized
INFO - 2021-12-10 12:45:18 --> Language Class Initialized
INFO - 2021-12-10 12:45:18 --> Loader Class Initialized
INFO - 2021-12-10 12:45:18 --> Helper loaded: url_helper
INFO - 2021-12-10 12:45:18 --> Helper loaded: form_helper
INFO - 2021-12-10 12:45:18 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:45:18 --> Helper loaded: language_helper
INFO - 2021-12-10 12:45:18 --> Helper loaded: file_helper
INFO - 2021-12-10 12:45:18 --> Helper loaded: date_helper
INFO - 2021-12-10 12:45:18 --> Database Driver Class Initialized
INFO - 2021-12-10 12:45:18 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:45:18 --> Parser Class Initialized
INFO - 2021-12-10 12:45:18 --> Model Class Initialized
INFO - 2021-12-10 12:45:18 --> Model Class Initialized
INFO - 2021-12-10 12:45:18 --> Controller Class Initialized
INFO - 2021-12-10 12:45:18 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:45:18 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:45:18 --> Could not find the language line "today"
INFO - 2021-12-10 12:45:18 --> Model Class Initialized
INFO - 2021-12-10 12:45:18 --> Helper loaded: text_helper
INFO - 2021-12-10 12:45:18 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:45:18 --> Form Validation Class Initialized
ERROR - 2021-12-10 12:45:18 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:45:18 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:45:18 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:45:18 --> Could not find the language line "backups"
INFO - 2021-12-10 12:45:18 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:45:18 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 12:45:18 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:45:18 --> Could not find the language line "due"
ERROR - 2021-12-10 12:45:18 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:45:18 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:45:18 --> Final output sent to browser
DEBUG - 2021-12-10 12:45:18 --> Total execution time: 0.1663
INFO - 2021-12-10 12:45:22 --> Config Class Initialized
INFO - 2021-12-10 12:45:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:45:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:45:22 --> Utf8 Class Initialized
INFO - 2021-12-10 12:45:22 --> URI Class Initialized
INFO - 2021-12-10 12:45:22 --> Router Class Initialized
INFO - 2021-12-10 12:45:22 --> Output Class Initialized
INFO - 2021-12-10 12:45:22 --> Security Class Initialized
INFO - 2021-12-10 12:45:22 --> CRSF cookie sent
INFO - 2021-12-10 12:45:22 --> CSRF token verified
DEBUG - 2021-12-10 12:45:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:45:22 --> Input Class Initialized
INFO - 2021-12-10 12:45:22 --> Language Class Initialized
INFO - 2021-12-10 12:45:22 --> Loader Class Initialized
INFO - 2021-12-10 12:45:22 --> Helper loaded: url_helper
INFO - 2021-12-10 12:45:22 --> Helper loaded: form_helper
INFO - 2021-12-10 12:45:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:45:22 --> Helper loaded: language_helper
INFO - 2021-12-10 12:45:22 --> Helper loaded: file_helper
INFO - 2021-12-10 12:45:22 --> Helper loaded: date_helper
INFO - 2021-12-10 12:45:22 --> Database Driver Class Initialized
INFO - 2021-12-10 12:45:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:45:22 --> Parser Class Initialized
INFO - 2021-12-10 12:45:22 --> Model Class Initialized
INFO - 2021-12-10 12:45:22 --> Model Class Initialized
INFO - 2021-12-10 12:45:22 --> Controller Class Initialized
INFO - 2021-12-10 12:45:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:45:22 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:45:22 --> Could not find the language line "today"
INFO - 2021-12-10 12:45:22 --> Model Class Initialized
INFO - 2021-12-10 12:45:22 --> Helper loaded: text_helper
INFO - 2021-12-10 12:45:22 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:45:22 --> Form Validation Class Initialized
INFO - 2021-12-10 12:45:22 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 12:45:23 --> Config Class Initialized
INFO - 2021-12-10 12:45:23 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:45:23 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:45:23 --> Utf8 Class Initialized
INFO - 2021-12-10 12:45:23 --> URI Class Initialized
INFO - 2021-12-10 12:45:23 --> Router Class Initialized
INFO - 2021-12-10 12:45:23 --> Output Class Initialized
INFO - 2021-12-10 12:45:23 --> Security Class Initialized
INFO - 2021-12-10 12:45:23 --> CRSF cookie sent
DEBUG - 2021-12-10 12:45:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:45:23 --> Input Class Initialized
INFO - 2021-12-10 12:45:23 --> Language Class Initialized
INFO - 2021-12-10 12:45:23 --> Loader Class Initialized
INFO - 2021-12-10 12:45:23 --> Helper loaded: url_helper
INFO - 2021-12-10 12:45:23 --> Helper loaded: form_helper
INFO - 2021-12-10 12:45:23 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:45:23 --> Helper loaded: language_helper
INFO - 2021-12-10 12:45:23 --> Helper loaded: file_helper
INFO - 2021-12-10 12:45:23 --> Helper loaded: date_helper
INFO - 2021-12-10 12:45:23 --> Database Driver Class Initialized
INFO - 2021-12-10 12:45:23 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:45:23 --> Parser Class Initialized
INFO - 2021-12-10 12:45:23 --> Model Class Initialized
INFO - 2021-12-10 12:45:23 --> Model Class Initialized
INFO - 2021-12-10 12:45:23 --> Controller Class Initialized
INFO - 2021-12-10 12:45:23 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:45:23 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:45:23 --> Could not find the language line "today"
INFO - 2021-12-10 12:45:23 --> Model Class Initialized
INFO - 2021-12-10 12:45:23 --> Helper loaded: text_helper
INFO - 2021-12-10 12:45:23 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:45:23 --> Form Validation Class Initialized
INFO - 2021-12-10 12:45:23 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 12:45:23 --> Pagination Class Initialized
ERROR - 2021-12-10 12:45:23 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:45:23 --> Could not find the language line "order"
ERROR - 2021-12-10 12:45:23 --> Could not find the language line "bill"
INFO - 2021-12-10 12:45:23 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 12:45:23 --> Final output sent to browser
DEBUG - 2021-12-10 12:45:23 --> Total execution time: 0.4035
INFO - 2021-12-10 12:45:23 --> Config Class Initialized
INFO - 2021-12-10 12:45:23 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:45:23 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:45:23 --> Utf8 Class Initialized
INFO - 2021-12-10 12:45:23 --> URI Class Initialized
INFO - 2021-12-10 12:45:23 --> Router Class Initialized
INFO - 2021-12-10 12:45:23 --> Output Class Initialized
INFO - 2021-12-10 12:45:23 --> Security Class Initialized
INFO - 2021-12-10 12:45:23 --> CRSF cookie sent
DEBUG - 2021-12-10 12:45:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:45:23 --> Input Class Initialized
INFO - 2021-12-10 12:45:23 --> Language Class Initialized
INFO - 2021-12-10 12:45:23 --> Loader Class Initialized
INFO - 2021-12-10 12:45:23 --> Helper loaded: url_helper
INFO - 2021-12-10 12:45:23 --> Helper loaded: form_helper
INFO - 2021-12-10 12:45:23 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:45:23 --> Helper loaded: language_helper
INFO - 2021-12-10 12:45:23 --> Helper loaded: file_helper
INFO - 2021-12-10 12:45:23 --> Helper loaded: date_helper
INFO - 2021-12-10 12:45:23 --> Database Driver Class Initialized
INFO - 2021-12-10 12:45:23 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:45:23 --> Parser Class Initialized
INFO - 2021-12-10 12:45:23 --> Model Class Initialized
INFO - 2021-12-10 12:45:23 --> Model Class Initialized
INFO - 2021-12-10 12:45:23 --> Controller Class Initialized
INFO - 2021-12-10 12:45:23 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:45:23 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:45:23 --> Could not find the language line "today"
INFO - 2021-12-10 12:45:23 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:45:23 --> Form Validation Class Initialized
INFO - 2021-12-10 12:45:23 --> Model Class Initialized
INFO - 2021-12-10 12:45:23 --> Final output sent to browser
DEBUG - 2021-12-10 12:45:23 --> Total execution time: 0.2140
INFO - 2021-12-10 12:45:25 --> Config Class Initialized
INFO - 2021-12-10 12:45:26 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:45:26 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:45:26 --> Utf8 Class Initialized
INFO - 2021-12-10 12:45:26 --> URI Class Initialized
INFO - 2021-12-10 12:45:26 --> Router Class Initialized
INFO - 2021-12-10 12:45:26 --> Output Class Initialized
INFO - 2021-12-10 12:45:26 --> Security Class Initialized
INFO - 2021-12-10 12:45:26 --> CRSF cookie sent
DEBUG - 2021-12-10 12:45:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:45:26 --> Input Class Initialized
INFO - 2021-12-10 12:45:26 --> Language Class Initialized
INFO - 2021-12-10 12:45:26 --> Loader Class Initialized
INFO - 2021-12-10 12:45:26 --> Helper loaded: url_helper
INFO - 2021-12-10 12:45:26 --> Helper loaded: form_helper
INFO - 2021-12-10 12:45:26 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:45:26 --> Helper loaded: language_helper
INFO - 2021-12-10 12:45:26 --> Helper loaded: file_helper
INFO - 2021-12-10 12:45:26 --> Helper loaded: date_helper
INFO - 2021-12-10 12:45:26 --> Database Driver Class Initialized
INFO - 2021-12-10 12:45:26 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:45:26 --> Parser Class Initialized
INFO - 2021-12-10 12:45:26 --> Model Class Initialized
INFO - 2021-12-10 12:45:26 --> Model Class Initialized
INFO - 2021-12-10 12:45:26 --> Controller Class Initialized
INFO - 2021-12-10 12:45:26 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:45:26 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:45:26 --> Could not find the language line "today"
INFO - 2021-12-10 12:45:26 --> Model Class Initialized
INFO - 2021-12-10 12:45:26 --> Helper loaded: text_helper
INFO - 2021-12-10 12:45:26 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:45:26 --> Form Validation Class Initialized
INFO - 2021-12-10 12:45:26 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 12:45:26 --> Final output sent to browser
DEBUG - 2021-12-10 12:45:26 --> Total execution time: 0.6010
INFO - 2021-12-10 12:45:29 --> Config Class Initialized
INFO - 2021-12-10 12:45:29 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:45:29 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:45:29 --> Utf8 Class Initialized
INFO - 2021-12-10 12:45:29 --> URI Class Initialized
INFO - 2021-12-10 12:45:29 --> Router Class Initialized
INFO - 2021-12-10 12:45:29 --> Output Class Initialized
INFO - 2021-12-10 12:45:29 --> Security Class Initialized
INFO - 2021-12-10 12:45:29 --> CRSF cookie sent
INFO - 2021-12-10 12:45:29 --> CSRF token verified
DEBUG - 2021-12-10 12:45:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:45:29 --> Input Class Initialized
INFO - 2021-12-10 12:45:29 --> Language Class Initialized
INFO - 2021-12-10 12:45:29 --> Loader Class Initialized
INFO - 2021-12-10 12:45:29 --> Helper loaded: url_helper
INFO - 2021-12-10 12:45:29 --> Helper loaded: form_helper
INFO - 2021-12-10 12:45:29 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:45:29 --> Helper loaded: language_helper
INFO - 2021-12-10 12:45:29 --> Helper loaded: file_helper
INFO - 2021-12-10 12:45:29 --> Helper loaded: date_helper
INFO - 2021-12-10 12:45:29 --> Database Driver Class Initialized
INFO - 2021-12-10 12:45:29 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:45:29 --> Parser Class Initialized
INFO - 2021-12-10 12:45:29 --> Model Class Initialized
INFO - 2021-12-10 12:45:29 --> Model Class Initialized
INFO - 2021-12-10 12:45:29 --> Controller Class Initialized
INFO - 2021-12-10 12:45:29 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:45:29 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:45:29 --> Could not find the language line "today"
INFO - 2021-12-10 12:45:29 --> Model Class Initialized
INFO - 2021-12-10 12:45:29 --> Helper loaded: text_helper
INFO - 2021-12-10 12:45:29 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:45:29 --> Form Validation Class Initialized
INFO - 2021-12-10 12:45:29 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 12:46:09 --> Config Class Initialized
INFO - 2021-12-10 12:46:09 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:46:09 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:46:09 --> Utf8 Class Initialized
INFO - 2021-12-10 12:46:09 --> URI Class Initialized
INFO - 2021-12-10 12:46:09 --> Router Class Initialized
INFO - 2021-12-10 12:46:09 --> Output Class Initialized
INFO - 2021-12-10 12:46:09 --> Security Class Initialized
INFO - 2021-12-10 12:46:09 --> CRSF cookie sent
DEBUG - 2021-12-10 12:46:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:46:09 --> Input Class Initialized
INFO - 2021-12-10 12:46:09 --> Language Class Initialized
INFO - 2021-12-10 12:46:09 --> Loader Class Initialized
INFO - 2021-12-10 12:46:09 --> Helper loaded: url_helper
INFO - 2021-12-10 12:46:09 --> Helper loaded: form_helper
INFO - 2021-12-10 12:46:09 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:46:09 --> Helper loaded: language_helper
INFO - 2021-12-10 12:46:09 --> Helper loaded: file_helper
INFO - 2021-12-10 12:46:09 --> Helper loaded: date_helper
INFO - 2021-12-10 12:46:09 --> Database Driver Class Initialized
INFO - 2021-12-10 12:46:09 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:46:09 --> Parser Class Initialized
INFO - 2021-12-10 12:46:09 --> Model Class Initialized
INFO - 2021-12-10 12:46:09 --> Model Class Initialized
INFO - 2021-12-10 12:46:09 --> Controller Class Initialized
INFO - 2021-12-10 12:46:09 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:46:09 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:46:09 --> Could not find the language line "today"
INFO - 2021-12-10 12:46:09 --> Model Class Initialized
INFO - 2021-12-10 12:46:09 --> Helper loaded: text_helper
INFO - 2021-12-10 12:46:09 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:46:09 --> Form Validation Class Initialized
INFO - 2021-12-10 12:46:09 --> Config Class Initialized
INFO - 2021-12-10 12:46:09 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:46:09 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:46:09 --> Utf8 Class Initialized
INFO - 2021-12-10 12:46:09 --> URI Class Initialized
INFO - 2021-12-10 12:46:09 --> Router Class Initialized
INFO - 2021-12-10 12:46:09 --> Output Class Initialized
INFO - 2021-12-10 12:46:09 --> Security Class Initialized
INFO - 2021-12-10 12:46:09 --> CRSF cookie sent
DEBUG - 2021-12-10 12:46:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:46:09 --> Input Class Initialized
INFO - 2021-12-10 12:46:09 --> Language Class Initialized
INFO - 2021-12-10 12:46:09 --> Loader Class Initialized
INFO - 2021-12-10 12:46:09 --> Helper loaded: url_helper
INFO - 2021-12-10 12:46:09 --> Helper loaded: form_helper
INFO - 2021-12-10 12:46:09 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:46:09 --> Helper loaded: language_helper
INFO - 2021-12-10 12:46:09 --> Helper loaded: file_helper
INFO - 2021-12-10 12:46:09 --> Helper loaded: date_helper
INFO - 2021-12-10 12:46:09 --> Database Driver Class Initialized
INFO - 2021-12-10 12:46:09 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:46:09 --> Parser Class Initialized
INFO - 2021-12-10 12:46:09 --> Model Class Initialized
INFO - 2021-12-10 12:46:09 --> Model Class Initialized
INFO - 2021-12-10 12:46:09 --> Controller Class Initialized
INFO - 2021-12-10 12:46:09 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:46:09 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:46:09 --> Could not find the language line "today"
INFO - 2021-12-10 12:46:09 --> Model Class Initialized
INFO - 2021-12-10 12:46:09 --> Helper loaded: text_helper
INFO - 2021-12-10 12:46:09 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:46:09 --> Form Validation Class Initialized
ERROR - 2021-12-10 12:46:09 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:46:09 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:46:09 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:46:09 --> Could not find the language line "backups"
INFO - 2021-12-10 12:46:09 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:46:09 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 12:46:09 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:46:09 --> Could not find the language line "due"
ERROR - 2021-12-10 12:46:09 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:46:09 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:46:09 --> Final output sent to browser
DEBUG - 2021-12-10 12:46:09 --> Total execution time: 0.2510
INFO - 2021-12-10 12:46:14 --> Config Class Initialized
INFO - 2021-12-10 12:46:14 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:46:14 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:46:14 --> Utf8 Class Initialized
INFO - 2021-12-10 12:46:14 --> URI Class Initialized
INFO - 2021-12-10 12:46:14 --> Router Class Initialized
INFO - 2021-12-10 12:46:14 --> Output Class Initialized
INFO - 2021-12-10 12:46:14 --> Security Class Initialized
INFO - 2021-12-10 12:46:14 --> CRSF cookie sent
INFO - 2021-12-10 12:46:14 --> CSRF token verified
DEBUG - 2021-12-10 12:46:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:46:14 --> Input Class Initialized
INFO - 2021-12-10 12:46:14 --> Language Class Initialized
INFO - 2021-12-10 12:46:14 --> Loader Class Initialized
INFO - 2021-12-10 12:46:14 --> Helper loaded: url_helper
INFO - 2021-12-10 12:46:14 --> Helper loaded: form_helper
INFO - 2021-12-10 12:46:14 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:46:14 --> Helper loaded: language_helper
INFO - 2021-12-10 12:46:14 --> Helper loaded: file_helper
INFO - 2021-12-10 12:46:14 --> Helper loaded: date_helper
INFO - 2021-12-10 12:46:14 --> Database Driver Class Initialized
INFO - 2021-12-10 12:46:14 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:46:14 --> Parser Class Initialized
INFO - 2021-12-10 12:46:14 --> Model Class Initialized
INFO - 2021-12-10 12:46:14 --> Model Class Initialized
INFO - 2021-12-10 12:46:14 --> Controller Class Initialized
INFO - 2021-12-10 12:46:14 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:46:14 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:46:14 --> Could not find the language line "today"
INFO - 2021-12-10 12:46:14 --> Model Class Initialized
INFO - 2021-12-10 12:46:14 --> Helper loaded: text_helper
INFO - 2021-12-10 12:46:14 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:46:14 --> Form Validation Class Initialized
INFO - 2021-12-10 12:46:14 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 12:46:14 --> Config Class Initialized
INFO - 2021-12-10 12:46:14 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:46:14 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:46:14 --> Utf8 Class Initialized
INFO - 2021-12-10 12:46:14 --> URI Class Initialized
INFO - 2021-12-10 12:46:14 --> Router Class Initialized
INFO - 2021-12-10 12:46:14 --> Output Class Initialized
INFO - 2021-12-10 12:46:14 --> Security Class Initialized
INFO - 2021-12-10 12:46:14 --> CRSF cookie sent
DEBUG - 2021-12-10 12:46:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:46:14 --> Input Class Initialized
INFO - 2021-12-10 12:46:14 --> Language Class Initialized
INFO - 2021-12-10 12:46:14 --> Loader Class Initialized
INFO - 2021-12-10 12:46:14 --> Helper loaded: url_helper
INFO - 2021-12-10 12:46:14 --> Helper loaded: form_helper
INFO - 2021-12-10 12:46:14 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:46:14 --> Helper loaded: language_helper
INFO - 2021-12-10 12:46:14 --> Helper loaded: file_helper
INFO - 2021-12-10 12:46:14 --> Helper loaded: date_helper
INFO - 2021-12-10 12:46:14 --> Database Driver Class Initialized
INFO - 2021-12-10 12:46:14 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:46:14 --> Parser Class Initialized
INFO - 2021-12-10 12:46:14 --> Model Class Initialized
INFO - 2021-12-10 12:46:14 --> Model Class Initialized
INFO - 2021-12-10 12:46:14 --> Controller Class Initialized
INFO - 2021-12-10 12:46:14 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:46:14 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:46:14 --> Could not find the language line "today"
INFO - 2021-12-10 12:46:14 --> Model Class Initialized
INFO - 2021-12-10 12:46:14 --> Helper loaded: text_helper
INFO - 2021-12-10 12:46:14 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:46:14 --> Form Validation Class Initialized
INFO - 2021-12-10 12:46:14 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 12:46:14 --> Pagination Class Initialized
ERROR - 2021-12-10 12:46:14 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:46:14 --> Could not find the language line "order"
ERROR - 2021-12-10 12:46:14 --> Could not find the language line "bill"
INFO - 2021-12-10 12:46:14 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 12:46:14 --> Final output sent to browser
DEBUG - 2021-12-10 12:46:14 --> Total execution time: 0.1842
INFO - 2021-12-10 12:46:15 --> Config Class Initialized
INFO - 2021-12-10 12:46:15 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:46:15 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:46:15 --> Utf8 Class Initialized
INFO - 2021-12-10 12:46:15 --> URI Class Initialized
INFO - 2021-12-10 12:46:15 --> Router Class Initialized
INFO - 2021-12-10 12:46:15 --> Output Class Initialized
INFO - 2021-12-10 12:46:15 --> Security Class Initialized
INFO - 2021-12-10 12:46:15 --> CRSF cookie sent
DEBUG - 2021-12-10 12:46:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:46:15 --> Input Class Initialized
INFO - 2021-12-10 12:46:15 --> Language Class Initialized
INFO - 2021-12-10 12:46:15 --> Loader Class Initialized
INFO - 2021-12-10 12:46:15 --> Helper loaded: url_helper
INFO - 2021-12-10 12:46:15 --> Helper loaded: form_helper
INFO - 2021-12-10 12:46:15 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:46:15 --> Helper loaded: language_helper
INFO - 2021-12-10 12:46:15 --> Helper loaded: file_helper
INFO - 2021-12-10 12:46:15 --> Helper loaded: date_helper
INFO - 2021-12-10 12:46:15 --> Database Driver Class Initialized
INFO - 2021-12-10 12:46:15 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:46:15 --> Parser Class Initialized
INFO - 2021-12-10 12:46:15 --> Model Class Initialized
INFO - 2021-12-10 12:46:15 --> Model Class Initialized
INFO - 2021-12-10 12:46:15 --> Controller Class Initialized
INFO - 2021-12-10 12:46:15 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:46:15 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:46:15 --> Could not find the language line "today"
INFO - 2021-12-10 12:46:15 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:46:15 --> Form Validation Class Initialized
INFO - 2021-12-10 12:46:15 --> Model Class Initialized
INFO - 2021-12-10 12:46:15 --> Final output sent to browser
DEBUG - 2021-12-10 12:46:15 --> Total execution time: 0.1861
INFO - 2021-12-10 12:46:16 --> Config Class Initialized
INFO - 2021-12-10 12:46:16 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:46:16 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:46:16 --> Utf8 Class Initialized
INFO - 2021-12-10 12:46:16 --> URI Class Initialized
INFO - 2021-12-10 12:46:16 --> Router Class Initialized
INFO - 2021-12-10 12:46:16 --> Output Class Initialized
INFO - 2021-12-10 12:46:16 --> Security Class Initialized
INFO - 2021-12-10 12:46:16 --> CRSF cookie sent
DEBUG - 2021-12-10 12:46:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:46:16 --> Input Class Initialized
INFO - 2021-12-10 12:46:16 --> Language Class Initialized
INFO - 2021-12-10 12:46:16 --> Loader Class Initialized
INFO - 2021-12-10 12:46:16 --> Helper loaded: url_helper
INFO - 2021-12-10 12:46:16 --> Helper loaded: form_helper
INFO - 2021-12-10 12:46:16 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:46:16 --> Helper loaded: language_helper
INFO - 2021-12-10 12:46:16 --> Helper loaded: file_helper
INFO - 2021-12-10 12:46:16 --> Helper loaded: date_helper
INFO - 2021-12-10 12:46:16 --> Database Driver Class Initialized
INFO - 2021-12-10 12:46:16 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:46:16 --> Parser Class Initialized
INFO - 2021-12-10 12:46:16 --> Model Class Initialized
INFO - 2021-12-10 12:46:16 --> Model Class Initialized
INFO - 2021-12-10 12:46:16 --> Controller Class Initialized
INFO - 2021-12-10 12:46:16 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:46:16 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:46:16 --> Could not find the language line "today"
INFO - 2021-12-10 12:46:16 --> Model Class Initialized
INFO - 2021-12-10 12:46:16 --> Helper loaded: text_helper
INFO - 2021-12-10 12:46:16 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:46:16 --> Form Validation Class Initialized
INFO - 2021-12-10 12:46:16 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 12:46:16 --> Final output sent to browser
DEBUG - 2021-12-10 12:46:16 --> Total execution time: 0.3229
INFO - 2021-12-10 12:46:19 --> Config Class Initialized
INFO - 2021-12-10 12:46:19 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:46:19 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:46:19 --> Utf8 Class Initialized
INFO - 2021-12-10 12:46:19 --> URI Class Initialized
INFO - 2021-12-10 12:46:19 --> Router Class Initialized
INFO - 2021-12-10 12:46:19 --> Output Class Initialized
INFO - 2021-12-10 12:46:19 --> Security Class Initialized
INFO - 2021-12-10 12:46:19 --> CRSF cookie sent
INFO - 2021-12-10 12:46:19 --> CSRF token verified
DEBUG - 2021-12-10 12:46:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:46:19 --> Input Class Initialized
INFO - 2021-12-10 12:46:19 --> Language Class Initialized
INFO - 2021-12-10 12:46:19 --> Loader Class Initialized
INFO - 2021-12-10 12:46:19 --> Helper loaded: url_helper
INFO - 2021-12-10 12:46:19 --> Helper loaded: form_helper
INFO - 2021-12-10 12:46:19 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:46:19 --> Helper loaded: language_helper
INFO - 2021-12-10 12:46:19 --> Helper loaded: file_helper
INFO - 2021-12-10 12:46:19 --> Helper loaded: date_helper
INFO - 2021-12-10 12:46:19 --> Database Driver Class Initialized
INFO - 2021-12-10 12:46:19 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:46:19 --> Parser Class Initialized
INFO - 2021-12-10 12:46:19 --> Model Class Initialized
INFO - 2021-12-10 12:46:19 --> Model Class Initialized
INFO - 2021-12-10 12:46:19 --> Controller Class Initialized
INFO - 2021-12-10 12:46:19 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:46:19 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:46:19 --> Could not find the language line "today"
INFO - 2021-12-10 12:46:19 --> Model Class Initialized
INFO - 2021-12-10 12:46:19 --> Helper loaded: text_helper
INFO - 2021-12-10 12:46:19 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:46:19 --> Form Validation Class Initialized
INFO - 2021-12-10 12:46:19 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 12:46:19 --> Could not find the language line "you_will_loss_sale_data"
ERROR - 2021-12-10 12:46:19 --> Could not find the language line "sale_no"
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 18
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 18
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 28
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 28
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 36
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 36
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 41
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 41
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 46
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 46
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 51
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 51
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 61
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 61
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 66
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 66
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 83
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 83
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 92
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 92
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 92
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 92
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 95
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 95
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 95
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 95
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 95
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 95
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 95
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 95
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 95
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 95
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 99
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 99
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 99
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 99
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 105
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 105
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 105
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 105
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 108
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 108
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 108
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 108
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 111
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 111
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 111
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 111
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 114
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 114
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 114
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 114
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 119
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 119
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: biller C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 119
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 119
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 129
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 129
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 129
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 129
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 140
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 140
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 140
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 140
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 143
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 143
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 143
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 143
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 146
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 146
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 146
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 146
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 157
ERROR - 2021-12-10 12:46:19 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 157
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 157
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 157
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 167
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 167
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 170
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 170
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 171
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 171
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 171
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 171
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 187
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 187
DEBUG - 2021-12-10 12:46:20 --> Zend Class Initialized
DEBUG - 2021-12-10 12:46:20 --> Zend Class Zend/Barcode Loaded
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 189
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 189
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 190
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 190
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 192
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 192
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 200
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 200
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 202
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 202
ERROR - 2021-12-10 12:46:20 --> Could not find the language line "sale_status"
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 204
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 204
ERROR - 2021-12-10 12:46:20 --> Could not find the language line ""
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 207
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 207
ERROR - 2021-12-10 12:46:20 --> Could not find the language line ""
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 235
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 235
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: rows C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 248
ERROR - 2021-12-10 12:46:20 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 248
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 294
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 294
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 300
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 300
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 302
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 302
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 310
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 310
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 310
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 310
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 327
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 331
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 331
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 335
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 335
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 339
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 339
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 348
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 348
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 356
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 356
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 363
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 363
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 363
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 363
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 373
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 373
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 373
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 373
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 381
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 381
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 381
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 381
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 407
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 407
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 407
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 407
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 409
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 409
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 410
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 410
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 419
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 419
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: paypal C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 422
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 422
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: skrill C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 459
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 459
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: payments C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 539
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 539
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 547
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 547
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 551
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 551
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 555
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 555
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 559
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 559
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 563
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 563
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 567
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 567
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 573
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 573
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 576
ERROR - 2021-12-10 12:46:20 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 576
INFO - 2021-12-10 12:46:20 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 12:46:20 --> Final output sent to browser
DEBUG - 2021-12-10 12:46:20 --> Total execution time: 1.7761
INFO - 2021-12-10 12:46:20 --> Config Class Initialized
INFO - 2021-12-10 12:46:20 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:46:21 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:46:21 --> Utf8 Class Initialized
INFO - 2021-12-10 12:49:24 --> Config Class Initialized
INFO - 2021-12-10 12:49:24 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:49:24 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:49:24 --> Utf8 Class Initialized
INFO - 2021-12-10 12:49:24 --> URI Class Initialized
INFO - 2021-12-10 12:49:24 --> Router Class Initialized
INFO - 2021-12-10 12:49:24 --> Output Class Initialized
INFO - 2021-12-10 12:49:24 --> Security Class Initialized
INFO - 2021-12-10 12:49:24 --> CRSF cookie sent
INFO - 2021-12-10 12:49:24 --> CSRF token verified
DEBUG - 2021-12-10 12:49:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:49:24 --> Input Class Initialized
INFO - 2021-12-10 12:49:24 --> Language Class Initialized
INFO - 2021-12-10 12:49:24 --> Loader Class Initialized
INFO - 2021-12-10 12:49:24 --> Helper loaded: url_helper
INFO - 2021-12-10 12:49:24 --> Helper loaded: form_helper
INFO - 2021-12-10 12:49:24 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:49:24 --> Helper loaded: language_helper
INFO - 2021-12-10 12:49:24 --> Helper loaded: file_helper
INFO - 2021-12-10 12:49:24 --> Helper loaded: date_helper
INFO - 2021-12-10 12:49:24 --> Database Driver Class Initialized
INFO - 2021-12-10 12:49:24 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:49:24 --> Parser Class Initialized
INFO - 2021-12-10 12:49:24 --> Model Class Initialized
INFO - 2021-12-10 12:49:24 --> Model Class Initialized
INFO - 2021-12-10 12:49:24 --> Controller Class Initialized
INFO - 2021-12-10 12:49:24 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:49:24 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:49:24 --> Could not find the language line "today"
INFO - 2021-12-10 12:49:24 --> Model Class Initialized
INFO - 2021-12-10 12:49:24 --> Helper loaded: text_helper
INFO - 2021-12-10 12:49:24 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:49:24 --> Form Validation Class Initialized
INFO - 2021-12-10 12:49:24 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 5
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 57
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 57
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 57
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 57
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 64
ERROR - 2021-12-10 12:49:24 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 64
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 64
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 64
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 67
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 67
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 67
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 67
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 70
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 70
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 70
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 70
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 73
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 73
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 73
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 73
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 76
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 76
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 76
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 76
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 79
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 79
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 79
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 79
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 98
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 98
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 98
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 98
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 114
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 114
DEBUG - 2021-12-10 12:49:25 --> Zend Class Initialized
DEBUG - 2021-12-10 12:49:25 --> Zend Class Zend/Barcode Loaded
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 117
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 117
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 119
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 119
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 127
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 127
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 129
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 129
ERROR - 2021-12-10 12:49:25 --> Could not find the language line "sale_status"
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 131
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 131
ERROR - 2021-12-10 12:49:25 --> Could not find the language line ""
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 134
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 134
ERROR - 2021-12-10 12:49:25 --> Could not find the language line ""
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 162
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 162
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: rows C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 175
ERROR - 2021-12-10 12:49:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 175
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 221
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 221
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 227
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 227
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 229
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 229
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 237
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 237
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 237
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 237
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 254
ERROR - 2021-12-10 12:49:25 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 258
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 258
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 262
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 262
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 266
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 266
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 275
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 275
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 283
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 283
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 290
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 290
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 290
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 290
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 300
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 300
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 300
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 300
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 334
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 334
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 334
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 334
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 336
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 336
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 337
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 337
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 346
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 346
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: paypal C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 349
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 349
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: skrill C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 386
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 386
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: payments C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 423
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 466
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 466
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 474
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 474
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 478
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 478
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 482
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 482
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 486
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 486
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 490
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 490
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 494
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 494
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 500
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 500
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 503
ERROR - 2021-12-10 12:49:26 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 503
INFO - 2021-12-10 12:49:26 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 12:49:26 --> Final output sent to browser
DEBUG - 2021-12-10 12:49:26 --> Total execution time: 1.6583
INFO - 2021-12-10 12:49:57 --> Config Class Initialized
INFO - 2021-12-10 12:49:57 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:49:57 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:49:57 --> Utf8 Class Initialized
INFO - 2021-12-10 12:49:57 --> URI Class Initialized
INFO - 2021-12-10 12:49:57 --> Router Class Initialized
INFO - 2021-12-10 12:49:57 --> Output Class Initialized
INFO - 2021-12-10 12:49:57 --> Security Class Initialized
INFO - 2021-12-10 12:49:57 --> CRSF cookie sent
INFO - 2021-12-10 12:49:57 --> CSRF token verified
DEBUG - 2021-12-10 12:49:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:49:57 --> Input Class Initialized
INFO - 2021-12-10 12:49:57 --> Language Class Initialized
INFO - 2021-12-10 12:49:57 --> Loader Class Initialized
INFO - 2021-12-10 12:49:57 --> Helper loaded: url_helper
INFO - 2021-12-10 12:49:57 --> Helper loaded: form_helper
INFO - 2021-12-10 12:49:57 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:49:57 --> Helper loaded: language_helper
INFO - 2021-12-10 12:49:57 --> Helper loaded: file_helper
INFO - 2021-12-10 12:49:57 --> Helper loaded: date_helper
INFO - 2021-12-10 12:49:57 --> Database Driver Class Initialized
INFO - 2021-12-10 12:49:57 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:49:57 --> Parser Class Initialized
INFO - 2021-12-10 12:49:57 --> Model Class Initialized
INFO - 2021-12-10 12:49:57 --> Model Class Initialized
INFO - 2021-12-10 12:49:57 --> Controller Class Initialized
INFO - 2021-12-10 12:49:57 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:49:57 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:49:57 --> Could not find the language line "today"
INFO - 2021-12-10 12:49:58 --> Model Class Initialized
INFO - 2021-12-10 12:49:58 --> Helper loaded: text_helper
INFO - 2021-12-10 12:49:58 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:49:58 --> Form Validation Class Initialized
INFO - 2021-12-10 12:49:58 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 52
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 52
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 52
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 52
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 53
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 53
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 53
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 53
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 60
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 63
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 63
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 63
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 63
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 66
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 66
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 66
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 66
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 69
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 69
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 69
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 69
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 72
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 72
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 72
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 72
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 80
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 80
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 80
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 80
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 90
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 90
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 93
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 93
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 110
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 110
DEBUG - 2021-12-10 12:49:58 --> Zend Class Initialized
DEBUG - 2021-12-10 12:49:58 --> Zend Class Zend/Barcode Loaded
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 113
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 113
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 115
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 115
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 123
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 123
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 125
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 125
ERROR - 2021-12-10 12:49:58 --> Could not find the language line "sale_status"
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 127
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 127
ERROR - 2021-12-10 12:49:58 --> Could not find the language line ""
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 12:49:58 --> Could not find the language line ""
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 158
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 158
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: rows C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 171
ERROR - 2021-12-10 12:49:58 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 171
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 217
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 217
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 223
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 223
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 225
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 225
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 233
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 233
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 233
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 233
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 250
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 254
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 254
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 258
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 258
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 262
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 262
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 271
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 271
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 279
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 279
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 286
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 286
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 286
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 286
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 296
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 296
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 296
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 296
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 304
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 304
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 304
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 304
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 330
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 330
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 330
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 330
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 332
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 332
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 333
ERROR - 2021-12-10 12:49:58 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 333
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 342
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 342
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: paypal C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 345
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 345
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: skrill C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 382
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 382
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: payments C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 419
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 462
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 462
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 470
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 470
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 474
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 474
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 478
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 478
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 482
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 482
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 486
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 486
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 490
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 490
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 499
ERROR - 2021-12-10 12:49:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 499
INFO - 2021-12-10 12:49:59 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 12:49:59 --> Final output sent to browser
DEBUG - 2021-12-10 12:49:59 --> Total execution time: 1.3404
INFO - 2021-12-10 12:50:10 --> Config Class Initialized
INFO - 2021-12-10 12:50:10 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:50:10 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:50:10 --> Utf8 Class Initialized
INFO - 2021-12-10 12:50:10 --> URI Class Initialized
INFO - 2021-12-10 12:50:10 --> Router Class Initialized
INFO - 2021-12-10 12:50:10 --> Output Class Initialized
INFO - 2021-12-10 12:50:10 --> Security Class Initialized
INFO - 2021-12-10 12:50:10 --> CRSF cookie sent
INFO - 2021-12-10 12:50:10 --> CSRF token verified
DEBUG - 2021-12-10 12:50:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:50:10 --> Input Class Initialized
INFO - 2021-12-10 12:50:10 --> Language Class Initialized
INFO - 2021-12-10 12:50:10 --> Loader Class Initialized
INFO - 2021-12-10 12:50:10 --> Helper loaded: url_helper
INFO - 2021-12-10 12:50:10 --> Helper loaded: form_helper
INFO - 2021-12-10 12:50:10 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:50:10 --> Helper loaded: language_helper
INFO - 2021-12-10 12:50:10 --> Helper loaded: file_helper
INFO - 2021-12-10 12:50:10 --> Helper loaded: date_helper
INFO - 2021-12-10 12:50:10 --> Database Driver Class Initialized
INFO - 2021-12-10 12:50:10 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:50:10 --> Parser Class Initialized
INFO - 2021-12-10 12:50:10 --> Model Class Initialized
INFO - 2021-12-10 12:50:10 --> Model Class Initialized
INFO - 2021-12-10 12:50:10 --> Controller Class Initialized
INFO - 2021-12-10 12:50:10 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:50:10 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:50:10 --> Could not find the language line "today"
INFO - 2021-12-10 12:50:10 --> Model Class Initialized
INFO - 2021-12-10 12:50:10 --> Helper loaded: text_helper
INFO - 2021-12-10 12:50:10 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:50:10 --> Form Validation Class Initialized
INFO - 2021-12-10 12:50:10 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 12:50:10 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 12:50:10 --> Final output sent to browser
DEBUG - 2021-12-10 12:50:10 --> Total execution time: 0.2928
INFO - 2021-12-10 12:50:52 --> Config Class Initialized
INFO - 2021-12-10 12:50:52 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:50:52 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:50:52 --> Utf8 Class Initialized
INFO - 2021-12-10 12:50:52 --> URI Class Initialized
INFO - 2021-12-10 12:50:52 --> Router Class Initialized
INFO - 2021-12-10 12:50:52 --> Output Class Initialized
INFO - 2021-12-10 12:50:52 --> Security Class Initialized
INFO - 2021-12-10 12:50:52 --> CRSF cookie sent
DEBUG - 2021-12-10 12:50:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:50:52 --> Input Class Initialized
INFO - 2021-12-10 12:50:52 --> Language Class Initialized
INFO - 2021-12-10 12:50:52 --> Loader Class Initialized
INFO - 2021-12-10 12:50:52 --> Helper loaded: url_helper
INFO - 2021-12-10 12:50:52 --> Helper loaded: form_helper
INFO - 2021-12-10 12:50:52 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:50:52 --> Helper loaded: language_helper
INFO - 2021-12-10 12:50:52 --> Helper loaded: file_helper
INFO - 2021-12-10 12:50:52 --> Helper loaded: date_helper
INFO - 2021-12-10 12:50:52 --> Database Driver Class Initialized
INFO - 2021-12-10 12:50:52 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:50:52 --> Parser Class Initialized
INFO - 2021-12-10 12:50:52 --> Model Class Initialized
INFO - 2021-12-10 12:50:52 --> Model Class Initialized
INFO - 2021-12-10 12:50:52 --> Controller Class Initialized
INFO - 2021-12-10 12:50:52 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:50:52 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:50:52 --> Could not find the language line "today"
INFO - 2021-12-10 12:50:52 --> Language file loaded: language/spanish/sales_lang.php
INFO - 2021-12-10 12:50:52 --> Form Validation Class Initialized
INFO - 2021-12-10 12:50:52 --> Model Class Initialized
ERROR - 2021-12-10 12:50:52 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:50:52 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:50:52 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:50:52 --> Could not find the language line "backups"
INFO - 2021-12-10 12:50:52 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:50:52 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/sales/index.php
ERROR - 2021-12-10 12:50:52 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:50:52 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:50:52 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:50:52 --> Final output sent to browser
DEBUG - 2021-12-10 12:50:52 --> Total execution time: 0.3611
INFO - 2021-12-10 12:50:52 --> Config Class Initialized
INFO - 2021-12-10 12:50:52 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:50:52 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:50:52 --> Utf8 Class Initialized
INFO - 2021-12-10 12:50:52 --> URI Class Initialized
INFO - 2021-12-10 12:50:52 --> Router Class Initialized
INFO - 2021-12-10 12:50:52 --> Output Class Initialized
INFO - 2021-12-10 12:50:52 --> Security Class Initialized
INFO - 2021-12-10 12:50:52 --> CRSF cookie sent
INFO - 2021-12-10 12:50:52 --> CSRF token verified
DEBUG - 2021-12-10 12:50:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:50:52 --> Input Class Initialized
INFO - 2021-12-10 12:50:52 --> Language Class Initialized
INFO - 2021-12-10 12:50:52 --> Loader Class Initialized
INFO - 2021-12-10 12:50:52 --> Helper loaded: url_helper
INFO - 2021-12-10 12:50:52 --> Helper loaded: form_helper
INFO - 2021-12-10 12:50:52 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:50:52 --> Helper loaded: language_helper
INFO - 2021-12-10 12:50:52 --> Helper loaded: file_helper
INFO - 2021-12-10 12:50:52 --> Helper loaded: date_helper
INFO - 2021-12-10 12:50:52 --> Database Driver Class Initialized
INFO - 2021-12-10 12:50:52 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:50:52 --> Parser Class Initialized
INFO - 2021-12-10 12:50:52 --> Model Class Initialized
INFO - 2021-12-10 12:50:53 --> Model Class Initialized
INFO - 2021-12-10 12:50:53 --> Controller Class Initialized
INFO - 2021-12-10 12:50:53 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:50:53 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:50:53 --> Could not find the language line "today"
INFO - 2021-12-10 12:50:53 --> Language file loaded: language/spanish/sales_lang.php
INFO - 2021-12-10 12:50:53 --> Form Validation Class Initialized
INFO - 2021-12-10 12:50:53 --> Model Class Initialized
ERROR - 2021-12-10 12:50:53 --> Query error: Unknown column 'sales.grand_total' in 'field list' - Invalid query: SELECT `sma_sales`.`id`, `sma_sales`.`date`, `sma_sales`.`reference_no`, `sma_sales`.`biller`, `sma_sales`.`customer`, `sma_sales`.`sale_status`, `sma_sales`.`grand_total`, `sma_sales`.`paid`, (sales.grand_total-paid) as balance, `sma_sales`.`payment_status`
FROM `sma_sales`
WHERE `pos` != 1
ORDER BY `sma_sales`.`date` DESC
 LIMIT 10
ERROR - 2021-12-10 12:50:53 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 12:50:55 --> Config Class Initialized
INFO - 2021-12-10 12:50:55 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:50:55 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:50:55 --> Utf8 Class Initialized
INFO - 2021-12-10 12:50:55 --> URI Class Initialized
INFO - 2021-12-10 12:50:55 --> Router Class Initialized
INFO - 2021-12-10 12:50:55 --> Output Class Initialized
INFO - 2021-12-10 12:50:55 --> Security Class Initialized
INFO - 2021-12-10 12:50:55 --> CRSF cookie sent
DEBUG - 2021-12-10 12:50:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:50:55 --> Input Class Initialized
INFO - 2021-12-10 12:50:55 --> Language Class Initialized
INFO - 2021-12-10 12:50:55 --> Loader Class Initialized
INFO - 2021-12-10 12:50:55 --> Helper loaded: url_helper
INFO - 2021-12-10 12:50:55 --> Helper loaded: form_helper
INFO - 2021-12-10 12:50:55 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:50:55 --> Helper loaded: language_helper
INFO - 2021-12-10 12:50:55 --> Helper loaded: file_helper
INFO - 2021-12-10 12:50:55 --> Helper loaded: date_helper
INFO - 2021-12-10 12:50:55 --> Database Driver Class Initialized
INFO - 2021-12-10 12:50:55 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:50:55 --> Parser Class Initialized
INFO - 2021-12-10 12:50:55 --> Model Class Initialized
INFO - 2021-12-10 12:50:55 --> Model Class Initialized
INFO - 2021-12-10 12:50:55 --> Controller Class Initialized
INFO - 2021-12-10 12:50:55 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:50:55 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:50:55 --> Could not find the language line "today"
INFO - 2021-12-10 12:50:55 --> Model Class Initialized
INFO - 2021-12-10 12:50:55 --> Helper loaded: text_helper
INFO - 2021-12-10 12:50:55 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:50:55 --> Form Validation Class Initialized
ERROR - 2021-12-10 12:50:55 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:50:55 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:50:55 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:50:55 --> Could not find the language line "backups"
INFO - 2021-12-10 12:50:55 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:50:55 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 12:50:55 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:50:55 --> Could not find the language line "due"
ERROR - 2021-12-10 12:50:55 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:50:55 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:50:55 --> Final output sent to browser
DEBUG - 2021-12-10 12:50:55 --> Total execution time: 0.3813
INFO - 2021-12-10 12:50:55 --> Config Class Initialized
INFO - 2021-12-10 12:50:55 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:50:55 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:50:55 --> Utf8 Class Initialized
INFO - 2021-12-10 12:50:55 --> URI Class Initialized
INFO - 2021-12-10 12:50:55 --> Router Class Initialized
INFO - 2021-12-10 12:50:55 --> Output Class Initialized
INFO - 2021-12-10 12:50:55 --> Security Class Initialized
INFO - 2021-12-10 12:50:55 --> CRSF cookie sent
INFO - 2021-12-10 12:50:55 --> CSRF token verified
DEBUG - 2021-12-10 12:50:55 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:50:55 --> Input Class Initialized
INFO - 2021-12-10 12:50:55 --> Language Class Initialized
INFO - 2021-12-10 12:50:55 --> Loader Class Initialized
INFO - 2021-12-10 12:50:55 --> Helper loaded: url_helper
INFO - 2021-12-10 12:50:55 --> Helper loaded: form_helper
INFO - 2021-12-10 12:50:55 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:50:55 --> Helper loaded: language_helper
INFO - 2021-12-10 12:50:55 --> Helper loaded: file_helper
INFO - 2021-12-10 12:50:55 --> Helper loaded: date_helper
INFO - 2021-12-10 12:50:55 --> Database Driver Class Initialized
INFO - 2021-12-10 12:50:55 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:50:55 --> Parser Class Initialized
INFO - 2021-12-10 12:50:55 --> Model Class Initialized
INFO - 2021-12-10 12:50:56 --> Model Class Initialized
INFO - 2021-12-10 12:50:56 --> Controller Class Initialized
INFO - 2021-12-10 12:50:56 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:50:56 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:50:56 --> Could not find the language line "today"
INFO - 2021-12-10 12:50:56 --> Model Class Initialized
INFO - 2021-12-10 12:50:56 --> Helper loaded: text_helper
INFO - 2021-12-10 12:50:56 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:50:56 --> Form Validation Class Initialized
INFO - 2021-12-10 12:50:56 --> Final output sent to browser
DEBUG - 2021-12-10 12:50:56 --> Total execution time: 0.3708
INFO - 2021-12-10 12:50:59 --> Config Class Initialized
INFO - 2021-12-10 12:50:59 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:50:59 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:50:59 --> Utf8 Class Initialized
INFO - 2021-12-10 12:50:59 --> URI Class Initialized
INFO - 2021-12-10 12:50:59 --> Router Class Initialized
INFO - 2021-12-10 12:50:59 --> Output Class Initialized
INFO - 2021-12-10 12:50:59 --> Security Class Initialized
INFO - 2021-12-10 12:50:59 --> CRSF cookie sent
DEBUG - 2021-12-10 12:50:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:50:59 --> Input Class Initialized
INFO - 2021-12-10 12:50:59 --> Language Class Initialized
INFO - 2021-12-10 12:50:59 --> Loader Class Initialized
INFO - 2021-12-10 12:50:59 --> Helper loaded: url_helper
INFO - 2021-12-10 12:50:59 --> Helper loaded: form_helper
INFO - 2021-12-10 12:50:59 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:50:59 --> Helper loaded: language_helper
INFO - 2021-12-10 12:50:59 --> Helper loaded: file_helper
INFO - 2021-12-10 12:50:59 --> Helper loaded: date_helper
INFO - 2021-12-10 12:50:59 --> Database Driver Class Initialized
INFO - 2021-12-10 12:50:59 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:50:59 --> Parser Class Initialized
INFO - 2021-12-10 12:50:59 --> Model Class Initialized
INFO - 2021-12-10 12:50:59 --> Model Class Initialized
INFO - 2021-12-10 12:50:59 --> Controller Class Initialized
INFO - 2021-12-10 12:50:59 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:51:00 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:51:00 --> Could not find the language line "today"
INFO - 2021-12-10 12:51:00 --> Model Class Initialized
INFO - 2021-12-10 12:51:00 --> Helper loaded: text_helper
INFO - 2021-12-10 12:51:00 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:51:00 --> Form Validation Class Initialized
DEBUG - 2021-12-10 12:51:00 --> Zend Class Initialized
DEBUG - 2021-12-10 12:51:00 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 12:51:00 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 12:51:00 --> Final output sent to browser
DEBUG - 2021-12-10 12:51:00 --> Total execution time: 0.8457
INFO - 2021-12-10 12:51:45 --> Config Class Initialized
INFO - 2021-12-10 12:51:45 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:51:45 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:51:45 --> Utf8 Class Initialized
INFO - 2021-12-10 12:51:45 --> URI Class Initialized
INFO - 2021-12-10 12:51:45 --> Router Class Initialized
INFO - 2021-12-10 12:51:45 --> Output Class Initialized
INFO - 2021-12-10 12:51:45 --> Security Class Initialized
INFO - 2021-12-10 12:51:45 --> CRSF cookie sent
DEBUG - 2021-12-10 12:51:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:51:45 --> Input Class Initialized
INFO - 2021-12-10 12:51:45 --> Language Class Initialized
INFO - 2021-12-10 12:51:45 --> Loader Class Initialized
INFO - 2021-12-10 12:51:45 --> Helper loaded: url_helper
INFO - 2021-12-10 12:51:45 --> Helper loaded: form_helper
INFO - 2021-12-10 12:51:45 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:51:45 --> Helper loaded: language_helper
INFO - 2021-12-10 12:51:45 --> Helper loaded: file_helper
INFO - 2021-12-10 12:51:45 --> Helper loaded: date_helper
INFO - 2021-12-10 12:51:45 --> Database Driver Class Initialized
INFO - 2021-12-10 12:51:45 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:51:45 --> Parser Class Initialized
INFO - 2021-12-10 12:51:45 --> Model Class Initialized
INFO - 2021-12-10 12:51:45 --> Model Class Initialized
INFO - 2021-12-10 12:51:45 --> Controller Class Initialized
INFO - 2021-12-10 12:51:45 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:51:45 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:51:45 --> Could not find the language line "today"
INFO - 2021-12-10 12:51:45 --> Model Class Initialized
INFO - 2021-12-10 12:51:45 --> Helper loaded: text_helper
INFO - 2021-12-10 12:51:45 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:51:45 --> Form Validation Class Initialized
ERROR - 2021-12-10 12:51:45 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:51:45 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:51:45 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:51:45 --> Could not find the language line "backups"
INFO - 2021-12-10 12:51:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:51:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 12:51:45 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:51:45 --> Could not find the language line "due"
ERROR - 2021-12-10 12:51:45 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:51:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:51:45 --> Final output sent to browser
DEBUG - 2021-12-10 12:51:45 --> Total execution time: 0.3117
INFO - 2021-12-10 12:51:45 --> Config Class Initialized
INFO - 2021-12-10 12:51:45 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:51:45 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:51:45 --> Utf8 Class Initialized
INFO - 2021-12-10 12:51:45 --> URI Class Initialized
INFO - 2021-12-10 12:51:45 --> Router Class Initialized
INFO - 2021-12-10 12:51:45 --> Output Class Initialized
INFO - 2021-12-10 12:51:45 --> Security Class Initialized
INFO - 2021-12-10 12:51:45 --> CRSF cookie sent
INFO - 2021-12-10 12:51:45 --> CSRF token verified
DEBUG - 2021-12-10 12:51:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:51:45 --> Input Class Initialized
INFO - 2021-12-10 12:51:45 --> Language Class Initialized
INFO - 2021-12-10 12:51:45 --> Loader Class Initialized
INFO - 2021-12-10 12:51:45 --> Helper loaded: url_helper
INFO - 2021-12-10 12:51:45 --> Helper loaded: form_helper
INFO - 2021-12-10 12:51:45 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:51:45 --> Helper loaded: language_helper
INFO - 2021-12-10 12:51:45 --> Helper loaded: file_helper
INFO - 2021-12-10 12:51:45 --> Helper loaded: date_helper
INFO - 2021-12-10 12:51:45 --> Database Driver Class Initialized
INFO - 2021-12-10 12:51:46 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:51:46 --> Parser Class Initialized
INFO - 2021-12-10 12:51:46 --> Model Class Initialized
INFO - 2021-12-10 12:51:46 --> Model Class Initialized
INFO - 2021-12-10 12:51:46 --> Controller Class Initialized
INFO - 2021-12-10 12:51:46 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:51:46 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:51:46 --> Could not find the language line "today"
INFO - 2021-12-10 12:51:46 --> Model Class Initialized
INFO - 2021-12-10 12:51:46 --> Helper loaded: text_helper
INFO - 2021-12-10 12:51:46 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:51:46 --> Form Validation Class Initialized
INFO - 2021-12-10 12:51:46 --> Final output sent to browser
DEBUG - 2021-12-10 12:51:46 --> Total execution time: 0.4643
INFO - 2021-12-10 12:51:46 --> Config Class Initialized
INFO - 2021-12-10 12:51:46 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:51:46 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:51:46 --> Utf8 Class Initialized
INFO - 2021-12-10 12:51:46 --> URI Class Initialized
INFO - 2021-12-10 12:51:46 --> Router Class Initialized
INFO - 2021-12-10 12:51:46 --> Output Class Initialized
INFO - 2021-12-10 12:51:46 --> Security Class Initialized
INFO - 2021-12-10 12:51:46 --> CRSF cookie sent
DEBUG - 2021-12-10 12:51:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:51:46 --> Input Class Initialized
INFO - 2021-12-10 12:51:46 --> Language Class Initialized
INFO - 2021-12-10 12:51:46 --> Loader Class Initialized
INFO - 2021-12-10 12:51:46 --> Helper loaded: url_helper
INFO - 2021-12-10 12:51:46 --> Helper loaded: form_helper
INFO - 2021-12-10 12:51:46 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:51:46 --> Helper loaded: language_helper
INFO - 2021-12-10 12:51:46 --> Helper loaded: file_helper
INFO - 2021-12-10 12:51:46 --> Helper loaded: date_helper
INFO - 2021-12-10 12:51:46 --> Database Driver Class Initialized
INFO - 2021-12-10 12:51:46 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:51:46 --> Parser Class Initialized
INFO - 2021-12-10 12:51:46 --> Model Class Initialized
INFO - 2021-12-10 12:51:46 --> Model Class Initialized
INFO - 2021-12-10 12:51:46 --> Controller Class Initialized
INFO - 2021-12-10 12:51:46 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:51:46 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:51:46 --> Could not find the language line "today"
INFO - 2021-12-10 12:51:46 --> Language file loaded: language/spanish/sales_lang.php
INFO - 2021-12-10 12:51:46 --> Form Validation Class Initialized
INFO - 2021-12-10 12:51:46 --> Model Class Initialized
ERROR - 2021-12-10 12:51:46 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:51:46 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:51:46 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:51:46 --> Could not find the language line "backups"
INFO - 2021-12-10 12:51:46 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:51:46 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/sales/index.php
ERROR - 2021-12-10 12:51:46 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:51:46 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:51:46 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:51:46 --> Final output sent to browser
DEBUG - 2021-12-10 12:51:46 --> Total execution time: 0.3183
INFO - 2021-12-10 12:51:46 --> Config Class Initialized
INFO - 2021-12-10 12:51:46 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:51:46 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:51:46 --> Utf8 Class Initialized
INFO - 2021-12-10 12:51:46 --> URI Class Initialized
INFO - 2021-12-10 12:51:46 --> Router Class Initialized
INFO - 2021-12-10 12:51:46 --> Output Class Initialized
INFO - 2021-12-10 12:51:46 --> Security Class Initialized
INFO - 2021-12-10 12:51:46 --> CRSF cookie sent
INFO - 2021-12-10 12:51:46 --> CSRF token verified
DEBUG - 2021-12-10 12:51:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:51:46 --> Input Class Initialized
INFO - 2021-12-10 12:51:46 --> Language Class Initialized
INFO - 2021-12-10 12:51:46 --> Loader Class Initialized
INFO - 2021-12-10 12:51:46 --> Helper loaded: url_helper
INFO - 2021-12-10 12:51:46 --> Helper loaded: form_helper
INFO - 2021-12-10 12:51:46 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:51:46 --> Helper loaded: language_helper
INFO - 2021-12-10 12:51:47 --> Helper loaded: file_helper
INFO - 2021-12-10 12:51:47 --> Helper loaded: date_helper
INFO - 2021-12-10 12:51:47 --> Database Driver Class Initialized
INFO - 2021-12-10 12:51:47 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:51:47 --> Parser Class Initialized
INFO - 2021-12-10 12:51:47 --> Model Class Initialized
INFO - 2021-12-10 12:51:47 --> Model Class Initialized
INFO - 2021-12-10 12:51:47 --> Controller Class Initialized
INFO - 2021-12-10 12:51:47 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:51:47 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:51:47 --> Could not find the language line "today"
INFO - 2021-12-10 12:51:47 --> Language file loaded: language/spanish/sales_lang.php
INFO - 2021-12-10 12:51:47 --> Form Validation Class Initialized
INFO - 2021-12-10 12:51:47 --> Model Class Initialized
ERROR - 2021-12-10 12:51:47 --> Query error: Unknown column 'sales.grand_total' in 'field list' - Invalid query: SELECT `sma_sales`.`id`, `sma_sales`.`date`, `sma_sales`.`reference_no`, `sma_sales`.`biller`, `sma_sales`.`customer`, `sma_sales`.`sale_status`, `sma_sales`.`grand_total`, `sma_sales`.`paid`, (sales.grand_total-paid) as balance, `sma_sales`.`payment_status`
FROM `sma_sales`
WHERE `pos` != 1
ORDER BY `sma_sales`.`date` DESC
 LIMIT 10
ERROR - 2021-12-10 12:51:47 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 12:51:58 --> Config Class Initialized
INFO - 2021-12-10 12:51:58 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:51:58 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:51:58 --> Utf8 Class Initialized
INFO - 2021-12-10 12:51:58 --> URI Class Initialized
INFO - 2021-12-10 12:51:58 --> Router Class Initialized
INFO - 2021-12-10 12:51:58 --> Output Class Initialized
INFO - 2021-12-10 12:51:58 --> Security Class Initialized
INFO - 2021-12-10 12:51:58 --> CRSF cookie sent
DEBUG - 2021-12-10 12:51:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:51:58 --> Input Class Initialized
INFO - 2021-12-10 12:51:58 --> Language Class Initialized
INFO - 2021-12-10 12:51:58 --> Loader Class Initialized
INFO - 2021-12-10 12:51:58 --> Helper loaded: url_helper
INFO - 2021-12-10 12:51:58 --> Helper loaded: form_helper
INFO - 2021-12-10 12:51:58 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:51:58 --> Helper loaded: language_helper
INFO - 2021-12-10 12:51:58 --> Helper loaded: file_helper
INFO - 2021-12-10 12:51:58 --> Helper loaded: date_helper
INFO - 2021-12-10 12:51:58 --> Database Driver Class Initialized
INFO - 2021-12-10 12:51:58 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:51:58 --> Parser Class Initialized
INFO - 2021-12-10 12:51:58 --> Model Class Initialized
INFO - 2021-12-10 12:51:58 --> Model Class Initialized
INFO - 2021-12-10 12:51:58 --> Controller Class Initialized
INFO - 2021-12-10 12:51:58 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:51:58 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:51:58 --> Could not find the language line "today"
INFO - 2021-12-10 12:51:58 --> Model Class Initialized
INFO - 2021-12-10 12:51:58 --> Helper loaded: text_helper
INFO - 2021-12-10 12:51:58 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:51:59 --> Form Validation Class Initialized
INFO - 2021-12-10 12:51:59 --> Config Class Initialized
INFO - 2021-12-10 12:51:59 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:51:59 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:51:59 --> Utf8 Class Initialized
INFO - 2021-12-10 12:51:59 --> URI Class Initialized
INFO - 2021-12-10 12:51:59 --> Router Class Initialized
INFO - 2021-12-10 12:51:59 --> Output Class Initialized
INFO - 2021-12-10 12:51:59 --> Security Class Initialized
INFO - 2021-12-10 12:51:59 --> CRSF cookie sent
DEBUG - 2021-12-10 12:51:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:51:59 --> Input Class Initialized
INFO - 2021-12-10 12:51:59 --> Language Class Initialized
INFO - 2021-12-10 12:51:59 --> Loader Class Initialized
INFO - 2021-12-10 12:51:59 --> Helper loaded: url_helper
INFO - 2021-12-10 12:51:59 --> Helper loaded: form_helper
INFO - 2021-12-10 12:51:59 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:51:59 --> Helper loaded: language_helper
INFO - 2021-12-10 12:51:59 --> Helper loaded: file_helper
INFO - 2021-12-10 12:51:59 --> Helper loaded: date_helper
INFO - 2021-12-10 12:51:59 --> Database Driver Class Initialized
INFO - 2021-12-10 12:51:59 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:51:59 --> Parser Class Initialized
INFO - 2021-12-10 12:51:59 --> Model Class Initialized
INFO - 2021-12-10 12:51:59 --> Model Class Initialized
INFO - 2021-12-10 12:51:59 --> Controller Class Initialized
INFO - 2021-12-10 12:51:59 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:51:59 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:51:59 --> Could not find the language line "today"
INFO - 2021-12-10 12:51:59 --> Model Class Initialized
INFO - 2021-12-10 12:51:59 --> Helper loaded: text_helper
INFO - 2021-12-10 12:51:59 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:51:59 --> Form Validation Class Initialized
ERROR - 2021-12-10 12:51:59 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 12:51:59 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 12:51:59 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:51:59 --> Could not find the language line "backups"
INFO - 2021-12-10 12:51:59 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 12:51:59 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 12:51:59 --> Could not find the language line "ordered"
ERROR - 2021-12-10 12:51:59 --> Could not find the language line "due"
ERROR - 2021-12-10 12:51:59 --> Could not find the language line "transferring"
INFO - 2021-12-10 12:51:59 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 12:51:59 --> Final output sent to browser
DEBUG - 2021-12-10 12:51:59 --> Total execution time: 0.1876
INFO - 2021-12-10 12:52:04 --> Config Class Initialized
INFO - 2021-12-10 12:52:04 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:52:04 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:52:04 --> Utf8 Class Initialized
INFO - 2021-12-10 12:52:04 --> URI Class Initialized
INFO - 2021-12-10 12:52:04 --> Router Class Initialized
INFO - 2021-12-10 12:52:04 --> Output Class Initialized
INFO - 2021-12-10 12:52:04 --> Security Class Initialized
INFO - 2021-12-10 12:52:04 --> CRSF cookie sent
INFO - 2021-12-10 12:52:04 --> CSRF token verified
DEBUG - 2021-12-10 12:52:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:52:04 --> Input Class Initialized
INFO - 2021-12-10 12:52:04 --> Language Class Initialized
INFO - 2021-12-10 12:52:04 --> Loader Class Initialized
INFO - 2021-12-10 12:52:04 --> Helper loaded: url_helper
INFO - 2021-12-10 12:52:04 --> Helper loaded: form_helper
INFO - 2021-12-10 12:52:04 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:52:04 --> Helper loaded: language_helper
INFO - 2021-12-10 12:52:04 --> Helper loaded: file_helper
INFO - 2021-12-10 12:52:04 --> Helper loaded: date_helper
INFO - 2021-12-10 12:52:04 --> Database Driver Class Initialized
INFO - 2021-12-10 12:52:04 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:52:04 --> Parser Class Initialized
INFO - 2021-12-10 12:52:04 --> Model Class Initialized
INFO - 2021-12-10 12:52:04 --> Model Class Initialized
INFO - 2021-12-10 12:52:04 --> Controller Class Initialized
INFO - 2021-12-10 12:52:04 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:52:04 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:52:04 --> Could not find the language line "today"
INFO - 2021-12-10 12:52:04 --> Model Class Initialized
INFO - 2021-12-10 12:52:04 --> Helper loaded: text_helper
INFO - 2021-12-10 12:52:04 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:52:04 --> Form Validation Class Initialized
INFO - 2021-12-10 12:52:04 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 12:52:04 --> Config Class Initialized
INFO - 2021-12-10 12:52:04 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:52:04 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:52:04 --> Utf8 Class Initialized
INFO - 2021-12-10 12:52:04 --> URI Class Initialized
INFO - 2021-12-10 12:52:04 --> Router Class Initialized
INFO - 2021-12-10 12:52:04 --> Output Class Initialized
INFO - 2021-12-10 12:52:04 --> Security Class Initialized
INFO - 2021-12-10 12:52:04 --> CRSF cookie sent
DEBUG - 2021-12-10 12:52:04 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:52:04 --> Input Class Initialized
INFO - 2021-12-10 12:52:04 --> Language Class Initialized
INFO - 2021-12-10 12:52:04 --> Loader Class Initialized
INFO - 2021-12-10 12:52:04 --> Helper loaded: url_helper
INFO - 2021-12-10 12:52:04 --> Helper loaded: form_helper
INFO - 2021-12-10 12:52:04 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:52:04 --> Helper loaded: language_helper
INFO - 2021-12-10 12:52:04 --> Helper loaded: file_helper
INFO - 2021-12-10 12:52:04 --> Helper loaded: date_helper
INFO - 2021-12-10 12:52:04 --> Database Driver Class Initialized
INFO - 2021-12-10 12:52:04 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:52:04 --> Parser Class Initialized
INFO - 2021-12-10 12:52:04 --> Model Class Initialized
INFO - 2021-12-10 12:52:04 --> Model Class Initialized
INFO - 2021-12-10 12:52:04 --> Controller Class Initialized
INFO - 2021-12-10 12:52:04 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:52:04 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:52:04 --> Could not find the language line "today"
INFO - 2021-12-10 12:52:04 --> Model Class Initialized
INFO - 2021-12-10 12:52:04 --> Helper loaded: text_helper
INFO - 2021-12-10 12:52:04 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:52:04 --> Form Validation Class Initialized
INFO - 2021-12-10 12:52:04 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 12:52:04 --> Pagination Class Initialized
ERROR - 2021-12-10 12:52:04 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 12:52:04 --> Could not find the language line "order"
ERROR - 2021-12-10 12:52:04 --> Could not find the language line "bill"
INFO - 2021-12-10 12:52:04 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 12:52:04 --> Final output sent to browser
DEBUG - 2021-12-10 12:52:04 --> Total execution time: 0.2258
INFO - 2021-12-10 12:52:04 --> Config Class Initialized
INFO - 2021-12-10 12:52:04 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:52:04 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:52:04 --> Utf8 Class Initialized
INFO - 2021-12-10 12:52:04 --> URI Class Initialized
INFO - 2021-12-10 12:52:04 --> Router Class Initialized
INFO - 2021-12-10 12:52:04 --> Output Class Initialized
INFO - 2021-12-10 12:52:04 --> Security Class Initialized
INFO - 2021-12-10 12:52:04 --> CRSF cookie sent
DEBUG - 2021-12-10 12:52:05 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:52:05 --> Input Class Initialized
INFO - 2021-12-10 12:52:05 --> Language Class Initialized
INFO - 2021-12-10 12:52:05 --> Loader Class Initialized
INFO - 2021-12-10 12:52:05 --> Helper loaded: url_helper
INFO - 2021-12-10 12:52:05 --> Helper loaded: form_helper
INFO - 2021-12-10 12:52:05 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:52:05 --> Helper loaded: language_helper
INFO - 2021-12-10 12:52:05 --> Helper loaded: file_helper
INFO - 2021-12-10 12:52:05 --> Helper loaded: date_helper
INFO - 2021-12-10 12:52:05 --> Database Driver Class Initialized
INFO - 2021-12-10 12:52:05 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:52:05 --> Parser Class Initialized
INFO - 2021-12-10 12:52:05 --> Model Class Initialized
INFO - 2021-12-10 12:52:05 --> Model Class Initialized
INFO - 2021-12-10 12:52:05 --> Controller Class Initialized
INFO - 2021-12-10 12:52:05 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:52:05 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:52:05 --> Could not find the language line "today"
INFO - 2021-12-10 12:52:05 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 12:52:05 --> Form Validation Class Initialized
INFO - 2021-12-10 12:52:05 --> Model Class Initialized
INFO - 2021-12-10 12:52:05 --> Final output sent to browser
DEBUG - 2021-12-10 12:52:05 --> Total execution time: 0.1806
INFO - 2021-12-10 12:52:06 --> Config Class Initialized
INFO - 2021-12-10 12:52:06 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:52:06 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:52:06 --> Utf8 Class Initialized
INFO - 2021-12-10 12:52:06 --> URI Class Initialized
INFO - 2021-12-10 12:52:06 --> Router Class Initialized
INFO - 2021-12-10 12:52:06 --> Output Class Initialized
INFO - 2021-12-10 12:52:06 --> Security Class Initialized
INFO - 2021-12-10 12:52:06 --> CRSF cookie sent
DEBUG - 2021-12-10 12:52:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:52:06 --> Input Class Initialized
INFO - 2021-12-10 12:52:06 --> Language Class Initialized
INFO - 2021-12-10 12:52:06 --> Loader Class Initialized
INFO - 2021-12-10 12:52:06 --> Helper loaded: url_helper
INFO - 2021-12-10 12:52:06 --> Helper loaded: form_helper
INFO - 2021-12-10 12:52:06 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:52:06 --> Helper loaded: language_helper
INFO - 2021-12-10 12:52:06 --> Helper loaded: file_helper
INFO - 2021-12-10 12:52:06 --> Helper loaded: date_helper
INFO - 2021-12-10 12:52:06 --> Database Driver Class Initialized
INFO - 2021-12-10 12:52:06 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:52:06 --> Parser Class Initialized
INFO - 2021-12-10 12:52:06 --> Model Class Initialized
INFO - 2021-12-10 12:52:06 --> Model Class Initialized
INFO - 2021-12-10 12:52:06 --> Controller Class Initialized
INFO - 2021-12-10 12:52:06 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:52:06 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:52:06 --> Could not find the language line "today"
INFO - 2021-12-10 12:52:06 --> Model Class Initialized
INFO - 2021-12-10 12:52:06 --> Helper loaded: text_helper
INFO - 2021-12-10 12:52:06 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:52:06 --> Form Validation Class Initialized
INFO - 2021-12-10 12:52:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 12:52:06 --> Final output sent to browser
DEBUG - 2021-12-10 12:52:06 --> Total execution time: 0.3127
INFO - 2021-12-10 12:52:12 --> Config Class Initialized
INFO - 2021-12-10 12:52:12 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:52:12 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:52:12 --> Utf8 Class Initialized
INFO - 2021-12-10 12:52:12 --> URI Class Initialized
INFO - 2021-12-10 12:52:12 --> Router Class Initialized
INFO - 2021-12-10 12:52:12 --> Output Class Initialized
INFO - 2021-12-10 12:52:12 --> Security Class Initialized
INFO - 2021-12-10 12:52:12 --> CRSF cookie sent
INFO - 2021-12-10 12:52:12 --> CSRF token verified
DEBUG - 2021-12-10 12:52:12 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:52:12 --> Input Class Initialized
INFO - 2021-12-10 12:52:12 --> Language Class Initialized
INFO - 2021-12-10 12:52:12 --> Loader Class Initialized
INFO - 2021-12-10 12:52:12 --> Helper loaded: url_helper
INFO - 2021-12-10 12:52:12 --> Helper loaded: form_helper
INFO - 2021-12-10 12:52:12 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:52:12 --> Helper loaded: language_helper
INFO - 2021-12-10 12:52:12 --> Helper loaded: file_helper
INFO - 2021-12-10 12:52:12 --> Helper loaded: date_helper
INFO - 2021-12-10 12:52:12 --> Database Driver Class Initialized
INFO - 2021-12-10 12:52:12 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:52:12 --> Parser Class Initialized
INFO - 2021-12-10 12:52:12 --> Model Class Initialized
INFO - 2021-12-10 12:52:12 --> Model Class Initialized
INFO - 2021-12-10 12:52:12 --> Controller Class Initialized
INFO - 2021-12-10 12:52:12 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:52:12 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:52:12 --> Could not find the language line "today"
INFO - 2021-12-10 12:52:12 --> Model Class Initialized
INFO - 2021-12-10 12:52:12 --> Helper loaded: text_helper
INFO - 2021-12-10 12:52:12 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:52:12 --> Form Validation Class Initialized
INFO - 2021-12-10 12:52:12 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 12:52:12 --> Could not find the language line "you_will_loss_sale_data"
ERROR - 2021-12-10 12:52:12 --> Could not find the language line "sale_no"
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 18
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 18
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 28
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 28
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 36
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 36
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 41
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 41
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 46
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 46
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 51
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 51
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 56
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 61
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 61
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 66
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 66
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 129
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 129
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 129
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 129
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 140
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 140
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 140
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 140
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 143
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 143
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 143
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 143
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 146
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 146
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 146
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 146
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 157
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 157
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 157
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 157
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 167
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 167
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 170
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 170
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 171
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 171
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 171
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 171
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 187
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 187
DEBUG - 2021-12-10 12:52:12 --> Zend Class Initialized
DEBUG - 2021-12-10 12:52:12 --> Zend Class Zend/Barcode Loaded
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 189
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 189
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 190
ERROR - 2021-12-10 12:52:12 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 190
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 192
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 192
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 200
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 200
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 202
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 202
ERROR - 2021-12-10 12:52:13 --> Could not find the language line "sale_status"
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 204
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 204
ERROR - 2021-12-10 12:52:13 --> Could not find the language line ""
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 207
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 207
ERROR - 2021-12-10 12:52:13 --> Could not find the language line ""
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 235
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 235
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: rows C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 248
ERROR - 2021-12-10 12:52:13 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 248
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 294
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 294
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 300
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 300
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 302
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 302
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 310
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 310
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 310
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 310
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 327
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 331
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 331
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 335
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 335
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 339
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 339
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 348
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 348
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 356
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 356
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 363
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 363
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 363
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 363
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 373
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 373
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 373
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 373
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 381
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 381
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 381
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 381
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 407
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 407
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 407
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 407
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 409
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 409
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 410
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 410
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 419
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 419
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: paypal C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 422
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 422
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: skrill C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 459
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 459
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: payments C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 539
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 539
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 547
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 547
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 551
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 551
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 555
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 555
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 559
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 559
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 563
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 563
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 567
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 567
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 573
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 573
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 576
ERROR - 2021-12-10 12:52:13 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 576
INFO - 2021-12-10 12:52:13 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 12:52:13 --> Final output sent to browser
DEBUG - 2021-12-10 12:52:13 --> Total execution time: 1.3563
INFO - 2021-12-10 12:52:44 --> Config Class Initialized
INFO - 2021-12-10 12:52:44 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:52:44 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:52:44 --> Utf8 Class Initialized
INFO - 2021-12-10 12:52:44 --> URI Class Initialized
INFO - 2021-12-10 12:52:44 --> Router Class Initialized
INFO - 2021-12-10 12:52:44 --> Output Class Initialized
INFO - 2021-12-10 12:52:44 --> Security Class Initialized
INFO - 2021-12-10 12:52:45 --> CRSF cookie sent
INFO - 2021-12-10 12:52:45 --> CSRF token verified
DEBUG - 2021-12-10 12:52:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:52:45 --> Input Class Initialized
INFO - 2021-12-10 12:52:45 --> Language Class Initialized
INFO - 2021-12-10 12:52:45 --> Loader Class Initialized
INFO - 2021-12-10 12:52:45 --> Helper loaded: url_helper
INFO - 2021-12-10 12:52:45 --> Helper loaded: form_helper
INFO - 2021-12-10 12:52:45 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:52:45 --> Helper loaded: language_helper
INFO - 2021-12-10 12:52:45 --> Helper loaded: file_helper
INFO - 2021-12-10 12:52:45 --> Helper loaded: date_helper
INFO - 2021-12-10 12:52:45 --> Database Driver Class Initialized
INFO - 2021-12-10 12:52:45 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:52:45 --> Parser Class Initialized
INFO - 2021-12-10 12:52:45 --> Model Class Initialized
INFO - 2021-12-10 12:52:45 --> Model Class Initialized
INFO - 2021-12-10 12:52:45 --> Controller Class Initialized
INFO - 2021-12-10 12:52:45 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:52:45 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:52:45 --> Could not find the language line "today"
INFO - 2021-12-10 12:52:45 --> Model Class Initialized
INFO - 2021-12-10 12:52:45 --> Helper loaded: text_helper
INFO - 2021-12-10 12:52:45 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:52:45 --> Form Validation Class Initialized
INFO - 2021-12-10 12:52:45 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 12:52:45 --> Could not find the language line "you_will_loss_sale_data"
ERROR - 2021-12-10 12:52:45 --> Could not find the language line "sale_no"
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 18
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 18
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 23
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 115
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 115
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 132
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 132
DEBUG - 2021-12-10 12:52:45 --> Zend Class Initialized
DEBUG - 2021-12-10 12:52:45 --> Zend Class Zend/Barcode Loaded
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 134
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 134
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 135
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 135
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 145
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 145
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 147
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 147
ERROR - 2021-12-10 12:52:45 --> Could not find the language line "sale_status"
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:52:45 --> Could not find the language line ""
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:52:45 --> Could not find the language line ""
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 180
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 180
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: rows C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 193
ERROR - 2021-12-10 12:52:45 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 193
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 239
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 239
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 245
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 245
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 247
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 247
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 272
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 276
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 276
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 280
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 280
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 284
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 284
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 293
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 293
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 301
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 301
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 354
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 354
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 355
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 355
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 364
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 364
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: paypal C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 367
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 367
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Undefined variable: skrill C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 404
ERROR - 2021-12-10 12:52:45 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 404
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Undefined variable: payments C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 441
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 484
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 484
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 492
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 492
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 500
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 500
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 504
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 504
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 508
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 508
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 512
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 512
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 518
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 518
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 521
ERROR - 2021-12-10 12:52:46 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 521
INFO - 2021-12-10 12:52:46 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 12:52:46 --> Final output sent to browser
DEBUG - 2021-12-10 12:52:46 --> Total execution time: 1.1965
INFO - 2021-12-10 12:53:18 --> Config Class Initialized
INFO - 2021-12-10 12:53:18 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:53:18 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:53:18 --> Utf8 Class Initialized
INFO - 2021-12-10 12:53:18 --> URI Class Initialized
INFO - 2021-12-10 12:53:18 --> Router Class Initialized
INFO - 2021-12-10 12:53:18 --> Output Class Initialized
INFO - 2021-12-10 12:53:18 --> Security Class Initialized
INFO - 2021-12-10 12:53:18 --> CRSF cookie sent
INFO - 2021-12-10 12:53:18 --> CSRF token verified
DEBUG - 2021-12-10 12:53:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:53:18 --> Input Class Initialized
INFO - 2021-12-10 12:53:18 --> Language Class Initialized
INFO - 2021-12-10 12:53:18 --> Loader Class Initialized
INFO - 2021-12-10 12:53:18 --> Helper loaded: url_helper
INFO - 2021-12-10 12:53:18 --> Helper loaded: form_helper
INFO - 2021-12-10 12:53:18 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:53:18 --> Helper loaded: language_helper
INFO - 2021-12-10 12:53:18 --> Helper loaded: file_helper
INFO - 2021-12-10 12:53:18 --> Helper loaded: date_helper
INFO - 2021-12-10 12:53:18 --> Database Driver Class Initialized
INFO - 2021-12-10 12:53:18 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:53:18 --> Parser Class Initialized
INFO - 2021-12-10 12:53:18 --> Model Class Initialized
INFO - 2021-12-10 12:53:18 --> Model Class Initialized
INFO - 2021-12-10 12:53:18 --> Controller Class Initialized
INFO - 2021-12-10 12:53:18 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:53:18 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:53:18 --> Could not find the language line "today"
INFO - 2021-12-10 12:53:18 --> Model Class Initialized
INFO - 2021-12-10 12:53:18 --> Helper loaded: text_helper
INFO - 2021-12-10 12:53:18 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:53:18 --> Form Validation Class Initialized
INFO - 2021-12-10 12:53:18 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 12:53:18 --> Severity: error --> Exception: syntax error, unexpected '.1' (T_DNUMBER), expecting ',' or ';' C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 18
INFO - 2021-12-10 12:53:58 --> Config Class Initialized
INFO - 2021-12-10 12:53:58 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:53:58 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:53:58 --> Utf8 Class Initialized
INFO - 2021-12-10 12:53:58 --> URI Class Initialized
INFO - 2021-12-10 12:53:58 --> Router Class Initialized
INFO - 2021-12-10 12:53:58 --> Output Class Initialized
INFO - 2021-12-10 12:53:58 --> Security Class Initialized
INFO - 2021-12-10 12:53:58 --> CRSF cookie sent
INFO - 2021-12-10 12:53:58 --> CSRF token verified
DEBUG - 2021-12-10 12:53:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:53:58 --> Input Class Initialized
INFO - 2021-12-10 12:53:58 --> Language Class Initialized
INFO - 2021-12-10 12:53:58 --> Loader Class Initialized
INFO - 2021-12-10 12:53:58 --> Helper loaded: url_helper
INFO - 2021-12-10 12:53:58 --> Helper loaded: form_helper
INFO - 2021-12-10 12:53:58 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:53:58 --> Helper loaded: language_helper
INFO - 2021-12-10 12:53:58 --> Helper loaded: file_helper
INFO - 2021-12-10 12:53:58 --> Helper loaded: date_helper
INFO - 2021-12-10 12:53:58 --> Database Driver Class Initialized
INFO - 2021-12-10 12:53:58 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:53:58 --> Parser Class Initialized
INFO - 2021-12-10 12:53:58 --> Model Class Initialized
INFO - 2021-12-10 12:53:58 --> Model Class Initialized
INFO - 2021-12-10 12:53:58 --> Controller Class Initialized
INFO - 2021-12-10 12:53:58 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:53:58 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:53:58 --> Could not find the language line "today"
INFO - 2021-12-10 12:53:58 --> Model Class Initialized
INFO - 2021-12-10 12:53:58 --> Helper loaded: text_helper
INFO - 2021-12-10 12:53:58 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:53:58 --> Form Validation Class Initialized
INFO - 2021-12-10 12:53:58 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 12:53:59 --> Could not find the language line "you_will_loss_sale_data"
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 23
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 115
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 115
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 132
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 132
DEBUG - 2021-12-10 12:53:59 --> Zend Class Initialized
DEBUG - 2021-12-10 12:53:59 --> Zend Class Zend/Barcode Loaded
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 134
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 134
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 135
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 135
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 145
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 145
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 147
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 147
ERROR - 2021-12-10 12:53:59 --> Could not find the language line "sale_status"
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:53:59 --> Could not find the language line ""
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:53:59 --> Could not find the language line ""
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 180
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 180
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: rows C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 193
ERROR - 2021-12-10 12:53:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 193
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 239
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 239
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 245
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 245
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 247
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 247
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 272
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 276
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 276
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 280
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 280
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 284
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 284
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 293
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 293
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 301
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 301
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 354
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 354
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 355
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 355
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 364
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 364
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: paypal C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 367
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 367
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: skrill C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 404
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 404
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: payments C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 441
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 484
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 484
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 492
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 492
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 500
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 500
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 504
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 504
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 508
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 508
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 512
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 512
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 518
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 518
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 521
ERROR - 2021-12-10 12:53:59 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 521
INFO - 2021-12-10 12:53:59 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 12:53:59 --> Final output sent to browser
DEBUG - 2021-12-10 12:53:59 --> Total execution time: 1.1243
INFO - 2021-12-10 12:54:08 --> Config Class Initialized
INFO - 2021-12-10 12:54:08 --> Hooks Class Initialized
DEBUG - 2021-12-10 12:54:08 --> UTF-8 Support Enabled
INFO - 2021-12-10 12:54:08 --> Utf8 Class Initialized
INFO - 2021-12-10 12:54:08 --> URI Class Initialized
INFO - 2021-12-10 12:54:08 --> Router Class Initialized
INFO - 2021-12-10 12:54:08 --> Output Class Initialized
INFO - 2021-12-10 12:54:08 --> Security Class Initialized
INFO - 2021-12-10 12:54:08 --> CRSF cookie sent
INFO - 2021-12-10 12:54:08 --> CSRF token verified
DEBUG - 2021-12-10 12:54:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 12:54:08 --> Input Class Initialized
INFO - 2021-12-10 12:54:08 --> Language Class Initialized
INFO - 2021-12-10 12:54:08 --> Loader Class Initialized
INFO - 2021-12-10 12:54:08 --> Helper loaded: url_helper
INFO - 2021-12-10 12:54:08 --> Helper loaded: form_helper
INFO - 2021-12-10 12:54:08 --> Helper loaded: cookie_helper
INFO - 2021-12-10 12:54:08 --> Helper loaded: language_helper
INFO - 2021-12-10 12:54:08 --> Helper loaded: file_helper
INFO - 2021-12-10 12:54:08 --> Helper loaded: date_helper
INFO - 2021-12-10 12:54:08 --> Database Driver Class Initialized
INFO - 2021-12-10 12:54:08 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 12:54:08 --> Parser Class Initialized
INFO - 2021-12-10 12:54:08 --> Model Class Initialized
INFO - 2021-12-10 12:54:08 --> Model Class Initialized
INFO - 2021-12-10 12:54:08 --> Controller Class Initialized
INFO - 2021-12-10 12:54:08 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 12:54:08 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 12:54:08 --> Could not find the language line "today"
INFO - 2021-12-10 12:54:08 --> Model Class Initialized
INFO - 2021-12-10 12:54:08 --> Helper loaded: text_helper
INFO - 2021-12-10 12:54:08 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 12:54:08 --> Form Validation Class Initialized
INFO - 2021-12-10 12:54:08 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 12:54:08 --> Could not find the language line "you_will_loss_sale_data"
ERROR - 2021-12-10 12:54:08 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 23
ERROR - 2021-12-10 12:54:08 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:54:08 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:54:08 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:54:08 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 12:54:08 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:54:08 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 82
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 88
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 91
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 94
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 97
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 102
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 115
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 115
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 116
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 132
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 132
DEBUG - 2021-12-10 12:54:09 --> Zend Class Initialized
DEBUG - 2021-12-10 12:54:09 --> Zend Class Zend/Barcode Loaded
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 134
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 134
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 135
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 135
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 137
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 145
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 145
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 147
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 147
ERROR - 2021-12-10 12:54:09 --> Could not find the language line "sale_status"
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 149
ERROR - 2021-12-10 12:54:09 --> Could not find the language line ""
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 152
ERROR - 2021-12-10 12:54:09 --> Could not find the language line ""
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 180
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 180
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: rows C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 193
ERROR - 2021-12-10 12:54:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 193
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 239
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 239
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 245
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 245
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 247
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 247
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 255
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 272
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 276
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 276
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 280
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 280
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 284
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 284
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 293
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 293
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 301
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 301
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 308
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 318
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 326
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 352
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 354
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 354
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 355
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 355
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 364
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 364
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: paypal C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 367
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 367
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: skrill C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 404
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 404
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: payments C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 441
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 484
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 484
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 492
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 492
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 500
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 500
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 504
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 504
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 508
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 508
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 512
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 512
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 518
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 518
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 521
ERROR - 2021-12-10 12:54:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 521
INFO - 2021-12-10 12:54:09 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 12:54:09 --> Final output sent to browser
DEBUG - 2021-12-10 12:54:09 --> Total execution time: 1.4645
INFO - 2021-12-10 13:01:09 --> Config Class Initialized
INFO - 2021-12-10 13:01:09 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:01:09 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:01:09 --> Utf8 Class Initialized
INFO - 2021-12-10 13:01:09 --> URI Class Initialized
INFO - 2021-12-10 13:01:09 --> Router Class Initialized
INFO - 2021-12-10 13:01:09 --> Output Class Initialized
INFO - 2021-12-10 13:01:09 --> Security Class Initialized
INFO - 2021-12-10 13:01:09 --> CRSF cookie sent
INFO - 2021-12-10 13:01:09 --> CSRF token verified
DEBUG - 2021-12-10 13:01:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:01:09 --> Input Class Initialized
INFO - 2021-12-10 13:01:09 --> Language Class Initialized
INFO - 2021-12-10 13:01:09 --> Loader Class Initialized
INFO - 2021-12-10 13:01:09 --> Helper loaded: url_helper
INFO - 2021-12-10 13:01:09 --> Helper loaded: form_helper
INFO - 2021-12-10 13:01:09 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:01:09 --> Helper loaded: language_helper
INFO - 2021-12-10 13:01:09 --> Helper loaded: file_helper
INFO - 2021-12-10 13:01:09 --> Helper loaded: date_helper
INFO - 2021-12-10 13:01:09 --> Database Driver Class Initialized
INFO - 2021-12-10 13:01:09 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:01:09 --> Parser Class Initialized
INFO - 2021-12-10 13:01:09 --> Model Class Initialized
INFO - 2021-12-10 13:01:09 --> Model Class Initialized
INFO - 2021-12-10 13:01:09 --> Controller Class Initialized
INFO - 2021-12-10 13:01:09 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:01:09 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:01:09 --> Could not find the language line "today"
INFO - 2021-12-10 13:01:09 --> Model Class Initialized
INFO - 2021-12-10 13:01:09 --> Helper loaded: text_helper
INFO - 2021-12-10 13:01:09 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:01:09 --> Form Validation Class Initialized
INFO - 2021-12-10 13:01:09 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 13:01:09 --> Could not find the language line "you_will_loss_sale_data"
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 70
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 70
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 70
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 70
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 71
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 71
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 71
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 71
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 78
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 81
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 81
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 81
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 81
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 84
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 87
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 87
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 87
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 87
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 90
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 90
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 90
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 90
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 93
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 93
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 93
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 93
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 98
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 98
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: customer C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 98
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 98
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 108
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 108
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 111
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 111
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: warehouse C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 112
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 128
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 128
DEBUG - 2021-12-10 13:01:09 --> Zend Class Initialized
DEBUG - 2021-12-10 13:01:09 --> Zend Class Zend/Barcode Loaded
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 130
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 131
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 131
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 141
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 141
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 143
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 143
ERROR - 2021-12-10 13:01:09 --> Could not find the language line "sale_status"
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 145
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 145
ERROR - 2021-12-10 13:01:09 --> Could not find the language line ""
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 148
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 148
ERROR - 2021-12-10 13:01:09 --> Could not find the language line ""
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 176
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 176
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: rows C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 189
ERROR - 2021-12-10 13:01:09 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 189
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 235
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 235
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 241
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 241
ERROR - 2021-12-10 13:01:09 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 243
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 243
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 251
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 251
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 251
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 251
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 268
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 272
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 272
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 276
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 276
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 280
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 280
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 289
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 289
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 297
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 297
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 304
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 304
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 304
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 304
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 314
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 314
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 314
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 314
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 322
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 322
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 322
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 322
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 348
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 348
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 348
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 348
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 350
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 350
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 351
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 351
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 360
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 360
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: paypal C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 363
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 363
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: skrill C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 400
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 400
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: payments C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 437
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 480
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 480
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 488
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 488
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 492
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 492
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 496
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 500
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 500
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 504
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 504
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 508
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 508
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 514
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 514
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 517
ERROR - 2021-12-10 13:01:10 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 517
INFO - 2021-12-10 13:01:10 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 13:01:10 --> Final output sent to browser
DEBUG - 2021-12-10 13:01:10 --> Total execution time: 1.1749
INFO - 2021-12-10 13:04:32 --> Config Class Initialized
INFO - 2021-12-10 13:04:32 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:04:32 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:04:32 --> Utf8 Class Initialized
INFO - 2021-12-10 13:04:32 --> URI Class Initialized
INFO - 2021-12-10 13:04:32 --> Router Class Initialized
INFO - 2021-12-10 13:04:32 --> Output Class Initialized
INFO - 2021-12-10 13:04:32 --> Security Class Initialized
INFO - 2021-12-10 13:04:32 --> CRSF cookie sent
INFO - 2021-12-10 13:04:32 --> CSRF token verified
DEBUG - 2021-12-10 13:04:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:04:32 --> Input Class Initialized
INFO - 2021-12-10 13:04:32 --> Language Class Initialized
INFO - 2021-12-10 13:04:32 --> Loader Class Initialized
INFO - 2021-12-10 13:04:32 --> Helper loaded: url_helper
INFO - 2021-12-10 13:04:32 --> Helper loaded: form_helper
INFO - 2021-12-10 13:04:32 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:04:32 --> Helper loaded: language_helper
INFO - 2021-12-10 13:04:32 --> Helper loaded: file_helper
INFO - 2021-12-10 13:04:32 --> Helper loaded: date_helper
INFO - 2021-12-10 13:04:32 --> Database Driver Class Initialized
INFO - 2021-12-10 13:04:32 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:04:32 --> Parser Class Initialized
INFO - 2021-12-10 13:04:32 --> Model Class Initialized
INFO - 2021-12-10 13:04:32 --> Model Class Initialized
INFO - 2021-12-10 13:04:32 --> Controller Class Initialized
INFO - 2021-12-10 13:04:32 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:04:32 --> Config Class Initialized
INFO - 2021-12-10 13:04:32 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:04:32 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:04:32 --> Utf8 Class Initialized
INFO - 2021-12-10 13:04:32 --> URI Class Initialized
INFO - 2021-12-10 13:04:32 --> Router Class Initialized
INFO - 2021-12-10 13:04:32 --> Output Class Initialized
INFO - 2021-12-10 13:04:32 --> Security Class Initialized
INFO - 2021-12-10 13:04:32 --> CRSF cookie sent
DEBUG - 2021-12-10 13:04:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:04:32 --> Input Class Initialized
INFO - 2021-12-10 13:04:32 --> Language Class Initialized
INFO - 2021-12-10 13:04:32 --> Loader Class Initialized
INFO - 2021-12-10 13:04:32 --> Helper loaded: url_helper
INFO - 2021-12-10 13:04:32 --> Helper loaded: form_helper
INFO - 2021-12-10 13:04:32 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:04:32 --> Helper loaded: language_helper
INFO - 2021-12-10 13:04:32 --> Helper loaded: file_helper
INFO - 2021-12-10 13:04:32 --> Helper loaded: date_helper
INFO - 2021-12-10 13:04:32 --> Database Driver Class Initialized
INFO - 2021-12-10 13:04:32 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:04:32 --> Parser Class Initialized
INFO - 2021-12-10 13:04:32 --> Model Class Initialized
INFO - 2021-12-10 13:04:32 --> Model Class Initialized
INFO - 2021-12-10 13:04:32 --> Controller Class Initialized
INFO - 2021-12-10 13:04:32 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:04:32 --> Language file loaded: language/spanish/auth_lang.php
INFO - 2021-12-10 13:04:32 --> Form Validation Class Initialized
INFO - 2021-12-10 13:04:32 --> Model Class Initialized
DEBUG - 2021-12-10 13:04:32 --> Config file loaded: C:\wamp64\www\Reactor\sma\config/ion_auth.php
INFO - 2021-12-10 13:04:32 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/auth/login.php
INFO - 2021-12-10 13:04:32 --> Final output sent to browser
DEBUG - 2021-12-10 13:04:32 --> Total execution time: 0.3495
INFO - 2021-12-10 13:04:58 --> Config Class Initialized
INFO - 2021-12-10 13:04:58 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:04:58 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:04:58 --> Utf8 Class Initialized
INFO - 2021-12-10 13:04:58 --> URI Class Initialized
INFO - 2021-12-10 13:04:58 --> Router Class Initialized
INFO - 2021-12-10 13:04:58 --> Output Class Initialized
INFO - 2021-12-10 13:04:58 --> Security Class Initialized
INFO - 2021-12-10 13:04:58 --> CRSF cookie sent
INFO - 2021-12-10 13:04:58 --> CSRF token verified
DEBUG - 2021-12-10 13:04:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:04:58 --> Input Class Initialized
INFO - 2021-12-10 13:04:58 --> Language Class Initialized
INFO - 2021-12-10 13:04:58 --> Loader Class Initialized
INFO - 2021-12-10 13:04:58 --> Helper loaded: url_helper
INFO - 2021-12-10 13:04:58 --> Helper loaded: form_helper
INFO - 2021-12-10 13:04:58 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:04:58 --> Helper loaded: language_helper
INFO - 2021-12-10 13:04:58 --> Helper loaded: file_helper
INFO - 2021-12-10 13:04:58 --> Helper loaded: date_helper
INFO - 2021-12-10 13:04:58 --> Database Driver Class Initialized
INFO - 2021-12-10 13:04:58 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:04:58 --> Parser Class Initialized
INFO - 2021-12-10 13:04:58 --> Model Class Initialized
INFO - 2021-12-10 13:04:58 --> Model Class Initialized
INFO - 2021-12-10 13:04:58 --> Controller Class Initialized
INFO - 2021-12-10 13:04:58 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:04:58 --> Language file loaded: language/spanish/auth_lang.php
INFO - 2021-12-10 13:04:58 --> Form Validation Class Initialized
INFO - 2021-12-10 13:04:58 --> Model Class Initialized
DEBUG - 2021-12-10 13:04:58 --> Config file loaded: C:\wamp64\www\Reactor\sma\config/ion_auth.php
INFO - 2021-12-10 13:04:58 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 13:04:58 --> Query error: Field 'id' doesn't have a default value - Invalid query: INSERT INTO `sma_user_logins` (`user_id`, `ip_address`, `login`) VALUES ('9', '127.0.0.1', 'dummy@gmail.com')
INFO - 2021-12-10 13:04:58 --> Config Class Initialized
INFO - 2021-12-10 13:04:58 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:04:58 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:04:58 --> Utf8 Class Initialized
INFO - 2021-12-10 13:04:58 --> URI Class Initialized
INFO - 2021-12-10 13:04:58 --> Router Class Initialized
INFO - 2021-12-10 13:04:58 --> Output Class Initialized
INFO - 2021-12-10 13:04:58 --> Security Class Initialized
INFO - 2021-12-10 13:04:58 --> CRSF cookie sent
DEBUG - 2021-12-10 13:04:58 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:04:58 --> Input Class Initialized
INFO - 2021-12-10 13:04:58 --> Language Class Initialized
INFO - 2021-12-10 13:04:58 --> Loader Class Initialized
INFO - 2021-12-10 13:04:58 --> Helper loaded: url_helper
INFO - 2021-12-10 13:04:58 --> Helper loaded: form_helper
INFO - 2021-12-10 13:04:58 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:04:58 --> Helper loaded: language_helper
INFO - 2021-12-10 13:04:58 --> Helper loaded: file_helper
INFO - 2021-12-10 13:04:58 --> Helper loaded: date_helper
INFO - 2021-12-10 13:04:58 --> Database Driver Class Initialized
INFO - 2021-12-10 13:04:58 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:04:58 --> Parser Class Initialized
INFO - 2021-12-10 13:04:58 --> Model Class Initialized
INFO - 2021-12-10 13:04:58 --> Model Class Initialized
INFO - 2021-12-10 13:04:58 --> Controller Class Initialized
INFO - 2021-12-10 13:04:58 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:04:58 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:04:58 --> Could not find the language line "today"
INFO - 2021-12-10 13:04:58 --> Model Class Initialized
INFO - 2021-12-10 13:04:58 --> Helper loaded: text_helper
INFO - 2021-12-10 13:04:58 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:04:58 --> Form Validation Class Initialized
ERROR - 2021-12-10 13:04:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `paid_by` = 'Cheque'
AND `sma_payments`.`created_by` = '9'' at line 6 - Invalid query: SELECT SUM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid
FROM `sma_payments`
LEFT JOIN `sma_sales` ON `sma_sales`.`id`=`sma_payments`.`sale_id`
WHERE `type` = 'received'
AND `sma_payments`.`date` >
AND `paid_by` = 'Cheque'
AND `sma_payments`.`created_by` = '9'
ERROR - 2021-12-10 13:04:58 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 846
INFO - 2021-12-10 13:05:21 --> Config Class Initialized
INFO - 2021-12-10 13:05:21 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:21 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:21 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:21 --> URI Class Initialized
INFO - 2021-12-10 13:05:21 --> Router Class Initialized
INFO - 2021-12-10 13:05:21 --> Output Class Initialized
INFO - 2021-12-10 13:05:21 --> Security Class Initialized
INFO - 2021-12-10 13:05:21 --> CRSF cookie sent
DEBUG - 2021-12-10 13:05:21 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:21 --> Input Class Initialized
INFO - 2021-12-10 13:05:21 --> Language Class Initialized
INFO - 2021-12-10 13:05:21 --> Loader Class Initialized
INFO - 2021-12-10 13:05:21 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:21 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:21 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:21 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:21 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:21 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:21 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:21 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:21 --> Parser Class Initialized
INFO - 2021-12-10 13:05:21 --> Model Class Initialized
INFO - 2021-12-10 13:05:21 --> Model Class Initialized
INFO - 2021-12-10 13:05:21 --> Controller Class Initialized
INFO - 2021-12-10 13:05:21 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:21 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:21 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:21 --> Language file loaded: language/spanish/auth_lang.php
INFO - 2021-12-10 13:05:21 --> Form Validation Class Initialized
INFO - 2021-12-10 13:05:21 --> Model Class Initialized
DEBUG - 2021-12-10 13:05:21 --> Config file loaded: C:\wamp64\www\Reactor\sma\config/ion_auth.php
INFO - 2021-12-10 13:05:21 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/auth/login.php
INFO - 2021-12-10 13:05:21 --> Final output sent to browser
DEBUG - 2021-12-10 13:05:21 --> Total execution time: 0.2433
INFO - 2021-12-10 13:05:23 --> Config Class Initialized
INFO - 2021-12-10 13:05:24 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:24 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:24 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:24 --> URI Class Initialized
INFO - 2021-12-10 13:05:24 --> Router Class Initialized
INFO - 2021-12-10 13:05:24 --> Output Class Initialized
INFO - 2021-12-10 13:05:24 --> Security Class Initialized
INFO - 2021-12-10 13:05:24 --> CRSF cookie sent
INFO - 2021-12-10 13:05:24 --> CSRF token verified
DEBUG - 2021-12-10 13:05:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:24 --> Input Class Initialized
INFO - 2021-12-10 13:05:24 --> Language Class Initialized
INFO - 2021-12-10 13:05:24 --> Loader Class Initialized
INFO - 2021-12-10 13:05:24 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:24 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:24 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:24 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:24 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:24 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:24 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:24 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:24 --> Parser Class Initialized
INFO - 2021-12-10 13:05:24 --> Model Class Initialized
INFO - 2021-12-10 13:05:24 --> Model Class Initialized
INFO - 2021-12-10 13:05:24 --> Controller Class Initialized
INFO - 2021-12-10 13:05:24 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:24 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:24 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:24 --> Language file loaded: language/spanish/auth_lang.php
INFO - 2021-12-10 13:05:24 --> Form Validation Class Initialized
INFO - 2021-12-10 13:05:24 --> Model Class Initialized
DEBUG - 2021-12-10 13:05:24 --> Config file loaded: C:\wamp64\www\Reactor\sma\config/ion_auth.php
INFO - 2021-12-10 13:05:24 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 13:05:24 --> Query error: Field 'id' doesn't have a default value - Invalid query: INSERT INTO `sma_user_logins` (`user_id`, `ip_address`, `login`) VALUES ('9', '127.0.0.1', 'dummy@gmail.com')
INFO - 2021-12-10 13:05:24 --> Config Class Initialized
INFO - 2021-12-10 13:05:24 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:24 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:24 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:24 --> URI Class Initialized
INFO - 2021-12-10 13:05:24 --> Router Class Initialized
INFO - 2021-12-10 13:05:24 --> Output Class Initialized
INFO - 2021-12-10 13:05:24 --> Security Class Initialized
INFO - 2021-12-10 13:05:24 --> CRSF cookie sent
DEBUG - 2021-12-10 13:05:24 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:24 --> Input Class Initialized
INFO - 2021-12-10 13:05:24 --> Language Class Initialized
INFO - 2021-12-10 13:05:24 --> Loader Class Initialized
INFO - 2021-12-10 13:05:24 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:24 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:24 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:24 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:24 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:24 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:24 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:24 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:24 --> Parser Class Initialized
INFO - 2021-12-10 13:05:24 --> Model Class Initialized
INFO - 2021-12-10 13:05:24 --> Model Class Initialized
INFO - 2021-12-10 13:05:24 --> Controller Class Initialized
INFO - 2021-12-10 13:05:24 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:24 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:24 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:24 --> Model Class Initialized
INFO - 2021-12-10 13:05:24 --> Helper loaded: text_helper
INFO - 2021-12-10 13:05:24 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:05:24 --> Form Validation Class Initialized
ERROR - 2021-12-10 13:05:24 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'AND `paid_by` = 'Cheque'
AND `sma_payments`.`created_by` = '9'' at line 6 - Invalid query: SELECT SUM( COALESCE( grand_total, 0 ) ) AS total, SUM( COALESCE( amount, 0 ) ) AS paid
FROM `sma_payments`
LEFT JOIN `sma_sales` ON `sma_sales`.`id`=`sma_payments`.`sale_id`
WHERE `type` = 'received'
AND `sma_payments`.`date` >
AND `paid_by` = 'Cheque'
AND `sma_payments`.`created_by` = '9'
ERROR - 2021-12-10 13:05:24 --> Severity: error --> Exception: Call to a member function num_rows() on boolean C:\wamp64\www\Reactor\sma\models\Pos_model.php 846
INFO - 2021-12-10 13:05:29 --> Config Class Initialized
INFO - 2021-12-10 13:05:29 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:29 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:29 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:29 --> URI Class Initialized
INFO - 2021-12-10 13:05:29 --> Router Class Initialized
INFO - 2021-12-10 13:05:29 --> Output Class Initialized
INFO - 2021-12-10 13:05:29 --> Security Class Initialized
INFO - 2021-12-10 13:05:29 --> CRSF cookie sent
DEBUG - 2021-12-10 13:05:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:29 --> Input Class Initialized
INFO - 2021-12-10 13:05:29 --> Language Class Initialized
INFO - 2021-12-10 13:05:29 --> Loader Class Initialized
INFO - 2021-12-10 13:05:29 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:29 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:29 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:29 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:29 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:30 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:30 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:30 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:30 --> Parser Class Initialized
INFO - 2021-12-10 13:05:30 --> Model Class Initialized
INFO - 2021-12-10 13:05:30 --> Model Class Initialized
INFO - 2021-12-10 13:05:30 --> Controller Class Initialized
INFO - 2021-12-10 13:05:30 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:30 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:30 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:30 --> Model Class Initialized
INFO - 2021-12-10 13:05:30 --> Helper loaded: text_helper
INFO - 2021-12-10 13:05:30 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:05:30 --> Form Validation Class Initialized
INFO - 2021-12-10 13:05:30 --> Config Class Initialized
INFO - 2021-12-10 13:05:30 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:30 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:30 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:30 --> URI Class Initialized
INFO - 2021-12-10 13:05:30 --> Router Class Initialized
INFO - 2021-12-10 13:05:30 --> Output Class Initialized
INFO - 2021-12-10 13:05:30 --> Security Class Initialized
INFO - 2021-12-10 13:05:30 --> CRSF cookie sent
DEBUG - 2021-12-10 13:05:30 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:30 --> Input Class Initialized
INFO - 2021-12-10 13:05:30 --> Language Class Initialized
INFO - 2021-12-10 13:05:30 --> Loader Class Initialized
INFO - 2021-12-10 13:05:30 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:30 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:30 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:30 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:30 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:30 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:30 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:30 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:30 --> Parser Class Initialized
INFO - 2021-12-10 13:05:30 --> Model Class Initialized
INFO - 2021-12-10 13:05:30 --> Model Class Initialized
INFO - 2021-12-10 13:05:30 --> Controller Class Initialized
INFO - 2021-12-10 13:05:30 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:30 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:30 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:30 --> Model Class Initialized
INFO - 2021-12-10 13:05:30 --> Helper loaded: text_helper
INFO - 2021-12-10 13:05:30 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:05:30 --> Form Validation Class Initialized
ERROR - 2021-12-10 13:05:30 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 13:05:30 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 13:05:30 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:05:30 --> Could not find the language line "backups"
INFO - 2021-12-10 13:05:30 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 13:05:30 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 13:05:30 --> Could not find the language line "ordered"
ERROR - 2021-12-10 13:05:30 --> Could not find the language line "due"
ERROR - 2021-12-10 13:05:30 --> Could not find the language line "transferring"
INFO - 2021-12-10 13:05:30 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 13:05:30 --> Final output sent to browser
DEBUG - 2021-12-10 13:05:30 --> Total execution time: 0.3250
INFO - 2021-12-10 13:05:32 --> Config Class Initialized
INFO - 2021-12-10 13:05:32 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:32 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:32 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:32 --> URI Class Initialized
INFO - 2021-12-10 13:05:32 --> Router Class Initialized
INFO - 2021-12-10 13:05:32 --> Output Class Initialized
INFO - 2021-12-10 13:05:32 --> Security Class Initialized
INFO - 2021-12-10 13:05:32 --> CRSF cookie sent
DEBUG - 2021-12-10 13:05:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:32 --> Input Class Initialized
INFO - 2021-12-10 13:05:32 --> Language Class Initialized
INFO - 2021-12-10 13:05:32 --> Loader Class Initialized
INFO - 2021-12-10 13:05:32 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:32 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:32 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:32 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:32 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:32 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:32 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:32 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:32 --> Parser Class Initialized
INFO - 2021-12-10 13:05:32 --> Model Class Initialized
INFO - 2021-12-10 13:05:32 --> Model Class Initialized
INFO - 2021-12-10 13:05:32 --> Controller Class Initialized
INFO - 2021-12-10 13:05:32 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:32 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:32 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:32 --> Model Class Initialized
INFO - 2021-12-10 13:05:32 --> Helper loaded: text_helper
INFO - 2021-12-10 13:05:32 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:05:32 --> Form Validation Class Initialized
INFO - 2021-12-10 13:05:32 --> Config Class Initialized
INFO - 2021-12-10 13:05:32 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:32 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:32 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:32 --> URI Class Initialized
INFO - 2021-12-10 13:05:32 --> Router Class Initialized
INFO - 2021-12-10 13:05:32 --> Output Class Initialized
INFO - 2021-12-10 13:05:32 --> Security Class Initialized
INFO - 2021-12-10 13:05:32 --> CRSF cookie sent
DEBUG - 2021-12-10 13:05:32 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:32 --> Input Class Initialized
INFO - 2021-12-10 13:05:32 --> Language Class Initialized
INFO - 2021-12-10 13:05:32 --> Loader Class Initialized
INFO - 2021-12-10 13:05:32 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:32 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:32 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:32 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:32 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:32 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:32 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:32 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:32 --> Parser Class Initialized
INFO - 2021-12-10 13:05:32 --> Model Class Initialized
INFO - 2021-12-10 13:05:32 --> Model Class Initialized
INFO - 2021-12-10 13:05:32 --> Controller Class Initialized
INFO - 2021-12-10 13:05:32 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:32 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:32 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:32 --> Model Class Initialized
INFO - 2021-12-10 13:05:32 --> Helper loaded: text_helper
INFO - 2021-12-10 13:05:32 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:05:32 --> Form Validation Class Initialized
ERROR - 2021-12-10 13:05:32 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 13:05:32 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 13:05:32 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:05:32 --> Could not find the language line "backups"
INFO - 2021-12-10 13:05:32 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 13:05:32 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 13:05:32 --> Could not find the language line "ordered"
ERROR - 2021-12-10 13:05:32 --> Could not find the language line "due"
ERROR - 2021-12-10 13:05:32 --> Could not find the language line "transferring"
INFO - 2021-12-10 13:05:32 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 13:05:32 --> Final output sent to browser
DEBUG - 2021-12-10 13:05:32 --> Total execution time: 0.2245
INFO - 2021-12-10 13:05:39 --> Config Class Initialized
INFO - 2021-12-10 13:05:39 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:39 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:39 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:39 --> URI Class Initialized
INFO - 2021-12-10 13:05:39 --> Router Class Initialized
INFO - 2021-12-10 13:05:39 --> Output Class Initialized
INFO - 2021-12-10 13:05:39 --> Security Class Initialized
INFO - 2021-12-10 13:05:39 --> CRSF cookie sent
DEBUG - 2021-12-10 13:05:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:39 --> Input Class Initialized
INFO - 2021-12-10 13:05:39 --> Language Class Initialized
INFO - 2021-12-10 13:05:39 --> Loader Class Initialized
INFO - 2021-12-10 13:05:39 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:39 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:39 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:39 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:39 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:39 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:39 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:39 --> Parser Class Initialized
INFO - 2021-12-10 13:05:39 --> Model Class Initialized
INFO - 2021-12-10 13:05:39 --> Model Class Initialized
INFO - 2021-12-10 13:05:39 --> Controller Class Initialized
INFO - 2021-12-10 13:05:39 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:39 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:39 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:39 --> Model Class Initialized
INFO - 2021-12-10 13:05:39 --> Helper loaded: text_helper
INFO - 2021-12-10 13:05:39 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:05:39 --> Form Validation Class Initialized
ERROR - 2021-12-10 13:05:39 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 13:05:39 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 13:05:39 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:05:39 --> Could not find the language line "backups"
INFO - 2021-12-10 13:05:39 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 13:05:39 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 13:05:39 --> Could not find the language line "ordered"
ERROR - 2021-12-10 13:05:39 --> Could not find the language line "due"
ERROR - 2021-12-10 13:05:39 --> Could not find the language line "transferring"
INFO - 2021-12-10 13:05:39 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 13:05:39 --> Final output sent to browser
DEBUG - 2021-12-10 13:05:39 --> Total execution time: 0.2829
INFO - 2021-12-10 13:05:43 --> Config Class Initialized
INFO - 2021-12-10 13:05:43 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:43 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:43 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:43 --> URI Class Initialized
INFO - 2021-12-10 13:05:43 --> Router Class Initialized
INFO - 2021-12-10 13:05:43 --> Output Class Initialized
INFO - 2021-12-10 13:05:43 --> Security Class Initialized
INFO - 2021-12-10 13:05:43 --> CRSF cookie sent
INFO - 2021-12-10 13:05:43 --> CSRF token verified
DEBUG - 2021-12-10 13:05:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:43 --> Input Class Initialized
INFO - 2021-12-10 13:05:43 --> Language Class Initialized
INFO - 2021-12-10 13:05:43 --> Loader Class Initialized
INFO - 2021-12-10 13:05:43 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:43 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:43 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:43 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:43 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:43 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:44 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:44 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:44 --> Parser Class Initialized
INFO - 2021-12-10 13:05:44 --> Model Class Initialized
INFO - 2021-12-10 13:05:44 --> Model Class Initialized
INFO - 2021-12-10 13:05:44 --> Controller Class Initialized
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:44 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:44 --> Model Class Initialized
INFO - 2021-12-10 13:05:44 --> Helper loaded: text_helper
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:05:44 --> Form Validation Class Initialized
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 13:05:44 --> Config Class Initialized
INFO - 2021-12-10 13:05:44 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:44 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:44 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:44 --> URI Class Initialized
INFO - 2021-12-10 13:05:44 --> Router Class Initialized
INFO - 2021-12-10 13:05:44 --> Output Class Initialized
INFO - 2021-12-10 13:05:44 --> Security Class Initialized
INFO - 2021-12-10 13:05:44 --> CRSF cookie sent
DEBUG - 2021-12-10 13:05:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:44 --> Input Class Initialized
INFO - 2021-12-10 13:05:44 --> Language Class Initialized
INFO - 2021-12-10 13:05:44 --> Loader Class Initialized
INFO - 2021-12-10 13:05:44 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:44 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:44 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:44 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:44 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:44 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:44 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:44 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:44 --> Parser Class Initialized
INFO - 2021-12-10 13:05:44 --> Model Class Initialized
INFO - 2021-12-10 13:05:44 --> Model Class Initialized
INFO - 2021-12-10 13:05:44 --> Controller Class Initialized
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:44 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:44 --> Model Class Initialized
INFO - 2021-12-10 13:05:44 --> Helper loaded: text_helper
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:05:44 --> Form Validation Class Initialized
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 13:05:44 --> Pagination Class Initialized
ERROR - 2021-12-10 13:05:44 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:05:44 --> Could not find the language line "order"
ERROR - 2021-12-10 13:05:44 --> Could not find the language line "bill"
INFO - 2021-12-10 13:05:44 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 13:05:44 --> Final output sent to browser
DEBUG - 2021-12-10 13:05:44 --> Total execution time: 0.1863
INFO - 2021-12-10 13:05:44 --> Config Class Initialized
INFO - 2021-12-10 13:05:44 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:44 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:44 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:44 --> URI Class Initialized
INFO - 2021-12-10 13:05:44 --> Router Class Initialized
INFO - 2021-12-10 13:05:44 --> Output Class Initialized
INFO - 2021-12-10 13:05:44 --> Security Class Initialized
INFO - 2021-12-10 13:05:44 --> CRSF cookie sent
DEBUG - 2021-12-10 13:05:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:44 --> Input Class Initialized
INFO - 2021-12-10 13:05:44 --> Language Class Initialized
INFO - 2021-12-10 13:05:44 --> Loader Class Initialized
INFO - 2021-12-10 13:05:44 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:44 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:44 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:44 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:44 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:44 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:44 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:44 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:44 --> Parser Class Initialized
INFO - 2021-12-10 13:05:44 --> Model Class Initialized
INFO - 2021-12-10 13:05:44 --> Model Class Initialized
INFO - 2021-12-10 13:05:44 --> Controller Class Initialized
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:44 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:44 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 13:05:44 --> Form Validation Class Initialized
INFO - 2021-12-10 13:05:44 --> Model Class Initialized
INFO - 2021-12-10 13:05:44 --> Final output sent to browser
DEBUG - 2021-12-10 13:05:44 --> Total execution time: 0.2139
INFO - 2021-12-10 13:05:46 --> Config Class Initialized
INFO - 2021-12-10 13:05:46 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:46 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:46 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:46 --> URI Class Initialized
INFO - 2021-12-10 13:05:46 --> Router Class Initialized
INFO - 2021-12-10 13:05:46 --> Output Class Initialized
INFO - 2021-12-10 13:05:46 --> Security Class Initialized
INFO - 2021-12-10 13:05:46 --> CRSF cookie sent
DEBUG - 2021-12-10 13:05:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:46 --> Input Class Initialized
INFO - 2021-12-10 13:05:46 --> Language Class Initialized
INFO - 2021-12-10 13:05:46 --> Loader Class Initialized
INFO - 2021-12-10 13:05:46 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:46 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:46 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:46 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:46 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:46 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:46 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:46 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:46 --> Parser Class Initialized
INFO - 2021-12-10 13:05:46 --> Model Class Initialized
INFO - 2021-12-10 13:05:46 --> Model Class Initialized
INFO - 2021-12-10 13:05:46 --> Controller Class Initialized
INFO - 2021-12-10 13:05:46 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:46 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:46 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:46 --> Model Class Initialized
INFO - 2021-12-10 13:05:46 --> Helper loaded: text_helper
INFO - 2021-12-10 13:05:46 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:05:46 --> Form Validation Class Initialized
INFO - 2021-12-10 13:05:46 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 13:05:46 --> Final output sent to browser
DEBUG - 2021-12-10 13:05:46 --> Total execution time: 0.2340
INFO - 2021-12-10 13:05:50 --> Config Class Initialized
INFO - 2021-12-10 13:05:50 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:05:50 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:05:50 --> Utf8 Class Initialized
INFO - 2021-12-10 13:05:50 --> URI Class Initialized
INFO - 2021-12-10 13:05:50 --> Router Class Initialized
INFO - 2021-12-10 13:05:50 --> Output Class Initialized
INFO - 2021-12-10 13:05:50 --> Security Class Initialized
INFO - 2021-12-10 13:05:50 --> CRSF cookie sent
INFO - 2021-12-10 13:05:50 --> CSRF token verified
DEBUG - 2021-12-10 13:05:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:05:50 --> Input Class Initialized
INFO - 2021-12-10 13:05:50 --> Language Class Initialized
INFO - 2021-12-10 13:05:50 --> Loader Class Initialized
INFO - 2021-12-10 13:05:50 --> Helper loaded: url_helper
INFO - 2021-12-10 13:05:50 --> Helper loaded: form_helper
INFO - 2021-12-10 13:05:50 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:05:50 --> Helper loaded: language_helper
INFO - 2021-12-10 13:05:50 --> Helper loaded: file_helper
INFO - 2021-12-10 13:05:50 --> Helper loaded: date_helper
INFO - 2021-12-10 13:05:50 --> Database Driver Class Initialized
INFO - 2021-12-10 13:05:50 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:05:50 --> Parser Class Initialized
INFO - 2021-12-10 13:05:50 --> Model Class Initialized
INFO - 2021-12-10 13:05:50 --> Model Class Initialized
INFO - 2021-12-10 13:05:50 --> Controller Class Initialized
INFO - 2021-12-10 13:05:50 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:05:50 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:05:50 --> Could not find the language line "today"
INFO - 2021-12-10 13:05:50 --> Model Class Initialized
INFO - 2021-12-10 13:05:50 --> Helper loaded: text_helper
INFO - 2021-12-10 13:05:50 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:05:50 --> Form Validation Class Initialized
INFO - 2021-12-10 13:05:50 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 13:05:50 --> Could not find the language line "you_will_loss_sale_data"
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 72
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 72
DEBUG - 2021-12-10 13:05:50 --> Zend Class Initialized
DEBUG - 2021-12-10 13:05:50 --> Zend Class Zend/Barcode Loaded
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 74
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 75
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 77
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 77
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 85
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 87
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 87
ERROR - 2021-12-10 13:05:50 --> Could not find the language line "sale_status"
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 89
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 89
ERROR - 2021-12-10 13:05:50 --> Could not find the language line ""
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 92
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 92
ERROR - 2021-12-10 13:05:50 --> Could not find the language line ""
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 120
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 120
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: rows C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 13:05:50 --> Severity: Warning --> Invalid argument supplied for foreach() C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 133
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 179
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 179
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 185
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 185
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 187
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 187
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 195
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 195
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 195
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 195
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: return_sale C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 212
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 216
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 216
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 220
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 220
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 224
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 224
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 233
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 233
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 241
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 241
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 248
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 248
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 248
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 248
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 258
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 258
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 258
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 258
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 266
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 266
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 266
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 266
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 292
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 292
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: created_by C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 292
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 292
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 294
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 294
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 295
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 295
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: inv C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 304
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 304
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Undefined variable: paypal C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 307
ERROR - 2021-12-10 13:05:50 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 307
ERROR - 2021-12-10 13:05:51 --> Severity: Notice --> Undefined variable: skrill C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 344
ERROR - 2021-12-10 13:05:51 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 344
ERROR - 2021-12-10 13:05:51 --> Severity: Notice --> Undefined variable: payments C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 381
INFO - 2021-12-10 13:05:51 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 13:05:51 --> Final output sent to browser
DEBUG - 2021-12-10 13:05:51 --> Total execution time: 0.9329
INFO - 2021-12-10 13:06:43 --> Config Class Initialized
INFO - 2021-12-10 13:06:43 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:06:43 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:06:43 --> Utf8 Class Initialized
INFO - 2021-12-10 13:06:43 --> URI Class Initialized
DEBUG - 2021-12-10 13:06:43 --> No URI present. Default controller set.
INFO - 2021-12-10 13:06:43 --> Router Class Initialized
INFO - 2021-12-10 13:06:43 --> Output Class Initialized
INFO - 2021-12-10 13:06:43 --> Security Class Initialized
INFO - 2021-12-10 13:06:43 --> CRSF cookie sent
DEBUG - 2021-12-10 13:06:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:06:43 --> Input Class Initialized
INFO - 2021-12-10 13:06:43 --> Language Class Initialized
INFO - 2021-12-10 13:06:43 --> Loader Class Initialized
INFO - 2021-12-10 13:06:43 --> Helper loaded: url_helper
INFO - 2021-12-10 13:06:43 --> Helper loaded: form_helper
INFO - 2021-12-10 13:06:43 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:06:43 --> Helper loaded: language_helper
INFO - 2021-12-10 13:06:43 --> Helper loaded: file_helper
INFO - 2021-12-10 13:06:43 --> Helper loaded: date_helper
INFO - 2021-12-10 13:06:43 --> Database Driver Class Initialized
INFO - 2021-12-10 13:06:43 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:06:43 --> Parser Class Initialized
INFO - 2021-12-10 13:06:43 --> Model Class Initialized
INFO - 2021-12-10 13:06:43 --> Model Class Initialized
INFO - 2021-12-10 13:06:43 --> Controller Class Initialized
INFO - 2021-12-10 13:06:43 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:06:43 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:06:43 --> Could not find the language line "today"
INFO - 2021-12-10 13:06:43 --> Form Validation Class Initialized
INFO - 2021-12-10 13:06:43 --> Model Class Initialized
ERROR - 2021-12-10 13:06:43 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 13:06:43 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 13:06:43 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:06:43 --> Could not find the language line "backups"
INFO - 2021-12-10 13:06:43 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 13:06:43 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/dashboard.php
ERROR - 2021-12-10 13:06:43 --> Could not find the language line "ordered"
ERROR - 2021-12-10 13:06:43 --> Could not find the language line "due"
ERROR - 2021-12-10 13:06:43 --> Could not find the language line "transferring"
INFO - 2021-12-10 13:06:43 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 13:06:43 --> Final output sent to browser
DEBUG - 2021-12-10 13:06:43 --> Total execution time: 0.3602
INFO - 2021-12-10 13:07:06 --> Config Class Initialized
INFO - 2021-12-10 13:07:06 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:07:06 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:07:06 --> Utf8 Class Initialized
INFO - 2021-12-10 13:07:06 --> URI Class Initialized
INFO - 2021-12-10 13:07:06 --> Router Class Initialized
INFO - 2021-12-10 13:07:06 --> Output Class Initialized
INFO - 2021-12-10 13:07:06 --> Security Class Initialized
INFO - 2021-12-10 13:07:06 --> CRSF cookie sent
DEBUG - 2021-12-10 13:07:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:07:06 --> Input Class Initialized
INFO - 2021-12-10 13:07:06 --> Language Class Initialized
INFO - 2021-12-10 13:07:06 --> Loader Class Initialized
INFO - 2021-12-10 13:07:06 --> Helper loaded: url_helper
INFO - 2021-12-10 13:07:06 --> Helper loaded: form_helper
INFO - 2021-12-10 13:07:06 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:07:06 --> Helper loaded: language_helper
INFO - 2021-12-10 13:07:06 --> Helper loaded: file_helper
INFO - 2021-12-10 13:07:06 --> Helper loaded: date_helper
INFO - 2021-12-10 13:07:06 --> Database Driver Class Initialized
INFO - 2021-12-10 13:07:06 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:07:06 --> Parser Class Initialized
INFO - 2021-12-10 13:07:06 --> Model Class Initialized
INFO - 2021-12-10 13:07:06 --> Model Class Initialized
INFO - 2021-12-10 13:07:06 --> Controller Class Initialized
INFO - 2021-12-10 13:07:06 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:07:06 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:07:06 --> Could not find the language line "today"
INFO - 2021-12-10 13:07:06 --> Language file loaded: language/spanish/settings_lang.php
INFO - 2021-12-10 13:07:06 --> Form Validation Class Initialized
INFO - 2021-12-10 13:07:06 --> Model Class Initialized
INFO - 2021-12-10 13:07:06 --> Encrypt Class Initialized
ERROR - 2021-12-10 13:07:06 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 13:07:06 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 13:07:06 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:07:06 --> Could not find the language line "backups"
INFO - 2021-12-10 13:07:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
ERROR - 2021-12-10 13:07:06 --> Could not find the language line "sac"
INFO - 2021-12-10 13:07:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/settings/index.php
ERROR - 2021-12-10 13:07:06 --> Could not find the language line "ordered"
ERROR - 2021-12-10 13:07:06 --> Could not find the language line "due"
ERROR - 2021-12-10 13:07:06 --> Could not find the language line "transferring"
INFO - 2021-12-10 13:07:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 13:07:06 --> Final output sent to browser
DEBUG - 2021-12-10 13:07:06 --> Total execution time: 0.3160
INFO - 2021-12-10 13:09:36 --> Config Class Initialized
INFO - 2021-12-10 13:09:36 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:09:36 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:09:36 --> Utf8 Class Initialized
INFO - 2021-12-10 13:09:36 --> URI Class Initialized
INFO - 2021-12-10 13:09:36 --> Router Class Initialized
INFO - 2021-12-10 13:09:36 --> Output Class Initialized
INFO - 2021-12-10 13:09:36 --> Security Class Initialized
INFO - 2021-12-10 13:09:36 --> CRSF cookie sent
DEBUG - 2021-12-10 13:09:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:09:36 --> Input Class Initialized
INFO - 2021-12-10 13:09:36 --> Language Class Initialized
INFO - 2021-12-10 13:09:36 --> Loader Class Initialized
INFO - 2021-12-10 13:09:36 --> Helper loaded: url_helper
INFO - 2021-12-10 13:09:36 --> Helper loaded: form_helper
INFO - 2021-12-10 13:09:36 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:09:36 --> Helper loaded: language_helper
INFO - 2021-12-10 13:09:36 --> Helper loaded: file_helper
INFO - 2021-12-10 13:09:36 --> Helper loaded: date_helper
INFO - 2021-12-10 13:09:36 --> Database Driver Class Initialized
INFO - 2021-12-10 13:09:36 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:09:36 --> Parser Class Initialized
INFO - 2021-12-10 13:09:36 --> Model Class Initialized
INFO - 2021-12-10 13:09:36 --> Model Class Initialized
INFO - 2021-12-10 13:09:36 --> Controller Class Initialized
INFO - 2021-12-10 13:09:36 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:09:36 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:09:36 --> Could not find the language line "today"
INFO - 2021-12-10 13:09:36 --> Model Class Initialized
INFO - 2021-12-10 13:09:36 --> Helper loaded: text_helper
INFO - 2021-12-10 13:09:36 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:09:36 --> Form Validation Class Initialized
INFO - 2021-12-10 13:09:36 --> Config Class Initialized
INFO - 2021-12-10 13:09:36 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:09:36 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:09:36 --> Utf8 Class Initialized
INFO - 2021-12-10 13:09:36 --> URI Class Initialized
INFO - 2021-12-10 13:09:36 --> Router Class Initialized
INFO - 2021-12-10 13:09:36 --> Output Class Initialized
INFO - 2021-12-10 13:09:36 --> Security Class Initialized
INFO - 2021-12-10 13:09:36 --> CRSF cookie sent
DEBUG - 2021-12-10 13:09:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:09:36 --> Input Class Initialized
INFO - 2021-12-10 13:09:36 --> Language Class Initialized
INFO - 2021-12-10 13:09:36 --> Loader Class Initialized
INFO - 2021-12-10 13:09:36 --> Helper loaded: url_helper
INFO - 2021-12-10 13:09:36 --> Helper loaded: form_helper
INFO - 2021-12-10 13:09:36 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:09:36 --> Helper loaded: language_helper
INFO - 2021-12-10 13:09:36 --> Helper loaded: file_helper
INFO - 2021-12-10 13:09:36 --> Helper loaded: date_helper
INFO - 2021-12-10 13:09:36 --> Database Driver Class Initialized
INFO - 2021-12-10 13:09:36 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:09:36 --> Parser Class Initialized
INFO - 2021-12-10 13:09:36 --> Model Class Initialized
INFO - 2021-12-10 13:09:36 --> Model Class Initialized
INFO - 2021-12-10 13:09:36 --> Controller Class Initialized
INFO - 2021-12-10 13:09:36 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:09:36 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:09:36 --> Could not find the language line "today"
INFO - 2021-12-10 13:09:36 --> Model Class Initialized
INFO - 2021-12-10 13:09:36 --> Helper loaded: text_helper
INFO - 2021-12-10 13:09:36 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:09:36 --> Form Validation Class Initialized
ERROR - 2021-12-10 13:09:36 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 13:09:36 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 13:09:36 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:09:36 --> Could not find the language line "backups"
INFO - 2021-12-10 13:09:36 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 13:09:36 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 13:09:36 --> Could not find the language line "ordered"
ERROR - 2021-12-10 13:09:36 --> Could not find the language line "due"
ERROR - 2021-12-10 13:09:36 --> Could not find the language line "transferring"
INFO - 2021-12-10 13:09:36 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 13:09:36 --> Final output sent to browser
DEBUG - 2021-12-10 13:09:36 --> Total execution time: 0.2767
INFO - 2021-12-10 13:09:40 --> Config Class Initialized
INFO - 2021-12-10 13:09:40 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:09:40 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:09:40 --> Utf8 Class Initialized
INFO - 2021-12-10 13:09:40 --> URI Class Initialized
INFO - 2021-12-10 13:09:40 --> Router Class Initialized
INFO - 2021-12-10 13:09:40 --> Output Class Initialized
INFO - 2021-12-10 13:09:40 --> Security Class Initialized
INFO - 2021-12-10 13:09:41 --> CRSF cookie sent
INFO - 2021-12-10 13:09:41 --> CSRF token verified
DEBUG - 2021-12-10 13:09:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:09:41 --> Input Class Initialized
INFO - 2021-12-10 13:09:41 --> Language Class Initialized
INFO - 2021-12-10 13:09:41 --> Loader Class Initialized
INFO - 2021-12-10 13:09:41 --> Helper loaded: url_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: form_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: language_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: file_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: date_helper
INFO - 2021-12-10 13:09:41 --> Database Driver Class Initialized
INFO - 2021-12-10 13:09:41 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:09:41 --> Parser Class Initialized
INFO - 2021-12-10 13:09:41 --> Model Class Initialized
INFO - 2021-12-10 13:09:41 --> Model Class Initialized
INFO - 2021-12-10 13:09:41 --> Controller Class Initialized
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:09:41 --> Could not find the language line "today"
INFO - 2021-12-10 13:09:41 --> Model Class Initialized
INFO - 2021-12-10 13:09:41 --> Helper loaded: text_helper
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:09:41 --> Form Validation Class Initialized
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 13:09:41 --> Config Class Initialized
INFO - 2021-12-10 13:09:41 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:09:41 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:09:41 --> Utf8 Class Initialized
INFO - 2021-12-10 13:09:41 --> URI Class Initialized
INFO - 2021-12-10 13:09:41 --> Router Class Initialized
INFO - 2021-12-10 13:09:41 --> Output Class Initialized
INFO - 2021-12-10 13:09:41 --> Security Class Initialized
INFO - 2021-12-10 13:09:41 --> CRSF cookie sent
DEBUG - 2021-12-10 13:09:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:09:41 --> Input Class Initialized
INFO - 2021-12-10 13:09:41 --> Language Class Initialized
INFO - 2021-12-10 13:09:41 --> Loader Class Initialized
INFO - 2021-12-10 13:09:41 --> Helper loaded: url_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: form_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: language_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: file_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: date_helper
INFO - 2021-12-10 13:09:41 --> Database Driver Class Initialized
INFO - 2021-12-10 13:09:41 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:09:41 --> Parser Class Initialized
INFO - 2021-12-10 13:09:41 --> Model Class Initialized
INFO - 2021-12-10 13:09:41 --> Model Class Initialized
INFO - 2021-12-10 13:09:41 --> Controller Class Initialized
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:09:41 --> Could not find the language line "today"
INFO - 2021-12-10 13:09:41 --> Model Class Initialized
INFO - 2021-12-10 13:09:41 --> Helper loaded: text_helper
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:09:41 --> Form Validation Class Initialized
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 13:09:41 --> Pagination Class Initialized
ERROR - 2021-12-10 13:09:41 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:09:41 --> Could not find the language line "order"
ERROR - 2021-12-10 13:09:41 --> Could not find the language line "bill"
INFO - 2021-12-10 13:09:41 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 13:09:41 --> Final output sent to browser
DEBUG - 2021-12-10 13:09:41 --> Total execution time: 0.1821
INFO - 2021-12-10 13:09:41 --> Config Class Initialized
INFO - 2021-12-10 13:09:41 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:09:41 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:09:41 --> Utf8 Class Initialized
INFO - 2021-12-10 13:09:41 --> URI Class Initialized
INFO - 2021-12-10 13:09:41 --> Router Class Initialized
INFO - 2021-12-10 13:09:41 --> Output Class Initialized
INFO - 2021-12-10 13:09:41 --> Security Class Initialized
INFO - 2021-12-10 13:09:41 --> CRSF cookie sent
DEBUG - 2021-12-10 13:09:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:09:41 --> Input Class Initialized
INFO - 2021-12-10 13:09:41 --> Language Class Initialized
INFO - 2021-12-10 13:09:41 --> Loader Class Initialized
INFO - 2021-12-10 13:09:41 --> Helper loaded: url_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: form_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: language_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: file_helper
INFO - 2021-12-10 13:09:41 --> Helper loaded: date_helper
INFO - 2021-12-10 13:09:41 --> Database Driver Class Initialized
INFO - 2021-12-10 13:09:41 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:09:41 --> Parser Class Initialized
INFO - 2021-12-10 13:09:41 --> Model Class Initialized
INFO - 2021-12-10 13:09:41 --> Model Class Initialized
INFO - 2021-12-10 13:09:41 --> Controller Class Initialized
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:09:41 --> Could not find the language line "today"
INFO - 2021-12-10 13:09:41 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 13:09:41 --> Form Validation Class Initialized
INFO - 2021-12-10 13:09:41 --> Model Class Initialized
INFO - 2021-12-10 13:09:41 --> Final output sent to browser
DEBUG - 2021-12-10 13:09:41 --> Total execution time: 0.1578
INFO - 2021-12-10 13:09:43 --> Config Class Initialized
INFO - 2021-12-10 13:09:43 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:09:43 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:09:43 --> Utf8 Class Initialized
INFO - 2021-12-10 13:09:43 --> URI Class Initialized
INFO - 2021-12-10 13:09:43 --> Router Class Initialized
INFO - 2021-12-10 13:09:43 --> Output Class Initialized
INFO - 2021-12-10 13:09:43 --> Security Class Initialized
INFO - 2021-12-10 13:09:43 --> CRSF cookie sent
DEBUG - 2021-12-10 13:09:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:09:43 --> Input Class Initialized
INFO - 2021-12-10 13:09:43 --> Language Class Initialized
INFO - 2021-12-10 13:09:43 --> Loader Class Initialized
INFO - 2021-12-10 13:09:43 --> Helper loaded: url_helper
INFO - 2021-12-10 13:09:43 --> Helper loaded: form_helper
INFO - 2021-12-10 13:09:43 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:09:43 --> Helper loaded: language_helper
INFO - 2021-12-10 13:09:43 --> Helper loaded: file_helper
INFO - 2021-12-10 13:09:43 --> Helper loaded: date_helper
INFO - 2021-12-10 13:09:43 --> Database Driver Class Initialized
INFO - 2021-12-10 13:09:43 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:09:43 --> Parser Class Initialized
INFO - 2021-12-10 13:09:43 --> Model Class Initialized
INFO - 2021-12-10 13:09:43 --> Model Class Initialized
INFO - 2021-12-10 13:09:43 --> Controller Class Initialized
INFO - 2021-12-10 13:09:43 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:09:43 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:09:43 --> Could not find the language line "today"
INFO - 2021-12-10 13:09:43 --> Model Class Initialized
INFO - 2021-12-10 13:09:43 --> Helper loaded: text_helper
INFO - 2021-12-10 13:09:43 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:09:43 --> Form Validation Class Initialized
INFO - 2021-12-10 13:09:43 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 13:09:43 --> Final output sent to browser
DEBUG - 2021-12-10 13:09:43 --> Total execution time: 0.2148
INFO - 2021-12-10 13:09:46 --> Config Class Initialized
INFO - 2021-12-10 13:09:46 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:09:46 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:09:46 --> Utf8 Class Initialized
INFO - 2021-12-10 13:09:46 --> URI Class Initialized
INFO - 2021-12-10 13:09:46 --> Router Class Initialized
INFO - 2021-12-10 13:09:46 --> Output Class Initialized
INFO - 2021-12-10 13:09:46 --> Security Class Initialized
INFO - 2021-12-10 13:09:46 --> CRSF cookie sent
INFO - 2021-12-10 13:09:46 --> CSRF token verified
DEBUG - 2021-12-10 13:09:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:09:46 --> Input Class Initialized
INFO - 2021-12-10 13:09:46 --> Language Class Initialized
INFO - 2021-12-10 13:09:46 --> Loader Class Initialized
INFO - 2021-12-10 13:09:46 --> Helper loaded: url_helper
INFO - 2021-12-10 13:09:46 --> Helper loaded: form_helper
INFO - 2021-12-10 13:09:46 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:09:46 --> Helper loaded: language_helper
INFO - 2021-12-10 13:09:46 --> Helper loaded: file_helper
INFO - 2021-12-10 13:09:46 --> Helper loaded: date_helper
INFO - 2021-12-10 13:09:46 --> Database Driver Class Initialized
INFO - 2021-12-10 13:09:46 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:09:46 --> Parser Class Initialized
INFO - 2021-12-10 13:09:46 --> Model Class Initialized
INFO - 2021-12-10 13:09:46 --> Model Class Initialized
INFO - 2021-12-10 13:09:46 --> Controller Class Initialized
INFO - 2021-12-10 13:09:46 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:09:46 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:09:46 --> Could not find the language line "today"
INFO - 2021-12-10 13:09:46 --> Model Class Initialized
INFO - 2021-12-10 13:09:46 --> Helper loaded: text_helper
INFO - 2021-12-10 13:09:46 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:09:46 --> Form Validation Class Initialized
INFO - 2021-12-10 13:09:46 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 13:09:46 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 13:09:46 --> Final output sent to browser
DEBUG - 2021-12-10 13:09:46 --> Total execution time: 0.2955
INFO - 2021-12-10 13:24:27 --> Config Class Initialized
INFO - 2021-12-10 13:24:27 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:24:27 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:24:27 --> Utf8 Class Initialized
INFO - 2021-12-10 13:24:27 --> URI Class Initialized
INFO - 2021-12-10 13:24:27 --> Router Class Initialized
INFO - 2021-12-10 13:24:27 --> Output Class Initialized
INFO - 2021-12-10 13:24:27 --> Security Class Initialized
INFO - 2021-12-10 13:24:27 --> CRSF cookie sent
INFO - 2021-12-10 13:24:27 --> CSRF token verified
DEBUG - 2021-12-10 13:24:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:24:27 --> Input Class Initialized
INFO - 2021-12-10 13:24:27 --> Language Class Initialized
INFO - 2021-12-10 13:24:27 --> Loader Class Initialized
INFO - 2021-12-10 13:24:27 --> Helper loaded: url_helper
INFO - 2021-12-10 13:24:27 --> Helper loaded: form_helper
INFO - 2021-12-10 13:24:27 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:24:27 --> Helper loaded: language_helper
INFO - 2021-12-10 13:24:27 --> Helper loaded: file_helper
INFO - 2021-12-10 13:24:27 --> Helper loaded: date_helper
INFO - 2021-12-10 13:24:27 --> Database Driver Class Initialized
INFO - 2021-12-10 13:24:27 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:24:27 --> Parser Class Initialized
INFO - 2021-12-10 13:24:27 --> Model Class Initialized
INFO - 2021-12-10 13:24:27 --> Model Class Initialized
INFO - 2021-12-10 13:24:27 --> Controller Class Initialized
INFO - 2021-12-10 13:24:27 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:24:27 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:24:27 --> Could not find the language line "today"
INFO - 2021-12-10 13:24:27 --> Model Class Initialized
INFO - 2021-12-10 13:24:27 --> Helper loaded: text_helper
INFO - 2021-12-10 13:24:27 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:24:27 --> Form Validation Class Initialized
INFO - 2021-12-10 13:24:27 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 13:24:27 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 13:24:27 --> Final output sent to browser
DEBUG - 2021-12-10 13:24:27 --> Total execution time: 0.3525
INFO - 2021-12-10 13:27:28 --> Config Class Initialized
INFO - 2021-12-10 13:27:28 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:27:28 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:27:28 --> Utf8 Class Initialized
INFO - 2021-12-10 13:27:28 --> URI Class Initialized
INFO - 2021-12-10 13:27:28 --> Router Class Initialized
INFO - 2021-12-10 13:27:28 --> Output Class Initialized
INFO - 2021-12-10 13:27:28 --> Security Class Initialized
INFO - 2021-12-10 13:27:28 --> CRSF cookie sent
INFO - 2021-12-10 13:27:28 --> CSRF token verified
DEBUG - 2021-12-10 13:27:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:27:28 --> Input Class Initialized
INFO - 2021-12-10 13:27:28 --> Language Class Initialized
INFO - 2021-12-10 13:27:28 --> Loader Class Initialized
INFO - 2021-12-10 13:27:28 --> Helper loaded: url_helper
INFO - 2021-12-10 13:27:28 --> Helper loaded: form_helper
INFO - 2021-12-10 13:27:28 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:27:28 --> Helper loaded: language_helper
INFO - 2021-12-10 13:27:28 --> Helper loaded: file_helper
INFO - 2021-12-10 13:27:28 --> Helper loaded: date_helper
INFO - 2021-12-10 13:27:28 --> Database Driver Class Initialized
INFO - 2021-12-10 13:27:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:27:28 --> Parser Class Initialized
INFO - 2021-12-10 13:27:28 --> Model Class Initialized
INFO - 2021-12-10 13:27:28 --> Model Class Initialized
INFO - 2021-12-10 13:27:28 --> Controller Class Initialized
INFO - 2021-12-10 13:27:28 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:27:28 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:27:28 --> Could not find the language line "today"
INFO - 2021-12-10 13:27:28 --> Model Class Initialized
INFO - 2021-12-10 13:27:28 --> Helper loaded: text_helper
INFO - 2021-12-10 13:27:28 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:27:28 --> Form Validation Class Initialized
INFO - 2021-12-10 13:27:28 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 13:27:28 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 13:27:28 --> Final output sent to browser
DEBUG - 2021-12-10 13:27:28 --> Total execution time: 0.2651
INFO - 2021-12-10 13:42:56 --> Config Class Initialized
INFO - 2021-12-10 13:42:56 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:42:56 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:42:56 --> Utf8 Class Initialized
INFO - 2021-12-10 13:42:56 --> URI Class Initialized
INFO - 2021-12-10 13:42:56 --> Router Class Initialized
INFO - 2021-12-10 13:42:56 --> Output Class Initialized
INFO - 2021-12-10 13:42:56 --> Security Class Initialized
INFO - 2021-12-10 13:42:56 --> CRSF cookie sent
DEBUG - 2021-12-10 13:42:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:42:56 --> Input Class Initialized
INFO - 2021-12-10 13:42:56 --> Language Class Initialized
INFO - 2021-12-10 13:42:56 --> Loader Class Initialized
INFO - 2021-12-10 13:42:56 --> Helper loaded: url_helper
INFO - 2021-12-10 13:42:56 --> Helper loaded: form_helper
INFO - 2021-12-10 13:42:56 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:42:56 --> Helper loaded: language_helper
INFO - 2021-12-10 13:42:56 --> Helper loaded: file_helper
INFO - 2021-12-10 13:42:56 --> Helper loaded: date_helper
INFO - 2021-12-10 13:42:56 --> Database Driver Class Initialized
INFO - 2021-12-10 13:42:56 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:42:56 --> Parser Class Initialized
INFO - 2021-12-10 13:42:56 --> Model Class Initialized
INFO - 2021-12-10 13:42:56 --> Model Class Initialized
INFO - 2021-12-10 13:42:56 --> Controller Class Initialized
INFO - 2021-12-10 13:42:56 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:42:56 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:42:56 --> Could not find the language line "today"
INFO - 2021-12-10 13:42:56 --> Language file loaded: language/spanish/sales_lang.php
INFO - 2021-12-10 13:42:56 --> Form Validation Class Initialized
INFO - 2021-12-10 13:42:56 --> Model Class Initialized
ERROR - 2021-12-10 13:42:56 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 13:42:56 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 13:42:56 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:42:56 --> Could not find the language line "backups"
INFO - 2021-12-10 13:42:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 13:42:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/sales/index.php
ERROR - 2021-12-10 13:42:56 --> Could not find the language line "ordered"
ERROR - 2021-12-10 13:42:56 --> Could not find the language line "transferring"
INFO - 2021-12-10 13:42:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 13:42:56 --> Final output sent to browser
DEBUG - 2021-12-10 13:42:56 --> Total execution time: 0.3185
INFO - 2021-12-10 13:42:57 --> Config Class Initialized
INFO - 2021-12-10 13:42:57 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:42:57 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:42:57 --> Utf8 Class Initialized
INFO - 2021-12-10 13:42:57 --> URI Class Initialized
INFO - 2021-12-10 13:42:57 --> Router Class Initialized
INFO - 2021-12-10 13:42:57 --> Output Class Initialized
INFO - 2021-12-10 13:42:57 --> Security Class Initialized
INFO - 2021-12-10 13:42:57 --> CRSF cookie sent
INFO - 2021-12-10 13:42:57 --> CSRF token verified
DEBUG - 2021-12-10 13:42:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:42:57 --> Input Class Initialized
INFO - 2021-12-10 13:42:57 --> Language Class Initialized
INFO - 2021-12-10 13:42:57 --> Loader Class Initialized
INFO - 2021-12-10 13:42:57 --> Helper loaded: url_helper
INFO - 2021-12-10 13:42:57 --> Helper loaded: form_helper
INFO - 2021-12-10 13:42:57 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:42:57 --> Helper loaded: language_helper
INFO - 2021-12-10 13:42:57 --> Helper loaded: file_helper
INFO - 2021-12-10 13:42:57 --> Helper loaded: date_helper
INFO - 2021-12-10 13:42:57 --> Database Driver Class Initialized
INFO - 2021-12-10 13:42:57 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:42:57 --> Parser Class Initialized
INFO - 2021-12-10 13:42:57 --> Model Class Initialized
INFO - 2021-12-10 13:42:57 --> Model Class Initialized
INFO - 2021-12-10 13:42:57 --> Controller Class Initialized
INFO - 2021-12-10 13:42:57 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:42:57 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:42:57 --> Could not find the language line "today"
INFO - 2021-12-10 13:42:57 --> Language file loaded: language/spanish/sales_lang.php
INFO - 2021-12-10 13:42:57 --> Form Validation Class Initialized
INFO - 2021-12-10 13:42:57 --> Model Class Initialized
ERROR - 2021-12-10 13:42:57 --> Query error: Unknown column 'sales.grand_total' in 'field list' - Invalid query: SELECT `sma_sales`.`id`, `sma_sales`.`date`, `sma_sales`.`reference_no`, `sma_sales`.`biller`, `sma_sales`.`customer`, `sma_sales`.`sale_status`, `sma_sales`.`grand_total`, `sma_sales`.`paid`, (sales.grand_total-paid) as balance, `sma_sales`.`payment_status`
FROM `sma_sales`
WHERE `pos` != 1
ORDER BY `sma_sales`.`date` DESC
 LIMIT 10
ERROR - 2021-12-10 13:42:57 --> Severity: error --> Exception: Call to a member function result_array() on boolean C:\wamp64\www\Reactor\sma\libraries\Datatables.php 367
INFO - 2021-12-10 13:43:01 --> Config Class Initialized
INFO - 2021-12-10 13:43:01 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:43:01 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:43:01 --> Utf8 Class Initialized
INFO - 2021-12-10 13:43:01 --> URI Class Initialized
INFO - 2021-12-10 13:43:01 --> Router Class Initialized
INFO - 2021-12-10 13:43:01 --> Output Class Initialized
INFO - 2021-12-10 13:43:01 --> Security Class Initialized
INFO - 2021-12-10 13:43:01 --> CRSF cookie sent
DEBUG - 2021-12-10 13:43:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:43:01 --> Input Class Initialized
INFO - 2021-12-10 13:43:01 --> Language Class Initialized
INFO - 2021-12-10 13:43:01 --> Loader Class Initialized
INFO - 2021-12-10 13:43:01 --> Helper loaded: url_helper
INFO - 2021-12-10 13:43:01 --> Helper loaded: form_helper
INFO - 2021-12-10 13:43:01 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:43:01 --> Helper loaded: language_helper
INFO - 2021-12-10 13:43:01 --> Helper loaded: file_helper
INFO - 2021-12-10 13:43:01 --> Helper loaded: date_helper
INFO - 2021-12-10 13:43:01 --> Database Driver Class Initialized
INFO - 2021-12-10 13:43:01 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:43:01 --> Parser Class Initialized
INFO - 2021-12-10 13:43:01 --> Model Class Initialized
INFO - 2021-12-10 13:43:01 --> Model Class Initialized
INFO - 2021-12-10 13:43:01 --> Controller Class Initialized
INFO - 2021-12-10 13:43:01 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:43:01 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:43:01 --> Could not find the language line "today"
INFO - 2021-12-10 13:43:01 --> Model Class Initialized
INFO - 2021-12-10 13:43:01 --> Helper loaded: text_helper
INFO - 2021-12-10 13:43:01 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:43:01 --> Form Validation Class Initialized
ERROR - 2021-12-10 13:43:01 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 13:43:01 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 13:43:01 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:43:01 --> Could not find the language line "backups"
INFO - 2021-12-10 13:43:01 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 13:43:01 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/sales.php
ERROR - 2021-12-10 13:43:01 --> Could not find the language line "ordered"
ERROR - 2021-12-10 13:43:01 --> Could not find the language line "due"
ERROR - 2021-12-10 13:43:01 --> Could not find the language line "transferring"
INFO - 2021-12-10 13:43:01 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 13:43:01 --> Final output sent to browser
DEBUG - 2021-12-10 13:43:01 --> Total execution time: 0.1725
INFO - 2021-12-10 13:43:01 --> Config Class Initialized
INFO - 2021-12-10 13:43:01 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:43:01 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:43:02 --> Utf8 Class Initialized
INFO - 2021-12-10 13:43:02 --> URI Class Initialized
INFO - 2021-12-10 13:43:02 --> Router Class Initialized
INFO - 2021-12-10 13:43:02 --> Output Class Initialized
INFO - 2021-12-10 13:43:02 --> Security Class Initialized
INFO - 2021-12-10 13:43:02 --> CRSF cookie sent
INFO - 2021-12-10 13:43:02 --> CSRF token verified
DEBUG - 2021-12-10 13:43:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:43:02 --> Input Class Initialized
INFO - 2021-12-10 13:43:02 --> Language Class Initialized
INFO - 2021-12-10 13:43:02 --> Loader Class Initialized
INFO - 2021-12-10 13:43:02 --> Helper loaded: url_helper
INFO - 2021-12-10 13:43:02 --> Helper loaded: form_helper
INFO - 2021-12-10 13:43:02 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:43:02 --> Helper loaded: language_helper
INFO - 2021-12-10 13:43:02 --> Helper loaded: file_helper
INFO - 2021-12-10 13:43:02 --> Helper loaded: date_helper
INFO - 2021-12-10 13:43:02 --> Database Driver Class Initialized
INFO - 2021-12-10 13:43:02 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:43:02 --> Parser Class Initialized
INFO - 2021-12-10 13:43:02 --> Model Class Initialized
INFO - 2021-12-10 13:43:02 --> Model Class Initialized
INFO - 2021-12-10 13:43:02 --> Controller Class Initialized
INFO - 2021-12-10 13:43:02 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:43:02 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:43:02 --> Could not find the language line "today"
INFO - 2021-12-10 13:43:02 --> Model Class Initialized
INFO - 2021-12-10 13:43:02 --> Helper loaded: text_helper
INFO - 2021-12-10 13:43:02 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:43:02 --> Form Validation Class Initialized
INFO - 2021-12-10 13:43:02 --> Final output sent to browser
DEBUG - 2021-12-10 13:43:02 --> Total execution time: 0.3010
INFO - 2021-12-10 13:43:06 --> Config Class Initialized
INFO - 2021-12-10 13:43:06 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:43:06 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:43:06 --> Utf8 Class Initialized
INFO - 2021-12-10 13:43:06 --> URI Class Initialized
INFO - 2021-12-10 13:43:06 --> Router Class Initialized
INFO - 2021-12-10 13:43:06 --> Output Class Initialized
INFO - 2021-12-10 13:43:06 --> Security Class Initialized
INFO - 2021-12-10 13:43:06 --> CRSF cookie sent
DEBUG - 2021-12-10 13:43:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:43:06 --> Input Class Initialized
INFO - 2021-12-10 13:43:06 --> Language Class Initialized
INFO - 2021-12-10 13:43:06 --> Loader Class Initialized
INFO - 2021-12-10 13:43:06 --> Helper loaded: url_helper
INFO - 2021-12-10 13:43:06 --> Helper loaded: form_helper
INFO - 2021-12-10 13:43:06 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:43:06 --> Helper loaded: language_helper
INFO - 2021-12-10 13:43:06 --> Helper loaded: file_helper
INFO - 2021-12-10 13:43:06 --> Helper loaded: date_helper
INFO - 2021-12-10 13:43:06 --> Database Driver Class Initialized
INFO - 2021-12-10 13:43:06 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:43:06 --> Parser Class Initialized
INFO - 2021-12-10 13:43:06 --> Model Class Initialized
INFO - 2021-12-10 13:43:06 --> Model Class Initialized
INFO - 2021-12-10 13:43:06 --> Controller Class Initialized
INFO - 2021-12-10 13:43:06 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:43:06 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:43:06 --> Could not find the language line "today"
INFO - 2021-12-10 13:43:06 --> Model Class Initialized
INFO - 2021-12-10 13:43:06 --> Helper loaded: text_helper
INFO - 2021-12-10 13:43:06 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:43:06 --> Form Validation Class Initialized
DEBUG - 2021-12-10 13:43:06 --> Zend Class Initialized
DEBUG - 2021-12-10 13:43:06 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 13:43:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 13:43:06 --> Final output sent to browser
DEBUG - 2021-12-10 13:43:06 --> Total execution time: 0.7571
INFO - 2021-12-10 13:45:44 --> Config Class Initialized
INFO - 2021-12-10 13:45:44 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:45:44 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:45:44 --> Utf8 Class Initialized
INFO - 2021-12-10 13:45:44 --> URI Class Initialized
INFO - 2021-12-10 13:45:44 --> Router Class Initialized
INFO - 2021-12-10 13:45:44 --> Output Class Initialized
INFO - 2021-12-10 13:45:44 --> Security Class Initialized
INFO - 2021-12-10 13:45:44 --> CRSF cookie sent
DEBUG - 2021-12-10 13:45:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:45:44 --> Input Class Initialized
INFO - 2021-12-10 13:45:44 --> Language Class Initialized
INFO - 2021-12-10 13:45:44 --> Loader Class Initialized
INFO - 2021-12-10 13:45:44 --> Helper loaded: url_helper
INFO - 2021-12-10 13:45:44 --> Helper loaded: form_helper
INFO - 2021-12-10 13:45:44 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:45:44 --> Helper loaded: language_helper
INFO - 2021-12-10 13:45:44 --> Helper loaded: file_helper
INFO - 2021-12-10 13:45:44 --> Helper loaded: date_helper
INFO - 2021-12-10 13:45:44 --> Database Driver Class Initialized
INFO - 2021-12-10 13:45:44 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:45:44 --> Parser Class Initialized
INFO - 2021-12-10 13:45:44 --> Model Class Initialized
INFO - 2021-12-10 13:45:44 --> Model Class Initialized
INFO - 2021-12-10 13:45:44 --> Controller Class Initialized
INFO - 2021-12-10 13:45:44 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:45:44 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:45:44 --> Could not find the language line "today"
INFO - 2021-12-10 13:45:44 --> Model Class Initialized
INFO - 2021-12-10 13:45:44 --> Helper loaded: text_helper
INFO - 2021-12-10 13:45:44 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:45:44 --> Form Validation Class Initialized
INFO - 2021-12-10 13:45:44 --> Config Class Initialized
INFO - 2021-12-10 13:45:44 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:45:44 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:45:44 --> Utf8 Class Initialized
INFO - 2021-12-10 13:45:44 --> URI Class Initialized
INFO - 2021-12-10 13:45:44 --> Router Class Initialized
INFO - 2021-12-10 13:45:44 --> Output Class Initialized
INFO - 2021-12-10 13:45:44 --> Security Class Initialized
INFO - 2021-12-10 13:45:44 --> CRSF cookie sent
DEBUG - 2021-12-10 13:45:44 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:45:44 --> Input Class Initialized
INFO - 2021-12-10 13:45:44 --> Language Class Initialized
INFO - 2021-12-10 13:45:44 --> Loader Class Initialized
INFO - 2021-12-10 13:45:44 --> Helper loaded: url_helper
INFO - 2021-12-10 13:45:44 --> Helper loaded: form_helper
INFO - 2021-12-10 13:45:44 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:45:44 --> Helper loaded: language_helper
INFO - 2021-12-10 13:45:44 --> Helper loaded: file_helper
INFO - 2021-12-10 13:45:44 --> Helper loaded: date_helper
INFO - 2021-12-10 13:45:44 --> Database Driver Class Initialized
INFO - 2021-12-10 13:45:44 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:45:44 --> Parser Class Initialized
INFO - 2021-12-10 13:45:44 --> Model Class Initialized
INFO - 2021-12-10 13:45:44 --> Model Class Initialized
INFO - 2021-12-10 13:45:44 --> Controller Class Initialized
INFO - 2021-12-10 13:45:44 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:45:44 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:45:44 --> Could not find the language line "today"
INFO - 2021-12-10 13:45:44 --> Model Class Initialized
INFO - 2021-12-10 13:45:44 --> Helper loaded: text_helper
INFO - 2021-12-10 13:45:44 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:45:44 --> Form Validation Class Initialized
ERROR - 2021-12-10 13:45:44 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 13:45:44 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 13:45:44 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:45:44 --> Could not find the language line "backups"
INFO - 2021-12-10 13:45:44 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 13:45:44 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 13:45:44 --> Could not find the language line "ordered"
ERROR - 2021-12-10 13:45:44 --> Could not find the language line "due"
ERROR - 2021-12-10 13:45:44 --> Could not find the language line "transferring"
INFO - 2021-12-10 13:45:44 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 13:45:44 --> Final output sent to browser
DEBUG - 2021-12-10 13:45:44 --> Total execution time: 0.3201
INFO - 2021-12-10 13:45:49 --> Config Class Initialized
INFO - 2021-12-10 13:45:50 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:45:50 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:45:50 --> Utf8 Class Initialized
INFO - 2021-12-10 13:45:50 --> URI Class Initialized
INFO - 2021-12-10 13:45:50 --> Router Class Initialized
INFO - 2021-12-10 13:45:50 --> Output Class Initialized
INFO - 2021-12-10 13:45:50 --> Security Class Initialized
INFO - 2021-12-10 13:45:50 --> CRSF cookie sent
INFO - 2021-12-10 13:45:50 --> CSRF token verified
DEBUG - 2021-12-10 13:45:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:45:50 --> Input Class Initialized
INFO - 2021-12-10 13:45:50 --> Language Class Initialized
INFO - 2021-12-10 13:45:50 --> Loader Class Initialized
INFO - 2021-12-10 13:45:50 --> Helper loaded: url_helper
INFO - 2021-12-10 13:45:50 --> Helper loaded: form_helper
INFO - 2021-12-10 13:45:50 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:45:50 --> Helper loaded: language_helper
INFO - 2021-12-10 13:45:50 --> Helper loaded: file_helper
INFO - 2021-12-10 13:45:50 --> Helper loaded: date_helper
INFO - 2021-12-10 13:45:50 --> Database Driver Class Initialized
INFO - 2021-12-10 13:45:50 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:45:50 --> Parser Class Initialized
INFO - 2021-12-10 13:45:50 --> Model Class Initialized
INFO - 2021-12-10 13:45:50 --> Model Class Initialized
INFO - 2021-12-10 13:45:50 --> Controller Class Initialized
INFO - 2021-12-10 13:45:50 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:45:50 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:45:50 --> Could not find the language line "today"
INFO - 2021-12-10 13:45:50 --> Model Class Initialized
INFO - 2021-12-10 13:45:50 --> Helper loaded: text_helper
INFO - 2021-12-10 13:45:50 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:45:50 --> Form Validation Class Initialized
INFO - 2021-12-10 13:45:50 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 13:45:50 --> Config Class Initialized
INFO - 2021-12-10 13:45:50 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:45:50 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:45:50 --> Utf8 Class Initialized
INFO - 2021-12-10 13:45:50 --> URI Class Initialized
INFO - 2021-12-10 13:45:50 --> Router Class Initialized
INFO - 2021-12-10 13:45:50 --> Output Class Initialized
INFO - 2021-12-10 13:45:50 --> Security Class Initialized
INFO - 2021-12-10 13:45:50 --> CRSF cookie sent
DEBUG - 2021-12-10 13:45:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:45:50 --> Input Class Initialized
INFO - 2021-12-10 13:45:50 --> Language Class Initialized
INFO - 2021-12-10 13:45:50 --> Loader Class Initialized
INFO - 2021-12-10 13:45:50 --> Helper loaded: url_helper
INFO - 2021-12-10 13:45:50 --> Helper loaded: form_helper
INFO - 2021-12-10 13:45:50 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:45:50 --> Helper loaded: language_helper
INFO - 2021-12-10 13:45:50 --> Helper loaded: file_helper
INFO - 2021-12-10 13:45:50 --> Helper loaded: date_helper
INFO - 2021-12-10 13:45:50 --> Database Driver Class Initialized
INFO - 2021-12-10 13:45:50 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:45:50 --> Parser Class Initialized
INFO - 2021-12-10 13:45:50 --> Model Class Initialized
INFO - 2021-12-10 13:45:50 --> Model Class Initialized
INFO - 2021-12-10 13:45:50 --> Controller Class Initialized
INFO - 2021-12-10 13:45:50 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:45:50 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:45:50 --> Could not find the language line "today"
INFO - 2021-12-10 13:45:50 --> Model Class Initialized
INFO - 2021-12-10 13:45:50 --> Helper loaded: text_helper
INFO - 2021-12-10 13:45:50 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:45:50 --> Form Validation Class Initialized
INFO - 2021-12-10 13:45:50 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 13:45:50 --> Pagination Class Initialized
ERROR - 2021-12-10 13:45:50 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:45:50 --> Could not find the language line "order"
ERROR - 2021-12-10 13:45:50 --> Could not find the language line "bill"
INFO - 2021-12-10 13:45:50 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 13:45:50 --> Final output sent to browser
DEBUG - 2021-12-10 13:45:50 --> Total execution time: 0.4032
INFO - 2021-12-10 13:45:51 --> Config Class Initialized
INFO - 2021-12-10 13:45:51 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:45:51 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:45:51 --> Utf8 Class Initialized
INFO - 2021-12-10 13:45:51 --> URI Class Initialized
INFO - 2021-12-10 13:45:51 --> Router Class Initialized
INFO - 2021-12-10 13:45:51 --> Output Class Initialized
INFO - 2021-12-10 13:45:51 --> Security Class Initialized
INFO - 2021-12-10 13:45:51 --> CRSF cookie sent
DEBUG - 2021-12-10 13:45:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:45:51 --> Input Class Initialized
INFO - 2021-12-10 13:45:51 --> Language Class Initialized
INFO - 2021-12-10 13:45:51 --> Loader Class Initialized
INFO - 2021-12-10 13:45:51 --> Helper loaded: url_helper
INFO - 2021-12-10 13:45:51 --> Helper loaded: form_helper
INFO - 2021-12-10 13:45:51 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:45:51 --> Helper loaded: language_helper
INFO - 2021-12-10 13:45:51 --> Helper loaded: file_helper
INFO - 2021-12-10 13:45:51 --> Helper loaded: date_helper
INFO - 2021-12-10 13:45:51 --> Database Driver Class Initialized
INFO - 2021-12-10 13:45:51 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:45:51 --> Parser Class Initialized
INFO - 2021-12-10 13:45:51 --> Model Class Initialized
INFO - 2021-12-10 13:45:51 --> Model Class Initialized
INFO - 2021-12-10 13:45:51 --> Controller Class Initialized
INFO - 2021-12-10 13:45:51 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:45:51 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:45:51 --> Could not find the language line "today"
INFO - 2021-12-10 13:45:51 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 13:45:51 --> Form Validation Class Initialized
INFO - 2021-12-10 13:45:51 --> Model Class Initialized
INFO - 2021-12-10 13:45:51 --> Final output sent to browser
DEBUG - 2021-12-10 13:45:51 --> Total execution time: 0.1669
INFO - 2021-12-10 13:45:52 --> Config Class Initialized
INFO - 2021-12-10 13:45:52 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:45:52 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:45:52 --> Utf8 Class Initialized
INFO - 2021-12-10 13:45:52 --> URI Class Initialized
INFO - 2021-12-10 13:45:52 --> Router Class Initialized
INFO - 2021-12-10 13:45:52 --> Output Class Initialized
INFO - 2021-12-10 13:45:52 --> Security Class Initialized
INFO - 2021-12-10 13:45:52 --> CRSF cookie sent
DEBUG - 2021-12-10 13:45:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:45:52 --> Input Class Initialized
INFO - 2021-12-10 13:45:52 --> Language Class Initialized
INFO - 2021-12-10 13:45:52 --> Loader Class Initialized
INFO - 2021-12-10 13:45:52 --> Helper loaded: url_helper
INFO - 2021-12-10 13:45:52 --> Helper loaded: form_helper
INFO - 2021-12-10 13:45:52 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:45:52 --> Helper loaded: language_helper
INFO - 2021-12-10 13:45:52 --> Helper loaded: file_helper
INFO - 2021-12-10 13:45:52 --> Helper loaded: date_helper
INFO - 2021-12-10 13:45:52 --> Database Driver Class Initialized
INFO - 2021-12-10 13:45:52 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:45:52 --> Parser Class Initialized
INFO - 2021-12-10 13:45:52 --> Model Class Initialized
INFO - 2021-12-10 13:45:52 --> Model Class Initialized
INFO - 2021-12-10 13:45:52 --> Controller Class Initialized
INFO - 2021-12-10 13:45:52 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:45:52 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:45:52 --> Could not find the language line "today"
INFO - 2021-12-10 13:45:52 --> Model Class Initialized
INFO - 2021-12-10 13:45:52 --> Helper loaded: text_helper
INFO - 2021-12-10 13:45:52 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:45:52 --> Form Validation Class Initialized
INFO - 2021-12-10 13:45:52 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 13:45:52 --> Final output sent to browser
DEBUG - 2021-12-10 13:45:52 --> Total execution time: 0.2930
INFO - 2021-12-10 13:45:57 --> Config Class Initialized
INFO - 2021-12-10 13:45:57 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:45:57 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:45:57 --> Utf8 Class Initialized
INFO - 2021-12-10 13:45:57 --> URI Class Initialized
INFO - 2021-12-10 13:45:57 --> Router Class Initialized
INFO - 2021-12-10 13:45:57 --> Output Class Initialized
INFO - 2021-12-10 13:45:57 --> Security Class Initialized
INFO - 2021-12-10 13:45:57 --> CRSF cookie sent
INFO - 2021-12-10 13:45:57 --> CSRF token verified
DEBUG - 2021-12-10 13:45:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:45:57 --> Input Class Initialized
INFO - 2021-12-10 13:45:57 --> Language Class Initialized
INFO - 2021-12-10 13:45:57 --> Loader Class Initialized
INFO - 2021-12-10 13:45:57 --> Helper loaded: url_helper
INFO - 2021-12-10 13:45:57 --> Helper loaded: form_helper
INFO - 2021-12-10 13:45:57 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:45:57 --> Helper loaded: language_helper
INFO - 2021-12-10 13:45:57 --> Helper loaded: file_helper
INFO - 2021-12-10 13:45:57 --> Helper loaded: date_helper
INFO - 2021-12-10 13:45:57 --> Database Driver Class Initialized
INFO - 2021-12-10 13:45:57 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:45:57 --> Parser Class Initialized
INFO - 2021-12-10 13:45:57 --> Model Class Initialized
INFO - 2021-12-10 13:45:57 --> Model Class Initialized
INFO - 2021-12-10 13:45:57 --> Controller Class Initialized
INFO - 2021-12-10 13:45:57 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:45:57 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:45:57 --> Could not find the language line "today"
INFO - 2021-12-10 13:45:57 --> Model Class Initialized
INFO - 2021-12-10 13:45:57 --> Helper loaded: text_helper
INFO - 2021-12-10 13:45:57 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:45:57 --> Form Validation Class Initialized
INFO - 2021-12-10 13:45:57 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 13:45:57 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 13:45:57 --> Final output sent to browser
DEBUG - 2021-12-10 13:45:57 --> Total execution time: 0.2519
INFO - 2021-12-10 13:47:53 --> Config Class Initialized
INFO - 2021-12-10 13:47:53 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:47:53 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:47:53 --> Utf8 Class Initialized
INFO - 2021-12-10 13:47:53 --> URI Class Initialized
INFO - 2021-12-10 13:47:53 --> Router Class Initialized
INFO - 2021-12-10 13:47:53 --> Output Class Initialized
INFO - 2021-12-10 13:47:53 --> Security Class Initialized
INFO - 2021-12-10 13:47:53 --> CRSF cookie sent
DEBUG - 2021-12-10 13:47:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:47:53 --> Input Class Initialized
INFO - 2021-12-10 13:47:53 --> Language Class Initialized
INFO - 2021-12-10 13:47:53 --> Loader Class Initialized
INFO - 2021-12-10 13:47:53 --> Helper loaded: url_helper
INFO - 2021-12-10 13:47:53 --> Helper loaded: form_helper
INFO - 2021-12-10 13:47:53 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:47:53 --> Helper loaded: language_helper
INFO - 2021-12-10 13:47:53 --> Helper loaded: file_helper
INFO - 2021-12-10 13:47:53 --> Helper loaded: date_helper
INFO - 2021-12-10 13:47:53 --> Database Driver Class Initialized
INFO - 2021-12-10 13:47:53 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:47:53 --> Parser Class Initialized
INFO - 2021-12-10 13:47:53 --> Model Class Initialized
INFO - 2021-12-10 13:47:53 --> Model Class Initialized
INFO - 2021-12-10 13:47:53 --> Controller Class Initialized
INFO - 2021-12-10 13:47:53 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:47:53 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:47:53 --> Could not find the language line "today"
INFO - 2021-12-10 13:47:53 --> Model Class Initialized
INFO - 2021-12-10 13:47:53 --> Helper loaded: text_helper
INFO - 2021-12-10 13:47:53 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:47:53 --> Form Validation Class Initialized
DEBUG - 2021-12-10 13:47:54 --> Zend Class Initialized
DEBUG - 2021-12-10 13:47:54 --> Zend Class Zend/Barcode Loaded
INFO - 2021-12-10 13:47:54 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view.php
INFO - 2021-12-10 13:47:54 --> Final output sent to browser
DEBUG - 2021-12-10 13:47:54 --> Total execution time: 0.7426
INFO - 2021-12-10 13:52:06 --> Config Class Initialized
INFO - 2021-12-10 13:52:06 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:52:06 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:52:06 --> Utf8 Class Initialized
INFO - 2021-12-10 13:52:06 --> URI Class Initialized
INFO - 2021-12-10 13:52:06 --> Router Class Initialized
INFO - 2021-12-10 13:52:06 --> Output Class Initialized
INFO - 2021-12-10 13:52:06 --> Security Class Initialized
INFO - 2021-12-10 13:52:06 --> CRSF cookie sent
DEBUG - 2021-12-10 13:52:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:52:06 --> Input Class Initialized
INFO - 2021-12-10 13:52:06 --> Language Class Initialized
INFO - 2021-12-10 13:52:06 --> Loader Class Initialized
INFO - 2021-12-10 13:52:06 --> Helper loaded: url_helper
INFO - 2021-12-10 13:52:06 --> Helper loaded: form_helper
INFO - 2021-12-10 13:52:06 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:52:06 --> Helper loaded: language_helper
INFO - 2021-12-10 13:52:06 --> Helper loaded: file_helper
INFO - 2021-12-10 13:52:06 --> Helper loaded: date_helper
INFO - 2021-12-10 13:52:06 --> Database Driver Class Initialized
INFO - 2021-12-10 13:52:06 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:52:06 --> Parser Class Initialized
INFO - 2021-12-10 13:52:06 --> Model Class Initialized
INFO - 2021-12-10 13:52:06 --> Model Class Initialized
INFO - 2021-12-10 13:52:06 --> Controller Class Initialized
INFO - 2021-12-10 13:52:06 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:52:06 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:52:06 --> Could not find the language line "today"
INFO - 2021-12-10 13:52:06 --> Model Class Initialized
INFO - 2021-12-10 13:52:06 --> Helper loaded: text_helper
INFO - 2021-12-10 13:52:06 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:52:06 --> Form Validation Class Initialized
INFO - 2021-12-10 13:52:06 --> Config Class Initialized
INFO - 2021-12-10 13:52:06 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:52:06 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:52:06 --> Utf8 Class Initialized
INFO - 2021-12-10 13:52:06 --> URI Class Initialized
INFO - 2021-12-10 13:52:06 --> Router Class Initialized
INFO - 2021-12-10 13:52:06 --> Output Class Initialized
INFO - 2021-12-10 13:52:06 --> Security Class Initialized
INFO - 2021-12-10 13:52:06 --> CRSF cookie sent
DEBUG - 2021-12-10 13:52:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:52:06 --> Input Class Initialized
INFO - 2021-12-10 13:52:06 --> Language Class Initialized
INFO - 2021-12-10 13:52:06 --> Loader Class Initialized
INFO - 2021-12-10 13:52:06 --> Helper loaded: url_helper
INFO - 2021-12-10 13:52:06 --> Helper loaded: form_helper
INFO - 2021-12-10 13:52:06 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:52:06 --> Helper loaded: language_helper
INFO - 2021-12-10 13:52:06 --> Helper loaded: file_helper
INFO - 2021-12-10 13:52:06 --> Helper loaded: date_helper
INFO - 2021-12-10 13:52:06 --> Database Driver Class Initialized
INFO - 2021-12-10 13:52:06 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:52:06 --> Parser Class Initialized
INFO - 2021-12-10 13:52:06 --> Model Class Initialized
INFO - 2021-12-10 13:52:06 --> Model Class Initialized
INFO - 2021-12-10 13:52:06 --> Controller Class Initialized
INFO - 2021-12-10 13:52:06 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:52:06 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:52:06 --> Could not find the language line "today"
INFO - 2021-12-10 13:52:06 --> Model Class Initialized
INFO - 2021-12-10 13:52:06 --> Helper loaded: text_helper
INFO - 2021-12-10 13:52:06 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:52:06 --> Form Validation Class Initialized
ERROR - 2021-12-10 13:52:06 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 13:52:06 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 13:52:06 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:52:06 --> Could not find the language line "backups"
INFO - 2021-12-10 13:52:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 13:52:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 13:52:06 --> Could not find the language line "ordered"
ERROR - 2021-12-10 13:52:06 --> Could not find the language line "due"
ERROR - 2021-12-10 13:52:06 --> Could not find the language line "transferring"
INFO - 2021-12-10 13:52:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 13:52:06 --> Final output sent to browser
DEBUG - 2021-12-10 13:52:06 --> Total execution time: 0.2108
INFO - 2021-12-10 13:52:10 --> Config Class Initialized
INFO - 2021-12-10 13:52:10 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:52:10 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:52:10 --> Utf8 Class Initialized
INFO - 2021-12-10 13:52:10 --> URI Class Initialized
INFO - 2021-12-10 13:52:10 --> Router Class Initialized
INFO - 2021-12-10 13:52:10 --> Output Class Initialized
INFO - 2021-12-10 13:52:10 --> Security Class Initialized
INFO - 2021-12-10 13:52:10 --> CRSF cookie sent
INFO - 2021-12-10 13:52:10 --> CSRF token verified
DEBUG - 2021-12-10 13:52:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:52:10 --> Input Class Initialized
INFO - 2021-12-10 13:52:10 --> Language Class Initialized
INFO - 2021-12-10 13:52:10 --> Loader Class Initialized
INFO - 2021-12-10 13:52:10 --> Helper loaded: url_helper
INFO - 2021-12-10 13:52:10 --> Helper loaded: form_helper
INFO - 2021-12-10 13:52:10 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:52:10 --> Helper loaded: language_helper
INFO - 2021-12-10 13:52:10 --> Helper loaded: file_helper
INFO - 2021-12-10 13:52:10 --> Helper loaded: date_helper
INFO - 2021-12-10 13:52:10 --> Database Driver Class Initialized
INFO - 2021-12-10 13:52:10 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:52:10 --> Parser Class Initialized
INFO - 2021-12-10 13:52:10 --> Model Class Initialized
INFO - 2021-12-10 13:52:10 --> Model Class Initialized
INFO - 2021-12-10 13:52:10 --> Controller Class Initialized
INFO - 2021-12-10 13:52:10 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:52:10 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:52:10 --> Could not find the language line "today"
INFO - 2021-12-10 13:52:10 --> Model Class Initialized
INFO - 2021-12-10 13:52:10 --> Helper loaded: text_helper
INFO - 2021-12-10 13:52:10 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:52:10 --> Form Validation Class Initialized
INFO - 2021-12-10 13:52:10 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 13:52:10 --> Config Class Initialized
INFO - 2021-12-10 13:52:10 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:52:10 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:52:10 --> Utf8 Class Initialized
INFO - 2021-12-10 13:52:10 --> URI Class Initialized
INFO - 2021-12-10 13:52:11 --> Router Class Initialized
INFO - 2021-12-10 13:52:11 --> Output Class Initialized
INFO - 2021-12-10 13:52:11 --> Security Class Initialized
INFO - 2021-12-10 13:52:11 --> CRSF cookie sent
DEBUG - 2021-12-10 13:52:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:52:11 --> Input Class Initialized
INFO - 2021-12-10 13:52:11 --> Language Class Initialized
INFO - 2021-12-10 13:52:11 --> Loader Class Initialized
INFO - 2021-12-10 13:52:11 --> Helper loaded: url_helper
INFO - 2021-12-10 13:52:11 --> Helper loaded: form_helper
INFO - 2021-12-10 13:52:11 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:52:11 --> Helper loaded: language_helper
INFO - 2021-12-10 13:52:11 --> Helper loaded: file_helper
INFO - 2021-12-10 13:52:11 --> Helper loaded: date_helper
INFO - 2021-12-10 13:52:11 --> Database Driver Class Initialized
INFO - 2021-12-10 13:52:11 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:52:11 --> Parser Class Initialized
INFO - 2021-12-10 13:52:11 --> Model Class Initialized
INFO - 2021-12-10 13:52:11 --> Model Class Initialized
INFO - 2021-12-10 13:52:11 --> Controller Class Initialized
INFO - 2021-12-10 13:52:11 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:52:11 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:52:11 --> Could not find the language line "today"
INFO - 2021-12-10 13:52:11 --> Model Class Initialized
INFO - 2021-12-10 13:52:11 --> Helper loaded: text_helper
INFO - 2021-12-10 13:52:11 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:52:11 --> Form Validation Class Initialized
INFO - 2021-12-10 13:52:11 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 13:52:11 --> Pagination Class Initialized
ERROR - 2021-12-10 13:52:11 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 13:52:11 --> Could not find the language line "order"
ERROR - 2021-12-10 13:52:11 --> Could not find the language line "bill"
INFO - 2021-12-10 13:52:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 13:52:11 --> Final output sent to browser
DEBUG - 2021-12-10 13:52:11 --> Total execution time: 0.1990
INFO - 2021-12-10 13:52:11 --> Config Class Initialized
INFO - 2021-12-10 13:52:11 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:52:11 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:52:11 --> Utf8 Class Initialized
INFO - 2021-12-10 13:52:11 --> URI Class Initialized
INFO - 2021-12-10 13:52:11 --> Router Class Initialized
INFO - 2021-12-10 13:52:11 --> Output Class Initialized
INFO - 2021-12-10 13:52:11 --> Security Class Initialized
INFO - 2021-12-10 13:52:11 --> CRSF cookie sent
DEBUG - 2021-12-10 13:52:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:52:11 --> Input Class Initialized
INFO - 2021-12-10 13:52:11 --> Language Class Initialized
INFO - 2021-12-10 13:52:11 --> Loader Class Initialized
INFO - 2021-12-10 13:52:11 --> Helper loaded: url_helper
INFO - 2021-12-10 13:52:11 --> Helper loaded: form_helper
INFO - 2021-12-10 13:52:11 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:52:11 --> Helper loaded: language_helper
INFO - 2021-12-10 13:52:11 --> Helper loaded: file_helper
INFO - 2021-12-10 13:52:11 --> Helper loaded: date_helper
INFO - 2021-12-10 13:52:11 --> Database Driver Class Initialized
INFO - 2021-12-10 13:52:11 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:52:11 --> Parser Class Initialized
INFO - 2021-12-10 13:52:11 --> Model Class Initialized
INFO - 2021-12-10 13:52:11 --> Model Class Initialized
INFO - 2021-12-10 13:52:11 --> Controller Class Initialized
INFO - 2021-12-10 13:52:11 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:52:11 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:52:11 --> Could not find the language line "today"
INFO - 2021-12-10 13:52:11 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 13:52:11 --> Form Validation Class Initialized
INFO - 2021-12-10 13:52:11 --> Model Class Initialized
INFO - 2021-12-10 13:52:11 --> Final output sent to browser
DEBUG - 2021-12-10 13:52:11 --> Total execution time: 0.1750
INFO - 2021-12-10 13:52:13 --> Config Class Initialized
INFO - 2021-12-10 13:52:13 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:52:13 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:52:13 --> Utf8 Class Initialized
INFO - 2021-12-10 13:52:13 --> URI Class Initialized
INFO - 2021-12-10 13:52:13 --> Router Class Initialized
INFO - 2021-12-10 13:52:13 --> Output Class Initialized
INFO - 2021-12-10 13:52:13 --> Security Class Initialized
INFO - 2021-12-10 13:52:13 --> CRSF cookie sent
DEBUG - 2021-12-10 13:52:13 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:52:13 --> Input Class Initialized
INFO - 2021-12-10 13:52:13 --> Language Class Initialized
INFO - 2021-12-10 13:52:13 --> Loader Class Initialized
INFO - 2021-12-10 13:52:13 --> Helper loaded: url_helper
INFO - 2021-12-10 13:52:13 --> Helper loaded: form_helper
INFO - 2021-12-10 13:52:13 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:52:13 --> Helper loaded: language_helper
INFO - 2021-12-10 13:52:13 --> Helper loaded: file_helper
INFO - 2021-12-10 13:52:13 --> Helper loaded: date_helper
INFO - 2021-12-10 13:52:13 --> Database Driver Class Initialized
INFO - 2021-12-10 13:52:13 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:52:13 --> Parser Class Initialized
INFO - 2021-12-10 13:52:13 --> Model Class Initialized
INFO - 2021-12-10 13:52:13 --> Model Class Initialized
INFO - 2021-12-10 13:52:13 --> Controller Class Initialized
INFO - 2021-12-10 13:52:13 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:52:13 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:52:13 --> Could not find the language line "today"
INFO - 2021-12-10 13:52:13 --> Model Class Initialized
INFO - 2021-12-10 13:52:13 --> Helper loaded: text_helper
INFO - 2021-12-10 13:52:13 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:52:13 --> Form Validation Class Initialized
INFO - 2021-12-10 13:52:13 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 13:52:13 --> Final output sent to browser
DEBUG - 2021-12-10 13:52:13 --> Total execution time: 0.2749
INFO - 2021-12-10 13:52:16 --> Config Class Initialized
INFO - 2021-12-10 13:52:16 --> Hooks Class Initialized
DEBUG - 2021-12-10 13:52:16 --> UTF-8 Support Enabled
INFO - 2021-12-10 13:52:16 --> Utf8 Class Initialized
INFO - 2021-12-10 13:52:16 --> URI Class Initialized
INFO - 2021-12-10 13:52:16 --> Router Class Initialized
INFO - 2021-12-10 13:52:16 --> Output Class Initialized
INFO - 2021-12-10 13:52:16 --> Security Class Initialized
INFO - 2021-12-10 13:52:16 --> CRSF cookie sent
INFO - 2021-12-10 13:52:16 --> CSRF token verified
DEBUG - 2021-12-10 13:52:16 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 13:52:16 --> Input Class Initialized
INFO - 2021-12-10 13:52:16 --> Language Class Initialized
INFO - 2021-12-10 13:52:16 --> Loader Class Initialized
INFO - 2021-12-10 13:52:16 --> Helper loaded: url_helper
INFO - 2021-12-10 13:52:16 --> Helper loaded: form_helper
INFO - 2021-12-10 13:52:16 --> Helper loaded: cookie_helper
INFO - 2021-12-10 13:52:16 --> Helper loaded: language_helper
INFO - 2021-12-10 13:52:16 --> Helper loaded: file_helper
INFO - 2021-12-10 13:52:16 --> Helper loaded: date_helper
INFO - 2021-12-10 13:52:16 --> Database Driver Class Initialized
INFO - 2021-12-10 13:52:16 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 13:52:16 --> Parser Class Initialized
INFO - 2021-12-10 13:52:16 --> Model Class Initialized
INFO - 2021-12-10 13:52:16 --> Model Class Initialized
INFO - 2021-12-10 13:52:16 --> Controller Class Initialized
INFO - 2021-12-10 13:52:16 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 13:52:16 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 13:52:16 --> Could not find the language line "today"
INFO - 2021-12-10 13:52:16 --> Model Class Initialized
INFO - 2021-12-10 13:52:16 --> Helper loaded: text_helper
INFO - 2021-12-10 13:52:16 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 13:52:16 --> Form Validation Class Initialized
INFO - 2021-12-10 13:52:16 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 13:52:16 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 13:52:16 --> Final output sent to browser
DEBUG - 2021-12-10 13:52:16 --> Total execution time: 0.2762
INFO - 2021-12-10 14:00:41 --> Config Class Initialized
INFO - 2021-12-10 14:00:41 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:00:41 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:00:41 --> Utf8 Class Initialized
INFO - 2021-12-10 14:00:41 --> URI Class Initialized
INFO - 2021-12-10 14:00:41 --> Router Class Initialized
INFO - 2021-12-10 14:00:41 --> Output Class Initialized
INFO - 2021-12-10 14:00:41 --> Security Class Initialized
INFO - 2021-12-10 14:00:41 --> CRSF cookie sent
INFO - 2021-12-10 14:00:41 --> CSRF token verified
DEBUG - 2021-12-10 14:00:41 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:00:41 --> Input Class Initialized
INFO - 2021-12-10 14:00:41 --> Language Class Initialized
INFO - 2021-12-10 14:00:41 --> Loader Class Initialized
INFO - 2021-12-10 14:00:41 --> Helper loaded: url_helper
INFO - 2021-12-10 14:00:41 --> Helper loaded: form_helper
INFO - 2021-12-10 14:00:41 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:00:41 --> Helper loaded: language_helper
INFO - 2021-12-10 14:00:41 --> Helper loaded: file_helper
INFO - 2021-12-10 14:00:41 --> Helper loaded: date_helper
INFO - 2021-12-10 14:00:41 --> Database Driver Class Initialized
INFO - 2021-12-10 14:00:41 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:00:41 --> Parser Class Initialized
INFO - 2021-12-10 14:00:41 --> Model Class Initialized
INFO - 2021-12-10 14:00:41 --> Model Class Initialized
INFO - 2021-12-10 14:00:41 --> Controller Class Initialized
INFO - 2021-12-10 14:00:41 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:00:41 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:00:41 --> Could not find the language line "today"
INFO - 2021-12-10 14:00:41 --> Model Class Initialized
INFO - 2021-12-10 14:00:41 --> Helper loaded: text_helper
INFO - 2021-12-10 14:00:41 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:00:41 --> Form Validation Class Initialized
INFO - 2021-12-10 14:00:41 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 14:00:41 --> Severity: Notice --> Undefined variable: register_open_time C:\wamp64\www\Reactor\sma\controllers\Pos.php 595
ERROR - 2021-12-10 14:00:41 --> Severity: Notice --> Undefined variable: register_open_time C:\wamp64\www\Reactor\sma\controllers\Pos.php 595
ERROR - 2021-12-10 14:00:41 --> Severity: Notice --> Undefined variable: register_open_time C:\wamp64\www\Reactor\sma\controllers\Pos.php 595
ERROR - 2021-12-10 14:00:41 --> Severity: Notice --> Undefined variable: register_open_time C:\wamp64\www\Reactor\sma\controllers\Pos.php 595
ERROR - 2021-12-10 14:00:41 --> Severity: Notice --> Undefined variable: register_open_time C:\wamp64\www\Reactor\sma\controllers\Pos.php 595
INFO - 2021-12-10 14:00:41 --> Final output sent to browser
DEBUG - 2021-12-10 14:00:41 --> Total execution time: 0.3006
INFO - 2021-12-10 14:01:09 --> Config Class Initialized
INFO - 2021-12-10 14:01:09 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:01:09 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:01:09 --> Utf8 Class Initialized
INFO - 2021-12-10 14:01:09 --> URI Class Initialized
INFO - 2021-12-10 14:01:09 --> Router Class Initialized
INFO - 2021-12-10 14:01:09 --> Output Class Initialized
INFO - 2021-12-10 14:01:09 --> Security Class Initialized
INFO - 2021-12-10 14:01:09 --> CRSF cookie sent
INFO - 2021-12-10 14:01:09 --> CSRF token verified
DEBUG - 2021-12-10 14:01:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:01:09 --> Input Class Initialized
INFO - 2021-12-10 14:01:09 --> Language Class Initialized
INFO - 2021-12-10 14:01:09 --> Loader Class Initialized
INFO - 2021-12-10 14:01:09 --> Helper loaded: url_helper
INFO - 2021-12-10 14:01:09 --> Helper loaded: form_helper
INFO - 2021-12-10 14:01:09 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:01:09 --> Helper loaded: language_helper
INFO - 2021-12-10 14:01:09 --> Helper loaded: file_helper
INFO - 2021-12-10 14:01:09 --> Helper loaded: date_helper
INFO - 2021-12-10 14:01:09 --> Database Driver Class Initialized
INFO - 2021-12-10 14:01:09 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:01:09 --> Parser Class Initialized
INFO - 2021-12-10 14:01:09 --> Model Class Initialized
INFO - 2021-12-10 14:01:09 --> Model Class Initialized
INFO - 2021-12-10 14:01:09 --> Controller Class Initialized
INFO - 2021-12-10 14:01:09 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:01:09 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:01:09 --> Could not find the language line "today"
INFO - 2021-12-10 14:01:09 --> Model Class Initialized
INFO - 2021-12-10 14:01:09 --> Helper loaded: text_helper
INFO - 2021-12-10 14:01:09 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:01:09 --> Form Validation Class Initialized
INFO - 2021-12-10 14:01:09 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:01:09 --> Final output sent to browser
DEBUG - 2021-12-10 14:01:09 --> Total execution time: 0.2205
INFO - 2021-12-10 14:05:43 --> Config Class Initialized
INFO - 2021-12-10 14:05:43 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:05:43 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:05:43 --> Utf8 Class Initialized
INFO - 2021-12-10 14:05:43 --> URI Class Initialized
INFO - 2021-12-10 14:05:43 --> Router Class Initialized
INFO - 2021-12-10 14:05:43 --> Output Class Initialized
INFO - 2021-12-10 14:05:43 --> Security Class Initialized
INFO - 2021-12-10 14:05:43 --> CRSF cookie sent
INFO - 2021-12-10 14:05:43 --> CSRF token verified
DEBUG - 2021-12-10 14:05:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:05:43 --> Input Class Initialized
INFO - 2021-12-10 14:05:43 --> Language Class Initialized
INFO - 2021-12-10 14:05:43 --> Loader Class Initialized
INFO - 2021-12-10 14:05:43 --> Helper loaded: url_helper
INFO - 2021-12-10 14:05:43 --> Helper loaded: form_helper
INFO - 2021-12-10 14:05:43 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:05:43 --> Helper loaded: language_helper
INFO - 2021-12-10 14:05:43 --> Helper loaded: file_helper
INFO - 2021-12-10 14:05:43 --> Helper loaded: date_helper
INFO - 2021-12-10 14:05:43 --> Database Driver Class Initialized
INFO - 2021-12-10 14:05:43 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:05:43 --> Parser Class Initialized
INFO - 2021-12-10 14:05:43 --> Model Class Initialized
INFO - 2021-12-10 14:05:43 --> Model Class Initialized
INFO - 2021-12-10 14:05:43 --> Controller Class Initialized
INFO - 2021-12-10 14:05:43 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:05:43 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:05:43 --> Could not find the language line "today"
INFO - 2021-12-10 14:05:43 --> Model Class Initialized
INFO - 2021-12-10 14:05:43 --> Helper loaded: text_helper
INFO - 2021-12-10 14:05:43 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:05:43 --> Form Validation Class Initialized
INFO - 2021-12-10 14:05:43 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:05:43 --> Final output sent to browser
DEBUG - 2021-12-10 14:05:43 --> Total execution time: 0.2839
INFO - 2021-12-10 14:07:39 --> Config Class Initialized
INFO - 2021-12-10 14:07:39 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:07:39 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:07:39 --> Utf8 Class Initialized
INFO - 2021-12-10 14:07:39 --> URI Class Initialized
INFO - 2021-12-10 14:07:39 --> Router Class Initialized
INFO - 2021-12-10 14:07:39 --> Output Class Initialized
INFO - 2021-12-10 14:07:39 --> Security Class Initialized
INFO - 2021-12-10 14:07:39 --> CRSF cookie sent
INFO - 2021-12-10 14:07:39 --> CSRF token verified
DEBUG - 2021-12-10 14:07:39 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:07:39 --> Input Class Initialized
INFO - 2021-12-10 14:07:39 --> Language Class Initialized
INFO - 2021-12-10 14:07:39 --> Loader Class Initialized
INFO - 2021-12-10 14:07:39 --> Helper loaded: url_helper
INFO - 2021-12-10 14:07:39 --> Helper loaded: form_helper
INFO - 2021-12-10 14:07:39 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:07:39 --> Helper loaded: language_helper
INFO - 2021-12-10 14:07:39 --> Helper loaded: file_helper
INFO - 2021-12-10 14:07:39 --> Helper loaded: date_helper
INFO - 2021-12-10 14:07:39 --> Database Driver Class Initialized
INFO - 2021-12-10 14:07:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:07:39 --> Parser Class Initialized
INFO - 2021-12-10 14:07:39 --> Model Class Initialized
INFO - 2021-12-10 14:07:39 --> Model Class Initialized
INFO - 2021-12-10 14:07:39 --> Controller Class Initialized
INFO - 2021-12-10 14:07:39 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:07:39 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:07:39 --> Could not find the language line "today"
INFO - 2021-12-10 14:07:39 --> Model Class Initialized
INFO - 2021-12-10 14:07:39 --> Helper loaded: text_helper
INFO - 2021-12-10 14:07:39 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:07:39 --> Form Validation Class Initialized
INFO - 2021-12-10 14:07:39 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:07:39 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:07:39 --> Final output sent to browser
DEBUG - 2021-12-10 14:07:39 --> Total execution time: 0.2677
INFO - 2021-12-10 14:10:22 --> Config Class Initialized
INFO - 2021-12-10 14:10:22 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:10:22 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:10:22 --> Utf8 Class Initialized
INFO - 2021-12-10 14:10:22 --> URI Class Initialized
INFO - 2021-12-10 14:10:22 --> Router Class Initialized
INFO - 2021-12-10 14:10:22 --> Output Class Initialized
INFO - 2021-12-10 14:10:22 --> Security Class Initialized
INFO - 2021-12-10 14:10:22 --> CRSF cookie sent
INFO - 2021-12-10 14:10:22 --> CSRF token verified
DEBUG - 2021-12-10 14:10:22 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:10:22 --> Input Class Initialized
INFO - 2021-12-10 14:10:22 --> Language Class Initialized
INFO - 2021-12-10 14:10:22 --> Loader Class Initialized
INFO - 2021-12-10 14:10:22 --> Helper loaded: url_helper
INFO - 2021-12-10 14:10:22 --> Helper loaded: form_helper
INFO - 2021-12-10 14:10:22 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:10:22 --> Helper loaded: language_helper
INFO - 2021-12-10 14:10:22 --> Helper loaded: file_helper
INFO - 2021-12-10 14:10:22 --> Helper loaded: date_helper
INFO - 2021-12-10 14:10:22 --> Database Driver Class Initialized
INFO - 2021-12-10 14:10:22 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:10:22 --> Parser Class Initialized
INFO - 2021-12-10 14:10:22 --> Model Class Initialized
INFO - 2021-12-10 14:10:22 --> Model Class Initialized
INFO - 2021-12-10 14:10:22 --> Controller Class Initialized
INFO - 2021-12-10 14:10:22 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:10:22 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:10:22 --> Could not find the language line "today"
INFO - 2021-12-10 14:10:22 --> Model Class Initialized
INFO - 2021-12-10 14:10:22 --> Helper loaded: text_helper
INFO - 2021-12-10 14:10:22 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:10:22 --> Form Validation Class Initialized
INFO - 2021-12-10 14:10:22 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:10:22 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:10:22 --> Final output sent to browser
DEBUG - 2021-12-10 14:10:22 --> Total execution time: 0.2151
INFO - 2021-12-10 14:12:27 --> Config Class Initialized
INFO - 2021-12-10 14:12:27 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:12:27 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:12:27 --> Utf8 Class Initialized
INFO - 2021-12-10 14:12:27 --> URI Class Initialized
INFO - 2021-12-10 14:12:27 --> Router Class Initialized
INFO - 2021-12-10 14:12:27 --> Output Class Initialized
INFO - 2021-12-10 14:12:27 --> Security Class Initialized
INFO - 2021-12-10 14:12:27 --> CRSF cookie sent
INFO - 2021-12-10 14:12:27 --> CSRF token verified
DEBUG - 2021-12-10 14:12:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:12:27 --> Input Class Initialized
INFO - 2021-12-10 14:12:27 --> Language Class Initialized
INFO - 2021-12-10 14:12:27 --> Loader Class Initialized
INFO - 2021-12-10 14:12:27 --> Helper loaded: url_helper
INFO - 2021-12-10 14:12:27 --> Helper loaded: form_helper
INFO - 2021-12-10 14:12:27 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:12:27 --> Helper loaded: language_helper
INFO - 2021-12-10 14:12:27 --> Helper loaded: file_helper
INFO - 2021-12-10 14:12:27 --> Helper loaded: date_helper
INFO - 2021-12-10 14:12:27 --> Database Driver Class Initialized
INFO - 2021-12-10 14:12:27 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:12:27 --> Parser Class Initialized
INFO - 2021-12-10 14:12:27 --> Model Class Initialized
INFO - 2021-12-10 14:12:27 --> Model Class Initialized
INFO - 2021-12-10 14:12:27 --> Controller Class Initialized
INFO - 2021-12-10 14:12:27 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:12:27 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:12:27 --> Could not find the language line "today"
INFO - 2021-12-10 14:12:27 --> Model Class Initialized
INFO - 2021-12-10 14:12:27 --> Helper loaded: text_helper
INFO - 2021-12-10 14:12:27 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:12:27 --> Form Validation Class Initialized
INFO - 2021-12-10 14:12:27 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Undefined variable: totalsales C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 47
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 47
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Undefined variable: totalsales C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 47
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 47
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Undefined variable: refunds C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 53
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 53
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Undefined variable: refunds C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 53
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 53
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Undefined variable: expenses C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 59
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Undefined variable: cashsales C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 66
ERROR - 2021-12-10 14:12:27 --> Severity: Notice --> Trying to get property of non-object C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 66
INFO - 2021-12-10 14:12:27 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:12:27 --> Final output sent to browser
DEBUG - 2021-12-10 14:12:27 --> Total execution time: 0.2443
INFO - 2021-12-10 14:13:52 --> Config Class Initialized
INFO - 2021-12-10 14:13:52 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:13:52 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:13:52 --> Utf8 Class Initialized
INFO - 2021-12-10 14:13:52 --> URI Class Initialized
INFO - 2021-12-10 14:13:52 --> Router Class Initialized
INFO - 2021-12-10 14:13:52 --> Output Class Initialized
INFO - 2021-12-10 14:13:52 --> Security Class Initialized
INFO - 2021-12-10 14:13:52 --> CRSF cookie sent
INFO - 2021-12-10 14:13:52 --> CSRF token verified
DEBUG - 2021-12-10 14:13:52 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:13:52 --> Input Class Initialized
INFO - 2021-12-10 14:13:52 --> Language Class Initialized
INFO - 2021-12-10 14:13:52 --> Loader Class Initialized
INFO - 2021-12-10 14:13:52 --> Helper loaded: url_helper
INFO - 2021-12-10 14:13:52 --> Helper loaded: form_helper
INFO - 2021-12-10 14:13:52 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:13:52 --> Helper loaded: language_helper
INFO - 2021-12-10 14:13:52 --> Helper loaded: file_helper
INFO - 2021-12-10 14:13:52 --> Helper loaded: date_helper
INFO - 2021-12-10 14:13:52 --> Database Driver Class Initialized
INFO - 2021-12-10 14:13:52 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:13:52 --> Parser Class Initialized
INFO - 2021-12-10 14:13:52 --> Model Class Initialized
INFO - 2021-12-10 14:13:52 --> Model Class Initialized
INFO - 2021-12-10 14:13:52 --> Controller Class Initialized
INFO - 2021-12-10 14:13:52 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:13:52 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:13:52 --> Could not find the language line "today"
INFO - 2021-12-10 14:13:52 --> Model Class Initialized
INFO - 2021-12-10 14:13:52 --> Helper loaded: text_helper
INFO - 2021-12-10 14:13:52 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:13:52 --> Form Validation Class Initialized
INFO - 2021-12-10 14:13:52 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:13:52 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:13:52 --> Final output sent to browser
DEBUG - 2021-12-10 14:13:52 --> Total execution time: 0.3011
INFO - 2021-12-10 14:14:10 --> Config Class Initialized
INFO - 2021-12-10 14:14:10 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:14:10 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:14:10 --> Utf8 Class Initialized
INFO - 2021-12-10 14:14:10 --> URI Class Initialized
INFO - 2021-12-10 14:14:10 --> Router Class Initialized
INFO - 2021-12-10 14:14:10 --> Output Class Initialized
INFO - 2021-12-10 14:14:10 --> Security Class Initialized
INFO - 2021-12-10 14:14:10 --> CRSF cookie sent
INFO - 2021-12-10 14:14:10 --> CSRF token verified
DEBUG - 2021-12-10 14:14:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:14:10 --> Input Class Initialized
INFO - 2021-12-10 14:14:10 --> Language Class Initialized
INFO - 2021-12-10 14:14:10 --> Loader Class Initialized
INFO - 2021-12-10 14:14:10 --> Helper loaded: url_helper
INFO - 2021-12-10 14:14:10 --> Helper loaded: form_helper
INFO - 2021-12-10 14:14:10 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:14:10 --> Helper loaded: language_helper
INFO - 2021-12-10 14:14:10 --> Helper loaded: file_helper
INFO - 2021-12-10 14:14:10 --> Helper loaded: date_helper
INFO - 2021-12-10 14:14:10 --> Database Driver Class Initialized
INFO - 2021-12-10 14:14:10 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:14:10 --> Parser Class Initialized
INFO - 2021-12-10 14:14:10 --> Model Class Initialized
INFO - 2021-12-10 14:14:10 --> Model Class Initialized
INFO - 2021-12-10 14:14:10 --> Controller Class Initialized
INFO - 2021-12-10 14:14:10 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:14:10 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:14:10 --> Could not find the language line "today"
INFO - 2021-12-10 14:14:10 --> Model Class Initialized
INFO - 2021-12-10 14:14:10 --> Helper loaded: text_helper
INFO - 2021-12-10 14:14:10 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:14:10 --> Form Validation Class Initialized
INFO - 2021-12-10 14:14:10 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:14:10 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:14:10 --> Final output sent to browser
DEBUG - 2021-12-10 14:14:10 --> Total execution time: 0.2725
INFO - 2021-12-10 14:14:56 --> Config Class Initialized
INFO - 2021-12-10 14:14:56 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:14:56 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:14:56 --> Utf8 Class Initialized
INFO - 2021-12-10 14:14:56 --> URI Class Initialized
INFO - 2021-12-10 14:14:56 --> Router Class Initialized
INFO - 2021-12-10 14:14:56 --> Output Class Initialized
INFO - 2021-12-10 14:14:56 --> Security Class Initialized
INFO - 2021-12-10 14:14:56 --> CRSF cookie sent
INFO - 2021-12-10 14:14:56 --> CSRF token verified
DEBUG - 2021-12-10 14:14:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:14:56 --> Input Class Initialized
INFO - 2021-12-10 14:14:56 --> Language Class Initialized
INFO - 2021-12-10 14:14:56 --> Loader Class Initialized
INFO - 2021-12-10 14:14:56 --> Helper loaded: url_helper
INFO - 2021-12-10 14:14:56 --> Helper loaded: form_helper
INFO - 2021-12-10 14:14:56 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:14:56 --> Helper loaded: language_helper
INFO - 2021-12-10 14:14:56 --> Helper loaded: file_helper
INFO - 2021-12-10 14:14:56 --> Helper loaded: date_helper
INFO - 2021-12-10 14:14:56 --> Database Driver Class Initialized
INFO - 2021-12-10 14:14:56 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:14:56 --> Parser Class Initialized
INFO - 2021-12-10 14:14:56 --> Model Class Initialized
INFO - 2021-12-10 14:14:56 --> Model Class Initialized
INFO - 2021-12-10 14:14:56 --> Controller Class Initialized
INFO - 2021-12-10 14:14:56 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:14:56 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:14:56 --> Could not find the language line "today"
INFO - 2021-12-10 14:14:56 --> Model Class Initialized
INFO - 2021-12-10 14:14:56 --> Helper loaded: text_helper
INFO - 2021-12-10 14:14:56 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:14:56 --> Form Validation Class Initialized
INFO - 2021-12-10 14:14:56 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:14:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:14:56 --> Final output sent to browser
DEBUG - 2021-12-10 14:14:56 --> Total execution time: 0.3022
INFO - 2021-12-10 14:15:43 --> Config Class Initialized
INFO - 2021-12-10 14:15:43 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:15:43 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:15:43 --> Utf8 Class Initialized
INFO - 2021-12-10 14:15:43 --> URI Class Initialized
INFO - 2021-12-10 14:15:43 --> Router Class Initialized
INFO - 2021-12-10 14:15:43 --> Output Class Initialized
INFO - 2021-12-10 14:15:43 --> Security Class Initialized
INFO - 2021-12-10 14:15:43 --> CRSF cookie sent
INFO - 2021-12-10 14:15:43 --> CSRF token verified
DEBUG - 2021-12-10 14:15:43 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:15:43 --> Input Class Initialized
INFO - 2021-12-10 14:15:43 --> Language Class Initialized
INFO - 2021-12-10 14:15:43 --> Loader Class Initialized
INFO - 2021-12-10 14:15:43 --> Helper loaded: url_helper
INFO - 2021-12-10 14:15:43 --> Helper loaded: form_helper
INFO - 2021-12-10 14:15:43 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:15:43 --> Helper loaded: language_helper
INFO - 2021-12-10 14:15:43 --> Helper loaded: file_helper
INFO - 2021-12-10 14:15:43 --> Helper loaded: date_helper
INFO - 2021-12-10 14:15:43 --> Database Driver Class Initialized
INFO - 2021-12-10 14:15:43 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:15:43 --> Parser Class Initialized
INFO - 2021-12-10 14:15:43 --> Model Class Initialized
INFO - 2021-12-10 14:15:43 --> Model Class Initialized
INFO - 2021-12-10 14:15:43 --> Controller Class Initialized
INFO - 2021-12-10 14:15:43 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:15:43 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:15:43 --> Could not find the language line "today"
INFO - 2021-12-10 14:15:43 --> Model Class Initialized
INFO - 2021-12-10 14:15:43 --> Helper loaded: text_helper
INFO - 2021-12-10 14:15:43 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:15:43 --> Form Validation Class Initialized
INFO - 2021-12-10 14:15:43 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:15:43 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:15:43 --> Final output sent to browser
DEBUG - 2021-12-10 14:15:43 --> Total execution time: 0.2630
INFO - 2021-12-10 14:17:03 --> Config Class Initialized
INFO - 2021-12-10 14:17:03 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:17:03 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:17:03 --> Utf8 Class Initialized
INFO - 2021-12-10 14:17:03 --> URI Class Initialized
INFO - 2021-12-10 14:17:03 --> Router Class Initialized
INFO - 2021-12-10 14:17:03 --> Output Class Initialized
INFO - 2021-12-10 14:17:03 --> Security Class Initialized
INFO - 2021-12-10 14:17:03 --> CRSF cookie sent
INFO - 2021-12-10 14:17:03 --> CSRF token verified
DEBUG - 2021-12-10 14:17:03 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:17:03 --> Input Class Initialized
INFO - 2021-12-10 14:17:03 --> Language Class Initialized
INFO - 2021-12-10 14:17:03 --> Loader Class Initialized
INFO - 2021-12-10 14:17:03 --> Helper loaded: url_helper
INFO - 2021-12-10 14:17:03 --> Helper loaded: form_helper
INFO - 2021-12-10 14:17:03 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:17:03 --> Helper loaded: language_helper
INFO - 2021-12-10 14:17:03 --> Helper loaded: file_helper
INFO - 2021-12-10 14:17:03 --> Helper loaded: date_helper
INFO - 2021-12-10 14:17:03 --> Database Driver Class Initialized
INFO - 2021-12-10 14:17:03 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:17:03 --> Parser Class Initialized
INFO - 2021-12-10 14:17:03 --> Model Class Initialized
INFO - 2021-12-10 14:17:03 --> Model Class Initialized
INFO - 2021-12-10 14:17:03 --> Controller Class Initialized
INFO - 2021-12-10 14:17:03 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:17:03 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:17:03 --> Could not find the language line "today"
INFO - 2021-12-10 14:17:03 --> Model Class Initialized
INFO - 2021-12-10 14:17:03 --> Helper loaded: text_helper
INFO - 2021-12-10 14:17:03 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:17:03 --> Form Validation Class Initialized
INFO - 2021-12-10 14:17:03 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:17:03 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:17:03 --> Final output sent to browser
DEBUG - 2021-12-10 14:17:03 --> Total execution time: 0.2762
INFO - 2021-12-10 14:17:38 --> Config Class Initialized
INFO - 2021-12-10 14:17:38 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:17:38 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:17:38 --> Utf8 Class Initialized
INFO - 2021-12-10 14:17:38 --> URI Class Initialized
INFO - 2021-12-10 14:17:38 --> Router Class Initialized
INFO - 2021-12-10 14:17:38 --> Output Class Initialized
INFO - 2021-12-10 14:17:38 --> Security Class Initialized
INFO - 2021-12-10 14:17:38 --> CRSF cookie sent
INFO - 2021-12-10 14:17:38 --> CSRF token verified
DEBUG - 2021-12-10 14:17:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:17:38 --> Input Class Initialized
INFO - 2021-12-10 14:17:38 --> Language Class Initialized
INFO - 2021-12-10 14:17:38 --> Loader Class Initialized
INFO - 2021-12-10 14:17:38 --> Helper loaded: url_helper
INFO - 2021-12-10 14:17:38 --> Helper loaded: form_helper
INFO - 2021-12-10 14:17:38 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:17:38 --> Helper loaded: language_helper
INFO - 2021-12-10 14:17:38 --> Helper loaded: file_helper
INFO - 2021-12-10 14:17:38 --> Helper loaded: date_helper
INFO - 2021-12-10 14:17:38 --> Database Driver Class Initialized
INFO - 2021-12-10 14:17:38 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:17:38 --> Parser Class Initialized
INFO - 2021-12-10 14:17:38 --> Model Class Initialized
INFO - 2021-12-10 14:17:38 --> Model Class Initialized
INFO - 2021-12-10 14:17:38 --> Controller Class Initialized
INFO - 2021-12-10 14:17:38 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:17:38 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:17:38 --> Could not find the language line "today"
INFO - 2021-12-10 14:17:38 --> Model Class Initialized
INFO - 2021-12-10 14:17:38 --> Helper loaded: text_helper
INFO - 2021-12-10 14:17:38 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:17:38 --> Form Validation Class Initialized
INFO - 2021-12-10 14:17:38 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:17:38 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:17:38 --> Final output sent to browser
DEBUG - 2021-12-10 14:17:38 --> Total execution time: 0.3435
INFO - 2021-12-10 14:26:07 --> Config Class Initialized
INFO - 2021-12-10 14:26:07 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:26:07 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:26:07 --> Utf8 Class Initialized
INFO - 2021-12-10 14:26:07 --> URI Class Initialized
INFO - 2021-12-10 14:26:07 --> Router Class Initialized
INFO - 2021-12-10 14:26:07 --> Output Class Initialized
INFO - 2021-12-10 14:26:07 --> Security Class Initialized
INFO - 2021-12-10 14:26:07 --> CRSF cookie sent
INFO - 2021-12-10 14:26:07 --> CSRF token verified
DEBUG - 2021-12-10 14:26:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:26:07 --> Input Class Initialized
INFO - 2021-12-10 14:26:07 --> Language Class Initialized
INFO - 2021-12-10 14:26:07 --> Loader Class Initialized
INFO - 2021-12-10 14:26:07 --> Helper loaded: url_helper
INFO - 2021-12-10 14:26:07 --> Helper loaded: form_helper
INFO - 2021-12-10 14:26:07 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:26:07 --> Helper loaded: language_helper
INFO - 2021-12-10 14:26:07 --> Helper loaded: file_helper
INFO - 2021-12-10 14:26:07 --> Helper loaded: date_helper
INFO - 2021-12-10 14:26:07 --> Database Driver Class Initialized
INFO - 2021-12-10 14:26:07 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:26:07 --> Parser Class Initialized
INFO - 2021-12-10 14:26:07 --> Model Class Initialized
INFO - 2021-12-10 14:26:07 --> Model Class Initialized
INFO - 2021-12-10 14:26:07 --> Controller Class Initialized
INFO - 2021-12-10 14:26:07 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:26:07 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:26:07 --> Could not find the language line "today"
INFO - 2021-12-10 14:26:07 --> Model Class Initialized
INFO - 2021-12-10 14:26:07 --> Helper loaded: text_helper
INFO - 2021-12-10 14:26:07 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:26:07 --> Form Validation Class Initialized
INFO - 2021-12-10 14:26:07 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 14:26:07 --> Severity: Notice --> Undefined property: Pos::$settings_model C:\wamp64\www\Reactor\sma\controllers\Pos.php 622
ERROR - 2021-12-10 14:26:07 --> Severity: error --> Exception: Call to a member function getSettings() on null C:\wamp64\www\Reactor\sma\controllers\Pos.php 622
INFO - 2021-12-10 14:26:26 --> Config Class Initialized
INFO - 2021-12-10 14:26:26 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:26:26 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:26:26 --> Utf8 Class Initialized
INFO - 2021-12-10 14:26:26 --> URI Class Initialized
INFO - 2021-12-10 14:26:26 --> Router Class Initialized
INFO - 2021-12-10 14:26:26 --> Output Class Initialized
INFO - 2021-12-10 14:26:26 --> Security Class Initialized
INFO - 2021-12-10 14:26:26 --> CRSF cookie sent
INFO - 2021-12-10 14:26:26 --> CSRF token verified
DEBUG - 2021-12-10 14:26:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:26:26 --> Input Class Initialized
INFO - 2021-12-10 14:26:26 --> Language Class Initialized
INFO - 2021-12-10 14:26:26 --> Loader Class Initialized
INFO - 2021-12-10 14:26:26 --> Helper loaded: url_helper
INFO - 2021-12-10 14:26:26 --> Helper loaded: form_helper
INFO - 2021-12-10 14:26:26 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:26:26 --> Helper loaded: language_helper
INFO - 2021-12-10 14:26:26 --> Helper loaded: file_helper
INFO - 2021-12-10 14:26:26 --> Helper loaded: date_helper
INFO - 2021-12-10 14:26:26 --> Database Driver Class Initialized
INFO - 2021-12-10 14:26:26 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:26:26 --> Parser Class Initialized
INFO - 2021-12-10 14:26:26 --> Model Class Initialized
INFO - 2021-12-10 14:26:26 --> Model Class Initialized
INFO - 2021-12-10 14:26:26 --> Controller Class Initialized
INFO - 2021-12-10 14:26:26 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:26:26 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:26:26 --> Could not find the language line "today"
INFO - 2021-12-10 14:26:26 --> Model Class Initialized
INFO - 2021-12-10 14:26:26 --> Helper loaded: text_helper
INFO - 2021-12-10 14:26:26 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:26:26 --> Form Validation Class Initialized
INFO - 2021-12-10 14:26:26 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:26:26 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:26:26 --> Final output sent to browser
DEBUG - 2021-12-10 14:26:26 --> Total execution time: 0.2657
INFO - 2021-12-10 14:28:25 --> Config Class Initialized
INFO - 2021-12-10 14:28:25 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:28:25 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:28:25 --> Utf8 Class Initialized
INFO - 2021-12-10 14:28:25 --> URI Class Initialized
INFO - 2021-12-10 14:28:25 --> Router Class Initialized
INFO - 2021-12-10 14:28:25 --> Output Class Initialized
INFO - 2021-12-10 14:28:25 --> Security Class Initialized
INFO - 2021-12-10 14:28:25 --> CRSF cookie sent
INFO - 2021-12-10 14:28:25 --> CSRF token verified
DEBUG - 2021-12-10 14:28:25 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:28:25 --> Input Class Initialized
INFO - 2021-12-10 14:28:25 --> Language Class Initialized
INFO - 2021-12-10 14:28:25 --> Loader Class Initialized
INFO - 2021-12-10 14:28:25 --> Helper loaded: url_helper
INFO - 2021-12-10 14:28:25 --> Helper loaded: form_helper
INFO - 2021-12-10 14:28:25 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:28:25 --> Helper loaded: language_helper
INFO - 2021-12-10 14:28:25 --> Helper loaded: file_helper
INFO - 2021-12-10 14:28:25 --> Helper loaded: date_helper
INFO - 2021-12-10 14:28:25 --> Database Driver Class Initialized
INFO - 2021-12-10 14:28:25 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:28:25 --> Parser Class Initialized
INFO - 2021-12-10 14:28:25 --> Model Class Initialized
INFO - 2021-12-10 14:28:25 --> Model Class Initialized
INFO - 2021-12-10 14:28:25 --> Controller Class Initialized
INFO - 2021-12-10 14:28:25 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:28:26 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:28:26 --> Could not find the language line "today"
INFO - 2021-12-10 14:28:26 --> Model Class Initialized
INFO - 2021-12-10 14:28:26 --> Helper loaded: text_helper
INFO - 2021-12-10 14:28:26 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:28:26 --> Form Validation Class Initialized
INFO - 2021-12-10 14:28:26 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:28:26 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:28:26 --> Final output sent to browser
DEBUG - 2021-12-10 14:28:26 --> Total execution time: 0.2907
INFO - 2021-12-10 14:28:57 --> Config Class Initialized
INFO - 2021-12-10 14:28:57 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:28:57 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:28:57 --> Utf8 Class Initialized
INFO - 2021-12-10 14:28:57 --> URI Class Initialized
INFO - 2021-12-10 14:28:57 --> Router Class Initialized
INFO - 2021-12-10 14:28:57 --> Output Class Initialized
INFO - 2021-12-10 14:28:57 --> Security Class Initialized
INFO - 2021-12-10 14:28:57 --> CRSF cookie sent
INFO - 2021-12-10 14:28:57 --> CSRF token verified
DEBUG - 2021-12-10 14:28:57 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:28:57 --> Input Class Initialized
INFO - 2021-12-10 14:28:57 --> Language Class Initialized
INFO - 2021-12-10 14:28:57 --> Loader Class Initialized
INFO - 2021-12-10 14:28:57 --> Helper loaded: url_helper
INFO - 2021-12-10 14:28:57 --> Helper loaded: form_helper
INFO - 2021-12-10 14:28:57 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:28:57 --> Helper loaded: language_helper
INFO - 2021-12-10 14:28:57 --> Helper loaded: file_helper
INFO - 2021-12-10 14:28:57 --> Helper loaded: date_helper
INFO - 2021-12-10 14:28:57 --> Database Driver Class Initialized
INFO - 2021-12-10 14:28:57 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:28:57 --> Parser Class Initialized
INFO - 2021-12-10 14:28:57 --> Model Class Initialized
INFO - 2021-12-10 14:28:57 --> Model Class Initialized
INFO - 2021-12-10 14:28:57 --> Controller Class Initialized
INFO - 2021-12-10 14:28:57 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:28:57 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:28:57 --> Could not find the language line "today"
INFO - 2021-12-10 14:28:57 --> Model Class Initialized
INFO - 2021-12-10 14:28:57 --> Helper loaded: text_helper
INFO - 2021-12-10 14:28:57 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:28:57 --> Form Validation Class Initialized
INFO - 2021-12-10 14:28:57 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:28:57 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:28:57 --> Final output sent to browser
DEBUG - 2021-12-10 14:28:57 --> Total execution time: 0.2875
INFO - 2021-12-10 14:29:28 --> Config Class Initialized
INFO - 2021-12-10 14:29:28 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:29:28 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:29:28 --> Utf8 Class Initialized
INFO - 2021-12-10 14:29:28 --> URI Class Initialized
INFO - 2021-12-10 14:29:28 --> Router Class Initialized
INFO - 2021-12-10 14:29:28 --> Output Class Initialized
INFO - 2021-12-10 14:29:28 --> Security Class Initialized
INFO - 2021-12-10 14:29:28 --> CRSF cookie sent
INFO - 2021-12-10 14:29:28 --> CSRF token verified
DEBUG - 2021-12-10 14:29:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:29:28 --> Input Class Initialized
INFO - 2021-12-10 14:29:28 --> Language Class Initialized
INFO - 2021-12-10 14:29:28 --> Loader Class Initialized
INFO - 2021-12-10 14:29:28 --> Helper loaded: url_helper
INFO - 2021-12-10 14:29:28 --> Helper loaded: form_helper
INFO - 2021-12-10 14:29:28 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:29:28 --> Helper loaded: language_helper
INFO - 2021-12-10 14:29:28 --> Helper loaded: file_helper
INFO - 2021-12-10 14:29:28 --> Helper loaded: date_helper
INFO - 2021-12-10 14:29:28 --> Database Driver Class Initialized
INFO - 2021-12-10 14:29:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:29:28 --> Parser Class Initialized
INFO - 2021-12-10 14:29:28 --> Model Class Initialized
INFO - 2021-12-10 14:29:28 --> Model Class Initialized
INFO - 2021-12-10 14:29:28 --> Controller Class Initialized
INFO - 2021-12-10 14:29:28 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:29:28 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:29:28 --> Could not find the language line "today"
INFO - 2021-12-10 14:29:28 --> Model Class Initialized
INFO - 2021-12-10 14:29:28 --> Helper loaded: text_helper
INFO - 2021-12-10 14:29:28 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:29:28 --> Form Validation Class Initialized
INFO - 2021-12-10 14:29:28 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:29:28 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:29:28 --> Final output sent to browser
DEBUG - 2021-12-10 14:29:28 --> Total execution time: 0.2095
INFO - 2021-12-10 14:31:35 --> Config Class Initialized
INFO - 2021-12-10 14:31:35 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:31:35 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:31:35 --> Utf8 Class Initialized
INFO - 2021-12-10 14:31:35 --> URI Class Initialized
INFO - 2021-12-10 14:31:35 --> Router Class Initialized
INFO - 2021-12-10 14:31:35 --> Output Class Initialized
INFO - 2021-12-10 14:31:35 --> Security Class Initialized
INFO - 2021-12-10 14:31:35 --> CRSF cookie sent
INFO - 2021-12-10 14:31:35 --> CSRF token verified
DEBUG - 2021-12-10 14:31:35 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:31:35 --> Input Class Initialized
INFO - 2021-12-10 14:31:35 --> Language Class Initialized
INFO - 2021-12-10 14:31:35 --> Loader Class Initialized
INFO - 2021-12-10 14:31:35 --> Helper loaded: url_helper
INFO - 2021-12-10 14:31:35 --> Helper loaded: form_helper
INFO - 2021-12-10 14:31:35 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:31:35 --> Helper loaded: language_helper
INFO - 2021-12-10 14:31:35 --> Helper loaded: file_helper
INFO - 2021-12-10 14:31:35 --> Helper loaded: date_helper
INFO - 2021-12-10 14:31:35 --> Database Driver Class Initialized
INFO - 2021-12-10 14:31:35 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:31:35 --> Parser Class Initialized
INFO - 2021-12-10 14:31:35 --> Model Class Initialized
INFO - 2021-12-10 14:31:35 --> Model Class Initialized
INFO - 2021-12-10 14:31:35 --> Controller Class Initialized
INFO - 2021-12-10 14:31:35 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:31:35 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:31:35 --> Could not find the language line "today"
INFO - 2021-12-10 14:31:35 --> Model Class Initialized
INFO - 2021-12-10 14:31:35 --> Helper loaded: text_helper
INFO - 2021-12-10 14:31:35 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:31:35 --> Form Validation Class Initialized
INFO - 2021-12-10 14:31:35 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:31:35 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:31:35 --> Final output sent to browser
DEBUG - 2021-12-10 14:31:35 --> Total execution time: 0.2416
INFO - 2021-12-10 14:32:40 --> Config Class Initialized
INFO - 2021-12-10 14:32:40 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:32:40 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:32:40 --> Utf8 Class Initialized
INFO - 2021-12-10 14:32:40 --> URI Class Initialized
INFO - 2021-12-10 14:32:40 --> Router Class Initialized
INFO - 2021-12-10 14:32:40 --> Output Class Initialized
INFO - 2021-12-10 14:32:40 --> Security Class Initialized
INFO - 2021-12-10 14:32:40 --> CRSF cookie sent
INFO - 2021-12-10 14:32:40 --> CSRF token verified
DEBUG - 2021-12-10 14:32:40 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:32:40 --> Input Class Initialized
INFO - 2021-12-10 14:32:40 --> Language Class Initialized
INFO - 2021-12-10 14:32:40 --> Loader Class Initialized
INFO - 2021-12-10 14:32:40 --> Helper loaded: url_helper
INFO - 2021-12-10 14:32:40 --> Helper loaded: form_helper
INFO - 2021-12-10 14:32:40 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:32:40 --> Helper loaded: language_helper
INFO - 2021-12-10 14:32:40 --> Helper loaded: file_helper
INFO - 2021-12-10 14:32:40 --> Helper loaded: date_helper
INFO - 2021-12-10 14:32:40 --> Database Driver Class Initialized
INFO - 2021-12-10 14:32:40 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:32:40 --> Parser Class Initialized
INFO - 2021-12-10 14:32:40 --> Model Class Initialized
INFO - 2021-12-10 14:32:40 --> Model Class Initialized
INFO - 2021-12-10 14:32:40 --> Controller Class Initialized
INFO - 2021-12-10 14:32:40 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:32:40 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:32:40 --> Could not find the language line "today"
INFO - 2021-12-10 14:32:40 --> Model Class Initialized
INFO - 2021-12-10 14:32:40 --> Helper loaded: text_helper
INFO - 2021-12-10 14:32:40 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:32:40 --> Form Validation Class Initialized
INFO - 2021-12-10 14:32:40 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:32:40 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:32:40 --> Final output sent to browser
DEBUG - 2021-12-10 14:32:40 --> Total execution time: 0.7109
INFO - 2021-12-10 14:33:49 --> Config Class Initialized
INFO - 2021-12-10 14:33:49 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:33:49 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:33:49 --> Utf8 Class Initialized
INFO - 2021-12-10 14:33:49 --> URI Class Initialized
INFO - 2021-12-10 14:33:49 --> Router Class Initialized
INFO - 2021-12-10 14:33:49 --> Output Class Initialized
INFO - 2021-12-10 14:33:49 --> Security Class Initialized
INFO - 2021-12-10 14:33:50 --> CRSF cookie sent
DEBUG - 2021-12-10 14:33:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:33:50 --> Input Class Initialized
INFO - 2021-12-10 14:33:50 --> Language Class Initialized
INFO - 2021-12-10 14:33:50 --> Loader Class Initialized
INFO - 2021-12-10 14:33:50 --> Helper loaded: url_helper
INFO - 2021-12-10 14:33:50 --> Helper loaded: form_helper
INFO - 2021-12-10 14:33:50 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:33:50 --> Helper loaded: language_helper
INFO - 2021-12-10 14:33:50 --> Helper loaded: file_helper
INFO - 2021-12-10 14:33:50 --> Helper loaded: date_helper
INFO - 2021-12-10 14:33:50 --> Database Driver Class Initialized
INFO - 2021-12-10 14:33:50 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:33:50 --> Parser Class Initialized
INFO - 2021-12-10 14:33:50 --> Model Class Initialized
INFO - 2021-12-10 14:33:50 --> Model Class Initialized
INFO - 2021-12-10 14:33:50 --> Controller Class Initialized
INFO - 2021-12-10 14:33:50 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:33:50 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:33:50 --> Could not find the language line "today"
INFO - 2021-12-10 14:33:50 --> Model Class Initialized
INFO - 2021-12-10 14:33:50 --> Helper loaded: text_helper
INFO - 2021-12-10 14:33:50 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:33:50 --> Form Validation Class Initialized
INFO - 2021-12-10 14:33:50 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 14:33:50 --> Final output sent to browser
DEBUG - 2021-12-10 14:33:50 --> Total execution time: 0.5915
INFO - 2021-12-10 14:33:59 --> Config Class Initialized
INFO - 2021-12-10 14:33:59 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:33:59 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:33:59 --> Utf8 Class Initialized
INFO - 2021-12-10 14:33:59 --> URI Class Initialized
INFO - 2021-12-10 14:33:59 --> Router Class Initialized
INFO - 2021-12-10 14:33:59 --> Output Class Initialized
INFO - 2021-12-10 14:33:59 --> Security Class Initialized
INFO - 2021-12-10 14:33:59 --> CRSF cookie sent
DEBUG - 2021-12-10 14:33:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:33:59 --> Input Class Initialized
INFO - 2021-12-10 14:33:59 --> Language Class Initialized
INFO - 2021-12-10 14:33:59 --> Loader Class Initialized
INFO - 2021-12-10 14:33:59 --> Helper loaded: url_helper
INFO - 2021-12-10 14:33:59 --> Helper loaded: form_helper
INFO - 2021-12-10 14:33:59 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:33:59 --> Helper loaded: language_helper
INFO - 2021-12-10 14:33:59 --> Helper loaded: file_helper
INFO - 2021-12-10 14:33:59 --> Helper loaded: date_helper
INFO - 2021-12-10 14:33:59 --> Database Driver Class Initialized
INFO - 2021-12-10 14:33:59 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:33:59 --> Parser Class Initialized
INFO - 2021-12-10 14:33:59 --> Model Class Initialized
INFO - 2021-12-10 14:33:59 --> Model Class Initialized
INFO - 2021-12-10 14:33:59 --> Controller Class Initialized
INFO - 2021-12-10 14:33:59 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:33:59 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:33:59 --> Could not find the language line "today"
INFO - 2021-12-10 14:33:59 --> Model Class Initialized
INFO - 2021-12-10 14:33:59 --> Helper loaded: text_helper
INFO - 2021-12-10 14:33:59 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:33:59 --> Form Validation Class Initialized
INFO - 2021-12-10 14:33:59 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 14:33:59 --> Final output sent to browser
DEBUG - 2021-12-10 14:33:59 --> Total execution time: 0.3772
INFO - 2021-12-10 14:34:00 --> Config Class Initialized
INFO - 2021-12-10 14:34:00 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:34:00 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:34:00 --> Utf8 Class Initialized
INFO - 2021-12-10 14:34:00 --> URI Class Initialized
DEBUG - 2021-12-10 14:34:00 --> No URI present. Default controller set.
INFO - 2021-12-10 14:34:01 --> Router Class Initialized
INFO - 2021-12-10 14:34:01 --> Output Class Initialized
INFO - 2021-12-10 14:34:01 --> Security Class Initialized
INFO - 2021-12-10 14:34:01 --> CRSF cookie sent
DEBUG - 2021-12-10 14:34:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:34:01 --> Input Class Initialized
INFO - 2021-12-10 14:34:01 --> Language Class Initialized
INFO - 2021-12-10 14:34:01 --> Loader Class Initialized
INFO - 2021-12-10 14:34:01 --> Helper loaded: url_helper
INFO - 2021-12-10 14:34:01 --> Helper loaded: form_helper
INFO - 2021-12-10 14:34:01 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:34:01 --> Helper loaded: language_helper
INFO - 2021-12-10 14:34:01 --> Helper loaded: file_helper
INFO - 2021-12-10 14:34:01 --> Helper loaded: date_helper
INFO - 2021-12-10 14:34:01 --> Database Driver Class Initialized
INFO - 2021-12-10 14:34:01 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:34:01 --> Parser Class Initialized
INFO - 2021-12-10 14:34:01 --> Model Class Initialized
INFO - 2021-12-10 14:34:01 --> Model Class Initialized
INFO - 2021-12-10 14:34:01 --> Controller Class Initialized
INFO - 2021-12-10 14:34:01 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:34:01 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:34:01 --> Could not find the language line "today"
INFO - 2021-12-10 14:34:01 --> Form Validation Class Initialized
INFO - 2021-12-10 14:34:01 --> Model Class Initialized
ERROR - 2021-12-10 14:34:01 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 14:34:01 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 14:34:01 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 14:34:01 --> Could not find the language line "backups"
INFO - 2021-12-10 14:34:01 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 14:34:01 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/dashboard.php
ERROR - 2021-12-10 14:34:01 --> Could not find the language line "ordered"
ERROR - 2021-12-10 14:34:01 --> Could not find the language line "due"
ERROR - 2021-12-10 14:34:02 --> Could not find the language line "transferring"
INFO - 2021-12-10 14:34:02 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 14:34:02 --> Final output sent to browser
DEBUG - 2021-12-10 14:34:02 --> Total execution time: 1.7575
INFO - 2021-12-10 14:34:06 --> Config Class Initialized
INFO - 2021-12-10 14:34:06 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:34:06 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:34:06 --> Utf8 Class Initialized
INFO - 2021-12-10 14:34:07 --> URI Class Initialized
INFO - 2021-12-10 14:34:07 --> Router Class Initialized
INFO - 2021-12-10 14:34:07 --> Output Class Initialized
INFO - 2021-12-10 14:34:07 --> Security Class Initialized
INFO - 2021-12-10 14:34:07 --> CRSF cookie sent
DEBUG - 2021-12-10 14:34:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:34:07 --> Input Class Initialized
INFO - 2021-12-10 14:34:07 --> Language Class Initialized
INFO - 2021-12-10 14:34:07 --> Loader Class Initialized
INFO - 2021-12-10 14:34:07 --> Helper loaded: url_helper
INFO - 2021-12-10 14:34:07 --> Helper loaded: form_helper
INFO - 2021-12-10 14:34:07 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:34:07 --> Helper loaded: language_helper
INFO - 2021-12-10 14:34:07 --> Helper loaded: file_helper
INFO - 2021-12-10 14:34:07 --> Helper loaded: date_helper
INFO - 2021-12-10 14:34:07 --> Database Driver Class Initialized
INFO - 2021-12-10 14:34:08 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:34:08 --> Parser Class Initialized
INFO - 2021-12-10 14:34:08 --> Model Class Initialized
INFO - 2021-12-10 14:34:08 --> Model Class Initialized
INFO - 2021-12-10 14:34:08 --> Controller Class Initialized
INFO - 2021-12-10 14:34:08 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:34:08 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:34:08 --> Could not find the language line "today"
INFO - 2021-12-10 14:34:08 --> Model Class Initialized
INFO - 2021-12-10 14:34:08 --> Helper loaded: text_helper
INFO - 2021-12-10 14:34:08 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:34:08 --> Form Validation Class Initialized
INFO - 2021-12-10 14:34:09 --> Config Class Initialized
INFO - 2021-12-10 14:34:09 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:34:09 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:34:09 --> Utf8 Class Initialized
INFO - 2021-12-10 14:34:09 --> URI Class Initialized
INFO - 2021-12-10 14:34:09 --> Router Class Initialized
INFO - 2021-12-10 14:34:09 --> Output Class Initialized
INFO - 2021-12-10 14:34:09 --> Security Class Initialized
INFO - 2021-12-10 14:34:09 --> CRSF cookie sent
DEBUG - 2021-12-10 14:34:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:34:09 --> Input Class Initialized
INFO - 2021-12-10 14:34:09 --> Language Class Initialized
INFO - 2021-12-10 14:34:09 --> Loader Class Initialized
INFO - 2021-12-10 14:34:09 --> Helper loaded: url_helper
INFO - 2021-12-10 14:34:09 --> Helper loaded: form_helper
INFO - 2021-12-10 14:34:09 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:34:09 --> Helper loaded: language_helper
INFO - 2021-12-10 14:34:09 --> Helper loaded: file_helper
INFO - 2021-12-10 14:34:09 --> Helper loaded: date_helper
INFO - 2021-12-10 14:34:10 --> Database Driver Class Initialized
INFO - 2021-12-10 14:34:10 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:34:11 --> Parser Class Initialized
INFO - 2021-12-10 14:34:11 --> Model Class Initialized
INFO - 2021-12-10 14:34:11 --> Model Class Initialized
INFO - 2021-12-10 14:34:11 --> Controller Class Initialized
INFO - 2021-12-10 14:34:11 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:34:11 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:34:11 --> Could not find the language line "today"
INFO - 2021-12-10 14:34:11 --> Model Class Initialized
INFO - 2021-12-10 14:34:11 --> Helper loaded: text_helper
INFO - 2021-12-10 14:34:11 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:34:11 --> Form Validation Class Initialized
ERROR - 2021-12-10 14:34:11 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 14:34:11 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 14:34:11 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 14:34:11 --> Could not find the language line "backups"
INFO - 2021-12-10 14:34:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 14:34:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 14:34:11 --> Could not find the language line "ordered"
ERROR - 2021-12-10 14:34:11 --> Could not find the language line "due"
ERROR - 2021-12-10 14:34:11 --> Could not find the language line "transferring"
INFO - 2021-12-10 14:34:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 14:34:11 --> Final output sent to browser
DEBUG - 2021-12-10 14:34:11 --> Total execution time: 2.4585
INFO - 2021-12-10 14:34:19 --> Config Class Initialized
INFO - 2021-12-10 14:34:19 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:34:19 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:34:19 --> Utf8 Class Initialized
INFO - 2021-12-10 14:34:19 --> URI Class Initialized
INFO - 2021-12-10 14:34:19 --> Router Class Initialized
INFO - 2021-12-10 14:34:19 --> Output Class Initialized
INFO - 2021-12-10 14:34:19 --> Security Class Initialized
INFO - 2021-12-10 14:34:19 --> CRSF cookie sent
INFO - 2021-12-10 14:34:19 --> CSRF token verified
DEBUG - 2021-12-10 14:34:19 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:34:19 --> Input Class Initialized
INFO - 2021-12-10 14:34:19 --> Language Class Initialized
INFO - 2021-12-10 14:34:20 --> Loader Class Initialized
INFO - 2021-12-10 14:34:20 --> Helper loaded: url_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: form_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: language_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: file_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: date_helper
INFO - 2021-12-10 14:34:20 --> Database Driver Class Initialized
INFO - 2021-12-10 14:34:20 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:34:20 --> Parser Class Initialized
INFO - 2021-12-10 14:34:20 --> Model Class Initialized
INFO - 2021-12-10 14:34:20 --> Model Class Initialized
INFO - 2021-12-10 14:34:20 --> Controller Class Initialized
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:34:20 --> Could not find the language line "today"
INFO - 2021-12-10 14:34:20 --> Model Class Initialized
INFO - 2021-12-10 14:34:20 --> Helper loaded: text_helper
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:34:20 --> Form Validation Class Initialized
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:34:20 --> Config Class Initialized
INFO - 2021-12-10 14:34:20 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:34:20 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:34:20 --> Utf8 Class Initialized
INFO - 2021-12-10 14:34:20 --> URI Class Initialized
INFO - 2021-12-10 14:34:20 --> Router Class Initialized
INFO - 2021-12-10 14:34:20 --> Output Class Initialized
INFO - 2021-12-10 14:34:20 --> Security Class Initialized
INFO - 2021-12-10 14:34:20 --> CRSF cookie sent
DEBUG - 2021-12-10 14:34:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:34:20 --> Input Class Initialized
INFO - 2021-12-10 14:34:20 --> Language Class Initialized
INFO - 2021-12-10 14:34:20 --> Loader Class Initialized
INFO - 2021-12-10 14:34:20 --> Helper loaded: url_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: form_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: language_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: file_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: date_helper
INFO - 2021-12-10 14:34:20 --> Database Driver Class Initialized
INFO - 2021-12-10 14:34:20 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:34:20 --> Parser Class Initialized
INFO - 2021-12-10 14:34:20 --> Model Class Initialized
INFO - 2021-12-10 14:34:20 --> Model Class Initialized
INFO - 2021-12-10 14:34:20 --> Controller Class Initialized
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:34:20 --> Could not find the language line "today"
INFO - 2021-12-10 14:34:20 --> Model Class Initialized
INFO - 2021-12-10 14:34:20 --> Helper loaded: text_helper
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:34:20 --> Form Validation Class Initialized
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 14:34:20 --> Pagination Class Initialized
ERROR - 2021-12-10 14:34:20 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 14:34:20 --> Could not find the language line "order"
ERROR - 2021-12-10 14:34:20 --> Could not find the language line "bill"
INFO - 2021-12-10 14:34:20 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 14:34:20 --> Final output sent to browser
DEBUG - 2021-12-10 14:34:20 --> Total execution time: 0.1702
INFO - 2021-12-10 14:34:20 --> Config Class Initialized
INFO - 2021-12-10 14:34:20 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:34:20 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:34:20 --> Utf8 Class Initialized
INFO - 2021-12-10 14:34:20 --> URI Class Initialized
INFO - 2021-12-10 14:34:20 --> Router Class Initialized
INFO - 2021-12-10 14:34:20 --> Output Class Initialized
INFO - 2021-12-10 14:34:20 --> Security Class Initialized
INFO - 2021-12-10 14:34:20 --> CRSF cookie sent
DEBUG - 2021-12-10 14:34:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:34:20 --> Input Class Initialized
INFO - 2021-12-10 14:34:20 --> Language Class Initialized
INFO - 2021-12-10 14:34:20 --> Loader Class Initialized
INFO - 2021-12-10 14:34:20 --> Helper loaded: url_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: form_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: language_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: file_helper
INFO - 2021-12-10 14:34:20 --> Helper loaded: date_helper
INFO - 2021-12-10 14:34:20 --> Database Driver Class Initialized
INFO - 2021-12-10 14:34:20 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:34:20 --> Parser Class Initialized
INFO - 2021-12-10 14:34:20 --> Model Class Initialized
INFO - 2021-12-10 14:34:20 --> Model Class Initialized
INFO - 2021-12-10 14:34:20 --> Controller Class Initialized
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:34:20 --> Could not find the language line "today"
INFO - 2021-12-10 14:34:20 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 14:34:20 --> Form Validation Class Initialized
INFO - 2021-12-10 14:34:20 --> Model Class Initialized
INFO - 2021-12-10 14:34:20 --> Final output sent to browser
DEBUG - 2021-12-10 14:34:20 --> Total execution time: 0.1908
INFO - 2021-12-10 14:34:23 --> Config Class Initialized
INFO - 2021-12-10 14:34:23 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:34:23 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:34:23 --> Utf8 Class Initialized
INFO - 2021-12-10 14:34:23 --> URI Class Initialized
INFO - 2021-12-10 14:34:23 --> Router Class Initialized
INFO - 2021-12-10 14:34:23 --> Output Class Initialized
INFO - 2021-12-10 14:34:23 --> Security Class Initialized
INFO - 2021-12-10 14:34:23 --> CRSF cookie sent
DEBUG - 2021-12-10 14:34:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:34:23 --> Input Class Initialized
INFO - 2021-12-10 14:34:23 --> Language Class Initialized
INFO - 2021-12-10 14:34:23 --> Loader Class Initialized
INFO - 2021-12-10 14:34:23 --> Helper loaded: url_helper
INFO - 2021-12-10 14:34:23 --> Helper loaded: form_helper
INFO - 2021-12-10 14:34:23 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:34:23 --> Helper loaded: language_helper
INFO - 2021-12-10 14:34:23 --> Helper loaded: file_helper
INFO - 2021-12-10 14:34:23 --> Helper loaded: date_helper
INFO - 2021-12-10 14:34:23 --> Database Driver Class Initialized
INFO - 2021-12-10 14:34:23 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:34:23 --> Parser Class Initialized
INFO - 2021-12-10 14:34:23 --> Model Class Initialized
INFO - 2021-12-10 14:34:23 --> Model Class Initialized
INFO - 2021-12-10 14:34:23 --> Controller Class Initialized
INFO - 2021-12-10 14:34:23 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:34:23 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:34:23 --> Could not find the language line "today"
INFO - 2021-12-10 14:34:23 --> Model Class Initialized
INFO - 2021-12-10 14:34:23 --> Helper loaded: text_helper
INFO - 2021-12-10 14:34:23 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:34:23 --> Form Validation Class Initialized
INFO - 2021-12-10 14:34:23 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 14:34:23 --> Final output sent to browser
DEBUG - 2021-12-10 14:34:23 --> Total execution time: 0.2604
INFO - 2021-12-10 14:34:26 --> Config Class Initialized
INFO - 2021-12-10 14:34:26 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:34:26 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:34:26 --> Utf8 Class Initialized
INFO - 2021-12-10 14:34:26 --> URI Class Initialized
INFO - 2021-12-10 14:34:26 --> Router Class Initialized
INFO - 2021-12-10 14:34:26 --> Output Class Initialized
INFO - 2021-12-10 14:34:26 --> Security Class Initialized
INFO - 2021-12-10 14:34:26 --> CRSF cookie sent
INFO - 2021-12-10 14:34:26 --> CSRF token verified
DEBUG - 2021-12-10 14:34:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:34:26 --> Input Class Initialized
INFO - 2021-12-10 14:34:26 --> Language Class Initialized
INFO - 2021-12-10 14:34:26 --> Loader Class Initialized
INFO - 2021-12-10 14:34:26 --> Helper loaded: url_helper
INFO - 2021-12-10 14:34:26 --> Helper loaded: form_helper
INFO - 2021-12-10 14:34:26 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:34:26 --> Helper loaded: language_helper
INFO - 2021-12-10 14:34:26 --> Helper loaded: file_helper
INFO - 2021-12-10 14:34:26 --> Helper loaded: date_helper
INFO - 2021-12-10 14:34:26 --> Database Driver Class Initialized
INFO - 2021-12-10 14:34:26 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:34:26 --> Parser Class Initialized
INFO - 2021-12-10 14:34:26 --> Model Class Initialized
INFO - 2021-12-10 14:34:26 --> Model Class Initialized
INFO - 2021-12-10 14:34:26 --> Controller Class Initialized
INFO - 2021-12-10 14:34:26 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:34:26 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:34:26 --> Could not find the language line "today"
INFO - 2021-12-10 14:34:26 --> Model Class Initialized
INFO - 2021-12-10 14:34:26 --> Helper loaded: text_helper
INFO - 2021-12-10 14:34:26 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:34:26 --> Form Validation Class Initialized
INFO - 2021-12-10 14:34:26 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:34:26 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:34:26 --> Final output sent to browser
DEBUG - 2021-12-10 14:34:26 --> Total execution time: 0.2457
INFO - 2021-12-10 14:37:56 --> Config Class Initialized
INFO - 2021-12-10 14:37:56 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:37:56 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:37:56 --> Utf8 Class Initialized
INFO - 2021-12-10 14:37:56 --> URI Class Initialized
INFO - 2021-12-10 14:37:56 --> Router Class Initialized
INFO - 2021-12-10 14:37:56 --> Output Class Initialized
INFO - 2021-12-10 14:37:56 --> Security Class Initialized
INFO - 2021-12-10 14:37:56 --> CRSF cookie sent
INFO - 2021-12-10 14:37:56 --> CSRF token verified
DEBUG - 2021-12-10 14:37:56 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:37:56 --> Input Class Initialized
INFO - 2021-12-10 14:37:56 --> Language Class Initialized
INFO - 2021-12-10 14:37:56 --> Loader Class Initialized
INFO - 2021-12-10 14:37:56 --> Helper loaded: url_helper
INFO - 2021-12-10 14:37:56 --> Helper loaded: form_helper
INFO - 2021-12-10 14:37:56 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:37:56 --> Helper loaded: language_helper
INFO - 2021-12-10 14:37:56 --> Helper loaded: file_helper
INFO - 2021-12-10 14:37:56 --> Helper loaded: date_helper
INFO - 2021-12-10 14:37:56 --> Database Driver Class Initialized
INFO - 2021-12-10 14:37:56 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:37:56 --> Parser Class Initialized
INFO - 2021-12-10 14:37:56 --> Model Class Initialized
INFO - 2021-12-10 14:37:56 --> Model Class Initialized
INFO - 2021-12-10 14:37:56 --> Controller Class Initialized
INFO - 2021-12-10 14:37:56 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:37:56 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:37:56 --> Could not find the language line "today"
INFO - 2021-12-10 14:37:56 --> Model Class Initialized
INFO - 2021-12-10 14:37:56 --> Helper loaded: text_helper
INFO - 2021-12-10 14:37:56 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:37:56 --> Form Validation Class Initialized
INFO - 2021-12-10 14:37:56 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:37:56 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:37:56 --> Final output sent to browser
DEBUG - 2021-12-10 14:37:56 --> Total execution time: 0.2779
INFO - 2021-12-10 14:38:20 --> Config Class Initialized
INFO - 2021-12-10 14:38:20 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:38:20 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:38:20 --> Utf8 Class Initialized
INFO - 2021-12-10 14:38:20 --> URI Class Initialized
INFO - 2021-12-10 14:38:20 --> Router Class Initialized
INFO - 2021-12-10 14:38:20 --> Output Class Initialized
INFO - 2021-12-10 14:38:20 --> Security Class Initialized
INFO - 2021-12-10 14:38:20 --> CRSF cookie sent
INFO - 2021-12-10 14:38:20 --> CSRF token verified
DEBUG - 2021-12-10 14:38:20 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:38:20 --> Input Class Initialized
INFO - 2021-12-10 14:38:20 --> Language Class Initialized
INFO - 2021-12-10 14:38:20 --> Loader Class Initialized
INFO - 2021-12-10 14:38:20 --> Helper loaded: url_helper
INFO - 2021-12-10 14:38:20 --> Helper loaded: form_helper
INFO - 2021-12-10 14:38:20 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:38:20 --> Helper loaded: language_helper
INFO - 2021-12-10 14:38:20 --> Helper loaded: file_helper
INFO - 2021-12-10 14:38:20 --> Helper loaded: date_helper
INFO - 2021-12-10 14:38:20 --> Database Driver Class Initialized
INFO - 2021-12-10 14:38:20 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:38:20 --> Parser Class Initialized
INFO - 2021-12-10 14:38:20 --> Model Class Initialized
INFO - 2021-12-10 14:38:20 --> Model Class Initialized
INFO - 2021-12-10 14:38:20 --> Controller Class Initialized
INFO - 2021-12-10 14:38:20 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:38:20 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:38:20 --> Could not find the language line "today"
INFO - 2021-12-10 14:38:20 --> Model Class Initialized
INFO - 2021-12-10 14:38:20 --> Helper loaded: text_helper
INFO - 2021-12-10 14:38:20 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:38:20 --> Form Validation Class Initialized
INFO - 2021-12-10 14:38:20 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:38:20 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:38:20 --> Final output sent to browser
DEBUG - 2021-12-10 14:38:20 --> Total execution time: 0.2604
INFO - 2021-12-10 14:38:50 --> Config Class Initialized
INFO - 2021-12-10 14:38:50 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:38:50 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:38:50 --> Utf8 Class Initialized
INFO - 2021-12-10 14:38:50 --> URI Class Initialized
INFO - 2021-12-10 14:38:50 --> Router Class Initialized
INFO - 2021-12-10 14:38:51 --> Output Class Initialized
INFO - 2021-12-10 14:38:51 --> Security Class Initialized
INFO - 2021-12-10 14:38:51 --> CRSF cookie sent
INFO - 2021-12-10 14:38:51 --> CSRF token verified
DEBUG - 2021-12-10 14:38:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:38:51 --> Input Class Initialized
INFO - 2021-12-10 14:38:51 --> Language Class Initialized
INFO - 2021-12-10 14:38:51 --> Loader Class Initialized
INFO - 2021-12-10 14:38:51 --> Helper loaded: url_helper
INFO - 2021-12-10 14:38:51 --> Helper loaded: form_helper
INFO - 2021-12-10 14:38:51 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:38:51 --> Helper loaded: language_helper
INFO - 2021-12-10 14:38:51 --> Helper loaded: file_helper
INFO - 2021-12-10 14:38:51 --> Helper loaded: date_helper
INFO - 2021-12-10 14:38:51 --> Database Driver Class Initialized
INFO - 2021-12-10 14:38:51 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:38:51 --> Parser Class Initialized
INFO - 2021-12-10 14:38:51 --> Model Class Initialized
INFO - 2021-12-10 14:38:51 --> Model Class Initialized
INFO - 2021-12-10 14:38:51 --> Controller Class Initialized
INFO - 2021-12-10 14:38:51 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:38:51 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:38:51 --> Could not find the language line "today"
INFO - 2021-12-10 14:38:51 --> Model Class Initialized
INFO - 2021-12-10 14:38:51 --> Helper loaded: text_helper
INFO - 2021-12-10 14:38:51 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:38:51 --> Form Validation Class Initialized
INFO - 2021-12-10 14:38:51 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:38:51 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:38:51 --> Final output sent to browser
DEBUG - 2021-12-10 14:38:51 --> Total execution time: 0.2640
INFO - 2021-12-10 14:39:08 --> Config Class Initialized
INFO - 2021-12-10 14:39:08 --> Hooks Class Initialized
DEBUG - 2021-12-10 14:39:08 --> UTF-8 Support Enabled
INFO - 2021-12-10 14:39:08 --> Utf8 Class Initialized
INFO - 2021-12-10 14:39:08 --> URI Class Initialized
INFO - 2021-12-10 14:39:08 --> Router Class Initialized
INFO - 2021-12-10 14:39:08 --> Output Class Initialized
INFO - 2021-12-10 14:39:08 --> Security Class Initialized
INFO - 2021-12-10 14:39:08 --> CRSF cookie sent
INFO - 2021-12-10 14:39:08 --> CSRF token verified
DEBUG - 2021-12-10 14:39:08 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 14:39:08 --> Input Class Initialized
INFO - 2021-12-10 14:39:08 --> Language Class Initialized
INFO - 2021-12-10 14:39:08 --> Loader Class Initialized
INFO - 2021-12-10 14:39:08 --> Helper loaded: url_helper
INFO - 2021-12-10 14:39:08 --> Helper loaded: form_helper
INFO - 2021-12-10 14:39:08 --> Helper loaded: cookie_helper
INFO - 2021-12-10 14:39:08 --> Helper loaded: language_helper
INFO - 2021-12-10 14:39:08 --> Helper loaded: file_helper
INFO - 2021-12-10 14:39:08 --> Helper loaded: date_helper
INFO - 2021-12-10 14:39:08 --> Database Driver Class Initialized
INFO - 2021-12-10 14:39:08 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 14:39:08 --> Parser Class Initialized
INFO - 2021-12-10 14:39:08 --> Model Class Initialized
INFO - 2021-12-10 14:39:08 --> Model Class Initialized
INFO - 2021-12-10 14:39:08 --> Controller Class Initialized
INFO - 2021-12-10 14:39:08 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 14:39:08 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 14:39:08 --> Could not find the language line "today"
INFO - 2021-12-10 14:39:08 --> Model Class Initialized
INFO - 2021-12-10 14:39:08 --> Helper loaded: text_helper
INFO - 2021-12-10 14:39:08 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 14:39:08 --> Form Validation Class Initialized
INFO - 2021-12-10 14:39:08 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 14:39:08 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 14:39:08 --> Final output sent to browser
DEBUG - 2021-12-10 14:39:08 --> Total execution time: 0.2305
INFO - 2021-12-10 16:43:38 --> Config Class Initialized
INFO - 2021-12-10 16:43:38 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:43:38 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:43:38 --> Utf8 Class Initialized
INFO - 2021-12-10 16:43:38 --> URI Class Initialized
INFO - 2021-12-10 16:43:38 --> Router Class Initialized
INFO - 2021-12-10 16:43:38 --> Output Class Initialized
INFO - 2021-12-10 16:43:38 --> Security Class Initialized
INFO - 2021-12-10 16:43:45 --> Config Class Initialized
INFO - 2021-12-10 16:43:45 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:43:45 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:43:45 --> Utf8 Class Initialized
INFO - 2021-12-10 16:43:45 --> URI Class Initialized
INFO - 2021-12-10 16:43:45 --> Router Class Initialized
INFO - 2021-12-10 16:43:45 --> Output Class Initialized
INFO - 2021-12-10 16:43:45 --> Security Class Initialized
INFO - 2021-12-10 16:43:45 --> CRSF cookie sent
DEBUG - 2021-12-10 16:43:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 16:43:45 --> Input Class Initialized
INFO - 2021-12-10 16:43:45 --> Language Class Initialized
INFO - 2021-12-10 16:43:45 --> Loader Class Initialized
INFO - 2021-12-10 16:43:45 --> Helper loaded: url_helper
INFO - 2021-12-10 16:43:45 --> Helper loaded: form_helper
INFO - 2021-12-10 16:43:45 --> Helper loaded: cookie_helper
INFO - 2021-12-10 16:43:45 --> Helper loaded: language_helper
INFO - 2021-12-10 16:43:45 --> Helper loaded: file_helper
INFO - 2021-12-10 16:43:45 --> Helper loaded: date_helper
INFO - 2021-12-10 16:43:45 --> Database Driver Class Initialized
INFO - 2021-12-10 16:43:45 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 16:43:45 --> Parser Class Initialized
INFO - 2021-12-10 16:43:45 --> Model Class Initialized
INFO - 2021-12-10 16:43:45 --> Model Class Initialized
INFO - 2021-12-10 16:43:45 --> Controller Class Initialized
INFO - 2021-12-10 16:43:45 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 16:43:45 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 16:43:45 --> Could not find the language line "today"
INFO - 2021-12-10 16:43:45 --> Model Class Initialized
INFO - 2021-12-10 16:43:45 --> Helper loaded: text_helper
INFO - 2021-12-10 16:43:45 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 16:43:45 --> Form Validation Class Initialized
INFO - 2021-12-10 16:43:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 16:43:45 --> Final output sent to browser
DEBUG - 2021-12-10 16:43:45 --> Total execution time: 0.1638
INFO - 2021-12-10 16:43:45 --> Config Class Initialized
INFO - 2021-12-10 16:43:45 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:43:45 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:43:45 --> Utf8 Class Initialized
INFO - 2021-12-10 16:43:45 --> URI Class Initialized
DEBUG - 2021-12-10 16:43:45 --> No URI present. Default controller set.
INFO - 2021-12-10 16:43:45 --> Router Class Initialized
INFO - 2021-12-10 16:43:45 --> Output Class Initialized
INFO - 2021-12-10 16:43:45 --> Security Class Initialized
INFO - 2021-12-10 16:43:45 --> CRSF cookie sent
DEBUG - 2021-12-10 16:43:45 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 16:43:45 --> Input Class Initialized
INFO - 2021-12-10 16:43:45 --> Language Class Initialized
INFO - 2021-12-10 16:43:45 --> Loader Class Initialized
INFO - 2021-12-10 16:43:45 --> Helper loaded: url_helper
INFO - 2021-12-10 16:43:45 --> Helper loaded: form_helper
INFO - 2021-12-10 16:43:45 --> Helper loaded: cookie_helper
INFO - 2021-12-10 16:43:45 --> Helper loaded: language_helper
INFO - 2021-12-10 16:43:45 --> Helper loaded: file_helper
INFO - 2021-12-10 16:43:45 --> Helper loaded: date_helper
INFO - 2021-12-10 16:43:45 --> Database Driver Class Initialized
INFO - 2021-12-10 16:43:45 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 16:43:45 --> Parser Class Initialized
INFO - 2021-12-10 16:43:45 --> Model Class Initialized
INFO - 2021-12-10 16:43:45 --> Model Class Initialized
INFO - 2021-12-10 16:43:45 --> Controller Class Initialized
INFO - 2021-12-10 16:43:45 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 16:43:45 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 16:43:45 --> Could not find the language line "today"
INFO - 2021-12-10 16:43:45 --> Form Validation Class Initialized
INFO - 2021-12-10 16:43:45 --> Model Class Initialized
ERROR - 2021-12-10 16:43:45 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 16:43:45 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 16:43:45 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 16:43:45 --> Could not find the language line "backups"
INFO - 2021-12-10 16:43:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 16:43:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/dashboard.php
ERROR - 2021-12-10 16:43:45 --> Could not find the language line "ordered"
ERROR - 2021-12-10 16:43:45 --> Could not find the language line "due"
ERROR - 2021-12-10 16:43:45 --> Could not find the language line "transferring"
INFO - 2021-12-10 16:43:45 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 16:43:45 --> Final output sent to browser
DEBUG - 2021-12-10 16:43:45 --> Total execution time: 0.3722
INFO - 2021-12-10 16:43:48 --> Config Class Initialized
INFO - 2021-12-10 16:43:48 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:43:48 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:43:48 --> Utf8 Class Initialized
INFO - 2021-12-10 16:43:48 --> URI Class Initialized
INFO - 2021-12-10 16:43:48 --> Router Class Initialized
INFO - 2021-12-10 16:43:48 --> Output Class Initialized
INFO - 2021-12-10 16:43:48 --> Security Class Initialized
INFO - 2021-12-10 16:43:48 --> CRSF cookie sent
DEBUG - 2021-12-10 16:43:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 16:43:48 --> Input Class Initialized
INFO - 2021-12-10 16:43:48 --> Language Class Initialized
INFO - 2021-12-10 16:43:48 --> Loader Class Initialized
INFO - 2021-12-10 16:43:48 --> Helper loaded: url_helper
INFO - 2021-12-10 16:43:48 --> Helper loaded: form_helper
INFO - 2021-12-10 16:43:48 --> Helper loaded: cookie_helper
INFO - 2021-12-10 16:43:48 --> Helper loaded: language_helper
INFO - 2021-12-10 16:43:48 --> Helper loaded: file_helper
INFO - 2021-12-10 16:43:48 --> Helper loaded: date_helper
INFO - 2021-12-10 16:43:48 --> Database Driver Class Initialized
INFO - 2021-12-10 16:43:48 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 16:43:48 --> Parser Class Initialized
INFO - 2021-12-10 16:43:48 --> Model Class Initialized
INFO - 2021-12-10 16:43:48 --> Model Class Initialized
INFO - 2021-12-10 16:43:48 --> Controller Class Initialized
INFO - 2021-12-10 16:43:48 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 16:43:48 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 16:43:48 --> Could not find the language line "today"
INFO - 2021-12-10 16:43:48 --> Model Class Initialized
INFO - 2021-12-10 16:43:48 --> Helper loaded: text_helper
INFO - 2021-12-10 16:43:48 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 16:43:48 --> Form Validation Class Initialized
INFO - 2021-12-10 16:43:48 --> Config Class Initialized
INFO - 2021-12-10 16:43:48 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:43:48 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:43:48 --> Utf8 Class Initialized
INFO - 2021-12-10 16:43:48 --> URI Class Initialized
INFO - 2021-12-10 16:43:48 --> Router Class Initialized
INFO - 2021-12-10 16:43:48 --> Output Class Initialized
INFO - 2021-12-10 16:43:48 --> Security Class Initialized
INFO - 2021-12-10 16:43:48 --> CRSF cookie sent
DEBUG - 2021-12-10 16:43:48 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 16:43:48 --> Input Class Initialized
INFO - 2021-12-10 16:43:48 --> Language Class Initialized
INFO - 2021-12-10 16:43:48 --> Loader Class Initialized
INFO - 2021-12-10 16:43:48 --> Helper loaded: url_helper
INFO - 2021-12-10 16:43:48 --> Helper loaded: form_helper
INFO - 2021-12-10 16:43:48 --> Helper loaded: cookie_helper
INFO - 2021-12-10 16:43:48 --> Helper loaded: language_helper
INFO - 2021-12-10 16:43:48 --> Helper loaded: file_helper
INFO - 2021-12-10 16:43:48 --> Helper loaded: date_helper
INFO - 2021-12-10 16:43:48 --> Database Driver Class Initialized
INFO - 2021-12-10 16:43:49 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 16:43:49 --> Parser Class Initialized
INFO - 2021-12-10 16:43:49 --> Model Class Initialized
INFO - 2021-12-10 16:43:49 --> Model Class Initialized
INFO - 2021-12-10 16:43:49 --> Controller Class Initialized
INFO - 2021-12-10 16:43:49 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 16:43:49 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 16:43:49 --> Could not find the language line "today"
INFO - 2021-12-10 16:43:49 --> Model Class Initialized
INFO - 2021-12-10 16:43:49 --> Helper loaded: text_helper
INFO - 2021-12-10 16:43:49 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 16:43:49 --> Form Validation Class Initialized
ERROR - 2021-12-10 16:43:49 --> Could not find the language line "Alerta de cantidad"
ERROR - 2021-12-10 16:43:49 --> Could not find the language line "Alerta de expiracion"
ERROR - 2021-12-10 16:43:49 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 16:43:49 --> Could not find the language line "backups"
INFO - 2021-12-10 16:43:49 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/header.php
INFO - 2021-12-10 16:43:49 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/open_register.php
ERROR - 2021-12-10 16:43:49 --> Could not find the language line "ordered"
ERROR - 2021-12-10 16:43:49 --> Could not find the language line "due"
ERROR - 2021-12-10 16:43:49 --> Could not find the language line "transferring"
INFO - 2021-12-10 16:43:49 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/footer.php
INFO - 2021-12-10 16:43:49 --> Final output sent to browser
DEBUG - 2021-12-10 16:43:49 --> Total execution time: 0.1716
INFO - 2021-12-10 16:43:53 --> Config Class Initialized
INFO - 2021-12-10 16:43:53 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:43:53 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:43:53 --> Utf8 Class Initialized
INFO - 2021-12-10 16:43:53 --> URI Class Initialized
INFO - 2021-12-10 16:43:53 --> Router Class Initialized
INFO - 2021-12-10 16:43:53 --> Output Class Initialized
INFO - 2021-12-10 16:43:53 --> Security Class Initialized
INFO - 2021-12-10 16:43:53 --> CRSF cookie sent
INFO - 2021-12-10 16:43:53 --> CSRF token verified
DEBUG - 2021-12-10 16:43:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 16:43:53 --> Input Class Initialized
INFO - 2021-12-10 16:43:53 --> Language Class Initialized
INFO - 2021-12-10 16:43:53 --> Loader Class Initialized
INFO - 2021-12-10 16:43:53 --> Helper loaded: url_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: form_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: cookie_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: language_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: file_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: date_helper
INFO - 2021-12-10 16:43:53 --> Database Driver Class Initialized
INFO - 2021-12-10 16:43:53 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 16:43:53 --> Parser Class Initialized
INFO - 2021-12-10 16:43:53 --> Model Class Initialized
INFO - 2021-12-10 16:43:53 --> Model Class Initialized
INFO - 2021-12-10 16:43:53 --> Controller Class Initialized
INFO - 2021-12-10 16:43:53 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 16:43:53 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 16:43:53 --> Could not find the language line "today"
INFO - 2021-12-10 16:43:53 --> Model Class Initialized
INFO - 2021-12-10 16:43:53 --> Helper loaded: text_helper
INFO - 2021-12-10 16:43:53 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 16:43:53 --> Form Validation Class Initialized
INFO - 2021-12-10 16:43:53 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 16:43:53 --> Config Class Initialized
INFO - 2021-12-10 16:43:53 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:43:53 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:43:53 --> Utf8 Class Initialized
INFO - 2021-12-10 16:43:53 --> URI Class Initialized
INFO - 2021-12-10 16:43:53 --> Router Class Initialized
INFO - 2021-12-10 16:43:53 --> Output Class Initialized
INFO - 2021-12-10 16:43:53 --> Security Class Initialized
INFO - 2021-12-10 16:43:53 --> CRSF cookie sent
DEBUG - 2021-12-10 16:43:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 16:43:53 --> Input Class Initialized
INFO - 2021-12-10 16:43:53 --> Language Class Initialized
INFO - 2021-12-10 16:43:53 --> Loader Class Initialized
INFO - 2021-12-10 16:43:53 --> Helper loaded: url_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: form_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: cookie_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: language_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: file_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: date_helper
INFO - 2021-12-10 16:43:53 --> Database Driver Class Initialized
INFO - 2021-12-10 16:43:53 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 16:43:53 --> Parser Class Initialized
INFO - 2021-12-10 16:43:53 --> Model Class Initialized
INFO - 2021-12-10 16:43:53 --> Model Class Initialized
INFO - 2021-12-10 16:43:53 --> Controller Class Initialized
INFO - 2021-12-10 16:43:53 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 16:43:53 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 16:43:53 --> Could not find the language line "today"
INFO - 2021-12-10 16:43:53 --> Model Class Initialized
INFO - 2021-12-10 16:43:53 --> Helper loaded: text_helper
INFO - 2021-12-10 16:43:53 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 16:43:53 --> Form Validation Class Initialized
INFO - 2021-12-10 16:43:53 --> Language file loaded: language/spanish/pagination_lang.php
INFO - 2021-12-10 16:43:53 --> Pagination Class Initialized
ERROR - 2021-12-10 16:43:53 --> Could not find the language line "today_profit"
ERROR - 2021-12-10 16:43:53 --> Could not find the language line "order"
ERROR - 2021-12-10 16:43:53 --> Could not find the language line "bill"
INFO - 2021-12-10 16:43:53 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/add.php
INFO - 2021-12-10 16:43:53 --> Final output sent to browser
DEBUG - 2021-12-10 16:43:53 --> Total execution time: 0.1606
INFO - 2021-12-10 16:43:53 --> Config Class Initialized
INFO - 2021-12-10 16:43:53 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:43:53 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:43:53 --> Utf8 Class Initialized
INFO - 2021-12-10 16:43:53 --> URI Class Initialized
INFO - 2021-12-10 16:43:53 --> Router Class Initialized
INFO - 2021-12-10 16:43:53 --> Output Class Initialized
INFO - 2021-12-10 16:43:53 --> Security Class Initialized
INFO - 2021-12-10 16:43:53 --> CRSF cookie sent
DEBUG - 2021-12-10 16:43:53 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 16:43:53 --> Input Class Initialized
INFO - 2021-12-10 16:43:53 --> Language Class Initialized
INFO - 2021-12-10 16:43:53 --> Loader Class Initialized
INFO - 2021-12-10 16:43:53 --> Helper loaded: url_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: form_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: cookie_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: language_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: file_helper
INFO - 2021-12-10 16:43:53 --> Helper loaded: date_helper
INFO - 2021-12-10 16:43:53 --> Database Driver Class Initialized
INFO - 2021-12-10 16:43:54 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 16:43:54 --> Parser Class Initialized
INFO - 2021-12-10 16:43:54 --> Model Class Initialized
INFO - 2021-12-10 16:43:54 --> Model Class Initialized
INFO - 2021-12-10 16:43:54 --> Controller Class Initialized
INFO - 2021-12-10 16:43:54 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 16:43:54 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 16:43:54 --> Could not find the language line "today"
INFO - 2021-12-10 16:43:54 --> Language file loaded: language/spanish/customers_lang.php
INFO - 2021-12-10 16:43:54 --> Form Validation Class Initialized
INFO - 2021-12-10 16:43:54 --> Model Class Initialized
INFO - 2021-12-10 16:43:54 --> Final output sent to browser
DEBUG - 2021-12-10 16:43:54 --> Total execution time: 0.1640
INFO - 2021-12-10 16:50:15 --> Config Class Initialized
INFO - 2021-12-10 16:50:15 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:50:15 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:50:15 --> Utf8 Class Initialized
INFO - 2021-12-10 16:50:15 --> URI Class Initialized
INFO - 2021-12-10 16:50:15 --> Router Class Initialized
INFO - 2021-12-10 16:50:15 --> Output Class Initialized
INFO - 2021-12-10 16:50:15 --> Security Class Initialized
INFO - 2021-12-10 16:50:15 --> CRSF cookie sent
DEBUG - 2021-12-10 16:50:15 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 16:50:15 --> Input Class Initialized
INFO - 2021-12-10 16:50:15 --> Language Class Initialized
INFO - 2021-12-10 16:50:15 --> Loader Class Initialized
INFO - 2021-12-10 16:50:16 --> Helper loaded: url_helper
INFO - 2021-12-10 16:50:16 --> Helper loaded: form_helper
INFO - 2021-12-10 16:50:16 --> Helper loaded: cookie_helper
INFO - 2021-12-10 16:50:16 --> Helper loaded: language_helper
INFO - 2021-12-10 16:50:16 --> Helper loaded: file_helper
INFO - 2021-12-10 16:50:16 --> Helper loaded: date_helper
INFO - 2021-12-10 16:50:16 --> Database Driver Class Initialized
INFO - 2021-12-10 16:50:16 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 16:50:16 --> Parser Class Initialized
INFO - 2021-12-10 16:50:16 --> Model Class Initialized
INFO - 2021-12-10 16:50:16 --> Model Class Initialized
INFO - 2021-12-10 16:50:16 --> Controller Class Initialized
INFO - 2021-12-10 16:50:16 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 16:50:16 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 16:50:16 --> Could not find the language line "today"
INFO - 2021-12-10 16:50:16 --> Model Class Initialized
INFO - 2021-12-10 16:50:16 --> Helper loaded: text_helper
INFO - 2021-12-10 16:50:16 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 16:50:16 --> Form Validation Class Initialized
INFO - 2021-12-10 16:50:16 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/close_register.php
INFO - 2021-12-10 16:50:16 --> Final output sent to browser
DEBUG - 2021-12-10 16:50:16 --> Total execution time: 0.2609
INFO - 2021-12-10 16:58:26 --> Config Class Initialized
INFO - 2021-12-10 16:58:26 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:58:26 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:58:26 --> Utf8 Class Initialized
INFO - 2021-12-10 16:58:26 --> URI Class Initialized
INFO - 2021-12-10 16:58:26 --> Router Class Initialized
INFO - 2021-12-10 16:58:26 --> Output Class Initialized
INFO - 2021-12-10 16:58:26 --> Security Class Initialized
INFO - 2021-12-10 16:58:26 --> CRSF cookie sent
INFO - 2021-12-10 16:58:26 --> CSRF token verified
DEBUG - 2021-12-10 16:58:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 16:58:26 --> Input Class Initialized
INFO - 2021-12-10 16:58:26 --> Language Class Initialized
INFO - 2021-12-10 16:58:26 --> Loader Class Initialized
INFO - 2021-12-10 16:58:26 --> Helper loaded: url_helper
INFO - 2021-12-10 16:58:26 --> Helper loaded: form_helper
INFO - 2021-12-10 16:58:26 --> Helper loaded: cookie_helper
INFO - 2021-12-10 16:58:26 --> Helper loaded: language_helper
INFO - 2021-12-10 16:58:26 --> Helper loaded: file_helper
INFO - 2021-12-10 16:58:26 --> Helper loaded: date_helper
INFO - 2021-12-10 16:58:26 --> Database Driver Class Initialized
INFO - 2021-12-10 16:58:26 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 16:58:26 --> Parser Class Initialized
INFO - 2021-12-10 16:58:26 --> Model Class Initialized
INFO - 2021-12-10 16:58:26 --> Model Class Initialized
INFO - 2021-12-10 16:58:26 --> Controller Class Initialized
INFO - 2021-12-10 16:58:26 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 16:58:26 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 16:58:26 --> Could not find the language line "today"
INFO - 2021-12-10 16:58:26 --> Model Class Initialized
INFO - 2021-12-10 16:58:26 --> Helper loaded: text_helper
INFO - 2021-12-10 16:58:26 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 16:58:26 --> Form Validation Class Initialized
INFO - 2021-12-10 16:58:26 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 16:58:26 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 16:58:26 --> Final output sent to browser
DEBUG - 2021-12-10 16:58:27 --> Total execution time: 0.3465
INFO - 2021-12-10 16:58:59 --> Config Class Initialized
INFO - 2021-12-10 16:58:59 --> Hooks Class Initialized
DEBUG - 2021-12-10 16:58:59 --> UTF-8 Support Enabled
INFO - 2021-12-10 16:58:59 --> Utf8 Class Initialized
INFO - 2021-12-10 16:58:59 --> URI Class Initialized
INFO - 2021-12-10 16:58:59 --> Router Class Initialized
INFO - 2021-12-10 16:58:59 --> Output Class Initialized
INFO - 2021-12-10 16:58:59 --> Security Class Initialized
INFO - 2021-12-10 16:58:59 --> CRSF cookie sent
INFO - 2021-12-10 16:58:59 --> CSRF token verified
DEBUG - 2021-12-10 16:58:59 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 16:58:59 --> Input Class Initialized
INFO - 2021-12-10 16:58:59 --> Language Class Initialized
INFO - 2021-12-10 16:58:59 --> Loader Class Initialized
INFO - 2021-12-10 16:58:59 --> Helper loaded: url_helper
INFO - 2021-12-10 16:58:59 --> Helper loaded: form_helper
INFO - 2021-12-10 16:58:59 --> Helper loaded: cookie_helper
INFO - 2021-12-10 16:58:59 --> Helper loaded: language_helper
INFO - 2021-12-10 16:58:59 --> Helper loaded: file_helper
INFO - 2021-12-10 16:58:59 --> Helper loaded: date_helper
INFO - 2021-12-10 16:58:59 --> Database Driver Class Initialized
INFO - 2021-12-10 16:58:59 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 16:58:59 --> Parser Class Initialized
INFO - 2021-12-10 16:58:59 --> Model Class Initialized
INFO - 2021-12-10 16:58:59 --> Model Class Initialized
INFO - 2021-12-10 16:58:59 --> Controller Class Initialized
INFO - 2021-12-10 16:58:59 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 16:58:59 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 16:58:59 --> Could not find the language line "today"
INFO - 2021-12-10 16:58:59 --> Model Class Initialized
INFO - 2021-12-10 16:58:59 --> Helper loaded: text_helper
INFO - 2021-12-10 16:58:59 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 16:58:59 --> Form Validation Class Initialized
INFO - 2021-12-10 16:58:59 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 16:58:59 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 16:58:59 --> Final output sent to browser
DEBUG - 2021-12-10 16:58:59 --> Total execution time: 0.4721
INFO - 2021-12-10 17:00:11 --> Config Class Initialized
INFO - 2021-12-10 17:00:11 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:00:11 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:00:11 --> Utf8 Class Initialized
INFO - 2021-12-10 17:00:11 --> URI Class Initialized
INFO - 2021-12-10 17:00:11 --> Router Class Initialized
INFO - 2021-12-10 17:00:11 --> Output Class Initialized
INFO - 2021-12-10 17:00:11 --> Security Class Initialized
INFO - 2021-12-10 17:00:11 --> CRSF cookie sent
INFO - 2021-12-10 17:00:11 --> CSRF token verified
DEBUG - 2021-12-10 17:00:11 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:00:11 --> Input Class Initialized
INFO - 2021-12-10 17:00:11 --> Language Class Initialized
INFO - 2021-12-10 17:00:11 --> Loader Class Initialized
INFO - 2021-12-10 17:00:11 --> Helper loaded: url_helper
INFO - 2021-12-10 17:00:11 --> Helper loaded: form_helper
INFO - 2021-12-10 17:00:11 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:00:11 --> Helper loaded: language_helper
INFO - 2021-12-10 17:00:11 --> Helper loaded: file_helper
INFO - 2021-12-10 17:00:11 --> Helper loaded: date_helper
INFO - 2021-12-10 17:00:11 --> Database Driver Class Initialized
INFO - 2021-12-10 17:00:11 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:00:11 --> Parser Class Initialized
INFO - 2021-12-10 17:00:11 --> Model Class Initialized
INFO - 2021-12-10 17:00:11 --> Model Class Initialized
INFO - 2021-12-10 17:00:11 --> Controller Class Initialized
INFO - 2021-12-10 17:00:11 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:00:11 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:00:11 --> Could not find the language line "today"
INFO - 2021-12-10 17:00:11 --> Model Class Initialized
INFO - 2021-12-10 17:00:11 --> Helper loaded: text_helper
INFO - 2021-12-10 17:00:11 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:00:11 --> Form Validation Class Initialized
INFO - 2021-12-10 17:00:11 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:00:11 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:00:11 --> Final output sent to browser
DEBUG - 2021-12-10 17:00:11 --> Total execution time: 0.2554
INFO - 2021-12-10 17:00:37 --> Config Class Initialized
INFO - 2021-12-10 17:00:37 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:00:37 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:00:37 --> Utf8 Class Initialized
INFO - 2021-12-10 17:00:37 --> URI Class Initialized
INFO - 2021-12-10 17:00:37 --> Router Class Initialized
INFO - 2021-12-10 17:00:37 --> Output Class Initialized
INFO - 2021-12-10 17:00:37 --> Security Class Initialized
INFO - 2021-12-10 17:00:37 --> CRSF cookie sent
INFO - 2021-12-10 17:00:37 --> CSRF token verified
DEBUG - 2021-12-10 17:00:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:00:37 --> Input Class Initialized
INFO - 2021-12-10 17:00:37 --> Language Class Initialized
INFO - 2021-12-10 17:00:37 --> Loader Class Initialized
INFO - 2021-12-10 17:00:37 --> Helper loaded: url_helper
INFO - 2021-12-10 17:00:37 --> Helper loaded: form_helper
INFO - 2021-12-10 17:00:37 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:00:37 --> Helper loaded: language_helper
INFO - 2021-12-10 17:00:37 --> Helper loaded: file_helper
INFO - 2021-12-10 17:00:37 --> Helper loaded: date_helper
INFO - 2021-12-10 17:00:37 --> Database Driver Class Initialized
INFO - 2021-12-10 17:00:37 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:00:37 --> Parser Class Initialized
INFO - 2021-12-10 17:00:37 --> Model Class Initialized
INFO - 2021-12-10 17:00:37 --> Model Class Initialized
INFO - 2021-12-10 17:00:37 --> Controller Class Initialized
INFO - 2021-12-10 17:00:37 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:00:37 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:00:37 --> Could not find the language line "today"
INFO - 2021-12-10 17:00:37 --> Model Class Initialized
INFO - 2021-12-10 17:00:37 --> Helper loaded: text_helper
INFO - 2021-12-10 17:00:37 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:00:37 --> Form Validation Class Initialized
INFO - 2021-12-10 17:00:37 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:00:37 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:00:37 --> Final output sent to browser
DEBUG - 2021-12-10 17:00:37 --> Total execution time: 0.3496
INFO - 2021-12-10 17:01:01 --> Config Class Initialized
INFO - 2021-12-10 17:01:01 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:01:01 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:01:01 --> Utf8 Class Initialized
INFO - 2021-12-10 17:01:01 --> URI Class Initialized
INFO - 2021-12-10 17:01:01 --> Router Class Initialized
INFO - 2021-12-10 17:01:01 --> Output Class Initialized
INFO - 2021-12-10 17:01:01 --> Security Class Initialized
INFO - 2021-12-10 17:01:01 --> CRSF cookie sent
INFO - 2021-12-10 17:01:01 --> CSRF token verified
DEBUG - 2021-12-10 17:01:01 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:01:01 --> Input Class Initialized
INFO - 2021-12-10 17:01:01 --> Language Class Initialized
INFO - 2021-12-10 17:01:01 --> Loader Class Initialized
INFO - 2021-12-10 17:01:01 --> Helper loaded: url_helper
INFO - 2021-12-10 17:01:01 --> Helper loaded: form_helper
INFO - 2021-12-10 17:01:01 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:01:01 --> Helper loaded: language_helper
INFO - 2021-12-10 17:01:01 --> Helper loaded: file_helper
INFO - 2021-12-10 17:01:01 --> Helper loaded: date_helper
INFO - 2021-12-10 17:01:01 --> Database Driver Class Initialized
INFO - 2021-12-10 17:01:01 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:01:01 --> Parser Class Initialized
INFO - 2021-12-10 17:01:01 --> Model Class Initialized
INFO - 2021-12-10 17:01:01 --> Model Class Initialized
INFO - 2021-12-10 17:01:01 --> Controller Class Initialized
INFO - 2021-12-10 17:01:01 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:01:01 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:01:01 --> Could not find the language line "today"
INFO - 2021-12-10 17:01:01 --> Model Class Initialized
INFO - 2021-12-10 17:01:01 --> Helper loaded: text_helper
INFO - 2021-12-10 17:01:01 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:01:01 --> Form Validation Class Initialized
INFO - 2021-12-10 17:01:01 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:01:02 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:01:02 --> Final output sent to browser
DEBUG - 2021-12-10 17:01:02 --> Total execution time: 0.2241
INFO - 2021-12-10 17:02:54 --> Config Class Initialized
INFO - 2021-12-10 17:02:54 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:02:54 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:02:54 --> Utf8 Class Initialized
INFO - 2021-12-10 17:02:54 --> URI Class Initialized
INFO - 2021-12-10 17:02:54 --> Router Class Initialized
INFO - 2021-12-10 17:02:54 --> Output Class Initialized
INFO - 2021-12-10 17:02:54 --> Security Class Initialized
INFO - 2021-12-10 17:02:54 --> CRSF cookie sent
INFO - 2021-12-10 17:02:54 --> CSRF token verified
DEBUG - 2021-12-10 17:02:54 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:02:54 --> Input Class Initialized
INFO - 2021-12-10 17:02:54 --> Language Class Initialized
INFO - 2021-12-10 17:02:54 --> Loader Class Initialized
INFO - 2021-12-10 17:02:54 --> Helper loaded: url_helper
INFO - 2021-12-10 17:02:54 --> Helper loaded: form_helper
INFO - 2021-12-10 17:02:54 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:02:54 --> Helper loaded: language_helper
INFO - 2021-12-10 17:02:54 --> Helper loaded: file_helper
INFO - 2021-12-10 17:02:54 --> Helper loaded: date_helper
INFO - 2021-12-10 17:02:54 --> Database Driver Class Initialized
INFO - 2021-12-10 17:02:54 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:02:54 --> Parser Class Initialized
INFO - 2021-12-10 17:02:54 --> Model Class Initialized
INFO - 2021-12-10 17:02:54 --> Model Class Initialized
INFO - 2021-12-10 17:02:54 --> Controller Class Initialized
INFO - 2021-12-10 17:02:54 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:02:54 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:02:54 --> Could not find the language line "today"
INFO - 2021-12-10 17:02:54 --> Model Class Initialized
INFO - 2021-12-10 17:02:54 --> Helper loaded: text_helper
INFO - 2021-12-10 17:02:54 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:02:54 --> Form Validation Class Initialized
INFO - 2021-12-10 17:02:54 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:02:54 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:02:54 --> Final output sent to browser
DEBUG - 2021-12-10 17:02:54 --> Total execution time: 0.2515
INFO - 2021-12-10 17:03:23 --> Config Class Initialized
INFO - 2021-12-10 17:03:23 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:03:23 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:03:23 --> Utf8 Class Initialized
INFO - 2021-12-10 17:03:23 --> URI Class Initialized
INFO - 2021-12-10 17:03:23 --> Router Class Initialized
INFO - 2021-12-10 17:03:23 --> Output Class Initialized
INFO - 2021-12-10 17:03:23 --> Security Class Initialized
INFO - 2021-12-10 17:03:23 --> CRSF cookie sent
INFO - 2021-12-10 17:03:23 --> CSRF token verified
DEBUG - 2021-12-10 17:03:23 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:03:23 --> Input Class Initialized
INFO - 2021-12-10 17:03:23 --> Language Class Initialized
INFO - 2021-12-10 17:03:23 --> Loader Class Initialized
INFO - 2021-12-10 17:03:23 --> Helper loaded: url_helper
INFO - 2021-12-10 17:03:23 --> Helper loaded: form_helper
INFO - 2021-12-10 17:03:23 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:03:23 --> Helper loaded: language_helper
INFO - 2021-12-10 17:03:23 --> Helper loaded: file_helper
INFO - 2021-12-10 17:03:23 --> Helper loaded: date_helper
INFO - 2021-12-10 17:03:23 --> Database Driver Class Initialized
INFO - 2021-12-10 17:03:24 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:03:24 --> Parser Class Initialized
INFO - 2021-12-10 17:03:24 --> Model Class Initialized
INFO - 2021-12-10 17:03:24 --> Model Class Initialized
INFO - 2021-12-10 17:03:24 --> Controller Class Initialized
INFO - 2021-12-10 17:03:24 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:03:24 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:03:24 --> Could not find the language line "today"
INFO - 2021-12-10 17:03:24 --> Model Class Initialized
INFO - 2021-12-10 17:03:24 --> Helper loaded: text_helper
INFO - 2021-12-10 17:03:24 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:03:24 --> Form Validation Class Initialized
INFO - 2021-12-10 17:03:24 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:03:24 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:03:24 --> Final output sent to browser
DEBUG - 2021-12-10 17:03:24 --> Total execution time: 0.3248
INFO - 2021-12-10 17:04:00 --> Config Class Initialized
INFO - 2021-12-10 17:04:00 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:04:00 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:04:00 --> Utf8 Class Initialized
INFO - 2021-12-10 17:04:00 --> URI Class Initialized
INFO - 2021-12-10 17:04:00 --> Router Class Initialized
INFO - 2021-12-10 17:04:00 --> Output Class Initialized
INFO - 2021-12-10 17:04:00 --> Security Class Initialized
INFO - 2021-12-10 17:04:00 --> CRSF cookie sent
INFO - 2021-12-10 17:04:00 --> CSRF token verified
DEBUG - 2021-12-10 17:04:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:04:00 --> Input Class Initialized
INFO - 2021-12-10 17:04:00 --> Language Class Initialized
INFO - 2021-12-10 17:04:00 --> Loader Class Initialized
INFO - 2021-12-10 17:04:00 --> Helper loaded: url_helper
INFO - 2021-12-10 17:04:00 --> Helper loaded: form_helper
INFO - 2021-12-10 17:04:00 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:04:00 --> Helper loaded: language_helper
INFO - 2021-12-10 17:04:00 --> Helper loaded: file_helper
INFO - 2021-12-10 17:04:00 --> Helper loaded: date_helper
INFO - 2021-12-10 17:04:00 --> Database Driver Class Initialized
INFO - 2021-12-10 17:04:00 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:04:00 --> Parser Class Initialized
INFO - 2021-12-10 17:04:00 --> Model Class Initialized
INFO - 2021-12-10 17:04:00 --> Model Class Initialized
INFO - 2021-12-10 17:04:00 --> Controller Class Initialized
INFO - 2021-12-10 17:04:00 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:04:00 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:04:00 --> Could not find the language line "today"
INFO - 2021-12-10 17:04:00 --> Model Class Initialized
INFO - 2021-12-10 17:04:00 --> Helper loaded: text_helper
INFO - 2021-12-10 17:04:00 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:04:00 --> Form Validation Class Initialized
INFO - 2021-12-10 17:04:00 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:04:01 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:04:01 --> Final output sent to browser
DEBUG - 2021-12-10 17:04:01 --> Total execution time: 0.2892
INFO - 2021-12-10 17:06:46 --> Config Class Initialized
INFO - 2021-12-10 17:06:46 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:06:46 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:06:46 --> Utf8 Class Initialized
INFO - 2021-12-10 17:06:46 --> URI Class Initialized
INFO - 2021-12-10 17:06:46 --> Router Class Initialized
INFO - 2021-12-10 17:06:46 --> Output Class Initialized
INFO - 2021-12-10 17:06:46 --> Security Class Initialized
INFO - 2021-12-10 17:06:46 --> CRSF cookie sent
INFO - 2021-12-10 17:06:46 --> CSRF token verified
DEBUG - 2021-12-10 17:06:46 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:06:46 --> Input Class Initialized
INFO - 2021-12-10 17:06:46 --> Language Class Initialized
INFO - 2021-12-10 17:06:46 --> Loader Class Initialized
INFO - 2021-12-10 17:06:46 --> Helper loaded: url_helper
INFO - 2021-12-10 17:06:46 --> Helper loaded: form_helper
INFO - 2021-12-10 17:06:46 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:06:46 --> Helper loaded: language_helper
INFO - 2021-12-10 17:06:46 --> Helper loaded: file_helper
INFO - 2021-12-10 17:06:46 --> Helper loaded: date_helper
INFO - 2021-12-10 17:06:46 --> Database Driver Class Initialized
INFO - 2021-12-10 17:06:46 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:06:46 --> Parser Class Initialized
INFO - 2021-12-10 17:06:46 --> Model Class Initialized
INFO - 2021-12-10 17:06:46 --> Model Class Initialized
INFO - 2021-12-10 17:06:46 --> Controller Class Initialized
INFO - 2021-12-10 17:06:46 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:06:46 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:06:46 --> Could not find the language line "today"
INFO - 2021-12-10 17:06:46 --> Model Class Initialized
INFO - 2021-12-10 17:06:46 --> Helper loaded: text_helper
INFO - 2021-12-10 17:06:46 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:06:46 --> Form Validation Class Initialized
INFO - 2021-12-10 17:06:46 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:06:46 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:06:46 --> Final output sent to browser
DEBUG - 2021-12-10 17:06:46 --> Total execution time: 0.2811
INFO - 2021-12-10 17:12:02 --> Config Class Initialized
INFO - 2021-12-10 17:12:02 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:12:02 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:12:02 --> Utf8 Class Initialized
INFO - 2021-12-10 17:12:02 --> URI Class Initialized
INFO - 2021-12-10 17:12:02 --> Router Class Initialized
INFO - 2021-12-10 17:12:02 --> Output Class Initialized
INFO - 2021-12-10 17:12:02 --> Security Class Initialized
INFO - 2021-12-10 17:12:02 --> CRSF cookie sent
INFO - 2021-12-10 17:12:02 --> CSRF token verified
DEBUG - 2021-12-10 17:12:02 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:12:02 --> Input Class Initialized
INFO - 2021-12-10 17:12:02 --> Language Class Initialized
INFO - 2021-12-10 17:12:02 --> Loader Class Initialized
INFO - 2021-12-10 17:12:02 --> Helper loaded: url_helper
INFO - 2021-12-10 17:12:02 --> Helper loaded: form_helper
INFO - 2021-12-10 17:12:02 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:12:02 --> Helper loaded: language_helper
INFO - 2021-12-10 17:12:02 --> Helper loaded: file_helper
INFO - 2021-12-10 17:12:02 --> Helper loaded: date_helper
INFO - 2021-12-10 17:12:02 --> Database Driver Class Initialized
INFO - 2021-12-10 17:12:02 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:12:02 --> Parser Class Initialized
INFO - 2021-12-10 17:12:02 --> Model Class Initialized
INFO - 2021-12-10 17:12:02 --> Model Class Initialized
INFO - 2021-12-10 17:12:02 --> Controller Class Initialized
INFO - 2021-12-10 17:12:02 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:12:02 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:12:02 --> Could not find the language line "today"
INFO - 2021-12-10 17:12:02 --> Model Class Initialized
INFO - 2021-12-10 17:12:02 --> Helper loaded: text_helper
INFO - 2021-12-10 17:12:02 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:12:02 --> Form Validation Class Initialized
INFO - 2021-12-10 17:12:02 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:12:02 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:12:02 --> Final output sent to browser
DEBUG - 2021-12-10 17:12:02 --> Total execution time: 0.2764
INFO - 2021-12-10 17:16:37 --> Config Class Initialized
INFO - 2021-12-10 17:16:37 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:16:37 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:16:37 --> Utf8 Class Initialized
INFO - 2021-12-10 17:16:37 --> URI Class Initialized
INFO - 2021-12-10 17:16:37 --> Router Class Initialized
INFO - 2021-12-10 17:16:37 --> Output Class Initialized
INFO - 2021-12-10 17:16:37 --> Security Class Initialized
INFO - 2021-12-10 17:16:37 --> CRSF cookie sent
INFO - 2021-12-10 17:16:37 --> CSRF token verified
DEBUG - 2021-12-10 17:16:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:16:37 --> Input Class Initialized
INFO - 2021-12-10 17:16:37 --> Language Class Initialized
INFO - 2021-12-10 17:16:37 --> Loader Class Initialized
INFO - 2021-12-10 17:16:37 --> Helper loaded: url_helper
INFO - 2021-12-10 17:16:37 --> Helper loaded: form_helper
INFO - 2021-12-10 17:16:37 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:16:37 --> Helper loaded: language_helper
INFO - 2021-12-10 17:16:37 --> Helper loaded: file_helper
INFO - 2021-12-10 17:16:37 --> Helper loaded: date_helper
INFO - 2021-12-10 17:16:37 --> Database Driver Class Initialized
INFO - 2021-12-10 17:16:37 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:16:37 --> Parser Class Initialized
INFO - 2021-12-10 17:16:37 --> Model Class Initialized
INFO - 2021-12-10 17:16:37 --> Model Class Initialized
INFO - 2021-12-10 17:16:37 --> Controller Class Initialized
INFO - 2021-12-10 17:16:37 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:16:37 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:16:37 --> Could not find the language line "today"
INFO - 2021-12-10 17:16:37 --> Model Class Initialized
INFO - 2021-12-10 17:16:37 --> Helper loaded: text_helper
INFO - 2021-12-10 17:16:37 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:16:37 --> Form Validation Class Initialized
INFO - 2021-12-10 17:16:37 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:16:37 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:16:37 --> Final output sent to browser
DEBUG - 2021-12-10 17:16:37 --> Total execution time: 0.2771
INFO - 2021-12-10 17:18:14 --> Config Class Initialized
INFO - 2021-12-10 17:18:14 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:18:14 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:18:14 --> Utf8 Class Initialized
INFO - 2021-12-10 17:18:14 --> URI Class Initialized
INFO - 2021-12-10 17:18:14 --> Router Class Initialized
INFO - 2021-12-10 17:18:14 --> Output Class Initialized
INFO - 2021-12-10 17:18:14 --> Security Class Initialized
INFO - 2021-12-10 17:18:14 --> CRSF cookie sent
INFO - 2021-12-10 17:18:14 --> CSRF token verified
DEBUG - 2021-12-10 17:18:14 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:18:14 --> Input Class Initialized
INFO - 2021-12-10 17:18:14 --> Language Class Initialized
INFO - 2021-12-10 17:18:14 --> Loader Class Initialized
INFO - 2021-12-10 17:18:14 --> Helper loaded: url_helper
INFO - 2021-12-10 17:18:14 --> Helper loaded: form_helper
INFO - 2021-12-10 17:18:14 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:18:14 --> Helper loaded: language_helper
INFO - 2021-12-10 17:18:14 --> Helper loaded: file_helper
INFO - 2021-12-10 17:18:14 --> Helper loaded: date_helper
INFO - 2021-12-10 17:18:14 --> Database Driver Class Initialized
INFO - 2021-12-10 17:18:14 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:18:14 --> Parser Class Initialized
INFO - 2021-12-10 17:18:14 --> Model Class Initialized
INFO - 2021-12-10 17:18:14 --> Model Class Initialized
INFO - 2021-12-10 17:18:14 --> Controller Class Initialized
INFO - 2021-12-10 17:18:14 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:18:14 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:18:14 --> Could not find the language line "today"
INFO - 2021-12-10 17:18:14 --> Model Class Initialized
INFO - 2021-12-10 17:18:14 --> Helper loaded: text_helper
INFO - 2021-12-10 17:18:14 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:18:14 --> Form Validation Class Initialized
INFO - 2021-12-10 17:18:14 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:18:14 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:18:14 --> Final output sent to browser
DEBUG - 2021-12-10 17:18:14 --> Total execution time: 0.2532
INFO - 2021-12-10 17:18:29 --> Config Class Initialized
INFO - 2021-12-10 17:18:29 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:18:29 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:18:29 --> Utf8 Class Initialized
INFO - 2021-12-10 17:18:29 --> URI Class Initialized
INFO - 2021-12-10 17:18:29 --> Router Class Initialized
INFO - 2021-12-10 17:18:29 --> Output Class Initialized
INFO - 2021-12-10 17:18:29 --> Security Class Initialized
INFO - 2021-12-10 17:18:29 --> CRSF cookie sent
INFO - 2021-12-10 17:18:29 --> CSRF token verified
DEBUG - 2021-12-10 17:18:29 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:18:29 --> Input Class Initialized
INFO - 2021-12-10 17:18:29 --> Language Class Initialized
INFO - 2021-12-10 17:18:29 --> Loader Class Initialized
INFO - 2021-12-10 17:18:29 --> Helper loaded: url_helper
INFO - 2021-12-10 17:18:29 --> Helper loaded: form_helper
INFO - 2021-12-10 17:18:29 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:18:29 --> Helper loaded: language_helper
INFO - 2021-12-10 17:18:29 --> Helper loaded: file_helper
INFO - 2021-12-10 17:18:29 --> Helper loaded: date_helper
INFO - 2021-12-10 17:18:29 --> Database Driver Class Initialized
INFO - 2021-12-10 17:18:29 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:18:29 --> Parser Class Initialized
INFO - 2021-12-10 17:18:29 --> Model Class Initialized
INFO - 2021-12-10 17:18:29 --> Model Class Initialized
INFO - 2021-12-10 17:18:29 --> Controller Class Initialized
INFO - 2021-12-10 17:18:29 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:18:29 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:18:29 --> Could not find the language line "today"
INFO - 2021-12-10 17:18:29 --> Model Class Initialized
INFO - 2021-12-10 17:18:29 --> Helper loaded: text_helper
INFO - 2021-12-10 17:18:29 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:18:29 --> Form Validation Class Initialized
INFO - 2021-12-10 17:18:29 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:18:29 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:18:29 --> Final output sent to browser
DEBUG - 2021-12-10 17:18:29 --> Total execution time: 0.2529
INFO - 2021-12-10 17:19:51 --> Config Class Initialized
INFO - 2021-12-10 17:19:51 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:19:51 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:19:51 --> Utf8 Class Initialized
INFO - 2021-12-10 17:19:51 --> URI Class Initialized
INFO - 2021-12-10 17:19:51 --> Router Class Initialized
INFO - 2021-12-10 17:19:51 --> Output Class Initialized
INFO - 2021-12-10 17:19:51 --> Security Class Initialized
INFO - 2021-12-10 17:19:51 --> CRSF cookie sent
INFO - 2021-12-10 17:19:51 --> CSRF token verified
DEBUG - 2021-12-10 17:19:51 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:19:51 --> Input Class Initialized
INFO - 2021-12-10 17:19:51 --> Language Class Initialized
INFO - 2021-12-10 17:19:51 --> Loader Class Initialized
INFO - 2021-12-10 17:19:51 --> Helper loaded: url_helper
INFO - 2021-12-10 17:19:51 --> Helper loaded: form_helper
INFO - 2021-12-10 17:19:51 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:19:51 --> Helper loaded: language_helper
INFO - 2021-12-10 17:19:51 --> Helper loaded: file_helper
INFO - 2021-12-10 17:19:51 --> Helper loaded: date_helper
INFO - 2021-12-10 17:19:51 --> Database Driver Class Initialized
INFO - 2021-12-10 17:19:51 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:19:51 --> Parser Class Initialized
INFO - 2021-12-10 17:19:51 --> Model Class Initialized
INFO - 2021-12-10 17:19:51 --> Model Class Initialized
INFO - 2021-12-10 17:19:51 --> Controller Class Initialized
INFO - 2021-12-10 17:19:51 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:19:51 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:19:51 --> Could not find the language line "today"
INFO - 2021-12-10 17:19:51 --> Model Class Initialized
INFO - 2021-12-10 17:19:51 --> Helper loaded: text_helper
INFO - 2021-12-10 17:19:51 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:19:51 --> Form Validation Class Initialized
INFO - 2021-12-10 17:19:51 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:19:51 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:19:51 --> Final output sent to browser
DEBUG - 2021-12-10 17:19:51 --> Total execution time: 0.2913
INFO - 2021-12-10 17:20:05 --> Config Class Initialized
INFO - 2021-12-10 17:20:05 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:20:06 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:20:06 --> Utf8 Class Initialized
INFO - 2021-12-10 17:20:06 --> URI Class Initialized
INFO - 2021-12-10 17:20:06 --> Router Class Initialized
INFO - 2021-12-10 17:20:06 --> Output Class Initialized
INFO - 2021-12-10 17:20:06 --> Security Class Initialized
INFO - 2021-12-10 17:20:06 --> CRSF cookie sent
INFO - 2021-12-10 17:20:06 --> CSRF token verified
DEBUG - 2021-12-10 17:20:06 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:20:06 --> Input Class Initialized
INFO - 2021-12-10 17:20:06 --> Language Class Initialized
INFO - 2021-12-10 17:20:06 --> Loader Class Initialized
INFO - 2021-12-10 17:20:06 --> Helper loaded: url_helper
INFO - 2021-12-10 17:20:06 --> Helper loaded: form_helper
INFO - 2021-12-10 17:20:06 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:20:06 --> Helper loaded: language_helper
INFO - 2021-12-10 17:20:06 --> Helper loaded: file_helper
INFO - 2021-12-10 17:20:06 --> Helper loaded: date_helper
INFO - 2021-12-10 17:20:06 --> Database Driver Class Initialized
INFO - 2021-12-10 17:20:06 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:20:06 --> Parser Class Initialized
INFO - 2021-12-10 17:20:06 --> Model Class Initialized
INFO - 2021-12-10 17:20:06 --> Model Class Initialized
INFO - 2021-12-10 17:20:06 --> Controller Class Initialized
INFO - 2021-12-10 17:20:06 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:20:06 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:20:06 --> Could not find the language line "today"
INFO - 2021-12-10 17:20:06 --> Model Class Initialized
INFO - 2021-12-10 17:20:06 --> Helper loaded: text_helper
INFO - 2021-12-10 17:20:06 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:20:06 --> Form Validation Class Initialized
INFO - 2021-12-10 17:20:06 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:20:06 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:20:06 --> Final output sent to browser
DEBUG - 2021-12-10 17:20:06 --> Total execution time: 0.3079
INFO - 2021-12-10 17:20:26 --> Config Class Initialized
INFO - 2021-12-10 17:20:26 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:20:26 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:20:26 --> Utf8 Class Initialized
INFO - 2021-12-10 17:20:26 --> URI Class Initialized
INFO - 2021-12-10 17:20:26 --> Router Class Initialized
INFO - 2021-12-10 17:20:26 --> Output Class Initialized
INFO - 2021-12-10 17:20:26 --> Security Class Initialized
INFO - 2021-12-10 17:20:26 --> CRSF cookie sent
INFO - 2021-12-10 17:20:26 --> CSRF token verified
DEBUG - 2021-12-10 17:20:26 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:20:26 --> Input Class Initialized
INFO - 2021-12-10 17:20:26 --> Language Class Initialized
INFO - 2021-12-10 17:20:26 --> Loader Class Initialized
INFO - 2021-12-10 17:20:26 --> Helper loaded: url_helper
INFO - 2021-12-10 17:20:26 --> Helper loaded: form_helper
INFO - 2021-12-10 17:20:26 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:20:26 --> Helper loaded: language_helper
INFO - 2021-12-10 17:20:26 --> Helper loaded: file_helper
INFO - 2021-12-10 17:20:26 --> Helper loaded: date_helper
INFO - 2021-12-10 17:20:26 --> Database Driver Class Initialized
INFO - 2021-12-10 17:20:26 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:20:27 --> Parser Class Initialized
INFO - 2021-12-10 17:20:27 --> Model Class Initialized
INFO - 2021-12-10 17:20:27 --> Model Class Initialized
INFO - 2021-12-10 17:20:27 --> Controller Class Initialized
INFO - 2021-12-10 17:20:27 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:20:27 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:20:27 --> Could not find the language line "today"
INFO - 2021-12-10 17:20:27 --> Model Class Initialized
INFO - 2021-12-10 17:20:27 --> Helper loaded: text_helper
INFO - 2021-12-10 17:20:27 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:20:27 --> Form Validation Class Initialized
INFO - 2021-12-10 17:20:27 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:20:27 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:20:27 --> Final output sent to browser
DEBUG - 2021-12-10 17:20:27 --> Total execution time: 0.3721
INFO - 2021-12-10 17:21:50 --> Config Class Initialized
INFO - 2021-12-10 17:21:50 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:21:50 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:21:50 --> Utf8 Class Initialized
INFO - 2021-12-10 17:21:50 --> URI Class Initialized
INFO - 2021-12-10 17:21:50 --> Router Class Initialized
INFO - 2021-12-10 17:21:50 --> Output Class Initialized
INFO - 2021-12-10 17:21:50 --> Security Class Initialized
INFO - 2021-12-10 17:21:50 --> CRSF cookie sent
INFO - 2021-12-10 17:21:50 --> CSRF token verified
DEBUG - 2021-12-10 17:21:50 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:21:50 --> Input Class Initialized
INFO - 2021-12-10 17:21:50 --> Language Class Initialized
INFO - 2021-12-10 17:21:50 --> Loader Class Initialized
INFO - 2021-12-10 17:21:50 --> Helper loaded: url_helper
INFO - 2021-12-10 17:21:50 --> Helper loaded: form_helper
INFO - 2021-12-10 17:21:50 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:21:50 --> Helper loaded: language_helper
INFO - 2021-12-10 17:21:50 --> Helper loaded: file_helper
INFO - 2021-12-10 17:21:50 --> Helper loaded: date_helper
INFO - 2021-12-10 17:21:50 --> Database Driver Class Initialized
INFO - 2021-12-10 17:21:50 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:21:50 --> Parser Class Initialized
INFO - 2021-12-10 17:21:50 --> Model Class Initialized
INFO - 2021-12-10 17:21:50 --> Model Class Initialized
INFO - 2021-12-10 17:21:50 --> Controller Class Initialized
INFO - 2021-12-10 17:21:50 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:21:50 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:21:50 --> Could not find the language line "today"
INFO - 2021-12-10 17:21:50 --> Model Class Initialized
INFO - 2021-12-10 17:21:50 --> Helper loaded: text_helper
INFO - 2021-12-10 17:21:50 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:21:50 --> Form Validation Class Initialized
INFO - 2021-12-10 17:21:50 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 17:21:50 --> Severity: error --> Exception: syntax error, unexpected '.', expecting end of file C:\wamp64\www\Reactor\themes\default\views\pos\view_close_box.php 52
INFO - 2021-12-10 17:22:07 --> Config Class Initialized
INFO - 2021-12-10 17:22:07 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:22:07 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:22:07 --> Utf8 Class Initialized
INFO - 2021-12-10 17:22:07 --> URI Class Initialized
INFO - 2021-12-10 17:22:07 --> Router Class Initialized
INFO - 2021-12-10 17:22:07 --> Output Class Initialized
INFO - 2021-12-10 17:22:07 --> Security Class Initialized
INFO - 2021-12-10 17:22:07 --> CRSF cookie sent
INFO - 2021-12-10 17:22:07 --> CSRF token verified
DEBUG - 2021-12-10 17:22:07 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:22:07 --> Input Class Initialized
INFO - 2021-12-10 17:22:07 --> Language Class Initialized
INFO - 2021-12-10 17:22:07 --> Loader Class Initialized
INFO - 2021-12-10 17:22:07 --> Helper loaded: url_helper
INFO - 2021-12-10 17:22:07 --> Helper loaded: form_helper
INFO - 2021-12-10 17:22:07 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:22:07 --> Helper loaded: language_helper
INFO - 2021-12-10 17:22:07 --> Helper loaded: file_helper
INFO - 2021-12-10 17:22:07 --> Helper loaded: date_helper
INFO - 2021-12-10 17:22:07 --> Database Driver Class Initialized
INFO - 2021-12-10 17:22:07 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:22:07 --> Parser Class Initialized
INFO - 2021-12-10 17:22:07 --> Model Class Initialized
INFO - 2021-12-10 17:22:07 --> Model Class Initialized
INFO - 2021-12-10 17:22:07 --> Controller Class Initialized
INFO - 2021-12-10 17:22:07 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:22:07 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:22:07 --> Could not find the language line "today"
INFO - 2021-12-10 17:22:07 --> Model Class Initialized
INFO - 2021-12-10 17:22:07 --> Helper loaded: text_helper
INFO - 2021-12-10 17:22:07 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:22:07 --> Form Validation Class Initialized
INFO - 2021-12-10 17:22:07 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:22:07 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:22:07 --> Final output sent to browser
DEBUG - 2021-12-10 17:22:07 --> Total execution time: 0.3840
INFO - 2021-12-10 17:22:27 --> Config Class Initialized
INFO - 2021-12-10 17:22:28 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:22:28 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:22:28 --> Utf8 Class Initialized
INFO - 2021-12-10 17:22:28 --> URI Class Initialized
INFO - 2021-12-10 17:22:28 --> Router Class Initialized
INFO - 2021-12-10 17:22:28 --> Output Class Initialized
INFO - 2021-12-10 17:22:28 --> Security Class Initialized
INFO - 2021-12-10 17:22:28 --> CRSF cookie sent
INFO - 2021-12-10 17:22:28 --> CSRF token verified
DEBUG - 2021-12-10 17:22:28 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:22:28 --> Input Class Initialized
INFO - 2021-12-10 17:22:28 --> Language Class Initialized
INFO - 2021-12-10 17:22:28 --> Loader Class Initialized
INFO - 2021-12-10 17:22:28 --> Helper loaded: url_helper
INFO - 2021-12-10 17:22:28 --> Helper loaded: form_helper
INFO - 2021-12-10 17:22:28 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:22:28 --> Helper loaded: language_helper
INFO - 2021-12-10 17:22:28 --> Helper loaded: file_helper
INFO - 2021-12-10 17:22:28 --> Helper loaded: date_helper
INFO - 2021-12-10 17:22:28 --> Database Driver Class Initialized
INFO - 2021-12-10 17:22:28 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:22:28 --> Parser Class Initialized
INFO - 2021-12-10 17:22:28 --> Model Class Initialized
INFO - 2021-12-10 17:22:28 --> Model Class Initialized
INFO - 2021-12-10 17:22:28 --> Controller Class Initialized
INFO - 2021-12-10 17:22:28 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:22:28 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:22:28 --> Could not find the language line "today"
INFO - 2021-12-10 17:22:28 --> Model Class Initialized
INFO - 2021-12-10 17:22:28 --> Helper loaded: text_helper
INFO - 2021-12-10 17:22:28 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:22:28 --> Form Validation Class Initialized
INFO - 2021-12-10 17:22:28 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:22:28 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:22:28 --> Final output sent to browser
DEBUG - 2021-12-10 17:22:28 --> Total execution time: 0.4493
INFO - 2021-12-10 17:25:10 --> Config Class Initialized
INFO - 2021-12-10 17:25:10 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:25:10 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:25:10 --> Utf8 Class Initialized
INFO - 2021-12-10 17:25:10 --> URI Class Initialized
INFO - 2021-12-10 17:25:10 --> Router Class Initialized
INFO - 2021-12-10 17:25:10 --> Output Class Initialized
INFO - 2021-12-10 17:25:10 --> Security Class Initialized
INFO - 2021-12-10 17:25:10 --> CRSF cookie sent
INFO - 2021-12-10 17:25:10 --> CSRF token verified
DEBUG - 2021-12-10 17:25:10 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:25:10 --> Input Class Initialized
INFO - 2021-12-10 17:25:10 --> Language Class Initialized
INFO - 2021-12-10 17:25:10 --> Loader Class Initialized
INFO - 2021-12-10 17:25:10 --> Helper loaded: url_helper
INFO - 2021-12-10 17:25:10 --> Helper loaded: form_helper
INFO - 2021-12-10 17:25:10 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:25:10 --> Helper loaded: language_helper
INFO - 2021-12-10 17:25:10 --> Helper loaded: file_helper
INFO - 2021-12-10 17:25:10 --> Helper loaded: date_helper
INFO - 2021-12-10 17:25:10 --> Database Driver Class Initialized
INFO - 2021-12-10 17:25:10 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:25:10 --> Parser Class Initialized
INFO - 2021-12-10 17:25:10 --> Model Class Initialized
INFO - 2021-12-10 17:25:10 --> Model Class Initialized
INFO - 2021-12-10 17:25:10 --> Controller Class Initialized
INFO - 2021-12-10 17:25:10 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:25:10 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:25:10 --> Could not find the language line "today"
INFO - 2021-12-10 17:25:10 --> Model Class Initialized
INFO - 2021-12-10 17:25:10 --> Helper loaded: text_helper
INFO - 2021-12-10 17:25:10 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:25:10 --> Form Validation Class Initialized
INFO - 2021-12-10 17:25:10 --> Language file loaded: language/spanish/form_validation_lang.php
ERROR - 2021-12-10 17:25:10 --> Could not find the language line "closed_by"
INFO - 2021-12-10 17:25:10 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:25:10 --> Final output sent to browser
DEBUG - 2021-12-10 17:25:10 --> Total execution time: 0.3300
INFO - 2021-12-10 17:29:37 --> Config Class Initialized
INFO - 2021-12-10 17:29:37 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:29:37 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:29:37 --> Utf8 Class Initialized
INFO - 2021-12-10 17:29:37 --> URI Class Initialized
INFO - 2021-12-10 17:29:37 --> Router Class Initialized
INFO - 2021-12-10 17:29:37 --> Output Class Initialized
INFO - 2021-12-10 17:29:37 --> Security Class Initialized
INFO - 2021-12-10 17:29:37 --> CRSF cookie sent
INFO - 2021-12-10 17:29:37 --> CSRF token verified
DEBUG - 2021-12-10 17:29:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:29:37 --> Input Class Initialized
INFO - 2021-12-10 17:29:37 --> Language Class Initialized
INFO - 2021-12-10 17:29:37 --> Loader Class Initialized
INFO - 2021-12-10 17:29:37 --> Helper loaded: url_helper
INFO - 2021-12-10 17:29:37 --> Helper loaded: form_helper
INFO - 2021-12-10 17:29:37 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:29:37 --> Helper loaded: language_helper
INFO - 2021-12-10 17:29:37 --> Helper loaded: file_helper
INFO - 2021-12-10 17:29:37 --> Helper loaded: date_helper
INFO - 2021-12-10 17:29:37 --> Database Driver Class Initialized
INFO - 2021-12-10 17:29:37 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:29:37 --> Parser Class Initialized
INFO - 2021-12-10 17:29:37 --> Model Class Initialized
INFO - 2021-12-10 17:29:37 --> Model Class Initialized
INFO - 2021-12-10 17:29:37 --> Controller Class Initialized
INFO - 2021-12-10 17:29:37 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:29:37 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:29:37 --> Could not find the language line "today"
INFO - 2021-12-10 17:29:37 --> Model Class Initialized
INFO - 2021-12-10 17:29:37 --> Helper loaded: text_helper
INFO - 2021-12-10 17:29:37 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:29:37 --> Form Validation Class Initialized
INFO - 2021-12-10 17:29:37 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:29:37 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:29:37 --> Final output sent to browser
DEBUG - 2021-12-10 17:29:37 --> Total execution time: 0.3234
INFO - 2021-12-10 17:30:00 --> Config Class Initialized
INFO - 2021-12-10 17:30:00 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:30:00 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:30:00 --> Utf8 Class Initialized
INFO - 2021-12-10 17:30:00 --> URI Class Initialized
INFO - 2021-12-10 17:30:00 --> Router Class Initialized
INFO - 2021-12-10 17:30:00 --> Output Class Initialized
INFO - 2021-12-10 17:30:00 --> Security Class Initialized
INFO - 2021-12-10 17:30:00 --> CRSF cookie sent
INFO - 2021-12-10 17:30:00 --> CSRF token verified
DEBUG - 2021-12-10 17:30:00 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:30:00 --> Input Class Initialized
INFO - 2021-12-10 17:30:00 --> Language Class Initialized
INFO - 2021-12-10 17:30:00 --> Loader Class Initialized
INFO - 2021-12-10 17:30:00 --> Helper loaded: url_helper
INFO - 2021-12-10 17:30:00 --> Helper loaded: form_helper
INFO - 2021-12-10 17:30:00 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:30:00 --> Helper loaded: language_helper
INFO - 2021-12-10 17:30:00 --> Helper loaded: file_helper
INFO - 2021-12-10 17:30:00 --> Helper loaded: date_helper
INFO - 2021-12-10 17:30:00 --> Database Driver Class Initialized
INFO - 2021-12-10 17:30:00 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:30:00 --> Parser Class Initialized
INFO - 2021-12-10 17:30:00 --> Model Class Initialized
INFO - 2021-12-10 17:30:00 --> Model Class Initialized
INFO - 2021-12-10 17:30:00 --> Controller Class Initialized
INFO - 2021-12-10 17:30:00 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:30:00 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:30:00 --> Could not find the language line "today"
INFO - 2021-12-10 17:30:00 --> Model Class Initialized
INFO - 2021-12-10 17:30:00 --> Helper loaded: text_helper
INFO - 2021-12-10 17:30:00 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:30:00 --> Form Validation Class Initialized
INFO - 2021-12-10 17:30:00 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:30:00 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:30:00 --> Final output sent to browser
DEBUG - 2021-12-10 17:30:00 --> Total execution time: 0.4425
INFO - 2021-12-10 17:30:38 --> Config Class Initialized
INFO - 2021-12-10 17:30:38 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:30:38 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:30:38 --> Utf8 Class Initialized
INFO - 2021-12-10 17:30:38 --> URI Class Initialized
INFO - 2021-12-10 17:30:38 --> Router Class Initialized
INFO - 2021-12-10 17:30:38 --> Output Class Initialized
INFO - 2021-12-10 17:30:38 --> Security Class Initialized
INFO - 2021-12-10 17:30:38 --> CRSF cookie sent
INFO - 2021-12-10 17:30:38 --> CSRF token verified
DEBUG - 2021-12-10 17:30:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:30:38 --> Input Class Initialized
INFO - 2021-12-10 17:30:38 --> Language Class Initialized
INFO - 2021-12-10 17:30:38 --> Loader Class Initialized
INFO - 2021-12-10 17:30:38 --> Helper loaded: url_helper
INFO - 2021-12-10 17:30:38 --> Helper loaded: form_helper
INFO - 2021-12-10 17:30:39 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:30:39 --> Helper loaded: language_helper
INFO - 2021-12-10 17:30:39 --> Helper loaded: file_helper
INFO - 2021-12-10 17:30:39 --> Helper loaded: date_helper
INFO - 2021-12-10 17:30:39 --> Database Driver Class Initialized
INFO - 2021-12-10 17:30:39 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:30:39 --> Parser Class Initialized
INFO - 2021-12-10 17:30:39 --> Model Class Initialized
INFO - 2021-12-10 17:30:39 --> Model Class Initialized
INFO - 2021-12-10 17:30:39 --> Controller Class Initialized
INFO - 2021-12-10 17:30:39 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:30:39 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:30:39 --> Could not find the language line "today"
INFO - 2021-12-10 17:30:39 --> Model Class Initialized
INFO - 2021-12-10 17:30:39 --> Helper loaded: text_helper
INFO - 2021-12-10 17:30:39 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:30:39 --> Form Validation Class Initialized
INFO - 2021-12-10 17:30:39 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:30:39 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:30:39 --> Final output sent to browser
DEBUG - 2021-12-10 17:30:39 --> Total execution time: 0.2774
INFO - 2021-12-10 17:31:09 --> Config Class Initialized
INFO - 2021-12-10 17:31:09 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:31:09 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:31:09 --> Utf8 Class Initialized
INFO - 2021-12-10 17:31:09 --> URI Class Initialized
INFO - 2021-12-10 17:31:09 --> Router Class Initialized
INFO - 2021-12-10 17:31:09 --> Output Class Initialized
INFO - 2021-12-10 17:31:09 --> Security Class Initialized
INFO - 2021-12-10 17:31:09 --> CRSF cookie sent
INFO - 2021-12-10 17:31:09 --> CSRF token verified
DEBUG - 2021-12-10 17:31:09 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:31:09 --> Input Class Initialized
INFO - 2021-12-10 17:31:09 --> Language Class Initialized
INFO - 2021-12-10 17:31:09 --> Loader Class Initialized
INFO - 2021-12-10 17:31:09 --> Helper loaded: url_helper
INFO - 2021-12-10 17:31:09 --> Helper loaded: form_helper
INFO - 2021-12-10 17:31:09 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:31:09 --> Helper loaded: language_helper
INFO - 2021-12-10 17:31:09 --> Helper loaded: file_helper
INFO - 2021-12-10 17:31:09 --> Helper loaded: date_helper
INFO - 2021-12-10 17:31:09 --> Database Driver Class Initialized
INFO - 2021-12-10 17:31:09 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:31:09 --> Parser Class Initialized
INFO - 2021-12-10 17:31:09 --> Model Class Initialized
INFO - 2021-12-10 17:31:09 --> Model Class Initialized
INFO - 2021-12-10 17:31:09 --> Controller Class Initialized
INFO - 2021-12-10 17:31:09 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:31:09 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:31:09 --> Could not find the language line "today"
INFO - 2021-12-10 17:31:09 --> Model Class Initialized
INFO - 2021-12-10 17:31:09 --> Helper loaded: text_helper
INFO - 2021-12-10 17:31:09 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:31:09 --> Form Validation Class Initialized
INFO - 2021-12-10 17:31:09 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:31:09 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:31:09 --> Final output sent to browser
DEBUG - 2021-12-10 17:31:09 --> Total execution time: 0.5672
INFO - 2021-12-10 17:32:18 --> Config Class Initialized
INFO - 2021-12-10 17:32:18 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:32:18 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:32:18 --> Utf8 Class Initialized
INFO - 2021-12-10 17:32:18 --> URI Class Initialized
INFO - 2021-12-10 17:32:18 --> Router Class Initialized
INFO - 2021-12-10 17:32:18 --> Output Class Initialized
INFO - 2021-12-10 17:32:18 --> Security Class Initialized
INFO - 2021-12-10 17:32:18 --> CRSF cookie sent
INFO - 2021-12-10 17:32:18 --> CSRF token verified
DEBUG - 2021-12-10 17:32:18 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:32:18 --> Input Class Initialized
INFO - 2021-12-10 17:32:18 --> Language Class Initialized
INFO - 2021-12-10 17:32:18 --> Loader Class Initialized
INFO - 2021-12-10 17:32:18 --> Helper loaded: url_helper
INFO - 2021-12-10 17:32:18 --> Helper loaded: form_helper
INFO - 2021-12-10 17:32:18 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:32:18 --> Helper loaded: language_helper
INFO - 2021-12-10 17:32:18 --> Helper loaded: file_helper
INFO - 2021-12-10 17:32:18 --> Helper loaded: date_helper
INFO - 2021-12-10 17:32:18 --> Database Driver Class Initialized
INFO - 2021-12-10 17:32:18 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:32:18 --> Parser Class Initialized
INFO - 2021-12-10 17:32:18 --> Model Class Initialized
INFO - 2021-12-10 17:32:18 --> Model Class Initialized
INFO - 2021-12-10 17:32:18 --> Controller Class Initialized
INFO - 2021-12-10 17:32:18 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:32:18 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:32:18 --> Could not find the language line "today"
INFO - 2021-12-10 17:32:18 --> Model Class Initialized
INFO - 2021-12-10 17:32:18 --> Helper loaded: text_helper
INFO - 2021-12-10 17:32:18 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:32:18 --> Form Validation Class Initialized
INFO - 2021-12-10 17:32:18 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:32:18 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:32:18 --> Final output sent to browser
DEBUG - 2021-12-10 17:32:18 --> Total execution time: 0.3294
INFO - 2021-12-10 17:32:37 --> Config Class Initialized
INFO - 2021-12-10 17:32:37 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:32:37 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:32:37 --> Utf8 Class Initialized
INFO - 2021-12-10 17:32:37 --> URI Class Initialized
INFO - 2021-12-10 17:32:37 --> Router Class Initialized
INFO - 2021-12-10 17:32:37 --> Output Class Initialized
INFO - 2021-12-10 17:32:37 --> Security Class Initialized
INFO - 2021-12-10 17:32:37 --> CRSF cookie sent
INFO - 2021-12-10 17:32:37 --> CSRF token verified
DEBUG - 2021-12-10 17:32:37 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:32:37 --> Input Class Initialized
INFO - 2021-12-10 17:32:37 --> Language Class Initialized
INFO - 2021-12-10 17:32:37 --> Loader Class Initialized
INFO - 2021-12-10 17:32:37 --> Helper loaded: url_helper
INFO - 2021-12-10 17:32:37 --> Helper loaded: form_helper
INFO - 2021-12-10 17:32:37 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:32:37 --> Helper loaded: language_helper
INFO - 2021-12-10 17:32:37 --> Helper loaded: file_helper
INFO - 2021-12-10 17:32:37 --> Helper loaded: date_helper
INFO - 2021-12-10 17:32:37 --> Database Driver Class Initialized
INFO - 2021-12-10 17:32:37 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:32:37 --> Parser Class Initialized
INFO - 2021-12-10 17:32:37 --> Model Class Initialized
INFO - 2021-12-10 17:32:37 --> Model Class Initialized
INFO - 2021-12-10 17:32:37 --> Controller Class Initialized
INFO - 2021-12-10 17:32:37 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:32:37 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:32:37 --> Could not find the language line "today"
INFO - 2021-12-10 17:32:37 --> Model Class Initialized
INFO - 2021-12-10 17:32:37 --> Helper loaded: text_helper
INFO - 2021-12-10 17:32:37 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:32:37 --> Form Validation Class Initialized
INFO - 2021-12-10 17:32:37 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:32:37 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:32:37 --> Final output sent to browser
DEBUG - 2021-12-10 17:32:37 --> Total execution time: 0.2571
INFO - 2021-12-10 17:34:33 --> Config Class Initialized
INFO - 2021-12-10 17:34:33 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:34:33 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:34:33 --> Utf8 Class Initialized
INFO - 2021-12-10 17:34:33 --> URI Class Initialized
INFO - 2021-12-10 17:34:33 --> Router Class Initialized
INFO - 2021-12-10 17:34:33 --> Output Class Initialized
INFO - 2021-12-10 17:34:33 --> Security Class Initialized
INFO - 2021-12-10 17:34:33 --> CRSF cookie sent
INFO - 2021-12-10 17:34:33 --> CSRF token verified
DEBUG - 2021-12-10 17:34:33 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:34:33 --> Input Class Initialized
INFO - 2021-12-10 17:34:33 --> Language Class Initialized
INFO - 2021-12-10 17:34:33 --> Loader Class Initialized
INFO - 2021-12-10 17:34:33 --> Helper loaded: url_helper
INFO - 2021-12-10 17:34:33 --> Helper loaded: form_helper
INFO - 2021-12-10 17:34:33 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:34:33 --> Helper loaded: language_helper
INFO - 2021-12-10 17:34:33 --> Helper loaded: file_helper
INFO - 2021-12-10 17:34:33 --> Helper loaded: date_helper
INFO - 2021-12-10 17:34:33 --> Database Driver Class Initialized
INFO - 2021-12-10 17:34:33 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:34:33 --> Parser Class Initialized
INFO - 2021-12-10 17:34:33 --> Model Class Initialized
INFO - 2021-12-10 17:34:33 --> Model Class Initialized
INFO - 2021-12-10 17:34:33 --> Controller Class Initialized
INFO - 2021-12-10 17:34:33 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:34:33 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:34:33 --> Could not find the language line "today"
INFO - 2021-12-10 17:34:33 --> Model Class Initialized
INFO - 2021-12-10 17:34:33 --> Helper loaded: text_helper
INFO - 2021-12-10 17:34:33 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:34:33 --> Form Validation Class Initialized
INFO - 2021-12-10 17:34:33 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:34:33 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:34:33 --> Final output sent to browser
DEBUG - 2021-12-10 17:34:33 --> Total execution time: 0.3667
INFO - 2021-12-10 17:36:27 --> Config Class Initialized
INFO - 2021-12-10 17:36:27 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:36:27 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:36:27 --> Utf8 Class Initialized
INFO - 2021-12-10 17:36:27 --> URI Class Initialized
INFO - 2021-12-10 17:36:27 --> Router Class Initialized
INFO - 2021-12-10 17:36:27 --> Output Class Initialized
INFO - 2021-12-10 17:36:27 --> Security Class Initialized
INFO - 2021-12-10 17:36:27 --> CRSF cookie sent
INFO - 2021-12-10 17:36:27 --> CSRF token verified
DEBUG - 2021-12-10 17:36:27 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:36:27 --> Input Class Initialized
INFO - 2021-12-10 17:36:27 --> Language Class Initialized
INFO - 2021-12-10 17:36:27 --> Loader Class Initialized
INFO - 2021-12-10 17:36:27 --> Helper loaded: url_helper
INFO - 2021-12-10 17:36:27 --> Helper loaded: form_helper
INFO - 2021-12-10 17:36:27 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:36:27 --> Helper loaded: language_helper
INFO - 2021-12-10 17:36:27 --> Helper loaded: file_helper
INFO - 2021-12-10 17:36:27 --> Helper loaded: date_helper
INFO - 2021-12-10 17:36:27 --> Database Driver Class Initialized
INFO - 2021-12-10 17:36:27 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:36:27 --> Parser Class Initialized
INFO - 2021-12-10 17:36:27 --> Model Class Initialized
INFO - 2021-12-10 17:36:27 --> Model Class Initialized
INFO - 2021-12-10 17:36:27 --> Controller Class Initialized
INFO - 2021-12-10 17:36:27 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:36:27 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:36:27 --> Could not find the language line "today"
INFO - 2021-12-10 17:36:27 --> Model Class Initialized
INFO - 2021-12-10 17:36:27 --> Helper loaded: text_helper
INFO - 2021-12-10 17:36:27 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:36:27 --> Form Validation Class Initialized
INFO - 2021-12-10 17:36:27 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:36:27 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:36:27 --> Final output sent to browser
DEBUG - 2021-12-10 17:36:27 --> Total execution time: 0.2575
INFO - 2021-12-10 17:36:36 --> Config Class Initialized
INFO - 2021-12-10 17:36:36 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:36:36 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:36:36 --> Utf8 Class Initialized
INFO - 2021-12-10 17:36:36 --> URI Class Initialized
INFO - 2021-12-10 17:36:36 --> Router Class Initialized
INFO - 2021-12-10 17:36:36 --> Output Class Initialized
INFO - 2021-12-10 17:36:36 --> Security Class Initialized
INFO - 2021-12-10 17:36:36 --> CRSF cookie sent
INFO - 2021-12-10 17:36:36 --> CSRF token verified
DEBUG - 2021-12-10 17:36:36 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:36:36 --> Input Class Initialized
INFO - 2021-12-10 17:36:36 --> Language Class Initialized
INFO - 2021-12-10 17:36:36 --> Loader Class Initialized
INFO - 2021-12-10 17:36:36 --> Helper loaded: url_helper
INFO - 2021-12-10 17:36:36 --> Helper loaded: form_helper
INFO - 2021-12-10 17:36:36 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:36:36 --> Helper loaded: language_helper
INFO - 2021-12-10 17:36:36 --> Helper loaded: file_helper
INFO - 2021-12-10 17:36:36 --> Helper loaded: date_helper
INFO - 2021-12-10 17:36:36 --> Database Driver Class Initialized
INFO - 2021-12-10 17:36:36 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:36:36 --> Parser Class Initialized
INFO - 2021-12-10 17:36:36 --> Model Class Initialized
INFO - 2021-12-10 17:36:36 --> Model Class Initialized
INFO - 2021-12-10 17:36:36 --> Controller Class Initialized
INFO - 2021-12-10 17:36:36 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:36:36 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:36:36 --> Could not find the language line "today"
INFO - 2021-12-10 17:36:36 --> Model Class Initialized
INFO - 2021-12-10 17:36:36 --> Helper loaded: text_helper
INFO - 2021-12-10 17:36:36 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:36:37 --> Form Validation Class Initialized
INFO - 2021-12-10 17:36:37 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:36:37 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:36:37 --> Final output sent to browser
DEBUG - 2021-12-10 17:36:37 --> Total execution time: 0.2955
INFO - 2021-12-10 17:37:38 --> Config Class Initialized
INFO - 2021-12-10 17:37:38 --> Hooks Class Initialized
DEBUG - 2021-12-10 17:37:38 --> UTF-8 Support Enabled
INFO - 2021-12-10 17:37:38 --> Utf8 Class Initialized
INFO - 2021-12-10 17:37:38 --> URI Class Initialized
INFO - 2021-12-10 17:37:38 --> Router Class Initialized
INFO - 2021-12-10 17:37:38 --> Output Class Initialized
INFO - 2021-12-10 17:37:38 --> Security Class Initialized
INFO - 2021-12-10 17:37:38 --> CRSF cookie sent
INFO - 2021-12-10 17:37:38 --> CSRF token verified
DEBUG - 2021-12-10 17:37:38 --> Global POST, GET and COOKIE data sanitized
INFO - 2021-12-10 17:37:38 --> Input Class Initialized
INFO - 2021-12-10 17:37:38 --> Language Class Initialized
INFO - 2021-12-10 17:37:38 --> Loader Class Initialized
INFO - 2021-12-10 17:37:38 --> Helper loaded: url_helper
INFO - 2021-12-10 17:37:38 --> Helper loaded: form_helper
INFO - 2021-12-10 17:37:38 --> Helper loaded: cookie_helper
INFO - 2021-12-10 17:37:38 --> Helper loaded: language_helper
INFO - 2021-12-10 17:37:38 --> Helper loaded: file_helper
INFO - 2021-12-10 17:37:38 --> Helper loaded: date_helper
INFO - 2021-12-10 17:37:38 --> Database Driver Class Initialized
INFO - 2021-12-10 17:37:38 --> Session: Class initialized using 'database' driver.
INFO - 2021-12-10 17:37:38 --> Parser Class Initialized
INFO - 2021-12-10 17:37:38 --> Model Class Initialized
INFO - 2021-12-10 17:37:38 --> Model Class Initialized
INFO - 2021-12-10 17:37:38 --> Controller Class Initialized
INFO - 2021-12-10 17:37:38 --> Language file loaded: language/spanish/sma_lang.php
INFO - 2021-12-10 17:37:38 --> Language file loaded: language/spanish/calendar_lang.php
ERROR - 2021-12-10 17:37:38 --> Could not find the language line "today"
INFO - 2021-12-10 17:37:38 --> Model Class Initialized
INFO - 2021-12-10 17:37:38 --> Helper loaded: text_helper
INFO - 2021-12-10 17:37:38 --> Language file loaded: language/spanish/pos_lang.php
INFO - 2021-12-10 17:37:38 --> Form Validation Class Initialized
INFO - 2021-12-10 17:37:39 --> Language file loaded: language/spanish/form_validation_lang.php
INFO - 2021-12-10 17:37:39 --> File loaded: C:\wamp64\www\Reactor\themes\default/views/pos/view_close_box.php
INFO - 2021-12-10 17:37:39 --> Final output sent to browser
DEBUG - 2021-12-10 17:37:39 --> Total execution time: 0.3917
