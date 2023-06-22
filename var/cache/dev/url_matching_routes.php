<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/Associations' => [[['_route' => 'app_Associations', '_controller' => 'App\\Controller\\AssociationsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Associations/H' => [[['_route' => 'app_Associations_H', '_controller' => 'App\\Controller\\AssociationsController::index_H'], null, ['GET' => 0], null, false, false, null]],
        '/api/CategoryCompte/product' => [[['_route' => 'app_CategoryCompte_product', '_controller' => 'App\\Controller\\CategoryCompteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/CategoryCompte/product/store' => [[['_route' => 'store_CategoryCompte_product', '_controller' => 'App\\Controller\\CategoryCompteController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/category/product' => [[['_route' => 'app_category_product', '_controller' => 'App\\Controller\\CategoryProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/category/product/store' => [[['_route' => 'store_category_product', '_controller' => 'App\\Controller\\CategoryProductController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/ClasseTherapeutique/product' => [[['_route' => 'app_ClasseTherapeutique_product', '_controller' => 'App\\Controller\\ClasseTherapeutiqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/ClasseTherapeutique/product/store' => [[['_route' => 'store_ClasseTherapeutique_product', '_controller' => 'App\\Controller\\ClasseTherapeutiqueController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/compte/h' => [[['_route' => 'app_compte_H', '_controller' => 'App\\Controller\\CompteController::index_H'], null, null, null, false, false, null]],
        '/api/compte' => [[['_route' => 'app_compte', '_controller' => 'App\\Controller\\CompteController::index'], null, null, null, false, false, null]],
        '/api/compte/store' => [[['_route' => 'app_compte_s', '_controller' => 'App\\Controller\\CompteController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/Dci/product' => [[['_route' => 'app_Dci_product', '_controller' => 'App\\Controller\\DciController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Dci/product/store' => [[['_route' => 'store_Dci_product', '_controller' => 'App\\Controller\\DciController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/Establishments' => [[['_route' => 'app_Establishments', '_controller' => 'App\\Controller\\EstablishmentsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Establishments/H' => [[['_route' => 'app_Establishments_H', '_controller' => 'App\\Controller\\EstablishmentsController::index_H'], null, ['GET' => 0], null, false, false, null]],
        '/api/FormeGalenique/product' => [[['_route' => 'app_FormeGalenique_product', '_controller' => 'App\\Controller\\FormeGaleniqueController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/FormeGalenique/product/store' => [[['_route' => 'store_FormeGalenique_product', '_controller' => 'App\\Controller\\FormeGaleniqueController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/Gamme/product' => [[['_route' => 'app_Gamme_product', '_controller' => 'App\\Controller\\GammeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Gamme/product/store' => [[['_route' => 'store_Gamme_product', '_controller' => 'App\\Controller\\GammeController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/Laboratory/product' => [[['_route' => 'app_Laboratory_product', '_controller' => 'App\\Controller\\LaboratoryController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Laboratory/product/store' => [[['_route' => 'store_Laboratory_product', '_controller' => 'App\\Controller\\LaboratoryController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/Pays' => [[['_route' => 'app_Pays', '_controller' => 'App\\Controller\\PaysController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Pays/store' => [[['_route' => 'store_Pays', '_controller' => 'App\\Controller\\PaysController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/pharmacy' => [[['_route' => 'app_pharmacy', '_controller' => 'App\\Controller\\PharmacyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/pharmacy/H' => [[['_route' => 'app_Pharmacy_H', '_controller' => 'App\\Controller\\PharmacyController::index_H'], null, ['GET' => 0], null, false, false, null]],
        '/api/product/H' => [[['_route' => 'app_product_H', '_controller' => 'App\\Controller\\ProductController::index_H'], null, ['GET' => 0], null, false, false, null]],
        '/api/product' => [[['_route' => 'app_product', '_controller' => 'App\\Controller\\ProductController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/ProductTable/product' => [[['_route' => 'app_ProductTable_product', '_controller' => 'App\\Controller\\ProductTableController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/ProductTable/product/store' => [[['_route' => 'store_ProductTable_product', '_controller' => 'App\\Controller\\ProductTableController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/Secteur' => [[['_route' => 'app_Secteur_', '_controller' => 'App\\Controller\\SecteurController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Secteur/store' => [[['_route' => 'store_Secteur_', '_controller' => 'App\\Controller\\SecteurController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/Sousgame/product' => [[['_route' => 'app_Sousgame_product', '_controller' => 'App\\Controller\\SousgameController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Sousgame/product/store' => [[['_route' => 'store_Sousgame_product', '_controller' => 'App\\Controller\\SousgameController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/SpecialityEstablishments/product' => [[['_route' => 'app_SpecialityEstablishments_product', '_controller' => 'App\\Controller\\SpecialityEstablishmentsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/SpecialityEstablishments/product/store' => [[['_route' => 'store_SpecialityEstablishments_product', '_controller' => 'App\\Controller\\SpecialityEstablishmentsController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/TaxeAchat/product' => [[['_route' => 'app_TaxeAchat_product', '_controller' => 'App\\Controller\\TaxeAchatController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/TaxeAchat/product/store' => [[['_route' => 'store_TaxeAchat_product', '_controller' => 'App\\Controller\\TaxeAchatController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/TaxeVente/product' => [[['_route' => 'app_TaxeVente_product', '_controller' => 'App\\Controller\\TaxeVenteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/TaxeVente/product/store' => [[['_route' => 'store_TaxeVente_product', '_controller' => 'App\\Controller\\TaxeVenteController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/TypeCompte/product' => [[['_route' => 'app_TypeCompte_product', '_controller' => 'App\\Controller\\TypeCompteController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/TypeCompte/product/store' => [[['_route' => 'store_TypeCompte_product', '_controller' => 'App\\Controller\\TypeCompteController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/TypeEstablishments/product' => [[['_route' => 'app_TypeEstablishments_product', '_controller' => 'App\\Controller\\TypeEstablishmentsController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/TypeEstablishments/product/store' => [[['_route' => 'store_TypeEstablishments_product', '_controller' => 'App\\Controller\\TypeEstablishmentsController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/TypePharmacy' => [[['_route' => 'app_TypePharmacy', '_controller' => 'App\\Controller\\TypePharmacyController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/TypePharmacy/store' => [[['_route' => 'store_TypePharmacy', '_controller' => 'App\\Controller\\TypePharmacyController::store'], null, ['POST' => 0], null, false, false, null]],
        '/api/Ville' => [[['_route' => 'app_Ville', '_controller' => 'App\\Controller\\VilleController::index'], null, ['GET' => 0], null, false, false, null]],
        '/api/Ville/store' => [[['_route' => 'store_Ville', '_controller' => 'App\\Controller\\VilleController::store'], null, ['POST' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/(?'
                    .'|Associations/(?'
                        .'|([^/]++)(*:39)'
                        .'|store(*:51)'
                        .'|update/([^/]++)(*:73)'
                    .')'
                    .'|C(?'
                        .'|ategoryCompte/product/(?'
                            .'|([^/]++)(*:118)'
                            .'|edit/([^/]++)(*:139)'
                            .'|destroy/([^/]++)(*:163)'
                        .')'
                        .'|lasseTherapeutique/product/(?'
                            .'|([^/]++)(*:210)'
                            .'|edit/([^/]++)(*:231)'
                            .'|destroy/([^/]++)(*:255)'
                        .')'
                    .')'
                    .'|c(?'
                        .'|ategory/product/(?'
                            .'|([^/]++)(*:296)'
                            .'|edit/([^/]++)(*:317)'
                            .'|destroy/([^/]++)(*:341)'
                        .')'
                        .'|ompte/(?'
                            .'|([^/]++)(*:367)'
                            .'|edit/([^/]++)(*:388)'
                            .'|destroy/([^/]++)(*:412)'
                        .')'
                    .')'
                    .'|Dci/product/(?'
                        .'|([^/]++)(*:445)'
                        .'|edit/([^/]++)(*:466)'
                        .'|destroy/([^/]++)(*:490)'
                    .')'
                    .'|Establishments/(?'
                        .'|([^/]++)(*:525)'
                        .'|store(*:538)'
                        .'|update/([^/]++)(*:561)'
                    .')'
                    .'|FormeGalenique/product/(?'
                        .'|([^/]++)(*:604)'
                        .'|edit/([^/]++)(*:625)'
                        .'|destroy/([^/]++)(*:649)'
                    .')'
                    .'|Gamme/product/(?'
                        .'|([^/]++)(*:683)'
                        .'|edit/([^/]++)(*:704)'
                        .'|destroy/([^/]++)(*:728)'
                    .')'
                    .'|Laboratory/product/(?'
                        .'|([^/]++)(*:767)'
                        .'|edit/([^/]++)(*:788)'
                        .'|destroy/([^/]++)(*:812)'
                    .')'
                    .'|P(?'
                        .'|ays/(?'
                            .'|([^/]++)(*:840)'
                            .'|edit/([^/]++)(*:861)'
                            .'|destroy/([^/]++)(*:885)'
                        .')'
                        .'|roductTable/product/(?'
                            .'|([^/]++)(*:925)'
                            .'|edit/([^/]++)(*:946)'
                            .'|destroy/([^/]++)(*:970)'
                        .')'
                    .')'
                    .'|p(?'
                        .'|harmacy/(?'
                            .'|([^/]++)(*:1003)'
                            .'|store(*:1017)'
                            .'|update/([^/]++)(*:1041)'
                        .')'
                        .'|roduct/(?'
                            .'|([^/]++)(*:1069)'
                            .'|store(*:1083)'
                            .'|edit/([^/]++)(*:1105)'
                            .'|destroy/([^/]++)(*:1130)'
                        .')'
                    .')'
                    .'|S(?'
                        .'|ecteur/(?'
                            .'|([^/]++)(*:1163)'
                            .'|edit/([^/]++)(*:1185)'
                            .'|destroy/([^/]++)(*:1210)'
                        .')'
                        .'|ousgame/product/(?'
                            .'|([^/]++)(*:1247)'
                            .'|edit/([^/]++)(*:1269)'
                            .'|destroy/([^/]++)(*:1294)'
                        .')'
                        .'|pecialityEstablishments/product/(?'
                            .'|([^/]++)(*:1347)'
                            .'|edit/([^/]++)(*:1369)'
                            .'|destroy/([^/]++)(*:1394)'
                        .')'
                    .')'
                    .'|T(?'
                        .'|axe(?'
                            .'|Achat/product/(?'
                                .'|([^/]++)(*:1440)'
                                .'|edit/([^/]++)(*:1462)'
                                .'|destroy/([^/]++)(*:1487)'
                            .')'
                            .'|Vente/product/(?'
                                .'|([^/]++)(*:1522)'
                                .'|edit/([^/]++)(*:1544)'
                                .'|destroy/([^/]++)(*:1569)'
                            .')'
                        .')'
                        .'|ype(?'
                            .'|Compte/product/(?'
                                .'|([^/]++)(*:1612)'
                                .'|edit/([^/]++)(*:1634)'
                                .'|destroy/([^/]++)(*:1659)'
                            .')'
                            .'|Establishments/product/(?'
                                .'|([^/]++)(*:1703)'
                                .'|edit/([^/]++)(*:1725)'
                                .'|destroy/([^/]++)(*:1750)'
                            .')'
                            .'|Pharmacy/(?'
                                .'|([^/]++)(*:1780)'
                                .'|edit/([^/]++)(*:1802)'
                                .'|destroy/([^/]++)(*:1827)'
                            .')'
                        .')'
                    .')'
                    .'|Ville/(?'
                        .'|([^/]++)(*:1856)'
                        .'|edit/([^/]++)(*:1878)'
                        .'|destroy/([^/]++)(*:1903)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:1945)'
                    .'|wdt/([^/]++)(*:1966)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:2013)'
                            .'|router(*:2028)'
                            .'|exception(?'
                                .'|(*:2049)'
                                .'|\\.css(*:2063)'
                            .')'
                        .')'
                        .'|(*:2074)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        39 => [[['_route' => 'app_Associations_show', '_controller' => 'App\\Controller\\AssociationsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        51 => [[['_route' => 'app_Associations_store', '_controller' => 'App\\Controller\\AssociationsController::store'], [], ['POST' => 0], null, false, false, null]],
        73 => [[['_route' => 'app_Associations_update', '_controller' => 'App\\Controller\\AssociationsController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        118 => [[['_route' => 'show_CategoryCompte_product', '_controller' => 'App\\Controller\\CategoryCompteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        139 => [[['_route' => 'update_CategoryCompte_product', '_controller' => 'App\\Controller\\CategoryCompteController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        163 => [[['_route' => 'destroy_CategoryCompte_product', '_controller' => 'App\\Controller\\CategoryCompteController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        210 => [[['_route' => 'show_ClasseTherapeutique_product', '_controller' => 'App\\Controller\\ClasseTherapeutiqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        231 => [[['_route' => 'update_ClasseTherapeutique_product', '_controller' => 'App\\Controller\\ClasseTherapeutiqueController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        255 => [[['_route' => 'destroy_ClasseTherapeutique_product', '_controller' => 'App\\Controller\\ClasseTherapeutiqueController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        296 => [[['_route' => 'show_category_product', '_controller' => 'App\\Controller\\CategoryProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        317 => [[['_route' => 'update_category_product', '_controller' => 'App\\Controller\\CategoryProductController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        341 => [[['_route' => 'destroy_category_product', '_controller' => 'App\\Controller\\CategoryProductController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        367 => [[['_route' => 'app_compte_', '_controller' => 'App\\Controller\\CompteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        388 => [[['_route' => 'app_compte_Update', '_controller' => 'App\\Controller\\CompteController::update'], ['id'], ['PUT' => 0], null, false, true, null]],
        412 => [[['_route' => 'destroy_compte', '_controller' => 'App\\Controller\\CompteController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        445 => [[['_route' => 'show_Dci_product', '_controller' => 'App\\Controller\\DciController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        466 => [[['_route' => 'update_Dci_product', '_controller' => 'App\\Controller\\DciController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        490 => [[['_route' => 'destroy_Dci_product', '_controller' => 'App\\Controller\\DciController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        525 => [[['_route' => 'app_Establishments_show', '_controller' => 'App\\Controller\\EstablishmentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        538 => [[['_route' => 'app_Establishments_store', '_controller' => 'App\\Controller\\EstablishmentsController::store'], [], ['POST' => 0], null, false, false, null]],
        561 => [[['_route' => 'app_Establishments_update', '_controller' => 'App\\Controller\\EstablishmentsController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        604 => [[['_route' => 'show_FormeGalenique_product', '_controller' => 'App\\Controller\\FormeGaleniqueController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        625 => [[['_route' => 'update_FormeGalenique_product', '_controller' => 'App\\Controller\\FormeGaleniqueController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        649 => [[['_route' => 'destroy_FormeGalenique_product', '_controller' => 'App\\Controller\\FormeGaleniqueController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        683 => [[['_route' => 'show_Gamme_product', '_controller' => 'App\\Controller\\GammeController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        704 => [[['_route' => 'update_Gamme_product', '_controller' => 'App\\Controller\\GammeController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        728 => [[['_route' => 'destroy_Gamme_product', '_controller' => 'App\\Controller\\GammeController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        767 => [[['_route' => 'show_Laboratory_product', '_controller' => 'App\\Controller\\LaboratoryController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        788 => [[['_route' => 'update_Laboratory_product', '_controller' => 'App\\Controller\\LaboratoryController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        812 => [[['_route' => 'destroy_Laboratory_product', '_controller' => 'App\\Controller\\LaboratoryController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        840 => [[['_route' => 'show_Pays', '_controller' => 'App\\Controller\\PaysController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        861 => [[['_route' => 'update_Pays', '_controller' => 'App\\Controller\\PaysController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        885 => [[['_route' => 'destroy_Pays', '_controller' => 'App\\Controller\\PaysController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        925 => [[['_route' => 'show_ProductTable_product', '_controller' => 'App\\Controller\\ProductTableController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        946 => [[['_route' => 'update_ProductTable_product', '_controller' => 'App\\Controller\\ProductTableController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        970 => [[['_route' => 'destroy_ProductTable_product', '_controller' => 'App\\Controller\\ProductTableController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1003 => [[['_route' => 'app_Pharmacy_show', '_controller' => 'App\\Controller\\PharmacyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1017 => [[['_route' => 'app_pharmacy_store', '_controller' => 'App\\Controller\\PharmacyController::store'], [], ['POST' => 0], null, false, false, null]],
        1041 => [[['_route' => 'app_pharmacy_update', '_controller' => 'App\\Controller\\PharmacyController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1069 => [[['_route' => 'app_product_show', '_controller' => 'App\\Controller\\ProductController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1083 => [[['_route' => 'app_product/store', '_controller' => 'App\\Controller\\ProductController::store'], [], ['POST' => 0], null, false, false, null]],
        1105 => [[['_route' => 'app_product/edit', '_controller' => 'App\\Controller\\ProductController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1130 => [[['_route' => 'app_product_destroy', '_controller' => 'App\\Controller\\ProductController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1163 => [[['_route' => 'show_Secteur_', '_controller' => 'App\\Controller\\SecteurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1185 => [[['_route' => 'update_Secteur_', '_controller' => 'App\\Controller\\SecteurController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1210 => [[['_route' => 'destroy_Secteur_', '_controller' => 'App\\Controller\\SecteurController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1247 => [[['_route' => 'show_Sousgame_product', '_controller' => 'App\\Controller\\SousgameController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1269 => [[['_route' => 'update_Sousgame_product', '_controller' => 'App\\Controller\\SousgameController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1294 => [[['_route' => 'destroy_Sousgame_product', '_controller' => 'App\\Controller\\SousgameController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1347 => [[['_route' => 'show_SpecialityEstablishments_product', '_controller' => 'App\\Controller\\SpecialityEstablishmentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1369 => [[['_route' => 'update_SpecialityEstablishments_product', '_controller' => 'App\\Controller\\SpecialityEstablishmentsController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1394 => [[['_route' => 'destroy_SpecialityEstablishments_product', '_controller' => 'App\\Controller\\SpecialityEstablishmentsController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1440 => [[['_route' => 'show_TaxeAchat_product', '_controller' => 'App\\Controller\\TaxeAchatController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1462 => [[['_route' => 'update_TaxeAchat_product', '_controller' => 'App\\Controller\\TaxeAchatController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1487 => [[['_route' => 'destroy_TaxeAchat_product', '_controller' => 'App\\Controller\\TaxeAchatController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1522 => [[['_route' => 'show_TaxeVente_product', '_controller' => 'App\\Controller\\TaxeVenteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1544 => [[['_route' => 'update_TaxeVente_product', '_controller' => 'App\\Controller\\TaxeVenteController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1569 => [[['_route' => 'destroy_TaxeVente_product', '_controller' => 'App\\Controller\\TaxeVenteController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1612 => [[['_route' => 'show_TypeCompte_product', '_controller' => 'App\\Controller\\TypeCompteController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1634 => [[['_route' => 'update_TypeCompte_product', '_controller' => 'App\\Controller\\TypeCompteController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1659 => [[['_route' => 'destroy_TypeCompte_product', '_controller' => 'App\\Controller\\TypeCompteController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1703 => [[['_route' => 'show_TypeEstablishments_product', '_controller' => 'App\\Controller\\TypeEstablishmentsController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1725 => [[['_route' => 'update_TypeEstablishments_product', '_controller' => 'App\\Controller\\TypeEstablishmentsController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1750 => [[['_route' => 'destroy_TypeEstablishments_product', '_controller' => 'App\\Controller\\TypeEstablishmentsController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1780 => [[['_route' => 'show_TypePharmacy', '_controller' => 'App\\Controller\\TypePharmacyController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1802 => [[['_route' => 'update_TypePharmacy', '_controller' => 'App\\Controller\\TypePharmacyController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1827 => [[['_route' => 'destroy_TypePharmacy', '_controller' => 'App\\Controller\\TypePharmacyController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1856 => [[['_route' => 'show_Ville', '_controller' => 'App\\Controller\\VilleController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1878 => [[['_route' => 'update_Ville', '_controller' => 'App\\Controller\\VilleController::update'], ['id'], ['POST' => 0], null, false, true, null]],
        1903 => [[['_route' => 'destroy_Ville', '_controller' => 'App\\Controller\\VilleController::destroy'], ['id'], ['DELETE' => 0], null, false, true, null]],
        1945 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        1966 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        2013 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        2028 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        2049 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        2063 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        2074 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
