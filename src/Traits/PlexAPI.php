<?php

namespace Dualznz\LaravelPlex\Traits;

use Dualznz\LaravelPlex\Traits\PlexAPI\Accounts;
use Dualznz\LaravelPlex\Traits\PlexAPI\Databases;
use Dualznz\LaravelPlex\Traits\PlexAPI\Devices;
use Dualznz\LaravelPlex\Traits\PlexAPI\Libraries;
use Dualznz\LaravelPlex\Traits\PlexAPI\Logs;
use Dualznz\LaravelPlex\Traits\PlexAPI\Medias;
use Dualznz\LaravelPlex\Traits\PlexAPI\Playlists;
use Dualznz\LaravelPlex\Traits\PlexAPI\Friends;
use Dualznz\LaravelPlex\Traits\PlexAPI\Resources;
use Dualznz\LaravelPlex\Traits\PlexAPI\Servers;
use Dualznz\LaravelPlex\Traits\PlexAPI\Sessions;
use Dualznz\LaravelPlex\Traits\PlexAPI\Shared;
use Dualznz\LaravelPlex\Traits\PlexAPI\System;
use Dualznz\LaravelPlex\Traits\PlexAPI\Translations;
use Dualznz\LaravelPlex\Traits\PlexAPI\Users;

trait PlexAPI
{
    use Servers;
    use Libraries;
    use Accounts;
    use Devices;
    use Databases;
    use Playlists;
    use Sessions;
    use Medias;
    use System;
    use Users;
    use Friends;
    use Translations;
    use Resources;
}
