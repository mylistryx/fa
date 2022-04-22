<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Items;

interface FAFlipEnum
{
    /**
     * Rotate values
     * @see Icon::flip()
     */
    public const FLIP_HORIZONTAL = 'horizontal';
    public const FLIP_VERTICAL = 'vertical';
    public const FLIP_BOTH = 'both';
}
