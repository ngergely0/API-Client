<?php
include './vendor/autoload.php';

use App\Html\OageCounties;
use App\Html\Request;

PageCounties::head();
PageCounties::nav();
Request::handle();
PageCounties::footer();