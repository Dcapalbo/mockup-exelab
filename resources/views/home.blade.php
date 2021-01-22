@extends('layout.app')
@section('content')
<section class="first_section">
    <div class="wrapper">
        <div class="higher_first_section">
            <img class="brand_img" src="img/Componente 5 – 1.png" alt="Brand_diamond_img">
        </div>
        <div class="first_graphic_component">
            <img class="first_component" src="img/Raggruppa -2@2x.png" alt="higher_graphic_component">
        </div>
        <div class="third_graphic_component">
            <img class="third_component" src="img/Raggruppa -1.png" alt="lower_graphic_component">
        </div>
        <div class="second_graphic_component">
            <img class="second_component" src="img/CARD_SCREEN.png" alt="credit_card">
        </div>
        <div class="first_section_right_block">
            <h2>investi</h2>
            <h3>su te stesso</h3>
            <h5>L&#39;unica carta di credito che trasforma buone azioni in denaro</h5>
            <button>Scopri di più</button>
        </div>
    </div>
    <div class="large_wrapper">
        <div class="first_right_icon">
            <img class="upper_arrow" src="img/Raggruppa 331@2x.png" alt="upper_arrow_icon">
        </div>
    </div>
</section>
<section class="second_section">
    <div class="right_auto_wrapper">
        <div class="second_section_left_block">
            <div class="higher_left_block">
                <div class="higher_left_specific">
                    <img class="brand_actions" src="img/Componente 6 – 1.png" alt="img_banco_buone_azioni">
                </div>
                <div class="higher_left_specific">
                    <h3>La prima carta di credito</h3>
                </div>
                <div class="higher_left_specific">
                    <h4>Che trasforma le tue buone azioni in denaro per i tuoi progetti</h4>
                </div>
            </div>
            <div class="lower_left_block">
                <div class="lower_left_specific">
                    <img src="img/Raggruppa 324@2x.png" alt="">
                    <h4>Sicura</h4>
                    <h3>Testata</h3>
                </div>
                <div class="lower_left_specific">
                    <img src="img/Raggruppa 325@2x.png" alt="">
                    <h4>Veloce</h4>
                    <h3>Accredito instantaneo</h3>
                </div>
                <div class="lower_left_specific">
                    <img src="img/Raggruppa 326@2x.png" alt="">
                    <h4>Conveniente</h4>
                    <h3>Punti premio</h3>
                </div>
            </div>
        </div>
        <div class="second_section_right_block">
            <img src="img/pexels-cut-andrea-piacquadio-3823489@2x.png" alt="Picture_of_grandpa">
        </div>
    </div>
</section>
<section class="third_section">
    <div class="third_section_container relative">
        <h2>quanto sei buono&#63;</h2>
        <h4>le carte</h4>
        <div class="green_block">
            <div class="third_section_main_block">
                <img class="diamond_img" src="img/Componente 7 – 1.png" alt="diamond">
                <a class="arrow_left" href="#"><img src="img/Tracciato 79@2x.png" alt=""></a>
                <div class="box_card_big">
                    <img class="card_big" src="img/8f98b17a63dab87ff1e860939812d903.png" alt="card">
                </div>
                <div class="box_card_medium">
                    <img src="img/8f98b17a63dab87ff1e860939812d903.png" alt="card">
                </div>
                <div class="box_card_small">
                    <img src="img/8f98b17a63dab87ff1e860939812d903.png" alt="card">
                </div>
                <a class="arrow_right" href="#"><img src="img/Tracciato 80@2x.png" alt=""></a>
                <img class="angle" src="img/Tracciato 88.png" alt="">
                <img class="angle_dark" src="img/Tracciato 89.png" alt="">
            </div>
            <div class="third_section_inside_block">
                <h2>f</h2>
                <h3>Flawless card</h3>
                <h5>Si ricarica ad ogni tua buona azione</h5>
                <h5>Ottima per i tuoi acquisti online</h5>
                <h5>Facile da usare grazie alla BBA App</h5>
            </div>
        </div>
    </div>
</section>
<section class="fourth_section">
    <div class="lower_wrapper">
        <div class="form_block">
            <h1>Scopri<br>la tua carta</h1>
            <h5>Compila il form e riceverai per email il link al questionario alla fine del quale riceverai un brochure con tutti i dettagli della tua carta BBA</h5>
            <label for="email">&#42;Campo obbligatorio</label>
            <input type="text" class="form_input" id="nome" name="nome" required minlength="6" maxlength="20" placeholder="Inserisci il tuo nome" value="{{old("name")}}">
            <label for="cognome">&#42;Campo obbligatorio</label>
            <input type="text" class="form_input" id="cognome" name="cognome" required minlength="6" maxlength="30" placeholder="Inserisci il tuo cognome" value="{{old("cognome")}}">
            <label for="email">&#42;Campo obbligatorio</label>
            <input id="last_input" type="text" class="form_input" id="email" name="email" required minlength="15" maxlength="30" placeholder="Inserisci l'email" value="{{old("email")}}">
            <button>Invia</button>
        </div>
    </div>
</section>
@endsection