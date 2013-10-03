function init_fileuploader(vars) {
  var types = vars.filetypes;
  var pattern = new RegExp("(\.|\/)(" + types + ")$");

  var added_files = new Array();
  
  jQuery('#jquery-file-upload-form').fileupload({
    sequentialUploads: true,
    acceptFileTypes: pattern,
    previewMaxWidth: 120,
    maxFileSize: vars.max_file_size,

    change: function(e, data) {
      console.log("Changed");
      jQuery.each(data.files, function(index, file) {
        added_files.push(index);
      });
    },
    
    fileuploadprogress: function(e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        console.log(progress);
        $('#progress-bar').css('width', progress + '%');
        
        if(progress == 100) {
          $('#progress-bar').css('width', '100%');
        }
    },
    /*
    progress: function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        console.log(progress);
        $('#progress-bar').css('width', progress + '%');
        
        if(progress == 100) {
          $('#progress-bar').css('width', '100%');
        }
    },
    */
    
    start: function(e, data) {
      console.log("Started");
      
      jQuery('.fileupload-progress').show();
      jQuery('.progress-success').show();
    },
    
    add: function (e, data) {
      console.log("Add");
      jQuery('button.cancel').trigger('click');
      jQuery('.progress-success').hide();
      data.submit();
    },
    
    always: function(e, data) {
      console.log("Always");
      $('#progress-bar').css('width', '100%');
      if(data.result) {    
        console.log(data.result);
      }
    },
    
    fail: function(e, data) {
      console.log("Error: " + data.errorThrown.message);
    }
  });
  
  
  
    

  // Load existing files:
  /*
  jQuery('#jquery-file-upload-form').each(function() {
    var that = this;
    jQuery.getJSON(this.action, function(result) {
      if (result && result.length) {
      console.log(result);
        $(that).fileupload('option', 'done')
                .call(that, null, {
          result: result
        });
      }
    });
  });
  */
}
