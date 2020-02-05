<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * GraphNode.
 *
 * @method CatalogData getCatalogItems()
 * @method string getName()
 * @method string get__Typename()
 * @method bool isCatalogItems()
 * @method bool isName()
 * @method bool is__Typename()
 * @method $this setCatalogItems(CatalogData $value)
 * @method $this setName(string $value)
 * @method $this set__Typename(string $value)
 * @method $this unsetCatalogItems()
 * @method $this unsetName()
 * @method $this unset__Typename()
 */
class GraphNode extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        '__typename'    => 'string',
        'name'          => 'string',
        'catalog_items' => 'CatalogData',
    ];
}
