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
{block name='product_miniature_item'}
    <article class="product-miniature js-product-miniature mb-3" data-id-product="{$product.id_product}" data-id-product-attribute="{$product.id_product_attribute}">
        <div class="card card-product">

            <div class="card-img-top position-relative">
                {block name='product_thumbnail'}
                    <a href="{$product.url}" class="thumbnail product-thumbnail rc ratio1_1 d-block">
                        {if $product.cover}
                            <img
                                    data-src = "{$product.cover.bySize.home_default.url}"
                                    alt = "{if !empty($product.cover.legend)}{$product.cover.legend}{else}{$product.name|truncate:60:'...'}{/if}"
                                    data-full-size-image-url = "{$product.cover.large.url}"
                                    class="lazyload"
                            >
                        {elseif isset($urls.no_picture_image)}
                                <img src = "{$urls.no_picture_image.bySize.home_default.url}">
                        {else}
                                <img src = "data:image/gif;base64,R0lGODlhAQABAIAAAMLCwgAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==">
                        {/if}
                    </a>
                {/block}
                <div class="highlighted-informations text-center p-2{if !$product.main_variants} no-variants{/if} d-none d-md-block">
                    {block name='quick_view'}                        
                        {block name='product_name'}
                            {if in_array($page.page_name, ['best-sales','category','manufacturer','new-products','prices-drop','product-list','search','supplier'])}
                                <h2 class="h3 product-title"><a href="{$product.url}">{$product.name|truncate:60:'...'}</a></h2>
                            {else}
                                <p class="h3 product-title"><a href="{$product.url}">{$product.name|truncate:60:'...'}</a></p>
                            {/if}
                        {/block}
                    {/block}

                    {block name='product_variants'}
                        {if $product.main_variants}
                            {include file='catalog/_partials/variant-links.tpl' variants=$product.main_variants}
                        {/if}
                    {/block}
                </div>
            </div>
            {* end card-img-top*}

            <div class="card-body">                
                {block name='product_price_and_shipping'}
                    {if $product.show_price}
                        <div class="product-price-and-shipping price-box">  
                            {if $product.has_discount}
                                {hook h='displayProductPriceBlock' product=$product type="old_price"}

                                <span class="sr-only">{l s='Regular price' d='Shop.Theme.Catalog'}</span>
                                <span class="regular-price regular-position-price">{$product.regular_price}</span>

                            {/if}

                            {hook h='displayProductPriceBlock' product=$product type="before_price"}

                            <span class="sr-only">{l s='Price' d='Shop.Theme.Catalog'}</span>
                            <span class="price">{$product.price}</span>

                            {block name='product_flags'}                            
                                {foreach from=$product.flags item=flag}
                                    <span class="product-desconto {$flag.type}">{$flag.label}</span>
                                {/foreach}
                                {if $product.discount_type === 'percentage'}
                                    <span class="product-desconto desconto-porcentagem">{$product.discount_percentage} OFF</span>
                                {elseif $product.discount_type === 'amount'}
                                    <span class="product-desconto desconto-valor">{$product.discount_amount_to_display}</span>
                                {/if}                            
                            {/block}

                            <span class="product-desconto juros-price">12x R$ 7,04 sem juros</span>

                            {hook h='displayProductPriceBlock' product=$product type='unit_price'}

                            {hook h='displayProductPriceBlock' product=$product type='weight'}
                        </div>
                    {/if}
                {/block}
                

                {block name='product_reviews'}
                    {hook h='displayProductListReviews' product=$product}
                {/block}


            </div>
            {* end card body*}
            {block name='product_flags'}
                <ul class="product-flags">
                    {foreach from=$product.flags item=flag}
                        <li class="product-flag {$flag.type}">{$flag.label}</li>
                    {/foreach}
                    {if $product.discount_type === 'percentage'}
                        <li class="product-flag discount-percentage discount-product">{$product.discount_percentage}</li>
                    {elseif $product.discount_type === 'amount'}
                        <li class="product-flag discount-amount discount-product">{$product.discount_amount_to_display}</li>
                    {/if}
                </ul>
            {/block}
        </div>
        {* end card product*}



    </article>
{/block}
