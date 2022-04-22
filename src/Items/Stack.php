<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Items;

use common\components\FontAwesome\Base\FontAwesome;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class Stack
{
    private string $iconCssPrefix = 'fa';
    private array $options = [];
    private ?string $text_front = null;
    private ?Icon $iconFront = null;
    private ?Icon $iconBack = null;

    /**
     * @param string $iconCssPrefix
     * @param array $options
     */
    public function __construct(string $iconCssPrefix, array $options = [])
    {
        $this->iconCssPrefix = $iconCssPrefix;

        Html::addCssClass($options, FontAwesome::$basePrefix . '-stack');

        $this->options = $options;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        $options = $this->options;

        $tag = ArrayHelper::remove($options, 'tag', 'span');

        $template = ArrayHelper::remove($options, 'template', '{back}{front}');

        $iconBack = $this->iconBack instanceof Icon
            ? $this->iconBack->addCssClass(FontAwesome::$basePrefix . '-stack-2x')
            : null;

        if ($this->text_front !== null) {
            $contentFront = $this->text_front;
        } else {
            $contentFront = $this->iconFront instanceof Icon
                ? $this->iconFront->addCssClass(FontAwesome::$basePrefix . '-stack-1x')
                : null;
        }

        $content = str_replace(['{back}', '{front}'], [$iconBack, $contentFront], $template);

        return Html::tag($tag, $content, $options);
    }

    /**
     * @param string|Icon $icon
     * @param array $options
     * @return $this
     */
    public function icon($icon, array $options = []): self
    {
        if (is_string($icon)) {
            $icon = new Icon($this->iconCssPrefix, $icon, $options);
        }

        $this->iconFront = $icon;

        return $this;
    }

    /**
     * @param string $text
     * @param array $options
     * @return $this
     */
    public function text(string $text = '', array $options = []): self
    {
        $tag = ArrayHelper::remove($options, 'tag', 'span');
        Html::addCssClass($options, FontAwesome::$basePrefix . '-stack-1x');
        $this->text_front = Html::tag($tag, $text, $options);

        return $this;
    }

    /**
     * @param string|Icon $icon
     * @param array $options
     * @return $this
     */
    public function on($icon, array $options = []): self
    {
        if (is_string($icon)) {
            $icon = new Icon($this->iconCssPrefix, $icon, $options);
        }
        $this->iconBack = $icon;

        return $this;
    }
}
