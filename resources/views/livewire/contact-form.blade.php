<div class="form4 top">
  <div class="container">
    <div class="row d-flex justfy-content-center">
      <div class="col-md-7">
        <div class="form-bg">
          <form wire:submit.prevent="submitForm" class="form">
            <div class="form-group">
              <label class="sr-only">Name</label>
              <input wire:model='name'
                type="text"
                name="name"
                class="form-control"
                placeholder="Seu nome">
              @error('name')<span class="error">{{ $message }}</span> @enderror>
            </div>
            <div class="form-group">
              <label class="sr-only">Email</label>
              <input wire:model='email'
                type="email"
                name="email"
                class="form-control"
                placeholder="Email">
              @error('email')<span class="error">{{ $message }}</span> @enderror>
            </div>
            <div class="form-group">
              <label class="sr-only">Mensagem</label>
              <textarea wire:model='message'
                name="message"
                class="form-control"
                rows="7"
                placeholder="Escreva a mensagem">
              </textarea>
            </div>
            @error('message')<span class="error">{{ $message }}</span> @enderror>
            <button
              wire:loading.attr="disabled"
              wire:target="submitForm"
              type="submit"
              class="btn text-center btn-blue">
              <span
                wire:loading
                wire:target="submitForm"
                class="spinner-border spinner-border-sm"
                role="status"
                aria-hidden="true"
              >
              </span>
              Enviar mensagem
            </button>

            @if ($successMessage)
            <div class="alert alert-success alert-dismissible" role="alert">
              <button
                wire:click="$set('successMessage', null)"
                type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Legal!</strong> {{ $successMessage }}
            </div>
            @endif
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
