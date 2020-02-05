<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * SuggestedUsers.
 *
 * @method mixed getAutoDvance()
 * @method string getId()
 * @method mixed getLandingSiteTitle()
 * @method mixed getLandingSiteType()
 * @method mixed getNetegoType()
 * @method SuggestionCard[] getSuggestionCards()
 * @method Suggestion[] getSuggestions()
 * @method mixed getTitle()
 * @method string getTrackingToken()
 * @method mixed getType()
 * @method mixed getUpsellFbPos()
 * @method mixed getViewAllText()
 * @method bool isAutoDvance()
 * @method bool isId()
 * @method bool isLandingSiteTitle()
 * @method bool isLandingSiteType()
 * @method bool isNetegoType()
 * @method bool isSuggestionCards()
 * @method bool isSuggestions()
 * @method bool isTitle()
 * @method bool isTrackingToken()
 * @method bool isType()
 * @method bool isUpsellFbPos()
 * @method bool isViewAllText()
 * @method $this setAutoDvance(mixed $value)
 * @method $this setId(string $value)
 * @method $this setLandingSiteTitle(mixed $value)
 * @method $this setLandingSiteType(mixed $value)
 * @method $this setNetegoType(mixed $value)
 * @method $this setSuggestionCards(SuggestionCard[] $value)
 * @method $this setSuggestions(Suggestion[] $value)
 * @method $this setTitle(mixed $value)
 * @method $this setTrackingToken(string $value)
 * @method $this setType(mixed $value)
 * @method $this setUpsellFbPos(mixed $value)
 * @method $this setViewAllText(mixed $value)
 * @method $this unsetAutoDvance()
 * @method $this unsetId()
 * @method $this unsetLandingSiteTitle()
 * @method $this unsetLandingSiteType()
 * @method $this unsetNetegoType()
 * @method $this unsetSuggestionCards()
 * @method $this unsetSuggestions()
 * @method $this unsetTitle()
 * @method $this unsetTrackingToken()
 * @method $this unsetType()
 * @method $this unsetUpsellFbPos()
 * @method $this unsetViewAllText()
 */
class SuggestedUsers extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'id'                 => 'string',
        'view_all_text'      => '',
        'title'              => '',
        'auto_dvance'        => '',
        'type'               => '',
        'tracking_token'     => 'string',
        'landing_site_type'  => '',
        'landing_site_title' => '',
        'upsell_fb_pos'      => '',
        'suggestions'        => 'Suggestion[]',
        'suggestion_cards'   => 'SuggestionCard[]',
        'netego_type'        => '',
    ];
}
