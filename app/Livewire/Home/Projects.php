<?php

namespace App\Livewire\Home;

use App\Models\Project;
use Livewire\Component;

class Projects extends Component
{

    public $projects;

    public function mount()
    {
        $projects = Project::all();
        $this->projects = $projects;
    }

    public function render()
    {
        return view('livewire.home.projects');
    }
}
