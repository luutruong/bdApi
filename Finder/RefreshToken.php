<?php

namespace Xfrocks\Api\Finder;

use Xfrocks\Api\Admin\Controller\Entity;

class RefreshToken extends \XF\Mvc\Entity\Finder
{
    /**
     * @param Entity $controller
     * @param array $filters
     * @return array
     */
    public function entityDoListData($controller, array $filters)
    {
        $this->with(['Client', 'User']);
        $this->setDefaultOrder('refresh_token_id', 'desc');

        return $filters;
    }

    /**
     * @param string $match
     * @param bool $prefixMatch
     * @return RefreshToken
     */
    public function entityDoXfFilter($match, $prefixMatch = false)
    {
        if ($match) {
            $this->where(
                $this->columnUtf8('refresh_token_text'),
                'LIKE',
                $this->escapeLike($match, $prefixMatch ? '?%' : '%?%')
            );
        }

        return $this;
    }
}
