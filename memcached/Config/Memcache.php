<?php
return array (
  'stats_api' => 'Server',
  'slabs_api' => 'Server',
  'items_api' => 'Server',
  'get_api' => 'Memcached',
  'set_api' => 'Memcached',
  'delete_api' => 'Memcached',
  'flush_all_api' => 'Memcached',
  'connection_timeout' => '1',
  'max_item_dump' => '100',
  'refresh_rate' => 2,
  'memory_alert' => '80',
  'hit_rate_alert' => '90',
  'eviction_alert' => '0',
  'file_path' => 'Temp/',
  'servers' => 
  array (
    'Default' => 
    array (
      '127.0.0.1:11211' => 
      array (
        'hostname' => '127.0.0.1',
        'port' => '11211',
      ),
    ),
  ),
);