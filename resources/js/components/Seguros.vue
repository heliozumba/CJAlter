<template>
  <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-cyan">
              <strong>Solicitações</strong>
            </h3>
          </div>
          <div class="boxs-body">
            <div v-show=confirmation id="alert_confirmation" class="alert alert-success alert alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
              <h4 class="alert-heading">A Sua Solicitação foi reencaminhada para Análise!</h4>
              <p>Os nossos Mediadores terão o prazer de atendê-la o mais brevemente possível. Confira no seu email o Recibo do seu seguro</p>
              <hr>
              <p class="mb-0 text-center"> CJA Seguros</p>
          </div>
            <div class="form-group">
              <label for="filter" style="padding-top: 5px">Procurar:</label>
              <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
            <table
              id="searchTextResults"
              data-filter="#filter"
              data-page-size="5"
              class="footable table table-custom"
            >
              <thead class="thead-dark">
                <tr>
                  <th>#</th>
                  <th>ID</th>
                  <th>Modalidade</th>
                  <th>Seguradora</th>
                  <th>Mediador</th>
                  <th>Prazo</th>
                  <th>Opções</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>100</td>
                  <td>Viagem</td>
                  <td>Nossa Seguros</td>
                  <td>Juca do Amaral</td>
                  <td>10-02-2020</td>
                  <td class="td-actions text-center">
                    <button
                      type="button"
                      rel="tooltip"
                      title="Renovar"
                      class="btn btn-info btn-simple btn-table-option"
                    >
                      <i class="fa fa-download"></i>
                    </button>
                    <button
                      type="button"
                      rel="tooltip"
                      title="Estornar"
                      class="btn btn-danger btn-simple btn-table-option"
                    >
                      <i class="fa fa-envelope"></i>
                    </button>
                  </td>
                </tr>
              </tbody>
              <tfoot class="hide-if-no-paging">
                <tr>
                  <td colspan="5" class="text-right">
                    <ul class="pagination"></ul>
                  </td>
                </tr>
              </tfoot>
            </table>
          </div>
          <button class="btn btn-success" @click="chamaSelect()">Simular Seguro</button>
          <select-component></select-component>
          <travel-form :users='user' @transaction-confirmed="alertClient()"></travel-form>
        </section>
      </div>
  </div>
</template>
<script>
export default {
  props: ["user"],
  data() {
    return {
      confirmation:false
    };
  },
  mounted() {},
  methods: {
    chamaSelect() {
      $("#select_seguro")
        .modal("show");
    },
    alertClient(){
      console.log("entrei");
      this.confirmation = true;
      $("#alert_confirmation").alert();
    }
  }
};
</script>