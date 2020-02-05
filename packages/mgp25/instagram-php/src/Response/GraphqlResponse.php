<?php

namespace InstagramAPI\Response;

use InstagramAPI\Response;

/**
 * GraphqlResponse.
 *
 * @method Model\GraphData getData()
 * @method mixed getMessage()
 * @method string getStatus()
 * @method Model\_Message[] get_Messages()
 * @method bool isData()
 * @method bool isMessage()
 * @method bool isStatus()
 * @method bool is_Messages()
 * @method $this setData(Model\GraphData $value)
 * @method $this setMessage(mixed $value)
 * @method $this setStatus(string $value)
 * @method $this set_Messages(Model\_Message[] $value)
 * @method $this unsetData()
 * @method $this unsetMessage()
 * @method $this unsetStatus()
 * @method $this unset_Messages()
 */
class GraphqlResponse extends Response
{
    const JSON_PROPERTY_MAP = [
        'data'            => 'Model\GraphData',
    ];

    public function getGenderGraphData()
    {
        return $this->_getProperty('data')->getUser()->getBusinessManager()->getFollowersUnit()->getGenderGraph();
    }

    public function getAllAgeGraphData()
    {
        return $this->_getProperty('data')->getUser()->getBusinessManager()->getFollowersUnit()->getAllFollowersAgeGraph();
    }

    public function getMenAgeGraphData()
    {
        return $this->_getProperty('data')->getUser()->getBusinessManager()->getFollowersUnit()->getMenFollowersAgeGraph();
    }

    public function getWomenAgeGraphData()
    {
        return $this->_getProperty('data')->getUser()->getBusinessManager()->getFollowersUnit()->getWomenFollowersAgeGraph();
    }

    public function getFollowersTopCities()
    {
        return $this->_getProperty('data')->getUser()->getBusinessManager()->getFollowersUnit()->getFollowersTopCitiesGraph();
    }

    public function getFollowersTopCountries()
    {
        return $this->_getProperty('data')->getUser()->getBusinessManager()->getFollowersUnit()->getFollowersTopCountriesGraph();
    }

    public function getDailyWeekFollowersGraphData()
    {
        return $this->_getProperty('data')->getUser()->getBusinessManager()->getFollowersUnit()->getWeekDailyFollowersGraph();
    }

    public function getDaysHourlyFollowersGraphData()
    {
        return $this->_getProperty('data')->getUser()->getBusinessManager()->getFollowersUnit()->getDaysHourlyFollowersGraph();
    }

    /**
     * Checks if the response was successful.
     *
     * @return bool
     */
    public function isOk()
    {
        return true;
    }
}
