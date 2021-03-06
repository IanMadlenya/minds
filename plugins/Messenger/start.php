<?php
/**
 * Minds Messenger
 *
 * @package Minds
 * @subpackage Plugin/Messenger
 * @author Mark Harding (mark@minds.com)
 *
 */

namespace Minds\Plugin\Messenger;

use Minds\Components;
use Minds\Core;
use Minds\Api;
use Minds\Plugin\Messenger\Core\Events;

class start extends Components\Plugin
{
    public function init()
    {
        Api\Routes::add('v1/gatherings', '\\Minds\\Plugin\\Messenger\\Controllers\\api\\v1\\conversations');
        Api\Routes::add('v1/conversations', '\\Minds\\Plugin\\Messenger\\Controllers\\api\\v1\\conversations');
        Api\Routes::add('v1/keys', '\\Minds\\Plugin\\Messenger\\Controllers\\api\\v1\\keys');

        Api\Routes::add('v2/conversations', '\\Minds\\Plugin\\Messenger\\Controllers\\api\\v2\\conversations');
        Api\Routes::add('v2/conversations/search', '\\Minds\\Plugin\\Messenger\\Controllers\\api\\v2\\search');
        Api\Routes::add('v2/keys', '\\Minds\\Plugin\\Messenger\\Controllers\\api\\v2\\keys');

        (new Events)->setup();
    }
}
