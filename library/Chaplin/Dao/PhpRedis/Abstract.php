<?php
/**
 * This file is part of Project Chaplin.
 *
 * Project Chaplin is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Project Chaplin is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with Project Chaplin. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    Project Chaplin
 * @author     Dan Dart
 * @copyright  2012-2013 Project Chaplin
 * @license    http://www.gnu.org/licenses/agpl-3.0.html GNU AGPL 3.0
 * @version    git
 * @link       https://github.com/dandart/projectchaplin
**/
abstract class Chaplin_Dao_PhpRedis_Abstract
    implements Chaplin_Dao_Interface
{
    /**
     * Redis instance
    **/
    private $_redis;
    
    /**
     * Gets the Redis instance
     *
     * @return Redis
     * @author Dan Dart
    **/
    protected function _getRedis()
    {
        if(is_null($this->_redis)) {
            $this->_redis = Zend_Registry::get(self::DEFAULT_REGISTRY_KEY);
        }
        
        return $this->_redis;
    }

    /**
     * Injects a redis instance for testing
     *
     * @param Redis $redis 
     * @return void
     * @author Dan Dart
    **/
    public function inject(Redis $redis)
    {
        $this->_redis = $redis;
    }
}
