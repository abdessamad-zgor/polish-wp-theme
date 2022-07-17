<?php global $product;?>
<article id="<?php the_ID();?>" class="tm-product-card">
<div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="<?php $product->get_permalink();?>">
                                            <div class="tm-product-card-labels"><span
                                                    class="uk-label uk-label-warning">top selling</span><span
                                                    class="uk-label uk-label-danger">trade-in</span></div>
                                            <figure class="tm-media-box-wrap"><img src="<?php echo wp_get_attachment_image_src( $product->get_image_id(), 'thumbnail' )[0];?>"
                                                    alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)" />
                                            </figure>
                                        </a></div>
                                        <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <div class="uk-text-meta uk-margin-xsmall-bottom"></div>
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                href="<?php $product->get_permalink();?>"><?php $product->get_name();?></a></h3>
                                        <ul class="uk-list uk-text-small tm-product-card-properties">
                                            <li><span class="uk-text-muted">Diagonal display: </span><span>15.4"</span>
                                            </li>
                                            <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                    i7</span></li>
                                            <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span></li>
                                            <li><span class="uk-text-muted">Video Card: </span><span>AMD Radeon Pro
                                                    555</span></li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-card-shop">
                                        <div class="tm-product-card-prices"><del class="uk-text-meta">$1899.00</del>
                                            <div class="tm-product-card-price"><?php get_display_price();?></div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a
                                                    class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                    title="Add to favorites"><span
                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to
                                                        favorites</span></a><a
                                                    class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                    title="Add to compare"><span
                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to compare</span></a>
                                            </div><button
                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                    class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                                    class="tm-product-card-add-button-text">add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
</article>

<!-- <article class="tm-product-card">
                                <div class="tm-product-card-media">
                                    <div class="tm-ratio tm-ratio-4-3"><a class="tm-media-box" href="product.html">
                                            <div class="tm-product-card-labels"><span
                                                    class="uk-label uk-label-warning">top selling</span><span
                                                    class="uk-label uk-label-danger">trade-in</span></div>
                                            <figure class="tm-media-box-wrap"><img src="/assets/imgs/products/1/1-medium.jpg"
                                                    alt="Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB (Silver)" />
                                            </figure>
                                        </a></div>
                                </div>
                                <div class="tm-product-card-body">
                                    <div class="tm-product-card-info">
                                        <div class="uk-text-meta uk-margin-xsmall-bottom">Laptop</div>
                                        <h3 class="tm-product-card-title"><a class="uk-link-heading"
                                                href="product.html">Apple MacBook Pro 15&quot; Touch Bar MPTU2LL/A 256GB
                                                (Silver)</a></h3>
                                        <ul class="uk-list uk-text-small tm-product-card-properties">
                                            <li><span class="uk-text-muted">Diagonal display: </span><span>15.4"</span>
                                            </li>
                                            <li><span class="uk-text-muted">CPU: </span><span>Intel®&nbsp;Core™
                                                    i7</span></li>
                                            <li><span class="uk-text-muted">RAM: </span><span>16&nbsp;GB</span></li>
                                            <li><span class="uk-text-muted">Video Card: </span><span>AMD Radeon Pro
                                                    555</span></li>
                                        </ul>
                                    </div>
                                    <div class="tm-product-card-shop">
                                        <div class="tm-product-card-prices"><del class="uk-text-meta">$1899.00</del>
                                            <div class="tm-product-card-price">$1599.00</div>
                                        </div>
                                        <div class="tm-product-card-add">
                                            <div class="uk-text-meta tm-product-card-actions"><a
                                                    class="tm-product-card-action js-add-to js-add-to-favorites tm-action-button-active js-added-to"
                                                    title="Add to favorites"><span
                                                        uk-icon="icon: heart; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to
                                                        favorites</span></a><a
                                                    class="tm-product-card-action js-add-to js-add-to-compare tm-action-button-active js-added-to"
                                                    title="Add to compare"><span
                                                        uk-icon="icon: copy; ratio: .75;"></span><span
                                                        class="tm-product-card-action-text">Add to compare</span></a>
                                            </div><button
                                                class="uk-button uk-button-primary tm-product-card-add-button tm-shine js-add-to-cart"><span
                                                    class="tm-product-card-add-button-icon" uk-icon="cart"></span><span
                                                    class="tm-product-card-add-button-text">add to cart</span></button>
                                        </div>
                                    </div>
                                </div>
                            </article> -->