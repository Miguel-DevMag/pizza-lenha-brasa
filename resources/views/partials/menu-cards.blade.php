<section class="menu-section" aria-labelledby="menu-heading">
    <div class="section-head">
        <h2 id="menu-heading" class="section-head__title">Destaques do cardápio</h2>
        <a href="{{ url('/cardapio') }}" class="section-head__link">Ver tudo</a>
    </div>

    <div class="menu-grid">
        <article class="menu-card">
            <div class="menu-card__media">
                <img src="{{ asset('img/margherita.jpg') }}" alt="Pizza Margherita Tradicionale" width="400" height="260" loading="lazy">
                <span class="menu-card__badge menu-card__badge--green">Mais pedida</span>
            </div>
            <div class="menu-card__body">
                <div class="menu-card__headline">
                    <h3 class="menu-card__title">Margherita Tradicionale</h3>
                    <p class="menu-card__price">R$ 64,90</p>
                </div>
                <p class="menu-card__desc">Molho de tomate San Marzano, mussarela de búfala e manjericão fresco.</p>
                <div class="menu-card__tags">
                    <span class="tag tag--veg">Vegetariana</span>
                    <span class="menu-card__rating" title="Avaliação">★ 4.9 <span class="menu-card__rating-count">(120+)</span></span>
                </div>
            </div>
        </article>

        <article class="menu-card">
            <div class="menu-card__media">
                <img src="{{ asset('img/diavola.jpg') }}" alt="Pizza Calabresa Premium" width="400" height="260" loading="lazy">
                <button type="button" class="menu-card__fav" aria-label="Favoritar">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M20.8 4.6a5.5 5.5 0 00-7.8 0L12 5.6l-1-1a5.5 5.5 0 00-7.8 7.8l1 1L12 21l7.8-7.6 1-1a5.5 5.5 0 000-7.8z"/></svg>
                </button>
            </div>
            <div class="menu-card__body">
                <div class="menu-card__headline">
                    <h3 class="menu-card__title">Calabresa Premium</h3>
                </div>
                <p class="menu-card__desc">Calabresa artesanal, cebola roxa e azeitonas pretas.</p>
                <div class="menu-card__footer">
                    <p class="menu-card__price menu-card__price--inline">R$ 58,00</p>
                    <button type="button" class="menu-card__add" aria-label="Adicionar ao pedido">+</button>
                </div>
            </div>
        </article>

        <article class="menu-card">
            <div class="menu-card__media">
                <img src="{{ asset('img/quattro.jpg') }}" alt="Pizza de queijo" width="400" height="260" loading="lazy">
            </div>
            <div class="menu-card__body">
                <div class="menu-card__headline">
                    <h3 class="menu-card__title">Pizza de queijo</h3>
                </div>
                <p class="menu-card__desc">Blend especial de queijos com borda crocante e muito derretimento.</p>
                <div class="menu-card__footer">
                    <p class="menu-card__price menu-card__price--inline">R$ 69,90</p>
                    <button type="button" class="menu-card__add" aria-label="Adicionar ao pedido">+</button>
                </div>
            </div>
        </article>

        <article class="menu-card">
            <div class="menu-card__media">
                <img src="{{ asset('img/principal.jpg') }}" alt="Pizza Quattro Formaggi" width="400" height="260" loading="lazy">
                <span class="menu-card__time">25–35 min</span>
            </div>
            <div class="menu-card__body">
                <div class="menu-card__headline">
                    <h3 class="menu-card__title">Quattro Formaggi</h3>
                </div>
                <p class="menu-card__desc">Gorgonzola, parmesão, provolone e mussarela com mel opcional.</p>
                <div class="menu-card__footer">
                    <p class="menu-card__price menu-card__price--inline">R$ 72,00</p>
                    <button type="button" class="menu-card__add" aria-label="Adicionar ao pedido">+</button>
                </div>
            </div>
        </article>
    </div>
</section>
