<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * Ranking.
 *
 * @method string getExpirationMs()
 * @method mixed getScoreMap()
 * @method string getViewName()
 * @method bool isExpirationMs()
 * @method bool isScoreMap()
 * @method bool isViewName()
 * @method $this setExpirationMs(string $value)
 * @method $this setScoreMap(mixed $value)
 * @method $this setViewName(string $value)
 * @method $this unsetExpirationMs()
 * @method $this unsetScoreMap()
 * @method $this unsetViewName()
 */
class Ranking extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'view_name'               => 'string',
        'score_map'               => '',
        'expiration_ms'           => 'string',
    ];
}
