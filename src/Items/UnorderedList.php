<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Items;

use common\components\FontAwesome\Base\FontAwesome;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

/**
 * Class UnorderedList
 */
class UnorderedList
{
    protected string $iconCssPrefix = 'fa';
    protected array $options = [];
    protected array $items = [];

    /**
     * @param string $iconCssPrefix
     * @param array $options
     */
    public function __construct(string $iconCssPrefix, array $options = [])
    {
        $this->iconCssPrefix = $iconCssPrefix;

        Html::addCssClass($options, FontAwesome::$basePrefix . '-ul');

        $options['item'] = function ($item, $index) {
            return call_user_func($item, $index);
        };

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return Html::ul($this->items, $this->options);
    }

    /**
     * @param string $label
     * @param array $options
     * @return $this
     */
    public function item(string $label, array $options = []): self
    {
        $this->items[] = function ($index) use ($label, $options) {
            $tag = ArrayHelper::remove($options, 'tag', 'li');

            $icon = ArrayHelper::remove($options, 'icon');
            $icon = empty($icon)
                ? null
                : (is_string($icon) ? (string)(new Icon($this->iconCssPrefix, $icon))->li() : $icon);

            $content = trim($icon . $label);

            return Html::tag($tag, $content, $options);
        };

        return $this;
    }
}
