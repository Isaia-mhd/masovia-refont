<?php
namespace App\Services;

use App\Models\Project;

class ProjetsComponent {
    public function projects()
    {
        return Project::where("active", true)->get();
    }

     public function readyToStore($projet)
    {

        if(request()->hasFile("image"))
        {
            $image = request()->file("image");
            $path = $image->store("projets", "public");
            $projet["image"] = $path;
        }
        return $projet;
    }
};
