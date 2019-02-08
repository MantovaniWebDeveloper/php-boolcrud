<form action="http://localhost:8888/php-boolcrud/create/server.php" method="post">
  <div class="form-group">
    <input class="form-control"type="text" name="nome" value="nome">
  </div>
  <div class="form-group">
    <input class="form-control"type="text" name="lastname" value="lastname">
  </div>
  <div class="container">
    <div class="row">
        <div class='col-sm-6'>
            <div class="form-group">
                <div class='input-group date' id='datetimepicker2'>
                    <input type='text' class="form-control" />
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
        </div>
        
    </div>
</div>
  <div class="form-group">
    <input class="form-control"type="text" name="tipoDocumento" value="tipoDocumento">
  </div>
  <div class="form-group">
    <input class="form-control"type="text" name="numDocumento" value="numDocumento">
  </div>
  <button type="submit" name="button">invia</button>
</form>
