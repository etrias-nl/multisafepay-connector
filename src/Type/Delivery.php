<?php


namespace Etrias\MultiSafePayConnector\Type;


class Delivery
{
    /** @var string|null */
    protected $firstName;

    /** @var string|null */
    protected $lastName;

    /** @var string|null */
    protected $address1;

    /** @var string|null */
    protected $address2;

    /** @var string|null */
    protected $houseNumber;

    /** @var string|null */
    protected $zipCode;

    /** @var string|null */
    protected $city;

    /** @var string|null */
    protected $state;

    /** @var string|null */
    protected $country;

    /** @var string|null */
    protected $phone;

    /** @var string|null */
    protected $email;

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     * @return Delivery
     */
    public function setFirstName(?string $firstName): Delivery
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
     * @return Delivery
     */
    public function setLastName(?string $lastName): Delivery
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
     * @return Delivery
     */
    public function setAddress1(?string $address1): Delivery
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddress2(): ?string
    {
        return $this->address2;
    }

    /**
     * @param string|null $address2
     * @return Delivery
     */
    public function setAddress2(?string $address2): Delivery
    {
        $this->address2 = $address2;
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
     * @return Delivery
     */
    public function setHouseNumber(?string $houseNumber): Delivery
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
     * @return Delivery
     */
    public function setZipCode(?string $zipCode): Delivery
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
     * @return Delivery
     */
    public function setCity(?string $city): Delivery
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @param string|null $state
     * @return Delivery
     */
    public function setState(?string $state): Delivery
    {
        $this->state = $state;
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
     * @return Delivery
     */
    public function setCountry(?string $country): Delivery
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
     * @return Delivery
     */
    public function setPhone(?string $phone): Delivery
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
     * @return Delivery
     */
    public function setEmail(?string $email): Delivery
    {
        $this->email = $email;
        return $this;
    }
}