<template>

    <Header/>
    <!-- section of product list -->
    <product-list :products="products"/>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <!-- pagination -->
            <div class="pt-4">
                <Paginate :links="products.links"
                :from="products.from"
                :to="products.to"
                :result="products.total"
                :responsiveNext="products.next_page_url"
                :responsivePrevious="products.first_page_url"/>
            </div>
        </div>
    </div>

    <Footer/>
</template>

<script setup>
import ProductList from '@/Shared/ProductList.vue'
import Paginate from '@/Shared/Paginate.vue'
import Footer from '@/Shared/Footer.vue'
import Header from '@/Shared/Header.vue';

defineProps({
    products: Object
})
</script>
