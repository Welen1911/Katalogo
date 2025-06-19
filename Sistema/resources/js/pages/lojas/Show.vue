<script setup lang="ts">
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../../components/PlaceholderPattern.vue';
import LojaLayout from '@/layouts/LojaLayout.vue';

const props = defineProps<{
    loja: {
        id: number;
        nome: string;
        slug: string;
        contato: string;
        logo: string|null
    };
}>();

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: props.loja.nome,
        href: `lojas/${props.loja.slug}`,
    },
];
</script>

<template>
    <Head :title="props.loja.nome" />

    <LojaLayout :loja="props.loja" :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
            </div>
            <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
                <PlaceholderPattern />
            </div>
        </div>
    </LojaLayout>
</template>
