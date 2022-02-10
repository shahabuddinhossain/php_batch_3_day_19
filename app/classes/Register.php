<?php


namespace App\classes;


class Register
{
    protected $name;
    protected $email;
    protected $mobile;
    protected $result;

    public function __construct($post=null)
    {
        if(isset($post['full_name']))
        {
            $this->name = $post['full_name'];
            $this->email = $post['email'];
            $this->mobile = $post['mobile'];
        }

    }

    public function add()
    {
        session_start();
        $_SESSION['name'] = $this->name;
        $_SESSION['email'] = $this->email;
        $_SESSION['mobile'] = $this->name;

        return "Data Stored Successfully";
    }

    public function allData()
    {
        $this->result   =   [
            $this->name,
            $this->email,
            $this->name,
        ];
        return $this->result;
    }

}