<?php

namespace App\Http\Livewire\System;

use App\Models\System;
use App\Models\Team;
use Livewire\Component;

class Create extends Component
{
    public System $system;


    public function mount(System $system)
    {
        $this->system = $system;
    }

    public function render()
    {
        return view('livewire.system.create');
    }

    public function submit()
    {
        $this->validate();
        $this->system->user_id = auth()->id();
        $this->system->save();

        return redirect()->route('admin.systems.index');
    }

    protected function rules(): array
    {
        return [
            'system.title' => [
                'string',
                'required',
            ],
            'system.details' => [
                'string',
                'nullable',
            ],

        ];
    }


}
