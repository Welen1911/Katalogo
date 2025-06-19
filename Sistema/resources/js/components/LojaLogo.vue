<script setup lang="ts">
import AppLogoIcon from '@/components/AppLogoIcon.vue';

const props = defineProps<{
    loja: {
        nome: string;
        slug: string;
        logo: string | null;
    };
}>();

</script>

<template>
    <div class="flex aspect-square size-8 items-center justify-center rounded-md bg-sidebar-primary text-sidebar-primary-foreground">
        <template v-if="props.loja.logo">
            <img :src="`/storage/${props.loja.logo}`" alt="Loja Logo" class="h-full w-full object-cover rounded-md" />
        </template>
        <template v-else>
            <AppLogoIcon class="size-5 fill-current text-white dark:text-black" />
        </template>
    </div>
    <div class="ml-1 grid flex-1 text-left text-sm">
        <span class="mb-0.5 truncate leading-tight font-semibold">{{ props.loja.nome }}</span>
    </div>
</template>
