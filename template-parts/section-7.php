<?php

$places = [
    "placesvisit" => [
        "id" => "lugares-para-visitar",
        "title" => "Lugares para Visitar",
        "places" => [
            [
                "name" => "Teatro Heredia",
                "address" => "Magnífico edificio de estilo ecléctico construido en 1902, diseñado por Luis Felipe Jaspe, el mismo arquitecto que creó la Torre del Reloj de Cartagena.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-19.png',
            ],
            [
                "name" => "Murallas de Cartagena",
                "address" => "Fortificación que tardó más de cien años en completarse, llevada a cabo por etapas desde 1586 hasta 1699, abarcando el perímetro del centro de la ciudad vieja, San Diego y Getsemaní.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-11.png',
            ],
            [
                "name" => "Torre del Reloj",
                "address" => "Famosa puerta de entrada a la ciudad amurallada, caracterizada por su portada barroca de piedra que precede a una imponente estructura.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-2.png',
            ],
            [
                "name" => "Letrero de Cartagena",
                "address" => "El letrero está ubicado en la carretera que lleva a Bocagrande, el sector donde se encuentran la mayoría de los hoteles de la ciudad y donde hay bonitas playas públicas para nadar.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-13.png',
            ],
            [
                "name" => "Barrio Getsemaní",
                "address" => "Es uno de los lugares más visitados de la ciudad. Aquí encontrarás grafitis, hoteles, cervecerías e increíble música que sin duda te harán volver a este lugar.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-14.png',
            ],
            [
                "name" => "Convento Santa Cruz de la Popa",
                "address" => "El convento, claustro y capilla de Nuestra Señora de la Candelaria de la Popa se encuentran en la cima del Cerro de la Popa en Cartagena. Multitudes de devotos hacen una peregrinación a pie hasta la cima del cerro de la Popa.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-16.png',
            ],
            [
                "name" => "Castillo San Felipe",
                "address" => "Uno de los sitios más famosos, corresponde a un castillo construido en el siglo XVII, obra de la ingeniería militar española en América.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-17.png',
            ],
            [
                "name" => "Monumento de las Botas Viejas",
                "address" => "Ubicado en la base del Castillo de San Felipe, el Monumento a los Zapatos Viejos es una escultura gigante de un par de botas viejas. Un lugar popular para tomarse una selfie, el monumento fue creado por Héctor Lombana Piñeres.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-18.png',
            ],
            [
                "name" => "Islas del Rosario",
                "address" => "En las Islas del Rosario se puede disfrutar de un destino paradisíaco de hermosas playas de arena blanca y las cálidas y cristalinas aguas del Mar Caribe. (¡Estaremos en la Isla Barú el 25 de julio!)",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-20.png',
            ],
            [
                "name" => "Volcán de Lodo del Totumo",
                "address" => "Es un cráter de 15 metros de altura con una piscina de lodo medicinal en la parte superior. Entrar en el cráter de lodo del volcán es toda una aventura, aunque será imposible hundirse en esta piscina natural que parece no tener fondo.",
                "city" => "",
                "phone" => "",
                "link" => "",
                "image" => IMG_BASE . 'slick-images/slick-image-21.png',
            ]
        ]
    ]
];

?>
<section class="sectionCartagenaBanner">
    <div class="sectionCartagenaBanner__wrapper">
        <div class="sectionCartagenaBanner__img">
            <img src="<?php echo IMG_BASE . 'cartagena.webp'; ?>" alt="">
        </div>
        <div class="sectionCartagenaBanner__box">
            <h2 class="heading--76 color--4D4D4D">Cartagena</h2>
            <div class="line line--gray line--center"></div>
            <div class="pt--40 pb--22">
                <p class="heading--18 color--4D4D4D">
                    Estamos encantados de celebrar nuestra boda en Cartagena, la joya costera de Colombia. Esta ciudad, declarada Patrimonio de la Humanidad por la UNESCO, es uno de los tesoros culturales más importantes de Sudamérica. Las murallas de Cartagena de Indias adornan el centro histórico, conocido como "la ciudad amurallada", donde podrá descubrir plazas, calles adoquinadas y exquisitos y vibrantes edificios coloniales.
                </p>
                <p class="heading--18 color--4D4D4D">
                    La mejor forma de conocer Cartagena es paseando por ella, sumergiéndose en el laberinto de callejuelas y exuberantes plazas verdes. Recomendamos alojarse en la ciudad amurallada, donde todo está a un paso. Las calles están llenas de música en directo, espléndidos restaurantes y extravagantes bares, que contribuyen a la vibrante atmósfera de Cartagena.
                </p>
            </div>
            <h2 class="heading--76 color--4D4D4D">Lugares para visitar</h2>
        </div>
        
    </div>
    <div class="sectionCartagena__places">
        <div class="slick0">
            <?php foreach ($places['placesvisit']['places'] as $place) { ?>
                <div class="sectionCartagena__card">
                    <div class="sectionCartagena__padding">
                        <?php if ($place['image']) : ?>
                        <img src="<?php echo $place['image']; ?>" alt="">
                        <?php endif?>
                        <div class="sectionCartagena__info">
    
                        <h2 class="heading--22 color--4D4D4D">
                            <?php echo $place['name']; ?>
                        </h2>
    
                        <?php if ($place['address']) : ?>
                        <p class="heading--18 color--4D4D4D"><?php echo $place['address']; ?></p>
                        <?php endif?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>