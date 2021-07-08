<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class KycFacade
 */
class KycAttachmentFacade
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
     * @var int $type
     * @SerializedName("Type")
     * @Type("integer")
     */
    public $type;

    /**
     * @var string $contentType
     * @SerializedName("ContentType")
     * @Type("string")
     */
    public $contentType;

    /**
     * @var integer $size
     * @SerializedName("Size")
     * @Type("integer")
     */
    public $size;

    /**
     * @var integer $status
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
     * @var integer $additionalStatus
     * @SerializedName("AdditionalStatus")
     * @Type("integer")
     */
    public $additionalStatus;

    /**
     * @var DateTime $treatmentDate
     * @SerializedName("TreatmentDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $treatmentDate;

    /**
     * @var DateTime $receivedDate
     * @SerializedName("ReceivedDate")
     * @Type("DateTime<'Y-m-d\TH:i:s+'>")
     */
    public $receivedDate;

    /**
     * @var string $href
     * @SerializedName("Href")
     * @Type("href")
     */
    public $href;
}
