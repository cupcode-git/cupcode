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
                    <h2 class="heading_space ccdark item-titles cc-light text-center wow fadeInLeft"><?php echo $parceiros_titulo; ?></h2>
                </div>
            </div>
            <div class="col-md-2 col-sm-2"></div>
        </div>
        <div id="logo-transparent" class="swiper-container top50 heading_space hover-gray">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros1_link; ?>" alt="<?php echo $parceiros1; ?>" title="<?php echo $parceiros1; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros2_link; ?>" alt="<?php echo $parceiros2; ?>" title="<?php echo $parceiros2; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros3_link; ?>" alt="<?php echo $parceiros3; ?>" title="<?php echo $parceiros3; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros4_link; ?>" alt="<?php echo $parceiros4; ?>" title="<?php echo $parceiros4; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros5_link; ?>" alt="<?php echo $parceiros5; ?>" title="<?php echo $parceiros5; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros6_link; ?>" alt="<?php echo $parceiros6; ?>" title="<?php echo $parceiros6; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros7_link; ?>" alt="<?php echo $parceiros7; ?>" title="<?php echo $parceiros7; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros8_link; ?>" alt="<?php echo $parceiros8; ?>" title="<?php echo $parceiros8; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros9_link; ?>" alt="<?php echo $parceiros9; ?>" title="<?php echo $parceiros9; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros10_link; ?>" alt="<?php echo $parceiros10; ?>" title="<?php echo $parceiros10; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros11_link; ?>" alt="<?php echo $parceiros11; ?>" title="<?php echo $parceiros11; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros12_link; ?>" alt="<?php echo $parceiros12; ?>" title="<?php echo $parceiros12; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros13_link; ?>" alt="<?php echo $parceiros13; ?>" title="<?php echo $parceiros13; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros14_link; ?>" alt="<?php echo $parceiros14; ?>" title="<?php echo $parceiros14; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros15_link; ?>" alt="<?php echo $parceiros15; ?>" title="<?php echo $parceiros15; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros16_link; ?>" alt="<?php echo $parceiros16; ?>" title="<?php echo $parceiros16; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros17_link; ?>" alt="<?php echo $parceiros17; ?>" title="<?php echo $parceiros17; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros18_link; ?>" alt="<?php echo $parceiros18; ?>" title="<?php echo $parceiros18; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros19_link; ?>" alt="<?php echo $parceiros19; ?>" title="<?php echo $parceiros19; ?>">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="logo-item">
                        <img src="<?php echo $parceiros20_link; ?>" alt="<?php echo $parceiros20; ?>" title="<?php echo $parceiros20; ?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>