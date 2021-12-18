<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (Auth::check()) {
            \Menu::makeOnce('appNavBar', function ($menu) {
                //Inicio
                $menu->add(__('generics.start'), ['route' => 'home'])
                    ->data('icon', 'si si-cursor');

                //Titulo separador
                $menu->add(__('generics.offerors'), ['url' => '#'])->nickname('offerors')
                    ->data('icon', 'si si-user');
                //Opciones primer nivel
                $menu->offerors->add(__('generics.list_', ['name' => __('generics.offerors')]), ['route' => 'offerors.index'])
                    ->data('icon', 'si si-user');
                $menu->offerors->add(__('generics.create_', ['name' => __('generics.offeror')]), ['route' => 'offerors.create'])
                    ->data('icon', 'si si-plus');

                //Titulo separador
                $menu->add(__('generics.customers'), ['url' => '#'])->nickname('customers')
                    ->data('icon', 'si si-notebook');
                //Opciones primer nivel
                $menu->customers->add(__('generics.list_', ['name' => __('generics.clients')]), ['route' => 'customers.index'])
                    ->data('icon', 'si si-user');
                $menu->customers->add(__('generics.create_', ['name' => __('generics.client')]), ['route' => 'customers.create'])
                    ->data('icon', 'si si-plus');


                //Titulo separador
                $menu->add(__('generics.accessories'), ['url' => '#'])->nickname('accessories')
                    ->data('icon', 'si si-handbag');
                //Opciones primer nivel
                $menu->accessories->add(__('generics.list_', ['name' => __('generics.accessories')]), ['route' => 'accessories.index'])
                    ->data('icon', 'si si-star');
                $menu->accessories->add(__('generics.create_', ['name' => __('generics.accessory')]), ['route' => 'accessories.create'])
                    ->data('icon', 'si si-plus');

                //Titulo separador
                $menu->add(__('generics.services'), ['url' => '#'])->nickname('services')
                    ->data('icon', 'si si-list');
                //Opciones primer nivel
                $menu->services->add(__('generics.list_', ['name' => __('generics.services')]), ['route' => 'services.index'])
                    ->data('icon', 'si si-star');
                $menu->services->add(__('generics.create_', ['name' => __('generics.service')]), ['route' => 'services.create'])
                    ->data('icon', 'si si-plus');

                //Titulo separador
                $menu->add(__('generics.blocks'), ['url' => '#'])->nickname('blocks')
                    ->data('icon', 'si si-lock');
                //Opciones primer nivel
                $menu->blocks->add(__('generics.list_', ['name' => __('generics.blocks')]), ['route' => 'blocks.index'])
                    ->data('icon', 'si si-user');
                $menu->blocks->add(__('generics.create_', ['name' => __('generics.blocks')]), ['route' => 'blocks.create'])
                    ->data('icon', 'si si-plus');

                //Titulo separador
                $menu->add(__('generics.monetary_requests'), ['route' => 'monetary_requests.index'])
                    ->data('icon', 'si si-star');

                //Titulo separador
                $menu->add(__('generics.validations'), ['route' => 'validations.check'])
                    ->data('icon', 'si si-check');

                //Titulo separador
                $menu->add(__('generics.basic_configuration'));
                //Opciones primer nivel
                $menu->add(__('generics.basic_tables'), ['url' => '#'])
                    ->data('icon', 'si si-puzzle')
                    ->nickname('basicTables');

                //Opciones Segundo nivel
                $menu->basicTables->add(__('generics.location'), ['url' => '#'])
                    ->data('icon', 'si si-puzzle')
                    ->nickname('location');

                //Opciones tercer nivel
                $menu->location->add(__('generics.countries'), ['route' => 'countries.index']);
                $menu->location->add(__('generics.departments'), ['route' => 'departments.index']);
                $menu->location->add(__('generics.cities'), ['route' => 'cities.index']);
                $menu->location->add(__('generics.currencies'), ['route' => 'currencies.index']);

                //Opciones segundo nivel

                $menu->basicTables->add(__('generics.time_units'), ['route' => 'time_units.index'])
                    ->data('icon', 'si si-hourglass');

                $menu->basicTables->add(__('generics.users'), ['route' => 'users.index'])
                    ->data('icon', 'si si-user');

                $menu->basicTables->add(__('generics.banks'), ['route' => 'banks.index'])
                    ->data('icon', 'si si-plus');

                $menu->basicTables->add(__('generics.aptitudes'), ['route' => 'aptitudes.index'])
                    ->data('icon', 'si si-user');

                $menu->basicTables->add(__('generics.level'), ['route' => 'model-levels.index'])
                    ->data('icon', 'si si-user');

                $menu->basicTables->add(__('generics.hobbies'), ['route' => 'hobbies.index'])
                    ->data('icon', 'si si-user');

                $menu->basicTables->add(__('generics.document_validates'), ['route' => 'document-validates.index'])
                    ->data('icon', 'fa fa-file-import');

                //Titulo separador
                $menu->add(__('generics.administration'));
                //Opciones primer nivel
                $menu->add(__('generics.reports'), ['url' => '#'])
                    ->data('icon', 'si si-puzzle')
                    ->nickname('reports');

                $menu->add(__('generics.transactions'), ['url' => '#'])
                    ->data('icon', 'fa fa-th-list')
                    ->nickname('transactions');

                //Opciones segundo nivel

                $menu->reports->add(__('generics.report_of', ['name' => __('generics.offerors')]), ['route' => 'reports.offerors'])
                    ->data('icon', 'fa fa-user-tag');

                $menu->reports->add(__('generics.report_of', ['name' => __('generics.clients')]), ['route' => 'reports.customers'])
                    ->data('icon', 'fa fa-user-tie');

                $menu->reports->add(__('generics.service_report'), ['route' => 'reports.transactions'])
                    ->data('icon', 'fa fa-money-check-alt');

                $menu->reports->add(__('generics.service_report_bidder'), ['route' => 'reports.services'])
                    ->data('icon', 'fa fa-list');

                $menu->reports->add(__('generics.report_of', ['name' => __('generics.requests')]), ['route' => 'reports.monetary_requests'])
                    ->data('icon', 'si si-puzzle');

                $menu->transactions->add(__('generics.list_of', ['name' => __('generics.transactions')]), ['url' => '#'])
                    ->data('icon', 'fa fa-th-list');
                $menu->transactions->add(__('generics.search_of', ['name' => __('generics.transactions')]), ['url' => '#'])
                    ->data('icon', 'fa fa-search');
                $menu->transactions->add(__('generics.traceability'), ['url' => '#'])
                    ->data('icon', 'si si-puzzle');
            });
            if (Auth::user()->getRoleNames()->first() == "Model") {
                \Menu::makeOnce('appNavBarOfferor', function ($menu) {
                    //Inicio
                    $menu->add(__('generics.start'), ['route' => 'home'])
                        ->data('icon', 'fa fa-home');
                    $menu->add(__('generics.profile_configuration'), ['route' => ['offerors.edit', Auth()->user()->offeror]])
                        ->data('icon', 'fa fa-user');
                    $menu->add(__('generics.gallery'), ['route' => ['album.index', Auth()->user()->offeror]])
                        ->data('icon', 'fa fa-images');
                    $menu->add(__('generics.services'), ['route' => ['offeror_services.index', Auth::user()->offeror]])
                        ->data('icon', 'fa fa-list-alt');
                    $menu->add(__('generics.accessories'), ['route' => ['offeror_accessories.index', Auth::user()->offeror]])
                        ->data('icon', 'fa fa-star');
                    $menu->add(__('generics.availability'), ['route' => ['offeror_availability.index', Auth()->user()->offeror->schedule]])
                        ->data('icon', 'fa fa-calendar-alt');
                    $menu->add(__('generics.financial_information'), ['route' => ['financial_informations.index']])
                        ->data('icon', 'fa fa-money-bill-alt');
                    $menu->add(__('generics.operations'), ['route' => ['operations.index']])
                        ->data('icon', 'fa fa-list-alt');
                    $menu->add(__('generics.transactions'), ['route' => ['monetary_requests.index']])
                        ->data('icon', 'fa fa-credit-card');
                    $menu->add(__('generics.validation'), ['route' => ['validations.index', Auth()->user()->offeror]])
                        ->data('icon', 'fa fa-check-circle');
                    $menu->add(__('generics.profile_view'), ['route' => ['offerors.show', Auth()->user()->offeror]])
                        ->data('icon', 'fa fa-eye');
                });
            }

            if (Auth::user()->getRoleNames()->first() == "Client") {
                \Menu::makeOnce('appNavBarClient', function ($menu) {
                    //Inicio
                    $menu->add(__('generics.start'), ['route' => 'home'])
                        ->data('icon', 'fa fa-home');
                    $menu->add(__('generics.profile_configuration'), ['route' => ['customers.edit', Auth()->user()->customer]])
                        ->data('icon', 'fa fa-user');
                    // $menu->add(__('generics.validation'), ['route' => ['validations.index_customer', Auth()->user()->customer]])
                    //     ->data('icon', 'fa fa-check-circle');
                    $menu->add(__('generics.profile_view'), ['route' => ['customers.show', Auth()->user()->customer]])
                        ->data('icon', 'fa fa-eye');
                });
            }


            if (Auth::user()->getRoleNames()->first() == "Agencia") {
                \Menu::makeOnce('appNavBarAgency', function ($menu) {
                    //Inicio
                    $menu->add(__('generics.start'), ['route' => 'home'])
                        ->data('icon', 'fa fa-home');
                    //Titulo separador
                    $menu->add(__('generics.offerors'), ['url' => '#'])->nickname('offerors')
                        ->data('icon', 'si si-user');
                    //Opciones primer nivel
                    $menu->offerors->add(__('generics.list_', ['name' => __('generics.offerors')]), ['route' => 'offerors.index'])
                        ->data('icon', 'si si-user');
                    $menu->offerors->add(__('generics.create_', ['name' => __('generics.offeror')]), ['route' => 'offerors.create'])
                        ->data('icon', 'si si-plus');
                });
            }
        }
        return $next($request);
    }
}
