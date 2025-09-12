<?php
namespace App\Services;

class ContactService
{
    public function contacts()
    {
        return [
            [
                'type' => 'Localisation',
                'value' => 'Antananarivo, Madagascar',
                'icon' => 'fa-solid fa-location-dot',
                'bgColor' => 'bg-[#8B2A90]',
            ],
            [
                'type' => 'Mail',
                'value' => 'masoviamdg@gmail.com',
                'icon' => 'fa-solid fa-envelope',
                'bgColor' => 'bg-[#157138]',
            ],
            [
                'type' => 'Phone',
                'value' => '+261 38 45 624 95',
                'icon' => 'fa-solid fa-phone',
                'bgColor' => 'bg-[#B63434]',
            ],
        ];
    }
}
