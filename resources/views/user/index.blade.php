    @extends('user.layouts.app')
    
    @section('title', 'Kelionių advokatas')
    
    @section('content')

    <header id="header">
        <a href="#"> <img src="img/Kelioniu advokatas.jpg" alt="Logo"> </a>
        <nav class="links" id="links">
            <a class="headers-links" href="#blocks">Pildyti formą</a>
            <a class="headers-links" href="#atsiliepimai">Atsiliepimai</a>
            <a class="headers-links" href="blog.html">Blogas</a>
            <a class="headers-links" href="#kontaktai">Kontaktai</a>
            <a class="headers-links" href="https://www.facebook.com/KelioniuAdvokatas/" target="_blank">
                <i class="fab fa-facebook-square"></i>
            </a>
           
        </nav>
        <div class="mob-links">
            <a id="menu" href="#" class="icon">&#9776;</a>
            <a class="headers-links" href="https://www.facebook.com/KelioniuAdvokatas/" target="_blank">
                <i class="fa fa-facebook-official" aria-hidden="true"></i>
            </a>
        </div>
    </header>
    <div class="hero">
        <h2>Kelionės vėlavimai, nuostoliai, nesklandumai?</h2>
        <h1>Gaukite kompensaciją!</h1>
        <div class="arrows">
            <a href="#blocks" class="arrow1 fa fa-chevron-down"></a>
            <a href="#blocks" class="arrow2 fa fa-chevron-down"></a>
            <a href="#blocks" class="arrow3 fa fa-chevron-down"></a>
        </div>
    </div>
    <div class="first-grid">
        <main class="blocks" id="blocks">
            <div class="block1">
                <div class="main-images"><img src="./img/main5.jpg"></div>
                <h3>Patyrėte nuostolių kelionėje?</h3>
                <p>Trumpai aprašykite problemą ir mes su jumis susisieksime</p>
                <div class="btn" id="btn1">Rašyti</div>
            </div>
            <div class="block2">
                <div class="main-images"><img src="./img/main1.jpg"></div>
                <h3>Skrydis vėlavo ir buvo atšauktas?</h3>
                <p>Nurodykite aviakompaniją, skrydžio numerį ir mes su jumis susisieksime</p>
                <div class="btn" id="btn2">Rašyti</div>
            </div>
            <div class="block3">
                <div class="main-images"><img src="./img/main3.jpg"></div>
                <h3>Pirkote kelionę ir likote nepatenkintas?</h3>
                <p>Nurodykite kelionių agentūrą, trumpai aprašykite nesklandumus ir mes su jumis susisieksime</p>
                <div class="btn" id="btn3">Rašyti</div>
            </div>
        </main>
        <div class="modal" id="mymodal">
            <div class="modal-content">
                <span class="close_modal_window" id="close_modal_window">&times;</span>
                <div class="input-zone">
                    <form action="">
                        <p>Įveskite savo elektronino pašto adresą</p>
                        <input type="email" id="email" name="email">
                        <p>Įveskite savo telefono numerį</p>
                        <input type="tel" id="phone" name="phone" placeholder="+37012312345" pattern="+[0-9]{11}">
                        <p>Trumpai aprašykite savo problemą</p>
                        <textarea name="problems" id="" cols="30" rows="10"></textarea>
                        <input type="submit" class="btn" value="Siųsti" id="btn-sent">
                    </form>
                </div>
            </div>
        </div>
        <div class="testimonials" id="atsiliepimai">
            <div class="testimonial-head">
                <h3>Klientų atsiliepimai</h3>
            </div>
            <div class="testimonial-block" id="testimonials">
            </div>
            <div class="testim-arrows">
                <i class="fa fa-arrow-left" onclick="plusSlides(-1)"></i>
                <i class="fa fa-arrow-right" onclick="plusSlides(1)"></i>
            </div>

        </div>
        <div class="blog" id="blogas">
            <div class="blog-head">
                <h3>
                    <a href="blog.html"> "Kelionių advokato" blogas </a>
                </h3>
            </div>
            <div class="blogs_block1">
                <a href="#" class="blogs-images"> <img src="./img/blog-1.jpg"></a>
                <div class="headline-top">
                    <div class="date">2019 kovo 29</div>
                    <div class="hashtag">#Patirtis</div>
                </div>
                <a href="#" class="blogs-headline">Apkartusi kelionė autobusu į Lietuvą: Varšuvos autobusų stotyje – vežėjų smūgis</a>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A aperiam cupiditate pariatur commodi debitis tenetur illo ducimus dolores laborum. Aperiam nobis, molestiae nemo ad quibusdam animi doloribus ut quis commodi.</p>
                <a href="#" target="_blank" class="read">Skaityti toliau</a>
            </div>
            <div class="blogs_block2">
                <a href="#" class="blogs-images"> <img src="./img/blog-2.jpg"></a>
                <div class="headline-top">
                    <div class="date">2019 rugsėjo 30</div>
                    <div class="hashtag">#Patarimai #Verta žinoti</div>
                </div>
                <a href="#" target="_blank" class="blogs-headline">Nors ir labai neįdomu tai daryti, pasidomėkite savo teisėmis</a>
                <p>„Yra ne vien oro transporto, bet ir traukinių, keltų linijų, autobusų reglamentai, Europos Sąjungoje įtvirtinantys tam tikras teises, siekiant, kad keleiviai nepatirtų nepatogumų, o jeigu patiria, kad būtų bent iš dalies kompensuota nustatyta
                    tvarka“
                </p>
                <a href="#" class="read">Skaityti toliau</a>
            </div>
            <div class="blogs_block3">
                <a href="#" class="blogs-images"> <img src="./img/blog-3.jpg"></a>
                <div class="headline-top">
                    <div class="date">2020 vasario 5</div>
                    <div class="hashtag">#Patarimai #Verta žinoti</div>
                </div>
                <a href="#" target="_blank" class="blogs-headline">Kompensacija ir gyvūnams</a>
                <p>Danijos avialinijos ( DAT Danish Air Transport) išmokėjo 250 Eur kompensaciją už skrydžio atšaukimą šuniui, kuris buvo skraidinamas orlaiviu. Priežastis,- Reglamento (EB) Nr. 261/2004 nuostatose keleivis apibrėžiamas ne kaip žmogus, o
                    kaip tas, kas turi kelionės dokumentus.</p>
                <a href="#" target="_blank" class="read">Skaityti toliau</a>
            </div>
        </div>
    </div>
