<footer id="footer">
  <div class="footer__bckg">
    <h2 class="heading--30 color--AB9983">#Lau&Tin</h2>
  </div>
   <!-- Modals -->
  <section class="modal" style="display: none" data-modal="modal-1">
    <div class="modal__wrapper">
      <div class="modal__body img">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
        <div class="img-left">
          <img class="modal-image" src="<?php echo IMG_BASE . 'vestimenta-2.webp' ?>" alt="" id="" />
        </div>
        <div class="img-right">
          <img class="modal-image" src="<?php echo IMG_BASE . 'vestimenta-1.webp' ?>" alt="" id="" />
        </div>
      </div>
    </div>
  </section>

  <section class="modal" style="display: none" data-modal="modal-2">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
          <img class="modal-image" src="<?php echo IMG_BASE . 'lluvia-de-sobres.webp' ?>" alt="" id="" />
      </div>
    </div>
  </section>
  <section class="modal" style="display: none" data-modal="modal-3">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
          <img class="modal-image" src="<?php echo IMG_BASE . 'horario-detalles-new.webp' ?>" alt="" id="" />
      </div>
    </div>
  </section>
  <section class="modal" style="display: none" data-modal="modal-4">
    <div class="modal__wrapper">
      <div class="modal__body">
        <button type="button" data-close-modal>
        <?php 
            $icon_name = 'icon-close';
            get_template_part('template-parts/content', 'icono');
            display_icon($icon_name); 
        ?>
        </button>
          <img class="modal-image" src="<?php echo IMG_BASE . 'dresscode-whiteparty-new.webp' ?>" alt="" id="" />
      </div>
    </div>
  </section>
</footer>

<script>
    document.addEventListener("DOMContentLoaded", function() {
      setTimeout(function() {
          document.querySelector(".section__main").classList.add("show");
          document.querySelector(".loader").classList.add("hide");
          setTimeout(function() {
              document.querySelector(".loader").style.display = "none";
          }, 900);
      }, 1000);
    });
</script>

<!-- wordpress footer includes -->
<?php wp_footer(); ?>