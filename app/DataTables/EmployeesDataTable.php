<?php

namespace App\DataTables;

use App\Employee;
use Yajra\DataTables\Services\DataTable;

class EmployeesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables($query);
            // ->addColumn('action', 'employees.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Employee $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Employee $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->addAction([
                        'data' => 'id',
                        'name' => 'id',
                        'title' => 'العمليات',
                        'render' => 'column-edit'
                    ])
                    ->parameters(array_merge($this->getBuilderParameters(), [
                        'language' => [
                            'url' => '//cdn.datatables.net/plug-ins/1.10.19/i18n/Arabic.json',
                            'buttons' => [
                                'excel' => 'إكسيل',
                                'print' => 'طباعة',
                                'reload' => 'إعادة تحميل',
                            ]
                        ]
                    ]));
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'id',
            ['data' => 'fullname', 'title' => 'الاسم'],
            'position',
            'company',
            'phone',
            'address',
            'age',
            'salary',
            'rate',
            'bio',
            // 'created_at',
            // 'updated_at'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Employees_' . date('YmdHis');
    }
}
