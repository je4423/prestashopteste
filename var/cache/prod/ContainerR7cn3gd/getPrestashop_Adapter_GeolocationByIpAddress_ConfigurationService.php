<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.geolocation_by_ip_address.configuration' shared service.

return $this->services['prestashop.adapter.geolocation_by_ip_address.configuration'] = new \PrestaShop\PrestaShop\Adapter\Geolocation\GeolocationByIpAddressConfiguration(${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()) && false ?: '_'});
