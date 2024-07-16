<?php 
$slides = [
    [
        'img' => 'home-one-0.png',
    ],
    [
        'img' => 'home-one-1.png',
    ],
    [
        'img' => 'home-one-2.png',
    ],
    [
        'img' => 'home-one-3.png',
    ],
    [
        'img' => 'home-one-4.png',
    ],
]
?>
<section class="sectionCarusel">
    <div class="sectionCarusel__wrapper">
        <div class="slickCarusel">
            <?php foreach ($slides as $key => $slide) { ?>
                <img src="<?php echo IMG_BASE . $slide['img'] ?>" alt="slide" class="slickCarusel__img">
            <?php } ?>
        </div>
        <div class="text-center pt--40">
            <p class="heading--24 color--AC9883 pb--10">04 • 10 • 2024</p>
            <p class="heading--18 color--AC9883">CARTAGENA, COLOMBIA</p>
        </div>
        <div class="sectionCarusel__line"></div>
    </div>
</section>