#!/bin/bash

# Get deps and enable mbstring extension
./bin/fix-on_create_project_missing_mbstrings_php_extension.php

# Generate app key
php artisan key:generate

# Serve app
php artisan serve
