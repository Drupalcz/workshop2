<?php
/**
 * @file
 * Tento soubor nakopírujte do web/sites/default jako setting.php.
 */

$settings['hash_salt'] = 'VhlGKZ86xCLI3OdDWwNk1gMJJIi-Wecgossc97HwhbnBEAyW3OzuxZwEfUQ0s99Bj3KFQFhzog';

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/workshop.services.yml';

$databases = [];
$databases['default']['default'] = [
  'database' => 'drupal8',
  'username' => 'drupal8',
  'password' => 'drupal8',
  'prefix' => '',
  'host' => 'database',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
];

$config_directories['sync'] = '../config/sync';

if (file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/' . $site_path . '/settings.local.php';
}
