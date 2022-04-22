<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Base;

use common\components\FontAwesome\Groups\Accessibility\AccessibilityFreeInterface;
use common\components\FontAwesome\Groups\Alphabet\AlphabetFreeInterface;
use common\components\FontAwesome\Groups\Animals\AnimalsFreeInterface;
use common\components\FontAwesome\Groups\Numbers\NumbersFreeInterface;

abstract class FAFree extends FontAwesome implements AccessibilityFreeInterface,
                                                     AlphabetFreeInterface,
                                                     AnimalsFreeInterface,
                                                     NumbersFreeInterface
{

}
