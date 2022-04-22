<?php

declare(strict_types=1);

namespace common\components\FontAwesome\Groups\ChartsAndDiagrams;

final class ChartsAndDiagramsGroup implements ChartsAndDiagramsProInterface
{
    public static array $iconsFree = [
        self::_BARS_PROGRESS,
        self::_CHART_AREA,
        self::_CHART_BAR,
        self::_CHART_COLUMN,
        self::_CHART_GANTT,
        self::_CHART_LINE,
        self::_CHART_PIE,
        self::_CHART_SIMPLE,
        self::_DIAGRAM_NEXT,
        self::_DIAGRAM_PREDECESSOR,
        self::_DIAGRAM_PROJECT,
        self::_DIAGRAM_SUCCESSOR,
        self::_SQUARE_POLL_HORIZONTAL,
        self::_SQUARE_POLL_VERTICAL,
    ];

    public static array $iconsPro = [
        self::_CHART_BULLET,
        self::_CHART_CANDLESTICK,
        self::_CHART_LINE_DOWN,
        self::_CHART_LINE_UP,
        self::_CHART_MIXED,
        self::_CHART_NETWORK,
        self::_CHART_PIE_SIMPLE,
        self::_CHART_PYRAMID,
        self::_CHART_RADAR,
        self::_CHART_SCATTER,
        self::_CHART_SCATTER_3D,
        self::_CHART_SCATTER_BUBBLE,
        self::_CHART_SIMPLE_HORIZONTAL,
        self::_CHART_TREE_MAP,
        self::_CHART_USER,
        self::_CHART_WATERFALL,
        self::_DIAGRAM_CELLS,
        self::_DIAGRAM_LEAN_CANVAS,
        self::_DIAGRAM_NESTED,
        self::_DIAGRAM_PREVIOUS,
        self::_DIAGRAM_SANKEY,
        self::_DIAGRAM_SUBTASK,
        self::_DIAGRAM_VENN,
        self::_FILE_CHART_COLUMN,
        self::_FILE_CHART_PIE,
        self::_SQUARE_KANBAN,
    ];
}
