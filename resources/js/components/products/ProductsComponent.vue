<template>
<section>
    <material-transitiongroup tag="div" 
    class="row">
        <productcard-component  v-bind:key="product.id" :data-index="index" v-for="product in products" :product="product"></productcard-component>
       
    </material-transitiongroup>
    
</section>
</template>

<script>
export default {
    data(){
        return{
            name: 'Products Component',
            products: [
                
            ],
            endpoint: "/productos&ajax=1"
        }
    },
    created(){
        this.fetchProducts();
    },
    methods: {
        fetchProducts(){
            axios.get(this.endpoint).then((response)=> {
                this.products = response.data.data;
            });
        }
        
    }
}
</script>