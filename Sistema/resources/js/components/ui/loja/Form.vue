<script setup lang="ts">
import ImageInput from '@/components/ImageInput.vue';
import InputError from '@/components/InputError.vue';
import Input from '../input/Input.vue';
import Label from '../label/Label.vue';
import Button from '../button/Button.vue';
import { LoaderCircle } from 'lucide-vue-next';
import { router, useForm } from '@inertiajs/vue3';
import { cn } from '@/lib/utils';

const props = defineProps<{
    categorias: Array<{ id: number; nome: string }>;
    loja: {
        id: number;
        logo: string;
        nome: string;
        contato: string;
        created_at: string;
        updated_at: string;
    } | null;
}>();

const form = useForm({
    logo: '',
    nome: props.loja?.nome || '',
    contato: props.loja?.contato || '',
});

const submit = () => {
    if (props.loja) {
        console.log('Updating loja:', props.loja.id);
        router.post(route('lojas.update', props.loja.id), {
            _method: 'put',
            forceFormData: true,
            logo: form.logo,
            nome: form.nome,
            contato: form.contato,
        });
    } else {
        console.log('Creating new loja');
        form.post(route('lojas.store'));
    }
    console.log('Form submitted:', form);
};
</script>
<template>
    <form @submit.prevent="submit" enctype="multipart/form-data" class="flex flex-col gap-6">
        <div class="grid gap-6">
            <div class="grid gap-2">
                <Label for="logo">Logo</Label>
                <ImageInput id="logo" name="logo" required :tabindex="0" :model-value="form.logo"
                    @update:modelValue="value => form.logo = value" :image-url="props.loja?.logo ? `/storage/${props.loja?.logo}` : ''"
                    placeholder="Selecione uma imagem para a logo da loja" />
                <InputError :message="form.errors.logo" />
            </div>

            <div class="grid gap-2">
                <Label for="nome">Nome</Label>
                <Input id="nome" type="text" required autofocus :tabindex="1" autocomplete="nome" v-model="form.nome"
                    placeholder="" />
                <InputError :message="form.errors.nome" />
            </div>

            <div class="grid gap-2">
                <Label for="contato">Contato</Label>
                <Input id="contato" type="text" required autofocus :tabindex="1" autocomplete="contato" v-model="form.contato"
                    placeholder="" />
                <InputError :message="form.errors.contato" />
            </div>

            <Button type="submit" class="mt-4 w-full" :tabindex="4" :disabled="form.processing">
                <LoaderCircle v-if="form.processing" class="h-4 w-4 animate-spin" />
                Salvar
            </Button>
        </div>
    </form>
</template>