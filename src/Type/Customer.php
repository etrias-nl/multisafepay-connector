<?php


namespace Etrias\MultiSafePayConnector\Type;


class Customer
{
    /** @var string|null */
    protected $locale;

    /** @var string|null */
    protected $ipAddress;

    /** @var string|null */
    protected $firstName;

    /** @var string|null */
    protected $lastName;

    /** @var string|null */
    protected $address1;

    /** @var string|null */
    protected $houseNumber;

    /** @var string|null */
    protected $zipCode;

    /** @var string|null */
    protected $city;

    /** @var string|null ISO 3166-1 */
    protected $country;

    /** @var string|null */
    protected $phone;

    /** @var string|null */
    protected $email;

    /** @var string|null */
    protected $referrer;

    /** @var string|null */
    protected $userAgent;

    /**
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }

    /**
     * @param string|null $locale
     * @return Customer
     */
    public function setLocale(?string $locale): Customer
    {
        $this->locale = $locale;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIpAddress(): ?string
    {
        return $this->ipAddress;
    }

    /**
     * @param string|null $ipAddress
     * @return Customer
     */
    public function setIpAddress(?string $ipAddress): Customer
    {
        $this->ipAddress = $ipAddress;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     * @return Customer
     */
    public function setFirstName(?string $firstName): Customer
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     * @return Customer
     */
    public function setLastName(?string $lastName): Customer
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress1(): ?string
    {
        return $this->address1;
    }

    /**
     * @param string|null $address1
     * @return Customer
     */
    public function setAddress1(?string $address1): Customer
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getHouseNumber(): ?string
    {
        return $this->houseNumber;
    }

    /**
     * @param string|null $houseNumber
     * @return Customer
     */
    public function setHouseNumber(?string $houseNumber): Customer
    {
        $this->houseNumber = $houseNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|null $zipCode
     * @return Customer
     */
    public function setZipCode(?string $zipCode): Customer
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return Customer
     */
    public function setCity(?string $city): Customer
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|null $country
     * @return Customer
     */
    public function setCountry(?string $country): Customer
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPhone(): ?string
    {
        return $this->phone;
    }

    /**
     * @param string|null $phone
     * @return Customer
     */
    public function setPhone(?string $phone): Customer
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Customer
     */
    public function setEmail(?string $email): Customer
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getReferrer(): ?string
    {
        return $this->referrer;
    }

    /**
     * @param string|null $referrer
     * @return Customer
     */
    public function setReferrer(?string $referrer): Customer
    {
        $this->referrer = $referrer;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getUserAgent(): ?string
    {
        return $this->userAgent;
    }

    /**
     * @param string|null $userAgent
     * @return Customer
     */
    public function setUserAgent(?string $userAgent): Customer
    {
        $this->userAgent = $userAgent;
        return $this;
    }
}