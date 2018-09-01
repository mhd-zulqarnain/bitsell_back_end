<?php

class users
{
    var $uid;
    var $password;
    var $email;

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }




}

class trade{
    var $tid;
    var $uid;
    var $bid;
    var $u_limit;
    var $d_limit;
    var $dead_line;
    var $currency_type;
    var $amount;
    var $price;

    /**
     * @return mixed
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param mixed $tid
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
    }

    /**
     * @return mixed
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param mixed $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return mixed
     */
    public function getBid()
    {
        return $this->bid;
    }

    /**
     * @param mixed $bid
     */
    public function setBid($bid)
    {
        $this->bid = $bid;
    }

    /**
     * @return mixed
     */
    public function getULimit()
    {
        return $this->u_limit;
    }

    /**
     * @param mixed $u_limit
     */
    public function setULimit($u_limit)
    {
        $this->u_limit = $u_limit;
    }

    /**
     * @return mixed
     */
    public function getDLimit()
    {
        return $this->d_limit;
    }

    /**
     * @param mixed $d_limit
     */
    public function setDLimit($d_limit)
    {
        $this->d_limit = $d_limit;
    }

    /**
     * @return mixed
     */
    public function getDeadLine()
    {
        return $this->dead_line;
    }

    /**
     * @param mixed $dead_line
     */
    public function setDeadLine($dead_line)
    {
        $this->dead_line = $dead_line;
    }

    /**
     * @return mixed
     */
    public function getCurrencyType()
    {
        return $this->currency_type;
    }

    /**
     * @param mixed $currency_type
     */
    public function setCurrencyType($currency_type)
    {
        $this->currency_type = $currency_type;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


}
?>