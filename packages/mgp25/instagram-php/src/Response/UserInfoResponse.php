<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * UserInfoResponse.
 *
 * @method mixed getEffectPreviews()
 * @method mixed getMegaphone()
 * @method mixed getMessage()
 * @method string getStatus()
 * @method Model\User getUser()
 * @method Model\_Message[] get_Messages()
 * @method bool isEffectPreviews()
 * @method bool isMegaphone()
 * @method bool isMessage()
 * @method bool isStatus()
 * @method bool isUser()
 * @method bool is_Messages()
 * @method $this setEffectPreviews(mixed $value)
 * @method $this setMegaphone(mixed $value)
 * @method $this setMessage(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this setUser(Model\User $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetEffectPreviews()
 * @method $this unsetMegaphone()
 * @method $this unsetMessage()
 * @method $this unsetStatus()
 * @method $this unsetUser()
 * @method $this unset_Messages()
 */
class UserInfoResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'megaphone'       => '',
        'user'            => 'Model\User',
        'effect_previews' => '',
    ];
}
