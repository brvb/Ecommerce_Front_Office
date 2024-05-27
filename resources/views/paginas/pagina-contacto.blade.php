@extends('main')
<style>
    div#newsletter.section {
        margin-top: 1px;
    }

    .background-contacto::before {
        content: '';
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
        margin-top: 1px;
        background: var(--ColorPrimaria);
        clip-path: polygon(88% 0, 100% 0, 100% 100%, 50% 100%);
    }

    .background-contacto {
        height: 100vh;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgb(255, 255, 255);
    }

    .container-contacto {
        position: absolute;
        min-width: 1100px;
        min-height: 580px;
        display: flex;
        z-index: 666;
    }

    .container-contacto .contactoInfo ul.info li span:nth-child(2) {
        color: #fff;
        margin-left: 10px;
        font-weight: 300;
    }

    .container-contacto .contactoInfo ul.info li span a {
        color: #fff;
        text-decoration: none;
        width: 30px;
        min-width: 30px;
    }

    .container-contacto .contactoInfo ul.info li span:nth-child(2) {
        color: #fff;
        margin-left: 10px;
        font-weight: 300;
    }

    .container-contacto .contactoInfo {
        position: absolute;
        top: 100px;
        width: 380px;
        height: calc(100% - 80px);
        background: var(--ColorPrimaria);
        z-index: 1;
        padding: 40px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 20px 25px rgba(0, 0, 0, 0.20);
        border-radius: 22px;
    }

    .container-contacto .contactoForm {
        position: absolute;
        top: 60px;
        padding: 60px 50px;
        padding-left: 300px;
        margin-left: 100px;
        width: calc(100% - 200px);
        height: 100%;
        background: #ffffff;
        box-shadow: 5px 15px 35px rgba(0, 0, 0, 0.25);
        border-radius: 22px;
    }

    .container-contacto .contactoForm .formBox {
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding-top: 30px;
    }

    .container-contacto .contactoForm .formBox .inputBox {
        position: relative;
        margin-bottom: 35px;
    }

    .container-contacto .contactoForm .formBox .inputBox.w50 {
        width: 47%;
    }

    .container-contacto .contactoForm .formBox .inputBox.w100 {
        width: 100%;
    }

    .container-contacto .contactoForm .formBox .inputBox span {
        position: absolute;
        left: 0;
        padding: 5px 0;
        pointer-events: none;
        font-size: 18px;
        font-weight: 300;
        transition: 0.3s;
    }

    .container-contacto .contactoForm .formBox .inputBox input,
    .container-contacto .contactoForm .formBox .inputBox textarea {
        width: 100%;
        resize: none;
        padding: 5px 0;
        font-size: 18px;
        font-weight: 300;
        color: #333;
        border: none;
        outline: none;
        border-bottom: 1px solid #777;
    }

    .container-contacto .contactoForm .formBox .inputBox select {
        width: 100%;
        padding: 5px 0;
        font-size: 18px;
        font-weight: 300;
        color: #333;
        border: none;
        outline: none;
        border-bottom: 1px solid #777;
        appearance: none;
        /* Remove default dropdown arrow */
        -webkit-appearance: none;
        /* Remove default dropdown arrow for Safari */
        -moz-appearance: none;
        /* Remove default dropdown arrow for Firefox */
        background-repeat: no-repeat;
        background-position: right 10px top 50%;
    }

    .container-contacto .contactoForm .formBox .inputBox textarea {
        height: 120px;
    }

    .container-contacto .contactoForm .formBox .inputBox input:focus~span,
    .container-contacto .contactoForm .formBox .inputBox input:valid~span,
    .container-contacto .contactoForm .formBox .inputBox textarea:focus~span,
    .container-contacto .contactoForm .formBox .inputBox textarea:valid~span {
        transform: translateY(-20px);
        font-size: 12px;
        font-weight: 400;
        letter-spacing: 1px;
        color: var(--ColorPrimaria);
        font-weight: 500;
    }

    .container-contacto .contactoForm .formBox .inputBox input[type="submit"] {
        position: relative;
        cursor: pointer;
        background: var(--ColorPrimaria);
        border-radius: 20px;
        color: #fff;
        border: none;
        max-width: 150px;
        padding: 12px;
        transition: 0.3s ease;
    }

    .container-contacto .contactoForm .formBox .inputBox input[type="submit"]:hover {
        background: #00111b;
    }

    /* make the form responsive */
    @media (max-width: 1200px) {
        div.container {
            margin: 10px;
        }

        .container-contacto {
            width: 90%;
            min-width: auto;
            margin: 20px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.2);
        }

        .container-contacto .contactoInfo {
            top: 0;
            height: 550px;
            position: relative;
            box-shadow: none;
            border-radius: 0px;
        }

        .container-contacto .contactoForm {
            position: relative;
            width: calc(100% - 300px);
            padding-left: 0;
            margin-left: 0;
            padding: 30px;
            height: 550px;
            box-shadow: none;
            border-radius: 0px;
            top: 0px;

        }
    }

    @media (max-width: 994px) {
        .background-contacto {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #00111b13;
        }

        .background-contacto::before {
            display: none;
        }

        .container-contacto {
            display: flex;
            flex-direction: column-reverse;
        }

        .container-contacto .contactoForm {
            width: 100%;
            height: auto;
            border-radius: 0px;
        }

        .container-contacto .contactoInfo {
            width: 100%;
            height: auto;
            flex-direction: row;
            border-radius: 0px;
        }

        .container-contacto .contactoInfo ul.sci {
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    }

    @media (max-width: 600px) {
        .background-contacto {
            background: #00111b00;
            margin-bottom: 10rem;
        }

        .container-contacto .contactoForm {
            padding: 25px;
        }

        .container-contacto .contactoInfo {
            padding: 25px;
            flex-direction: column;
            align-items: flex-start;
        }

        .container-contacto .contactoInfo ul.sci {
            margin-top: 40px;
        }

        .container-contacto .contactoForm .formBox .inputBox.w50 {
            width: 100%;
        }

        div.container {
            margin: 5px 0px;
            padding: 0 10px;
        }
    }
</style>
@section('pagina-contacto')
    <!-- SECTION -->
    <div class="section-contacto" style="display: flex; align-itens:center; ">
        <!-- container -->
        <div class="container-contacto">
            <div class="contactoInfo">
                <div>
                    <h3 style="font-size:24px; font-weight:500; color:#fff;">{{ __('Contact') }}</h3>
                    <br>
                    <ul class="info">
                        <li>
                            <span><i class="fas fa-map-marker-alt" style="color: #ffffff;"></i></span>
                            <span>184 Ippokratous Street<br>
                                Athens, Gr<br>
                                11472</span>

                        </li>
                        <br>
                        <li>
                            <span><i class="fas fa-envelope" style="color: #ffffff;"></i></span>
                            <!-- <span>nassosanagn@gmail.com</span> -->
                            <span><a href="mailto: nassosanagn@gmail.com">nassosanagn@gmail.com</a></span>
                        </li>
                        <br>
                        <li>
                            <span><i class="fas fa-phone-square" style="color: #ffffff;"></i></span>
                            <span>702-279-3488</span>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="contactoForm">
                <h2 style="font-size:24px; font-weight:500;">{{ __('Send a Message') }}</h2>
                <div class="formBox">
                    <div class="inputBox w50">
                        <input type="text" name="" required>
                        <span>{{ __('First Name') }}</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span>{{ __('Last Name') }}</span>
                    </div>
                    <div class="inputBox w100">
                        <select required>
                            <option value="" disabled selected>{{ __('Reason') }}</option>
                            <option value="devolucao">{{ __('Product Return') }}</option>
                            <option value="envio">{{ __('Product delivery') }}</option>
                            <option value="localizacao">{{ __('Product Localization') }}</option>
                        </select>
                    </div>
                    <div class="inputBox w50">
                        <input type="email" required>
                        <span>{{ __('Email Address') }}</span>
                    </div>
                    <div class="inputBox w50">
                        <input type="text" required>
                        <span>{{ __('Mobile Number') }}</span>
                    </div>
                    <div class="inputBox w100">
                        <textarea required></textarea>
                        <span>{{ __('Write your message here...') }}</span>
                    </div>
                    <div class="inputBox w100">
                        <input type="submit" value="{{ __('Send') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="background-contacto">
        </div>
    </div>
@endsection
