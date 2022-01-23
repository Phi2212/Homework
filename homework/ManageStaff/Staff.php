<?php

namespace ManageStaff;

class Staff extends Information implements Attendance
{
    protected int $TotalDays;
    protected string $daywork;

    public function __construct(string $fullname, string $username,
        string $phone, string $role, string $team, string $dayoff,
        int $TotalDays=31)
    {
        parent::__construct($fullname, $username, $phone, $role, $team, $dayoff);
        $this->TotalDays = $TotalDays;
        $this->daywork = $TotalDays - $dayoff;     
    }

    public function TotalDayWork()
    {
        return $this->TotalDays; 
    }

    public function attend() {
        return $this->daywork;
    }

    public function absent() {
        return $this->dayoff;
    }

    public function attendCheck()
    {
        print("Days Staff Work in Month:");
        echo $this->daywork;
        print("\n");
        if($this->daywork >=26){
            print("Good Attendance.\n");
        }
        else{
            print("Not Good Enough.\n");
        }
        print("Check Attendance Success.\n");
    }

    
}
