<?php
/**
 * QueueMessage
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * QueueMessage Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class QueueMessage implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'acl' => '\Swagger\Client\Model\ACL',
        '_type' => 'string',
        'expires' => '\DateTime',
        '_id' => 'string',
        'delay' => '\DateTime',
        'timeout' => 'int',
        '_modified_columns' => 'string[]',
        '_is_modified' => 'bool',
        'message' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'acl' => 'ACL',
        '_type' => '_type',
        'expires' => 'expires',
        '_id' => '_id',
        'delay' => 'delay',
        'timeout' => 'timeout',
        '_modified_columns' => '_modifiedColumns',
        '_is_modified' => '_isModified',
        'message' => 'message'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'acl' => 'setAcl',
        '_type' => 'setType',
        'expires' => 'setExpires',
        '_id' => 'setId',
        'delay' => 'setDelay',
        'timeout' => 'setTimeout',
        '_modified_columns' => 'setModifiedColumns',
        '_is_modified' => 'setIsModified',
        'message' => 'setMessage'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'acl' => 'getAcl',
        '_type' => 'getType',
        'expires' => 'getExpires',
        '_id' => 'getId',
        'delay' => 'getDelay',
        'timeout' => 'getTimeout',
        '_modified_columns' => 'getModifiedColumns',
        '_is_modified' => 'getIsModified',
        'message' => 'getMessage'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $acl 
      * @var \Swagger\Client\Model\ACL
      */
    protected $acl;
    
    /**
      * $_type 
      * @var string
      */
    protected $_type = 'queue-message';
    
    /**
      * $expires 
      * @var \DateTime
      */
    protected $expires;
    
    /**
      * $_id 
      * @var string
      */
    protected $_id;
    
    /**
      * $delay 
      * @var \DateTime
      */
    protected $delay;
    
    /**
      * $timeout 
      * @var int
      */
    protected $timeout = 1800;
    
    /**
      * $_modified_columns 
      * @var string[]
      */
    protected $_modified_columns;
    
    /**
      * $_is_modified 
      * @var bool
      */
    protected $_is_modified = true;
    
    /**
      * $message 
      * @var string
      */
    protected $message;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->acl = $data["acl"];
            $this->_type = $data["_type"];
            $this->expires = $data["expires"];
            $this->_id = $data["_id"];
            $this->delay = $data["delay"];
            $this->timeout = $data["timeout"];
            $this->_modified_columns = $data["_modified_columns"];
            $this->_is_modified = $data["_is_modified"];
            $this->message = $data["message"];
        }
    }
    
    /**
     * Gets acl
     * @return \Swagger\Client\Model\ACL
     */
    public function getAcl()
    {
        return $this->acl;
    }
  
    /**
     * Sets acl
     * @param \Swagger\Client\Model\ACL $acl 
     * @return $this
     */
    public function setAcl($acl)
    {
        
        $this->acl = $acl;
        return $this;
    }
    
    /**
     * Gets _type
     * @return string
     */
    public function getType()
    {
        return $this->_type;
    }
  
    /**
     * Sets _type
     * @param string $_type 
     * @return $this
     */
    public function setType($_type)
    {
        
        $this->_type = $_type;
        return $this;
    }
    
    /**
     * Gets expires
     * @return \DateTime
     */
    public function getExpires()
    {
        return $this->expires;
    }
  
    /**
     * Sets expires
     * @param \DateTime $expires 
     * @return $this
     */
    public function setExpires($expires)
    {
        
        $this->expires = $expires;
        return $this;
    }
    
    /**
     * Gets _id
     * @return string
     */
    public function getId()
    {
        return $this->_id;
    }
  
    /**
     * Sets _id
     * @param string $_id 
     * @return $this
     */
    public function setId($_id)
    {
        
        $this->_id = $_id;
        return $this;
    }
    
    /**
     * Gets delay
     * @return \DateTime
     */
    public function getDelay()
    {
        return $this->delay;
    }
  
    /**
     * Sets delay
     * @param \DateTime $delay 
     * @return $this
     */
    public function setDelay($delay)
    {
        
        $this->delay = $delay;
        return $this;
    }
    
    /**
     * Gets timeout
     * @return int
     */
    public function getTimeout()
    {
        return $this->timeout;
    }
  
    /**
     * Sets timeout
     * @param int $timeout 
     * @return $this
     */
    public function setTimeout($timeout)
    {
        
        $this->timeout = $timeout;
        return $this;
    }
    
    /**
     * Gets _modified_columns
     * @return string[]
     */
    public function getModifiedColumns()
    {
        return $this->_modified_columns;
    }
  
    /**
     * Sets _modified_columns
     * @param string[] $_modified_columns 
     * @return $this
     */
    public function setModifiedColumns($_modified_columns)
    {
        
        $this->_modified_columns = $_modified_columns;
        return $this;
    }
    
    /**
     * Gets _is_modified
     * @return bool
     */
    public function getIsModified()
    {
        return $this->_is_modified;
    }
  
    /**
     * Sets _is_modified
     * @param bool $_is_modified 
     * @return $this
     */
    public function setIsModified($_is_modified)
    {
        
        $this->_is_modified = $_is_modified;
        return $this;
    }
    
    /**
     * Gets message
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
  
    /**
     * Sets message
     * @param string $message 
     * @return $this
     */
    public function setMessage($message)
    {
        
        $this->message = $message;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}