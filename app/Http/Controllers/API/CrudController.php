<?php

namespace App\Http\Controllers\API;

namespace App\Http\Controllers\API;
use App\Experience;
use App\FinancialInformation;
use App\MonetaryRequest;
use App\OfferorAccessory;
use App\OfferorService;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CrudController extends Controller
{
    const MODEL_KEY = 'model';

    protected $modelsMapping = [
        'services' => OfferorService::class,
        'accesories' => OfferorAccessory::class,
        'experiences' => Experience::class,
        'financial-information' => FinancialInformation::class,
        'monetary-requests' => MonetaryRequest::class,
    ];

    protected function getModel($modelKey) {
        if (array_key_exists($modelKey, $this->modelsMapping)) {
            return $this->modelsMapping[$modelKey];
        }
        throw new \InvalidArgumentException('Invalid model');
    }

    public function index($modelKey)
    {
        $model = $this->getModel($modelKey);
        return $model::all();
    }

    public function store(Request $request)
    {
        $campos=$request-> toArray();
        $modelKey='';
        if(isset($campos['modelKey']))
        {
            $modelKey=$campos['modelKey'];
            unset($campos['modelKey']);
            $camposValidate=[];
            foreach ($campos as $key => $value )
            {
                $camposValidate[$key]='';
            }
            $validatedData = $request->validate($camposValidate);

            $model = $this->getModel($modelKey);
            if(!is_null($model))
            {
                return $model::create($validatedData) ? "1": "0";
            }
            else
                return "0";
        }
        else
            return "0";
    }

    public function show(Request $request)
    {
        $request->validate([
            'id' => 'required|string',
            'modelKey' => 'required|string'
        ]);
        $model = $this->getModel($request->modelKey);
        $model = $model::find($request->id);
        if(!is_null($model))
        {
            return $model;
        }
        else
            return null;
    }

    public function update(Request $request)
    {
        $campos=$request-> toArray();
        $id='';
        $modelKey='';
        if(isset($campos['id']) && isset($campos['modelKey']))
        {
            $id=$campos['id'];
            $modelKey=$campos['modelKey'];
            unset($campos['id']);
            unset($campos['modelKey']);
            $camposValidate=[];
            foreach ($campos as $key => $value )
            {
                $camposValidate[$key]='';
            }
            $validatedData = $request->validate($camposValidate);

            $model = $this->getModel($modelKey);
            $model = $model::find($id);
            if(!is_null($model))
            {
                return $model->update($validatedData) ? "1": "0";
            }
            else
                return "0";
        }
        else
            return "0";
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'modelKey' => 'required|string'
        ]);

        $model = $this->getModel($request->modelKey);
        $model = $model::find($request->id);
        if(!is_null($model))
        {
            return $model->delete() ? "1": "0";
        }
        else
            return "0";
    }
}
