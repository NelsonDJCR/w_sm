<?php

use App\City;
use App\Country;
use App\Department;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    private $countries = '{
    "RECORDS": [
        {
            "id": "1",
            "name": "Colombia",
            "country_code": "+57",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "id": "2",
            "name": "Estados Unidos",
            "country_code": "+1",
            "state": "1",
            "language": "en",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "id": "3",
            "name": "Mexico",
            "country_code": "+52",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "id": "4",
            "name": "Ecuador",
            "country_code": "+593",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "id": "5",
            "name": "Canada",
            "country_code": "+1",
            "state": "1",
            "language": "en",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "id": "6",
            "name": "Argentina",
            "country_code": "+54",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "id": "7",
            "name": "Chile",
            "country_code": "+56",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "id": "8",
            "name": "Brasil",
            "country_code": "+55",
            "state": "1",
            "language": "pt",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "id": "9",
            "name": "España",
            "country_code": "+34",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
        {
            "id": "10",
            "name": "Francia",
            "country_code": "+33",
            "state": "1",
            "language": "fr",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "11",
            "name": "Venezuela",
            "country_code": "+58",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "12",
            "name": "Alemania",
            "country_code": "+49",
            "state": "1",
            "language": "de",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "13",
            "name": "Bolivia",
            "country_code": "+591",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "14",
            "name": "Chile",
            "country_code": "+56",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "15",
            "name": "China",
            "country_code": "+86",
            "state": "1",
            "language": "en",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "16",
            "name": "Cuba",
            "country_code": "+53",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "17",
            "name": "Dinamarca",
            "country_code": "+45",
            "state": "1",
            "language": "de",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "18",
            "name": "Ecuador",
            "country_code": "+593",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "19",
            "name": "Puerto Rico",
            "country_code": "+1",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "20",
            "name": "Guatemala",
            "country_code": "+502",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "21",
            "name": "Honduras",
            "country_code": "+504",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "22",
            "name": "Jamaica",
            "country_code": "+187",
            "state": "1",
            "language": "en",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "23",
            "name": "Japon",
            "country_code": "+81",
            "state": "1",
            "language": "jp",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "24",
            "name": "Marruecos",
            "country_code": "+212",
            "state": "1",
            "language": "ar",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "25",
            "name": "Mónaco",
            "country_code": "+377",
            "state": "1",
            "language": "mc",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "26",
            "name": "Peru",
            "country_code": "+51",
            "state": "1",
            "language": "es",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "27",
            "name": "Portugal",
            "country_code": "+351",
            "state": "1",
            "language": "pt",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "28",
            "name": "Qatar",
            "country_code": "+974",
            "state": "1",
            "language": "qt",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "29",
            "name": "Reino Unido",
            "country_code": "+44",
            "state": "1",
            "language": "en",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        },
       {
            "id": "30",
            "name": "Rusia",
            "country_code": "+7",
            "state": "1",
            "language": "ru",
            "created_at": "1/10/2018 02:40:40",
            "updated_at": "1/10/2018 02:40:40"
        }
    ]
}';

    private $departments = '{
    "RECORDS": [
        {
            "id": "1",
            "name": "Amazonas",
            "country_id": "1",
            "state": "1",
            "divipola_code": "91"
        },
        {
            "id": "2",
            "name": "Antioquia",
            "country_id": "1",
            "state": "1",
            "divipola_code": "05"
        },
        {
            "id": "3",
            "name": "Arauca",
            "country_id": "1",
            "state": "1",
            "divipola_code": "81"
        },
        {
            "id": "4",
            "name": "Archipiélago de San Andrés, Pr",
            "country_id": "1",
            "state": "1",
            "divipola_code": "88"
        },
        {
            "id": "5",
            "name": "Atlántico",
            "country_id": "1",
            "state": "1",
            "divipola_code": "08"
        },
        {
            "id": "6",
            "name": "Bogotá, D.C.",
            "country_id": "1",
            "state": "1",
            "divipola_code": "11"
        },
        {
            "id": "7",
            "name": "Bolívar",
            "country_id": "1",
            "state": "1",
            "divipola_code": "13"
        },
        {
            "id": "8",
            "name": "Boyacá",
            "country_id": "1",
            "state": "1",
            "divipola_code": "15"
        },
        {
            "id": "9",
            "name": "Caldas",
            "country_id": "1",
            "state": "1",
            "divipola_code": "17"
        },
        {
            "id": "10",
            "name": "Caquetá",
            "country_id": "1",
            "state": "1",
            "divipola_code": "18"
        },
        {
            "id": "11",
            "name": "Casanare",
            "country_id": "1",
            "state": "1",
            "divipola_code": "85"
        },
        {
            "id": "12",
            "name": "Cauca",
            "country_id": "1",
            "state": "1",
            "divipola_code": "19"
        },
        {
            "id": "13",
            "name": "Cesar",
            "country_id": "1",
            "state": "1",
            "divipola_code": "20"
        },
        {
            "id": "14",
            "name": "Chocó",
            "country_id": "1",
            "state": "1",
            "divipola_code": "27"
        },
        {
            "id": "15",
            "name": "Cundinamarca",
            "country_id": "1",
            "state": "1",
            "divipola_code": "25"
        },
        {
            "id": "16",
            "name": "Córdoba",
            "country_id": "1",
            "state": "1",
            "divipola_code": "23"
        },
        {
            "id": "17",
            "name": "Guainía",
            "country_id": "1",
            "state": "1",
            "divipola_code": "94"
        },
        {
            "id": "18",
            "name": "Guaviare",
            "country_id": "1",
            "state": "1",
            "divipola_code": "95"
        },
        {
            "id": "19",
            "name": "Huila",
            "country_id": "1",
            "state": "1",
            "divipola_code": "41"
        },
        {
            "id": "20",
            "name": "La Guajira",
            "country_id": "1",
            "state": "1",
            "divipola_code": "44"
        },
        {
            "id": "21",
            "name": "Magdalena",
            "country_id": "1",
            "state": "1",
            "divipola_code": "47"
        },
        {
            "id": "22",
            "name": "Meta",
            "country_id": "1",
            "state": "1",
            "divipola_code": "50"
        },
        {
            "id": "23",
            "name": "Nariño",
            "country_id": "1",
            "state": "1",
            "divipola_code": "52"
        },
        {
            "id": "24",
            "name": "Norte de Santander",
            "country_id": "1",
            "state": "1",
            "divipola_code": "54"
        },
        {
            "id": "25",
            "name": "Putumayo",
            "country_id": "1",
            "state": "1",
            "divipola_code": "86"
        },
        {
            "id": "26",
            "name": "Quindio",
            "country_id": "1",
            "state": "1",
            "divipola_code": "63"
        },
        {
            "id": "27",
            "name": "Risaralda",
            "country_id": "1",
            "state": "1",
            "divipola_code": "66"
        },
        {
            "id": "28",
            "name": "Santander",
            "country_id": "1",
            "state": "1",
            "divipola_code": "68"
        },
        {
            "id": "29",
            "name": "Sucre",
            "country_id": "1",
            "state": "1",
            "divipola_code": "70"
        },
        {
            "id": "30",
            "name": "Tolima",
            "country_id": "1",
            "state": "1",
            "divipola_code": "73"
        },
        {
            "id": "31",
            "name": "Valle del Cauca",
            "country_id": "1",
            "state": "1",
            "divipola_code": "76"
        },
        {
            "id": "32",
            "name": "Vaupés",
            "country_id": "1",
            "state": "1",
            "divipola_code": "97"
        },
        {
            "id": "33",
            "name": "Vichada",
            "country_id": "1",
            "state": "1",
            "divipola_code": "99"
        },
        {
         "id": "34",
         "name": "Alabama",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "35",
         "name": "Alaska",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "36",
         "name": "Arizona",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "37",
         "name": "Arkansas",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "38",
         "name": "California",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "39",
         "name": "Colorado",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "40",
         "name": "Connecticut",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "41",
         "name": "Delaware",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "42",
         "name": "District of Columbia",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "43",
         "name": "Florida",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "44",
         "name": "Georgia",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "45",
         "name": "Hawaii",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "46",
         "name": "Idaho",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "47",
         "name": "Illinois",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "48",
         "name": "Indiana",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "49",
         "name": "Iowa",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "50",
         "name": "Kansas",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "51",
         "name": "Kentucky",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "52",
         "name": "Louisiana",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "53",
         "name": "Maine",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "54",
         "name": "Maryland",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "55",
         "name": "Massachusetts",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "56",
         "name": "Michigan",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "57",
         "name": "Minnesota",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "58",
         "name": "Mississippi",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "59",
         "name": "Misuri",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "60",
         "name": "Montana",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "61",
         "name": "Nebraska",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "62",
         "name": "Nevada",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "63",
         "name": "New Hampshire",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "64",
         "name": "New Jersey",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "65",
         "name": "New Mexico",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "66",
         "name": "New York",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "67",
         "name": "North Carolina",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "68",
         "name": "North Dakota",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "69",
         "name": "Ohio",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "70",
         "name": "Oklahoma",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "71",
         "name": "Oregon",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "72",
         "name": "Pennsylvania",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "73",
         "name": "Rhode Island",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "74",
         "name": "South Carolina",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "75",
         "name": "South Dakota",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "76",
         "name": "Tennessee",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "77",
         "name": "Texas",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "78",
         "name": "Utah",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "79",
         "name": "Vermont",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "80",
         "name": "Virginia",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "81",
         "name": "Washington",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "82",
         "name": "West Virginia",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "83",
         "name": "Wisconsin",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
        {
         "id": "84",
         "name": "Wyoming",
         "country_id": "2",
         "state": "1",
         "divipola_code": "91"
        },
{
 "id": "85",
 "name": "Aguascalientes",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "86",
 "name": "Baja California",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "87",
 "name": "Baja California Sur",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "88",
 "name": "Campeche",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "89",
 "name": "Chiapas",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "90",
 "name": "Chihuahua",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "91",
 "name": "Coahuila de Zaragoza",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "92",
 "name": "Colima",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "93",
 "name": "Durango",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "94",
 "name": "Estado de México",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "95",
 "name": "Guanajuato",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "96",
 "name": "Guerrero",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "97",
 "name": "Hidalgo",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "98",
 "name": "Jalisco",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "99",
 "name": "Michoacán de Ocampo",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "100",
 "name": "Morelos",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "101",
 "name": "Nayarit",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "102",
 "name": "Nuevo León",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "103",
 "name": "Oaxaca",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "104",
 "name": "Puebla",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "105",
 "name": "Querétaro",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "106",
 "name": "Quintana Roo",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "107",
 "name": "San Luis Potosí",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "108",
 "name": "Sinaloa",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "109",
 "name": "Sonora",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "110",
 "name": "Tabasco",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "111",
 "name": "Tamaulipas",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "112",
 "name": "Tlaxcala",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "113",
 "name": "Veracruz de Ignacio de la Llave",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "114",
 "name": "Yucatán",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "115",
 "name": "Zacatecas",
 "country_id": "3",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "116",
 "name": "Azuay",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "117",
 "name": "Bolívar",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "118",
 "name": "Cañar",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "119",
 "name": "Carchi",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "120",
 "name": "Chimborazo",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "121",
 "name": "Cotopaxi",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "122",
 "name": "El Oro",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "123",
 "name": "Esmeraldas",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "124",
 "name": "Galápagos",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "125",
 "name": "Guayas",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "126",
 "name": "Imbabura",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "127",
 "name": "Loja",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "128",
 "name": "Los Ríos",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "129",
 "name": "Manabí",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "130",
 "name": "Morona Santiago",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "131",
 "name": "Napo",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "132",
 "name": "Orellana",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "133",
 "name": "Pastaza",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "134",
 "name": "Pichincha",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "135",
 "name": "Santa Elena",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "136",
 "name": "Santo Domingo de los Tsáchilas",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "137",
 "name": "Sucumbíos",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "138",
 "name": "Tungurahua",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "139",
 "name": "Zamora Chinchipe",
 "country_id": "4",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "140",
 "name": "Newfoundland",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "141",
 "name": "Nova",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "142",
 "name": "Prince",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "143",
 "name": "New",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "144",
 "name": "Quebec",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "145",
 "name": "Ontario",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "146",
 "name": "Manitoba",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "147",
 "name": "Saskatchewan",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "148",
 "name": "Alberta",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "149",
 "name": "British",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "150",
 "name": "Nunavut",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "151",
 "name": "Northwestern",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "152",
 "name": "Yukon",
 "country_id": "5",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "153",
 "name": "Buenos Aires",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "154",
 "name": "Catamarca",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "155",
 "name": "Chaco",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "156",
 "name": "Chubut",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "157",
 "name": "Córdoba",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "158",
 "name": "Corrientes",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "159",
 "name": "Entre Ríos",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "160",
 "name": "Formosa",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "161",
 "name": "Jujuy",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "162",
 "name": "La Pampa",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "163",
 "name": "La Rioja",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "164",
 "name": "Mendoza",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "165",
 "name": "Misiones",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "166",
 "name": "Neuquén",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "167",
 "name": "Río Negro",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "168",
 "name": "Salta",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "169",
 "name": "San Juan",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "170",
 "name": "San Luis",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "171",
 "name": "Santa Cruz",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "172",
 "name": "Santa Fe",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "173",
 "name": "Santiago del Estero",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "174",
 "name": "Tierra del Fuego, Antártida e Isla del Atlántico Sur",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "175",
 "name": "Tucumán",
 "country_id": "6",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "176",
 "name": "ï»¿Arica",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "177",
 "name": "Parinacota",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "178",
 "name": "El Tamarugal",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "179",
 "name": "Iquique",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "180",
 "name": "Tocopilla",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "181",
 "name": "El Loa",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "182",
 "name": "Antofagasta",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "183",
 "name": "ChaÃ±aral",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "184",
 "name": "Copiapo",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "185",
 "name": "Huasco",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "186",
 "name": "Elqui",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "187",
 "name": "Limari",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "188",
 "name": "Choapa",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "189",
 "name": "Petorca",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "190",
 "name": "Los Andes",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "191",
 "name": "San Felipe de Aconcagua",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "192",
 "name": "Quillota ValparaÃ­so",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "193",
 "name": "San Antonio",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "194",
 "name": "Isla de Pascua",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "195",
 "name": "Marga-Marga",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "196",
 "name": "Chacabuco",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "197",
 "name": "Cordillera",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "198",
 "name": "Maipo",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "199",
 "name": "Talagante",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "200",
 "name": "Melipilla",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "201",
 "name": "Santiago",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "202",
 "name": "Cachapoal",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "203",
 "name": "Colchagua",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "204",
 "name": "Cardenal Caro",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "205",
 "name": "Curico",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "206",
 "name": "Talca",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "207",
 "name": "Linares",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "208",
 "name": "Cauquenes",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "209",
 "name": "Ã‘uble",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "210",
 "name": "Biobio",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "211",
 "name": "Concepcion",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "212",
 "name": "Arauco",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "213",
 "name": "Malleco",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "214",
 "name": "Cautin",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "215",
 "name": "Valdivia",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "216",
 "name": "Ranco",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "217",
 "name": "Osorno",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "218",
 "name": "Llanquihue",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "219",
 "name": "Chiloe",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "220",
 "name": "Palena",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "221",
 "name": "Coihaique",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "222",
 "name": "Aisen",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "223",
 "name": "General Carrera",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "224",
 "name": "Capitan Prat",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "225",
 "name": "Ultima Esperanza",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "226",
 "name": "Magallanes",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "227",
 "name": "Tierra del Fuego",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "228",
 "name": "Antartica Chilena",
 "country_id": "7",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "229",
 "name": "Acre",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "230",
 "name": "Alagoas",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "231",
 "name": "Amapá",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "232",
 "name": "Amazonas",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "233",
 "name": "Bahía",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "234",
 "name": "Ceará",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "235",
 "name": "Espírito Santo",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "236",
 "name": "Goiás",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "237",
 "name": "Maranhao",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "238",
 "name": "Mato Grosso",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "239",
 "name": "Mato Grosso del Sur",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "240",
 "name": "Minas Gerais",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "241",
 "name": "Estado de Pará",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "242",
 "name": "Paraíba",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "243",
 "name": "Paraná",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "244",
 "name": "Estado de Pernambuco",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "245",
 "name": "Piauí",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "246",
 "name": "Río de Janeiro",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "247",
 "name": "Río Grande del Norte",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "248",
 "name": "Río Grande del Sur",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "249",
 "name": "Rondonia",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "250",
 "name": "Roraima",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "251",
 "name": "Santa Catarina",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "252",
 "name": "Sao Paulo",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "253",
 "name": "Sergipe",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "254",
 "name": "Tocantins",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "255",
 "name": "Distrito Federal",
 "country_id": "8",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "256",
 "name": "A Coruña",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "257",
 "name": "Álava",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "258",
 "name": "Albacete",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "259",
 "name": "Alicante",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "260",
 "name": "Almería",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "261",
 "name": "Asturias",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "262",
 "name": "Ávila",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "263",
 "name": "Badajoz",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "264",
 "name": "Baleares",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "265",
 "name": "Barcelona",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "266",
 "name": "Burgos",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "267",
 "name": "Cáceres",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "268",
 "name": "Cádiz",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "269",
 "name": "Cantabria",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "270",
 "name": "Castellón",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "271",
 "name": "Ciudad Real",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "272",
 "name": "Córdoba",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "273",
 "name": "Cuenca",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "274",
 "name": "Girona",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "275",
 "name": "Granada",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "276",
 "name": "Guadalajara",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "277",
 "name": "Gipuzkoa",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "278",
 "name": "Huelva",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "279",
 "name": "Huesca",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "280",
 "name": "Jaén",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "281",
 "name": "La Rioja",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "282",
 "name": "Las Palmas",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "283",
 "name": "León",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "284",
 "name": "Lérida",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "285",
 "name": "Lugo",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "286",
 "name": "Madrid",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "287",
 "name": "Málaga",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "288",
 "name": "Murcia",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "289",
 "name": "Navarra",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "290",
 "name": "Ourense",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "291",
 "name": "Palencia",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "292",
 "name": "Pontevedra",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "293",
 "name": "Salamanca",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "294",
 "name": "Segovia",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "295",
 "name": "Sevilla",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "296",
 "name": "Soria",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "297",
 "name": "Tarragona",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "298",
 "name": "Santa Cruz de Tenerife",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "299",
 "name": "Teruel",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "300",
 "name": "Toledo",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "301",
 "name": "Valencia",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "302",
 "name": "Valladolid",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "303",
 "name": "Vizcaya",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "304",
 "name": "Zamora",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "305",
 "name": "Zaragoza",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "306",
 "name": "Ceuta",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "307",
 "name": "Melilla",
 "country_id": "9",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "308",
 "name": "Alsacia",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "309",
 "name": "Baja Alsacia",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "310",
 "name": "Alta Alsacia",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "311",
 "name": "Sundgau",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "312",
 "name": "Angoumois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "313",
 "name": "Anjou",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "314",
 "name": "Besugeois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "315",
 "name": "Mauges",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "316",
 "name": "Artois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "317",
 "name": "Boulonnais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "318",
 "name": "Aunis",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "319",
 "name": "Auvernia",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "320",
 "name": "Baja Navarra",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "321",
 "name": "Béarn",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "322",
 "name": "Ducado de Anjou",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "323",
 "name": "Beaujolais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "324",
 "name": "Berry",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "325",
 "name": "Bourbonnais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "326",
 "name": "Borgoña",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "327",
 "name": "Autunois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "328",
 "name": "Auxerrois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "329",
 "name": "Auxois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "330",
 "name": "Bassigny",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "331",
 "name": "Châlonnois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "332",
 "name": "Charollois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "333",
 "name": "Dijonnais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "334",
 "name": "Mâconnais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "335",
 "name": "Bresse",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "336",
 "name": "Bugey",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "337",
 "name": "Dombes",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "338",
 "name": "Pays de Gex",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "339",
 "name": "Valromey",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "340",
 "name": "Bretagne",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "341",
 "name": "Champaña",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "342",
 "name": "Brie champenoise",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "343",
 "name": "Perthois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "344",
 "name": "Rhemois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "345",
 "name": "Senonais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "346",
 "name": "Vallage",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "347",
 "name": "Córcega",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "348",
 "name": "Dauphiné",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "349",
 "name": "Baronnies",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "350",
 "name": "Briançonnois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "351",
 "name": "Champsaur",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "352",
 "name": "Diois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "353",
 "name": "Gapençais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "354",
 "name": "Graisivaudan",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "355",
 "name": "Embrunais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "356",
 "name": "Valentinois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "357",
 "name": "Viennois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "358",
 "name": "Flanders and Hainaut",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "359",
 "name": "Flandre maritime",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "360",
 "name": "Flandre wallonne",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "361",
 "name": "Hainaut",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "362",
 "name": "Cambrésis",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "363",
 "name": "Condado de Foix",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "364",
 "name": "Donnezan",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "365",
 "name": "Forez",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "366",
 "name": "Franche-Comté",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "367",
 "name": "Gascuña",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "368",
 "name": "Agenois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "369",
 "name": "Armagnac",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "370",
 "name": "Bigorre",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "371",
 "name": "Cominges",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "372",
 "name": "Condomois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "373",
 "name": "Condado de Conserans",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "374",
 "name": "Estarac",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "375",
 "name": "Grave",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "376",
 "name": "Lomagne",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "377",
 "name": "Marsan",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "378",
 "name": "Nebouzan",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "379",
 "name": "Quatre-Vallées",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "380",
 "name": "Guyenne",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "381",
 "name": "Bordelais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "382",
 "name": "Bazadois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "383",
 "name": "Ondenc",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "384",
 "name": "Labourd",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "385",
 "name": "Lannes",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "386",
 "name": "Périgord",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "387",
 "name": "Quercy",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "388",
 "name": "Rouergue",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "389",
 "name": "Île-de-France",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "390",
 "name": "Beauvais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "391",
 "name": "Brie française",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "392",
 "name": "Gâtinais français",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "393",
 "name": "Hurepoix",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "394",
 "name": "Laonnois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "395",
 "name": "Mantois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "396",
 "name": "Multien",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "397",
 "name": "Noyonnais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "398",
 "name": "Omois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "399",
 "name": "Parisis",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "400",
 "name": "Pays de France",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "401",
 "name": "Quart de Noyon",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "402",
 "name": "Soissonnois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "403",
 "name": "Vexin",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "404",
 "name": "Valois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "405",
 "name": "Languedoc",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "406",
 "name": "Gévaudan",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "407",
 "name": "Principado de Orange",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "408",
 "name": "Velay",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "409",
 "name": "Vivarais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "410",
 "name": "Landau",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "411",
 "name": "Limousin",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "412",
 "name": "Ducado de Lorena",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "413",
 "name": "Barrois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "414",
 "name": "Lyonnais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "415",
 "name": "Plat pays de Lyonnais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "416",
 "name": "Lyon",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "417",
 "name": "Franc-Lyonnais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "418",
 "name": "Maine",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "419",
 "name": "Marche",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "420",
 "name": "Combrailles",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "421",
 "name": "Nivernais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "422",
 "name": "Normandía",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "423",
 "name": "Avranchin",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "424",
 "name": "Pays d\'Auge",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "425",
 "name": "Bessin",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "426",
 "name": "Pays de Bray",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "427",
 "name": "Campagne de Caen",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "428",
 "name": "Pays de Caux",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "429",
 "name": "Cotentin",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "430",
 "name": "Le Houlme",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "431",
 "name": "Lieuvin",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "432",
 "name": "Campagne du Neubourg",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "433",
 "name": "Pays d\'Ouche",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "434",
 "name": "Roumois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "435",
 "name": "Campagne de Saint-André",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "436",
 "name": "Vexin",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "437",
 "name": "Orléanais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "438",
 "name": "Blésois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "439",
 "name": "Pays chartrain",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "440",
 "name": "Dunois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "441",
 "name": "Gâtinais orléanais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "442",
 "name": "Vendômois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "443",
 "name": "Perche",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "444",
 "name": "Perche-Gouët",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "445",
 "name": "Thimerais",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "446",
 "name": "Picardía",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "447",
 "name": "Amienois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "448",
 "name": "Ponthieu",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "449",
 "name": "Santerre",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "450",
 "name": "Thiérache",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "451",
 "name": "Vermandois",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "452",
 "name": "Vimeu",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "453",
 "name": "Poitou",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "454",
 "name": "Provenza",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "455",
 "name": "Rosellón",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "456",
 "name": "Rosellón",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "457",
 "name": "Cerdaña",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "458",
 "name": "Conflent",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "459",
 "name": "Vallespir",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "460",
 "name": "Capcir",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "461",
 "name": "Saintonge",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "462",
 "name": "Touraine",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "463",
 "name": "Trois-Évêchés",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
},
{
 "id": "464",
 "name": "Soix",
 "country_id": "10",
 "state": "1",
 "divipola_code": "91"
}
    ]
}';

    private $cities = '{
    "RECORDS": [
        {
            "id": "1",
            "name": "LA CHORRERA",
            "id_department": "1",
            "state": "1",
            "divipola": "91405",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "2",
            "name": "PUERTO ARICA",
            "id_department": "1",
            "state": "1",
            "divipola": "91536",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "3",
            "name": "EL ENCANTO",
            "id_department": "1",
            "state": "1",
            "divipola": "91263",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "4",
            "name": "LA PEDRERA",
            "id_department": "1",
            "state": "1",
            "divipola": "91407",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "5",
            "name": "TARAPACÁ",
            "id_department": "1",
            "state": "1",
            "divipola": "91798",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "6",
            "name": "PUERTO NARIÑO",
            "id_department": "1",
            "state": "1",
            "divipola": "91540",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "7",
            "name": "PUERTO ALEGRÍA",
            "id_department": "1",
            "state": "1",
            "divipola": "91530",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "8",
            "name": "LETICIA",
            "id_department": "1",
            "state": "1",
            "divipola": "91001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "9",
            "name": "MIRITI-PARANÁ",
            "id_department": "1",
            "state": "1",
            "divipola": "91460",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "10",
            "name": "SAN VICENTE",
            "id_department": "2",
            "state": "1",
            "divipola": "05674",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "11",
            "name": "GIRARDOTA",
            "id_department": "2",
            "state": "1",
            "divipola": "05308",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "12",
            "name": "SONSON",
            "id_department": "2",
            "state": "1",
            "divipola": "05756",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "13",
            "name": "ANZA",
            "id_department": "2",
            "state": "1",
            "divipola": "05044",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "14",
            "name": "DON MATÍAS",
            "id_department": "2",
            "state": "1",
            "divipola": "05237",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "15",
            "name": "ZARAGOZA",
            "id_department": "2",
            "state": "1",
            "divipola": "05895",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "16",
            "name": "HELICONIA",
            "id_department": "2",
            "state": "1",
            "divipola": "05347",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "17",
            "name": "LA CEJA",
            "id_department": "2",
            "state": "1",
            "divipola": "05376",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "18",
            "name": "OLAYA",
            "id_department": "2",
            "state": "1",
            "divipola": "05501",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "19",
            "name": "BELMIRA",
            "id_department": "2",
            "state": "1",
            "divipola": "05086",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "20",
            "name": "CISNEROS",
            "id_department": "2",
            "state": "1",
            "divipola": "05190",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "21",
            "name": "BURITICÁ",
            "id_department": "2",
            "state": "1",
            "divipola": "05113",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "22",
            "name": "HISPANIA",
            "id_department": "2",
            "state": "1",
            "divipola": "05353",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "23",
            "name": "AMAGÁ",
            "id_department": "2",
            "state": "1",
            "divipola": "05030",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "24",
            "name": "ITUANGO",
            "id_department": "2",
            "state": "1",
            "divipola": "05361",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "25",
            "name": "FREDONIA",
            "id_department": "2",
            "state": "1",
            "divipola": "05282",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "26",
            "name": "MACEO",
            "id_department": "2",
            "state": "1",
            "divipola": "05425",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "27",
            "name": "SEGOVIA",
            "id_department": "2",
            "state": "1",
            "divipola": "05736",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "28",
            "name": "PUERTO BERRÍO",
            "id_department": "2",
            "state": "1",
            "divipola": "05579",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "29",
            "name": "TITIRIBÍ",
            "id_department": "2",
            "state": "1",
            "divipola": "05809",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "30",
            "name": "ABRIAQUÍ",
            "id_department": "2",
            "state": "1",
            "divipola": "05004",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "31",
            "name": "GIRALDO",
            "id_department": "2",
            "state": "1",
            "divipola": "05306",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "32",
            "name": "SALGAR",
            "id_department": "2",
            "state": "1",
            "divipola": "05642",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "33",
            "name": "AMALFI",
            "id_department": "2",
            "state": "1",
            "divipola": "05031",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "34",
            "name": "CAICEDO",
            "id_department": "2",
            "state": "1",
            "divipola": "05125",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "35",
            "name": "SAN JUAN DE URABÁ",
            "id_department": "2",
            "state": "1",
            "divipola": "05659",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "36",
            "name": "TURBO",
            "id_department": "2",
            "state": "1",
            "divipola": "05837",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "37",
            "name": "CAROLINA",
            "id_department": "2",
            "state": "1",
            "divipola": "05150",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "38",
            "name": "TARSO",
            "id_department": "2",
            "state": "1",
            "divipola": "05792",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "39",
            "name": "CARACOLÍ",
            "id_department": "2",
            "state": "1",
            "divipola": "05142",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "40",
            "name": "ANDES",
            "id_department": "2",
            "state": "1",
            "divipola": "05034",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "41",
            "name": "CÁCERES",
            "id_department": "2",
            "state": "1",
            "divipola": "05120",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "42",
            "name": "CAREPA",
            "id_department": "2",
            "state": "1",
            "divipola": "05147",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "43",
            "name": "PEQUE",
            "id_department": "2",
            "state": "1",
            "divipola": "05543",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "44",
            "name": "EBÉJICO",
            "id_department": "2",
            "state": "1",
            "divipola": "05240",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "45",
            "name": "MURINDÓ",
            "id_department": "2",
            "state": "1",
            "divipola": "05475",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "46",
            "name": "PUERTO NARE",
            "id_department": "2",
            "state": "1",
            "divipola": "05585",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "47",
            "name": "GUARNE",
            "id_department": "2",
            "state": "1",
            "divipola": "05318",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "48",
            "name": "ANGELÓPOLIS",
            "id_department": "2",
            "state": "1",
            "divipola": "05036",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "49",
            "name": "SAN PEDRO DE URABA",
            "id_department": "2",
            "state": "1",
            "divipola": "05665",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "50",
            "name": "CARAMANTA",
            "id_department": "2",
            "state": "1",
            "divipola": "05145",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "51",
            "name": "PEÑOL",
            "id_department": "2",
            "state": "1",
            "divipola": "05541",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "52",
            "name": "NECOCLÍ",
            "id_department": "2",
            "state": "1",
            "divipola": "05490",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "53",
            "name": "SANTO DOMINGO",
            "id_department": "2",
            "state": "1",
            "divipola": "05690",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "54",
            "name": "VIGÍA DEL FUERTE",
            "id_department": "2",
            "state": "1",
            "divipola": "05873",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "55",
            "name": "SAN ANDRÉS DE CUERQUÍA",
            "id_department": "2",
            "state": "1",
            "divipola": "05647",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "56",
            "name": "SAN JOSÉ DE LA MONTAÑA",
            "id_department": "2",
            "state": "1",
            "divipola": "05658",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "57",
            "name": "APARTADÓ",
            "id_department": "2",
            "state": "1",
            "divipola": "05045",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "58",
            "name": "YARUMAL",
            "id_department": "2",
            "state": "1",
            "divipola": "05887",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "59",
            "name": "EL BAGRE",
            "id_department": "2",
            "state": "1",
            "divipola": "05250",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "60",
            "name": "ENVIGADO",
            "id_department": "2",
            "state": "1",
            "divipola": "05266",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "61",
            "name": "GÓMEZ PLATA",
            "id_department": "2",
            "state": "1",
            "divipola": "05310",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "62",
            "name": "BELLO",
            "id_department": "2",
            "state": "1",
            "divipola": "05088",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "63",
            "name": "ANGOSTURA",
            "id_department": "2",
            "state": "1",
            "divipola": "05038",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "64",
            "name": "YONDÓ",
            "id_department": "2",
            "state": "1",
            "divipola": "05893",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "65",
            "name": "TARAZÁ",
            "id_department": "2",
            "state": "1",
            "divipola": "05790",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "66",
            "name": "ENTRERRIOS",
            "id_department": "2",
            "state": "1",
            "divipola": "05264",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "67",
            "name": "SAN ROQUE",
            "id_department": "2",
            "state": "1",
            "divipola": "05670",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "68",
            "name": "SANTA ROSA DE OSOS",
            "id_department": "2",
            "state": "1",
            "divipola": "05686",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "69",
            "name": "COCORNÁ",
            "id_department": "2",
            "state": "1",
            "divipola": "05197",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "70",
            "name": "CHIGORODÓ",
            "id_department": "2",
            "state": "1",
            "divipola": "05172",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "71",
            "name": "SAN JERÓNIMO",
            "id_department": "2",
            "state": "1",
            "divipola": "05656",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "72",
            "name": "PUERTO TRIUNFO",
            "id_department": "2",
            "state": "1",
            "divipola": "05591",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "73",
            "name": "YOLOMBÓ",
            "id_department": "2",
            "state": "1",
            "divipola": "05890",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "74",
            "name": "URAMITA",
            "id_department": "2",
            "state": "1",
            "divipola": "05842",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "75",
            "name": "MUTATÁ",
            "id_department": "2",
            "state": "1",
            "divipola": "05480",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "76",
            "name": "EL SANTUARIO",
            "id_department": "2",
            "state": "1",
            "divipola": "05697",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "77",
            "name": "SAN PEDRO DE LOS MILAGROS",
            "id_department": "2",
            "state": "1",
            "divipola": "05664",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "78",
            "name": "SOPETRÁN",
            "id_department": "2",
            "state": "1",
            "divipola": "05761",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "79",
            "name": "MARINILLA",
            "id_department": "2",
            "state": "1",
            "divipola": "05440",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "80",
            "name": "FRONTINO",
            "id_department": "2",
            "state": "1",
            "divipola": "05284",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "81",
            "name": "CAUCASIA",
            "id_department": "2",
            "state": "1",
            "divipola": "05154",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "82",
            "name": "GUATAPE",
            "id_department": "2",
            "state": "1",
            "divipola": "05321",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "83",
            "name": "NECHÍ",
            "id_department": "2",
            "state": "1",
            "divipola": "05495",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "84",
            "name": "SANTAFÉ DE ANTIOQUIA",
            "id_department": "2",
            "state": "1",
            "divipola": "05042",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "85",
            "name": "REMEDIOS",
            "id_department": "2",
            "state": "1",
            "divipola": "05604",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "86",
            "name": "LA PINTADA",
            "id_department": "2",
            "state": "1",
            "divipola": "05390",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "87",
            "name": "URRAO",
            "id_department": "2",
            "state": "1",
            "divipola": "05847",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "88",
            "name": "SABANETA",
            "id_department": "2",
            "state": "1",
            "divipola": "05631",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "89",
            "name": "MEDELLÍN",
            "id_department": "2",
            "state": "1",
            "divipola": "05001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "90",
            "name": "COPACABANA",
            "id_department": "2",
            "state": "1",
            "divipola": "05212",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "91",
            "name": "VEGACHÍ",
            "id_department": "2",
            "state": "1",
            "divipola": "05858",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "92",
            "name": "LIBORINA",
            "id_department": "2",
            "state": "1",
            "divipola": "05411",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "93",
            "name": "CAMPAMENTO",
            "id_department": "2",
            "state": "1",
            "divipola": "05134",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "94",
            "name": "DABEIBA",
            "id_department": "2",
            "state": "1",
            "divipola": "05234",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "95",
            "name": "ALEJANDRÍA",
            "id_department": "2",
            "state": "1",
            "divipola": "05021",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "96",
            "name": "RETIRO",
            "id_department": "2",
            "state": "1",
            "divipola": "05607",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "97",
            "name": "ARBOLETES",
            "id_department": "2",
            "state": "1",
            "divipola": "05051",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "98",
            "name": "SAN RAFAEL",
            "id_department": "2",
            "state": "1",
            "divipola": "05667",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "99",
            "name": "JARDÍN",
            "id_department": "2",
            "state": "1",
            "divipola": "05364",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "100",
            "name": "ABEJORRAL",
            "id_department": "2",
            "state": "1",
            "divipola": "05002",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "101",
            "name": "EL CARMEN DE VIBORAL",
            "id_department": "2",
            "state": "1",
            "divipola": "05148",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "102",
            "name": "LA ESTRELLA",
            "id_department": "2",
            "state": "1",
            "divipola": "05380",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "103",
            "name": "VALDIVIA",
            "id_department": "2",
            "state": "1",
            "divipola": "05854",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "104",
            "name": "BETANIA",
            "id_department": "2",
            "state": "1",
            "divipola": "05091",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "105",
            "name": "ITAGUI",
            "id_department": "2",
            "state": "1",
            "divipola": "05360",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "106",
            "name": "CAÑASGORDAS",
            "id_department": "2",
            "state": "1",
            "divipola": "05138",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "107",
            "name": "MONTEBELLO",
            "id_department": "2",
            "state": "1",
            "divipola": "05467",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "108",
            "name": "ANORÍ",
            "id_department": "2",
            "state": "1",
            "divipola": "05040",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "109",
            "name": "YALÍ",
            "id_department": "2",
            "state": "1",
            "divipola": "05885",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "110",
            "name": "TÁMESIS",
            "id_department": "2",
            "state": "1",
            "divipola": "05789",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "111",
            "name": "PUEBLORRICO",
            "id_department": "2",
            "state": "1",
            "divipola": "05576",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "112",
            "name": "CIUDAD BOLÍVAR",
            "id_department": "2",
            "state": "1",
            "divipola": "05101",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "113",
            "name": "PUERTO RONDÓN",
            "id_department": "3",
            "state": "1",
            "divipola": "81591",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "114",
            "name": "SARAVENA",
            "id_department": "3",
            "state": "1",
            "divipola": "81736",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "115",
            "name": "ARAUQUITA",
            "id_department": "3",
            "state": "1",
            "divipola": "81065",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "116",
            "name": "TAME",
            "id_department": "3",
            "state": "1",
            "divipola": "81794",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "117",
            "name": "ARAUCA",
            "id_department": "3",
            "state": "1",
            "divipola": "81001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "118",
            "name": "CRAVO NORTE",
            "id_department": "3",
            "state": "1",
            "divipola": "81220",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "119",
            "name": "FORTUL",
            "id_department": "3",
            "state": "1",
            "divipola": "81300",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "120",
            "name": "SUAN",
            "id_department": "5",
            "state": "1",
            "divipola": "08770",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "121",
            "name": "PIOJÓ",
            "id_department": "5",
            "state": "1",
            "divipola": "08549",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "122",
            "name": "REPELÓN",
            "id_department": "5",
            "state": "1",
            "divipola": "08606",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "123",
            "name": "LURUACO",
            "id_department": "5",
            "state": "1",
            "divipola": "08421",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "124",
            "name": "GALAPA",
            "id_department": "5",
            "state": "1",
            "divipola": "08296",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "125",
            "name": "POLONUEVO",
            "id_department": "5",
            "state": "1",
            "divipola": "08558",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "126",
            "name": "JUAN DE ACOSTA",
            "id_department": "5",
            "state": "1",
            "divipola": "08372",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "127",
            "name": "SABANAGRANDE",
            "id_department": "5",
            "state": "1",
            "divipola": "08634",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "128",
            "name": "MANATÍ",
            "id_department": "5",
            "state": "1",
            "divipola": "08436",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "129",
            "name": "PALMAR DE VARELA",
            "id_department": "5",
            "state": "1",
            "divipola": "08520",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "130",
            "name": "BARRANQUILLA",
            "id_department": "5",
            "state": "1",
            "divipola": "08001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "131",
            "name": "TUBARÁ",
            "id_department": "5",
            "state": "1",
            "divipola": "08832",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "132",
            "name": "CAMPO DE LA CRUZ",
            "id_department": "5",
            "state": "1",
            "divipola": "08137",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "133",
            "name": "SANTO TOMÁS",
            "id_department": "5",
            "state": "1",
            "divipola": "08685",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "134",
            "name": "BARANOA",
            "id_department": "5",
            "state": "1",
            "divipola": "08078",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "135",
            "name": "SOLEDAD",
            "id_department": "5",
            "state": "1",
            "divipola": "08758",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "136",
            "name": "PONEDERA",
            "id_department": "5",
            "state": "1",
            "divipola": "08560",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "137",
            "name": "SANTA LUCÍA",
            "id_department": "5",
            "state": "1",
            "divipola": "08675",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "138",
            "name": "USIACURÍ",
            "id_department": "5",
            "state": "1",
            "divipola": "08849",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "139",
            "name": "MALAMBO",
            "id_department": "5",
            "state": "1",
            "divipola": "08433",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "140",
            "name": "BOGOTÁ, D.C.",
            "id_department": "6",
            "state": "1",
            "divipola": "11001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "141",
            "name": "TALAIGUA NUEVO",
            "id_department": "7",
            "state": "1",
            "divipola": "13780",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "142",
            "name": "SAN JACINTO",
            "id_department": "7",
            "state": "1",
            "divipola": "13654",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "143",
            "name": "CARTAGENA",
            "id_department": "7",
            "state": "1",
            "divipola": "13001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "144",
            "name": "REGIDOR",
            "id_department": "7",
            "state": "1",
            "divipola": "13580",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "145",
            "name": "SOPLAVIENTO",
            "id_department": "7",
            "state": "1",
            "divipola": "13760",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "146",
            "name": "MARÍA LA BAJA",
            "id_department": "7",
            "state": "1",
            "divipola": "13442",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "147",
            "name": "ARENAL",
            "id_department": "7",
            "state": "1",
            "divipola": "13042",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "148",
            "name": "ALTOS DEL ROSARIO",
            "id_department": "7",
            "state": "1",
            "divipola": "13030",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "149",
            "name": "TIQUISIO",
            "id_department": "7",
            "state": "1",
            "divipola": "13810",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "150",
            "name": "MAHATES",
            "id_department": "7",
            "state": "1",
            "divipola": "13433",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "151",
            "name": "PINILLOS",
            "id_department": "7",
            "state": "1",
            "divipola": "13549",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "152",
            "name": "CANTAGALLO",
            "id_department": "7",
            "state": "1",
            "divipola": "13160",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "153",
            "name": "SAN MARTÍN DE LOBA",
            "id_department": "7",
            "state": "1",
            "divipola": "13667",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "154",
            "name": "EL GUAMO",
            "id_department": "7",
            "state": "1",
            "divipola": "13248",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "155",
            "name": "SANTA CATALINA",
            "id_department": "7",
            "state": "1",
            "divipola": "13673",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "156",
            "name": "ARJONA",
            "id_department": "7",
            "state": "1",
            "divipola": "13052",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "157",
            "name": "SAN JACINTO DEL CAUCA",
            "id_department": "7",
            "state": "1",
            "divipola": "13655",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "158",
            "name": "MAGANGUÉ",
            "id_department": "7",
            "state": "1",
            "divipola": "13430",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "159",
            "name": "SAN ESTANISLAO",
            "id_department": "7",
            "state": "1",
            "divipola": "13647",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "160",
            "name": "SANTA ROSA DEL SUR",
            "id_department": "7",
            "state": "1",
            "divipola": "13688",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "161",
            "name": "HATILLO DE LOBA",
            "id_department": "7",
            "state": "1",
            "divipola": "13300",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "162",
            "name": "ARROYOHONDO",
            "id_department": "7",
            "state": "1",
            "divipola": "13062",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "163",
            "name": "ACHÍ",
            "id_department": "7",
            "state": "1",
            "divipola": "13006",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "164",
            "name": "CLEMENCIA",
            "id_department": "7",
            "state": "1",
            "divipola": "13222",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "165",
            "name": "ZAMBRANO",
            "id_department": "7",
            "state": "1",
            "divipola": "13894",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "166",
            "name": "MOMPÓS",
            "id_department": "7",
            "state": "1",
            "divipola": "13468",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "167",
            "name": "RÍO VIEJO",
            "id_department": "7",
            "state": "1",
            "divipola": "13600",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "168",
            "name": "SAN CRISTÓBAL",
            "id_department": "7",
            "state": "1",
            "divipola": "13620",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "169",
            "name": "SAN JUAN NEPOMUCENO",
            "id_department": "7",
            "state": "1",
            "divipola": "13657",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "170",
            "name": "CICUCO",
            "id_department": "7",
            "state": "1",
            "divipola": "13188",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "171",
            "name": "MONTECRISTO",
            "id_department": "7",
            "state": "1",
            "divipola": "13458",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "172",
            "name": "TURBACO",
            "id_department": "7",
            "state": "1",
            "divipola": "13836",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "173",
            "name": "EL CARMEN DE BOLÍVAR",
            "id_department": "7",
            "state": "1",
            "divipola": "13244",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "174",
            "name": "SAN FERNANDO",
            "id_department": "7",
            "state": "1",
            "divipola": "13650",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "175",
            "name": "BARRANCO DE LOBA",
            "id_department": "7",
            "state": "1",
            "divipola": "13074",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "176",
            "name": "TURBANÁ",
            "id_department": "7",
            "state": "1",
            "divipola": "13838",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "177",
            "name": "SIMITÍ",
            "id_department": "7",
            "state": "1",
            "divipola": "13744",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "178",
            "name": "MARGARITA",
            "id_department": "7",
            "state": "1",
            "divipola": "13440",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "179",
            "name": "JERICÓ",
            "id_department": "8",
            "state": "1",
            "divipola": "15368",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "180",
            "name": "TINJACÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15808",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "181",
            "name": "CORRALES",
            "id_department": "8",
            "state": "1",
            "divipola": "15215",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "182",
            "name": "VILLA DE LEYVA",
            "id_department": "8",
            "state": "1",
            "divipola": "15407",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "183",
            "name": "PAZ DE RÍO",
            "id_department": "8",
            "state": "1",
            "divipola": "15537",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "184",
            "name": "SAMACÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15646",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "185",
            "name": "TOTA",
            "id_department": "8",
            "state": "1",
            "divipola": "15822",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "186",
            "name": "SOMONDOCO",
            "id_department": "8",
            "state": "1",
            "divipola": "15761",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "187",
            "name": "LABRANZAGRANDE",
            "id_department": "8",
            "state": "1",
            "divipola": "15377",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "188",
            "name": "PANQUEBA",
            "id_department": "8",
            "state": "1",
            "divipola": "15522",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "189",
            "name": "GARAGOA",
            "id_department": "8",
            "state": "1",
            "divipola": "15299",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "190",
            "name": "RAMIRIQUÍ",
            "id_department": "8",
            "state": "1",
            "divipola": "15599",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "191",
            "name": "CAMPOHERMOSO",
            "id_department": "8",
            "state": "1",
            "divipola": "15135",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "192",
            "name": "AQUITANIA",
            "id_department": "8",
            "state": "1",
            "divipola": "15047",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "193",
            "name": "SABOYÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15632",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "194",
            "name": "TIPACOQUE",
            "id_department": "8",
            "state": "1",
            "divipola": "15810",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "195",
            "name": "GACHANTIVÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15293",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "196",
            "name": "CHIQUINQUIRÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15176",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "197",
            "name": "DUITAMA",
            "id_department": "8",
            "state": "1",
            "divipola": "15238",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "198",
            "name": "OTANCHE",
            "id_department": "8",
            "state": "1",
            "divipola": "15507",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "199",
            "name": "SANTA SOFÍA",
            "id_department": "8",
            "state": "1",
            "divipola": "15696",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "200",
            "name": "BOYACÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15104",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "201",
            "name": "SAN EDUARDO",
            "id_department": "8",
            "state": "1",
            "divipola": "15660",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "202",
            "name": "SÁCHICA",
            "id_department": "8",
            "state": "1",
            "divipola": "15638",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "203",
            "name": "CHINAVITA",
            "id_department": "8",
            "state": "1",
            "divipola": "15172",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "204",
            "name": "CÓMBITA",
            "id_department": "8",
            "state": "1",
            "divipola": "15204",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "205",
            "name": "GUAYATÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15325",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "206",
            "name": "RONDÓN",
            "id_department": "8",
            "state": "1",
            "divipola": "15621",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "207",
            "name": "PISBA",
            "id_department": "8",
            "state": "1",
            "divipola": "15550",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "208",
            "name": "GUACAMAYAS",
            "id_department": "8",
            "state": "1",
            "divipola": "15317",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "209",
            "name": "MARIPÍ",
            "id_department": "8",
            "state": "1",
            "divipola": "15442",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "210",
            "name": "GAMEZA",
            "id_department": "8",
            "state": "1",
            "divipola": "15296",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "211",
            "name": "COVARACHÍA",
            "id_department": "8",
            "state": "1",
            "divipola": "15218",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "212",
            "name": "BOAVITA",
            "id_department": "8",
            "state": "1",
            "divipola": "15097",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "213",
            "name": "SUTAMARCHÁN",
            "id_department": "8",
            "state": "1",
            "divipola": "15776",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "214",
            "name": "FLORESTA",
            "id_department": "8",
            "state": "1",
            "divipola": "15276",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "215",
            "name": "MONGUÍ",
            "id_department": "8",
            "state": "1",
            "divipola": "15466",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "216",
            "name": "SAN LUIS DE GACENO",
            "id_department": "8",
            "state": "1",
            "divipola": "15667",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "217",
            "name": "ARCABUCO",
            "id_department": "8",
            "state": "1",
            "divipola": "15051",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "218",
            "name": "SOTAQUIRÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15763",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "219",
            "name": "SORACÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15764",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "220",
            "name": "ZETAQUIRA",
            "id_department": "8",
            "state": "1",
            "divipola": "15897",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "221",
            "name": "EL COCUY",
            "id_department": "8",
            "state": "1",
            "divipola": "15244",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "222",
            "name": "TENZA",
            "id_department": "8",
            "state": "1",
            "divipola": "15798",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "223",
            "name": "COPER",
            "id_department": "8",
            "state": "1",
            "divipola": "15212",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "224",
            "name": "JENESANO",
            "id_department": "8",
            "state": "1",
            "divipola": "15367",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "225",
            "name": "MONIQUIRÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15469",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "226",
            "name": "TÓPAGA",
            "id_department": "8",
            "state": "1",
            "divipola": "15820",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "227",
            "name": "SUSACÓN",
            "id_department": "8",
            "state": "1",
            "divipola": "15774",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "228",
            "name": "GÜICÁN",
            "id_department": "8",
            "state": "1",
            "divipola": "15332",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "229",
            "name": "PAYA",
            "id_department": "8",
            "state": "1",
            "divipola": "15533",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "230",
            "name": "ALMEIDA",
            "id_department": "8",
            "state": "1",
            "divipola": "15022",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "231",
            "name": "CUCAITA",
            "id_department": "8",
            "state": "1",
            "divipola": "15224",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "232",
            "name": "SANTA ROSA DE VITERBO",
            "id_department": "8",
            "state": "1",
            "divipola": "15693",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "233",
            "name": "SOCHA",
            "id_department": "8",
            "state": "1",
            "divipola": "15757",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "234",
            "name": "CHIVATÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15187",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "235",
            "name": "SAN MATEO",
            "id_department": "8",
            "state": "1",
            "divipola": "15673",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "236",
            "name": "GUATEQUE",
            "id_department": "8",
            "state": "1",
            "divipola": "15322",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "237",
            "name": "IZA",
            "id_department": "8",
            "state": "1",
            "divipola": "15362",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "238",
            "name": "BRICEÑO",
            "id_department": "8",
            "state": "1",
            "divipola": "15106",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "239",
            "name": "SAN MIGUEL DE SEMA",
            "id_department": "8",
            "state": "1",
            "divipola": "15676",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "240",
            "name": "PAJARITO",
            "id_department": "8",
            "state": "1",
            "divipola": "15518",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "241",
            "name": "RÁQUIRA",
            "id_department": "8",
            "state": "1",
            "divipola": "15600",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "242",
            "name": "CIÉNEGA",
            "id_department": "8",
            "state": "1",
            "divipola": "15189",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "243",
            "name": "MACANAL",
            "id_department": "8",
            "state": "1",
            "divipola": "15425",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "244",
            "name": "TUTA",
            "id_department": "8",
            "state": "1",
            "divipola": "15837",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "245",
            "name": "MUZO",
            "id_department": "8",
            "state": "1",
            "divipola": "15480",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "246",
            "name": "TUNUNGUÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15832",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "247",
            "name": "CHISCAS",
            "id_department": "8",
            "state": "1",
            "divipola": "15180",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "248",
            "name": "SAN JOSÉ DE PARE",
            "id_department": "8",
            "state": "1",
            "divipola": "15664",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "249",
            "name": "NUEVO COLÓN",
            "id_department": "8",
            "state": "1",
            "divipola": "15494",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "250",
            "name": "PAUNA",
            "id_department": "8",
            "state": "1",
            "divipola": "15531",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "251",
            "name": "CUÍTIVA",
            "id_department": "8",
            "state": "1",
            "divipola": "15226",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "252",
            "name": "TUNJA",
            "id_department": "8",
            "state": "1",
            "divipola": "15001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "253",
            "name": "TASCO",
            "id_department": "8",
            "state": "1",
            "divipola": "15790",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "254",
            "name": "SATIVANORTE",
            "id_department": "8",
            "state": "1",
            "divipola": "15720",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "255",
            "name": "CUBARÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15223",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "256",
            "name": "BERBEO",
            "id_department": "8",
            "state": "1",
            "divipola": "15090",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "257",
            "name": "SANTANA",
            "id_department": "8",
            "state": "1",
            "divipola": "15686",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "258",
            "name": "SIACHOQUE",
            "id_department": "8",
            "state": "1",
            "divipola": "15740",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "259",
            "name": "SORA",
            "id_department": "8",
            "state": "1",
            "divipola": "15762",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "260",
            "name": "QUÍPAMA",
            "id_department": "8",
            "state": "1",
            "divipola": "15580",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "261",
            "name": "EL ESPINO",
            "id_department": "8",
            "state": "1",
            "divipola": "15248",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "262",
            "name": "SAN PABLO DE BORBUR",
            "id_department": "8",
            "state": "1",
            "divipola": "15681",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "263",
            "name": "NOBSA",
            "id_department": "8",
            "state": "1",
            "divipola": "15491",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "264",
            "name": "CHITA",
            "id_department": "8",
            "state": "1",
            "divipola": "15183",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "265",
            "name": "SOGAMOSO",
            "id_department": "8",
            "state": "1",
            "divipola": "15759",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "266",
            "name": "SUTATENZA",
            "id_department": "8",
            "state": "1",
            "divipola": "15778",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "267",
            "name": "BETÉITIVA",
            "id_department": "8",
            "state": "1",
            "divipola": "15092",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "268",
            "name": "FIRAVITOBA",
            "id_department": "8",
            "state": "1",
            "divipola": "15272",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "269",
            "name": "VENTAQUEMADA",
            "id_department": "8",
            "state": "1",
            "divipola": "15861",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "270",
            "name": "SOCOTÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15755",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "271",
            "name": "SOATÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15753",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "272",
            "name": "MONGUA",
            "id_department": "8",
            "state": "1",
            "divipola": "15464",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "273",
            "name": "CHÍQUIZA",
            "id_department": "8",
            "state": "1",
            "divipola": "15232",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "274",
            "name": "TIBASOSA",
            "id_department": "8",
            "state": "1",
            "divipola": "15806",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "275",
            "name": "VIRACACHÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15879",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "276",
            "name": "PESCA",
            "id_department": "8",
            "state": "1",
            "divipola": "15542",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "277",
            "name": "TIBANÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15804",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "278",
            "name": "LA CAPILLA",
            "id_department": "8",
            "state": "1",
            "divipola": "15380",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "279",
            "name": "CHITARAQUE",
            "id_department": "8",
            "state": "1",
            "divipola": "15185",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "280",
            "name": "PÁEZ",
            "id_department": "8",
            "state": "1",
            "divipola": "15514",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "281",
            "name": "MOTAVITA",
            "id_department": "8",
            "state": "1",
            "divipola": "15476",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "282",
            "name": "TOCA",
            "id_department": "8",
            "state": "1",
            "divipola": "15814",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "283",
            "name": "PAIPA",
            "id_department": "8",
            "state": "1",
            "divipola": "15516",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "284",
            "name": "TUTAZÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15839",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "285",
            "name": "CERINZA",
            "id_department": "8",
            "state": "1",
            "divipola": "15162",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "286",
            "name": "UMBITA",
            "id_department": "8",
            "state": "1",
            "divipola": "15842",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "287",
            "name": "CALDAS",
            "id_department": "8",
            "state": "1",
            "divipola": "15131",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "288",
            "name": "PACHAVITA",
            "id_department": "8",
            "state": "1",
            "divipola": "15511",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "289",
            "name": "TURMEQUÉ",
            "id_department": "8",
            "state": "1",
            "divipola": "15835",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "290",
            "name": "CHIVOR",
            "id_department": "8",
            "state": "1",
            "divipola": "15236",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "291",
            "name": "BUSBANZÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15114",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "292",
            "name": "LA UVITA",
            "id_department": "8",
            "state": "1",
            "divipola": "15403",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "293",
            "name": "OICATÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15500",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "294",
            "name": "TOGÜÍ",
            "id_department": "8",
            "state": "1",
            "divipola": "15816",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "295",
            "name": "PUERTO BOYACÁ",
            "id_department": "8",
            "state": "1",
            "divipola": "15572",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "296",
            "name": "SATIVASUR",
            "id_department": "8",
            "state": "1",
            "divipola": "15723",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "297",
            "name": "MANZANARES",
            "id_department": "9",
            "state": "1",
            "divipola": "17433",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "298",
            "name": "LA DORADA",
            "id_department": "9",
            "state": "1",
            "divipola": "17380",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "299",
            "name": "NEIRA",
            "id_department": "9",
            "state": "1",
            "divipola": "17486",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "300",
            "name": "PÁCORA",
            "id_department": "9",
            "state": "1",
            "divipola": "17513",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "301",
            "name": "VILLAMARÍA",
            "id_department": "9",
            "state": "1",
            "divipola": "17873",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "302",
            "name": "VITERBO",
            "id_department": "9",
            "state": "1",
            "divipola": "17877",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "303",
            "name": "VICTORIA",
            "id_department": "9",
            "state": "1",
            "divipola": "17867",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "304",
            "name": "FILADELFIA",
            "id_department": "9",
            "state": "1",
            "divipola": "17272",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "305",
            "name": "NORCASIA",
            "id_department": "9",
            "state": "1",
            "divipola": "17495",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "306",
            "name": "MANIZALES",
            "id_department": "9",
            "state": "1",
            "divipola": "17001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "307",
            "name": "ANSERMA",
            "id_department": "9",
            "state": "1",
            "divipola": "17042",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "308",
            "name": "PENSILVANIA",
            "id_department": "9",
            "state": "1",
            "divipola": "17541",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "309",
            "name": "MARULANDA",
            "id_department": "9",
            "state": "1",
            "divipola": "17446",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "310",
            "name": "LA MERCED",
            "id_department": "9",
            "state": "1",
            "divipola": "17388",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "311",
            "name": "SAMANÁ",
            "id_department": "9",
            "state": "1",
            "divipola": "17662",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "312",
            "name": "MARQUETALIA",
            "id_department": "9",
            "state": "1",
            "divipola": "17444",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "313",
            "name": "MARMATO",
            "id_department": "9",
            "state": "1",
            "divipola": "17442",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "314",
            "name": "AGUADAS",
            "id_department": "9",
            "state": "1",
            "divipola": "17013",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "315",
            "name": "BELALCÁZAR",
            "id_department": "9",
            "state": "1",
            "divipola": "17088",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "316",
            "name": "SUPÍA",
            "id_department": "9",
            "state": "1",
            "divipola": "17777",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "317",
            "name": "ARANZAZU",
            "id_department": "9",
            "state": "1",
            "divipola": "17050",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "318",
            "name": "RISARALDA",
            "id_department": "9",
            "state": "1",
            "divipola": "17616",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "319",
            "name": "CHINCHINÁ",
            "id_department": "9",
            "state": "1",
            "divipola": "17174",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "320",
            "name": "SAN JOSÉ",
            "id_department": "9",
            "state": "1",
            "divipola": "17665",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "321",
            "name": "CURILLO",
            "id_department": "10",
            "state": "1",
            "divipola": "18205",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "322",
            "name": "MORELIA",
            "id_department": "10",
            "state": "1",
            "divipola": "18479",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "323",
            "name": "CARTAGENA DEL CHAIRÁ",
            "id_department": "10",
            "state": "1",
            "divipola": "18150",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "324",
            "name": "SAN JOSÉ DEL FRAGUA",
            "id_department": "10",
            "state": "1",
            "divipola": "18610",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "325",
            "name": "MILÁN",
            "id_department": "10",
            "state": "1",
            "divipola": "18460",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "326",
            "name": "SAN VICENTE DEL CAGUÁN",
            "id_department": "10",
            "state": "1",
            "divipola": "18753",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "327",
            "name": "EL PAUJIL",
            "id_department": "10",
            "state": "1",
            "divipola": "18256",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "328",
            "name": "BELÉN DE LOS ANDAQUÍES",
            "id_department": "10",
            "state": "1",
            "divipola": "18094",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "329",
            "name": "EL DONCELLO",
            "id_department": "10",
            "state": "1",
            "divipola": "18247",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "330",
            "name": "SOLANO",
            "id_department": "10",
            "state": "1",
            "divipola": "18756",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "331",
            "name": "SOLITA",
            "id_department": "10",
            "state": "1",
            "divipola": "18785",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "332",
            "name": "LA MONTAÑITA",
            "id_department": "10",
            "state": "1",
            "divipola": "18410",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "333",
            "name": "VALPARAÍSO",
            "id_department": "10",
            "state": "1",
            "divipola": "18860",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "334",
            "name": "SAN LUIS DE PALENQUE",
            "id_department": "11",
            "state": "1",
            "divipola": "85325",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "335",
            "name": "SABANALARGA",
            "id_department": "11",
            "state": "1",
            "divipola": "85300",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "336",
            "name": "AGUAZUL",
            "id_department": "11",
            "state": "1",
            "divipola": "85010",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "337",
            "name": "YOPAL",
            "id_department": "11",
            "state": "1",
            "divipola": "85001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "338",
            "name": "HATO COROZAL",
            "id_department": "11",
            "state": "1",
            "divipola": "85125",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "339",
            "name": "CHAMEZA",
            "id_department": "11",
            "state": "1",
            "divipola": "85015",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "340",
            "name": "TAURAMENA",
            "id_department": "11",
            "state": "1",
            "divipola": "85410",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "341",
            "name": "RECETOR",
            "id_department": "11",
            "state": "1",
            "divipola": "85279",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "342",
            "name": "LA SALINA",
            "id_department": "11",
            "state": "1",
            "divipola": "85136",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "343",
            "name": "PORE",
            "id_department": "11",
            "state": "1",
            "divipola": "85263",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "344",
            "name": "TRINIDAD",
            "id_department": "11",
            "state": "1",
            "divipola": "85430",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "345",
            "name": "MANÍ",
            "id_department": "11",
            "state": "1",
            "divipola": "85139",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "346",
            "name": "NUNCHÍA",
            "id_department": "11",
            "state": "1",
            "divipola": "85225",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "347",
            "name": "MONTERREY",
            "id_department": "11",
            "state": "1",
            "divipola": "85162",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "348",
            "name": "TÁMARA",
            "id_department": "11",
            "state": "1",
            "divipola": "85400",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "349",
            "name": "PAZ DE ARIPORO",
            "id_department": "11",
            "state": "1",
            "divipola": "85250",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "350",
            "name": "SÁCAMA",
            "id_department": "11",
            "state": "1",
            "divipola": "85315",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "351",
            "name": "OROCUÉ",
            "id_department": "11",
            "state": "1",
            "divipola": "85230",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "352",
            "name": "SAN SEBASTIÁN",
            "id_department": "12",
            "state": "1",
            "divipola": "19693",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "353",
            "name": "SOTARÁ",
            "id_department": "12",
            "state": "1",
            "divipola": "19760",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "354",
            "name": "PATÍA",
            "id_department": "12",
            "state": "1",
            "divipola": "19532",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "355",
            "name": "POPAYÁN",
            "id_department": "12",
            "state": "1",
            "divipola": "19001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "356",
            "name": "BUENOS AIRES",
            "id_department": "12",
            "state": "1",
            "divipola": "19110",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "357",
            "name": "PUERTO TEJADA",
            "id_department": "12",
            "state": "1",
            "divipola": "19573",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "358",
            "name": "CAJIBÍO",
            "id_department": "12",
            "state": "1",
            "divipola": "19130",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "359",
            "name": "TOTORÓ",
            "id_department": "12",
            "state": "1",
            "divipola": "19824",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "360",
            "name": "INZÁ",
            "id_department": "12",
            "state": "1",
            "divipola": "19355",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "361",
            "name": "SOTARA",
            "id_department": "12",
            "state": "1",
            "divipola": "19760",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "362",
            "name": "MIRANDA",
            "id_department": "12",
            "state": "1",
            "divipola": "19455",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "363",
            "name": "PURACÉ",
            "id_department": "12",
            "state": "1",
            "divipola": "19585",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "364",
            "name": "TORIBIO",
            "id_department": "12",
            "state": "1",
            "divipola": "19821",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "365",
            "name": "ROSAS",
            "id_department": "12",
            "state": "1",
            "divipola": "19622",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "366",
            "name": "FLORENCIA",
            "id_department": "12",
            "state": "1",
            "divipola": "19290",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "367",
            "name": "PADILLA",
            "id_department": "12",
            "state": "1",
            "divipola": "19513",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "368",
            "name": "SANTANDER DE QUILICHAO",
            "id_department": "12",
            "state": "1",
            "divipola": "19698",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "369",
            "name": "TIMBIQUÍ",
            "id_department": "12",
            "state": "1",
            "divipola": "19809",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "370",
            "name": "CORINTO",
            "id_department": "12",
            "state": "1",
            "divipola": "19212",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "371",
            "name": "LÓPEZ",
            "id_department": "12",
            "state": "1",
            "divipola": "19418",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "372",
            "name": "TIMBÍO",
            "id_department": "12",
            "state": "1",
            "divipola": "19807",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "373",
            "name": "GUAPI",
            "id_department": "12",
            "state": "1",
            "divipola": "19318",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "374",
            "name": "VILLA RICA",
            "id_department": "12",
            "state": "1",
            "divipola": "19845",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "375",
            "name": "PAEZ",
            "id_department": "12",
            "state": "1",
            "divipola": "19517",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "376",
            "name": "MERCADERES",
            "id_department": "12",
            "state": "1",
            "divipola": "19450",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "377",
            "name": "CALDONO",
            "id_department": "12",
            "state": "1",
            "divipola": "19137",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "378",
            "name": "SANTA ROSA",
            "id_department": "12",
            "state": "1",
            "divipola": "19701",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "379",
            "name": "PIAMONTE",
            "id_department": "12",
            "state": "1",
            "divipola": "19533",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "380",
            "name": "LA SIERRA",
            "id_department": "12",
            "state": "1",
            "divipola": "19392",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "381",
            "name": "PIENDAMÓ",
            "id_department": "12",
            "state": "1",
            "divipola": "19548",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "382",
            "name": "MORALES",
            "id_department": "12",
            "state": "1",
            "divipola": "19473",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "383",
            "name": "SILVIA",
            "id_department": "12",
            "state": "1",
            "divipola": "19743",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "384",
            "name": "GUACHENÉ",
            "id_department": "12",
            "state": "1",
            "divipola": "19300",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "385",
            "name": "ALMAGUER",
            "id_department": "12",
            "state": "1",
            "divipola": "19022",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "386",
            "name": "CALOTO",
            "id_department": "12",
            "state": "1",
            "divipola": "19142",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "387",
            "name": "JAMBALÓ",
            "id_department": "12",
            "state": "1",
            "divipola": "19364",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "388",
            "name": "EL PASO",
            "id_department": "13",
            "state": "1",
            "divipola": "20250",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "389",
            "name": "CHIRIGUANÁ",
            "id_department": "13",
            "state": "1",
            "divipola": "20178",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "390",
            "name": "ASTREA",
            "id_department": "13",
            "state": "1",
            "divipola": "20032",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "391",
            "name": "EL COPEY",
            "id_department": "13",
            "state": "1",
            "divipola": "20238",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "392",
            "name": "CURUMANÍ",
            "id_department": "13",
            "state": "1",
            "divipola": "20228",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "393",
            "name": "LA GLORIA",
            "id_department": "13",
            "state": "1",
            "divipola": "20383",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "394",
            "name": "PAILITAS",
            "id_department": "13",
            "state": "1",
            "divipola": "20517",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "395",
            "name": "TAMALAMEQUE",
            "id_department": "13",
            "state": "1",
            "divipola": "20787",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "396",
            "name": "VALLEDUPAR",
            "id_department": "13",
            "state": "1",
            "divipola": "20001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "397",
            "name": "AGUACHICA",
            "id_department": "13",
            "state": "1",
            "divipola": "20011",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "398",
            "name": "CHIMICHAGUA",
            "id_department": "13",
            "state": "1",
            "divipola": "20175",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "399",
            "name": "PUEBLO BELLO",
            "id_department": "13",
            "state": "1",
            "divipola": "20570",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "400",
            "name": "GAMARRA",
            "id_department": "13",
            "state": "1",
            "divipola": "20295",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "401",
            "name": "PELAYA",
            "id_department": "13",
            "state": "1",
            "divipola": "20550",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "402",
            "name": "AGUSTÍN CODAZZI",
            "id_department": "13",
            "state": "1",
            "divipola": "20013",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "403",
            "name": "BECERRIL",
            "id_department": "13",
            "state": "1",
            "divipola": "20045",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "404",
            "name": "GONZÁLEZ",
            "id_department": "13",
            "state": "1",
            "divipola": "20310",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "405",
            "name": "SAN ALBERTO",
            "id_department": "13",
            "state": "1",
            "divipola": "20710",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "406",
            "name": "LA JAGUA DE IBIRICO",
            "id_department": "13",
            "state": "1",
            "divipola": "20400",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "407",
            "name": "RÍO DE ORO",
            "id_department": "13",
            "state": "1",
            "divipola": "20614",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "408",
            "name": "SAN DIEGO",
            "id_department": "13",
            "state": "1",
            "divipola": "20750",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "409",
            "name": "BOSCONIA",
            "id_department": "13",
            "state": "1",
            "divipola": "20060",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "410",
            "name": "BAJO BAUDÓ",
            "id_department": "14",
            "state": "1",
            "divipola": "27077",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "411",
            "name": "ATRATO",
            "id_department": "14",
            "state": "1",
            "divipola": "27050",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "412",
            "name": "CONDOTO",
            "id_department": "14",
            "state": "1",
            "divipola": "27205",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "413",
            "name": "ACANDÍ",
            "id_department": "14",
            "state": "1",
            "divipola": "27006",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "414",
            "name": "UNGUÍA",
            "id_department": "14",
            "state": "1",
            "divipola": "27800",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "415",
            "name": "SIPÍ",
            "id_department": "14",
            "state": "1",
            "divipola": "27745",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "416",
            "name": "SAN JOSÉ DEL PALMAR",
            "id_department": "14",
            "state": "1",
            "divipola": "27660",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "417",
            "name": "NÓVITA",
            "id_department": "14",
            "state": "1",
            "divipola": "27491",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "418",
            "name": "CÉRTEGUI",
            "id_department": "14",
            "state": "1",
            "divipola": "27160",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "419",
            "name": "RIOSUCIO",
            "id_department": "14",
            "state": "1",
            "divipola": "27615",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "420",
            "name": "NUQUÍ",
            "id_department": "14",
            "state": "1",
            "divipola": "27495",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "421",
            "name": "QUIBDÓ",
            "id_department": "14",
            "state": "1",
            "divipola": "27001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "422",
            "name": "ISTMINA",
            "id_department": "14",
            "state": "1",
            "divipola": "27361",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "423",
            "name": "JURADÓ",
            "id_department": "14",
            "state": "1",
            "divipola": "27372",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "424",
            "name": "LLORÓ",
            "id_department": "14",
            "state": "1",
            "divipola": "27413",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "425",
            "name": "EL LITORAL DEL SAN JUAN",
            "id_department": "14",
            "state": "1",
            "divipola": "27250",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "426",
            "name": "MEDIO ATRATO",
            "id_department": "14",
            "state": "1",
            "divipola": "27425",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "427",
            "name": "BAHÍA SOLANO",
            "id_department": "14",
            "state": "1",
            "divipola": "27075",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "428",
            "name": "CARMEN DEL DARIEN",
            "id_department": "14",
            "state": "1",
            "divipola": "27150",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "429",
            "name": "ALTO BAUDÓ",
            "id_department": "14",
            "state": "1",
            "divipola": "27025",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "430",
            "name": "BELÉN DE BAJIRÁ",
            "id_department": "14",
            "state": "1",
            "divipola": "27086",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "431",
            "name": "MEDIO BAUDÓ",
            "id_department": "14",
            "state": "1",
            "divipola": "27430",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "432",
            "name": "EL CARMEN DE ATRATO",
            "id_department": "14",
            "state": "1",
            "divipola": "27245",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "433",
            "name": "RÍO IRÓ",
            "id_department": "14",
            "state": "1",
            "divipola": "27580",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "434",
            "name": "TADÓ",
            "id_department": "14",
            "state": "1",
            "divipola": "27787",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "435",
            "name": "BOJAYA",
            "id_department": "14",
            "state": "1",
            "divipola": "27099",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "436",
            "name": "BAGADÓ",
            "id_department": "14",
            "state": "1",
            "divipola": "27073",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "437",
            "name": "MEDIO SAN JUAN",
            "id_department": "14",
            "state": "1",
            "divipola": "27450",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "438",
            "name": "RÍO QUITO",
            "id_department": "14",
            "state": "1",
            "divipola": "27600",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "439",
            "name": "EL CANTÓN DEL SAN PABLO",
            "id_department": "14",
            "state": "1",
            "divipola": "27135",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "440",
            "name": "UNIÓN PANAMERICANA",
            "id_department": "14",
            "state": "1",
            "divipola": "27810",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "441",
            "name": "TABIO",
            "id_department": "15",
            "state": "1",
            "divipola": "25785",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "442",
            "name": "MANTA",
            "id_department": "15",
            "state": "1",
            "divipola": "25436",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "443",
            "name": "PARATEBUENO",
            "id_department": "15",
            "state": "1",
            "divipola": "25530",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "444",
            "name": "CHOCONTÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25183",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "445",
            "name": "ZIPAQUIRÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25899",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "446",
            "name": "FACATATIVÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25269",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "447",
            "name": "TOCAIMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25815",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "448",
            "name": "GUTIÉRREZ",
            "id_department": "15",
            "state": "1",
            "divipola": "25339",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "449",
            "name": "COGUA",
            "id_department": "15",
            "state": "1",
            "divipola": "25200",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "450",
            "name": "VILLAGÓMEZ",
            "id_department": "15",
            "state": "1",
            "divipola": "25871",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "451",
            "name": "NILO",
            "id_department": "15",
            "state": "1",
            "divipola": "25488",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "452",
            "name": "EL COLEGIO",
            "id_department": "15",
            "state": "1",
            "divipola": "25245",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "453",
            "name": "TIBACUY",
            "id_department": "15",
            "state": "1",
            "divipola": "25805",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "454",
            "name": "PUERTO SALGAR",
            "id_department": "15",
            "state": "1",
            "divipola": "25572",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "455",
            "name": "QUIPILE",
            "id_department": "15",
            "state": "1",
            "divipola": "25596",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "456",
            "name": "JERUSALÉN",
            "id_department": "15",
            "state": "1",
            "divipola": "25368",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "457",
            "name": "SESQUILÉ",
            "id_department": "15",
            "state": "1",
            "divipola": "25736",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "458",
            "name": "SILVANIA",
            "id_department": "15",
            "state": "1",
            "divipola": "25743",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "459",
            "name": "APULO",
            "id_department": "15",
            "state": "1",
            "divipola": "25599",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "460",
            "name": "PAIME",
            "id_department": "15",
            "state": "1",
            "divipola": "25518",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "461",
            "name": "ANOLAIMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25040",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "462",
            "name": "GUACHETÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25317",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "463",
            "name": "CAJICÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25126",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "464",
            "name": "SUTATAUSA",
            "id_department": "15",
            "state": "1",
            "divipola": "25781",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "465",
            "name": "BOJACÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25099",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "466",
            "name": "FOMEQUE",
            "id_department": "15",
            "state": "1",
            "divipola": "25279",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "467",
            "name": "QUEBRADANEGRA",
            "id_department": "15",
            "state": "1",
            "divipola": "25592",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "468",
            "name": "CHIPAQUE",
            "id_department": "15",
            "state": "1",
            "divipola": "25178",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "469",
            "name": "ZIPACÓN",
            "id_department": "15",
            "state": "1",
            "divipola": "25898",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "470",
            "name": "LA MESA",
            "id_department": "15",
            "state": "1",
            "divipola": "25386",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "471",
            "name": "VILLAPINZÓN",
            "id_department": "15",
            "state": "1",
            "divipola": "25873",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "472",
            "name": "UNE",
            "id_department": "15",
            "state": "1",
            "divipola": "25845",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "473",
            "name": "SIMIJACA",
            "id_department": "15",
            "state": "1",
            "divipola": "25745",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "474",
            "name": "FÚQUENE",
            "id_department": "15",
            "state": "1",
            "divipola": "25288",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "475",
            "name": "LA VEGA",
            "id_department": "15",
            "state": "1",
            "divipola": "25402",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "476",
            "name": "SOPÓ",
            "id_department": "15",
            "state": "1",
            "divipola": "25758",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "477",
            "name": "QUETAME",
            "id_department": "15",
            "state": "1",
            "divipola": "25594",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "478",
            "name": "ÚTICA",
            "id_department": "15",
            "state": "1",
            "divipola": "25851",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "479",
            "name": "MEDINA",
            "id_department": "15",
            "state": "1",
            "divipola": "25438",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "480",
            "name": "GIRARDOT",
            "id_department": "15",
            "state": "1",
            "divipola": "25307",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "481",
            "name": "SOACHA",
            "id_department": "15",
            "state": "1",
            "divipola": "25754",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "482",
            "name": "LA CALERA",
            "id_department": "15",
            "state": "1",
            "divipola": "25377",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "483",
            "name": "SUPATÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25777",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "484",
            "name": "VILLETA",
            "id_department": "15",
            "state": "1",
            "divipola": "25875",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "485",
            "name": "GUAYABAL DE SIQUIMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25328",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "486",
            "name": "ARBELÁEZ",
            "id_department": "15",
            "state": "1",
            "divipola": "25053",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "487",
            "name": "CACHIPAY",
            "id_department": "15",
            "state": "1",
            "divipola": "25123",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "488",
            "name": "FUNZA",
            "id_department": "15",
            "state": "1",
            "divipola": "25286",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "489",
            "name": "BELTRÁN",
            "id_department": "15",
            "state": "1",
            "divipola": "25086",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "490",
            "name": "PANDI",
            "id_department": "15",
            "state": "1",
            "divipola": "25524",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "491",
            "name": "PULÍ",
            "id_department": "15",
            "state": "1",
            "divipola": "25580",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "492",
            "name": "PASCA",
            "id_department": "15",
            "state": "1",
            "divipola": "25535",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "493",
            "name": "JUNÍN",
            "id_department": "15",
            "state": "1",
            "divipola": "25372",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "494",
            "name": "UBALÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25839",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "495",
            "name": "LENGUAZAQUE",
            "id_department": "15",
            "state": "1",
            "divipola": "25407",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "496",
            "name": "COTA",
            "id_department": "15",
            "state": "1",
            "divipola": "25214",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "497",
            "name": "CHAGUANÍ",
            "id_department": "15",
            "state": "1",
            "divipola": "25168",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "498",
            "name": "UBAQUE",
            "id_department": "15",
            "state": "1",
            "divipola": "25841",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "499",
            "name": "NIMAIMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25489",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "500",
            "name": "TAUSA",
            "id_department": "15",
            "state": "1",
            "divipola": "25793",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "501",
            "name": "LA PALMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25394",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "502",
            "name": "SAN JUAN DE RÍO SECO",
            "id_department": "15",
            "state": "1",
            "divipola": "25662",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "503",
            "name": "GUADUAS",
            "id_department": "15",
            "state": "1",
            "divipola": "25320",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "504",
            "name": "GACHETÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25297",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "505",
            "name": "TENA",
            "id_department": "15",
            "state": "1",
            "divipola": "25797",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "506",
            "name": "GACHANCIPÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25295",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "507",
            "name": "EL ROSAL",
            "id_department": "15",
            "state": "1",
            "divipola": "25260",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "508",
            "name": "LA PEÑA",
            "id_department": "15",
            "state": "1",
            "divipola": "25398",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "509",
            "name": "VENECIA",
            "id_department": "15",
            "state": "1",
            "divipola": "25506",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "510",
            "name": "CARMEN DE CARUPA",
            "id_department": "15",
            "state": "1",
            "divipola": "25154",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "511",
            "name": "TENJO",
            "id_department": "15",
            "state": "1",
            "divipola": "25799",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "512",
            "name": "GUATAQUÍ",
            "id_department": "15",
            "state": "1",
            "divipola": "25324",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "513",
            "name": "SUSA",
            "id_department": "15",
            "state": "1",
            "divipola": "25779",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "514",
            "name": "SASAIMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25718",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "515",
            "name": "TIBIRITA",
            "id_department": "15",
            "state": "1",
            "divipola": "25807",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "516",
            "name": "GUATAVITA",
            "id_department": "15",
            "state": "1",
            "divipola": "25326",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "517",
            "name": "ANAPOIMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25035",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "518",
            "name": "MADRID",
            "id_department": "15",
            "state": "1",
            "divipola": "25430",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "519",
            "name": "CAPARRAPÍ",
            "id_department": "15",
            "state": "1",
            "divipola": "25148",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "520",
            "name": "AGUA DE DIOS",
            "id_department": "15",
            "state": "1",
            "divipola": "25001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "521",
            "name": "MACHETA",
            "id_department": "15",
            "state": "1",
            "divipola": "25426",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "522",
            "name": "CAQUEZA",
            "id_department": "15",
            "state": "1",
            "divipola": "25151",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "523",
            "name": "VILLA DE SAN DIEGO DE UBATE",
            "id_department": "15",
            "state": "1",
            "divipola": "25843",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "524",
            "name": "SAN ANTONIO DEL TEQUENDAMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25645",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "525",
            "name": "NOCAIMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25491",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "526",
            "name": "NEMOCÓN",
            "id_department": "15",
            "state": "1",
            "divipola": "25486",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "527",
            "name": "BITUIMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25095",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "528",
            "name": "VIANÍ",
            "id_department": "15",
            "state": "1",
            "divipola": "25867",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "529",
            "name": "GUAYABETAL",
            "id_department": "15",
            "state": "1",
            "divipola": "25335",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "530",
            "name": "GACHALA",
            "id_department": "15",
            "state": "1",
            "divipola": "25293",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "531",
            "name": "FUSAGASUGÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25290",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "532",
            "name": "GAMA",
            "id_department": "15",
            "state": "1",
            "divipola": "25299",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "533",
            "name": "PACHO",
            "id_department": "15",
            "state": "1",
            "divipola": "25513",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "534",
            "name": "CHÍA",
            "id_department": "15",
            "state": "1",
            "divipola": "25175",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "535",
            "name": "SUESCA",
            "id_department": "15",
            "state": "1",
            "divipola": "25772",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "536",
            "name": "SUBACHOQUE",
            "id_department": "15",
            "state": "1",
            "divipola": "25769",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "537",
            "name": "CUCUNUBÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25224",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "538",
            "name": "YACOPÍ",
            "id_department": "15",
            "state": "1",
            "divipola": "25885",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "539",
            "name": "VIOTÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25878",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "540",
            "name": "VERGARA",
            "id_department": "15",
            "state": "1",
            "divipola": "25862",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "541",
            "name": "TOCANCIPÁ",
            "id_department": "15",
            "state": "1",
            "divipola": "25817",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "542",
            "name": "TOPAIPÍ",
            "id_department": "15",
            "state": "1",
            "divipola": "25823",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "543",
            "name": "GUASCA",
            "id_department": "15",
            "state": "1",
            "divipola": "25322",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "544",
            "name": "CHOACHÍ",
            "id_department": "15",
            "state": "1",
            "divipola": "25181",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "545",
            "name": "FOSCA",
            "id_department": "15",
            "state": "1",
            "divipola": "25281",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "546",
            "name": "SIBATÉ",
            "id_department": "15",
            "state": "1",
            "divipola": "25740",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "547",
            "name": "MOÑITOS",
            "id_department": "16",
            "state": "1",
            "divipola": "23500",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "548",
            "name": "AYAPEL",
            "id_department": "16",
            "state": "1",
            "divipola": "23068",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "549",
            "name": "LOS CÓRDOBAS",
            "id_department": "16",
            "state": "1",
            "divipola": "23419",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "550",
            "name": "SAN ANDRÉS SOTAVENTO",
            "id_department": "16",
            "state": "1",
            "divipola": "23670",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "551",
            "name": "SAN ANTERO",
            "id_department": "16",
            "state": "1",
            "divipola": "23672",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "552",
            "name": "CIÉNAGA DE ORO",
            "id_department": "16",
            "state": "1",
            "divipola": "23189",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "553",
            "name": "VALENCIA",
            "id_department": "16",
            "state": "1",
            "divipola": "23855",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "554",
            "name": "LORICA",
            "id_department": "16",
            "state": "1",
            "divipola": "23417",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "555",
            "name": "LA APARTADA",
            "id_department": "16",
            "state": "1",
            "divipola": "23350",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "556",
            "name": "CANALETE",
            "id_department": "16",
            "state": "1",
            "divipola": "23090",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "557",
            "name": "SAN PELAYO",
            "id_department": "16",
            "state": "1",
            "divipola": "23686",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "558",
            "name": "SAN BERNARDO DEL VIENTO",
            "id_department": "16",
            "state": "1",
            "divipola": "23675",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "559",
            "name": "TIERRALTA",
            "id_department": "16",
            "state": "1",
            "divipola": "23807",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "560",
            "name": "MONTERÍA",
            "id_department": "16",
            "state": "1",
            "divipola": "23001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "561",
            "name": "CERETÉ",
            "id_department": "16",
            "state": "1",
            "divipola": "23162",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "562",
            "name": "MOMIL",
            "id_department": "16",
            "state": "1",
            "divipola": "23464",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "563",
            "name": "PURÍSIMA",
            "id_department": "16",
            "state": "1",
            "divipola": "23586",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "564",
            "name": "PUERTO ESCONDIDO",
            "id_department": "16",
            "state": "1",
            "divipola": "23574",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "565",
            "name": "SAHAGÚN",
            "id_department": "16",
            "state": "1",
            "divipola": "23660",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "566",
            "name": "SAN CARLOS",
            "id_department": "16",
            "state": "1",
            "divipola": "23678",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "567",
            "name": "CHINÚ",
            "id_department": "16",
            "state": "1",
            "divipola": "23182",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "568",
            "name": "COTORRA",
            "id_department": "16",
            "state": "1",
            "divipola": "23300",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "569",
            "name": "MONTELÍBANO",
            "id_department": "16",
            "state": "1",
            "divipola": "23466",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "570",
            "name": "CHIMÁ",
            "id_department": "16",
            "state": "1",
            "divipola": "23168",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "571",
            "name": "PUERTO LIBERTADOR",
            "id_department": "16",
            "state": "1",
            "divipola": "23580",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "572",
            "name": "PUEBLO NUEVO",
            "id_department": "16",
            "state": "1",
            "divipola": "23570",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "573",
            "name": "PLANETA RICA",
            "id_department": "16",
            "state": "1",
            "divipola": "23555",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "574",
            "name": "BARRANCO MINAS",
            "id_department": "17",
            "state": "1",
            "divipola": "94343",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "575",
            "name": "SAN FELIPE",
            "id_department": "17",
            "state": "1",
            "divipola": "94883",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "576",
            "name": "MORICHAL",
            "id_department": "17",
            "state": "1",
            "divipola": "94888",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "577",
            "name": "PANA PANA",
            "id_department": "17",
            "state": "1",
            "divipola": "94887",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "578",
            "name": "INÍRIDA",
            "id_department": "17",
            "state": "1",
            "divipola": "94001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "579",
            "name": "LA GUADALUPE",
            "id_department": "17",
            "state": "1",
            "divipola": "94885",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "580",
            "name": "MAPIRIPANA",
            "id_department": "17",
            "state": "1",
            "divipola": "94663",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "581",
            "name": "PUERTO COLOMBIA",
            "id_department": "17",
            "state": "1",
            "divipola": "94884",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "582",
            "name": "CACAHUAL",
            "id_department": "17",
            "state": "1",
            "divipola": "94886",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "583",
            "name": "SAN JOSÉ DEL GUAVIARE",
            "id_department": "18",
            "state": "1",
            "divipola": "95001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "584",
            "name": "CALAMAR",
            "id_department": "18",
            "state": "1",
            "divipola": "95015",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "585",
            "name": "MIRAFLORES",
            "id_department": "18",
            "state": "1",
            "divipola": "95200",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "586",
            "name": "EL RETORNO",
            "id_department": "18",
            "state": "1",
            "divipola": "95025",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "587",
            "name": "AIPE",
            "id_department": "19",
            "state": "1",
            "divipola": "41016",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "588",
            "name": "COLOMBIA",
            "id_department": "19",
            "state": "1",
            "divipola": "41206",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "589",
            "name": "NÁTAGA",
            "id_department": "19",
            "state": "1",
            "divipola": "41483",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "590",
            "name": "TELLO",
            "id_department": "19",
            "state": "1",
            "divipola": "41799",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "591",
            "name": "CAMPOALEGRE",
            "id_department": "19",
            "state": "1",
            "divipola": "41132",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "592",
            "name": "LA PLATA",
            "id_department": "19",
            "state": "1",
            "divipola": "41396",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "593",
            "name": "GARZÓN",
            "id_department": "19",
            "state": "1",
            "divipola": "41298",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "594",
            "name": "TARQUI",
            "id_department": "19",
            "state": "1",
            "divipola": "41791",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "595",
            "name": "SAN AGUSTÍN",
            "id_department": "19",
            "state": "1",
            "divipola": "41668",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "596",
            "name": "PALERMO",
            "id_department": "19",
            "state": "1",
            "divipola": "41524",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "597",
            "name": "TIMANÁ",
            "id_department": "19",
            "state": "1",
            "divipola": "41807",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "598",
            "name": "SANTA MARÍA",
            "id_department": "19",
            "state": "1",
            "divipola": "41676",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "599",
            "name": "TESALIA",
            "id_department": "19",
            "state": "1",
            "divipola": "41797",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "600",
            "name": "VILLAVIEJA",
            "id_department": "19",
            "state": "1",
            "divipola": "41872",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "601",
            "name": "PAICOL",
            "id_department": "19",
            "state": "1",
            "divipola": "41518",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "602",
            "name": "IQUIRA",
            "id_department": "19",
            "state": "1",
            "divipola": "41357",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "603",
            "name": "SALADOBLANCO",
            "id_department": "19",
            "state": "1",
            "divipola": "41660",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "604",
            "name": "ISNOS",
            "id_department": "19",
            "state": "1",
            "divipola": "41359",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "605",
            "name": "HOBO",
            "id_department": "19",
            "state": "1",
            "divipola": "41349",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "606",
            "name": "YAGUARÁ",
            "id_department": "19",
            "state": "1",
            "divipola": "41885",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "607",
            "name": "ACEVEDO",
            "id_department": "19",
            "state": "1",
            "divipola": "41006",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "608",
            "name": "RIVERA",
            "id_department": "19",
            "state": "1",
            "divipola": "41615",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "609",
            "name": "TERUEL",
            "id_department": "19",
            "state": "1",
            "divipola": "41801",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "610",
            "name": "ALTAMIRA",
            "id_department": "19",
            "state": "1",
            "divipola": "41026",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "611",
            "name": "PALESTINA",
            "id_department": "19",
            "state": "1",
            "divipola": "41530",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "612",
            "name": "OPORAPA",
            "id_department": "19",
            "state": "1",
            "divipola": "41503",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "613",
            "name": "NEIVA",
            "id_department": "19",
            "state": "1",
            "divipola": "41001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "614",
            "name": "GIGANTE",
            "id_department": "19",
            "state": "1",
            "divipola": "41306",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "615",
            "name": "PITALITO",
            "id_department": "19",
            "state": "1",
            "divipola": "41551",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "616",
            "name": "LA ARGENTINA",
            "id_department": "19",
            "state": "1",
            "divipola": "41378",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "617",
            "name": "ELÍAS",
            "id_department": "19",
            "state": "1",
            "divipola": "41244",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "618",
            "name": "AGRADO",
            "id_department": "19",
            "state": "1",
            "divipola": "41013",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "619",
            "name": "BARAYA",
            "id_department": "19",
            "state": "1",
            "divipola": "41078",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "620",
            "name": "SUAZA",
            "id_department": "19",
            "state": "1",
            "divipola": "41770",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "621",
            "name": "ALGECIRAS",
            "id_department": "19",
            "state": "1",
            "divipola": "41020",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "622",
            "name": "PITAL",
            "id_department": "19",
            "state": "1",
            "divipola": "41548",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "623",
            "name": "DISTRACCIÓN",
            "id_department": "20",
            "state": "1",
            "divipola": "44098",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "624",
            "name": "BARRANCAS",
            "id_department": "20",
            "state": "1",
            "divipola": "44078",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "625",
            "name": "LA JAGUA DEL PILAR",
            "id_department": "20",
            "state": "1",
            "divipola": "44420",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "626",
            "name": "EL MOLINO",
            "id_department": "20",
            "state": "1",
            "divipola": "44110",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "627",
            "name": "URIBIA",
            "id_department": "20",
            "state": "1",
            "divipola": "44847",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "628",
            "name": "MANAURE",
            "id_department": "20",
            "state": "1",
            "divipola": "44560",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "629",
            "name": "HATO NUEVO",
            "id_department": "20",
            "state": "1",
            "divipola": "44378",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "630",
            "name": "SAN JUAN DEL CESAR",
            "id_department": "20",
            "state": "1",
            "divipola": "44650",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "631",
            "name": "DIBULLA",
            "id_department": "20",
            "state": "1",
            "divipola": "44090",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "632",
            "name": "RIOHACHA",
            "id_department": "20",
            "state": "1",
            "divipola": "44001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "633",
            "name": "FONSECA",
            "id_department": "20",
            "state": "1",
            "divipola": "44279",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "634",
            "name": "URUMITA",
            "id_department": "20",
            "state": "1",
            "divipola": "44855",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "635",
            "name": "MAICAO",
            "id_department": "20",
            "state": "1",
            "divipola": "44430",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "636",
            "name": "EL PIÑON",
            "id_department": "21",
            "state": "1",
            "divipola": "47258",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "637",
            "name": "CIÉNAGA",
            "id_department": "21",
            "state": "1",
            "divipola": "47189",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "638",
            "name": "SITIONUEVO",
            "id_department": "21",
            "state": "1",
            "divipola": "47745",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "639",
            "name": "SAN ZENÓN",
            "id_department": "21",
            "state": "1",
            "divipola": "47703",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "640",
            "name": "ZAPAYÁN",
            "id_department": "21",
            "state": "1",
            "divipola": "47960",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "641",
            "name": "ALGARROBO",
            "id_department": "21",
            "state": "1",
            "divipola": "47030",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "642",
            "name": "SANTA ANA",
            "id_department": "21",
            "state": "1",
            "divipola": "47707",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "643",
            "name": "EL RETÉN",
            "id_department": "21",
            "state": "1",
            "divipola": "47268",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "644",
            "name": "PLATO",
            "id_department": "21",
            "state": "1",
            "divipola": "47555",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "645",
            "name": "CHIBOLO",
            "id_department": "21",
            "state": "1",
            "divipola": "47170",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "646",
            "name": "NUEVA GRANADA",
            "id_department": "21",
            "state": "1",
            "divipola": "47460",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "647",
            "name": "FUNDACIÓN",
            "id_department": "21",
            "state": "1",
            "divipola": "47288",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "648",
            "name": "PIJIÑO DEL CARMEN",
            "id_department": "21",
            "state": "1",
            "divipola": "47545",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "649",
            "name": "ARACATACA",
            "id_department": "21",
            "state": "1",
            "divipola": "47053",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "650",
            "name": "PEDRAZA",
            "id_department": "21",
            "state": "1",
            "divipola": "47541",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "651",
            "name": "CERRO SAN ANTONIO",
            "id_department": "21",
            "state": "1",
            "divipola": "47161",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "652",
            "name": "SANTA MARTA",
            "id_department": "21",
            "state": "1",
            "divipola": "47001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "653",
            "name": "SAN SEBASTIÁN DE BUENAVISTA",
            "id_department": "21",
            "state": "1",
            "divipola": "47692",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "654",
            "name": "SALAMINA",
            "id_department": "21",
            "state": "1",
            "divipola": "47675",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "655",
            "name": "PUEBLOVIEJO",
            "id_department": "21",
            "state": "1",
            "divipola": "47570",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "656",
            "name": "TENERIFE",
            "id_department": "21",
            "state": "1",
            "divipola": "47798",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "657",
            "name": "ZONA BANANERA",
            "id_department": "21",
            "state": "1",
            "divipola": "47980",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "658",
            "name": "ARIGUANÍ",
            "id_department": "21",
            "state": "1",
            "divipola": "47058",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "659",
            "name": "CONCORDIA",
            "id_department": "21",
            "state": "1",
            "divipola": "47205",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "660",
            "name": "SANTA BÁRBARA DE PINTO",
            "id_department": "21",
            "state": "1",
            "divipola": "47720",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "661",
            "name": "EL BANCO",
            "id_department": "21",
            "state": "1",
            "divipola": "47245",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "662",
            "name": "REMOLINO",
            "id_department": "21",
            "state": "1",
            "divipola": "47605",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "663",
            "name": "SABANAS DE SAN ANGEL",
            "id_department": "21",
            "state": "1",
            "divipola": "47660",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "664",
            "name": "PIVIJAY",
            "id_department": "21",
            "state": "1",
            "divipola": "47551",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "665",
            "name": "SAN JUANITO",
            "id_department": "22",
            "state": "1",
            "divipola": "50686",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "666",
            "name": "GUAMAL",
            "id_department": "22",
            "state": "1",
            "divipola": "50318",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "667",
            "name": "EL CALVARIO",
            "id_department": "22",
            "state": "1",
            "divipola": "50245",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "668",
            "name": "VILLAVICENCIO",
            "id_department": "22",
            "state": "1",
            "divipola": "50001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "669",
            "name": "SAN CARLOS DE GUAROA",
            "id_department": "22",
            "state": "1",
            "divipola": "50680",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "670",
            "name": "PUERTO LÓPEZ",
            "id_department": "22",
            "state": "1",
            "divipola": "50573",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "671",
            "name": "CUMARAL",
            "id_department": "22",
            "state": "1",
            "divipola": "50226",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "672",
            "name": "CASTILLA LA NUEVA",
            "id_department": "22",
            "state": "1",
            "divipola": "50150",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "673",
            "name": "CUBARRAL",
            "id_department": "22",
            "state": "1",
            "divipola": "50223",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "674",
            "name": "MESETAS",
            "id_department": "22",
            "state": "1",
            "divipola": "50330",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "675",
            "name": "ACACÍAS",
            "id_department": "22",
            "state": "1",
            "divipola": "50006",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "676",
            "name": "LA MACARENA",
            "id_department": "22",
            "state": "1",
            "divipola": "50350",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "677",
            "name": "FUENTE DE ORO",
            "id_department": "22",
            "state": "1",
            "divipola": "50287",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "678",
            "name": "SAN MARTÍN",
            "id_department": "22",
            "state": "1",
            "divipola": "50689",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "679",
            "name": "PUERTO CONCORDIA",
            "id_department": "22",
            "state": "1",
            "divipola": "50450",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "680",
            "name": "URIBE",
            "id_department": "22",
            "state": "1",
            "divipola": "50370",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "681",
            "name": "GRANADA",
            "id_department": "22",
            "state": "1",
            "divipola": "50313",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "682",
            "name": "MAPIRIPÁN",
            "id_department": "22",
            "state": "1",
            "divipola": "50325",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "683",
            "name": "LEJANÍAS",
            "id_department": "22",
            "state": "1",
            "divipola": "50400",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "684",
            "name": "VISTA HERMOSA",
            "id_department": "22",
            "state": "1",
            "divipola": "50711",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "685",
            "name": "SAN JUAN DE ARAMA",
            "id_department": "22",
            "state": "1",
            "divipola": "50683",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "686",
            "name": "BARRANCA DE UPÍA",
            "id_department": "22",
            "state": "1",
            "divipola": "50110",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "687",
            "name": "EL CASTILLO",
            "id_department": "22",
            "state": "1",
            "divipola": "50251",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "688",
            "name": "CABUYARO",
            "id_department": "22",
            "state": "1",
            "divipola": "50124",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "689",
            "name": "PUERTO RICO",
            "id_department": "22",
            "state": "1",
            "divipola": "50590",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "690",
            "name": "EL DORADO",
            "id_department": "22",
            "state": "1",
            "divipola": "50270",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "691",
            "name": "PUERTO LLERAS",
            "id_department": "22",
            "state": "1",
            "divipola": "50577",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "692",
            "name": "PUERTO GAITÁN",
            "id_department": "22",
            "state": "1",
            "divipola": "50568",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "693",
            "name": "LA TOLA",
            "id_department": "23",
            "state": "1",
            "divipola": "52390",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "694",
            "name": "GUAITARILLA",
            "id_department": "23",
            "state": "1",
            "divipola": "52320",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "695",
            "name": "TAMINANGO",
            "id_department": "23",
            "state": "1",
            "divipola": "52786",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "696",
            "name": "ARBOLEDA",
            "id_department": "23",
            "state": "1",
            "divipola": "52051",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "697",
            "name": "OLAYA HERRERA",
            "id_department": "23",
            "state": "1",
            "divipola": "52490",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "698",
            "name": "LEIVA",
            "id_department": "23",
            "state": "1",
            "divipola": "52405",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "699",
            "name": "YACUANQUER",
            "id_department": "23",
            "state": "1",
            "divipola": "52885",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "700",
            "name": "IMUÉS",
            "id_department": "23",
            "state": "1",
            "divipola": "52354",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "701",
            "name": "EL TAMBO",
            "id_department": "23",
            "state": "1",
            "divipola": "52260",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "702",
            "name": "SAN PEDRO DE CARTAGO",
            "id_department": "23",
            "state": "1",
            "divipola": "52694",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "703",
            "name": "CONTADERO",
            "id_department": "23",
            "state": "1",
            "divipola": "52210",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "704",
            "name": "PASTO",
            "id_department": "23",
            "state": "1",
            "divipola": "52001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "705",
            "name": "PUERRES",
            "id_department": "23",
            "state": "1",
            "divipola": "52573",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "706",
            "name": "RICAURTE",
            "id_department": "23",
            "state": "1",
            "divipola": "52612",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "707",
            "name": "MALLAMA",
            "id_department": "23",
            "state": "1",
            "divipola": "52435",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "708",
            "name": "TÚQUERRES",
            "id_department": "23",
            "state": "1",
            "divipola": "52838",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "709",
            "name": "MOSQUERA",
            "id_department": "23",
            "state": "1",
            "divipola": "52473",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "710",
            "name": "ROBERTO PAYÁN",
            "id_department": "23",
            "state": "1",
            "divipola": "52621",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "711",
            "name": "ALDANA",
            "id_department": "23",
            "state": "1",
            "divipola": "52022",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "712",
            "name": "SAMANIEGO",
            "id_department": "23",
            "state": "1",
            "divipola": "52678",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "713",
            "name": "POLICARPA",
            "id_department": "23",
            "state": "1",
            "divipola": "52540",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "714",
            "name": "ANCUYÁ",
            "id_department": "23",
            "state": "1",
            "divipola": "52036",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "715",
            "name": "SANDONÁ",
            "id_department": "23",
            "state": "1",
            "divipola": "52683",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "716",
            "name": "ALBÁN",
            "id_department": "23",
            "state": "1",
            "divipola": "52019",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "717",
            "name": "SAPUYES",
            "id_department": "23",
            "state": "1",
            "divipola": "52720",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "718",
            "name": "SAN BERNARDO",
            "id_department": "23",
            "state": "1",
            "divipola": "52685",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "719",
            "name": "LA LLANADA",
            "id_department": "23",
            "state": "1",
            "divipola": "52385",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "720",
            "name": "EL PEÑOL",
            "id_department": "23",
            "state": "1",
            "divipola": "52254",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "721",
            "name": "MAGÜI",
            "id_department": "23",
            "state": "1",
            "divipola": "52427",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "722",
            "name": "BARBACOAS",
            "id_department": "23",
            "state": "1",
            "divipola": "52079",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "723",
            "name": "BELÉN",
            "id_department": "23",
            "state": "1",
            "divipola": "52083",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "724",
            "name": "SAN PABLO",
            "id_department": "23",
            "state": "1",
            "divipola": "52693",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "725",
            "name": "FUNES",
            "id_department": "23",
            "state": "1",
            "divipola": "52287",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "726",
            "name": "CUMBAL",
            "id_department": "23",
            "state": "1",
            "divipola": "52227",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "727",
            "name": "PROVIDENCIA",
            "id_department": "23",
            "state": "1",
            "divipola": "52565",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "728",
            "name": "NARIÑO",
            "id_department": "23",
            "state": "1",
            "divipola": "52480",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "729",
            "name": "LA FLORIDA",
            "id_department": "23",
            "state": "1",
            "divipola": "52381",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "730",
            "name": "GUACHUCAL",
            "id_department": "23",
            "state": "1",
            "divipola": "52317",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "731",
            "name": "EL CHARCO",
            "id_department": "23",
            "state": "1",
            "divipola": "52250",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "732",
            "name": "CHACHAGÜÍ",
            "id_department": "23",
            "state": "1",
            "divipola": "52240",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "733",
            "name": "FRANCISCO PIZARRO",
            "id_department": "23",
            "state": "1",
            "divipola": "52520",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "734",
            "name": "CONSACA",
            "id_department": "23",
            "state": "1",
            "divipola": "52207",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "735",
            "name": "SAN LORENZO",
            "id_department": "23",
            "state": "1",
            "divipola": "52687",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "736",
            "name": "SAN ANDRES DE TUMACO",
            "id_department": "23",
            "state": "1",
            "divipola": "52835",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "737",
            "name": "POTOSÍ",
            "id_department": "23",
            "state": "1",
            "divipola": "52560",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "738",
            "name": "SANTACRUZ",
            "id_department": "23",
            "state": "1",
            "divipola": "52699",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "739",
            "name": "EL ROSARIO",
            "id_department": "23",
            "state": "1",
            "divipola": "52256",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "740",
            "name": "TANGUA",
            "id_department": "23",
            "state": "1",
            "divipola": "52788",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "741",
            "name": "IPIALES",
            "id_department": "23",
            "state": "1",
            "divipola": "52356",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "742",
            "name": "CUMBITARA",
            "id_department": "23",
            "state": "1",
            "divipola": "52233",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "743",
            "name": "OSPINA",
            "id_department": "23",
            "state": "1",
            "divipola": "52506",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "744",
            "name": "GUALMATÁN",
            "id_department": "23",
            "state": "1",
            "divipola": "52323",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "745",
            "name": "CUASPUD",
            "id_department": "23",
            "state": "1",
            "divipola": "52224",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "746",
            "name": "ILES",
            "id_department": "23",
            "state": "1",
            "divipola": "52352",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "747",
            "name": "PUPIALES",
            "id_department": "23",
            "state": "1",
            "divipola": "52585",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "748",
            "name": "BUESACO",
            "id_department": "23",
            "state": "1",
            "divipola": "52110",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "749",
            "name": "LA CRUZ",
            "id_department": "23",
            "state": "1",
            "divipola": "52378",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "750",
            "name": "LINARES",
            "id_department": "23",
            "state": "1",
            "divipola": "52411",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "751",
            "name": "LOS ANDES",
            "id_department": "23",
            "state": "1",
            "divipola": "52418",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "752",
            "name": "EL TABLÓN DE GÓMEZ",
            "id_department": "23",
            "state": "1",
            "divipola": "52258",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "753",
            "name": "TEORAMA",
            "id_department": "24",
            "state": "1",
            "divipola": "54800",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "754",
            "name": "TOLEDO",
            "id_department": "24",
            "state": "1",
            "divipola": "54820",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "755",
            "name": "CÚCUTA",
            "id_department": "24",
            "state": "1",
            "divipola": "54001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "756",
            "name": "LA ESPERANZA",
            "id_department": "24",
            "state": "1",
            "divipola": "54385",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "757",
            "name": "OCAÑA",
            "id_department": "24",
            "state": "1",
            "divipola": "54498",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "758",
            "name": "CHINÁCOTA",
            "id_department": "24",
            "state": "1",
            "divipola": "54172",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "759",
            "name": "EL CARMEN",
            "id_department": "24",
            "state": "1",
            "divipola": "54245",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "760",
            "name": "LA PLAYA",
            "id_department": "24",
            "state": "1",
            "divipola": "54398",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "761",
            "name": "HACARÍ",
            "id_department": "24",
            "state": "1",
            "divipola": "54344",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "762",
            "name": "SARDINATA",
            "id_department": "24",
            "state": "1",
            "divipola": "54720",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "763",
            "name": "SILOS",
            "id_department": "24",
            "state": "1",
            "divipola": "54743",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "764",
            "name": "LOURDES",
            "id_department": "24",
            "state": "1",
            "divipola": "54418",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "765",
            "name": "ABREGO",
            "id_department": "24",
            "state": "1",
            "divipola": "54003",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "766",
            "name": "CHITAGÁ",
            "id_department": "24",
            "state": "1",
            "divipola": "54174",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "767",
            "name": "CACHIRÁ",
            "id_department": "24",
            "state": "1",
            "divipola": "54128",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "768",
            "name": "PAMPLONITA",
            "id_department": "24",
            "state": "1",
            "divipola": "54520",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "769",
            "name": "PUERTO SANTANDER",
            "id_department": "24",
            "state": "1",
            "divipola": "54553",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "770",
            "name": "ARBOLEDAS",
            "id_department": "24",
            "state": "1",
            "divipola": "54051",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "771",
            "name": "RAGONVALIA",
            "id_department": "24",
            "state": "1",
            "divipola": "54599",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "772",
            "name": "CUCUTILLA",
            "id_department": "24",
            "state": "1",
            "divipola": "54223",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "773",
            "name": "CÁCOTA",
            "id_department": "24",
            "state": "1",
            "divipola": "54125",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "774",
            "name": "SAN CAYETANO",
            "id_department": "24",
            "state": "1",
            "divipola": "54673",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "775",
            "name": "EL ZULIA",
            "id_department": "24",
            "state": "1",
            "divipola": "54261",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "776",
            "name": "VILLA DEL ROSARIO",
            "id_department": "24",
            "state": "1",
            "divipola": "54874",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "777",
            "name": "EL TARRA",
            "id_department": "24",
            "state": "1",
            "divipola": "54250",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "778",
            "name": "LABATECA",
            "id_department": "24",
            "state": "1",
            "divipola": "54377",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "779",
            "name": "PAMPLONA",
            "id_department": "24",
            "state": "1",
            "divipola": "54518",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "780",
            "name": "GRAMALOTE",
            "id_department": "24",
            "state": "1",
            "divipola": "54313",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "781",
            "name": "CONVENCIÓN",
            "id_department": "24",
            "state": "1",
            "divipola": "54206",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "782",
            "name": "BOCHALEMA",
            "id_department": "24",
            "state": "1",
            "divipola": "54099",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "783",
            "name": "BUCARASICA",
            "id_department": "24",
            "state": "1",
            "divipola": "54109",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "784",
            "name": "SAN CALIXTO",
            "id_department": "24",
            "state": "1",
            "divipola": "54670",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "785",
            "name": "LOS PATIOS",
            "id_department": "24",
            "state": "1",
            "divipola": "54405",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "786",
            "name": "TIBÚ",
            "id_department": "24",
            "state": "1",
            "divipola": "54810",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "787",
            "name": "DURANIA",
            "id_department": "24",
            "state": "1",
            "divipola": "54239",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "788",
            "name": "HERRÁN",
            "id_department": "24",
            "state": "1",
            "divipola": "54347",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "789",
            "name": "SALAZAR",
            "id_department": "24",
            "state": "1",
            "divipola": "54660",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "790",
            "name": "MUTISCUA",
            "id_department": "24",
            "state": "1",
            "divipola": "54480",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "791",
            "name": "VILLA CARO",
            "id_department": "24",
            "state": "1",
            "divipola": "54871",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "792",
            "name": "COLÓN",
            "id_department": "25",
            "state": "1",
            "divipola": "86219",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "793",
            "name": "VILLAGARZÓN",
            "id_department": "25",
            "state": "1",
            "divipola": "86885",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "794",
            "name": "PUERTO ASÍS",
            "id_department": "25",
            "state": "1",
            "divipola": "86568",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "795",
            "name": "LEGUÍZAMO",
            "id_department": "25",
            "state": "1",
            "divipola": "86573",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "796",
            "name": "SANTIAGO",
            "id_department": "25",
            "state": "1",
            "divipola": "86760",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "797",
            "name": "PUERTO GUZMÁN",
            "id_department": "25",
            "state": "1",
            "divipola": "86571",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "798",
            "name": "MOCOA",
            "id_department": "25",
            "state": "1",
            "divipola": "86001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "799",
            "name": "SAN FRANCISCO",
            "id_department": "25",
            "state": "1",
            "divipola": "86755",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "800",
            "name": "SIBUNDOY",
            "id_department": "25",
            "state": "1",
            "divipola": "86749",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "801",
            "name": "ORITO",
            "id_department": "25",
            "state": "1",
            "divipola": "86320",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "802",
            "name": "PUERTO CAICEDO",
            "id_department": "25",
            "state": "1",
            "divipola": "86569",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "803",
            "name": "VALLE DEL GUAMUEZ",
            "id_department": "25",
            "state": "1",
            "divipola": "86865",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "804",
            "name": "LA TEBAIDA",
            "id_department": "26",
            "state": "1",
            "divipola": "63401",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "805",
            "name": "SALENTO",
            "id_department": "26",
            "state": "1",
            "divipola": "63690",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "806",
            "name": "FILANDIA",
            "id_department": "26",
            "state": "1",
            "divipola": "63272",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "807",
            "name": "ARMENIA",
            "id_department": "26",
            "state": "1",
            "divipola": "63001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "808",
            "name": "CÓRDOBA",
            "id_department": "26",
            "state": "1",
            "divipola": "63212",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "809",
            "name": "PIJAO",
            "id_department": "26",
            "state": "1",
            "divipola": "63548",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "810",
            "name": "CIRCASIA",
            "id_department": "26",
            "state": "1",
            "divipola": "63190",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "811",
            "name": "MONTENEGRO",
            "id_department": "26",
            "state": "1",
            "divipola": "63470",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "812",
            "name": "GÉNOVA",
            "id_department": "26",
            "state": "1",
            "divipola": "63302",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "813",
            "name": "QUIMBAYA",
            "id_department": "26",
            "state": "1",
            "divipola": "63594",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "814",
            "name": "CALARCA",
            "id_department": "26",
            "state": "1",
            "divipola": "63130",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "815",
            "name": "SANTUARIO",
            "id_department": "27",
            "state": "1",
            "divipola": "66687",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "816",
            "name": "GUÁTICA",
            "id_department": "27",
            "state": "1",
            "divipola": "66318",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "817",
            "name": "BALBOA",
            "id_department": "27",
            "state": "1",
            "divipola": "66075",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "818",
            "name": "PUEBLO RICO",
            "id_department": "27",
            "state": "1",
            "divipola": "66572",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "819",
            "name": "MISTRATÓ",
            "id_department": "27",
            "state": "1",
            "divipola": "66456",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "820",
            "name": "DOSQUEBRADAS",
            "id_department": "27",
            "state": "1",
            "divipola": "66170",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "821",
            "name": "MARSELLA",
            "id_department": "27",
            "state": "1",
            "divipola": "66440",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "822",
            "name": "APÍA",
            "id_department": "27",
            "state": "1",
            "divipola": "66045",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "823",
            "name": "QUINCHÍA",
            "id_department": "27",
            "state": "1",
            "divipola": "66594",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "824",
            "name": "PEREIRA",
            "id_department": "27",
            "state": "1",
            "divipola": "66001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "825",
            "name": "SANTA ROSA DE CABAL",
            "id_department": "27",
            "state": "1",
            "divipola": "66682",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "826",
            "name": "LA VIRGINIA",
            "id_department": "27",
            "state": "1",
            "divipola": "66400",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "827",
            "name": "BELÉN DE UMBRÍA",
            "id_department": "27",
            "state": "1",
            "divipola": "66088",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "828",
            "name": "LA CELIA",
            "id_department": "27",
            "state": "1",
            "divipola": "66383",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "829",
            "name": "VALLE DE SAN JOSÉ",
            "id_department": "28",
            "state": "1",
            "divipola": "68855",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "830",
            "name": "LANDÁZURI",
            "id_department": "28",
            "state": "1",
            "divipola": "68385",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "831",
            "name": "CABRERA",
            "id_department": "28",
            "state": "1",
            "divipola": "68121",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "832",
            "name": "CHIPATÁ",
            "id_department": "28",
            "state": "1",
            "divipola": "68179",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "833",
            "name": "SABANA DE TORRES",
            "id_department": "28",
            "state": "1",
            "divipola": "68655",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "834",
            "name": "ZAPATOCA",
            "id_department": "28",
            "state": "1",
            "divipola": "68895",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "835",
            "name": "GÜEPSA",
            "id_department": "28",
            "state": "1",
            "divipola": "68327",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "836",
            "name": "ALBANIA",
            "id_department": "28",
            "state": "1",
            "divipola": "68020",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "837",
            "name": "PALMAS DEL SOCORRO",
            "id_department": "28",
            "state": "1",
            "divipola": "68524",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "838",
            "name": "CONTRATACIÓN",
            "id_department": "28",
            "state": "1",
            "divipola": "68211",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "839",
            "name": "CERRITO",
            "id_department": "28",
            "state": "1",
            "divipola": "68162",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "840",
            "name": "SAN JOSÉ DE MIRANDA",
            "id_department": "28",
            "state": "1",
            "divipola": "68684",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "841",
            "name": "MOLAGAVITA",
            "id_department": "28",
            "state": "1",
            "divipola": "68468",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "842",
            "name": "CHARTA",
            "id_department": "28",
            "state": "1",
            "divipola": "68169",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "843",
            "name": "BARICHARA",
            "id_department": "28",
            "state": "1",
            "divipola": "68079",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "844",
            "name": "BARRANCABERMEJA",
            "id_department": "28",
            "state": "1",
            "divipola": "68081",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "845",
            "name": "BARBOSA",
            "id_department": "28",
            "state": "1",
            "divipola": "68077",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "846",
            "name": "JESÚS MARÍA",
            "id_department": "28",
            "state": "1",
            "divipola": "68368",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "847",
            "name": "SAN ANDRÉS",
            "id_department": "28",
            "state": "1",
            "divipola": "68669",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "848",
            "name": "CHARALÁ",
            "id_department": "28",
            "state": "1",
            "divipola": "68167",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "849",
            "name": "JORDÁN",
            "id_department": "28",
            "state": "1",
            "divipola": "68370",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "850",
            "name": "VETAS",
            "id_department": "28",
            "state": "1",
            "divipola": "68867",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "851",
            "name": "PIEDECUESTA",
            "id_department": "28",
            "state": "1",
            "divipola": "68547",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "852",
            "name": "PUERTO WILCHES",
            "id_department": "28",
            "state": "1",
            "divipola": "68575",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "853",
            "name": "CHIMA",
            "id_department": "28",
            "state": "1",
            "divipola": "68176",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "854",
            "name": "SURATÁ",
            "id_department": "28",
            "state": "1",
            "divipola": "68780",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "855",
            "name": "HATO",
            "id_department": "28",
            "state": "1",
            "divipola": "68344",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "856",
            "name": "PUENTE NACIONAL",
            "id_department": "28",
            "state": "1",
            "divipola": "68572",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "857",
            "name": "PINCHOTE",
            "id_department": "28",
            "state": "1",
            "divipola": "68549",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "858",
            "name": "CARCASÍ",
            "id_department": "28",
            "state": "1",
            "divipola": "68152",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "859",
            "name": "SAN VICENTE DE CHUCURÍ",
            "id_department": "28",
            "state": "1",
            "divipola": "68689",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "860",
            "name": "COROMORO",
            "id_department": "28",
            "state": "1",
            "divipola": "68217",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "861",
            "name": "CONCEPCIÓN",
            "id_department": "28",
            "state": "1",
            "divipola": "68207",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "862",
            "name": "ENCINO",
            "id_department": "28",
            "state": "1",
            "divipola": "68264",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "863",
            "name": "LEBRIJA",
            "id_department": "28",
            "state": "1",
            "divipola": "68406",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "864",
            "name": "VILLANUEVA",
            "id_department": "28",
            "state": "1",
            "divipola": "68872",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "865",
            "name": "GUAVATÁ",
            "id_department": "28",
            "state": "1",
            "divipola": "68324",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "866",
            "name": "OIBA",
            "id_department": "28",
            "state": "1",
            "divipola": "68500",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "867",
            "name": "BUCARAMANGA",
            "id_department": "28",
            "state": "1",
            "divipola": "68001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "868",
            "name": "GUACA",
            "id_department": "28",
            "state": "1",
            "divipola": "68318",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "869",
            "name": "MÁLAGA",
            "id_department": "28",
            "state": "1",
            "divipola": "68432",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "870",
            "name": "AGUADA",
            "id_department": "28",
            "state": "1",
            "divipola": "68013",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "871",
            "name": "CEPITÁ",
            "id_department": "28",
            "state": "1",
            "divipola": "68160",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "872",
            "name": "CONFINES",
            "id_department": "28",
            "state": "1",
            "divipola": "68209",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "873",
            "name": "MOGOTES",
            "id_department": "28",
            "state": "1",
            "divipola": "68464",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "874",
            "name": "GALÁN",
            "id_department": "28",
            "state": "1",
            "divipola": "68296",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "875",
            "name": "GIRÓN",
            "id_department": "28",
            "state": "1",
            "divipola": "68307",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "876",
            "name": "LA PAZ",
            "id_department": "28",
            "state": "1",
            "divipola": "68397",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "877",
            "name": "TONA",
            "id_department": "28",
            "state": "1",
            "divipola": "68820",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "878",
            "name": "GUAPOTÁ",
            "id_department": "28",
            "state": "1",
            "divipola": "68322",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "879",
            "name": "RIONEGRO",
            "id_department": "28",
            "state": "1",
            "divipola": "68615",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "880",
            "name": "SAN BENITO",
            "id_department": "28",
            "state": "1",
            "divipola": "68673",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "881",
            "name": "CALIFORNIA",
            "id_department": "28",
            "state": "1",
            "divipola": "68132",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "882",
            "name": "SANTA HELENA DEL OPÓN",
            "id_department": "28",
            "state": "1",
            "divipola": "68720",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "883",
            "name": "EL CARMEN DE CHUCURÍ",
            "id_department": "28",
            "state": "1",
            "divipola": "68235",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "884",
            "name": "ARATOCA",
            "id_department": "28",
            "state": "1",
            "divipola": "68051",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "885",
            "name": "FLORIÁN",
            "id_department": "28",
            "state": "1",
            "divipola": "68271",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "886",
            "name": "SANTA BÁRBARA",
            "id_department": "28",
            "state": "1",
            "divipola": "68705",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "887",
            "name": "GUADALUPE",
            "id_department": "28",
            "state": "1",
            "divipola": "68320",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "888",
            "name": "SAN MIGUEL",
            "id_department": "28",
            "state": "1",
            "divipola": "68686",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "889",
            "name": "EL GUACAMAYO",
            "id_department": "28",
            "state": "1",
            "divipola": "68245",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "890",
            "name": "EL PLAYÓN",
            "id_department": "28",
            "state": "1",
            "divipola": "68255",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "891",
            "name": "SUAITA",
            "id_department": "28",
            "state": "1",
            "divipola": "68770",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "892",
            "name": "PÁRAMO",
            "id_department": "28",
            "state": "1",
            "divipola": "68533",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "893",
            "name": "ENCISO",
            "id_department": "28",
            "state": "1",
            "divipola": "68266",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "894",
            "name": "SAN JOAQUÍN",
            "id_department": "28",
            "state": "1",
            "divipola": "68682",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "895",
            "name": "SOCORRO",
            "id_department": "28",
            "state": "1",
            "divipola": "68755",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "896",
            "name": "BETULIA",
            "id_department": "28",
            "state": "1",
            "divipola": "68092",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "897",
            "name": "OCAMONTE",
            "id_department": "28",
            "state": "1",
            "divipola": "68498",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "898",
            "name": "PALMAR",
            "id_department": "28",
            "state": "1",
            "divipola": "68522",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "899",
            "name": "SAN GIL",
            "id_department": "28",
            "state": "1",
            "divipola": "68679",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "900",
            "name": "CIMITARRA",
            "id_department": "28",
            "state": "1",
            "divipola": "68190",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "901",
            "name": "FLORIDABLANCA",
            "id_department": "28",
            "state": "1",
            "divipola": "68276",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "902",
            "name": "MACARAVITA",
            "id_department": "28",
            "state": "1",
            "divipola": "68425",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "903",
            "name": "LOS SANTOS",
            "id_department": "28",
            "state": "1",
            "divipola": "68418",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "904",
            "name": "EL PEÑÓN",
            "id_department": "28",
            "state": "1",
            "divipola": "68250",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "905",
            "name": "ONZAGA",
            "id_department": "28",
            "state": "1",
            "divipola": "68502",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "906",
            "name": "PUERTO PARRA",
            "id_department": "28",
            "state": "1",
            "divipola": "68573",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "907",
            "name": "SIMACOTA",
            "id_department": "28",
            "state": "1",
            "divipola": "68745",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "908",
            "name": "MATANZA",
            "id_department": "28",
            "state": "1",
            "divipola": "68444",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "909",
            "name": "CAPITANEJO",
            "id_department": "28",
            "state": "1",
            "divipola": "68147",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "910",
            "name": "CURITÍ",
            "id_department": "28",
            "state": "1",
            "divipola": "68229",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "911",
            "name": "GAMBITA",
            "id_department": "28",
            "state": "1",
            "divipola": "68298",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "912",
            "name": "LA BELLEZA",
            "id_department": "28",
            "state": "1",
            "divipola": "68377",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "913",
            "name": "VÉLEZ",
            "id_department": "28",
            "state": "1",
            "divipola": "68861",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "914",
            "name": "GALERAS",
            "id_department": "29",
            "state": "1",
            "divipola": "70235",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "915",
            "name": "OVEJAS",
            "id_department": "29",
            "state": "1",
            "divipola": "70508",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "916",
            "name": "CHALÁN",
            "id_department": "29",
            "state": "1",
            "divipola": "70230",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "917",
            "name": "MORROA",
            "id_department": "29",
            "state": "1",
            "divipola": "70473",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "918",
            "name": "SINCELEJO",
            "id_department": "29",
            "state": "1",
            "divipola": "70001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "919",
            "name": "CAIMITO",
            "id_department": "29",
            "state": "1",
            "divipola": "70124",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "920",
            "name": "BUENAVISTA",
            "id_department": "29",
            "state": "1",
            "divipola": "70110",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "921",
            "name": "SAN JUAN DE BETULIA",
            "id_department": "29",
            "state": "1",
            "divipola": "70702",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "922",
            "name": "TOLÚ VIEJO",
            "id_department": "29",
            "state": "1",
            "divipola": "70823",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "923",
            "name": "SAN BENITO ABAD",
            "id_department": "29",
            "state": "1",
            "divipola": "70678",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "924",
            "name": "COROZAL",
            "id_department": "29",
            "state": "1",
            "divipola": "70215",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "925",
            "name": "SAN MARCOS",
            "id_department": "29",
            "state": "1",
            "divipola": "70708",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "926",
            "name": "COLOSO",
            "id_department": "29",
            "state": "1",
            "divipola": "70204",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "927",
            "name": "SAMPUÉS",
            "id_department": "29",
            "state": "1",
            "divipola": "70670",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "928",
            "name": "SAN LUIS DE SINCÉ",
            "id_department": "29",
            "state": "1",
            "divipola": "70742",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "929",
            "name": "SUCRE",
            "id_department": "29",
            "state": "1",
            "divipola": "70771",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "930",
            "name": "GUARANDA",
            "id_department": "29",
            "state": "1",
            "divipola": "70265",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "931",
            "name": "EL ROBLE",
            "id_department": "29",
            "state": "1",
            "divipola": "70233",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "932",
            "name": "SANTIAGO DE TOLÚ",
            "id_department": "29",
            "state": "1",
            "divipola": "70820",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "933",
            "name": "MAJAGUAL",
            "id_department": "29",
            "state": "1",
            "divipola": "70429",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "934",
            "name": "PALMITO",
            "id_department": "29",
            "state": "1",
            "divipola": "70523",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "935",
            "name": "LOS PALMITOS",
            "id_department": "29",
            "state": "1",
            "divipola": "70418",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "936",
            "name": "SAN ONOFRE",
            "id_department": "29",
            "state": "1",
            "divipola": "70713",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "937",
            "name": "COVEÑAS",
            "id_department": "29",
            "state": "1",
            "divipola": "70221",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "938",
            "name": "DOLORES",
            "id_department": "30",
            "state": "1",
            "divipola": "73236",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "939",
            "name": "CHAPARRAL",
            "id_department": "30",
            "state": "1",
            "divipola": "73168",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "940",
            "name": "PLANADAS",
            "id_department": "30",
            "state": "1",
            "divipola": "73555",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "941",
            "name": "FRESNO",
            "id_department": "30",
            "state": "1",
            "divipola": "73283",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "942",
            "name": "SAN ANTONIO",
            "id_department": "30",
            "state": "1",
            "divipola": "73675",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "943",
            "name": "VILLARRICA",
            "id_department": "30",
            "state": "1",
            "divipola": "73873",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "944",
            "name": "ATACO",
            "id_department": "30",
            "state": "1",
            "divipola": "73067",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "945",
            "name": "ICONONZO",
            "id_department": "30",
            "state": "1",
            "divipola": "73352",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "946",
            "name": "ARMERO",
            "id_department": "30",
            "state": "1",
            "divipola": "73055",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "947",
            "name": "ALVARADO",
            "id_department": "30",
            "state": "1",
            "divipola": "73026",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "948",
            "name": "SALDAÑA",
            "id_department": "30",
            "state": "1",
            "divipola": "73671",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "949",
            "name": "FLANDES",
            "id_department": "30",
            "state": "1",
            "divipola": "73275",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "950",
            "name": "VILLAHERMOSA",
            "id_department": "30",
            "state": "1",
            "divipola": "73870",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "951",
            "name": "PRADO",
            "id_department": "30",
            "state": "1",
            "divipola": "73563",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "952",
            "name": "PURIFICACIÓN",
            "id_department": "30",
            "state": "1",
            "divipola": "73585",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "953",
            "name": "IBAGUÉ",
            "id_department": "30",
            "state": "1",
            "divipola": "73001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "954",
            "name": "CAJAMARCA",
            "id_department": "30",
            "state": "1",
            "divipola": "73124",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "955",
            "name": "MARIQUITA",
            "id_department": "30",
            "state": "1",
            "divipola": "73443",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "956",
            "name": "VALLE DE SAN JUAN",
            "id_department": "30",
            "state": "1",
            "divipola": "73854",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "957",
            "name": "RIOBLANCO",
            "id_department": "30",
            "state": "1",
            "divipola": "73616",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "958",
            "name": "COYAIMA",
            "id_department": "30",
            "state": "1",
            "divipola": "73217",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "959",
            "name": "SAN LUIS",
            "id_department": "30",
            "state": "1",
            "divipola": "73678",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "960",
            "name": "LÉRIDA",
            "id_department": "30",
            "state": "1",
            "divipola": "73408",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "961",
            "name": "FALAN",
            "id_department": "30",
            "state": "1",
            "divipola": "73270",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "962",
            "name": "SUÁREZ",
            "id_department": "30",
            "state": "1",
            "divipola": "73770",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "963",
            "name": "CASABIANCA",
            "id_department": "30",
            "state": "1",
            "divipola": "73152",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "964",
            "name": "HONDA",
            "id_department": "30",
            "state": "1",
            "divipola": "73349",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "965",
            "name": "ANZOÁTEGUI",
            "id_department": "30",
            "state": "1",
            "divipola": "73043",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "966",
            "name": "VENADILLO",
            "id_department": "30",
            "state": "1",
            "divipola": "73861",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "967",
            "name": "ROVIRA",
            "id_department": "30",
            "state": "1",
            "divipola": "73624",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "968",
            "name": "PIEDRAS",
            "id_department": "30",
            "state": "1",
            "divipola": "73547",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "969",
            "name": "MELGAR",
            "id_department": "30",
            "state": "1",
            "divipola": "73449",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "970",
            "name": "NATAGAIMA",
            "id_department": "30",
            "state": "1",
            "divipola": "73483",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "971",
            "name": "ALPUJARRA",
            "id_department": "30",
            "state": "1",
            "divipola": "73024",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "972",
            "name": "ESPINAL",
            "id_department": "30",
            "state": "1",
            "divipola": "73268",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "973",
            "name": "HERVEO",
            "id_department": "30",
            "state": "1",
            "divipola": "73347",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "974",
            "name": "GUAMO",
            "id_department": "30",
            "state": "1",
            "divipola": "73319",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "975",
            "name": "SANTA ISABEL",
            "id_department": "30",
            "state": "1",
            "divipola": "73686",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "976",
            "name": "PALOCABILDO",
            "id_department": "30",
            "state": "1",
            "divipola": "73520",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "977",
            "name": "COELLO",
            "id_department": "30",
            "state": "1",
            "divipola": "73200",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "978",
            "name": "CARMEN DE APICALÁ",
            "id_department": "30",
            "state": "1",
            "divipola": "73148",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "979",
            "name": "LÍBANO",
            "id_department": "30",
            "state": "1",
            "divipola": "73411",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "980",
            "name": "ORTEGA",
            "id_department": "30",
            "state": "1",
            "divipola": "73504",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "981",
            "name": "MURILLO",
            "id_department": "30",
            "state": "1",
            "divipola": "73461",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "982",
            "name": "AMBALEMA",
            "id_department": "30",
            "state": "1",
            "divipola": "73030",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "983",
            "name": "CUNDAY",
            "id_department": "30",
            "state": "1",
            "divipola": "73226",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "984",
            "name": "RONCESVALLES",
            "id_department": "30",
            "state": "1",
            "divipola": "73622",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "985",
            "name": "EL DOVIO",
            "id_department": "31",
            "state": "1",
            "divipola": "76250",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "986",
            "name": "CALIMA",
            "id_department": "31",
            "state": "1",
            "divipola": "76126",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "987",
            "name": "LA VICTORIA",
            "id_department": "31",
            "state": "1",
            "divipola": "76403",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "988",
            "name": "LA CUMBRE",
            "id_department": "31",
            "state": "1",
            "divipola": "76377",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "989",
            "name": "ULLOA",
            "id_department": "31",
            "state": "1",
            "divipola": "76845",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "990",
            "name": "PALMIRA",
            "id_department": "31",
            "state": "1",
            "divipola": "76520",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "991",
            "name": "EL CAIRO",
            "id_department": "31",
            "state": "1",
            "divipola": "76246",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "992",
            "name": "TRUJILLO",
            "id_department": "31",
            "state": "1",
            "divipola": "76828",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "993",
            "name": "ROLDANILLO",
            "id_department": "31",
            "state": "1",
            "divipola": "76622",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "994",
            "name": "ANSERMANUEVO",
            "id_department": "31",
            "state": "1",
            "divipola": "76041",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "995",
            "name": "ALCALÁ",
            "id_department": "31",
            "state": "1",
            "divipola": "76020",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "996",
            "name": "CALI",
            "id_department": "31",
            "state": "1",
            "divipola": "76001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "997",
            "name": "TULUÁ",
            "id_department": "31",
            "state": "1",
            "divipola": "76834",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "998",
            "name": "GUADALAJARA DE BUGA",
            "id_department": "31",
            "state": "1",
            "divipola": "76111",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "999",
            "name": "PRADERA",
            "id_department": "31",
            "state": "1",
            "divipola": "76563",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1000",
            "name": "EL CERRITO",
            "id_department": "31",
            "state": "1",
            "divipola": "76248",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1001",
            "name": "OBANDO",
            "id_department": "31",
            "state": "1",
            "divipola": "76497",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1002",
            "name": "DAGUA",
            "id_department": "31",
            "state": "1",
            "divipola": "76233",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1003",
            "name": "LA UNIÓN",
            "id_department": "31",
            "state": "1",
            "divipola": "76400",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1004",
            "name": "FLORIDA",
            "id_department": "31",
            "state": "1",
            "divipola": "76275",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1005",
            "name": "RIOFRÍO",
            "id_department": "31",
            "state": "1",
            "divipola": "76616",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1006",
            "name": "BUGALAGRANDE",
            "id_department": "31",
            "state": "1",
            "divipola": "76113",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1007",
            "name": "CANDELARIA",
            "id_department": "31",
            "state": "1",
            "divipola": "76130",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1008",
            "name": "ANDALUCÍA",
            "id_department": "31",
            "state": "1",
            "divipola": "76036",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1009",
            "name": "VIJES",
            "id_department": "31",
            "state": "1",
            "divipola": "76869",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1010",
            "name": "JAMUNDÍ",
            "id_department": "31",
            "state": "1",
            "divipola": "76364",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1011",
            "name": "TORO",
            "id_department": "31",
            "state": "1",
            "divipola": "76823",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1012",
            "name": "ZARZAL",
            "id_department": "31",
            "state": "1",
            "divipola": "76895",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1013",
            "name": "YUMBO",
            "id_department": "31",
            "state": "1",
            "divipola": "76892",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1014",
            "name": "RESTREPO",
            "id_department": "31",
            "state": "1",
            "divipola": "76606",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1015",
            "name": "CARTAGO",
            "id_department": "31",
            "state": "1",
            "divipola": "76147",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1016",
            "name": "ARGELIA",
            "id_department": "31",
            "state": "1",
            "divipola": "76054",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1017",
            "name": "SEVILLA",
            "id_department": "31",
            "state": "1",
            "divipola": "76736",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1018",
            "name": "GINEBRA",
            "id_department": "31",
            "state": "1",
            "divipola": "76306",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1019",
            "name": "YOTOCO",
            "id_department": "31",
            "state": "1",
            "divipola": "76890",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1020",
            "name": "EL ÁGUILA",
            "id_department": "31",
            "state": "1",
            "divipola": "76243",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1021",
            "name": "VERSALLES",
            "id_department": "31",
            "state": "1",
            "divipola": "76863",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1022",
            "name": "BOLÍVAR",
            "id_department": "31",
            "state": "1",
            "divipola": "76100",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1023",
            "name": "BUENAVENTURA",
            "id_department": "31",
            "state": "1",
            "divipola": "76109",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1024",
            "name": "CAICEDONIA",
            "id_department": "31",
            "state": "1",
            "divipola": "76122",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1025",
            "name": "SAN PEDRO",
            "id_department": "31",
            "state": "1",
            "divipola": "76670",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1026",
            "name": "GUACARÍ",
            "id_department": "31",
            "state": "1",
            "divipola": "76318",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1027",
            "name": "PAPUNAUA",
            "id_department": "32",
            "state": "1",
            "divipola": "97777",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1028",
            "name": "MITÚ",
            "id_department": "32",
            "state": "1",
            "divipola": "97001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1029",
            "name": "CARURU",
            "id_department": "32",
            "state": "1",
            "divipola": "97161",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1030",
            "name": "YAVARATÉ",
            "id_department": "32",
            "state": "1",
            "divipola": "97889",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1031",
            "name": "TARAIRA",
            "id_department": "32",
            "state": "1",
            "divipola": "97666",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1032",
            "name": "PACOA",
            "id_department": "32",
            "state": "1",
            "divipola": "97511",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1033",
            "name": "PUERTO CARREÑO",
            "id_department": "33",
            "state": "1",
            "divipola": "99001",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1034",
            "name": "CUMARIBO",
            "id_department": "33",
            "state": "1",
            "divipola": "99773",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1035",
            "name": "SANTA ROSALÍA",
            "id_department": "33",
            "state": "1",
            "divipola": "99624",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        },
        {
            "id": "1036",
            "name": "LA PRIMAVERA",
            "id_department": "33",
            "state": "1",
            "divipola": "99524",
            "created_at": "7/10/2018 02:40:40",
            "updated_at": "7/10/2018 02:40:40"
        }
    ]
}';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = json_decode($this->countries, true)['RECORDS'];

        Country::unguard(); //Allows to define the id
        foreach ($countries as $country) {
            Country::create([
                'id' => $country['id'],
                'name' => $country['name'],
                'country_code' => $country['country_code'],
                'state' => $country['state'],
                'language' => $country['language'],
            ]);
        }

        $departments = json_decode($this->departments, true)['RECORDS'];

        Department::unguard(); //Allows to define the id
        foreach ($departments as $department) {
            Department::create([
                'id' => $department['id'],
                'name' => $department['name'],
                'country_id' => $department['country_id'],
                'state' => $department['state'],
            ]);
        }



        $cities = json_decode($this->cities, true)['RECORDS'];
        foreach ($cities as $city) {
            City::create([
                'name' => $city['name'],
                'department_id' => $city['id_department'],
                'country_id' => 1,
                'state' => $city['state'],
            ]);
        }
    }
}
