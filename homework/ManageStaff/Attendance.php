<?php

namespace ManageStaff;

interface Attendance 
{
    public function attend();

    public function absent();

    public function TotalDayWork();
}
