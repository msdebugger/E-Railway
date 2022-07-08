    <div class="row">
        <div class="col-xs-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#fresh" data-toggle="tab">Fresh / Apply</a></li>
              <li><a href="#renewal" data-toggle="tab">Renewal</a></li>
            </ul>
            <div class="tab-content">
              <!-- Fresh -->
              <div class="tab-pane active" id="fresh">
               <?php require 'includes/content/content_tab_apply.php'; ?>
              </div>
              <!-- /#fresh -->

              <!-- Renewal -->
              <div class="tab-pane" id="renewal">
                <?php require 'includes/content/content_tab_renew.php'; ?>
              </div>
              <!-- /#renewal -->

            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->