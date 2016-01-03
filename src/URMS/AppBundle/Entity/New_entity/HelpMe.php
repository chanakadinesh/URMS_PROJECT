<?php
/**
 * Created by PhpStorm.
 * User: Chanaka
 * Date: 1/1/2016
 * Time: 2:42 PM
 */

namespace URMS\AppBundle\Entity\New_entity;


class HelpMe
{
    private $subject;
    private $message;
    private $senderEmail;
    private $reciever;
    private $userIndex;
    private $date;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
    /**
     * @return mixed
     */
    public function getUserIndex()
    {
        return $this->userIndex;
    }

    /**
     * @param mixed $userIndex
     */
    public function setUserIndex($userIndex)
    {
        $this->userIndex = $userIndex;
    }
    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     * @return HelpMe
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     * @return HelpMe
     */
    public function setMessage($message)
    {
        $this->message = $message;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSenderEmail()
    {
        return $this->senderEmail;
    }

    /**
     * @param mixed $senderEmail
     * @return HelpMe
     */
    public function setSenderEmail($senderEmail)
    {
        $this->senderEmail = $senderEmail;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReciever()
    {
        return $this->reciever;
    }

    /**
     * @param mixed $reciever
     * @return HelpMe
     */
    public function setReciever($reciever)
    {
        $this->reciever = $reciever;
        return $this;
    }

    public function getSubjects(){
        return array(
            'Need to Register'=>'URMS-MAIL:Request for Sign UP',
            'Forgot Username/Password'=>'URMS-MAIL:Request for Username or Password'
        );
    }
}