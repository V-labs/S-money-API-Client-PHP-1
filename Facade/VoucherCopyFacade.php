<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class VoucherCopyFacade
 */
class VoucherCopyFacade
{
    /**
     * @var int $id
     * @SerializedName("Id")
     * @Type("integer")
     */
    public $id;

    /**
     * @var string $name
     * @SerializedName("Name")
     * @Type("string")
     */
    public $name;

    /**
     * @var string $type
     * @SerializedName("Type")
     * @Type("string")
     */
    public $type;

    /**
     * @var int $size
     * @SerializedName("Size")
     * @Type("integer")
     */
    public $size;

    /**
     * @var string $href
     * @SerializedName("Href")
     * @Type("string")
     */
    public $href;

    /**
     * @var string $contentType
     * @SerializedName("ContentType")
     * @Type("string")
     */
    public $contentType;

    /**
     * @var string $status
     * @SerializedName("Status")
     * @Type("integer")
     */
    public $status;

    /**
     * @var string $message
     * @SerializedName("Message")
     * @Type("string")
     */
    public $message;

    /**
     * @var string $additionalStatus
     * @SerializedName("AdditionalStatus")
     * @Type("integer")
     */
    public $additionnalStatus;

    /**
     * @var string $treatmentDate
     * @SerializedName("TreatmentDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $treatmentDate;

    /**
     * @var string $receivedDate
     * @SerializedName("ReceivedDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $receivedDate;
}
