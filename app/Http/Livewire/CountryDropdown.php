<?php

namespace App\Http\Livewire;
use App\Models;
use Livewire\Component;

class CountryDropdown extends Component
{
    public $empresa;
    public $clientes = [];
    public $cliente;
    public $usuarios = [];
    public $usuario;

    public function render()
    {
        if (!empty($this->empresa)) {
            $this->clientes = Models\cliente::where('empresa', $this->empresa)->get();
        }
        if (!empty($this->cliente)) {
            $this->usuarios = Models\usuarios::where('cliente', $this->cliente)->get();
        }
        return view('livewire.country-dropdown')
            ->withEmpresas(Models\Empresas::orderBy('name')->get());
    }
}