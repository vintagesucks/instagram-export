<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * ExploreResponse.
 *
 * @method bool getAutoLoadMoreEnabled()
 * @method Model\ExploreItem[] getItems()
 * @method string getMaxId()
 * @method mixed getMessage()
 * @method bool getMoreAvailable()
 * @method string getNextMaxId()
 * @method int getNumResults()
 * @method string getRankToken()
 * @method Model\Section[] getSectionalItems()
 * @method string getStatus()
 * @method Model\_Message[] get_Messages()
 * @method bool isAutoLoadMoreEnabled()
 * @method bool isItems()
 * @method bool isMaxId()
 * @method bool isMessage()
 * @method bool isMoreAvailable()
 * @method bool isNextMaxId()
 * @method bool isNumResults()
 * @method bool isRankToken()
 * @method bool isSectionalItems()
 * @method bool isStatus()
 * @method bool is_Messages()
 * @method $this setAutoLoadMoreEnabled(bool $value)
 * @method $this setItems(Model\ExploreItem[] $value)
 * @method $this setMaxId(string $value)
 * @method $this setMessage(mixed $value)
 * @method $this setMoreAvailable(bool $value)
 * @method $this setNextMaxId(string $value)
 * @method $this setNumResults(int $value)
 * @method $this setRankToken(string $value)
 * @method $this setSectionalItems(Model\Section[] $value)
 * @method $this setStatus(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetAutoLoadMoreEnabled()
 * @method $this unsetItems()
 * @method $this unsetMaxId()
 * @method $this unsetMessage()
 * @method $this unsetMoreAvailable()
 * @method $this unsetNextMaxId()
 * @method $this unsetNumResults()
 * @method $this unsetRankToken()
 * @method $this unsetSectionalItems()
 * @method $this unsetStatus()
 * @method $this unset_Messages()
 */
class ExploreResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'num_results'            => 'int',
        'auto_load_more_enabled' => 'bool',
        'items'                  => 'Model\ExploreItem[]',
        'sectional_items'        => 'Model\Section[]',
        'more_available'         => 'bool',
        'next_max_id'            => 'string',
        'max_id'                 => 'string',
        'rank_token'             => 'string',
    ];
}
