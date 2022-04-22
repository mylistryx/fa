<?php

declare(strict_types=1);

namespace common\components\FontAwesome;

use common\components\FontAwesome\Base\FAPro;

/**
 * Class FAD
 * Uses for Thin icons. Only with Pro config!
 * Use FAT::icon(FAT::_ICON_CONSTANT_NAME).
 * Don`t use strings! Use only constants.
 */
final class FAT extends FAPro
{
    public static string $cssPrefix = 'fa-thin';
}
