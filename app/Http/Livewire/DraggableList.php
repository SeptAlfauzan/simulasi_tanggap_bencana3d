<?php

namespace App\Http\Livewire;

use App\Models\Animasi;
use Livewire\Component;

class DraggableList extends Component
{
    public $designTemplate = 'bootstrap';
    public $scenes_id;

    public function render()
    {
        return view('livewire.draggable-list', [
            'products' => Animasi::where('scenes_id', $this->scenes_id)->orderBy('position')->get()
        ]);
    }

    public function updateOrder($list)
    {
        foreach ($list as $item) {
            Animasi::where('id', $item['value'])->update(['position' => $item['order']]);
        }

        session()->flash('message', 'Update nomor urut berhasil');
    }

}
