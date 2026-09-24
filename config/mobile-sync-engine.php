<?php

return [
    'enabled' => env('MOBILE_SYNC_ENGINE_ENABLED', true),
    'timeout' => env('MOBILE_SYNC_ENGINE_TIMEOUT', 30),
    'log_channel' => env('MOBILE_SYNC_ENGINE_LOG', 'stack'),
];
