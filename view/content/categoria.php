<!-- Inicio banner Categoria -->
<div class="banner-categoria">
    <img class="img_banner-categoria" src="<?php echo SERVERURL . 'view/assets/img/categoria/banner/banner_categoria.jpg' ?>" alt="">
</div>
<!-- Fin banner Categoria -->

<!-- Inicio contenido (filtros y productos) Categoria -->
<div class="container-sec-categorias">
    <div class="container-filtros">
        <div class="btn-filtros">
            <div class="icon">
                <img src="<?php echo SERVERURL . 'view/assets/img/svg/filtro.svg' ?>" alt="">
            </div>
            <div class="subtitle-filtros">
                <p class="filtros-text">Filtros</p>
            </div>
        </div>
        <div class="separador"></div>
        <div class="cont-ordenar-por">
            <div class="cont-ordenar-por-lbl">
                <label class="ordenar-por-lbl lbl-filtro" for="odenarpor">Ordenar por</label>
            </div>
            <div class="cont-ordenar-por-select">
                <select name="" id="" class="ordenar-por-select">
                    <option value="0">Por defecto</option>
                    <option value="1">De mayor a menor precio</option>
                    <option value="2">De menor a mayor precio</option>
                </select>
            </div>
        </div>
        <div class="separador"></div>
        <div class="cont-rango-precio">
            <div class="rango-precior-por-lbl">
                <label class="rango-precio-lbl lbl-filtro" for="rangoprecio">Rango de precio</label>
            </div>
            <div class="rango-precior-por-select">
                <div class="wrapper">
                    <div class="multi-range-slider">
                        <input type="range" id="input-left" min="50" max="500" value="100">
                        <input type="range" id="input-right" min="50" max="500" value="250">
                        <div class="slider-range">
                            <div class="track"></div>
                            <div class="range"></div>
                        </div>
                    </div>
                    <div class="price__wrapper">
                        <span class="price-from">50</span>
                        <span class="price-to">500</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div></div>
</div>