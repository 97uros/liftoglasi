<?php get_header(); ?>

<?php echo get_template_part('template-parts/hero'); ?>

<section class="info">
  <div class="container">
    <div class="row">
     <?php 
      $image = get_field('image');
      $text = get_field('text');
      $video = get_field('video');
      ?>
      <div class="col-lg-6 info-left" data-aos="fade-right">
        <img src="<?php echo $image['url']; ?>" class="info-img" alt="...">
      </div>
      <div class="col-lg-6 info-right" data-aos="fade-left">
        <p><?php echo $text; ?></p>
        <hr>
        <?php echo $video; ?>
      </div>
    </div>
  </div>
</section>

<div class="container">
  <hr>
</div>

<?php echo get_template_part('template-parts/benefits'); ?>

<div class="container">
  <hr>
</div>

<section class="info__bottom">
  <div class="container">
    <div class="row">
      <!-- Left Column -->
      <div class="col-md-6" data-aos="fade-up">
        <div class="info__direct-marketing">
          <div>
            <h2>Direktni marketing</h2>
          </div>
          <section itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
            <blockquote>
              <p>Ako razmišljate o <strong>direktnom marketingu</strong> ne razmišljajte o jednokratnoj podeli vašeg reklamnog materijala. Zahvaljujući potpisanim ugovorima sa predsednicima skupština stanara vašoj ponudi je obezbeđeno mesto na kojem će stalno biti dostupna, bez bojazni da bude odbačena i završi kao neželjena pošta.</p>
            </blockquote>
          </section>
        </div>
        <div>
          <h2>Marketing agencija Lift oglasi</h2>
        </div>
        <section itemscope="itemscope" itemtype="https://schema.org/CreativeWork">
          <p>Naša višegodišnja poslovna praksa omogućila nam je da vam pružimo maksimalnu uslugu i da vas na najefikasniji način dovedemo do željenih rezultata.</p>
          <ul>
            <li>SA SVIM ZGRADAMA U NAŠOJ PONUDI IMAMO DEFINISAN UGOVOR O POSLOVNOJ SARADNJI</li>
            <li>VIŠE OD 95% NAŠIH REKLAMNIH PANOA NALAZI SE ODMAH DO KONTROLNE TABLE</li>
            <li>SA PREDNJE STRANE VAŠ OGLASNI MATERIJAL ZAŠTIĆEN JE PROVIDNOM ANTIREFLEKS FOLIJOM</li>
            <li>ŠTAMPU RADIMO NA 300g KUNSTDRUK PAPIRU I DIGITALNOM ŠTAMPAČU POSLEDNJE GENERACIJE</li>
          </ul>
        </section>
        <hr>
        <section class="numbers text-start">
          <div class="container">
            <h2 class="numbers__heading" data-aos="fade-right">Trenutno u brojkama</h2>
            <div class="row">
              <div class="col-12">
                <div class="counter row" data-aos="fade-right">
                  <i class="col-2 counter__icon bi bi-person-plus-fill"></i>
                  <div class="col-10">
                    <h2 class="counter__title" data-count="100000">0</h2>
                    <p class="counter__text ">Više od 100.000 stanara i njihovih posetilaca gleda vaše reklame.</p>
                  </div>
                </div>
              </div>
              <hr>
              <div class="col-12">
                <div class="counter row" data-aos="fade-down">
                  <i class="col-2 counter__icon bi bi-person-standing"></i>
                  <div class="col-10">
                    <h2 class="counter__title" data-count="200000">0</h2>
                    <p class="counter__text ">Više od 200.000 dnevnih vožnji liftom od strane stanara.</p>
                  </div>
                </div>
              </div>
              <hr>
              <div class="col-12">
                <div class="counter row" data-aos="fade-left">
                  <i class="col-2 counter__icon bi bi-chevron-compact-up"></i>
                  <div class="col-10">
                    <h2 class="counter__title" data-count="73000000">0</h2>
                    <p class="counter__text ">Više od 73 000 000 godišnjih vožnji liftom.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!-- Right Column -->
      <div class="col-md-6">
        <div>
          <h2 data-aos="fade-left">Istraživanje u procentima</h2>
        </div>
        <div class="progress mb-4" data-aos="fade-left">
          <div class="progress-bar" role="progressbar" style="width: 84%;" aria-valuenow="84" aria-valuemin="0" aria-valuemax="100">
            <div class="progressbar-title-wrap">
              <div><span class="progressbar-char" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span></div>
              <div>PRIMEĆENOST</div>
              <div>84%</div>
            </div>
          </div>
        </div>
        <div class="progress mb-4" data-aos="fade-left">
          <div class="progress-bar" role="progressbar" style="width: 96%;" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100">
            <div class="progressbar-title-wrap">
              <div><span class="progressbar-char" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span></div>
              <div>SEĆANJE</div>
              <div>96%</div>
            </div>
          </div>
        </div>
        <div class="progress mb-4" data-aos="fade-left">
          <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
            <div class="progressbar-title-wrap">
              <div><span class="progressbar-char" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span></div>
              <div>POZITIVAN STAV</div>
              <div>85%</div>
            </div>
          </div>
        </div>
        <div class="progress mb-4" data-aos="fade-left">
          <div class="progress-bar" role="progressbar" style="width: 82%;" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100">
            <div class="progressbar-title-wrap">
              <div><span class="progressbar-char" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello"></span></div>
              <div>INTERESANTNO</div>
              <div>82%</div>
            </div>
          </div>
        </div>
        <div>
          <p>Istraživanje sprovedeno u Kanadi od strane Marketing sektora Ryerson Polytehnical Instituta i Capilano koledža iz Vancouvera pokazalo je da:</p>
        </div>
        <div class="about__iconlist">
          <ul class="steps-container">
            <li class="step">
              <div class="step-icon" data-aos="fade-right"><i class="fa-solid fa-eye"></i></div>
              <div class="step-content">
                <div class="step-title" data-aos="fade-left">NAJVIŠI STEPEN PRIMEĆENOSTI!</div>
                <div class="step-description" data-aos="fade-left">
                  Oglašavanje u liftovima osigurava daleko najviši stepen primećenosti
                </div>
              </div>
            </li>
            <li class="step">
              <div class="step-icon" data-aos="fade-right"><i class="fa-solid fa-bullhorn"></i></div>
              <div class="step-content" >
                <div class="step-title" data-aos="fade-left">NAJVIŠI STEPEN MEDIJSKOG SEĆANJA!</div>
                <div class="step-description" data-aos="fade-left">
                Oglašavanje u liftovima postiže daleko najviši stepen medijskog sećanja
                </div>
              </div>
            </li>
            <li class="step">
              <div class="step-icon" data-aos="fade-right"><i class="fa-solid fa-user-check"></i></div>
              <div class="step-content">
                <div class="step-title" data-aos="fade-left">POZITIVAN STAV STANARA!</div>
                <div class="step-description" data-aos="fade-left">
                Stanari imaju vrlo pozitivan stav prema ovom načinu oglašavanja
                </div>
              </div>
            </li>
            <li class="step current">
              <div class="step-icon" data-aos="fade-right"><i class="fa-solid fa-thumbs-up"></i></div>
              <div class="step-content">
                <div class="step-title" data-aos="fade-left">INTERESANTNE REKLAME!</div>
                <div class="step-description" data-aos="fade-left">
                Stanari smatraju kako su reklame u liftovima “interesantne” za proučavanje
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>