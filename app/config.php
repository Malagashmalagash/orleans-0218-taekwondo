<?php
/**
 * This file define app constants .
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */


define('APP_DEV', true);

// Model (for connexion data, see unversionned db.php)
// View
define('APP_VIEW_PATH', __DIR__ . '/../src/View/');
define('APP_CACHE_PATH', __DIR__ . '/../temp/cache/');

// Controller
define('APP_CONTROLLER_NAMESPACE', '\Controller\\');
define('APP_CONTROLLER_SUFFIX', 'Controller');

// Custom parameters
define('MAP_ACCESS_TOKEN', 'pk.eyJ1IjoidGFla3dvbmRvb2xpdmV0IiwiYSI6ImNqZmt3bGxhYTA5czgyeG43NzE5d2tucTIifQ.BZ5b1i4ZN9PMGbJ-1W4e3w');
define('BASE_ROOT', __DIR__ . '/../public');
define('UPLOADS_PATH', 'assets/uploads');
define('UPLOADS_PATH_EVENTS', '/assets/uploads/events/');
define('UPLOADS_PATH_OFFICES', '/assets/uploads/offices/');
define('ALLOWED_TYPES', ['jpg', 'jpeg', 'png']);
define('MAX_UPLOAD_SIZE', 1000000);

// SwiftMailer ands Google account paramters
define('APP_MAIL_HOST', 'smtp.gmail.com');
define('APP_MAIL_PORT', '465');
define('APP_MAIL_SECURITY', 'SSL');
define('APP_MAIL_NAME', 'seb.hkzt@gmail.com');
define('APP_MAIL_PWD', '');
define('APP_MAIL_TO', 'sebstn.hkzt@laposte.net');
define('APP_MAIL_SUBJECT', 'Taekwondo Olivet');

// reCAPTCHA
define('APP_CAPTCHA_SECRET_KEY', '6LfI1FUUAAAAAEgpW-sWlr1DvyAuC02m0KxfS3zi');
define('APP_CAPTCHA_SITE_KEY', '6LfI1FUUAAAAAO8dWCkCNJhX271S1My5lHyHdu1N');