<?php

namespace Smoney\Smoney\Facade;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;

/**
 * Class CardFacade
 */
class UserCardRegistrationFacade
{
    /**
     * @var CardFacade $card
     * @SerializedName("Card")
     * @Type("Smoney\Smoney\Facade\CardRegistrationFacade")
     */
    public $card;

    /**
     * @var string $urlReturn
     * @SerializedName("UrlReturn")
     * @Type("string")
     */
    public $urlReturn;

    /**
     * @var string $urlCallback
     * @SerializedName("UrlCallback")
     * @Type("string")
     */
    public $urlCallback;
}
