@extends('admin.inc.admin')

@section('content')

{{-- add new employee modal start --}}
<div class="modal fade" id="addEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Novo Artigo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="add_employee_form" enctype="multipart/form-data">
        @csrf
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="title">Titulo</label>
              <input type="text" name="title" class="form-control" placeholder="First Name" required>
            </div>
          </div>
          <div class="row">
            <div class="col-lg">
              <label for="description">Descrição</label>
              <textarea name="description" class="form-control" placeholder="Last Name" required></textarea>
            </div>
          </div>
          <div class="my-2">
            <label for="image_path">Capa</label>
            <input type="file" name="image_path" class="form-control" required>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" id="add_employee_btn" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- add new employee modal end --}}

{{-- edit employee modal start --}}
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel"
  data-bs-backdrop="static" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alterar Artigo</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="#" method="POST" id="edit_employee_form" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="emp_id" id="emp_id">
        <input type="hidden" name="emp_image_path" id="emp_image_path">
        <div class="modal-body p-4 bg-light">
          <div class="row">
            <div class="col-lg">
              <label for="title">Titulo</label>
              <input type="text" name="title" id="title" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="col-lg">
              <label for="description">Descrição</label>
              <textarea name="description" id="description" class="form-control"  required></textarea>
            </div>
          </div>
          <div class="my-2">
            <label for="image_path">Select image_path</label>
            <input type="file" name="image_path" class="form-control">
          </div>
          <div class="mt-2" id="image_path">

          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" id="edit_employee_btn" class="btn btn-success">Atualizar</button>
        </div>
      </form>
    </div>
  </div>
</div>
{{-- edit employee modal end --}}

<div class="container">
  <div class="row my-5">
    <div class="col-lg-12">
      <div class="card shadow">
        <div class="card-header bg-info d-flex justify-content-between align-items-center">
          <h3 class="text-light">Meus Artigos</h3>
          <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#addEmployeeModal"><i
              class="bi-plus-circle me-2"></i>Adicionar novo</button>
        </div>
        <div class="card-body" id="show_all_employees">
          <h1 class="text-center text-secondary my-5">Carregando...</h1>
        </div>
      </div>
    </div>
  </div>
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/js/bootstrap.bundle.min.js'></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.10.25/datatables.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  $(function() {

    // add new employee ajax request
    $("#add_employee_form").submit(function(e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#add_employee_btn").text('Adicionando...');
      $.ajax({
        url: '{{ route('store') }}',
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(response) {
          if (response.status == 200) {
            Swal.fire(
              'Adicionado!',
              'Artigo adicionado com sucesso!',
              'success'
            )
            fetchAllEmployees();
          }
          $("#add_employee_btn").text('Adicionar');
          $("#add_employee_form")[0].reset();
          $("#addEmployeeModal").modal('hide');
        }
      });
    });

    // edit employee ajax request
    $(document).on('click', '.editIcon', function(e) {
      e.preventDefault();
      let id = $(this).attr('id');
      $.ajax({
        url: '{{ route('edit') }}',
        method: 'get',
        data: {
          id: id,
          _token: '{{ csrf_token() }}'
        },
        success: function(response) {
          $("#title").val(response.title);
          $("#description").val(response.description);
          $("#image_path").html(
            `<img src="storage/images/${response.image_path}" width="100" class="img-fluid img-thumbnail">`);
          $("#emp_id").val(response.id);
          $("#emp_image_path").val(response.image_path);
        }
      });
    });

    // update employee ajax request
    $("#edit_employee_form").submit(function(e) {
      e.preventDefault();
      const fd = new FormData(this);
      $("#edit_employee_btn").text('Atualizando...');
      $.ajax({
        url: '{{ route('update') }}',
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(response) {
          if (response.status == 200) {
            Swal.fire(
              'Atualizado!',
              'Modificado com sucesso',
              'success'
            )
            fetchAllEmployees();
          }
          $("#edit_employee_btn").text('Atualizado com sucesso');
          $("#edit_employee_form")[0].reset();
          $("#editEmployeeModal").modal('hide');
        }
      });
    });

    // delete employee ajax request
    $(document).on('click', '.deleteIcon', function(e) {
        e.preventDefault();
        let id = $(this).attr('id');
        let csrf = '{{ csrf_token() }}';
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('delete') }}',
              method: 'delete',
              data: {
                id: id,
                _token: csrf
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                fetchAllEmployees();
              }
            });
          }
        })
      });
    // fetch all employees ajax request
    fetchAllEmployees();

    function fetchAllEmployees() {
      $.ajax({
        url: '{{ route('fetchAll') }}',
        method: 'get',
        success: function(response) {
          $("#show_all_employees").html(response);
          $("table").DataTable({
            order: [0, 'desc']
          });
        }
      });
    }
  });
</script>

@endsection