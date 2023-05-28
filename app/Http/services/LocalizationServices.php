<?php

namespace App\Http\services;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

class LocalizationServices
{
    public static function getModelRules($translatableData): array
    {
        $data = [];
        foreach ($translatableData as $item => $value){
            foreach (LaravelLocalization::getSupportedLanguagesKeys() as $key){
                $data[$item.'_'.$key] = $value['validation'];
            }
        }

        return $data;
    }

    public static function getLocalizationWithArray($translatableData , $request): array
    {
        $data = [];
        foreach ($translatableData as $item => $value){
            foreach (LaravelLocalization::getSupportedLanguagesKeys() as $key){
                $lang = $item.'_'.$key;
                $data[$item][$key] = $request->$lang;
            }
        }
        return $data;
    }

}
