<?php
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CitiesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(AccessoriesTableSeeder::class);
        $this->call(CustomersTableSeeder::class);
        $this->call(CurrenciesTableSeeder::class);
        $this->call(TimeUnitTableSeeder::class);
        $this->call(OfferorsTableSeeder::class);
        $this->call(BanksTableSeeder::class);
        $this->call(EthnicitiesTableSeeder::class);
        $this->call(SkinColorsSeeder::class);
        $this->call(EyeColorsSeeder::class);
        $this->call(HairColorsSeeder::class);
        $this->call(HairLengthsSeeder::class);
        $this->call(ContexturesSeeder::class);
        $this->call(StylesSeeder::class);
        $this->call(ShoesSizesSeeder::class);
        $this->call(ShirtSizesSeeder::class);
        $this->call(BraSizesSeeder::class);
        $this->call(PantsSizesSeeder::class);
        $this->call(ProfessionsSeeder::class);
        $this->call(LanguagesSeeder::class);
        $this->call(AptitudesSeeder::class);
        $this->call(HobbiesSeeder::class);
        $this->call(ModelLevelsSeeder::class);
        $this->call(AcademicLevelsSeeder::class);
        $this->call(DocumentValidatesTableSeeder::class);
        $this->call(UserAgencySeeder::class);
    }
}
