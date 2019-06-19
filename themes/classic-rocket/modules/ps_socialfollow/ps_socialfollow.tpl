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

{block name='block_social'}
<div class="col-md-3">
	<p class="footer__title footer__title--desktop">{l s='Share' d='Shop.Theme.Actions'}</p>
	<a href="#info_social_sharing" class="footer__title--mobile footer__title" data-toggle="collapse">{l s='Share' d='Shop.Theme.Actions'}</a>
	<div id="info_social_sharing" class="social-sharing collapse show" data-collapse-hide-mobile>
		<div class="curtir-face">
			<div id="fb-root"></div>
			<script async defer crossorigin="anonymous" src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.3&appId=203110339842410&autoLogAppEvents=1"></script>
		</div>
		{foreach from=$social_links item='social_link'}
			<a class="text-hide social-share-btn social-share-btn--footer {$social_link.class}" href="{$social_link.url}" target="_blank" rel="nofollow noopener">{$social_link.label}</a>
			{if $social_link.label == "Facebook"}<div class="fb-like" data-href="https://facebook.com/feiradamadrugadasp" data-width="" data-layout="button_count" data-action="like" data-size="small" data-show-faces="false" data-share="false"></div>{/if}
		{/foreach}
	</div>
</div>
{/block}
