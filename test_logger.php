<?php

require 'vendor/autoload.php';

use App\LoggerSetup;

// Create a new LoggerSetup instance
$logger = new LoggerSetup('app_channel');

// Test logging various levels
$logger->logInfo('This is an info message');
$logger->logError('This is an error message');
$logger->logDebug('This is a debug message');
