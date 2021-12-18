<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Carbon\Carbon;

class Offeror extends Model implements Searchable
{
    protected $with = ['user', 'city'];

    protected $appends = ['cover_url', 'avatar_url', 'rating', 'age'];

    protected $fillable = [
        'name',
        'user_id',
        'birthday',
        'document',
        'document_number',
        'country_id',
        'city_id',
        'agency',
        'gender',
        'height',
        'weight',
        'bust_measurement',
        'hip_measurement',
        'waist_measurement',
        'eyes_color',
        'hair_color',
        'hair_length',
        'has_tatoos',
        'contexture',
        'skin_color',
        'style',
        'address',
        'zones',
        'eps',
        'have_place',
        'receive_services',
        'at_home',
        'description',
        'tags',
        'ethnicity',
        'piercings',
        'level',
        'category',
        'validated',
        'show_profile',
        'languajes',
        'phone_emergeny'
    ];

    public static function laratablesOrderName()
    {
        return 'id';
    }

    public static function laratablesCustomAction($offeror)
    {
        try {
            return view('offerors.includes.action', ['offeror' => $offeror])->render();
        } catch (\Throwable $e) {
            return 'error';
        }
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function ratings()
    {
        return $this->hasMany('App\OfferorRating');
    }

    public function services()
    {
        return $this->hasMany('App\OfferorService');
    }

    public function operations()
    {
        return $this->hasMany('App\Operation');
    }

    public function serviceRequestOfferor()
    {
        return $this->hasMany('App\ServiceRequestOfferor')->orderBy('state', 'ASC')->orderBy('created_at', 'DESC');
    }

    public function albums()
    {
        return $this->hasMany('App\Album');
    }

    public function accessories()
    {
        return $this->hasMany('App\OfferorAccessory');
    }

    public function country()
    {
        return $this->belongsTo('App\Country')->withDefault(['name' => __('generics.empty')]);
    }

    public function city()
    {
        return $this->belongsTo('App\City')->withDefault(['name' => __('generics.empty')]);
    }

    public function blockAvailability()
    {
        return $this->hasMany('App\OfferorBlockAvailability');
    }

    public function financialInformation()
    {
        return $this->hasMany('App\FinancialInformation');
    }

    public function monetaryRequest()
    {
        return $this->hasMany('App\MonetaryRequest');
    }

    public function summary()
    {
        return $this->hasOne('App\Summary');
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('offerors.show', $this->id);

        return new SearchResult(
            $this,
            $this->user->name,
            $url
        );
    }

    public function schedule()
    {
        return $this->hasOne('App\OfferorAvailability');
    }

    public function getCompletePercentage()
    {
        $count = 0;
        $totalCount = 0;
        foreach ($this->getFillable() as $nameField) {
            $totalCount++;
            if (!empty($this->$nameField) || !is_null($this->$nameField))
                $count++;
        }
        $total = round(($count * 100) / ($totalCount - 1));

        if ($total>100)
        {
            $total=100;
        }

        return $total;
    }

    public function getValidation($user_id)
    {
        //Documentos requeridos para validación
        $document_validates = DB::table('document_validates')->where('person_type', 'like', 'Natural')->get();
        //Documentos validados
        $validations = DB::table('validations')->where('user_id', 'like', $user_id)->get();

        $quantity_document_validates = count($document_validates);
        $quantity_validations = count($validations);

        $documents_pending = $quantity_document_validates - $quantity_validations;
        $documents_reject = 0;
        $documents_process = 0;
        $documents_validated = 0;

        foreach ($validations as $validation)
        {
            if ($validation->state==1 ){
                $documents_reject++;
            }
            elseif ($validation->state==2 ){
                $documents_process++;
            }
            elseif ($validation->state==3 ){
                $documents_validated++;
            }
        }

        if ($documents_pending>0){
            return "Pending";
        }
        elseif ($documents_pending==0 and $documents_reject>0) {
            return "Reject";
        }
        elseif ($documents_process == $quantity_document_validates){
            return "Process";
        }
        elseif ($documents_validated == $quantity_document_validates){
            return "Validated";
        }
    }

    public function getActivateAccount($user_id)
    {
        $validation = self::getValidation($user_id);
        $profile = self::getCompletePercentage();
        $albums = self::getAlbums();
        $services = self::getQuantityServices();
        $accounts = self::getAccounts();
        $availability = self::getAvailability();

        if( $validation == "Validated" && $profile>60 && $albums>0 && $services>0 &&  $accounts>0 && $availability>0)
        {
            return 1;
        }
        else{
            return 0;
        }
    }

    public function getBook()
    {
        return $this->albums()->first();
    }

    public function serviceRequest()
    {
        return $this->serviceRequestOfferor();
    }

    public function getServiceRequest()
    {
        return $this->serviceRequestOfferor()->count();
    }

    public function getTransactions()
    {
        //TODO pendiente transacciones
        return 0;
    }

    public function getBalance()
    {
        //TODO pendiente calcular saldo
        return 0;
    }

    public function getQuantityServices()
    {
        return $this->services()->count();
    }

    public function getQuantityAccessories()
    {
        return $this->accessories()->count();
    }

    public function getAvailability()
    {
        return $this->schedule->monday==1
            OR $this->schedule->monday==1
            OR $this->schedule->tuesday==1
            OR $this->schedule->wednesday==1
            OR $this->schedule->thursday==1
            OR $this->schedule->friday==1
            OR $this->schedule->saturday==1;
    }
    public function getQuantityExperience()
    {
        return $this->experience()->count();
    }

    public function getAccounts()
    {
        return $this->financialInformation()->count();
    }

    public function getAlbums()
    {
        return $this->albums()->count();
    }

    public function getAlbumes()
    {
        return $this->albums();
    }

    /**
     * @param $params
     * @return Offeror
     * @throws \Throwable
     */
    public static function createFromParams($params)
    {
        try {
            DB::beginTransaction();
            $user = new User();
            $offeror = new Offeror();
            $user->fill($params);
            $offeror->fill($params);
            $user->save();
            $offeror->user_id = $user->id;
            $offeror->save();
            $user->assignRole('Model');
            DB::commit();
            return $offeror;
        } catch (\Exception $exception) {
            DB::rollBack();
            throw $exception;
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
        }
    }
    public static function createFromAgencyParams($params)
    {
        try {
            DB::beginTransaction();
            $user = new User();
            $offeror = new Offeror();
            $user->fill($params);
            $offeror->fill($params);
            $user->save();
            $offeror->user_id = $user->id;
            $offeror->save();
            $user->assignRole('Agencia');
            DB::commit();
            return $offeror;
        } catch (\Exception $exception) {
            DB::rollBack();
            throw $exception;
        } catch (\Throwable $throwable) {
            DB::rollBack();
            throw $throwable;
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

        return number_format($total / $count, 1);
    }

    public function getQuantityRating()
    {
        return $this->ratings()->count();
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

    public function getComments()
    {
        $comments = $this->ratings()->get();

        return $comments;
    }

    public static function getQuantity()
    {
        /**
         * TODO Calcular el número de ofertantes
         */
        $total = Offeror::all()->count();
        return $total;
    }

    //API SPECIFICS SERIALIZATION

    public function getCoverUrlAttribute()
    {
        return $this->user->getAvatar();
    }

    public function getAvatarUrlAttribute()
    {
        return $this->albums->first()->getCover();
    }

    public function getRatingAttribute()
    {
        return $this->getRating();
    }

    public function getAgeAttribute()
    {
        return \Carbon\Carbon::parse($this->birthday)->age;
    }

    public function getDatesDisabled()
    {
        $result=array();
        $items1 = ServiceRequestOfferor::where('offeror_id', $this->id)->where('initial_date','>=',date("Y-m-d"))->where('initial_date','<=',date("Y-m-d", strtotime(date("Y-m-d")." + 3 MONTHS")))->distinct();
        $items=$items1->get();
        foreach($items as $word)
        {
            $date = $word['initial_date'];
            $datework = Carbon::createFromDate($date);
            $now = $word['final_date'];
            $testdate = $datework->diffInDays($now);
            for($i=0;$i<=$testdate;$i++)
            {
                $result[]=$datework->format('Y-m-d');
                $datework->addDays(1);
            }

        }
        $items1 = OfferorBlockAvailability::where('offeror_id', $this->id)->where('initial_date','>=',date("Y-m-d"))->where('initial_date','<=',date("Y-m-d", strtotime(date("Y-m-d")." + 3 MONTHS")))->distinct();
        $items=$items1->get();
        foreach($items as $word)
        {
            $date = $word['initial_date'];
            $datework = Carbon::createFromDate($date);
            $now = $word['final_date'];
            $testdate = $datework->diffInDays($now);
            for($i=0;$i<=$testdate;$i++)
            {
                $result[]=$datework->format('Y-m-d');
                $datework->addDays(1);
            }
        }
        return $result;
    }
    public function getDaysOfWeekDisabled()
    {
        $days=array('sunday','monday','tuesday','wednesday','thursday','friday','saturday');
        $result=array();
        $schedule=$this->schedule;
        foreach($days as $key => $value)
        {
            if($schedule->{$value}==0)
            {
                $result[]=$key;
            }
        }
        return $result;
    }
    public function getAvailabilityJson()
    {
        $disabledDates= new Collection($this->getDatesDisabled());
        $disabledDates1=$disabledDates->map(function ($element){ return Carbon::createFromFormat('Y-m-d',$element);});

        $data = [
            'fromDate' => Carbon::now(),
            'toDate' => Carbon::now()->addMonth(3),
            'showTodayButton'=>  false,
            'closeOnSelect'=>  true,
            'closeLabel'=>  'Cerrar',
            'monthsList'=>  ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
            'weeksList'=>  [ 'D', 'L', 'M', 'X', 'J', 'V', 'S'],
            'dateFormat'=>  'YYYY-MM-DD',
            'disabledDates' => $disabledDates1,
            'disableWeekDays' => $this->getDaysOfWeekDisabled()
        ];
        return $data;
    }
    public function getAvailabilityJsonCalendar()
    {
        $data = [
            'disabledDates' => $this->getDatesDisabled(),
            'disableWeekDays' => $this->getDaysOfWeekDisabled()
        ];
        return $data;
    }

}
