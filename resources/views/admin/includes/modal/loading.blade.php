<!-- Modal -->
<div class="modal" id="loadingModal" tabindex="-1" role="dialog" aria-labelledby="loadingModalLabel" aria-hidden="true" style="display: block; background: rgba(0, 0, 0, 0.5);">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header" style="border-bottom: none;">
          <h5 class="modal-title" id="loadingModalLabel">Tunggu Sebentar...</h5>
        </div>
        <div class="modal-body">
          <!-- Spinner -->
          <div class="spinner-border text-primary" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>
        <!-- Remove footer if not needed for loading indicator -->
      </div>
    </div>
  </div>
  
  @push('styles')
  <style>
    #loadingModal{
      display: block; 
      background: rgba(0, 0, 0, 0.335);
    }
    #loadingModal .modal-content {
      border-radius: 0.5rem;
      box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5);
    }
    #loadingModal .modal-header {
      justify-content: center;
      background: #f8f9fa;
    }
    #loadingModal .modal-body {
      text-align: center;
    }
    /* If you add a footer, style it here */
  </style>
  
  @endpush
