<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * DirectCursor.
 *
 * @method string getCursorThreadV2Id()
 * @method string getCursorTimestampSeconds()
 * @method bool isCursorThreadV2Id()
 * @method bool isCursorTimestampSeconds()
 * @method $this setCursorThreadV2Id(string $value)
 * @method $this setCursorTimestampSeconds(string $value)
 * @method $this unsetCursorThreadV2Id()
 * @method $this unsetCursorTimestampSeconds()
 */
class DirectCursor extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'cursor_timestamp_seconds'               => 'string',
        'cursor_thread_v2_id'                    => 'string',
    ];
}
