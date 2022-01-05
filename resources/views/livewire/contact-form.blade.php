<div class="form4 top">
  <div class="container">
    <div class="row d-flex justfy-content-center">
      <div class="col-md-7">
        <div class="form-bg">
          <form class="form">
            <div class="form-group">
              <label class="sr-only">Name</label>
              <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Seu nome">
              <!-- vadation-->
            </div>
            <div class="form-group">
              <label class="sr-only">Email</label>
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Email">
              <!--validation-->
            </div>
            <div class="form-group">
              <label class="sr-only">Mensagem</label>
              <textarea
                name="message"
                class="form-control"
                rows="7"
                placeholder="Escreva a mensagem">
              </textarea>
            </div>
            <!--validation-->
            <button

              type="submit"
              class="btn btn-primary text-center">
              <span

                class="spinner-border spinner-border-sm"
                role="status"
                aria-hidden="true"
              >
              </span>
              Enviar mensagem
            </button>

            <!-- IF -->
            <div class="alert alert-success alert-dismissible" role="alert">
              <button

                type="button"
                class="close"
                data-dismiss="alert"
                aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>Legal!</strong> <!-- Custon Message -->
            </div>
            <!-- ENDIF -->
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
