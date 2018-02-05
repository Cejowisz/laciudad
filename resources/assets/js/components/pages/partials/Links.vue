<template>
    <div>
        <li><a :href="about">About</a></li>
        <li><a :href="blog">Blog</a></li>
        <li><a :href="gallery">Gallery</a></li>
        <li><a :href="how">How It Works</a></li>
        <li><a :href="contact">Contact</a></li>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                about: 'about',
                blog: 'blog',
                gallery: 'gallery',
                how: 'how',
                contact: 'contact'
            }
        }
    }
</script>

