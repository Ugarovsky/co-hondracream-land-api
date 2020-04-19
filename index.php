<?php   if (!empty($_POST['phone'])) {
        send_the_order ($_POST);
    }
    function send_the_order ($post){
        $params=array(
          'flow_hash' => $post['flow_hash'],
            'landing' => $post['landing'],
            'referrer' => $post['referrer'],
            'phone' => $post['phone'],
            'name' => $post['name'],
            'country' => $post['country'],
            'address' => $post['address'],
            'email' => $post['email'],
            'lastname' => $post['lastname'],
            'comment' => $post['comment'],
            'layer' => $post['layer'],
            'ip' => $post['ip'],
            'sub1' => $post['sub1'],
            'sub2' => $post['sub2'],
            'sub3' => $post['sub3'],
            'sub4' => $post['sub4'],
            'sub5' => $post['sub5'],
            'link_redirect' => $post['link_redirect']
        );
       $url = 'http://leadbit.com/api/new-order/4c24536a4c7c325743526d25636c7b47';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
        curl_setopt($ch, CURLOPT_REFERER, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $return= curl_exec($ch);
        curl_close($ch);
        $array=json_decode($return, true);
        header('Location: order.php');
} ?><!DOCTYPE html>
<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

     <script type="text/javascript" src="js/co_dollar.js"></script>
     <script type="text/javascript" src="js/countries_cur_forwd.js"></script>
     <script type="text/javascript" src="js/jquery.js"></script>
     <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
     <script type="text/javascript" src="js/dr-dtime.js"></script>

     <script type="text/javascript" src="js/main.js"></script>

     <style>
          .ac_footer {
               position: relative;
               top: 10px;
               height: 0;
               text-align: center;
               margin-bottom: 70px;
               color: #A12000;
          }

          .ac_footer a {
               color: #A12000;
          }

          img[height="1"],
          img[width="1"] {
               display: none !important;
          }
     </style>
     <!--retarget-->

     <!--retarget-->

     <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
     <title> Hondrocream </title>
     <meta content="" name="description">
     <meta content="width=device-width, initial-scale=1" name="viewport">
     <link href="./css/bootstrap.min.css" rel="stylesheet">
     <link href="./css/bootstrap-theme.min.css" rel="stylesheet">
     <link href="./css/animate.css" rel="stylesheet">
     <link href="./css/style.css" rel="stylesheet">

</head>

<body>
     <!--retarget-->

     <!--retarget-->

     <main class="s__main">
          <header>
               <div class="container">
                    <div class="row">
                         <div class="col-md-12">
                              <h2>
                                   REMEDIO ÚNICO PARA EL TRATAMIENTO DE LAS ENFERMEDADES DE LA COLUMNA VERTEBRAL Y LAS
                                   ARTICULACIONES
                              </h2>
                         </div>
                    </div>
               </div>
          </header>
          <section class="block1">
               <div class="container">
                    <div class="row">
                         <div class="col-md-8">
                              <div class="content_box">
                                   <h4>
                                        Secretos de la medicina china
                                   </h4>
                                   <h3>
                                        REMEDIO PARA EL DOLOR EN LAS ARTICULACIONES
                                   </h3>
                                   <h2>
                                        Hondrocream
                                   </h2>
                                   <p>
                                        ¡REMEDIO ÚNICO ALTAMENTE EFICAZ PARA EL TRATAMIENTO DE LAS ENFERMEDADES DE LA
                                        COLUMNA VERTEBRAL Y LAS ARTICULACIONES!
                                   </p>
                                   <div class="no_pain_box">
                                        ¡POR FIN PODRÁ OLVIDARSE DEL DOLOR!
                                   </div>
                                   <ul class="pluses">
                                        <li>
                                             Efecto local a largo plazo
                                        </li>
                                        <li>
                                             Eliminación casi instantánea de cualquier dolor
                                        </li>
                                        <li>
                                             No causa daño al organismo
                                        </li>
                                        <li>
                                             Eficacia demostrada clínicamente
                                        </li>
                                   </ul>
                              </div>
                         </div>
                         <div class="col-md-4">
                              <div class="prod_box">
                                   <img alt="" src="./img/product.png" />
                                   <div class="sale_today">
                                        -50%
                                   </div>
                              </div>
                              <div class="form_box">
                                   <div class="fast_buy">
                                        <h2>
                                             PIDA AHORA
                                        </h2>
                                   </div>
                                   <div class="price_box">
                                        <div class="old_price_box">
                                             Precio anterior: <span class="price_old">78 €</span>
                                             <!---->
                                        </div>
                                        <div class="new_price_box">
                                             Precio nuevo: <span class="price_main">39 €</span>
                                             <!---->
                                        </div>
                                   </div>
                                   <div class="timer_box">
                                        <h3>
                                             Hasta el final de la promoción quedan:
                                        </h3>
                                        <!--<ul class="list-inline">-->
                                        <!--<li> Horas </li>-->
                                        <!--<li>минут</li>-->
                                        <!--<li>секунд</li>-->
                                        <!--</ul>-->
                                        <div class="timer clearfix">
                                             <span>
                                                  <b> {h10} {h1} </b>
                                                  Horas
                                             </span>
                                             <i> : </i>
                                             <span>
                                                  <b> {m10} {m1} </b>
                                                  Minutos
                                             </span>
                                             <i> : </i><span><b> {s10} {s1} </b>
                                                  Segundos
                                             </span>
                                        </div>
                                   </div>
                                   <div class="btn_box"><a href="#ordera0">
                                             <div class="btn pre_toform hvr-shutter-out-vertical">
                                                  Hacer un pedido
                                             </div>
                                        </a>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section class="block2">
               <div class="container">
                    <div class="row">
                         <div class="col-md-10 col-md-offset-1">
                              <h2>
                                   ¡LOS RESULTADOS DE LOS ENSAYOS CLÍNICOS DEL BÁLSAMO IMPRESIONAN!
                              </h2>
                         </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                         <p>
                              Como todos sabemos, la medicina china se dierencia de los tratamientos tradicionales. El
                              tratamiento chino es un tipo especial de mejora de la salud. Los médicos chinos encuentran
                              la causa de la enfermedad y actúan sobre ella sin dañar el organismo. El tratamiento a
                              base de hierbas es la forma china más antigua de tratar la artrosis, la artritis y la
                              osteocondrosis.
                         </p>
                         <p>
                              Los ensayos clínicos a gran escala de <b> Hondrocream </b> se llevaron a cabo en las
                              universidades de medicina de Beijing (China) y Estocolmo (Suecia) en 2013. En total
                              participaron más de 1000 hombres y mujeres con diversas enfermedades de la columna
                              vertebral y las articulaciones, que durante 2 semanas estuvieron usando el bálsamo <b>
                                   Hondrocream </b> . ¡Los resultados de los estudios sorprendieron incluso a los
                              médicos!
                         </p>
                         <p>
                              El dolor, tanto agudo como sordo, cesó en la mayoría de los sujetos 1-3 días después de
                              empezar a usar Hondrocream. Más del 70% de los participantes en los estudios
                              experimentaron cambios significativos en el tratamiento de enfermedades crónicas de la
                              columna vertebral y las articulaciones.
                         </p>
                         <p>
                              El remedio tuvo un efecto positivo en todas las personas sin excepción. ¡Ningún producto
                              ortopédico existente a día de hoy puede presumir de una eficacia tan alta!
                         </p>
                         <div class="img_box">
                              <img alt="" src="./img/pohudenie1.jpg" />
                         </div>
                         <div class="doc_name">
                              <h3>
                                   Profesor Liao Chan
                              </h3>
                              <p>
                                   Decano de la Facultad de Farmacia de la Universidad de Medicina de Beijing
                              </p>
                         </div>
                         <div class="btn_box"><a href="#ordera0">
                                   <div class="btn pre_toform hvr-shutter-out-vertical">
                                        Pedir Hondrocream ahora mismo
                                   </div>
                              </a>
                         </div>
                    </div>
               </div>
          </section>
          <section class="block3">
               <div class="container">
                    <div class="row">
                         <div class="col-md-10 col-md-offset-1">
                              <h2>
                                   ESTÁ CLÍNICAMENTE DEMOSTRADO QUE Hondrocream
                                   <span> AYUDA A DESHACERSE DE TALES ENFERMEDADES COMO: </span>
                              </h2>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-8 col-md-offset-2">
                              <div class="img_box">
                                   <img alt="" src="./img/ortoped_1.jpg" />
                              </div>
                              <ul class="effects">
                                   <li>
                                        Radiculitis y osteocondrosis
                                   </li>
                                   <li>
                                        Reumatismo
                                   </li>
                                   <li>
                                        Artritis
                                   </li>
                                   <li>
                                        Ciática
                                   </li>
                                   <li>
                                        Periartritis de hombro y codo
                                   </li>
                                   <li>
                                        Dolor ganglionar entre los omóplatos
                                   </li>
                                   <li>
                                        Osteoartritis de las articulaciones de la rodilla
                                   </li>
                                   <li>
                                        Espolón calcáneo
                                   </li>
                                   <li>
                                        Callos en los pies
                                   </li>
                                   <li>
                                        Exceso de deposición de tejido adiposo en el área de la VII vértebra cervical
                                        ("cerviz")
                                   </li>
                                   <li>
                                        Desplazamiento del disco espinal
                                   </li>
                                   <li>
                                        Lesiones, fracturas y dislocaciones de huesos
                                   </li>
                                   <li>
                                        Dolor en la parte inferior de la espalda y las piernas
                                   </li>
                                   <li>
                                        Dolor debido a los cambios meteorológicos
                                   </li>
                                   <li>
                                        Entumecimiento de las extremidades
                                   </li>
                                   <li>
                                        Tensión muscular, desgarro muscular
                                   </li>
                              </ul>
                              <p>
                                   Y otras enfermedades de la columna vertebral, el pecho y las extremidades.
                              </p>
                              <p>
                                   Hondrocream no solo elimina el dolor, sino que también actúa sobre las causas de las
                                   enfermedades, por lo que posee un efecto a largo plazo en la salud.
                              </p>
                              <div class="btn_box"><a href="#ordera0">
                                        <div class="btn pre_toform hvr-shutter-out-vertical">
                                             Pedir Hondrocream ahora mismo
                                        </div>
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section class="block4">
               <div class="container">
                    <div class="row">
                         <div class="col-md-10 col-md-offset-1">
                              <h2>
                                   PROPIEDADES ÚNICAS de Hondrocream
                              </h2>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-8 col-md-offset-2">
                              <div class="img_box">
                                   <img alt="" src="./img/ortoped_4.jpg" />
                              </div>
                              <ul class="internals">
                                   <li>
                                        Reduce rápidamente el dolor (agudo y sordo)
                                   </li>
                                   <li>
                                        Intensifica la circulación sanguínea
                                   </li>
                                   <li>
                                        Elimina la hinchazón
                                   </li>
                                   <li>
                                        Mejora el metabolismo
                                   </li>
                                   <li>
                                        Devuelve la movilidad de las articulaciones
                                   </li>
                                   <li>
                                        Aumenta la elasticidad de los tejidos
                                   </li>
                                   <li>
                                        Proporciona todos los microelementos esenciales a los huesos y articulaciones
                                   </li>
                                   <li>
                                        Previene la aparición de complicaciones y el desarrollo de la enfermedad
                                   </li>
                                   <li>
                                        Posee un fuerte efecto antiinflamatorio
                                   </li>
                              </ul>
                              <div class="btn_box"><a href="#ordera0">
                                        <div class="btn pre_toform hvr-shutter-out-vertical">
                                             Pedir Hondrocream ahora mismo
                                        </div>
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section class="block5">
               <div class="container">
                    <div class="row">
                         <div class="col-md-10 col-md-offset-1">
                              <h2>
                                   Hondrocream ESTÁ HECHO A BASE DE UNA RECETA NATURAL TRADICIONAL
                              </h2>
                         </div>
                    </div>
                    <div class="col-md-8 col-md-offset-2">
                         <p>
                              El remedio para las articulaciones Hondrocream es un producto de nueva generación que
                              combina los últimos logros científicos. Se recomienda en calidad de remedio principal para
                              deshacerse de enfermedades articulares.
                         </p>
                         <p>
                              El remedio actúa de forma localizada, penetra directamente en la cavidad de la bolsa de la
                              articulación y actúa directamente para eliminar la enfermedad. La composición única de
                              Hondrocream regenera el tejido cartilaginoso dañado, elimina el dolor y la inflamación de
                              las articulaciones, y restaura su funcionamiento normal.
                         </p>
                         <div class="img_box">
                              <img alt="" src="./img/ortoped_2.jpg" />
                              <span> Epidermis </span>
                              <span> Dermis </span>
                              <span> Hipodermis </span>
                         </div>
                    </div>
               </div>
          </section>
          <section class="block6">
               <div class="container">
                    <div class="row">
                         <div class="col-md-10 col-md-offset-1">
                              <h2>
                                   Hondrocream es UN REMEDIO ÚNICO QUE NO TIENE ANÁLOGOS EN EL MUNDO ENTERO Y ADEMÁS
                                   POSEE UNA EFICACIA MUY ALTA
                              </h2>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-8 col-md-offset-2">
                              <ul class="uniq">
                                   <li>
                                        No tiene efectos secundarios
                                   </li>
                                   <li>
                                        Proporciona un efecto duradero
                                   </li>
                                   <li>
                                        No causa incomodidad o sensaciones desagradables
                                   </li>
                                   <li>
                                        Tiene un precio asequible, es fácil de usar
                                   </li>
                                   <li>
                                        Certificado según la ISO y la GMP, normas internacionales más estrictas
                                   </li>
                              </ul>
                              <div class="img_box">
                                   <img alt="" src="./img/ortoped_3.jpg" />
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section class="block7">
               <div class="container">
                    <div class="row">
                         <div class="col-md-10 col-md-offset-1">
                              <h2>
                                   Hondrocream - ¡PRODUCTO DEL AÑO 2017 EN EE.UU. Y EN MUCHOS PAÍSES EUROPEOS! EN TAN
                                   SOLO MEDIO AÑO DEL <span class="ryear">2017</span> FUE ADQUIRIDO POR MÁS DE 3
                                   MILLONES DE EUROPEOS. Y SI HA AYUDADO A OTROS, ¡SEGURO QUE LE AYUDARÁ A USTED
                                   TAMBIÉN!
                              </h2>
                              <div class="btn_box"><a href="#ordera0">
                                        <div class="btn pre_toform hvr-shutter-out-vertical">
                                             Pedir Hondrocream ahora mismo
                                        </div>
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section class="block8">
               <div class="container">
                    <div class="row">
                         <div class="col-md-10 col-md-offset-1">
                              <h2>
                                   ¿QUÉ DICEN LOS MÉDICOS SOBRE Hondrocream?
                              </h2>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-4 col-md-offset-2">
                              <div class="img_box">
                                   <img alt="" src="./img/doc.png" />
                              </div>
                         </div>
                         <div class="col-md-4">
                              <div class="txt_box">
                                   <p>
                                        Hondrocream sin duda merece especial atención. Es el medicamento del futuro. Su
                                        comodidad de uso, asequibilidad y su alta eficiencia prácticamente no lo
                                        diferencian de sus competidores.
                                   </p>
                                   <p>
                                        A pesar de que el bálsamo apareció hace poco en el mercado colombiano, ya se ha
                                        incluido en la mayoría de los programas para el tratamiento de enfermedades
                                        ortopédicas en las principales clínicas del país.
                                   </p>
                                   <p>
                                        Puedo decir que después de que empecé a recomendar Hondrocream a mis pacientes,
                                        la dinámica de curaciones mejoró casi dos veces. Se trata de un muy buen
                                        indicador que demuestra la eficacia del medicamento de la mejor forma.
                                   </p>
                                   <div class="name">
                                        <span> José Antonio Ruiz </span>
                                        Profesor, Doctor en Ciencias Médicas
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section class="block9">
               <div class="container">
                    <div class="row">
                         <div class="col-md-12">
                              <h2>
                                   COMENTARIOS DE LOS COMPRADORES
                              </h2>
                              <div class="review_box">
                                   <h3>
                                        ¡Hace ya medio año que no me duele la espalda!
                                   </h3>
                                   <p>
                                        "¡Un remedio excelente y muy asequible! Después del ejército comencé a
                                        experimentar dolor en la espalda. Probé diversos medicamentos y remedios
                                        caseros, pero no me ayudaron nada. Cuando permanecía demasiado tiempo sentado
                                        surgían dolores especialmente fuertes. Mi esposa compró Hondrocream y realicé un
                                        ciclo de tratamiento. Hace ya medio año que no me duele la espalda. Estoy muy
                                        satisfecho. Mi esposa le recomendó Hondrocream a una compañera del trabajo, y a
                                        ella también le ha ayudado. Le doy un diez".
                                   </p>
                                   <div class="name_box">
                                        <span> Pedro </span>
                                        Madrid
                                   </div>
                              </div>
                              <div class="review_box">
                                   <h3>
                                        ¡Hondrocream realmente ayuda mejor que la mayoría de los comprimidos que
                                        anuncian por la tele!
                                   </h3>
                                   <p>
                                        "Estoy agradablemente sorprendida por la acción de Hondrocream. Sinceramente, al
                                        principio no confiaba mucho en las maravillas de la medicina popular, pero ahora
                                        he cambiado mi opinión. Realmente ayuda mejor que los comprimidos que anuncian
                                        por la tele. El dolor pasa casi de inmediato. Realicé 2 ciclos de tratamiento,
                                        ¡me siento muy bien!"
                                   </p>
                                   <div class="name_box">
                                        <span> Conchi </span>
                                        Alicante
                                   </div>
                              </div>
                              <div class="review_box">
                                   <h3>
                                        Lo he probado todo - inyecciones, diversas cremas y remedios populares. Solo
                                        Hondrocream me ayudó.
                                   </h3>
                                   <p>
                                        "¡Este remedio es simplemente genial! Tuve un problema con la hinchazón y
                                        dolores en el pie. Mi médico ni siquiera pudo decirme la causa. Lo he probado
                                        todo - inyecciones, diversas cremas y remedios populares. Solo Hondrocream me
                                        ayudó. Noté mejoras notables en pocos días. El pie dejó de doler. Ahora todo
                                        está bien, ya hace un mes que no siento ningún síntoma. ¡Se lo recomiendo a
                                        todos!"
                                   </p>
                                   <div class="name_box">
                                        <span> Marta </span>
                                        Málaga
                                   </div>
                              </div>
                              <div class="review_box">
                                   <h3>
                                        ¡Me sentí 10 años más joven!
                                   </h3>
                                   <p>
                                        "¡Es algo increíble! ¡Nunca hubiera pensado que Hondrocream sería capaz de esto!
                                        Le pedí prestado Hondrocream a un amigo por curiosidad. ¡Por la mañana me
                                        desperté y me sentí 10 años más joven! Nada de dolor, sensaciones desagradables,
                                        movilidad absoluta. Hace mucho tiempo que no me sentía así. Para aquellos que
                                        tienen problemas con su espalda, es el mejor remedio".
                                   </p>
                                   <div class="name_box">
                                        <span> Alejandro </span>
                                        Segovia
                                   </div>
                              </div>
                              <div class="btn_box"><a href="#ordera0">
                                        <div class="btn pre_toform hvr-shutter-out-vertical">
                                             Pedir Hondrocream ahora mismo
                                        </div>
                                   </a>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <section class="block10">
               <div class="container">
                    <div class="row">
                         <div class="col-md-12">
                              <h2>
                                   MÉTODO DE APLICACIÓN
                              </h2>

                              <ul class="used">
                                   <li>
                                        <div class="img_box">
                                             <img alt="" src="./img/img51-1.png" />
                                        </div>
                                        <p>
                                             Aplíquelo sobre la piel seca y frótelo en la piel hasta que se absorba por
                                             completo
                                        </p>
                                   </li>
                                   <li>
                                        <div class="img_box">
                                             <img alt="" src="./img/img51-2.png" />
                                        </div>
                                        <p>
                                             Úselo 2-3 veces al día
                                        </p>
                                   </li>
                                   <li>
                                        <div class="img_box">
                                             <img alt="" src="./img/img51-3.png" />
                                        </div>
                                        <p>
                                             No enjuague con agua durante 1 hora después de la aplicación
                                        </p>
                                   </li>
                              </ul>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-8 col-md-offset-2">
                              <div class="sale_box">
                                   <h3>
                                        ¡ATENCIÓN! <span> DESCUENTO </span>
                                   </h3>
                                   <div class="left_box">
                                        <h4>
                                             bálsamo para el dolor en las articulaciones
                                        </h4>
                                        <h2>
                                             Hondrocream
                                        </h2>
                                   </div>
                                   <div class="right_box">
                                        <div class="price_box">
                                             <div class="old_price_box">
                                                  Precio anterior: <span class="price_old">78 €</span>
                                                  <!---->
                                             </div>
                                             <div class="new_price_box">
                                                  Precio nuevo: <span class="price_main">39 €</span>
                                                  <!---->
                                             </div>
                                        </div>
                                   </div>
                                   <div class="prod_box">
                                        <img alt="" src="./img/product.png" />
                                        <div class="sale_today">
                                             -50%
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-sm-5 hidden-lg hidden-md">
                              <div class="prod_box prod_sm">
                                   <img alt="" src="./img/product.png" />
                                   <div class="sale_today">
                                        -50%
                                   </div>
                              </div>
                         </div>
                         <div class="col-md-6 col-md-offset-3 col-sm-7">
                              <div class="form_box" id="ordera0">
                                   <h2>
                                        COMPRAR AHORA MISMO
                                   </h2>
                                   <form action="" class="order_form" id="order_form" method="post">
                                        <!---->
                                        <select class="label0 country_select" name="country"
                                             style="display: none;"><option value="co">Colombia</option></select><input type="hidden" name="landing" value="co12.hondrocreamnd.com"><input type="hidden" name="ip" value="<?=$_SERVER['REMOTE_ADDR']?>"><input type="hidden" name="createdAt" value="<?=date("Y-m-d H:i:s")?>"><input type="hidden" name="userAgent" value="<?=$_SERVER['HTTP_USER_AGENT']?>"><input type="hidden" name="flow_hash" value="VUmV"><input type="hidden" name="sub1" value="{subid}"><input type="hidden" name="sub2" value="toxa"><input type="hidden" name="sub3" value=""><input type="hidden" name="sub4" value=""><input type="hidden" name="sub5" value=""><input type="hidden" name="referrer" value="<?=$_SERVER['HTTP_REFERER']?>">


                                        <div class="inp_box">
                                         

                                        </div>
                                        <div class="inp_box">
                                             <label for="name_id"> Nombre: </label>
                                             <input id="name_id" name="name" placeholder="Nombre" type="text" required>
                                        </div>
                                        <div class="inp_box">
                                             <label for="phone_id"> Número de teléfono: </label>
                                             <input class="only_number" id="phone_id" name="phone"
                                                  placeholder="+57123456789" type="text" required>
                                        </div>
                                        <button class="js_pre_toform" type="submit">
                                             Hacer un pedido
                                        </button>
                                        <div class="toform"></div>
                                   </form>
                              </div>
                         </div>
                    </div>
               </div>
          </section>
          <footer>
               <div class="container">
                    <div class="row">
                         <div class="col-md-6 col-md-offset-3">
                              <h4>
                                   Cómo trabajamos:
                              </h4>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-3 col-sm-6">
                              <div class="how_work">
                                   <div class="ico_box"></div>
                                   <div class="txt_box">
                                        Deja una solicitud en el sitio web
                                   </div>
                              </div>
                         </div>
                         <div class="col-md-3 col-sm-6">
                              <div class="how_work">
                                   <div class="ico_box ico2"></div>
                                   <div class="txt_box">
                                        Nos ponemos en contacto con usted
                                   </div>
                              </div>
                         </div>
                         <div class="col-md-3 col-sm-6">
                              <div class="how_work">
                                   <div class="ico_box ico3"></div>
                                   <div class="txt_box">
                                        Enviamos su pedido
                                   </div>
                              </div>
                         </div>
                         <div class="col-md-3 col-sm-6">
                              <div class="how_work">
                                   <div class="ico_box ico4"></div>
                                   <div class="txt_box">
                                        Usted paga en el momento de su recepción
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="row">
                         <div class="col-md-12">
                              <div class="operators">
                                   <h3>
                                        <b> ¡Nuestros operadores están en línea </b> las 24 horas del día, 7 días a la
                                        semana!
                                   </h3>
                              </div>
                         </div>
                    </div>
               </div>
          </footer>
     </main>




     <script src="./js/bootstrap.min.js"></script>
     <script src="./js/wow.min.js"></script>
     <script src="./js/jquery.plugin.js"></script>
     <script src="./js/jquery.countdown.js"></script>
     <script src="./js/main.js"></script>

     <center>
          <div class="ac_footer">
               <p class="footer_leadbit">BERNADATTE LTD, Av Ricardo J. Alfaro, Panama International<br><a
                         href="Privacy Policy.html" target="_blank">Privacy Policy</a> | <a
                         href="http://feedback-team.com" target="_blank">Report</a></p>
          </div>
     </center>
</body>

</html>

