<?php

namespace Drupal\example\Routing;

use Drupal\Core\Routing\RouteSubscriberBase;
use Symfony\Component\Routing\RouteCollection;

/**
 * Listens to the dynamic route events.
 */
class RouteSubscriber extends RouteSubscriberBase {

    /**
     * {@inheritdoc}
     */
    protected function alterRoutes(RouteCollection $collection) {
        $route = $collection->get('block_content.add_form');
        if ($route) {
            $route->setRequirements([
                '_example_access_check' => 'TRUE',
            ]);
        }
    }

}
