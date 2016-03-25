<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // geoloc
        if ($pathinfo === '/geoloc') {
            return array (  '_controller' => 'AppBundle\\Controller\\GendlocController::geolocAction',  '_route' => 'geoloc',);
        }

        // open_alti
        if ($pathinfo === '/open_alti') {
            return array (  '_controller' => 'AppBundle\\Controller\\GendlocController::open_altiAction',  '_route' => 'open_alti',);
        }

        // req_commune
        if ($pathinfo === '/req_commune') {
            return array (  '_controller' => 'AppBundle\\Controller\\GendlocController::req_communeAction',  '_route' => 'req_commune',);
        }

        // security_createuser
        if ($pathinfo === '/createUser') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::createuserAction',  '_route' => 'security_createuser',);
        }

        // security_admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::adminAction',  '_route' => 'security_admin',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        // index
        if ($pathinfo === '/index') {
            return array (  '_controller' => 'AppBundle\\Controller\\GendlocController::indexAction',  '_route' => 'index',);
        }

        // home
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'AppBundle\\Controller\\GendlocController::homeAction',  '_route' => 'home',);
        }

        if (0 === strpos($pathinfo, '/search')) {
            // search
            if ($pathinfo === '/search') {
                return array (  '_controller' => 'AppBundle\\Controller\\GendlocController::searchAction',  '_route' => 'search',);
            }

            // search_result
            if ($pathinfo === '/searchResult') {
                return array (  '_controller' => 'AppBundle\\Controller\\GendlocController::searchResultAction',  '_route' => 'search_result',);
            }

        }

        // nominatim
        if ($pathinfo === '/nominatim') {
            return array (  '_controller' => 'AppBundle\\Controller\\GendlocController::nominatimAction',  '_route' => 'nominatim',);
        }

        // sms_send
        if ($pathinfo === '/sms_send') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_sms_send;
            }

            return array (  '_controller' => 'AppBundle\\Controller\\GendlocController::sms_sendAction',  '_route' => 'sms_send',);
        }
        not_sms_send:

        // maj_sms
        if ($pathinfo === '/maj_sms') {
            return array (  '_controller' => 'AppBundle\\Controller\\GendlocController::maj_smsAction',  '_route' => 'maj_sms',);
        }

        if (0 === strpos($pathinfo, '/position')) {
            // position
            if ($pathinfo === '/position') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_position;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ReceptionController::positionAction',  '_route' => 'position',);
            }
            not_position:

            // succes
            if ($pathinfo === '/position/succes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_succes;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ReceptionController::succesAction',  '_route' => 'succes',);
            }
            not_succes:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
