<?php declare(strict_types=1);
/**
 * Invoice.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Retail Procurement Payments.
 *
 * The Selling Partner API for Retail Procurement Payments provides programmatic access to vendors payments data.
 *
 * The version of the OpenAPI document: v1
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices;

use Plenty\AmazonPHP\SellingPartner\ModelInterface;
use Plenty\AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Invoice implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const INVOICE_TYPE_INVOICE = 'Invoice';

    public const INVOICE_TYPE_CREDIT_NOTE = 'CreditNote';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static /** [COMPAT] string */ $openAPIModelName = 'Invoice';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $openAPITypes = [
        'invoice_type' => 'string',
        'id' => 'string',
        'reference_number' => 'string',
        'date' => '\DateTime',
        'remit_to_party' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification',
        'ship_to_party' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification',
        'ship_from_party' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification',
        'bill_to_party' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification',
        'payment_terms' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\PaymentTerms',
        'invoice_total' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\Money',
        'tax_details' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]',
        'additional_details' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\AdditionalDetails[]',
        'charge_details' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\ChargeDetails[]',
        'allowance_details' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\AllowanceDetails[]',
        'items' => '\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\InvoiceItem[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static /** [COMPAT] array */ $openAPIFormats = [
        'invoice_type' => null,
        'id' => null,
        'reference_number' => null,
        'date' => 'date-time',
        'remit_to_party' => null,
        'ship_to_party' => null,
        'ship_from_party' => null,
        'bill_to_party' => null,
        'payment_terms' => null,
        'invoice_total' => null,
        'tax_details' => null,
        'additional_details' => null,
        'charge_details' => null,
        'allowance_details' => null,
        'items' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $attributeMap = [
        'invoice_type' => 'invoiceType',
        'id' => 'id',
        'reference_number' => 'referenceNumber',
        'date' => 'date',
        'remit_to_party' => 'remitToParty',
        'ship_to_party' => 'shipToParty',
        'ship_from_party' => 'shipFromParty',
        'bill_to_party' => 'billToParty',
        'payment_terms' => 'paymentTerms',
        'invoice_total' => 'invoiceTotal',
        'tax_details' => 'taxDetails',
        'additional_details' => 'additionalDetails',
        'charge_details' => 'chargeDetails',
        'allowance_details' => 'allowanceDetails',
        'items' => 'items',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $setters = [
        'invoice_type' => 'setInvoiceType',
        'id' => 'setId',
        'reference_number' => 'setReferenceNumber',
        'date' => 'setDate',
        'remit_to_party' => 'setRemitToParty',
        'ship_to_party' => 'setShipToParty',
        'ship_from_party' => 'setShipFromParty',
        'bill_to_party' => 'setBillToParty',
        'payment_terms' => 'setPaymentTerms',
        'invoice_total' => 'setInvoiceTotal',
        'tax_details' => 'setTaxDetails',
        'additional_details' => 'setAdditionalDetails',
        'charge_details' => 'setChargeDetails',
        'allowance_details' => 'setAllowanceDetails',
        'items' => 'setItems',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static /** [COMPAT] array */ $getters = [
        'invoice_type' => 'getInvoiceType',
        'id' => 'getId',
        'reference_number' => 'getReferenceNumber',
        'date' => 'getDate',
        'remit_to_party' => 'getRemitToParty',
        'ship_to_party' => 'getShipToParty',
        'ship_from_party' => 'getShipFromParty',
        'bill_to_party' => 'getBillToParty',
        'payment_terms' => 'getPaymentTerms',
        'invoice_total' => 'getInvoiceTotal',
        'tax_details' => 'getTaxDetails',
        'additional_details' => 'getAdditionalDetails',
        'charge_details' => 'getChargeDetails',
        'allowance_details' => 'getAllowanceDetails',
        'items' => 'getItems',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected /** [COMPAT] array */ $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['invoice_type'] = $data['invoice_type'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['reference_number'] = $data['reference_number'] ?? null;
        $this->container['date'] = $data['date'] ?? null;
        $this->container['remit_to_party'] = $data['remit_to_party'] ?? null;
        $this->container['ship_to_party'] = $data['ship_to_party'] ?? null;
        $this->container['ship_from_party'] = $data['ship_from_party'] ?? null;
        $this->container['bill_to_party'] = $data['bill_to_party'] ?? null;
        $this->container['payment_terms'] = $data['payment_terms'] ?? null;
        $this->container['invoice_total'] = $data['invoice_total'] ?? null;
        $this->container['tax_details'] = $data['tax_details'] ?? null;
        $this->container['additional_details'] = $data['additional_details'] ?? null;
        $this->container['charge_details'] = $data['charge_details'] ?? null;
        $this->container['allowance_details'] = $data['allowance_details'] ?? null;
        $this->container['items'] = $data['items'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getInvoiceTypeAllowableValues() : array
    {
        return [
            self::INVOICE_TYPE_INVOICE,
            self::INVOICE_TYPE_CREDIT_NOTE,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['invoice_type'] === null) {
            $invalidProperties[] = "'invoice_type' can't be null";
        }
        $allowedValues = $this->getInvoiceTypeAllowableValues();

        if (null !== $this->container['invoice_type'] && !\in_array($this->container['invoice_type'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'invoice_type', must be one of '%s'",
                $this->container['invoice_type'],
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }

        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }

        if ($this->container['remit_to_party'] === null) {
            $invalidProperties[] = "'remit_to_party' can't be null";
        }

        if ($this->container['invoice_total'] === null) {
            $invalidProperties[] = "'invoice_total' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets invoice_type.
     */
    public function getInvoiceType() : string
    {
        return $this->container['invoice_type'];
    }

    /**
     * Sets invoice_type.
     *
     * @param string $invoice_type identifies the type of invoice
     */
    public function setInvoiceType(string $invoice_type) : self
    {
        $allowedValues = $this->getInvoiceTypeAllowableValues();

        if (!\in_array($invoice_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'invoice_type', must be one of '%s'",
                    $invoice_type,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['invoice_type'] = $invoice_type;

        return $this;
    }

    /**
     * Gets id.
     */
    public function getId() : string
    {
        return $this->container['id'];
    }

    /**
     * Sets id.
     *
     * @param string $id Unique number relating to the charges defined in this document. This will be invoice number if the document type is Invoice or CreditNote number if the document type is Credit Note. Failure to provide this reference will result in a rejection.
     */
    public function setId(string $id) : self
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets reference_number.
     */
    public function getReferenceNumber() : ?string
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number.
     *
     * @param null|string $reference_number an additional unique reference number used for regulatory or other purposes
     */
    public function setReferenceNumber(?string $reference_number) : self
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets date.
     *
     * @return \DateTime|\DateTimeImmutable
     */
    public function getDate() : \DateTimeInterface
    {
        return $this->container['date'];
    }

    /**
     * Sets date.
     *
     * @param \DateTime $date defines a date and time according to ISO8601
     */
    public function setDate(\DateTimeInterface $date) : self
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets remit_to_party.
     */
    public function getRemitToParty() : PartyIdentification
    {
        return $this->container['remit_to_party'];
    }

    /**
     * Sets remit_to_party.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification $remit_to_party remit_to_party
     */
    public function setRemitToParty(PartyIdentification $remit_to_party) : self
    {
        $this->container['remit_to_party'] = $remit_to_party;

        return $this;
    }

    /**
     * Gets ship_to_party.
     */
    public function getShipToParty() : ?PartyIdentification
    {
        return $this->container['ship_to_party'];
    }

    /**
     * Sets ship_to_party.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification $ship_to_party ship_to_party
     */
    public function setShipToParty(?PartyIdentification $ship_to_party) : self
    {
        $this->container['ship_to_party'] = $ship_to_party;

        return $this;
    }

    /**
     * Gets ship_from_party.
     */
    public function getShipFromParty() : ?PartyIdentification
    {
        return $this->container['ship_from_party'];
    }

    /**
     * Sets ship_from_party.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification $ship_from_party ship_from_party
     */
    public function setShipFromParty(?PartyIdentification $ship_from_party) : self
    {
        $this->container['ship_from_party'] = $ship_from_party;

        return $this;
    }

    /**
     * Gets bill_to_party.
     */
    public function getBillToParty() : ?PartyIdentification
    {
        return $this->container['bill_to_party'];
    }

    /**
     * Sets bill_to_party.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\PartyIdentification $bill_to_party bill_to_party
     */
    public function setBillToParty(?PartyIdentification $bill_to_party) : self
    {
        $this->container['bill_to_party'] = $bill_to_party;

        return $this;
    }

    /**
     * Gets payment_terms.
     */
    public function getPaymentTerms() : ?PaymentTerms
    {
        return $this->container['payment_terms'];
    }

    /**
     * Sets payment_terms.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\PaymentTerms $payment_terms payment_terms
     */
    public function setPaymentTerms(?PaymentTerms $payment_terms) : self
    {
        $this->container['payment_terms'] = $payment_terms;

        return $this;
    }

    /**
     * Gets invoice_total.
     */
    public function getInvoiceTotal() : Money
    {
        return $this->container['invoice_total'];
    }

    /**
     * Sets invoice_total.
     *
     * @param \Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\Money $invoice_total invoice_total
     */
    public function setInvoiceTotal(Money $invoice_total) : self
    {
        $this->container['invoice_total'] = $invoice_total;

        return $this;
    }

    /**
     * Gets tax_details.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[]
     */
    public function getTaxDetails() : ?array
    {
        return $this->container['tax_details'];
    }

    /**
     * Sets tax_details.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\TaxDetails[] $tax_details total tax amount details for all line items
     */
    public function setTaxDetails(?array $tax_details) : self
    {
        $this->container['tax_details'] = $tax_details;

        return $this;
    }

    /**
     * Gets additional_details.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\AdditionalDetails[]
     */
    public function getAdditionalDetails() : ?array
    {
        return $this->container['additional_details'];
    }

    /**
     * Sets additional_details.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\AdditionalDetails[] $additional_details additional details provided by the selling party, for tax related or other purposes
     */
    public function setAdditionalDetails(?array $additional_details) : self
    {
        $this->container['additional_details'] = $additional_details;

        return $this;
    }

    /**
     * Gets charge_details.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\ChargeDetails[]
     */
    public function getChargeDetails() : ?array
    {
        return $this->container['charge_details'];
    }

    /**
     * Sets charge_details.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\ChargeDetails[] $charge_details total charge amount details for all line items
     */
    public function setChargeDetails(?array $charge_details) : self
    {
        $this->container['charge_details'] = $charge_details;

        return $this;
    }

    /**
     * Gets allowance_details.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\AllowanceDetails[]
     */
    public function getAllowanceDetails() : ?array
    {
        return $this->container['allowance_details'];
    }

    /**
     * Sets allowance_details.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\AllowanceDetails[] $allowance_details total allowance amount details for all line items
     */
    public function setAllowanceDetails(?array $allowance_details) : self
    {
        $this->container['allowance_details'] = $allowance_details;

        return $this;
    }

    /**
     * Gets items.
     *
     * @return null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\InvoiceItem[]
     */
    public function getItems() : ?array
    {
        return $this->container['items'];
    }

    /**
     * Sets items.
     *
     * @param null|\Plenty\AmazonPHP\SellingPartner\Model\VendorInvoices\InvoiceItem[] $items the list of invoice items
     */
    public function setItems(?array $items) : self
    {
        $this->container['items'] = $items;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset): mixed
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : mixed
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
