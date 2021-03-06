<?php 
   define('HOME','https://localhost/_controle/themes/Igreja-IBAL2/');
   $p_title = "Site da IBAL-2 | Igreja Batista em Arthur Lundgren II";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $p_title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.png"/>
    <link rel="stylesheet" href="css/Boot.css"/>
    <link rel="stylesheet" href="css/bbox.css"/>
    
</head>
<body>
    
    <header class="mtopo container">
        <div class="content">
            
            <div class="mlogo">
                <a href="#" alt="logo">
                    <img src="img/ibal.png" alt="logo" />
                </a>
            </div>
            
            <div class="btn-mobilie jbtn"></div>
            
            
            <ul class="menutopo jmenu">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Cultos ao Vivo</a></li>
                <li><a href="#">Contato</a></li>
                <li class="pesquisa">
                    <form action="" name="" method="post">
                        <input class="s" type="search" name="s" placeholder="Buscar" />
                        <input class="b" type="submit" value="" />
                    </form>
                </li>
            </ul>
            
            <div class="clear"></div>
        </div>
    </header>
    
    <main class="winer container">
        <section class="slide container">
            
            <div class="slide_controle">
                <div class="slide_nav back">&lt;</div>
                <div class="slide_nav go">&gt;</div>                
            </div>
            
            <article class="slide_item first">
                <a href="#ver">
                    <picture>
                        <source media="(min-width: 1366px)" srcset="tim.php?src=slide/01-slide.jpg&w=1600&h=545"/>
                        <source media="(min-width: 1024px)" srcset="tim.php?src=slide/01-slide.jpg&w=1280&h=600"/>
                        <source media="(min-width: 768px)" srcset="tim.php?src=slide/01-slide.jpg&w=960&h=420"/>
                        <source media="(min-width: 640px)" srcset="tim.php?src=slide/01-slide.jpg&w=960&h=420"/>
                        <source media="(min-width: 480px)" srcset="tim.php?src=slide/01-slide.jpg&w=480&h=380"/>
                        <source media="(min-width: 1px)" srcset="tim.php?src=slide/01-slide.jpg&w=480&h=380"/>
                        <img src="slide/01-slide.jpg" alt="slide_img_01" />
                    </picture>
                </a>
                <div class="slide_desc">
                    <h1><a href="#ver" alt="slide_img_01">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                    <p> Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent A ordem dos tratores não altera o pão duris</p>
                </div>
            </article>
            
            <article class="slide_item">
                <a href="#ver">
                    <picture>
                        <source media="(min-width: 1366px)" srcset="tim.php?src=slide/04-slide.jpg&w=1600&h=545"/>
                        <source media="(min-width: 1024px)" srcset="tim.php?src=slide/04-slide.jpg&w=1280&h=600"/>
                        <source media="(min-width: 768px)" srcset="tim.php?src=slide/04-slide.jpg&w=960&h=420"/>
                        <source media="(min-width: 640px)" srcset="tim.php?src=slide/04-slide.jpg&w=960&h=420"/>
                        <source media="(min-width: 480px)" srcset="tim.php?src=slide/04-slide.jpg&w=480&h=380"/>
                        <source media="(min-width: 1px)" srcset="tim.php?src=slide/04-slide.jpg&w=480&h=380"/>
                        <img src="slide/04-slide.jpg" alt="slide_img_02" />
                    </picture>
                </a>
                <div class="slide_desc">
                    <h1><a href="#ver" alt="slide_img_02">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                    <p> Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent A ordem dos tratores não altera o pão duris</p>
                </div>
            </article>
            
            <article class="slide_item">
                <a href="#ver">
                    <picture>
                        <source media="(min-width: 1366px)" srcset="tim.php?src=slide/03-slide.jpg&w=1600&h=545"/>
                        <source media="(min-width: 1024px)" srcset="tim.php?src=slide/03-slide.jpg&w=1280&h=600"/>
                        <source media="(min-width: 768px)" srcset="tim.php?src=slide/03-slide.jpg&w=960&h=420"/>
                        <source media="(min-width: 640px)" srcset="tim.php?src=slide/03-slide.jpg&w=960&h=420"/>
                        <source media="(min-width: 480px)" srcset="tim.php?src=slide/03-slide.jpg&w=480&h=380"/>
                        <source media="(min-width: 1px)" srcset="tim.php?src=slide/03-slide.jpg&w=480&h=380"/>
                        <img src="slide/03-slide.jpg" alt="slide_img_03" />
                    </picture>
                </a>
                <div class="slide_desc">
                    <h1><a href="#ver" alt="slide_img_03">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                    <p> Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent A ordem dos tratores não altera o pão duris</p>
                </div>
            </article>
            
        </section><!--fim do slide-->
        
        <section class="devocionais container">
            <div class="content">
                
                <div class="dev">
                    <h1>Devocionais:</h1>

                    <article class="devocionais_item">
                        <a href="#ver">
                            <picture>
                                <source media="(min-width: 1024px)" srcset="tim.php?src=slide/01-img.jpg&w=w=1280&h=600"/>
                                <source media="(min-width: 780px)" srcset="tim.php?src=slide/01-img.jpg&w=w=1200&h=600"/>
                                <source media="(min-width: 768px)" srcset="tim.php?src=slide/01-img.jpg&w=w=960&h=420"/>
                                <source media="(min-width: 640px)" srcset="tim.php?src=slide/01-img.jpg&w=w=960&h=420"/>
                                <source media="(min-width: 480px)" srcset="tim.php?src=slide/01-img.jpg&w=480&h=380"/>
                                <source media="(min-width: 1px)" srcset="tim.php?src=slide/01-img.jpg&w=480&h=380"/>
                                <img src="slide/01-img.jpg" alt="devocionais_img_01" />
                            </picture>
                        </a>
                        <div class="devocionais_desc">
                            <h1><a href="#ver" alt="devocionais_img_01">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                            <time datetime="2017-04-22">22/04/2017 às 13:35hs</time>
                    </article>
                </div>
                
                <div class="noti">
                    <h1 class="headh">Noticias:</h1>
                    
                    <article class="noticias_item">
                        <a href="#ver">
                            <picture>
                                <source media="(min-width: 1px)" srcset="tim.php?src=slide/03-img.jpg&w=600&h=380"/>
                                <img src="slide/03-img.jpg" alt="noticias_img_01" />
                            </picture>
                        </a>
                        <div class="noticias_desc">
                            <h1><a href="#ver" alt="noticias_img_01">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                            <p> Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent A ordem dos tratores não altera o pão duris</p>
                            <time datetime="2017-04-22">22/04/2017 às 13:35hs</time>
                        </div>
                    </article>
                    
                    <div class="clear"></div>

                    <article class="noticias_item">
                        <a href="#ver">
                            <picture>
                                <source media="(min-width: 1px)" srcset="tim.php?src=slide/04-img.jpg&w=600&h=380"/>
                                <img src="slide/04-img.jpg" alt="noticias_img_02" />
                            </picture>
                        </a>
                        <div class="noticias_desc">
                            <h1><a href="#ver" alt="noticias_img_02">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                            <p> Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent A ordem dos tratores não altera o pão duris</p>
                            <time datetime="2017-04-22">22/04/2017 às 13:35hs</time>
                        </div>
                    </article>
                </div>
                        
                <div class="clear"></div>       
            </div>
        </section><!--fim de devocionais e noticias-->
        
        <section class="more_conteudos container">
            <div class="content">
                <article class="conteudo_item">
                    <a href="#ver">
                        <picture>
                            <source media="(min-width: 1px)" srcset="tim.php?src=slide/02-img.jpg&w=700&h=400"/>
                            <img src="slide/02-img.jpg" alt="noticias_img_02" />
                        </picture>
                    </a>
                    <div class="conteudo_desc">
                        <h1><a href="#ver" alt="conteudo_img_01">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                        <p> Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent A ordem dos tratores não altera o pão duris</p>
                        <time datetime="2017-04-22">22/04/2017 às 13:35hs</time>
                    </div>
                </article>
                
                <article class="conteudo_item">
                    <a href="#ver">
                        <picture>
                            <source media="(min-width: 1px)" srcset="tim.php?src=slide/08-img.jpg&w=700&h=400"/>
                            <img src="slide/08-img.jpg" alt="noticias_img_02" />
                        </picture>
                    </a>
                    <div class="conteudo_desc">
                        <h1><a href="#ver" alt="conteudo_img_02">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                        <p> Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent A ordem dos tratores não altera o pão duris</p>
                        <time datetime="2017-04-22">22/04/2017 às 13:35hs</time>
                    </div>
                </article>
                
                <article class="conteudo_item">
                    <a href="#ver">
                        <picture>
                            <source media="(min-width: 1px)" srcset="tim.php?src=slide/06-img.jpg&w=700&h=400"/>
                            <img src="slide/06-img.jpg" alt="noticias_img_02" />
                        </picture>
                    </a>
                    <div class="conteudo_desc">
                        <h1><a href="#ver" alt="conteudo_img_03">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                        <p> Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent A ordem dos tratores não altera o pão duris</p>
                        <time datetime="2017-04-22">22/04/2017 às 13:35hs</time>
                    </div>
                </article>
                
                <article class="conteudo_item">
                    <a href="#ver">
                        <picture>
                            <source media="(min-width: 1px)" srcset="tim.php?src=slide/07-img.jpg&w=700&h=400"/>
                            <img src="slide/07-img.jpg" alt="noticias_img_02" />
                        </picture>
                    </a>
                    <div class="conteudo_desc">
                        <h1><a href="#ver" alt="conteudo_img_04">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                        <p> Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent A ordem dos tratores não altera o pão duris</p>
                        <time datetime="2017-04-22">22/04/2017 às 13:35hs</time>
                    </div>
                </article>
                <div class="clear"></div>
            </div>
        </section><!--fim de more_conteudos-->
        
        <section class="reflexao container">
            <div class="content">
                
                <div class="reff">
                    <header>
                        <h1>Um Momento de Reflexão:</h1>
                    </header>
                    
                    <article class="reflexao_item">
                        <a href="#ver">
                            <picture>
                                <source media="(min-width: 1px)" srcset="tim.php?src=slide/05-img.jpg&w=700&h=400"/>
                                <img src="slide/05-img.jpg" alt="noticias_img_02" />
                            </picture>
                        </a>
                        <div class="reflexao_desc">
                            <h1><a href="#ver" alt="reflexao_img_01">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                            <time datetime="2017-04-22">22/04/2017 às 13:35hs</time>
                    </article>
                </div>
                
                <div class="pedir">
                    <header class="peHead">
                        <h1>Pedidos de Oração:</h1>
                    </header>
                    
                    <article class="oracao_item">
                        <a href="#ver">
                            <picture>
                                <source media="(min-width: 1px)" srcset="tim.php?src=slide/02-slide.jpg&w=700&h=400"/>
                                <img src="slide/02-slide.jpg" alt="noticias_img_02" />
                            </picture>
                        </a>
                        <div class="oracao_desc">
                            <h1><a href="#ver" alt="oracao_img_01">Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</a></h1>
                            <p> Suco de cevadiss, é um leite divinis, qui tem lupuliz, matis, aguis e fermentis. Viva Forevis aptent taciti sociosqu ad litora torquent A ordem dos tratores não altera o pão duris</p>
                            <time datetime="2017-04-22">22/04/2017 às 13:35hs</time>
                        </div>
                    </article>
                    
                    <div class="clear"></div>

                    <div class="aniver">
                        <header>
                            <h1>Aniversariantes do mes de Abril:</h1>
                            <p>Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</p>
                        </header>
                        <article class="img_aniver">
                            <li>
                                <span class="icon-aniver">18/04</span>
                                <a href="#ver" alt="aniver_img_01">
                                    <img src="img/01.jpg" alt="aniver_img_01" />
                                </a>
                                <p>Luciana Ferreira</p>
                            </li>
                        </article>
                        
                        <article class="img_aniver">
                            <li>
                                <span class="icon-aniver">10/04</span>
                                <a href="#ver" alt="aniver_img_02">
                                    <img src="img/02.jpg" alt="aniver_img_02" />
                                </a>
                                <p>Monica Ferreira</p>
                            </li>
                        </article>
                        
                        <div class="clear"></div>
                        
                        <article class="img_aniver">
                            <li>
                                <span class="icon-aniver">22/04</span>
                                <a href="#ver" alt="aniver_img_03">
                                    <img src="img/03.jpg" alt="aniver_img_03" />
                                </a>
                                <p>Rosineide Olga</p>
                            </li>
                        </article>
                    </div>
                    
                </div>
                        
                <div class="clear"></div>       
            </div>
        </section><!--fim de devocionais e noticias-->
        
        <div class="clear"></div> 
        
        <div class="notificacao container">
            <div class="content">
                <span class="icon-new"></span>
                <h1>Mussum Ipsum, cacilds vidis litro abertis. Delegadis gente finis, bibendum egestas augue arcu ut est.</h1>
                <form action="">
                    <input type="email" placeholder="Informe o seu E-mail:" />
                    <input type="submit" value="Assinar" />
                </form>
                <div class="clear"></div>
            </div>
        </div>
        
    </main>
    
    <footer class="foot container">
        <div class="content">
            <div class="mapa colun-3">
                <h1>Nosso Endereço:</h1>
                <p>R. La de baixo 175 Qd 10
                Proximo ao terminal de onibus de Arthur Lundgreen 2
                CEP:555-5555
                Fone: (81) 99999-9999
                </p>
            </div>
            
            <div class="login colun-3">
                <a href="#ver" ><img src="img/igConect.png" alt="login_img" /></a>
            </div>
            
            <div class="social colun-3">
                <a href="#ver" title="facebock/nomedaigreja" target="_blank" class="icon-face">facebook</a>
                <a href="#ver" title="youtube/nomedaigreja" target="_blank" class="icon-you">youtube</a>
                <a href="#ver" title="instagran/nomedaigreja" target="_blank" class="icon-insta">instagran</a>
            </div>
        </div>
    </footer>

<script src="js/jquery.js"></script> 
<script src="js/sistemjs.js"></script> 
</body>
</html>