			<div class="row">
				<div class="col-sm-5 col-xs-12">
					<div class="panel panel-default">
						<div class="panel-thumbnail">
							<a href="#" title="Receipt" class="thumb" data-toggle="modal" data-target="#receipt">
							<?php
								if(!$receipt_doc){
									echo"<img src='./dist/img/s4.jpg' class='img-responsive img-rounded'>";
								}else{
									echo"<img src='$receipt_doc'  class='img-responsive img-rounded'>";    
								}
							?> 
				          	</a>
				        </div>
				        <div class="panel-body">
							<p>Fee Receipt</p>
				            <p>Click On the Image to Preview</p>
				        </div>
				    </div>
				</div>
				<!--  col-md-4 -->

				<div class="col-md-4">
					<div class="form-group">
					<label>Document Upload: Fee Receipt</label>
						<div class="input-group">
							<div class="input-group-addon">
							<i class="fa fa-file-text"></i>
							</div>
						<input type="file" id="doc_receipt" class="form-control" name="doc_receipt">
						</div>
					</div>
                <button type="submit" class="btn btn-danger" name="receipt_up"><i class="fa fa-file-text"> </i> Upload</button>
				</div>
				<!--  col-md-4 -->
			</div>
			<!--  row   -->