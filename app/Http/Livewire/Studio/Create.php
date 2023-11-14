<?php

namespace App\Http\Livewire\Studio;

use App\Models\Studio;
use App\Models\Team;
use Livewire\Component;

class Create extends Component
{
    public Studio $studio;

    // public array $listsForFields = [];

    public function mount(Studio $studio)
    {
        $this->studio = $studio;
        // $this->initListsForFields();
    }

    public function render()
    {
        return view('livewire.studio.create');
    }

    public function submit()
    {
        $this->validate();

        $this->studio->save();

        return redirect()->route('admin.studios.index');
    }

    protected function rules(): array
    {
        return [
            'studio.title' => [
                'string',
                'required',
            ],
            'studio.description' => [
                'string',
                'nullable',
            ],
            'studio.date' => [
                'nullable',
                'date_format:' . config('project.date_format'),
            ],
            'studio.status' => [
                'string',
                'nullable',
            ],
            
        ];
    }

    
}
