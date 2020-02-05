<?php

namespace InstagramAPI\Response\Model;

use InstagramAPI\AutoPropertyMapper;

/**
 * FollowersUnit.
 *
 * @method DataGraph getAllFollowersAgeGraph()
 * @method int getFollowersDeltaFromLastWeek()
 * @method DataGraph getFollowersTopCitiesGraph()
 * @method DataGraph getFollowersTopCountriesGraph()
 * @method string getFollowersUnitState()
 * @method DataGraph getGenderGraph()
 * @method DataGraph getMenFollowersAgeGraph()
 * @method DataGraph getWeekDailyFollowersGraph()
 * @method DataGraph getWomenFollowersAgeGraph()
 * @method bool isAllFollowersAgeGraph()
 * @method bool isFollowersDeltaFromLastWeek()
 * @method bool isFollowersTopCitiesGraph()
 * @method bool isFollowersTopCountriesGraph()
 * @method bool isFollowersUnitState()
 * @method bool isGenderGraph()
 * @method bool isMenFollowersAgeGraph()
 * @method bool isWeekDailyFollowersGraph()
 * @method bool isWomenFollowersAgeGraph()
 * @method $this setAllFollowersAgeGraph(DataGraph $value)
 * @method $this setFollowersDeltaFromLastWeek(int $value)
 * @method $this setFollowersTopCitiesGraph(DataGraph $value)
 * @method $this setFollowersTopCountriesGraph(DataGraph $value)
 * @method $this setFollowersUnitState(string $value)
 * @method $this setGenderGraph(DataGraph $value)
 * @method $this setMenFollowersAgeGraph(DataGraph $value)
 * @method $this setWeekDailyFollowersGraph(DataGraph $value)
 * @method $this setWomenFollowersAgeGraph(DataGraph $value)
 * @method $this unsetAllFollowersAgeGraph()
 * @method $this unsetFollowersDeltaFromLastWeek()
 * @method $this unsetFollowersTopCitiesGraph()
 * @method $this unsetFollowersTopCountriesGraph()
 * @method $this unsetFollowersUnitState()
 * @method $this unsetGenderGraph()
 * @method $this unsetMenFollowersAgeGraph()
 * @method $this unsetWeekDailyFollowersGraph()
 * @method $this unsetWomenFollowersAgeGraph()
 */
class FollowersUnit extends AutoPropertyMapper
{
    const JSON_PROPERTY_MAP = [
        'followers_unit_state'                  => 'string',
        'followers_delta_from_last_week'        => 'int',
        'gender_graph'                          => 'DataGraph',
        'all_followers_age_graph'               => 'DataGraph',
        'men_followers_age_graph'               => 'DataGraph',
        'women_followers_age_graph'             => 'DataGraph',
        'followers_top_cities_graph'            => 'DataGraph',
        'followers_top_countries_graph'         => 'DataGraph',
        'week_daily_followers_graph'            => 'DataGraph',
    ];
}
