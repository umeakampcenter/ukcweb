<?php

use A17\Twill\Facades\TwillRoutes;

// Menu options in the Twill CMS
TwillRoutes::singleton('frontPage');
TwillRoutes::module('schedules');
TwillRoutes::module('pages');
TwillRoutes::singleton('board');
TwillRoutes::singleton('pricing');
TwillRoutes::singleton('findUs');