<?php

declare(strict_types=1);

namespace Billogram\Api\Models\Customer;

/**
 * @author Ibrahim Hizeoui <ibrahimhizeoui@gmail.com>
 */

class CustomerContact
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var string
     */
    private $orgNo;

    /**
     * CustomerContact constructor.
     * @param string $name
     * @param string $notes
     * @param string $orgNo
     */
    public function __construct($name, $notes, $orgNo)
    {
        $this->name = $name;
        $this->notes = $notes;
        $this->orgNo = $orgNo;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param string $notes
     */
    public function setNotes(string $notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return string
     */
    public function getOrgNo()
    {
        return $this->orgNo;
    }

    /**
     * @param string $orgNo
     */
    public function setOrgNo(string $orgNo)
    {
        $this->orgNo = $orgNo;
    }

}