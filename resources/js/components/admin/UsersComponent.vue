<template>
    <div class="col-md-12 p-0">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Users</h4>
                <div class="card-title-button-group">
                    <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">add
                        user</a>
                </div>
            </div>

            <div class="card-body">
                <div v-for="user in users" :key="user.id">
                    {{user.name}} :: {{user.email}}
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'user-list',
        props: ['users'],
        data() {
            return {}
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
