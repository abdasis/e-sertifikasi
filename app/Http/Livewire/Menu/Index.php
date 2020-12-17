<?php

namespace App\Http\Livewire\Menu;

use App\Models\Iso;
use App\Models\Menu;
use Livewire\Component;

class Index extends Component
{
    public $nama, $link, $menu_id;
    public $statusUpdate = false;
    public function edit($id)
    {
        $this->statusUpdate = true;
        $menu = Menu::find($id);
        $this->nama = $menu->nama;
        $this->link = $menu->link;
        $this->menu_id = $menu->id;
    }
    public function update()
    {
        $menu = Menu::find($this->menu_id);
        $menu->nama = $this->nama;
        $menu->link = $this->link;
        $menu->save();

    }
    public function delete($id)
    {
        $menu = Menu::find($id);
        $menu->delete();
    }
    public function store()
    {
        $menu = new Menu();
        $menu->nama = $this->nama;
        $menu->link = $this->link;
        $menu->save();
    }

    public function render()
    {
        return view('livewire.menu.index', [
            'menus' => Menu::latest()->get(),
            'isos' => Iso::latest()->get()
        ]);
    }
}
