<?php

return function ($site) {
    return $site->find('leistungen_sub')->children()->listed()->flip();
};
?>