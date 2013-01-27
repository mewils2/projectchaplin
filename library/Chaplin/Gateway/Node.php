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
class Chaplin_Gateway_Node
{
    private $_daoNode;

    public function __construct(Chaplin_Dao_Interface_Node $daoNode)
    {
        $this->_daoNode = $daoNode;
    }

    public function getAllNodes()
    {
        return $this->_daoNode->getAllNodes();
    }

    public function getByNodeId($strNodeId)
    {
        return $this->_daoNode->getByNodeId($strNodeId);
    }
    
    public function delete(Chaplin_Model_Node $modelNode)
    {
        return $this->_daoNode->delete($modelNode);
    }

    public function save(Chaplin_Model_Node $modelNode)
    {
        return $this->_daoNode->save($modelNode);
    }
}
