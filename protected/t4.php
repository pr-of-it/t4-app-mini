#!/usr/bin/env php
<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/boot.php';
require __DIR__ . '/autoload.php';

\T4\Console\Application
    ::getInstance()
    ->run();