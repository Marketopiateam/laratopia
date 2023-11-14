<?php

namespace App\Http\Livewire\Motion;

use App\Models\Motion;
use App\Models\Team;
use Livewire\Component;

class Edit extends Component
{
    public Motion $motion;


    public function mount(Motion $motion)
    {
        $this->motion = $motion;
    }

    public function render()
    {
        return view('livewire.motion.edit');
    }

    public function submit()
    {
        $this->validate();

        $this->motion->save();

        return redirect()->route('admin.motions.index');
    }

    protected function rules(): array
    {
        return [
            'motion.title' => [
                'string',
                'nullable',
            ],
            'motion.details' => [
                'string',
                'nullable',
            ],
            'motion.minuts' => [
                'string',
                'nullable',
            ],
            
        ];
    }

    
}
