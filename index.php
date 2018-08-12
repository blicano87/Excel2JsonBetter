<!doctype html>
<html>

<head>
  <title>Excel to JSON converter</title>
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script> -->
  <script src="js/blockUI.min.js"></script>
  <script src="js/xlsx.full.min.js"></script>
  <script src="js/converter.js"></script>
</head>

<body>
  <section class="wrapper col-md-12">
    <div class="row col-md-12">
      <label>Select excel file</label>
      <input type="file" id="file">
    </div>

    <div class="row col-md-12">
      <label>Select worksheet</label>
      <input type="text" id="worksheet-number" class="form-control" value="1">
    </div>

    <div class="row col-md-12">
      <button onclick="uploadFile(this)" class="btn btn-primary">Convert</button>
    </div>  

    <div class="row col-md-12">
      <div id="code"></div>
    </div>
  </section>
  <script>console.log(<?php echo '"'.'Debug Objects: wwww'.'"'; ?>);</script>
  <script>
    $(function () {
      $(document).ajaxStart(function () {
            $.blockUI(
              { message: '<h1><img src="images/ajax-loader.gif" /> Espere por favor...</h1>' },
              {
                css: {
                  border: 'none',
                  baseZ: 2000,
                  padding: '15px',
                  backgroundColor: '#000',
                  '-webkit-border-radius': '10px',
                  '-moz-border-radius': '10px',
                  opacity: .5,
                  color: '#fff'
                }
              }
            );
        });

        // $(document).ajaxComplete(function () {
        //     $.unblockUI();
        // });

        $(document).ajaxStop(function () {
            $.unblockUI();
        });

        $.ajaxSetup({ cache: false });
      });
  </script>
</body>

</html>