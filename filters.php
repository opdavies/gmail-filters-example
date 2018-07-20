<?php

use Opdavies\GmailFilterBuilder\Filter;

require_once __DIR__ . '/vendor/autoload.php';

$filters = [];

$filters[] = Filter::create()
    ->from('foo@example.com')
    ->labelAndArchive('Example');

$filters[] = Filter::create()
    ->from('bar@example.com')
    ->important();

return $filters;
