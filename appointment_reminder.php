<!-- Appointment Reminder Pop-up -->
<div id="appointmentReminderModal" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Appointment Reminder</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Don't forget your appointment! Please make sure to arrive on time.</p>
      </div>
    </div>
  </div>
</div>

<!-- JavaScript to trigger the Appointment Reminder Pop-up -->
<script>
  $(document).ready(function(){
    $('#appointmentReminderModal').modal('show');
  });
</script>
