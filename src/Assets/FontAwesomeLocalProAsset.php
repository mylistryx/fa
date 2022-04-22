<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Assets;

use yii\web\AssetBundle;

class FontAwesomeLocalProAsset extends AssetBundle
{
    public $sourcePath = '@common/components/FontAwesome/Sources/6.1.1/pro';

    public $css = [
        'css/all.min.css',
    ];
}
