<!-- Medicine Dosage Reminder Pop-up -->
<div id="medicineReminderModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Medicine Dosage Reminder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>It's time to take your medicine! Please take your dosage at the right time.</p>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to trigger the Medicine Dosage Reminder Pop-up -->
<script>
  $(document).ready(function(){
    $('#medicineReminderModal').modal('show');
  });
</script>
