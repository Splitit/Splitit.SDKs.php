<?php
/**
 * InstallmentPaymentGatewayTransactionLogs
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
 * InstallmentPaymentGatewayTransactionLogs Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InstallmentPaymentGatewayTransactionLogs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InstallmentPaymentGatewayTransactionLogs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'installment_id' => 'int',
        'payment_gateway_transaction_log_id' => 'int',
        'installment' => '\SplititSdkClient\Model\Installments',
        'payment_gateway_transaction_log' => '\SplititSdkClient\Model\PaymentGatewayTransactionLogs'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'installment_id' => 'int64',
        'payment_gateway_transaction_log_id' => 'int64',
        'installment' => null,
        'payment_gateway_transaction_log' => null
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
        'installment_id' => 'InstallmentId',
        'payment_gateway_transaction_log_id' => 'PaymentGatewayTransactionLogId',
        'installment' => 'Installment',
        'payment_gateway_transaction_log' => 'PaymentGatewayTransactionLog'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'installment_id' => 'setInstallmentId',
        'payment_gateway_transaction_log_id' => 'setPaymentGatewayTransactionLogId',
        'installment' => 'setInstallment',
        'payment_gateway_transaction_log' => 'setPaymentGatewayTransactionLog'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'installment_id' => 'getInstallmentId',
        'payment_gateway_transaction_log_id' => 'getPaymentGatewayTransactionLogId',
        'installment' => 'getInstallment',
        'payment_gateway_transaction_log' => 'getPaymentGatewayTransactionLog'
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
        $this->container['installment_id'] = isset($data['installment_id']) ? $data['installment_id'] : null;
        $this->container['payment_gateway_transaction_log_id'] = isset($data['payment_gateway_transaction_log_id']) ? $data['payment_gateway_transaction_log_id'] : null;
        $this->container['installment'] = isset($data['installment']) ? $data['installment'] : null;
        $this->container['payment_gateway_transaction_log'] = isset($data['payment_gateway_transaction_log']) ? $data['payment_gateway_transaction_log'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['installment_id'] === null) {
            $invalidProperties[] = "'installment_id' can't be null";
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
     * Gets installment_id
     *
     * @return int
     */
    public function getInstallmentId()
    {
        return $this->container['installment_id'];
    }

    /**
     * Sets installment_id
     *
     * @param int $installment_id installment_id
     *
     * @return $this
     */
    public function setInstallmentId($installment_id)
    {
        $this->container['installment_id'] = $installment_id;

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
     * Gets installment
     *
     * @return \SplititSdkClient\Model\Installments
     */
    public function getInstallment()
    {
        return $this->container['installment'];
    }

    /**
     * Sets installment
     *
     * @param \SplititSdkClient\Model\Installments $installment installment
     *
     * @return $this
     */
    public function setInstallment($installment)
    {
        $this->container['installment'] = $installment;

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


