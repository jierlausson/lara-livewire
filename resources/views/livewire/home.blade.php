<div>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-8 d-flex flex-wrap flex-column">
        <div class="input-group">
          <input  wire:model="username"
                  wire:focusout="getDataGithub"
                  wire:keydown.enter="getDataGithub"
                  type="text" class="form-control"
                  placeholder="Username github">
          <div class="input-group-append">
            <button wire:loading.attr="disable"
                    wire:click="getDataGithub"
                    class="btn btn-outline-primary"
                    type="button"
                    @if ($username == '')
                      disabled
                    @endif>
              <span wire:loading wire:target="getDataGithub" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
              Buscar
            </button>
          </div>
        </div>
        @if ($errors->has('username'))
          <span>{{ $errors->first('username') }}</span>
          {{ $profile = '' }}{{ $not = '' }}
        @endif
        @if ( $profile)
          <div class="card mt-3 shadow">
            <div class="row no-gutters">
              <div class="col-md-4">
                <img src="{{ $profile['avatar_url'] }}" alt="{{ $profile['name'] }}" class="card-img m-2">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title"> {{ ucfirst($profile['login']) }}</h5>
                  <p>{{ $profile['bio'] }}</p>
                  <div class="card-text">
                    <a href="{{ $profile['html_url'] }}" target="_blank">Ir para o perfil</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endif
        @if ($not)
          <h3 class="d-flex justify-content-center mt-3">{{ $not }}</h3>
        @endif
      </div>
    </div>
  </div>
</div>
