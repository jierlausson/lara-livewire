<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ListaBeer extends Component
{
    public $item;
    public $key;
    public $action = 'Cadastrar';
    public $list = ['Suênia', 'Henzo', 'Bianca', 'Heitor'];

    public function render()
    {
        return view('livewire.lista-beer');
    }

    public function add()
    {
        array_unshift($this->list, $this->item);
        $this->item = '';
    }

    public function resetList()
    {
        unset($this->list);
        $this->list = [];
    }

    public function edit(int $key)
    {
        $this->key = $key;
        $this->item = $this->list[$key];
        $this->action = 'Atualizar';
    }

    public function update()
    {
        $this->list = array_replace($this->list, [
            $this->key => $this->item
        ]);
        $this->action = 'Cadastrar';
        $this->item = '';
    }

    public function delete(int $key)
    {
        unset($this->list[$key]);
    }
}