@extends('layouts.master')
@section('content')
<div class="container">
<div class="row">
<!-- BEGIN INBOX -->
<div class="col-md-12">
<div class="grid email">
<div class="grid-body">
<div class="row">
<!-- BEGIN INBOX MENU -->
<div class="col-md-3">
<h2 class="grid-title"><i class="fa fa-inbox"></i> Inbox</h2>
<a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i>&nbsp;&nbsp;NEW MESSAGE</a>
<hr>
</div>
<!-- END INBOX MENU -->

<!-- BEGIN INBOX CONTENT -->
<div class="col-md-9">
<div class="row">
          <div class="col-sm-6">
                    <label style="margin-right: 8px;" class="">
                              <div class="icheckbox_square-blue" style="position: relative;"><input type="checkbox" id="check-all" class="icheck" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div>
                    </label>
          </div>
</div>
</div>

<!-- END INBOX CONTENT -->

<!-- BEGIN COMPOSE MESSAGE -->
<div class="modal fade" id="compose-modal" tabindex="-1" role="dialog" aria-hidden="true" >
<div class="modal-wrapper" >
          <div class="modal-dialog">
                    <div class="modal-content" style="margin-top: 200px;">
                              <div class="modal-header bg-blue">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        <h4 class="modal-title"><i class="fa fa-envelope"></i> Compose New Message</h4>
                              </div>
                              <form action="#" method="post" >
                                        <div class="modal-body">
                                                  <div class="form-group">
                                                            <input name="to" type="email" class="form-control" placeholder="To">
                                                  </div>
                                                  <div class="form-group">
                                                            <input name="cc" type="email" class="form-control" placeholder="Cc">
                                                  </div>
                                                  <div class="form-group">
                                                            <input name="bcc" type="email" class="form-control" placeholder="Bcc">
                                                  </div>
                                                  <div class="form-group">
                                                            <input name="subject" type="email" class="form-control" placeholder="Subject">
                                                  </div>
                                                  <div class="form-group">
                                                            <textarea name="message" id="email_message" class="form-control" placeholder="Message" style="height: 120px;"></textarea>
                                                  </div>
                                                  <div class="form-group">													<input type="file" name="attachment">
                                                  </div>
                                        </div>
                                        <div class="modal-footer">
                                                  <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-times"></i> Discard</button>
                                                  <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-envelope"></i> Send Message</button>
                                        </div>
                              </form>
                    </div>
          </div>
</div>
</div>
<!-- END COMPOSE MESSAGE -->
</div>
</div>
</div>
</div>
	<!-- END INBOX -->
</div>
</div>
@endsection

