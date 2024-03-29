<?php

namespace App\Http\Livewire\Design;

use App\Http\Livewire\WithConfirmation;
use App\Http\Livewire\WithSorting;
use App\Models\Design;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;
use App\Listeners\Design\DesignDeletedEmail;
use App\Events\Design\DesignDeleted;

class Index extends Component
{
    use WithPagination, WithSorting, WithConfirmation;

    public int $perPage;

    public array $orderable;

    public string $search = '';

    public array $selected = [];

    public array $paginationOptions;

    protected $queryString = [
        'search' => [
            'except' => '',
        ],
        'sortBy' => [
            'except' => 'id',
        ],
        'sortDirection' => [
            'except' => 'desc',
        ],
    ];

    public function getSelectedCountProperty()
    {
        return count($this->selected);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingPerPage()
    {
        $this->resetPage();
    }

    public function resetSelected()
    {
        $this->selected = [];
    }

    public function mount()
    {
        $this->sortBy            = 'id';
        $this->sortDirection     = 'desc';
        $this->perPage           = 100;
        $this->paginationOptions = config('project.pagination.options');
        $this->orderable         = (new Design())->orderable;
    }

    public function render()
    {
        $query = Design::with(['project', 'post', 'team'])->advancedFilter([
            's'               => $this->search ?: null,
            'order_column'    => $this->sortBy,
            'order_direction' => $this->sortDirection,
        ]);

        $designs = $query->paginate($this->perPage);

        return view('livewire.design.index', compact('designs', 'query'));
    }

    public function deleteSelected()
    {
        abort_if(Gate::denies('design_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Design::whereIn('id', $this->selected)->delete();

        $this->resetSelected();
    }

    public function delete(Design $design)
    {
        abort_if(Gate::denies('design_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $design->delete();

        event(new DesignDeleted($design));
    }
}
