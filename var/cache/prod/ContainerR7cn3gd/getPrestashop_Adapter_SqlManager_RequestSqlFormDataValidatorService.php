<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.sql_manager.request_sql_form_data_validator' shared service.

return $this->services['prestashop.adapter.sql_manager.request_sql_form_data_validator'] = new \PrestaShop\PrestaShop\Adapter\SqlManager\SqlRequestFormDataValidator(${($_ = isset($this->services['prestashop.adapter.sql_manager.sql_query_validator']) ? $this->services['prestashop.adapter.sql_manager.sql_query_validator'] : $this->services['prestashop.adapter.sql_manager.sql_query_validator'] = new \PrestaShop\PrestaShop\Adapter\SqlManager\SqlQueryValidator()) && false ?: '_'});
