<style>
    /*CARD PROMO*/
    .main-card{
        background-image: url(./assets/images/gradient_2.jpg);
        object-fit: cover;
        background-size: cover;
        background-position: center;
    }
    .title-promo{
        text-align: start;
        padding-left: 6rem;
        padding-top: 3rem;
        padding-bottom: 2rem;
        color: #fff;
        margin: 2rem 0;
        font-size: 3rem;
    }
    .container-card {
        display: flex;
        justify-content: center;
        gap: 3rem;
        padding-bottom: 5rem;
        width: 100%;
        box-sizing: border-box;
    }

    .card {
        width: 265px;
        height: 365px;
        border: 2px solid #136ac2;
        border-radius: 10px;
        padding: 25px 10px;
        display: flex;
        justify-content: start;
        align-items: center;
        flex-direction: column;
        position: relative;
        box-shadow: 3px 3px 6px 1px #136ac2;
        overflow: hidden;
    }

    .card::before {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: var(--ColorPrimaria);
        top: 0;
        left: 0;
    }

    .card::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background-color: rgb(255, 255, 255);
        top: 0;
        left: 0;
        top: 40%;
        transform: skewY(-345deg);
        transition: 0.3s ease-in-out;
    }

    .card:hover::after {
        transform: skewY(-390deg);
    }

    .imgpromo {
        position: absolute;
        width: 25rem;
        top: 1rem;
        z-index: 10;
        transition: 0.3s ease-in-out;
    }

    .card:hover img {
        width: 20rem;
    }

    .content {
        text-align: center;
        position: absolute;
        bottom: -40px;
        z-index: 10;
        transition: 0.3s ease-in-out;
    }

    .card:hover .content {
        bottom: 15px;
    }

    .title-prom {
        margin-bottom: 10px;
        font-size: 18px;
    }

    .parag-prom {
        color: var(--ColorPrimaria);
        font-size: 18px;
        font-weight: 700;
    }

    .button-prom {
        width: 15rem;
        height: 4rem;
        background-color: var(--ColorPrimaria);
        border-radius: 20px;
        margin-top: 15px;
        cursor: pointer;
        border: 2px solid #fff;
        transition: 0.2s;
        font-weight: 600;
        color: #fff;
    }

    .button-prom:hover {
        border: 2px solid var(--ColorPrimaria);
        background-color: rgb(255, 255, 255);
        color: var(--ColorPrimaria);
    }
</style>
<main class="main-card">
    <h2 class="title-promo"> + {{ __('Top selling') }}</h2>
    <div class="container-card">

        <div class="card">
            <img class="imgpromo" src="{{ asset('./assets/images/product01.png') }}" alt="Head Phone">
            <div class="content">
                <h3 class="title-prom">Wireless Headphones</h3>
                <p class="parag-prom">$ 49.<span>99</span></p>
                <button class="button-prom">{{ __('add to cart') }}</button>
            </div>
        </div>
        <div class="card">
            <img class="imgpromo" src="{{ asset('./assets/images/product02.png') }}" alt="Head Phone">
            <div class="content">
                <h3 class="title-prom">Wireless Headphones</h3>
                <p class="parag-prom">$ 49.<span>99</span></p>
                <button class="button-prom">{{ __('add to cart') }}</button>
            </div>
        </div>
        <div class="card">
            <img class="imgpromo" src="{{ asset('./assets/images/product03.png') }}" alt="Head Phone">
            <div class="content">
                <h3 class="title-prom">Wireless Headphones</h3>
                <p class="parag-prom">$ 49.<span>99</span></p>
                <button class="button-prom">{{ __('add to cart') }}</button>
            </div>
        </div>
    </div>
</main>
