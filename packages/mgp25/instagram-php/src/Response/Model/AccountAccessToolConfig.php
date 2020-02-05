<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * AccountAccessToolConfig.
 *
 * @method string getCsrfToken()
 * @method User getViewer()
 * @method string getViewerId()
 * @method bool isCsrfToken()
 * @method bool isViewer()
 * @method bool isViewerId()
 * @method $this setCsrfToken(string $value)
 * @method $this setViewer(User $value)
 * @method $this setViewerId(string $value)
 * @method $this unsetCsrfToken()
 * @method $this unsetViewer()
 * @method $this unsetViewerId()
 */
class AccountAccessToolConfig extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'csrf_token'                 => 'string',
        'viewer'                     => 'User',
        'viewerId'                   => 'string',
    ];
}
