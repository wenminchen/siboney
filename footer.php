<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package siboney
 */
?>
      </div><!-- end container -->
    </section><!-- end main section -->

    <!-- footer -->
    <footer id="footer" role="contentinfo">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-md-offset-1 social-icons">
            <p>
              <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
              <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
              <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
              <a href="#"><i class="fa fa-envelope fa-2x"></i></a>
            </p>    
          </div><!-- end social icons -->
          <div class="col-md-8 copyright">
            <p class="copyright">&copy; <script>document.write(new Date().getFullYear())</script> Siboney Template<span class="hidden-xs hidden-sm">. All Rights Reserved. </span>&#124; Website by Wenmin Chen</p>  
          </div> <!-- end copyright -->
        </div><!-- end row -->
      </div><!-- end footer container -->
    </footer>

<!-- modal windows -->
    <div id="slider1" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <p class="modal-title">Lorem ipsum dolor #1</p>
          </div><!-- end modal-header -->
          <div class="modal-body">
            <?php
              $post_id = 67;
              $queried_post = get_post($post_id);
              echo $queried_post->post_content;
            ?>
          </div><!-- end modal-body -->
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal">Close</button>
          </div><!-- end modal-footer -->
        </div><!-- end modal-content -->
      </div><!-- end modal-dialog -->
    </div><!-- end modal -->

    <div id="slider2" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <p class="modal-title">Lorem ipsum dolor #2</p>
          </div><!-- end modal-header -->
          <div class="modal-body">
            <?php
              $post_id = 72;
              $queried_post = get_post($post_id);
              echo $queried_post->post_content;
            ?>
          </div><!-- end modal-body -->
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal">Close</button>
          </div><!-- end modal-footer -->
        </div><!-- end modal-content -->
      </div><!-- end modal-dialog -->
    </div><!-- end modal -->

    <div id="slider3" class="modal fade" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <p class="modal-title">Lorem ipsum dolor #3</p>
          </div><!-- end modal-header -->
          <div class="modal-body">
            <?php
              $post_id = 74;
              $queried_post = get_post($post_id);
              echo $queried_post->post_content;
            ?>
          </div><!-- end modal-body -->
          <div class="modal-footer">
            <button class="btn btn-primary" data-dismiss="modal">Close</button>
          </div><!-- end modal-footer -->
        </div><!-- end modal-content -->
      </div><!-- end modal-dialog -->
    </div><!-- end modal -->


<?php wp_footer(); ?>

</body>
</html>
