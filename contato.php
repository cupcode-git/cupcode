<section id="contact-form" class="single-items text-left item-five parallaxie full-screen">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <form action="mail.php" method="POST" class="getin_form wow fadeInUp">
                  <div class="col-md-5 p-0">
                     <div class="col-md-12 col-sm-12 m-0 p-0">
                        <div class="form-group bottom45">
                           <input class="forma" name="Nome" type="name" placeholder="<?php echo $digitenome; ?>" required  alt="<?php echo $digitenome; ?>" title="<?php echo $digitenome; ?>" >
                        </div>
                     </div>
                     <div class="col-md-12 col-sm-12 m-0 p-0">
                        <div class="form-group bottom45">
                           <input class="forma" name="E-mail" type="email" placeholder="<?php echo $digiteemail; ?>" required alt="<?php echo $digiteemail; ?>" title="<?php echo $digiteemail; ?>">
                        </div>
                     </div>
                     <div class="col-md-12 col-sm-12 m-0 p-0">
                        <div class="form-group bottom45">
                           <input class="forma" name="Telefone" type="fone" placeholder="<?php echo $digitefone; ?>" alt="<?php echo $digitefone; ?>" title="<?php echo $digitefone; ?>">
                        </div>
                     </div>
                  </div>
                     <div class="col-md-7 p-0">
                        <div class="col-md-12 col-sm-12">
                           <div class="form-group bottom45">
                              <textarea type="message" class="forma" name="Mensagem" placeholder="<?php echo $digitemensagem; ?>" alt="<?php echo $digitemensagem; ?>" title="<?php echo $digitemensagem; ?>"></textarea>
                           </div>
                        </div>
                        <div class="col-sm-12 text-right m-0 p-0">
                           <button id="form_submit" class="button defaulthole2" alt="<?php echo $btnenviar; ?>" title="<?php echo $btnenviar; ?>"><i class="fas fa-paper-plane"></i></button>
                        </div>
                     </div>
                     <div id="alertaEmail" class="alert-success"> 
                      
                      </div>
               </form>
            </div>
               <!-- aqui esta um espaço entre as colunas-->
               <div class="col-md-2">
                  <div class="swiper-slide">
                  </div>
               </div>
               <div class="row col-md-4 mobile-p">
                  <div class="swiper-slide">
                        <h2 class="bottom20 item-titles wow fadeInLeft ccdeep"><?php echo $contato; ?></h2>
                        <h3 class="bottom15"><a class="bottom20 item-titles text-center wow fadeInLeft ccdeep"  href="<?php echo $fone_link; ?>" alt="<?php echo $ligar; ?>" title="<?php echo $ligar; ?>"><?php echo $ccfone; ?></a></h3>
                        <h3><a class="bottom20 item-titles wow fadeInLeft ccdeep" href="mailto:<?php echo $contatoemail; ?>" alt="<?php echo $enviaremail; ?>" title="<?php echo $enviaremail; ?>"><?php echo $contatoemail; ?></a></h3>
                  </div>

                <a href="<?php echo $mensagemwhatsapp_link; ?>" target="_blank" class="button defaulthole mgr-10 mgb-10 top20"><i class="fab fa-whatsapp" aria-hidden="true"></i> <?php echo $mensagemwhatsapp; ?></a>
                <a href="<?php echo $mensagemfacebook_link; ?>" target="_blank" class="button defaulthole mgr-10 top10"><i class="fab fa-facebook-messenger" aria-hidden="true"></i> <?php echo $mensagemfacebook; ?></a>
               </div>
            </div>
      </div>
   </section>
   <section class="single-items item-teen2 parallaxie full-screen" id="parceiros">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                <div class="intro-text center">
                    <h2 class="heading_space ccdark item-titles cc-light text-center wow fadeInLeft"><?php echo $parceiros_titulo; ?>nossos parceiros</h2>
                </div>
            </div>
            <div class="col-md-2 col-sm-2"></div>
        </div>
        <div id="logo-transparent" class="swiper-container top50 heading_space hover-gray">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros1_link; ?>images/parceiros-a50-click.png" alt="<?php echo $parceiros1; ?>grupo a50 de comunicação" title="<?php echo $parceiros1; ?>grupo a50 de comunicação">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros2_link; ?>-a50.png" alt="<?php echo $parceiros2; ?>grupo a50 de comunicação" title="<?php echo $parceiros2; ?>grupo a50 de comunicação">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros3_link; ?>-barbearia-visconde.png" alt="<?php echo $parceiros3; ?>barbearia visconde" title="<?php echo $parceiros3; ?>barbearia visconde">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros4_link; ?>-galeria-glaser.png" alt="<?php echo $parceiros4; ?>barbearia visconde glaser" title="<?php echo $parceiros4; ?>barbearia visconde glaser">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros5_link; ?>-lrmck.png" alt="<?php echo $parceiros5; ?>[[ L R M c K ]]" title="<?php echo $parceiros5; ?>[[ L R M c K ]]">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros6_link; ?>-vinicius-mottin.png" alt="<?php echo $parceiros6; ?>vinicius mottin fotografias" title="<?php echo $parceiros6; ?>vinicius mottin fotografias">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros7_link; ?>-a50tv.png" alt="<?php echo $parceiros7; ?>grupo a50 de comunicação" title="<?php echo $parceiros7; ?>grupo a50 de comunicação">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros8_link; ?>-wec.png" alt="<?php echo $parceiros8; ?>wec - world entertainment corporation" title="<?php echo $parceiros8; ?>wec - world entertainment corporation">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros9_link; ?>-paulinha-fotografias.png" alt="<?php echo $parceiros9; ?>paulina fotografias" title="<?php echo $parceiros9; ?>paulina fotografias">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros10_link; ?>-bar-do-silval.png" alt="<?php echo $parceiros10; ?>bar do sival" title="<?php echo $parceiros10; ?>bar do sival">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros11_link; ?>-rabo-de-galo.png" alt="<?php echo $parceiros11; ?>rabo de galo pomadas" title="<?php echo $parceiros11; ?>rabo de galo pomadas">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros12_link; ?>-tattoo-zasso.png" alt="<?php echo $parceiros12; ?>studio tattoozasso" title="<?php echo $parceiros12; ?>studio tattoozasso">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros13_link; ?>-uol.png" alt="<?php echo $parceiros13; ?>uol - universo online" title="<?php echo $parceiros13; ?>uol - universo online">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros14_link; ?>-elitronicos.png" alt="<?php echo $parceiros14; ?>elitrônicos" title="<?php echo $parceiros14; ?>elitrônicos">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros15_link; ?>-howstuffworks.png" alt="<?php echo $parceiros15; ?>howstuffworks" title="<?php echo $parceiros15; ?>howstuffworks">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros16_link; ?>-sita.png" alt="<?php echo $parceiros16; ?>sita aero" title="<?php echo $parceiros16; ?>sita aero">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros17_link; ?>-oboticario.png" alt="<?php echo $parceiros17; ?>o boticário" title="<?php echo $parceiros17; ?>o boticário">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros18_link; ?>-cinq.png" alt="<?php echo $parceiros18; ?>cinq technologies" title="<?php echo $parceiros18; ?>cinq technologies">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros19_link; ?>-renault.png" alt="<?php echo $parceiros19; ?>renault" title="<?php echo $parceiros19; ?>renault">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros20_link; ?>-diego-tragel.png" alt="<?php echo $parceiros20; ?>diego tragel" title="<?php echo $parceiros20; ?>diego tragel">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>