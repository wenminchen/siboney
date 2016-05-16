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