<?php

namespace Drupal\example\Access;

use Drupal\Core\Access\AccessResult;
use Drupal\Core\Routing\Access\AccessInterface;
use Drupal\Core\Session\AccountInterface;

/**
 * Determines access to for block add pages.
 */
class ExampleAccessCheck implements AccessInterface {

    /**
     * Checks access to the block add page for the block type.
     */
    public function access($block_content_type, AccountInterface $account) {
        return AccessResult::allowedIf($account->hasPermission("create $block_content_type block content"));
    }

}
