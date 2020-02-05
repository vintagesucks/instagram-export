<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * Challenge.
 *
 * @method string getApiPath()
 * @method bool getHideWebviewHeader()
 * @method bool getLock()
 * @method bool getLogout()
 * @method bool getNativeFlow()
 * @method string getUrl()
 * @method bool isApiPath()
 * @method bool isHideWebviewHeader()
 * @method bool isLock()
 * @method bool isLogout()
 * @method bool isNativeFlow()
 * @method bool isUrl()
 * @method $this setApiPath(string $value)
 * @method $this setHideWebviewHeader(bool $value)
 * @method $this setLock(bool $value)
 * @method $this setLogout(bool $value)
 * @method $this setNativeFlow(bool $value)
 * @method $this setUrl(string $value)
 * @method $this unsetApiPath()
 * @method $this unsetHideWebviewHeader()
 * @method $this unsetLock()
 * @method $this unsetLogout()
 * @method $this unsetNativeFlow()
 * @method $this unsetUrl()
 */
class Challenge extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'url'                 => 'string',
        'api_path'            => 'string',
        'hide_webview_header' => 'bool',
        'lock'                => 'bool',
        'logout'              => 'bool',
        'native_flow'         => 'bool',
    ];
}
