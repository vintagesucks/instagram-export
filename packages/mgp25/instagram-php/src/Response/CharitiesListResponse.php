<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * CharitiesListResponse.
 *
 * @method Model\User[] getFollowedCharities()
 * @method mixed getMessage()
 * @method Model\User[] getSearchedCharities()
 * @method string getStatus()
 * @method Model\User[] getSuggestedCharities()
 * @method Model\_Message[] get_Messages()
 * @method bool isFollowedCharities()
 * @method bool isMessage()
 * @method bool isSearchedCharities()
 * @method bool isStatus()
 * @method bool isSuggestedCharities()
 * @method bool is_Messages()
 * @method $this setFollowedCharities(Model\User[] $value)
 * @method $this setMessage(mixed $value)
 * @method $this setSearchedCharities(Model\User[] $value)
 * @method $this setStatus(string $value)
 * @method $this setSuggestedCharities(Model\User[] $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetFollowedCharities()
 * @method $this unsetMessage()
 * @method $this unsetSearchedCharities()
 * @method $this unsetStatus()
 * @method $this unsetSuggestedCharities()
 * @method $this unset_Messages()
 */
class CharitiesListResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'followed_charities'                => 'Model\User[]',
        'suggested_charities'               => 'Model\User[]',
        'searched_charities'                => 'Model\User[]',
    ];
}
