<!-- JS -->
<script src="./assets/js/jquery-3.6.1.min.js"></script>
<script src="./assets/js/bootstrap-5.2.3.bundle.min.js"></script>
<!-- CUSTOM JS -->
<script src="./assets/js/script.js"></script>

<!-- ionicon link -->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/colreorder/1.6.2/js/dataTables.colReorder.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.4.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/rowreorder/1.3.3/js/dataTables.rowReorder.min.js"></script>
<script src="https://cdn.datatables.net/scroller/2.1.1/js/dataTables.scroller.min.js"></script>
<script src="https://cdn.datatables.net/searchpanes/2.1.2/js/dataTables.searchPanes.min.js"></script>

<script>
   $(document).ready(function() {
      $('table').DataTable({
         searching:true,
         ordering:true,
         paging:true,
      });
   });
</script>
