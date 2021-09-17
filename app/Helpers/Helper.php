<?php // Code within app\Helpers\Helper.php
namespace App\Helpers;

use Config;
use Illuminate\Support\Str;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Helper
{

    public static function successMsg($name, $msg)
    {
        if ($name == 'insert') {
            Session()->flash('message', $msg . ' Inserted Successfully !');
        } elseif ($name == 'update') {
            Session()->flash('message', $msg . ' Updated Successfully !');
        } elseif ($name == 'delete') {
            Session()->flash('message', $msg . ' Deleted Successfully !');
        } elseif ($name == 'custom') {
            Session()->flash('message', $msg);
        }
    }

    public static function activeDeactiveMsg($name, $msg)
    {
        if ($name == 'active') {
            Session()->flash('message', $msg . ' Active Successfully !');
        } else {
            Session()->flash('message', $msg . ' Deactive Successfully !');
        }
    }

    public static function failarMsg($name, $msg)
    {
        if ($name == 'custom') {
            Session()->flash('failmessage', $msg);
        }
    }

    public static function convertDateTime($type, $newFormat, $value)
    {
        if ($type == 'Date') {
            $oldFormat = 'Y-m-d';
            $data = \DateTime::createFromFormat($oldFormat, $value)->format($newFormat);
            return $data;
        } else if ($type == 'Date Time') {
            $oldFormat = 'Y-m-d H:i:s';
            $data = \DateTime::createFromFormat($oldFormat, $value)->format($newFormat);
            return $data;
        } else if ($type == 'Time') {
            $oldFormat = 'H:i:s';
            $data = \DateTime::createFromFormat($oldFormat, $value)->format($newFormat);
            return $data;
        }
    }
}
