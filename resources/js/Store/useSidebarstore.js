import {ref} from 'vue'
import {defineStore} from 'pinia'
export const useSidebarStore = defineStore('sidebar', () => {
    const isOpen = ref(false)
    const toggleOpen = ()=>{
        isOpen.value = !isOpen.value
    }
    const close = ()=>{
        isOpen.value = false
    }

    const open = ()=>{
        isOpen.value = true
    }
    return { isOpen, toggleOpen ,open ,close }
  })