			<div class="row">
				<div class="col-sm-5 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-thumbnail">
							<a href="#" title="College ID" class="thumb" data-toggle="modal" data-target="#clg-id">
							<?php
								if(!$clgid){
									echo"<img src='./dist/img/idcard.jpg' class='img-responsive img-rounded'>";
								}else{
									echo"<img src='$clgid'  class='img-responsive img-rounded'>";    
								}
							?> 
				          	</a>
				        </div>
				        <div class="panel-body">
							<p>College ID</p>
				            <p>Click On the Image to Preview</p>
				        </div>
				    </div>
				</div>
				<!--  col-md-4 -->

				<div class="col-md-4">
					<div class="form-group">
					<label>Document Upload: College ID </label>
						<div class="input-group">
							<div class="input-group-addon">
							<i class="fa fa-id-card-o"></i>
							</div>
						<input type="file" id="idproof" class="form-control" name="idproof">
						</div>
					</div>
                <button type="submit" class="btn btn-danger" name="idup"><i class="fa fa-id-card-o"> </i> Upload</button>
				</div>
				<!--  col-md-4 -->
			</div>
			<!--  row   -->