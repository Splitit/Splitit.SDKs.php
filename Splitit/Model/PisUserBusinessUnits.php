<?php
/**
 * PisUserBusinessUnits
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
 * PisUserBusinessUnits Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PisUserBusinessUnits implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PisUserBusinessUnits';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'pis_user_unique_id' => 'string',
        'pis_user_id' => 'int',
        'business_unit_id' => 'int',
        'business_unit' => '\SplititSdkClient\Model\BusinessUnits',
        'pis_user' => 'object'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'pis_user_unique_id' => null,
        'pis_user_id' => 'int64',
        'business_unit_id' => 'int64',
        'business_unit' => null,
        'pis_user' => null
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
        'pis_user_unique_id' => 'PisUserUniqueId',
        'pis_user_id' => 'PisUserId',
        'business_unit_id' => 'BusinessUnitId',
        'business_unit' => 'BusinessUnit',
        'pis_user' => 'PisUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pis_user_unique_id' => 'setPisUserUniqueId',
        'pis_user_id' => 'setPisUserId',
        'business_unit_id' => 'setBusinessUnitId',
        'business_unit' => 'setBusinessUnit',
        'pis_user' => 'setPisUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pis_user_unique_id' => 'getPisUserUniqueId',
        'pis_user_id' => 'getPisUserId',
        'business_unit_id' => 'getBusinessUnitId',
        'business_unit' => 'getBusinessUnit',
        'pis_user' => 'getPisUser'
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
        $this->container['pis_user_unique_id'] = isset($data['pis_user_unique_id']) ? $data['pis_user_unique_id'] : null;
        $this->container['pis_user_id'] = isset($data['pis_user_id']) ? $data['pis_user_id'] : null;
        $this->container['business_unit_id'] = isset($data['business_unit_id']) ? $data['business_unit_id'] : null;
        $this->container['business_unit'] = isset($data['business_unit']) ? $data['business_unit'] : null;
        $this->container['pis_user'] = isset($data['pis_user']) ? $data['pis_user'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pis_user_id'] === null) {
            $invalidProperties[] = "'pis_user_id' can't be null";
        }
        if ($this->container['business_unit_id'] === null) {
            $invalidProperties[] = "'business_unit_id' can't be null";
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
     * Gets pis_user_unique_id
     *
     * @return string
     */
    public function getPisUserUniqueId()
    {
        return $this->container['pis_user_unique_id'];
    }

    /**
     * Sets pis_user_unique_id
     *
     * @param string $pis_user_unique_id pis_user_unique_id
     *
     * @return $this
     */
    public function setPisUserUniqueId($pis_user_unique_id)
    {
        $this->container['pis_user_unique_id'] = $pis_user_unique_id;

        return $this;
    }

    /**
     * Gets pis_user_id
     *
     * @return int
     */
    public function getPisUserId()
    {
        return $this->container['pis_user_id'];
    }

    /**
     * Sets pis_user_id
     *
     * @param int $pis_user_id pis_user_id
     *
     * @return $this
     */
    public function setPisUserId($pis_user_id)
    {
        $this->container['pis_user_id'] = $pis_user_id;

        return $this;
    }

    /**
     * Gets business_unit_id
     *
     * @return int
     */
    public function getBusinessUnitId()
    {
        return $this->container['business_unit_id'];
    }

    /**
     * Sets business_unit_id
     *
     * @param int $business_unit_id business_unit_id
     *
     * @return $this
     */
    public function setBusinessUnitId($business_unit_id)
    {
        $this->container['business_unit_id'] = $business_unit_id;

        return $this;
    }

    /**
     * Gets business_unit
     *
     * @return \SplititSdkClient\Model\BusinessUnits
     */
    public function getBusinessUnit()
    {
        return $this->container['business_unit'];
    }

    /**
     * Sets business_unit
     *
     * @param \SplititSdkClient\Model\BusinessUnits $business_unit business_unit
     *
     * @return $this
     */
    public function setBusinessUnit($business_unit)
    {
        $this->container['business_unit'] = $business_unit;

        return $this;
    }

    /**
     * Gets pis_user
     *
     * @return object
     */
    public function getPisUser()
    {
        return $this->container['pis_user'];
    }

    /**
     * Sets pis_user
     *
     * @param object $pis_user pis_user
     *
     * @return $this
     */
    public function setPisUser($pis_user)
    {
        $this->container['pis_user'] = $pis_user;

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


