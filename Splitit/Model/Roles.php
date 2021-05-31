<?php
/**
 * Roles
 *
 * PHP version 5
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * splitit-web-api-public-sdk
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SplititSdkClient\Model;

use \ArrayAccess;
use \SplititSdkClient\ObjectSerializer;

/**
 * Roles Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Roles implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Roles';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'role_strength' => 'int',
        'business_party' => '\SplititSdkClient\Model\BusinessParty',
        'business_activities' => '\SplititSdkClient\Model\BusinessActivity[]',
        'business_activities_serialized' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'name' => null,
        'role_strength' => 'int32',
        'business_party' => null,
        'business_activities' => null,
        'business_activities_serialized' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'Id',
        'name' => 'Name',
        'role_strength' => 'RoleStrength',
        'business_party' => 'BusinessParty',
        'business_activities' => 'BusinessActivities',
        'business_activities_serialized' => 'BusinessActivitiesSerialized'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'role_strength' => 'setRoleStrength',
        'business_party' => 'setBusinessParty',
        'business_activities' => 'setBusinessActivities',
        'business_activities_serialized' => 'setBusinessActivitiesSerialized'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'role_strength' => 'getRoleStrength',
        'business_party' => 'getBusinessParty',
        'business_activities' => 'getBusinessActivities',
        'business_activities_serialized' => 'getBusinessActivitiesSerialized'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['role_strength'] = isset($data['role_strength']) ? $data['role_strength'] : null;
        $this->container['business_party'] = isset($data['business_party']) ? $data['business_party'] : null;
        $this->container['business_activities'] = isset($data['business_activities']) ? $data['business_activities'] : null;
        $this->container['business_activities_serialized'] = isset($data['business_activities_serialized']) ? $data['business_activities_serialized'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['role_strength'] === null) {
            $invalidProperties[] = "'role_strength' can't be null";
        }
        if ($this->container['business_party'] === null) {
            $invalidProperties[] = "'business_party' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets role_strength
     *
     * @return int
     */
    public function getRoleStrength()
    {
        return $this->container['role_strength'];
    }

    /**
     * Sets role_strength
     *
     * @param int $role_strength role_strength
     *
     * @return $this
     */
    public function setRoleStrength($role_strength)
    {
        $this->container['role_strength'] = $role_strength;

        return $this;
    }

    /**
     * Gets business_party
     *
     * @return \SplititSdkClient\Model\BusinessParty
     */
    public function getBusinessParty()
    {
        return $this->container['business_party'];
    }

    /**
     * Sets business_party
     *
     * @param \SplititSdkClient\Model\BusinessParty $business_party business_party
     *
     * @return $this
     */
    public function setBusinessParty($business_party)
    {
        $this->container['business_party'] = $business_party;

        return $this;
    }

    /**
     * Gets business_activities
     *
     * @return \SplititSdkClient\Model\BusinessActivity[]
     */
    public function getBusinessActivities()
    {
        return $this->container['business_activities'];
    }

    /**
     * Sets business_activities
     *
     * @param \SplititSdkClient\Model\BusinessActivity[] $business_activities business_activities
     *
     * @return $this
     */
    public function setBusinessActivities($business_activities)
    {
        $this->container['business_activities'] = $business_activities;

        return $this;
    }

    /**
     * Gets business_activities_serialized
     *
     * @return string
     */
    public function getBusinessActivitiesSerialized()
    {
        return $this->container['business_activities_serialized'];
    }

    /**
     * Sets business_activities_serialized
     *
     * @param string $business_activities_serialized business_activities_serialized
     *
     * @return $this
     */
    public function setBusinessActivitiesSerialized($business_activities_serialized)
    {
        $this->container['business_activities_serialized'] = $business_activities_serialized;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

