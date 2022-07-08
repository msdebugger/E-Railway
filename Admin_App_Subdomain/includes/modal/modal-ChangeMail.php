<div class="modal modal-primary fade" id="ChangeMail">
          <div class="modal-dialog">
            <div class="modal-content">
              <form method="post" action="dashboard">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Change Email</h4>
              </div>
              <div class="modal-body">
              If you have Entered a wrong email, you can correct it and save.
              <div class="field-wrap"><br>
              <label>
               Email 
              </label>
              <?php
              echo'<span style="color:black">
              <input type="email" required value="'.$email.'" name="chm" autocomplete="off"/>
              </span><br>';   
              ?> 
              </div><br>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-outline" name="ce">Save changes</button>
              </div>
              </form>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->