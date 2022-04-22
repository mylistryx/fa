<?php

declare(strict_types=1);

namespace common\components\FontAwesome;

use common\components\FontAwesome\Base\FontAwesome;
use common\components\FontAwesome\Groups\Brands\BrandsInterface;

/**
 * Class FAB
 * Used for Brand icons. Works with free.
 * Use FAB::icon(FAB::_ICON_CONSTANT_NAME)
 * Don`t use strings! Use only constants.
 */
final class FAB extends FontAwesome implements BrandsInterface
{
    public static string $cssPrefix = 'fa-brands';
}
