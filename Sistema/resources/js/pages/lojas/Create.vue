<script setup lang="ts">
import AuthBase from '@/layouts/AuthLayout.vue';
import { Head, useForm } from '@inertiajs/vue3';
import Form from '@/components/ui/loja/Form.vue';

const props = defineProps<{
    categorias: Array<{ id: number; nome: string }>;
}>();
</script>

<template>
    <AuthBase title="Bem-vindo!" description="Vamos cadastrar sua loja">

        <Head title="Crie sua loja" />

        <Form :categorias="props.categorias" />
    </AuthBase>
</template>