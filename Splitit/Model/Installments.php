<?php
/**
 * Installments
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
 * Installments Class Doc Comment
 *
 * @category Class
 * @package  SplititSdkClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Installments implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Installments';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'installment_plan_id' => 'int',
        'installment_number' => 'int',
        'processor_id' => 'int',
        'origin_utc_offset' => 'double',
        'created_date_utc' => '\DateTime',
        'amount' => 'float',
        'process_date_time' => '\DateTime',
        'process_date_time_utc' => '\DateTime',
        'is_refund' => 'bool',
        'card_state_id' => 'int',
        'original_amount' => 'float',
        'refund_amount' => 'float',
        'is_full_capture' => 'bool',
        'authorized_amount' => 'float',
        'is_pre_authorized' => 'bool',
        'amount_for_funding' => 'float',
        'card_state' => '\SplititSdkClient\Model\CardStateLogs',
        'installment_plan' => '\SplititSdkClient\Model\InstallmentPlans',
        'processor' => '\SplititSdkClient\Model\Processors',
        'fees_documents' => '\SplititSdkClient\Model\FeesDocuments[]',
        'funding_collect_document_details' => '\SplititSdkClient\Model\FundingCollectDocumentDetails[]',
        'installment_payment_gateway_transaction_logs' => '\SplititSdkClient\Model\InstallmentPaymentGatewayTransactionLogs[]',
        'transfer_document_details' => '\SplititSdkClient\Model\TransferDocumentDetails[]',
        'merchant_account_type' => '\SplititSdkClient\Model\MerchantAccountType',
        'status' => '\SplititSdkClient\Model\InstallmentStatus'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'installment_plan_id' => 'int64',
        'installment_number' => 'int64',
        'processor_id' => 'int64',
        'origin_utc_offset' => 'double',
        'created_date_utc' => 'date-time',
        'amount' => 'decimal',
        'process_date_time' => 'date-time',
        'process_date_time_utc' => 'date-time',
        'is_refund' => null,
        'card_state_id' => 'int64',
        'original_amount' => 'decimal',
        'refund_amount' => 'decimal',
        'is_full_capture' => null,
        'authorized_amount' => 'decimal',
        'is_pre_authorized' => null,
        'amount_for_funding' => 'decimal',
        'card_state' => null,
        'installment_plan' => null,
        'processor' => null,
        'fees_documents' => null,
        'funding_collect_document_details' => null,
        'installment_payment_gateway_transaction_logs' => null,
        'transfer_document_details' => null,
        'merchant_account_type' => null,
        'status' => null
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
        'installment_number' => 'InstallmentNumber',
        'processor_id' => 'ProcessorId',
        'origin_utc_offset' => 'OriginUtcOffset',
        'created_date_utc' => 'CreatedDateUtc',
        'amount' => 'Amount',
        'process_date_time' => 'ProcessDateTime',
        'process_date_time_utc' => 'ProcessDateTimeUtc',
        'is_refund' => 'IsRefund',
        'card_state_id' => 'CardStateId',
        'original_amount' => 'OriginalAmount',
        'refund_amount' => 'RefundAmount',
        'is_full_capture' => 'IsFullCapture',
        'authorized_amount' => 'AuthorizedAmount',
        'is_pre_authorized' => 'IsPreAuthorized',
        'amount_for_funding' => 'AmountForFunding',
        'card_state' => 'CardState',
        'installment_plan' => 'InstallmentPlan',
        'processor' => 'Processor',
        'fees_documents' => 'FeesDocuments',
        'funding_collect_document_details' => 'FundingCollectDocumentDetails',
        'installment_payment_gateway_transaction_logs' => 'InstallmentPaymentGatewayTransactionLogs',
        'transfer_document_details' => 'TransferDocumentDetails',
        'merchant_account_type' => 'MerchantAccountType',
        'status' => 'Status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'installment_plan_id' => 'setInstallmentPlanId',
        'installment_number' => 'setInstallmentNumber',
        'processor_id' => 'setProcessorId',
        'origin_utc_offset' => 'setOriginUtcOffset',
        'created_date_utc' => 'setCreatedDateUtc',
        'amount' => 'setAmount',
        'process_date_time' => 'setProcessDateTime',
        'process_date_time_utc' => 'setProcessDateTimeUtc',
        'is_refund' => 'setIsRefund',
        'card_state_id' => 'setCardStateId',
        'original_amount' => 'setOriginalAmount',
        'refund_amount' => 'setRefundAmount',
        'is_full_capture' => 'setIsFullCapture',
        'authorized_amount' => 'setAuthorizedAmount',
        'is_pre_authorized' => 'setIsPreAuthorized',
        'amount_for_funding' => 'setAmountForFunding',
        'card_state' => 'setCardState',
        'installment_plan' => 'setInstallmentPlan',
        'processor' => 'setProcessor',
        'fees_documents' => 'setFeesDocuments',
        'funding_collect_document_details' => 'setFundingCollectDocumentDetails',
        'installment_payment_gateway_transaction_logs' => 'setInstallmentPaymentGatewayTransactionLogs',
        'transfer_document_details' => 'setTransferDocumentDetails',
        'merchant_account_type' => 'setMerchantAccountType',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'installment_plan_id' => 'getInstallmentPlanId',
        'installment_number' => 'getInstallmentNumber',
        'processor_id' => 'getProcessorId',
        'origin_utc_offset' => 'getOriginUtcOffset',
        'created_date_utc' => 'getCreatedDateUtc',
        'amount' => 'getAmount',
        'process_date_time' => 'getProcessDateTime',
        'process_date_time_utc' => 'getProcessDateTimeUtc',
        'is_refund' => 'getIsRefund',
        'card_state_id' => 'getCardStateId',
        'original_amount' => 'getOriginalAmount',
        'refund_amount' => 'getRefundAmount',
        'is_full_capture' => 'getIsFullCapture',
        'authorized_amount' => 'getAuthorizedAmount',
        'is_pre_authorized' => 'getIsPreAuthorized',
        'amount_for_funding' => 'getAmountForFunding',
        'card_state' => 'getCardState',
        'installment_plan' => 'getInstallmentPlan',
        'processor' => 'getProcessor',
        'fees_documents' => 'getFeesDocuments',
        'funding_collect_document_details' => 'getFundingCollectDocumentDetails',
        'installment_payment_gateway_transaction_logs' => 'getInstallmentPaymentGatewayTransactionLogs',
        'transfer_document_details' => 'getTransferDocumentDetails',
        'merchant_account_type' => 'getMerchantAccountType',
        'status' => 'getStatus'
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
        $this->container['installment_number'] = isset($data['installment_number']) ? $data['installment_number'] : null;
        $this->container['processor_id'] = isset($data['processor_id']) ? $data['processor_id'] : null;
        $this->container['origin_utc_offset'] = isset($data['origin_utc_offset']) ? $data['origin_utc_offset'] : null;
        $this->container['created_date_utc'] = isset($data['created_date_utc']) ? $data['created_date_utc'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['process_date_time'] = isset($data['process_date_time']) ? $data['process_date_time'] : null;
        $this->container['process_date_time_utc'] = isset($data['process_date_time_utc']) ? $data['process_date_time_utc'] : null;
        $this->container['is_refund'] = isset($data['is_refund']) ? $data['is_refund'] : null;
        $this->container['card_state_id'] = isset($data['card_state_id']) ? $data['card_state_id'] : null;
        $this->container['original_amount'] = isset($data['original_amount']) ? $data['original_amount'] : null;
        $this->container['refund_amount'] = isset($data['refund_amount']) ? $data['refund_amount'] : null;
        $this->container['is_full_capture'] = isset($data['is_full_capture']) ? $data['is_full_capture'] : null;
        $this->container['authorized_amount'] = isset($data['authorized_amount']) ? $data['authorized_amount'] : null;
        $this->container['is_pre_authorized'] = isset($data['is_pre_authorized']) ? $data['is_pre_authorized'] : null;
        $this->container['amount_for_funding'] = isset($data['amount_for_funding']) ? $data['amount_for_funding'] : null;
        $this->container['card_state'] = isset($data['card_state']) ? $data['card_state'] : null;
        $this->container['installment_plan'] = isset($data['installment_plan']) ? $data['installment_plan'] : null;
        $this->container['processor'] = isset($data['processor']) ? $data['processor'] : null;
        $this->container['fees_documents'] = isset($data['fees_documents']) ? $data['fees_documents'] : null;
        $this->container['funding_collect_document_details'] = isset($data['funding_collect_document_details']) ? $data['funding_collect_document_details'] : null;
        $this->container['installment_payment_gateway_transaction_logs'] = isset($data['installment_payment_gateway_transaction_logs']) ? $data['installment_payment_gateway_transaction_logs'] : null;
        $this->container['transfer_document_details'] = isset($data['transfer_document_details']) ? $data['transfer_document_details'] : null;
        $this->container['merchant_account_type'] = isset($data['merchant_account_type']) ? $data['merchant_account_type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
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
        if ($this->container['installment_number'] === null) {
            $invalidProperties[] = "'installment_number' can't be null";
        }
        if ($this->container['processor_id'] === null) {
            $invalidProperties[] = "'processor_id' can't be null";
        }
        if ($this->container['origin_utc_offset'] === null) {
            $invalidProperties[] = "'origin_utc_offset' can't be null";
        }
        if ($this->container['created_date_utc'] === null) {
            $invalidProperties[] = "'created_date_utc' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['is_refund'] === null) {
            $invalidProperties[] = "'is_refund' can't be null";
        }
        if ($this->container['original_amount'] === null) {
            $invalidProperties[] = "'original_amount' can't be null";
        }
        if ($this->container['refund_amount'] === null) {
            $invalidProperties[] = "'refund_amount' can't be null";
        }
        if ($this->container['is_full_capture'] === null) {
            $invalidProperties[] = "'is_full_capture' can't be null";
        }
        if ($this->container['authorized_amount'] === null) {
            $invalidProperties[] = "'authorized_amount' can't be null";
        }
        if ($this->container['is_pre_authorized'] === null) {
            $invalidProperties[] = "'is_pre_authorized' can't be null";
        }
        if ($this->container['amount_for_funding'] === null) {
            $invalidProperties[] = "'amount_for_funding' can't be null";
        }
        if ($this->container['merchant_account_type'] === null) {
            $invalidProperties[] = "'merchant_account_type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
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
     * Gets installment_number
     *
     * @return int
     */
    public function getInstallmentNumber()
    {
        return $this->container['installment_number'];
    }

    /**
     * Sets installment_number
     *
     * @param int $installment_number installment_number
     *
     * @return $this
     */
    public function setInstallmentNumber($installment_number)
    {
        $this->container['installment_number'] = $installment_number;

        return $this;
    }

    /**
     * Gets processor_id
     *
     * @return int
     */
    public function getProcessorId()
    {
        return $this->container['processor_id'];
    }

    /**
     * Sets processor_id
     *
     * @param int $processor_id processor_id
     *
     * @return $this
     */
    public function setProcessorId($processor_id)
    {
        $this->container['processor_id'] = $processor_id;

        return $this;
    }

    /**
     * Gets origin_utc_offset
     *
     * @return double
     */
    public function getOriginUtcOffset()
    {
        return $this->container['origin_utc_offset'];
    }

    /**
     * Sets origin_utc_offset
     *
     * @param double $origin_utc_offset origin_utc_offset
     *
     * @return $this
     */
    public function setOriginUtcOffset($origin_utc_offset)
    {
        $this->container['origin_utc_offset'] = $origin_utc_offset;

        return $this;
    }

    /**
     * Gets created_date_utc
     *
     * @return \DateTime
     */
    public function getCreatedDateUtc()
    {
        return $this->container['created_date_utc'];
    }

    /**
     * Sets created_date_utc
     *
     * @param \DateTime $created_date_utc created_date_utc
     *
     * @return $this
     */
    public function setCreatedDateUtc($created_date_utc)
    {
        $this->container['created_date_utc'] = $created_date_utc;

        return $this;
    }

    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets process_date_time
     *
     * @return \DateTime
     */
    public function getProcessDateTime()
    {
        return $this->container['process_date_time'];
    }

    /**
     * Sets process_date_time
     *
     * @param \DateTime $process_date_time process_date_time
     *
     * @return $this
     */
    public function setProcessDateTime($process_date_time)
    {
        $this->container['process_date_time'] = $process_date_time;

        return $this;
    }

    /**
     * Gets process_date_time_utc
     *
     * @return \DateTime
     */
    public function getProcessDateTimeUtc()
    {
        return $this->container['process_date_time_utc'];
    }

    /**
     * Sets process_date_time_utc
     *
     * @param \DateTime $process_date_time_utc process_date_time_utc
     *
     * @return $this
     */
    public function setProcessDateTimeUtc($process_date_time_utc)
    {
        $this->container['process_date_time_utc'] = $process_date_time_utc;

        return $this;
    }

    /**
     * Gets is_refund
     *
     * @return bool
     */
    public function getIsRefund()
    {
        return $this->container['is_refund'];
    }

    /**
     * Sets is_refund
     *
     * @param bool $is_refund is_refund
     *
     * @return $this
     */
    public function setIsRefund($is_refund)
    {
        $this->container['is_refund'] = $is_refund;

        return $this;
    }

    /**
     * Gets card_state_id
     *
     * @return int
     */
    public function getCardStateId()
    {
        return $this->container['card_state_id'];
    }

    /**
     * Sets card_state_id
     *
     * @param int $card_state_id card_state_id
     *
     * @return $this
     */
    public function setCardStateId($card_state_id)
    {
        $this->container['card_state_id'] = $card_state_id;

        return $this;
    }

    /**
     * Gets original_amount
     *
     * @return float
     */
    public function getOriginalAmount()
    {
        return $this->container['original_amount'];
    }

    /**
     * Sets original_amount
     *
     * @param float $original_amount original_amount
     *
     * @return $this
     */
    public function setOriginalAmount($original_amount)
    {
        $this->container['original_amount'] = $original_amount;

        return $this;
    }

    /**
     * Gets refund_amount
     *
     * @return float
     */
    public function getRefundAmount()
    {
        return $this->container['refund_amount'];
    }

    /**
     * Sets refund_amount
     *
     * @param float $refund_amount refund_amount
     *
     * @return $this
     */
    public function setRefundAmount($refund_amount)
    {
        $this->container['refund_amount'] = $refund_amount;

        return $this;
    }

    /**
     * Gets is_full_capture
     *
     * @return bool
     */
    public function getIsFullCapture()
    {
        return $this->container['is_full_capture'];
    }

    /**
     * Sets is_full_capture
     *
     * @param bool $is_full_capture is_full_capture
     *
     * @return $this
     */
    public function setIsFullCapture($is_full_capture)
    {
        $this->container['is_full_capture'] = $is_full_capture;

        return $this;
    }

    /**
     * Gets authorized_amount
     *
     * @return float
     */
    public function getAuthorizedAmount()
    {
        return $this->container['authorized_amount'];
    }

    /**
     * Sets authorized_amount
     *
     * @param float $authorized_amount authorized_amount
     *
     * @return $this
     */
    public function setAuthorizedAmount($authorized_amount)
    {
        $this->container['authorized_amount'] = $authorized_amount;

        return $this;
    }

    /**
     * Gets is_pre_authorized
     *
     * @return bool
     */
    public function getIsPreAuthorized()
    {
        return $this->container['is_pre_authorized'];
    }

    /**
     * Sets is_pre_authorized
     *
     * @param bool $is_pre_authorized is_pre_authorized
     *
     * @return $this
     */
    public function setIsPreAuthorized($is_pre_authorized)
    {
        $this->container['is_pre_authorized'] = $is_pre_authorized;

        return $this;
    }

    /**
     * Gets amount_for_funding
     *
     * @return float
     */
    public function getAmountForFunding()
    {
        return $this->container['amount_for_funding'];
    }

    /**
     * Sets amount_for_funding
     *
     * @param float $amount_for_funding amount_for_funding
     *
     * @return $this
     */
    public function setAmountForFunding($amount_for_funding)
    {
        $this->container['amount_for_funding'] = $amount_for_funding;

        return $this;
    }

    /**
     * Gets card_state
     *
     * @return \SplititSdkClient\Model\CardStateLogs
     */
    public function getCardState()
    {
        return $this->container['card_state'];
    }

    /**
     * Sets card_state
     *
     * @param \SplititSdkClient\Model\CardStateLogs $card_state card_state
     *
     * @return $this
     */
    public function setCardState($card_state)
    {
        $this->container['card_state'] = $card_state;

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
     * Gets processor
     *
     * @return \SplititSdkClient\Model\Processors
     */
    public function getProcessor()
    {
        return $this->container['processor'];
    }

    /**
     * Sets processor
     *
     * @param \SplititSdkClient\Model\Processors $processor processor
     *
     * @return $this
     */
    public function setProcessor($processor)
    {
        $this->container['processor'] = $processor;

        return $this;
    }

    /**
     * Gets fees_documents
     *
     * @return \SplititSdkClient\Model\FeesDocuments[]
     */
    public function getFeesDocuments()
    {
        return $this->container['fees_documents'];
    }

    /**
     * Sets fees_documents
     *
     * @param \SplititSdkClient\Model\FeesDocuments[] $fees_documents fees_documents
     *
     * @return $this
     */
    public function setFeesDocuments($fees_documents)
    {
        $this->container['fees_documents'] = $fees_documents;

        return $this;
    }

    /**
     * Gets funding_collect_document_details
     *
     * @return \SplititSdkClient\Model\FundingCollectDocumentDetails[]
     */
    public function getFundingCollectDocumentDetails()
    {
        return $this->container['funding_collect_document_details'];
    }

    /**
     * Sets funding_collect_document_details
     *
     * @param \SplititSdkClient\Model\FundingCollectDocumentDetails[] $funding_collect_document_details funding_collect_document_details
     *
     * @return $this
     */
    public function setFundingCollectDocumentDetails($funding_collect_document_details)
    {
        $this->container['funding_collect_document_details'] = $funding_collect_document_details;

        return $this;
    }

    /**
     * Gets installment_payment_gateway_transaction_logs
     *
     * @return \SplititSdkClient\Model\InstallmentPaymentGatewayTransactionLogs[]
     */
    public function getInstallmentPaymentGatewayTransactionLogs()
    {
        return $this->container['installment_payment_gateway_transaction_logs'];
    }

    /**
     * Sets installment_payment_gateway_transaction_logs
     *
     * @param \SplititSdkClient\Model\InstallmentPaymentGatewayTransactionLogs[] $installment_payment_gateway_transaction_logs installment_payment_gateway_transaction_logs
     *
     * @return $this
     */
    public function setInstallmentPaymentGatewayTransactionLogs($installment_payment_gateway_transaction_logs)
    {
        $this->container['installment_payment_gateway_transaction_logs'] = $installment_payment_gateway_transaction_logs;

        return $this;
    }

    /**
     * Gets transfer_document_details
     *
     * @return \SplititSdkClient\Model\TransferDocumentDetails[]
     */
    public function getTransferDocumentDetails()
    {
        return $this->container['transfer_document_details'];
    }

    /**
     * Sets transfer_document_details
     *
     * @param \SplititSdkClient\Model\TransferDocumentDetails[] $transfer_document_details transfer_document_details
     *
     * @return $this
     */
    public function setTransferDocumentDetails($transfer_document_details)
    {
        $this->container['transfer_document_details'] = $transfer_document_details;

        return $this;
    }

    /**
     * Gets merchant_account_type
     *
     * @return \SplititSdkClient\Model\MerchantAccountType
     */
    public function getMerchantAccountType()
    {
        return $this->container['merchant_account_type'];
    }

    /**
     * Sets merchant_account_type
     *
     * @param \SplititSdkClient\Model\MerchantAccountType $merchant_account_type merchant_account_type
     *
     * @return $this
     */
    public function setMerchantAccountType($merchant_account_type)
    {
        $this->container['merchant_account_type'] = $merchant_account_type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \SplititSdkClient\Model\InstallmentStatus
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \SplititSdkClient\Model\InstallmentStatus $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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

