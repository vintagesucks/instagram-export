<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * SharePrefillResponse.
 *
 * @method Model\ServerDataInfo getEntities()
 * @method mixed getFailedViewNames()
 * @method mixed getMessage()
 * @method Model\Ranking getRanking()
 * @method string getStatus()
 * @method Model\_Message[] get_Messages()
 * @method bool isEntities()
 * @method bool isFailedViewNames()
 * @method bool isMessage()
 * @method bool isRanking()
 * @method bool isStatus()
 * @method bool is_Messages()
 * @method $this setEntities(Model\ServerDataInfo $value)
 * @method $this setFailedViewNames(mixed $value)
 * @method $this setMessage(mixed $value)
 * @method $this setRanking(Model\Ranking $value)
 * @method $this setStatus(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetEntities()
 * @method $this unsetFailedViewNames()
 * @method $this unsetMessage()
 * @method $this unsetRanking()
 * @method $this unsetStatus()
 * @method $this unset_Messages()
 */
class SharePrefillResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'ranking'             => 'Model\Ranking',
        'entities'            => 'Model\ServerDataInfo',
        'failed_view_names'   => '',
    ];
}
