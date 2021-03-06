<?php
/**
 * AccountUpdaterPendingCards
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
 * AccountUpdaterPendingCards Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountUpdaterPendingCards implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AccountUpdaterPendingCards';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'card_id' => 'int',
        'export_time' => '\DateTime',
        'export_batch_id' => 'string',
        'export_record_id' => 'string',
        'import_time' => '\DateTime',
        'card' => '\SplititSdkClient\Model\Cards',
        'account_updater' => '\SplititSdkClient\Model\AccountUpdaterProvider'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'card_id' => 'int64',
        'export_time' => 'date-time',
        'export_batch_id' => null,
        'export_record_id' => null,
        'import_time' => 'date-time',
        'card' => null,
        'account_updater' => null
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
        'card_id' => 'CardId',
        'export_time' => 'ExportTime',
        'export_batch_id' => 'ExportBatchId',
        'export_record_id' => 'ExportRecordId',
        'import_time' => 'ImportTime',
        'card' => 'Card',
        'account_updater' => 'AccountUpdater'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'card_id' => 'setCardId',
        'export_time' => 'setExportTime',
        'export_batch_id' => 'setExportBatchId',
        'export_record_id' => 'setExportRecordId',
        'import_time' => 'setImportTime',
        'card' => 'setCard',
        'account_updater' => 'setAccountUpdater'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'card_id' => 'getCardId',
        'export_time' => 'getExportTime',
        'export_batch_id' => 'getExportBatchId',
        'export_record_id' => 'getExportRecordId',
        'import_time' => 'getImportTime',
        'card' => 'getCard',
        'account_updater' => 'getAccountUpdater'
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
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['export_time'] = isset($data['export_time']) ? $data['export_time'] : null;
        $this->container['export_batch_id'] = isset($data['export_batch_id']) ? $data['export_batch_id'] : null;
        $this->container['export_record_id'] = isset($data['export_record_id']) ? $data['export_record_id'] : null;
        $this->container['import_time'] = isset($data['import_time']) ? $data['import_time'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['account_updater'] = isset($data['account_updater']) ? $data['account_updater'] : null;
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
        if ($this->container['card_id'] === null) {
            $invalidProperties[] = "'card_id' can't be null";
        }
        if ($this->container['account_updater'] === null) {
            $invalidProperties[] = "'account_updater' can't be null";
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
     * Gets card_id
     *
     * @return int
     */
    public function getCardId()
    {
        return $this->container['card_id'];
    }

    /**
     * Sets card_id
     *
     * @param int $card_id card_id
     *
     * @return $this
     */
    public function setCardId($card_id)
    {
        $this->container['card_id'] = $card_id;

        return $this;
    }

    /**
     * Gets export_time
     *
     * @return \DateTime
     */
    public function getExportTime()
    {
        return $this->container['export_time'];
    }

    /**
     * Sets export_time
     *
     * @param \DateTime $export_time export_time
     *
     * @return $this
     */
    public function setExportTime($export_time)
    {
        $this->container['export_time'] = $export_time;

        return $this;
    }

    /**
     * Gets export_batch_id
     *
     * @return string
     */
    public function getExportBatchId()
    {
        return $this->container['export_batch_id'];
    }

    /**
     * Sets export_batch_id
     *
     * @param string $export_batch_id export_batch_id
     *
     * @return $this
     */
    public function setExportBatchId($export_batch_id)
    {
        $this->container['export_batch_id'] = $export_batch_id;

        return $this;
    }

    /**
     * Gets export_record_id
     *
     * @return string
     */
    public function getExportRecordId()
    {
        return $this->container['export_record_id'];
    }

    /**
     * Sets export_record_id
     *
     * @param string $export_record_id export_record_id
     *
     * @return $this
     */
    public function setExportRecordId($export_record_id)
    {
        $this->container['export_record_id'] = $export_record_id;

        return $this;
    }

    /**
     * Gets import_time
     *
     * @return \DateTime
     */
    public function getImportTime()
    {
        return $this->container['import_time'];
    }

    /**
     * Sets import_time
     *
     * @param \DateTime $import_time import_time
     *
     * @return $this
     */
    public function setImportTime($import_time)
    {
        $this->container['import_time'] = $import_time;

        return $this;
    }

    /**
     * Gets card
     *
     * @return \SplititSdkClient\Model\Cards
     */
    public function getCard()
    {
        return $this->container['card'];
    }

    /**
     * Sets card
     *
     * @param \SplititSdkClient\Model\Cards $card card
     *
     * @return $this
     */
    public function setCard($card)
    {
        $this->container['card'] = $card;

        return $this;
    }

    /**
     * Gets account_updater
     *
     * @return \SplititSdkClient\Model\AccountUpdaterProvider
     */
    public function getAccountUpdater()
    {
        return $this->container['account_updater'];
    }

    /**
     * Sets account_updater
     *
     * @param \SplititSdkClient\Model\AccountUpdaterProvider $account_updater account_updater
     *
     * @return $this
     */
    public function setAccountUpdater($account_updater)
    {
        $this->container['account_updater'] = $account_updater;

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


