(function() {
  window.Helsingfors = {
    version: '0.0.1',
    escapeTags: function(str) {
      return String(str).replace(/&/g, '&amp;').replace(/"/g, '&quot;').replace(/'/g, '&#39;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
    }
  };

  window.onload = function() {
    var btn, msgBox, progressBar, progressOuter, uploader;
    btn = document.getElementById('uploadBtn');
    progressBar = document.getElementById('progressBar');
    progressOuter = document.getElementById('progressOuter');
    msgBox = document.getElementById('msgBox');
    uploader = new ss.SimpleUpload({
      button: btn,
      url: 'file_upload.php',
      name: 'uploadfile',
      multipart: true,
      hoverClass: 'hover',
      focusClass: 'focus',
      responseType: 'json',
      startXHR: function() {
        progressOuter.style.display = 'block';
        this.setProgressBar(progressBar);
      },
      onSubmit: function() {
        msgBox.innerHTML = '';
        btn.innerHTML = 'Uploading...';
      },
      onComplete: function(filename, response) {
        btn.innerHTML = 'Choose Another File';
        progressOuter.style.display = 'none';
        if (!response) {
          msgBox.innerHTML = 'Unable to upload file';
          return;
        }
        if (response.success === true) {
          msgBox.innerHTML = '<strong>' + Helsingfors.escapeTags(filename) + '</strong>' + ' successfully uploaded.';
        } else {
          if (response.msg) {
            msgBox.innerHTML = Helsingfors.escapeTags(response.msg);
          } else {
            msgBox.innerHTML = 'An error occurred and the upload failed.';
          }
        }
      },
      onError: function() {
        progressOuter.style.display = 'none';
        msgBox.innerHTML = 'Unable to upload file';
      }
    });
  };

}).call(this);

//# sourceMappingURL=main.js.map
