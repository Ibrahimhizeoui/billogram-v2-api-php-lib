<?php
declare(strict_types=1);

namespace Billogram\Model\Setting;


use Billogram\Model\CreatableFromArray;

class AutomaticWriteOff implements CreatableFromArray
{
    /**
     * @var string
     */
    private $setting;

    /**
     * @var int
     */
    private $amount;

    public function toArray(){
        $data = [];
        if($this->setting !== null && $this->amount !== null){
            $data['settings'] = $this->setting;
            $data['amount'] = $this->amount;
        }

    return $data;
    }

    /**
     * Create an API response object from the HTTP response from the API server.
     *
     * @param array $data
     *
     * @return self
     */
    public static function createFromArray(array $data)
    {
        $automaticWriteoff = new self();
        $automaticWriteoff->setting = $data['settings'] ?? null;
        $automaticWriteoff->amount = $data['settings'] ?? null;

        return $automaticWriteoff;
    }
}