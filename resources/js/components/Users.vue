<template>
        <!-- CONTENT -->
        <section id="content">
            <div class="page dashboard-page">
                <!--bradcome -->
                <div class="b-b mb-20">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="h3 m-0"> Utilizadores</h1>
                            <small class="text-muted"> Bem Vindo à CJA Seguros</small>
                        </div>
                        <div class="col-sm-6 col-xs-12" style="text-align:right">
                            <button @click="chamaModal()" class="btn btn-raised btn-success"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+Adicionar</font></font><div class="ripple-container"></div></button>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <table-user :users="users"></table-user>
                    </div>
                </div>
            </div>
        </section>
    <!-- Vendor JavaScripts -->
</template>
<script>
export default {
    props: ['user'],
    data(){
        return{
            users:[]
        }
    },
    methods:{
        getUsers(){
            let loader = Vue.$loading.show();
            axios.post('/api/getUsers', {})
            .then(response => {
                this.users = response.data;
                console.log(this.solicitacoes)
                loader.hide();
            })
            .catch(function (error) {
                console.log(error);
                loader.hide();
            });
        },
        chamaModal (){
            this.$emit('event-call-modaluser', false);
        },
    },
    mounted() {
        this.getUsers();
        console.log('Dashboard mounted')    
    }
}
      
</script>