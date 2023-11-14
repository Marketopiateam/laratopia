<?php

namespace App\Http\Livewire\Website;

use App\Models\Team;
use App\Models\Website;
use Livewire\Component;

class Create extends Component
{
    public Website $website;


    public function mount(Website $website)
    {
        $this->website = $website;
    }

    public function render()
    {
        return view('livewire.website.create');
    }

    public function submit()
    {
        $this->validate();

        $this->website->save();

        return redirect()->route('admin.websites.index');
    }

    protected function rules(): array
    {
        return [
            'website.title' => [
                'string',
                'nullable',
            ],
            'website.details' => [
                'string',
                'nullable',
            ],
            
        ];
    }

    
}
