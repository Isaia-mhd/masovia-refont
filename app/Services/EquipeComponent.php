<?php
namespace App\Services;

use App\Models\Team;
use Illuminate\Support\Facades\Storage;

class EquipeComponent{
    public function equipes()
    {
        return Team::where("active", true)->get();
    }

    public function readyToStore($data)
    {
        $team = $data;
        if(request()->hasFile("avatar"))
        {
            $image = request()->file("avatar");
            $path = $image->store("equipes", "public");
            $team["avatar"] = $path;
        }
        return $team;
    }
}
