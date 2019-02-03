<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-primary"><h5>Tweet numbers</h5></div>

                    <div class="card-body">
                        <div class="row justify-content-center">
                            <div class="col-md-6">
                                <label for="">Laravel: </label>
                                <span class="text-danger">{{laravel}}</span>
                            </div>
                            <div class="col-md-6">
                                <label for="">Vue.js: </label>
                                <span class="text-danger">{{vue}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
label {
    font-size: 20px;
    color: #000;
}
span{
    font-size: 20px;
}
</style>

<script>
    export default {
        data() {
            return {
                laravel: "",
                vue: ""
            }
        },
        created() {
            this.getCount();
            setInterval(this.getCount, 1000);
        },
        methods: {
            getCount() {
                let base_url = document.getElementById('base_url').value;
                let uri = base_url+'api/steps';
                this.axios.get(uri).then(response => {
                    this.laravel = response.data.laravel;
                    console.log(this.laravel);
                    this.vue = response.data.vue;
                    console.log(this.vue);
                })
            }
        }
    }
</script>