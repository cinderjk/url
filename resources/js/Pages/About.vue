
<script>
    //import layout
    import LayoutApp from '../Layouts/App.vue'
    
    //import Link dari inertia
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        //layout
        layout: LayoutApp,
        //register Link di component
        components: {
            Link
        },
    }
</script>

<template>
    <div class="mt-5">
        <!-- flash message -->
        <div v-if="$page.props.flash.message" class="alert alert-success" role="alert">
            {{ $page.props.flash.message }}
        </div>
        <!-- flash message -->
        <div class="mb-3">
            About Us
        </div>
        <div class="card border-0 rounded shadow-sm">
            <div class="card-body">
                <h1>About us</h1>
                <p>asjdghasgdhjagsdhjgashjdgahjsgdhjagsdhjagshjd.</p>
            </div>
        </div>
    </div>
</template>
