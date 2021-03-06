<?php
/**
 * PaymentGatewayTransactionAsyncLogs
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
 * PaymentGatewayTransactionAsyncLogs Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PaymentGatewayTransactionAsyncLogs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PaymentGatewayTransactionAsyncLogs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'result' => 'bool',
        'manual_verification' => 'bool',
        'response_log' => 'string',
        'reference_gateway_transaction_id' => 'string',
        'reference_payment_gateway_transaction_log_id' => 'int',
        'reference_payment_gateway_transaction_log' => '\SplititSdkClient\Model\PaymentGatewayTransactionLogs'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'result' => null,
        'manual_verification' => null,
        'response_log' => null,
        'reference_gateway_transaction_id' => null,
        'reference_payment_gateway_transaction_log_id' => 'int64',
        'reference_payment_gateway_transaction_log' => null
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
        'result' => 'Result',
        'manual_verification' => 'ManualVerification',
        'response_log' => 'ResponseLog',
        'reference_gateway_transaction_id' => 'ReferenceGatewayTransactionId',
        'reference_payment_gateway_transaction_log_id' => 'ReferencePaymentGatewayTransactionLogId',
        'reference_payment_gateway_transaction_log' => 'ReferencePaymentGatewayTransactionLog'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'result' => 'setResult',
        'manual_verification' => 'setManualVerification',
        'response_log' => 'setResponseLog',
        'reference_gateway_transaction_id' => 'setReferenceGatewayTransactionId',
        'reference_payment_gateway_transaction_log_id' => 'setReferencePaymentGatewayTransactionLogId',
        'reference_payment_gateway_transaction_log' => 'setReferencePaymentGatewayTransactionLog'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'result' => 'getResult',
        'manual_verification' => 'getManualVerification',
        'response_log' => 'getResponseLog',
        'reference_gateway_transaction_id' => 'getReferenceGatewayTransactionId',
        'reference_payment_gateway_transaction_log_id' => 'getReferencePaymentGatewayTransactionLogId',
        'reference_payment_gateway_transaction_log' => 'getReferencePaymentGatewayTransactionLog'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['manual_verification'] = isset($data['manual_verification']) ? $data['manual_verification'] : null;
        $this->container['response_log'] = isset($data['response_log']) ? $data['response_log'] : null;
        $this->container['reference_gateway_transaction_id'] = isset($data['reference_gateway_transaction_id']) ? $data['reference_gateway_transaction_id'] : null;
        $this->container['reference_payment_gateway_transaction_log_id'] = isset($data['reference_payment_gateway_transaction_log_id']) ? $data['reference_payment_gateway_transaction_log_id'] : null;
        $this->container['reference_payment_gateway_transaction_log'] = isset($data['reference_payment_gateway_transaction_log']) ? $data['reference_payment_gateway_transaction_log'] : null;
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
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
        }
        if ($this->container['manual_verification'] === null) {
            $invalidProperties[] = "'manual_verification' can't be null";
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
     * Gets result
     *
     * @return bool
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param bool $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets manual_verification
     *
     * @return bool
     */
    public function getManualVerification()
    {
        return $this->container['manual_verification'];
    }

    /**
     * Sets manual_verification
     *
     * @param bool $manual_verification manual_verification
     *
     * @return $this
     */
    public function setManualVerification($manual_verification)
    {
        $this->container['manual_verification'] = $manual_verification;

        return $this;
    }

    /**
     * Gets response_log
     *
     * @return string
     */
    public function getResponseLog()
    {
        return $this->container['response_log'];
    }

    /**
     * Sets response_log
     *
     * @param string $response_log response_log
     *
     * @return $this
     */
    public function setResponseLog($response_log)
    {
        $this->container['response_log'] = $response_log;

        return $this;
    }

    /**
     * Gets reference_gateway_transaction_id
     *
     * @return string
     */
    public function getReferenceGatewayTransactionId()
    {
        return $this->container['reference_gateway_transaction_id'];
    }

    /**
     * Sets reference_gateway_transaction_id
     *
     * @param string $reference_gateway_transaction_id reference_gateway_transaction_id
     *
     * @return $this
     */
    public function setReferenceGatewayTransactionId($reference_gateway_transaction_id)
    {
        $this->container['reference_gateway_transaction_id'] = $reference_gateway_transaction_id;

        return $this;
    }

    /**
     * Gets reference_payment_gateway_transaction_log_id
     *
     * @return int
     */
    public function getReferencePaymentGatewayTransactionLogId()
    {
        return $this->container['reference_payment_gateway_transaction_log_id'];
    }

    /**
     * Sets reference_payment_gateway_transaction_log_id
     *
     * @param int $reference_payment_gateway_transaction_log_id reference_payment_gateway_transaction_log_id
     *
     * @return $this
     */
    public function setReferencePaymentGatewayTransactionLogId($reference_payment_gateway_transaction_log_id)
    {
        $this->container['reference_payment_gateway_transaction_log_id'] = $reference_payment_gateway_transaction_log_id;

        return $this;
    }

    /**
     * Gets reference_payment_gateway_transaction_log
     *
     * @return \SplititSdkClient\Model\PaymentGatewayTransactionLogs
     */
    public function getReferencePaymentGatewayTransactionLog()
    {
        return $this->container['reference_payment_gateway_transaction_log'];
    }

    /**
     * Sets reference_payment_gateway_transaction_log
     *
     * @param \SplititSdkClient\Model\PaymentGatewayTransactionLogs $reference_payment_gateway_transaction_log reference_payment_gateway_transaction_log
     *
     * @return $this
     */
    public function setReferencePaymentGatewayTransactionLog($reference_payment_gateway_transaction_log)
    {
        $this->container['reference_payment_gateway_transaction_log'] = $reference_payment_gateway_transaction_log;

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


