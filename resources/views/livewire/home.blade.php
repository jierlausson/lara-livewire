<div>
  <div class="container mt-3">
    <div class="row justify-content-center">
      <div class="col-8 d-flex flex-wrap flex-column">
        <div class="input-group">
          <input wire:model="username" type="text" class="form-control" placeholder="Username github">
          <div class="input-group-sppend">
            <button wire:click="getDataGithub" class="btn btn-outline-primary" type="button">
              Buscar
            </button>
          </div>
        </div>
        <div class="mt-3">
          @if ( $profile)
            <div class="card-3 shadow">
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="{{ $profile['avatar_url'] }}" alt="{{ $profile['name'] }}" class="card-img">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"> {{ $profile['login'] }}</h5>
                    <p>{{ $profile['bio'] }}</p>
                    <a href="{{ $profile['html_url'] }}" target="_blank">Ir para o perfil</a>
                  </div>
                </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
</div>
