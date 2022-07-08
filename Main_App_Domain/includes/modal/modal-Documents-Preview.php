<!-- Fee Reciept -->
<div class="modal fade" id="receipt">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Fee Receipt</h4>
              </div>
              <div class="modal-body">
				<?php
                        if(!$receipt_doc){
                    echo"Upload Document to See Preview. Only Image file is acceptable, extension supported are JPG, JPEG and PNG.";
                        }
                        else{
                    echo"<img src='$receipt_doc'  class='img-responsive'>";    
                        }
                ?>              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
		
<!-- College ID -->
<div class="modal fade" id="clg-id">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">College ID</h4>
              </div>
              <div class="modal-body">				<?php                        if(!$clgid){                    echo"Upload Document to See Preview. Only Image file is acceptable, extension supported are JPG, JPEG and PNG.";                        }                        else{                    echo"<img src='$clgid'  class='img-responsive'>";                            }                ?>              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
<!-- Cast Certificate -->
<div class="modal fade" id="cast-cert">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Cast Certificate</h4>
              </div>
              <div class="modal-body">				<?php                    if(!$castcert){						echo"Upload Document to See Preview. Only Image file is acceptable, extension supported are JPG, JPEG and PNG.";                    }else{						echo"<img src='$castcert'  class='img-responsive'>";                        }                ?> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

<!-- Previous Pass -->
<div class="modal fade" id="ppass">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Previous Pass</h4>
              </div>
              <div class="modal-body">				<?php                    if(!$ppass){						echo"Upload Document to See Preview. Only Image file is acceptable, extension supported are JPG, JPEG and PNG.";                    }else{						echo"<img src='$ppass'  class='img-responsive'>";                        }                ?> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->