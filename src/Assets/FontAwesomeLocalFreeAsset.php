<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Assets;

use yii\web\AssetBundle;

class FontAwesomeLocalFreeAsset extends AssetBundle
{
    public $sourcePath = '@common/components/FontAwesome/Sources/6.1.1/free';

    public $css = [
        'css/all.min.css',
    ];
}
