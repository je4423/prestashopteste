<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.localization_pack_by_iso_code' shared service.

return $this->services['prestashop.core.form.choice_provider.localization_pack_by_iso_code'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\LocalizationPackByIsoCodeChoiceProvider(${($_ = isset($this->services['prestashop.core.localization.pack.loader.remote']) ? $this->services['prestashop.core.localization.pack.loader.remote'] : $this->load('getPrestashop_Core_Localization_Pack_Loader_RemoteService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.core.localization.pack.loader.local']) ? $this->services['prestashop.core.localization.pack.loader.local'] : $this->load('getPrestashop_Core_Localization_Pack_Loader_LocalService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'});
