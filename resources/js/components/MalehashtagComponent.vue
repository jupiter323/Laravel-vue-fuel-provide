<template>
    <div class="male-hashtag">
        <h1 class="text-center">#Laravel: {{laravel}}</h1>
        <div class="count" id="male-count">
            <ul>
                <li>1</li>
                <li>1</li>
                <li>1</li>
                <li>7</li>
                <li>7</li>
                <li>5</li>
                <li>1</li>
                <div class="clear"></div>
            </ul>
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
                laravel: ""
            }
        },
        created() {
            this.getCount();
            setInterval(this.getCount, 1000);
        },
        methods: {
            getCount() {
                let base_url = document.getElementById('base_url').value;
                let uri = base_url+'api/count_hastag1';
                this.axios.get(uri).then(response => {
                    this.laravel = response.data.laravel;
                })
            }
        }
    }
</script>