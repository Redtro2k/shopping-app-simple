<template>
    <div class="bg-white">
    <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Products</h2>

      <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">
        <div v-for="product in products.data" :key="product.id" class="group relative bg-white border border-gray-200 rounded-lg flex flex-col overflow-hidden">
          <div class="aspect-w-3 aspect-h-4 bg-gray-200 group-hover:opacity-75 sm:aspect-none sm:h-96">
            <img :src="product.imageSrc" :alt="product.imageAlt" class="w-full h-full object-center object-cover sm:w-full sm:h-full" />
          </div>
          <div class="flex-1 p-4 space-y-2 flex flex-col">
            <h3 class="text-sm font-medium text-gray-900">
              <Link :href="`products/${product.href}`">
                <span aria-hidden="true" class="absolute inset-0" />
                {{ product.name }}
              </Link>
            </h3>
            <p class="text-sm text-gray-500">{{ sliceDescription(product.description) }}</p>
            <div class="flex-1 flex flex-col justify-end">
              <p class="text-sm italic text-gray-500">{{ product.options }}</p>
              <p class="text-base font-medium text-gray-900">{{ product.price }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script setup>
import {Link } from '@inertiajs/inertia-vue3'
    defineProps({
        products: Object
    })
    const sliceDescription = (value) => {
        return value.substring(0, 50).concat('...')
    }
</script>
