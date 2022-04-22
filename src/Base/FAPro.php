<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Base;

use common\components\FontAwesome\Groups\Accessibility\AccessibilityFreeInterface;
use common\components\FontAwesome\Groups\Accessibility\AccessibilityProInterface;

abstract class FAPro extends FontAwesome implements AccessibilityFreeInterface, AccessibilityProInterface
{
}
