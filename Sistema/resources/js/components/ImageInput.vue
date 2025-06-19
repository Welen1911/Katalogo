<script setup>
import { ref } from 'vue'
import { Button } from '@/components/ui/button'
import { Avatar, AvatarFallback, AvatarImage } from '@/components/ui/avatar'
import { UploadCloud } from 'lucide-vue-next'

const props = defineProps({
    modelValue: {
        type: String,
        default: null
    },
    imageUrl: {
        type: String,
        default: null
    }
});

const emit = defineEmits(['update:modelValue'])

const imageUrl = ref( props.imageUrl || null)
const fileInput = ref(null)

const triggerFileInput = () => {
    fileInput.value.click()
}

const handleFileChange = (event) => {
    const file = event.target.files[0]
    if (file) {
        imageUrl.value = URL.createObjectURL(file)
    }

    emit('update:modelValue', file);
}
</script>

<template>
    <div class="flex flex-col items-center space-y-4">
        <input type="file" accept="image/*" ref="fileInput" @change="handleFileChange" class="hidden" />

        <Avatar class="w-24 h-24 cursor-pointer hover:opacity-80 transition" @click="triggerFileInput">
            <AvatarImage :src="imageUrl || 'https://ui-avatars.com/api/?name=User'" />
            <AvatarFallback>
                <UploadCloud class="w-6 h-6 text-gray-500" />
            </AvatarFallback>
        </Avatar>

        <Button variant="outline" type="button" @click="triggerFileInput">
            Selecionar Imagem
        </Button>
    </div>
</template>