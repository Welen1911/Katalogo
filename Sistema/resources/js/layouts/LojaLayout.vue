<script setup lang="ts">
import AppLayout from '@/layouts/app/AppHeaderLayout.vue';
import type { BreadcrumbItemType } from '@/types';
import LojaHeaderLayout from './app/LojaHeaderLayout.vue';

interface Props {
    breadcrumbs?: BreadcrumbItemType[];
    loja: {
        nome: string;
        slug: string;
        logo: string | null;
    };
}

withDefaults(defineProps<Props>(), {
    breadcrumbs: () => [],
    loja: {
        nome: '',
        slug: '',
        logo: null,
    },
});
</script>

<template>
    <LojaHeaderLayout :loja="loja" :breadcrumbs="breadcrumbs">
        <slot />
    </LojaHeaderLayout>
</template>
