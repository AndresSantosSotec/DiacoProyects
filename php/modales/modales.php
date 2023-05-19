<?php ?>
<div class="modal fade" id="bcs_perm">
  <div class="modal-dialog modal-xl modal-dialog-centered">
  <div class="modal-content">
    <!-- Modal Header -->
    <div class="modal-header">
        <h4 class="modal-title">BUSQUEDA DE USUARIOS</h4>
        <button type="button" class="close" data-bs-dismiss="modal"> <i class="fa-solid fa-xmark"></i> </button>
    </div>
    <!-- Modal body -->
    <div class="modal-body">
      <table id="Tb_BuscUso" class="table table-striped" style="width:88%" >
        <thead>
          <tr>
            <th>No.</th>
            <th>Nombre Completo</th>
            <th>Dpi</th>
            <th>Usuario</th>
            <th>Puesto</th>
            <th>Id Agencia</th>
						<th>Estado</th>
            <th>Email</th>
            <th>FechaExp</th>
            <th>Opciones</th>
          </tr>
        </thead>
        <tbody id="categoria_tb">
            <?php
            Usu();
            ?>
        </tbody>
      </table>
    </div>
    <!-- Modal footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
    </div>
  </div>
  </div>
</div>