<?php

namespace App\DataTables;

use App\Models\Natureza;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class NaturezaDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function(Natureza $model) {
                return "<a href='".route('stq.edit',$model->id)."' class='btn btn-info btn-sm me-1 mb-1'>Editar</a><a href='".route('stq.delete',$model->id)."' class='btn btn-danger btn-sm'>Excluir</a>";
            })
            ->editColumn('created_at', function(Natureza $model) {
                return $model->created_at->format('d/m/Y H:i:s');
            })
            ->editColumn('updated_at', function(Natureza $model) {
                return $model->updated_at->format('d/m/Y H:i:s');
            })
            ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Natureza $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('natureza-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel')->titleAttr("Exportar para EXCEL"),
                Button::make('csv')->titleAttr("Exportar para CSV"),
                Button::make('pdf')->titleAttr("Exportar para PDF"),
                Button::make('print')->titleAttr("Imprimir"),
                Button::make('reset')->titleAttr("Limpar"),
                Button::make('reload')->titleAttr("Recarregar"),
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->titleAttr("Id")->title('Id'),
            Column::make('code')->titleAttr("Código")->title('Código'),
            Column::make('references')->titleAttr("Referência")->title('Referência'),
            Column::make('created_at')->exportFormat('d/m/YYYY H:i:s')->titleAttr('Criado em')->title('Criado em'),
            Column::make('updated_at')->exportFormat('d/m/YYYY H:i:s')->titleAttr('Atualizado em')->title('Atualizado em'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center')
                ->title('Ações')
                ->titleAttr('Ações')
            ,
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Natureza_' . date('YmdHis');
    }
}
