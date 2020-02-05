<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * ArlinkDownloadInfoResponse.
 *
 * @method string getChecksum()
 * @method string getDownloadUrl()
 * @method string getFileSize()
 * @method mixed getMessage()
 * @method string getStatus()
 * @method string getVersion()
 * @method Model\_Message[] get_Messages()
 * @method bool isChecksum()
 * @method bool isDownloadUrl()
 * @method bool isFileSize()
 * @method bool isMessage()
 * @method bool isStatus()
 * @method bool isVersion()
 * @method bool is_Messages()
 * @method $this setChecksum(string $value)
 * @method $this setDownloadUrl(string $value)
 * @method $this setFileSize(string $value)
 * @method $this setMessage(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this setVersion(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetChecksum()
 * @method $this unsetDownloadUrl()
 * @method $this unsetFileSize()
 * @method $this unsetMessage()
 * @method $this unsetStatus()
 * @method $this unsetVersion()
 * @method $this unset_Messages()
 */
class ArlinkDownloadInfoResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'checksum'             => 'string',
        'download_url'         => 'string',
        'file_size'            => 'string',
        'version'              => 'string',
    ];
}
