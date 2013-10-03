


<!-- Redirect browsers with JavaScript disabled to the origin page -->
<noscript><input type="hidden" name="redirect" value="http://blueimp.github.com/jQuery-File-Upload/"></noscript>
<!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
<div class="row fileupload-buttonbar">
  <div class="span7">
    <!-- The fileinput-button span is used to style the file input field as button -->
    <span class="btn btn-success fileinput-button">
      <i class="icon-plus icon-white"></i>
      <span>Add files...</span>
      <input type="file" name="files[]" multiple>
    </span>
    <button type="submit" class="btn btn-primary start">
      <i class="icon-upload icon-white"></i>
      <span>Start upload</span>
    </button>
    <button type="reset" class="btn btn-warning cancel">
      <i class="icon-ban-circle icon-white"></i>
      <span>Cancel upload</span>
    </button>
    <button type="button" class="btn btn-danger delete">
      <i class="icon-trash icon-white"></i>
      <span>Delete</span>
    </button>
    <input class="toggle" type="checkbox">
  </div>
  <!-- The global progress information -->
  <div class="span5 fileupload-progress">
    <!-- The global progress bar -->
    <div id="progress" class="progress progress-success progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
      <div id="progress-bar" class="bar" style="width:0%;"></div>
    </div>
    <!-- The extended global progress information -->
    <div class="progress-extended">&nbsp;</div>
  </div>
</div>
<!-- The loading indicator is shown during file processing -->
<div class="fileupload-loading"></div>
<br>
<!-- The table listing the files available for upload/download -->
<table role="presentation" class="table table-striped"><tbody class="files" data-toggle="modal-gallery" data-target="#modal-gallery"></tbody></table>
