<?php

namespace App\Services;

use Illuminate\Http\Request;

class BaseService
{

    protected $model;

    public function __construct($model)
    {
        $this->model = $model;
    }

    public function index(Request $request)
    {
        return $this->model->all();
    }

    public function store(Request $request)
    {
        return $this->model->create($request->all());
    }

    public function show(Request $request, $id)
    {
        return $this->model->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $model = $this->model->findOrFail($id);
        $model->update($request->all());
        return $model;
    }

    public function destroy(Request $request, $id)
    {
        $model = $this->model->findOrFail($id);
        $model->delete();
        return $model;
    }

    public function search(Request $request)
    {
        $query = $this->model->query();
        foreach ($request->all() as $key => $value) {
            $query->where($key, $value);
        }
        return $query->get();
    }

    public function paginate(Request $request)
    {
        return $this->model->paginate($request->get('per_page', 10));
    }

    public function searchPaginate(Request $request)
    {
        $query = $this->model->query();
        foreach ($request->all() as $key => $value) {
            $query->where($key, $value);
        }
        return $query->paginate($request->get('per_page', 10));
    }

    public function count(Request $request)
    {
        return $this->model->count();
    }

    public function sum(Request $request, $column)
    {
        return $this->model->sum($column);
    }

    public function max(Request $request, $column)
    {
        return $this->model->max($column);
    }

    public function min(Request $request, $column)
    {
        return $this->model->min($column);
    }

    public function avg(Request $request, $column)
    {
        return $this->model->avg($column);
    }

    public function increment(Request $request, $id, $column, $amount = 1)
    {
        $model = $this->model->findOrFail($id);
        $model->increment($column, $amount);
        return $model;
    }


}
