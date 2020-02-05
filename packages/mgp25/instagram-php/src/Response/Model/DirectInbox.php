<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * DirectInbox.
 *
 * @method bool getBlendedInboxEnabled()
 * @method bool getHasOlder()
 * @method DirectCursor getNextCursor()
 * @method DirectCursor getPrevCursor()
 * @method DirectThread[] getThreads()
 * @method int getUnseenCount()
 * @method string getUnseenCountTs()
 * @method bool isBlendedInboxEnabled()
 * @method bool isHasOlder()
 * @method bool isNextCursor()
 * @method bool isPrevCursor()
 * @method bool isThreads()
 * @method bool isUnseenCount()
 * @method bool isUnseenCountTs()
 * @method $this setBlendedInboxEnabled(bool $value)
 * @method $this setHasOlder(bool $value)
 * @method $this setNextCursor(DirectCursor $value)
 * @method $this setPrevCursor(DirectCursor $value)
 * @method $this setThreads(DirectThread[] $value)
 * @method $this setUnseenCount(int $value)
 * @method $this setUnseenCountTs(string $value)
 * @method $this unsetBlendedInboxEnabled()
 * @method $this unsetHasOlder()
 * @method $this unsetNextCursor()
 * @method $this unsetPrevCursor()
 * @method $this unsetThreads()
 * @method $this unsetUnseenCount()
 * @method $this unsetUnseenCountTs()
 */
class DirectInbox extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'has_older'             => 'bool',
        'unseen_count'          => 'int',
        'unseen_count_ts'       => 'string', // Is a timestamp.
        'blended_inbox_enabled' => 'bool',
        'threads'               => 'DirectThread[]',
        'next_cursor'           => 'DirectCursor',
        'prev_cursor'           => 'DirectCursor',
    ];
}
