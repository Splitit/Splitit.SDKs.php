<?php
/**
 * ReconciliationReportItems
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
 * ReconciliationReportItems Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ReconciliationReportItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ReconciliationReportItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'gateway_amount' => 'float',
        'gateway_count' => 'int',
        'pisamount' => 'float',
        'piscount' => 'int',
        'is_identical' => 'bool',
        'reconciliation_report_id' => 'int',
        'reconciliation_report' => '\SplititSdkClient\Model\ReconciliationReports',
        'transaction_type' => '\SplititSdkClient\Model\OperationType',
        'gateway_type' => '\SplititSdkClient\Model\ProcessorType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'gateway_amount' => 'decimal',
        'gateway_count' => 'int32',
        'pisamount' => 'decimal',
        'piscount' => 'int32',
        'is_identical' => null,
        'reconciliation_report_id' => 'int64',
        'reconciliation_report' => null,
        'transaction_type' => null,
        'gateway_type' => null
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
        'gateway_amount' => 'GatewayAmount',
        'gateway_count' => 'GatewayCount',
        'pisamount' => 'Pisamount',
        'piscount' => 'Piscount',
        'is_identical' => 'IsIdentical',
        'reconciliation_report_id' => 'ReconciliationReportId',
        'reconciliation_report' => 'ReconciliationReport',
        'transaction_type' => 'TransactionType',
        'gateway_type' => 'GatewayType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'gateway_amount' => 'setGatewayAmount',
        'gateway_count' => 'setGatewayCount',
        'pisamount' => 'setPisamount',
        'piscount' => 'setPiscount',
        'is_identical' => 'setIsIdentical',
        'reconciliation_report_id' => 'setReconciliationReportId',
        'reconciliation_report' => 'setReconciliationReport',
        'transaction_type' => 'setTransactionType',
        'gateway_type' => 'setGatewayType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'gateway_amount' => 'getGatewayAmount',
        'gateway_count' => 'getGatewayCount',
        'pisamount' => 'getPisamount',
        'piscount' => 'getPiscount',
        'is_identical' => 'getIsIdentical',
        'reconciliation_report_id' => 'getReconciliationReportId',
        'reconciliation_report' => 'getReconciliationReport',
        'transaction_type' => 'getTransactionType',
        'gateway_type' => 'getGatewayType'
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
        $this->container['gateway_amount'] = isset($data['gateway_amount']) ? $data['gateway_amount'] : null;
        $this->container['gateway_count'] = isset($data['gateway_count']) ? $data['gateway_count'] : null;
        $this->container['pisamount'] = isset($data['pisamount']) ? $data['pisamount'] : null;
        $this->container['piscount'] = isset($data['piscount']) ? $data['piscount'] : null;
        $this->container['is_identical'] = isset($data['is_identical']) ? $data['is_identical'] : null;
        $this->container['reconciliation_report_id'] = isset($data['reconciliation_report_id']) ? $data['reconciliation_report_id'] : null;
        $this->container['reconciliation_report'] = isset($data['reconciliation_report']) ? $data['reconciliation_report'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['gateway_type'] = isset($data['gateway_type']) ? $data['gateway_type'] : null;
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
        if ($this->container['gateway_amount'] === null) {
            $invalidProperties[] = "'gateway_amount' can't be null";
        }
        if ($this->container['gateway_count'] === null) {
            $invalidProperties[] = "'gateway_count' can't be null";
        }
        if ($this->container['pisamount'] === null) {
            $invalidProperties[] = "'pisamount' can't be null";
        }
        if ($this->container['piscount'] === null) {
            $invalidProperties[] = "'piscount' can't be null";
        }
        if ($this->container['is_identical'] === null) {
            $invalidProperties[] = "'is_identical' can't be null";
        }
        if ($this->container['reconciliation_report_id'] === null) {
            $invalidProperties[] = "'reconciliation_report_id' can't be null";
        }
        if ($this->container['transaction_type'] === null) {
            $invalidProperties[] = "'transaction_type' can't be null";
        }
        if ($this->container['gateway_type'] === null) {
            $invalidProperties[] = "'gateway_type' can't be null";
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
     * Gets gateway_amount
     *
     * @return float
     */
    public function getGatewayAmount()
    {
        return $this->container['gateway_amount'];
    }

    /**
     * Sets gateway_amount
     *
     * @param float $gateway_amount gateway_amount
     *
     * @return $this
     */
    public function setGatewayAmount($gateway_amount)
    {
        $this->container['gateway_amount'] = $gateway_amount;

        return $this;
    }

    /**
     * Gets gateway_count
     *
     * @return int
     */
    public function getGatewayCount()
    {
        return $this->container['gateway_count'];
    }

    /**
     * Sets gateway_count
     *
     * @param int $gateway_count gateway_count
     *
     * @return $this
     */
    public function setGatewayCount($gateway_count)
    {
        $this->container['gateway_count'] = $gateway_count;

        return $this;
    }

    /**
     * Gets pisamount
     *
     * @return float
     */
    public function getPisamount()
    {
        return $this->container['pisamount'];
    }

    /**
     * Sets pisamount
     *
     * @param float $pisamount pisamount
     *
     * @return $this
     */
    public function setPisamount($pisamount)
    {
        $this->container['pisamount'] = $pisamount;

        return $this;
    }

    /**
     * Gets piscount
     *
     * @return int
     */
    public function getPiscount()
    {
        return $this->container['piscount'];
    }

    /**
     * Sets piscount
     *
     * @param int $piscount piscount
     *
     * @return $this
     */
    public function setPiscount($piscount)
    {
        $this->container['piscount'] = $piscount;

        return $this;
    }

    /**
     * Gets is_identical
     *
     * @return bool
     */
    public function getIsIdentical()
    {
        return $this->container['is_identical'];
    }

    /**
     * Sets is_identical
     *
     * @param bool $is_identical is_identical
     *
     * @return $this
     */
    public function setIsIdentical($is_identical)
    {
        $this->container['is_identical'] = $is_identical;

        return $this;
    }

    /**
     * Gets reconciliation_report_id
     *
     * @return int
     */
    public function getReconciliationReportId()
    {
        return $this->container['reconciliation_report_id'];
    }

    /**
     * Sets reconciliation_report_id
     *
     * @param int $reconciliation_report_id reconciliation_report_id
     *
     * @return $this
     */
    public function setReconciliationReportId($reconciliation_report_id)
    {
        $this->container['reconciliation_report_id'] = $reconciliation_report_id;

        return $this;
    }

    /**
     * Gets reconciliation_report
     *
     * @return \SplititSdkClient\Model\ReconciliationReports
     */
    public function getReconciliationReport()
    {
        return $this->container['reconciliation_report'];
    }

    /**
     * Sets reconciliation_report
     *
     * @param \SplititSdkClient\Model\ReconciliationReports $reconciliation_report reconciliation_report
     *
     * @return $this
     */
    public function setReconciliationReport($reconciliation_report)
    {
        $this->container['reconciliation_report'] = $reconciliation_report;

        return $this;
    }

    /**
     * Gets transaction_type
     *
     * @return \SplititSdkClient\Model\OperationType
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     *
     * @param \SplititSdkClient\Model\OperationType $transaction_type transaction_type
     *
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets gateway_type
     *
     * @return \SplititSdkClient\Model\ProcessorType
     */
    public function getGatewayType()
    {
        return $this->container['gateway_type'];
    }

    /**
     * Sets gateway_type
     *
     * @param \SplititSdkClient\Model\ProcessorType $gateway_type gateway_type
     *
     * @return $this
     */
    public function setGatewayType($gateway_type)
    {
        $this->container['gateway_type'] = $gateway_type;

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


