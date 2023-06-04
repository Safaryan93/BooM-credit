<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Լրացրեք հայտը</title>
    <link rel="icon" href="img/Logo_icon.png">
    <link rel="stylesheet" href="css/fill_blanks_page_plus_mediarr.css">
</head>
<body>
<section class="container">
    <header>
        <section class="header_section">
            <div class="wrapper">
                <div class="header_block">
                    <div class="header_logo_block">
                        <a href="/index.html">
                            <img class="logo" src="img/png.png" alt="">
                        </a>
                    </div>
                    <div class="header_addr_call_block">
                        <div class="call_back_block">
                                <span class="call_back_block_num" style="align-items: center;">
                                    <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.19115 18.4049C3.86287 18.4049 5.5043 18.1434 7.05976 17.6294C7.82195 17.3694 8.75892 17.6079 9.2241 18.0857L12.2943 20.4033C15.8548 18.5027 18.048 16.3102 19.9227 12.7764L17.6732 9.78622C17.0888 9.20258 16.8792 8.35001 17.1303 7.55006C17.6465 5.98642 17.9088 4.34578 17.9088 2.67335C17.9087 1.46518 18.8916 0.482269 20.0997 0.482269H25.1142C26.3223 0.482269 27.3052 1.46518 27.3052 2.67328C27.3052 16.5213 16.0392 27.7872 2.19115 27.7872C0.983051 27.7872 0.000141144 26.8043 0.000141144 25.5962V20.5958C0.000213623 19.3878 0.983122 18.4049 2.19115 18.4049Z" fill="black"/>
                                        </svg>
                                    <div class="number_phone">
                                        <span style="display: flex; flex-direction: column;">
                                            <a href="tel:+374 00 000 000" class="num_bold">+374 00 000 000</a>
                                            <a href="tel:+374 00 000 000" class="num_bold">+374 00 000 000</a>
                                        </span>
                                        <p class="num_norm">Զանգահարել</p>
                                    </div>
                                </span>
                        </div>
                    </div>
                    <div class="time_sale_block">
                        <div class="time_section">
                            <span>մնացել է</span>
                            <div id="worked">00:00</div>
                        </div>
                        <div class="sale_section">
                            <p>ՄԻՆՈՒՍ 4% ԳՈՒՄԱՐԻ
                                ՏՈԿՈՍԱԴՐՈՒՅՔԻՑ!</p>
                            <span>Հասցրու լրացնել հայտը</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>
    <main>
        <section class="fill_blanks_section">
            <div class="wrapper">
                <div class="fill_blanks_block">
                    <div class="fill_blanks_form">
                        <h2 class="fill_blanks_form_title">ԼՐԱՑՐԵՔ ՀԱՅՏԸ</h2>
                        <p class="fill_blanks_form_phone">Լրացրեք հայտը կամ զանգահարեք <a href="tel:+374 00 000 000">+374 00 000 000</a>, <a href="tel:+374 00 000 000">+374 00 000 000</a></p>
                        <form action="mail.php" method="post" class="form_fill_blanks">
                            <?php
                            $gumar=$_POST['gumar'];
                            ?>
                            <input type="text" name="gumar" style="display: none" value="<?php echo $gumar; ?>">
                            <div class="inp_property">
                                <div class="lab_inp">
                                    <label for="name" class="inp_name">Ձեր անունը<span>*</span></label>
                                    <input class="inp_form" type="text" id="name" name="name"  />
                                </div>
                                <div class="lab_inp">
                                    <label for="phone" class="inp_name">Հեռախոսահմար<span>*</span></label>
                                    <input class="inp_form" type="tel" id="phone" name="phone" >
                                </div>
                                <div class="lab_inp">
                                    <label for="email" class="inp_name">Ձեր էլեկտրոնային հասցեն</label>
                                    <input name="email" class="inp_form" type="text" id="email"  size="">
                                </div>
                            </div>
                            <div class="radio_block">
                                <div class="radio_block_title">
                                    <span class="inp_name">Գրանցված աշխատող<span>*</span></span>
                                    <input type="radio" id="yes" name="yes_no_one" value="yes">
                                    <label class="right_label" for="yes">Այո</label>
                                    <input type="radio" id="no" name="yes_no_one" value="no">
                                    <label for="no">Ոչ</label>
                                </div>
                                <div class="radio_block_title">
                                    <span class="inp_name">Սև ցուցակ<span>*</span></span>
                                    <input type="radio" id="yes" name="yes_no_two" value="yes">
                                    <label class="right_label" for="yes">Այո</label>
                                    <input type="radio" id="no" name="yes_no_two" value="no">
                                    <label for="no">Ոչ</label>
                                </div>
                            </div>
                            <div class="btn_block">
                                <div class="btn_info">
                                    <input type="checkbox" class="custom-checkbox" id="checkbox" name="checkbox" value="yes">
                                    <span class="btn_info_text">*նշելով Դուք համաձայնում եք անձնական տվյալների մշակմանը և համաձայն եք գաղտնիության քաղաքականությանը:</span>
                                </div>
                                <input type="submit" value="Ստանալ գումարը">
                            </div>
                        </form>
                    </div>
                    <div class="fill_blanks_info_block">
                        <p><<ՀՀ առևտրաֆինանսական բրոքերների միություն>> ՀԿ-ն հանդիսանում է Հայաստանի առաջատար կազմակերպություններից մեկը ՝ սպասարկելով ավելի քան 100000 հաճախորդի Հայաստանում։ Մենք հանդիսանում ենք ՀՀ-ի առաջատար կազմակերպություններից մեկը՝ տրամադրելով գումար և օգնելով շատերին։ Կազմակերպությունը զբաղվում է գումարի տրամադրմամբ։ Աշխատում է շատ արագ և պարզ եղանակով։ Մեր կյանքի տեմպը փոխվել է ժամանակի ընթացքում և այժմ մենք պահանջում ենք ոչ միայն նոր մոտեցում ծառայությունների մատուցմանը, այլև նոր արագություն։ Պատկերացրեք Ձեզ գումարը այսօր է անհրաժեշտ։ Սովորական վարկային կազմակերպությունները, որոնցից պահանջվում է երկար ժամանակ վարկի հաստատման համար, ձեռնտու չի լինի տվյալ անձին։ Չկորցնելով ժամանակը մենք Ձեզ կտրամադրենք գումարը կես ժամվա ընթացքում։ Հեշտությամբ կստանաք գումարը առանց որևէ ջանք գործադրելու։ Անհրաժեշտ է միայն անձնագիր և սոց քարտ։
                        </p>
                        <p> Ընկերությունը կարևորում է իր հաճախորդների կարծիքը և սիրով սպասում ենք Ձեզ։</p>
                        <address><p>Հասցե՝ Սայաթ Նովա 19/1</p></address>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <section class="footer_section">
            <div class="wrapper">
                <div class="footer_block">
                    <span>© 2008-2023 BooM-Credit Բոլոր իրավունքները պաշտպանված են.</span>
                    <span>Վեբ կայքի մշակում <a href="">AYA Digital Agency</a></span>
                </div>
            </div>
        </section>
    </footer>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="js/timer.js"></script>

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(83490919, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/83490919" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
</body>
</html>
