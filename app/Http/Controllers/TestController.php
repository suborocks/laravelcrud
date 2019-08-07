<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

trait TestController
{
    public function slug($name)
    {
        $slug = strtolower($name);
        $slug = str_replace(" ", "_", trim(strtolower($name)));
        $slug = str_replace("\\", "\"", trim($slug));
        $slug = str_replace("\"", "-", trim($slug));
        return $slug;
    }
}
