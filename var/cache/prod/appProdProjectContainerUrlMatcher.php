<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif ('GET' !== $canonicalMethod) {
                goto not_homepage;
            } else {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'homepage'));
            }

            return $ret;
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/places')) {
            // get_places
            if ('/places' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\PlaceController:getPlacesAction',  '_format' => NULL,  '_route' => 'get_places',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_places;
                }

                return $ret;
            }
            not_get_places:

            // get_place
            if (preg_match('#^/places/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_place')), array (  '_controller' => 'AppBundle\\Controller\\PlaceController:getPlaceAction',  '_format' => NULL,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_place;
                }

                return $ret;
            }
            not_get_place:

        }

        elseif (0 === strpos($pathinfo, '/users')) {
            // get_users
            if ('/users' === $pathinfo) {
                $ret = array (  '_controller' => 'AppBundle\\Controller\\UserController:getUsersAction',  '_format' => NULL,  '_route' => 'get_users',);
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_users;
                }

                return $ret;
            }
            not_get_users:

            // get_user
            if (preg_match('#^/users/(?P<user_id>[^/]++)$#sD', $pathinfo, $matches)) {
                $ret = $this->mergeDefaults(array_replace($matches, array('_route' => 'get_user')), array (  '_controller' => 'AppBundle\\Controller\\UserController:getUserAction',  '_format' => NULL,));
                if (!in_array($canonicalMethod, array('GET'))) {
                    $allow = array_merge($allow, array('GET'));
                    goto not_get_user;
                }

                return $ret;
            }
            not_get_user:

        }

        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
