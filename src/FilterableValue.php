<?php

namespace Ristodziuba\Filterable;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Laravel\Nova\Metrics\ValueResult;

trait FilterableValue
{
    use Filterable;

    /**
     * Return a value result showing the growth of a model over a given time frame.
     *
     * @param  Request  $request
     * @param  Builder|string  $model
     * @param  string  $function
     * @param  string|null  $column
     * @return ValueResult
     */
    protected function aggregate($request, $model, $function, $column = null, $dateColumn = null)
    {
        $model = $this->applyFiltersToModel($request, $model);

        return parent::aggregate($request, $model, $function, $column, $dateColumn);
    }
}
