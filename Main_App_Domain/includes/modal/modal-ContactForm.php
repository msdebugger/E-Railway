<div class="modal modal-primary fade" id="Contact">
			<div class="modal-dialog">
				<div class="modal-content">
					<form method="post" action="dashboard">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Contact Us</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<input type="text" class="form-control" name="name"  value="<?php echo $fullname; ?>" required/>
							</div>
							<div class="form-group">
								<input type="email" class="form-control" name="email"  value="<?php echo $email; ?>" required />
							</div>
							<div class="form-group">
								<input type="tel" class="form-control" name="mobile" placeholder="Contact No.(Optional)" />
							</div>
							<div class="form-group">
								<textarea id="textinput" class="form-control" maxlength="400" name="message" placeholder="Your Message(Max 400 Characters)" required></textarea>
							</div>
							Remaining characters: <span id="count"></span><br>    
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-outline" name="cform">Submit</button>
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->