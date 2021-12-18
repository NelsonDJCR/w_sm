<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Summary extends Model
{
    protected $fillable = ['offeror_id', 'balance'];

    public function offeror()
    {
        return $this->belongsTo('App\Offeror');
    }

    /**
     * Recibe los parámetros en un array
     * Opciones
     * forceCheck (true): Esta opción evita que se haga la validación de integridad, solo se debe usar en facturación
     * idDescontar (int): Es el id del Ingreso al cual voy a descontar las sesiones (Se valida que corresponda)
     * @param array $args
     * @return bool True on success, false on fail
     */
    public function registerOperationWithArray($args = array())
    {
        $requiredParameters = array(
            'offeror',
            'operation',
            'amount',
            'observation',
            'id_origin',
            'origin'
        );
        $args['amount']+=0;
        $flag = true;

        //Validación de parámetros, y existencia de procedimientos.

        if (!self::validateRequiredParams($args, $requiredParameters)) {
            return false;
        }
        if(Operation::getOperationsAction()[$args['operation']] == 'subtraction')
        {
            if($this->balance<$args['amount'])
            {
                return false;
            }
            $this->balance-=$args['amount'];
        }
        else
        {
            $this->balance+=$args['amount'];
        }

        $valuesOperation=array();
        if(isset($args['service_request_id']))
        $valuesOperation['service_request_id']=$args['service_request_id'];
        $valuesOperation['offeror_id']=$this->offeror->id;
        $valuesOperation['operation']=$args['operation'];
        $valuesOperation['amount']=$args['amount'];
        $valuesOperation['id_user_registers']=Auth::user()->id;
        $valuesOperation['ip']='1';
        $valuesOperation['observation']=$args['origin'].' #'.$args['id_origin'].'. '.$args['observation'];
        //dd($valuesOperation);
        $operation = new Operation($valuesOperation);
        $flag &= $operation->save();
        $flag &= $this->save();



        return $flag ;
    }
    public static function validateRequiredParams($suppliedParams, $requiredParams = array())
    {
        foreach ($requiredParams as $requiredParam) {
            if (!isset($suppliedParams[$requiredParam])) {
//                throw new Exception("El parámetro {$requiredParam} es necesario");
                return false;
            }
        }
        return true;
    }

}
