
        <div class="row">
			<div class="col-sm-5 col-xs-12">
				        <div class="panel panel-default">
				          <div class="panel-thumbnail">
				          	<a href="#" title="Current Pass" class="thumb" data-toggle="modal" data-target="#ppass">
							<?php 
								if(!$ppass){
									echo"<img src='./dist/img/pass.jpeg'  class='img-responsive img-rounded' >";
								}else{
									echo"<img src='$ppass'  class='img-responsive img-rounded' >";    
								}
							?>
				          	</a>
				          </div>
				          <div class="panel-body">
				            <p>Current Pass</p>
				            <p>Click On the Image to View</p>
				          </div>
				        </div>
				    </div>
             <!--  col-md-4 -->

            <div class="col-md-4">
                <div class="form-group">
                   <label>Document Upload: Current Pass </label>
                    <div class="input-group">
                        <div class="input-group-addon">
                        <i class="fa fa-ticket"></i>
                    </div>
                     <input type="file" class="form-control" name="ppass" >
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="ppup"><i class="fa fa-ticket"> </i> Upload</button>
            </div>
            <!--  col-md-4 -->
        </div>
        <!--  row -->
        