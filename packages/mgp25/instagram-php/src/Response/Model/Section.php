<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * Section.
 *
 * @method ExploreItemInfo getExploreItemInfo()
 * @method string getFeedType()
 * @method Item[] getItems()
 * @method LayoutContent getLayoutContent()
 * @method string getLayoutType()
 * @method string getTitle()
 * @method string getType()
 * @method bool isExploreItemInfo()
 * @method bool isFeedType()
 * @method bool isItems()
 * @method bool isLayoutContent()
 * @method bool isLayoutType()
 * @method bool isTitle()
 * @method bool isType()
 * @method $this setExploreItemInfo(ExploreItemInfo $value)
 * @method $this setFeedType(string $value)
 * @method $this setItems(Item[] $value)
 * @method $this setLayoutContent(LayoutContent $value)
 * @method $this setLayoutType(string $value)
 * @method $this setTitle(string $value)
 * @method $this setType(string $value)
 * @method $this unsetExploreItemInfo()
 * @method $this unsetFeedType()
 * @method $this unsetItems()
 * @method $this unsetLayoutContent()
 * @method $this unsetLayoutType()
 * @method $this unsetTitle()
 * @method $this unsetType()
 */
class Section extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'type'              => 'string',
        'title'             => 'string',
        'items'             => 'Item[]',
        'layout_type'       => 'string',
        'layout_content'    => 'LayoutContent',
        'feed_type'         => 'string',
        'explore_item_info' => 'ExploreItemInfo',
    ];
}
