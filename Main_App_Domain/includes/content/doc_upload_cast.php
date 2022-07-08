
        <div class="row">
			<div class="col-sm-5 col-xs-12">
				<div class="panel panel-default">
				    <div class="panel-thumbnail">
				        <a href="#" title="Cast Certificate" class="thumb" data-toggle="modal" data-target="#cast-cert">
						<?php 
							if(!$castcert){
								echo"<img src='./dist/img/castcert.jpeg' class='img-responsive img-rounded' >";
							}
							else{
								echo"<img src='$castcert'  class='img-responsive img-rounded' >";    
							}          
						?>
				        </a>
				    </div>
					<div class="panel-body">
						<p>Caste Certificate</p>
						<p>Click On the Image to View</p>
					</div>
				</div>
			</div>
            <!--  col-md-4 -->

            <div class="col-md-4">
                <div class="form-group">
                   <label>Document Upload: Caste Certificate</label>
                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-certificate"></i>
                    </div>
						<input type="file" class="form-control" name="castproof" >
                    </div>
                </div>
					<button type="submit" class="btn btn-warning" name="ccup"><i class="fa fa-certificate"> </i> Upload</button>
            </div>
            <!--  col-md-4 -->
        </div>
        <!-- row -->
        