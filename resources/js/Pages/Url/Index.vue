
<script>
    //import layout
    import LayoutApp from '../../Layouts/App.vue'
    
    //import Link dari inertia
    import { Link } from '@inertiajs/inertia-vue3';

    export default {
        //layout
        layout: LayoutApp,
        //register Link di component
        components: {
            Link
        },
        //props
        props: {
            urls: Array // <- nama props yang dibuat di controller saat parsing data
        }
    }
</script>

<style>
</style>

<template>
    <div class="mt-5">
        <!-- flash message -->
        <div v-if="$page.props.flash.message" class="alert alert-success" role="alert">
            {{ $page.props.flash.message }}
        </div>
        <!-- flash message -->
        <div class="mb-3">
            <Link href="/urls/create" class="btn btn-md btn-primary">TAMBAH DATA</Link>
        </div>
        <div class="card border-0 rounded shadow-sm">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Link</th>
                            <th scope="col">Original Url</th>
                            <th scope="col">ACTIONS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="url in urls" :key="url.id">
                            <td>https://url.test/{{ url.hash }}</td>
                            <td>{{ url.original_url }}</td>
                            <td class="text-center">
                                <Link :href="`/urls/${url.id}/edit`" class="btn btn-sm btn-primary me-2">EDIT</Link>
                             </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>
