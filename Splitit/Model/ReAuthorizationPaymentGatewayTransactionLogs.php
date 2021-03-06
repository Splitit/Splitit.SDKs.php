<?php
/**
 * ReAuthorizationPaymentGatewayTransactionLogs
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
 * ReAuthorizationPaymentGatewayTransactionLogs Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReAuthorizationPaymentGatewayTransactionLogs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReAuthorizationPaymentGatewayTransactionLogs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        're_authorization_id' => 'int',
        'payment_gateway_transaction_log_id' => 'int',
        'payment_gateway_transaction_log' => '\SplititSdkClient\Model\PaymentGatewayTransactionLogs',
        're_authorization' => '\SplititSdkClient\Model\ReAuthorizations'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        're_authorization_id' => 'int64',
        'payment_gateway_transaction_log_id' => 'int64',
        'payment_gateway_transaction_log' => null,
        're_authorization' => null
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
        're_authorization_id' => 'ReAuthorizationId',
        'payment_gateway_transaction_log_id' => 'PaymentGatewayTransactionLogId',
        'payment_gateway_transaction_log' => 'PaymentGatewayTransactionLog',
        're_authorization' => 'ReAuthorization'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        're_authorization_id' => 'setReAuthorizationId',
        'payment_gateway_transaction_log_id' => 'setPaymentGatewayTransactionLogId',
        'payment_gateway_transaction_log' => 'setPaymentGatewayTransactionLog',
        're_authorization' => 'setReAuthorization'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        're_authorization_id' => 'getReAuthorizationId',
        'payment_gateway_transaction_log_id' => 'getPaymentGatewayTransactionLogId',
        'payment_gateway_transaction_log' => 'getPaymentGatewayTransactionLog',
        're_authorization' => 'getReAuthorization'
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
        $this->container['re_authorization_id'] = isset($data['re_authorization_id']) ? $data['re_authorization_id'] : null;
        $this->container['payment_gateway_transaction_log_id'] = isset($data['payment_gateway_transaction_log_id']) ? $data['payment_gateway_transaction_log_id'] : null;
        $this->container['payment_gateway_transaction_log'] = isset($data['payment_gateway_transaction_log']) ? $data['payment_gateway_transaction_log'] : null;
        $this->container['re_authorization'] = isset($data['re_authorization']) ? $data['re_authorization'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['re_authorization_id'] === null) {
            $invalidProperties[] = "'re_authorization_id' can't be null";
        }
        if ($this->container['payment_gateway_transaction_log_id'] === null) {
            $invalidProperties[] = "'payment_gateway_transaction_log_id' can't be null";
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
     * Gets re_authorization_id
     *
     * @return int
     */
    public function getReAuthorizationId()
    {
        return $this->container['re_authorization_id'];
    }

    /**
     * Sets re_authorization_id
     *
     * @param int $re_authorization_id re_authorization_id
     *
     * @return $this
     */
    public function setReAuthorizationId($re_authorization_id)
    {
        $this->container['re_authorization_id'] = $re_authorization_id;

        return $this;
    }

    /**
     * Gets payment_gateway_transaction_log_id
     *
     * @return int
     */
    public function getPaymentGatewayTransactionLogId()
    {
        return $this->container['payment_gateway_transaction_log_id'];
    }

    /**
     * Sets payment_gateway_transaction_log_id
     *
     * @param int $payment_gateway_transaction_log_id payment_gateway_transaction_log_id
     *
     * @return $this
     */
    public function setPaymentGatewayTransactionLogId($payment_gateway_transaction_log_id)
    {
        $this->container['payment_gateway_transaction_log_id'] = $payment_gateway_transaction_log_id;

        return $this;
    }

    /**
     * Gets payment_gateway_transaction_log
     *
     * @return \SplititSdkClient\Model\PaymentGatewayTransactionLogs
     */
    public function getPaymentGatewayTransactionLog()
    {
        return $this->container['payment_gateway_transaction_log'];
    }

    /**
     * Sets payment_gateway_transaction_log
     *
     * @param \SplititSdkClient\Model\PaymentGatewayTransactionLogs $payment_gateway_transaction_log payment_gateway_transaction_log
     *
     * @return $this
     */
    public function setPaymentGatewayTransactionLog($payment_gateway_transaction_log)
    {
        $this->container['payment_gateway_transaction_log'] = $payment_gateway_transaction_log;

        return $this;
    }

    /**
     * Gets re_authorization
     *
     * @return \SplititSdkClient\Model\ReAuthorizations
     */
    public function getReAuthorization()
    {
        return $this->container['re_authorization'];
    }

    /**
     * Sets re_authorization
     *
     * @param \SplititSdkClient\Model\ReAuthorizations $re_authorization re_authorization
     *
     * @return $this
     */
    public function setReAuthorization($re_authorization)
    {
        $this->container['re_authorization'] = $re_authorization;

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


