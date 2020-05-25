<div class="modal fade" id="modal{{$questionaire->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Share Public Survey Link</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="copy shareable link" value="http://localhost/surveys/{{$questionaire->id}}-{{Str::slug($questionaire->title)}}" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append" onclick="copyToClipboard(event)" style="cursor: pointer">
                  <span class="input-group-text" id="basic-addon2" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Copy Link</span>
                </div>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal"><i class="fab fa-whatsapp"></i>
          </button>
          <button type="button" class="btn btn-primary"><i class="fab fa-facebook-f"></i></button>
        </div>
      </div>
    </div>
  </div>