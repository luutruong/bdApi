<?php

namespace Xfrocks\Api\XF\Transform;

use Xfrocks\Api\Transform\AbstractHandler;

class ThreadPrefix extends AbstractHandler
{
    const KEY_ID = 'prefix_id';
    const KEY_TITLE = 'prefix_title';

    /**
     * @inheritdoc
     */
    public function canView($context)
    {
        return true;
    }

    /**
     * @inheritdoc
     */
    public function getMappings($context)
    {
        return [
            'prefix_id' => self::KEY_ID,
            'title' => self::KEY_TITLE
        ];
    }
}
