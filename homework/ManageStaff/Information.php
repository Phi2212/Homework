<?php

namespace ManageStaff;

abstract class Information
{
    protected string $fullname;
    protected string $username;
    protected string $phone;
    protected string $role;
    protected string $team;
    protected string $dayoff;

    public function __construct(string $fullname, string $username,
        string $phone, string $role, string $team, string $dayoff)
    {
        $this->fullname = $fullname;
        $this->username = $username;
        $this->phone = $phone;
        $this->role = $role;
        $this->team = $team;
        $this->dayoff = $dayoff;
    }

    public function getInfo()
    {
        return [
            'fullname' => $this->fullname,
            'username' => $this->username,
            'phone' => $this->phone,
            'role' => $this->role,
            'team' => $this->team,
            'dayoff' => $this->dayoff
        ];
    }

    public abstract function attendCheck();
}
