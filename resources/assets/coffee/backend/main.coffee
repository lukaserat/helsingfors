window.Helsingfors =
  version: '0.0.1'
  escapeTags: (str) ->
    String(str).replace(/&/g, '&amp;').replace(/"/g, '&quot;').replace(/'/g, '&#39;').replace(/</g, '&lt;').replace />/g, '&gt;'


window.onload = ->
  btn = document.getElementById('uploadBtn')
  progressBar = document.getElementById('progressBar')
  progressOuter = document.getElementById('progressOuter')
  msgBox = document.getElementById('msgBox')
  uploader = new (ss.SimpleUpload)(
    button: btn
    url: 'file_upload.php'
    name: 'uploadfile'
    multipart: true
    hoverClass: 'hover'
    focusClass: 'focus'
    responseType: 'json'
    startXHR: ->
      progressOuter.style.display = 'block'
      # make progress bar visible
      @setProgressBar progressBar
      return
    onSubmit: ->
      msgBox.innerHTML = ''
      # empty the message box
      btn.innerHTML = 'Uploading...'
      # change button text to "Uploading..."
      return
    onComplete: (filename, response) ->
      btn.innerHTML = 'Choose Another File'
      progressOuter.style.display = 'none'
      # hide progress bar when upload is completed
      if !response
        msgBox.innerHTML = 'Unable to upload file'
        return
      if response.success == true
        msgBox.innerHTML = '<strong>' + Helsingfors.escapeTags(filename) + '</strong>' + ' successfully uploaded.'
      else
        if response.msg
          msgBox.innerHTML = Helsingfors.escapeTags(response.msg)
        else
          msgBox.innerHTML = 'An error occurred and the upload failed.'
      return
    onError: ->
      progressOuter.style.display = 'none'
      msgBox.innerHTML = 'Unable to upload file'
      return
  )
  return
