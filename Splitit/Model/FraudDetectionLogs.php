<?php
/**
 * FraudDetectionLogs
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
 * FraudDetectionLogs Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FraudDetectionLogs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FraudDetectionLogs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'installment_plan_id' => 'int',
        'full_log' => 'string',
        'provider_result_description' => 'string',
        'provider_result_code' => 'string',
        'provider_reference_id' => 'string',
        'time_lapse' => 'int',
        'card_id' => 'int',
        'provider' => 'string',
        'payment_gate_way_transaction_log_id' => 'int',
        'card' => '\SplititSdkClient\Model\Cards',
        'installment_plan' => '\SplititSdkClient\Model\InstallmentPlans',
        'payment_gate_way_transaction_log' => '\SplititSdkClient\Model\PaymentGatewayTransactionLogs',
        'result' => '\SplititSdkClient\Model\FraudCheckResult'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'installment_plan_id' => 'int64',
        'full_log' => null,
        'provider_result_description' => null,
        'provider_result_code' => null,
        'provider_reference_id' => null,
        'time_lapse' => 'int64',
        'card_id' => 'int64',
        'provider' => null,
        'payment_gate_way_transaction_log_id' => 'int64',
        'card' => null,
        'installment_plan' => null,
        'payment_gate_way_transaction_log' => null,
        'result' => null
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
        'installment_plan_id' => 'InstallmentPlanId',
        'full_log' => 'FullLog',
        'provider_result_description' => 'ProviderResultDescription',
        'provider_result_code' => 'ProviderResultCode',
        'provider_reference_id' => 'ProviderReferenceId',
        'time_lapse' => 'TimeLapse',
        'card_id' => 'CardId',
        'provider' => 'Provider',
        'payment_gate_way_transaction_log_id' => 'PaymentGateWayTransactionLogId',
        'card' => 'Card',
        'installment_plan' => 'InstallmentPlan',
        'payment_gate_way_transaction_log' => 'PaymentGateWayTransactionLog',
        'result' => 'Result'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'installment_plan_id' => 'setInstallmentPlanId',
        'full_log' => 'setFullLog',
        'provider_result_description' => 'setProviderResultDescription',
        'provider_result_code' => 'setProviderResultCode',
        'provider_reference_id' => 'setProviderReferenceId',
        'time_lapse' => 'setTimeLapse',
        'card_id' => 'setCardId',
        'provider' => 'setProvider',
        'payment_gate_way_transaction_log_id' => 'setPaymentGateWayTransactionLogId',
        'card' => 'setCard',
        'installment_plan' => 'setInstallmentPlan',
        'payment_gate_way_transaction_log' => 'setPaymentGateWayTransactionLog',
        'result' => 'setResult'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'installment_plan_id' => 'getInstallmentPlanId',
        'full_log' => 'getFullLog',
        'provider_result_description' => 'getProviderResultDescription',
        'provider_result_code' => 'getProviderResultCode',
        'provider_reference_id' => 'getProviderReferenceId',
        'time_lapse' => 'getTimeLapse',
        'card_id' => 'getCardId',
        'provider' => 'getProvider',
        'payment_gate_way_transaction_log_id' => 'getPaymentGateWayTransactionLogId',
        'card' => 'getCard',
        'installment_plan' => 'getInstallmentPlan',
        'payment_gate_way_transaction_log' => 'getPaymentGateWayTransactionLog',
        'result' => 'getResult'
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
        $this->container['installment_plan_id'] = isset($data['installment_plan_id']) ? $data['installment_plan_id'] : null;
        $this->container['full_log'] = isset($data['full_log']) ? $data['full_log'] : null;
        $this->container['provider_result_description'] = isset($data['provider_result_description']) ? $data['provider_result_description'] : null;
        $this->container['provider_result_code'] = isset($data['provider_result_code']) ? $data['provider_result_code'] : null;
        $this->container['provider_reference_id'] = isset($data['provider_reference_id']) ? $data['provider_reference_id'] : null;
        $this->container['time_lapse'] = isset($data['time_lapse']) ? $data['time_lapse'] : null;
        $this->container['card_id'] = isset($data['card_id']) ? $data['card_id'] : null;
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : null;
        $this->container['payment_gate_way_transaction_log_id'] = isset($data['payment_gate_way_transaction_log_id']) ? $data['payment_gate_way_transaction_log_id'] : null;
        $this->container['card'] = isset($data['card']) ? $data['card'] : null;
        $this->container['installment_plan'] = isset($data['installment_plan']) ? $data['installment_plan'] : null;
        $this->container['payment_gate_way_transaction_log'] = isset($data['payment_gate_way_transaction_log']) ? $data['payment_gate_way_transaction_log'] : null;
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
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
        if ($this->container['installment_plan_id'] === null) {
            $invalidProperties[] = "'installment_plan_id' can't be null";
        }
        if ($this->container['time_lapse'] === null) {
            $invalidProperties[] = "'time_lapse' can't be null";
        }
        if ($this->container['card_id'] === null) {
            $invalidProperties[] = "'card_id' can't be null";
        }
        if ($this->container['result'] === null) {
            $invalidProperties[] = "'result' can't be null";
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
     * Gets installment_plan_id
     *
     * @return int
     */
    public function getInstallmentPlanId()
    {
        return $this->container['installment_plan_id'];
    }

    /**
     * Sets installment_plan_id
     *
     * @param int $installment_plan_id installment_plan_id
     *
     * @return $this
     */
    public function setInstallmentPlanId($installment_plan_id)
    {
        $this->container['installment_plan_id'] = $installment_plan_id;

        return $this;
    }

    /**
     * Gets full_log
     *
     * @return string
     */
    public function getFullLog()
    {
        return $this->container['full_log'];
    }

    /**
     * Sets full_log
     *
     * @param string $full_log full_log
     *
     * @return $this
     */
    public function setFullLog($full_log)
    {
        $this->container['full_log'] = $full_log;

        return $this;
    }

    /**
     * Gets provider_result_description
     *
     * @return string
     */
    public function getProviderResultDescription()
    {
        return $this->container['provider_result_description'];
    }

    /**
     * Sets provider_result_description
     *
     * @param string $provider_result_description provider_result_description
     *
     * @return $this
     */
    public function setProviderResultDescription($provider_result_description)
    {
        $this->container['provider_result_description'] = $provider_result_description;

        return $this;
    }

    /**
     * Gets provider_result_code
     *
     * @return string
     */
    public function getProviderResultCode()
    {
        return $this->container['provider_result_code'];
    }

    /**
     * Sets provider_result_code
     *
     * @param string $provider_result_code provider_result_code
     *
     * @return $this
     */
    public function setProviderResultCode($provider_result_code)
    {
        $this->container['provider_result_code'] = $provider_result_code;

        return $this;
    }

    /**
     * Gets provider_reference_id
     *
     * @return string
     */
    public function getProviderReferenceId()
    {
        return $this->container['provider_reference_id'];
    }

    /**
     * Sets provider_reference_id
     *
     * @param string $provider_reference_id provider_reference_id
     *
     * @return $this
     */
    public function setProviderReferenceId($provider_reference_id)
    {
        $this->container['provider_reference_id'] = $provider_reference_id;

        return $this;
    }

    /**
     * Gets time_lapse
     *
     * @return int
     */
    public function getTimeLapse()
    {
        return $this->container['time_lapse'];
    }

    /**
     * Sets time_lapse
     *
     * @param int $time_lapse time_lapse
     *
     * @return $this
     */
    public function setTimeLapse($time_lapse)
    {
        $this->container['time_lapse'] = $time_lapse;

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
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider provider
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets payment_gate_way_transaction_log_id
     *
     * @return int
     */
    public function getPaymentGateWayTransactionLogId()
    {
        return $this->container['payment_gate_way_transaction_log_id'];
    }

    /**
     * Sets payment_gate_way_transaction_log_id
     *
     * @param int $payment_gate_way_transaction_log_id payment_gate_way_transaction_log_id
     *
     * @return $this
     */
    public function setPaymentGateWayTransactionLogId($payment_gate_way_transaction_log_id)
    {
        $this->container['payment_gate_way_transaction_log_id'] = $payment_gate_way_transaction_log_id;

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
     * Gets installment_plan
     *
     * @return \SplititSdkClient\Model\InstallmentPlans
     */
    public function getInstallmentPlan()
    {
        return $this->container['installment_plan'];
    }

    /**
     * Sets installment_plan
     *
     * @param \SplititSdkClient\Model\InstallmentPlans $installment_plan installment_plan
     *
     * @return $this
     */
    public function setInstallmentPlan($installment_plan)
    {
        $this->container['installment_plan'] = $installment_plan;

        return $this;
    }

    /**
     * Gets payment_gate_way_transaction_log
     *
     * @return \SplititSdkClient\Model\PaymentGatewayTransactionLogs
     */
    public function getPaymentGateWayTransactionLog()
    {
        return $this->container['payment_gate_way_transaction_log'];
    }

    /**
     * Sets payment_gate_way_transaction_log
     *
     * @param \SplititSdkClient\Model\PaymentGatewayTransactionLogs $payment_gate_way_transaction_log payment_gate_way_transaction_log
     *
     * @return $this
     */
    public function setPaymentGateWayTransactionLog($payment_gate_way_transaction_log)
    {
        $this->container['payment_gate_way_transaction_log'] = $payment_gate_way_transaction_log;

        return $this;
    }

    /**
     * Gets result
     *
     * @return \SplititSdkClient\Model\FraudCheckResult
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     *
     * @param \SplititSdkClient\Model\FraudCheckResult $result result
     *
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

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


