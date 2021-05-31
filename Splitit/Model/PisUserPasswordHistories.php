<?php
/**
 * PisUserPasswordHistories
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
 * PisUserPasswordHistories Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PisUserPasswordHistories implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PisUserPasswordHistories';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'password' => 'string',
        'password_hash' => 'string',
        'password_exp_date' => '\DateTime',
        'pis_user_id' => 'int',
        'pis_user' => '\SplititSdkClient\Model\PisUsers'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'password' => null,
        'password_hash' => null,
        'password_exp_date' => 'date-time',
        'pis_user_id' => 'int64',
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
        'id' => 'Id',
        'password' => 'Password',
        'password_hash' => 'PasswordHash',
        'password_exp_date' => 'PasswordExpDate',
        'pis_user_id' => 'PisUserId',
        'pis_user' => 'PisUser'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'password' => 'setPassword',
        'password_hash' => 'setPasswordHash',
        'password_exp_date' => 'setPasswordExpDate',
        'pis_user_id' => 'setPisUserId',
        'pis_user' => 'setPisUser'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'password' => 'getPassword',
        'password_hash' => 'getPasswordHash',
        'password_exp_date' => 'getPasswordExpDate',
        'pis_user_id' => 'getPisUserId',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['password_hash'] = isset($data['password_hash']) ? $data['password_hash'] : null;
        $this->container['password_exp_date'] = isset($data['password_exp_date']) ? $data['password_exp_date'] : null;
        $this->container['pis_user_id'] = isset($data['pis_user_id']) ? $data['pis_user_id'] : null;
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

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['password_exp_date'] === null) {
            $invalidProperties[] = "'password_exp_date' can't be null";
        }
        if ($this->container['pis_user_id'] === null) {
            $invalidProperties[] = "'pis_user_id' can't be null";
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
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets password_hash
     *
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->container['password_hash'];
    }

    /**
     * Sets password_hash
     *
     * @param string $password_hash password_hash
     *
     * @return $this
     */
    public function setPasswordHash($password_hash)
    {
        $this->container['password_hash'] = $password_hash;

        return $this;
    }

    /**
     * Gets password_exp_date
     *
     * @return \DateTime
     */
    public function getPasswordExpDate()
    {
        return $this->container['password_exp_date'];
    }

    /**
     * Sets password_exp_date
     *
     * @param \DateTime $password_exp_date password_exp_date
     *
     * @return $this
     */
    public function setPasswordExpDate($password_exp_date)
    {
        $this->container['password_exp_date'] = $password_exp_date;

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
     * Gets pis_user
     *
     * @return \SplititSdkClient\Model\PisUsers
     */
    public function getPisUser()
    {
        return $this->container['pis_user'];
    }

    /**
     * Sets pis_user
     *
     * @param \SplititSdkClient\Model\PisUsers $pis_user pis_user
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

