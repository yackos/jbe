<?php

namespace App\Http\Livewire;

use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Atleta;

class AtletaTable extends DataTableComponent
{
    protected $model = Atleta::class;

    public ?int $searchFilterDebounce = 800; // Retardo en milisegundos para ejecutar la busqueda

    public function configure(): void
    {
        $this->setPrimaryKey('id');
        $this->emit('setFilter', 'categoria_id', 'Sin Categoria');
    }

    public function columns(): array
    {
        return [
            Column::make("Id", "id")
                ->sortable(),
            Column::make("Documento", "documento")
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Nombre", "primer_nombre")
                ->sortable()
                ->searchable(),
            Column::make("Segundo nombre", "segundo_nombre")
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Primer apellido", "primer_apellido")
                ->sortable()
                ->searchable(),
            Column::make("Segundo apellido", "segundo_apellido")
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Fecha nac", "fecha_nac")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Edad", "edad")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Sexo", "sexo")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Direccion", "direccion")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Telefono", "telefono")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Email", "email")
                ->sortable()
                ->searchable()
                ->collapseOnTablet(),
            Column::make("Categoria", "categoria.nombre")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Observaciones", "observaciones")
                ->sortable()
                ->collapseOnTablet(),
            Column::make("Imagen url", "imagen_url")
                ->sortable(),
            Column::make("Created at", "created_at")
                ->sortable()
                ->collapseOnTablet(),
        ];
    }
}
