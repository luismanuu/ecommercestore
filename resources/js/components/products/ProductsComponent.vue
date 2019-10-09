<template>
<section>
    <div class="row">
        <productcard-component  v-bind:key="product.card" v-for="product in products" :product="product"></productcard-component>
       
    </div>
    
</section>
</template>

<script>
export default {
    data(){
        return{
            name: 'Products Component',
            products: [
                {title: 'Curso Ruby', price: 200, description: 'descripcion'},
                {title: 'Curso Laravel', price: 300, description: 'description'}
            ]
        }
    }
}
</script>