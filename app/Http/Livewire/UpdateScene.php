<?php

namespace App\Http\Livewire;

use App\Models\Scene;
use Livewire\Component;

class UpdateScene extends Component
{
    public $scenes_id;
    public $nama;
    public $scene;
    public $updateMode = false;

    public function mount()
    {
        $this->scene = Scene::find($this->scenes_id);
        $this->nama = $this->scene->nama;
    }

    public function render()
    {
        return view('livewire.update-scene', ['editable'=>$this->updateMode, 'scenes'=> $this->scene]);
    }
    public function edit()
    {
        $this->updateMode = true;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'nama' => 'required',
        ]);
        Scene::find($this->scenes_id)->update(
            [
                'nama' => $this->nama,
            ]
        );
        session()->flash('message', 'Update berhasil');
        $this->updateMode = false;
    }
}
