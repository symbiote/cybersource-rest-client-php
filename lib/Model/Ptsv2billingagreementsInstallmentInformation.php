<?php
/**
 * Ptsv2billingagreementsInstallmentInformation
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * Ptsv2billingagreementsInstallmentInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Ptsv2billingagreementsInstallmentInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsv2billingagreements_installmentInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'alertPreference' => 'string',
        'firstInstallmentDate' => 'string',
        'identifier' => 'string',
        'lastInstallmentDate' => 'string',
        'maxAmount' => 'string',
        'minAmount' => 'string',
        'paymentType' => 'string',
        'preferredDay' => 'string',
        'sequence' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'alertPreference' => null,
        'firstInstallmentDate' => null,
        'identifier' => null,
        'lastInstallmentDate' => null,
        'maxAmount' => null,
        'minAmount' => null,
        'paymentType' => null,
        'preferredDay' => null,
        'sequence' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'alertPreference' => 'alertPreference',
        'firstInstallmentDate' => 'firstInstallmentDate',
        'identifier' => 'identifier',
        'lastInstallmentDate' => 'lastInstallmentDate',
        'maxAmount' => 'maxAmount',
        'minAmount' => 'minAmount',
        'paymentType' => 'paymentType',
        'preferredDay' => 'preferredDay',
        'sequence' => 'sequence'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'alertPreference' => 'setAlertPreference',
        'firstInstallmentDate' => 'setFirstInstallmentDate',
        'identifier' => 'setIdentifier',
        'lastInstallmentDate' => 'setLastInstallmentDate',
        'maxAmount' => 'setMaxAmount',
        'minAmount' => 'setMinAmount',
        'paymentType' => 'setPaymentType',
        'preferredDay' => 'setPreferredDay',
        'sequence' => 'setSequence'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'alertPreference' => 'getAlertPreference',
        'firstInstallmentDate' => 'getFirstInstallmentDate',
        'identifier' => 'getIdentifier',
        'lastInstallmentDate' => 'getLastInstallmentDate',
        'maxAmount' => 'getMaxAmount',
        'minAmount' => 'getMinAmount',
        'paymentType' => 'getPaymentType',
        'preferredDay' => 'getPreferredDay',
        'sequence' => 'getSequence'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['alertPreference'] = isset($data['alertPreference']) ? $data['alertPreference'] : null;
        $this->container['firstInstallmentDate'] = isset($data['firstInstallmentDate']) ? $data['firstInstallmentDate'] : null;
        $this->container['identifier'] = isset($data['identifier']) ? $data['identifier'] : null;
        $this->container['lastInstallmentDate'] = isset($data['lastInstallmentDate']) ? $data['lastInstallmentDate'] : null;
        $this->container['maxAmount'] = isset($data['maxAmount']) ? $data['maxAmount'] : null;
        $this->container['minAmount'] = isset($data['minAmount']) ? $data['minAmount'] : null;
        $this->container['paymentType'] = isset($data['paymentType']) ? $data['paymentType'] : null;
        $this->container['preferredDay'] = isset($data['preferredDay']) ? $data['preferredDay'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets alertPreference
     * @return string
     */
    public function getAlertPreference()
    {
        return $this->container['alertPreference'];
    }

    /**
     * Sets alertPreference
     * @param string $alertPreference Applicable only for SI. Required in case the authentication is initiated for SI registration. Valid Values: - `SMS` - `EMAIL` - `BOTH`
     * @return $this
     */
    public function setAlertPreference($alertPreference)
    {
        $this->container['alertPreference'] = $alertPreference;

        return $this;
    }

    /**
     * Gets firstInstallmentDate
     * @return string
     */
    public function getFirstInstallmentDate()
    {
        return $this->container['firstInstallmentDate'];
    }

    /**
     * Sets firstInstallmentDate
     * @param string $firstInstallmentDate Date of the first installment payment. Format: YYMMDD. When you do not include this field, CyberSource sends a string of six zeros (000000) to the processor. For details, see \"Installment Payments on CyberSource through VisaNet\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  This field is supported only for Crediario installment payments in Brazil on CyberSource through VisaNet.  The value for this field corresponds to the following data in the TC 33 capture file: - Record: CP01 TCR9 - Position: 42-47 - Field: Date of First Installment
     * @return $this
     */
    public function setFirstInstallmentDate($firstInstallmentDate)
    {
        $this->container['firstInstallmentDate'] = $firstInstallmentDate;

        return $this;
    }

    /**
     * Gets identifier
     * @return string
     */
    public function getIdentifier()
    {
        return $this->container['identifier'];
    }

    /**
     * Sets identifier
     * @param string $identifier Standing Instruction/Installment identifier.
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->container['identifier'] = $identifier;

        return $this;
    }

    /**
     * Gets lastInstallmentDate
     * @return string
     */
    public function getLastInstallmentDate()
    {
        return $this->container['lastInstallmentDate'];
    }

    /**
     * Sets lastInstallmentDate
     * @param string $lastInstallmentDate End date of the SI transactions. Cannot be later than card expiry date. Ideally this can be set to expiry date. Required in case the authentication is initiated for SI registration.
     * @return $this
     */
    public function setLastInstallmentDate($lastInstallmentDate)
    {
        $this->container['lastInstallmentDate'] = $lastInstallmentDate;

        return $this;
    }

    /**
     * Gets maxAmount
     * @return string
     */
    public function getMaxAmount()
    {
        return $this->container['maxAmount'];
    }

    /**
     * Sets maxAmount
     * @param string $maxAmount Maximum Amount for which SI can be initiated. Required in case the authentication is initiated for SI registration.
     * @return $this
     */
    public function setMaxAmount($maxAmount)
    {
        $this->container['maxAmount'] = $maxAmount;

        return $this;
    }

    /**
     * Gets minAmount
     * @return string
     */
    public function getMinAmount()
    {
        return $this->container['minAmount'];
    }

    /**
     * Sets minAmount
     * @param string $minAmount Minimum Amount for which SI can be initiated. Required in case the authentication is initiated for SI registration.
     * @return $this
     */
    public function setMinAmount($minAmount)
    {
        $this->container['minAmount'] = $minAmount;

        return $this;
    }

    /**
     * Gets paymentType
     * @return string
     */
    public function getPaymentType()
    {
        return $this->container['paymentType'];
    }

    /**
     * Sets paymentType
     * @param string $paymentType Payment plan for the installments.  Possible values: - 0 (default): Regular installment. This value is not allowed for airline transactions. - 1: Installment payment with down payment. - 2: Installment payment without down payment. This value is supported only for airline transactions. - 3: Installment payment; down payment and boarding fee will follow. This value is supported only for airline transactions. - 4: Down payment only; regular installment payment will follow. - 5: Boarding fee only. This value is supported only for airline transactions.  This field is supported only for installment payments with Visa on CyberSource through VisaNet in Brazil.  For details, see \"Installment Payments on CyberSource through VisaNet\" in the [Credit Card Services Using the SCMP API Guide.](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  The value for this field corresponds to the following data in the TC 33 capture file5: - Record: CP07 TCR1 - Position: 9 - Field: Merchant Installment Supporting Information
     * @return $this
     */
    public function setPaymentType($paymentType)
    {
        $this->container['paymentType'] = $paymentType;

        return $this;
    }

    /**
     * Gets preferredDay
     * @return string
     */
    public function getPreferredDay()
    {
        return $this->container['preferredDay'];
    }

    /**
     * Sets preferredDay
     * @param string $preferredDay Preferred date for initiating the SI transaction every month. This field need not be sent in case the SI has to be initiated as and when required, e.g., topping up the wallet, etc.
     * @return $this
     */
    public function setPreferredDay($preferredDay)
    {
        $this->container['preferredDay'] = $preferredDay;

        return $this;
    }

    /**
     * Gets sequence
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     * @param int $sequence Installment number when making payments in installments. Used along with `totalCount` to track which payment is being processed.  For example, the second of 5 payments would be passed to CyberSource as `sequence` = 2 and `totalCount` = 5.  For details, see \"Installment Payments\" in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/)  #### Chase Paymentech Solutions and FDC Compass This field is optional because this value is required in the merchant descriptors. For details, see \"Chase Paymentech Solutions Merchant Descriptors\" and \"FDC Compass Merchant Descriptors\" in the [Merchant Descriptors Using the SCMP API] (https://apps.cybersource.com/library/documentation/dev_guides/Merchant_Descriptors_SCMP_API/html/)  #### CyberSource through VisaNet When you do not include this field in a request for a Crediario installment payment, CyberSource sends a value of 0 to the processor.  For Crediario installment payments, the value for this field corresponds to the following data in the TC 33 capture file*: - Record: CP01 TCR9 - Position: 38-40 - Field: Installment Payment Number  * The TC 33 Capture file contains information about the purchases and refunds that a merchant submits to CyberSource. CyberSource through VisaNet creates the TC 33 Capture file at the end of the day and sends it to the merchant's acquirer, who uses this information to facilitate end-of-day clearing processing with payment card companies.
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     * @param  integer $offset Offset
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


