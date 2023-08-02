<div class="card-body">
    <div class="modal fade" id="modal-default">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Cadastrar CPA</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="{{url('gerenciarcpa/create')}}">
              {{csrf_field()}}
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="card card-default">
                      <div class="card-header">
                        <h3 class="card-title">Bootstrap Duallistbox</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div class="form-group">
                              <label>Multiple</label>
                              <select multiple="multiple" id="bootstrap-duallistbox" name="bootstrap-duallistbox">
                                <option value="Option 1">Option 1</option>
                                <option value="Option 2">Option 2</option>
                                <option value="Option 3">Option 3</option>
                                <option value="Option 4">Option 4</option>
                                <option value="Option 5">Option 5</option>
                              </select>
                            </div>
                            <!-- /.form-group -->
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.card-body -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                <button type="submit" class="btn btn-primary toastrDefaultSuccess">Salvar</button>
              </div>
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
  </div>

  <!-- Adicione as importações necessárias antes do fechamento da tag body -->
  <script src="{{url('plugins/jquery/jquery.min.js')}}"></script>
  <script src="{{url('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{url('plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')}}"></script>

  <!-- Inicialize o plugin Duallistbox -->
  <script>
    $(document).ready(function() {
      $('#bootstrap-duallistbox').bootstrapDualListbox();
    });
  </script>
