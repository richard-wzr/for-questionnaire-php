<?php
namespace Src;
class MyGreeter
{
    //php需要先在php.ini中设置时区！否则默认使用UTC时间
    /**
     * @param $h number 当前小时数（24小时制）
     * @return string 当运行时间在6AM至12AM之间时，返回 "Good morning"。
     * 当运行时间在12AM至6PM之间时，返回 "Good afternoon"。
     * 当运行时间在6PM至第二天6AM之间时，返回 "Good evening"。
     */
    public function greet_by_hour($h): string
    {
        if ($h >= 24 || $h <= 0) {
            return "Error";
        }
        if ($h >= 6 && $h < 12) {
            return "Good morning";
        } elseif ($h >= 12 && $h < 18) {
            return "Good afternoon";
        } else {
            return "Good evening";
        }
    }

    public function greeting(): string
    {
        $hour = (int)date('H');
        return $this->greet_by_hour($hour);
    }

}