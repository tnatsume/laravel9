<?php

namespace App\Traits;

trait CommonTrait
{
    public function makeDirectory($path, $permissions = 0777){
        if(!file_exists($path)){
            umask(0);
            mkdir($path, $permissions, true);
            umask(22);
            \Log::debug("{$path} を作成しました。");
        }else{

            \Log::debug("{$path} はすでに作成されています。");
        }
        return 0;
    }
}