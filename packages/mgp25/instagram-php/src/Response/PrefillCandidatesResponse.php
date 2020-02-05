<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * PrefillCandidatesResponse.
 *
 * @method mixed getMessage()
 * @method Model\Prefill[] getPrefills()
 * @method string getStatus()
 * @method Model\_Message[] get_Messages()
 * @method bool isMessage()
 * @method bool isPrefills()
 * @method bool isStatus()
 * @method bool is_Messages()
 * @method $this setMessage(mixed $value)
 * @method $this setPrefills(Model\Prefill[] $value)
 * @method $this setStatus(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetMessage()
 * @method $this unsetPrefills()
 * @method $this unsetStatus()
 * @method $this unset_Messages()
 */
class PrefillCandidatesResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'prefills'             => 'Model\Prefill[]',
    ];
}
