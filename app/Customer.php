<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Customer extends Model
{
    protected $fillable = [
        'user_id',
        'customer_type',
        'document',
        'document_number',
        'birthday',
        'contact_name',
        'contact_phone'
    ];

    public static function laratablesOrderName()
    {
        return 'id';
    }

    public static function laratablesCustomAction($customer)
    {
        try {
            return view('customers.includes.action', ['customer' => $customer])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public function serviceRequest()
    {
        return $this->hasMany('App\ServiceRequest')->orderBy('state', 'ASC')->orderBy('created_at', 'DESC');
    }

    public function getServiceRequest()
    {
        return $this->serviceRequest()->count();
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function ratings()
    {
        return $this->hasMany('App\CustomerRating');
    }

    public function ratingOfferor()
    {
        return $this->hasMany('App\OfferorRating');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public static function getList()
    {
        $customers = Customer::orderBy('id')->get();
        $listCustomers = [];
        foreach ($customers as $customer) {
            $listCustomers[$customer->id] = $customer->name;
        }
        return $listCustomers;
    }

    /**
     * @param $params
     * @return Customer
     * @throws \Throwable
     */
    public static function createFromParams($params)
    {
        try {
            DB::beginTransaction();
            $user = new User();
            $customer = new Customer();
            $user->fill($params);
            $customer->fill($params);
            $user->save();
            $customer->user_id = $user->id;
            $customer->save();
            $user->assignRole('Client');
            DB::commit();
            return $customer;
        } catch (\Exception $exception) {
            DB::rollBack();
            throw $exception;
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }
    }

    public function getValidation($user_id)
    {
        $user = User::findOrFail($user_id);

        if ($user->customer->customer_type == "Juridical") {
            //Documentos requeridos para validación
            $documentValidates = DB::table('document_validates')->where('person_type', 'like', 'Juridical')->get();
        } else {
            //Documentos requeridos para validación
            $documentValidates = DB::table('document_validates')->where('person_type', 'like', 'Natural')->get();
        }

        //Documentos validados
        $validations = DB::table('validations')->where('user_id', 'like', $user_id)->get();

        $quantityDocumentValidates = count($documentValidates);
        $quantityValidations = count($validations);

        $documentsPending = $quantityDocumentValidates - $quantityValidations;
        $documentsReject = 0;
        $documentsProcess = 0;
        $documentsValidated = 0;

        foreach ($validations as $validation) {
            if ($validation->state == 1) {
                $documentsReject++;
            } elseif ($validation->state == 2) {
                $documentsProcess++;
            } elseif ($validation->state == 3) {
                $documentsValidated++;
            }
        }

        if ($documentsPending > 0) {
            return "Pending";
        } elseif ($documentsPending == 0 and $documentsReject > 0) {
            return "Reject";
        } elseif ($documentsProcess == $quantityDocumentValidates) {
            return "Process";
        } elseif ($documentsValidated == $quantityDocumentValidates) {
            return "Validated";
        } else {
            return 'Rejected';
        }
    }

    public function getRating()
    {
        $ratings = $this->ratings()->get();

        $count = 0;
        $total = 0;

        foreach ($ratings as $ra) {
            $total = $total + $ra->score;
            $count++;
        }

        if ($count == 0) {
            $count = 1;
        }

        return round($total / $count);
    }

    public function getQuantityRating()
    {
        $ratings = $this->ratings()->get();

        $count = 0;

        foreach ($ratings as $ra) {
            $count++;
        }

        return $count;
    }

    public function getPercentage()
    {
        $quantity = self::getQuantityRating();
        $rate = self::getRatingStars();
        $percentage = [0, 0, 0, 0, 0];

        if ($quantity != 0) {
            for ($i = 0; $i < 5; $i++) {
                $percentage[$i] = round($rate[$i] * 100 / $quantity);
            }
        }

        return $percentage;
    }

    public function getRatingStars()
    {
        $ratings = $this->ratings()->get();
        $numbers = [0, 0, 0, 0, 0];
        $count = 0;

        foreach ($ratings as $ra) {
            switch ($ra) {
                case ("1" == $ra->score):
                    $numbers[0]++;
                    break;
                case ("2" == $ra->score):
                    $numbers[1]++;
                    break;
                case ("3" == $ra->score):
                    $numbers[2]++;
                    break;
                case ("4" == $ra->score):
                    $numbers[3]++;
                    break;
                default:
                    $numbers[4]++;
            }
        }
        return $numbers;
    }

    public function getComments()
    {
        $comments = $this->ratings()->get();

        return $comments;
    }
}
