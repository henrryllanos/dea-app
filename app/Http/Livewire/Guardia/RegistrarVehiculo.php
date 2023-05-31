<?php

namespace App\Http\Livewire\Guardia;

use App\Models\User;
use App\Models\Vehiculo;
use Livewire\Component;
use Livewire\WithPagination;

class RegistrarVehiculo extends Component
{   
    use WithPagination;
    public $search;
    protected $paginationTheme = 'bootstrap';


    public function updatingSearch(){
        $this->resetPage();
    }

    public function render()
    {   $vehiculos = Vehiculo::where('placa','LIKE','%' . $this->search . '%')->paginate();
        return view('livewire.guardia.registrar-vehiculo', compact('vehiculos'));
    }
}
