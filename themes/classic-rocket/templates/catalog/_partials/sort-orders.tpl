{**
 * 2007-2017 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License 3.0 (AFL-3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License 3.0 (AFL-3.0)
 * International Registered Trademark & Property of PrestaShop SA
 *}
<!--<div class="form-inline">
    <div class="form-group mb-0">
     <label for="select-sort-order" class="d-none d-sm-inline-block">{l s='Sort by:' d='Shop.Theme.Global'}</label>
        <select class="custom-select ml-sm-2" id="select-sort-order">
            {foreach from=$listing.sort_orders item=sort_order}
                <option value="{$sort_order.url}"{if $sort_order.current} selected="selected"{/if}>{$sort_order.label}</option>
            {/foreach}
        </select>
    
        {foreach from=$listing.sort_orders item=sort_order}
            <a class="js-search-link btn btn-sm btn-outline btn-light mr-1" href="{$sort_order.url}">{$sort_order.label} {if $sort_order.current}<i class="material-icons check_box">&#xE834;</i>{/if}</a>
        {/foreach}       
    </div>
</div>-->
<div class="dropdown">
 <button class="btn btn-light btn-sm dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-// haspopup="true" aria-expanded="false">   
		{l s='Sort by:' d='Shop.Theme.Global'}
		{foreach from=$listing.sort_orders item=sort_order}
	    	{if $sort_order.current}{$sort_order.label}{/if}     
	    {/foreach}
 </button>
 <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
   {foreach from=$listing.sort_orders item=sort_order}
   <a class="dropdown-item" href="{$sort_order.url}">{$sort_order.label}</a>
   {/foreach}
 </div>
</div>
