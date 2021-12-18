<?php

use App\Hobby;
use Illuminate\Database\Seeder;

class HobbiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    private $hobbies = '{
    "RECORDS": [
            {
            "name": "ABEJAS(CRIANZADEABEJASOAPICULTURA)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ACTUARENTEATRO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ACUARIOS",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "AEROBIC",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "AEROMODELISMO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "AIKIDO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "AIRSOFT",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "AJEDREZ",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ANIMACION(CREACIONDECINEDEANIMACIONYDIBUJOSANIMADOS)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "AROMATERAPIA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ARTEDIGITAL",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ARTE:ASISTIRAESPECTACULOSCULTURALES(TEATRO,MUSICA,DANZA,OPERA,ZARZUELA)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ASOCIACIONES(PERTENENCIAAGRUPOSSOCIALESDETIPOARTISTICO,DEPORTIVO,FESTIVO,ETC)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ASTROLOGIA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ASTRONOMIA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "AUDIOLIBROS",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "AUTOMOVILESCLASICOS/ANTIGUOS",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "AVIACIONDEPORTIVA(YRECREATIVA)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "AVISTAMIENTODEAVES",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BACKGAMMON",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BADMINTON",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BAILAR",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BAILECONBARRA(POLEDANCE,POLEFITNESS)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BALONCESTO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BALONMANO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BARCODENTRODEUNABOTELLA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BARCOSDEMOTOR",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BARRANQUISMO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BATIKYESTAMPACIONDETEJIDOS",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BEISBOL",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BELLEZAYESTETICA(AFICIONA)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BIBLIOFILIA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BICICLETA(CICLISMO)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BICICLETADEMONTAÑA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BILLAR",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BINGO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BLOG(YVIDEOBLOG)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BMX(BICICLETADEMOTOCROSS)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BODYBOARD",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BOLOS(BOWLING,BOLICHE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BONSAI(ARBOLESENANOS)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BOXEO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BRICOLAGEODIY",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "BUCEO(SUBMARINISMO)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CABALLO(MONTAR,HIPICA,EQUITACION)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CALIGRAFIAYLETTERING",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CAMPISMO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CANARICULTURA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CANTAR",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CAPOEIRA(TIPODELUCHABRASILEÑA)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CARPINTERIA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CARRERASPORMONTAÑA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CARROVELAYBLOKART(LANDSAILING)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CASASDEMUÑECAS(CONSTRUCCIONDE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CATADECERVEZA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CATADEVINOS",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CAZA(DEPORTIVA)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CERAMICA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CERVEZA(FABRICACIONCASERADE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CESTERIA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CETRERIA(AMAESTRAMIENTODEAVESRAPACES)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CHALKPAINT(PINTURADETIZA)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CHIKUNGOQUIGONG(ACTIVIDADDERELAJACIONSALUDABLE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CICLOTURISMO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CINE(AFICIONALCINE,VERCINE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COCINA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COLECCIONISMO(SELLOS,MONEDAS,ANTIGÜEDADES,ETC)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COMETAS(VOLARCOMETAS)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COMICS(CREACIONDE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COMICS(LECTURADE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COMIDISTA(FOODIE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COMPOSICIONMUSICAL",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COMPOSTAJE",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COMPRAR(OVENDER:ROPA,COMPLEMENTOS,OBJETOS,ETC)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CONDUCCIÓNDEAUTOMÓVILES(AUTOMOVILISMODEPORTIVO)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CONDUCCIONDEMOTOCICLETAS(MOTOCICLISMO)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CONFERENCIAS(ASISTIRA)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CORO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CORRER(RUNNING)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COSMETICA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "COSTURA,CORTEYCONFECCION",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CRISTALTEÑIDO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CROQUET",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CRUCEROS(VIAJESDE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CUBODERUBIK(ROMPECABEZAS)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CULTURISMO(BODYBUILDING)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CURLING",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "CUSTOMIZACIONDEROPA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DAMAS(JUEGODE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DANZAAEREA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DARDOS(LANZARDARDOS)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DECORACIONDEINTERIORES",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DECOUPAGE(DECORACIÓNDESUPERFICIES)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DEPORTE(ASISTIRAESPECTACULOSDEPORTIVOS)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DEPORTE(VERDEPORTEENTV,ONLINE,REVISTASOPERIODICOS,RADIO)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DEPORTESDEFANTASIA(LIGADEFANTASIA)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DIARIO(ESCRIBIRUN)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DIBUJOARTISTICO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DIORAMAS(YBELENES)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DIRIGIR,ENTRENAR,GESTIONAR….",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DISCGOLF",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DISEÑODEROPA(TEXTIL)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DISEÑOYCREACIONDEPAGINASWEB",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DJ(DISKJOCKEY)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DOCUMENTALES(AFICIONALOS)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "DOMINO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ELECTRONICA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ENCUADERNACIONDELIBROS",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ENMARCARCUADROS",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ESCALADA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ESCRIBIRLITERATURA(PROSA,POESIA,TEATRO,ENSAYO,GUIONES)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ESCULTURA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ESGRIMA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ESMALTESSOBREMETAL(ALFUEGO)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ESPELEOLOGIA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ESQUIALPINO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ESQUIDEFONDOONORDICO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ESQUINAUTICOOACUATICO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "ESTUDIAR(IDIOMAS,OTRASASIGNATURAS,ETC)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "EXPLORACIONURBANA(URBEX)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "FLAMENCO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "FLORESKANZASHI",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "FLORESSECAS(TRABAJARCON)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "FOTOGRAFIA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "FRISBEE(DISCOVOLADOR)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "FRONTON",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "FUTBOL",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "FUTBOLAMERICANO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "FUTBOLSALA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "FUTBOLIN",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "GENEALOGIAEHISTORIAFAMILIAR",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "GEOCACHINGYBUSQUEDADETESOROS",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "GIMNASIADEMANTENIMIENTOYFITNESS",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "GLOBOS(TRABAJOCONGLOBOSMOLDEABLES)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "GO(JUEGO)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "GOLF",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "GRABADOSARTISTICOS",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "GRAFFITIYARTEURBANO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "HALTEROFILIA(LEVANTAMIENTODEPESAS)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "HIDROPONIA(CULTIVOENLIQUIDO)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "HOCKEYDEMESA(AIRHOCKEY)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "HOCKEYSOBREHIELO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "HOCKEYSOBREHIERBA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "HOCKEYSOBREPATINES",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "HOCKEYSUBACUATICO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "HUERTOCASERO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "IKEBANA(ARTEFLORAL)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "INTERNET(NAVEGARPOR)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "INVERTIRENBOLSA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "JABON(HACER)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "JARDINERIA",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "JIUJITSU",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "JOYASYBISUTERIA(CREACIONDE)",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            },
            {
            "name": "JUDO",
            "created_at": "1/10/201802:40:40",
            "updated_at": "1/10/201802:40:40"
            }
           ]
         }';

    public function run()
    {
        $hobbies = json_decode($this->hobbies, true)['RECORDS'];
        foreach ($hobbies AS $hobby) {
            Hobby::create([
                'name' => $hobby['name'],
                //'created_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$hobby['created_at']),
                //'updated_at' => \Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$hobby['updated_at'])
            ]);

        }
    }
}
