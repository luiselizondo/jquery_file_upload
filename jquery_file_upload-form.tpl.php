<!-- Redirect browsers with JavaScript disabled to the origin page -->
<noscript><input type="hidden" name="redirect" value="http://blueimp.github.com/jQuery-File-Upload/"></noscript>

<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <!-- The global progress information and the files table-->
  <div class="progress-container row" style="display: none;">
    <h4>Subiendo archivo. Por favor espere.</h4>
    <div class="progress">
      <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
      </div>
    </div>
  </div>

  <div class="row">
    <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
      <span class="glyphicon glyphicon-open"></span>
      <span>Agregar archivo...</span>
      <input type="file" name="files[]" multiple>
    </span>
    
    <a class="btn btn-default cancel" id="descartar">
      <span>Cancelar</span>
    </a>
  </div>
</div>
